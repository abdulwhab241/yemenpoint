@extends('layout')
@section('title', 'الرئيسية')
@section('Page')

<!-- Slick Slider start -->
<section class="gen-section-padding-2 pt-0 pb-0" style="margin-top: 10%;">
<div class="container">
<div class="home-singal-silder">
<div class="gen-nav-movies gen-banner-movies">
<div class="row">
<div class="col-lg-12">
<div class="slider slider-for">
<!-- Slider Items -->
@include('slider-item')

<!-- Slider Items -->
</div>

<div class="slider slider-nav">
<!--- slider-nav-contain --->
@include('slider-nav')
@include('slider-nav')
@include('slider-nav')
@include('slider-nav')
@include('slider-nav')
@include('slider-nav')
<!--- slider-nav-contain --->
</div>



</div>
</div>
</div>
</div>
</div>
</section>

<!-- owl-carousel Videos Section-1 Start -->
<section class="gen-section-padding-2">
<div class="container">
<div class="text-center">
<h4 class="gen-heading-title">اخر العروض</h4>
</div>

<div class="row mt-3">
    @include('card')
    @include('card')
    @include('card')
    @include('card')
    @include('card')
    @include('card')
    @include('card')
    @include('card')

</div>
</div>
</section>
<!-- owl-carousel Videos Section-1 End -->

<!-- owl-carousel Videos Section-1 Start -->
<section class="gen-section-padding-2">
<div class="container">
<div class="text-center">
<h4 class="gen-heading-title">نتائج العروض</h4>
</div>

<div class="row mt-3">
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')


</div>
</div>
</section>
<!-- owl-carousel Videos Section-1 End -->

<!-- owl-carousel Videos Section-1 Start -->
<section class="gen-section-padding-2">
<div class="container">
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <h4 class="gen-heading-title">الفيديوهات</h4>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-inline-block">
        <div class="gen-movie-action">
        <div class="gen-btn-container text-right">
            <a href="tv-shows-pagination.html" class="gen-button gen-button-flat">
                <span class="text">المزيد من الفيديوهات</span>
            </a>
        </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="col-12">
        <div class="gen-style-2">
        <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="true" data-desk_num="4"
            data-lap_num="3" data-tab_num="2" data-mob_num="1" data-mob_sm="1" data-autoplay="false"
            data-loop="false" data-margin="30">
        @include('video')
        @include('video')
        @include('video')
        @include('video')
        @include('video')
        @include('video')
        @include('video')
        @include('video')
        </div>
        </div>
    </div>
    </div>

</div>
</section>
<!-- owl-carousel Videos Section-1 End -->

<!-- owl-carousel Videos Section-1 Start -->
<section class="gen-section-padding-2">
<div class="container">
<div class=" text-center">
<h4 class="gen-heading-title">ماهو الجديد</h4>
</div>
<div class="row mt-3">
    @include('card6')
    @include('card6')
    @include('card6')
    @include('card6')

</div>
</div>
</section>



@endsection
