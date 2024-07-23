@extends('layouts.dashboard')

@push('after-style')
<style>
  .blog {
    padding: 40px 0 20px 0;
  }
  .blog .entry {
    padding: 30px;
    margin-bottom: 60px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }
  .blog .entry .entry-img {
    max-height: 440px;
    margin: -30px -30px 20px -30px;
    overflow: hidden;
  }
  .blog .entry .entry-title {
    font-size: 28px;
    font-weight: bold;
    padding: 0;
    margin: 0 0 20px 0;
  }
  .blog .entry .entry-title a {
    color: #012970;
    transition: 0.3s;
  }
  .blog .entry .entry-title a:hover {
    color: #4154f1;
  }
  .blog .entry .entry-meta {
    margin-bottom: 15px;
    color: #4084fd;
  }
  .blog .entry .entry-meta ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    align-items: center;
    padding: 0;
    margin: 0;
  }
  .blog .entry .entry-meta ul li + li {
    padding-left: 20px;
  }
  .blog .entry .entry-meta i {
    font-size: 16px;
    margin-right: 8px;
    line-height: 0;
  }
  .blog .entry .entry-meta a {
    color: #777777;
    font-size: 14px;
    display: inline-block;
    line-height: 1;
  }
  .blog .entry .entry-content p {
    line-height: 24px;
    color: black
  }
  .blog .entry .entry-content h3 {
    font-size: 22px;
    margin-top: 30px;
    font-weight: bold;
  }
  .blog .entry-single {
    margin-bottom: 30px;
  }
  .blog .blog-comments .reply-form {
    margin-top: 30px;
    padding: 30px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }
  .blog .blog-comments .reply-form h4 {
    font-weight: bold;
    font-size: 22px;
  }
  .blog .blog-comments .reply-form p {
    font-size: 14px;
  }
  .blog .blog-comments .reply-form input {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }
  .blog .blog-comments .reply-form input:focus {
    box-shadow: none;
    border-color: #a0aaf8;
  }
  .blog .blog-comments .reply-form textarea {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }
  .blog .blog-comments .reply-form textarea:focus {
    box-shadow: none;
    border-color: #a0aaf8;
  }
  .blog .blog-comments .reply-form .form-group {
    margin-bottom: 25px;
  }
  .blog .blog-comments .reply-form .btn-primary {
    border-radius: 4px;
    padding: 10px 20px;
    border: 0;
    background-color: #012970;
  }
  .blog .blog-comments .reply-form .btn-primary:hover {
    background-color: #013289;
  }
  .blog .sidebar {
    padding: 30px;
    margin: 0 0 60px 20px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
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
<section id="blog" class="blog mt-5 carier-page section dark-background">
  <img src="assets/img/cta-bg.jpg" alt="" class="image">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single" style="background: #f3f4f6; border-radius: 20px">

              <div class="entry-img">
                <img src="{{ asset('storage/' . $data->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="{{ asset('storage/' . $data->image) }}">{{ $data->name }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center {{ $data->status === 1 ? 'text-success' : 'text-danger' }}"><i class="bi bi-clock"></i> {{ $data->status === 1 ? 'Buka' : 'Tutup' }}</li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  {{ $data->description ?? '-' }}
                </p>

              </div>
            </article><!-- End blog entry -->

            

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="blog-comments" style="background: #f3f4f6; border-radius: 20px">

              <div class="reply-form">
                <h4 class="text-success">{{ __('form_carier') }}</h4>
                <form action="{{ route('dashboard.carier-send') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input name="name" type="text" class="form-control" placeholder="{{ __('name') }}" required>
                    </div>
                    <div class="col-md-12 form-group">
                      <input name="email" type="text" class="form-control" placeholder="Email*" required>
                    </div>
                    <div class="col-md-12 form-group">
                      <input name="phone_number" type="text" class="form-control" placeholder="{{ __('phone_number') }}" required>
                    </div>
                    <div class="col-md-12 form-group">
                      <textarea name="description" class="form-control" placeholder="{{ __('description') }}"></textarea>
                    </div>
                  </div>
                  @if($data->status === 1) 
                    <button type="submit" class="btn btn-success" disabled>{{ __('send_offer') }}</button>
                  @endif

                </form>

              </div>

            </div><!-- End blog comments -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
@endsection
