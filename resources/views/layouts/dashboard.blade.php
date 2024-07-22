<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT RINCA CIPTA KARYA - {{ __('title') }}</title>
  <meta name="author" content="https://rincakonsultan.com/" />
	<meta name="website" content="https://rincakonsultan.com/" />
  <meta content="Konsultan perizinan bangunan berlisensi" name="keywords">
  <meta content="Konsultan perizinan bangunan berlisensi" name="tagline">
  <meta content="konsultan perencanaan arsitek dan pengurusan perizinan bangunan gedung yang sudah memiliki lisensi." name="description">
   
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('before-style')
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  {{-- bootstrap icons --}}
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  {{-- boxicon icons --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="{{ '/assets/css/main.css' }}" rel="stylesheet">
  {{-- <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  /> --}}

  <style>
    .modern-building-3 { 
      position: relative; 
      background: url("assets/img/background/modern-building-3.jpg") no-repeat 
          bottom; 
      background-size: cover; 
      padding: 60px 0; 
    } 
    .modern-building-3 .container { 
        position: relative; 
        z-index: 2; 
    } 
    .modern-building-3::before { 
        content: ""; 
        position: absolute; 
        bottom: 0; 
        left: 0; 
        right: 0; 
        height: 100%; 
        background:  rgba(255, 255, 255, 0.7); 
        z-index: 1; 
    } 

    .modern-building-1 { 
      position: relative; 
      background: url("assets/img/background/modern-building-1.jpg") no-repeat 
          bottom; 
      background-size: cover; 
      padding: 60px 0; 
    } 
    .modern-building-1 .container { 
        position: relative; 
        z-index: 2; 
    } 
    .modern-building-1::before { 
        content: ""; 
        position: absolute; 
        bottom: 0; 
        left: 0; 
        right: 0; 
        height: 100%; 
        background:  rgba(255, 255, 255, 0.7); 
        z-index: 1; 
    } 
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @stack('after-style')
</head>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top" style="background-color: #5ba577;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="/" class="logo d-flex align-items-center me-auto">
       <img src="assets/img/favicon2.webp" alt="" style="width: 140px; height: 90px;">
      </a>
      <div>
         <a><strong>Phone:</strong> <span>+628561652206</span></a>
      </div>
      <div>
         <a><strong>Email:</strong> <span>info@rincakonsultan.com</span></a>
      </div>
       
      
      <nav id="navmenu" class="navmenu">
        <ul>
         <!--   <li class="dropdown">
            <a href="#">
              @if (app()->getLocale() == 'en')
                <img src="assets/img/english.svg" style="width: 40px; height: 35px;" alt="">
              @else
                <img src="assets/img/indonesian.svg" style="width: 40px; height: 35px;" alt="">
              @endif
              <i class="bi bi-chevron-down toggle-dropdown">
              </i>
            </a>
            <ul>
              <li><a href="{{ url('change-language/en') }}" src="assets/img/english.svg" style="width: 40px; height: 35px;" alt=""></a></li>
              <li><a href="{{ url('change-language/id') }}" src="assets/img/english.svg" style="width: 40px; height: 35px;" alt=""></a></li>
            </ul>
          </li> -->
          <!--  <ul>
              <li><a href="{{ url('change-language/en') }}" src="assets/img/english.svg" style="width: 40px; height: 35px;" alt=""></a></li>
              <li><a href="{{ url('change-language/id') }}" src="assets/img/indonesian.svg" style="width: 40px; height: 35px;" alt=""></a></li>
            </ul> -->
            <li><a href="{{ url('change-language/en') }}"><img src="assets/img/english.svg" style="width: 40px; height: 35px;" alt="English"></a></li>
          <li><a href="{{ url('change-language/id') }}"><img src="assets/img/indonesian.svg" style="width: 40px; height: 35px;" alt="Indonesian"></a></li>
          <li><a href="{{ route('dashboard.homepage') }}#hero" class="active">Home</a></li>
          <li><a href="{{ route('dashboard.tracking') }}">Tracking</a></li>
          <li><a href="{{ route('dashboard.about') }}">About</a></li>
          <li><a href="{{ route('dashboard.homepage') }}#portfolio">Project</a></li>
          <li><a href="{{ route('dashboard.homepage') }}#contact">Contact</a></li>
          @guest
            <li><a href="{{ route('page-login') }}">Signin</a></li>
          @endguest
          @auth
            <li>
                <form action="{{ route('logout') }}" method="post">
                @csrf
                    <button type="submit" class="nav-link d-inline-block text-light border-0" style="margin-top: -13px">Logout</button>
                </form>
            </li>
          @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    @yield('content')

    <section id="contact" class="contact modern-building-1 section">
        <div class="container section-title">
          <h2>{{ __('contact') }}</h2>
        </div>
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="">
                <div class="info-item d-flex">
                  <div>
                    <h2 class="fw-semibold fst-italic text-black">{{ __('get_a_quote') }}</h2>
                    <h5 class="fw-semibold fst-italic text-black">{{ __('our_best') }}</h5>
                  </div>
                </div>
                <div class="info-item d-flex">
                  <div>
                    <p class="fw-medium fst-italic text-black">{{ __('costs_slf') }}</p>
                  </div>
                </div>
                <div class="info-item d-flex">
                  <ul>
                    <li class="fw-medium fst-italic text-black">{{ __('costs_1') }}</li>
                    <li class="fw-medium fst-italic text-black">{{ __('costs_2') }}</li>
                    <li class="fw-medium fst-italic text-black">{{ __('costs_3') }}</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <div class="col-12">
                  <div id="alertForm" class="alert alert-success alert-dismissible fade show mt-2" role="alert" style="display: none">
                    {{ __('complete_data') }}
                  </div>
                </div>
              </div>
                <div class="row gy-4 info-wrap" id="form-contact" style="background-color: #f3f4f6;">
                  <div class="col-md-6">
                    <label for="nama_pemohon" class="pb-2 fw-medium fst-italic text-black">{{ __('name') }}</label>
                    <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="nama_perusahaan" class="pb-2 fw-medium fst-italic text-black">{{ __('company') }}</label>
                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan">
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_handphone" class="pb-2 fw-medium fst-italic text-black">{{ __('phone_number') }}</label>
                    <input type="text" name="nomor_handphone" id="nomor_handphone" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="pb-2 fw-medium fst-italic text-black">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                  </div>
                  <div class="col-md-6">
                    <label for="luas_area" class="pb-2 fw-medium fst-italic text-black">Area</label>
                    <input type="text" class="form-control" name="luas_area" id="luas_area">
                  </div>
                  <div class="col-md-6">
                    <label for="lokasi_perusahaan" class="pb-2 fw-medium fst-italic text-black">{{ __('company_location') }}</label>
                    <input type="text" class="form-control" name="lokasi_perusahaan" id="lokasi_perusahaan">
                  </div>
                  <div class="col-md-12">
                    <label for="keterangan" class="pb-2 fw-medium fst-italic text-black">{{ __('description') }} <span style="font-size: 11px; color: red">( optional )</span></label>
                    <textarea class="form-control" name="keterangan" rows="10" id="keterangan"></textarea>
                  </div>
                  <a href="#contact" onclick="submitOffer()" class="btn-send-message">
                    <div class="col-md-12 text-center fw-bold fst-italic ">
                        {{ __('send_offer') }}
                    </div>
                  </a>
                </div>
                <div class="row gy-4 " id="form-success-contact" style="display: none">
                 <div class="col-12 text-center">
                  <h3>PT RINCA CIPTA KARYA</h3>
                 </div>
                 <div class="col-12 text-center">
                  <h6>{{ __('feedback_offer') }}</h6>
                 </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    <footer id="footer" class="footer">
        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="/" class="d-flex align-items-center">
                <span class="sitename">PT RINCA CIPTA KARYA</span>
              </a>
              <style>
                .visitors {
                    background-color: #3cb371;
                    border-radius: 10px;
                    padding: 15px;
                    color: #fff
                }
              </style>
              <p class="mt-3"><strong>Phone:</strong> <span>+62856-1652-206</span></p>
              <p><strong>Email:</strong> <span>info@rincakonsultan.com</span></p>
              <div class="visitors d-flex">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            Visitors
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <p><span><i class="bi bi-person-fill text-white"></i> Users Today :</span> {{ $visitorsToday }}</p>
                            <p><span><i class="bi bi-people-fill text-white"></i> Users Last 30 days :</span> {{ $visitorsLast30Days }}</p>
                            <p><span><i class="bi bi-clipboard-data text-white"></i> Total views :</span> {{ $totalViews }}</p>
                        </div>
                        <div class="col">
                            <p><span><i class="bi bi-calendar-day text-white"></i>  Views Today :</span> {{ $viewsToday }}</p>
                            <p><span><i class="bi bi-eye text-white"></i> Views Last 30 days :</span> {{ $viewsLast30Days }}</p>
                        </div>
                    </div>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Menu</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.homepage') }}#hero">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.tracking') }}">Tracking</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.about') }}">About</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.homepage') }}#portfolio">Project</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.homepage') }}#contact">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Artikel</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.artikel1') }}">Artikel 1</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.artikel2') }}">Artikel 2</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{ route('dashboard.artikel3') }}">Artikel 3</a></li>
              </ul>
            </div>


            <div class="col-lg-2 col-md-3 footer-links">
              <h4>{{ __('bussines_activities') }}</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i><a href="{{ route('dashboard.about') }}#perencanaan">{{ __('bussines_activities_1') }}</a></li>
                <li><i class="bi bi-chevron-right"></i><a href="{{ route('dashboard.about') }}#perizinan">{{ __('bussines_activities_2') }}</a></li>
                <li><i class="bi bi-chevron-right"></i><a href="{{ route('dashboard.about') }}#design">{{ __('bussines_activities_3') }}</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-12">
              <h4>{{ __('contact') }}</h4>
              <a target="_blank" href="https://maps.app.goo.gl/xKgfHjDEnMaLwiFD7" class="text-black">{{ __('address') }}</a>
              <div class="social-links d-flex mt-4">
                <a target="_blank" href="mailto:contact@rincakonsultan.com"><i class="bi bi-envelope"></i></a>
                <a target="_blank" href="https://www.instagram.com/rincaciptakonsultan/"><i class="bi bi-instagram"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send/?phone=628561652206"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container copyright text-center mt-4">
          <p><span>Copyright</span> © 2024 <strong class="px-1 sitename">PT Rinca Cipta Karya</strong></p>
        </div>
      </footer>
  </main>

