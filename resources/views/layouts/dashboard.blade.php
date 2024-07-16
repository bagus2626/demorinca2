<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT RINCA KARYA CIPTA</title>
  <meta content="konsultan perencanaan arsitek dan pengurusan perizinan bangunan gedung yang sudah memiliki lisensi." name="description">
  <meta content="Konsultan perizinan bangunan" name="keywords">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('before-style')
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="{{ '/assets/css/main.css' }}" rel="stylesheet">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @stack('after-style')
</head>
<body class="index-page">
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h3 class="sitename">PT Rinca Karya Cipta</h3>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('dashboard.homepage') }}#hero" class="active">Home</a></li>
          <li><a href="{{ route('dashboard.tracking') }}">Tracking</a></li>
          <li><a href="{{ route('dashboard.homepage') }}#about">About</a></li>
          <li><a href="{{ route('dashboard.homepage') }}#portfolio">Project</a></li>
          <li><a href="{{ route('dashboard.homepage') }}#contact">Contact</a></li>
          @guest
            <li><a href="{{ route('page-login') }}">Signin</a></li>
          @endguest
          @auth
            <li>
                <form action="{{ route('logout') }}" method="post">
                @csrf
                    <button type="submit" class="nav-link d-inline-block text-light border-0">Logout</button>
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
    <section id="contact" class="contact section">
        <div class="container section-title"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
            <h2>Hubungi Kami</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap iframe-container"  data-aos="zoom-in" data-aos-delay="100" data-aos-duration="800">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.726493099638!2d106.78374157441282!3d-6.429172562870289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e969ec75ef31%3A0x15233b52721e5447!2sRafika%20village%202!5e0!3m2!1sid!2sid!4v1720713300480!5m2!1sid!2sid" width="400" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row">
                    <div class="col-md-12"  data-aos="fade-left" data-aos-delay="100" data-aos-duration="800">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl Nangka (Rafika Village 2 No.B8), Kel. Pasir Putih, Kec. Sawangan, Kota Depok</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"  data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                        <div class="info-item d-flex">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telpon</h3>
                                <p>+62856-1652-206</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"  data-aos="fade-left" data-aos-delay="300" data-aos-duration="800">
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>info@rincakonsultan.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12"  data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                        <h4>Sosial Media</h4>
                        <div class="social-links d-flex">
                          <a target="_blank" href="https://api.whatsapp.com/send/?phone=628561652206" ><i class="bi bi-whatsapp"></i></a>
                          <a target="_blank" href="mailto:contact@rincakonsultan.com" ><i class="bi bi-envelope ms-4"></i></a>
                          <a target="_blank" href="https://www.instagram.com/rincaciptakonsultan/" ><i class="bi bi-instagram ms-4"></i></a>
                        </div>
                      </div>
                </div>
                </form>
            </div>
                <head>
                    <title>Visitor Statistics</title>
                    <style>
                        .statistics-box {
                            background-color: #3cb371;
                            color: white;
                            padding: 20px;
                            border-radius: 10px;
                            width: 250px;
                        }
                        .statistics-box .stat-item {
                            margin-bottom: 10px;
                        }
                        .statistics-box .stat-item span {
                            display: block;
                            font-size: 20px;
                        }
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        th, td {
                            border: 1px solid #ddd;
                            padding: 8px;
                        }
                        th {
                            background-color: #f2f2f2;
                        }
                    </style>
                </head>
                <div class="statistics-box">
                    <div class="stat-item">
                        <span>👤 Users Today :</span> {{ $visitorsToday }}
                    </div>
                    <div class="stat-item">
                        <span>👥 Users Last 30 days :</span> {{ $visitorsLast30Days }}
                    </div>
                    <div class="stat-item">
                        <span>📅 Views Today :</span> {{ $viewsToday }}
                    </div>
                    <div class="stat-item">
                        <span>👁️ Views Last 30 days :</span> {{ $viewsLast30Days }}
                    </div>
                    <div class="stat-item">
                        <span>📊 Total views :</span> {{ $totalViews }}
                    </div>
                </div>
        </div>
        </div>
    </section>
  </main>



@stack('before-script')
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
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
                        <div class="tracking-result">
                            <i class="${response.data.tanggal ? `bi bi-check2-circle text-success` : `bi-dash-circle text-danger`}"></i> Mulai - ${response.data.tanggal ? formatDate(response.data.tanggal) : `Belum ada tanggal mulai`}
                        </div>
                        <div class="tracking-result">
                            <i class="${response.data.tanggal_estimasi ? `bi bi-check2-circle text-success` : `bi-dash-circle text-danger`}"></i> Rencana Selesai - ${response.data.tanggal_estimasi ? formatDate(response.data.tanggal_estimasi) : `Belum ada tanggal rencana selesai`}
                        </div>
                        <div class="tracking-result ${response.tanggal_selesai ? '' : 'text-danger'}">
                            <i class="${response.data.tanggal_selesai ? `bi bi-check2-circle text-success` : `bi-dash-circle text-danger`}"></i> Selesai - ${response.data.tanggal_selesai ? formatDate(response.data.tanggal_selesai) : `Belum selesai`}
                        </div>
                    `;
                }else {
                    html = `
                        <div class="tracking-result text-center text-danger">
                            <i class="bi bi-dash-circle"></i> Tidak ditemukan. Pastikan nomor dokumen sudah benar
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
  </script>
  @stack('after-script')
</body>
</html>
