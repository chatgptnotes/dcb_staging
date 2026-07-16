@extends('layouts.dashboard-layout')

@section('title', 'Dashboard')
<style>
    
.fc .fc-daygrid-day.fc-day-today {
    background-color: #F6C94D;
}
.fc .fc-button-primary {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
.fc .fc-button-primary:disabled {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
.fc .fc-button-primary:hover {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
</style>
@section('content')
<div>
<div class="dashboard-page-content">
    <div class="p-3 w-100">
        <div class="d-flex grayBox"></div>

        <h3 class="section-title text-purple mt-3">
            Our Events
        </h3>

        <div class="d-flex flex-row justify-content-between">
            <h3 class="section-title2 text-purple mt-3" id="event-type">All</h3>
            <div class="d-flex flex-row align-items-center">
                <select class="form-select filter-dropdown" id="fillterEvents">
                    <option selected value="all">All</option>
                    <option value="Physical">Physical</option>
                    <option value="Digital">Digital</option>
                    <option value="Workshop">Workshop</option>
                    <option value="Webinar">Webinar</option>
                </select>
                <i class="fas fa-filter"></i>
            </div>
        </div>
        

        <div class="d-flex w-100 justify-content-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 w-100" id="filtered-events">
                <?php foreach($events as $event){ ?> 
                <div class="col p-2">
                    <div class="eventcard p-3">
                        <div class="eventImgWrapper">
                            <a href="{{url('event/'.$event->slug)}}"><img src="{{ asset('db_files/events/featured/'.$event->featured_image) }}" class="w-100 eventImage"
                                style="border-radius: 10px"></a>
                        </div>
                        <a href="{{url('event/'.$event->slug)}}"><p class="yellow-text-lg mt-3 px-2" style="font-weight: 700">
                           {{$event->name}}
                        </p></a>
                        <p class="white-text-lg  px-2" style="min-height: 48px; max-height: 48px;">{{$event->short_description}}</p>
                        <div class="d-flex justify-content-between px-2 pt-5">
                            <p class="eventDateTime">{{$event->date}}</p>
                            <p class="eventDateTime">{{$event->start_time}} - {{$event->end_time}}</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>


        {{-- section 6 --}}
        <div class="row mt-5 mb-5 d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-6 p-2 p-lg-5 text-center d-flex flex-column justify-content-center align-items-center">
                <h3 class="section-title text-purple">Find out your child <br>
                    or your brain!</h3>
                <button class="yellow-btn mt-1 px-5">Let's find out!</button>
            </div>
            <div class="col-12 col-lg-6 p-2 p-lg-5">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
            </div>
        </div>


    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $('#fillterEvents').change(function() {
            var type = $(this).val();

            $.ajax({
                url: '{{ url('event-filter') }}',
                type: 'POST',
                dataType: 'json',
                data: {
                    type: type,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response);
                    $('#filtered-events').html(response.data);
                }
            });

        });
    });
</script>

@endsection