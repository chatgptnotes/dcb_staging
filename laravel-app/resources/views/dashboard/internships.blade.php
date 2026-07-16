@include('layouts.dashboard-header')
<div class="dashboard-page-content pe-lg-5">

    <div class="p-4 p-lg-3 w-100">
        <h3 class="section-title text-purple mt-3 hideOnMobile">
            Internship programs
        </h3>
        <h3 class="section-title text-purple mt-3 mb-4 mb-lg-0 displayOnMobile">
            Internships
        </h3>
        <div class="d-flex flex-row justify-content-between ">
            <h3 class="section-title2 text-purple mt-lg-3">
                Business
            </h3>
            <div class="d-flex flex-row align-items-center">
                <!-- <button class="filter-btn-yellow me-2">Filter by business</button> -->
                <select class="form-select filter-dropdown" id="fillterByStars">
                    <option selected value="all">All</option>
                    <option value="1">1 Star</option>
                    <option value="2">2 Star</option>
                    <option value="3">3 Star</option>
                    <option value="4">4 Star</option>
                    <option value="5">5 Star</option>
                </select>
                <i class="fas fa-filter"></i>
            </div>
        </div>

        <div id="star_rating_data">

        <?php foreach($star_ratings as $star_rating){ ?>
        {{-- item 1 --}}
        <div class="d-flex flex-column mt-3 mb-3">

            <div class="d-flex w-100 d-flex justify-content-between">
                <h3 class="section-title2  text-purple" style="font-weight: 500 !important">
                    {{$star_rating->title}}
                </h3>
                <span class="rating-stars">

                @for ($i = 0; $i < 5; $i++)
                @if ($i < $star_rating->rating)
                    <i class="bi bi-star-fill"></i>
                @else
                    <i class="bi bi-star"></i>
                @endif
                @endfor
                </span>
            </div>
            <p class="section-description-intentship mt-1 pe-lg-5">
            {{$star_rating->description}}
            </p>
            <div class="d-flex w-100 d-flex justify-content-end">
                <a href="{{url('view-internship/'.$star_rating->id)}}" class="see-more-link">See more</a>
            </div>
        </div>
        <?php } ?>

        </div>

    </div>
</div>
@include('layouts.dashboard-footer')
<script>
    $(document).ready(function() {
        $('#fillterByStars').change(function() {
            var stars = $(this).val();

            $.ajax({
                url: '{{ url('stars-filter/internships') }}',
                type: 'POST',
                dataType: 'json',
                data: {
                    stars: stars,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                    $('#star_rating_data').html(response.data);
                }
            });

        });
    });
</script>