@stack('before-script')
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> --}}
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ '/assets/js/main.js' }}"></script>
  <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "628561652206", // WhatsApp number
              call_to_action: "Live Chat", // Call to action
              button_color: "#FF6550", // Color of button
              position: "right", // Position may be 'right' or 'left'
          };
          var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
  </script>

<script>
    function searchTracking(){
        let val = $("#valueTracking").val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/tracking/search',
            method: 'POST',
            dataType: 'JSON',
            data: {
                data: val
            },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: (response) => {
                let html = '';
                if(response.data) {
                    html = `
                        ${response.data.status !== 'Selesai' ? `
                            <div class="tracking-result text-warning">
                                <i class="bx bx-loader bx-spin text-warning"></i> {{ __('procces') }}
                            </div>
                        ` : ''}
                        <div class="tracking-result">
                            <i class="${response.data.tanggal ? `bi bi-check2-circle text-success` : `bi-dash-circle text-danger`}"></i> {{ __('start') }} ( ${response.data.tanggal ? formatDate(response.data.tanggal) : ` - `})  -  <i class="${response.data.tanggal_estimasi }"></i> {{ __('plan_completed') }} (${response.data.tanggal_estimasi ? formatDate(response.data.tanggal_estimasi) : ` - `})
                        </div>
                        <div class="tracking-result">
                            <i class="bi bi-check2-circle"></i> {{ __('no_register') }} : ${response.data.no_registrasi_sistem_simbg ?? '-'}
                        </div>
                        ${response.data.status !== 'Selesai' ? `
                            <div class="tracking-result text-success">
                                <i class="bi bi-chat-right-text text-success"></i> ${response.data.keterangan ?? '-'}
                            </div>
                        ` : `
                            <div class="tracking-result">
                                <i class="bi bi-check2-circle text-success"></i> {{ __('completed') }} - ${response.data.tanggal_selesai ? formatDate(response.data.tanggal_selesai) : ``}
                            </div>
                        `}
                    `;
                }else {
                    html = `
                        <div class="tracking-result text-center text-danger">
                            <i class="bi bi-dash-circle"></i> {{ __('not_found_document') }}
                        </div>
                    `;
                    setTimeout(() => {
                    $("#tracking-result").fadeOut(300, () => {
                        $(this).empty().hide();
                    });
                }, 3000);
                }
                $("#tracking-result").fadeIn(300).empty().show().html(html);


            },
            error: (err) => {
                console.log(err)
            }
        })
    }

    // FORMAT DATE
    function formatDate(dateInput) {
        const date = new Date(dateInput);
        if (isNaN(date.getTime())) {
            throw new Error('Invalid date');
        }

        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const year = date.getFullYear();

        return `${day}-${month}-${year}`;
    }

    // send offer
    function submitOffer() 
    {
      let csrfToken = $('meta[name="csrf-token"]').attr('content');
      let nama_pemohon = $("#nama_pemohon").val();
      let nama_perusahaan = $("#nama_perusahaan").val();
      let nomor_handphone = $("#nomor_handphone").val();
      let email = $("#email").val();
      let luas_area = $("#luas_area").val();
      let lokasi_perusahaan = $("#lokasi_perusahaan").val();
      let keterangan = $("#keterangan").val();
      if(
        !nama_pemohon ||
        !nama_perusahaan ||
        !nomor_handphone ||
        !email ||
        !luas_area ||
        !lokasi_perusahaan
      ) 
      {
        $("#alertForm").show();
        setTimeout(() => {
                    $("#tracking-result").fadeOut(300, () => {
                        $(this).empty().hide();
                    });
                }, 3000);
        setTimeout(() => {
          $("#alertForm").fadeOut(300, () => {
              $(this).empty().hide();
          });
        }, 3000);

        return;
      }

      $.ajax({
        url: "/send-offer", 
        method: "POST", 
        dataType: "JSON", 
        headers: {
          'X-CSRF-TOKEN': csrfToken
        },
        data: {
          nama_pemohon,
          nama_perusahaan,
          nomor_handphone,
          email,
          luas_area,
          lokasi_perusahaan,
          keterangan
        }, 
        success: (response) => {
          $("#form-contact").hide();
          $("#form-success-contact").show();
        }, 
        error: (err) => {
          console.log(err)
        }
      })

    }
  </script>
  @stack('after-script')
</body>
</html>
