@extends('frontend.master')

@section('meta_title')
<title>Home - Rupa Printing Press</title>
@endsection

@section('main_content')

<main class="home-2 main">

    <!-- hero slider -->
     @include('frontend.home.slider')
    <!-- hero slider end -->

    <!-- about area -->
     @include('frontend.home.about')
    <!-- about area end -->

    <!-- service area -->
    @include('frontend.home.service')
    <!-- service area end -->

    <!-- project-area -->
    @include('frontend.home.project')
    <!-- project-area end -->

</main>

@endsection