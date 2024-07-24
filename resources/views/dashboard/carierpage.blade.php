@extends('layouts.dashboard')

@push('after-style')
    <style>
        .title-about {
            font-size: 32px;
            line-height: 5px
        }
        .carier-page {
            padding: 120px 0;
            position: relative;
            clip-path: inset(0);
        }

        .carier-page .image {
            position: fixed;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

        .carier-page:before {
            content: "";
            background: color-mix(in srgb, var(--background-color), transparent 35%);
            position: absolute;
            inset: 0;
            z-index: 2;
        }

        .carier-page .container {
            position: relative;
            z-index: 3;
        }

    </style>
@endpush
@section('content')

<section id="call-to-action" class="carier-page portfolio section dark-background">
    <img src="assets/img/cta-bg.jpg" alt="" class="image">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 text-start mt-3">
          <h1 class="title-about" style="font-weight: bold">{{ __('carier') }}</h1>
        </div>
      </div>

    </div>
  </section>

  <section class="grow-today">
    <div class="container">
        <div class="{{ $cariers ?? 'mt-5' }} row gap">
            
          @forelse ($cariers as $item)
            <div class="col-lg-3 col-md-6 col-12">
              <a href="{{ route('dashboard.carier-detail', $item->id) }}">
                <div class="card-grow h-100">
                    <span class="{{ $item->status === 1 ? 'badge-pricing' : "badge-pricing-danger" }}">{{ $item->status === 1 ? __('open') : __('close') }}</span>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" />
                    <div class="card-content">
                        <div class="card-title">
                          {{ $item->name }}
                        </div>
                        <div class="card-subtitle">
                            {{ $item->short_description ? $item->short_description . '...' : ' - ' }}
                        </div>
                    </div>
                </div>
              </a>
            </div>
            @empty
            <div class="col-12 text-center info-wrap">
              <div class="title fw-bold fst-italic">Tidak ada lowongan kerja</div>
            </div>
            @endforelse

        </div>
    </div>
</section>
@endsection
