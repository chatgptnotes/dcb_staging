@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            Your Flow & Grow Tips
        </h3>


        <div class="d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8 pe-3">
                <?php 
                if($tip_details->category == 'management'){
                  $category =   'Management Skills';
                }
                elseif($tip_details->category == 'sport'){
                   $category =   'Sport Skills'; 
                }
                elseif($tip_details->category == 'creative-thinking'){
                   $category =   'Creative Thinking Skills'; 
                }
                elseif($tip_details->category == 'self-learning'){
                   $category =   'Self Learning Skills'; 
                }
 
                ?>
                <h3 class="section-title text-purple mt-3">
                   {{$category}}
                </h3>
                <img src="{{ asset('db_files/tips/featured/'.$tip_details->featured_image.'') }}" class="w-100" style="border-radius: 8px">
                <h3 class="section-title2 text-purple mt-5">{{$tip_details->title}}
                </h3>
                <p class="section-description-intentship mt-1 pe-lg-5">
                    <?php echo $tip_details->description ?>
                </p>
            </div>
            <div class="col-12 col-lg-4">
                <h3 class="section-title text-purple mt-3">
                    Tips Playlist
                </h3>
                
                <?php foreach($other_tips as $other_tip) 
                if($other_tip->id == $tip_details->id){}
                else{
                { ?>
                <a href="{{url('view-tip/'.$other_tip->id)}}"><img src="{{ asset('db_files/tips/featured/'.$other_tip->featured_image.'') }}" class="w-100" style="border-radius: 8px"></a>
                <a href="{{url('view-tip/'.$other_tip->id)}}"><h3 class="section-title text-purple mt-3 mb-4">
                   {{$other_tip->title}}
                </h3></a>
                <?php echo $other_tip->description ?>
                <?php }} ?>
               
            </div>
        </div>

        
    </div>

</div>
@include('layouts.dashboard-footer')