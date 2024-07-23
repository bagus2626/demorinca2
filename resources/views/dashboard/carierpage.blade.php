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

        .carier-page h3 {
            color: var(--default-color);
            font-size: 28px;
            font-weight: 700;
        }

        .carier-page p {
            color: var(--default-color);
        }

        .carier-page .cta-btn {
            font-family: var(--heading-font);
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid var(--contrast-color);
            color: var(--contrast-color);
        }

        .image-crop {
          width: 300px;
          height: 100%;
          object-fit: cover;
          overflow: hidden;
      }

      .wrap-carier {
        background-color: #fff;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 10px;
        border-radius: 20px;
        margin-top: 10px;
      }

      .post-box {
        box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
        transition: 0.3s;
        height: 100%;
        overflow: hidden;
        padding: 30px;
        border-radius: 8px;
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: #fff
      }
      .post-box .post-img {
        overflow: hidden;
        margin: -30px -30px 15px -30px;
        position: relative;
      }
      .post-box .post-img img {
        transition: 0.5s;
      }
      .post-box .post-date {
        font-size: 16px;
        font-weight: 600;
        color: rgba(1, 41, 112, 0.6);
        display: block;
        margin-bottom: 10px;
      }
      .post-box .post-title {
        font-size: 24px;
        color: #012970;
        font-weight: 700;
        margin-bottom: 18px;
        position: relative;
        transition: 0.3s;
      }
      .post-box .readmore {
        display: flex;
        align-items: center;
        font-weight: 600;
        line-height: 1;
        transition: 0.3s;
        color: #5db54d
      }
      .post-box .readmore i {
        line-height: 0;
        margin-left: 4px;
        font-size: 18px;
      }
      .post-box:hover .post-title {
        color: #5db54d;
      }
      .post-box:hover .post-img img {
        transform: rotate(6deg) scale(1.2);
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

      <div class="row gy-4 mt-4">

        @foreach ($cariers as $item)
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img"><img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt=""></div>
              <a href="{{ route('dashboard.carier-detail', $item->id) }}">
                <span class="post-date btn btn-sm {{ $item->status === 1 ? 'text-light btn-success' : "text-light btn-danger" }}">{{ $item->status === 1 ? 'Buka' : "Tutup" }}</span>
                <h3 class="post-title">{{ $item->name }}</h3>
                <div class="readmore stretched-link mt-auto"><span>{{ __('more') }}</span><i class="bi bi-arrow-right"></i></div>
                
              </a>
            </div>
          </div>
        @endforeach
        
      </div>
    </div>
  </section>
@endsection
