@extends('layouts.dashboard')

@push('after-style')
    <style>
        .title-about {
            font-size: 32px;
            line-height: 5px
        }
    </style>
@endpush
@section('content')

<section id="call-to-action" class="call-to-action section dark-background">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-start mt-3">
          <h1 class="title-about" style="font-weight: bold">{{ __('carier') }}</h1>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="services modern-building-1 section light-background">
    <div class="container">
      <div class="row gy-4 justify-content-center">

        @foreach ($cariers as $item)
          <div class="col-xl-4 col-md-6 d-flex text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('dashboard.carier-detail', $item->id) }}">
              <div class="service-item position-relative">
                <img src="{{ asset('storage/' . $item->image) }}" alt="" class="w-100">
                <h4><div class="stretched-link">{{ $item->name }}</div></h4>
                <div class="btn btn-success">{{ __('more') }}...</div>
              </div>
            </a>
          </div>
        @endforeach
        
      </div>
    </div>
  </section>
@endsection
