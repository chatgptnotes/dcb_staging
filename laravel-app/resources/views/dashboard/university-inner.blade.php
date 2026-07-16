@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            Universities programs
        </h3>


        <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8 pe-3">
                <div class="d-flex justify-content-between mt-3">
                    <h3 class="section-title2 text-purple">
                        {{$uni_details->title}}
                    </h3>
                    <span class="rating-stars">
                        @for ($i = 0; $i < 5; $i++)
                        @if ($i < $uni_details->rating)
                            <i class="bi bi-star-fill"></i>
                        @else
                            <i class="bi bi-star"></i>
                        @endif
                        @endfor

                    </span>
                </div>
               <?php echo $uni_details->description ?>
            </div>
            <div class="col-12 col-lg-4">
                <img src="{{ asset('assets/images/zebra1.PNG') }}" class="w-100" style="border-radius: 8px">
            </div>
        </div>
        <!--<h3 class="section-title2 text-purple mt-5">Sub heading-->
        <!--</h3>-->
        <!--<p class="section-description-intentship mt-1 pe-lg-5">-->
        <!--    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi quia repellat modi? Ullam laudantium-->
        <!--    reiciendis inventore explicabo quisquam error illo quidem, recusandae accusamus ducimus voluptatibus amet-->
        <!--    quibusdam officia enim non.-->
        <!--</p>-->

        
    </div>

</div>
@include('layouts.dashboard-footer')