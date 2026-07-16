<div class="p-3">
    <style>
.col-12, .accordion{
    padding-left: 0px !important;
    padding-right: 0px !important;
}
</style>
                                        <div class="comparing-head">
                                            <div class="comparing-head-section">
                                                <p class="name">{{$compare_details->display_name}}</p>
                                            </div>
                                            <div class="comparing-head-section">
                                                <p class="email">{{$compare_details->email}}</p>
                                            </div>
                                        </div>




                                        <div class="col-12 scrollable-campare">
                                            <div class="row mb-5 gx-3 gy-3">

                                                <div class="col-12 col-lg-6 p-2 d-lg-flex d-md-flex d-xl-flex px-0">
                                                    <img src="{{ asset('assets/images/brain-cartoon.png') }}"
                                                        class="brain-img">
                                                </div>

                                                <div class="d-lg-flex d-none data-box-row gap-3 px-0">
                                                    <div class="box-data px-4"
                                                        style="background-color: #f6c94c; color: black;">
                                                        <p class="mb-0" style="color: black;">
                                                            Candid
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                        {{$compare_brain_score->l1_score}}%
                                                        </h3>
                                                    </div>

                                                    <div class="box-data px-4" style="background-color: #f1935d;">
                                                        <p class="mb-0" style="color: black;">
                                                            Fastidious
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                        {{$compare_brain_score->l2_score}}%
                                                        </h3>
                                                    </div>
                                                </div>

                                                <div class="d-lg-flex d-none data-box-row gap-3 px-0">
                                                    <div class="box-data px-4" style="background-color: #9ae4e3;">
                                                        <p class="mb-0" style="color: black;">
                                                            Maverick
                                                        </p>
                                                        <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                        {{$compare_brain_score->r1_score}}%
                                                        </h3>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 col-12">
                                                        <div class="box-data px-4" style="background-color: #84d6a5;">
                                                            <p class="mb-0" style="color: black;">
                                                            Affable
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                            {{$compare_brain_score->r2_score}}%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="row data-box-row ps-4 gap-0 d-none d-lg-flex d-md-flex d-xl-flex">
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #f6c94c; color: black;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                                86%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #f1935d;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                                72%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row data-box-row ps-4 gap-0 d-none d-lg-flex d-md-flex d-xl-flex">
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #9ae4e3;">
                                                            <p class="mb-0" style="color: black;">
                                                                Fastidious
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                                75%
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 p-1">
                                                        <div class="box-data px-4"
                                                            style="background-color: #84d6a5;">
                                                            <p class="mb-0" style="color: black;">
                                                                Maverick
                                                            </p>
                                                            <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                                67%
                                                            </h3>
                                                        </div>
                                                    </div>

                                                </div> --}}


                                                {{-- mobile data boxes --}}

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                    style="background-color: #f6c94c; color: black;">
                                                    <p class="mb-0" style="color: black;">
                                                        Candid
                                                    </p>
                                                    <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                    {{$compare_brain_score->l1_score}}%
                                                    </h3>
                                                </div>
                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                    style="background-color: #f1935d;">
                                                    <p class="mb-0" style="color: black;">
                                                    Fastidious
                                                    </p>
                                                    <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                    {{$compare_brain_score->l2_score}}%
                                                    </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                    style="background-color: #9ae4e3;">
                                                    <p class="mb-0" style="color: black;">
                                                    Maverick
                                                    </p>
                                                    <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                    {{$compare_brain_score->r1_score}}%
                                                    </h3>
                                                </div>

                                                <div class="d-lg-none d-md-none d-xl-none d-block mobile-data-box"
                                                    style="background-color: #84d6a5;">
                                                    <p class="mb-0" style="color: black;">
                                                    Affable
                                                    </p>
                                                    <h3 class="mb-0" style="color: black;  font-weight: 900 !important">
                                                    {{$compare_brain_score->r2_score}}%
                                                    </h3>
                                                </div>

                                                <?php if ($compare_brain_profile_id == 1): ?>

                                                <div class="col-12 d-flex justify-content-strech px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is highly fact-oriented, with a natural inclination
                                                        to dive deep into problems. You tend to be direct and
                                                        analytical, always seeking certainty before taking action. You
                                                        thoroughly research, calculate, and evaluate every situation,
                                                        weighing the pros and cons carefully. Constantly questioning and
                                                        probing for clarity is second nature to you. This makes you
                                                        excellent at problem-solving and strategizing.




                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your strength lies in your logical, objective approach, and you
                                                        often cut through complexity by sticking to the facts. While
                                                        others may get lost in emotions or subjective views, you focus
                                                        on what can be proven and understood through reason. People rely
                                                        on you for your candid insights, no-nonsense attitude, and the
                                                        ability to deliver grounded solutions.

                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating various indices such as
                                                        <strong>Leadership, Creativity, GIG Potential,
                                                            Entrepreneurship, Team Collaboration Index,</strong> and
                                                        <strong>21st-Century Agility Index</strong>
                                                        can provide valuable insights into different aspects of your
                                                        personal and professional development.
                                                        These indices measure distinct traits and capabilities that are
                                                        essential for success in today’s dynamic
                                                        environment.
                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership : Low
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            Your natural analytical focus may cause you
                                                                            to prefer working independently, and you
                                                                            might not always feel comfortable stepping
                                                                            into leadership roles. Developing your
                                                                            ability to inspire and guide others can
                                                                            elevate your impact, especially in team
                                                                            environments.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity : Low
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            While you excel at logical thinking, you
                                                                            might struggle to think outside the box or
                                                                            come up with unconventional solutions.
                                                                            Cultivating creativity could expand your
                                                                            problem-solving toolkit and open new
                                                                            pathways to innovation.
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential : Low
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            Adapting to highly dynamic, growth-oriented
                                                                            environments may feel challenging, as you
                                                                            prefer structure and clarity. Building your
                                                                            tolerance for uncertainty and innovation
                                                                            will help you thrive in today’s fast-paced
                                                                            world.
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Low </h5>
                                                                        <p class="explaining">
                                                                            You may prefer stability over risk-taking,
                                                                            which can limit entrepreneurial ventures.
                                                                            Strengthening your ability to identify
                                                                            opportunities and take calculated risks can
                                                                            unlock new avenues for growth.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : Low

                                                                        </h5>
                                                                        <p class="explaining">
                                                                            While you are excellent at individual
                                                                            problem-solving, working with others may
                                                                            present challenges. Improving communication
                                                                            and collaboration skills will enable you to
                                                                            work more effectively within teams.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : Low</h5>
                                                                        <p class="explaining">
                                                                            Flexibility and adaptability to change can
                                                                            be areas for growth. Learning to embrace new
                                                                            technologies and remain open to continuous
                                                                            learning in a rapidly evolving environment
                                                                            will enhance your professional agility

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php elseif ($compare_brain_profile_id == 2): ?>

                                                <div class="col-12 d-flex justify-content-strech px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is highly fact-oriented, with a natural inclination
                                                        to tackle practical problems head-on. You are detail-focused and
                                                        methodical, preferring to approach tasks in a systematic manner.
                                                        Your strength lies in your ability to take complex information
                                                        and break it down into manageable, actionable steps. You tend to
                                                        rely on proven methods and consistent processes, ensuring that
                                                        everything is thoroughly planned before you proceed.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your logical and organized approach means you excel in
                                                        environments that require precision and hands-on
                                                        problem-solving. Others admire your dependability and your
                                                        capacity to bring clarity and structure to ambiguous situations.
                                                        You are driven by a need for certainty and prefer to operate in
                                                        familiar, controlled environments where outcomes can be
                                                        predicted based on reliable data.

                                                    </p>
                                                </div>

                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your tendency to stick to facts over assumptions allows you to
                                                        make informed decisions that are grounded in reality. While
                                                        others might be swayed by emotions or abstract ideas, you stay
                                                        focused on what is practical and can be immediately applied.


                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating various indices like Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration,
                                                        and 21st-Century Agility can provide insights into areas for
                                                        growth and personal development.

                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            Moderate</h5>
                                                                        <p class="explaining">
                                                                            You have the potential to lead by example,
                                                                            particularly in environments where precision
                                                                            and reliability are valued. Developing soft
                                                                            leadership skills, such as motivating others
                                                                            and delegating effectively, can enhance your
                                                                            leadership capabilities.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            Moderate
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            While you may not always be inclined towards
                                                                            abstract creativity, your strength lies in
                                                                            practical innovation. Focusing on
                                                                            problem-solving that incorporates both
                                                                            logical thinking and creative solutions can
                                                                            further expand your skill set.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            Moderate
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            You may prefer structured environments but
                                                                            have the ability to thrive in dynamic,
                                                                            freelance settings if you develop a
                                                                            tolerance for ambiguity. Working on
                                                                            flexibility and embracing new challenges
                                                                            will increase your GIG potential.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Low
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            You are more comfortable with stability and
                                                                            clear expectations, so entrepreneurship may
                                                                            not be your natural inclination. Building a
                                                                            risk-tolerance mindset and exploring
                                                                            calculated opportunities can help you grow
                                                                            in this area.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : Moderate
                                                                        </h5>
                                                                        <p class="explaining">
                                                                            You work well with others when the task is
                                                                            clearly defined and roles are
                                                                            straightforward. However, improving
                                                                            communication and learning to work more
                                                                            fluidly in collaborative, less structured
                                                                            environments can enhance your teamwork
                                                                            abilities.

                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : Low</h5>
                                                                        <p class="explaining">
                                                                            Adapting to constant change can be
                                                                            challenging for you. Developing a mindset of
                                                                            continuous learning and embracing
                                                                            technological advancements will help you
                                                                            stay competitive and agile in today's
                                                                            evolving landscape.

                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 3): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is naturally wired for empathy, connection, and
                                                        understanding others. As an <strong>Empathetic Connector,
                                                            Relational
                                                            Harmonizer </strong>, or <strong>Compassionate Thinker
                                                        </strong>, you excel in creating deep
                                                        relationships, building harmony, and approaching situations from
                                                        an emotionally intelligent perspective. You are highly attuned
                                                        to the feelings of those around you and often act as a bridge in
                                                        resolving conflicts or helping others feel heard and understood.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive in environments where collaboration, communication,
                                                        and emotional awareness are valued. Your strength lies in your
                                                        ability to navigate complex social dynamics, offering
                                                        compassion, and creating a sense of unity and shared purpose in
                                                        groups. You are often relied upon to be the emotional anchor in
                                                        both personal and professional contexts.

                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            High</h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                natural ability
                                                                                to connect with others makes you an
                                                                                empathetic leader who listens and values
                                                                                the contributions of each team member.
                                                                                You lead with emotional intelligence and
                                                                                prioritize creating a supportive,
                                                                                inclusive environment.

                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong> To
                                                                                further enhance your leadership skills,
                                                                                focus on balancing empathy with
                                                                                assertiveness. Developing the ability to
                                                                                make tough decisions without losing your
                                                                                compassionate touch will increase your
                                                                                impact.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                creativity comes from your ability to
                                                                                think compassionately and see situations
                                                                                from multiple perspectives. You excel at
                                                                                brainstorming solutions that take into
                                                                                account the emotional and relational
                                                                                aspects of a problem.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Expanding your creativity into areas
                                                                                that require innovation and strategic
                                                                                planning can enhance your ability to
                                                                                contribute in more structured
                                                                                environments. Don’t be afraid to push
                                                                                the boundaries of your creative ideas.



                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            Moderate
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                thrive in collaborative environments
                                                                                where connection with others is central.
                                                                                Freelance or gig work in areas like
                                                                                coaching, counseling, or community
                                                                                management may suit your relational
                                                                                strengths.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                To fully embrace gig potential, work on
                                                                                strengthening your ability to manage
                                                                                your time and projects independently.
                                                                                Building more self-discipline and
                                                                                structure around your workflow will help
                                                                                you excel in dynamic work settings.




                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Moderate

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                relational focus can make you a
                                                                                successful entrepreneur in fields that
                                                                                rely on building strong client
                                                                                relationships, such as coaching,
                                                                                consultancy, or wellness. You naturally
                                                                                create trust and rapport with others.

                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Strengthening your risk tolerance and
                                                                                decision-making under pressure will help
                                                                                you step into entrepreneurship more
                                                                                confidently. Balancing emotional
                                                                                intuition with business strategy will be
                                                                                key to long-term success.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                are a natural collaborator, always
                                                                                considering the perspectives and
                                                                                feelings of others. You excel in team
                                                                                environments, where your ability to
                                                                                foster understanding and connection
                                                                                helps everyone work together more
                                                                                effectively.

                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Enhancing your ability to balance group
                                                                                harmony with productive conflict
                                                                                resolution will allow for deeper
                                                                                collaboration. Focus on encouraging
                                                                                diverse viewpoints while maintaining a
                                                                                unified team.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                are adaptable in social and emotional
                                                                                environments, making it easy for you to
                                                                                navigate changes in team dynamics or
                                                                                relational shifts. You thrive in
                                                                                environments that require flexibility
                                                                                and emotional intelligence.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                To further enhance your agility,
                                                                                practice embracing technological tools
                                                                                and systems that help improve efficiency
                                                                                and organization. Building comfort with
                                                                                rapid change in technology will support
                                                                                your overall adaptability in fast-paced
                                                                                settings.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Advanced Strategies for Growth &
                                                        Development:
                                                    </h5>

                                                    <p class="explaining">

                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Balancing Empathy and Assertiveness:</strong> Work
                                                            on becoming more assertive in situations that require
                                                            tough decisions. Balancing empathy with clear boundaries
                                                            will increase your leadership effectiveness.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Leveraging Creativity in Structured
                                                                Contexts:</strong>Expand your creative thinking to more
                                                            strategic, structured environments. This will allow you to
                                                            contribute innovative ideas in areas where organization and
                                                            systems are key.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Building Self-Discipline in Dynamic
                                                                Roles:</strong>As you explore freelancing or
                                                            entrepreneurship, focus on building stronger personal
                                                            discipline and organization to enhance your independence in
                                                            managing multiple projects.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Fostering Healthy Conflict in
                                                                Teams:</strong>Encourage open dialogue and diverse
                                                            perspectives within teams while maintaining harmony. This
                                                            will lead to more robust problem-solving and stronger team
                                                            dynamics.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Enhancing Comfort with Technology:
                                                            </strong>Embrace new tools and platforms that support your
                                                            work, as this will ensure you remain agile in the
                                                            fast-paced, tech-driven world.

                                                        </li>
                                                    </ul>


                                                    </p>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                    <p class="comparison-description">
                                                        As a relational thinking individual, your strengths lie in your
                                                        emotional intelligence, ability to foster deep connections, and
                                                        capacity to navigate complex social dynamics. You are a
                                                        compassionate leader, an empathetic collaborator, and a creative
                                                        thinker who excels at bringing harmony and understanding to any
                                                        environment. By focusing on areas such as assertiveness,
                                                        self-discipline, and technological adaptability, you can enhance
                                                        your overall effectiveness and contribute even more meaningfully
                                                        to your personal and professional spaces.


                                                    </p>

                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 4): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is wired for innovation, creativity, and
                                                        unconventional thinking. As an <strong> Innovative Maverick,
                                                            Creative
                                                            Visionary, </strong> or <strong> Non-Conformist Thinker
                                                        </strong>, you thrive in environments
                                                        that encourage original thought and exploration beyond
                                                        traditional boundaries. Your approach to problem-solving is
                                                        characterized by a willingness to take risks, think outside the
                                                        box, and challenge the status quo.


                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You excel at generating new ideas and envisioning possibilities
                                                        that others might overlook. This imaginative capability allows
                                                        you to see connections and solutions in unique ways, making you
                                                        a valuable asset in creative fields. Your natural inclination to
                                                        question norms and push limits inspires others to think
                                                        differently and embrace change.


                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.

                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            High</h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                inspire others with your vision and
                                                                                creativity, often leading through
                                                                                example rather than authority. Your
                                                                                innovative ideas can rally people around
                                                                                a cause or project.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong> To
                                                                                enhance your leadership, focus on
                                                                                developing your ability to communicate
                                                                                your vision effectively and inspire
                                                                                others to join you in pursuing it.



                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                creativity is a driving force in your
                                                                                life. You generate novel ideas, think
                                                                                abstractly, and approach problems from
                                                                                unconventional angles.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Continue to cultivate your creative
                                                                                abilities by exploring diverse fields,
                                                                                experimenting with different mediums,
                                                                                and collaborating with other creatives.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                innovative mindset lends itself well to
                                                                                gig work and freelance opportunities,
                                                                                where you can explore your creativity
                                                                                and work on diverse projects.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Strengthen your ability to manage
                                                                                multiple projects and deadlines,
                                                                                ensuring that your creativity is
                                                                                balanced with practical execution.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            High

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                inclination to innovate makes you
                                                                                well-suited for entrepreneurial
                                                                                ventures. You have a natural ability to
                                                                                identify gaps in the market and develop
                                                                                unique solutions.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Work on building your business acumen,
                                                                                learning about finance, marketing, and
                                                                                operational management to complement
                                                                                your creative vision.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : Moderate

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong>
                                                                                While you thrive in creative settings,
                                                                                collaborating with others can sometimes
                                                                                challenge your non-conformist
                                                                                tendencies. You bring fresh ideas to the
                                                                                table.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Focus on enhancing your collaborative
                                                                                skills by practicing active listening
                                                                                and appreciating diverse perspectives
                                                                                while working in teams.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                adapt easily to change and embrace new
                                                                                technologies and ideas. Your flexibility
                                                                                allows you to pivot quickly and explore
                                                                                new avenues.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Continue to stay updated on emerging
                                                                                trends and technologies, and explore how
                                                                                you can be integrated into your creative
                                                                                pursuits.



                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Advanced Strategies for Growth &
                                                        Development:
                                                    </h5>

                                                    <p class="explaining">

                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Enhancing Communication Skills:</strong> Work on
                                                            articulating your creative ideas clearly to others. This
                                                            will help you share your vision and rally support for your
                                                            innovative projects.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Cultivating Collaborative Creativity:
                                                            </strong>Engage in group brainstorming sessions or
                                                            collaborative projects to harness the power of teamwork
                                                            while allowing your creative juices to flow.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Building a Portfolio of Work:</strong>Create a
                                                            portfolio showcasing your innovative ideas and projects.
                                                            This can serve as a valuable tool for pursuing freelance
                                                            opportunities or entrepreneurial ventures.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Embracing Failure as a Learning
                                                                Tool:</strong>Understand that not all ideas will
                                                            succeed. Use failures as opportunities for learning and
                                                            growth, allowing you to iterate and improve your creative
                                                            processes.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Networking with Other Creatives:
                                                            </strong>Connect with like-minded you in your field to
                                                            exchange ideas, collaborate on projects, and inspire each
                                                            other’s creativity.


                                                        </li>
                                                    </ul>


                                                    </p>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Conclusion: Unlocking Your Full
                                                        Potential</h5>

                                                    <p class="comparison-description">
                                                        As a <strong> Maverick Creative Thinker </strong>, your
                                                        strengths lie in your
                                                        ability to innovate, think creatively, and challenge
                                                        conventional wisdom. By focusing on areas such as communication,
                                                        collaboration, and business acumen, you can enhance your overall
                                                        effectiveness and make a meaningful impact in creative fields.
                                                        Your unique perspective and imaginative capabilities position
                                                        you as a leader in fostering change and driving innovation.


                                                    </p>

                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 5): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a harmonious blend of analytical
                                                        and practical thinking. As a <strong> Balanced Logical Thinker
                                                        </strong> or <strong> Dual
                                                            Analytical-Practical </strong>, you possess the ability to
                                                        approach
                                                        problems with both a logical framework and a practical mindset.
                                                        This unique combination allows you to analyze situations
                                                        thoroughly while also considering real-world applications and
                                                        outcomes.



                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive on structure, data, and clear reasoning, which helps
                                                        you make informed decisions. Your analytical nature enables you
                                                        to dissect complex problems into manageable components, while
                                                        your practical side encourages you to implement effective
                                                        solutions that produce tangible results. This balance empowers
                                                        you to navigate challenges efficiently and contributes to your
                                                        ability to succeed in various professional contexts.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            Moderate </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                logical reasoning and practical
                                                                                problem-solving skills make you an
                                                                                effective leader in structured
                                                                                environments. You can guide teams
                                                                                through data-driven decisions.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong> To
                                                                                enhance your leadership skills, focus on
                                                                                developing your ability to inspire and
                                                                                motivate others, fostering a
                                                                                collaborative atmosphere.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            Moderate
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong>
                                                                                While your analytical thinking is
                                                                                strong, you may not gravitate naturally
                                                                                toward creative processes. However, you
                                                                                can apply creative problem-solving
                                                                                techniques within structured frameworks.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Encourage your creative side by engaging
                                                                                in brainstorming sessions or exploring
                                                                                unconventional solutions to problems.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            High
                                                                        </h5>
                                                                        <!-- <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                innovative mindset lends itself well to
                                                                                gig work and freelance opportunities,
                                                                                where you can explore your creativity
                                                                                and work on diverse projects.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Strengthen your ability to manage
                                                                                multiple projects and deadlines,
                                                                                ensuring that your creativity is
                                                                                balanced with practical execution.


                                                                            </li>
                                                                        </ul>


                                                                        </p> -->
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Low

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <!-- <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                inclination to innovate makes you
                                                                                well-suited for entrepreneurial
                                                                                ventures. You have a natural ability to
                                                                                identify gaps in the market and develop
                                                                                unique solutions.


                                                                            </li> -->

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Work on cultivating your risk-taking
                                                                                abilities and exploring innovative ideas
                                                                                that can set you apart in the
                                                                                entrepreneurial landscape.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : Low

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <!-- <li class="explaining">
                                                                                <strong>Current Strengths:</strong>
                                                                                While you thrive in creative settings,
                                                                                collaborating with others can sometimes
                                                                                challenge your non-conformist
                                                                                tendencies. You bring fresh ideas to the
                                                                                table.


                                                                            </li> -->

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Focus on enhancing your communication
                                                                                skills to ensure that your ideas
                                                                                resonate with others and foster
                                                                                collaboration.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : Low
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <!-- <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                adapt easily to change and embrace new
                                                                                technologies and ideas. Your flexibility
                                                                                allows you to pivot quickly and explore
                                                                                new avenues.



                                                                            </li> -->

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Embrace a mindset of continuous learning
                                                                                and exploration to enhance your
                                                                                adaptability to rapidly changing
                                                                                situations.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Advanced Strategies for Growth &
                                                        Development:
                                                    </h5>

                                                    <p class="explaining">

                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Enhancing Leadership through Communication:</strong>
                                                            Develop your interpersonal skills to inspire and motivate
                                                            others. Engage in workshops focused on emotional
                                                            intelligence and team dynamics.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Cultivating Creativity through Structured
                                                                Innovation:
                                                            </strong>Use techniques such as design thinking or creative
                                                            problem-solving frameworks to enhance your innovative
                                                            capabilities while maintaining a logical approach.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Building Entrepreneurial Skills:</strong>Explore
                                                            entrepreneurship through mentorship programs or startup
                                                            incubators to develop your business acumen and innovative
                                                            mindset.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Networking and Collaboration: </strong>Actively seek
                                                            opportunities to collaborate with others in your field to
                                                            gain new insights and perspectives, enhancing your teamwork
                                                            skills.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Investing in Continuous Learning:
                                                            </strong>Stay updated on industry trends and technologies to
                                                            improve your adaptability and ensure your skills remain
                                                            relevant in a changing landscape.


                                                        </li>
                                                    </ul>


                                                    </p>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Conclusion: Unlocking Your Full
                                                        Potential</h5>

                                                    <p class="comparison-description">
                                                        As a <strong>Balanced Logical Thinker / Dual
                                                            Analytical-Practical </strong>, your
                                                        strengths lie in your ability to analyze situations logically
                                                        while considering practical applications. By focusing on areas
                                                        such as leadership, creativity, and collaboration, you can
                                                        enhance your overall effectiveness and make a meaningful impact
                                                        in your chosen fields. Your unique perspective and balanced
                                                        thinking position you as a valuable asset in fostering
                                                        innovation and driving results in various contexts.



                                                    </p>

                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 6): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a unique blend of relational and
                                                        creative thinking. As a <strong> Relational Creative </strong>
                                                        or <strong> Creative
                                                            Connector </strong>, you possess the ability to form deep
                                                        connections with
                                                        others while also expressing your creativity in innovative ways.
                                                        Your strengths lie in your capacity to understand emotions,
                                                        foster relationships, and think outside the box to generate new
                                                        ideas.



                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive on collaboration and enjoy environments where you can
                                                        connect with others to brainstorm, share ideas, and inspire
                                                        creativity. Your ability to empathize with others allows you to
                                                        build strong interpersonal relationships, making you a valuable
                                                        team member and a source of support for those around you.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            High</h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                ability to connect with others and
                                                                                inspire creativity makes you a natural
                                                                                leader in collaborative environments.
                                                                                You can motivate your team through
                                                                                shared vision and passion.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong> To
                                                                                enhance your leadership skills, focus on
                                                                                developing your strategic thinking and
                                                                                decision-making abilities, ensuring you
                                                                                can guide your team effectively.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                creative thinking allows you to generate
                                                                                innovative ideas and solutions. You
                                                                                enjoy exploring new concepts and
                                                                                expressing yourself artistically.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Continue to challenge yourself to
                                                                                explore different mediums of creativity,
                                                                                whether through art, writing, or other
                                                                                forms of expression.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                relational skills and creativity make
                                                                                you well-suited for gig work that
                                                                                involves collaboration and innovation.
                                                                                You can easily adapt to diverse projects
                                                                                and clients.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Strengthen your personal brand and
                                                                                network to attract a variety of gigs
                                                                                that leverage your creative strengths.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Moderate


                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                have the creative vision needed to
                                                                                develop new products or services. Your
                                                                                relational skills can help you build
                                                                                connections with clients and
                                                                                collaborators.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Focus on developing your business acumen
                                                                                and understanding market trends to turn
                                                                                your creative ideas into viable
                                                                                ventures.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : High

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong>
                                                                                You excel in collaborative settings,
                                                                                leveraging your creativity to enhance
                                                                                teamwork. You thrive in environments
                                                                                where sharing ideas and brainstorming is
                                                                                encouraged.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Work on enhancing your conflict
                                                                                resolution skills to navigate
                                                                                disagreements effectively and maintain a
                                                                                harmonious team dynamic.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : Moderate
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                ability to adapt to new ideas and work
                                                                                collaboratively supports your agility in
                                                                                dynamic environments.

                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Embrace continuous learning and stay
                                                                                updated on emerging trends in your field
                                                                                to enhance your adaptability and
                                                                                relevance.

                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Advanced Strategies for Growth &
                                                        Development:
                                                    </h5>

                                                    <p class="explaining">

                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Enhancing Leadership through Emotional
                                                                Intelligence:</strong> Develop your interpersonal
                                                            leadership skills by participating in emotional intelligence
                                                            workshops. Being able to connect with and inspire others
                                                            will elevate your leadership impact.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Cultivating Creativity through Diverse Experiences:
                                                            </strong>Engage in activities outside your primary field of
                                                            interest. Exposure to different perspectives and disciplines
                                                            can spark new ideas and enhance your creative thinking.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Building Entrepreneurial Skills via
                                                                Networking:</strong>Join entrepreneurial communities or
                                                            attend workshops to gain insights from experienced
                                                            entrepreneurs. Learning from others can provide valuable
                                                            guidance for your creative ventures.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Improving Team Collaboration through Communication
                                                                Skills:</strong>Participate in team-building exercises
                                                            that emphasize active listening, empathy, and effective
                                                            communication. Strengthening these skills will enhance your
                                                            collaborative efforts.




                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Fostering Agility through Continuous Learning:
                                                            </strong>Regularly invest time in upskilling through online
                                                            courses, workshops, or seminars. Embracing new technologies
                                                            and ideas will increase your professional agility.



                                                        </li>
                                                    </ul>


                                                    </p>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Conclusion: Unlocking Your Full
                                                        Potential</h5>

                                                    <p class="comparison-description">
                                                        As a <strong>Relational Creative / Creative Connector</strong>,
                                                        your strengths
                                                        lie in your ability to connect with others while fostering
                                                        creativity. By focusing on areas such as leadership, creativity,
                                                        and collaboration, you can enhance your overall effectiveness
                                                        and make a meaningful impact in your chosen fields. Your unique
                                                        perspective and relational skills position you as a valuable
                                                        asset in fostering innovation and driving positive change within
                                                        your networks. Embrace your creativity, nurture your
                                                        connections, and continue to explore new horizons in your
                                                        journey of growth and self-discovery.



                                                    </p>

                                                </div>


                                                <?php elseif ($compare_brain_profile_id == 7): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a unique blend of logical
                                                        analysis and creative problem-solving. As an <strong> Innovative
                                                            Analyst </strong>
                                                        or <strong> Creative Problem-Solver </strong>, you possess the
                                                        ability to dissect
                                                        complex issues while also thinking outside the box to generate
                                                        innovative solutions. Your strengths lie in your analytical
                                                        thinking, critical reasoning, and capacity to apply creativity
                                                        in practical ways.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive on tackling challenging problems, utilizing your
                                                        logical skills to assess situations and develop effective
                                                        strategies. Your creative thinking enables you to approach tasks
                                                        with a fresh perspective, allowing you to explore new ideas and
                                                        possibilities. This combination of analytical rigor and creative
                                                        insight makes you a valuable asset in various settings.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.



                                                    </p>
                                                </div>



                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership :
                                                                            Moderate</h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                analytical approach allows you to lead
                                                                                through logic and reason. You can
                                                                                inspire confidence in others by
                                                                                presenting well-reasoned arguments.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong> Focus
                                                                                on developing your interpersonal
                                                                                leadership skills to enhance your
                                                                                ability to motivate and guide teams
                                                                                effectively.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Creativity :
                                                                            High
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                innovative thinking allows you to
                                                                                generate unique solutions to problems,
                                                                                often considering unconventional
                                                                                approaches.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Continue to cultivate your creative
                                                                                thinking by engaging in activities that
                                                                                challenge your imagination and encourage
                                                                                experimentation.



                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">GIG Potential :
                                                                            Moderate
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                combination of analytical and creative
                                                                                skills makes you adaptable to various
                                                                                gig opportunities that require both
                                                                                problem-solving and innovation.



                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Build your personal brand and network to
                                                                                attract diverse gig opportunities that
                                                                                leverage your strengths.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Entrepreneurship :
                                                                            Moderate


                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> You
                                                                                possess the ability to analyze market
                                                                                trends and develop creative solutions,
                                                                                making you well-suited for
                                                                                entrepreneurial ventures.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Focus on acquiring business knowledge
                                                                                and skills to complement your creative
                                                                                vision and turn ideas into viable
                                                                                business opportunities.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Team Collaboration
                                                                            : Moderate

                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong>
                                                                                You can effectively contribute to team
                                                                                discussions with logical reasoning and
                                                                                innovative ideas, enhancing
                                                                                collaborative efforts.




                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Work on improving your interpersonal
                                                                                skills to foster better relationships
                                                                                within teams and encourage open
                                                                                dialogue.



                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">21st - Century
                                                                            Agility : Moderate
                                                                        </h5>
                                                                        <p class="explaining">

                                                                        <ul>
                                                                            <li class="explaining">
                                                                                <strong>Current Strengths:</strong> Your
                                                                                analytical mindset allows you to adapt
                                                                                to changing situations and assess new
                                                                                information quickly.


                                                                            </li>

                                                                            <li class="explaining">
                                                                                <strong>Growth Potential:</strong>
                                                                                Embrace continuous learning and stay
                                                                                informed about emerging trends in your
                                                                                field to enhance your adaptability and
                                                                                relevance.


                                                                            </li>
                                                                        </ul>


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Advanced Strategies for Growth &
                                                        Development:
                                                    </h5>

                                                    <p class="explaining">

                                                    <ul>
                                                        <li class="explaining">
                                                            <strong>Enhancing Leadership through Emotional
                                                                Intelligence:</strong> Develop your emotional
                                                            intelligence by participating in workshops that focus on
                                                            understanding and managing emotions in yourself and others.

                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Cultivating Creativity through Diverse Experiences:
                                                            </strong>Challenge yourself to explore various creative
                                                            outlets, such as art, writing, or music, to expand your
                                                            creative thinking skills.



                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Building Entrepreneurial Skills via
                                                                Networking:</strong>Join entrepreneurial communities or
                                                            attend workshops to learn from experienced entrepreneurs and
                                                            gain insights into launching and managing a business.




                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Improving Team Collaboration through Communication
                                                                Skills:
                                                            </strong>Participate in team-building activities that focus
                                                            on effective communication and collaboration to strengthen
                                                            your ability to work with others.


                                                        </li>

                                                        <li class="explaining">
                                                            <strong>Fostering Agility through Continuous Learning:
                                                            </strong>Regularly seek out learning opportunities that
                                                            align with your interests and career goals, such as online
                                                            courses, workshops, or conferences.



                                                        </li>
                                                    </ul>


                                                    </p>

                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Conclusion: Unlocking Your Full
                                                        Potential</h5>

                                                    <p class="comparison-description">
                                                        As a <strong> Innovative Analyst / Creative Problem-Solver
                                                        </strong>, your
                                                        strengths lie in your ability to analyze complex problems and
                                                        develop innovative solutions. By focusing on areas such as
                                                        leadership, creativity, and collaboration, you can enhance your
                                                        overall effectiveness and make a meaningful impact in your
                                                        chosen fields. Your unique perspective and problem-solving
                                                        abilities position you as a valuable asset in driving innovation
                                                        and positive change. Embrace your analytical strengths while
                                                        nurturing your creativity, and continue to explore new horizons
                                                        in your journey of growth and self-discovery.




                                                    </p>

                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 15 ): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a unique blend of analytical,
                                                        relational, and creative thinking. As a<strong> Harmonized
                                                            Thinker</strong> or <strong>Balanced Integrator</strong>,
                                                        you excel in environments that require you to synthesize diverse
                                                        perspectives and ideas into cohesive solutions. Your ability to
                                                        balance logic, creativity, and emotional intelligence allows you
                                                        to navigate complex situations effectively.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive in collaborative settings where you can engage with
                                                        others, explore different viewpoints, and foster harmony within
                                                        teams. Your approach to problem-solving is holistic, often
                                                        considering the emotional and social aspects alongside the
                                                        logical and analytical.

                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Leadership: High
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You naturally
                                                                            inspire and motivate others, using your
                                                                            emotional intelligence and understanding of
                                                                            group dynamics to foster collaboration.</li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to enhance
                                                                            your leadership skills by seeking out
                                                                            opportunities for mentorship and community
                                                                            engagement.
                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity: High
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your ability to
                                                                            integrate diverse ideas allows for
                                                                            innovative problem-solving and creative
                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Explore new creative
                                                                            outlets and interdisciplinary projects to
                                                                            further expand your creative toolkit.



                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            Moderate </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can adapt to
                                                                            gig-based work environments, using your
                                                                            relational skills to build networks and
                                                                            connect with others.

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Develop
                                                                            self-marketing skills and seek out
                                                                            opportunities that align with your interests
                                                                            and values.




                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Moderate
                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can adapt to
                                                                            gig-based work environments, using your
                                                                            relational skills to build networks and
                                                                            connect with others.

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Develop
                                                                            self-marketing skills and seek out
                                                                            opportunities that align with your interests
                                                                            and values.




                                                                        </li>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: High

                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel in
                                                                            collaborative environments, valuing input
                                                                            from others and fostering a sense of
                                                                            belonging within teams.

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to improve
                                                                            your facilitation skills and conflict
                                                                            resolution strategies to enhance team
                                                                            dynamics.





                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: High
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You demonstrate
                                                                            adaptability to change and a willingness to
                                                                            embrace new ideas and

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Stay proactive in
                                                                            seeking continuous learning opportunities
                                                                            and developing new skills to remain relevant
                                                                            in fast-paced environments.






                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Participate in
                                                                            leadership training that focuses on empathy,
                                                                            active listening, and relationship-building
                                                                            to strengthen your leadership impact.


                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in interdisciplinary
                                                                            projects that allow you to integrate various
                                                                            perspectives, encouraging innovative
                                                                            solutions.



                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Attend workshops or join
                                                                            entrepreneurial communities to practice
                                                                            identifying opportunities and making
                                                                            strategic decisions.




                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Effective
                                                                                Facilitation: </strong> Focus on
                                                                            enhancing your facilitation skills to
                                                                            encourage productive discussions and
                                                                            collaborative problem-solving.





                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly invest time in professional
                                                                            development opportunities, such as courses
                                                                            or workshops, to enhance your adaptability
                                                                            and skillset.





                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            As a <strong>Quadruple Pie (Harmonized
                                                                                Thinker / Balanced Integrator)</strong>,
                                                                            your strengths lie in your ability to
                                                                            synthesize diverse ideas, foster
                                                                            collaboration, and navigate complex social
                                                                            dynamics. By focusing on areas such as
                                                                            leadership, creativity, and team
                                                                            collaboration, you can enhance your overall
                                                                            effectiveness and make a meaningful impact
                                                                            in your chosen fields. Your unique
                                                                            perspective and relational abilities
                                                                            position you as a valuable asset in driving
                                                                            innovation and harmony in any environment.
                                                                            Embrace your integrative nature while
                                                                            nurturing your leadership skills, and
                                                                            continue to explore new opportunities for
                                                                            growth and self-discovery.


                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 14 ): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a strong analytical approach to
                                                        problem-solving and a desire for independence in your thinking.
                                                        As an <strong>Independent Problem-Solver</strong> or<strong>
                                                            Analytical Innovator,</strong> you have a unique ability to
                                                        dissect complex problems and generate innovative solutions. You
                                                        thrive in environments that allow you to explore ideas
                                                        independently while also valuing logical reasoning and critical
                                                        thinking.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your thought process often involves examining details, analyzing
                                                        information, and seeking effective solutions to challenges. You
                                                        are drawn to opportunities that stimulate your intellect and
                                                        allow for individual exploration of concepts.


                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can lead by
                                                                            example, especially in analytical tasks
                                                                            where your logical reasoning shines. Your
                                                                            independence encourages others to think
                                                                            critically.
                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Developing
                                                                            interpersonal leadership skills, such as
                                                                            motivating and guiding teams, can enhance
                                                                            your impact in collaborative settings.

                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity:
                                                                            Moderate

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your analytical
                                                                            skills contribute to creative
                                                                            problem-solving. You can think outside the
                                                                            box when required, particularly in
                                                                            structured contexts.

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Actively engaging in
                                                                            creative exercises can help expand your
                                                                            creative thinking and application in various
                                                                            scenarios.




                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            High
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel in
                                                                            flexible, gig-based environments where you
                                                                            can utilize your analytical skills
                                                                            independently. Your ability to adapt to new
                                                                            challenges enhances your effectiveness.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continuing to
                                                                            develop skills relevant to gig work, such as
                                                                            self-marketing and networking, can further
                                                                            boost your success in this area.





                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Moderate
                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your independent
                                                                            thinking allows you to identify
                                                                            opportunities and innovate solutions, making
                                                                            you well-suited for entrepreneurial
                                                                            ventures.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Strengthening your
                                                                            business skills, particularly in financial
                                                                            management and marketing, can enhance your
                                                                            entrepreneurial effectiveness.




                                                                        </li>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: Low


                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You are a strong
                                                                            individual contributor, often excelling in
                                                                            tasks that require deep analysis and focus.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Improving your
                                                                            collaboration skills and understanding group
                                                                            dynamics can help you work more effectively
                                                                            within teams.






                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You demonstrate
                                                                            adaptability to new ideas and changes, often
                                                                            approaching them with a logical mindset.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focusing on
                                                                            developing a proactive attitude toward rapid
                                                                            changes will enhance your agility in diverse
                                                                            environments.






                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Participate in
                                                                            workshops that focus on emotional
                                                                            intelligence and interpersonal skills to
                                                                            improve your ability to inspire and guide
                                                                            others.



                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in activities that
                                                                            challenge your analytical thinking, such as
                                                                            design thinking workshops or collaborative
                                                                            brainstorming sessions.




                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial communities
                                                                            or take part in pitch competitions to
                                                                            practice identifying opportunities and
                                                                            making strategic decisions in real-world
                                                                            contexts.





                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Effective
                                                                                Facilitation: </strong> Focus on
                                                                            enhancing your communication skills,
                                                                            particularly in group settings. Consider
                                                                            workshops that emphasize active listening
                                                                            and collaboration.





                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek professional development
                                                                            opportunities to stay updated on industry
                                                                            trends. Online courses, seminars, or
                                                                            mentorship programs can enhance your skills
                                                                            and adaptability.





                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            As an <strong>Independent Problem-Solver /
                                                                                Analytical Innovators,</strong> your
                                                                            strengths lie in your ability to analyze
                                                                            complex problems, generate innovative
                                                                            solutions, and think independently. By
                                                                            focusing on areas such as leadership,
                                                                            creativity, and collaboration, you can
                                                                            enhance your overall effectiveness and make
                                                                            a meaningful impact in your chosen fields.
                                                                            Your unique perspective and strong
                                                                            analytical skills position you as a valuable
                                                                            asset in driving innovation and
                                                                            problem-solving. Embrace your independent
                                                                            nature while nurturing your interpersonal
                                                                            skills, and continue to explore new
                                                                            opportunities for growth and self-discovery.



                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 13 ): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a vibrant and imaginative way of
                                                        thinking that prioritizes creative exploration, abstract
                                                        concepts, and visionary ideas. As a<strong> Visionary
                                                            Dreamer</strong> or <strong>Conceptual Creative,</strong>
                                                        you have a unique ability to envision possibilities and generate
                                                        innovative ideas. You thrive in environments that allow for
                                                        creative expression and conceptual thinking.






                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your thought process often involves exploring abstract ideas,
                                                        generating new concepts, and seeking connections between
                                                        different subjects. You are drawn to opportunities that
                                                        stimulate your imagination and allow you to think outside the
                                                        box. Your creativity is not just limited to art; it extends to
                                                        problem-solving and conceptualizing new ways of thinking.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You possess the
                                                                            ability to inspire others with your vision
                                                                            and creative ideas. Your enthusiasm can
                                                                            motivate those around you.

                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Developing practical
                                                                            leadership skills, such as decision-making
                                                                            and strategic planning, can enhance your
                                                                            effectiveness in guiding teams.


                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity: High


                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your imaginative
                                                                            thinking allows you to generate a wide array
                                                                            of innovative ideas and solutions. You excel
                                                                            at conceptualizing new possibilities.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to nurture
                                                                            your creative thinking through diverse
                                                                            experiences, brainstorming sessions, and
                                                                            collaborative projects.




                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            Moderate

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You thrive in
                                                                            flexible environments that allow for
                                                                            creative exploration and adaptability. Your
                                                                            ideas can drive innovation in gig-based
                                                                            roles.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Building resilience
                                                                            in uncertain situations can help you
                                                                            navigate the dynamic nature of gig work more
                                                                            effectively.





                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: High

                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your visionary
                                                                            mindset and ability to identify
                                                                            opportunities make you well-suited for
                                                                            entrepreneurial endeavors. You can think of
                                                                            unique solutions to problems.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Strengthening your
                                                                            practical business skills, such as financial
                                                                            management and marketing, will enhance your
                                                                            entrepreneurial effectiveness.





                                                                        </li>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: High



                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel at
                                                                            generating ideas collaboratively, fostering
                                                                            an inclusive environment that encourages
                                                                            participation from others.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to develop
                                                                            your collaborative skills by actively
                                                                            seeking input and feedback from team
                                                                            members.







                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate


                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You demonstrate
                                                                            adaptability to new ideas and changes, often
                                                                            embracing innovative concepts. Your
                                                                            creativity helps in navigating dynamic
                                                                            environments.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focusing on
                                                                            developing a proactive mindset in response
                                                                            to rapid changes will enhance your
                                                                            adaptability and relevance.







                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Participate in
                                                                            workshops focused on emotional intelligence
                                                                            and relational dynamics to improve your
                                                                            ability to inspire and guide others.




                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in activities that
                                                                            challenge your usual thinking patterns, such
                                                                            as interdisciplinary projects or creative
                                                                            workshops.





                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial groups or
                                                                            take part in small-scale initiatives to
                                                                            practice identifying opportunities and
                                                                            making decisions.






                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Effective
                                                                                Facilitation: </strong> Focus on
                                                                            enhancing your communication skills,
                                                                            particularly in group settings. Consider
                                                                            workshops that emphasize active listening
                                                                            and empathy.






                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek professional development
                                                                            opportunities to stay updated on industry
                                                                            trends. Online courses, seminars, or
                                                                            mentorship programs can enhance your skills
                                                                            and adaptability.






                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            As a<strong> Visionary Dreamer / Conceptual
                                                                                Creative,</strong> your strengths lie in
                                                                            your ability to generate innovative ideas,
                                                                            inspire others, and conceptualize new
                                                                            possibilities. By focusing on areas such as
                                                                            leadership, creativity, and collaboration,
                                                                            you can enhance your overall effectiveness
                                                                            and make a meaningful impact in your chosen
                                                                            fields. Your unique perspective and strong
                                                                            relational skills position you as a valuable
                                                                            asset in driving innovation and fostering
                                                                            connections. Embrace your imaginative nature
                                                                            while nurturing your practical skills, and
                                                                            continue to explore new opportunities for
                                                                            growth and self-discovery.




                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 12 ): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a strong inclination towards
                                                        abstract thinking, creativity, and relational dynamics. As an
                                                        <strong>Abstract Idealist</strong> or<strong> Relational
                                                            Planner,</strong> you possess the ability to envision
                                                        possibilities and explore ideas beyond the immediate reality.
                                                        You thrive in environments where creativity is valued, and you
                                                        can connect with others on a meaningful level.






                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        Your thought process often involves considering the big picture
                                                        and imagining future possibilities. You are drawn to ideas and
                                                        concepts that inspire and motivate you, and you seek to
                                                        implement plans that align with your values and ideals. Your
                                                        relational nature allows you to understand and empathize with
                                                        others, fostering strong connections and collaborative efforts.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You lead with vision
                                                                            and inspire others through your ideas and
                                                                            ideals. Your ability to connect with people
                                                                            helps you rally support for your
                                                                            initiatives.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Developing your
                                                                            strategic leadership skills can enhance your
                                                                            impact, especially in guiding teams toward
                                                                            shared goals.



                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity: High


                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your imaginative
                                                                            thinking allows you to generate innovative
                                                                            ideas and solutions. You excel at
                                                                            conceptualizing and envisioning
                                                                            possibilities.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to explore
                                                                            diverse creative outlets and engage in
                                                                            activities that stimulate your imaginative
                                                                            thinking further.





                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            Moderate

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You thrive in
                                                                            environments that allow for flexibility and
                                                                            exploration of new ideas. Your creativity
                                                                            can drive innovative solutions in gig-based
                                                                            roles.




                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Embracing the
                                                                            uncertainty that comes with gig
                                                                            opportunities will help you adapt and
                                                                            flourish in dynamic settings.






                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: High

                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your ability to
                                                                            envision and plan for the future makes you
                                                                            well-suited for entrepreneurial endeavors.
                                                                            You are likely to identify opportunities
                                                                            that align with your ideals.




                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong>Strengthening your
                                                                            practical skills in business management and
                                                                            decision-making will enhance your
                                                                            entrepreneurial effectiveness.






                                                                        </li>
                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: High



                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel at
                                                                            building relationships and fostering
                                                                            collaboration within teams. Your empathetic
                                                                            nature encourages open communication and
                                                                            support.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to
                                                                            cultivate your collaborative skills by
                                                                            engaging in team projects and actively
                                                                            seeking diverse perspectives.








                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate


                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You are adaptable to
                                                                            new ideas and changes, often embracing
                                                                            innovative concepts. Your ability to connect
                                                                            with others aids in navigating change.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focusing on
                                                                            developing a proactive mindset in response
                                                                            to rapid changes will enhance your
                                                                            adaptability and relevance.






                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Participate in
                                                                            workshops focused on emotional intelligence
                                                                            and relational dynamics to improve your
                                                                            ability to inspire and guide others.




                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in activities that
                                                                            challenge your usual thinking patterns, such
                                                                            as brainstorming sessions or creative
                                                                            workshops that encourage unconventional
                                                                            ideas.





                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial groups or
                                                                            take part in small-scale initiatives to
                                                                            practice identifying opportunities and
                                                                            making decisions.







                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Effective
                                                                                Facilitation: </strong>Focus on
                                                                            enhancing your interpersonal communication
                                                                            skills. Consider joining workshops or
                                                                            training sessions that emphasize active
                                                                            listening and collaborative problem-solving.






                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly engage in professional development
                                                                            opportunities. Online courses, seminars, or
                                                                            industry conferences can help you stay
                                                                            updated and adapt to changes in your field.







                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            Your strengths lie in your ability to
                                                                            envision possibilities, connect with others,
                                                                            and generate innovative ideas. By focusing
                                                                            on areas such as leadership, creativity, and
                                                                            collaboration, you can enhance your overall
                                                                            effectiveness and make a meaningful impact
                                                                            in your chosen fields. Your unique
                                                                            perspective and strong relational skills
                                                                            position you as a valuable asset in driving
                                                                            innovation and fostering connections.
                                                                            Embrace your idealistic nature while
                                                                            nurturing your practical skills, and
                                                                            continue to explore new opportunities for
                                                                            growth and self-discovery.




                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 11 ): ?>

                                                <div class="col-12 d-flex justify-content-strech  px-0">

                                                    <p class="comparison-description pt-4">
                                                        Your brain is characterized by a strong inclination toward
                                                        structure, organization, and practical thinking. As a
                                                        <strong>Grounded Thinker</strong> or <strong>Structured
                                                            Planner,</strong> you possess the ability to analyze
                                                        situations logically and develop clear, actionable plans. You
                                                        thrive in environments where clarity, organization, and
                                                        methodical approaches are valued, allowing you to bring order to
                                                        complex tasks and achieve your goals effectively.







                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech  px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You excel at identifying the details that contribute to a bigger
                                                        picture, making you adept at managing projects, coordinating
                                                        tasks, and ensuring that everything runs smoothly. Your
                                                        preference for structured environments helps you minimize chaos
                                                        and foster productivity.



                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You lead through
                                                                            careful planning and organization. Your
                                                                            methodical approach helps others understand
                                                                            the steps needed to achieve goals.


                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Developing your
                                                                            ability to inspire and guide others through
                                                                            effective communication can elevate your
                                                                            leadership impact.



                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity: Low



                                                                        </h5>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            Moderate

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You prefer
                                                                            structured environments and may feel less
                                                                            comfortable in highly dynamic settings, but
                                                                            your planning skills can still translate
                                                                            well into gig opportunities.




                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Building your
                                                                            tolerance for ambiguity and developing
                                                                            flexible strategies will help you thrive in
                                                                            gig-based roles.






                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Low


                                                                        </h5>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: Moderate




                                                                        </h5>
                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You contribute
                                                                            significantly to team efforts by ensuring
                                                                            tasks are organized and completed on time.




                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Improving your
                                                                            interpersonal skills and openness to others'
                                                                            ideas will enhance collaboration and team
                                                                            dynamics.








                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Low



                                                                        </h5>




                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Participate in
                                                                            workshops focused on emotional intelligence
                                                                            and relational dynamics to improve your
                                                                            ability to inspire and guide others.




                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in activities outside your
                                                                            comfort zone that encourage innovative
                                                                            thinking, such as brainstorming sessions or
                                                                            creative workshops.






                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial communities
                                                                            or take small-scale initiatives to build
                                                                            confidence in identifying opportunities and
                                                                            taking risks.






                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Effective
                                                                                Facilitation: </strong>Focus on
                                                                            enhancing your communication skills,
                                                                            particularly in group settings, to foster
                                                                            inclusivity and teamwork.






                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek out opportunities to learn
                                                                            new skills or adapt to changing
                                                                            circumstances to increase your relevance and
                                                                            flexibility in the workplace.







                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            your strengths lie in your ability to
                                                                            analyze information, plan methodically, and
                                                                            create structured solutions to complex
                                                                            problems. By focusing on areas such as
                                                                            leadership, creativity, and collaboration,
                                                                            you can enhance your overall effectiveness
                                                                            and make a meaningful impact in your chosen
                                                                            fields. Your unique perspective and strong
                                                                            organizational skills position you as a
                                                                            valuable asset in driving productivity and
                                                                            fostering connections. Embrace your grounded
                                                                            nature while nurturing your innovative
                                                                            potential, and continue to explore new
                                                                            opportunities for growth and self-discovery.





                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 10 ): ?>

                                                <div class="col-12 d-flex justify-content-strech px-0">

                                                    <p class="comparison-description pt-4">

                                                        Your brain is characterized by a unique combination of practical
                                                        thinking and creative innovation. As a <strong>Practical
                                                            Innovator</strong> or <strong>Grounded Creative</strong>,
                                                        you possess the ability to generate new ideas while grounding
                                                        them in real-world applications. Your strengths lie in your
                                                        capacity to think outside the box while ensuring that your
                                                        creative ideas are feasible and actionable.

                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive in environments where practical skills and creative
                                                        thinking intersect, allowing you to apply your knowledge
                                                        effectively to solve problems and create value. Your ability to
                                                        integrate creativity with practicality makes you an asset in any
                                                        team setting, where you can inspire others while contributing
                                                        innovative solutions.




                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can lead
                                                                            effectively by using your innovative ideas
                                                                            to inspire others. Your practical approach
                                                                            helps you guide discussions toward
                                                                            actionable outcomes.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focus on developing
                                                                            your ability to motivate and influence
                                                                            others, enhancing your interpersonal
                                                                            leadership skills.



                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity: High




                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel at
                                                                            generating creative ideas and solutions,
                                                                            leveraging your practical skills to
                                                                            implement them effectively.





                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Continue to
                                                                            cultivate your creative thinking through
                                                                            diverse experiences and collaborations that
                                                                            challenge your perspectives.







                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            High

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your blend of
                                                                            practical skills and innovative thinking
                                                                            makes you well-suited for gig opportunities
                                                                            that require flexibility and adaptability.





                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Build your personal
                                                                            brand and network to attract diverse gig
                                                                            opportunities that leverage your unique
                                                                            strengths.







                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Moderate



                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You have the
                                                                            innovative mindset to identify opportunities
                                                                            and develop solutions to real-world
                                                                            problems, making you a potential
                                                                            entrepreneur.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Strengthening your
                                                                            understanding of business principles and
                                                                            market dynamics will enhance your
                                                                            entrepreneurial potential.








                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: Low





                                                                        </h5>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate




                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can adapt to
                                                                            changing circumstances, applying practical
                                                                            and innovative insights to meet evolving
                                                                            needs.







                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Embrace continuous
                                                                            learning and remain informed about industry
                                                                            trends to enhance your agility in a rapidly
                                                                            changing environment.









                                                                        </li>




                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Empathy: </strong>
                                                                            Develop your leadership skills by
                                                                            participating in workshops focused on
                                                                            emotional intelligence and relational
                                                                            dynamics to improve your ability to inspire
                                                                            and guide others.





                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Diverse Experiences:
                                                                            </strong> Engage in activities that
                                                                            encourage innovative thinking and expose you
                                                                            to new ideas, such as attending creative
                                                                            workshops or brainstorming sessions.







                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial communities
                                                                            or attend workshops to learn from
                                                                            experienced entrepreneurs and gain insights
                                                                            into launching and managing a business.







                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Communication
                                                                                Skills: </strong> Engage in
                                                                            team-building exercises that promote
                                                                            effective communication and collaboration,
                                                                            strengthening your ability to work with
                                                                            others.







                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek out opportunities to learn
                                                                            new skills or adapt to changing
                                                                            circumstances to increase your relevance and
                                                                            flexibility in the workplace.







                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            As a <strong>Practical Innovator / Grounded
                                                                                Creative,</strong> your strengths lie in
                                                                            your ability to generate innovative ideas
                                                                            while grounding them in practical
                                                                            applications. By focusing on areas such as
                                                                            leadership, creativity, and collaboration,
                                                                            you can enhance your overall effectiveness
                                                                            and make a meaningful impact in your chosen
                                                                            fields. Your unique perspective and ability
                                                                            to integrate creativity with practicality
                                                                            position you as a valuable asset in driving
                                                                            positive change and fostering connections.
                                                                            Embrace your innovative nature while
                                                                            nurturing your practical skills, and
                                                                            continue to explore new horizons in your
                                                                            journey of growth and self-discovery.






                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php elseif ($compare_brain_profile_id == 9 ): ?>

                                                <div class="col-12 d-flex justify-content-strech px-0">

                                                    <p class="comparison-description pt-4">

                                                        Your brain is characterized by a unique combination of
                                                        analytical thinking and relational understanding. As an<strong>
                                                            Analytical Connector</strong> or<strong> Relational
                                                            Analyst,</strong> you possess the ability to dissect complex
                                                        information while maintaining a strong focus on interpersonal
                                                        relationships. Your strengths lie in your capacity to analyze
                                                        data, identify patterns, and connect with others on an emotional
                                                        level.






                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive in environments where logical reasoning and
                                                        relational dynamics intersect, allowing you to support others
                                                        effectively while addressing analytical challenges. Your
                                                        relational skills enable you to build strong connections,
                                                        fostering trust and collaboration among peers.




                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can lead
                                                                            effectively by using your innovative ideas
                                                                            to inspire others. Your practical approach
                                                                            helps you guide discussions toward
                                                                            actionable outcomes.



                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focus on developing
                                                                            your strategic leadership skills to enhance
                                                                            your ability to guide teams effectively
                                                                            while maintaining a compassionate approach.




                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity:
                                                                            Moderate





                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You may not
                                                                            gravitate toward traditional forms of
                                                                            creativity, but your analytical skills allow
                                                                            you to generate innovative solutions based
                                                                            on logical reasoning.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Cultivating creative
                                                                            thinking skills can enhance your ability to
                                                                            think outside the box and develop unique
                                                                            ideas in various contexts.








                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            High

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your analytical
                                                                            capabilities and relational skills make you
                                                                            well-suited for gig opportunities that
                                                                            require flexibility and adaptability.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Building your
                                                                            personal brand and networking skills can
                                                                            help you attract diverse gig opportunities
                                                                            that align with your strengths.








                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Moderate



                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You have the
                                                                            analytical skills to identify opportunities
                                                                            and develop solutions that address
                                                                            real-world problems, making you a potential
                                                                            entrepreneur.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Strengthening your
                                                                            business acumen and understanding market
                                                                            dynamics will enhance your entrepreneurial
                                                                            potential.









                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: High






                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel in
                                                                            collaborative environments, valuing teamwork
                                                                            and open communication. Your analytical
                                                                            nature helps you contribute meaningfully to
                                                                            group discussions.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Fostering a culture
                                                                            of collaboration and inclusivity will
                                                                            further enhance your effectiveness in team
                                                                            settings.









                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate




                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can adapt to
                                                                            changing circumstances, applying analytical
                                                                            insights to meet evolving needs. Your
                                                                            relational skills help you navigate social
                                                                            dynamics effectively.








                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Embracing continuous
                                                                            learning and staying informed about industry
                                                                            trends will enhance your agility in a
                                                                            rapidly changing environment.










                                                                        </li>




                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Emotional
                                                                                Intelligence: </strong> Develop your
                                                                            leadership skills by participating in
                                                                            workshops focused on emotional intelligence
                                                                            and relational dynamics to improve your
                                                                            ability to inspire and guide others.






                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Analytical
                                                                                Exploration: </strong> Engage in
                                                                            activities that encourage innovative
                                                                            thinking while leveraging your analytical
                                                                            skills, such as problem-solving competitions
                                                                            or design thinking workshops.








                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial communities
                                                                            or attend workshops to learn from
                                                                            experienced entrepreneurs and gain insights
                                                                            into launching and managing a business.








                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Communication
                                                                                Skills: </strong> Engage in
                                                                            team-building exercises and workshops that
                                                                            promote effective communication and
                                                                            collaboration, strengthening your ability to
                                                                            work with others.







                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek out opportunities to learn
                                                                            new skills or technologies that enhance your
                                                                            relevance and adaptability in your field.







                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            Your strengths lie in your ability to
                                                                            analyze complex information while connecting
                                                                            with others on an emotional level. By
                                                                            focusing on areas such as leadership,
                                                                            creativity, and collaboration, you can
                                                                            enhance your overall effectiveness and make
                                                                            a meaningful impact in your chosen fields.
                                                                            Your unique perspective and relational
                                                                            abilities position you as a valuable asset
                                                                            in driving positive change and fostering
                                                                            connections. Embrace your analytical nature
                                                                            while nurturing your relational skills, and
                                                                            continue to explore new horizons in your
                                                                            journey of growth and self-discovery.






                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <?php elseif ($compare_brain_profile_id == 8 ): ?>

                                                <div class="col-12 d-flex justify-content-strech px-0">

                                                    <p class="comparison-description pt-4">

                                                        Your brain is characterized by a harmonious blend of
                                                        practicality and relational insight. As a <strong>Practical
                                                            Empath</strong> or <strong>Grounded Relational
                                                            Thinker,</strong> you possess a deep understanding of human
                                                        emotions and interpersonal dynamics, coupled with a pragmatic
                                                        approach to problem-solving. Your strengths lie in your ability
                                                        to empathize with others while providing grounded solutions to
                                                        everyday challenges.







                                                    </p>

                                                </div>
                                                <div class="col-12 d-flex justify-content-strech px-0 mt-0">
                                                    <p class="comparison-description py-0">
                                                        You thrive in environments where emotional intelligence and
                                                        practical considerations intersect, allowing you to support
                                                        others effectively while also addressing real-world issues. Your
                                                        relational skills enable you to build strong connections,
                                                        fostering trust and collaboration among peers.




                                                    </p>
                                                </div>

                                                <div class="col-12">
                                                    <h5 class="description-title">Your Incidents for Future Growth</h5>

                                                </div>

                                                <div class="col-12 d-flex justify-content-center">
                                                    <img src="{{ asset('assets/images/thinking.png') }}"
                                                        class="thinking-img">
                                                </div>


                                                <div class="col-12">
                                                    <p class="comparison-description">
                                                        Understanding and evaluating key indices such as Leadership,
                                                        Creativity, GIG Potential, Entrepreneurship, Team Collaboration
                                                        Index, and 21st-Century Agility Index can provide valuable
                                                        insights into your personal and professional development.


                                                    </p>
                                                </div>
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item collapsible-div">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed collapsible"
                                                                type="button" data-bs-toggle="collapse"
                                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                                aria-controls="collapseTwo">
                                                                Let's Check Your Future Oppotunities
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body p-0">
                                                                <div
                                                                    class="d-flex flex-column p-0 p-lg-3 p-md-3 p-xl-3 justify-content-center">
                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">  Leadership:
                                                                            Moderate
                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You have the ability
                                                                            to lead by example, drawing on your
                                                                            empathetic nature to inspire and motivate
                                                                            others. Your grounded approach helps you
                                                                            remain calm and supportive in challenging
                                                                            situations.




                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Focus on developing
                                                                            your strategic leadership skills to enhance
                                                                            your ability to guide teams effectively
                                                                            while maintaining a compassionate approach.





                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   Creativity:
                                                                            Moderate





                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You may not
                                                                            gravitate toward traditional forms of
                                                                            creativity, but you excel in practical and
                                                                            innovative problem-solving that meets the
                                                                            needs of those around you.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Cultivating your
                                                                            creative thinking skills can enhance your
                                                                            ability to generate fresh ideas and
                                                                            solutions in various contexts.








                                                                        </li>



                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   GIG Potential:
                                                                            High

                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> Your ability to
                                                                            connect with others and understand your
                                                                            needs makes you well-suited for gig
                                                                            opportunities that require flexibility and
                                                                            adaptability.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Building your
                                                                            personal brand and networking skills can
                                                                            help you attract diverse gig opportunities
                                                                            that align with your strengths.









                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">   
                                                                            Entrepreneurship: Moderate



                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You have the
                                                                            practical skills to identify opportunities
                                                                            and develop solutions that address
                                                                            real-world problems, making you a potential
                                                                            entrepreneur.






                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Strengthening your
                                                                            business acumen and understanding market
                                                                            dynamics will enhance your entrepreneurial
                                                                            potential.










                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    Team
                                                                            Collaboration Index: High






                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You excel in
                                                                            collaborative environments, valuing teamwork
                                                                            and open communication. Your empathetic
                                                                            nature helps you build strong relationships
                                                                            within teams.







                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Fostering a culture
                                                                            of collaboration and inclusivity will
                                                                            further enhance your effectiveness in team
                                                                            settings.










                                                                        </li>


                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">    21st-Century
                                                                            Agility Index: Moderate




                                                                        </h5>

                                                                        <li class="explaining"><strong>Current
                                                                                Strengths:</strong> You can adapt to
                                                                            changing circumstances, applying analytical
                                                                            insights to meet evolving needs. Your
                                                                            relational skills help you navigate social
                                                                            dynamics effectively.








                                                                        </li>
                                                                        <li class="explaining"><strong>Growth
                                                                                Potential:</strong> Embracing continuous
                                                                            learning and staying informed about industry
                                                                            trends will enhance your agility in a
                                                                            rapidly changing environment.


                                                                        </li>

                                                                    </div>

                                                                    <div class="col-12">
                                                                        <h5 class="explaining-title">Advanced Strategies
                                                                            for Growth & Development:

                                                                        </h5>

                                                                        <li class="explaining"><strong>Enhancing
                                                                                Leadership through Empathy: </strong>
                                                                            Develop your leadership skills by
                                                                            participating in workshops focused on
                                                                            emotional intelligence and relational
                                                                            dynamics to improve your ability to inspire
                                                                            and guide others.


                                                                        </li>

                                                                        <li class="explaining"><strong>Cultivating
                                                                                Creativity through Practical
                                                                                Exploration: </strong> Engage in
                                                                            activities that encourage innovative
                                                                            thinking, such as design challenges or
                                                                            collaborative brainstorming sessions, to
                                                                            enhance your creative problem-solving
                                                                            skills.


                                                                        </li>
                                                                        <li class="explaining"><strong>Building
                                                                                Entrepreneurial Skills via Networking:
                                                                            </strong> Join entrepreneurial communities
                                                                            or attend workshops to learn from
                                                                            experienced entrepreneurs and gain insights
                                                                            into launching and managing a business.


                                                                        </li>

                                                                        <li class="explaining"><strong>Improving Team
                                                                                Collaboration through Communication
                                                                                Skills: </strong> Participate in
                                                                            team-building exercises that promote
                                                                            effective communication and collaboration to
                                                                            strengthen your ability to work with others.


                                                                        </li>

                                                                        <li class="explaining"><strong>Fostering Agility
                                                                                through Continuous Learning: </strong>
                                                                            Regularly seek out opportunities to learn
                                                                            new skills or technologies that enhance your
                                                                            relevance and adaptability in your field.


                                                                        </li>

                                                                        <h5 class="explaining-title">Conclusion:
                                                                            Unlocking Your Full Potential


                                                                        </h5>

                                                                        <p class="explaining">
                                                                            As a <strong>Practical Empath / Grounded
                                                                                Relational Thinker,</strong> your
                                                                            strengths lie in your ability to empathize
                                                                            with others while providing practical
                                                                            solutions to everyday challenges. By
                                                                            focusing on areas such as leadership,
                                                                            creativity, and collaboration, you can
                                                                            enhance your overall effectiveness and make
                                                                            a meaningful impact in your chosen fields.
                                                                            Your unique perspective and relational
                                                                            abilities position you as a valuable asset
                                                                            in driving positive change and fostering
                                                                            connections. Embrace your empathetic nature
                                                                            while nurturing your practical skills, and
                                                                            continue to explore new horizons in your
                                                                            journey of growth and self-discovery.







                                                                        </p>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php endif; ?>



                                            </div>
                                        </div>
                                    </div>