@include('layouts.header')

<style>
    /* ---- page-scoped styles for new_landing ---- */
    .nl-hero {
        padding: 70px 0 40px;
    }
    .nl-hero h1 {
        font-size: 34px;
        font-weight: 700;
        color: #2b2b2b;
        line-height: 1.25;
    }
    .nl-hero p {
        font-size: 15px;
        color: #555;
        line-height: 1.7;
    }
    .nl-section-narrow {
        max-width: 760px;
        margin: 0 auto;
        text-align: center;
    }
    .nl-muted {
        color: #555;
        font-size: 15px;
        line-height: 1.7;
    }
    .nl-emphasis {
        font-style: italic;
        color: #5a559d;
        font-weight: 600;
    }
    .yellow-btn {
        background: #FFCC66;
        border: none;
        color: #2b2b2b;
        font-weight: 600;
        padding: 10px 30px;
        border-radius: 25px;
        transition: all .2s ease;
    }
    .yellow-btn:hover {
        background: #f6c94c;
    }
    .nl-feature-row {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 14px;
    }
    .nl-feature-row img {
        width: 22px;
        height: 22px;
        margin-top: 3px;
        flex: 0 0 auto;
    }
    .nl-feature-row span {
        font-size: 15px;
        color: #444;
    }
    .nl-list-label {
        font-weight: 700;
        color: #5a559d;
        margin: 22px 0 12px;
    }
    /* pricing card */
    .nl-price-card {
        background: #fff;
        border: 1px solid #eee;
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(90, 85, 157, 0.12);
        padding: 30px 26px;
        text-align: center;
    }
    .nl-price-card .nl-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #5a559d;
    }
    .nl-price-card .nl-card-sub {
        font-size: 13px;
        color: #777;
        font-style: italic;
        margin: 10px 0 18px;
    }
    .nl-offer-badge {
        display: inline-block;
        background: #fff3d1;
        color: #c9961a;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 14px;
        border-radius: 20px;
        margin-bottom: 14px;
    }
    .nl-price-old {
        color: #e74c3c;
        text-decoration: line-through;
        font-size: 20px;
        margin-right: 8px;
    }
    .nl-price-new {
        color: #2b2b2b;
        font-size: 38px;
        font-weight: 800;
    }
    .nl-price-note {
        font-size: 13px;
        color: #777;
        margin: 6px 0 18px;
    }
    .nl-secure {
        font-size: 12px;
        color: #888;
        margin-top: 14px;
    }
    .nl-pay-icons img {
        height: 22px;
        margin: 0 3px;
        vertical-align: middle;
    }
    /* dark band */
    .nl-dark-band {
        background: #5a559d;
        color: #fff;
        padding: 70px 0;
    }
    .nl-dark-band h2 {
        color: #FFCC66;
    }
    .nl-dark-band p {
        color: #f0f0f0;
        font-size: 15px;
        line-height: 1.8;
    }
    .nl-dark-band a {
        color: #FFCC66;
    }
    /* testimonial */
    .nl-testimonial {
        background: #f7f6fb;
        border-left: 4px solid #FFCC66;
        border-radius: 12px;
        padding: 28px 30px;
    }
    .nl-testimonial .nl-quote {
        font-style: italic;
        color: #444;
        font-size: 15px;
        line-height: 1.8;
    }
    .nl-testimonial .nl-author {
        font-weight: 700;
        color: #5a559d;
        margin-top: 16px;
    }
    .nl-testimonial .nl-role {
        font-size: 13px;
        color: #777;
    }
    /* founder */
    .nl-founder {
        background: #f7f6fb;
        padding: 60px 0;
    }
    .nl-founder p {
        color: #555;
        font-size: 15px;
        line-height: 1.8;
    }
    .nl-featured img {
        height: 38px;
        margin: 12px 18px;
        filter: grayscale(100%);
        opacity: .8;
    }
    /* faq */
    .nl-faq .accordion-button {
        font-weight: 600;
        color: #5a559d;
    }
    .nl-faq .accordion-button:not(.collapsed) {
        background: #f7f6fb;
        color: #5a559d;
        box-shadow: none;
    }
    .nl-faq .accordion-button:focus {
        box-shadow: none;
    }
    /* office */
    .nl-office {
        background: #fafafa;
        padding: 40px 0;
        font-size: 14px;
        color: #555;
    }
    .section-title {
        font-size: 28px;
        font-weight: 700;
    }
