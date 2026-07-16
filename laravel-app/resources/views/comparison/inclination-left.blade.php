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

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 2): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                       

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a <strong> Practical thinker(Fastidious
                                                            brain)</strong>, your
                                                        brain’s natural
                                                        inclination gravitates toward subjects that require
                                                        logic,
                                                        structure, practicality, and clear, sequential thinking.
                                                        You are
                                                        drawn to areas where problem-solving, precision, and
                                                        detail are
                                                        essential, and you prefer subjects that provide
                                                        tangible,
                                                        real-world applications of concepts.

                                                    </p>

                                                    <h5 class="description-title mt-2">Here are the subjects you
                                                        are
                                                        naturally inclined towards:

                                                    </h5>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Mathematics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Mathematics
                                                                        is
                                                                        highly logical and structured, requiring
                                                                        the use
                                                                        of formulas, algorithms, and
                                                                        step-by-step
                                                                        processes, which aligns with your
                                                                        preference for
                                                                        organized, fact-based learning. The
                                                                        subject
                                                                        allows you to engage in problem-solving,
                                                                        critical thinking, and precision, making
                                                                        it a
                                                                        natural fit for your strengths.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of
                                                                            interest:</strong>Algebra,
                                                                        Calculus, Statistics, and Applied
                                                                        Mathematics.



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

                                                        Physics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Physics
                                                                        involves
                                                                        understanding the laws governing the
                                                                        physical
                                                                        world, often through logical reasoning,
                                                                        experiments, and mathematical models.
                                                                        The
                                                                        subject offers a structured approach to
                                                                        solving
                                                                        complex problems and exploring
                                                                        real-world
                                                                        applications of theoretical concepts,
                                                                        which
                                                                        appeals to your methodical mindset.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of
                                                                            interest:</strong>Mechanics,
                                                                        Thermodynamics,
                                                                        and Electromagnetism.


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
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        combines practical problem-solving with
                                                                        logical
                                                                        analysis, allowing you to apply
                                                                        scientific
                                                                        principles in real-world settings. Your
                                                                        focus on
                                                                        structure and detail will help you excel
                                                                        in
                                                                        engineering disciplines that require
                                                                        systematic
                                                                        planning and design.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Civil
                                                                        Engineering, Mechanical Engineering,
                                                                        Electrical
                                                                        Engineering, and Software Engineering.


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

                                                        Computer Science/Information Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Computer
                                                                        Science
                                                                        involves logical thinking, coding, and
                                                                        developing solutions to technical
                                                                        problems. The
                                                                        structured approach of programming
                                                                        languages and
                                                                        the analytical nature of software
                                                                        development
                                                                        align well with your methodical
                                                                        thinking.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Software
                                                                        Development, Data Science,
                                                                        Cybersecurity, and
                                                                        Artificial Intelligence.


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

                                                        Economics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Economics
                                                                        is a
                                                                        data-driven subject that involves
                                                                        analyzing
                                                                        trends, patterns, and cause-effect
                                                                        relationships
                                                                        within markets and economies. The
                                                                        logical
                                                                        approach to understanding resource
                                                                        distribution,
                                                                        market behaviors, and financial systems
                                                                        fits
                                                                        your structured thinking.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Microeconomics, Macroeconomics, and
                                                                        Econometrics.


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

                                                        Accounting and Finance


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Accounting
                                                                        and
                                                                        finance require attention to detail,
                                                                        precision,
                                                                        and methodical approaches to managing
                                                                        numbers
                                                                        and financial data. Your natural
                                                                        affinity for
                                                                        structure and analysis makes you
                                                                        well-suited to
                                                                        subjects that demand accuracy and
                                                                        logical
                                                                        organization.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Financial Analysis, Auditing, and
                                                                        Taxation.



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

                                                        Chemistry


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Chemistry,
                                                                        particularly physical and analytical
                                                                        chemistry,
                                                                        requires systematic experimentation,
                                                                        logical
                                                                        reasoning, and attention to molecular
                                                                        structures
                                                                        and reactions. The subject provides a
                                                                        clear
                                                                        framework for understanding complex
                                                                        systems,
                                                                        which appeals to your practical mindset.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Organic
                                                                        Chemistry, Inorganic Chemistry, and
                                                                        Analytical
                                                                        Chemistry.


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

                                                        Architecture


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it
                                                                            fits:</strong>Architecture
                                                                        involves blending creativity with
                                                                        practicality,
                                                                        requiring you to design structures based
                                                                        on
                                                                        logical principles, engineering
                                                                        constraints, and
                                                                        detailed planning. The combination of
                                                                        aesthetics
                                                                        and functionality fits your structured
                                                                        approach
                                                                        to problem-solving.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Urban
                                                                        Planning, Structural Design, and
                                                                        Environmental
                                                                        Design.



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

                                                        Business Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business
                                                                        Management
                                                                        involves organizing resources, solving
                                                                        operational challenges, and making
                                                                        data-driven
                                                                        decisions. The structured,
                                                                        process-driven nature
                                                                        of managing teams, projects, and
                                                                        strategies fits
                                                                        well with your logical and practical
                                                                        thinking.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Operations Management, Project
                                                                        Management, and
                                                                        Strategic Planning.



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

                                                        Law


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Law
                                                                        requires a
                                                                        structured, logical analysis of cases,
                                                                        evidence,
                                                                        and legal principles. Your ability to
                                                                        work
                                                                        through complex issues step-by-step and
                                                                        apply
                                                                        logic to real-world scenarios makes you
                                                                        well-suited for fields within the legal
                                                                        domain.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Corporate Law, Tax Law, and Contract
                                                                        Law.




                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Other Inclinations Based
                                                        on your
                                                        Strengths:
                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Statistics and Data Analysis
                                                            </strong>
                                                            <ul>
                                                                <li class="comparison-description">
                                                                    <strong>Why it fits:</strong> This involves
                                                                    working
                                                                    with numbers,
                                                                    analyzing data sets, and deriving
                                                                    conclusions based
                                                                    on statistical methods. Your logical
                                                                    approach and
                                                                    attention to detail will make you excel in
                                                                    tasks
                                                                    that require thorough analysis and
                                                                    interpretation of
                                                                    data.

                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Logistics and Supply Chain Management
                                                            </strong>
                                                            <ul>
                                                                <li class="comparison-description">
                                                                    <strong>Why it fits:</strong> This field
                                                                    focuses on
                                                                    organizing and
                                                                    optimizing the flow of goods and services.
                                                                    Your
                                                                    methodical thinking, preference for
                                                                    structure, and
                                                                    analytical skills can help you succeed in
                                                                    managing
                                                                    logistics and operations effectively.


                                                                </li>
                                                            </ul>

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Medicine (Certain Specialties)
                                                            </strong>
                                                            <ul>
                                                                <li class="comparison-description">
                                                                    <strong> Why it fits: </strong> Fields like
                                                                    radiology, pathology, or
                                                                    medical research require logical analysis,
                                                                    attention
                                                                    to detail, and a methodical approach to
                                                                    diagnosing
                                                                    and solving medical problems. These areas
                                                                    align with
                                                                    your practical and scientific thinking
                                                                    style.

                                                                </li>
                                                            </ul>
                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <h5 class="description-title">Study Tips for your brain :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Focus on structure:</strong>Use outlines,
                                                            mind maps,
                                                            or flowcharts to break down and understand complex
                                                            concepts.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Emphasize practical application:
                                                            </strong>Focus on subjects where you can apply
                                                            theories to
                                                            real-world problems, as this will enhance your
                                                            engagement
                                                            and retention.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize logical reasoning:
                                                            </strong>Engage in subjects that allow you to use
                                                            critical
                                                            thinking, logical patterns, and cause-and-effect
                                                            analysis,
                                                            which are natural strengths for practical thinkers.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek detailed explanations:
                                                            </strong>Choose subjects that provide in-depth
                                                            analysis and
                                                            avoid superficial explanations, as you value
                                                            precision and
                                                            thorough understanding.
                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        as a
                                                        <strong> Practical Thinker</strong>, you can make the
                                                        most of
                                                        your natural
                                                        inclinations for logical, structured, and methodical
                                                        learning.

                                                    </p>

                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 3): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Empathetic Connector, Relational Harmonizer, or
                                                        Compassionate Thinker, your natural inclination is
                                                        toward
                                                        subjects that focus on human interaction, relationships,
                                                        empathy, and emotional intelligence. You thrive in areas
                                                        that
                                                        involve understanding people, communication, and the
                                                        dynamics of
                                                        human behavior. Here are the subjects that align with
                                                        your
                                                        relational and compassionate strengths:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Psychology
                                                                        focuses
                                                                        on understanding human behavior,
                                                                        emotions, and
                                                                        relationships. Your interest in
                                                                        emotional
                                                                        well-being and social dynamics makes
                                                                        this a
                                                                        natural fit. You are drawn to learning
                                                                        about how
                                                                        people think, feel, and interact.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of
                                                                            interest:</strong>Counseling
                                                                        Psychology,
                                                                        Social Psychology, Developmental
                                                                        Psychology,
                                                                        Clinical Psychology.




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

                                                        Sociology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Sociology
                                                                        explores
                                                                        the structures of society and the
                                                                        relationships
                                                                        between you and communities. You are
                                                                        likely
                                                                        drawn to understanding how people
                                                                        function in
                                                                        social groups and how culture, identity,
                                                                        and
                                                                        social systems shape human behavior.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of
                                                                            interest:</strong>Social Work,
                                                                        Community
                                                                        Development, Family Sociology, Cultural
                                                                        Studies.

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

                                                        Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You are
                                                                        naturally
                                                                        inclined toward improving communication
                                                                        and
                                                                        understanding how people connect.
                                                                        Studying
                                                                        communications helps you explore the
                                                                        best ways
                                                                        to convey ideas, foster understanding,
                                                                        and
                                                                        enhance interpersonal interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Interpersonal Communication, Media
                                                                        Studies,
                                                                        Public Relations, Conflict Resolution.


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

                                                        Counseling and Therapy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your
                                                                        empathetic
                                                                        nature makes you well-suited to careers
                                                                        in
                                                                        counseling and therapy. You enjoy
                                                                        helping others
                                                                        navigate your emotions, relationships,
                                                                        and
                                                                        personal challenges, and this subject
                                                                        area gives
                                                                        you the tools to do so effectively.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Marriage
                                                                        and Family Therapy, Mental Health
                                                                        Counseling,
                                                                        Child Therapy.



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

                                                        Education and Teaching


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You are
                                                                        naturally
                                                                        drawn to roles where you can help others
                                                                        grow,
                                                                        learn, and develop. Education allows you
                                                                        to
                                                                        build meaningful connections with
                                                                        students while
                                                                        fostering a supportive learning
                                                                        environment.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Early Childhood Education, Special
                                                                        Education,
                                                                        Educational Psychology.



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

                                                        Human Resources


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Human
                                                                        Resources
                                                                        involves managing relationships within
                                                                        organizations, helping to resolve
                                                                        conflicts, and
                                                                        ensuring that the workplace is
                                                                        supportive and
                                                                        harmonious. This aligns well with your
                                                                        relational and empathetic strengths.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Talent Management, Organizational
                                                                        Behavior,
                                                                        Employee Relations, Diversity and
                                                                        Inclusion.


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

                                                        Social Work


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Social Work
                                                                        is
                                                                        centered around helping people in need,
                                                                        fostering community support, and
                                                                        improving
                                                                        social conditions. Your compassionate
                                                                        and
                                                                        supportive nature makes this subject
                                                                        area a
                                                                        natural choice.



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Child
                                                                        Welfare, Community Development, Family
                                                                        Services,
                                                                        Mental Health Support.



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

                                                        Health Sciences (Patient-Centered Care)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Health
                                                                        sciences,
                                                                        particularly areas focused on patient
                                                                        care,
                                                                        involve direct relationships with
                                                                        people. You
                                                                        are drawn to fields that allow you to
                                                                        provide
                                                                        comfort, support, and understanding to
                                                                        those in
                                                                        need.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Nursing,
                                                                        Occupational Therapy, Hospice Care,
                                                                        Mental
                                                                        Health Nursing.



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

                                                        Conflict Resolution and Mediation


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You excel
                                                                        at
                                                                        resolving conflicts and helping people
                                                                        find
                                                                        common ground. This subject area teaches
                                                                        you
                                                                        structured methods for mediating
                                                                        disputes and
                                                                        improving relationships in personal,
                                                                        community,
                                                                        or organizational settings.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Mediation, Family Conflict Resolution,
                                                                        International Conflict Resolution,
                                                                        Workplace
                                                                        Mediation.




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

                                                        Literature and Humanities


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Literature
                                                                        often
                                                                        explores the complexities of human
                                                                        emotions,
                                                                        relationships, and experiences. You may
                                                                        be drawn
                                                                        to reading and analyzing stories that
                                                                        focus on
                                                                        personal growth, emotional depth, and
                                                                        social
                                                                        interaction.





                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Literary Criticism, Creative Writing,
                                                                        Cultural
                                                                        Studies.





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

                                                        Political Science (Human Rights Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You are
                                                                        likely
                                                                        drawn to subjects that focus on
                                                                        improving the
                                                                        human condition and advocating for the
                                                                        rights of
                                                                        others. Political Science with a focus
                                                                        on human
                                                                        rights aligns with your desire to create
                                                                        a more
                                                                        just and compassionate world.





                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Human Rights, Social Justice,
                                                                        International
                                                                        Relations, Public Policy.


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

                                                        Nursing and Caregiving


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Nursing and
                                                                        caregiving professions require a deep
                                                                        sense of
                                                                        empathy and emotional understanding.
                                                                        These
                                                                        subjects allow you to focus on the
                                                                        relational
                                                                        aspects of health care, ensuring that
                                                                        patients
                                                                        feel supported both emotionally and
                                                                        physically.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Pediatric Nursing, Geriatric Nursing,
                                                                        Palliative
                                                                        Care.





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

                                                        Journalism (Human-Interest Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Journalism,
                                                                        especially in the human-interest area,
                                                                        allows
                                                                        you to tell the stories of people’s
                                                                        lives,
                                                                        emotions, and experiences. This subject
                                                                        is a
                                                                        natural fit for those who want to
                                                                        connect with
                                                                        others and convey those connections
                                                                        through
                                                                        storytelling.




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Human Rights Journalism, Social Issues
                                                                        Reporting, Feature Writing.




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

                                                        Fine Arts (Emotionally Expressive Arts)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You may be
                                                                        drawn to
                                                                        the arts as a means of emotional
                                                                        expression and
                                                                        connection. Through creative work,
                                                                        whether
                                                                        visual, musical, or performing arts, you
                                                                        can
                                                                        explore deep emotional and relational
                                                                        themes.





                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Art Therapy, Music Therapy, Creative
                                                                        Writing,
                                                                        Performing Arts.





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

                                                        Public Health (Community Health Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Public
                                                                        health,
                                                                        particularly areas focused on improving
                                                                        the
                                                                        health and well-being of communities,
                                                                        aligns
                                                                        with your interest in fostering
                                                                        healthier,
                                                                        happier relationships within society.





                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Subfields of interest:</strong>
                                                                        Community Health, Mental Health
                                                                        Advocacy, Public
                                                                        Health Education.




                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Study Tips for your brain :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Discussions:</strong>You learn
                                                            best when
                                                            you can discuss concepts with others. Engage in
                                                            study groups
                                                            or classroom discussions to explore different
                                                            perspectives.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Relate to Real-World Scenarios:
                                                            </strong>Choose subjects that have direct social
                                                            applications or are rooted in human experiences, as
                                                            this
                                                            helps you understand the material on a deeper level.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Use Emotional Context:
                                                            </strong>Connect emotionally with what you are
                                                            studying by
                                                            reflecting on how the material affects people and
                                                            relationships. This can enhance your retention and
                                                            understanding.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborate with Peers:
                                                            </strong>Group projects, collaborative learning, and
                                                            teamwork will boost your engagement and learning
                                                            outcomes.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Focus on Case Studies and Practical
                                                                Examples:
                                                            </strong>Whenever possible, study real-life
                                                            examples, case
                                                            studies, or stories that highlight human
                                                            interactions and
                                                            relationships.


                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        in
                                                        empathy, relationships, and human connection, you’ll be
                                                        able to
                                                        engage deeply with the material and excel in areas where
                                                        emotional intelligence and compassion are key
                                                        components.


                                                    </p>

                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 4): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Artist,
                                                                        Graphic Designer, Illustrator, Art
                                                                        Therapist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You have a
                                                                        strong
                                                                        affinity for expressing ideas visually
                                                                        and
                                                                        emotionally. This subject allows you to
                                                                        explore
                                                                        your imagination and creativity through
                                                                        various
                                                                        mediums.


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

                                                        Literature and Creative Writing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author,
                                                                        Poet, Screenwriter, Copywriter

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging
                                                                        with
                                                                        literature and writing allows you to
                                                                        convey
                                                                        complex ideas and emotions through
                                                                        storytelling.
                                                                        Your innovative approach to language and
                                                                        narrative can lead to impactful writing.


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

                                                        Design (Graphic, Fashion, Industrial)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Graphic
                                                                        Designer, Fashion Designer, Product
                                                                        Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Design subjects encourage you to explore
                                                                        aesthetics and functionality while
                                                                        allowing you
                                                                        to think creatively about
                                                                        problem-solving and
                                                                        innovation.



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

                                                        Media and Communications


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Journalist, Public
                                                                        Relations
                                                                        Specialist, Social Media Manager



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> This field
                                                                        allows
                                                                        you to express your ideas and creativity
                                                                        while
                                                                        connecting with diverse audiences. You
                                                                        can
                                                                        explore innovative ways to share stories
                                                                        and
                                                                        information.




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

                                                        Psychology (Creative or Cognitive Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Psychologist, Art
                                                                        Therapist,
                                                                        User Experience Researcher



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Psychology allows you to explore human
                                                                        behavior
                                                                        and emotions creatively. You can develop
                                                                        innovative therapeutic approaches or
                                                                        research
                                                                        methodologies.




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

                                                        Entrepreneurship and Business Innovation


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Entrepreneur, Startup
                                                                        Founder, Business Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Entrepreneurship encourages you to think
                                                                        creatively about business models and
                                                                        innovative
                                                                        solutions to market needs. Your ability
                                                                        to
                                                                        challenge conventional thinking is a key
                                                                        asset
                                                                        in this field.


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

                                                        Technology and Computer Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Software
                                                                        Developer, Game Designer, Data Scientist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> The tech
                                                                        field
                                                                        allows for creative problem-solving and
                                                                        innovation in developing new
                                                                        applications,
                                                                        software, or games. You can explore
                                                                        unique
                                                                        solutions through coding and design.




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

                                                        Environmental Studies (Sustainability Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental
                                                                        Consultant,
                                                                        Sustainability Coordinator, Urban
                                                                        Planner


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> This
                                                                        subject
                                                                        encourages you to think creatively about
                                                                        solutions to environmental challenges
                                                                        and
                                                                        promotes innovative approaches to
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
                                                        data-bs-target="#collapseExample-9" aria-expanded="false"
                                                        aria-controls="collapseExample-9">

                                                        Performing Arts (Theater, Dance, Music)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Actor,
                                                                        Dancer, Musician, Director





                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Engaging in the performing arts allows
                                                                        you to
                                                                        express your creativity and connect with
                                                                        others
                                                                        emotionally, exploring human experiences
                                                                        through
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
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Social Sciences (Focus on Change and Innovation)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>
                                                                        Sociologist, Anthropologist, Community
                                                                        Organizer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Social sciences encourage you to explore
                                                                        human
                                                                        behavior and societal change. You can
                                                                        develop
                                                                        innovative solutions to social issues
                                                                        and engage
                                                                        with diverse communities.


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

                                                        Fashion and Trend Forecasting


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Fashion
                                                                        Designer, Trend Analyst, Fashion
                                                                        Journalist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        You are likely to be attuned to cultural
                                                                        shifts
                                                                        and can use your creativity to
                                                                        anticipate and
                                                                        shape fashion trends, allowing you to
                                                                        express
                                                                        your unique style.


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

                                                        Architecture and Urban Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Architect,
                                                                        Urban Planner, Landscape Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Architecture allows for creativity in
                                                                        designing
                                                                        functional and aesthetically pleasing
                                                                        spaces.
                                                                        Your innovative ideas can contribute to
                                                                        community development and urban
                                                                        aesthetics.

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

                                                        Culinary Arts and Food Innovation


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Chef, Food
                                                                        Scientist, Food Blogger

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Engaging in culinary arts allows you to
                                                                        explore
                                                                        creativity through food, experimenting
                                                                        with
                                                                        flavors, presentation, and innovative
                                                                        cooking
                                                                        techniques.


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

                                                        Philosophy and Critical Thinking


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Philosopher,
                                                                        Ethicist, Policy
                                                                        Advisor

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Philosophy encourages deep thinking and
                                                                        exploration of abstract concepts. Your
                                                                        innovative mindset allows you to
                                                                        challenge
                                                                        conventional wisdom and propose new
                                                                        ideas.


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

                                                        Fashion Marketing and Branding


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Fashion
                                                                        Marketer, Brand Strategist, Visual
                                                                        Merchandiser



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject combines creativity with
                                                                        marketing
                                                                        strategies, allowing you to think
                                                                        innovatively
                                                                        about how to promote products and engage
                                                                        consumers.





                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Study Tips for your brain :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Explore Interdisciplinary
                                                                Subjects:</strong>Engage
                                                            in courses that combine different fields, allowing
                                                            you to
                                                            integrate creativity with practical knowledge.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborate on Projects:
                                                            </strong>Work with peers to brainstorm and develop
                                                            ideas, as
                                                            collaborative efforts can spark innovative
                                                            solutions.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Engage in Hands-On Learning:
                                                            </strong>Participate in workshops, labs, or projects
                                                            that
                                                            allow for experimentation and practical application
                                                            of
                                                            ideas.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Embrace Diverse Perspectives:
                                                            </strong>Seek out diverse viewpoints to enrich your
                                                            understanding and inspire new creative ideas.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Ideas:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            ideas,
                                                            sketches, or concepts to track your creative journey
                                                            and
                                                            reflect on your growth.



                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        in
                                                        creativity, innovation, and original thought, you can
                                                        find
                                                        fulfilling academic and career paths that resonate with
                                                        your
                                                        unique cognitive style.


                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 5): ?>
                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                       

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Balanced Logical Thinker or Dual
                                                        Analytical-Practical, your
                                                        natural inclinations lean toward subjects that promote
                                                        analytical thinking, practical problem-solving, and
                                                        structured
                                                        learning. You thrive in environments that encourage
                                                        critical
                                                        thinking and real-world application. Here are the
                                                        subjects that
                                                        align with your strengths and interests:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Mathematics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Statistician, Data
                                                                        Analyst,
                                                                        Financial Analyst, Actuary



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>You enjoy
                                                                        logical
                                                                        reasoning and problem-solving, which are
                                                                        core
                                                                        components of mathematics. This subject
                                                                        helps
                                                                        develop analytical skills that can be
                                                                        applied in
                                                                        various fields.


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

                                                        Science (Biology, Chemistry, Physics)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Research
                                                                        Scientist, Lab Technician, Environmental
                                                                        Scientist, Engineer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Science
                                                                        allows you
                                                                        to explore the principles of the natural
                                                                        world
                                                                        through systematic experimentation and
                                                                        observation. You enjoy applying logical
                                                                        thinking
                                                                        to understand complex systems.


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

                                                        Computer Science and Programming


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Software
                                                                        Developer, Systems Analyst, IT
                                                                        Consultant,
                                                                        Cybersecurity Specialist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject combines analytical
                                                                        thinking with
                                                                        practical application. You can create
                                                                        solutions
                                                                        and programs that address real-world
                                                                        challenges
                                                                        through logical reasoning.



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

                                                        Economics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Economist,
                                                                        Market Research Analyst, Policy Advisor,
                                                                        Financial Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Economics
                                                                        combines
                                                                        analytical thinking with real-world
                                                                        applications, allowing you to explore
                                                                        how you
                                                                        and societies make decisions regarding
                                                                        resources.




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

                                                        Engineering


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Mechanical
                                                                        Engineer, Civil Engineer, Electrical
                                                                        Engineer,
                                                                        Industrial Engineer



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Engineering requires practical
                                                                        problem-solving
                                                                        skills and a strong foundation in
                                                                        mathematics
                                                                        and science. You enjoy applying
                                                                        theoretical
                                                                        knowledge to design and build functional
                                                                        systems.

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

                                                        Business and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Business
                                                                        Analyst, Project Manager, Operations
                                                                        Manager,
                                                                        Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Business subjects allow you to analyze
                                                                        market
                                                                        trends and apply practical strategies to
                                                                        achieve
                                                                        organizational goals. Your logical
                                                                        mindset aids
                                                                        in decision-making processes.



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

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Clinical
                                                                        Psychologist, Human Resources
                                                                        Specialist,
                                                                        Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Studying
                                                                        psychology enables you to explore human
                                                                        behavior
                                                                        through a logical lens. This subject
                                                                        encourages
                                                                        critical thinking about the factors
                                                                        influencing
                                                                        behavior and decision-making.


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

                                                        Statistics and Data Analysis


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Data
                                                                        Scientist, Research Analyst, Quality
                                                                        Control
                                                                        Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Statistics
                                                                        emphasizes logical reasoning and data
                                                                        interpretation, enabling you to make
                                                                        informed
                                                                        decisions based on quantitative
                                                                        evidence.


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

                                                        Philosophy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Philosopher,
                                                                        Ethicist, Policy
                                                                        Advisor

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Philosophy encourages critical thinking
                                                                        and
                                                                        analysis of complex ideas. You enjoy
                                                                        exploring
                                                                        fundamental questions and developing
                                                                        coherent
                                                                        arguments.





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

                                                        Law


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Lawyer,
                                                                        Legal Consultant, Paralegal


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Law requires logical reasoning and
                                                                        analytical
                                                                        thinking to interpret legislation and
                                                                        apply it
                                                                        to various situations. You enjoy
                                                                        dissecting
                                                                        arguments and understanding complex
                                                                        legal
                                                                        frameworks.



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

                                                        Environmental Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental
                                                                        Consultant,
                                                                        Sustainability Manager, Conservation
                                                                        Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject allows you to analyze
                                                                        environmental
                                                                        issues critically and develop practical
                                                                        solutions for sustainability challenges.


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

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Healthcare
                                                                        Administrator, Medical Researcher,
                                                                        Public Health
                                                                        Analyst


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Health sciences combine analytical
                                                                        skills with
                                                                        practical application in healthcare
                                                                        settings,
                                                                        allowing you to address health-related
                                                                        challenges systematically.


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

                                                        Information Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>IT
                                                                        Specialist, Network Administrator,
                                                                        Database
                                                                        Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        IT emphasizes problem-solving and
                                                                        logical
                                                                        reasoning in technology applications,
                                                                        enabling
                                                                        you to troubleshoot and create efficient
                                                                        systems.


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

                                                        Social Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Sociologist,
                                                                        Anthropologist,
                                                                        Community Organizer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Social sciences encourage the
                                                                        application of
                                                                        analytical thinking to understand human
                                                                        behavior
                                                                        and societal structures.


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

                                                        Creative Writing (Analytical Focus)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author,
                                                                        Editor, Technical Writer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        While primarily a creative subject, you
                                                                        can
                                                                        apply analytical skills in organizing
                                                                        narratives
                                                                        and developing compelling arguments in
                                                                        your
                                                                        writing.


                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Study Tips for learning :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary
                                                                Studies:</strong>Explore
                                                            subjects that combine analytical and practical
                                                            elements to
                                                            foster innovative thinking.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborate on Projects:
                                                            </strong>Work with peers to analyze data, solve
                                                            problems,
                                                            and share diverse perspectives.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Hands-On Learning:
                                                            </strong>Seek out practical experiences, such as
                                                            internships
                                                            or labs, to apply your knowledge in real-world
                                                            settings.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Various Resources:
                                                            </strong>Access books, videos, and online courses
                                                            that
                                                            provide comprehensive insights into your subjects of
                                                            interest.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your
                                                            progress
                                                            and insights.



                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        in
                                                        analytical thinking and practical problem-solving, you
                                                        can find
                                                        fulfilling academic and career paths that resonate with
                                                        your
                                                        unique cognitive style.



                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 6): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                       

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Relational Creative or Creative Connector, your
                                                        natural
                                                        inclinations lean toward subjects that promote
                                                        creativity,
                                                        interpersonal connections, and collaborative learning.
                                                        You
                                                        thrive in environments that encourage exploration,
                                                        innovation,
                                                        and emotional engagement. Here are the preferred
                                                        subjects that
                                                        align with your strengths and interests:

                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Fine Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Artist,
                                                                        Illustrator, Art Therapist, Gallery
                                                                        Curator



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        fine
                                                                        arts allows you to express your
                                                                        creativity and
                                                                        emotions through various mediums,
                                                                        fostering
                                                                        personal and artistic growth.


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

                                                        Theater and Performing Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Actor,
                                                                        Director, Dancer, Drama Teacher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>The
                                                                        performing arts
                                                                        enable you to connect with audiences on
                                                                        an
                                                                        emotional level while fostering
                                                                        collaboration
                                                                        and teamwork in productions.



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

                                                        Music


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Musician,
                                                                        Composer, Music Producer, Music Teacher



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Music provides an avenue for creative
                                                                        expression
                                                                        and connection with others, whether
                                                                        through
                                                                        performance, composition, or
                                                                        collaboration in
                                                                        ensembles.




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

                                                        Creative Writing and Literature


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author,
                                                                        Screenwriter, Editor, Poet



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Writing
                                                                        allows you
                                                                        to explore your imagination and convey
                                                                        your
                                                                        thoughts and emotions. Literature
                                                                        encourages
                                                                        deep analysis of human experiences and
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
                                                        data-bs-target="#collapseExample-5" aria-expanded="false"
                                                        aria-controls="collapseExample-5">

                                                        Psychology



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Clinical
                                                                        Psychologist, Counselor, Human Resources
                                                                        Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Psychology helps you understand human
                                                                        behavior
                                                                        and emotions, fostering empathy and
                                                                        relational
                                                                        skills that are key to connecting with
                                                                        others.


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

                                                        Communication Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Public
                                                                        Relations Specialist, Communication
                                                                        Consultant,
                                                                        Marketing Coordinator



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject emphasizes effective
                                                                        communication
                                                                        strategies, enabling you to connect with
                                                                        diverse
                                                                        audiences and express your ideas
                                                                        clearly.



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

                                                        Education and Teaching


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Educator,
                                                                        Curriculum Developer, Instructional
                                                                        Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Education
                                                                        allows
                                                                        you to inspire and support others in
                                                                        your
                                                                        learning journeys while fostering
                                                                        creativity and
                                                                        collaboration in the classroom.



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

                                                        Media Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Journalist, Content
                                                                        Creator,
                                                                        Media Planner

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Media
                                                                        studies
                                                                        provide insights into storytelling and
                                                                        audience
                                                                        engagement, allowing you to express
                                                                        creativity
                                                                        while connecting with diverse audiences.


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

                                                        Design (Graphic, Interior, Fashion)



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Graphic Designer,
                                                                        Interior
                                                                        Designer, Fashion Designer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Design emphasizes creativity and
                                                                        aesthetics,
                                                                        allowing you to create visually
                                                                        appealing work
                                                                        while connecting with clients and
                                                                        understanding
                                                                        your needs.


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

                                                        Cultural Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Anthropologist,
                                                                        Cultural
                                                                        Advisor, Community Organizer



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Cultural studies encourage exploration
                                                                        of
                                                                        diverse perspectives and foster a deeper
                                                                        understanding of social dynamics,
                                                                        enhancing your
                                                                        relational skills.




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

                                                        Social Work


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Social Worker,
                                                                        Community
                                                                        Outreach Coordinator, Family Therapist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Social work allows you to connect with
                                                                        you and
                                                                        communities, using your empathy and
                                                                        creativity
                                                                        to address social issues and foster
                                                                        positive
                                                                        change.



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

                                                        Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Startup
                                                                        Founder, Business Consultant, Creative
                                                                        Director


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Entrepreneurship encourages innovative
                                                                        thinking
                                                                        and creative problem-solving, allowing
                                                                        you to
                                                                        explore new ideas and connect with
                                                                        others in
                                                                        your ventures.



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

                                                        Public Relations and Marketing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>PR
                                                                        Specialist, Brand Manager, Marketing
                                                                        Strategist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        These fields allow you to use your
                                                                        relational
                                                                        skills and creativity to connect brands
                                                                        with
                                                                        your audiences, crafting compelling
                                                                        narratives
                                                                        that resonate.



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

                                                        Graphic Design and Multimedia Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Multimedia Artist,
                                                                        Web
                                                                        Designer, Animation Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        These subjects allow you to combine
                                                                        creativity
                                                                        with technology, creating engaging
                                                                        visual
                                                                        content that connects with viewers.



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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental
                                                                        Activist,
                                                                        Sustainability Coordinator, Conservation
                                                                        Scientist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject encourages exploration of
                                                                        environmental issues while fostering
                                                                        community
                                                                        connections and collaboration in
                                                                        sustainability
                                                                        efforts.



                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Study Tips for your brain :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary
                                                                Studies:</strong>Explore
                                                            subjects that combine creativity with relational
                                                            aspects to
                                                            foster innovative thinking.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Collaborate on Projects:
                                                            </strong>Work with peers to brainstorm and develop
                                                            ideas,
                                                            leveraging each other's strengths to spark
                                                            creativity.




                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Hands-On Learning:
                                                            </strong>Seek out practical experiences that allow
                                                            you to
                                                            apply your knowledge in real-world contexts.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Various Resources:
                                                            </strong>Access books, videos, and online courses
                                                            that
                                                            provide comprehensive insights into your subjects of
                                                            interest.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your
                                                            progress
                                                            and insights.



                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        in
                                                        creativity, relational skills, and collaborative
                                                        learning, you
                                                        can find fulfilling academic and career paths that
                                                        resonate with
                                                        your unique cognitive style.




                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 7): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects
                                                        naturally

                                                    </h5>
                                                    <p class="comparison-description">
                                                        As a Innovative Analyst or Creative Problem-Solver, your
                                                        natural
                                                        inclinations lean toward subjects that promote
                                                        analytical
                                                        thinking, creative exploration, and problem-solving. You
                                                        thrive
                                                        in environments that encourage logical reasoning
                                                        alongside
                                                        innovative and practical applications. Here are the
                                                        preferred
                                                        subjects that align with your strengths and the
                                                        corresponding
                                                        career options:


                                                    </p>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Mathematics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Data
                                                                        Analyst, Statistician, Actuary,
                                                                        Financial
                                                                        Analyst



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Mathematics
                                                                        strengthens your analytical thinking and
                                                                        problem-solving abilities, providing a
                                                                        solid
                                                                        foundation for various analytical
                                                                        careers.


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

                                                        Computer Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Software
                                                                        Developer, Systems Analyst, IT
                                                                        Consultant,
                                                                        Cybersecurity Specialist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Computer
                                                                        science
                                                                        combines logical reasoning with creative
                                                                        problem-solving, allowing you to develop
                                                                        innovative software solutions and
                                                                        systems.




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
                                                                        <strong>Related Career
                                                                            Paths:</strong>Mechanical
                                                                        Engineer, Civil Engineer, Electrical
                                                                        Engineer,
                                                                        Industrial Engineer



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Engineering emphasizes analytical skills
                                                                        and
                                                                        practical application, enabling you to
                                                                        solve
                                                                        complex problems and design effective
                                                                        solutions.


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

                                                        Science (Physics, Chemistry, Biology)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Research
                                                                        Scientist, Environmental Scientist, Lab
                                                                        Technician




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Scientific
                                                                        subjects encourage analytical thinking
                                                                        and
                                                                        experimentation, allowing you to explore
                                                                        the
                                                                        natural world and solve real-world
                                                                        problems.





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

                                                        Psychology



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Clinical
                                                                        Psychologist, Human Resources
                                                                        Specialist, Market
                                                                        Research Analyst



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Psychology combines analytical reasoning
                                                                        with an
                                                                        understanding of human behavior,
                                                                        providing
                                                                        insights that enhance relational skills
                                                                        and
                                                                        problem-solving approaches.



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

                                                        Creative Writing and Literature


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author,
                                                                        Editor, Copywriter, Content Strategist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Creative writing allows you to explore
                                                                        your
                                                                        imagination while developing strong
                                                                        communication skills, enhancing your
                                                                        ability to
                                                                        articulate ideas effectively.




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

                                                        Business and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Business
                                                                        Analyst, Project Manager, Operations
                                                                        Manager,
                                                                        Entrepreneur



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Business
                                                                        studies
                                                                        provide analytical frameworks for
                                                                        understanding
                                                                        market dynamics while encouraging
                                                                        innovative
                                                                        thinking and strategic planning.




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

                                                        Design (Graphic, Industrial, Fashion)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Graphic Designer,
                                                                        Product
                                                                        Designer, Fashion Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong> Design
                                                                        subjects
                                                                        promote creativity and innovation,
                                                                        allowing you
                                                                        to solve visual and functional problems
                                                                        through
                                                                        artistic expression.



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

                                                        Environmental Science



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental
                                                                        Consultant,
                                                                        Sustainability Manager, Conservation
                                                                        Scientist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        This subject encourages analytical
                                                                        thinking
                                                                        about ecological issues while fostering
                                                                        creative
                                                                        solutions for sustainability.



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

                                                        Social Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Sociologist,
                                                                        Anthropologist,
                                                                        Policy Analyst




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Social sciences provide analytical tools
                                                                        for
                                                                        understanding societal structures and
                                                                        behaviors,
                                                                        enabling you to contribute to meaningful
                                                                        social
                                                                        change.





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

                                                        Marketing and Public Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Marketing Specialist,
                                                                        PR
                                                                        Coordinator, Brand Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Marketing studies allow you to analyze
                                                                        consumer
                                                                        behavior while fostering creativity in
                                                                        crafting
                                                                        compelling messages and campaigns.




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

                                                        Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Startup
                                                                        Founder, Business Consultant, Innovation
                                                                        Manager



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Entrepreneurship encourages innovative
                                                                        thinking
                                                                        and problem-solving in business
                                                                        contexts,
                                                                        allowing you to bring creative ideas to
                                                                        market.

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

                                                        Technology and Multimedia Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Multimedia
                                                                        Artist, Web Developer, UX Designer




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        These subjects combine technical skills
                                                                        with
                                                                        creativity, allowing you to design
                                                                        engaging
                                                                        digital experiences.



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

                                                        Philosophy and Critical Thinking



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Ethicist, Policy
                                                                        Advisor,
                                                                        Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Philosophy fosters analytical thinking
                                                                        and
                                                                        problem-solving, encouraging you to
                                                                        explore
                                                                        complex ideas and ethical dilemmas.




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

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Healthcare
                                                                        Administrator,
                                                                        Medical Researcher, Public Health
                                                                        Analyst




                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>
                                                                        Health sciences require analytical
                                                                        skills to
                                                                        assess data and implement effective
                                                                        health
                                                                        strategies, enabling you to make a
                                                                        positive
                                                                        impact in the field.




                                                                    </li>
                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">

                                                    <h5 class="description-title">Study Tips for your brain :
                                                    </h5>

                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary
                                                                Studies:</strong>Explore
                                                            subjects that combine analytical and creative
                                                            elements to
                                                            foster innovative thinking.



                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Hands-On Learning:
                                                            </strong>Seek out practical experiences that allow
                                                            you to
                                                            apply your knowledge in real-world contexts.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Various Resources:
                                                            </strong>Access books, videos, and online courses
                                                            that
                                                            provide comprehensive insights into your subjects of
                                                            interest.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your
                                                            progress
                                                            and insights.



                                                        </li>

                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths
                                                        in
                                                        analytical thinking and creative problem-solving, you
                                                        can find
                                                        fulfilling academic and career paths that resonate with
                                                        your
                                                        unique cognitive style.


                                                    </p>

                                                </div>

                                            </div>
                                        </div>


                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 8): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                       

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Practical Empath or Grounded Relational Thinker, your
                                                        communication and behavior styles are characterized by empathy,
                                                        practicality, and a strong focus on relational dynamics. You
                                                        thrive in environments where you can connect with others
                                                        meaningfully and provide grounded solutions to challenges.
                                                        Here’s how your communication and behavior typically manifest:

                                                    </p>
                                                </div>

                                                <h5 class="description-title">Communication Style:
                                                </h5>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Empathetic and Relational


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You communicate with a strong sense of empathy,
                                                                        seeking to understand the emotions and
                                                                        perspectives of others. This relational approach
                                                                        helps you build trust and rapport.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your empathetic
                                                                        communication fosters a supportive environment,
                                                                        making others feel valued and understood.

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

                                                        Clear and Direct


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You prefer to communicate in a straightforward
                                                                        manner, ensuring your message is clear and
                                                                        easily understood. You value honesty and
                                                                        transparency in your interactions.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This clarity helps
                                                                        prevent misunderstandings and promotes effective
                                                                        communication.

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

                                                        Collaborative



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You thrive in collaborative environments where
                                                                        input from others is valued. You actively
                                                                        encourage group discussions and value diverse
                                                                        perspectives in problem-solving.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong> This collaborative
                                                                        approach enhances teamwork and fosters
                                                                        creativity in group settings.

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

                                                        Active Listener



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are attentive when others speak,
                                                                        demonstrating genuine interest in your thoughts
                                                                        and feelings. This active listening enhances
                                                                        your understanding and helps you respond
                                                                        thoughtfully.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your listening skills
                                                                        build rapport and strengthen relationships, as
                                                                        others feel appreciated and heard.

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

                                                        Practical Problem-Solver


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        Your communication often reflects a practical
                                                                        approach to challenges. You focus on finding
                                                                        solutions and offering grounded advice based on
                                                                        your understanding of the situation.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This practical
                                                                        orientation allows you to provide relevant
                                                                        insights and support to those around you.

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

                                                        Encouraging and Supportive


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You tend to be encouraging in your
                                                                        communication, providing positive reinforcement
                                                                        and support to others. You celebrate your
                                                                        successes and help them through challenges.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your supportive nature
                                                                        fosters a sense of community and belonging,
                                                                        making it easier for others to approach you for
                                                                        help.
                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <h5 class="description-title">Behavioral Traits
                                                </h5>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Relational and Connective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You prioritize building meaningful connections
                                                                        with others and seek to create a sense of
                                                                        community. Your social nature enables you to
                                                                        engage with a wide range of you.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>This relational focus
                                                                        helps create strong networks and support
                                                                        systems.


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

                                                        Adaptable and Flexible


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You are open to change and can adjust your
                                                                        communication style based on the needs of the
                                                                        situation or the people involved. This
                                                                        flexibility enhances your effectiveness in
                                                                        various social contexts.

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your adaptability
                                                                        allows you to navigate different social dynamics
                                                                        smoothly.

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

                                                        Grounded and Practical


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        You approach situations with a practical
                                                                        mindset, focusing on realistic solutions and
                                                                        achievable goals. This grounded approach helps
                                                                        you stay focused and balanced.


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Strength:</strong>Your practicality can
                                                                        inspire others to adopt a similar mindset when
                                                                        facing challenges.


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

                                                        Positive and Optimistic


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
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
                                                        data-bs-target="#collapseExample-10" aria-expanded="false"
                                                        aria-controls="collapseExample-10">

                                                        Reflective and Introspective


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
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
                                                        data-bs-target="#collapseExample-11" aria-expanded="false"
                                                        aria-controls="collapseExample-11">

                                                        Goal-Oriented in Relationships

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
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
                                                                        mindset can lead to purposeful interactions and
                                                                        a sense of accomplishment in shared endeavors.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Tips for Enhancing Communication
                                                        and Behavior:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Practice Active Listening:
                                                            </strong>Continue to engage fully when others speak, asking
                                                            clarifying questions and demonstrating genuine interest in
                                                            your thoughts and feelings.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Encourage Open Dialogue:
                                                            </strong>Create an environment where everyone feels
                                                            comfortable sharing your ideas and feedback. Promote
                                                            discussions that value diverse perspectives.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Leverage Your Empathy:
                                                            </strong>Use your empathetic nature to connect with others
                                                            on a deeper level, fostering trust and understanding in your
                                                            relationships.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Reflect on Interactions:
                                                            </strong>Take time to assess your communication style and
                                                            behaviors after discussions. Identify areas for improvement
                                                            and recognize your successes.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Support and Encourage Others:</strong>
                                                            Be proactive in providing encouragement and support to those
                                                            around you. Your positive reinforcement can enhance
                                                            relationships and foster a sense of community.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By understanding and embracing your communication and behavioral
                                                        tendencies as an L2R2 / R2L2 dominant individual, you can
                                                        enhance your ability to connect with others and foster
                                                        meaningful, fulfilling relationships in all areas of your life.
                                                        Your empathic skills, practical thinking, and strong relational
                                                        abilities make you a valuable contributor to any team or
                                                        collaborative effort.

                                                    </p>
                                                </div>

                                                <h5 class="description-title">Inclination for Subjects for Practical
                                                    Empath / Grounded Relational Thinker
                                                </h5>

                                                <p class="comparison-description">
                                                    As a Practical Empath or Grounded Relational Thinker, your natural
                                                    inclinations lean toward subjects that promote empathy, practical
                                                    application, and relational engagement. You thrive in environments
                                                    that allow you to connect with others meaningfully while applying
                                                    your knowledge to solve real-world challenges. Here are the
                                                    preferred subjects that align with your strengths and the
                                                    corresponding career options:

                                                </p>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Counselor, Human Resources
                                                                        Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        helps you understand human behavior and
                                                                        emotions, fostering empathy and relational
                                                                        skills that are key to connecting with others.

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

                                                        Social Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Sociologist, Anthropologist,
                                                                        Policy Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Social sciences
                                                                        provide analytical tools for understanding
                                                                        societal structures and behaviors, enabling you
                                                                        to contribute to meaningful social change.

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

                                                        Communication Studies



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Relations Specialist, Communication Consultant,
                                                                        Marketing Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Communication
                                                                        studies emphasize effective communication
                                                                        strategies, enabling you to connect with diverse
                                                                        audiences and express your ideas clearly.

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

                                                        Education and Training

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong> Educator,
                                                                        Curriculum Developer, Instructional Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Education allows
                                                                        you to inspire and support others in your
                                                                        learning journeys while fostering creativity and
                                                                        collaboration in the classroom.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-16" aria-expanded="false"
                                                        aria-controls="collapseExample-16">

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-16">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Healthcare
                                                                        Administrator, Public Health Analyst, Health
                                                                        Educator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Health sciences
                                                                        require a practical understanding of
                                                                        health-related issues and the ability to connect
                                                                        with you on a personal level.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-17" aria-expanded="false"
                                                        aria-controls="collapseExample-17">

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-17">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Conservation Scientist, Sustainability
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages an understanding of ecological issues
                                                                        while fostering empathy and community engagement
                                                                        in sustainability efforts.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-18" aria-expanded="false"
                                                        aria-controls="collapseExample-18">

                                                        Creative Arts and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-18">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Graphic
                                                                        Designer, Art Therapist, Multimedia Artist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative arts allows you to express your
                                                                        emotions and ideas visually while enhancing your
                                                                        problem-solving abilities.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-19" aria-expanded="false"
                                                        aria-controls="collapseExample-19">

                                                        Business and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-19">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Project Manager, Operations Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        provide practical frameworks for understanding
                                                                        market dynamics while encouraging relational
                                                                        engagement and teamwork.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-20" aria-expanded="false"
                                                        aria-controls="collapseExample-20">

                                                        Culinary Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-20">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Chef, Food
                                                                        Scientist, Nutritionist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Culinary arts allow
                                                                        for creative expression while often involving
                                                                        collaboration and connection with others through
                                                                        food.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-21" aria-expanded="false"
                                                        aria-controls="collapseExample-21">

                                                        Public Policy and Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-21">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Policy
                                                                        Advisor, Community Development Specialist,
                                                                        Government Relations Officer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This field allows
                                                                        you to work on issues that impact communities
                                                                        while applying your empathetic understanding of
                                                                        social dynamics.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-22" aria-expanded="false"
                                                        aria-controls="collapseExample-22">

                                                        Cultural Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-22">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Cultural
                                                                        Advisor, Community Organizer, Nonprofit Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Cultural studies
                                                                        encourage exploration of diverse perspectives
                                                                        and foster a deeper understanding of social
                                                                        dynamics.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-23" aria-expanded="false"
                                                        aria-controls="collapseExample-23">

                                                        Technology and Media Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-23">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Digital
                                                                        Media Specialist, Content Creator, UX Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Technology and
                                                                        media studies allow you to engage with creative
                                                                        content while applying practical skills to
                                                                        enhance user experiences.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-24" aria-expanded="false"
                                                        aria-controls="collapseExample-24">

                                                        Leadership Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-24">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Organizational Development
                                                                        Consultant, Leadership Coach, HR Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Leadership studies
                                                                        emphasize relational dynamics and effective
                                                                        communication, helping you to develop skills for
                                                                        guiding others.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-25" aria-expanded="false"
                                                        aria-controls="collapseExample-25">

                                                        Human Services


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-25">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Social
                                                                        Worker, Community Service Manager, Family
                                                                        Support Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Human services
                                                                        focus on helping you and communities, aligning
                                                                        with your empathetic nature and desire to make a
                                                                        positive impact.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample-26" aria-expanded="false"
                                                        aria-controls="collapseExample-26">

                                                        Philosophy and Ethics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-26">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Ethicist,
                                                                        Policy Analyst, Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages critical thinking about moral
                                                                        dilemmas and social issues, fostering deeper
                                                                        understanding and discussion about complex
                                                                        topics.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary Studies:
                                                            </strong>Explore subjects that connect multiple disciplines,
                                                            allowing you to see the bigger picture and understand the
                                                            interrelationships between different fields.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths to spark creativity
                                                            and deepen understanding.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Practical Experiences:
                                                            </strong>Seek out opportunities that allow you to apply your
                                                            knowledge in real-world contexts, such as internships,
                                                            volunteering, or project-based learning.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your progress
                                                            and insights.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:</strong>
                                                            Engage with mentors or peers to receive constructive
                                                            feedback that can help you refine your understanding and
                                                            improve your skills.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        empathy, practical application, and relational engagement, you
                                                        can find fulfilling academic and career paths that resonate with
                                                        your unique cognitive style.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 9): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As an Analytical Connector or Relational Analyst, your natural
                                                        inclinations lean toward subjects that promote analytical
                                                        thinking, problem-solving, and relational engagement. You thrive
                                                        in environments where you can connect with others while applying
                                                        your knowledge to dissect complex information. Here are the
                                                        preferred subjects that align with your strengths and the
                                                        corresponding career options:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Counselor, Human Resources
                                                                        Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        helps you understand human behavior and
                                                                        emotions, which fosters empathy and relational
                                                                        skills essential for connecting with others.


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

                                                        Sociology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Sociologist, Policy Analyst,
                                                                        Community Development Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Sociology provides
                                                                        insights into societal structures and group
                                                                        dynamics, enhancing your analytical skills in
                                                                        understanding social issues and relationships.

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

                                                        Communication Studies



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>


                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Relations Specialist, Marketing Coordinator,
                                                                        Communication Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes effective communication strategies,
                                                                        enabling you to connect with diverse audiences
                                                                        and express your ideas clearly.


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

                                                        Data Science and Analytics



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Data
                                                                        Analyst, Market Researcher, Business
                                                                        Intelligence Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Data science allows
                                                                        you to leverage your analytical skills to
                                                                        interpret complex datasets and inform
                                                                        decision-making processes.

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

                                                        Education and Training


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Teacher,
                                                                        Corporate Trainer, Educational Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        education allows you to inspire and support
                                                                        others in your learning journeys, using your
                                                                        relational skills to foster growth.

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

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Healthcare
                                                                        Administrator, Public Health Analyst, Health
                                                                        Educator


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Health sciences
                                                                        require both analytical understanding and the
                                                                        ability to connect with you on a personal level,
                                                                        making it a suitable field for you.


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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Conservation Scientist, Sustainability
                                                                        Coordinator


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages an understanding of ecological issues
                                                                        while fostering community engagement and
                                                                        practical problem-solving.

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

                                                        Creative Arts and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Graphic
                                                                        Designer, Art Therapist, User Experience (UX)
                                                                        Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative fields allows you to express your ideas
                                                                        visually while applying analytical thinking to
                                                                        enhance user experiences.

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

                                                        Business and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Project Manager, Operations Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        provide practical frameworks for understanding
                                                                        market dynamics while emphasizing relational
                                                                        engagement and teamwork.

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
                                                                        <strong>Related Career Paths:</strong>Policy
                                                                        Advisor, Community Organizer, Nonprofit Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This field allows
                                                                        you to work on issues that impact communities
                                                                        while applying your analytical understanding of
                                                                        social dynamics.

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

                                                        Cultural Studies

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Cultural
                                                                        Advisor, Community Development Specialist,
                                                                        Nonprofit Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Cultural studies
                                                                        encourage exploration of diverse perspectives
                                                                        and foster a deeper understanding of social
                                                                        dynamics.


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

                                                        Technology and Media Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Digital
                                                                        Media Specialist, Content Creator, UX Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Technology and
                                                                        media studies allow you to engage with creative
                                                                        content while applying practical skills to
                                                                        enhance user experiences.


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

                                                        Leadership Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Organizational Development
                                                                        Consultant, Leadership Coach, HR Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Leadership studies
                                                                        emphasize relational dynamics and effective
                                                                        communication, helping you develop skills for
                                                                        guiding others.

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

                                                        Human Services



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Social
                                                                        Worker, Community Service Manager, Family
                                                                        Support Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Human services
                                                                        focus on helping you and communities, aligning
                                                                        with your empathetic nature and desire to make a
                                                                        positive impact.


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

                                                        Philosophy and Ethics

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Ethicist,
                                                                        Policy Analyst, Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages critical thinking about moral
                                                                        dilemmas and social issues, fostering deeper
                                                                        understanding and discussion about complex
                                                                        topics.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary Studies:
                                                            </strong>Explore subjects that connect multiple disciplines,
                                                            allowing you to see the bigger picture and understand the
                                                            interrelationships between different fields.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths to spark creativity
                                                            and deepen understanding.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Practical Experiences:
                                                            </strong>Seek out opportunities that allow you to apply your
                                                            knowledge in real-world contexts, such as internships,
                                                            volunteering, or project-based learning.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your progress
                                                            and insights.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:</strong>
                                                            Engage with mentors or peers to receive constructive
                                                            feedback that can help you refine your understanding and
                                                            improve your skills.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        analytical thinking, relational engagement, and practical
                                                        application, you can find fulfilling academic and career paths
                                                        that resonate with your unique cognitive style.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 10): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Practical Innovator or Grounded Creative), your natural
                                                        inclinations lean toward subjects that emphasize practical
                                                        application, creativity, and innovation. You thrive in
                                                        environments that allow you to explore new ideas while grounding
                                                        them in real-world contexts. Here are the preferred subjects
                                                        that align with your strengths and the corresponding career
                                                        options:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Graphic
                                                                        Designer, Art Therapist, Multimedia Artist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying creative
                                                                        arts allows you to express your innovative ideas
                                                                        visually while enhancing your problem-solving
                                                                        abilities and emotional intelligence.

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

                                                        Design and Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Industrial Designer, UX/UI
                                                                        Designer, Fashion Designer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This field
                                                                        encourages both creativity and practicality,
                                                                        allowing you to design functional products while
                                                                        engaging in creative processes.


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
                                                                        <strong>Related Career Paths:</strong>Mechanical
                                                                        Engineer, Civil Engineer, Software Engineer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        combines analytical skills with creativity to
                                                                        solve practical problems, making it a suitable
                                                                        field for innovative thinkers like you.



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

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Human Resources Specialist, Life
                                                                        Coach


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        helps you understand human behavior and
                                                                        emotions, fostering empathy and relational
                                                                        skills that enhance your interactions with
                                                                        others.


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

                                                        Business and Entrepreneurship


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Entrepreneur, Marketing Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes practical applications and innovative
                                                                        thinking, equipping you with the skills needed
                                                                        to identify opportunities and develop solutions.


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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Conservation Scientist, Sustainability
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages an understanding of ecological issues
                                                                        while fostering creativity in developing
                                                                        sustainable solutions.

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

                                                        Communication Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Public Relations Specialist,
                                                                        Marketing Coordinator, Communication Consultant



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes effective communication strategies,
                                                                        enabling you to connect with diverse audiences
                                                                        and express your innovative ideas clearly.

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
                                                                        <strong>Related Career Paths:</strong>Teacher,
                                                                        Corporate Trainer, Educational Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Working in
                                                                        education allows you to inspire and support
                                                                        others in your learning journeys, using your
                                                                        relational skills to foster growth.


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

                                                        Cultural Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Cultural
                                                                        Advisor, Community Development Specialist,
                                                                        Nonprofit Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages exploration of diverse perspectives
                                                                        and fosters a deeper understanding of social
                                                                        dynamics.


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

                                                        Philosophy and Ethics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Ethicist,
                                                                        Policy Analyst, Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages critical thinking about moral
                                                                        dilemmas and social issues, fostering deeper
                                                                        understanding and discussion about complex
                                                                        topics.


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

                                                        Technology and Media Studies

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Digital
                                                                        Media Specialist, Content Creator, UX Researcher



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject allows
                                                                        you to engage with creative content while
                                                                        applying practical skills to enhance user
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
                                                        data-bs-target="#collapseExample-12" aria-expanded="false"
                                                        aria-controls="collapseExample-12">

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Health Analyst, Healthcare Administrator, Health
                                                                        Educator



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Health sciences
                                                                        require both analytical understanding and the
                                                                        ability to connect with you on a personal level,
                                                                        making it a suitable field for you.



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

                                                        Leadership Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Organizational Development
                                                                        Consultant, Leadership Coach, HR Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This field
                                                                        emphasizes relational dynamics and effective
                                                                        communication, helping you develop skills for
                                                                        guiding others.

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

                                                        Entrepreneurship



                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Start-Up
                                                                        Founder, Business Consultant, Venture Capital
                                                                        Analyst


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying
                                                                        entrepreneurship allows you to explore
                                                                        innovative business ideas and develop practical
                                                                        skills for launching ventures.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary Studies:
                                                            </strong>Explore subjects that connect multiple disciplines,
                                                            allowing you to see the bigger picture and understand the
                                                            interrelationships between different fields.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths to spark creativity
                                                            and deepen understanding.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Practical Experiences:
                                                            </strong>Seek out opportunities that allow you to apply your
                                                            knowledge in real-world contexts, such as internships,
                                                            volunteering, or project-based learning.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:
                                                            </strong>Keep a journal or digital portfolio of your
                                                            thoughts, reflections, and projects to track your progress
                                                            and insights.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:</strong>
                                                            Engage with mentors or peers to receive constructive
                                                            feedback that can help you refine your understanding and
                                                            improve your skills.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        practical thinking, creativity, and relational engagement, you
                                                        can find fulfilling academic and career paths that resonate with
                                                        your unique cognitive style.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 11): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                     

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Grounded Thinker or Structured Planner, your natural
                                                        inclinations lean toward subjects that emphasize organization,
                                                        practicality, and logical reasoning. You thrive in environments
                                                        where clear structure and analytical thinking are valued. Here
                                                        are the preferred subjects that align with your strengths and
                                                        the corresponding career options:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Mathematics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Data
                                                                        Analyst, Actuary, Statistician


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Mathematics
                                                                        encourages logical reasoning and problem-solving
                                                                        skills, making it an excellent fit for your
                                                                        analytical mindset.


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

                                                        Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Research Scientist,
                                                                        Environmental Scientist, Pharmacologist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying the
                                                                        sciences provides a structured framework for
                                                                        understanding the natural world, emphasizing
                                                                        evidence-based conclusions and experimentation.



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
                                                                        <strong>Related Career Paths:</strong>Civil
                                                                        Engineer, Mechanical Engineer, Electrical
                                                                        Engineer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engineering
                                                                        combines analytical thinking with practical
                                                                        applications, allowing you to develop structured
                                                                        solutions to complex problems.


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

                                                        Business Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Project Manager, Operations Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes organization, strategic planning, and
                                                                        efficient management, aligning with your
                                                                        strengths in structured thinking.



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

                                                        Computer Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Software
                                                                        Developer, Systems Analyst, IT Project Manager


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Computer science
                                                                        encourages logical problem-solving and
                                                                        structured programming, allowing you to create
                                                                        solutions based on clear methodologies.



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

                                                        Economics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Economic Analyst, Financial
                                                                        Consultant, Market Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Economics provides
                                                                        analytical tools to understand complex systems
                                                                        and make informed decisions, resonating with
                                                                        your structured approach.


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

                                                        Education


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Teacher, Curriculum
                                                                        Developer, Educational Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying education
                                                                        allows you to apply structured methodologies to
                                                                        facilitate learning, helping others achieve your
                                                                        academic goals.


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

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Organizational Psychologist, Human
                                                                        Resources Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Psychology
                                                                        encourages analytical understanding of behavior
                                                                        and thought processes, fostering skills in
                                                                        observation and evaluation.

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

                                                        Political Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Policy
                                                                        Analyst, Government Consultant, Lobbyist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        provides a structured understanding of political
                                                                        systems and policies, aligning with your
                                                                        analytical skills.

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

                                                        Health Sciences


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Health Administrator, Healthcare Manager, Health
                                                                        Educator


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Health sciences
                                                                        require both analytical understanding and
                                                                        structured planning to manage healthcare
                                                                        initiatives effectively.


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

                                                        Environmental Studies

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Conservation Scientist, Sustainability
                                                                        Coordinator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages structured approaches to
                                                                        understanding ecological issues and developing
                                                                        practical solutions.


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

                                                        Statistics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Biostatistician, Market
                                                                        Research Analyst, Data Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Statistics
                                                                        emphasizes data analysis and interpretation,
                                                                        requiring strong logical reasoning skills.

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

                                                        Legal Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Lawyer, Paralegal, Legal
                                                                        Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Legal studies
                                                                        require a structured approach to understanding
                                                                        laws and regulations, emphasizing analytical
                                                                        thinking.


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

                                                        History


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Historian,
                                                                        Archivist, Museum Curator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying history
                                                                        allows you to analyze past events systematically
                                                                        and understand your implications for the
                                                                        present.


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

                                                        Finance


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Financial
                                                                        Analyst, Investment Banker, Budget Analyst


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Finance involves
                                                                        structured decision-making and analytical
                                                                        assessments of economic conditions.



                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Emphasize Organization:
                                                            </strong>Keep your study materials well-organized and
                                                            structured to facilitate effective learning.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Structured Resources:
                                                            </strong>Choose textbooks and online courses that present
                                                            information in a clear, logical manner.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:
                                                            </strong>Engage with mentors or peers to receive
                                                            constructive feedback that can help refine your
                                                            understanding and skills.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:</strong>
                                                            Maintain a journal or digital portfolio to track your
                                                            thoughts, reflections, and progress over time.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        practical thinking, logical reasoning, and structured
                                                        approaches, you can find fulfilling academic and career paths
                                                        that resonate with your unique cognitive style.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 12): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                       
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Abstract Idealist or Relational Planner, your natural
                                                        inclinations lean toward subjects that emphasize creativity,
                                                        exploration, and relational engagement. You thrive in
                                                        environments that allow for imaginative thinking and the
                                                        exploration of ideas while fostering connections with others.
                                                        Here are the preferred subjects that align with your strengths
                                                        and the corresponding career options:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Counselor, Human Resources
                                                                        Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        allows you to explore human behavior and
                                                                        relationships, fostering your understanding of
                                                                        others and enhancing your empathetic nature.

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

                                                        Creative Writing and Literature


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author, Editor, Content
                                                                        Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages imaginative thinking and
                                                                        self-expression, allowing you to explore complex
                                                                        ideas and emotions through storytelling.




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

                                                        Art and Design

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>


                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Graphic
                                                                        Designer, Interior Designer, Visual Artist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative arts allows you to express your ideas
                                                                        visually and explore concepts in innovative
                                                                        ways, aligning with your creative inclinations.


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

                                                        Sociology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Social
                                                                        Researcher, Community Organizer, Policy Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Sociology focuses
                                                                        on understanding societal structures and
                                                                        relationships, which resonates with your
                                                                        interest in exploring connections and dynamics
                                                                        between people.

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

                                                        Communication Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Relations Specialist, Marketing Coordinator,
                                                                        Communications Consultant



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes the importance of effective
                                                                        communication and the role of media in shaping
                                                                        relationships, aligning with your relational
                                                                        planning skills.

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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Sustainability Coordinator, Conservation
                                                                        Scientist



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject allows
                                                                        you to engage with real-world issues and explore
                                                                        solutions that foster community well-being and
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
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Education


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Teacher, Educational
                                                                        Consultant, Curriculum Developer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying education
                                                                        allows you to apply creative methodologies to
                                                                        facilitate learning, helping others achieve your
                                                                        academic and personal goals.

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

                                                        Philosophy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Ethicist,
                                                                        Policy Analyst, Academic Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages abstract thinking and exploration of
                                                                        complex ideas, allowing you to engage with
                                                                        fundamental questions about existence, ethics,
                                                                        and knowledge.


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

                                                        Cultural Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Cultural
                                                                        Advisor, Community Development Specialist,
                                                                        Museum Curator


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        fosters an understanding of diverse perspectives
                                                                        and cultural dynamics, resonating with your
                                                                        interest in relational connections.


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

                                                        Business Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Entrepreneur, Business
                                                                        Analyst, Marketing Manager



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        provide insights into organizational dynamics
                                                                        and creative problem-solving, aligning with your
                                                                        strengths in planning and relational engagement.



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

                                                        History

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Historian, Archivist, Museum
                                                                        Educator


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying history
                                                                        allows you to analyze past events and your
                                                                        implications for present and future societies,
                                                                        encouraging thoughtful reflection on human
                                                                        connections.



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

                                                        Theatre and Performing Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Actor, Director, Drama
                                                                        Educator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        performing arts allows you to explore human
                                                                        emotions and narratives creatively while
                                                                        connecting with audiences and fellow artists.


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

                                                        International Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Diplomat, Policy Analyst,
                                                                        International Development Specialist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes the relationships between countries
                                                                        and cultures, allowing you to engage with global
                                                                        issues and foster cross-cultural connections.



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

                                                        Marketing and Advertising


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Marketing
                                                                        Specialist, Brand Manager, Advertising Executive


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages creativity and innovation in reaching
                                                                        and connecting with audiences, aligning with
                                                                        your strengths in relational planning.

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

                                                        Media Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-15">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Media
                                                                        Producer, Journalist, Social Media Manager



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Media studies allow
                                                                        you to explore the impact of communication on
                                                                        society and relationships, fostering your
                                                                        interest in creative expression and
                                                                        storytelling.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Explore Interdisciplinary Approaches:
                                                            </strong>Engage with subjects that connect multiple
                                                            disciplines, allowing for a broader understanding of complex
                                                            concepts.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Creative Resources:
                                                            </strong>Incorporate creative tools and resources into your
                                                            learning process, such as visual aids, art supplies, or
                                                            digital media tools.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths to spark creativity
                                                            and deepen understanding.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:
                                                            </strong>Engage with mentors or peers to receive
                                                            constructive feedback that can help refine your
                                                            understanding and improve your skills.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:</strong>
                                                            Maintain a journal or digital portfolio to track your
                                                            thoughts, reflections, and progress over time.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        imaginative thinking, relational engagement, and creative
                                                        exploration, you can find fulfilling academic and career paths
                                                        that resonate with your unique cognitive style.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 13): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Visionary Dreamer or Conceptual Creative, your natural
                                                        inclinations lean toward subjects that emphasize creativity,
                                                        abstract thinking, and relational dynamics. You thrive in
                                                        environments that allow for imaginative exploration and the
                                                        development of innovative ideas. Here are the preferred subjects
                                                        that align with your strengths and the corresponding career
                                                        options:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Creative Writing and Literature


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Author,
                                                                        Editor, Content Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages imaginative thinking and
                                                                        self-expression, allowing you to explore complex
                                                                        ideas and emotions through storytelling.


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

                                                        Art and Design


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Graphic Designer,
                                                                        Illustrator, Visual Artist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative arts allows you to express your ideas
                                                                        visually and explore concepts in innovative
                                                                        ways, aligning with your creative inclinations.

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

                                                        Psychology

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>


                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Clinical
                                                                        Psychologist, Counselor, Human Resources
                                                                        Specialist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        allows you to explore human behavior and
                                                                        relationships, fostering your understanding of
                                                                        others and enhancing your empathetic nature.



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

                                                        Sociology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Social
                                                                        Researcher, Community Organizer, Policy Analyst

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Sociology focuses
                                                                        on understanding societal structures and
                                                                        relationships, which resonates with your
                                                                        interest in exploring connections and dynamics
                                                                        between people.


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

                                                        Communication Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Relations Specialist, Marketing Coordinator,
                                                                        Communications Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes the importance of effective
                                                                        communication and the role of media in shaping
                                                                        relationships, aligning with your relational and
                                                                        conceptual skills.


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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Sustainability Coordinator, Conservation
                                                                        Scientist
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject allows
                                                                        you to engage with real-world issues and explore
                                                                        solutions that foster community well-being and
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
                                                        data-bs-target="#collapseExample-7" aria-expanded="false"
                                                        aria-controls="collapseExample-7">

                                                        Philosophy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Ethicist, Policy Analyst,
                                                                        Academic Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages abstract thinking and exploration of
                                                                        complex ideas, allowing you to engage with
                                                                        fundamental questions about existence, ethics,
                                                                        and knowledge.


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

                                                        Cultural Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Cultural
                                                                        Advisor, Community Development Specialist,
                                                                        Museum Curator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        fosters an understanding of diverse perspectives
                                                                        and cultural dynamics, resonating with your
                                                                        interest in relational connections.

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

                                                        Business Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Entrepreneur, Business
                                                                        Analyst, Marketing Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        provide insights into organizational dynamics
                                                                        and creative problem-solving, aligning with your
                                                                        strengths in planning and relational engagement.

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

                                                        History


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Historian, Archivist, Museum
                                                                        Educator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>BStudying history
                                                                        allows you to analyze past events and your
                                                                        implications for present and future societies,
                                                                        encouraging thoughtful reflection on human
                                                                        connections.

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

                                                        Performing Arts

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-11">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Actor, Director, Drama
                                                                        Educator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        performing arts allows you to explore human
                                                                        emotions and narratives creatively while
                                                                        connecting with audiences and fellow artists.

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

                                                        International Relations


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-12">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Diplomat, Policy Analyst,
                                                                        International Development Specialist
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes the relationships between countries
                                                                        and cultures, allowing you to engage with global
                                                                        issues and foster cross-cultural connections.

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

                                                        Marketing and Advertising


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-13">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Marketing Specialist, Brand
                                                                        Manager, Advertising Executive

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        encourages creativity and innovation in reaching
                                                                        and connecting with audiences, aligning with
                                                                        your strengths in relational planning.

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

                                                        Media Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-14">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Media
                                                                        Producer, Journalist, Social Media Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Media studies allow
                                                                        you to explore the impact of communication on
                                                                        society and relationships, fostering your
                                                                        interest in creative expression and
                                                                        storytelling.


                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Interdisciplinary Approaches:
                                                            </strong>Explore subjects that connect multiple disciplines,
                                                            allowing for a broader understanding of complex concepts.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Creative Resources:
                                                            </strong>Incorporate creative tools and resources into your
                                                            learning process, such as visual aids, art supplies, or
                                                            digital media tools.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Learning:
                                                            </strong>Collaborate with peers to analyze and develop
                                                            ideas, leveraging each other’s strengths to spark creativity
                                                            and deepen understanding.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Feedback:
                                                            </strong>Engage with mentors or peers to receive
                                                            constructive feedback that can help refine your
                                                            understanding and improve your skills.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:</strong>
                                                            Maintain a journal or digital portfolio to track your
                                                            thoughts, reflections, and progress over time.

                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        imaginative thinking, relational engagement, and creative
                                                        exploration, you can find fulfilling academic and career paths
                                                        that resonate with your unique cognitive style.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php elseif ($my_brain_profile_id == 14): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                      

                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Independent Problem-Solver or Analytical Innovator, your
                                                        natural inclinations lean toward subjects that emphasize
                                                        analytical thinking, problem-solving, and independent
                                                        exploration. You thrive in environments that allow you to engage
                                                        deeply with concepts and apply logical reasoning to various
                                                        challenges. Here are the preferred subjects that align with your
                                                        strengths and the corresponding career options:

                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Mathematics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Data
                                                                        Analyst, Statistician, Actuary


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your strong
                                                                        analytical skills allow you to excel in
                                                                        mathematics, which is foundational for many
                                                                        problem-solving roles.

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

                                                        Science (Physics, Chemistry, Biology)


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Research Scientist,
                                                                        Laboratory Technician, Environmental Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging with
                                                                        scientific concepts allows you to apply
                                                                        analytical thinking to real-world problems and
                                                                        conduct experiments that require critical
                                                                        analysis.


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

                                                        Computer Science

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>


                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Software
                                                                        Developer, Systems Analyst, IT Consultant

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your interest in
                                                                        technology and problem-solving aligns well with
                                                                        computer science, where you can develop software
                                                                        solutions and troubleshoot issues.
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

                                                        Economics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Economist,
                                                                        Financial Analyst, Market Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Economics combines
                                                                        analytical reasoning with an understanding of
                                                                        societal impacts, making it suitable for your
                                                                        independent problem-solving approach.

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

                                                        Philosophy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Ethicist,
                                                                        Policy Analyst, Academic Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Philosophy
                                                                        encourages critical thinking and logical
                                                                        reasoning, allowing you to explore complex ideas
                                                                        and ethical dilemmas.

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

                                                        Statistics


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Biostatistician, Market
                                                                        Analyst, Data Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your analytical
                                                                        mindset thrives in statistics, where you can
                                                                        apply mathematical principles to analyze data
                                                                        and draw conclusions.

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

                                                        Research Methodology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Academic Researcher, Policy
                                                                        Researcher, Market Researcher

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging with
                                                                        research methodologies allows you to delve into
                                                                        analytical studies, contributing to data-driven
                                                                        decision-making.

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

                                                        Business and Management


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Operations Manager, Project Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        enable you to apply analytical skills to improve
                                                                        organizational processes and solve complex
                                                                        business challenges.

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

                                                        Information Technology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Network Administrator,
                                                                        Cybersecurity Analyst, IT Project Manager
                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>IT allows you to
                                                                        use analytical skills to solve technical issues,
                                                                        design systems, and enhance organizational
                                                                        efficiency.


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

                                                        Environmental Science


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Sustainability Analyst, Conservation Scientist

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging with
                                                                        environmental science allows you to analyze and
                                                                        develop solutions for pressing ecological
                                                                        issues.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for you:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Practical Applications:
                                                            </strong>Seek opportunities to apply theoretical concepts in
                                                            real-world scenarios, reinforcing your understanding through
                                                            hands-on experiences.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Analytical Tools:
                                                            </strong>Incorporate data analysis tools and software into
                                                            your learning process to enhance your ability to visualize
                                                            and interpret information.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Discussions:
                                                            </strong>Collaborate with peers to explore different
                                                            perspectives on complex topics, fostering deeper insights
                                                            and understanding.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Out Interdisciplinary Approaches:
                                                            </strong>Explore subjects that connect multiple disciplines,
                                                            allowing for a broader understanding of complex issues and
                                                            innovative solutions.


                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:</strong>
                                                            Maintain a journal or digital portfolio to track your
                                                            thoughts, reflections, and progress over time, reinforcing
                                                            your understanding and helping you identify areas for
                                                            improvement.


                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        analytical thinking and independent problem-solving, you can
                                                        find fulfilling academic and career paths that resonate with
                                                        your unique cognitive style.


                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>

                                        <?php elseif ($my_brain_profile_id == 15): ?>

                                        <?php if ($my_age >= 12 && $my_age <= 14):?>

                                     
                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">
                                                <div class="col-12">
                                                    <h5 class="description-title">Inclination for subjects naturally
                                                    </h5>

                                                    <p class="comparison-description">
                                                        As a Quadruple Pie individual (Harmonized Thinker or Balanced
                                                        Integrator), your natural inclinations lean toward subjects that
                                                        emphasize analytical thinking, creativity, and relational
                                                        engagement. You thrive in environments that allow you to explore
                                                        diverse perspectives, integrate ideas, and foster collaboration.
                                                        Here are the preferred subjects that align with your strengths
                                                        and corresponding career options:


                                                    </p>
                                                </div>

                                                <div class="col-12 collapsible-div">

                                                    <button class="collapsible" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample" aria-expanded="false"
                                                        aria-controls="collapseExample">

                                                        Interdisciplinary Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Policy
                                                                        Analyst, Researcher, Educator



                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your ability to
                                                                        synthesize knowledge from various fields allows
                                                                        for a holistic understanding of complex issues,
                                                                        making you well-suited for roles that require
                                                                        integrative thinking.


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

                                                        Psychology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>


                                                    <div class="collapse" id="collapseExample-2">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Clinical Psychologist, Human
                                                                        Resources Specialist, Social Worker


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying psychology
                                                                        enhances your understanding of human behavior,
                                                                        which is crucial for fostering collaboration and
                                                                        effective communication in diverse settings.

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

                                                        Communication Studies

                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-3">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>


                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Public
                                                                        Relations Specialist, Communication Consultant,
                                                                        Corporate Trainer


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        emphasizes effective communication strategies,
                                                                        allowing you to engage with others and
                                                                        facilitate meaningful dialogue.

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

                                                        Creative Arts


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-4">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Graphic
                                                                        Designer, Art Director, Creative Writer

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative arts allows you to express your ideas
                                                                        and integrate your analytical and creative
                                                                        thinking skills, leading to innovative outcomes.


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

                                                        Business Administration


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-5">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Business
                                                                        Analyst, Project Manager, Entrepreneur

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Business studies
                                                                        equip you with the tools to analyze market
                                                                        trends and foster collaboration, aligning with
                                                                        your strengths in integrative thinking and
                                                                        problem-solving.


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

                                                        Environmental Studies


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-6">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Environmental Consultant,
                                                                        Sustainability Coordinator, Conservation
                                                                        Scientist


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging with
                                                                        environmental studies allows you to analyze
                                                                        complex ecological issues while promoting
                                                                        sustainable practices that benefit communities.


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

                                                        Sociology


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-7">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Sociologist, Community
                                                                        Organizer, Social Researcher


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>This subject
                                                                        fosters an understanding of social dynamics and
                                                                        relationships, enabling you to navigate and
                                                                        influence group interactions effectively.


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

                                                        Education


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-8">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>

                                                                    <li class="explaining">
                                                                        <strong>Related Career Paths:</strong>Teacher,
                                                                        Curriculum Developer, Educational Consultant


                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Your ability to
                                                                        integrate various learning styles and
                                                                        perspectives is valuable in education, fostering
                                                                        an inclusive and collaborative learning
                                                                        environment.


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

                                                        Creative Writing


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-9">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Author, Editor, Content
                                                                        Creator

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Engaging in
                                                                        creative writing allows you to express complex
                                                                        ideas and emotions, integrating your analytical
                                                                        and creative skills.

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

                                                        Public Policy


                                                        <i class="fa-solid fa-circle-chevron-up fa-rotate-180 fa-xl collapse-icon"
                                                            style="color: #f6c94d;"></i>

                                                    </button>



                                                    <div class="collapse" id="collapseExample-10">
                                                        <div class="d-flex flex-column p-3 justify-content-center">
                                                            <div class="col-12">
                                                                <p class="explaining">
                                                                <ul>
                                                                    <li class="explaining">
                                                                        <strong>Related Career
                                                                            Paths:</strong>Policy Advisor, Government
                                                                        Analyst, Nonprofit Manager

                                                                    </li>

                                                                    <li class="explaining">
                                                                        <strong>Why it fits:</strong>Studying public
                                                                        policy enables you to analyze societal issues
                                                                        and develop comprehensive solutions that
                                                                        consider multiple perspectives.

                                                                    </li>

                                                                </ul>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title mt-2">Study Tips for Quadruple Pie
                                                        Learners:

                                                    </h5>
                                                    <p>
                                                    <ul>
                                                        <li class="comparison-description">
                                                            <strong>Engage in Collaborative Projects:
                                                            </strong>Seek out opportunities to work with others on
                                                            interdisciplinary projects that encourage the blending of
                                                            diverse ideas and perspectives.
                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Utilize Visual Aids:
                                                            </strong>Incorporate visual tools into your studying to
                                                            better understand complex information and enhance retention.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Participate in Group Discussions:
                                                            </strong>Collaborate with peers to explore different
                                                            viewpoints on complex topics, fostering deeper insights and
                                                            understanding.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Seek Out Real-World Applications:
                                                            </strong>Look for opportunities to apply your knowledge to
                                                            practical problems, reinforcing your learning through
                                                            hands-on experiences.

                                                        </li>

                                                        <li class="comparison-description">
                                                            <strong>Document Your Learning Journey:</strong>
                                                            Maintain a journal or digital portfolio to track your
                                                            thoughts, reflections, and progress over time.



                                                        </li>
                                                    </ul>

                                                    </p>

                                                    <p class="comparison-description">
                                                        By focusing on subjects that align with your strengths in
                                                        analytical thinking, creativity, and relational engagement, you
                                                        can find fulfilling academic and career paths that resonate with
                                                        your unique cognitive style.

                                                    </p>
                                                </div>

                                            </div>
                                        </div>

                                        <?php elseif ($my_age >= 15 && $my_age <= 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php elseif ($my_age > 18):?>

                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">No Data Available</p>
                                            </div>
                                        </div>


                                        <?php endif; ?>


                                        <?php else: ?>

                                        <div class="col-12 ">
                                            <h5 class="description-title"> No Inclination for subjects naturally
                                                Available for
                                                this
                                                Brain Type
                                            </h5>

                                        </div>

                                        <?php endif; ?>


                                    </div>