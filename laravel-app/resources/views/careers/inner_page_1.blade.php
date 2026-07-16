@extends('layouts.dashboard-layout')

@section('title', 'Careers')

@section('content')
<style>
    .page-link {
    color: #000;
    border: 1px solid #F6C94D;
    }
    .page-item.active .page-link {
    color: #000;
    background-color: #F6C94D;
    border-color: #F6C94D;
}
</style>
<div>
    <div>
        <h2 class="page-title">Career Match Insights</h2>
        <p class="page-description">Your brain code matches over <strong>1,000 careers,</strong> each rated by how naturally your brain aligns.
Use the <strong>Star Ratings</strong> to explore your best-fit paths — then let your <strong>interest and passion</strong> guide the final choice.
</p>
    </div>

    <!-- ⭐ Filter form -->
   <form method="GET" action="" class="mb-3" id="star-filter-form">
    <label for="stars">Filter by Stars:</label><br>
    <select name="stars" id="stars" class="form-select w-auto d-inline-block">
        <option value="">All</option>
        @for ($i = 1; $i <= 5; $i++)
            <option value="{{ $i }}" {{ request('stars') == $i ? 'selected' : '' }}>
                {{ $i }} Star{{ $i > 1 ? 's' : '' }}
            </option>
        @endfor
    </select>
</form>

<script>
    document.getElementById('stars').addEventListener('change', function() {
        document.getElementById('star-filter-form').submit();
    });
</script>
<!--<form action="{{ url('careers/import') }}" method="POST" enctype="multipart/form-data">-->
<!--    @csrf-->
<!--    <label for="file">Upload Careers Excel:</label>-->
<!--    <input type="file" name="file" id="file" required>-->
<!--    <button type="submit" class="btn btn-primary">Import</button>-->
<!--</form>-->

    <div class="row ">
      @foreach ($careers as $career)
<div class="col-lg-4 ">
    <div class="card mb-3">
        <div class="card-body">
            <h6 class="careers-sub-title">{{ $career->title }}</h6>
            <p class="careers-sub-title-description">{{ $career->short_description }}</p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ url('careers-inner/' . $career->id) }}">
                        <h6 class="careers-sub-title">See more 
                            <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                <path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3l0 82.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/>
                            </svg>
                        </h6>
                    </a>
                </div>
                <div class="flex-row">
                    @php
                        $rating = $career->ratings->first()->rating ?? 0;
                    @endphp
                    @for ($i = 0; $i < $rating; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" height="14" width="15.75" viewBox="0 0 576 512">
                            <path fill="#FFD43B" d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/>
                        </svg>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


        @if ($careers->isEmpty())
            <p>No careers found for this filter.</p>
        @endif
        
        <div class="justify-content-center mt-4">
    {{ $careers->appends(request()->query())->links('pagination::bootstrap-5') }}
</div>

    </div>
</div>
@endsection
