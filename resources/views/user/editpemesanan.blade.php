<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Pemesanan</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('dashboard/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('dashboard/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('dashboard/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v4.7.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        form>div {
            margin: 15px 0px;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h1 class="text-light"><a href="index.html"><span>PTDwiOLA</span></a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
                </div>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a href="/user/#hero">Home</a></li>
                        <li class="dropdown"><a href="#"><span>Pemesanan</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ route('pemesanan.create') }}">Order</a></li>
                                <li><a href="{{ route('pemesanan.index') }}">Transaksi</a></li>
                            </ul>
                        </li>

                        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                        <li class="dropdown"><a style="padding-right: 30px;"
                                href="#"><span>{{Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="nav-link" style="padding-right: 30px;" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
                        </li>


                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>

            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->


    <main id="main" style="margin: 80px">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="100">
                        <img src="{{ asset('dashboard/assets/img/clients/pertamina.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('dashboard/assets/img/clients/pertaminagas.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('dashboard/assets/img/clients/brightgas.jpg') }}" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('dashboard/assets/img/clients/elpiji.png') }}" style="width:25% !important;"
                            class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Portfolio Section ======= -->
        <div class="register-box">
            <div class="login-logo">

            </div>
            <!-- /.login-logo -->
            @if ($errors->has('email'))
            <div class="alert alert-danger">
                <strong>Invalid e-mail or password</strong>
            </div>
            @endif
            <div class="login-box-body">
                <p class="login-box-msg">Order Gas</p>

                <div class="row">
                    <div class="col-md-12">
                        @foreach ($pemesanan as $pemesanan)
                        <form method="POST" action="{{ route('pemesanan.update', $pemesanan->id) }}">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        {{-- <input placeholder="Jumlah Gas 3Kg" id="jumlahgas3kg"
                                            class="form-control @error('jumlahgas3kg') is-invalid @enderror"
                                            name="jumlahgas3kg" value="{{ old('jumlahgas3kg') }}" required
                                            autocomplete="jumlahgas3kg" autofocus type="number"> --}}
                                            <input placeholder="Jumlah Gas 3Kg" id="jumlahgas3kg"
                                            class="form-control @error('jumlahgas3kg') is-invalid @enderror"
                                            name="jumlahgas3kg" required min="0"
                                            autocomplete="jumlahgas3kg" autofocus type="number" min="0" value="{{$pemesanan->gas3kg}}">

                                        @error('jumlah gas 3kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        <input placeholder="Rp. 17.000" id="harga3kg"
                                            class="form-control @error('harga3kg') is-invalid @enderror" name="harga3kg"
                                            value="{{ old('harga3kg') }}" required autocomplete="harga3kg" readonly type="number">

                                        @error('Harga 3kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        {{-- <input placeholder="Jumlah Gas 12Kg" id="jumlahgas12kg"
                                            class="form-control @error('jumlahgas12kg') is-invalid @enderror"
                                            name="jumlahgas12kg" value="{{ old('jumlahgas12kg') }}" required
                                            autocomplete="jumlahgas12kg" autofocus type="number"> --}}
                                            <input placeholder="Jumlah Gas 12Kg" id="jumlahgas12kg"
                                            class="form-control @error('jumlahgas12kg') is-invalid @enderror"
                                            name="jumlahgas12kg"  required
                                            autocomplete="jumlahgas12kg" autofocus type="number" min="0" value="{{$pemesanan->gas12kg}}">

                                        @error('jumlah gas 12kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        <input placeholder="Rp. 100.000" id="harga3kg"
                                            class="form-control @error('harga12kg') is-invalid @enderror"
                                            name="harga12kg" value="{{ old('harga12kg') }}" required
                                            autocomplete="harga12kg" readonly>

                                        @error('Harga 12kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        {{-- <input placeholder="Jumlah Gas 50Kg" id="jumlahgas50kg"
                                            class="form-control @error('jumlahgas50kg') is-invalid @enderror"
                                            name="jumlahgas50kg" value="{{ old('jumlahgas12kg') }}" required
                                            autocomplete="jumlahgas50kg" autofocus type="number"> --}}
                                            <input placeholder="Jumlah Gas 50Kg" id="jumlahgas50kg"
                                            class="form-control @error('jumlahgas50kg') is-invalid @enderror"
                                            name="jumlahgas50kg"  required
                                            autocomplete="jumlahgas50kg" autofocus type="number" value="{{$pemesanan->gas50kg}}">

                                        @error('jumlah gas 50kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group has-feedback">
                                        <input placeholder="Rp. 700.000" id="harga50kg"
                                            class="form-control @error('harga50kg') is-invalid @enderror"




                                            name="harga50kg" value="{{ old('harga50kg') }}" required
                                            autocomplete="harga50kg" readonly>

                                        @error('Harga 50kg')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="form-group has-feedback">
                                <input id="grandtotal" class="form-control @error('') is-invalid @enderror"
                                    name="grandtotal" readonly>

                                @error('jumlah gas 50kg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback">
                                <label>Tgl Kirim</label>
                                <input type="date" placeholder="tglkirim" id="tglkirim"
                                    class="form-control @error('tglkirim') is-invalid @enderror" name="tglkirim"
                                    required autocomplete="tglkirim" autofocus value="{{$pemesanan->tglkirim}}">

                                @error('tanggl kirim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group has-feedback">
                                <select id="pembayaran" class="form-control @error('pembayaran') is-invalid @enderror"
                                    name="pembayaran" required autocomplete="pembayaran" autofocus>
                                    <option value="">Jenis Pembayaran</option>
                                    <option value="transfer" {{$pemesanan->pembayaran == 'transfer'  ? 'selected' : ''}}>Transfer</option>
                                    <option value="cod" {{$pemesanan->pembayaran == 'cod'  ? 'selected' : ''}}>COD</option>
                                </select>

                                @error('pembayaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            </select>

                    </div>

                    @endforeach
                    <div class="col-md-12">
                        <div class="row">


                            <!-- /.col -->
                            <div class="col-xs-12" style="float : left; margin-bottom:10px;">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Order </button>

                            </div>

                            <!-- /.col -->
                        </div>
                    </div>
                    </form>
                </div>


            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        </section><!-- End Portfolio Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>PT Dwi OLA</h3>
                        <p>
                            JL. Kapt A Rivai 79, Ilir Barat I<br>
                            Palembang, 30135<br>
                            Indonesia<br><br>
                            <strong>Phone:</strong> 62711-354777<br>
                            <strong>Email:</strong> ptdwiola@gmail..com<br>
                        </p>
                    </div>


                    <div class="container d-md-flex py-4">

                        <div class="me-md-auto text-center text-md-start">
                            <div class="copyright">
                                &copy; Copyright <strong><span>PT Dwi Ola</span></strong>. All Rights Reserved
                            </div>
                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            </div>
                        </div>

                    </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var gas3kg = 0;
            var gas12kg = 0;
            var gas50kg = 0;
            var grandtotal = 0;
            var discountedprice = 0;
            var discont = 10/100;



            $('#jumlahgas3kg, #jumlahgas12kg, #jumlahgas50kg').on('input',function(e){
                var gas3kgQty = 0;
                var gas12kgQty = 0;
                var gas50kgQty = 0;

                gas3kgQty = parseInt($('#jumlahgas3kg').val());
                gas12kgQty = parseInt($('#jumlahgas12kg').val());
                gas50kgQty = parseInt($('#jumlahgas50kg').val());

                if(($('#jumlahgas3kg').val()=="") || ($('#jumlahgas12kg').val()=="") || ($('#jumlahgas50kg').val()=="") ){
                    $("#grandtotal").val("");
                }else{
                    gas3kg = 17000*gas3kgQty;
                    gas12kg = 100000*gas12kgQty;
                    gas50kg = 700000*gas50kgQty;

                    if(gas3kgQty+gas12kgQty+gas50kgQty>=10){
                        discountedprice = grandtotal*discont;
                        grandtotal = (gas3kg+gas12kg+gas50kg)-discountedprice;
                        $("#grandtotal").val(grandtotal);
                    }else{
                        grandtotal = (gas3kg+gas12kg+gas50kg);

                        $("#grandtotal").val(grandtotal);
                    }
                }
            });

        });

    </script>

</body>

</html>
