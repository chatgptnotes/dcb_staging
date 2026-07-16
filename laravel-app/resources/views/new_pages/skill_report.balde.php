@include('layouts.dashboard-header')

<?php
use App\Models\WPUsers;
use App\Models\SkillBrainScores;
use App\Models\SkillTestAnswersMain;

$attempt = SkillTestAnswersMain::where("user_id", session('user_id'))->where('status', 'complete')->latest()->first();
// $skill_tests = SkillTestAnswersMain::where("user_id", session('user_id'))->where('status', 'complete')->get();
$introvert_extrovert = WPUsers::where('user_id',session('user_id'))->value('introverted_extroverted');
?>

<style>
.report-heading {
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 700;
    padding: 0;
    margin: 0;
}

.report-normal-text {
    padding: 0;
    margin-bottom: 0;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-size: 16px;
    font-weight: 400;
}

.report-opertunities-card {
    padding: 15px 35px 15px 15px;
    border-radius: 15px;
    border: 2px solid #000;
    margin-bottom: 15px;
    position: relative;
    margin-right: 15px;
}

.report-opertunities-card .title {
    font-size: 22px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}

.report-opertunities-card .short-description {
    font-size: 16px;
    color: #000000;
    font-family: "Maven Pro", Sans-serif;
    font-weight: 400;
    padding: 0;
    margin: 0;
}

.bg-orange {
    background: #f1935d;
}

.bg-yellow {
    background: #f6c94c;
}

.bg-blue {
    background: #9ae4e3;
}

.bg-green {
    background: #84d6a5;
}

.lock-icon {
    border-radius: 50%;
    padding: 7px;
    background: #000;
    color: #fff;
    height: 12px;
    width: 12px;
    position: absolute;
    right: -15px;
    top: 35%;
}

.report-progress-bar .progress {
    color: #000;
}

.report-progress-bar .progress-bar {
    color: #000;
}

.report_modal .modal-header {
    border: none;
}

.report_modal .modal-body {
    padding: 0rem;
}

.report_modal .modal-content {
    border: 2px solid #000;
    border-radius: 15px;
}

.report_modal .modal-body {
    padding: 25px 25px 25px 25px;
}

.report_modal .box-data {
    background-color: #fff;
    border: 1px solid #000;
    text-align: center;
}

.report_modal .box-data p {
    color: #000;
}

.report_modal .box-data h3 {
    color: #000;
}

.report_modal .modal-dialog {
    margin-top: 100px;
    margin-bottom: 70px;
}

.square-progress .step {
    background: linear-gradient(342deg, rgba(128, 125, 125, 1) 0%, rgba(0, 0, 0, 1) 95%);
    border: 1px solid #626060;
    height: 25px;
    width: 50px;
    transform: skewX(-20deg);
    display: flex;
    align-items: center;
    justify-content: center;
}

.square-progress .step.filled {
    background: #f6c94c;

}

.brain-img-top {
    width: 100px !important;
    height: auto !important;
}

.custom-button {
    background-color: #e28d5c;
    color: #000;
    font-weight: bold;
    font-size: 18px;
    padding: 12px 48px;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    text-align: center;
}


.centered-container {
    padding-top: 70px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 90vh;
    text-align: center;
}

/* Heading styling */
.centered-container h3 {
    color: black;
    font-weight: 600;
    margin-bottom: 30px;
}

.centered-container img {
    margin-top: 30px;
    width: 380px;
    height: auto;
}

@media screen and (max-width: 1024px) {
    .side-img-desktop {
        width: 100% !important;
        height: auto !important;
    }

    .side-img-desktop2 {
        width: 50% !important;
        height: auto !important;
    }

    .centered-container {
        padding-top: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 60vh;
        text-align: center;
    }
}

@media (min-width: 780px) and (max-width: 2800px) {

    .dashboard-page-content {
        min-height: 100vh;
        padding-top: 120px;
        padding-left: 0px;
        padding-bottom: 0px;
        margin-left: 20px;
    }

    .middle-content {
        margin-left: 20px;
    }

}

@media screen and (min-width: 1025px) {

    .report-opertunities-card .title {
        min-height: 80px !important;
        font-size: 22px;
        color: #000000;
        font-family: "Maven Pro", Sans-serif;
        font-weight: 400;
        padding: 0;
        margin: 0;
    }

    .side-img-desktop {
        width: 60% !important;
        height: auto !important;
    }

    .side-img-desktop2 {
        width: 30% !important;
        height: auto !important;
    }

    .desktop-img-respon {
        display: flex;
        justify-content: center;
        align-items: center;
    }
}

