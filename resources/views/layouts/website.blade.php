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
                        <a class="st-site-branding" href="index.html"><img
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
                                <b class="is-visible">Bladder cancer.</b>
                                <b>Cervical cancer.</b>
                                <b>Colon cancer. </b>
                                <b>Kidney cancer. </b>
                                <b>Lung cancer. </b>
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
                            <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
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
                            <div class="st-iconbox-text">Lorem ipsum dolor sit amet consectet adipis sed do eiusmod
                                tempor inc ididunt
                                utid labore.</div>
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
                            <h2 class="st-iconbox-title">24 Hours Service</h2>
                            <div class="st-iconbox-text">Lorem ipsum dolor sit amet consectet adipis sed do eiusmod
                                tempor inc ididunt
                                utid labore.</div>
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
                            <div class="st-iconbox-text">Lorem ipsum dolor sit amet consectet adipis sed do eiusmod
                                tempor inc ididunt
                                utid labore.</div>
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
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="st-vertical-middle">
                            <div class="st-vertical-middle-in">
                                <div class="st-text-block st-style1">
                                    <h2 class="st-text-block-title">A hospital is a health care institution providing
                                        patient treatment
                                        with specialized medical</h2>
                                    <div class="st-height-b20 st-height-lg-b20"></div>
                                    <div class="st-text-block-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incidid unt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamc laboris
                                            nisi ut aliquip. Commodo consequat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incidid unt
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamc laboris
                                            nisi ut aliquip. Commodo consequat. Sed do eiusmod tempor incidid unt labore
                                            et dolore magna
                                            aliqua.</p>
                                    </div>
                                    <div class="st-height-b25 st-height-lg-b25"></div>
                                    <div class="st-text-block-avatar">
                                        <div class="st-avatar-img"><img
                                                src="{{asset('contents/website')}}/img/avatar1.png" alt="avatar"></div>
                                        <div class="st-avatar-info">
                                            <h4 class="st-avatar-name">David Ambrose</h4>
                                            <div class="st-avatar-designation">Founder & Director</div>
                                        </div>
                                    </div>
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
                                        <div class="st-call-number">(+01) - 234 567 890</div>
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
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-tabs st-fade-tabs st-style1">
                    <ul class="st-tab-links st-style1 st-mp0">
                        <li class="st-tab-title active ">
                            <a href="#Crutches" class="st-blue-box">
                                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m30.991 30h30v251.001l60.004 80.005v150.994h30v-150.994l60.004-80.005v-251.001h30v-30h-210.008zm60 231.001v-70.006h90.008v70.006zm75.008 30-30.004 40.005-30.004-40.005zm15-130.006h-90.008v-130.995h90.008z" />
                                        <path
                                            d="m481.009 0h-210.008v30h30v251.001l60.004 80.005v150.994h30v-150.994l60.004-80.005v-251.001h30zm-150.008 261.001v-70.006h90.008v70.006zm75.008 30-30.004 40.005-30.004-40.005zm15-130.006h-90.008v-130.995h90.008z" />
                                    </g>
                                </svg>
                                <span>Crutches</span>
                            </a>
                        </li>
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
                                <span>X-ray</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Pulmonary" class="st-green-box">
                                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="m466.257 66.381c-57.472-57.474-148.962-60.702-210.257-9.683-61.293-51.019-152.785-47.79-210.257 9.683-29.498 29.497-45.743 68.716-45.743 110.432s16.245 80.935 45.743 110.432l199.651 199.651c2.813 2.813 6.628 4.394 10.606 4.394s7.793-1.581 10.606-4.394l199.651-199.651c29.498-29.498 45.743-68.717 45.743-110.432s-16.245-80.935-45.743-110.432zm-399.301 21.212c24.598-24.597 56.908-36.896 89.219-36.896s64.622 12.299 89.219 36.896c5.857 5.858 15.355 5.858 21.213 0 49.196-49.194 129.243-49.195 178.438 0 23.83 23.832 36.955 55.518 36.955 89.22 0 22.931-6.082 44.926-17.472 64.151h-90l-55.797-83.695c-2.852-4.278-7.678-6.806-12.838-6.675-5.14.122-9.86 2.869-12.505 7.278l-80.491 134.151-46.665-46.665c-2.813-2.813-6.628-4.394-10.606-4.394h-108.154c-11.39-19.226-17.472-41.22-17.472-64.151 0-33.703 13.125-65.388 36.956-89.22zm189.044 367.483-184.112-184.112h77.524l55.856 55.856c2.83 2.83 6.652 4.394 10.605 4.394.609 0 1.222-.037 1.833-.112 4.584-.564 8.653-3.209 11.03-7.17l78.18-130.3 47.102 70.653c2.782 4.173 7.466 6.68 12.481 6.68h73.612z" />
                                    </g>
                                </svg>
                                <span>Pulmonary</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Cardiology" class="st-dip-blue-box">
                                <svg height="512pt" viewBox="-73 0 512 512.001" width="512pt"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m335.832031 313.679688c.011719.023437.023438.046874.03125.066406 1.699219 3.804687 5.304688 6.035156 9.128907 6.035156 1.367187 0 2.761718-.285156 4.105468-.882812 5.117188-2.273438 7.328125-8.105469 5.039063-13.277344-2.285157-5.171875-8.089844-7.457032-13.214844-5.203125-5.125 2.257812-7.359375 8.082031-5.089844 13.261719zm0 0" />
                                    <path
                                        d="m363.421875 342.824219c-.859375-5.453125-5.980469-9.179688-11.4375-8.3125-5.453125.859375-9.175781 5.980469-8.3125 11.4375 2.242187 14.207031 2.859375 28.6875 1.828125 43.035156-2.390625 33.261719-19.203125 63.617187-46.128906 83.289063l-6.761719 4.9375c-13.246094 9.675781-28.914063 14.789062-45.316406 14.789062-5.9375 0-11.878907-.691406-17.652344-2.054688l-26.5-6.257812c-51.21875-12.09375-97.9375-40.515625-131.550781-80.027344-14.941406-17.566406-21.679688-30.34375-26.855469-43.503906.414063-1.335938.5625-2.777344.367187-4.257812-.054687-.429688-4.976562-43.621094 55.933594-71.347657 41.773438-19.015625 61.316406-51.535156 68.117188-65.554687 45.796875 6.320312 61.558594 19.210937 62.730468 20.222656 2.417969 2.5625 5.753907 3.390625 9.207032 2.609375.832031-.1875 1.65625-.367187 2.476562-.539063 32.042969-6.726562 65.09375 10.339844 78.601563 40.5625 2.253906 5.042969 8.167969 7.304688 13.210937 5.050782 5.042969-2.253906 7.300782-8.167969 5.050782-13.210938-7.652344-17.113281-20.519532-31.523437-36.539063-41.097656.007813-.035156.023437-.066406.035156-.101562 2.015625-6.441407 3.035157-13.160157 3.035157-19.964844 0-1.363282-.054688-2.714844-.132813-4.058594h6.9375c5.519531 0 10-4.476562 10-10s-4.480469-10-10-10h-11.304687c-2.570313-6.632812-6.160157-12.761719-10.59375-18.179688l4.527343-4.527343c3.90625-3.90625 3.90625-10.238281 0-14.144531-3.90625-3.902344-10.234375-3.902344-14.140625 0l-5.234375 5.234374c-8.109375-5.382812-17.457031-9.042968-27.519531-10.457031 13.25-10.597656 30.65625-15.617187 51.867188-14.894531 2.707031.101562 5.339843-.921875 7.292968-2.804688 1.949219-1.882812 3.046875-4.476562 3.046875-7.1875v-38.09375c0-5.203124-3.988281-9.535156-9.175781-9.964843-1.621094-.132813-20.347656-1.558594-44.695312 1.371093-10.886719-21.066406-26.210938-36.714843-43.835938-45.402343l7.078125-10.566407c3.074219-4.589843 1.84375-10.800781-2.746094-13.871093-4.585937-3.074219-10.796875-1.847657-13.871093 2.742187l-10.132813 15.128906c-4.320313-.796874-8.722656-1.222656-13.179687-1.222656-2.570313 0-5.128907.144532-7.664063.414063v-12.042969c0-5.523438-4.476563-10-10-10s-10 4.476562-10 10v17.101562c-9.382813 3.820313-18.269531 9.589844-26.386719 17.230469-6.074218 5.714844-11.539062 12.324219-16.332031 19.65625-3.75-7.398437-11.429687-12.488281-20.277344-12.488281h-27.144531c-12.53125 0-22.726562 10.195312-22.726562 22.726562v102.222657c-5.03125 3.910156-9.882813 8.492187-14.523438 13.785156-21.921875 25.003906-26.285156 57.769531-26.0859375 80.851563.2265625 26.109374 6.5390625 52.726562 16.5156255 69.792968 1.507812 4.039063 2.863281 7.933594 4.179687 11.710938 6.722656 19.273437 13.070313 37.480468 35.652344 64.027344 36.355469 42.738281 86.851562 73.46875 142.191406 86.535156l26.496094 6.257812c7.28125 1.71875 14.765625 2.589844 22.25 2.589844 20.671875 0 40.421875-6.445312 57.109375-18.636719l6.761718-4.9375c31.6875-23.148437 51.472657-58.867187 54.285157-98.007812 1.140625-15.867188.457031-31.878907-2.027344-47.59375zm-122.03125-121.492188c-4.03125-2.804687-10.902344-6.800781-21.640625-10.808593.828125-9.625 3.621094-27.761719 13.011719-44.207032 2.433593-.382812 4.917969-.585937 7.398437-.585937 25.804688 0 46.800782 20.996093 46.800782 46.800781 0 3.972656-.503907 7.894531-1.480469 11.695312-14.195313-4.601562-29.398438-5.636718-44.089844-2.894531zm50.316406-128.277343v18.5c-24.773437 1.074218-45.210937 9.347656-60.859375 24.652343-21.976562 21.503907-28.605468 51.375-30.59375 68.347657-9.566406-2.386719-20.925781-4.539063-34.367187-6.144532-3.039063-2.816406-6.066407-5.472656-9.082031-7.980468.015624-.242188.035156-.480469.035156-.726563 0-26.859375 8.679687-48.484375 25.792968-64.269531 32.546876-30.019532 87.417969-32.589844 109.074219-32.378906zm-110.558593-51.425782c5.011718 0 9.949218.738282 14.753906 2.140625.003906 0 .011718.003907.015625.003907 15.9375 4.65625 30.375 16.753906 40.980469 34.527343-23.246094 5.011719-48.398438 14.539063-67.765626 32.375-18.441406 16.980469-29.050781 39.042969-31.652343 65.710938-8.183594-5.078125-16.28125-8.980469-24.265625-11.6875v-57.824219c.171875-.402344.332031-.8125.457031-1.242188 11.027344-38.28125 38.144531-64.003906 67.476563-64.003906zm-120.53125 32.597656c0-1.503906 1.222656-2.726562 2.726562-2.726562h27.144531c1.503907 0 2.726563 1.222656 2.726563 2.726562v86.167969c-3.351563-.292969-6.675782-.371093-9.980469-.222656-7.824219.347656-15.371094 1.949219-22.617187 4.769531zm-19.484376 129.195313c12.925782-14.746094 27.390626-22.574219 42.992188-23.269531 19.894531-.890625 42.785156 9.921875 66.394531 31.3125-6.105469 11.980468-23.09375 39.097656-57.769531 54.882812-38.269531 17.417969-54.605469 41.050782-61.574219 57.804688-.117187.285156-.226562.5625-.34375.84375-12.640625-28.003906-19.4375-87.65625 10.300781-121.574219zm0 0" />
                                    <path
                                        d="m126.820312 402.167969c-4.25-3.527344-10.554687-2.9375-14.082031 1.3125-3.523437 4.25-2.9375 10.554687 1.3125 14.078125 27.050781 22.445312 59.449219 38.578125 93.6875 46.664062.773438.183594 1.546875.269532 2.308594.269532 4.53125 0 8.636719-3.101563 9.722656-7.703126 1.269531-5.375-2.058593-10.761718-7.433593-12.03125-31.253907-7.378906-60.824219-22.109374-85.515626-42.589843zm0 0" />
                                    <path
                                        d="m87.867188 376.636719c-4.175782 3.617187-4.648438 9.902343-1.035157 14.074219 1.980469 2.375 4.824219 3.597656 7.691407 3.597656 2.257812 0 4.527343-.757813 6.394531-2.316406 4.242187-3.535157 4.816406-9.839844 1.28125-14.082032l-.203125-.238281c-3.617188-4.175781-9.957032-4.652344-14.128906-1.035156zm0 0" />
                                </svg>
                                <span>Cardiology</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#DentalCare" class="st-orange-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 480.335 480.335" xml:space="preserve">
                                    <g>
                                        <path d="M341.311,0c-6.249,0.011-12.488,0.5-18.662,1.462c-14.488,2.469-28.449,7.393-41.28,14.56
                        c-25.694,13.956-56.706,13.956-82.4,0c-12.835-7.142-26.796-12.039-41.28-14.48C90.764-8.885,28.058,36.915,17.63,103.84
                        c-0.958,6.148-1.447,12.36-1.462,18.582v13.6c-0.142,22.285,5.925,44.169,17.52,63.2c30.684,49.633,50.202,105.349,57.2,163.28
                        l8.88,73.52c2.439,22.858,20.241,41.057,43.04,44c26.339,3.001,50.124-15.918,53.125-42.258c0.027-0.234,0.052-0.468,0.075-0.702
                        l16.72-156.16c1.639-15.155,15.253-26.111,30.408-24.472c12.894,1.394,23.078,11.578,24.472,24.472l16.72,155.92
                        c2.474,24.619,23.257,43.324,48,43.2h1.36c23.909,0.276,44.375-17.086,48-40.72l12.4-77.84c9.56-57.745,28.475-113.545,56-165.2
                        c9.255-17.588,14.087-37.166,14.08-57.04v-16.8C464.048,54.69,409.043-0.12,341.311,0z M448.169,139.222
                        c-0.046,17.675-4.442,35.066-12.8,50.64c-28.409,52.741-47.746,109.885-57.2,169.04l-12.48,77.92
                        c-2.393,15.777-16.043,27.38-32,27.2h-1.36c-16.523,0.079-30.389-12.435-32-28.88l-16.72-155.12
                        c-1.998-23.997-23.071-41.83-47.068-39.831c-20.83,1.735-37.499,18.008-39.732,38.791l-16.64,155.28
                        c-1.287,14.018-11.354,25.662-25.04,28.96c-17.185,4.123-34.459-6.466-38.582-23.652c-0.318-1.326-0.551-2.672-0.698-4.028
                        l-10.24-85.2c-7.763-56.732-27.566-111.148-58.08-159.6c-9.991-16.508-15.3-35.424-15.36-54.72v-13.6
                        C32.174,63.659,79.816,16.027,138.579,16.032c18.05,0.002,35.804,4.596,51.589,13.349c31.071,17.367,68.929,17.367,100,0v0.08
                        c51.39-28.498,116.153-9.94,144.651,41.45c8.741,15.762,13.334,33.486,13.349,51.51V139.222z" />
                                        <path
                                            d="M308.089,65.062c-21.091,10.424-44.401,15.559-67.92,14.96c-23.572,0.625-46.941-4.51-68.08-14.96
                        c-3.845-2.158-8.711-0.798-10.88,3.04c-2.158,3.845-0.798,8.711,3.04,10.88c23.519,11.841,49.597,17.694,75.92,17.04
                        c26.323,0.654,52.401-5.199,75.92-17.04c3.844-2.209,5.169-7.116,2.96-10.96C316.84,64.178,311.933,62.853,308.089,65.062z" />
                                    </g>
                                </svg>
                                <span>Dental care</span>
                            </a>
                        </li>
                        <li class="st-tab-title">
                            <a href="#Neurology" class="st-gray-box">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512.001 512.001" xml:space="preserve">
                                    <g>
                                        <path d="M509.61,192.336c-0.918-2.538-2.156-5.031-3.782-7.615c-0.037-0.057-0.072-0.113-0.11-0.17l-1.203-1.81
                      c-0.031-0.046-0.064-0.094-0.096-0.14c-0.41-0.589-0.831-1.16-1.268-1.718c-0.909-1.16-1.873-2.248-2.864-3.232l-2.618-2.6
                      l2.404-2.801c1.611-1.879,2.956-4.125,4.356-7.286c0.023-0.052,0.045-0.103,0.068-0.156c0.609-1.455,1.184-2.876,1.516-4.22
                      c0.4-1.575,0.716-3.175,0.956-4.841c0.983-6.48,0.127-13.603-2.501-20.671c-0.646-1.687-1.481-3.31-2.281-4.828
                      c-0.028-0.053-0.056-0.105-0.085-0.157l-0.236-0.425c-0.789-1.423-1.535-2.767-2.348-3.82l-0.08-0.105
                      c-1.046-1.401-2.17-2.767-3.312-4.029c-1.257-1.403-2.32-2.423-3.395-3.266c-3.167-2.524-5.427-3.985-7.731-5.011
                      c-2.726-1.246-5.483-2.147-8.191-2.679l-3.58-0.704l0.403-3.627c0.305-2.749,0.274-5.672-0.084-8.618
                      c-0.284-2.514-0.959-5.094-2.261-8.626c-0.021-0.056-0.041-0.111-0.063-0.166c-2.31-5.869-6.193-11.361-11.164-15.825
                      c-2.675-2.453-5.706-4.317-8.049-5.667c-0.055-0.031-0.111-0.064-0.167-0.094c-2.427-1.324-5.16-2.405-8.593-3.404
                      c-2.402-0.7-5.133-1.097-8.595-1.251c-0.045-0.002-0.091-0.003-0.136-0.004c-0.439-0.012-0.874-0.019-1.307-0.019
                      c-0.693,0-1.718,0.018-2.759,0.114c-1.409,0.147-2.807,0.369-4.155,0.661l-3.838,0.832l-0.871-3.83
                      c-2.52-11.089-11.136-21.184-22.479-26.344c-5.557-2.53-11.384-3.814-17.318-3.814c-6.059,0-11.954,1.383-17.049,3.999
                      l-3.515,1.804l-1.819-3.509c-5.336-10.289-15.625-17.866-27.498-20.266c-2.873-0.59-5.795-0.889-8.685-0.889
                      c-9.16,0-17.872,2.979-24.531,8.388l-3.127,2.54l-2.492-3.166c-1.678-2.132-3.652-4.089-5.83-5.787
                      c-2.164-1.708-4.553-3.233-7.1-4.528c-0.092-0.046-0.184-0.092-0.279-0.135c-5.742-2.649-11.578-4.009-17.345-4.04
                      c-0.231-0.004-0.994-0.018-1.267-0.018c-5.415,0-10.942,1.173-16.426,3.486c-0.095,0.04-0.189,0.082-0.282,0.125
                      c-2.584,1.209-5.037,2.665-7.257,4.301c-2.239,1.633-4.258,3.509-6.001,5.577l-2.596,3.081l-3.042-2.644
                      c-6.867-5.972-16.002-9.26-25.722-9.26c-2.385,0-4.802,0.203-7.181,0.603c-11.937,2.003-22.471,9.187-28.178,19.216l-1.95,3.424
                      l-3.437-1.925c-5.511-3.087-11.947-4.719-18.614-4.719c-5.298,0-10.527,1.021-15.541,3.032c-0.048,0.019-0.098,0.04-0.147,0.06
                      c-3.069,1.302-5.839,2.787-8.231,4.416c-0.06,0.041-0.119,0.082-0.178,0.125c-2.441,1.759-4.691,3.721-6.686,5.831
                      c-0.064,0.067-0.125,0.134-0.185,0.203c-4.047,4.582-6.823,9.5-8.249,14.617l-1.05,3.768l-3.781-0.996
                      c-2.906-0.765-5.665-1.184-8.203-1.241c-0.038-0.001-0.074-0.001-0.111-0.001l-0.601-0.005c-2.628,0-5.332,0.259-8.037,0.77
                      c-0.063,0.012-0.124,0.024-0.186,0.038c-2.725,0.581-5.549,1.527-8.699,2.921c-2.503,1.133-5.216,2.8-8.298,5.096
                      c-0.055,0.041-0.11,0.083-0.164,0.126c-2.267,1.782-4.511,4.002-6.862,6.791c-0.059,0.07-0.117,0.142-0.175,0.214
                      c-1.765,2.244-3.398,4.854-4.855,7.76c-0.044,0.087-0.086,0.176-0.127,0.264c-2.547,5.572-3.741,11.38-3.454,16.797l0.203,3.81
                      l-3.798,0.35c-1.325,0.122-2.685,0.324-4.042,0.603c-0.095,0.019-0.19,0.041-0.284,0.064c-1.186,0.287-2.483,0.69-3.906,1.215
                      c-3.243,1.22-5.859,2.574-7.95,4.104l-0.109,0.084c-3.085,2.169-5.393,4.229-7.203,6.411l-0.115,0.136
                      c-1.076,1.241-2.119,2.559-3.101,3.914c-0.089,0.124-0.176,0.25-0.259,0.379c-0.848,1.324-1.696,2.806-2.573,4.499
                      c-3.138,5.994-4.79,13.099-4.651,20.048c0.071,2.805,0.563,5.908,1.462,9.225c0.019,0.071,0.04,0.142,0.06,0.212
                      c0.76,2.527,1.97,5.144,3.6,7.78l1.882,3.044l-2.836,2.184c-7.476,5.757-15.259,18.566-12.593,35.716
                      c0.023,0.141,0.047,0.282,0.078,0.423c0.402,1.909,0.894,3.824,1.487,5.774l0.182,0.576c0.314,1.005,0.46,1.459,0.7,2.026
                      c0.414,0.953,0.847,1.888,1.273,2.752c0.82,1.633,1.706,3.357,2.721,4.889c0.06,0.091,0.122,0.18,0.185,0.268
                      c1.081,1.499,2.25,2.966,3.433,4.303l0.312,0.345c0.518,0.577,0.916,1.013,1.316,1.396c0.077,0.073,0.154,0.144,0.234,0.214
                      c0.654,0.579,1.315,1.132,1.975,1.656c1.271,1.01,2.578,1.937,3.885,2.756c0.155,0.097,0.314,0.19,0.474,0.276
                      c2.702,1.45,5.496,2.496,8.302,3.113l3.146,0.692l-0.031,3.222c-0.029,3.008,0.36,6.078,1.125,8.878
                      c0.028,0.105,0.059,0.208,0.092,0.312c0.47,1.481,1.046,2.991,1.708,4.479c0.314,0.706,0.648,1.414,1.006,2.121
                      c0.069,0.136,0.141,0.27,0.218,0.401c0.375,0.649,0.774,1.282,1.191,1.926c0.939,1.439,1.979,2.875,3.094,4.268
                      c0.069,0.087,0.141,0.172,0.213,0.255c0.955,1.097,2.077,2.236,3.676,3.722c0.698,0.641,1.416,1.274,2.123,1.866
                      c0.592,0.484,1.125,0.85,1.554,1.144l0.591,0.409c1.489,1.015,3.055,1.985,4.655,2.882c0.119,0.067,0.239,0.13,0.361,0.191
                      c6.095,3.023,12.422,4.622,18.295,4.622c0.341,0,0.678-0.004,1.103-0.019c1.53-0.036,3.05-0.144,4.52-0.327
                      c0.058-0.006,0.116-0.015,0.175-0.023c1.514-0.221,3.037-0.61,4.13-0.906c3.05-0.857,5.574-1.887,7.713-3.152l3.409-2.013
                      l2.02,3.405c5.766,9.724,16.867,16.803,28.955,18.474c1.964,0.276,3.953,0.415,5.909,0.415c9.82,0,19.171-3.481,26.333-9.802
                      l3.04-2.682l2.616,3.096c7.284,8.618,18.178,13.783,29.893,14.173c0.551,0.017,1.098,0.004,1.647,0.001
                      c-3.008,5.793-4.655,12.299-4.655,19.072c0,20.098,14.41,36.888,33.441,40.597c1.954,36.836,24.031,70.489,57.384,86.75
                      l29.562,14.415l0.234,0.113c10.163,4.898,16.478,14.741,16.478,25.688c0,15.114,12.297,27.411,27.411,27.411h9.853
                      c15.114,0,27.411-12.297,27.411-27.411c0-21.804-7.886-42.651-21.448-59.093c2.464,0.172,4.937,0.269,7.413,0.269
                      c1.458,0,2.919-0.03,4.378-0.091c56.463-2.342,100.665-48.494,100.629-105.07c-0.002-4.464-3.622-8.079-8.084-8.079
                      c-0.001,0-0.003,0-0.005,0c-4.465,0.002-8.082,3.625-8.079,8.09c0.03,47.871-37.364,86.924-85.131,88.905
                      c-14.783,0.614-29.559-2.451-42.713-8.865l-29.562-14.415c-10.235-4.991-17.575-14.428-20.17-25.28
                      c0.069-0.005,0.138-0.003,0.206-0.009c6.341-0.507,12.016-2.109,16.84-4.746c5.092-2.755,9.358-6.313,12.684-10.575l2.465-3.161
                      l3.135,2.499c4.189,3.34,9.257,5.893,14.657,7.385c0.093,0.026,0.186,0.05,0.28,0.072c3.382,0.805,6.814,1.213,10.201,1.213
                      c2.46,0,4.977-0.22,7.28-0.636c0.036-0.006,0.071-0.013,0.107-0.021c6.424-1.25,12.051-3.593,16.652-6.914
                      c2.389-1.686,4.536-3.54,6.378-5.51c0.046-0.05,0.092-0.099,0.136-0.15c1.864-2.094,3.488-4.346,4.828-6.694l1.944-3.409
                      l3.429,1.908c2.672,1.487,5.224,2.577,7.622,3.25c2.748,0.758,5.651,1.236,8.569,1.422l0.136,0.01
                      c2.596,0.213,5.522,0.024,9.03-0.594c3.548-0.62,6.471-1.486,9.193-2.728l0.214-0.094c11.969-5.108,21.12-15.679,23.319-26.946
                      l0.721-3.696l3.729,0.528c1.288,0.182,2.661,0.36,4.146,0.36c0.001,0,0.003,0,0.005,0c1.435-0.015,2.916-0.117,4.405-0.308
                      c1.499-0.191,3.031-0.472,4.568-0.84c1.42-0.342,2.933-0.951,4.267-1.487c0.029-0.012,0.073-0.03,0.102-0.042
                      c1.5-0.624,3.014-1.343,4.5-2.137c0.055-0.029,0.11-0.059,0.164-0.089c1.32-0.746,2.62-1.69,4.062-2.758
                      c0.047-0.036,0.094-0.07,0.14-0.107c1.264-0.98,2.697-2.091,3.921-3.302c0.044-0.044,0.088-0.088,0.132-0.133
                      c1.294-1.34,2.541-2.752,3.709-4.204c0.522-0.65,1.033-1.302,1.52-1.965c0.108-0.148,0.211-0.299,0.309-0.453
                      c0.446-0.702,0.876-1.409,1.295-2.127c0.885-1.52,1.706-3.084,2.443-4.648c0.066-0.14,0.127-0.281,0.185-0.425
                      c1.315-3.269,2.227-6.432,2.71-9.398c0.021-0.127,0.039-0.254,0.053-0.383c0.299-2.626,0.585-6.041,0.14-9.192
                      c-0.475-3.331-1.19-6.078-2.184-8.398l-1.438-3.359l3.229-1.71c2.466-1.305,4.813-2.935,6.976-4.844
                      c0.082-0.072,0.163-0.147,0.241-0.222c2.278-2.181,4.22-4.473,5.817-6.886c3.599-5.558,5.942-12.11,6.595-18.393l0.014-0.124
                      C512.465,204.693,511.767,198.418,509.61,192.336z M299,396.014l29.563,14.415c0.011,0.005,0.023,0.011,0.034,0.016
                      c26.682,12.859,43.924,40.093,43.924,69.383c0,6.199-5.043,11.242-11.242,11.242h-9.853c-6.199,0-11.242-5.043-11.242-11.242
                      c0-17.213-9.82-32.636-25.661-40.27l-29.695-14.478c-27.857-13.581-46.375-41.568-48.284-72.288
                      c0.635-0.128,1.27-0.259,1.898-0.416c4.329-1.093,6.951-5.489,5.859-9.817c-1.094-4.329-5.489-6.95-9.817-5.859
                      c-2.011,0.509-4.097,0.765-6.198,0.765c-13.895,0-25.199-11.304-25.199-25.199c0-4.759,1.328-9.305,3.735-13.213
                      c6.198,14.171,19.455,24.446,34.904,26.641l2.507,0.357l0.733,2.423c2.005,6.632,5.801,12.63,10.978,17.343
                      c3.884,3.538,8.419,6.271,13.136,7.942C271.21,371.795,282.478,387.958,299,396.014z M495.64,209.173l-0.028,0.258
                      c-0.4,3.851-1.852,7.876-4.043,11.26c-0.853,1.287-2.01,2.651-3.353,3.952c-1.174,1.02-2.425,1.885-3.721,2.571l-8.118,4.298
                      c-0.232-0.021-0.466-0.036-0.703-0.036h-14.033c-9.365,0-16.982-7.617-16.982-16.982c0-18.279-14.872-33.151-33.151-33.151h-1.178
                      c-18.279,0-33.151,14.871-33.151,33.151c0,8.301-6.753,15.054-15.054,15.054c-9.365,0-16.982-7.617-16.982-16.982v-7.071
                      c0-4.465-3.62-8.084-8.084-8.084c-4.465,0-8.084,3.62-8.084,8.084v7.071c0,18.279,14.871,33.151,33.151,33.151
                      c17.216,0,31.222-14.006,31.222-31.222c0-9.365,7.617-16.982,16.982-16.982h1.178c9.365,0,16.982,7.617,16.982,16.982
                      c0,18.279,14.871,33.151,33.151,33.151h11.497l2.267,5.294c0.421,0.985,0.772,2.437,1.038,4.304
                      c0.136,0.967,0.078,2.61-0.175,4.886c-0.29,1.685-0.84,3.555-1.635,5.565c-0.511,1.07-1.078,2.141-1.684,3.183
                      c-0.265,0.454-0.538,0.905-0.819,1.354c-0.304,0.405-0.619,0.804-0.936,1.198c-0.836,1.04-1.732,2.057-2.661,3.023
                      c-0.534,0.513-1.518,1.279-2.336,1.912c-0.665,0.494-1.701,1.258-2.259,1.586c-0.992,0.527-1.991,1-2.908,1.382
                      c-0.585,0.235-1.675,0.674-2.006,0.765c-0.959,0.229-1.917,0.405-2.841,0.523c-0.868,0.111-1.718,0.17-2.457,0.179
                      c-0.372,0-1.437-0.152-1.786-0.202l-11.328-1.606c-4.262-0.606-8.245,2.234-9.069,6.456l-2.191,11.228
                      c-1.186,6.072-6.743,12.175-13.832,15.186c-0.034,0.015-0.07,0.03-0.104,0.045l-0.307,0.136c-0.033,0.015-0.068,0.03-0.1,0.045
                      c-1.443,0.662-3.126,1.146-5.308,1.527c-1.662,0.292-3.007,0.435-4.11,0.435c-0.266,0-0.531-0.008-0.887-0.037l-0.29-0.021
                      c-1.875-0.119-3.678-0.415-5.323-0.868c-0.787-0.221-2.136-0.713-4.091-1.8l-10.42-5.798c-3.874-2.156-8.758-0.79-10.954,3.059
                      l-5.907,10.355c-0.766,1.343-1.706,2.649-2.796,3.883c-1.079,1.143-2.368,2.245-3.896,3.323c-2.745,1.98-6.209,3.391-10.294,4.193
                      c-3.25,0.579-7.046,0.472-10.671-0.371c-3.26-0.919-6.28-2.439-8.742-4.402l-5.425-4.326c0.027-0.267,0.041-0.538,0.041-0.812
                      v-1.178c0-18.279-14.872-33.151-33.151-33.151c-8.301,0-15.054-6.753-15.054-15.054c0-9.365,7.617-16.982,16.982-16.982h7.07
                      c4.465,0,8.084-3.62,8.084-8.084s-3.62-8.084-8.084-8.084h-7.07c-18.279,0-33.151,14.871-33.151,33.151
                      c0,17.216,14.006,31.222,31.222,31.222c9.365,0,16.982,7.617,16.982,16.982v0.86l-6.876,8.815
                      c-1.945,2.493-4.512,4.612-7.66,6.316c-2.843,1.554-6.343,2.507-10.391,2.831c-2.021,0.158-4.149,0.009-6.362-0.439
                      c-0.033-0.008-0.067-0.015-0.101-0.023c-1.2-0.248-2.423-0.578-3.67-1.004c-2.786-0.946-5.512-2.588-7.883-4.747
                      c-3.019-2.75-5.229-6.231-6.389-10.069l-2.226-7.362c-0.911-3.012-3.486-5.221-6.601-5.664l-7.614-1.082
                      c-10.855-1.544-20.042-9.309-23.405-19.784l-3.375-10.513c-1.093-3.405-4.25-5.614-7.693-5.614c-0.593,0-1.194,0.066-1.795,0.202
                      l-10.771,2.446c-2.109,0.48-4.331,0.681-6.504,0.61c-7.15-0.238-13.739-3.319-18.077-8.452l-7.946-9.404
                      c-1.403-1.661-3.416-2.686-5.585-2.845c-2.17-0.155-4.309,0.563-5.939,2.001l-9.232,8.148c-5.07,4.475-12.051,6.514-19.315,5.496
                      c-7.232-0.999-14.014-5.202-17.279-10.707l-6.135-10.347c-2.274-3.836-7.225-5.104-11.065-2.837l-10.357,6.117
                      c-0.904,0.534-2.204,1.041-3.787,1.486c-0.902,0.244-1.605,0.405-2.09,0.482c-0.906,0.109-1.854,0.175-2.885,0.198
                      c-0.279,0.009-0.467,0.013-0.656,0.013c-3.341,0-7.116-0.985-10.93-2.849c-1.126-0.638-2.223-1.319-3.209-1.992l-0.627-0.433
                      c-0.152-0.105-0.307-0.203-0.371-0.25c-0.46-0.387-0.99-0.853-1.468-1.292c-1.063-0.988-1.796-1.719-2.351-2.344
                      c-0.747-0.942-1.44-1.902-2.051-2.84c-0.219-0.336-0.435-0.675-0.642-1.022c-0.194-0.391-0.378-0.785-0.556-1.184
                      c-0.398-0.894-0.74-1.78-1.02-2.639c-0.35-1.341-0.528-2.825-0.514-4.304l0.095-9.787c0.038-3.825-2.612-7.153-6.348-7.974
                      l-9.561-2.102c-1.273-0.279-2.581-0.764-3.889-1.442c-0.725-0.467-1.459-0.995-2.188-1.574c-0.372-0.295-0.742-0.603-1.109-0.922
                      c-0.133-0.142-0.291-0.321-0.455-0.503l-0.269-0.297c-0.744-0.841-1.525-1.82-2.267-2.838c-0.508-0.792-1.104-1.963-1.65-3.049
                      c-0.267-0.542-0.555-1.163-0.805-1.73c-0.06-0.185-0.136-0.431-0.216-0.689l-0.165-0.521c-0.41-1.347-0.766-2.725-1.063-4.1
                      c-1.596-10.762,3.33-17.764,6.513-20.215l8.616-6.634c3.283-2.529,4.124-7.131,1.945-10.656l-5.717-9.248
                      c-0.85-1.376-1.485-2.702-1.84-3.841c-0.534-1.996-0.834-3.82-0.871-5.243c-0.083-4.17,0.942-8.611,2.827-12.213
                      c0.618-1.191,1.184-2.193,1.726-3.055c0.667-0.91,1.371-1.795,2.139-2.681l0.226-0.267c0.93-1.121,2.24-2.259,4.195-3.635
                      l0.234-0.169c0.925-0.677,2.32-1.369,4.099-2.038c0.731-0.269,1.379-0.477,1.929-0.618c0.729-0.143,1.448-0.249,2.14-0.313
                      l11.543-1.065c4.325-0.399,7.561-4.143,7.33-8.481L62.89,95.757c-0.148-2.782,0.527-5.92,1.953-9.083
                      c0.929-1.833,1.926-3.44,2.965-4.78c1.565-1.845,2.979-3.263,4.32-4.328c2.07-1.537,3.824-2.635,5.154-3.238
                      c1.989-0.88,3.796-1.501,5.374-1.846c1.686-0.313,3.346-0.471,4.869-0.472l0.465,0.004c0.88,0.024,2.344,0.168,4.403,0.71
                      l11.265,2.967c6.521,6.629,6.494,17.325-0.094,23.913c-6.261,6.262-9.71,14.586-9.71,23.441c0,8.855,3.448,17.18,9.71,23.441
                      l0.833,0.833c6.261,6.261,14.586,9.71,23.441,9.71s17.18-3.448,23.441-9.71c5.87-5.869,15.42-5.869,21.289,0
                      c6.622,6.621,6.622,17.395,0,24.017l-4.999,4.999c-3.157,3.157-3.156,8.276,0,11.433c1.579,1.578,3.648,2.367,5.716,2.367
                      c2.068,0,4.138-0.789,5.717-2.368l4.998-4.999c12.925-12.925,12.925-33.956,0-46.882c-12.174-12.174-31.981-12.174-44.155,0
                      c-3.208,3.208-7.472,4.974-12.009,4.974c-4.536,0-8.8-1.767-12.008-4.974l-0.833-0.833c-3.208-3.208-4.974-7.472-4.974-12.009
                      c0-4.536,1.767-8.8,4.974-12.008c12.822-12.823,12.917-33.615,0.302-46.565l1.62-5.814c0.755-2.708,2.336-5.449,4.701-8.15
                      c1.25-1.31,2.665-2.54,4.207-3.659c1.483-0.999,3.261-1.943,5.285-2.807c3.07-1.221,6.249-1.841,9.45-1.841
                      c3.905,0,7.61,0.919,10.712,2.657l10.442,5.848c3.876,2.173,8.778,0.807,10.976-3.054l5.922-10.401
                      c3.33-5.85,9.612-10.062,16.805-11.269c1.497-0.252,3.012-0.379,4.502-0.379c5.821,0,11.188,1.88,15.113,5.292l6.38,5.548
                      c-0.001,0.053-0.008,0.105-0.008,0.157v25.038c0,18.279,14.871,33.151,33.151,33.151c9.365,0,16.982,7.617,16.982,16.982v1.178
                      c0,9.365-7.619,16.982-16.982,16.982c-17.216,0-31.222,14.006-31.222,31.222c0,18.279,14.871,33.151,33.151,33.151h7.07
                      c4.465,0,8.084-3.62,8.084-8.084c0-4.465-3.62-8.084-8.084-8.084h-7.07c-9.365,0-16.982-7.619-16.982-16.982
                      c0-8.301,6.753-15.054,15.054-15.054c18.279,0,33.151-14.872,33.151-33.151v-1.178c0-18.279-14.872-33.151-33.151-33.151
                      c-9.365,0-16.982-7.617-16.982-16.982V36.603c0-0.229-0.015-0.454-0.034-0.678l6.104-7.247c0.906-1.076,1.97-2.062,3.197-2.957
                      c1.357-1.001,2.84-1.885,4.409-2.629c3.434-1.429,6.796-2.155,9.995-2.155c0.255,0,1.001,0.016,1.009,0.016
                      c0.045,0.001,0.089,0.001,0.134,0.001c3.409,0.013,6.959,0.849,10.555,2.488c1.547,0.798,2.987,1.719,4.314,2.767
                      c1.205,0.94,2.221,1.943,3.106,3.069l7.57,9.616c1.34,1.702,3.305,2.795,5.457,3.034c2.151,0.239,4.31-0.395,5.992-1.76
                      l9.499-7.717c5.035-4.091,12.413-5.72,19.793-4.206c7.148,1.444,13.268,5.88,16.371,11.864l5.524,10.656
                      c2.049,3.953,6.906,5.505,10.87,3.471l10.679-5.482c2.821-1.449,6.161-2.214,9.663-2.214c3.608,0,7.181,0.793,10.622,2.361
                      c6.743,3.068,12.008,9.038,13.411,15.211l0.971,4.272c-5.664,2.505-10.54,6.631-14.113,12.057
                      c-4.897,7.439-6.72,16.324-5.132,25.018c0.722,3.956-0.139,7.956-2.425,11.264c-2.286,3.308-5.724,5.527-9.68,6.25
                      c-4.462,0.815-8.976-0.157-12.706-2.737c-3.732-2.579-6.236-6.457-7.051-10.919l-1.27-6.956c-0.802-4.393-5.014-7.298-9.405-6.501
                      c-4.392,0.802-7.303,5.012-6.501,9.405l1.27,6.956c1.59,8.71,6.477,16.281,13.761,21.315c5.604,3.874,12.109,5.89,18.779,5.89
                      c2,0,4.015-0.181,6.024-0.549c8.204-1.498,15.334-6.101,20.076-12.962s6.529-15.157,5.031-23.361
                      c-0.825-4.514,0.171-9.335,2.731-13.224c2.561-3.89,6.365-6.469,10.711-7.264c0.11-0.02,0.216-0.052,0.323-0.077
                      c0.28-0.031,0.562-0.075,0.844-0.136l11.66-2.529c0.771-0.167,1.577-0.294,2.305-0.371c0.042-0.003,0.429-0.038,1.184-0.038
                      c0.264,0,0.528,0.004,0.794,0.012c2.074,0.095,3.62,0.297,4.725,0.62c2.245,0.653,3.932,1.301,5.297,2.034
                      c1.493,0.862,3.606,2.148,5.165,3.579c3.152,2.83,5.554,6.181,6.953,9.696c0.796,2.168,1.207,3.639,1.342,4.828
                      c0.219,1.803,0.243,3.423,0.073,4.955l-1.222,11.017c-0.464,4.177,2.351,8.013,6.475,8.825l10.879,2.139
                      c1.468,0.288,3.01,0.799,4.654,1.55c1.009,0.45,2.336,1.35,4.354,2.957c0.348,0.274,0.787,0.709,1.411,1.406
                      c0.842,0.93,1.617,1.871,2.41,2.934l0.106,0.137c0.208,0.299,0.743,1.263,1.099,1.906l0.194,0.349
                      c0.537,1.02,1.124,2.16,1.417,2.923c1.623,4.367,2.206,8.819,1.635,12.594c-0.167,1.153-0.374,2.21-0.637,3.25
                      c-0.105,0.375-0.526,1.389-0.722,1.859c-0.701,1.572-1.293,2.63-1.812,3.234l-7.3,8.505c-2.76,3.215-2.569,8.016,0.438,11.002
                      l7.956,7.901c0.517,0.513,1.03,1.093,1.516,1.714c0.234,0.3,0.465,0.61,0.689,0.93l1.094,1.645c0.977,1.562,1.7,3.007,2.193,4.373
                      C495.687,201.451,496.111,205.257,495.64,209.173z" />
                                    </g>
                                </svg>
                                <span>Neurology</span>
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
                                                    <h2 class="st-imagebox-title">Welcome to our <span>Crutches</span>
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
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
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
                                            <input type="tel" name="number" value="{{ old('number') }}"
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
                                            <label class="form-label">Bloog Group</label>
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
                                            <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" 
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
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>
                        Lorem Ipsum the industry's standard dummy text.</div>
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
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>
                        Lorem Ipsum the industry's standard dummy text.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="st-portfolio-wrapper">
                    <div class="st-isotop-filter st-style1 text-center">
                        <ul class="st-mp0">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".cardiology">Cardiology</a></li>
                            <li><a href="#" data-filter=".neurology">Neurology</a></li>
                            <li><a href="#" data-filter=".urology">Urology</a></li>
                            <li><a href="#" data-filter=".pulmonary">Pulmonary</a></li>
                            <li><a href="#" data-filter=".traumatology">Traumatology</a></li>
                        </ul>
                    </div>
                    <div class="st-isotop st-style1 st-port-col-3 st-has-gutter st-lightgallery">
                        <div class="st-grid-sizer"></div>
                        <div class="st-isotop-item cardiology urology">
                            <a href="{{asset('contents/website')}}/img/project1_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project1.jpg" alt="project1"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item cardiology neurology">
                            <a href="{{asset('contents/website')}}/img/project2_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project2.jpg" alt="project2"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item urology pulmonary">
                            <a href="{{asset('contents/website')}}/img/project3_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project3.jpg" alt="project3"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item neurology traumatology">
                            <a href="{{asset('contents/website')}}/img/project4_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project4.jpg" alt="project4"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item cardiology pulmonary">
                            <a href="{{asset('contents/website')}}/img/project5_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project5.jpg" alt="project5"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item neurology traumatology">
                            <a href="{{asset('contents/website')}}/img/project6_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project6.jpg" alt="project6"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->

                        <div class="st-isotop-item urology pulmonary traumatology">
                            <a href="{{asset('contents/website')}}/img/project7_lg.jpg"
                                class="st-project st-zoom st-lightbox-item st-link-hover-wrap">
                                <div class="st-project-img st-zoom-in"><img
                                        src="{{asset('contents/website')}}/img/project7.jpg" alt="project6"></div>
                                <span class="st-link-hover"><i class="fas fa-arrows-alt"></i></span>
                            </a>
                        </div><!-- .st-isotop-item -->
                    </div><!-- .isotop -->
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End gallery Section -->

        <!-- Start Testimonial Seciton -->
        <section>
            <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">What peoble say?</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                        typesetting
                        industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
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
                                            <h4 class="st-testimonial-name">Ralph Jones</h4>
                                            <div class="st-testimonial-designation">UX Designer</div>
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
                                            <h4 class="st-testimonial-name">Francis Jara</h4>
                                            <div class="st-testimonial-designation">Biographer</div>
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
                                            <h4 class="st-testimonial-name">David Baer</h4>
                                            <div class="st-testimonial-designation">Executive</div>
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
                                            <h4 class="st-testimonial-name">Ralph Jones</h4>
                                            <div class="st-testimonial-designation">UX Designer</div>
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
                                            <h4 class="st-testimonial-name">Francis Jara</h4>
                                            <div class="st-testimonial-designation">Biographer</div>
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
                                            <h4 class="st-testimonial-name">David Baer</h4>
                                            <div class="st-testimonial-designation">Executive</div>
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
                                    <div class="st-funfact-icon st-purple-box">
                                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m316 76c0-33.084-26.916-60-60-60s-60 26.916-60 60 26.916 60 60 60 60-26.916 60-60zm-60 40c-22.056 0-40-17.944-40-40s17.944-40 40-40 40 17.944 40 40-17.944 40-40 40z" />
                                                <path
                                                    d="m346 266v-40c0-49.626-40.374-90-90-90s-90 40.374-90 90v40c0 5.523 4.478 10 10 10h160c5.522 0 10-4.477 10-10zm-20-10h-140v-30c0-38.598 31.402-70 70-70s70 31.402 70 70z" />
                                                <path
                                                    d="m71.858 408.114 48.142 24.067v53.819c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-127.22c0-31.783-23.452-59.203-53.391-62.423-.795-.15-38.649-2.971-56.948-21.258l-27.38-27.379c-7.556-7.558-17.6-11.72-28.281-11.72v-80c0-22.056-17.944-40-40-40s-40 17.944-40 40v135.84c0 49.212 27.798 94.239 71.858 116.274zm-51.858-252.114c0-11.028 8.972-20 20-20s20 8.972 20 20v85.361c-12.196 7.052-20 20.2-20 34.639 0 10.68 4.162 20.723 11.719 28.28l51.21 51.22c3.903 3.905 10.236 3.907 14.142.001 3.905-3.905 3.906-10.236.001-14.142l-51.21-51.221c-3.78-3.779-5.862-8.8-5.862-14.138 0-8.464 5.357-16.044 13.332-18.861.003-.001.006-.003.009-.004h.001c6.88-2.439 15.066-1.005 20.797 4.726l27.383 27.383c18.65 18.637 45.831 23.879 68.836 26.986.037.004.075.009.113.013 19.923 2.142 35.529 20.827 35.529 42.537v117.22h-86v-50c0-3.788-2.141-7.251-5.528-8.944l-53.669-26.83c-37.504-18.757-60.803-56.456-60.803-98.386z" />
                                                <circle cx="459" cy="384" r="10" />
                                                <path
                                                    d="m472 116c-22.056 0-40 17.944-40 40v80c-10.681 0-20.725 4.162-28.281 11.719l-27.377 27.377c-15.96 15.949-41.848 18.608-56.951 21.262-29.939 3.22-53.391 30.639-53.391 62.422v127.22c0 5.523 4.478 10 10 10h106c5.522 0 10-4.477 10-10v-53.819l32.73-16.362c4.939-2.47 6.942-8.476 4.473-13.417-2.469-4.939-8.474-6.942-13.416-4.473l-38.259 19.125c-3.387 1.695-5.528 5.158-5.528 8.946v50h-86v-117.22c0-21.71 15.606-40.395 35.529-42.538.038-.004.076-.008.113-.013 23.361-3.155 50.206-8.368 68.839-26.988l27.38-27.38c5.724-5.724 13.913-7.166 20.797-4.726h.001c.003.001.006.003.009.004 7.975 2.817 13.332 10.397 13.332 18.861 0 5.338-2.082 10.359-5.861 14.14l-51.21 51.22c-3.905 3.906-3.904 10.237.001 14.142 3.904 3.904 10.237 3.905 14.142-.001l51.21-51.22c7.556-7.558 11.718-17.601 11.718-28.281 0-14.439-7.804-27.587-20-34.639v-85.361c0-11.028 8.972-20 20-20s20 8.972 20 20v135.84c0 18.296-4.617 36.46-13.353 52.528-2.639 4.852-.844 10.924 4.009 13.562 4.851 2.637 10.924.843 13.562-4.009 10.325-18.99 15.782-40.458 15.782-62.081v-135.84c0-22.056-17.944-40-40-40z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h2 class="st-funfact-number st-counter">20</h2>
                                    <div class="st-funfact-title">Years of experience</div>
                                </div>
                                <div class="st-height-b30 st-height-lg-b30"></div>
                            </div><!-- .col -->
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
                                    <h2 class="st-funfact-number st-counter">2354</h2>
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
                                    <h2 class="st-funfact-number st-counter">99</h2>
                                    <div class="st-funfact-title">Qualified Doctors</div>
                                </div>
                                <div class="st-height-b30 st-height-lg-b30"></div>
                            </div><!-- .col -->
                            <div class="col-lg-6">
                                <div class="st-funfact st-style1">
                                    <div class="st-funfact-icon st-dip-blue-box">
                                        <svg enable-background="new 0 0 511.619 511.619" viewBox="0 0 511.619 511.619"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="m504.12 423.958c-.003 0-.006 0-.009 0l-28.68.033-.031-24.191c-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0-4.143.005-7.496 3.367-7.491 7.509l.031 24.19-112.203.13-.111-96.11 77.654-.09c3.963-.004 7.686-1.551 10.484-4.355s4.336-6.531 4.331-10.493l-.09-78.359c-.005-3.962-1.552-7.686-4.356-10.483-2.8-2.793-6.519-4.331-10.475-4.331-.006 0-.012 0-.019 0l-77.655.089-.036-31.016 112.203-.128.201 176.954c.005 4.14 3.361 7.492 7.5 7.492h.009c4.143-.005 7.497-3.366 7.492-7.508l-.201-176.955 14.762-.017c11.396-.016 20.654-9.298 20.639-20.688l-.02-19.672c-.015-11.393-9.286-20.65-20.669-20.65-.009 0-.02 0-.028 0l-48.04.05c-4.142.004-7.497 3.366-7.492 7.508.004 4.14 3.361 7.492 7.5 7.492h.008l48.042-.05h.007c3.124 0 5.668 2.542 5.672 5.668l.02 19.672c.004 3.122-2.535 5.666-5.658 5.67l-141.964.161-.036-31.01 59.917-.071c4.142-.005 7.496-3.367 7.491-7.509-.005-4.139-3.362-7.491-7.5-7.491-.003 0-.006 0-.009 0l-59.916.071-.041-35.216c-.006-5.53-2.166-10.727-6.081-14.632-3.909-3.9-9.101-6.046-14.622-6.046-.008 0-.017 0-.024 0l-143.451.166c-5.53.006-10.727 2.166-14.632 6.081s-6.053 9.116-6.046 14.646l.041 35.217-141.967.165c-5.521.006-10.709 2.164-14.608 6.076-3.896 3.909-6.038 9.102-6.031 14.621l.022 19.675c.006 5.52 2.162 10.707 6.068 14.604 3.901 3.892 9.083 6.034 14.593 6.034h.026l14.847-.017v22.456c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-22.474l112.119-.13.036 31.014-77.65.09c-3.963.004-7.686 1.551-10.484 4.355s-4.336 6.531-4.331 10.494l.09 78.359c.005 3.962 1.552 7.686 4.356 10.483 2.8 2.793 6.519 4.331 10.475 4.331h.019l77.651-.089.111 96.11-112.391.13v-178.672c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v178.69l-28.488.033c-4.143.005-7.497 3.367-7.492 7.509.005 4.139 3.361 7.491 7.5 7.491h.009l496.619-.575c4.142-.005 7.496-3.367 7.491-7.509-.005-4.138-3.361-7.491-7.499-7.491zm-78.625-189.041.09 78.022-77.486.09-.09-78.022zm-404.38-60.546c-.002 0-.004 0-.007 0-1.511 0-2.931-.587-4-1.653-1.07-1.068-1.661-2.489-1.663-4.003l-.022-19.675c-.002-1.516.586-2.941 1.656-4.015 1.068-1.072 2.489-1.663 4.001-1.665l141.966-.164.036 31.011zm64.645 138.962-.09-78.022 77.482-.09.09 78.022zm92.227-220.372c-.002-1.523.59-2.956 1.666-4.034s2.507-1.673 4.03-1.675l143.451-.166h.007c3.141 0 5.699 2.554 5.703 5.696l.383 331.375-18.744.022-.153-132.263c-.007-6.323-2.435-12.271-6.835-16.749-4.434-4.511-10.334-6.994-16.618-6.994-.009 0-.019 0-.028 0l-70.459.082c-6.294.007-12.2 2.505-16.629 7.033-4.39 4.488-6.804 10.441-6.796 16.765l.153 132.263-18.748.022zm33.978 199.072c-.003-2.372.892-4.595 2.519-6.258 1.588-1.624 3.692-2.52 5.924-2.522l70.459-.082h.01c2.228 0 4.33.891 5.919 2.508 1.631 1.66 2.531 3.88 2.534 6.252l.153 132.263-87.365.101z" />
                                                <path
                                                    d="m207.012 200.158h.018l25.008-.029.029 25.008c.009 7.715 6.289 13.985 14 13.985h.018l19.004-.022c3.74-.004 7.255-1.464 9.896-4.112 2.642-2.647 4.094-6.166 4.089-9.906l-.029-25.008 25.007-.029c7.72-.008 13.994-6.296 13.986-14.018l-.022-19.005c-.004-3.74-1.465-7.254-4.113-9.896-2.644-2.638-6.154-4.089-9.888-4.089-.005 0-.012 0-.018 0l-25.008.029-.029-25.007c-.004-3.74-1.464-7.254-4.112-9.896-2.644-2.638-6.155-4.09-9.888-4.09-.005 0-.012 0-.018 0l-19.005.022c-3.74.004-7.254 1.465-9.896 4.113-2.641 2.647-4.093 6.166-4.089 9.905l.029 25.008-25.007.029c-3.74.004-7.255 1.464-9.896 4.112-2.642 2.648-4.094 6.166-4.089 9.906l.022 19.004c.004 3.74 1.464 7.255 4.112 9.896 2.645 2.639 6.156 4.09 9.889 4.09zm32.489-32.045c4.142-.005 7.496-3.367 7.491-7.509l-.037-31.509 17.007-.02.037 31.51c0 .259.014.514.04.766.388 3.779 3.58 6.725 7.46 6.725h.009l31.509-.037.02 17.007-31.51.037c-4.142.005-7.496 3.367-7.491 7.509l.037 31.509-17.008.02-.037-31.51c-.005-4.139-3.361-7.491-7.5-7.491-.002 0-.006 0-.009 0l-31.509.037-.02-17.007z" />
                                            </g>
                                        </svg>
                                    </div>
                                    <h2 class="st-funfact-number st-counter">125</h2>
                                    <div class="st-funfact-title">Hospital Rooms</div>
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

        <!-- Start News Letter -->
        <section class="st-news-letter-section st-dynamic-bg st-bg"
            data-src="{{asset('contents/website')}}/img/news-letter-bg.png">
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Subscribe & stay updated</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{asset('contents/website')}}/img/icons/4.png"
                                alt="icon"></div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="st-section-heading-subtitle">Sign up to our newsletter and be the first to know about
                        latest news,
                        <br>special offers, events, and discounts.</div>
                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="st-news-letter">
                            <form class="mailchimp st-news-letter-form"
                                action="https://storerepublic.us12.list-manage.com/subscribe/post?u=d227d8d335060b093084903d0&amp;id=9ba078ceb0">
                                <input type="email" name="subscribe" id="subscriber-email"
                                    placeholder="Enter Your Email Address">
                                <button type="submit" id="subscribe-button" class="st-mailchimp-btn"><i
                                        class="fas fa-paper-plane"></i></button>
                                <!-- SUBSCRIPTION SUCCESSFUL OR ERROR MESSAGES -->
                                <h5 class="subscription-success"> .</h5>
                                <h5 class="subscription-error"> .</h5>
                                <label class="subscription-label" for="subscriber-email"></label>
                            </form>
                            <div class="st-news-letter-number">(+01) - 234 567 890</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-height-b120 st-height-lg-b80"></div>
        </section>
        <!-- End News Letter -->

        <!-- Start Contact Section -->
        @yield('contact')
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
    <script src="{{asset('contents/website')}}/js/wow.min.js"></script>
    <script src="{{asset('contents/website')}}/js/jQueryUi.js"></script>
    <script src="{{asset('contents/website')}}/js/textRotate.min.js"></script>
    <script src="{{asset('contents/website')}}/js/select2.min.js"></script>
    <script src="{{asset('contents/website')}}/js/main.js"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
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
