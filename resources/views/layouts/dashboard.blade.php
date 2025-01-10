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
    }

    /* Buttons */
    .btn-contact {
        border: none;
        padding: 8px 16px;
        color: white;
        border-radius: 5px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .btn-green-custom {
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

    /* Responsive Styling */
    @media (min-width: 768px) {
        .navbar {
            padding: 1rem 2rem;
            backdrop-filter: blur(10px);
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
                <li class="nav-item"><a class="nav-link" href="#">Proyek</a></li>
                <li class="nav-item"><a class="nav-link" href="#">RIKSA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang Kami</a></li>
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

  <main class="main">
    @yield('content')
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
