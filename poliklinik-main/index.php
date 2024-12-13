<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="css/style.css">

    

<style>
        
        /********** Template CSS **********/
        :root {
            --primary: #0463FA;
            --light: #EFF5FF;
            --dark: #1B2C51;
        }
        
        .fw-medium {
            font-weight: 500 !important;
        }
        
        .fw-bold {
            font-weight: 700 !important;
        }
        
        .fw-black {
            font-weight: 900 !important;
        }
        
        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }
        
        
        /*** Spinner ***/
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }
        
        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }
        
        
        /*** Button ***/
        .btn {
            font-weight: 500;
            transition: .5s;
        }
        
        .btn.btn-primary,
        .btn.btn-secondary {
            color: #FFFFFF;
        }
        
        .btn-square {
            width: 38px;
            height: 38px;
        }
        
        .btn-sm-square {
            width: 32px;
            height: 32px;
        }
        
        .btn-lg-square {
            width: 48px;
            height: 48px;
        }
        
        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: normal;
        }
        
        
        /*** Header ***/
        .header-carousel .owl-carousel-text {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 3rem;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 0 0 30px rgba(0, 0, 0, .1);
        }
        
        .header-carousel .owl-nav {
            position: absolute;
            width: 200px;
            height: 45px;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
        }
        
        .header-carousel .owl-nav .owl-prev,
        .header-carousel .owl-nav .owl-next {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFFFFF;
            background: transparent;
            border: 1px solid #FFFFFF;
            border-radius: 45px;
            font-size: 22px;
            transition: .5s;
        }
        
        .header-carousel .owl-nav .owl-prev:hover,
        .header-carousel .owl-nav .owl-next:hover {
            background: var(--primary);
            border-color: var(--primary);
        }
        
        .header-carousel .owl-dots {
            position: absolute;
            height: 45px;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .header-carousel .owl-dot {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            width: 15px;
            height: 15px;
            background: transparent;
            border: 1px solid #FFFFFF;
            border-radius: 15px;
            transition: .5s;
        }
        
        .header-carousel .owl-dot::after {
            position: absolute;
            content: "";
            width: 5px;
            height: 5px;
            top: 4px;
            left: 4px;
            background: #FFFFFF;
            border-radius: 5px;
        }
        
        .header-carousel .owl-dot.active {
            background: var(--primary);
            border-color: var(--primary);
        }
        
        .page-header {
            background: url(../img/header-page.jpg) top center no-repeat;
            background-size: cover;
            text-shadow: 0 0 30px rgba(0, 0, 0, .1);
        }
        
        .breadcrumb-item + .breadcrumb-item::before {
            color: var(--light);
        }
        
        
        /*** Service ***/
        .service-item {
            transition: .5s;
        }
        
        .service-item:hover {
            margin-top: -10px;
            box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .08);
        }
        
        .service-item .btn {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            background: #FFFFFF;
            border-radius: 40px;
            white-space: nowrap;
            overflow: hidden;
            transition: .5s;
        }
        
        .service-item:hover .btn {
            width: 140px;
        }
        
        @media (min-width: 1400px) {
            .feature-text  {
                padding-left: calc(((100% - 1320px) / 2) + .75rem);
            }
        }
        
        
        /*** Testimonial ***/
        .testimonial-carousel::before {
            position: absolute;
            content: "";
            top: 0;
            left: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 1;
        }
        
        .testimonial-carousel::after {
            position: absolute;
            content: "";
            top: 0;
            right: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
            z-index: 1;
        }
        
        @media (min-width: 768px) {
            .testimonial-carousel::before,
            .testimonial-carousel::after {
                width: 200px;
            }
        }
        
        @media (min-width: 992px) {
            .testimonial-carousel::before,
            .testimonial-carousel::after {
                width: 300px;
            }
        }
        
        .testimonial-carousel .owl-item .testimonial-text {
            background: var(--light);
            transform: scale(.8);
            transition: .5s;
        }
        
        .testimonial-carousel .owl-item.center .testimonial-text {
            background: var(--primary);
            transform: scale(1);
        }
        
        .testimonial-carousel .owl-item .testimonial-text *,
        .testimonial-carousel .owl-item .testimonial-item img {
            transition: .5s;
        }
        
        .testimonial-carousel .owl-item.center .testimonial-text * {
            color: var(--light) !important;
        }
        
        .testimonial-carousel .owl-item.center .testimonial-item img {
            background: var(--primary) !important;
        } 
        
        .testimonial-carousel .owl-nav {
            position: absolute;
            width: 350px;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            opacity: 0;
            transition: .5s;
            z-index: 1;
        }
        
        .testimonial-carousel:hover .owl-nav {
            width: 300px;
            opacity: 1;
        }
        
        .testimonial-carousel .owl-nav .owl-prev,
        .testimonial-carousel .owl-nav .owl-next {
            position: relative;
            color: var(--primary);
            font-size: 45px;
            transition: .5s;
        }
        
        .testimonial-carousel .owl-nav .owl-prev:hover,
        .testimonial-carousel .owl-nav .owl-next:hover {
            color: var(--dark);
        }

        
        
            .btn-custom2 {
                display: inline-flex;
                align-items: center;
                padding: 10px 20px;
                background-color: #28a745; /* Warna latar hijau awal */
                color: white; /* Warna teks awal */
                border: none;
                border-radius: 5px;
                text-decoration: none;
                font-size: 16px;
                font-weight: bold;
                transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;
            }
        
            .btn-custom2:hover {
                background-color: #218838; /* Warna latar hijau yang lebih gelap saat hover */
                color: #f8f9fa; /* Warna teks baru saat hover */
                transform: scale(1.05);
            }
        
            .btn-custom2 i {
                margin-right: 10px;
            }
        
            
        
            .btn-custom2:hover .text-primary {
                color: #f8f9fa !important; /* Warna ikon baru saat hover */
            }
        
            .btn-custom1 {
                display: inline-flex;
                align-items: center;
                padding: 10px 20px;
                background-color: #007bff; /* Warna latar biru awal */
                color: white; /* Warna teks awal */
                border: none;
                border-radius: 5px;
                text-decoration: none;
                font-size: 16px;
                font-weight: bold;
                transition: background-color 0.3s ease, transform 0.3s ease, color 0.3s ease;
            }
        
            .btn-custom1:hover {
                background-color: #0056b3; /* Warna latar biru yang lebih gelap saat hover */
                color: #f8f9fa; /* Warna teks baru saat hover */
                transform: scale(1.05);
            }
        
            .btn-custom1 i {
                margin-right: 10px;
            }
        
            .btn-custom1:hover .text-success {
                color: #f8f9fa !important; /* Warna ikon baru saat hover */
            }
        
        
            </style>
