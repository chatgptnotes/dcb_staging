@extends('admin::layouts.insights')
@section('title','Plans')
@section('eyebrow','Individual')
@section('active','plans')
@section('content')
  @if(session('success'))<div class="alert success">{{ session('success') }}</div>@endif
  @if(session('fail'))<div class="alert fail">{{ session('fail') }}</div>@endif
  <div class="product-grid">
    @foreach($packages as $index => $package)
      <article class="product {{ $index === 1 ? 'featured' : '' }}">
        @if($index === 1)<span class="product-badge">Most chosen</span>@endif
        <h2>{{ $package->title }}</h2>
        <div class="product-price">{{ $package->price_label }} <small>{{ $package->price_suffix ?: 'once' }}</small></div>
        <p class="product-copy">{{ $package->subtitle }}</p>
        <ul class="checklist">@foreach($package->featureList() as $feature)<li>{{ $feature }}</li>@endforeach</ul>
        <div class="button-row"><a class="primary-button" href="{{ url('admin/edit-pricing-package/'.$package->id) }}">Edit</a></div>
      </article>
    @endforeach
  </div>
@endsection
