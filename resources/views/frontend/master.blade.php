
@include('frontend.body.head')

<body>

    <!-- header area -->
     @include('frontend.body.header')
    <!-- header area end -->

    @yield('main_content')

    <!-- footer area -->
     @include('frontend.body.footer')
    <!-- footer area end -->

    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-angle-double-up"></i></a>
    <!-- scroll-top end -->

    <!-- js -->
    @include('frontend.body.script')

</body>


</html>