</style>

<!-- ============ HERO ============ -->
<section class="container nl-hero">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h1>Don't Know Your Hidden Superpowers?<br>Finally, it is Time to Find Out.</h1>
            <p class="mt-4">
                The only assessment designed to measure brain's preferences developed by
                Dr Sweta Adatia, founder of the limitless brain lab - giving clear actionable
                insights on your brain's choices and what to develop for lasting success in all
                arenas of life.
            </p>
            <p>
                The Super powers are revealed from the work <em>Future Ready Now Life</em>, the best
                selling book globally by the author and Neurologist Dr Sweta Adatia.
            </p>
            <a href="#nl-whatis" class="yellow-btn d-inline-block mt-3" style="text-decoration:none;">Know More</a>
        </div>
        <div class="col-md-5 text-center mt-4 mt-md-0">
            <img src="https://static.wixstatic.com/media/2e455c_fabeca11e23841c8a98a6d250ae00c52~mv2.webp/v1/fill/w_442,h_444,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/main-art-03.webp"
                 alt="Brain illustration" class="img-fluid" style="max-width: 360px;">
        </div>
    </div>
</section>

<!-- ============ WHAT IS ============ -->
<section id="nl-whatis" class="container section-margin-top section-margin-bottom">
    <div class="nl-section-narrow">
        <h2 class="section-title text-purple mb-4">What is DecodeMyBrain&trade;?</h2>
        <p class="nl-muted">
            DecodeMyBrain&trade; is a ground breaking digital assessment with 60 carefully designed
            questions, the assessment takes into account key factors affecting your life situation.
            It has nothing to do with your mood or personality. It helps you understand how your brain
            is wired, how it drives your life choices, and how to consciously redesign your outcomes —
            in career, work, health, relationships, performance, and purpose.
        </p>
        <p class="nl-emphasis mt-3">This is not a personality test. This is brain decoding for life alignment.</p>
        <a href="#nl-plans" class="yellow-btn d-inline-block mt-3" style="text-decoration:none;">Start Your Test</a>
    </div>
</section>

<!-- ============ WHO IS IT FOR ============ -->
<section class="container section-margin-bottom">
    <div class="nl-section-narrow">
        <h2 class="section-title text-purple mb-4">Who is it For?</h2>
        <p class="nl-muted">
            DecodeMyBrain&trade; is for the students 12 to 18 years deciding their path and for all the
            adults who have been failing to understand why things don't work in their favor despite years
            of hard work. The assessment mirrors how the brain behaves under real-life pressure — not
            theoretical models.
        </p>
        <p class="nl-muted mt-3">
            Using applied neuroscience, behavioural science, and whole-brain frameworks, DecodeMyBrain&trade;
            translates your inner wiring into clear, actionable insights — helping you move from unconscious
            patterns to conscious brain design.
        </p>
        <div class="mt-4">
            <a href="#nl-adult" class="yellow-btn d-inline-block me-2 mb-2" style="text-decoration:none;">For Adults</a>
            <a href="#nl-plans" class="yellow-btn d-inline-block mb-2" style="text-decoration:none;">For Students</a>
        </div>
    </div>
</section>

<!-- ============ FOR STUDENTS ============ -->
<section id="nl-plans" class="container section-margin-top section-margin-bottom">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h2 class="section-title text-purple mb-3">DecodeMyBrain&trade; for Students</h2>
            <p class="nl-muted">
                DecodeMyBrain&trade; for Students is a neuroscience-based brain understanding and
                life-skills assessment.
            </p>

            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp" alt="">
                <span>It helps students how their brain learns, focuses, manages emotions and builds confidence.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_8f88400b11d94f98b94dd41b3b865ed6~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-5.webp" alt="">
                <span>They can study smarter, feel calmer and grow with clarity.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_d389924e0e784fa8b7b0af5ea498b278~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-4.webp" alt="">
                <span>Choice of subjects, curriculum and career pathway now become a child's play.</span>
            </div>

            <p class="nl-list-label">What you will get:</p>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp" alt="">
                <span>Personalized one-to-one coaching with an expert coach.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_8f88400b11d94f98b94dd41b3b865ed6~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-5.webp" alt="">
                <span>Community coaching call with Dr. Sweta Adatia.</span>
            </div>
        </div>

        <div class="col-md-5 mt-4 mt-md-0">
            <div class="nl-price-card">
                <div class="nl-card-title">DecodeMyBrain&trade; Student</div>
                <div class="nl-card-sub">This is not an exam. This is brain awareness for lifelong success.</div>
                <span class="nl-offer-badge">Limited Time Offer!</span>
                <?php $student = $packages['decodemybrain-deep-dive'] ?? null; ?>
                <div>
                    @if($student && $student->old_price_label)
                        <span class="nl-price-old">{{ $student->old_price_label }}</span>
                    @endif
                    <span class="nl-price-new">{{ $student->price_label ?? '$199' }}</span>
                </div>
                <div class="nl-price-note">Global Online Consultation.</div>
                <a href="#nlRegister"
                   class="yellow-btn d-inline-block w-100 nl-book"
                   data-bs-toggle="modal"
                   data-bs-target="#nlRegister"
                   data-package="decodemybrain-deep-dive"
                   style="text-decoration:none;">Book Today</a>
                <div class="nl-secure">
                    <img src="https://static.wixstatic.com/media/2e455c_e36b16771f6c4d8da34948814707844e~mv2.png/v1/fill/w_16,h_16,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_e36b16771f6c4d8da34948814707844e~mv2.png" alt="" style="height:14px;"> Secure Checkout
                </div>
                <div class="nl-pay-icons mt-2">
                    <img src="https://static.wixstatic.com/media/2e455c_5c31206aaeab4cbe9365dd28dd1d884f~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_5c31206aaeab4cbe9365dd28dd1d884f~mv2.png" alt="Visa">
                    <img src="https://static.wixstatic.com/media/2e455c_9294e895086f419a8119189719adff5b~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_9294e895086f419a8119189719adff5b~mv2.png" alt="Amex">
                    <img src="https://static.wixstatic.com/media/2e455c_5f48c07e33e445289fb548669635d1cc~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_5f48c07e33e445289fb548669635d1cc~mv2.png" alt="Stripe">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ FOR ADULTS ============ -->
