@extends('layout')
@section('title', 'نتائج العروض')
@section('Page')

<!-- breadcrumb -->
<div class="gen-breadcrumb" style="background-image: url('/images/background/asset-25.jpeg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="gen-breadcrumb-title">
                        <h1>
                            نتائج العروض
                        </h1>
                    </div>
                    <div class="gen-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                        class="fas fa-home mr-2"></i>الرئيسية</a></li>
                            <li class="breadcrumb-item active">نتائج العروض</li>
                        </ol>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb -->

<section class="gen-section-padding-3">
<div class="container">
<div class="row">
<div class="col-lg-12">
    <div class="row">
        @include('card3')
        @include('card3')
        @include('card3')
        @include('card3')
        @include('card3')
        @include('card3')
        @include('card3')
        @include('card3')
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="gen-load-more-button">
                <div class="gen-btn-container">
                    <a class="gen-button gen-button-loadmore" href="#">
                        <span class="button-text">Load More</span>
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
</section>

@endsection