@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            consultation booking
        </h3>


        <div class="d-flex flex-column flex-lg-row">
            <div class="col-12 col-lg-8 pe-3">
                <h3 class="section-title2 text-purple">
                    Select your consultant
                </h3>
                <div class="d-flex  justify-content-between w-100 mt-3">
                    
                    <div class="d-flex flex-row justify-content-between w-100">
                        <h3 class="section-title2 text-purple mt-lg-3">
                            Business consultant
                        </h3>
                        <div class="d-flex flex-row align-items-center">
                            <button class="filter-btn-yellow me-2">Filter by business</button>
                            <i class="fas fa-filter"></i>
                        </div>
                    </div>
                </div>
                <div class="d-flex row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                    <div class="col p-2 d-flex flex-column text-center justify-content-center">
                        <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000">
                        <p class="section-description-intentship mt-1 mb-0">
                            Name
                        </p>
                        <p class="section-description-intentship mt-1">
                            This a description
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 ps-5">
                <h3 class="section-title2 text-purple mt-5">Book your consultant
                </h3>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Career consultant
                </p>
                <img src="{{ asset('assets/images/zebra2.PNG') }}" class="w-100" style="border-radius: 100%; border: solid 1px #000; width: 180px !important; height: auto !important;">
                <p class="section-description-intentship mt-1 pe-lg-5 py-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sed laborum ea, illo soluta molestias voluptas nesciunt pariatur quia assumenda.
                </p>
                <p class="section-description-intentship mt-1 pe-lg-5 pt-3" style="color: #ccc; font-weight: 400">
                    Available time & date
                </p>
                <div class="d-flex flex-row w-100">
                    <div class="col-6">
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="date" placeholder="Date">
                    </div>
                    <div class="col-6">
                        <input type="date" class="form-control" id="exampleFormControlInput1" name="Time">
                    </div>
                </div>
                <button class="yellow-btn mt-4 px-5">Let's book consultant</button>
            </div>
        </div>

        
    </div>

</div>
@include('layouts.dashboard-footer')