@media screen and (max-width: 400px) {
    .centered-container {
        padding-top: 70px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 90vh;
        text-align: center;
    }

}
</style>

<?php
 
$brain_score = SkillBrainScores::where("skill_test_answer_main_id", $attempt->id)->first(); 
$brain_profile_id = WPUsers::where("user_id", session('user_id'))->value('skill_brain_profile_id');
$dob = session('user_dob'); 
$age = \Carbon\Carbon::parse($dob)->age;  
?>

<div class="centered-container">
    <h3>Skill Report</h3>
    <img src="{{ asset('assets/images/brainnew2.png') }}" alt="Brain Image">
</div>

<div class="row" style="justify-content: center;">
    <div class="col-5 col-lg-3">
        <div class="box-data p-4 bg-yellow" style="border:2px solid black;">
            <p class="mb-0" style="color:#000000 !important;"> Candid ( Analytical Brain) </p>
            <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->l1_score}}%</h3>
        </div>
    </div>
    <div class="col-5 col-lg-3">
        <div class="box-data p-4 bg-orange" style="border:2px solid black;">
            <p class="mb-0" style="color:#000000 !important;">Fastidious ( Practical Brain)</p>
            <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->l2_score}}%</h3>
        </div>
    </div>
</div>
<div class="row mt-3" style="justify-content: center;">
    <div class="col-5 col-lg-3">
        <div class="box-data p-4 bg-blue" style="border:2px solid black;">
            <p class="mb-0" style="color:#000000 !important;">Maverick ( Innovative Brain )</p>
            <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->r1_score}}%</h3>
        </div>
    </div>
    <div class="col-5 col-lg-3">
        <div class="box-data p-4 bg-green" style="border:2px solid black;">
            <p class="mb-0" style="color:#000000 !important;">Affable ( Relational Brain)</p>
            <h3 class="mb-0" style="color:#000000 !important;">{{$brain_score->r2_score}}%</h3>
        </div>
    </div>

    <div class="dashboard-page-content pb-5">
        <div class=" p-3 w-100" style="padding-left: 40px !important;">

            <h2 class="report-heading col-lg-6">Your Brain’s Signature Skills.</h2>
            <p class="report-normal-text mt-4">
                Your skills and brain preferences are influenced by a combination of your natural inclinations,
                experiences, and the specific activities you engage in. Understanding how these two aspects
                differ can provide insights into your strengths, areas for growth, and how you process
                information.
            </p>

            <h2 class="report-heading mt-5 col-lg-6">Skills: What You Can Do</h2>
            <p class="report-normal-text mt-4">
                Skills refer to the abilities you've acquired through learning, practice, and experience. They are often
                task-specific and can be improved over time with effort and training. For example:
            </p>
            <p class="report-normal-text mt-4">
            <ul>
                <li style="padding-bottom: 5px;">
                    <strong>Technical Skills: </strong> Coding, writing, or playing a musical instrument.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Soft Skills: </strong> Communication, leadership, and problem-solving.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Creative Skills: </strong> Designing, painting, or storytelling.
                </li>
            </ul>
            </p>
            <h2 class="report-heading mt-3 col-lg-6">Key Features of Skills:</h2>
            <p class="report-normal-text mt-4">
            <ul>
                <li style="padding-bottom: 5px;">
                    <strong>Learned: </strong> Skills are not innate but developed through intentional practice.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Adaptable: </strong> You can learn new skills regardless of your brain preferences.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Measure of Expertise: </strong> Skills often indicate proficiency in a particular domain.
                </li>
            </ul>
            </p>


            <h2 class="report-heading mt-5 col-lg-6">Brain Preferences: How You Think</h2>
            <p class="report-normal-text mt-4">
                Brain preferences are the natural tendencies of your brain to process information in certain ways. They
                often align with the left-brain/right-brain framework:
            </p>
            <p class="report-normal-text mt-4">
            <ul>
                <li style="padding-bottom: 5px;">
                    <strong>Left-Brain Preferences: </strong> Logical, analytical, detail-oriented, and structured
                    thinking.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Right-Brain Preferences: </strong> Creative, intuitive, big-picture, and emotionally driven
                    thinking.
                </li>
            </ul>
            </p>
            <h2 class="report-heading mt-3 col-lg-6">Key Features of Brain Preferences:</h2>
            <p class="report-normal-text mt-4">
            <ul>
                <li style="padding-bottom: 5px;">
                    <strong>Innate Tendencies: </strong> Preferences are largely shaped by biology and early
                    development.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Influence Decision-Making: </strong> They affect how you approach problems and decisions.
                </li>
                <li style="padding-bottom: 5px;">
                    <strong>Non-Fixed: </strong> While preferences are natural, you can train your brain to strengthen
                    less dominant traits.
                </li>
            </ul>
            </p>
            <h2 class="report-heading mt-3 col-lg-6">How My Skills and Preferences Work Together</h2>
            <p class="report-normal-text mt-4">
            <ul>
                <li style="padding-bottom: 5px;">
                    My "skills" enable me to perform tasks like analyzing, generating, and explaining content
                    effectively.
                </li>
                <li style="padding-bottom: 5px;">
                    My "preferences," or architectural inclinations, help decide how to approach a task—whether with
                    analytical precision or creative exploration.
                </li>
            </ul>
            </p>

            <h2 class="report-heading mt-5 col-lg-6">The Importance of Whole-Brain Skills for People</h2>
            <p class="report-normal-text mt-4">
                The concept of "whole-brain skills" emphasizes the integration and balanced use of both hemispheres of
                the brain—each with unique capabilities. The left hemisphere is often associated with logical reasoning,
                analytical thinking, and verbal communication, while the right hemisphere is linked to creativity,
                emotional intelligence, and spatial awareness. Together, they form the foundation for holistic thinking
                and problem-solving. Developing whole-brain skills can significantly enhance an individual's ability to
                navigate life's complexities, both personally and professionally.
            </p>
            <p class="report-normal-text mt-4">
            <ol>
                <li style="padding-bottom: 5px;">
                    <strong>Enhanced Problem-Solving</strong>
                </li>
                <p>Whole-brain skills enable individuals to approach problems from multiple perspectives. The left
                    brain's analytical skills help dissect issues, while the right brain's creativity generates
                    innovative solutions. This combination fosters adaptability and more effective decision-making.</P>

                <li style="padding-bottom: 5px;">
                    <strong>Improved Emotional Intelligence</strong>
                </li>
                <p>Whole-brain functioning is crucial for understanding and managing emotions. The right brain helps in
                    recognizing emotional cues, empathy, and nonverbal communication, while the left brain assists in
                    articulating and analyzing those emotions. Together, they contribute to better interpersonal
                    relationships and leadership skills.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Boosted Creativity and Innovation</strong>
                </li>
                <p>Balancing logic with creativity is essential for innovation. Whole-brain thinking encourages
                    individuals to explore unconventional ideas while grounding them in practical frameworks. This is
                    particularly valuable in fields requiring both creativity and precision, such as engineering,
                    design, and entrepreneurship.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Strengthened Learning Abilities</strong>
                </li>
                <p>Whole-brain skills improve the ability to learn and retain information. The left brain's focus on
                    details complements the right brain's capacity for understanding the bigger picture. This
                    integration aids in mastering complex concepts and applying them effectively in real-world
                    scenarios.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Greater Adaptability to Change</strong>
                </li>
                <p>In a rapidly evolving world, adaptability is a key skill. Whole-brain thinking equips individuals to
                    handle uncertainty by combining rational planning with intuitive adaptability, enabling them to
                    thrive in dynamic environments.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Enhanced Communication Skills</strong>
                </li>
                <p>Effective communication relies on the integration of verbal and nonverbal cues. The left brain helps
                    articulate ideas clearly, while the right brain ensures emotional resonance and relatability,
                    leading to more impactful interactions.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Fostered Resilience and Stress Management</strong>
                </li>
                <p>Whole-brain skills contribute to emotional resilience by balancing logical problem-solving with
                    emotional self-regulation. This synergy helps individuals manage stress and maintain mental
                    well-being during challenging times.</P>
                <li style="padding-bottom: 5px;">
                    <strong>Holistic Development for Children</strong>
                </li>
                <p>Encouraging whole-brain development from a young age prepares children for future challenges.
                    Activities like storytelling, puzzles, art, and science experiments promote the use of both
                    hemispheres, fostering cognitive, social, and emotional growth.</P>

                <p style="padding-top: 5px;"> How to Cultivate Whole-Brain Skills</p>

                <p class="report-normal-text mt-4">
                <ul>
                    <li style="padding-bottom: 5px;">
                        Engage in Diverse Activities: Combine logical tasks (like puzzles and strategy games) with
                        creative pursuits (like painting and music).
                    </li>
                    <li style="padding-bottom: 5px;">
                        Practice Mindfulness: Activities like meditation and yoga enhance the connection between the
                        two hemispheres, improving focus and emotional balance.
                    </li>
                    <li style="padding-bottom: 5px;">
                        Lifelong Learning: Pursue new hobbies or skills that challenge both logical and creative
                        thinking.
                    </li>
                    <li style="padding-bottom: 5px;">
                        Collaborative Work: Engage with diverse groups to experience and learn from different
                        perspectives.
                    </li>
                </ul>
                </p>
                <p style="padding-top: 5px;"> By developing whole-brain skills, individuals can achieve a balanced,
                    enriched approach to life,
                    unlocking their full potential and contributing meaningfully to society.</p>
            </ol>
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L1 Dominant (Analytical Brain / Candid)</h2>
            <p class="report-normal-text mt-4">
                You excel in logical reasoning and thrive on solving complex problems with precision. Data-driven and
                objective, you approach tasks with a clear focus on facts and evidence. Your strength lies in breaking
                down complicated information into manageable parts for analysis.
            </p>
            <p class="report-normal-text mt-4">
                You are highly detail-oriented and rely on critical thinking to make informed decisions. Problem-solving
                comes naturally, and you’re often the go-to person for troubleshooting and strategizing.
            </p>
            <p class="report-normal-text mt-4">
                However, you may prioritize facts over emotions, which can sometimes impact interpersonal relationships.
                Your skill set makes you ideal for roles in strategy, research, finance, or engineering.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L2 Dominant (Practical Thinker / Structured)</h2>
            <p class="report-normal-text mt-4">
                You have a natural talent for organization and systematic thinking, making you highly reliable in task
                execution. Structured and methodical, you prefer working with clear plans, goals, and procedures.
            </p>
            <p class="report-normal-text mt-4">
                Your ability to focus on the step-by-step process ensures efficiency and attention to detail in all you
                do. You excel in roles that require consistency, such as administration, logistics, or project
                management.
            </p>
            <p class="report-normal-text mt-4">
                Your practical mindset means you avoid unnecessary risks and prefer proven methods. While your focus on
                order is a strength, it may make you less comfortable with ambiguity or abstract ideas. You thrive in
                environments where stability and structure are valued.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">R1 Dominant (Maverick Creative Thinker / Visionary)</h2>
            <p class="report-normal-text mt-4">
                Your innovative and imaginative mind allows you to see opportunities where others see obstacles. You
                thrive on creative expression and enjoy brainstorming new ideas and concepts. A natural risk-taker,
                you’re not afraid to challenge the status quo or explore unconventional solutions.
            </p>
            <p class="report-normal-text mt-4">
                You excel in roles that require vision, such as entrepreneurship, design, or creative arts. Your focus
                on the big picture helps you inspire others, though you may struggle with details or follow-through.
            </p>
            <p class="report-normal-text mt-4">
                Collaboration with practical thinkers can help ground your ideas into actionable plans. Your creativity
                brings energy and inspiration to any team or project.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">R2 Dominant (Relational Brain / Empathetic)</h2>
            <p class="report-normal-text mt-4">
                Your emotional intelligence is a standout trait, allowing you to connect deeply with others. You are
                compassionate, understanding, and excel in building trust and harmony in relationships. People feel
                valued and supported when working with you, making you a natural leader in team-oriented roles.
            </p>
            <p class="report-normal-text mt-4">
                Your collaborative nature is an asset in teaching, counseling, or community work. You have an intuitive
                sense of others' needs and excel in resolving conflicts with empathy.
            </p>
            <p class="report-normal-text mt-4">
                While you are strong in emotional connections, you may struggle with tasks requiring detachment or rigid
                objectivity. Your ability to foster meaningful relationships is your greatest strength.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L1L2 Dominant (Dual Analytical-Practical / Structured Analyst)</h2>
            <p class="report-normal-text mt-4">
                You seamlessly combine analytical precision with practical implementation, making you highly effective
                in problem-solving. Your ability to think logically and structure your approach ensures both efficiency
                and accuracy.
            </p>
            <p class="report-normal-text mt-4">
                You excel in roles that require both strategic thinking and operational management, such as engineering,
                project planning, or finance. Your balanced mindset allows you to see both the big picture and the
                necessary steps to achieve it.
            </p>
            <p class="report-normal-text mt-4">
                You work well in structured environments, but your dual strength also means you adapt well to dynamic
                situations. While highly dependable, you may sometimes struggle to embrace creativity or innovation.
                Your dual focus makes you a versatile and reliable team member.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">R1R2 Dominant (Relational Creative / Empathetic Visionary)</h2>
            <p class="report-normal-text mt-4">
                You have the unique ability to blend emotional insight with creative vision, making you a powerful force
                in collaborative innovation. Your ideas are people-centric and often focus on improving relationships or
                social impact.
            </p>
            <p class="report-normal-text mt-4">
                You excel in roles that require visionary thinking combined with teamwork, such as social
                entrepreneurship, leadership, or creative consultancy. Your strength lies in inspiring others and
                creating inclusive environments.
            </p>
            <p class="report-normal-text mt-4">
                While your creativity drives innovation, your empathetic nature ensures your ideas are grounded in human
                connection. You may need support with tasks requiring high levels of structure or detail. Your ability
                to unite people around a common vision sets you apart.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L1R1 Dominant (Innovative Analyst / Creative Problem-Solver)</h2>
            <p class="report-normal-text mt-4">
                You combine analytical rigor with creative problem-solving, allowing you to tackle challenges from
                multiple angles. Logical yet inventive, you excel in finding innovative solutions to complex problems.
            </p>
            <p class="report-normal-text mt-4">
                Your ability to balance data-driven insights with out-of-the-box thinking makes you ideal for strategic
                or entrepreneurial roles. You thrive in fast-paced environments where adaptability and critical thinking
                are valued.
            </p>
            <p class="report-normal-text mt-4">
                While your ideas are innovative, you ensure they are practical and actionable. You may sometimes
                overlook emotional or relational dynamics, so partnering with empathetic individuals can enhance your
                outcomes. Your skills make you a trailblazer in fields requiring innovation and strategy.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L2R2 Dominant (Practical Empath / Grounded Relational Thinker)</h2>
            <p class="report-normal-text mt-4">
                You excel at combining practical thinking with a deep sense of empathy, making you highly effective in
                solving real-world problems. Your structured approach ensures stability, while your people-oriented
                nature fosters trust and collaboration.
            </p>
            <p class="report-normal-text mt-4">
                You are particularly strong in roles that require teamwork and practical solutions, such as healthcare,
                education, or social services. Your grounded mindset helps you balance emotional connections with task
                execution.
            </p>
            <p class="report-normal-text mt-4">
                While highly dependable, you may sometimes prioritize others’ needs over your own. Your ability to
                create harmony in both processes and relationships is a valuable asset. You thrive in environments where
                collaboration and reliability are valued.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L1R2 Dominant (Analytical Connector / Relational Analyst)</h2>
            <p class="report-normal-text mt-4">
                You excel at bridging the gap between logic and emotion, combining critical thinking with interpersonal
                insight. Your ability to analyze data and understand human behavior makes you effective in roles
                requiring both technical and relational skills, such as negotiation, mediation, or strategic
                partnerships.
            </p>
            <p class="report-normal-text mt-4">
                You are skilled at making data-driven decisions while maintaining a strong emotional connection with
                others. This balance helps you build trust and communicate complex ideas in a relatable way. While you
                thrive on structure and meaningful relationships, you may occasionally struggle in highly unstructured
                or overly abstract environments.
            </p>
            <p class="report-normal-text mt-4">
                Your unique blend of logic and empathy makes you a valued problem-solver in both professional and
                personal settings.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">L2R1 Dominant (Practical Innovator / Grounded Creative)</h2>
            <p class="report-normal-text mt-4">
                You are a rare combination of a visionary thinker with a strong sense of practicality, excelling at
                turning creative ideas into actionable plans. Your structured approach ensures that innovation is not
                just imaginative but also feasible and sustainable.
            </p>
            <p class="report-normal-text mt-4">
                You thrive in roles that require balancing creativity with implementation, such as product development,
                project management, or entrepreneurship. Your ability to think outside the box while staying grounded
                makes you a reliable leader in dynamic environments.
            </p>
            <p class="report-normal-text mt-4">
                However, you may sometimes find it challenging to navigate purely emotional or highly abstract tasks.
                Your strength lies in bringing imaginative ideas to life in a structured and effective way.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">LOW L1 Dominant (Abstract Idealist / Relational Planner)</h2>
            <p class="report-normal-text mt-4">
                Your thinking style leans toward abstract concepts and visionary ideals, often prioritizing values,
                relationships, and long-term goals over immediate details. You are skilled at creating harmonious plans
                and inspiring others to work toward a common purpose.
            </p>
            <p class="report-normal-text mt-4">
                Your focus on the big picture makes you effective in collaborative and visionary roles, such as team
                leadership or social advocacy. While your strength lies in fostering meaningful connections, you may
                sometimes overlook the importance of data and detailed analysis.
            </p>
            <p class="report-normal-text mt-4">
                You excel in environments where your creativity and relational skills can shine, especially when paired
                with more structured thinkers. Your optimism and focus on ideals drive progress in any team or project.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">LOW L2 Dominant (Visionary Dreamer / Conceptual Creative)</h2>
            <p class="report-normal-text mt-4">
                Your mind thrives on grand ideas and imaginative concepts, often pushing the boundaries of what’s
                possible. You excel at envisioning the future and thinking in unconventional ways, making you ideal for
                roles in innovation, strategy, or the arts.
            </p>
            <p class="report-normal-text mt-4">
                While you bring immense creativity to the table, you may struggle with structure and routine, preferring
                flexibility and freedom. Your visionary thinking inspires others, though you may require support in
                breaking down your ideas into actionable steps.
            </p>
            <p class="report-normal-text mt-4">
                You excel in environments that value imagination and forward-thinking but may need collaboration with
                practical thinkers to bring your visions to life. Your ability to dream big is your defining strength.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">LOW R1 Dominant (Grounded Thinker / Structured Planner)</h2>
            <p class="report-normal-text mt-4">
                You excel in bringing order and consistency to tasks, ensuring that processes are well-structured and
                dependable. Your strength lies in maintaining focus and discipline, making you effective in roles that
                require reliability and adherence to routine, such as operations or logistics.
            </p>
            <p class="report-normal-text mt-4">
                While creativity and innovation may not come as naturally, you are skilled at refining and implementing
                ideas from others. You thrive in environments that value clear goals and structured workflows.
            </p>
            <p class="report-normal-text mt-4">
                However, you may sometimes find it challenging to adapt to rapidly changing or abstract scenarios. Your
                ability to create stability and predictability is an invaluable asset in any team.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">LOW R2 Dominant (Independent Problem-Solver / Analytical Innovator)
            </h2>
            <p class="report-normal-text mt-4">
                You have a strong focus on data, logic, and problem-solving, often approaching challenges with a highly
                analytical and independent mindset.
            </p>
            <p class="report-normal-text mt-4">
                Your ability to separate emotions from decision-making allows you to excel in technical or
                research-based roles, where objectivity is key.
            </p>
            <p class="report-normal-text mt-4">
                While you may prefer working independently, your insights are invaluable to teams that require unbiased
                analysis and innovative solutions. You may find interpersonal dynamics or highly emotional situations
                less comfortable, but your logical clarity ensures that you remain focused on the task. Your strength
                lies in delivering results through careful thought and innovation, even in high-pressure situations.
            </p>

            <h2 class="report-heading col-lg-6 pt-5">Quadruple Pie (Harmonized Thinker / Balanced Integrator)
            </h2>
            <p class="report-normal-text mt-4">
                You possess a unique ability to harmonize all thinking styles, seamlessly integrating logic, creativity,
                structure, and empathy into your approach.
            </p>
            <p class="report-normal-text mt-4">
                This balance makes you highly adaptable to different environments and challenges, excelling in
                leadership, strategy, or collaborative roles. You can shift between big-picture thinking and detailed
                execution with ease, making you a versatile problem-solver.
            </p>
            <p class="report-normal-text mt-4">
                Your ability to relate to others while maintaining objectivity and vision is a rare skill that fosters
                collaboration and innovation. While you are well-rounded, you may occasionally feel pulled in multiple
                directions. Your greatest strength lies in your adaptability and ability to connect diverse ideas and
                people.
            </p>
        </div>
    </div>
</div>

@include('layouts.dashboard-footer')