<section id="nl-adult" class="container section-margin-top section-margin-bottom">
    <div class="row align-items-center">
        <div class="col-md-7">
            <h2 class="section-title text-purple mb-3">DecodeMyBrain&trade; for Adults</h2>
            <p class="nl-muted">DecodeMyBrain&trade; for Adults is designed for individuals who:</p>

            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp" alt="">
                <span>Feel stuck or plateaued despite consistent effort.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_8f88400b11d94f98b94dd41b3b865ed6~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-5.webp" alt="">
                <span>Feel a mismatch between potential and actual life direction.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_d389924e0e784fa8b7b0af5ea498b278~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-4.webp" alt="">
                <span>Want to align brain, mind, emotions, and decision-making.</span>
            </div>

            <p class="nl-list-label">What you will get:</p>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_2eff49fdd7f64ecf968cc78e87045fd3~mv2.webp" alt="">
                <span>Personalized one-to-one coaching with an expert coach.</span>
            </div>
            <div class="nl-feature-row">
                <img src="https://static.wixstatic.com/media/2e455c_8f88400b11d94f98b94dd41b3b865ed6~mv2.webp/v1/fill/w_25,h_25,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/icon-document-5.webp" alt="">
                <span>Community coaching call with Dr. Sweta Adatia.</span>
            </div>
        </div>

        <div class="col-md-5 mt-4 mt-md-0">
            <div class="nl-price-card">
                <div class="nl-card-title">DecodeMyBrain&trade; Adult</div>
                <div class="nl-card-sub">This is not an exam. This is brain awareness for lifelong success.</div>
                <span class="nl-offer-badge">Limited Time Offer!</span>
                <?php $adult = $packages['decodemybrain-guided-friend-and-family-connect'] ?? null; ?>
                <div>
                    @if($adult && $adult->old_price_label)
                        <span class="nl-price-old">{{ $adult->old_price_label }}</span>
                    @endif
                    <span class="nl-price-new">{{ $adult->price_label ?? '$249' }}</span>
                </div>
                <div class="nl-price-note">Global Online Consultation.</div>
                <a href="#nlRegister"
                   class="yellow-btn d-inline-block w-100 nl-book"
                   data-bs-toggle="modal"
                   data-bs-target="#nlRegister"
                   data-package="decodemybrain-guided-friend-and-family-connect"
                   style="text-decoration:none;">Book Today</a>
                <div class="nl-secure">
                    <img src="https://static.wixstatic.com/media/2e455c_e36b16771f6c4d8da34948814707844e~mv2.png/v1/fill/w_16,h_16,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_e36b16771f6c4d8da34948814707844e~mv2.png" alt="" style="height:14px;"> Secure Checkout
                </div>
                <div class="nl-pay-icons mt-2">
                    <img src="https://static.wixstatic.com/media/2e455c_5c31206aaeab4cbe9365dd28dd1d884f~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_5c31206aaeab4cbe9365dd28dd1d884f~mv2.png" alt="Visa">
                    <img src="https://static.wixstatic.com/media/2e455c_9294e895086f419a8119189719adff5b~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_9294e895086f419a8119189719adff5b~mv2.png" alt="Amex">
                    <img src="https://static.wixstatic.com/media/2e455c_5f48c07e33e445289fb548669635d1cc~mv2.png/v1/fill/w_30,h_30,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_5f48c07e33e445289fb548669635d1cc~mv2.png" alt="Stripe">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ WHAT COMES AFTER ============ -->
<section class="nl-dark-band">
    <div class="container">
        <div class="nl-section-narrow">
            <h2 class="section-title mb-4">What Comes After The Test?</h2>
            <p>
                You have finished the assessment and within 24 to 48 hours, you receive your results.
                What is next? The report can be self decoded with the help of the digital guide provided
                with the videos and a course. This will be an affordable option. The second option is you
                connect with our coaches who shall help you to guide about the assessment. The only life
                condition when you avoid appearing for the assessment is divorce, a heavy financial loss
                or in inebriated states.
            </p>
            <p class="mt-3">
                Refer to the flow and grow manual with whole brain understanding to apply each of the steps
                in your life towards whole brain transformation. Most importantly, you are not alone in this.
                If anything is unclear or you have questions, write to us at
                <a href="mailto:hello@decodemybrain.com">hello@decodemybrain.com</a>. We are always here to help.
            </p>
        </div>
    </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="container section-margin-top section-margin-bottom">
    <h2 class="section-title text-purple text-center mb-5">Discover The Stories of Those Who Have Trusted Us</h2>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="nl-testimonial">
                <p class="nl-quote">
                    <i class="fa-solid fa-quote-left"></i>
                    DecodeMyBrain&reg; helped Neeraj, my son, understand his strengths and broaden his
                    perspectives on the options available to him. The assessment provided in-depth insights
                    into his abilities and opportunities, enabling him to discover his passion for and
                    compatibility with data science and economics. The approach was easy yet methodical,
                    considering multiple factors such as cultural environment, course options, and the future
                    job market. With over 800 careers to explore, making informed choices in the 21st century
                    becomes a child's play with Mylimitlessbrain.
                    <i class="fa-solid fa-quote-right"></i>
                </p>
                <div class="nl-author">Cherag Shah</div>
                <div class="nl-role">Head of Company Control Unit, Ericsson, Dubai, Middle East</div>
            </div>
        </div>
    </div>
</section>

