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
  <base href="/" >
  @stack('before-style')
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  {{-- boxicon icons --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

  <style>
    /* * {
        outline: 1px solid rgba(255, 0, 0, 0.5);
    } */
    /* Navbar Style */
    .navbar {
        padding: 16px;
        background-color: rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(0px);
        transition: backdrop-filter 0.3s ease-in-out;
    }
    .bg-blur {
        backdrop-filter: blur(10px);
    }
    .bg-white {
        background-color: white !important;
    }
    .bg-white .nav-link,
    .bg-white .language-select,
    .bg-white .bi-caret-down-fill {
        color: black !important;
    }
    .bg-white .navbar-toggler-icon {
        filter: invert(0);
    }

    /* Navbar Brand */
    .navbar-brand img {
        height: 32px;
        width: 87px;
    }

    /* Navbar Links */
    .nav-link {
        color: white !important;
        margin: 0 10px;
        font-weight: 400;
        font-size: 13px;
    }

    /* Buttons */
    .btn-green-custom {
        background-color: #1F5D35;
        border-radius: 12px;
        color: white;
        padding: 12px 20px;
    }
    .btn-green-custom:hover {
        background-color: #1F5D35;
        border-radius: 12px;
        color: white;
        padding: 12px 20px;
    }
    .btn-outline-custom {
        border: 1.5px solid white;
        padding: 10px 18px;
        font-size: 12px;
        border-radius: 12px;
        font-weight: 500;
        color: white;
    }
    .btn-outline-custom:hover {
        border: 1.5px solid white;
        padding: 10px 18px;
        font-size: 12px;
        border-radius: 12px;
        font-weight: 500;
        color: white;
    }

    /* Language Selector */
    .language-select {
        border: none;
        background: transparent;
        color: white;
    }
    .language-select option {
        background: #01211D;
        color: white;
    }

    /* Navbar Toggler */
    .navbar-toggler {
        border: none !important;
        outline: none !important;
        box-shadow: none !important;
    }
    .navbar-toggler-icon {
        filter: invert(1);
    }

    /* Icon Rounded */
    .icon-rounded {
        display: inline-flex;
        padding: 4px 12px;
        border-radius: 50px;
        color: #1F5D35;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        border: 1px solid #1F5D35;
        min-width: 50px;
        white-space: nowrap;
    }

    .btn-outline-green {
        border: 1.5px solid #1F5D35;
        padding: 10px 14px;
        border-radius: 12px;
        color: #1F5D35;
        cursor: pointer;
    }
    .btn-outline-gray {
        border: 1.5px solid #1F2A37;
        padding: 6px 8px;
        border-radius: 10px;
        color: #1F2A37;
        cursor: pointer;
    }
    .article-card {
        border: 0px;
        border-radius: 12px;
    }
    .truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .consultant-card {
        height: 220px;
        border: 0;
        height: 187px; 
        border-radius: 12px;
        overflow: hidden;
    }
    .consultant-card .card-img-overlay {
        padding: 20px;
    }
    .consultant-card img {
        object-fit: cover;
    }
    .card-img-overlay {
        padding: 24px;
    }
    .consultant-btn-fill {
        background-color: #1F5D35; 
        color: white;
        font-weight: 400;
        border-radius: 12px;
        padding: 10px 20px;
        border: none;
        transition: all 0.3s ease-in-out;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        font-size: 13px;
    }
    .consultant-btn-outline {
        background-color: transparent;
        color: white;
        font-weight: 400;
        border: 1.5px solid white;
        border-radius: 12px;
        padding: 8px 18px;
        transition: all 0.3s ease-in-out;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        font-size: 13px;
    }

    /* Footer */
    .footer {
        background-color: #0C2215;
        color: white;
        padding-top: 144px;
    }
    
    .footer-logo {
        margin-bottom: 30px;
        height: 41px;
        width: 113px;
    }
    
    .footer .title {
        color: #9CA3AF;
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 16px;
    }
    .footer-links {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
        color: white;
        font-size: 14px;
    }
    .footer-links li a {
        color: white;
        font-size: 14px;
        text-decoration: none;
    }
    
    .copyright {
        font-size: 0.875rem;
        color: white;
        border-top: 1px solid rgba(255,255,255,0.1);
        margin-top: 2rem;
        padding: 1.3rem 0;
    }

    /* Responsive Styling */
    @media (min-width: 768px) {
        .navbar {
            padding: 1rem 62px;
            backdrop-filter: blur(0px);
        }
        .navbar-brand img {
            height: 36px;
            width: 98px;
        }
        .btn-outline-custom {
            border-radius: 14px;
            padding: 12px 20px;
            font-size: 14px;
        }
        .btn-outline-custom:hover {
            border-radius: 14px;
            padding: 12px 20px;
            font-size: 14px;
        }
        .consultant-card {
            height: 370px;
            border-radius: 14px;
        }
        .consultant-card .card-img-overlay {
            padding: 56px;
        }
        .consultant-btn-fill {
            font-size: 14px;
        }
        .consultant-btn-outline {
            font-size: 14px;
        }
        .card-img-overlay {
            padding: 0px;
        }
        .btn-login {
          font-size: 14px;
        }
    }
  </style>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @stack('after-style')
</head>
<body class="index-page">
  <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="assets/img/logo-white.png" alt="Rinca Logo">
        </a>

        <!-- Login button (mobile only) -->
        <div class="d-lg-none ms-auto">
            <button class="btn btn-outline-custom">Login</button>
        </div>

        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.project') }}">Proyek</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.riksa') }}">RIKSA</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.about') }}">Tentang Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
            </ul>

            <!-- Right Side Items (desktop only) -->
            <div class="d-flex align-items-center gap-2 d-none d-lg-flex">
                <!-- Language Selector -->
                <div class="d-flex align-items-center position-relative">
                    <img src="https://flagcdn.com/w20/id.png" alt="ID">
                    <select class="language-select form-select">
                        <option value="id">ID</option>
                        <option value="en">EN</option>
                    </select>
                    <i class="bi bi-caret-down-fill position-absolute end-0 top-50 translate-middle-y me-2 text-white"></i>
                </div>

                <!-- Buttons -->
                <button class="btn btn-outline-custom">Login</button>
                <button class="btn btn-green-custom">
                    <i class="bi bi-whatsapp"></i> Hubungi Kami
                </button>
            </div>
        </div>
    </div>
  </nav>

  <main class="main" style="background-color:#F3F4F6">
    @yield('content')

    {{-- Blog Section --}}
    @if (!Request::is('about') && !Request::is('contact'))
        <section id="blog" class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="icon-rounded">● Blog</div>
                        <h2 class="fw-semibold mt-2" style="font-size: 32px">Artikel Terbaru</h2>
                        <p style="font-size: 16px">Jelajahi blog kami dan temukan inspirasi arsitektur, tren desain, dan masih banyak lagi</p>
                        <a class="btn-outline-green flex justify-content-around fw-medium" style="max-width: 180px;margin:auto;font-size: 12px; text-decoration:none">
                            Lihat Semua Artikel <i class="bi bi-arrow-up-right" style="font-weight: bold;"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="swiper article-swiper">
                    <div class="swiper-wrapper">
                        @foreach ([1,2,3] as $num)
                            <div class="swiper-slide">
                                <div class="card article-card">
                                    <div class="ps-2 pt-2 pe-2">
                                        <img src="assets/img/article/{{ $num }}-article.png" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                    <div class="d-flex">
                                        <div class="px-2 py-1 me-1 mb-2" style="border-radius: 6px;background-color:#F3F4F6; font-size:10px"><span class="fw-medium">11 Nov 2024</span></div>
                                        <div class="px-2 py-1 mb-2" style="border-radius: 6px;background-color:#DEF7EC; font-size:10px; color:#03543F"><span class="fw-medium">Design Berkelanjutan</span></div>
                                    </div>
                                    <h6 class="card-title fw-semibold truncate-2" style="font-size: 18px">Pentingnya Perencanaan Konstruksi yang Tepat untuk Meminimalkan Risiko Keterlambatan</h6>
                                    <p class="card-text text-truncate" style="font-size: 14px">Perencanaan yang matang dapat mengidentifikasi potensi masalah sejak awal, menghindari keterlambatan dan biaya tak terduga.</p>
                                    <a class="btn-outline-gray flex justify-content-around fw-medium" style="max-width: 120px;font-size: 12px; text-decoration:none">
                                        <i class="bi bi-arrow-up-right" style="font-weight: bold;"></i> Baca Artikel
                                    </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- Consultant Section --}}
    <section id="consultant" class="pt-4" style="margin-bottom: -80px;">
        <div class="container">
            <div class="card consultant-card text-bg-dark">
                <img src="assets/img/background/consultant-background.png" class="card-img h-100" alt="...">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h3 class="card-title mb-3">Mulai Konsultasi dengan Tim Kami Sekarang</h3>
                  <div class="flex ">
                    <a class="consultant-btn-fill me-3">
                        <i class="bi bi-whatsapp"></i> Hubungi Kami
                    </a>
                    <a class="consultant-btn-outline">
                        Kontak Kami <i class="bi bi-arrow-up-right" style="font-weight: bold;"></i>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer rounded-top-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 flex flex-column justify-content-center">
                    <img src="assets/img/logo-white.png" alt="Rinca Studio Logo" class="footer-logo">
                    <p class="fw-light">Solusi Terbaik untuk Perencanaan dan Perizinan Bangunan Anda</p>
                </div>
                
                <div class="col-md-2 mb-4">
                    <h5 class="title ms-md-5">Halaman</h5>
                    <ul class="footer-links ms-md-5">
                        <li><a href="#" class="fw-light">Home</a></li>
                        <li><a href="#" class="fw-light">RIKSA</a></li>
                        <li><a href="#" class="fw-light">Tentang Kami</a></li>
                        <li><a href="#" class="fw-light">Proyek</a></li>
                        <li><a href="#" class="fw-light">Kontak</a></li>
                        <li><a href="#" class="fw-light">Blog</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3 mb-4">
                    <h5 class="title ms-md-5">Kontak Kami</h5>
                    <ul class="footer-links ms-md-5">
                        <li>
                            <i class="bi bi-whatsapp footer-social-icon"></i>
                            <a href="tel:0813-2825-6653" class="fw-light">0813-2825-6653</a>
                        </li>
                        <li>
                            <i class="bi bi-envelope footer-social-icon"></i>
                            <a href="mailto:rinca.studio@gmail.com" class="fw-light">rinca.studio@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-2 mb-4">
                    <h5 class="title">Sosial Media</h5>
                    <ul class="footer-links">
                        <li>
                            <i class="bi bi-instagram footer-social-icon"></i>
                            <a href="" class="fw-light">rinca_studio</a>
                        </li>
                        <li>
                            <i class="bi bi-linkedin footer-social-icon"></i>
                            <a href="" class="fw-light">Rinca Studio</a>
                        </li>
                        <li>
                            <i class="bi bi-facebook footer-social-icon"></i>
                            <a href="" class="fw-light">Rinca Studio</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-2 mb-4">
                    <h5 class="title">Alamat</h5>
                    <ul class="footer-links">
                        <li>
                            <a class="fw-light">Jl. Nangka (Rafika Village 2 No. B8), Kel. Pasir Putih, Kecamatan Sawangan, Kota Depok, Jawa Barat</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 text-center copyright fw-light" style="font-size: 13px">
                    Copyright © 2024 PT Rinca Cipta Karya. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
  </main>

@stack('before-script')
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "6281328256653", // WhatsApp number
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
    $(".navbar-toggler").click(function () {
      $(".navbar").toggleClass("bg-blur");
    });

    const swiper = new Swiper(".article-swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        allowTouchMove: true,
        breakpoints: {
            768: { slidesPerView: 1 },
            1024: { slidesPerView: 3 }
        }
    });

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
