<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>Online Cancer Hospital</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{asset('contents/website')}}/img/favicon.png" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('contents/admin')}}/plugin/toastr.min.css">
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/slick.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/lightgallery.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/animate.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/jQueryUi.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/textRotate.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/select2.min.css" />
    <link rel="stylesheet" href="{{asset('contents/website')}}/css/style.css" />
</head>

<body>

    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">

        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left">
                        <a class="st-site-branding" href="{{ url('/') }}"><img
                                src="{{asset('contents/website')}}/img/logo.png" alt="hospital"></a>
                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li><a href="#home" class="st-smooth-move">Home</a></li>
                                <li><a href="#about" class="st-smooth-move">About</a></li>
                                <li><a href="#department" class="st-smooth-move">Department</a></li>
                                <li><a href="#appointment" class="st-smooth-move">Patient Admit</a></li>
                                <li><a href="#doctors" class="st-smooth-move">Doctors</a></li>
                                <li><a href="#gallery" class="st-smooth-move">Gallery</a></li>
                                <li><a href="#contact" class="st-smooth-move">Contact</a></li>
                                <li class="menu-item-has-children"><a>Account</a>
                                    <ul>
                                        <li><a href="{{ route('login') }}" target="_blank">Admin</a></li>
                                        <li><a href="{{ route('doctor.login') }}" target="_blank">Doctor</a></li>
                                        <li><a href="{{ route('patient.login') }}" target="_blank">Patients</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <div class="row">
                    @foreach ($errors->all() as $error)

                    <div class="col-lg-3 col-md-3">
                        <li>{{ $error }}</li>
                    </div>

                    @endforeach
                </div>
            </ul>
        </div>
        @endif
    </header>

    <!-- End Header Section -->

    <div class="st-content">

        <!-- Start Hero Seciton -->
        <div class="st-hero-wrap st-gray-bg st-dynamic-bg overflow-hidden st-fixed-bg"
            data-src="{{asset('contents/website')}}/img/hero-bg.jpg">
            <div class="st-hero st-style1">
                <div class="container">
                    <div class="st-hero-text">
                        <div class="st-height-b40 st-height-lg-b40"></div>
                        <h1 class="st-hero-title cd-headline slide">
                            Take best quality <br>
                            treatment for
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Blood cancer.</b>
                                <b>Liver cancer.</b>
                                <b>Skin cancer. </b>
                                <b>Kidney cancer. </b>
                                <b>Lung cancer. </b>
                                <b>Brain cancer. </b>
                            </span>
                        </h1>
                        <div class="st-hero-subtitle">The art of medicine consists in amusing the patient while nature
                            cures the
                            disease. <br>
                            Treatment without prevention is simply unsustainable.</div>
                        <div class="st-hero-btn">
                            <a href="#appointment" class="st-btn st-style1 st-color1 st-smooth-move">Admitted</a>
                        </div>
                    </div>
                </div>
                <div class="st-hero-social-group">
                    <div class="container">
                        <ul class="st-social-btn st-style1 st-mp0">
                            <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp-square"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="st-slider st-style1 st-hero-slider1" id="home">
                <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800"
                    data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-hero-img">
                                <img src="{{asset('contents/website')}}/img/hero-img.png" alt="Hero img">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero-img">
                                <img src="{{asset('contents/website')}}/img/hero-img1.png" alt="Hero img">
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero-img">
                                <img src="{{asset('contents/website')}}/img/hero-img2.png" alt="Hero img">
                            </div>
                        </div>
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 container"></div>
                <!-- If dont need Pagination then add class .st-hidden -->
                <div class="swipe-arrow st-style1 st-hidden">
                    <!-- If dont need navigation then add class .st-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </div><!-- .st-slider -->
            <div class="st-hero-shape"><img src="{{asset('contents/website')}}/img/shape/hero-shape.png"
                    alt="hero shape"></div>
        </div>
        <!-- End Hero Seciton -->

        <!-- Start Feature Seciton -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="st-iconbox st-style1">
                            <div class="st-iconbox-icon st-purple-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    xml:space="preserve">
                                    <g>
                                        <path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433
                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377
                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396
                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764
                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938
                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73
                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38
                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472
                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03
                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7
                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396
                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371
                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849
                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118
                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095
                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498
                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096
                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001
                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073
                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348
                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884
                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619
                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541
                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541
                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662
                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795
                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049
                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644
                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652
                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512
                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089
                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396
                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236
                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z
                       M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938
                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115
                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278
                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691
                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505
                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503
                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784
                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404
                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636
                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824
                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104
                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722
                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56
                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059
                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947
                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534
                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045
                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499
                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797
                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z
                       M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325
                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343
                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189
                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733
                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2
                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617
                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5
                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039
                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615
                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704
                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053
                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574
                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001
                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835
                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8
                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" />
                                    </g>
                                </svg>
                            </div>
                            <h2 class="st-iconbox-title">Qualified Doctors</h2>
                            <div class="st-iconbox-text">Online Cancer Hospital aims to provide the highest possible level of care by qualified consultants from India, Singapore, USA, UK & quality hospitals in the Middle East.</div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="st-iconbox st-style1">
                            <div class="st-iconbox-icon st-green-box">

                                <svg enable-background="new 0 0 511.988 511.988" viewBox="0 0 511.988 511.988"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m511.988 227.658c0-60.096-23.44-116.593-66.004-159.085-42.559-42.489-99.142-65.888-159.327-65.888-62.806 0-122.954 26.329-165.547 72.348-7.616-2.821-15.75-4.293-24.108-4.293-.001 0 .001 0 0 0-18.539 0-35.977 7.24-49.098 20.385-.274.275-.532.565-.772.87l-15.678 19.868c-14.987 18.993-25.114 41.58-29.285 65.318-4.207 23.943-2.269 48.627 5.605 71.384 5.707 16.494 12.887 29.151 21.342 37.622l193.83 194.143c6.704 6.717 16.109 12.686 27.956 17.74 17.668 7.539 36.431 11.233 55.167 11.232 31.195-.001 62.309-10.246 88.105-30.047l22.298-17.116c.348-.268.679-.558.989-.868 17.59-17.623 23.745-42.431 18.464-65.082 48.367-42.732 76.063-104.032 76.063-168.531zm-108.241 219.036-21.75 16.696c-35.571 27.305-82.795 33.545-123.246 16.285-9.479-4.044-16.763-8.578-21.65-13.474l-193.831-194.144c-6.301-6.313-11.885-16.418-16.596-30.032-13.829-39.97-6.173-83.997 20.48-117.773l15.301-19.391c9.295-9.111 21.541-14.121 34.546-14.121 13.19 0 25.599 5.155 34.941 14.514l32.021 32.081c18.41 18.444 18.41 48.454-.002 66.9l-35.863 35.951c-3.895 3.905-3.894 10.226.003 14.128l126.446 126.631c1.876 1.878 4.421 2.934 7.076 2.934h.003c2.656 0 5.202-1.058 7.077-2.938l35.86-35.948c8.919-8.936 20.767-13.857 33.36-13.857s24.44 4.921 33.36 13.857l32.021 32.081c19.135 19.17 19.282 50.268.443 69.62zm-15.287-112.803-3.021-3.026c-12.698-12.722-29.573-19.728-47.515-19.728-17.943 0-34.817 7.006-47.518 19.73l-28.786 28.857-112.313-112.479 28.812-28.883c25.359-25.407 26.159-66.243 2.401-92.624 27.711-28.735 66.034-45.095 106.137-45.095 81.209 0 147.276 65.95 147.276 147.014 0 40.189-16.496 78.547-45.473 106.234zm29.001 29.055-14.869-14.897c32.721-31.428 51.341-74.875 51.341-120.392 0-92.092-75.04-167.014-167.276-167.014-45.385 0-88.762 18.449-120.206 50.873l-20.353-20.391c-2.191-2.195-4.502-4.225-6.918-6.084 38.582-39.723 91.887-62.356 147.477-62.356 113.22 0 205.331 91.95 205.331 204.972 0 56.381-23.234 110.084-64.048 148.736-2.866-4.796-6.359-9.319-10.479-13.447z" />
                                        <path
                                            d="m355.669 228.279h-1.121c.121-21.045.184-43.537-.076-46.664-.586-7.056-4.823-12.807-10.796-14.65-5.923-1.828-12.211.471-16.822 6.152-4.979 6.136-27.961 47.742-34.886 60.347-1.702 3.098-1.642 6.864.158 9.907 1.8 3.042 5.072 4.908 8.606 4.908h33.681c-.041 5.609-.084 10.986-.125 15.844-.047 5.523 4.391 10.038 9.914 10.085.029.001.059.001.088.001 5.482 0 9.951-4.421 9.997-9.914.026-2.999.074-8.807.128-16.016h1.253c5.523 0 10-4.477 10-10 .001-5.523-4.477-10-9.999-10zm-21.125 0h-16.853c6.251-11.227 12.345-21.998 16.965-29.943-.004 8.206-.048 18.878-.112 29.943z" />
                                        <path
                                            d="m277.116 256.998c-8.794.111-18.124.184-25.861.199 4.857-6.523 11.614-15.793 20.75-28.902 5.593-8.025 9.24-15.609 10.84-22.541.375-1.584.688-4.6.689-5.647.018-17.91-14.528-32.48-32.385-32.48-15.444 0-28.809 11.02-31.779 26.204-1.06 5.42 2.474 10.673 7.895 11.733 5.419 1.059 10.673-2.475 11.733-7.895 1.138-5.819 6.248-10.042 12.151-10.042 6.649 0 12.09 5.307 12.373 11.938l-.272 2.136c-1.091 4.338-3.664 9.436-7.654 15.16-13.857 19.883-22.126 30.756-26.567 36.598-5.489 7.217-7.994 10.511-6.29 16.041 1.001 3.249 3.461 5.744 6.749 6.844 1.337.448 2.619.877 19.628.877 6.676 0 15.777-.066 28.251-.224 5.522-.069 9.943-4.603 9.873-10.125-.068-5.523-4.619-9.93-10.124-9.874z" />
                                    </g>
                                </svg>
                            </div>
                            <h2 class="st-iconbox-title">Excellent Services</h2>
                            <div class="st-iconbox-text">Healthcare must be an excellent priority service provider. Online Cancer Hospital ensures the best healthcare excellence professional and outstanding personal service.</div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="st-iconbox st-style1">
                            <div class="st-iconbox-icon st-red-box">
                                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="m256 38.397c5.522 0 10-4.477 10-10v-18.397c0-5.523-4.478-10-10-10-5.523 0-10 4.477-10 10v18.397c0 5.523 4.477 10 10 10z" />
                                                <path
                                                    d="m342.609 62.764c1.556.88 3.246 1.298 4.915 1.298 3.486 0 6.874-1.827 8.713-5.079l9.655-17.069c2.719-4.807 1.026-10.908-3.78-13.628-4.806-2.718-10.909-1.027-13.628 3.781l-9.655 17.069c-2.719 4.807-1.026 10.908 3.78 13.628z" />
                                                <path
                                                    d="m409.789 128.753c1.634 0 3.292-.401 4.823-1.247l18.457-10.187c4.835-2.668 6.592-8.752 3.923-13.587-2.669-4.836-8.754-6.592-13.587-3.923l-18.457 10.187c-4.835 2.668-6.592 8.752-3.923 13.587 1.824 3.304 5.241 5.17 8.764 5.17z" />
                                                <path
                                                    d="m455.027 199.147h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10h19.524c5.522 0 10-4.477 10-10s-4.477-10-10-10z" />
                                                <path
                                                    d="m155.763 58.983c1.84 3.252 5.227 5.079 8.713 5.079 1.668 0 3.359-.418 4.915-1.298 4.807-2.719 6.499-8.82 3.78-13.627l-9.655-17.069c-2.721-4.808-8.821-6.499-13.628-3.781-4.807 2.719-6.499 8.82-3.78 13.628z" />
                                                <path
                                                    d="m78.931 117.319 18.457 10.187c1.532.846 3.188 1.247 4.823 1.247 3.523 0 6.94-1.867 8.764-5.17 2.669-4.835.912-10.918-3.923-13.587l-18.457-10.187c-4.835-2.668-10.918-.913-13.587 3.923-2.669 4.835-.912 10.918 3.923 13.587z" />
                                                <path
                                                    d="m76.497 219.147c5.522 0 10-4.477 10-10s-4.478-10-10-10h-19.524c-5.522 0-10 4.477-10 10s4.478 10 10 10z" />
                                                <path
                                                    d="m448.091 446.815h-24.502v-61.428c0-5.523-4.478-10-10-10h-20.807v-171.08c0-75.405-61.347-136.752-136.813-136.752-75.405 0-136.752 61.347-136.752 136.752v171.081h-20.806c-5.522 0-10 4.477-10 10v61.428h-24.502c-5.522 0-10 4.477-10 10v45.184c0 5.523 4.478 10 10 10h384.182c5.523 0 10-4.477 10-10v-45.185c0-5.522-4.478-10-10-10zm-308.873-242.508c0-64.377 52.375-116.752 116.813-116.752 64.377 0 116.752 52.374 116.752 116.752v171.081h-86.683v-94.379c14.468-9.871 23.231-26.229 23.231-44.02 0-29.396-23.924-53.311-53.331-53.311s-53.331 23.915-53.331 53.311c0 17.79 8.764 34.148 23.232 44.02v94.379h-86.683zm101.326 62.204c-11.025-5.781-17.875-17.093-17.875-29.522 0-18.368 14.952-33.311 33.331-33.311s33.331 14.943 33.331 33.311c0 12.43-6.85 23.742-17.875 29.522-3.293 1.727-5.356 5.138-5.356 8.856v100.02h-20.2v-100.02c0-3.719-2.063-7.13-5.356-8.856zm197.547 225.489h-364.182v-25.185h136.885c5.523 0 10-4.477 10-10s-4.477-10-10-10h-102.383v-51.428h295.178v51.428h-102.383c-5.522 0-10 4.477-10 10s4.478 10 10 10h136.885z" />
                                                <path
                                                    d="m265.42 452.99c-1.61-3.865-5.581-6.387-9.771-6.16-4.161.225-7.816 3.098-9.029 7.08-1.212 3.978.243 8.471 3.606 10.938 3.284 2.409 7.764 2.601 11.23.458 4.105-2.538 5.822-7.856 3.964-12.316z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h2 class="st-iconbox-title">Need Emergency</h2>
                            <div class="st-iconbox-text">For admit, emergency,billing & information: 10000, Land phone: +88 02 8100000, Mobile no.: +88 01710000000, 
                                Email: info@onlinecancerhospital.com</div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                </div>
            </div>
        </section>
        <!-- End Feature Seciton -->

        <!-- Start About Seciton -->
        <section class="st-about-wrap" id="about">
            <div class="st-shape-bg">
                <img src="{{asset('contents/website')}}/img/shape/about-bg-shape.svg" alt="shape">
            </div>
            <div class="st-height-b120 st-height-lg-b50"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Who We Are</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">An online cancer hospital is a healthcare institution<br>
                        providing patient treatment with specialized medical.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="st-vertical-middle">
                            <div class="st-vertical-middle-in">
                                <div class="st-text-block st-style1">
                                    <h2 class="st-text-block-title">Online Cancer Hospital & Super Specialty Center is a
                                        completely integrated cancer hospital in Bangladesh. </h2>
                                    <div class="st-height-b20 st-height-lg-b20"></div>
                                    <div class="st-text-block-text">
                                        <p>Treatment at the center is provided by specialists with expertise and many
                                            years of experience in Surgical Oncology who are dedicated to improving
                                            quality of life for cancer patients. We are dedicated to providing treatment
                                            while preventing complications, increasing survival rates of cancer, and
                                            offering best possible treatment in a welcoming environment.</p>
                                        <p>Before decision is made on treatment choice there will be a thorough review
                                            of the patient’s medical history, health check-up, as well as consultation
                                            with regards to alternative treatment techniques. All treatment processes
                                            are designed to facilitate full recovery while preventing any chance of
                                            recurrence under procedures that meet the international standards of quality
                                            cancer care.</p>
                                    </div>
                                    <div class="st-height-b25 st-height-lg-b25"></div>
                                </div>
                            </div>
                        </div>
                        <div class="st-height-b0 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-lg-5 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-shedule-wrap">
                            <div class="st-shedule">
                                <h2 class="st-shedule-title">Weekly Timetable</h2>
                                <ul class="st-shedule-list">
                                    <li>
                                        <div class="st-shedule-left">Monday</div>
                                        <div class="st-shedule-right">8:00am–7:00pm </div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Tuesday</div>
                                        <div class="st-shedule-right">9:00am–6:00pm </div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Wednesday</div>
                                        <div class="st-shedule-right">9:00am–6:00pm </div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Thursday</div>
                                        <div class="st-shedule-right">8:00am–7:00pm</div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Friday</div>
                                        <div class="st-shedule-right">8:00am–7:00pm</div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Saturday</div>
                                        <div class="st-shedule-right">9:00am–5:00pm</div>
                                    </li>
                                    <li>
                                        <div class="st-shedule-left">Sunday</div>
                                        <div class="st-shedule-right">9:00am–3:00pm</div>
                                    </li>
                                </ul>
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <div class="st-call st-style1">
                                    <div class="st-call-icon">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088
                      c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008
                      c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002
                      l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088
                      c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994
                      l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487
                      c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367
                      C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213
                      c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325
                      l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623
                      c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806
                      C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856
                      l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562
                      c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133
                      l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278
                      C470.84,422.278,444.761,448.377,444.752,448.368z" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356
                      c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624
                      c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356
                      c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706
                      c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z" />
                                            </g>
                                            <g>
                                                <path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0
                      c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0
                      c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002
                      c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="st-call-text">
                                        <div class="st-call-title">Call Now</div>
                                        <div class="st-call-number">01700-000000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </section>
        <!-- End About Seciton -->

        <!-- Start department Section -->
        <section id="department">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Our department</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Online Cancer hospital support units include lung cancer or kidney cancer, skin cancer, blood cancer, brain cancer, liver cancer, and many other departments. Cancer services are considered one of the most important aspects of the process of distinguished medical care.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-tabs st-fade-tabs st-style1">
                    <ul class="st-tab-links st-style1 st-mp0">

                        <li class="st-tab-title">
                            <a href="#X-ray" class="st-red-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480"
                                    xml:space="preserve">
                                    <g>
                                        <path d="M440,128H40c-4.418,0-8,3.582-8,8v208c0,4.418,3.582,8,8,8h52.52c6.941,39.326,3.217,79.793-10.784,117.192
                    c-1.551,4.137,0.546,8.748,4.683,10.299c0.897,0.336,1.847,0.509,2.805,0.509h301.552c4.418-0.002,7.999-3.585,7.997-8.003
                    c0-0.958-0.173-1.908-0.509-2.805C384.263,431.793,380.539,391.326,387.48,352H440c4.418,0,8-3.582,8-8V136
                    C448,131.582,444.418,128,440,128z M100.48,464c11.614-36.146,14.466-74.535,8.32-112h262.4c-6.146,37.465-3.294,75.854,8.32,112
                    H100.48z M432,336h-41.384l24-110.304l-15.64-3.392L374.24,336H105.76L81.048,222.304l-15.64,3.392l24,110.304H48V144h184v51.72
                    l-8,5.336v-32.912c0-4.418-3.582-8-8-8c-22.624-0.066-44.333,8.928-60.28,24.976c-28.091,27.923-43.835,65.928-43.72,105.536
                    c-0.066,11.388,6.531,21.764,16.872,26.536c3.914,1.843,8.186,2.802,12.512,2.808c6.839-0.015,13.455-2.437,18.688-6.84
                    l6.096-5.072c3.057-2.553,6.913-3.952,10.896-3.952h13.912c18.223-0.022,32.993-14.785,33.024-33.008V220.28l16-10.68l16,10.664
                    v50.696c0.013,18.236,14.788,33.018,33.024,33.04h13.912c3.981,0.001,7.836,1.397,10.896,3.944l6.096,5.072
                    c5.236,4.404,11.854,6.826,18.696,6.84c4.32-0.007,8.586-0.963,12.496-2.8c10.345-4.777,16.945-15.158,16.88-26.552
                    c0.109-39.606-15.635-77.609-43.72-105.536C308.329,168.927,286.622,159.936,264,160c-4.418,0-8,3.582-8,8v33.056l-8-5.336V144
                    h184V336z M208,176.592v94.536c-0.018,9.393-7.63,17.003-17.024,17.016h-13.912c-7.729,0.003-15.212,2.711-21.152,7.656
                    l-6.088,5.072c-5.643,4.706-14.032,3.945-18.738-1.698c-1.994-2.391-3.086-5.405-3.086-8.518
                    c-0.102-35.362,13.954-69.293,39.032-94.224C178.034,185.352,192.485,178.354,208,176.592z M272,270.976v-94.52
                    c15.512,1.761,29.961,8.753,40.968,19.824c25.074,24.934,39.129,58.863,39.032,94.224c0.003,7.348-5.95,13.307-13.298,13.31
                    c-3.116,0.001-6.133-1.091-8.526-3.086l-6.096-5.08c-5.942-4.935-13.42-7.64-21.144-7.648h-13.912
                    C279.626,287.991,272.009,280.374,272,270.976z" />
                                    </g>
                                    <g>
                                        <path
                                            d="M405.712,56H304V8c0-4.418-3.582-8-8-8H184c-4.418,0-8,3.582-8,8v48H74.288C33.285,56.062,0.062,89.285,0,130.288V168h16
                    v-37.712C16.062,98.122,42.122,72.062,74.288,72H184c4.418,0,8-3.582,8-8V16h96v48c0,4.418,3.582,8,8,8h109.712
                    c32.166,0.062,58.226,26.122,58.288,58.288V168h16v-37.712C479.938,89.285,446.715,56.062,405.712,56z" />
                                    </g>
                                    <g>
                                        <polygon
                                            points="186.344,218.344 172.688,232 152,232 152,248 168,248 168,264 184,264 184,243.312 197.656,229.656    " />
                                    </g>
                                    <g>
                                        <polygon
                                            points="307.312,232 293.656,218.344 282.344,229.656 296,243.312 296,264 312,264 312,248 328,248 328,232    " />
                                    </g>
                                </svg>
                                <span>Lung Cancer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Pulmonary" class="st-green-box">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 392.663 392.663" style="enable-background:new 0 0 392.663 392.663;"
                                    xml:space="preserve">
                                    <path style="fill:#FFFFFF;" d="M309.269,256.065c33.293,0,61.479-46.158,61.479-100.848c0-54.626-28.121-100.848-61.479-100.848
	c-28.509,1.681-56.178,29.543-31.289,64.129c8.339,10.279,12.671,22.562,12.671,35.556c0,13.511-5.042,26.764-14.093,37.172
	C254.901,215.208,271.709,252.186,309.269,256.065z" />
                                    <path style="fill:#FFC10D;" d="M309.139,234.279c-7.37,0.453-29.673-12.994-16.162-28.768
	c12.412-14.481,19.459-32.711,19.459-51.459c0-17.778-7.176-34.521-17.519-49.196c-12.412-17.713,5.042-29.026,14.287-28.574
	c16.162,0.84,39.628,30.772,39.628,78.998S325.301,234.279,309.139,234.279z" />
                                    <path style="fill:#FFFFFF;" d="M83.265,54.432c-33.293,0-61.479,46.158-61.479,100.848c0,54.626,28.121,100.848,61.479,100.848
	c37.56-3.879,54.303-40.857,32.582-64.84c-9.05-10.408-14.093-23.661-14.093-37.172c0-12.994,4.396-25.277,12.671-35.556
	C139.442,83.911,111.838,56.178,83.265,54.432z" />
                                    <g>
                                        <path style="fill:#194F82;" d="M309.269,32.646c-44.671,0-85.527,51.976-48.226,99.685c2.909,3.62,5.042,7.758,6.335,12.024h-5.43
		c-30.19,0-54.756,24.566-54.756,54.756v149.98c0,6.012,4.848,10.925,10.925,10.925s10.925-4.848,10.925-10.925v-149.98
		c0-18.166,14.739-32.97,32.97-32.97h4.719c-1.487,3.879-3.62,7.499-6.465,10.731c-37.236,41.632-1.164,100.978,49.067,100.978
		c46.675,0,83.329-53.85,83.329-122.634C392.533,86.497,356.008,32.646,309.269,32.646z M309.269,256.065
		c-37.56-3.879-54.303-40.857-32.582-64.84c9.051-10.408,14.093-23.661,14.093-37.172c0-12.994-4.396-25.277-12.671-35.556
		c-24.889-34.651,2.78-62.384,31.289-64.129c33.293,0,61.479,46.158,61.479,100.848
		C370.747,209.907,342.562,256.065,309.269,256.065z" />
                                        <path style="fill:#194F82;"
                                            d="M0,155.216C0,224,36.525,277.85,83.329,277.85c50.23,0,86.303-59.345,49.067-100.978
		c-2.844-3.232-5.042-6.853-6.465-10.731h4.719c18.166,0,32.97,14.739,32.97,32.97v149.98c0,6.012,4.848,10.925,10.925,10.925
		c6.012,0,10.925-4.849,10.925-10.925v-149.98c0-30.19-24.566-54.756-54.756-54.756h-5.56c1.293-4.331,3.297-8.404,6.335-12.024
		c37.301-47.58-3.556-99.685-48.226-99.685C36.525,32.646,0,86.497,0,155.216z M21.786,155.216
		c0-54.626,28.121-100.848,61.479-100.848c28.509,1.681,56.178,29.543,31.289,64.129c-8.339,10.279-12.671,22.562-12.671,35.556
		c0,13.511,5.042,26.764,14.093,37.172c21.721,24.048,4.913,60.962-32.582,64.84C49.972,256.065,21.786,209.907,21.786,155.216z" />
                                    </g>
                                    <path style="fill:#56ACE0;" d="M99.362,205.511c-12.541-14.352-19.459-32.646-19.459-51.459c0-17.778,6.271-35.232,17.648-49.196
	c4.913-6.077,6.788-15.774,0.453-21.527c-5.042-4.655-10.02-7.046-14.804-7.046c-11.119,0-25.665,14.481-33.681,39.176h18.554
	c6.012,0,10.925,4.848,10.925,10.925c0,6.012-4.848,10.925-10.925,10.925H44.671c-0.776,5.689-1.681,17.002-1.099,21.786h4.978
	c6.012,0,10.925,4.848,10.925,10.925c0,6.012-4.848,10.925-10.925,10.925h-2.715c6.335,33.293,24.178,53.463,37.301,53.463
	c6.788,0,12.994-4.913,16.937-9.115C104.921,220.121,104.533,211.523,99.362,205.511z" />

                                </svg>
                                <span>Kidney Cancer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Cardiology" class="st-dip-blue-box">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 511.996 511.996" style="enable-background:new 0 0 511.996 511.996;"
                                    xml:space="preserve">
                                    <path style="fill:#EAC6BB;" d="M372.857,23.6C242.939-43.289,43.334,36.709,82.177,204.126l-19.476,23.562l-34.397,62.984
	l33.468,26.608l-1.391,44.733l13.375,19.171c0,0-15.929,59.843,8.421,68.327c45.413,15.843,98.888,8.046,98.888,8.046l2.664,54.438
	h225.925c0,0-22.359-112.842,11.593-160.762C455.199,303.296,565.947,123.003,372.857,23.6z" />
                                    <g style="opacity:0.2;">
                                        <path style="fill:#FFFFFF;" d="M159.738,457.558c0,0-8.343,1.219-21.226,1.719c7.875,0.297,15.117,0.234,21.312,0L159.738,457.558z
		" />
                                        <path style="fill:#FFFFFF;" d="M372.857,23.6C338.577,5.96,299.468-1.462,261.149,0.241c31.304,1.406,62.444,8.984,90.365,23.359
		c193.104,99.404,82.357,279.696,48.405,327.634c-33.953,47.92-11.594,160.762-11.594,160.762h21.328
		c0,0-22.359-112.842,11.593-160.762C455.199,303.296,565.947,123.003,372.857,23.6z" />
                                    </g>
                                    <g>
                                        <path style="fill:#ED5564;" d="M227.697,309.327c0,5.891-4.773,10.672-10.664,10.672s-10.672-4.781-10.672-10.672
		s4.781-10.672,10.672-10.672S227.697,303.436,227.697,309.327z" />
                                        <path style="fill:#ED5564;" d="M185.034,351.999c0,5.89-4.781,10.655-10.671,10.655c-5.891,0-10.664-4.766-10.664-10.655
		c0-5.891,4.773-10.672,10.664-10.672C180.253,341.327,185.034,346.108,185.034,351.999z" />
                                        <path style="fill:#ED5564;" d="M142.363,224c0,5.891-4.773,10.656-10.664,10.656S121.035,229.89,121.035,224
		s4.773-10.671,10.664-10.671C137.59,213.329,142.363,218.11,142.363,224z" />
                                        <path style="fill:#ED5564;" d="M99.7,267.048c0,5.875-4.773,10.655-10.664,10.655s-10.671-4.78-10.671-10.655
		c0-5.906,4.781-10.672,10.671-10.672S99.7,261.142,99.7,267.048z" />
                                        <path style="fill:#ED5564;" d="M142.363,309.327c0,5.891-4.773,10.672-10.664,10.672s-10.664-4.781-10.664-10.672
		s4.773-10.672,10.664-10.672C137.59,298.655,142.363,303.436,142.363,309.327z" />
                                        <path style="fill:#ED5564;" d="M185.034,267.048c0,5.875-4.781,10.655-10.671,10.655c-5.891,0-10.664-4.78-10.664-10.655
		c0-5.906,4.773-10.672,10.664-10.672C180.253,256.375,185.034,261.142,185.034,267.048z" />
                                        <path style="fill:#ED5564;" d="M227.697,224c0,5.891-4.773,10.656-10.664,10.656S206.361,229.89,206.361,224
		s4.781-10.671,10.672-10.671C222.924,213.33,227.697,218.11,227.697,224z" />
                                        <path style="fill:#ED5564;" d="M227.697,394.653c0,5.891-4.773,10.672-10.664,10.672s-10.672-4.781-10.672-10.672
		s4.782-10.656,10.673-10.656C222.924,383.997,227.697,388.763,227.697,394.653z" />
                                        <path style="fill:#ED5564;" d="M142.363,394.653c0,5.891-4.773,10.672-10.664,10.672s-10.664-4.781-10.664-10.672
		s4.774-10.656,10.665-10.656C137.591,383.997,142.363,388.763,142.363,394.653z" />
                                        <path style="fill:#ED5564;" d="M270.36,351.999c0,5.89-4.773,10.655-10.664,10.655c-5.89,0-10.664-4.766-10.664-10.655
		c0-5.891,4.773-10.672,10.664-10.672C265.587,341.327,270.36,346.108,270.36,351.999z" />
                                        <path style="fill:#ED5564;" d="M270.36,267.048c0,5.875-4.773,10.655-10.664,10.655c-5.89,0-10.664-4.78-10.664-10.655
		c0-5.906,4.773-10.672,10.664-10.672C265.587,256.375,270.36,261.142,270.36,267.048z" />
                                    </g>
                                </svg>
                                <span>Skin Cancer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#DentalCare" class="st-orange-box">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#D80027;" d="M450.207,317.793C450.207,425.05,363.256,512,256,512c-107.257,0-194.207-86.95-194.207-194.207
	C61.793,176.552,256,0,256,0S450.207,176.552,450.207,317.793z" />
                                    <path style="fill:#A2001D;" d="M450.207,317.793C450.207,425.05,363.256,512,256,512c0-211.862,0-512,0-512
	S450.207,176.552,450.207,317.793z" />
                                    <polygon style="fill:#FFFFFF;" points="336.92,285.425 288.368,285.425 288.368,236.873 223.632,236.873 223.632,285.425 
	175.08,285.425 175.08,350.161 223.632,350.161 223.632,398.712 288.368,398.712 288.368,350.161 336.92,350.161 " />



                                </svg>

                                <span>Blood Cancer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Neurology" class="st-gray-box">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 463 463"
                                    style="enable-background:new 0 0 463 463;" xml:space="preserve">
                                    <g>
                                        <path d="M151.245,222.446C148.054,237.039,135.036,248,119.5,248c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5
		c23.774,0,43.522-17.557,46.966-40.386c14.556-1.574,27.993-8.06,38.395-18.677c2.899-2.959,2.85-7.708-0.109-10.606
		c-2.958-2.897-7.707-2.851-10.606,0.108C184.947,202.829,172.643,208,159.5,208c-26.743,0-48.5-21.757-48.5-48.5
		c0-4.143-3.358-7.5-7.5-7.5s-7.5,3.357-7.5,7.5C96,191.715,120.119,218.384,151.245,222.446z" />
                                        <path d="M183,287.5c0-4.143-3.358-7.5-7.5-7.5c-35.014,0-63.5,28.486-63.5,63.5c0,0.362,0.013,0.725,0.019,1.088
		C109.23,344.212,106.39,344,103.5,344c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5c26.743,0,48.5,21.757,48.5,48.5
		c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5c0-26.611-16.462-49.437-39.731-58.867c-0.178-1.699-0.269-3.418-0.269-5.133
		c0-26.743,21.757-48.5,48.5-48.5C179.642,295,183,291.643,183,287.5z" />
                                        <path
                                            d="M439,223.5c0-17.075-6.82-33.256-18.875-45.156c1.909-6.108,2.875-12.426,2.875-18.844
		c0-30.874-22.152-56.659-51.394-62.329C373.841,91.6,375,85.628,375,79.5c0-19.557-11.883-36.387-28.806-43.661
		C317.999,13.383,287.162,0,263.5,0c-13.153,0-24.817,6.468-32,16.384C224.317,6.468,212.653,0,199.5,0
		c-23.662,0-54.499,13.383-82.694,35.839C99.883,43.113,88,59.943,88,79.5c0,6.128,1.159,12.1,3.394,17.671
		C62.152,102.841,40,128.626,40,159.5c0,6.418,0.965,12.735,2.875,18.844C30.82,190.244,24,206.425,24,223.5
		c0,13.348,4.149,25.741,11.213,35.975C27.872,270.087,24,282.466,24,295.5c0,23.088,12.587,44.242,32.516,55.396
		C56.173,353.748,56,356.626,56,359.5c0,31.144,20.315,58.679,49.79,68.063C118.611,449.505,141.965,463,167.5,463
		c27.995,0,52.269-16.181,64-39.674c11.731,23.493,36.005,39.674,64,39.674c25.535,0,48.889-13.495,61.71-35.437
		c29.475-9.385,49.79-36.92,49.79-68.063c0-2.874-0.173-5.752-0.516-8.604C426.413,339.742,439,318.588,439,295.5
		c0-13.034-3.872-25.413-11.213-36.025C434.851,249.241,439,236.848,439,223.5z M167.5,448c-21.029,0-40.191-11.594-50.009-30.256
		c-0.973-1.849-2.671-3.208-4.688-3.751C88.19,407.369,71,384.961,71,359.5c0-3.81,0.384-7.626,1.141-11.344
		c0.702-3.447-1.087-6.92-4.302-8.35C50.32,332.018,39,314.626,39,295.5c0-8.699,2.256-17.014,6.561-24.379
		C56.757,280.992,71.436,287,87.5,287c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5C60.757,272,39,250.243,39,223.5
		c0-14.396,6.352-27.964,17.428-37.221c2.5-2.09,3.365-5.555,2.14-8.574C56.2,171.869,55,165.744,55,159.5
		c0-26.743,21.757-48.5,48.5-48.5s48.5,21.757,48.5,48.5c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5
		c0-33.642-26.302-61.243-59.421-63.355C104.577,91.127,103,85.421,103,79.5c0-13.369,8.116-24.875,19.678-29.859
		c0.447-0.133,0.885-0.307,1.308-0.527C127.568,47.752,131.447,47,135.5,47c12.557,0,23.767,7.021,29.256,18.325
		c1.81,3.727,6.298,5.281,10.023,3.47c3.726-1.809,5.28-6.296,3.47-10.022c-6.266-12.903-18.125-22.177-31.782-25.462
		C165.609,21.631,184.454,15,199.5,15c13.509,0,24.5,10.99,24.5,24.5v97.051c-6.739-5.346-15.25-8.551-24.5-8.551
		c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5c13.509,0,24.5,10.99,24.5,24.5v180.279c-9.325-12.031-22.471-21.111-37.935-25.266
		c-3.999-1.071-8.114,1.297-9.189,5.297c-1.075,4.001,1.297,8.115,5.297,9.189C206.8,343.616,224,366.027,224,391.5
		C224,422.654,198.654,448,167.5,448z M395.161,339.807c-3.215,1.43-5.004,4.902-4.302,8.35c0.757,3.718,1.141,7.534,1.141,11.344
		c0,25.461-17.19,47.869-41.803,54.493c-2.017,0.543-3.716,1.902-4.688,3.751C335.691,436.406,316.529,448,295.5,448
		c-31.154,0-56.5-25.346-56.5-56.5c0-2.109-0.098-4.2-0.281-6.271c0.178-0.641,0.281-1.314,0.281-2.012V135.5
		c0-13.51,10.991-24.5,24.5-24.5c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5c-9.25,0-17.761,3.205-24.5,8.551V39.5
		c0-13.51,10.991-24.5,24.5-24.5c15.046,0,33.891,6.631,53.033,18.311c-13.657,3.284-25.516,12.559-31.782,25.462
		c-1.81,3.727-0.256,8.214,3.47,10.022c3.726,1.81,8.213,0.257,10.023-3.47C303.733,54.021,314.943,47,327.5,47
		c4.053,0,7.933,0.752,11.514,2.114c0.422,0.22,0.86,0.393,1.305,0.526C351.883,54.624,360,66.13,360,79.5
		c0,5.921-1.577,11.627-4.579,16.645C322.302,98.257,296,125.858,296,159.5c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5
		c0-26.743,21.757-48.5,48.5-48.5s48.5,21.757,48.5,48.5c0,6.244-1.2,12.369-3.567,18.205c-1.225,3.02-0.36,6.484,2.14,8.574
		C417.648,195.536,424,209.104,424,223.5c0,26.743-21.757,48.5-48.5,48.5c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5
		c16.064,0,30.743-6.008,41.939-15.879c4.306,7.365,6.561,15.68,6.561,24.379C424,314.626,412.68,332.018,395.161,339.807z" />
                                        <path d="M359.5,240c-15.536,0-28.554-10.961-31.745-25.554C358.881,210.384,383,183.715,383,151.5c0-4.143-3.358-7.5-7.5-7.5
		s-7.5,3.357-7.5,7.5c0,26.743-21.757,48.5-48.5,48.5c-13.143,0-25.447-5.171-34.646-14.561c-2.898-2.958-7.647-3.007-10.606-0.108
		s-3.008,7.647-0.109,10.606c10.402,10.617,23.839,17.103,38.395,18.677C315.978,237.443,335.726,255,359.5,255
		c4.142,0,7.5-3.357,7.5-7.5S363.642,240,359.5,240z" />
                                        <path d="M335.5,328c-2.89,0-5.73,0.212-8.519,0.588c0.006-0.363,0.019-0.726,0.019-1.088c0-35.014-28.486-63.5-63.5-63.5
		c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5c26.743,0,48.5,21.757,48.5,48.5c0,1.714-0.091,3.434-0.269,5.133
		C288.462,342.063,272,364.889,272,391.5c0,4.143,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5c0-26.743,21.757-48.5,48.5-48.5
		c4.142,0,7.5-3.357,7.5-7.5S339.642,328,335.5,328z" />
                                    </g>


                                </svg>
                                <span>Brain Cancer</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Cardiology" class="st-dip-blue-box">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;"
                                    xml:space="preserve">
                                    <path style="fill:#FF423D;" d="M336.935,320.523h-70.867c-5.42,0-10.58-2.321-14.177-6.376c-3.598-4.055-5.286-9.455-4.639-14.836
	l23.072-192.116c1.143-9.525,9.223-16.693,18.817-16.693h155.724c19.186,0,37.493,8.232,50.225,22.585
	c12.732,14.352,18.722,33.51,16.434,52.561v-0.001C500.92,253.942,425.863,320.523,336.935,320.523z" />
                                    <path style="fill:#FF5E5B;" d="M143.79,421.498h-41.745c-29.162,0-56.987-12.511-76.339-34.328
	C6.352,365.354-2.75,336.235,0.727,307.282l2.447-20.37C16.624,174.942,111.812,90.504,224.589,90.504h64.551
	c5.42,0,10.58,2.321,14.177,6.376c3.598,4.055,5.286,9.455,4.639,14.837l-22.069,183.737
	C277.254,367.311,216.166,421.498,143.79,421.498z" />
                                    <path style="fill:#FF423D;" d="M90.006,290.8c-1.855,0-3.74-0.274-5.605-0.85c-10-3.092-15.6-13.706-12.508-23.705
	c16.707-54.031,61.315-95.571,116.42-108.408c10.199-2.377,20.384,3.965,22.758,14.157c2.375,10.194-3.964,20.384-14.157,22.758
	c-42.033,9.794-76.063,41.479-88.805,82.688C105.591,285.577,98.097,290.8,90.006,290.8z" />


                                </svg>
                                <span>Liver Cancer</span>
                            </a>
                        </li>
                    </ul>
                    <div class="st-height-b25 st-height-lg-b25"></div>
                    <div class="tab-content">
                        <div id="Crutches" class="st-tab active">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/crutches.png" alt="service">
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>Cancer Hospital</span>
                                                    </h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="X-ray" class="st-tab">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/xray.png" alt="service"></div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>X-ray</span></h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>
                                                <div class="st-imagebox-btn">
                                                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Pulmonary" class="st-tab">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/pulmonary.png" alt="service">
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>Pulmonary</span>
                                                    </h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>
                                                <div class="st-imagebox-btn">
                                                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Cardiology" class="st-tab">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/cardiology.png" alt="service">
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>Cardiology</span>
                                                    </h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>
                                                <div class="st-imagebox-btn">
                                                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="DentalCare" class="st-tab">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/dental-care.png" alt="service">
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>DentalCare</span>
                                                    </h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>
                                                <div class="st-imagebox-btn">
                                                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Neurology" class="st-tab">
                            <div class="st-imagebox st-style2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="st-imagebox-img"><img
                                                src="{{asset('contents/website')}}/img/neurology.png" alt="service">
                                        </div>
                                        <div class="st-height-b0 st-height-lg-b30"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="st-vertical-middle">
                                            <div class="st-vertical-middle-in">
                                                <div class="st-imagebox-info">
                                                    <h2 class="st-imagebox-title">Welcome to our <span>Neurology</span>
                                                    </h2>
                                                    <h4 class="st-imagebox-subtitle">Lorem ipsum dolor sit amet,
                                                        consectetur adipisicing elit.
                                                        Magni nemo libero debitis vitae sapiente quos. </h4>
                                                    <div class="st-imagebox-text">Oillum abrem deleniti adipisci
                                                        suscipit dignissimos. remaining
                                                        essentially unchanged. It was popularised in the with the .
                                                        Lorem Ipsum is simply dummy text
                                                        of the printing and typesetting industry. Lorem ipsum dolor sit
                                                        amet consectetur adipisicing
                                                        elit.</div>
                                                </div>
                                                <div class="st-imagebox-btn">
                                                    <a href="#" class="st-btn st-style1 st-size-medium st-color1">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .st-tabs -->
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End department Section -->

        <!-- Start Service Section -->
        <section id="appointment" class="st-shape-wrap st-gray-bg">
            <div class="st-shape4">
                <img src="{{asset('contents/website')}}/img/shape/section_shape.png" alt="shape1">
            </div>
            <div class="st-shape6">
                <img src="{{asset('contents/website')}}/img/shape/contact-shape3.svg" alt="shape3">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Make an Admitted</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Online cancer hospital's primary focus is to make life easier for cancer patients in their time of need. The patients will have some allocated space that they can use to keep their information. The system can readily admit and care for patients, records, treatments, doctors, prescriptions, and billing. A cancer patient can get treatment at home.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">


                        <form class="form" method="POST" action="{{ route('patient.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                class="form-control @error('first_name') is-invalid @enderror"
                                                placeholder="First Name">
                                            @error('first_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                class="form-control @error('last_name') is-invalid @enderror"
                                                placeholder="Last Name">
                                            @error('last_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <input type="number" name="age" value="{{ old('age') }}"
                                                class="form-control @error('age') is-invalid @enderror"
                                                placeholder="30">
                                            @error('age')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number</label>
                                            <input type="text" name="number" value="{{ old('number') }}"
                                                class="form-control @error('number') is-invalid @enderror"
                                                placeholder="Phone">
                                            @error('number')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="form-group st-form-field st-style1">
                                            <label class="form-label">Gender</label>
                                            <div class="st-custom-select-wrap">
                                                <select name="gender"
                                                    class="st_select1 @error('gender') is-invalid @enderror"
                                                    data-placeholder="Select Cencer">
                                                    <option></option>
                                                    <option value="Male"
                                                        {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                    <option value="Female"
                                                        {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                                    </option>
                                                    <option value="Other"
                                                        {{ old('gender') == 'Other' ? 'selected' : '' }}>Other</option>
                                                </select>
                                                @error('gender')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group st-form-field st-style1">
                                            <label class="form-label">Type of Cancer</label>
                                            <div class="st-custom-select-wrap">
                                                <select name="cancer_id"
                                                    class="st_select1 @error('cancer_id') is-invalid @enderror">
                                                    <option></option>
                                                    @foreach ($disease as $row)
                                                    <option value="{{ $row->id }}"
                                                        {{ old('cancer_id') == $row->id ? 'selected' : '' }}>
                                                        {{ $row->disease }}</option>
                                                    @endforeach

                                                </select>
                                                @error('cancer_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Blood Group</label>
                                            <input type="text" name="blood" value="{{ old('blood') }}"
                                                class="form-control @error('blood') is-invalid @enderror"
                                                placeholder="A+">
                                            @error('blood')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="example@gmail.com">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" value="{{ old('password') }}"
                                                class="form-control @error('password') is-invalid @enderror">
                                            @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" name="password_confirmation"
                                                value="{{ old('password_confirmation') }}"
                                                class="form-control @error('password_confirmation') is-invalid @enderror">
                                            @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address"
                                                class="form-control @error('address') is-invalid @enderror"
                                                placeholder="Address.." value="{{ old('address') }}">
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group px-3">
                                    <label class="form-label">Profile Picture</label>
                                    <input type="file" class="form-control profile @error('image') is-invalid @enderror"
                                        name="image" value="{{ old('image') }}">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group px-3">
                                    <label class="form-label">About Disease</label>
                                    <textarea rows="5" class="form-control @error('description') is-invalid @enderror"
                                        name="description"
                                        placeholder="About Disease..">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer px-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Save
                                </button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->

        <!-- Start Team Section -->
        <section id="doctors">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Meet our specialists</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">We have talented, experienced, reputed, and dynamic doctors in our team working in a growing practice.<br>All the doctors are wholeheartedly waiting to help out the patients with majestic treatments.
                    </div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-slider st-style2">
                    <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                        data-lg-slides="4" data-add-slides="4">
                        <div class="slick-wrapper">
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member1.jpg" alt=""
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="{{ url('/') }}"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Md. Rashidul Hoq</a></h3>
                                            <div class="st-member-designation">Cancer Specialist</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member2.jpg" alt="member2"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="{{ url('/') }}"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Hafizur Rahman</a>
                                            </h3>
                                            <div class="st-member-designation">Cancer Specialist</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member3.jpg" alt="member3"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="{{ url('/') }}"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Qazi Mushtaq</a></h3>
                                            <div class="st-member-designation">Cancer Specialist</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member4.jpg" alt="member4"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="{{ url('/') }}"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Tarit Kumar</a></h3>
                                            <div class="st-member-designation">Cancer Specialist</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member1.jpg" alt=""
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="doctor-profile.html"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Philip
                                                    Bailey</a></h3>
                                            <div class="st-member-designation">Urology</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member2.jpg" alt="member2"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="doctor-profile.html"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Vera Hasson</a>
                                            </h3>
                                            <div class="st-member-designation">Cardiology</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member3.jpg" alt="member3"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="doctor-profile.html"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Matthew
                                                    Hill</a></h3>
                                            <div class="st-member-designation">Neurosurgery</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-member st-style1 st-zoom">
                                    <div class="st-member-img">
                                        <img src="{{asset('contents/website')}}/img/member4.jpg" alt="member4"
                                            class="st-zoom-in">
                                        <a class="st-doctor-link" href="doctor-profile.html"><i
                                                class="fas fa-link"></i></a>
                                        <div class="st-member-social-wrap">
                                            <img src="{{asset('contents/website')}}/img/shape/member-shape.svg"
                                                alt="shape" class="st-member-social-bg">
                                            <ul class="st-member-social st-mp0">
                                                <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                                <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="st-member-meta">
                                        <div class="st-member-meta-in">
                                            <h3 class="st-member-name"><a href="doctor-profile.html">Dr. Jeanette
                                                    Hoff</a></h3>
                                            <div class="st-member-designation">Surgery</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .slick-slide-in -->
                        </div>
                    </div><!-- .slick-container -->
                    <div class="pagination st-style1 st-flex st-hidden"></div>
                    <!-- If dont need Pagination then add class .st-hidden -->
                    <div class="swipe-arrow st-style1">
                        <!-- If dont need navigation then add class .st-hidden -->
                        <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                        <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div><!-- .st-slider -->
            </div><!-- .container -->
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End Team Section -->
        <hr>
        <!-- Start gallery Section -->
        <section id="gallery">
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">View our gallery</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Online Cancer Hospital photographs are put in hospitals and healthcare centers by The Foundation for Photo/Art in Hospitals to provide comfort and hope to patients and their diseases, visitors, and caregivers. Open Houses in Hospitals, Inaugurations of Photos in Hospitals, and Presentations of the Foundation for Photo/Art in Hospitals.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-portfolio-wrapper">
                    <div class="st-isotop-filter st-style1 text-center">
                        <ul class="st-mp0">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".blood">Blood Cancer</a></li>
                            <li><a href="#" data-filter=".lung">Lung Cancer</a></li>
                            <li><a href="#" data-filter=".skin">Skin Cancer</a></li>
                            <li><a href="#" data-filter=".pulmonary">Kidney Cancer</a></li>
                            <li><a href="#" data-filter=".liver">Liver Cancer</a></li>
                            <li><a href="#" data-filter=".brain">Brain Cancer</a></li>
                        </ul>
                    </div>
                    <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery">
                        <div class="st-grid-sizer"></div>
                        <div class="st-isotop-item blood">
                            <a href="{{asset('contents/website')}}/img/blood1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/blood1.jpg" alt="blood1"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item blood">
                            <a href="{{asset('contents/website')}}/img/blood2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/blood2.jpg" alt="blood2"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item blood">
                            <a href="{{asset('contents/website')}}/img/blood3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/blood3.jpg" alt="blood3"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item lung">
                            <a href="{{asset('contents/website')}}/img/lung1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/lung1.jpg" alt="lung1"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item lung">
                            <a href="{{asset('contents/website')}}/img/lung2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/lung2.jpg" alt="lung2"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item lung">
                            <a href="{{asset('contents/website')}}/img/lung3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/lung3.jpg" alt="lung3"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item skin">
                            <a href="{{asset('contents/website')}}/img/skin1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/skin1.jpg" alt="skin"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item skin">
                            <a href="{{asset('contents/website')}}/img/skin2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/skin2.jpg" alt="skin"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item skin">
                            <a href="{{asset('contents/website')}}/img/skin3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/skin3.jpg" alt="skin"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item kidney">
                            <a href="{{asset('contents/website')}}/img/kidney1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/kidney1.jpg" alt="kidney"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item kidney">
                            <a href="{{asset('contents/website')}}/img/kidney2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/kidney2.jpg" alt="kidney"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item kidney">
                            <a href="{{asset('contents/website')}}/img/kidney3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/kidney3.jpg" alt="kidney"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item liver">
                            <a href="{{asset('contents/website')}}/img/liver1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/liver1.jpg" alt="project5"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item liver">
                            <a href="{{asset('contents/website')}}/img/liver2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/liver2.jpg" alt="liver"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item liver">
                            <a href="{{asset('contents/website')}}/img/liver3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/liver3.jpg" alt="liver"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item brain">
                            <a href="{{asset('contents/website')}}/img/brain1.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/brain1.jpg" alt="project"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item brain">
                            <a href="{{asset('contents/website')}}/img/brain2.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/brain2.jpg" alt="project"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                        <div class="st-isotop-item brain">
                            <a href="{{asset('contents/website')}}/img/brain3.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/brain3.jpg" alt="project"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        
                    </div><!-- .isotop -->
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End gallery Section -->
        <hr>
        <!-- Start Testimonial Seciton -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">What people say?</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">We would like to share with you some of the reviews we give our patients.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-slider st-style2 st-pricing-wrap">
                    <div class="slick-container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
                        data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3"
                        data-lg-slides="3" data-add-slides="3">
                        <div class="slick-wrapper">
                            <div class="slick-slide-in">
                                <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s"
                                    data-wow-delay="0.2s">
                                    <div class="st-testimonial-info">
                                        <div class="st-testimonial-img"><img
                                                src="{{asset('contents/website')}}/img/avatar2.png" alt="avatar1"></div>
                                        <div class="st-testimonial-meta">
                                            <h4 class="st-testimonial-name">Md. Arif</h4>
                                            <div class="st-testimonial-designation">Blood cancer</div>
                                        </div>
                                    </div>
                                    <div class="st-testimonial-text">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting
                                        industry. Lorem Ipsum the industry's standard dummy text.</div>
                                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-testimonial st-style1">
                                    <div class="st-testimonial-info">
                                        <div class="st-testimonial-img"><img
                                                src="{{asset('contents/website')}}/img/avatar3.png" alt="avatar2"></div>
                                        <div class="st-testimonial-meta">
                                            <h4 class="st-testimonial-name">Sanjana
                                                Akter</h4>
                                            <div class="st-testimonial-designation">Blood Cancer</div>
                                        </div>
                                    </div>
                                    <div class="st-testimonial-text">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting
                                        industry. Lorem Ipsum the industry's standard dummy text.</div>
                                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-testimonial st-style1 wow fadeInRight" data-wow-duration="0.8s"
                                    data-wow-delay="0.2s">
                                    <div class="st-testimonial-info">
                                        <div class="st-testimonial-img"><img
                                                src="{{asset('contents/website')}}/img/avatar4.png" alt="avatar3"></div>
                                        <div class="st-testimonial-meta">
                                            <h4 class="st-testimonial-name">Md. Shemul</h4>
                                            <div class="st-testimonial-designation">Brain Cancer</div>
                                        </div>
                                    </div>
                                    <div class="st-testimonial-text">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting
                                        industry. Lorem Ipsum the industry's standard dummy text.</div>
                                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-testimonial st-style1 wow fadeInLeft" data-wow-duration="0.8s"
                                    data-wow-delay="0.2s">
                                    <div class="st-testimonial-info">
                                        <div class="st-testimonial-img"><img
                                                src="{{asset('contents/website')}}/img/avatar2.png" alt="avatar1"></div>
                                        <div class="st-testimonial-meta">
                                            <h4 class="st-testimonial-name">Md. Jamal</h4>
                                            <div class="st-testimonial-designation">Lung Cancer</div>
                                        </div>
                                    </div>
                                    <div class="st-testimonial-text">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting
                                        industry. Lorem Ipsum the industry's standard dummy text.</div>
                                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                                </div>
                            </div><!-- .slick-slide-in -->
                            <div class="slick-slide-in">
                                <div class="st-testimonial st-style1">
                                    <div class="st-testimonial-info">
                                        <div class="st-testimonial-img"><img
                                                src="{{asset('contents/website')}}/img/avatar3.png" alt="avatar2"></div>
                                        <div class="st-testimonial-meta">
                                            <h4 class="st-testimonial-name">Shemu Khatun</h4>
                                            <div class="st-testimonial-designation">Brain Cancer</div>
                                        </div>
                                    </div>
                                    <div class="st-testimonial-text">Lorem Ipsum is simply dummy text of the printing
                                        and typesetting
                                        industry. Lorem Ipsum the industry's standard dummy text.</div>
                                    <div class="st-quote"><i class="fas fa-quote-right"></i></div>
                                </div>
                            </div><!-- .slick-slide-in -->
                          
                        </div>
                    </div><!-- .slick-container -->
                    <div class="pagination st-style1 st-flex st-hidden"></div>
                    <!-- If dont need Pagination then add class .st-hidden -->
                    <div class="swipe-arrow st-style1">
                        <!-- If dont need navigation then add class .st-hidden -->
                        <div class="slick-arrow-left"><i class="fa fa-chevron-left"></i></div>
                        <div class="slick-arrow-right"><i class="fa fa-chevron-right"></i></div>
                    </div>
                </div><!-- .st-slider -->
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End Testimonial Seciton -->

        <!-- Start FunFact Aection -->
        <section class="st-gray-bg st-shape-wrap">
            <div class="st-shape4">
                <img src="{{asset('contents/website')}}/img/shape/section_shape.png" alt="shape1">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                           
                            <div class="col-lg-6">
                                <div class="st-funfact st-style1">
                                    <div class="st-funfact-icon st-green-box">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M107.972,291.258c-1.861-1.861-4.432-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.071,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.441,2.931-7.083C110.903,295.699,109.833,293.118,107.972,291.258z" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M202.317,291.258c-1.86-1.861-4.441-2.932-7.073-2.932c-2.631,0-5.213,1.071-7.073,2.932
                        c-1.861,1.86-2.931,4.441-2.931,7.072c0,2.642,1.07,5.213,2.931,7.083c1.861,1.861,4.442,2.921,7.073,2.921
                        s5.213-1.06,7.073-2.921c1.861-1.871,2.931-4.452,2.931-7.083C205.248,295.699,204.178,293.118,202.317,291.258z" />
                                            </g>
                                            <g>
                                                <path d="M183.966,346.195c-5.338-1.43-10.821,1.746-12.248,7.083c-2.859,10.702-12.582,18.178-23.646,18.178
                        c-11.063,0-20.786-7.476-23.646-18.178c-1.426-5.339-6.909-8.515-12.248-7.083c-5.338,1.427-8.509,6.909-7.083,12.248
                        c5.194,19.443,22.867,33.023,42.978,33.023c20.11,0,37.783-13.58,42.977-33.023C192.475,353.105,189.303,347.621,183.966,346.195z
                        " />
                                            </g>
                                            <g>
                                                <path d="M256.121,39.995c-5.526,0-10.005,4.479-10.005,10.005v63.514c0,5.526,4.479,10.005,10.005,10.005
                        c5.526,0,10.005-4.479,10.005-10.005V50C266.126,44.474,261.647,39.995,256.121,39.995z" />
                                            </g>
                                            <g>
                                                <path d="M263.198,141.795c-1.862-1.871-4.443-2.931-7.073-2.931c-2.641,0-5.213,1.061-7.083,2.931
                        c-1.861,1.861-2.921,4.442-2.921,7.073s1.061,5.213,2.921,7.073c1.871,1.861,4.442,2.931,7.083,2.931
                        c2.631,0,5.213-1.07,7.073-2.931s2.931-4.442,2.931-7.073S265.058,143.656,263.198,141.795z" />
                                            </g>
                                            <g>
                                                <path d="M195.152,130.95L169.61,105.43c-3.908-3.905-10.244-3.903-14.149,0.006c-3.905,3.909-3.903,10.243,0.006,14.149
                        l25.542,25.521c1.953,1.952,4.512,2.927,7.071,2.927c2.562,0,5.125-0.979,7.078-2.933
                        C199.063,141.19,199.061,134.856,195.152,130.95z" />
                                            </g>
                                            <g>
                                                <path d="M356.801,105.456c-3.909-3.906-10.244-3.903-14.149,0.005l-27.155,27.177c-3.906,3.909-3.903,10.244,0.005,14.149
                        c1.953,1.953,4.512,2.928,7.071,2.928c2.562,0,5.124-0.978,7.077-2.933l27.155-27.177
                        C360.712,115.696,360.709,109.361,356.801,105.456z" />
                                            </g>
                                            <g>
                                                <path d="M506.938,285.54c-21.132-78.867-102.486-125.836-181.351-104.702c-27.068,7.253-50.981,21.674-69.659,41.643
                        c-27.946-29.764-66.622-46.621-107.856-46.621C66.425,175.86,0,242.286,0,323.933s66.425,148.072,148.072,148.072
                        c41.273,0,80.011-16.909,107.967-46.745c27.682,29.351,66.721,46.694,107.906,46.694c12.649,0,25.505-1.637,38.29-5.062
                        C481.1,445.759,528.07,364.404,506.938,285.54z M148.072,451.995c-70.615,0-128.063-57.449-128.063-128.063
                        c0-70.614,57.448-128.063,128.063-128.063c36.555,0,70.791,15.319,95.088,42.282c-2.654,3.754-5.156,7.645-7.484,11.676
                        c-19.776,34.253-25.029,74.157-14.792,112.36c4.697,17.533,12.371,33.487,22.332,47.469
                        C218.914,436.654,184.64,451.995,148.072,451.995z M397.056,447.564c-68.207,18.271-138.568-22.347-156.844-90.554
                        c-8.853-33.041-4.31-67.553,12.793-97.176c3.156-5.466,6.671-10.642,10.51-15.509c0.166-0.191,0.32-0.389,0.47-0.59
                        c16.93-21.203,40.082-36.415,66.78-43.569c11.061-2.963,22.173-4.378,33.116-4.378c56.536,0,108.415,37.785,123.727,94.931
                        C505.886,358.927,465.263,429.287,397.056,447.564z" />
                                            </g>
                                            <g>
                                                <path d="M334.605,304.249c-3.096-11.558-15.014-18.444-26.577-15.345c-11.558,3.098-18.441,15.019-15.344,26.577
                        c1.198,4.47,5.24,7.419,9.658,7.419c0.856,0,1.729-0.111,2.595-0.344c5.338-1.431,8.505-6.915,7.074-12.253
                        c-0.241-0.9,0.295-1.83,1.195-2.071c0.558-0.148,1.006,0.01,1.283,0.169c0.276,0.16,0.638,0.468,0.788,1.026
                        c1.43,5.337,6.914,8.506,12.253,7.074C332.869,315.072,336.035,309.587,334.605,304.249z" />
                                            </g>
                                            <g>
                                                <path d="M425.169,279.982c-1.501-5.599-5.091-10.278-10.111-13.177c-5.02-2.897-10.868-3.668-16.466-2.167
                        c-5.599,1.5-10.279,5.09-13.176,10.11c-2.898,5.02-3.669,10.867-2.168,16.467c1.198,4.47,5.24,7.418,9.658,7.418
                        c0.856-0.001,1.729-0.111,2.596-0.344c5.337-1.431,8.504-6.916,7.074-12.254c-0.149-0.558,0.009-1.005,0.169-1.282
                        s0.467-0.638,1.026-0.787c0.558-0.149,1.007,0.01,1.283,0.169s0.637,0.467,0.787,1.026c1.43,5.337,6.914,8.505,12.253,7.074
                        C423.432,290.805,426.599,285.32,425.169,279.982z" />
                                            </g>
                                            <g>
                                                <path
                                                    d="M416.404,342.76c-1.431-5.337-6.917-8.506-12.254-7.075c-5.338,1.431-8.504,6.915-7.074,12.253
                        c3.404,12.705-4.163,25.812-16.868,29.216c-6.156,1.65-12.584,0.802-18.101-2.383c-5.519-3.187-9.466-8.33-11.114-14.485
                        c-1.431-5.337-6.916-8.508-12.254-7.074c-5.337,1.431-8.504,6.916-7.074,12.253c3.033,11.318,10.291,20.777,20.438,26.635
                        c6.758,3.902,14.26,5.896,21.861,5.896c3.811,0,7.646-0.5,11.425-1.514C408.75,390.222,422.663,366.121,416.404,342.76z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h2 class="st-funfact-number st-counter">100</h2>
                                    <div class="st-funfact-title">Happy Patients</div>
                                </div>
                                <div class="st-height-b30 st-height-lg-b30"></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="st-funfact st-style1">
                                    <div class="st-funfact-icon st-orange-box">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path d="M482.726,485.783l-22.65-132.603c-2.441-14.287-12.576-25.764-26.453-29.95l-61.092-18.433
                      c-1.265-14.934-7.388-29.023-17.578-40.175c-8.151-8.92-18.403-15.415-29.704-18.999c1.934-2.146,3.727-4.285,5.372-6.377
                      c14.528-18.477,22.306-38.833,24.286-52.724h4.713c12.258,0,22.231-9.972,22.231-22.231v-11.396
                      c0-8.181-4.602-15.594-11.523-19.441V106.05c0-4.141-3.357-7.498-7.498-7.498s-7.497,3.356-7.497,7.498v30.764
                      c-2.92,0.507-6.404,1.383-9.968,2.884c-0.365,0.133-0.72,0.287-1.056,0.472c-0.805,0.367-1.611,0.754-2.414,1.19V80.938
                      c0-16.693-13.58-30.273-30.273-30.273h-20.695c-7.138,0-14.111,2.487-19.637,7.005l-2.031,1.66c-3.73,3.05-8.438,4.73-13.257,4.73
                      c-4.819,0-9.528-1.68-13.258-4.73l-2.03-1.66c-5.526-4.517-12.499-7.005-19.637-7.005H200.38
                      c-16.693,0-30.273,13.58-30.273,30.273v60.422c-0.803-0.436-1.609-0.823-2.414-1.19c-0.336-0.185-0.69-0.339-1.055-0.472
                      c-3.564-1.501-7.049-2.377-9.968-2.884V59.025c0-24.278,19.752-44.03,44.03-44.03h110.601c24.279,0,44.03,19.752,44.03,44.03
                      v11.786c0,4.141,3.357,7.498,7.497,7.498s7.498-3.356,7.498-7.498V59.025C370.326,26.479,343.847,0,311.301,0H200.7
                      c-32.547,0-59.025,26.479-59.025,59.025v74.43c-6.921,3.847-11.523,11.259-11.523,19.441v11.396
                      c0,12.259,9.973,22.231,22.231,22.231h4.713c1.979,13.891,9.758,34.247,24.286,52.724c1.643,2.09,3.435,4.227,5.367,6.371
                      c-25.98,8.252-44.926,31.61-47.277,59.179L78.378,323.23c-13.877,4.186-24.013,15.663-26.453,29.95l-9.198,53.849
                      c-0.697,4.082,2.047,7.955,6.128,8.652c4.08,0.699,7.955-2.046,8.653-6.128l9.198-53.849c1.476-8.644,7.608-15.586,16.003-18.118
                      l56.505-17.049v14.831c-12.952,2.384-23.973,11.281-28.512,23.608c-1.205,3.272-1.954,6.698-2.226,10.182l-5.461,70.095
                      c-0.412,5.28,1.415,10.538,5.01,14.423c3.595,3.886,8.694,6.116,13.989,6.116h9.348c4.141,0,7.498-3.356,7.498-7.498
                      c0-4.142-3.357-7.497-7.498-7.497h-9.348c-1.129,0-2.215-0.474-2.982-1.304c-0.766-0.828-1.155-1.948-1.067-3.073l5.461-70.096
                      c0.165-2.111,0.618-4.186,1.348-6.167c3.158-8.575,11.686-14.382,21.223-14.449l1.235-0.009c0.058-0.001,0.115-0.001,0.172-0.001
                      c9.269,0,17.474,5.256,20.935,13.427c0.971,2.291,1.561,4.713,1.755,7.199l5.463,70.097c0.087,1.124-0.302,2.244-1.068,3.073
                      c-0.766,0.828-1.853,1.303-2.982,1.303h-9.348c-4.141,0-7.498,3.356-7.498,7.497c0,4.141,3.357,7.498,7.498,7.498h9.348
                      c5.295,0,10.395-2.229,13.989-6.116c3.596-3.887,5.423-9.144,5.011-14.422l-5.463-70.096c-0.32-4.102-1.295-8.101-2.898-11.884
                      c-4.939-11.657-15.5-19.762-27.938-21.955v-19.306l25.774-7.777c2.345,4.939,6.992,15.612,16.197,38.619
                      c9.277,23.214,20.808,52.969,31.867,81.895c0.079,0.243,0.17,0.48,0.272,0.712c7.38,19.311,14.539,38.225,20.662,54.541
                      c1.098,2.926,3.895,4.864,7.02,4.864c3.125,0,5.922-1.938,7.02-4.864c6.122-16.316,13.281-35.23,20.662-54.541
                      c0.103-0.232,0.193-0.47,0.272-0.712c11.051-28.909,22.576-58.645,31.849-81.852c9.217-23.037,13.868-33.719,16.214-38.662
                      l25.774,7.777v44.285c-17.858,3.469-31.385,19.219-31.385,38.077c0,21.391,17.403,38.795,38.795,38.795
                      c21.392,0,38.795-17.403,38.795-38.795c0-18.796-13.438-34.508-31.21-38.045v-39.792l56.506,17.049
                      c8.395,2.532,14.526,9.474,16.003,18.118l22.65,132.603c0.376,2.199-0.209,4.349-1.648,6.054c-1.438,1.704-3.459,2.644-5.69,2.644
                      H51.393c-2.231,0-4.251-0.939-5.69-2.644c-1.438-1.705-2.024-3.854-1.648-6.054l7.475-43.762c0.697-4.082-2.047-7.955-6.128-8.652
                      c-4.08-0.7-7.955,2.047-8.653,6.128l-7.475,43.762c-1.115,6.532,0.696,13.183,4.968,18.248C38.516,509.096,44.767,512,51.393,512
                      h409.214c6.626,0,12.878-2.904,17.151-7.969C482.03,498.966,483.841,492.315,482.726,485.783z M355.421,152.089
                      c3.995-0.996,7.202-0.978,7.238-0.977c1.292,0.017,2.548-0.285,3.664-0.87c0.334,0.831,0.531,1.724,0.531,2.654v11.396
                      c0,3.99-3.246,7.236-7.236,7.236h-4.197V152.089z M156.579,171.528L156.579,171.528h-4.197c-3.99,0-7.236-3.246-7.236-7.236
                      v-11.396c0-0.93,0.198-1.823,0.531-2.653c1.115,0.585,2.371,0.887,3.664,0.869c0.057,0.01,3.255-0.008,7.238,0.981V171.528z
                      M171.574,179.935v-19.698c2.272,0.681,4.757,0.588,7.051-0.369c3.935-1.642,6.477-5.455,6.477-9.716V80.938
                      c0-8.424,6.854-15.278,15.278-15.278h20.695c3.688,0,7.291,1.285,10.146,3.619l2.03,1.66c6.401,5.234,14.48,8.115,22.749,8.115
                      c8.269,0,16.348-2.882,22.749-8.115l2.03-1.66c2.854-2.334,6.458-3.619,10.146-3.619h20.695c8.424,0,15.278,6.854,15.278,15.278
                      v69.215c0,4.26,2.542,8.074,6.477,9.716c1.314,0.548,2.69,0.814,4.054,0.814c1.017,0,2.026-0.149,2.997-0.439v19.691
                      c0,10.947-7.568,32.205-21.594,50.043c-4.646,5.909-10.618,12.257-17.971,17.805c-0.233,0.156-0.456,0.325-0.669,0.505
                      c-11.391,8.422-26.038,14.874-44.192,14.874s-32.801-6.452-44.193-14.875c-0.213-0.179-0.435-0.348-0.667-0.503
                      c-7.353-5.549-13.325-11.897-17.972-17.806C179.143,212.141,171.574,190.882,171.574,179.935z M305.12,301.07L256,337.784
                      l-49.12-36.714c4.871-6.191,7.6-14.138,7.6-21.23v-12.086c11.551,6.212,25.334,10.404,41.52,10.404s29.97-4.192,41.52-10.404
                      v12.086C297.52,286.932,300.249,294.879,305.12,301.07z M194.367,292.701c-4.004-1.525-8.443-1.775-12.642-0.636
                      c-0.184,0.043-0.364,0.092-0.539,0.144l-25.903,7.816c4.381-21.542,21.873-38.688,44.202-42.009v21.824
                      C199.485,284.544,197.385,289.407,194.367,292.701z M214.716,352.889c-0.014-0.035-0.028-0.07-0.041-0.104
                      c-0.38-0.961-0.755-1.909-1.127-2.846c-0.067-0.17-0.134-0.339-0.201-0.507c-0.364-0.917-0.725-1.827-1.081-2.722
                      c-0.025-0.063-0.05-0.125-0.075-0.189c-1.111-2.793-2.182-5.472-3.212-8.039c-0.075-0.186-0.15-0.375-0.225-0.56
                      c-0.296-0.736-0.587-1.461-0.876-2.177c-0.106-0.263-0.211-0.523-0.316-0.783c-0.28-0.694-0.558-1.384-0.832-2.059
                      c-0.082-0.202-0.162-0.398-0.243-0.599c-0.497-1.226-0.983-2.421-1.457-3.586c-0.128-0.315-0.259-0.636-0.386-0.947
                      c-0.186-0.454-0.367-0.896-0.549-1.341c-0.196-0.48-0.392-0.956-0.584-1.424c-0.072-0.175-0.147-0.36-0.219-0.534
                      c-0.058-0.14-0.111-0.269-0.168-0.408c-0.866-2.104-1.689-4.087-2.47-5.952c-0.006-0.015-0.013-0.03-0.019-0.045
                      c-0.416-0.993-0.823-1.963-1.214-2.887c-0.203-0.479-0.403-0.95-0.599-1.412l42.245,31.574l-17.652,7.499
                      c-0.031,0.013-0.063,0.026-0.094,0.04l-7.37,3.131C215.533,354.955,215.124,353.919,214.716,352.889z M232.606,398.797
                      c-1.481-3.843-2.973-7.708-4.468-11.569c-2.338-6.039-4.571-11.781-6.708-17.251l2.798-1.189l11.432,13.289L232.606,398.797z
                      M256.145,459.735c-0.215-0.446-0.471-0.867-0.767-1.259c-3.388-8.955-7.688-20.286-12.447-32.753l7-38.325h12.138l7,38.325
                      C264.082,438.784,259.603,450.594,256.145,459.735z M264.881,372.404h-17.762l-8.405-9.77L256,355.291l17.286,7.343
                      L264.881,372.404z M283.862,387.228c-1.495,3.861-2.987,7.726-4.468,11.569l-3.054-16.721l11.432-13.289l2.798,1.189
                      C288.433,375.446,286.2,381.189,283.862,387.228z M312.58,315.18c-0.371,0.876-0.757,1.795-1.15,2.733
                      c-0.051,0.122-0.103,0.245-0.154,0.368c-0.389,0.93-0.785,1.88-1.195,2.869c-0.027,0.065-0.055,0.134-0.082,0.2
                      c-0.354,0.853-0.717,1.733-1.086,2.63c-0.069,0.168-0.134,0.323-0.203,0.492c-0.082,0.201-0.17,0.414-0.253,0.617
                      c-0.164,0.4-0.331,0.808-0.499,1.216c-0.206,0.503-0.411,1.004-0.622,1.519c-0.067,0.164-0.136,0.335-0.204,0.5
                      c-0.522,1.279-1.058,2.597-1.606,3.951c-0.086,0.212-0.171,0.42-0.257,0.635c-0.271,0.669-0.547,1.352-0.824,2.039
                      c-0.108,0.269-0.217,0.537-0.326,0.809c-0.286,0.709-0.575,1.427-0.867,2.155c-0.082,0.203-0.165,0.411-0.247,0.615
                      c-1.017,2.532-2.072,5.173-3.167,7.925c-0.036,0.091-0.072,0.18-0.108,0.272c-0.354,0.889-0.712,1.793-1.074,2.704
                      c-0.067,0.17-0.135,0.34-0.203,0.511c-0.374,0.942-0.751,1.894-1.133,2.861c-0.007,0.018-0.014,0.036-0.021,0.053
                      c-0.412,1.042-0.826,2.09-1.248,3.16l-7.377-3.134c-0.026-0.011-0.052-0.022-0.077-0.033l-17.662-7.503l42.245-31.574
                      C312.982,314.23,312.782,314.7,312.58,315.18z M330.814,292.21c-0.001,0-0.003-0.001-0.004-0.001
                      c-0.006-0.002-0.013-0.003-0.019-0.006c-4.35-1.305-8.99-1.089-13.157,0.498c-3.019-3.294-5.118-8.157-5.118-12.861v-21.835
                      c22.469,3.312,39.908,20.297,44.232,42.029L330.814,292.21z M389.001,398.375c0,13.124-10.677,23.8-23.8,23.8
                      s-23.8-10.676-23.8-23.8c0-13.124,10.677-23.8,23.8-23.8S389.001,385.251,389.001,398.375z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h2 class="st-funfact-number st-counter">10</h2>
                                    <div class="st-funfact-title">Qualified Doctors</div>
                                </div>
                                <div class="st-height-b30 st-height-lg-b30"></div>
                            </div><!-- .col -->
                            
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <div class="st-video-block st-style1 st-zoom">
                            <div class="st-video-block-img st-zoom-in st-dynamic-bg"
                                data-src="{{asset('contents/website')}}/img/video-block-img.jpg"></div>
                            <a href="#" class="st-play-btn st-style1 ">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 336"
                                    xml:space="preserve">
                                    <g>
                                        <path
                                            d="M286.8,49.2C256.4,18.8,214.4,0,168,0C121.6,0,79.6,18.8,49.2,49.2C18.8,79.6,0,121.6,0,168c0,46.4,18.8,88.4,49.2,118.8
                      C79.6,317.2,121.6,336,168,336c46.4,0,88.4-18.8,118.8-49.2C317.2,256.4,336,214.4,336,168C336,121.6,317.2,79.6,286.8,49.2z
                       M272.4,272.4c-26.8,26.8-63.6,43.2-104.4,43.2s-77.6-16.4-104.4-43.2C37.2,245.6,20.4,208.8,20.4,168S36.8,90.4,63.6,63.6
                      C90.4,36.8,127.2,20.4,168,20.4s77.6,16.4,104.4,43.2c26.8,26.8,43.2,63.6,43.2,104.4S298.8,245.6,272.4,272.4z" />
                                    </g>
                                    <g>
                                        <path d="M261.2,156c-0.8-0.8-2-2.4-3.2-4c-0.4-0.4-0.4-0.4-0.8-0.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34c0,0-0.4,0-0.4-0.4L134,79.6
                      c-5.2-3.2-11.2-3.6-16.8-2.4c-5.6,1.6-10.4,5.2-13.6,10.4c-1.2,1.6-1.6,3.6-2.4,5.2c-0.4,1.2-0.4,2.8-0.8,4.4c0,0.4,0,1.2,0,1.6
                      V168v68.8c0,6,2.4,11.6,6.4,15.6s9.6,6.4,15.6,6.4c2,0,4.4-0.4,6.4-1.2s4-1.6,5.6-2.8l58.8-34l0.8-0.4l59.2-34
                      c0.4,0,0.4-0.4,0.8-0.4c4.8-3.2,8.4-8,9.6-13.2C265.2,167.2,264.4,161.2,261.2,156z M244,168.4c0,0.4-0.4,0.8-0.8,0.8h-0.4
                      L184,203.6l-0.4,0.4l-58.8,34c-0.4,0-0.4,0.4-0.8,0.4c0,0-0.4,0-0.4,0.4h-0.4c-0.4,0-0.8-0.4-1.2-0.4c-0.4-0.4-0.4-0.8-0.4-1.2
                      V168V99.2v-0.4v-0.4c0.4-0.4,0.8-0.8,1.2-0.8c0.4,0,0.8,0,1.2,0l59.2,34l0.4,0.4l59.6,34.4l0.4,0.4l0.4,0.4
                      C244,167.6,244,168,244,168.4z" />
                                    </g>
                                </svg>

                            </a>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </section>
        <!-- End FunFact Aection -->

       

        <!-- Start Contact Section -->
        <section class="st-shape-wrap" id="contact">
            <div class="st-shape1"><img src="{{asset('contents/website')}}/img/shape/contact-shape1.svg" alt="shape1">
            </div>
            <div class="st-shape2"><img src="{{asset('contents/website')}}/img/shape/contact-shape2.svg" alt="shape2">
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Stay connect with us</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Any question? Reach out to me and I will get back to you shortly.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <form class="form" method="POST" action="{{ route('contact_us.store') }} ">
                            @csrf
                            <div class="row px-3">
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label>Full Name</label>
                                        <input type="text" id="name" name="c_name" placeholder="Your Name"
                                            class="form-control @error('c_name') is-invalid @enderror">
                                        @error('c_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label>Email Address</label>
                                        <input type="email" id="email" name="c_email" placeholder="example@gmail.com"
                                            class="form-control @error('c_email') is-invalid @enderror">
                                        @error('c_email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- .col -->
                            </div>
                            <div class="row px-3">
                                <div class="col-lg-6">
                                    <div class="st-form-field st-style1">
                                        <label>Phone</label>
                                        <input type="text" id="c_phone" name="phone" placeholder="01700000000"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- .col -->
                                <div class="col-lg-6 ">
                                    <div class="st-form-field st-style1">
                                        <label>Subject</label>
                                        <input type="text" id="subject" name="subject" placeholder="Write subject"
                                            class="form-control @error('subject') is-invalid @enderror"
                                            value="{{ old('subject') }}">
                                        @error('subject')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div><!-- .col -->

                            </div>

                            <div class="col-lg-12">
                                <div class="st-form-field st-style1">
                                    <label>Your Message</label>
                                    <textarea cols="30" rows="10" id="msg" name="msg"
                                        placeholder="Write something here..."
                                        class="form-control @error('msg') is-invalid @enderror"> {{ old('msg') }}
                                       </textarea>
                                    @error('msg')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div><!-- .col -->
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <div class="st-height-b10 st-height-lg-b10"></div>
                                    <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="submit"
                                        name="submit">Send
                                        message</button>
                                </div>
                            </div><!-- .col -->
                        </form>
                    </div><!-- .col -->
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End Contact Section -->

    </div>
    <!-- Start Footer -->
    <footer class="st-site-footer st-sticky-footer st-dynamic-bg"
        data-src="{{asset('contents/website')}}/img/footer-bg.png">

        <div class="st-copyright-wrap">
            <div class="container">
                <div class="st-copyright-in">
                    <div class="st-left-copyright">
                        <div class="st-copyright-text">Copyright 2022. Design by Cancer Hospital</div>
                    </div>
                    <div class="st-right-copyright">
                        <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Video Popup -->

    <!-- End Video Popup -->

    <script src="{{asset('contents/website')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{asset('contents/website')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{asset('contents/admin')}}/plugin/toastr.min.js"></script>
    <script src="{{asset('contents/website')}}/js/isotope.pkg.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jquery.slick.min.js"></script>
    <script src="{{asset('contents/website')}}/js/counter.min.js"></script>
    <script src="{{asset('contents/website')}}/js/lightgallery.min.js"></script>
    <script src="{{asset('contents/website')}}/js/ripples.min.js"></script>
    <script src="{{asset('contents/website')}}/js/mailchimp.min.js"></script>
    <script src="{{asset('contents/website')}}/js/wow.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jQueryUi.js"></script>
    <script src="{{asset('contents/website')}}/js/textRotate.min.js"></script>
    <script src="{{asset('contents/website')}}/js/select2.min.js"></script>
    <script src="{{asset('contents/website')}}/js/main.js"></script>
    <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif

    </script>
</body>


</html>