<!-- ============ MEET THE FOUNDER ============ -->
<section class="nl-founder">
    <div class="container">
        <h2 class="section-title text-purple text-center mb-5">Meet The Founder</h2>
        <div class="row align-items-center">
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="https://static.wixstatic.com/media/2e455c_1f9e6b32b2a743a9b5889114d5d8dd8e~mv2.png/v1/fill/w_409,h_600,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/2e455c_6f99af5823e24b5388bfebc681daf873~mv2.png"
                     alt="Dr Sweta Adatia" class="img-fluid" style="max-width: 320px; border-radius: 12px;">
            </div>
            <div class="col-md-7">
                <p class="nl-emphasis">
                    Your Brain's Blueprint decides your Life's Footprint.
                </p>
                <p>
                    Unfolding the brain's magic &amp; helping people understand the limitless power of the
                    brain to live a life filled with purpose &amp; meaning is the ultimate passion for my life.
                </p>
                <p>
                    Dr Sweta Adatia is a celebrity Neurologist and a scientist with over 1 billion impressions
                    on social media and over 25 million views. She is the founder of innovations such as
                    Decodemybrain, Neurosense, Neuroverse and more.
                </p>
                <p>
                    Learn more about her -
                    <a href="http://www.drswetaadatia.com/" target="_blank" rel="noopener">www.drswetaadatia.com</a>
                </p>
                <p class="mb-0"><strong>Dr Sweta Adatia, MBBS, MD</strong></p>
                <p>DNB(Neurology), FACP(USA), MBA(Cambridge, UK)</p>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted" style="letter-spacing:2px; font-size:13px;">AS FEATURED ON</p>
            <div class="nl-featured d-flex flex-wrap justify-content-center align-items-center">
                <img src="https://static.wixstatic.com/media/2e455c_2381e9f048d14c5a9651215e792970f0~mv2.webp/v1/fill/w_80,h_52,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/1.webp" alt="">
                <img src="https://static.wixstatic.com/media/2e455c_7cd6c5d0803d4251bf212df261fd849f~mv2.webp/v1/fill/w_121,h_38,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/5_e92e2056-cd87-4cd5-a572-e69573640c02.webp" alt="">
                <img src="https://static.wixstatic.com/media/2e455c_bf0fce9a94674b4e957a5f2f911eeabc~mv2.webp/v1/fill/w_64,h_38,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/2.webp" alt="">
                <img src="https://static.wixstatic.com/media/2e455c_b92893806f33499c80c48d543d1567d1~mv2.webp/v1/fill/w_104,h_38,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/4_4e1a9c48-245e-4590-b92c-837eeb9b09a8.webp" alt="">
                <img src="https://static.wixstatic.com/media/2e455c_57d334944bf74d8c83387b6e3af49cfd~mv2.webp/v1/fill/w_115,h_59,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/3.webp" alt="">
            </div>
        </div>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="container section-margin-top section-margin-bottom nl-faq">
    <h2 class="section-title text-purple text-center mb-5">Questions You May Have</h2>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="accordion" id="nlFaq">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            How accurate is Decodemybrain?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            Our assessment covers a wide range of key factors that influence your life situation,
                            making the results highly precise. Keep in mind that the final accuracy always depends
                            on how honest your answers are.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            Do I need any special preparation before taking the test?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            No special preparation is needed. Just find a quiet, private place where you can focus
                            without interruptions. Answer honestly and carefully—the more accurate your responses,
                            the more precise your result will be. It's best to take the test when you're feeling
                            neutral and well-rested.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            How do I develop whole brain capacities?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            You can refer to our course on the same. You can also take our coaching for the whole
                            brain transformation. This applies to our students and adults. For students do not
                            forget to check out our special program t1brain.com where it is the first and only
                            teen focused global accelerator.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            How do I receive my results?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            Your results will be emailed to you within 24 to 48 hours after completing the
                            assessment. You'll receive a detailed PDF report with an in-depth analysis of different
                            areas of your life and personalized recommendations. The report is designed to be
                            user-friendly and very easy to understand. In most cases, the report is sent within 8 hours.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                            What happens to my test data?
                        </button>
                    </h2>
                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            All data is securely stored and used only to generate your personal report. You are
                            always in control of your information, and you can contact us at any time to request
                            its deletion.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                            Can I share my results with others?
                        </button>
                    </h2>
                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            Your results are completely private and confidential. You have full control over your
                            report. Many users choose to share their results with friends, family, or trusted people,
                            while others prefer to keep them to themselves.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                            Is the assessment available only in English?
                        </button>
                    </h2>
                    <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#nlFaq">
                        <div class="accordion-body nl-muted">
                            Currently, the assessment available in English. We're working on translations for
                            Spanish, French, German, and other major languages. If you need the assessment in a
                            specific language, please contact our support team to express your interest and we may
                            be able to translate it for you. No promises but we will try.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ OFFICE / PARTNER ============ -->