</head>

<body class="hold-transition login-page">
<!-- Header Start -->
<div class="container-fluid header bg-primary p-0 mb-5">
    <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-4 text-white mb-5">Kesehatan yang baik adalah akar dari Kebahagiaan</h1>
            <div class="row g-4">
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">4</h2>
                        <p class="text-light mb-0">Dokter Ahli</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">4</h2>
                        <p class="text-light mb-0">Total Obat</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-start border-light ps-4">
                        <h2 class="text-white mb-1" data-toggle="counter-up">7</h2>
                        <p class="text-light mb-0">Total Pasien</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="assets/images/gedung1.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Poliklinik</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="assets/images/gedung2.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Poliklinik</h1>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="assets/images/gedung1.jpg" alt="">
                    <div class="owl-carousel-text">
                        <h1 class="display-1 text-white mb-0">Poliklinik</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Layanan Kesehatan</p>
            <h1>Login terlebih dahulu (^_^)</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <i class="fas fa-user-injured fa-fw mb-3 text-primary" style="font-size: 34px;"></i>
                    <h4 class="mb-3">Pasien</h4>
                    <p class="mb-4">Untuk mendapatkan layanan kesehatan dari Udinus Poliklinik, Pasien login terlebih dahulu</p>
                    <a class="btn-custom1" href="loginUser.php"><i class="fa fa-sign-in-alt text-success me-3"></i>Masuk</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded h-100 p-5">
                    <i class="fas fa-user-md fa-fw mb-3 text-success" style="font-size: 34px;"></i>
                    <h4 class="mb-3">Dokter</h4>
                    <p class="mb-4">Untuk memulai melayani pasien di Udinus Poliklinik, Dokter silahkan login terlebih dahulu</p>
                    <a class="btn-custom2" href="login.php"><i class="fa fa-sign-in-alt text-primary me-3"></i>Masuk</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Testimoni Pasien</p>
            <h1>Apa yang pasien rasakan!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/images/testimoni1.png" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Poliklinik Udinus, Berobat semakin mudah</p>
                    <h5 class="mb-1">Manarin</h5>
                    <span class="fst-italic">Semarang</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/images/testimoni2.png" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Membantu saya mengatasi masalah kesehatan saya :)</p>
                    <h5 class="mb-1">Nujanana</h5>
                    <span class="fst-italic">Semarang</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="assets/images/testimoni3.png" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Berobat di sini pelayanan sangat ramah</p>
                    <h5 class="mb-1">Branded</h5>
                    <span class="fst-italic">Semarang</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
