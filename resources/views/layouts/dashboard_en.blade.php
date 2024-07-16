<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT RINCA CIPTA KARYA</title>
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
  {{-- bootstrap icons --}}
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  {{-- boxicon icons --}}
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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
      <a href="/" class="logo d-flex align-items-center me-auto">
        <h3 class="sitename">PT Rinca Cipta Karya</h3>
      </a>
       <nav id="navmenu" class="navmenu">
        <ul>
          <li class="dropdown"><a href="#"><span>Language</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('locale/en') }}">English</a></li>
              <li><a href="{{ url('locale/id') }}">Indonesian</a></li>
            </ul>
          </li>
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
         
            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Language
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item" href="{{ url('locale/en') }}">English</a></li>
                    <li><a class="dropdown-item" href="{{ url('locale/id') }}">Indonesian</a></li>
                </ul>
            </div> --}}

        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

      </nav>
    </div>
  </header>

  <main class="main">
    @yield('content')
   <section id="contact" class="contact section">
        <div class="container section-title">
          <h2>Kontak Kami</h2>
        </div>
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5">
              <div class="info-wrap">
                <div class="info-item d-flex">
                  <div>
                    <h2>Dapatkan Penawaran</h2>
                    <h5>Terbaik dari kami</h5>
                  </div>
                </div>
                <div class="info-item d-flex">
                  <div>
                    <p>Biaya pengurusan SLF untuk bangunan dan disetiap wilayah berbeda-beda, Berikut beberapa faktor dalam penentuan harga pengurusan SLF</p>
                  </div>
                </div>
                <div class="info-item d-flex">
                  <ul>
                    <li>Bangunan rendah murah, bangunan tinggi mahal</li>
                    <li>Bangunan luasan kecil murah, bangunan luasan besar mahal</li>
                    <li>Bangunan baru murah, bangunan lama atau sudah tua mahal</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <div class="col-12">
                  <div id="alertForm" class="alert alert-success alert-dismissible fade show mt-2" role="alert" style="display: none">
                    Silahkan lengkapi semua data terlebih dahulu
                  </div>
                </div>
              </div>
                <div class="row gy-4 " id="form-contact">
                  <div class="col-md-6">
                    <label for="nama_pemohon" class="pb-2">Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" id="nama_pemohon" class="form-control" placeholder="Masukkan nama lengkap">
                  </div>
                  <div class="col-md-6">
                    <label for="nama_perusahaan" class="pb-2">Nama Perusahaan</label>
                    <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" placeholder="cth: PT RINCA CIPTA KARYA">
                  </div>
                  <div class="col-md-6">
                    <label for="nomor_handphone" class="pb-2">Nomor Telpon</label>
                    <input type="text" name="nomor_handphone" id="nomor_handphone" class="form-control" placeholder="cth: 08xxxxxxx">
                  </div>
                  <div class="col-md-6">
                    <label for="email" class="pb-2">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="cth: xxxx@gmail.com">
                  </div>
                  <div class="col-md-6">
                    <label for="luas_area" class="pb-2">Luas Area</label>
                    <input type="text" class="form-control" name="luas_area" id="luas_area" placeholder="cth: 40.000 M²">
                  </div>
                  <div class="col-md-6">
                    <label for="lokasi_perusahaan" class="pb-2">Lokasi Perusahaan</label>
                    <input type="text" class="form-control" name="lokasi_perusahaan" id="lokasi_perusahaan" placeholder="Masukkan alamat perusahaan">
                  </div>
                  <div class="col-md-12">
                    <label for="keterangan" class="pb-2">Keterangan <span style="font-size: 11px; color: red">( opsional )</span></label>
                    <textarea class="form-control" name="keterangan" rows="10" id="keterangan"></textarea>
                  </div>
                  <a href="#contact" onclick="submitOffer()" class="btn-send-message">
                    <div class="col-md-12 text-center ">
                        Kirim Penawaran
                    </div>
                  </a>
                </div>
                <div class="row gy-4 " id="form-success-contact" style="display: none">
                 <div class="col-12 text-center">
                  <h3>PT RINCA CIPTA KARYA</h3>
                 </div>
                 <div class="col-12 text-center">
                  <h6>Terima kasih telah mengirim penawaran. Silahkan menunggu untuk balasan dari kami</h6>
                 </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    <footer id="footer" class="footer">
        {{-- <div class="footer-newsletter">
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-6">
                <head>
                    <title>Visitor Statistics</title>
                    <style>
                        .statistics-box {
                            background-color: #3cb371;
                            color: white;
                            padding: 20px;
                            border-radius: 10px;
                            /* width: 250px; */
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
          </div>
        </div> --}}
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
              <h4>Layanan Kami</h4>
              <ul>
                <li><i class="bi bi-chevron-right"></i>Perizinan Perusahaan</li>
                <li><i class="bi bi-chevron-right"></i>Perizinan Bangunan Gedung</li>
                <li><i class="bi bi-chevron-right"></i>Perencanaan Arsitek Bangunan</li>
                <li><i class="bi bi-chevron-right"></i>Gedung</li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-12">
              <h4>Kontak</h4>
              <a target="_blank" href="https://maps.app.goo.gl/xKgfHjDEnMaLwiFD7" class="text-black">Jl. Nangka (Rafika Village 2 No. B8), Kel. Pasir 
                Putih, Kec. Sawangan, Kota Depok, Jawa Barat</a>
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
                        ${response.data.status !== 'Selesai' ? `
                            <div class="tracking-result text-warning">
                                <i class="bx bx-loader bx-spin text-warning"></i> Prosess
                            </div>
                        ` : ''}
                        <div class="tracking-result">
                            <i class="${response.data.tanggal ? `bi bi-check2-circle text-success` : `bi-dash-circle text-danger`}"></i> Mulai ( ${response.data.tanggal ? formatDate(response.data.tanggal) : `Belum ada tanggal mulai`})  -  <i class="${response.data.tanggal_estimasi }"></i> Rencana Selesai (${response.data.tanggal_estimasi ? formatDate(response.data.tanggal_estimasi) : `Belum ada tanggal rencana selesai`})
                        </div>
                        <div class="tracking-result">
                            <i class="bi bi-check2-circle"></i> Nomor Registrasi : ${response.data.no_registrasi_sistem_simbg ?? '-'}
                        </div>
                        ${response.data.status !== 'Selesai' ? `
                            <div class="tracking-result text-success">
                                <i class="bi bi-chat-right-text text-success"></i> ${response.data.keterangan ?? '-'}
                            </div>
                        ` : `
                            <div class="tracking-result">
                                <i class="bi bi-check2-circle text-success"></i> Selesai - ${response.data.tanggal_selesai ? formatDate(response.data.tanggal_selesai) : ``}
                            </div>
                        `}
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
          console.log(response)
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
