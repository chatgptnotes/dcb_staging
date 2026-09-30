<?php
use App\Models\WPUsers;
use App\Models\Questions;
use App\Models\QuestionAnswerMain;
use App\Models\QuestionAnswers;
use App\Services\AssessmentResumeService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class AssessmentTransitionDiagnosisTest extends Tests\TestCase
{

    private const UID = 9294987;
    protected function setUp(): void {
        parent::setUp();
        $this->cleanup();
        config(['packages.funnel'=>'free_first']);
        $this->assertFalse(WPUsers::where('user_id',self::UID)->exists());
        $u=new WPUsers(); $u->user_id=self::UID; $u->email='transition-diagnosis@example.local'; $u->date_of_birth='1990-01-01'; $u->save();
        $this->withSession(['user_id'=>self::UID,'user_dob'=>'1990-01-01']);
    }
    private function cleanup(): void {
        $ids=QuestionAnswerMain::where('user_id',self::UID)->pluck('id');
        App\Models\BrainScores::whereIn('answer_main_id',$ids)->delete();
        QuestionAnswers::whereIn('answer_main_id',$ids)->delete();
        QuestionAnswerMain::where('user_id',self::UID)->delete();
        WPUsers::where('user_id',self::UID)->delete();
        App\Models\User::where('email','transition-diagnosis@example.local')->delete();
    }
    protected function tearDown(): void { $this->cleanup(); parent::tearDown(); }
    private function journey(int $lastQuestion = 25): array {
        $last=[];
        for($n=1;$n<=$lastQuestion;$n++) {
            $q=$this->get('/questions/q'.$n)->assertOk()->viewData('question');
            $last=['question_no'=>$n,'question_id'=>$q->id,'first_answer'=>$q->answer_1,'second_answer'=>$q->answer_2,'third_answer'=>$q->answer_3,'forth_answer'=>$q->answer_4];
            $this->post('/save-answers',$last)->assertRedirect($n===25 ? '/start-dimentaional-questions' : '/questions/q'.($n+1));
        }
        return $last;
    }
    public function test_fresh_adult_completes_25_and_reaches_12_question_section(): void {
        $this->journey();
        $attempt=QuestionAnswerMain::where('user_id',self::UID)->firstOrFail();
        $this->assertSame('complete',$attempt->status);
        $this->assertSame(25,QuestionAnswers::where('answer_main_id',$attempt->id)->count());
        $this->get('/start-dimentaional-questions')->assertOk()->assertSee('questions/d1');
        $this->get('/questions/d1')->assertOk()->assertViewIs('questions.dimention_question');
    }
    public function test_losing_attempt_session_after_24_answers_restarts_despite_saved_progress(): void {
        $this->journey(24);
        $attempt=QuestionAnswerMain::where('user_id',self::UID)->firstOrFail();
        $q=$this->get('/questions/q25')->assertOk()->viewData('question');
        session()->forget('answer_main_id');
        $this->post('/save-answers',['question_no'=>25,'question_id'=>$q->id,'first_answer'=>$q->answer_1,'second_answer'=>$q->answer_2,'third_answer'=>$q->answer_3,'forth_answer'=>$q->answer_4])->assertRedirect('/questions/q1');
        $this->get('/questions/q1')->assertOk()->assertViewIs('questions.question');
        $this->assertSame(24,QuestionAnswers::where('answer_main_id',$attempt->id)->count());
        $this->assertNull($attempt->fresh()->status);
    }
    public function test_logout_login_then_return_to_question25_restarts_with_24_saved_answers(): void {
        config(['app.auth_driver'=>'native','app.otp_enabled'=>false]);
        $u=new App\Models\User();
        $u->wp_user_id=self::UID; $u->email='transition-diagnosis@example.local';
        $u->username='transition_diagnosis'; $u->display_name='Diagnostic';
        $u->date_of_birth='1990-01-01'; $u->status='active'; $u->user_role='2';
        $u->password=Illuminate\Support\Facades\Hash::make('SyntheticDiagnostic#2026'); $u->save();
        $this->journey(24);
        $attempt=QuestionAnswerMain::where('user_id',self::UID)->firstOrFail();
        $this->post('/logout')->assertRedirect('/sign-in')->assertSessionMissing('answer_main_id');
        $this->post('/sign-in',['user_name'=>$u->email,'password'=>'SyntheticDiagnostic#2026'])->assertRedirect('/')->assertSessionMissing('answer_main_id');
        $q=$this->get('/questions/q25')->assertOk()->viewData('question');
        $this->post('/save-answers',['question_no'=>25,'question_id'=>$q->id,'first_answer'=>$q->answer_1,'second_answer'=>$q->answer_2,'third_answer'=>$q->answer_3,'forth_answer'=>$q->answer_4])->assertRedirect('/questions/q1');
        $this->get('/questions/q1')->assertOk()->assertViewIs('questions.question');
        $this->assertSame(24,QuestionAnswers::where('answer_main_id',$attempt->id)->count());
        $this->assertNull($attempt->fresh()->status);
    }
    public function test_repeated_final_submission_redirects_to_q1(): void {
        $last=$this->journey();
        $this->post('/save-answers',$last)->assertRedirect('/questions/q1');
        $this->get('/questions/q1')->assertRedirect('/dashboard');
        $this->get('/dashboard')->assertRedirect('/questions/d1');
    }
}
