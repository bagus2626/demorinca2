<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Store - Your Best Marketplace</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ 'admin/style/main.css' }}" rel="stylesheet" />
  </head>

  <body>

    <!-- Page Content -->
    <div class="page-content page-auth">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
          <div class="row align-items-center row-login">
            <div class="col-lg-6 text-center d-sm-none d-md-block">
              <img
                src=""
                alt=""
                class="w-50 mb-4 mb-lg-none"
              />
            </div>
            <div class="col-lg-5">
              <h2>
                PT RINCA KARYA CIPTA
              </h2>
              <form class="mt-3" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label>Nama</label>
                  <input
                    type="text"
                    class="form-control w-75 @error('name') is-invalid @enderror"
                    name="name"
                    aria-describedby="emailHelp"
                  />
                   @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    type="email"
                    class="form-control w-75  @error('email') is-invalid @enderror"
                    name="email"
                    aria-describedby="emailHelp"
                  />
                   @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required />
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"
                  class="btn btn-success btn-block w-75 mt-4"
                >
                  Registrasi
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="/script/navbar-scroll.js"></script>
  </body>
</html>
