<div class="p-3">
<div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">{{$compare_details->display_name}}</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">{{$compare_details->email}}</p>
                                            </div>
                                        </div>
                                        <?php if ($my_brain_profile_id == 1): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>



                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        For you with an <strong>Analytical brain </strong>, your
                                                        approach to job and work
                                                        is typically characterized by a focus on logic,
                                                        precision,
                                                        structure, and a desire for efficiency and optimization.
                                                        Here
                                                        are some key aspects of how you tend to approach your
                                                        careers:



                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Structured Work Environment:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    Analytical you excel in environments that
                                                                    offer
                                                                    clear structure, defined roles, and logical
                                                                    workflows. You prefer well-organized tasks
                                                                    where
                                                                    processes are streamlined, and objectives
                                                                    are
                                                                    clearly outlined. Ambiguity or lack of
                                                                    direction can
                                                                    be frustrating for them.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Strategic Team Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Problem-Solving and Analytical Thinking:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You enjoy jobs that allow them to use your
                                                                    analytical skills to solve complex problems.
                                                                    These
                                                                    you thrive on tasks that require critical
                                                                    thinking,
                                                                    data analysis, and decision-making based on
                                                                    facts
                                                                    and evidence. you prefer jobs that engage
                                                                    your
                                                                    intellect, where you can dissect problems
                                                                    and
                                                                    develop strategic solutions.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- Mind Sports --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Efficiency and Precision:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    Analytical thinkers are efficient workers
                                                                    who prefer
                                                                    to approach tasks methodically. You value
                                                                    accuracy
                                                                    and precision in your work, which is why you
                                                                    may
                                                                    focus on optimizing systems or processes to
                                                                    reduce
                                                                    errors and improve performance. This
                                                                    tendency makes
                                                                    them excellent in roles that require
                                                                    attention to
                                                                    detail.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Evidence-Based Decision Making:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    In the workplace, you rely on data and
                                                                    logical
                                                                    reasoning to make decisions. Rather than
                                                                    going by
                                                                    instinct or gut feelings, you prefer to
                                                                    gather all
                                                                    the necessary information, analyze it, and
                                                                    then make
                                                                    informed decisions. Jobs in fields like
                                                                    research,
                                                                    engineering, IT, finance, or data science
                                                                    are often
                                                                    a good fit for them.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                {{-- STEM - Related Extracurriculars --}}
                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Independence in Work:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    Analytical you often prefer working
                                                                    independently or
                                                                    within small teams where you have the
                                                                    autonomy to
                                                                    focus on your tasks. you are self-reliant
                                                                    and take
                                                                    responsibility for your work, often
                                                                    preferring
                                                                    minimal supervision as long as the
                                                                    objectives are
                                                                    clear.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Task-Oriented Approach:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    you tend to be highly task-oriented, meaning
                                                                    you
                                                                    focus on completing each task efficiently
                                                                    and
                                                                    effectively. you prefer to break large
                                                                    projects into
                                                                    smaller, manageable steps and work
                                                                    methodically to
                                                                    complete them. Multitasking or shifting
                                                                    between
                                                                    various responsibilities may not always be
                                                                    ideal, as
                                                                    you prefer deep focus on one task at a time.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Continual Improvement:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    you have a strong desire for personal and
                                                                    professional development. Analytical you
                                                                    often seek
                                                                    roles that offer opportunities for continual
                                                                    learning, growth, and improvement, either
                                                                    through
                                                                    formal education, certifications, or
                                                                    self-directed
                                                                    learning. you enjoy mastering new skills and
                                                                    improving your competencies over time.


                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Logical Communication Style:


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    In the workplace, you communicate in a
                                                                    straightforward and logical manner, often
                                                                    focusing
                                                                    on facts and data to support your arguments
                                                                    or
                                                                    ideas. you may not engage as much in
                                                                    emotional or
                                                                    subjective conversations but rather prefer
                                                                    discussions that are focused on
                                                                    problem-solving and
                                                                    actionable outcomes.

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Best Job and Work
                                                        Environments
                                                        for Analytical Brains:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            Structured environments with clear goals and
                                                            processes.


                                                        </li>

                                                        <li class="comparison-description">
                                                            Roles that require problem-solving, critical
                                                            thinking, and
                                                            data analysis.


                                                        </li>

                                                        <li class="comparison-description">
                                                            Jobs that value precision, accuracy, and logical
                                                            decision-making.


                                                        </li>

                                                        <li class="comparison-description">
                                                            Positions offering autonomy and independent work.


                                                        </li>

                                                        <li class="comparison-description">
                                                            Tasks that are well-defined, with a focus on
                                                            efficiency.


                                                        </li>

                                                        <li class="comparison-description">
                                                            Opportunities for continual learning and skill
                                                            improvement.

                                                        </li>

                                                        <li class="comparison-description">
                                                            Jobs that reward evidence-based approaches and
                                                            logical
                                                            communication.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        Fields like engineering, IT, research, finance,
                                                        operations, and
                                                        data science are often well-suited to Analytical you, as
                                                        you
                                                        leverage your natural strengths in logic, precision, and
                                                        structured problem-solving.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

       
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a practical thinker, your brain is wired for
                                                        systematic,
                                                        structured approaches to tasks and challenges. You
                                                        thrive in
                                                        roles where precision, logical analysis, and methodical
                                                        problem-solving are valued. Your natural strengths lie
                                                        in
                                                        breaking down complex problems into manageable parts,
                                                        organizing
                                                        information, and applying practical solutions. Here are
                                                        the
                                                        types of jobs and work environments that align with your
                                                        brain:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Jobs that Require Logical and Analytical Thinking


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You are most comfortable in roles where you
                                                                    can use
                                                                    logic, reasoning, and structured thought
                                                                    processes
                                                                    to analyze data, solve problems, and
                                                                    implement
                                                                    solutions. Jobs in these fields often
                                                                    involve clear
                                                                    processes and measurable outcomes.
                                                                </p>

                                                                <h5 class="description-title">Job Roles:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Engineer (Civil, Mechanical,
                                                                            Electrical)
                                                                        </strong>You enjoy solving technical
                                                                        problems,
                                                                        designing systems, and working within
                                                                        structured
                                                                        environments.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Data Analyst / Data Scientist
                                                                        </strong>You excel in analyzing large
                                                                        data sets,
                                                                        identifying patterns, and developing
                                                                        data-driven
                                                                        strategies.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Financial Analyst</strong>You
                                                                        are
                                                                        skilled in examining financial data,
                                                                        developing
                                                                        budgets, and forecasting trends based on
                                                                        logical
                                                                        analysis.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Accountant / Auditor
                                                                        </strong>Your attention to detail and
                                                                        need for
                                                                        precision make accounting and auditing
                                                                        natural
                                                                        fits, as you involve working with data
                                                                        and
                                                                        financial systems in a methodical way.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Operations Manager
                                                                        </strong>Managing operational processes
                                                                        and
                                                                        optimizing systems for efficiency is an
                                                                        ideal
                                                                        role for someone who prefers structure
                                                                        and
                                                                        organization.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Jobs that Involve Precision and Attention to Detail


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    As a detail-oriented individual, you excel
                                                                    in jobs
                                                                    that require accuracy, consistency, and
                                                                    careful
                                                                    attention to every aspect of the task. You
                                                                    enjoy
                                                                    roles where each step follows a logical
                                                                    progression
                                                                    and where small details matter.

                                                                </p>

                                                                <h5 class="description-title">Job Roles:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Architect
                                                                        </strong>The combination of logical
                                                                        design,
                                                                        technical precision, and planning in
                                                                        architecture aligns well with your
                                                                        strengths.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Quality Control Specialist
                                                                        </strong>You are naturally suited to
                                                                        roles where
                                                                        you ensure that products or services
                                                                        meet
                                                                        specific standards, as this involves
                                                                        detailed
                                                                        inspections and logical problem-solving.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Pharmacist
                                                                        </strong>The structured, detail-oriented
                                                                        nature
                                                                        of preparing and dispensing medications
                                                                        fits
                                                                        your need for precision.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Research Scientist
                                                                        </strong>Conducting experiments,
                                                                        analyzing
                                                                        results, and developing solutions based
                                                                        on
                                                                        meticulous data fits your logical
                                                                        approach to
                                                                        work.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Jobs with Structured Processes and Clear Procedures


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You perform best in environments that
                                                                    provide clear,
                                                                    defined procedures and processes. Ambiguity
                                                                    or
                                                                    rapidly changing tasks may cause discomfort,
                                                                    so
                                                                    structured roles where expectations are set
                                                                    and
                                                                    followed consistently are a good match.

                                                                </p>

                                                                <h5 class="description-title">Job Roles:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Project Manager
                                                                        </strong>Managing projects with defined
                                                                        timelines, resources, and goals allows
                                                                        you to
                                                                        apply your organizational skills and
                                                                        methodical
                                                                        approach.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Supply Chain Manager
                                                                        </strong>The systematic planning and
                                                                        coordination involved in supply chain
                                                                        management
                                                                        match your preference for organization
                                                                        and
                                                                        process optimization.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>IT Systems Administrator
                                                                        </strong>Ensuring that IT systems
                                                                        function
                                                                        smoothly and addressing technical issues
                                                                        with
                                                                        clear protocols aligns with your
                                                                        structured
                                                                        thinking.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Database Administrator
                                                                        </strong>The logical structuring and
                                                                        organization of data in a database
                                                                        environment
                                                                        fits well with your methodical,
                                                                        detail-oriented
                                                                        mindset.
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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Jobs Involving Practical Application and Problem-Solving


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    You enjoy roles that allow you to take a
                                                                    problem,
                                                                    analyze it from a logical standpoint, and
                                                                    implement
                                                                    practical solutions. Jobs that combine
                                                                    theoretical
                                                                    knowledge with practical application are
                                                                    particularly appealing to you.


                                                                </p>

                                                                <h5 class="description-title">Job Roles:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Software Developer / Programmer
                                                                        </strong>Writing code, solving technical
                                                                        challenges, and developing software in a
                                                                        systematic way is a great fit for your
                                                                        logical,
                                                                        problem-solving nature.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Mechanical Technician
                                                                        </strong>Working on machinery,
                                                                        diagnosing
                                                                        issues, and repairing them in a
                                                                        hands-on,
                                                                        structured manner appeals to your
                                                                        practical
                                                                        mindset.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Logistics Manager
                                                                        </strong>Managing logistics,
                                                                        coordinating
                                                                        shipments, and solving distribution
                                                                        challenges
                                                                        fit your practical approach to complex
                                                                        problems.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Urban Planner
                                                                        </strong>Planning cities and urban areas
                                                                        with a
                                                                        logical, structured approach to land
                                                                        use,
                                                                        infrastructure, and environmental
                                                                        sustainability
                                                                        fits your strengths.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Roles Involving Continuous Improvement and Efficiency


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    As a practical thinker, you thrive in jobs
                                                                    that
                                                                    focus on improving systems, increasing
                                                                    efficiency,
                                                                    and reducing waste. Your logical mind can
                                                                    easily
                                                                    identify inefficiencies and suggest
                                                                    practical
                                                                    solutions to optimize performance.

                                                                </p>

                                                                <h5 class="description-title">Job Roles:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Process Improvement Specialist
                                                                        </strong>Analyzing workflows and
                                                                        developing
                                                                        strategies to streamline processes fits
                                                                        your
                                                                        talent for systematic problem-solving.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Lean Manufacturing Consultant
                                                                        </strong>Reducing waste, improving
                                                                        production
                                                                        systems, and implementing efficiency
                                                                        models
                                                                        aligns with your logical thinking and
                                                                        attention
                                                                        to detail.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Business Analyst
                                                                        </strong>You enjoy analyzing business
                                                                        processes,
                                                                        identifying bottlenecks, and suggesting
                                                                        improvements to drive efficiency.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Work Environments Suited for your brain


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                    In addition to specific jobs, the work
                                                                    environment
                                                                    itself plays a significant role in your
                                                                    satisfaction
                                                                    and productivity. Here’s what you’ll thrive
                                                                    on:
                                                                </p>

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Structured and Organized
                                                                            Workplaces
                                                                        </strong>You prefer environments where
                                                                        tasks are
                                                                        well-defined, and there is minimal
                                                                        ambiguity.
                                                                        Having clear goals, set procedures, and
                                                                        well-organized systems allows you to
                                                                        focus on
                                                                        executing tasks efficiently.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Autonomy with Clear Expectations
                                                                        </strong>While you enjoy working
                                                                        independently,
                                                                        you perform best when expectations are
                                                                        clearly
                                                                        communicated. You prefer having a set
                                                                        framework
                                                                        within which you can operate
                                                                        autonomously.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Problem-Solving Oriented
                                                                        </strong>You enjoy environments that
                                                                        present
                                                                        challenges but give you the time and
                                                                        resources
                                                                        to solve problems logically. Fast-paced,
                                                                        reactive environments may be less
                                                                        appealing
                                                                        unless there’s a structured
                                                                        problem-solving
                                                                        element.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Focus on Results and Efficiency
                                                                        </strong>Workplaces that prioritize
                                                                        results,
                                                                        data, and measurable outcomes suit your
                                                                        logical
                                                                        mindset. You prefer to work where
                                                                        performance is
                                                                        based on tangible achievements rather
                                                                        than
                                                                        abstract concepts.

                                                                    </li>
                                                                </ul>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Conclusion
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a practical thinker, you excel in jobs and
                                                        environments that
                                                        provide structure, logical challenges, and opportunities
                                                        for
                                                        practical problem-solving. Your strengths in
                                                        organization,
                                                        precision, and systematic thinking will lead to success
                                                        in roles
                                                        that require attention to detail, logical reasoning, and
                                                        methodical processes. Emphasizing jobs with clear
                                                        expectations,
                                                        autonomy, and a focus on results will ensure that you
                                                        maximize
                                                        your potential and find fulfillment in your career.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

   

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Empathetic Connector, Relational Harmonizer, or
                                                        Compassionate Thinker, you excel in careers that
                                                        emphasize
                                                        emotional intelligence, collaboration, and
                                                        relationship-building. You are drawn to roles where you
                                                        can
                                                        connect with others, support your growth, and foster a
                                                        positive
                                                        environment. Here are the types of jobs and work
                                                        environments
                                                        that align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Careers in Counseling and Therapy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Mental Health
                                                                        Counselor, Marriage and
                                                                        Family Therapist, School Counselor

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> These
                                                                        roles allow
                                                                        you to use your
                                                                        empathy and understanding of human
                                                                        emotions to
                                                                        help you navigate your challenges. You
                                                                        excel in
                                                                        providing support and creating safe
                                                                        spaces for
                                                                        clients to express themselves.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Education and Teaching


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Teacher,
                                                                        Special
                                                                        Education Instructor, Educational
                                                                        Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> In
                                                                        education, you
                                                                        can make a significant impact on
                                                                        students' lives
                                                                        by fostering a supportive learning
                                                                        environment.
                                                                        Your ability to connect with students on
                                                                        an
                                                                        emotional level enhances your learning
                                                                        experience.


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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Human Resources


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> HR Manager,
                                                                        Employee
                                                                        Relations Specialist, Talent Development
                                                                        Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> HR roles
                                                                        focus on
                                                                        building positive workplace
                                                                        relationships and
                                                                        supporting employee well-being. Your
                                                                        natural
                                                                        ability to empathize and understand
                                                                        others makes
                                                                        you effective in resolving conflicts and
                                                                        promoting a healthy work culture.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Social Work


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Social
                                                                        Worker,
                                                                        Community Outreach Coordinator, Child
                                                                        Welfare
                                                                        Advocate


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Social work
                                                                        is
                                                                        centered around helping you and
                                                                        communities
                                                                        improve your circumstances. Your
                                                                        compassion and
                                                                        desire to support others align perfectly
                                                                        with
                                                                        the mission of social work.


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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Healthcare Professions


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Nurse,
                                                                        Occupational
                                                                        Therapist, Physician Assistant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> In
                                                                        healthcare, you
                                                                        have the opportunity to care for you and
                                                                        support
                                                                        your emotional and physical well-being.
                                                                        Your
                                                                        ability to connect with patients
                                                                        enhances your
                                                                        experience and fosters trust.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Public Relations and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Public
                                                                        Relations
                                                                        Specialist, Community Manager,
                                                                        Communications
                                                                        Director


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> These
                                                                        roles
                                                                        require strong interpersonal skills and
                                                                        the
                                                                        ability to build relationships with the
                                                                        public,
                                                                        clients, and stakeholders. Your
                                                                        empathetic
                                                                        communication style helps you convey
                                                                        messages
                                                                        effectively and foster positive
                                                                        interactions.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Nonprofit and Community Organizations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Program
                                                                        Coordinator,
                                                                        Fundraising Manager, Community
                                                                        Development
                                                                        Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        nonprofits allows you to focus on social
                                                                        causes
                                                                        and community well-being. Your passion
                                                                        for
                                                                        helping others and building connections
                                                                        can
                                                                        drive positive change in your community.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Mediation and Conflict Resolution


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Mediator,
                                                                        Conflict
                                                                        Resolution Specialist, Family Mediator
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In
                                                                        mediation roles,
                                                                        you use your relational skills to help
                                                                        parties
                                                                        find common ground and resolve disputes.
                                                                        Your
                                                                        ability to empathize and understand
                                                                        different
                                                                        perspectives is essential in these
                                                                        situations.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Creative Arts (Therapeutic)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Art Therapist,
                                                                        Music
                                                                        Therapist, Drama Therapist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Using the
                                                                        arts as a
                                                                        form of therapy allows you to connect
                                                                        with you
                                                                        emotionally and creatively. Your
                                                                        compassionate
                                                                        nature can help clients express
                                                                        themselves and
                                                                        heal through creative outlets.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Customer Service and Client Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Customer
                                                                        Service
                                                                        Representative, Account Manager, Client
                                                                        Success
                                                                        Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        strong interpersonal skills and the
                                                                        ability to
                                                                        understand customer needs. Your
                                                                        empathetic
                                                                        approach enhances client relationships
                                                                        and
                                                                        ensures satisfaction.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Research in Social Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Social
                                                                        Researcher,
                                                                        Policy Analyst, Market Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Research
                                                                        roles that
                                                                        focus on human behavior and social
                                                                        dynamics
                                                                        align with your interest in
                                                                        understanding and
                                                                        improving human interactions. Your
                                                                        analytical
                                                                        skills combined with empathy can yield
                                                                        valuable
                                                                        insights.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Leadership and Team Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Team Leader,
                                                                        Project
                                                                        Manager, Program Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In
                                                                        leadership
                                                                        positions, you can guide and inspire
                                                                        teams while
                                                                        fostering collaboration and emotional
                                                                        support.
                                                                        Your relational strengths will help you
                                                                        create a
                                                                        cohesive and motivated group.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-13" aria-expanded="false"
                                                        aria-controls="collapseExample-13">

                                                        Life Coaching and Personal Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Life Coach,
                                                                        Wellness
                                                                        Coach, Career Coach

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Coaching
                                                                        roles
                                                                        allow you to guide you in your personal
                                                                        and
                                                                        professional growth. Your empathy and
                                                                        understanding enable you to provide
                                                                        valuable
                                                                        insights and support to help others
                                                                        achieve your
                                                                        goals.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-14" aria-expanded="false"
                                                        aria-controls="collapseExample-14">

                                                        Event Planning


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Event
                                                                        Coordinator,
                                                                        Wedding Planner, Community Event
                                                                        Organizer
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Event
                                                                        planning
                                                                        involves coordinating with various
                                                                        stakeholders
                                                                        and ensuring that every detail is
                                                                        attended to.
                                                                        Your relational skills help you
                                                                        understand
                                                                        client needs and create memorable
                                                                        experiences.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-15" aria-expanded="false"
                                                        aria-controls="collapseExample-15">

                                                        Advocacy and Activism


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Advocacy
                                                                        Coordinator,
                                                                        Community Organizer, Human Rights
                                                                        Advocate

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        advocacy
                                                                        allows you to promote social justice and
                                                                        connect
                                                                        with you who are affected by various
                                                                        issues.
                                                                        Your compassion drives you to support
                                                                        those in
                                                                        need and make a difference in your
                                                                        lives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative Atmosphere
                                                            </strong>You thrive in environments that emphasize
                                                            teamwork
                                                            and collective problem-solving. A supportive
                                                            workplace
                                                            culture encourages open communication and fosters
                                                            strong
                                                            relationships.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Supportive Environment
                                                            </strong>You prefer workplaces that allow for
                                                            flexibility in
                                                            work arrangements and prioritize employee
                                                            well-being. This
                                                            creates a supportive atmosphere conducive to
                                                            emotional
                                                            health.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Positive and Inclusive Culture
                                                            </strong>You excel in environments where diversity,
                                                            inclusion, and respect for all you are prioritized.
                                                            A
                                                            positive culture enhances your ability to connect
                                                            with
                                                            others and feel valued.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Growth and Development
                                                            </strong>You seek roles that offer opportunities for
                                                            personal and professional development, allowing you
                                                            to
                                                            expand your skills and make a meaningful impact on
                                                            others.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Emotional Intelligence
                                                            </strong>Workplaces that value emotional
                                                            intelligence and
                                                            interpersonal skills align well with your strengths,
                                                            allowing you to contribute meaningfully while
                                                            fostering
                                                            connection and understanding.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a relational thinker, you are naturally inclined
                                                        toward
                                                        careers that emphasize empathy, connection, and
                                                        relationship-building. Your strengths in emotional
                                                        intelligence
                                                        and collaboration make you an asset in various roles
                                                        focused on
                                                        helping others and creating positive social dynamics. By
                                                        pursuing career paths that align with your relational
                                                        strengths,
                                                        you can thrive in environments where you make a
                                                        meaningful
                                                        impact on you and communities.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

 

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As an Innovative Maverick, Creative Visionary, or
                                                        Non-Conformist
                                                        Thinker, you are drawn to careers that allow for
                                                        creativity,
                                                        originality, and innovation. You thrive in environments
                                                        where
                                                        you can express your unique ideas, challenge
                                                        conventions, and
                                                        explore new possibilities. Here are the types of jobs
                                                        and work
                                                        environments that align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Industries


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Graphic
                                                                        Designer,
                                                                        Illustrator, Animator, Fashion Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> These
                                                                        roles allow
                                                                        you to unleash your creativity and
                                                                        express your
                                                                        ideas visually. You enjoy projects that
                                                                        encourage artistic exploration and
                                                                        innovation.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Startup
                                                                        Founder,
                                                                        Business Innovator, Product Developer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        innovative
                                                                        mindset is ideal for entrepreneurship,
                                                                        where you
                                                                        can develop and launch new products or
                                                                        services
                                                                        that challenge the status quo. You
                                                                        thrive on
                                                                        identifying gaps in the market and
                                                                        finding
                                                                        unique solutions.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Media and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Content
                                                                        Creator,
                                                                        Social Media Manager, Public Relations
                                                                        Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In media
                                                                        and
                                                                        communications, you can explore
                                                                        innovative ways
                                                                        to share stories and connect with
                                                                        diverse
                                                                        audiences. Your creativity shines in
                                                                        crafting
                                                                        engaging content and campaigns.


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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Marketing and Advertising


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Marketing
                                                                        Strategist,
                                                                        Brand Manager, Creative Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Marketing
                                                                        allows
                                                                        you to think outside the box and develop
                                                                        unique
                                                                        strategies to promote products and
                                                                        services.
                                                                        Your creative approach can lead to
                                                                        compelling
                                                                        campaigns that resonate with consumers.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Performing Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Actor, Dancer,
                                                                        Musician, Director
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        the
                                                                        performing arts allows you to express
                                                                        your
                                                                        creativity and connect with audiences on
                                                                        an
                                                                        emotional level. You thrive in
                                                                        collaborative
                                                                        environments where storytelling is
                                                                        central.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Technology and Innovation


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Software
                                                                        Developer,
                                                                        Game Designer, UX/UI Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> The tech
                                                                        industry
                                                                        provides opportunities for creative
                                                                        problem-solving and innovation. You can
                                                                        explore
                                                                        new technologies and design user
                                                                        experiences
                                                                        that challenge traditional paradigms.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Product
                                                                        Researcher,
                                                                        Innovation Consultant, Scientific
                                                                        Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>R&D roles
                                                                        allow you
                                                                        to engage in exploratory thinking and
                                                                        push the
                                                                        boundaries of knowledge. You enjoy
                                                                        investigating
                                                                        new ideas and finding ways to implement
                                                                        them
                                                                        practically.



                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Art and Design Education


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Art Teacher,
                                                                        Design
                                                                        Instructor, Workshop Facilitator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Sharing
                                                                        your
                                                                        creative knowledge and inspiring others
                                                                        in the
                                                                        arts allows you to cultivate a new
                                                                        generation of
                                                                        thinkers. You can foster an environment
                                                                        of
                                                                        creativity and exploration in
                                                                        educational
                                                                        settings.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Social Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Nonprofit
                                                                        Founder,
                                                                        Community Organizer, Social Innovator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This field
                                                                        allows
                                                                        you to combine creativity with a desire
                                                                        to make
                                                                        a positive impact. You can develop
                                                                        innovative
                                                                        solutions to social issues while
                                                                        fostering
                                                                        community engagement.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Culinary Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Chef, Food
                                                                        Stylist,
                                                                        Recipe Developer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        culinary arts allows you to express your
                                                                        creativity through food. You enjoy
                                                                        experimenting
                                                                        with flavors and presentation to create
                                                                        unique
                                                                        dining experiences.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Consulting and Coaching


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Business
                                                                        Consultant,
                                                                        Creative Coach, Life Coach

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> In
                                                                        consulting
                                                                        roles, you can help others think
                                                                        creatively and
                                                                        innovate within your organizations. Your
                                                                        unique
                                                                        perspective can provide valuable
                                                                        insights for
                                                                        clients.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Writing and Content Creation


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Author,
                                                                        Blogger,
                                                                        Screenwriter, Copywriter

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Writing
                                                                        allows you
                                                                        to explore ideas and express your
                                                                        thoughts
                                                                        creatively. You enjoy crafting
                                                                        compelling
                                                                        narratives that resonate with readers.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Atmosphere
                                                            </strong>You thrive in environments that allow for
                                                            flexibility and adaptability. A workplace that
                                                            embraces
                                                            change and encourages experimentation aligns with
                                                            your
                                                            creative mindset.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Inclusive Culture
                                                            </strong>You prefer to work in teams where
                                                            collaboration is
                                                            emphasized. A supportive environment that values
                                                            diverse
                                                            perspectives fosters your creativity and encourages
                                                            innovation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Open to New Ideas
                                                            </strong>You excel in environments that welcome
                                                            unconventional thinking and challenge the status
                                                            quo. Being
                                                            around other creative you enhances your ability to
                                                            generate
                                                            new ideas.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Professional Development
                                                            </strong>You seek roles that offer opportunities for
                                                            growth
                                                            and skill development. Continuous learning and
                                                            exploration
                                                            are vital to your personal and professional journey.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Innovation
                                                            </strong>Workplaces that prioritize innovation and
                                                            creative
                                                            problem-solving resonate with your strengths. You
                                                            enjoy
                                                            being in environments that encourage risk-taking and
                                                            original thought.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Maverick , you are naturally inclined toward
                                                        careers that
                                                        emphasize creativity, innovation, and originality. Your
                                                        strengths in imaginative thinking and a non-conformist
                                                        approach
                                                        make you an asset in various fields focused on
                                                        challenging
                                                        conventions and driving change. By pursuing career paths
                                                        that
                                                        align with your creative strengths, you can thrive in
                                                        environments where your unique perspective and
                                                        innovative ideas
                                                        can make a significant impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>



                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Balanced Logical Thinker or Dual
                                                        Analytical-Practical, you
                                                        are drawn to careers that allow for logical analysis,
                                                        practical
                                                        problem-solving, and structured environments. You thrive
                                                        in
                                                        roles where you can apply critical thinking and deliver
                                                        tangible
                                                        results. Here are the types of jobs and work
                                                        environments that
                                                        align with your strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Analytical Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Data Analyst,
                                                                        Statistician, Research Scientist
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        strong analytical skills to interpret
                                                                        data and
                                                                        derive meaningful insights. You enjoy
                                                                        working
                                                                        with numbers and evidence to inform
                                                                        decisions.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Engineering


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Mechanical
                                                                        Engineer,
                                                                        Civil Engineer, Software Engineer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        combines analytical thinking with
                                                                        practical
                                                                        application. You can apply your logical
                                                                        skills
                                                                        to design and develop solutions to
                                                                        real-world
                                                                        problems.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Project Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Project
                                                                        Manager,
                                                                        Operations Manager, Business Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Project
                                                                        management
                                                                        requires strong organizational skills
                                                                        and the
                                                                        ability to analyze and optimize
                                                                        processes. You
                                                                        enjoy ensuring that projects are
                                                                        completed
                                                                        efficiently and on time.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Finance and Accounting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Financial
                                                                        Analyst,
                                                                        Accountant, Budget Analyst


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These
                                                                        careers
                                                                        emphasize analytical reasoning and
                                                                        precision in
                                                                        managing financial data. You can apply
                                                                        your
                                                                        logical thinking to make informed
                                                                        financial
                                                                        decisions.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Information Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>IT Consultant,
                                                                        Systems
                                                                        Analyst, Network Administrator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> IT roles
                                                                        often
                                                                        require problem-solving skills and the
                                                                        ability
                                                                        to implement practical solutions for
                                                                        technical
                                                                        issues, making them a great fit for your
                                                                        strengths.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Healthcare and Medical Professions


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Health
                                                                        Services
                                                                        Manager, Medical Researcher, Healthcare
                                                                        Analyst


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These
                                                                        positions
                                                                        require analytical skills to assess
                                                                        health data
                                                                        and implement effective strategies for
                                                                        patient
                                                                        care and public health.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Educator,
                                                                        Corporate
                                                                        Trainer, Instructional Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In
                                                                        education, you
                                                                        can apply structured approaches to
                                                                        teaching and
                                                                        training, using logical frameworks to
                                                                        help
                                                                        others learn effectively.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Consulting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Management
                                                                        Consultant,
                                                                        Business Consultant, Policy Advisor
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Consulting
                                                                        allows
                                                                        you to leverage your analytical skills
                                                                        to assess
                                                                        problems and propose practical solutions
                                                                        for
                                                                        organizations and businesses.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>R&D
                                                                        Specialist,
                                                                        Product Developer, Clinical Research
                                                                        Associate
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        involve
                                                                        analytical thinking and experimentation,
                                                                        allowing you to explore innovative
                                                                        solutions
                                                                        while applying logical frameworks.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Public Policy and Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Policy
                                                                        Analyst, Public
                                                                        Administrator, Legislative Assistant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        public
                                                                        policy allows you to analyze data and
                                                                        create
                                                                        practical policies that address societal
                                                                        needs,
                                                                        making a positive impact.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Marketing and Market Research


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Market
                                                                        Research
                                                                        Analyst, Marketing Strategist, Brand
                                                                        Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        the ability to analyze market trends and
                                                                        consumer behavior, allowing you to
                                                                        develop
                                                                        data-driven marketing strategies.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Quality Assurance and Control


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Quality
                                                                        Control
                                                                        Analyst, Compliance Officer, Safety
                                                                        Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You can
                                                                        apply your
                                                                        analytical skills to ensure that
                                                                        products and
                                                                        processes meet established standards,
                                                                        focusing
                                                                        on precision and quality.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Structured and Organized Atmosphere
                                                            </strong>You thrive in environments that provide
                                                            clear
                                                            guidelines and structured workflows. A
                                                            well-organized
                                                            workplace helps you perform at your best.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Team-Oriented Culture
                                                            </strong>You prefer to work in teams where
                                                            collaboration and
                                                            logical discussion are encouraged. A supportive team
                                                            environment fosters productivity and enhances
                                                            creativity.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Data and Evidence-Based Decisions
                                                            </strong>Workplaces that prioritize data-driven
                                                            decision-making align with your strengths. You enjoy
                                                            environments where analytical skills are valued.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Professional Development
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            opportunities for growth. A focus on skill
                                                            development is
                                                            vital to your personal and professional journey.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Practical Problem-Solving
                                                            </strong>You enjoy environments that encourage
                                                            practical
                                                            solutions to challenges. Workplaces that value
                                                            innovative
                                                            problem-solving resonate with your strengths.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        analytical thinking, practical problem-solving, and
                                                        structured
                                                        learning. Your strengths in logical reasoning and
                                                        attention to
                                                        detail make you an asset in various fields focused on
                                                        delivering
                                                        tangible results and driving improvements. By pursuing
                                                        career
                                                        paths that align with your strengths, you can thrive in
                                                        environments where your unique perspective and
                                                        problem-solving
                                                        abilities can make a significant impact.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Relational Creative or Creative Connector, you are
                                                        drawn to
                                                        careers that emphasize creativity, collaboration, and
                                                        the
                                                        ability to connect with others on an emotional level.
                                                        You thrive
                                                        in environments that allow for creative expression and
                                                        interpersonal engagement. Here are the types of jobs and
                                                        work
                                                        environments that align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Industries


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Graphic
                                                                        Designer,
                                                                        Illustrator, Art Director, Writer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        allow
                                                                        you to express your creativity while
                                                                        connecting
                                                                        with others through your work. You enjoy
                                                                        projects that require artistic vision
                                                                        and
                                                                        innovation.


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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Performing Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Actor, Dancer,
                                                                        Musician, Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Engaging
                                                                        in the
                                                                        performing arts enables you to connect
                                                                        emotionally with audiences while
                                                                        collaborating
                                                                        with other creative you.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Educator,
                                                                        Corporate
                                                                        Trainer, Instructional Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Teaching
                                                                        allows you
                                                                        to inspire and support others in your
                                                                        learning
                                                                        journeys, using your creativity to make
                                                                        education engaging and impactful.


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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Marketing and Public Relations

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Marketing
                                                                        Coordinator,
                                                                        PR Specialist, Brand Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        creative thinking and the ability to
                                                                        connect
                                                                        with diverse audiences. Your relational
                                                                        skills
                                                                        enhance your effectiveness in crafting
                                                                        compelling narratives.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Social and Community Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Social Worker,
                                                                        Community Organizer, Counselor

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You excel
                                                                        in roles
                                                                        that focus on building relationships and
                                                                        helping
                                                                        others. Your empathy and understanding
                                                                        of human
                                                                        behavior make you well-suited for these
                                                                        positions.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Media and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Journalist,
                                                                        Content
                                                                        Creator, Social Media Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        media
                                                                        allows you to express your creativity
                                                                        while
                                                                        connecting with audiences through
                                                                        storytelling
                                                                        and information dissemination.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Design and Creative Direction


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Interior
                                                                        Designer,
                                                                        Fashion Designer, User Experience (UX)
                                                                        Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        allow
                                                                        you to blend creativity with practical
                                                                        applications, creating visually
                                                                        appealing and
                                                                        functional designs.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Event Planning and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Event
                                                                        Coordinator,
                                                                        Wedding Planner, Festival Organizer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Planning
                                                                        and
                                                                        organizing events allows you to use your
                                                                        creativity and relational skills to
                                                                        create
                                                                        memorable experiences for others.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Nonprofit and Advocacy Work


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Nonprofit
                                                                        Director,
                                                                        Advocacy Coordinator, Fundraising
                                                                        Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        the
                                                                        nonprofit sector allows you to connect
                                                                        with your
                                                                        community and advocate for causes you
                                                                        are
                                                                        passionate about, utilizing your
                                                                        relational
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
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Research and Development in Creative Fields


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Market
                                                                        Research
                                                                        Analyst, Creative Researcher, Innovation
                                                                        Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>R&D roles
                                                                        allow you
                                                                        to explore new ideas while collaborating
                                                                        with
                                                                        teams to develop innovative solutions.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Startup
                                                                        Founder,
                                                                        Creative Entrepreneur, Freelance Artist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        creative
                                                                        vision and relational skills enable you
                                                                        to
                                                                        connect with clients and collaborators,
                                                                        making
                                                                        you well-suited for entrepreneurial
                                                                        ventures.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Inclusive Culture
                                                            </strong>You thrive in environments that encourage
                                                            teamwork
                                                            and value diverse perspectives. A supportive
                                                            atmosphere
                                                            enhances your creativity and motivation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Atmosphere
                                                            </strong>You prefer work environments that allow for
                                                            creativity and flexibility. Being able to explore
                                                            different
                                                            approaches keeps you engaged and inspired.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Creativity and Innovation
                                                            </strong>Workplaces that prioritize creative
                                                            thinking and
                                                            innovative problem-solving resonate with your
                                                            strengths. You
                                                            enjoy environments where new ideas are welcomed.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal Growth
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            development. Professional growth is important to
                                                            you, as it
                                                            aligns with your desire to evolve creatively.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Connection and Relationship
                                                                Building
                                                            </strong>You value environments where building
                                                            relationships
                                                            and networking is encouraged. Connecting with others
                                                            enhances your work experience and fosters
                                                            collaboration.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        creativity, relational skills, and collaboration. Your
                                                        strengths
                                                        in empathy, innovative thinking, and communication make
                                                        you an
                                                        asset in various fields focused on expressing ideas and
                                                        connecting with others. By pursuing career paths that
                                                        align with
                                                        your strengths, you can thrive in environments where
                                                        your unique
                                                        perspective and creative abilities can make a
                                                        significant
                                                        impact.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Innovative Analyst or Creative Problem-Solver, you
                                                        are
                                                        drawn to careers that emphasize analytical thinking,
                                                        creativity,
                                                        and problem-solving. You thrive in environments that
                                                        allow for
                                                        innovative approaches to challenges and provide
                                                        opportunities
                                                        for collaboration and exploration. Here are the types of
                                                        jobs
                                                        and work environments that align with your strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Data Analysis and Research


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Data Analyst,
                                                                        Market
                                                                        Researcher, Statistician


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> These
                                                                        roles allow
                                                                        you to apply your analytical skills to
                                                                        interpret
                                                                        data, draw insights, and provide
                                                                        recommendations
                                                                        based on your findings.


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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Software Development and IT


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Software
                                                                        Developer,
                                                                        Systems Analyst, IT Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In the tech
                                                                        industry, you can use your logical
                                                                        reasoning and
                                                                        creativity to design, develop, and
                                                                        improve
                                                                        software and systems.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Engineering and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Mechanical
                                                                        Engineer,
                                                                        Civil Engineer, Product Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Engineering
                                                                        combines analytical thinking with
                                                                        creative
                                                                        problem-solving, allowing you to develop
                                                                        practical solutions for complex
                                                                        challenges.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Creative Arts and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Graphic
                                                                        Designer,
                                                                        Multimedia Artist, Creative Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        emphasize creative expression and
                                                                        innovation,
                                                                        allowing you to bring your unique ideas
                                                                        to life
                                                                        through various mediums.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Marketing and Advertising


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Marketing
                                                                        Specialist,
                                                                        Brand Strategist, Content Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In
                                                                        marketing, you
                                                                        can leverage your analytical skills to
                                                                        assess
                                                                        market trends while applying creativity
                                                                        to craft
                                                                        compelling campaigns.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Project Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Project
                                                                        Manager,
                                                                        Program Coordinator, Operations Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Project
                                                                        management
                                                                        allows you to utilize your
                                                                        organizational skills
                                                                        and strategic thinking to oversee
                                                                        projects from
                                                                        conception to completion.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Consulting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Business
                                                                        Consultant,
                                                                        Strategy Analyst, Management Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Consulting
                                                                        roles
                                                                        enable you to analyze business
                                                                        challenges and
                                                                        provide innovative solutions, drawing on
                                                                        both
                                                                        analytical and creative skills.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Educator,
                                                                        Instructional Designer, Corporate
                                                                        Trainer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Teaching
                                                                        allows you
                                                                        to inspire and support others while
                                                                        using your
                                                                        analytical skills to design effective
                                                                        educational experiences.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Startup
                                                                        Founder,
                                                                        Business Owner, Creative Entrepreneur

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        innovative
                                                                        thinking and problem-solving abilities
                                                                        position
                                                                        you well for launching and managing your
                                                                        own
                                                                        ventures.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Environmental
                                                                        Consultant, Sustainability Manager,
                                                                        Conservation
                                                                        Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        allow
                                                                        you to tackle real-world challenges
                                                                        related to
                                                                        the environment, combining analytical
                                                                        thinking
                                                                        with creative solutions for
                                                                        sustainability.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Healthcare and Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Healthcare
                                                                        Analyst,
                                                                        Clinical Researcher, Public Health
                                                                        Coordinator
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In
                                                                        healthcare, you
                                                                        can apply your analytical skills to
                                                                        improve
                                                                        patient outcomes while innovating in
                                                                        public
                                                                        health initiatives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Creative Writing and Content Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Author,
                                                                        Copywriter,
                                                                        Editor


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Creative
                                                                        writing
                                                                        allows you to explore your imagination
                                                                        while
                                                                        developing strong communication skills
                                                                        that
                                                                        enhance your ability to articulate ideas
                                                                        effectively.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Innovative Culture
                                                            </strong>You thrive in environments that encourage
                                                            teamwork
                                                            and value diverse perspectives. A collaborative
                                                            atmosphere
                                                            enhances your creativity and motivation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Atmosphere
                                                            </strong>You prefer work environments that allow for
                                                            creativity and flexibility, enabling you to explore
                                                            different approaches and ideas.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Problem-Solving and Innovation
                                                            </strong>Workplaces that prioritize innovative
                                                            thinking and
                                                            problem-solving resonate with your strengths. You
                                                            enjoy
                                                            environments where new ideas are welcomed.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            development, as a focus on skill enhancement is
                                                            vital to
                                                            your personal and professional journey.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Connection and Relationship
                                                                Building
                                                            </strong>You value environments where building
                                                            relationships
                                                            and networking is encouraged. Connecting with others
                                                            enhances your work experience and fosters
                                                            collaboration.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        analytical thinking, creativity, and collaboration. Your
                                                        strengths in problem-solving, innovative thinking, and
                                                        communication make you an asset in various fields
                                                        focused on
                                                        addressing challenges and driving positive change. By
                                                        pursuing
                                                        career paths that align with your strengths, you can
                                                        thrive in
                                                        environments where your unique perspective and creative
                                                        abilities can make a significant impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Practical Empath or Grounded Relational Thinker,
                                                        you are
                                                        drawn to careers that emphasize empathy, practicality,
                                                        and
                                                        collaboration. You thrive in environments where you can
                                                        connect
                                                        with others, apply your knowledge to real-world
                                                        situations, and
                                                        make a positive impact. Here are the types of jobs and
                                                        work
                                                        environments that align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Healthcare and Human Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Social
                                                                        Worker,
                                                                        Clinical Psychologist, Healthcare
                                                                        Administrator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        allow
                                                                        you to apply your empathetic nature to
                                                                        support
                                                                        you and communities while addressing
                                                                        your health
                                                                        and social needs.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Teacher,
                                                                        Corporate
                                                                        Trainer, Educational Consultant
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        education allows you to inspire and
                                                                        support
                                                                        others in your learning journeys,
                                                                        fostering
                                                                        growth and development in students or
                                                                        employees.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Community Development and Nonprofit Sector


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Community
                                                                        Organizer,
                                                                        Program Coordinator, Nonprofit Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> In these
                                                                        roles,
                                                                        you can work on initiatives that benefit
                                                                        communities and advocate for social
                                                                        change,
                                                                        utilizing your relational skills to
                                                                        connect with
                                                                        various stakeholders.


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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Psychology and Counseling


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Counselor,
                                                                        School
                                                                        Psychologist, Career Coach

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These
                                                                        professions
                                                                        allow you to help you navigate personal
                                                                        challenges, providing support and
                                                                        practical
                                                                        strategies for growth.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Human Resources and Organizational Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>HR Specialist,
                                                                        Talent
                                                                        Development Coordinator, Employee
                                                                        Relations
                                                                        Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>HR roles
                                                                        enable you
                                                                        to foster positive workplace
                                                                        relationships,
                                                                        promote employee well-being, and
                                                                        contribute to
                                                                        organizational success through empathy
                                                                        and
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
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Environmental
                                                                        Consultant, Sustainability Coordinator,
                                                                        Conservation Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These
                                                                        positions
                                                                        allow you to address ecological
                                                                        challenges while
                                                                        promoting community engagement and
                                                                        sustainable
                                                                        practices.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Creative Arts and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Art Therapist,
                                                                        Graphic
                                                                        Designer, User Experience (UX) Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative fields allows you to express
                                                                        your ideas
                                                                        while connecting with others, making a
                                                                        positive
                                                                        impact through artistic endeavors.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Marketing and Public Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Marketing
                                                                        Specialist,
                                                                        PR Coordinator, Brand Manager
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In these
                                                                        roles, you
                                                                        can use your understanding of consumer
                                                                        behavior
                                                                        and empathy to create compelling
                                                                        narratives and
                                                                        connect with target audiences.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Creative Arts (Therapeutic)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Life Coach,
                                                                        Business
                                                                        Consultant, Wellness Coach

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Coaching
                                                                        roles
                                                                        allow you to guide you or organizations
                                                                        toward
                                                                        achieving your goals, utilizing your
                                                                        practical
                                                                        problem-solving skills and empathetic
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
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Technology and User Experience


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>UX Researcher,
                                                                        Product
                                                                        Manager, User Experience Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>In these
                                                                        positions,
                                                                        you can apply your understanding of user
                                                                        needs
                                                                        to create products that are both
                                                                        functional and
                                                                        user-friendly, bridging the gap between
                                                                        technology and people.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Culinary Arts and Nutrition


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Chef,
                                                                        Nutritionist,
                                                                        Food Service Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        allow
                                                                        you to engage with others through food,
                                                                        combining creativity and practicality to
                                                                        promote
                                                                        healthy eating habits and culinary
                                                                        experiences.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Supportive Culture
                                                            </strong>You thrive in environments that encourage
                                                            teamwork
                                                            and value diverse perspectives. A collaborative
                                                            atmosphere
                                                            enhances your creativity and motivation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Adaptive Atmosphere
                                                            </strong>You prefer work environments that allow for
                                                            flexibility in your approach, enabling you to adapt
                                                            to
                                                            different situations and connect with various you.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Empathy and Understanding
                                                            </strong>Workplaces that prioritize emotional
                                                            intelligence
                                                            and relational engagement resonate with your
                                                            strengths. You
                                                            enjoy environments where understanding others is
                                                            valued.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            development, as a focus on skill enhancement is
                                                            vital to
                                                            your personal and professional journey.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Community and Connection
                                                            </strong>You value environments that foster
                                                            community
                                                            engagement and relationship building. Connecting
                                                            with others
                                                            enhances your work experience and fosters
                                                            collaboration.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        empathy, practicality, and collaboration. Your strengths
                                                        in
                                                        relational understanding, practical problem-solving, and
                                                        effective communication make you an asset in various
                                                        fields
                                                        focused on addressing challenges and driving positive
                                                        change. By
                                                        pursuing career paths that align with your strengths,
                                                        you can
                                                        thrive in environments where your unique perspective and
                                                        empathetic abilities can make a significant impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Analytical Connector or Relational Analyst, you are
                                                        drawn
                                                        to careers that emphasize analytical thinking,
                                                        problem-solving,
                                                        and relational engagement. You thrive in environments
                                                        where you
                                                        can connect with others, apply your knowledge to
                                                        real-world
                                                        situations, and make a positive impact. Here are the
                                                        types of
                                                        jobs and work environments that align with your
                                                        strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Data Analysis and Research


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Data
                                                                            Analyst:</strong>Interpreting
                                                                        complex datasets to inform business
                                                                        decisions
                                                                        and strategies.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Market Researcher:</strong>
                                                                        Analyzing
                                                                        market trends and consumer behavior to
                                                                        guide
                                                                        product development.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Policy Analyst:</strong>
                                                                        Evaluating
                                                                        policies and your impact on communities,
                                                                        providing evidence-based
                                                                        recommendations.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Healthcare and Human Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Healthcare
                                                                            Administrator:</strong>Managing
                                                                        healthcare
                                                                        facilities and ensuring quality patient
                                                                        care.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Clinical
                                                                            Psychologist:</strong>Assessing
                                                                        and treating mental health issues
                                                                        through
                                                                        therapy and analysis.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Social Worker:</strong>Providing
                                                                        support
                                                                        and resources to you and families in
                                                                        need.
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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Teacher:</strong>Educating
                                                                        students in
                                                                        various subjects while fostering
                                                                        critical
                                                                        thinking and collaboration.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Corporate
                                                                            Trainer:</strong>Developing
                                                                        training programs to enhance employee
                                                                        skills and
                                                                        engagement.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Educational
                                                                            Consultant:</strong>Advising
                                                                        schools on curriculum development and
                                                                        teaching
                                                                        strategies.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Community Development and Nonprofit Sector


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Community
                                                                            Organizer:</strong>Mobilizing
                                                                        residents to address local issues and
                                                                        advocate
                                                                        for change.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Program
                                                                            Coordinator:</strong>Managing
                                                                        community programs that support social
                                                                        welfare
                                                                        and engagement.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Nonprofit
                                                                            Manager:</strong>Leading
                                                                        nonprofit organizations to achieve your
                                                                        missions
                                                                        and goals.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Human Resources and Organizational Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>HR Specialist:</strong>Managing
                                                                        recruitment, employee relations, and
                                                                        benefits
                                                                        administration.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Talent Development
                                                                            Coordinator:</strong>Designing
                                                                        programs to
                                                                        enhance employee skills and engagement.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Employee Relations
                                                                            Manager:</strong>Ensuring a positive
                                                                        work
                                                                        environment and resolving conflicts.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Environmental
                                                                            Consultant:</strong>Advising
                                                                        organizations
                                                                        on sustainability practices and
                                                                        compliance.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Sustainability
                                                                            Coordinator:</strong>Implementing
                                                                        initiatives to reduce environmental
                                                                        impact
                                                                        within organizations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Conservation
                                                                            Scientist:</strong>Working
                                                                        to protect natural resources and
                                                                        ecosystems.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Marketing and Public Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Marketing
                                                                            Specialist:</strong>Developing
                                                                        strategies to promote products and
                                                                        services
                                                                        based on consumer insights.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>PR Coordinator:</strong>Managing
                                                                        public
                                                                        relations efforts to build a positive
                                                                        image for
                                                                        organizations.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Brand
                                                                            Manager:</strong>Overseeing brand
                                                                        strategy and communication.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Coaching and Consulting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Business
                                                                            Consultant:</strong>Advising
                                                                        organizations on improving processes and
                                                                        performance.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Life Coach:</strong>Helping you
                                                                        set and
                                                                        achieve personal goals.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Wellness
                                                                            Coach:</strong>Supporting
                                                                        clients in achieving health and wellness
                                                                        objectives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Technology and User Experience


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Product
                                                                            Manager:</strong>Overseeing
                                                                        product development to ensure it meets
                                                                        customer
                                                                        needs.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>User Experience
                                                                            Designer:</strong>Creating
                                                                        user-friendly
                                                                        interfaces for websites and
                                                                        applications.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Digital Media
                                                                            Specialist:</strong>
                                                                        Creating and managing content for
                                                                        digital
                                                                        platforms.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Supportive Culture
                                                            </strong>You thrive in environments that encourage
                                                            teamwork
                                                            and value diverse perspectives. A collaborative
                                                            atmosphere
                                                            enhances your creativity and motivation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Adaptive Atmosphere
                                                            </strong>You prefer work environments that allow for
                                                            flexibility in your approach, enabling you to adapt
                                                            to
                                                            different situations and connect with various you.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Empathy and Understanding
                                                            </strong>Workplaces that prioritize emotional
                                                            intelligence
                                                            and relational engagement resonate with your
                                                            strengths. You
                                                            enjoy environments where understanding others is
                                                            valued.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            development, as a focus on skill enhancement is
                                                            vital to
                                                            your personal and professional journey.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Community and Connection
                                                            </strong>You value environments that foster
                                                            community
                                                            engagement and relationship building. Connecting
                                                            with others
                                                            enhances your work experience and fosters
                                                            collaboration.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        analytical thinking, problem-solving, and relational
                                                        engagement.
                                                        Your strengths in relational understanding, analytical
                                                        skills,
                                                        and effective communication make you an asset in various
                                                        fields
                                                        focused on addressing challenges and driving positive
                                                        change. By
                                                        pursuing career paths that align with your strengths,
                                                        you can
                                                        thrive in environments where your unique perspective and
                                                        empathetic abilities can make a significant impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Practical Innovator or Grounded Creative, you are
                                                        drawn to
                                                        careers that emphasize practical application,
                                                        creativity, and
                                                        innovation. You thrive in environments where you can
                                                        connect
                                                        with others, apply your knowledge to real-world
                                                        situations, and
                                                        make a positive impact. Here are the types of jobs and
                                                        work
                                                        environments that align with your strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Design and Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Graphic
                                                                            Designer:</strong>Creating
                                                                        visual content for branding and
                                                                        marketing,
                                                                        allowing for creative expression while
                                                                        meeting
                                                                        client needs.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Interior Designer:</strong>
                                                                        Designing
                                                                        functional and aesthetically pleasing
                                                                        spaces,
                                                                        combining creativity with practical
                                                                        solutions.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Fashion Designer:</strong>
                                                                        Developing
                                                                        clothing and accessories that reflect
                                                                        innovative
                                                                        designs and trends.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Technology and User Experience


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>UX/UI
                                                                            Designer:</strong>Designing
                                                                        user-friendly interfaces for websites
                                                                        and
                                                                        applications, enhancing user experience
                                                                        through
                                                                        practical creativity.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Product
                                                                            Manager:</strong>Overseeing
                                                                        product development from ideation to
                                                                        execution,
                                                                        balancing creative ideas with market
                                                                        needs.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Software
                                                                            Developer:</strong>Creating
                                                                        applications or software solutions,
                                                                        combining
                                                                        technical skills with innovative
                                                                        thinking.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Marketing and Advertising


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Marketing
                                                                            Specialist:</strong>Developing
                                                                        and implementing marketing strategies
                                                                        that
                                                                        engage customers through creative
                                                                        campaigns.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Content
                                                                            Creator:</strong>Producing
                                                                        engaging content for digital platforms,
                                                                        utilizing creativity to capture audience
                                                                        attention.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Brand
                                                                            Strategist:</strong>Crafting brand
                                                                        identities and messaging, ensuring you
                                                                        resonate
                                                                        with target audiences through innovative
                                                                        approaches.


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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Corporate
                                                                            Trainer:</strong>Designing and
                                                                        delivering training programs that
                                                                        enhance
                                                                        employee skills while fostering a
                                                                        creative
                                                                        learning environment.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Educational
                                                                            Consultant:</strong>Advising
                                                                        educational institutions on curriculum
                                                                        development and innovative teaching
                                                                        strategies.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Teacher:</strong>Educating
                                                                        students in
                                                                        various subjects, using creative methods
                                                                        to
                                                                        engage and inspire learners.
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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Entrepreneurship and Business Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Start-Up
                                                                            Founder:</strong>Launching and
                                                                        managing your own business, utilizing
                                                                        innovative
                                                                        ideas to fill market gaps.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Business
                                                                            Consultant:</strong>Advising
                                                                        organizations on strategy, innovation,
                                                                        and
                                                                        growth, combining analytical skills with
                                                                        creative problem-solving.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Social
                                                                            Entrepreneur:</strong>Creating
                                                                        ventures that address social issues
                                                                        while
                                                                        promoting innovative solutions.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Sustainability
                                                                            Coordinator:</strong>Implementing
                                                                        initiatives to reduce environmental
                                                                        impact
                                                                        within organizations, applying practical
                                                                        solutions to creative challenges.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Environmental
                                                                            Consultant:</strong>Advising
                                                                        businesses on
                                                                        sustainable practices and compliance,
                                                                        requiring
                                                                        both analytical skills and innovative
                                                                        thinking.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Conservation
                                                                            Scientist:</strong>Working
                                                                        to protect natural resources and
                                                                        ecosystems
                                                                        through innovative approaches.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Human Resources and Organizational Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <h5 class="description-title">Examples:
                                                                </h5>
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Talent Development
                                                                            Specialist:</strong>Designing
                                                                        programs to
                                                                        enhance employee engagement and
                                                                        performance,
                                                                        fostering a creative workplace culture.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>HR Manager:</strong>Overseeing
                                                                        recruitment and employee relations,
                                                                        using
                                                                        innovative strategies to build strong
                                                                        teams.
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Employee Relations
                                                                            Manager:</strong>Ensuring a positive
                                                                        work
                                                                        environment by resolving conflicts and
                                                                        promoting
                                                                        effective communication.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Creative Culture
                                                            </strong>You thrive in environments that encourage
                                                            teamwork
                                                            and value diverse perspectives. A collaborative
                                                            atmosphere
                                                            enhances your creativity and motivation.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Adaptive Atmosphere
                                                            </strong>You prefer work environments that allow for
                                                            flexibility in your approach, enabling you to adapt
                                                            to
                                                            different situations and connect with various you.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Innovation and Problem-Solving
                                                            </strong>Workplaces that prioritize creative
                                                            thinking and
                                                            innovative problem-solving resonate with your
                                                            strengths. You
                                                            enjoy environments that encourage exploration and
                                                            experimentation.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You seek roles that offer continuous
                                                            learning and
                                                            development, as a focus on skill enhancement is
                                                            vital to
                                                            your personal and professional journey.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasis on Community and Connection
                                                            </strong>You value environments that foster
                                                            community
                                                            engagement and relationship building. Connecting
                                                            with others
                                                            enhances your work experience and fosters
                                                            collaboration.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        You are naturally inclined toward careers that emphasize
                                                        practical application, creativity, and innovation. Your
                                                        strengths in relational understanding, creative
                                                        thinking, and
                                                        effective communication make you an asset in various
                                                        fields
                                                        focused on addressing challenges and driving positive
                                                        change. By
                                                        pursuing career paths that align with your strengths,
                                                        you can
                                                        thrive in environments where your unique perspective and
                                                        innovative abilities can make a significant impact.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

  

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Grounded Thinker or Structured Planner, you are
                                                        drawn to
                                                        careers that emphasize organization, clarity, and
                                                        practical
                                                        application. You thrive in environments where logical
                                                        reasoning
                                                        and structured processes are valued, allowing you to
                                                        effectively
                                                        manage tasks and achieve goals. Here are some suitable
                                                        career
                                                        paths and work environments that align with your
                                                        strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Project Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Project
                                                                        Manager,
                                                                        Operations Manager, Construction Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        plan, organize, and manage multiple
                                                                        tasks
                                                                        simultaneously makes you well-suited for
                                                                        roles
                                                                        that require overseeing projects from
                                                                        initiation
                                                                        to completion, ensuring that all details
                                                                        are
                                                                        attended to.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Data Analysis


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Data Analyst,
                                                                        Business
                                                                        Analyst, Research Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        analytical
                                                                        mindset and attention to detail allow
                                                                        you to
                                                                        assess and interpret data effectively,
                                                                        providing
                                                                        insights that drive decision-making in
                                                                        organizations.



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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Engineering


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Civil
                                                                        Engineer,
                                                                        Mechanical Engineer, Electrical Engineer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        roles
                                                                        often require strong problem-solving
                                                                        skills and
                                                                        structured thinking to design and
                                                                        implement
                                                                        practical solutions to complex
                                                                        challenges.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Finance and Accounting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Financial
                                                                        Analyst,
                                                                        Accountant, Budget Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        preference for
                                                                        order and organization aligns well with
                                                                        the
                                                                        structured processes involved in finance
                                                                        and
                                                                        accounting, where attention to detail is
                                                                        critical.


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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Administrative Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Administrative
                                                                        Assistant, Office Manager, Executive
                                                                        Assistant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        strong organizational skills, attention
                                                                        to
                                                                        detail, and the ability to manage
                                                                        multiple
                                                                        tasks, all of which align with your
                                                                        strengths.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Teacher,
                                                                        Curriculum
                                                                        Developer, Corporate Trainer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        structured
                                                                        approach can help create organized
                                                                        lesson plans
                                                                        and training materials, facilitating
                                                                        effective
                                                                        learning experiences for students or
                                                                        employees.



                                                                    </li>


                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Legal Professions


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Paralegal,
                                                                        Legal
                                                                        Assistant, Compliance Officer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Legal work
                                                                        often
                                                                        involves thorough research,
                                                                        documentation, and
                                                                        adherence to regulations, all of which
                                                                        require a
                                                                        structured and detail-oriented mindset.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Healthcare Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Healthcare
                                                                        Administrator, Health Services Manager,
                                                                        Medical
                                                                        Office Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        organizational skills to manage
                                                                        healthcare
                                                                        facilities and ensure compliance with
                                                                        regulations while improving patient
                                                                        care.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Logistics and Supply Chain Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Supply Chain
                                                                        Coordinator, Logistics Manager,
                                                                        Warehouse
                                                                        Supervisor

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        plan and organize is critical in
                                                                        managing supply
                                                                        chains, optimizing processes, and
                                                                        ensuring
                                                                        timely delivery of goods.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Human Resources


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">

                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>HR Manager,
                                                                        Talent
                                                                        Acquisition Specialist, Training and
                                                                        Development
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>HR roles
                                                                        require
                                                                        strong organizational skills to manage
                                                                        employee
                                                                        relations, recruitment, and training
                                                                        programs.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Structured and Organized Environment
                                                            </strong>You thrive in workplaces that have clear
                                                            processes
                                                            and procedures. A well-organized environment helps
                                                            you stay
                                                            focused and productive.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Goals and Objectives
                                                            </strong>You prefer work environments that emphasize
                                                            goal
                                                            setting and achievement. Clear objectives help you
                                                            channel
                                                            your efforts effectively.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborative Atmosphere
                                                            </strong>While you excel in independent tasks, you
                                                            also
                                                            value collaboration with colleagues. Team projects
                                                            that are
                                                            well-organized enhance your ability to contribute
                                                            effectively.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Stability and Consistency
                                                            </strong>You seek roles in stable industries where
                                                            the
                                                            workflow is predictable and structured, allowing you
                                                            to
                                                            focus on your tasks without unnecessary disruptions.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Professional Development
                                                            </strong>You appreciate work environments that offer
                                                            continuous learning and growth opportunities,
                                                            enabling you
                                                            to develop your skills further.



                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Grounded Thinker / Structured Planner, you are
                                                        naturally
                                                        inclined toward careers that emphasize organization,
                                                        clarity,
                                                        and logical reasoning. Your strengths in project
                                                        management,
                                                        data analysis, and structured processes make you a
                                                        valuable
                                                        asset in various fields focused on driving efficiency
                                                        and
                                                        achieving goals. By pursuing career paths that align
                                                        with your
                                                        strengths, you can thrive in environments where your
                                                        analytical
                                                        skills and structured thinking can make a significant
                                                        impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Abstract Idealist or Relational Planner, your
                                                        career
                                                        preferences are likely to focus on roles that emphasize
                                                        creativity, meaningful connections, and opportunities
                                                        for
                                                        exploration. You thrive in environments that allow you
                                                        to think
                                                        outside the box and collaborate with others toward
                                                        shared goals.
                                                        Here are some suitable career paths and work
                                                        environments that
                                                        align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Industries


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Graphic
                                                                        Designer,
                                                                        Marketing Specialist, Content Creator
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        imaginative
                                                                        thinking and ability to generate
                                                                        innovative
                                                                        ideas make you well-suited for roles
                                                                        that
                                                                        require creativity and artistic
                                                                        expression.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Teacher,
                                                                        Educational
                                                                        Consultant, Curriculum Developer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        relational
                                                                        skills and ability to inspire others
                                                                        through
                                                                        creative methodologies can facilitate
                                                                        effective
                                                                        learning experiences.
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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Psychology and Counseling


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Counselor,
                                                                        Clinical
                                                                        Psychologist, Social Worker

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Your
                                                                        empathetic
                                                                        nature and understanding of human
                                                                        behavior allow
                                                                        you to connect deeply with others and
                                                                        provide
                                                                        support in navigating emotional
                                                                        challenges.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Social and Community Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Community
                                                                        Organizer,
                                                                        Nonprofit Manager, Social Services
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        idealistic
                                                                        approach aligns with roles that focus on
                                                                        improving the well-being of communities
                                                                        and
                                                                        fostering social change.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Arts and Entertainment


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Performer,
                                                                        Writer,
                                                                        Producer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        the
                                                                        arts allows you to express your
                                                                        creativity while
                                                                        connecting with audiences on a personal
                                                                        level.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Researcher,
                                                                        Policy
                                                                        Analyst, Innovation Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        think abstractly and explore new
                                                                        concepts is
                                                                        valuable in research roles where
                                                                        creativity and
                                                                        critical thinking are essential.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Human Resources and Organizational Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>HR Specialist,
                                                                        Talent
                                                                        Development Coordinator, Organizational
                                                                        Development Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        relational
                                                                        planner skills allow you to foster a
                                                                        positive
                                                                        workplace culture, support employee
                                                                        development,
                                                                        and enhance organizational dynamics.
                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Marketing and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Brand
                                                                        Strategist,
                                                                        Public Relations Specialist,
                                                                        Communication
                                                                        Director

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        understanding
                                                                        of storytelling and relational dynamics
                                                                        can
                                                                        effectively engage audiences and promote
                                                                        brand
                                                                        narratives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Environmental
                                                                        Consultant, Sustainability Coordinator,
                                                                        Conservation Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        idealism and
                                                                        concern for the environment make you
                                                                        well-suited
                                                                        for roles focused on sustainability and
                                                                        social
                                                                        responsibility.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        International Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Diplomat,
                                                                        Foreign
                                                                        Service Officer, International
                                                                        Development
                                                                        Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        interest in
                                                                        connecting with diverse cultures and
                                                                        fostering
                                                                        relationships aligns with roles that
                                                                        require
                                                                        strong communication and negotiation
                                                                        skills.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Team-Oriented Environment
                                                            </strong>You thrive in settings where teamwork is
                                                            emphasized, allowing for the exchange of ideas and
                                                            collective problem-solving.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Creativity-Focused Atmosphere
                                                            </strong>Workplaces that prioritize creativity and
                                                            innovation resonate with your strengths, providing
                                                            the
                                                            freedom to explore new concepts and approaches.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Meaningful and Purpose-Driven Work
                                                            </strong>You seek roles that align with your values
                                                            and
                                                            contribute positively to society, enhancing your
                                                            sense of
                                                            purpose and fulfillment.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Settings
                                                            </strong>Environments that allow for adaptability
                                                            and
                                                            exploration of new ideas are ideal, as you enable
                                                            you to
                                                            navigate changing circumstances effectively.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You appreciate workplaces that offer
                                                            continuous
                                                            learning and development opportunities, enabling you
                                                            to
                                                            enhance your skills and knowledge.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Abstract Idealist / Relational Planner, you are
                                                        naturally
                                                        inclined toward careers that emphasize creativity,
                                                        relational
                                                        dynamics, and meaningful connections. Your strengths in
                                                        imaginative thinking, empathy, and collaboration make
                                                        you a
                                                        valuable asset in various fields focused on innovation
                                                        and
                                                        social impact. By pursuing career paths that align with
                                                        your
                                                        strengths, you can thrive in environments where your
                                                        unique
                                                        perspective can make a significant difference.

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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Visionary Dreamer or Conceptual Creative, your
                                                        career
                                                        preferences are likely to focus on roles that emphasize
                                                        creativity, innovation, and meaningful connections. You
                                                        thrive
                                                        in environments that allow you to think outside the box
                                                        and
                                                        collaborate with others toward shared goals. Here are
                                                        some
                                                        suitable career paths and work environments that align
                                                        with your
                                                        strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Industries


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Graphic
                                                                        Designer,
                                                                        Marketing Specialist, Content Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        imaginative
                                                                        thinking and ability to generate
                                                                        innovative
                                                                        ideas make you well-suited for roles
                                                                        that
                                                                        require creativity and artistic
                                                                        expression.


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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Teacher,
                                                                        Educational
                                                                        Consultant, Curriculum Developer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        relational
                                                                        skills and ability to inspire others
                                                                        through
                                                                        creative methodologies can facilitate
                                                                        effective
                                                                        learning experiences.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Psychology and Counseling


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Counselor,
                                                                        Clinical
                                                                        Psychologist, Social Worker
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        empathetic
                                                                        nature and understanding of human
                                                                        behavior allow
                                                                        you to connect deeply with others and
                                                                        provide
                                                                        support in navigating emotional
                                                                        challenges.


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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Social and Community Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Community
                                                                        Organizer,
                                                                        Nonprofit Manager, Social Services
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        idealistic
                                                                        approach aligns with roles that focus on
                                                                        improving the well-being of communities
                                                                        and
                                                                        fostering social change.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Arts and Entertainment


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Performer,
                                                                        Writer,
                                                                        Producer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        the
                                                                        arts allows you to express your
                                                                        creativity while
                                                                        connecting with audiences on a personal
                                                                        level.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Researcher,
                                                                        Policy
                                                                        Analyst, Innovation Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        think abstractly and explore new
                                                                        concepts is
                                                                        valuable in research roles where
                                                                        creativity and
                                                                        critical thinking are essential.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Human Resources and Organizational Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>HR Specialist,
                                                                        Talent
                                                                        Development Coordinator, Organizational
                                                                        Development Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        relational
                                                                        planner skills allow you to foster a
                                                                        positive
                                                                        workplace culture, support employee
                                                                        development,
                                                                        and enhance organizational dynamics.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Marketing and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Brand
                                                                        Strategist,
                                                                        Public Relations Specialist,
                                                                        Communication
                                                                        Director
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        understanding
                                                                        of storytelling and relational dynamics
                                                                        can
                                                                        effectively engage audiences and promote
                                                                        brand
                                                                        narratives.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Environmental
                                                                        Consultant, Sustainability Coordinator,
                                                                        Conservation Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        idealism and
                                                                        concern for the environment make you
                                                                        well-suited
                                                                        for roles focused on sustainability and
                                                                        social
                                                                        responsibility.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        International Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Diplomat,
                                                                        Foreign
                                                                        Service Officer, International
                                                                        Development
                                                                        Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        interest in
                                                                        connecting with diverse cultures and
                                                                        fostering
                                                                        relationships aligns with roles that
                                                                        require
                                                                        strong communication and negotiation
                                                                        skills.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Team-Oriented Environment
                                                            </strong>You thrive in settings where teamwork is
                                                            emphasized, allowing for the exchange of ideas and
                                                            collective problem-solving.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Creativity-Focused Atmosphere
                                                            </strong>Workplaces that prioritize creativity and
                                                            innovation resonate with your strengths, providing
                                                            the
                                                            freedom to explore new concepts and approaches.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Meaningful and Purpose-Driven Work
                                                            </strong>You seek roles that align with your values
                                                            and
                                                            contribute positively to society, enhancing your
                                                            sense of
                                                            purpose and fulfillment.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Settings
                                                            </strong>Environments that allow for adaptability
                                                            and
                                                            exploration of new ideas are ideal, as you enable
                                                            you to
                                                            navigate changing circumstances effectively.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You appreciate workplaces that offer
                                                            continuous
                                                            learning and development opportunities, enabling you
                                                            to
                                                            enhance your skills and knowledge.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Visionary Dreamer / Conceptual Creative, you are
                                                        naturally
                                                        inclined toward careers that emphasize creativity,
                                                        relational
                                                        dynamics, and meaningful connections. Your strengths in
                                                        imaginative thinking, empathy, and collaboration make
                                                        you a
                                                        valuable asset in various fields focused on innovation
                                                        and
                                                        social impact. By pursuing career paths that align with
                                                        your
                                                        strengths, you can thrive in environments where your
                                                        unique
                                                        perspective can make a significant difference.
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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                      

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator,
                                                        your
                                                        career preferences are likely to focus on roles that
                                                        emphasize
                                                        analytical thinking, problem-solving, and independence.
                                                        You
                                                        thrive in environments that allow you to engage deeply
                                                        with
                                                        concepts and apply logical reasoning to various
                                                        challenges. Here
                                                        are some suitable career paths and work environments
                                                        that align
                                                        with your strengths:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Data Analysis and Statistics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Data Analyst,
                                                                        Statistician, Business Intelligence
                                                                        Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        analytical
                                                                        skills allow you to interpret complex
                                                                        data sets,
                                                                        draw meaningful conclusions, and make
                                                                        data-driven decisions.

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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Engineering


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Mechanical
                                                                        Engineer,
                                                                        Civil Engineer, Software Engineer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        roles
                                                                        require strong problem-solving abilities
                                                                        and
                                                                        technical skills, allowing you to design
                                                                        and
                                                                        implement innovative solutions.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong> Research
                                                                        Scientist,
                                                                        Product Developer, R&D Engineer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        research allows you to explore new ideas
                                                                        and
                                                                        concepts while applying analytical
                                                                        thinking to
                                                                        develop innovative products or
                                                                        processes.

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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Information Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>IT Consultant,
                                                                        Systems
                                                                        Analyst, Network Administrator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>IT roles
                                                                        leverage
                                                                        your problem-solving skills and
                                                                        analytical
                                                                        mindset to troubleshoot issues and
                                                                        optimize
                                                                        systems.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Consulting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Management
                                                                        Consultant,
                                                                        Financial Consultant, Strategy
                                                                        Consultant



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Consulting
                                                                        allows
                                                                        you to analyze client problems, develop
                                                                        strategic solutions, and apply your
                                                                        analytical
                                                                        skills to improve organizational
                                                                        performance.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Finance and Economics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Financial
                                                                        Analyst,
                                                                        Economist, Investment Banker

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        analytical
                                                                        approach enables you to assess financial
                                                                        data,
                                                                        analyze market trends, and make informed
                                                                        investment decisions.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Healthcare and Clinical Research


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Clinical
                                                                        Research
                                                                        Coordinator, Medical Scientist,
                                                                        Healthcare
                                                                        Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>These roles
                                                                        require
                                                                        strong analytical skills to evaluate
                                                                        clinical
                                                                        data, conduct research studies, and
                                                                        improve
                                                                        healthcare outcomes.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Educator,
                                                                        Curriculum
                                                                        Developer, Corporate Trainer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You can
                                                                        apply your
                                                                        problem-solving skills to develop
                                                                        educational
                                                                        materials and facilitate learning
                                                                        experiences
                                                                        that enhance understanding.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Project Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Project
                                                                        Manager,
                                                                        Operations Manager, Program Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Project
                                                                        management
                                                                        requires the ability to analyze project
                                                                        requirements, develop plans, and solve
                                                                        problems
                                                                        efficiently to meet objectives.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Technical Writing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Technical
                                                                        Writer,
                                                                        Documentation Specialist, Content
                                                                        Developer
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This role
                                                                        involves
                                                                        translating complex technical
                                                                        information into
                                                                        clear and concise documentation,
                                                                        aligning with
                                                                        your analytical strengths.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Independent Work Environment
                                                            </strong>You thrive in settings that allow for
                                                            individual
                                                            exploration and problem-solving, where you can work
                                                            at your
                                                            own pace and style.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Structured and Organized Setting
                                                            </strong>A well-organized workplace with clear
                                                            expectations
                                                            and defined goals resonates with your preference for
                                                            structure and efficiency.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Environment
                                                            </strong>You appreciate work settings that allow for
                                                            adaptability and the freedom to explore new ideas
                                                            and
                                                            concepts.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Problem-Solving
                                                            </strong>Environments that emphasize analytical
                                                            thinking and
                                                            innovative solutions appeal to your strengths,
                                                            allowing you
                                                            to contribute meaningfully to projects.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Continuous Learning
                                                            </strong>You value workplaces that offer
                                                            professional
                                                            development and continuous learning opportunities,
                                                            enabling
                                                            you to enhance your skills and knowledge.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Independent Problem-Solver / Analytical Innovators,
                                                        you are
                                                        naturally inclined toward careers that emphasize
                                                        analytical
                                                        thinking, problem-solving, and independence. Your
                                                        strengths in
                                                        logical reasoning and independent exploration make you a
                                                        valuable asset in various fields focused on innovation
                                                        and
                                                        improvement. By pursuing career paths that align with
                                                        your
                                                        strengths, you can thrive in environments where your
                                                        unique
                                                        perspective can make a significant impact.


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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>


                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Job and work
                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or
                                                        Balanced
                                                        Integrator), your career preferences are likely to focus
                                                        on
                                                        roles that emphasize collaboration, creativity, and
                                                        analytical
                                                        thinking. You thrive in environments that allow you to
                                                        synthesize diverse perspectives and ideas into cohesive
                                                        solutions. Here are some suitable career paths and work
                                                        environments that align with your strengths:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Project Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Project
                                                                        Manager,
                                                                        Program Coordinator, Operations Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        integrate various ideas and manage
                                                                        diverse teams
                                                                        makes you well-suited for roles that
                                                                        require
                                                                        coordination and collaboration among
                                                                        different
                                                                        stakeholders.


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
                                                        data-bs-target="#collapseExample-2" aria-expanded="false"
                                                        aria-controls="collapseExample-2">

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Educator,
                                                                        Curriculum
                                                                        Developer, Corporate Trainer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        strengths in
                                                                        fostering understanding and connection
                                                                        enable
                                                                        you to create effective learning
                                                                        experiences
                                                                        that cater to diverse learning styles.

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
                                                        data-bs-target="#collapseExample-3" aria-expanded="false"
                                                        aria-controls="collapseExample-3">

                                                        Consulting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Management
                                                                        Consultant,
                                                                        Strategy Consultant, Human Resources
                                                                        Consultant
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Your
                                                                        analytical
                                                                        skills and understanding of group
                                                                        dynamics allow
                                                                        you to identify problems, develop
                                                                        strategies,
                                                                        and facilitate change within
                                                                        organizations.
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
                                                        data-bs-target="#collapseExample-4" aria-expanded="false"
                                                        aria-controls="collapseExample-4">

                                                        Research and Development


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Research
                                                                        Scientist,
                                                                        Policy Analyst, Product Developer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        research allows you to explore new ideas
                                                                        and
                                                                        concepts while applying analytical
                                                                        thinking to
                                                                        develop innovative solutions.

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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Creative Industries


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Graphic
                                                                        Designer,
                                                                        Marketing Specialist, Content Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        creative
                                                                        thinking and ability to integrate
                                                                        diverse
                                                                        perspectives are valuable in roles that
                                                                        require
                                                                        innovative approaches to problem-solving
                                                                        and
                                                                        communication.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-6" aria-expanded="false"
                                                        aria-controls="collapseExample-6">

                                                        Nonprofit and Community Work


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Community
                                                                        Organizer,
                                                                        Program Director, Social Worker

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        commitment to
                                                                        social impact and ability to connect
                                                                        with others
                                                                        enable you to work effectively in roles
                                                                        focused
                                                                        on community engagement and support.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Healthcare and Wellness


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Healthcare
                                                                        Administrator, Wellness Coach, Public
                                                                        Health
                                                                        Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        understanding
                                                                        of relational dynamics and commitment to
                                                                        improving well-being make you
                                                                        well-suited for
                                                                        roles that focus on health and community
                                                                        wellness.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-8" aria-expanded="false"
                                                        aria-controls="collapseExample-8">

                                                        Human Resources


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>HR Manager,
                                                                        Talent
                                                                        Development Specialist, Diversity and
                                                                        Inclusion
                                                                        Officer
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        interpersonal
                                                                        skills and understanding of group
                                                                        dynamics allow
                                                                        you to foster a positive workplace
                                                                        culture and
                                                                        support employee development.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Environmental and Sustainability Roles


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Sustainability
                                                                        Coordinator, Environmental Consultant,
                                                                        Conservation Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        ability to
                                                                        analyze complex systems and integrate
                                                                        diverse
                                                                        ideas can help address pressing
                                                                        environmental
                                                                        challenges.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Public Relations and Communication


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Examples:</strong>Public
                                                                        Relations
                                                                        Specialist, Communication Manager, Brand
                                                                        Strategist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Your
                                                                        strengths in
                                                                        communication and relationship-building
                                                                        are
                                                                        essential for effectively conveying
                                                                        messages and
                                                                        managing brand reputations.

                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Work Environment
                                                        Preferences:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Collaborative and Team-Oriented Environment
                                                            </strong>You thrive in settings where teamwork is
                                                            emphasized, allowing for the exchange of ideas and
                                                            collective problem-solving.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Creativity-Focused Atmosphere
                                                            </strong>Workplaces that prioritize creativity and
                                                            innovation resonate with your strengths, providing
                                                            the
                                                            freedom to explore new concepts and approaches.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Meaningful and Purpose-Driven Work
                                                            </strong>You seek roles that align with your values
                                                            and
                                                            contribute positively to society, enhancing your
                                                            sense of
                                                            purpose and fulfillment.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Flexible and Dynamic Settings
                                                            </strong>Environments that allow for adaptability
                                                            and
                                                            exploration of new ideas are ideal, as you enable
                                                            you to
                                                            navigate changing circumstances effectively.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Opportunities for Personal and Professional
                                                                Growth
                                                            </strong>You appreciate workplaces that offer
                                                            continuous
                                                            learning and development opportunities, enabling you
                                                            to
                                                            enhance your skills and knowledge.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title mt-2">Conclusion:
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Quadruple Pie (Harmonized Thinker / Balanced
                                                        Integrator),
                                                        you are naturally inclined toward careers that emphasize
                                                        collaboration, creativity, and analytical thinking. Your
                                                        strengths in synthesizing diverse ideas and fostering
                                                        relationships make you a valuable asset in various
                                                        fields
                                                        focused on innovation and social impact. By pursuing
                                                        career
                                                        paths that align with your strengths, you can thrive in
                                                        environments where your unique perspective can make a
                                                        significant difference.


                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php endif; ?>

                                        <?php else: ?>

                                        <div class="col-12 ">
                                            <h5 class="description-title"> No Job and work Available for
                                                this
                                                Brain Type
                                            </h5>

                                        </div>

                                        <?php endif; ?>


                                    </div>