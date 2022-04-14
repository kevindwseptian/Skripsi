<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>History</title>
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
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany - v4.7.0
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>

    form > div{
        margin:15px 0px;
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

                      <li class="dropdown"><a style="padding-right: 30px;" href="#"><span>{{Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a class="nav-link"style="padding-right: 30px;" href="{{ route('logout') }}"
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
                        <img src="{{ asset('dashboard/assets/img/clients/pertamina.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('dashboard/assets/img/clients/pertaminagas.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('dashboard/assets/img/clients/brightgas.jpg') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-3 align-items-center" data-aos="zoom-in" data-aos-delay="400">
                        <img src="{{ asset('dashboard/assets/img/clients/elpiji.png') }}" style="width:25% !important;"
                            class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Table Section ======= -->
        <div class="register-box">
            <div class="login-logo">

            </div>
            <!-- /.login-logo -->

            <div class="login-box-body">
                <p class="login-box-msg">Transaksi</p>

                <div class="row">
                    <div class="col-md-12">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No Telepon</th>
                                    <th>Gas 3kg</th>
                                    <th>Gas 12kg</th>
                                    <th>Gas 50Kg</th>
                                    <th>Tanggal kirim</th>
                                    <th>Alamat</th>
                                    <th>Total Pembayaran</th>
                                    <th>Pembayaran</th>
                                    <th>Status</th>
                                    <th>Action</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $ord => $order)
                                <tr>
                                    <td>{{$order->notelp}}</td>
                                    <td>{{$order->gas3kg}}</td>
                                    <td>{{$order->gas12kg}}</td>
                                    <td>{{$order->gas50kg}}</td>
                                    <td>{{$order->tglkirim}}</td>
                                    <td>{{$order->alamat}}</td>

                                    @if (($order->gas3kg+$order->gas12kg+$order->gas50kg)>=10)
                                    <td>{{
                                    "Rp. ".number_format((($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))-((($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))*0.1) )}}
                                    </td>
                                    @else
                                    <td>{{ "Rp. ".number_format(($order->gas3kg * 17000)+($order->gas12kg * 100000)+($order->gas50kg * 700000))}}</td>
                                    @endif

                                    <td>{{$order->pembayaran}}</td>
                                    {{-- <td>{{$order->status}}</td> --}}
                                    @if ($order->status=='A')
                                    <td>
                                        Paid
                                    </td>
                                    @elseif ($order->status=='P')
                                    <td>
                                        Pending
                                    </td>
                                    @else
                                        <td>
                                            Cancel
                                        </td>
                                    @endif
                                    <td>
                                        <div style="display: flex; flex-direction: row; gap: 10px;">
                                            @if ($order->status=='P')
                                            <a href="{{route('pemesanan.edit', $order->id)}}"
                                                class="btn btn-sm btn-warning">Update</a>
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('pemesanan.destroy', $order->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('dashboard/assets/js/main.js') }}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });

    </script>

</body>

</html>
