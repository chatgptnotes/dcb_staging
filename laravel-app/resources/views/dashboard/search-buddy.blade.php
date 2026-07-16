@include('layouts.dashboard-header')
<div class="dashboard-page-content">

    <div class="p-3 w-100 mb-5 mb-lg-2">
        <h3 class="section-title text-purple mt-3">
            Search buddy
        </h3>
        <h3 class="card-title-style1-purple">I want to search
            <select name="searchType" id="search" class="selectParentSearch">
                <option value="Parent buddy" selected>Parent buddy</option>
                <option value="Parent buddy1" selected>Parent buddy1</option>
                <option value="Parent buddy2" selected>Parent buddy2</option>
            </select>
        </h3>
        <div class="input-group search buddySearch mt-5 mb-3">
            <input type="text" class="form-control" placeholder="Type what you need to know"
                style="background: transparent;">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="d-flex flex-row w-100">
            <div class="col-3">
                <img src="{{ asset('assets/images/brain-suitecase.PNG') }}" class="w-100">
            </div>
            <div class="col-9">
                <h3 class="card-title-style1-purple">Buddy name</h3>
                <p class="section-description-intentship" style="color: #ccc; font-weight: 400">
                    career path name
                </p>
                <p class="section-description-intentship">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sed laborum ea, illo soluta molestias voluptas nesciunt pariatur quia assumenda.
                </p>
                <button class="yellow-btn px-4 px-lg-5" style="font-size: 16px">+ Add budyy</button>
            </div>
        </div>




    </div>

</div>
@include('layouts.dashboard-footer')