<section class="nl-office">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-purple">Our Consultation Partner in UAE</h5>
                <p class="mt-3"><strong>IDP UAE</strong></p>
                <p class="mb-1"><strong>Office location:</strong><br>
                    7th floor, The One Tower, Sheikh Zayed Road, Tecom, Dubai Internet City Metro Station</p>
                <p class="mb-1"><strong>Phone:</strong> <a href="tel:97143446814" style="color:#5a559d;">+971 4 344 6814</a></p>
                <a href="https://www.google.com/maps/dir/?api=1&destination=The%20One%20Tower%20-%2028th%20Floor%20Sheikh%20Zayed%20Rd%20-%20Al%20Thanyah%20First%20-%20Barsha%20Heights%20-%20Dubai%20-%20United%20Arab%20Emirates"
                   target="_blank" rel="noopener" class="yellow-btn d-inline-block mt-2" style="text-decoration:none;">Directions</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ REGISTRATION MODAL (logged-out plan selection) ============ -->
<div class="modal fade" id="nlRegister" tabindex="-1" aria-labelledby="nlRegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" style="border-radius:18px;">
            <div class="modal-header border-0">
                <h5 class="modal-title text-purple" id="nlRegisterLabel" style="font-weight:700;">Create your account to continue</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <p class="nl-muted mb-3">You're one step away. Register to continue to secure checkout for your selected plan.</p>

                @if(Session::has('fail'))
                    <p style="color:red;font-size:14px;">{{ Session::get('fail') }}</p>
                @endif

                <form action="/sign-up" method="post" id="nlRegisterForm">
                    @csrf
                    <input type="hidden" name="intended_package" id="nl-intended-package" value="{{ old('intended_package') }}">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">First name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="First name" required style="border-radius:10px;">
                            @error('first_name')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">Last name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Last name" required style="border-radius:10px;">
                            @error('last_name')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">User name</label>
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="User name" required style="border-radius:10px;">
                            @error('user_name')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required style="border-radius:10px;">
                            @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">Date of birth</label>
                            <input type="date" class="form-control" name="dob" value="{{ old('dob') }}" required style="border-radius:10px;">
                            @error('dob')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required style="border-radius:10px;">
                            @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" style="font-weight:600;">Confirm password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required style="border-radius:10px;">
                        </div>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="nl-terms" required>
                        <label class="form-check-label" for="nl-terms" style="font-weight:600;">
                            I agree to the <a href="{{ url('terms-and-conditions') }}" style="color:#5a559d;">Terms &amp; Conditions</a>
                        </label>
                    </div>

                    <button type="submit" class="yellow-btn w-100" style="border:none;">Register &amp; Continue to Payment</button>

                    <p class="text-center mt-3 mb-0" style="font-weight:600;">
                        Already have an account? <a href="/sign-in" id="nl-sign-in-link" style="color:#5a559d;">Sign In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Carry the chosen plan into the registration modal's hidden field.
    var hidden = document.getElementById('nl-intended-package');
    var signInLink = document.getElementById('nl-sign-in-link');
    document.querySelectorAll('.nl-book').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var selectedPackage = btn.getAttribute('data-package') || '';
            if (hidden) hidden.value = selectedPackage;
            if (signInLink && selectedPackage) {
                signInLink.href = "/sign-in?intended_package=" + encodeURIComponent(selectedPackage);
            }
        });
    });

    // Re-open the modal if registration bounced back with validation errors.
    @if($errors->any() || Session::has('fail'))
    var modalEl = document.getElementById('nlRegister');
    if (modalEl && window.bootstrap) {
        new bootstrap.Modal(modalEl).show();
    }
    @endif
});
</script>
