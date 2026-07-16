<div class="p-3">
                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">{{$my_details->display_name}}</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">{{$my_details->email}}</p>
                                            </div>
                                        </div>

                                        <?php if ($my_brain_profile_id == 1): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As someone with an <strong> Analytical Brain </strong> and a
                                                        candid, logical
                                                        approach to communication, your relationship style is rooted in
                                                        objectivity, precision, and a desire for clarity. You are likely
                                                        to approach relationships with an emphasis on honesty,
                                                        problem-solving, and factual information, while also seeking
                                                        mutual understanding and effective communication. Here’s a
                                                        breakdown of your relationship styles:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Direct and Honest Communication


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You prefer clear, straightforward communication in
                                                                    your relationships, whether personal or
                                                                    professional. You value honesty and are not afraid
                                                                    to be candid when discussing important matters.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are dependable and trustworthy because
                                                                        others know you will always get the truth from
                                                                        you.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        You excel at providing constructive feedback,
                                                                        focusing on facts rather than emotions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your communication style ensures that
                                                                        misunderstandings are minimized, as you make
                                                                        your intentions and thoughts clear.

                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your directness can sometimes be perceived as
                                                                        blunt or overly critical, especially in
                                                                        emotionally charged situations.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        More sensitive you may find your communication
                                                                        style intimidating or difficult to handle.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        Balancing candid feedback with emotional
                                                                        sensitivity can help smooth interactions,
                                                                        especially in personal relationships.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Logical Problem-Solving in Relationships


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You approach relationship issues as problems to be
                                                                    solved logically. When conflicts arise, you focus on
                                                                    finding solutions based on reason, facts, and
                                                                    evidence.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You bring a calm and rational perspective to
                                                                        resolving conflicts, ensuring decisions are well
                                                                        thought out.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your problem-solving abilities help you navigate
                                                                        challenges efficiently, making you a valuable
                                                                        partner in both personal and professional
                                                                        relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        You can often defuse tense situations by
                                                                        breaking them down into manageable parts and
                                                                        addressing the core issues.


                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        In emotionally charged situations, your
                                                                        fact-based approach may seem detached or
                                                                        unempathetic to others.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        You may struggle with situations where emotional
                                                                        validation is needed more than logical
                                                                        solutions.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        Focusing on empathy and emotional support can
                                                                        complement your problem-solving style, ensuring
                                                                        that others feel heard and understood.



                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Preference for Structured and Organized Interactions


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You thrive in relationships where interactions are
                                                                    organized, purposeful, and goal-oriented. You prefer
                                                                    clarity in roles and expectations, and you often
                                                                    take the lead in setting up plans or creating
                                                                    structures for communication.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You bring organization to relationships,
                                                                        ensuring that communication and expectations are
                                                                        clear.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your efficiency and ability to plan ensure that
                                                                        things run smoothly, whether it's organizing
                                                                        events or managing household responsibilities.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        In professional relationships, you excel at
                                                                        keeping discussions on track and focusing on
                                                                        practical outcomes.

                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Spontaneous or unstructured conversations may
                                                                        feel unproductive or frustrating for you,
                                                                        especially in social settings.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your need for structure may be misinterpreted as
                                                                        rigidity by more flexible or emotionally driven
                                                                        you.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        Adapting to more fluid interactions can help you
                                                                        connect with others who value spontaneity or
                                                                        emotional exploration.



                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Focus on Independence and Self-Sufficiency


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    In relationships, you value independence and often
                                                                    prefer having personal space and autonomy. You are
                                                                    self-sufficient and expect others to respect your
                                                                    need for control over your time and decisions.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are capable of handling responsibilities
                                                                        independently, making you a reliable partner or
                                                                        colleague.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your self-sufficiency allows you to contribute
                                                                        to relationships without needing constant
                                                                        validation or support.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        You bring a sense of stability and balance to
                                                                        your relationships by maintaining your
                                                                        independence.


                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your preference for autonomy may sometimes come
                                                                        across as aloofness or detachment, especially in
                                                                        close personal relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        You may find it challenging to rely on others or
                                                                        ask for help, which can lead to feelings of
                                                                        isolation.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Balancing independence with emotional closeness
                                                                        and collaboration can strengthen your
                                                                        relationships.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Analytical and Fact-Based Decision Making


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You rely on facts and logical reasoning when making
                                                                    decisions in relationships. Whether it’s choosing a
                                                                    career path, resolving a conflict, or planning the
                                                                    future, you prefer to base decisions on data and
                                                                    evidence.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your decisions are grounded in logic, making
                                                                        them practical and well-thought-out.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Others trust your judgment because you base your
                                                                        choices on evidence rather than emotions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        You excel in professional and personal
                                                                        situations that require clear-headed analysis
                                                                        and objective decision-making.

                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        In personal relationships, this focus on logic
                                                                        can sometimes overshadow the emotional needs of
                                                                        others, making you seem distant.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        You may find it difficult to navigate situations
                                                                        where emotions, rather than facts, play a
                                                                        significant role in decision-making.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Learning to integrate emotional insights with
                                                                        your logical approach can help create more
                                                                        balanced decisions that consider both practical
                                                                        and emotional aspects.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Conflict Resolution Style


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    Your approach to conflict is direct and focused on
                                                                    solving the issue efficiently. You prefer to address
                                                                    problems head-on, using logical reasoning to find a
                                                                    solution that benefits all parties.

                                                                </p>

                                                                <h5 class="description-title">Strengths:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You resolve conflicts efficiently by focusing on
                                                                        facts and logic rather than emotions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        Your clear communication helps avoid
                                                                        misunderstandings, ensuring that everyone knows
                                                                        where you stand.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        You are skilled at finding solutions that are
                                                                        practical, achievable, and fair.


                                                                    </li>

                                                                </ul>
                                                                </p>

                                                                <h5 class="description-title">Challenges:
                                                                </h5>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        In emotionally charged conflicts, your logical
                                                                        approach may seem detached or unempathetic to
                                                                        others.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Others may feel that your emotions are not being
                                                                        validated, leading to frustration.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        Balancing logical problem-solving with emotional
                                                                        sensitivity can help create more harmonious
                                                                        conflict resolution.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Benefits of These Relationship
                                                        Styles for You:


                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Clear Communication:</strong> Your directness and
                                                            focus on clarity help prevent misunderstandings and create
                                                            strong, honest relationships.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Problem-Solving Orientation:</strong>
                                                            Your logical approach ensures that issues are dealt with
                                                            efficiently and in a structured way.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Independence:</strong>Your self-sufficiency allows
                                                            you to contribute to relationships while maintaining
                                                            personal space and autonomy.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Structured and Organized Relationships:</strong>Your
                                                            preference for organization brings stability and efficiency
                                                            to both personal and professional relationships.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Fact-Based Decisions:</strong>Your reliance on data
                                                            and evidence makes your decisions reliable and trustworthy,
                                                            especially in high-stakes situations.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By leveraging your <strong> Analytical Brain </strong> in
                                                        relationships, you can
                                                        create clear, productive, and goal-oriented interactions while
                                                        learning to balance logic with emotional understanding to
                                                        enhance your personal connections.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 2): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles
                                                    </h5>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Pragmatic and Logical


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You approach relationships in a practical,
                                                                    thoughtful way. You focus on solving problems and
                                                                    offering solutions rather than getting caught up in
                                                                    emotional complexities. You prefer to communicate
                                                                    clearly and directly, making sure that
                                                                    misunderstandings are minimized.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Structured and Organized


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    In relationships, you value routine and
                                                                    predictability. You often create structure around
                                                                    your interactions, such as scheduling time for
                                                                    important conversations or planning activities well
                                                                    in advance. This sense of order helps you feel
                                                                    secure and grounded.


                                                                </p>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Independent


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You value personal space and independence within
                                                                    relationships. You’re comfortable being alone and
                                                                    don’t feel the need for constant interaction.
                                                                    However, you’re reliable and present when it comes
                                                                    to fulfilling your commitments or supporting your
                                                                    partner.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Solution-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    When challenges arise in relationships, your natural
                                                                    inclination is to address them through logical
                                                                    problem-solving. You prefer to approach conflicts
                                                                    with calmness, focusing on finding practical
                                                                    resolutions rather than engaging in emotional
                                                                    debates.


                                                                </p>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Reserved with Emotions


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    While you care deeply for those close to you, you
                                                                    may not openly express emotions as easily. You tend
                                                                    to focus on what can be done to improve situations
                                                                    rather than talking about feelings. Emotional
                                                                    expressions may come more naturally in private or
                                                                    through actions rather than words.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reliable and Loyal


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    Once you commit to a relationship, you are
                                                                    dependable and dedicated. Your loyalty is reflected
                                                                    in your consistency and the effort you put into
                                                                    maintaining the relationship over time.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Preference for Clear Communication


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You value clear and direct communication, free from
                                                                    ambiguity. In relationships, you prefer discussing
                                                                    issues logically and openly, making sure both
                                                                    parties are on the same page.



                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        High Standards


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">

                                                                    You may have high expectations for yourself and your
                                                                    partner when it comes to consistency and
                                                                    reliability. This can be a strength in maintaining a
                                                                    solid relationship but may also create challenges if
                                                                    expectations aren’t met.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <p class="comparison-description">
                                                        These relationship tendencies reflect your practical, structured
                                                        approach to life, making you a dependable partner while also
                                                        valuing logic and clear communication.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 3): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Empathetic Connector, Relational Harmonizer, or
                                                        Compassionate Thinker, your approach to relationships is
                                                        characterized by empathy, connection, and a deep understanding
                                                        of others' emotions. Here’s how your relationship style
                                                        typically manifests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You naturally tune into the feelings and
                                                                        emotions of others, providing support and
                                                                        comfort when needed. Your ability to empathize
                                                                        helps you forge deep connections and create a
                                                                        safe space for open communication.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This quality fosters
                                                                        strong emotional bonds and allows you to be a
                                                                        trusted confidant.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Nurturing and Supportive

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You take on a nurturing role in relationships,
                                                                        often putting the needs of others before your
                                                                        own. Your compassionate nature makes you
                                                                        attentive to the emotional well-being of your
                                                                        friends, family, and partners.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This support
                                                                        encourages others to feel valued and cared for,
                                                                        promoting a sense of security within the
                                                                        relationship.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Collaborative and Team-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in partnerships where collaboration
                                                                        and teamwork are emphasized. You enjoy working
                                                                        together to achieve common goals and often seek
                                                                        to balance perspectives to find mutually
                                                                        beneficial solutions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This collaborative approach helps resolve
                                                                        conflicts and strengthens the relationship
                                                                        through shared experiences.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Conflict-Aware but Harmony-Seeking



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        While you may initially avoid conflict to
                                                                        maintain harmony, you recognize the importance
                                                                        of addressing issues when you arise. Your focus
                                                                        is on finding peaceful resolutions that respect
                                                                        everyone’s feelings.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This ability to
                                                                        navigate conflict with empathy ensures that
                                                                        relationships remain intact and healthy.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Open and Honest Communicator

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value open dialogue and encourage honest
                                                                        communication in relationships. You express your
                                                                        feelings and thoughts clearly, and you also
                                                                        invite others to do the same.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This transparency fosters trust and
                                                                        understanding, making it easier to navigate
                                                                        challenges together.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Relationship-Centric


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your focus is often on the quality of your
                                                                        relationships. You prioritize building deep
                                                                        connections and nurturing them over time,
                                                                        valuing long-term commitments.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This relational orientation helps create strong,
                                                                        enduring bonds with those you care about.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Sensitive to Others’ Needs


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are attuned to the needs and emotions of
                                                                        others, often noticing subtle cues that indicate
                                                                        how someone is feeling. Your sensitivity allows
                                                                        you to respond appropriately and offer support.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This awareness enables
                                                                        you to provide comfort and reassurance,
                                                                        enhancing the emotional connection in your
                                                                        relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Balancing Emotional and Practical Needs


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        While you are emotionally attuned, you also
                                                                        recognize the importance of practical
                                                                        considerations in relationships. You strive to
                                                                        balance emotional support with pragmatic
                                                                        decision-making.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This balance helps
                                                                        ensure that relationships are not only
                                                                        emotionally fulfilling but also grounded in
                                                                        reality.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Trust-Building



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You work to establish trust in your
                                                                        relationships by being reliable and consistent.
                                                                        Your integrity and honesty create a foundation
                                                                        for strong connections.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This trust enables deeper intimacy and
                                                                        connection with others, as you feel safe being
                                                                        vulnerable around you.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Adaptable to Different Relationship Dynamics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are flexible in your relationships and can
                                                                        adapt to different dynamics, whether you are
                                                                        friendships, romantic partnerships, or family
                                                                        connections. You appreciate the unique qualities
                                                                        each relationship brings.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This adaptability allows you to thrive in
                                                                        various social situations and maintain harmony
                                                                        among diverse personalities.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Focus on truly
                                                            hearing what others say without interrupting. This
                                                            reinforces your empathetic nature and helps build deeper
                                                            connections.
                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Foster an environment where everyone feels comfortable
                                                            sharing your thoughts and feelings. This promotes
                                                            transparency and trust.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Balance Empathy with Boundaries:</strong>
                                                            While supporting others, ensure you also set healthy
                                                            boundaries to protect your emotional well-being.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Address Conflicts Constructively:</strong>
                                                            When conflicts arise, approach them with empathy and a focus
                                                            on finding solutions that respect everyone's feelings.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Prioritize Quality Time:</strong>
                                                            Spend meaningful time with loved ones to strengthen bonds
                                                            and create lasting memories.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="comparison-description">
                                                        By understanding and embracing your relational style, you can
                                                        enhance your ability to connect with others and build
                                                        meaningful, fulfilling relationships in all areas of your life.

                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 4): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As an Innovative Maverick, Creative Visionary, or Non-Conformist
                                                        Thinker, your approach to relationships is characterized by
                                                        creativity, independence, and a desire for authenticity. You
                                                        thrive in environments where you can express your unique self
                                                        and connect with others in meaningful ways. Here’s how your
                                                        relationship style typically manifests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Authentic and Open


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value honesty and authenticity in your
                                                                        relationships. You are likely to express your
                                                                        true self, encouraging others to do the same.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This openness fosters
                                                                        trust and allows for deeper connections with
                                                                        others.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Creative Expression

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often use creativity as a way to connect
                                                                        with others. Whether through shared artistic
                                                                        pursuits or imaginative discussions, you bring a
                                                                        unique perspective to your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This creative approach
                                                                        can lead to enriching experiences and memorable
                                                                        moments with those you care about.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Independent and Non-Conformist


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You appreciate your independence and may resist
                                                                        traditional relationship norms. Your desire for
                                                                        freedom can lead you to forge your own path in
                                                                        relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This independence allows for personal growth and
                                                                        self-discovery, creating a space for
                                                                        authenticity in your connections.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Visionary Thinker



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to think about the bigger picture in
                                                                        relationships, often considering how connections
                                                                        can evolve and grow over time. You may have a
                                                                        clear vision of what you want in a relationship
                                                                        and pursue it actively.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your visionary mindset
                                                                        can inspire others and help cultivate a shared
                                                                        sense of purpose in partnerships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Curiosity-Driven

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are naturally curious about others and enjoy
                                                                        learning about your thoughts, feelings, and
                                                                        experiences. This curiosity enhances your
                                                                        ability to connect and empathize with those
                                                                        around you.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your inquisitive nature fosters deep
                                                                        conversations and encourages mutual
                                                                        understanding.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Flexible and Adaptive


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are open to change and willing to adapt your
                                                                        approach to relationships as needed. This
                                                                        flexibility allows you to navigate different
                                                                        dynamics and find common ground with others.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This adaptability can lead to more harmonious
                                                                        relationships, as you are willing to accommodate
                                                                        different perspectives.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Passionate and Enthusiastic


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationships with energy and
                                                                        enthusiasm, often seeking out experiences that
                                                                        excite and inspire you. Your passion can be
                                                                        contagious, drawing others to you.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your enthusiasm helps
                                                                        create vibrant connections and encourages those
                                                                        around you to engage more deeply.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Collaborative Spirit


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You enjoy working together with others to
                                                                        achieve shared goals, whether in creative
                                                                        projects or personal endeavors. This
                                                                        collaborative approach enhances your
                                                                        relationships and allows for collective growth.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to
                                                                        collaborate fosters teamwork and strengthens the
                                                                        bonds you share with others.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Innovative Problem-Solver



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        When conflicts arise, you approach them with
                                                                        creativity and a desire to find unique
                                                                        solutions. You may think outside the box to
                                                                        resolve issues and maintain harmony in your
                                                                        relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This innovative problem-solving approach can
                                                                        help navigate challenges effectively, fostering
                                                                        a sense of security in your connections.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Empowerment-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often seek to empower others to express
                                                                        themselves and pursue your passions. Your
                                                                        encouragement can help friends, family, and
                                                                        partners feel more confident and capable.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This empowerment fosters strong, supportive
                                                                        relationships that promote mutual growth.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, showing genuine interest in your thoughts and
                                                            feelings. This fosters deeper connections and understanding.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Creative Expression:</strong>
                                                            Create environments where you and your loved ones can
                                                            express yourselves creatively, whether through art, music,
                                                            or shared activities.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Be Open to Change:</strong>
                                                            Embrace the evolving nature of relationships and be willing
                                                            to adapt your approach as needed to maintain harmony.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Foster Curiosity:</strong>
                                                            Ask questions and explore different perspectives to deepen
                                                            your understanding of others and strengthen your
                                                            connections.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Celebrate Individuality:</strong>
                                                            Respect and encourage the unique qualities of others,
                                                            allowing them to express your authentic selves within the
                                                            relationship.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 5): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Balanced Logical Thinker or Dual Analytical-Practical, your
                                                        approach to relationships is characterized by logic,
                                                        practicality, and a focus on effective communication. You value
                                                        structure and clarity in your interactions, and your analytical
                                                        mindset influences how you connect with others. Here’s how your
                                                        relationship style typically manifests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Logical and Rational


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationships with a logical
                                                                        mindset, often analyzing situations and seeking
                                                                        to understand the underlying factors at play.
                                                                        This analytical approach helps you navigate
                                                                        challenges effectively.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to remain
                                                                        calm and rational in discussions allows for
                                                                        constructive problem-solving.
                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Direct and Honest Communication

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You prioritize clear and open communication. You
                                                                        are likely to express your thoughts and feelings
                                                                        straightforwardly, valuing transparency in your
                                                                        interactions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This directness helps
                                                                        prevent misunderstandings and builds trust in
                                                                        relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Practical Problem-Solver


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        When conflicts arise, you focus on finding
                                                                        practical solutions rather than getting caught
                                                                        up in emotional reactions. You seek to address
                                                                        issues logically and effectively.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This pragmatic approach can help resolve
                                                                        conflicts efficiently, fostering a sense of
                                                                        stability in your relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Detail-Oriented and Thoughtful


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to pay attention to the details in your
                                                                        relationships, remembering important dates,
                                                                        preferences, and needs of others. This
                                                                        attentiveness reflects your analytical nature.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your thoughtfulness
                                                                        can make others feel valued and appreciated,
                                                                        strengthening your connections.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Supportive and Reliable

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are seen as a dependable partner or friend,
                                                                        always ready to lend a hand or provide
                                                                        assistance. Your reliability fosters a sense of
                                                                        security in your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This dependability builds trust and encourages
                                                                        others to rely on you.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Open to Feedback and Growth


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You appreciate constructive criticism and
                                                                        actively seek feedback to improve your
                                                                        relationships. This openness to growth helps you
                                                                        adapt and strengthen your connections with
                                                                        others.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your willingness to learn from experiences
                                                                        fosters deeper, more meaningful relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Structured and Organized


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may prefer to establish clear boundaries and
                                                                        expectations in your relationships. This
                                                                        structured approach helps you navigate
                                                                        interactions with clarity and purpose.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Setting boundaries can
                                                                        lead to healthier relationships by ensuring that
                                                                        everyone’s needs are met.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Balanced Independence and Togetherness


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        While you value your independence, you also
                                                                        appreciate the importance of companionship. You
                                                                        seek relationships that allow for both personal
                                                                        space and shared experiences.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This balance
                                                                        contributes to healthy dynamics in your
                                                                        relationships, allowing for both individual
                                                                        growth and connection.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Goal-Oriented



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may approach relationships with specific
                                                                        goals in mind, whether it’s to build a
                                                                        partnership, foster friendship, or achieve
                                                                        common objectives. This goal-oriented mindset
                                                                        helps you focus on what matters most.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Setting goals for your relationships can lead to
                                                                        more purposeful interactions and a sense of
                                                                        accomplishment.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, demonstrating genuine interest in your
                                                            thoughts and feelings. This fosters deeper connections and
                                                            enhances collaboration.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Communication:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Utilize Problem-Solving Techniques:</strong>
                                                            When conflicts arise, approach them logically and
                                                            collaboratively. Focus on finding practical solutions that
                                                            satisfy all parties involved.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Your Interactions:</strong>
                                                            Take time to consider your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            celebrate your successes in effective communication.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Set Clear Boundaries:</strong>
                                                            Establish and communicate boundaries that help maintain a
                                                            healthy balance between independence and togetherness in
                                                            your relationships.


                                                        </li>
                                                    </ul>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 6): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Relational Creative or Creative Connector, your approach to
                                                        relationships is characterized by strong interpersonal skills,
                                                        creativity, and a focus on collaboration. You thrive in
                                                        environments where you can connect emotionally with others and
                                                        express your ideas freely. Here’s how your relationship style
                                                        typically manifests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You have a natural ability to empathize with
                                                                        others, which allows you to build deep and
                                                                        meaningful connections. You prioritize
                                                                        understanding feelings and perspectives,
                                                                        fostering trust and intimacy.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This empathy enhances
                                                                        your ability to provide support and comfort to
                                                                        friends and loved ones, making you a valued
                                                                        confidant.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Open and Honest Communication

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value transparency and express your thoughts
                                                                        and feelings openly. You encourage others to do
                                                                        the same, promoting a culture of honesty and
                                                                        vulnerability in your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This open
                                                                        communication helps prevent misunderstandings
                                                                        and deepens emotional bonds.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Creative Expression


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often use creativity to connect with others.
                                                                        Whether through art, music, or storytelling, you
                                                                        enjoy sharing your imaginative ideas and
                                                                        experiences, enriching your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your creative expression can inspire others and
                                                                        create shared experiences that strengthen
                                                                        connections.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Collaborative and Team-Oriented



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in partnerships where collaboration
                                                                        is encouraged. You enjoy working together with
                                                                        others to achieve common goals and value diverse
                                                                        perspectives in problem-solving.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This collaborative
                                                                        approach fosters teamwork and can lead to
                                                                        innovative solutions in relationships and
                                                                        projects.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Supportive and Encouraging

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are seen as a dependable and supportive
                                                                        partner, always ready to encourage others in
                                                                        your pursuits. You celebrate your achievements
                                                                        and provide motivation during challenges.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your supportive nature builds a sense of
                                                                        security and belonging in your relationships,
                                                                        allowing others to thrive.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Socially Engaged


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You enjoy social interactions and often seek out
                                                                        opportunities to connect with others. You thrive
                                                                        in group settings and value building a network
                                                                        of relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your sociable nature helps create a vibrant and
                                                                        dynamic social life, full of shared experiences.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Positive and Optimistic


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to maintain a positive outlook,
                                                                        bringing joy and enthusiasm into your
                                                                        relationships. Your optimism can uplift those
                                                                        around you and create a positive atmosphere.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This positivity can be
                                                                        contagious, fostering an environment where
                                                                        others feel encouraged and motivated.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Adaptable and Flexible


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are open to change and can adapt your
                                                                        communication style and approach based on the
                                                                        needs of your relationships. This flexibility
                                                                        enhances your effectiveness in various social
                                                                        contexts.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your adaptability
                                                                        allows you to navigate different social dynamics
                                                                        smoothly, making it easier to connect with
                                                                        diverse you.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Reflective and Introspective



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value self-reflection and take time to
                                                                        consider your interactions and behaviors. This
                                                                        introspective approach allows you to learn from
                                                                        experiences and grow personally.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your emotional
                                                                        intelligence and helps you develop stronger,
                                                                        more meaningful relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Goal-Oriented in Relationships


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may approach relationships with specific
                                                                        goals in mind, whether it’s building deeper
                                                                        connections, collaborating on projects, or
                                                                        supporting each other’s aspirations.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This goal-oriented mindset can lead to
                                                                        purposeful interactions and a sense of
                                                                        accomplishment in shared endeavors.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings. This fosters deeper connections.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Creativity:</strong>
                                                            Find ways to express your ideas and feelings through
                                                            creative mediums, whether it’s art, writing, or other forms
                                                            of expression.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            celebrate your successes.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing encouragement and support to those
                                                            around you. Your positive reinforcement can enhance
                                                            relationships and foster a sense of community.


                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style l, you
                                                        can enhance your ability to connect with others and foster
                                                        meaningful, fulfilling relationships in all areas of your life.
                                                        Your relational skills and creative expression make you a
                                                        valuable contributor to any team or collaborative effort.


                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 7): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As an Innovative Analyst or Creative Problem-Solver, your
                                                        approach to relationships is characterized by strong analytical
                                                        thinking, creativity, and effective communication. You thrive in
                                                        environments where you can connect with others on both an
                                                        intellectual and emotional level. Here’s how your relationship
                                                        style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Analytical and Thoughtful


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to approach relationships with a
                                                                        logical and analytical mindset. You evaluate
                                                                        situations carefully and consider various
                                                                        factors before making decisions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This analytical
                                                                        approach helps you navigate complex relationship
                                                                        dynamics, allowing you to address issues
                                                                        thoughtfully.


                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Creative and Innovative

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your ability to think outside the box enables
                                                                        you to approach relationships with fresh ideas
                                                                        and solutions. You enjoy bringing creativity
                                                                        into your interactions, whether through shared
                                                                        activities or problem-solving together.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This creativity
                                                                        fosters an engaging and dynamic relationship, as
                                                                        you explore new experiences and perspectives
                                                                        together.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Open and Honest Communicator


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value transparency and straightforwardness
                                                                        in your communication. You express your thoughts
                                                                        and feelings openly, encouraging others to do
                                                                        the same.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This honesty builds trust and strengthens
                                                                        connections, making it easier to address
                                                                        challenges or misunderstandings.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Collaborative and Supportive


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in collaborative environments and
                                                                        enjoy working with others to achieve common
                                                                        goals. In relationships, you are supportive and
                                                                        encourage your partner to pursue your
                                                                        aspirations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your collaborative
                                                                        nature fosters teamwork and strengthens the
                                                                        emotional bond between you and your partner.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Problem-Solver

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationship challenges as
                                                                        opportunities for growth and improvement. Your
                                                                        analytical skills allow you to identify
                                                                        underlying issues and work towards effective
                                                                        solutions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This proactive approach to problem-solving
                                                                        enhances the resilience of your relationships,
                                                                        allowing you to navigate difficulties together.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value self-reflection and take time to
                                                                        assess your interactions and behaviors within
                                                                        relationships. This introspective approach
                                                                        allows you to learn from experiences and grow
                                                                        personally.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your emotional
                                                                        intelligence and helps you develop stronger,
                                                                        more meaningful relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Balanced and Fair


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You seek balance in your relationships, valuing
                                                                        equality and fairness in decision-making and
                                                                        responsibilities. You are likely to negotiate
                                                                        and discuss preferences openly.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This emphasis on
                                                                        balance helps create harmonious relationships
                                                                        where both partners feel valued and respected.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Goal-Oriented in Relationships


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may approach relationships with specific
                                                                        goals in mind, whether it’s building deeper
                                                                        connections or collaborating on projects. This
                                                                        goal-oriented mindset can lead to purposeful
                                                                        interactions.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This focus on shared
                                                                        goals encourages a sense of direction and
                                                                        purpose within your relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings. This fosters deeper connections.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Creativity:</strong>
                                                            Find ways to express your ideas and feelings through
                                                            creative mediums, whether it’s art, writing, or shared
                                                            activities.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            celebrate your successes.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing support to those around you. Your
                                                            positive reinforcement can enhance relationships and foster
                                                            a sense of community.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style , you can
                                                        enhance your ability to connect with others and foster
                                                        meaningful, fulfilling relationships in all areas of your life.
                                                        Your analytical skills, creative thinking, and strong
                                                        communication abilities make you a valuable partner and
                                                        contributor in any relationship.

                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 8): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Practical Empath or Grounded Relational Thinker, your
                                                        approach to relationships is characterized by empathy,
                                                        practicality, and a strong focus on relational dynamics. You
                                                        thrive in environments where you can connect with others
                                                        meaningfully while providing grounded solutions to challenges.
                                                        Here’s how your relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathy and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You have a natural ability to understand and
                                                                        share the feelings of others. This empathy
                                                                        allows you to connect on a deeper emotional
                                                                        level, making those around you feel valued and
                                                                        heard.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic nature
                                                                        fosters strong emotional bonds and creates a
                                                                        safe space for open communication.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Supportive and Nurturing

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often take on a supportive role in
                                                                        relationships, offering encouragement and
                                                                        assistance to those you care about. You
                                                                        prioritize the well-being of others and actively
                                                                        seek to uplift them.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your nurturing
                                                                        behavior helps build trust and reinforces
                                                                        positive connections, making your relationships
                                                                        feel secure.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Collaborative and Team-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in collaborative relationships where
                                                                        teamwork is emphasized. You value input from
                                                                        others and enjoy working together to achieve
                                                                        common goals, whether in personal or
                                                                        professional contexts.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This collaborative spirit enhances group
                                                                        dynamics and fosters a sense of belonging among
                                                                        your peers.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Practical Problem-Solver



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        In relationships, you approach challenges with a
                                                                        practical mindset. You seek to find effective
                                                                        solutions to conflicts or issues, focusing on
                                                                        what is realistic and achievable.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to
                                                                        navigate challenges pragmatically helps maintain
                                                                        harmony and stability in your relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Open Communicator

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value clear and open communication in your
                                                                        relationships. You express your thoughts and
                                                                        feelings honestly, encouraging others to do the
                                                                        same. This transparency fosters trust and mutual
                                                                        understanding.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your open communication style reduces
                                                                        misunderstandings and strengthens connections.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to reflect on your interactions and
                                                                        behaviors within relationships, seeking to
                                                                        understand yourself and others better. This
                                                                        introspective approach allows for personal
                                                                        growth and deeper connections.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your emotional
                                                                        intelligence and helps you navigate relational
                                                                        dynamics more effectively.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Goal-Oriented in Relationships


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may approach relationships with specific
                                                                        goals in mind, whether it’s building deeper
                                                                        connections, collaborating on projects, or
                                                                        supporting each other’s aspirations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This goal-oriented
                                                                        mindset encourages purposeful interactions and a
                                                                        sense of direction in your relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Balanced and Fair


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You seek balance in your relationships, valuing
                                                                        equality and fairness in decision-making and
                                                                        responsibilities. You are likely to negotiate
                                                                        and discuss preferences openly.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This emphasis on
                                                                        balance helps create harmonious relationships
                                                                        where both partners feel valued and respected.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Emotionally Available



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are generally emotionally available, willing
                                                                        to share your feelings and encourage others to
                                                                        do the same. This openness fosters vulnerability
                                                                        and intimacy in your relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your emotional availability helps build deep,
                                                                        meaningful connections with others.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Resilient and Adaptable


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are resilient in the face of challenges and
                                                                        can adapt your communication and behavior to
                                                                        suit different relational contexts. This
                                                                        flexibility allows you to navigate changes and
                                                                        uncertainties with grace.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your adaptability helps maintain healthy
                                                                        relationships even during difficult times.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Empathy:</strong>
                                                            Use your empathetic nature to connect with others on a
                                                            deeper level, fostering trust and understanding.
                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing support to those around you. Your
                                                            positive reinforcement can enhance relationships and foster
                                                            a sense of community.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 9): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As an Analytical Connector or Relational Analyst, your approach
                                                        to relationships is characterized by a blend of analytical
                                                        reasoning and relational understanding. You thrive in
                                                        environments where you can engage meaningfully with others while
                                                        applying your analytical skills to navigate complex information.
                                                        Here’s how your relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You have a natural ability to understand and
                                                                        share the feelings of others. This empathy
                                                                        allows you to connect on a deeper emotional
                                                                        level, making those around you feel valued and
                                                                        heard.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic nature
                                                                        fosters strong emotional bonds and creates a
                                                                        safe space for open communication.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Supportive and Nurturing

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often take on a supportive role in
                                                                        relationships, offering encouragement and
                                                                        assistance to those you care about. You
                                                                        prioritize the well-being of others and actively
                                                                        seek to uplift them.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your nurturing
                                                                        behavior helps build trust and reinforces
                                                                        positive connections, making your relationships
                                                                        feel secure.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Collaborative and Team-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in collaborative relationships where
                                                                        teamwork is emphasized. You value input from
                                                                        others and enjoy working together to achieve
                                                                        common goals, whether in personal or
                                                                        professional contexts.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This collaborative spirit enhances group
                                                                        dynamics and fosters a sense of belonging among
                                                                        your peers.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Analytical and Rational

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationship dynamics with an
                                                                        analytical mindset, often evaluating situations
                                                                        logically to understand and resolve conflicts.
                                                                        This analytical perspective helps you navigate
                                                                        complex emotional landscapes.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to
                                                                        analyze issues can lead to effective
                                                                        problem-solving and resolution of
                                                                        misunderstandings.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Open Communicator

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value clear and open communication in your
                                                                        relationships. You express your thoughts and
                                                                        feelings honestly, encouraging others to do the
                                                                        same. This transparency fosters trust and mutual
                                                                        understanding.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your open communication style reduces
                                                                        misunderstandings and strengthens connections.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Goal-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You may approach relationships with specific
                                                                        goals in mind, whether it’s building deeper
                                                                        connections, collaborating on projects, or
                                                                        supporting each other’s aspirations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This goal-oriented mindset encourages purposeful
                                                                        interactions and a sense of direction in your
                                                                        relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value self-reflection and take time to
                                                                        assess your interactions and behaviors within
                                                                        relationships. This introspective approach
                                                                        allows for personal growth and deeper
                                                                        connections.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This reflection
                                                                        enhances your emotional intelligence and helps
                                                                        you develop stronger, more meaningful
                                                                        relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Balanced and Fair


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You seek balance in your relationships, valuing
                                                                        equality and fairness in decision-making and
                                                                        responsibilities. You are likely to negotiate
                                                                        and discuss preferences openly.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This emphasis on
                                                                        balance helps create harmonious relationships
                                                                        where both partners feel valued and respected.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Emotionally Available

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are generally emotionally available, willing
                                                                        to share your feelings and encourage others to
                                                                        do the same. This openness fosters vulnerability
                                                                        and intimacy in your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your emotional availability helps build deep,
                                                                        meaningful connections with others.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Resilient and Adaptable


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are resilient in the face of challenges and
                                                                        can adapt your communication and behavior to
                                                                        suit different relational contexts. This
                                                                        flexibility allows you to navigate changes and
                                                                        uncertainties with grace.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your adaptability helps maintain healthy
                                                                        relationships even during difficult times.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Analytical Skills:</strong>
                                                            Use your analytical abilities to structure your
                                                            communication effectively, helping others understand complex
                                                            information more easily.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing support to those around you. Your
                                                            positive reinforcement can enhance relationships and foster
                                                            a sense of community.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style , you can
                                                        enhance your ability to connect with others and foster
                                                        meaningful, fulfilling relationships in all areas of your life.
                                                        Your analytical skills, empathetic understanding, and strong
                                                        relational abilities make you a valuable partner and contributor
                                                        in any relationship.


                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 10): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Practical Innovator or Grounded Creative, your approach to
                                                        relationships is characterized by a blend of practicality,
                                                        creativity, and relational engagement. You thrive in
                                                        environments where you can connect meaningfully with others
                                                        while applying your innovative thinking. Here’s how your
                                                        relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You possess a natural ability to understand and
                                                                        share the feelings of others. This empathy
                                                                        allows you to connect on a deeper emotional
                                                                        level, making those around you feel valued and
                                                                        heard.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic nature
                                                                        fosters strong emotional bonds and creates a
                                                                        safe space for open communication.


                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Innovative and Open-Minded

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You bring creativity into your relationships,
                                                                        often seeking new experiences and ideas. Your
                                                                        willingness to explore unconventional approaches
                                                                        can lead to dynamic and enriching interactions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This innovative
                                                                        mindset encourages growth and adaptability,
                                                                        making relationships more exciting and
                                                                        fulfilling.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Goal-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationships with specific
                                                                        objectives in mind, whether it’s building deeper
                                                                        connections, collaborating on projects, or
                                                                        supporting each other’s aspirations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This focus on goals encourages purposeful
                                                                        interactions and a sense of direction in your
                                                                        relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Open Communicator



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value clear and open communication in your
                                                                        relationships. You express your thoughts and
                                                                        feelings honestly, encouraging others to do the
                                                                        same. This transparency fosters trust and mutual
                                                                        understanding.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your open
                                                                        communication style reduces misunderstandings
                                                                        and strengthens connections.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Balanced and Fair

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You seek balance in your relationships, valuing
                                                                        equality and fairness in decision-making and
                                                                        responsibilities. You are likely to negotiate
                                                                        and discuss preferences openly.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This emphasis on balance helps create harmonious
                                                                        relationships where both partners feel valued
                                                                        and respected.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value self-reflection and take time to
                                                                        assess your interactions and behaviors within
                                                                        relationships. This introspective approach
                                                                        allows for personal growth and deeper
                                                                        connections.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your emotional
                                                                        intelligence and helps you develop stronger,
                                                                        more meaningful relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Resilient and Adaptable


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are resilient in the face of challenges and
                                                                        can adapt your communication and behavior to
                                                                        suit different relational contexts. This
                                                                        flexibility allows you to navigate different
                                                                        social dynamics smoothly.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your adaptability
                                                                        helps maintain healthy relationships even during
                                                                        difficult times.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Analytical Skills:</strong>
                                                            Use your analytical abilities to structure your
                                                            communication effectively, helping others understand complex
                                                            information more easily.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing support to those around you. Your
                                                            positive reinforcement can enhance relationships and foster
                                                            a sense of community.


                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style as an
                                                        L2R1 / R1L2 dominant individual, you can enhance your ability to
                                                        connect with others and foster meaningful, fulfilling
                                                        relationships in all areas of your life. Your practical skills,
                                                        empathetic understanding, and strong relational abilities make
                                                        you a valuable partner and contributor in any relationship.

                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 11): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Grounded Thinker or Structured Planner, your approach to
                                                        relationships is characterized by a preference for structure,
                                                        clarity, and practical engagement. You value logical reasoning
                                                        and organized communication, which shapes how you connect with
                                                        others. Here’s how your relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Practical and Direct


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to communicate in a straightforward
                                                                        manner, preferring clear and concise
                                                                        conversations. You value honesty and
                                                                        transparency in your interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This directness
                                                                        reduces misunderstandings and allows for open
                                                                        communication about feelings and expectations.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Supportive and Reliable

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often take on a supportive role in
                                                                        relationships, providing assistance and
                                                                        encouragement to those you care about. Your
                                                                        dependability makes you a trustworthy partner or
                                                                        friend.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your reliability
                                                                        fosters a sense of security and trust, making
                                                                        others feel valued and supported.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Analytical and Observant


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach relationship dynamics with an
                                                                        analytical mindset, often assessing situations
                                                                        logically. You value understanding the nuances
                                                                        of interactions and behaviors.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This analytical perspective allows you to
                                                                        identify potential issues early and address them
                                                                        before you escalate.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Goal-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to approach relationships with specific
                                                                        objectives in mind, whether it's building a
                                                                        deeper connection, collaborating on projects, or
                                                                        supporting each other's aspirations.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This focus on goals
                                                                        encourages purposeful interactions and a sense
                                                                        of direction in your relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Structured and Organized

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your preference for organization often extends
                                                                        to your relationships. You appreciate having
                                                                        clear roles, expectations, and boundaries.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This structure helps maintain harmony and
                                                                        clarity, reducing conflicts related to
                                                                        misunderstandings.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Emotionally Grounded


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        While you may not express emotions as openly as
                                                                        others, you are generally stable and grounded in
                                                                        your feelings. You prefer to process emotions
                                                                        logically before discussing them.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This emotional steadiness provides a calming
                                                                        presence in relationships, helping to navigate
                                                                        challenging situations effectively.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value self-reflection and take time to
                                                                        assess your interactions and behaviors within
                                                                        relationships. This introspective approach
                                                                        allows for personal growth and deeper
                                                                        connections.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to
                                                                        reflect enhances your emotional intelligence and
                                                                        helps you develop stronger, more meaningful
                                                                        relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Collaborative and Cooperative


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in relationships that involve
                                                                        teamwork and collaboration. You value input from
                                                                        others and seek to create a sense of partnership
                                                                        in your interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This collaborative
                                                                        spirit enhances group dynamics and fosters a
                                                                        sense of belonging among your peers.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Focused on Solutions



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        When conflicts arise, you prefer to approach
                                                                        them with a problem-solving mindset. You aim to
                                                                        find practical solutions rather than dwelling on
                                                                        issues.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This solution-oriented approach helps maintain
                                                                        harmony and progress in relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Value for Stability


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You appreciate stability and consistency in
                                                                        relationships. This preference leads you to
                                                                        invest time in nurturing long-term connections
                                                                        rather than fleeting interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This focus on stability fosters trust and deeper
                                                                        emotional connections over time.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Continue to
                                                            engage fully when others speak, showing genuine interest in
                                                            your thoughts and feelings. This enhances empathy and
                                                            understanding.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Communication:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and concerns. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Be Open to Emotional Expression:</strong>
                                                            While you may prefer logical reasoning, allow space for
                                                            emotional expression in your relationships. This can deepen
                                                            connections and foster mutual understanding.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Seek Collaborative Solutions:</strong>
                                                            In times of conflict, focus on finding solutions together
                                                            with your partner or friends. Collaborating on resolutions
                                                            strengthens relationships.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        You can enhance your ability to connect with others and foster
                                                        meaningful, fulfilling relationships in all areas of your life.
                                                        Your practical skills, dependable nature, and strong relational
                                                        abilities make you a valuable partner and contributor in any
                                                        relationship.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 12): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Abstract Idealist or Relational Planner, your approach to
                                                        relationships is characterized by creativity, empathy, and a
                                                        strong focus on connection and collaboration. You value
                                                        meaningful interactions and often seek to foster deeper
                                                        understanding in your relationships. Here’s how your
                                                        relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You have a natural ability to empathize with
                                                                        others, often tuning into your emotions and
                                                                        feelings. This sensitivity helps you build
                                                                        strong connections and supports open dialogue.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic nature
                                                                        allows for deeper relational dynamics, fostering
                                                                        trust and mutual understanding.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Creative Communicator

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You express your thoughts and feelings in
                                                                        imaginative ways, often using storytelling,
                                                                        metaphors, or creative analogies to convey your
                                                                        ideas.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This creativity in
                                                                        communication makes interactions more engaging
                                                                        and allows others to see different perspectives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Collaborative and Team-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in relationships that involve
                                                                        collaboration and teamwork. You appreciate
                                                                        working together with others to achieve common
                                                                        goals, emphasizing shared responsibilities.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your collaborative spirit enhances group
                                                                        dynamics and fosters a sense of belonging among
                                                                        peers.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Visionary and Inspirational


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your ability to envision possibilities
                                                                        encourages you to inspire those around you. You
                                                                        often share your ideals and aspirations,
                                                                        motivating others to pursue your dreams.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This visionary quality
                                                                        can uplift others and create a positive,
                                                                        motivating atmosphere in your relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Open and Honest

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value transparency in your interactions and
                                                                        prefer to communicate openly about your
                                                                        thoughts, feelings, and expectations. This
                                                                        honesty fosters trust and authenticity.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your straightforwardness encourages others to
                                                                        share your ideas and concerns, leading to more
                                                                        meaningful conversations.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reflective and Thoughtful


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You take the time to reflect on your
                                                                        interactions and the dynamics within your
                                                                        relationships. This thoughtful approach helps
                                                                        you consider different viewpoints before
                                                                        responding.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your understanding and
                                                                        allows for more nuanced discussions.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Supportive and Nurturing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often take on a supportive role in
                                                                        relationships, offering encouragement and
                                                                        validation to those around you. You enjoy
                                                                        uplifting others and celebrating your successes.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your supportive
                                                                        behavior creates a positive environment that
                                                                        fosters growth and collaboration.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Curious and Open-Minded


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You possess a natural curiosity about the world
                                                                        and the people around you, which encourages
                                                                        exploration of diverse perspectives and ideas in
                                                                        your relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This curiosity allows
                                                                        you to engage in meaningful conversations and
                                                                        seek deeper connections.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Flexible and Adaptable



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to be open to change and willing to
                                                                        adapt your approach based on new information or
                                                                        feedback. This flexibility helps you navigate
                                                                        relationship dynamics effectively.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your adaptability can lead to innovative
                                                                        solutions in resolving conflicts or
                                                                        misunderstandings.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Focused on Growth


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value personal and relational growth, often
                                                                        seeking opportunities for self-improvement and
                                                                        development within your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This focus on growth encourages ongoing learning
                                                                        and evolution in your connections with others.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, showing genuine interest in your thoughts and
                                                            feelings. This enhances empathy and understanding.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Imagination:</strong>
                                                            Use your creativity to enhance interactions, incorporating
                                                            storytelling or creative expression in conversations.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Seek Diverse Perspectives:</strong>
                                                            Actively encourage input from others in group settings,
                                                            valuing different viewpoints and fostering a collaborative
                                                            atmosphere.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.


                                                        </li>
                                                    </ul>
                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 13): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As aVisionary Dreamer or Conceptual Creative, your approach to
                                                        relationships is characterized by creativity, empathy, and a
                                                        strong focus on connection and collaboration. You value
                                                        meaningful interactions and often seek to foster deeper
                                                        understanding in your relationships. Here’s how your
                                                        relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You have a natural ability to empathize with
                                                                        others, tuning into your emotions and feelings.
                                                                        This sensitivity helps you build strong
                                                                        connections and supports open dialogue.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic nature
                                                                        allows for deeper relational dynamics, fostering
                                                                        trust and mutual understanding.


                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Creative Communicator

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You express your thoughts and feelings in
                                                                        imaginative ways, often using storytelling,
                                                                        metaphors, or creative analogies to convey your
                                                                        ideas.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This creativity in
                                                                        communication makes interactions more engaging
                                                                        and encourages others to think differently.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Collaborative and Inclusive


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in relationships that involve
                                                                        collaboration and teamwork. You appreciate
                                                                        working together with others to achieve common
                                                                        goals, emphasizing shared responsibilities.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your collaborative spirit enhances group
                                                                        dynamics and fosters a sense of belonging among
                                                                        peers.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Visionary and Inspirational


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your ability to envision possibilities
                                                                        encourages you to inspire those around you. You
                                                                        often share your ideals and aspirations,
                                                                        motivating others to pursue your dreams.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This visionary quality
                                                                        can uplift others and create a positive,
                                                                        motivating atmosphere in your relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Open and Honest

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value transparency in your interactions and
                                                                        prefer to communicate openly about your
                                                                        thoughts, feelings, and expectations. This
                                                                        honesty fosters trust and authenticity.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your straightforwardness encourages others to
                                                                        share your ideas and concerns, leading to more
                                                                        meaningful conversations.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Reflective and Thoughtful


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You take time to reflect on your interactions
                                                                        and the ideas presented during conversations.
                                                                        This thoughtful approach helps you consider
                                                                        different viewpoints before responding.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflection enhances your understanding and
                                                                        allows for deeper discussions.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Supportive and Nurturing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You often take on a supportive role in
                                                                        relationships, offering encouragement and
                                                                        validation to those around you. You enjoy
                                                                        uplifting others and celebrating your successes.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your supportive
                                                                        behavior creates a positive environment that
                                                                        fosters growth and collaboration.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Curious and Open-Minded


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You possess a natural curiosity about the world
                                                                        and the people around you. You enjoy exploring
                                                                        new ideas and concepts, which can lead to
                                                                        creative insights.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This curiosity allows
                                                                        you to engage in meaningful conversations and
                                                                        seek deeper connections.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Flexible and Adaptive



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to be open to change and willing to
                                                                        adapt your approach based on new information or
                                                                        feedback. This flexibility helps you navigate
                                                                        relationship dynamics effectively.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your adaptability can lead to innovative
                                                                        solutions in resolving conflicts or
                                                                        misunderstandings.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Focused on Growth


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You value personal and relational growth, often
                                                                        seeking opportunities for self-improvement and
                                                                        development within your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This focus on growth encourages ongoing learning
                                                                        and evolution in your connections with others.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, showing genuine interest in your thoughts and
                                                            feelings. This enhances empathy and understanding.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Imagination:</strong>
                                                            Use your creativity to enhance interactions, incorporating
                                                            storytelling or creative expression in conversations.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Seek Diverse Perspectives:</strong>
                                                            Actively encourage input from others in group settings,
                                                            valuing different viewpoints and fostering a collaborative
                                                            atmosphere.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            Take time to assess your communication style and behaviors
                                                            after discussions. Identify areas for improvement and
                                                            recognize your successes.


                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style as a LOW
                                                        L2 dominant individual, you can enhance your ability to connect
                                                        with others and foster meaningful, fulfilling relationships in
                                                        all areas of your life. Your imaginative thinking, empathetic
                                                        nature, and strong relational abilities make you a valuable
                                                        partner and contributor in any relationship.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 14): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator, your
                                                        approach to relationships is characterized by a strong focus on
                                                        logic, independence, and analytical thinking. You value clear
                                                        communication and practical solutions in your interactions with
                                                        others. Here’s how your relationship style typically manifests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Analytical and Rational


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong> Approach: </strong> You tend to
                                                                        approach relationships with a logical mindset,
                                                                        analyzing situations and emotions from a
                                                                        rational perspective. You often seek to
                                                                        understand the underlying issues rather than
                                                                        just the surface emotions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This analytical
                                                                        approach can help you navigate conflicts
                                                                        effectively, as you focus on finding practical
                                                                        solutions.


                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Independent and Self-Sufficient

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You value your
                                                                        independence and may prefer to solve problems on
                                                                        your own. While you appreciate support from
                                                                        others, you are comfortable relying on your own
                                                                        abilities.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This self-sufficiency
                                                                        fosters a sense of confidence in your
                                                                        relationships, as you do not overly depend on
                                                                        others for validation or emotional support.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Clear and Direct Communicator


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong> You prioritize clear,
                                                                        straightforward communication in your
                                                                        interactions. You appreciate directness and
                                                                        often value honesty, which can lead to more
                                                                        efficient discussions.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This clarity in communication reduces
                                                                        misunderstandings and helps foster open dialogue
                                                                        in your relationships.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Problem-Solver


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong> Approach: </strong>In relationships,
                                                                        you often take on the role of the
                                                                        problem-solver. When conflicts arise, you focus
                                                                        on analyzing the issues and finding logical
                                                                        solutions rather than dwelling on emotions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your ability to
                                                                        identify practical solutions can help resolve
                                                                        conflicts efficiently and strengthen the
                                                                        relationship over time.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Curious and Inquisitive

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You have a natural
                                                                        curiosity about people and relationships, which
                                                                        drives you to ask questions and seek a deeper
                                                                        understanding of others’ perspectives.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This inquisitiveness can foster meaningful
                                                                        connections and enhance your understanding of
                                                                        different viewpoints.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Supportive, Yet Analytical


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach: </strong>You may offer support
                                                                        to others in a logical manner, providing
                                                                        practical advice rather than emotional comfort.
                                                                        Your support often comes in the form of
                                                                        constructive feedback and solutions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This analytical support can be valuable for
                                                                        others, as it encourages them to think
                                                                        critically and develop your own problem-solving
                                                                        skills.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Boundary-Setting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You are likely to
                                                                        establish clear boundaries in your
                                                                        relationships, valuing your personal space and
                                                                        independence. You may need time alone to
                                                                        recharge and think through your feelings.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Setting boundaries can
                                                                        lead to healthier relationships, as it allows
                                                                        for mutual respect and understanding of personal
                                                                        needs.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Goal-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong> You tend to approach
                                                                        relationships with specific goals in mind,
                                                                        whether it’s improving communication, resolving
                                                                        conflicts, or achieving shared objectives.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This goal-oriented
                                                                        mindset can lead to productive and fulfilling
                                                                        partnerships, as both parties work towards
                                                                        common aspirations.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Introspective and Reflective



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You take time to
                                                                        reflect on your relationships and your role
                                                                        within them. This introspection allows you to
                                                                        assess what works and what doesn’t, leading to
                                                                        personal growth.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This reflective nature helps you identify areas
                                                                        for improvement in both yourself and the
                                                                        relationship.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Open to Feedback


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You are generally open
                                                                        to receiving feedback from partners and friends.
                                                                        You value constructive criticism that can help
                                                                        you grow and improve your interactions.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This openness fosters a culture of honesty and
                                                                        growth within your relationships, encouraging
                                                                        open dialogue and mutual support.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, demonstrating genuine interest in your
                                                            thoughts and feelings. This enhances understanding and
                                                            strengthens connections.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an environment where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Analytical Skills:</strong>
                                                            Use your analytical abilities to break down complex topics
                                                            during discussions, helping others understand your reasoning
                                                            and perspective.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Seek Feedback:</strong>
                                                            Regularly ask for feedback from peers or partners to refine
                                                            your communication style and ensure your ideas are conveyed
                                                            effectively.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            After conversations or meetings, take time to assess your
                                                            communication style and behaviors. Identify areas for
                                                            improvement and recognize your successes.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style as a LOW
                                                        R2 dominant individual, you can enhance your ability to connect
                                                        with others and foster meaningful, productive relationships in
                                                        all areas of your life. Your analytical thinking, independence,
                                                        and problem-solving mindset make you a valuable partner and
                                                        contributor in any relationship.


                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 15): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Relationship styles

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or Balanced
                                                        Integrator), your approach to relationships is characterized by
                                                        a blend of analytical thinking, creativity, and strong
                                                        relational skills. You value collaboration, open communication,
                                                        and the integration of diverse perspectives in your
                                                        interactions. Here’s how your relationship style typically
                                                        manifests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample1" aria-expanded="false"
                                                        aria-controls="collapseExample1">

                                                        Empathetic and Understanding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample1">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong> Approach: </strong>You prioritize
                                                                        empathy and strive to understand the feelings
                                                                        and perspectives of others. Your ability to
                                                                        connect on an emotional level fosters trust and
                                                                        openness in your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This empathy
                                                                        encourages deeper connections and helps create a
                                                                        supportive atmosphere where others feel valued.


                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2tab" aria-expanded="false"
                                                        aria-controls="collapseExample-2tab">

                                                        Collaborative and Cooperative

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You thrive in
                                                                        relationships that emphasize teamwork and
                                                                        collaboration. You enjoy working together with
                                                                        others to achieve common goals and find
                                                                        solutions to challenges.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your cooperative
                                                                        nature helps build strong partnerships and
                                                                        encourages collective problem-solving.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3tab" aria-expanded="false"
                                                        aria-controls="collapseExample-3tab">

                                                        Communicative and Open


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You value clear,
                                                                        honest communication and encourage open dialogue
                                                                        in your relationships. You believe that
                                                                        transparency fosters trust and strengthens
                                                                        connections.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your ability to articulate thoughts and feelings
                                                                        enhances understanding and reduces the
                                                                        likelihood of misunderstandings.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4tab" aria-expanded="false"
                                                        aria-controls="collapseExample-4tab">

                                                        Creative and Innovative


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong> Approach: </strong>You bring creativity
                                                                        into your relationships, often finding unique
                                                                        ways to express affection and resolve conflicts.
                                                                        Your innovative mindset allows you to think
                                                                        outside the box in various situations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This creativity keeps
                                                                        relationships dynamic and engaging, helping to
                                                                        maintain excitement and interest over time.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5tab" aria-expanded="false"
                                                        aria-controls="collapseExample-5tab">

                                                        Reflective and Introspective

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You take time to
                                                                        reflect on your relationships, assessing what
                                                                        works well and what could be improved. This
                                                                        introspection allows for personal growth and
                                                                        development within your connections.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        Your reflective nature helps you learn from
                                                                        experiences, making you a more understanding and
                                                                        responsive partner.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6tab" aria-expanded="false"
                                                        aria-controls="collapseExample-6tab">

                                                        Goal-Oriented


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach: </strong>You often approach
                                                                        relationships with specific goals in mind,
                                                                        whether it’s improving communication, resolving
                                                                        conflicts, or achieving shared objectives. You
                                                                        appreciate a sense of direction in your
                                                                        interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This focus on goals can lead to productive
                                                                        discussions and help maintain alignment in
                                                                        shared aspirations.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7tab" aria-expanded="false"
                                                        aria-controls="collapseExample-7tab">

                                                        Supportive and Encouraging


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You provide support
                                                                        and encouragement to friends, family, and
                                                                        partners, helping them achieve your goals and
                                                                        overcome challenges. Your supportive nature
                                                                        fosters a sense of belonging.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This encouragement
                                                                        strengthens bonds and promotes a positive
                                                                        atmosphere in your relationships.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8tab" aria-expanded="false"
                                                        aria-controls="collapseExample-8tab">

                                                        Open to Feedback


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You welcome
                                                                        constructive criticism and use it as an
                                                                        opportunity for growth. You value others'
                                                                        perspectives and see feedback as a way to
                                                                        enhance your relationships.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This openness creates
                                                                        an environment of mutual respect and promotes
                                                                        healthy communication.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9tab" aria-expanded="false"
                                                        aria-controls="collapseExample-9tab">

                                                        Flexible and Adaptable


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You are comfortable
                                                                        adjusting your communication style and
                                                                        expectations based on the needs of others. Your
                                                                        flexibility allows you to navigate different
                                                                        social dynamics effectively.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This adaptability helps you maintain harmony in
                                                                        relationships, even during challenging times.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10tab" aria-expanded="false"
                                                        aria-controls="collapseExample-10tab">

                                                        Curious and Inquisitive


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10tab">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Approach:</strong>You have a natural
                                                                        curiosity about people and your experiences,
                                                                        which drives you to ask questions and seek
                                                                        deeper understanding in your relationships.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>
                                                                        This inquisitiveness fosters meaningful
                                                                        conversations and enhances your relational
                                                                        dynamics.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Tips for Enhancing Relationships:
                                                    </h5>

                                                    <p class="explaining">
                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Practice Active Listening:</strong>Engage fully when
                                                            others speak, demonstrating genuine interest in your
                                                            thoughts and feelings. This enhances understanding and
                                                            strengthens connections.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Encourage Open Dialogue:</strong>
                                                            Create an atmosphere where everyone feels comfortable
                                                            sharing your ideas and feedback. Promote discussions that
                                                            value diverse perspectives.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leverage Your Analytical Skills:</strong>
                                                            Use your analytical abilities to break down complex topics
                                                            during discussions, helping others understand the reasoning
                                                            behind your thoughts.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Seek Feedback:</strong>
                                                            Regularly ask for feedback from peers or partners to refine
                                                            your communication style and ensure your ideas are conveyed
                                                            effectively.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Reflect on Interactions:</strong>
                                                            After conversations or meetings, take time to assess your
                                                            communication style and behaviors. Identify areas for
                                                            improvement and recognize your successes.

                                                        </li>
                                                    </ul>
                                                    </p>

                                                    <p class="explaining">
                                                        By understanding and embracing your relationship style as a
                                                        Quadruple Pie dominant individual, you can enhance your ability
                                                        to connect with others and foster meaningful, productive
                                                        relationships in all areas of your life. Your strengths in
                                                        empathy, collaboration, and creativity make you a valuable
                                                        partner and contributor in any relationship.



                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php else: ?>

                                        <div class="col-12 ">
                                            <h5 class="description-title"> No Relationship styles
                                                Available for
                                                this
                                                Brain Type
                                            </h5>

                                        </div>

                                        <?php endif; ?>


                                    </div>