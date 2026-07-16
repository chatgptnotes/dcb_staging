@include('layouts.header')



<section class="container section-margin-top section-margin-bottom">
    <h3 class="section-title text-purple text-left">Our Marketplace</h3>

    <div class="d-flex justify-content-center mt-5">
    <div class="input-group search w-50">
        <input type="text" class="form-control" placeholder="Search"
            style="background: transparent; font-color: #5A559D; border-radius: 30px">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" style="border-radius: 30px; color: #5A559D;" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>



                        <div class="d-flex flex-row justify-content-between mt-5">
            <h3 class="section-title2 text-purple mt-3"></h3>
            <div class="d-flex flex-row align-items-center">
                <button class="filter-btn-yellow me-2">Filter by all</button>
                <i class="fas fa-filter"></i>
            </div>
        </div>


    <div  class="row mt-5">
       
                <div class="col-md-4">
                    <div class="our-events-container">
                        <img src="{{ asset('assets/images/3.2.1-hero-event-ideas-kids.PNG') }}" class="w-100"  >
                        <div class="text-content">
                            <h1 class="text-yellow">Marketplace Name</h1>
                            <p class="description text-white">Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="row mt-4 ">
                                <div class="col-6">
                                    <p class="meta text-white text-start">20th July 2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="meta text-white text-end">08.00 am - 12.00 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-events-container">
                        <img src="{{ asset('assets/images/left-right-brain-tests-kids-800x800.PNG') }}" class="w-100"  >
                        <div class="text-content">
                            <h1 class="text-yellow">Marketplace Name</h1>
                            <p class="description text-white">Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="row mt-4 ">
                                <div class="col-6">
                                    <p class="meta text-white text-start">20th July 2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="meta text-white text-end">08.00 am - 12.00 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-events-container">
                        <img src="{{ asset('assets/images/Visual-learners.PNG') }}" class="w-100"  >
                        <div class="text-content">
                            <h1 class="text-yellow">Marketplace Name</h1>
                            <p class="description text-white">Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="row mt-4 ">
                                <div class="col-6">
                                    <p class="meta text-white text-start">20th July 2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="meta text-white text-end">08.00 am - 12.00 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
     
                </div>
    </div>

    <div  class="row mt-5">
       
                <div class="col-md-4">
                    <div class="our-events-container">
                        <img src="{{ asset('assets/images/left-right-brain-tests-kids-800x800.PNG') }}" class="w-100"  >
                        <div class="text-content">
                            <h1 class="text-yellow">Marketplace Name</h1>
                            <p class="description text-white">Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="row mt-4 ">
                                <div class="col-6">
                                    <p class="meta text-white text-start">20th July 2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="meta text-white text-end">08.00 am - 12.00 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our-events-container">
                        <img src="{{ asset('assets/images/3.2.1-hero-event-ideas-kids.PNG') }}" class="w-100"  >
                        <div class="text-content">
                            <h1 class="text-yellow">Marketplace Name</h1>
                            <p class="description text-white">Lorem ipsum dolor sit amet, consectetur </p>
                            <div class="row mt-4 ">
                                <div class="col-6">
                                    <p class="meta text-white text-start">20th July 2023</p>
                                </div>
                                <div class="col-6">
                                    <p class="meta text-white text-end">08.00 am - 12.00 am</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
    </div>
 
</section>





















@include('layouts.footer')

