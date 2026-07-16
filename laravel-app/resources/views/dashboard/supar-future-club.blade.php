@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            Super Future Club
        </h3>


        <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8">
                <h3 class="section-title2 text-purple mt-3">
                    Sample heading
                </h3>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit voluptatibus qui possimus
                    doloremque et nesciunt beatae minus delectus similique nobis maxime adipisci non eligendi saepe
                    accusamus unde, dignissimos, odit necessitatibus totam illum eius animi consequuntur repellat. Quod
                    ab amet, laborum debitis officiis placeat ullam voluptatem esse aliquid iure sit perferendis.
                </p>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium
                    reiciendis inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus
                    amet quibusdam officia enim non.
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100" style="border-radius: 8px">
            </div>
        </div>

        <h3 class="section-title2 text-purple mt-3">Sample heading
        </h3>
        <p class="section-description-intentship mt-1 pe-lg-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium
            reiciendis inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet
            quibusdam officia enim non.
        </p>
    </div>

</div>
@include('layouts.dashboard-footer')