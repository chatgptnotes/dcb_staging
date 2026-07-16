@include('admin::layouts.header')
 <!-- Content wrapper -->
 <div class="content-wrapper">

    <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="py-3 mb-4">
<span class="text-muted fw-light">Dashboard /</span> Pricing Packages
</h4>

<!-- Card Border Shadow -->
<div class="row">
    <div class="card">
        <h5 class="card-header">Pricing Packages</h5>
        <p class="px-3 text-muted" style="margin-top:-8px;">
            These cards drive the public <strong>/pricing</strong> page and the Stripe checkout amount.
            Package slugs are fixed and cannot be changed.
        </p>
        @if(Session::has('success')) <div class="alert alert-success mt-2 mb-2">{{ Session::get('success') }}</div>@endif
        @if(Session::has('fail')) <div class="alert alert-danger mt-2 mb-2">{{ Session::get('fail') }}</div>@endif
        @if(Session::has('warning')) <div class="alert alert-warning mt-2 mb-2">{{ Session::get('warning') }}</div>@endif
        <div class="card-datatable table-responsive">
          <table class="dt-row-grouping table border-top data-table" style="width:100%">
            <thead>
              <tr>
                <th>Order</th>
                <th>Title</th>
                <th>Price Label</th>
                <th>Slug</th>
                <th>Stripe Price ID</th>
                <th>Type</th>
                <th>Visible</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach($packages as $package) { ?>
            <tr>
            <td>{{$package->sort_order}}</td>
            <td>{{$package->title}}</td>
            <td>{{$package->price_label}}</td>
            <td><small class="text-muted">{{$package->slug}}</small></td>
            <td>
              @if($package->stripe_price_id)
                <small>{{$package->stripe_price_id}}</small>
              @else
                <span class="badge bg-label-warning me-1">Setup required</span>
              @endif
            </td>
            <td>{{ $package->type === 'one_time' ? 'One-time' : 'Subscription' }}</td>
            <td>
            <div class="userDatatable-content d-inline-block">
                <?php if($package->is_visible) { ?>
                    <span class="badge bg-label-success me-1">Visible</span>
                    <?php } else { ?>
                        <span class="badge bg-label-danger me-1">Hidden</span>
                    <?php } ?>
            </div>
            </td>
            <td>
                <div class="demo-inline-spacing" >
                    <a href="{{ url('admin/edit-pricing-package/'.$package->id.'') }}" ><button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                    <a href="{{ url('admin/toggle-pricing-package/'.$package->id.'') }}">
                        <?php if($package->is_visible) { ?>
                            <button type="button" class="btn btn-danger btn-xs">Hide</button>
                        <?php } else { ?>
                            <button type="button" class="btn btn-success btn-xs">Show</button>
                        <?php } ?>
                    </a>
                </div>
            </td>
            </tr>
            <?php } ?>
            </tbody>

          </table>
        </div>
      </div>
</div>
<!--/ Card Border Shadow -->



      </div>
      <!-- / Content -->

@include('admin::layouts.footer')
