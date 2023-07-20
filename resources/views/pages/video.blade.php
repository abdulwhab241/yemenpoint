@extends('layout')
@section('title', 'مشاهدة الحلقة')
@section('Page')

<!-- breadcrumb -->
<div class="gen-breadcrumb" style="background-image: url('/images/background/asset-25.jpeg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="gen-breadcrumb-title">
                        <h1>
                            مشاهدة الحلقة
                        </h1>
                    </div>
                    <div class="gen-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                        class="fas fa-home mr-2"></i>الرئيسية</a></li>
                            <li class="breadcrumb-item active">مشاهدة الحلقة</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb -->

<!-- Single Video Start -->
<section class="gen-section-padding-3 gen-single-video">
<div class="container">
<div class="row no-gutters">
<div class="col-lg-12">
    <div class="row">
        <div class="col-lg-12">
            <div class="gen-video-holder">
                <iframe width="100%" height="550px" src="https://www.youtube.com/embed/LXb3EKWsInQ"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="single-video">
                <div class="gen-single-video-info">
                    <h2 class="gen-title">robot war</h2>
                    <div class="gen-single-meta-holder">
                        <ul>
                            <li>2 years</li>
                            <li>
                                <a href="#"><span>Tennis</span></a>
                            </li>
                            <li>
                                <i class="fas fa-eye">
                                </i>
                                <span>225 Views</span>
                            </li>
                        </ul>
                    </div>
                    <p>Streamlab is a long established fact that a reader will be distracted by the
                        readable
                        content of a page when Streamlab at its layout. The point of using Lorem
                        Streamlab
                        is that it has a more-or-less normal distribution of Streamlab as opposed
                        Streamlab.
                    </p>
                    <p>Streamlab is a long established fact that a reader will be distracted by the
                        readable
                        content of a page when Streamlab at its layout. The point of using Lorem
                        Streamlab
                        is that it has a more-or-less normal distribution of Streamlab as opposed
                        Streamlab.
                    </p>
                    <p>Streamlab is a long established fact that a reader will be distracted by the
                        readable
                        content of a page when Streamlab at its layout. The point of using Lorem
                        Streamlab
                        is that it has a more-or-less normal distribution of Streamlab as opposed
                        Streamlab.
                    </p>
                    <div class="gen-socail-share mt-0">
                        <h4 class="align-self-center">روابط التحميل المباشرة:</h4>
                        <ul class="social-inner">
                            <li>
                                <a href="#"><span>HD</span></a>
                            </li>
                            <li>
                                <a href="#"><span>SD</span></a>
                            </li>
                            <li>
                                <a href="#"><span>4K</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="pm-inner">
        <div class="gen-more-like">
            <h5 class="gen-more-title text-center">المزيد من الفيديوهات</h5>
            <div class="row post-loadmore-wrapper">
                @include('more-video')
                @include('more-video')
                @include('more-video')
                @include('more-video')
                @include('more-video')
                @include('more-video')
                @include('more-video')
                @include('more-video')
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gen-load-more-button">
                        <div class="gen-btn-container">
                            <a class="gen-button gen-button-loadmore" href="#">
                                <span class="button-text">تحميل المزيد</span>
                                <span class="loadmore-icon" style="display: none;"><i
                                        class="fa fa-spinner fa-spin"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</section>
@endsection