@include('layouts.dashboard-header')
<div class="dashboard-page-content">
    <div class="p-3 w-100 pb-5 pb-lg-0">
        <h3 class="section-title text-purple">Our Pricing Packages</h3>
        <p class="section-description mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla
            molestie arcu eu finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus
            mus. Fusce aliquam rutrum tortor non vehicula. Etiam tristique est nulla, id tincidunt nisi ullamcorper et.
            Aliquam efficitur vulputate nunc vel finibus.</p>

        <div class="row px-2 px-lg-5 py-5 gx-5 hideOnMobile">

            <div class="col-md-4">
                <div class=" pricing-card ">
                    <h1 class="title text-center text-purple">Free Package</h1>
                    <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        fringilla molestie</p>
                    <h1 class="price text-center text-purple">$0.00</h1>
                    <ul class="fa-ul features mt-4 height-control">
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                    </ul>
                    <div class="text-center">
                        <!--<a href="{{url('buy-package/free')}}"><button class="mt-5">-->
                        <!--        Select Plan-->
                        <!--    </button></a>-->
                        <a href=""><button class="mt-5">
                                Select Plan
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class=" pricing-card ">
                    <h1 class="title text-center text-purple">One Time Plan</h1>
                    <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        fringilla molestie</p>
                    <h1 class="price text-center text-purple">$50.00</h1>
                    <ul class="fa-ul features mt-4 height-control">
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                    </ul>
                    <div class="text-center">
                        <!--<a href="{{url('buy-package/one-time')}}"><button class="mt-5">-->
                        <!--        Select Plan-->
                        <!--    </button></a>-->
                        <a href=""><button class="mt-5">
                                Select Plan
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class=" pricing-card ">
                    <h1 class="title text-center text-purple">Annual Plan</h1>
                    <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque
                        fringilla molestie</p>
                    <h1 class="price text-center text-purple">$200.00</h1>
                    <ul class="fa-ul features mt-4 height-control">
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                        <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. </li>
                    </ul>
                    <div class="text-center">
                        <!--<a href="{{url('buy-package/annual')}}"><button class="mt-5">-->
                        <!--        Select Plan-->
                        <!--    </button></a>-->
                        <a href=""><button class="mt-5">
                                Select Plan
                            </button></a>
                    </div>
                </div>
            </div>


        </div>

        <div class="displayOnMobile">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner my-5">
                    <div class="carousel-item active">
                        <div class=" pricing-card ">
                            <h1 class="title text-center text-purple">Free Package</h1>
                            <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque
                                fringilla molestie</p>
                            <h1 class="price text-center text-purple">$0.00</h1>
                            <ul class="fa-ul features mt-4">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                            </ul>
                            <div class="text-center">
                                <!--<a href="{{url('buy-package/free')}}"><button class="mt-5">-->
                                <!--        Select Plan-->
                                <!--    </button></a>-->
                                <a href=""><button class="mt-5">
                                        Select Plan
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class=" pricing-card ">
                            <h1 class="title text-center text-purple">One Time Plan</h1>
                            <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque
                                fringilla molestie</p>
                            <h1 class="price text-center text-purple">$50.00</h1>
                            <ul class="fa-ul features mt-4">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                            </ul>
                            <div class="text-center">
                                <!--<a href="{{url('buy-package/one-time')}}"><button class="mt-5">-->
                                <!--        Select Plan-->
                                <!--    </button></a>-->
                                <a href=""><button class="mt-5">
                                        Select Plan
                                    </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class=" pricing-card ">
                            <h1 class="title text-center text-purple">Annual Plan</h1>
                            <p class="text text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Quisque
                                fringilla molestie</p>
                            <h1 class="price text-center text-purple">$200.00</h1>
                            <ul class="fa-ul features mt-4">
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                                <li><span class="fa-li"><i class="fa-solid fa-check"></i></span>Lorem ipsum dolor sit
                                    amet,
                                    consectetur adipiscing elit. </li>
                            </ul>
                            <div class="text-center">
                                <!--<a href="{{url('buy-package/annual')}}"><button class="mt-5">-->
                                <!--        Select Plan-->
                                <!--    </button></a>-->
                                <a href=""><button class="mt-5">
                                        Select Plan
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="d-flex py-5 flex-column">
                <h3 class="section-title text-purple">One time access code</h3>
                <p class="section-description">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque laboriosam repellat corrupti,
                    quisquam mollitia pariatur nemo delectus impedit earum voluptates?
                </p>
                <h3 class="mt-2 text-purple" style="font-size: 14px !important;">Enter your access code</h3>
                <input type="text" class="pricingInput" id="exampleFormControlInput1" placeholder="Type here"
                    name="code">
                <button class="yellow-btn mt-3 mt-lg-4 mb-5 px-4 px-lg-5">Get access</button>
            </div>

        </div>
    </div>
</div>
@include('layouts.dashboard-footer')