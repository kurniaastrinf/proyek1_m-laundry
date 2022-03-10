<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('Dashboard/assets/img/logo_icon.ico') }}" type="image/x-icon" />
    <title>M-Laundry | Pelanggan</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('Customer-Page/assets/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Customer-Page/assets/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- Jquery UI -->
    <link type="text/css" href="{{ asset('Customer-Page/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('Customer-Page/assets/css/argon-design-system.min.css') }}" rel="stylesheet">
    <!-- Main CSS-->
    <link type="text/css" href="{{ asset('Customer-Page/assets/css/style.css') }}" rel="stylesheet">
    <!-- Optional Plugins-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js">
    </script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
        type="text/css">
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    @livewireStyles
</head>

<body>
    <header class="header clearfix">
        <div class="top-bar d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-6 text-left">
                        <ul class="top-links contact-info">
                            <li><i class="far fa-envelope text-danger"></i> <a href="#">contact@example.com</a></li>
                            <li><i class="fab fa-whatsapp text-danger"></i> +62 87777310300</li>
                        </ul>
                    </div>
                    <div class="col-6 text-right">
                        <ul class="top-links account-links">
                            <li><i class="fas fa-user text-danger"></i> <a
                                    href="{{ route('pelanggan.info.akun') }}" class="text-danger">My Account</a></li>
                            <li><i class="fa fa-power-off text-danger"></i> <a href="{{route('logout')}}" class="text-danger">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12 col-sm-6">
                        <a class="navbar-brand mr-lg-5" href="{{ route('pelanggan') }}">
                            {{-- <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">IndoMarket</span> --}}
                            <img src="{{ asset('Customer-Page/assets/img/logo_m_laundry.png') }}"
                                style="width: 70%; height: 70%;" alt="" srcset="" />
                        </a>
                    </div>
                    <div class="col-lg-7 col-12 col-sm-6">
                    </div>
                    <div class="col-lg-2 col-12 col-sm-6">
                        <div class="right-icons pull-right d-none d-lg-block">
                            <div class="single-icon wishlist">
                                <a href="#"><i class="far fa-comment fa-2x text-danger"></i></a>
                                <span class="badge badge-default">5</span>
                            </div>
                            <div class="single-icon shopping-cart">
                                <a href="#"><i class="fa fa-shopping-cart fa-2x text-danger"></i></a>
                                <span class="badge badge-default">4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>
        @yield('content')
    </div>

    <footer class="footer bg-dark">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo-footer">
                                <!-- <i class="fa fa-shopping-bag fa-3x"></i> <span class="logo">IndoMarket</span> -->
                                <img src="{{ asset('Customer-Page/assets/img/logo_m_laundry.png') }}"
                                    style="width: 50%" alt="" srcset="" />
                            </div>
                            <p class="text">
                                M-Laundry mempunyai outlet dan workshop di Desa Segeran Lor,
                                kami memberikan jasa antar jemput gratis dan harga terjangkau.
                                Pelayanan dan kepuasan pelanggan adalah merupakan janji dan
                                standard kami.
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Informasi</h4>
                            <ul>
                                <li>
                                    <a href="#">Faq</a>
                                </li>
                                <li>
                                    <a href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                                <li>
                                    <a href="#">Help</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Layanan</h4>
                            <ul>
                                <li>
                                    <a href="#">Metode Pembayaran</a>
                                </li>
                                <li>
                                    <a href="#">Pengembalian Dana</a>
                                </li>
                                <li>
                                    <a href="#">Jasa Antar - Jemput</a>
                                </li>
                                <li>
                                    <a href="#">Perlindungan Privasi</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Hubungi kami di</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>Gg. Candi, Segeran, Juntinyuat</li>
                                    <li>Kabupaten Indramayu</li>
                                    <li>Jawa Barat 45282</li>
                                    <li>+62 87777310300</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-flickr"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Core -->
    <script src="{{ asset('Customer-Page/assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('Customer-Page/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('Customer-Page/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Customer-Page/assets/js/core/jquery-ui.min.js') }}"></script>
    <!-- Optional plugins -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Argon JS -->
    <script src="{{ asset('Customer-Page/assets/js/argon-design-system.js') }}"></script>
    <!-- Main JS-->
    <script src="{{ asset('Customer-Page/assets/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
    <script type="text/javascript">
        window.livewire.on('closeModal', () => {
            $('#exampleModal').modal('hide');
        });

    </script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.js"></script>

    {{-- @stack('sripts') --}}
</body>

</html>
