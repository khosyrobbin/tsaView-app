<!DOCTYPE html>
<!--
    Free  Template by Mohamed Sobhy
    https://www.facebook.com/Mido.HHH
-->
<html lang="en">

<head>
    <title>King Of Pasta</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="{{ asset('template') }}/js/jquery.js"></script>
    <script src="{{ asset('template') }}/js/jquery.glide.js"></script>

    <link rel="stylesheet" href="{{ asset('template') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('template') }}/css/animate.css">
    <script type="text/javascript" src="{{ asset('template') }}/js/MyJQ.js"></script>
    <script src="{{ asset('template') }}/js/jquery.localScroll.min.js" type="text/javascript"></script>
    <script src="{{ asset('template') }}/js/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="{{ asset('template') }}/js/wow.min.js" type="text/javascript"></script>

    <!-- scroll function -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#navigations').localScroll({
                duration: 800
            });
        });
    </script>


    <script src="{{ asset('template') }}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>


</head>

<body>

    <!--============ Navigation ============-->
    @include('layout.nav')
    <!--============ Slider ============-->

    <!--============ Content ============-->
    @yield('content')

    <!--============ FOOTER ============-->
    @include('layout.footer')
    <!-- end of footer-->




    <!--============ COPYRIGHTS ============-->


    <div class="copyrightswrapper">
        <div id="copyrights" class="container">

            <p>Copyright 2014 <a href="https://www.facebook.com/Mido.HHH"> Mohamed Sobhy </a> All Rights Reserved</p>

        </div> <!-- end of copyrights-->
    </div> <!-- end of website-->




    <div class="fixedsocial">
        <a href="https://www.facebook.com/Mido.HHH"><img src="{{ asset('template') }}/images/facebook.png"
                width="20" height="20" alt="fb"> </a>
        <a href="https://www.behance.net/Mido_HHH"><img src="{{ asset('template') }}/images/behance.png"
                width="20" height="20" alt="behance"> </a>




    </div>

    <script type="text/javascript">
        $('.sliderwrapper .slider').glide({
            autoplay: 7000,
            animationDuration: 3000,
            arrows: true,
        });
    </script>

    <script type="text/javascript">
        $('.bestdisheswrapper .slider').glide({
            autoplay: false,
            animationDuration: 700,
            arrows: true,
            navigation: false,
        });
    </script>




</body>

</html>
