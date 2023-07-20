@extends('layout')
@section('title', 'اخر اخبار المصارعة')
@section('Page')

<!-- breadcrumb -->
<div class="gen-breadcrumb" style="background-image: url('/images/background/asset-25.jpeg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <div class="gen-breadcrumb-title">
                        <h1>
                            اخر اخبار المصارعة
                        </h1>
                    </div>
                    <div class="gen-breadcrumb-container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i
                                        class="fas fa-home mr-2"></i>الرئيسية</a></li>
                            <li class="breadcrumb-item active">اخر اخبار المصارعة</li>
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
    <div class="col-xl-9 col-md-12">
        <div class="gen-blog gen-blog-col-1">
            <div class="row">

        @include('card-news')
        @include('card-news')
        @include('card-news')
        @include('card-news')





            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection