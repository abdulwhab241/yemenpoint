<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="keywords" content="Streamlab - Video Streaming HTML5 Template" />
<meta name="description" content="Streamlab - Video Streaming HTML5 Template" />
<meta name="author" content="StreamLab" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>yemen point @yield('title')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="/images/favicon.png">
<!-- CSS bootstrap-->
<link rel="stylesheet" href="/css/bootstrap.min.css" />
<!--  Style -->
<link rel="stylesheet" href="/css/style.css" />
<!--  Responsive -->
<link rel="stylesheet" href="/css/responsive.css" />


</head>
<body>

<!--=========== Loader =============-->
<div id="gen-loading">
<div id="gen-loading-center">
<img src="/images/logo-1.png" alt="loading">
</div>
</div>
<!--=========== Loader =============-->

<!--========== Header ==============-->
<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
<div class="gen-bottom-header">
<div class="container">
  <div class="row">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">
              <img class="img-fluid logo" src="/images/logo-1.png" alt="streamlab-image">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div id="gen-menu-contain" class="gen-menu-contain">
                  <ul id="gen-main-menu" class="navbar-nav ml-auto">
                    <li class="item active">
                        <a href="#" aria-current="page">الرئيسية</a>

                    </li>
                    <li class="item ">
                      <a href="{{ route('news') }}" aria-current="page">اخر اخبار المصارعة</a>
                  </li>
                    <li class="menu-item">
                        <a href="#">عروض المصارعة</a>
                        <i class="fa fa-chevron-down gen-submenu-icon"></i>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children">
                              <a href="#">عرض سرفايفر سيريس 2016</a>
                              <i class="fa fa-chevron-down gen-submenu-icon"></i>
                              <ul class="sub-menu">
                                <li class="menu-item gen-section-padding-2">
                                    @include('card12')
                                    @include('card12')
                                    @include('card12')
                                    @include('card12')
                                </li>
                              </ul>
                          </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('offers') }}">نتائج العرض</a>
                        <i class="fa fa-chevron-down gen-submenu-icon"></i>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children">
                              <a href="#">yemen point</a>
                              <i class="fa fa-chevron-down gen-submenu-icon"></i>
                              <ul class="sub-menu">
                                <li class="menu-item gen-section-padding-2">
                                  @include('card12')
                                  @include('card12')
                                  @include('card12')
                                  @include('card12')
                                </li>
                              </ul>
                          </li>
                        </ul>
                    </li>
                    <li class="item">
                      <a href="#" aria-current="page">رويال رامبل 2022</a>
                    </li>
                  </ul>
              </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
        </nav>
      </div>
  </div>
</div>
</div>
</header>
<!--========== Header ==============-->





@yield('Page')



<!-- footer start -->
<footer id="gen-footer">
<div class="gen-footer-style-1">
<div class="gen-footer-top">
  <div class="container">
      <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="widget">
              <div class="row">
                  <div class="col-sm-12">
                    <img src="/images/logo-1.png" class="gen-footer-logo" alt="gen-footer-logo">
                    <h6>تابعونا على</h6>
                    <ul class="social-link">
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="facebook"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="facebook"><i class="fab fa-skype"></i></a></li>
                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget">
              <h4 class="footer-title text-center">كلمات مفتاحية</h4>
              <div class="menu-explore-container">
                  <ul class="menu">
                    <li class="menu-item">
                        <a href="#" aria-current="page">wwe</a>
                    </li>
                    <li class="menu-item"><a href="#">اخبار المصارعة</a></li>
                    <li class="menu-item"><a href="#">اخبار المصارعة 2019</a></li>
                    <li class="menu-item"><a href="#">اخبار المصارعة الحرة</a></li>
                    <li class="menu-item"><a href="#">اخبار المصارعة اون لاين</a></li>
                    <li class="menu-item"><a href="#">اخر الاخبار</a></li>
                    <li class="menu-item"><a href="#">المصارعة الحرة</a></li>
                    <li class="menu-item"><a href="#">المصارعة الحرة 2019</a></li>
                    <li class="menu-item"><a href="#">المصارعة الحرة اون لاين</a></li>
                    <li class="menu-item"><a href="#">عروض المصارعة</a></li>
                    <li class="menu-item"><a href="#">فيديوهات</a></li>
                    <li class="menu-item"><a href="#">مصارعة اون لاين</a></li>
                    <li class="menu-item"><a href="#">مصارعة حرة</a></li>
                    <li class="menu-item"><a href="#">مصارعة حرة 2019</a></li>
                    <li class="menu-item"><a href="#">مصارعة حرة اون لاين</a></li>
                    <li class="menu-item"><a href="#">موقع المصارعة</a></li>
                  </ul>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="widget">
              <h4 class="footer-title text-center">اخر التحديثات</h4>
              <div class="menu-about-container">
                  <ul class="menu">
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                    <li class="menu-item">@include('card-footer')</li>
                  </ul>
              </div>
            </div>
        </div>
        <div class="col-xl-3  col-md-6">
            <div class="widget">
              <h4 class="footer-title text-center">الاكثر مشاهدة</h4>
              <div class="menu-explore-container">
                <ul class="sub-menu ">
                  <li class="menu-item">Yemen Point</li>
                  <li class="menu-item">Yemen Point</li>
                  <li class="menu-item">Yemen Point</li>

                </ul>
            </div>
            </div>
        </div>
      </div>
  </div>
</div>
<div class="gen-copyright-footer">
  <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center">
            <span class="gen-copyright"><a target="_blank" href="#"> © حقوق النشر 2023، جميع الحقوق محفوظة. <br>
            <a href="#">  Yemen Point تطوير </a>
            </a></span>
        </div>
      </div>
  </div>
</div>
</div>
</footer>
<!-- footer End -->

<!-- Back-to-Top start -->
<div id="back-to-top">
<a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!-- Back-to-Top end -->

<!-- js-min -->
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/asyncloader.min.js"></script>
<!-- JS bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<!-- owl-carousel -->
<script src="/js/owl.carousel.min.js"></script>
<!-- counter-js -->
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<!-- popper-js -->
<script src="/js/popper.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<!-- Iscotop -->
<script src="/js/isotope.pkgd.min.js"></script>

<script src="/js/jquery.magnific-popup.min.js"></script>

<script src="/js/slick.min.js"></script>

<script src="/js/streamlab-core.js"></script>

<script src="/js/script.js"></script>
</body>
</html>
