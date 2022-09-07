@extends('layout.content')
@section('content')
    <div class="sliderwrapper">
        <div id="slider" class="container">
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ asset('template') }}/images/slideimg.png" width="317" height="256"
                            class="wow fadeInRight" data-wow-delay="0.8s" alt="slide1img">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ asset('template') }}/images/slideimg.png" width="317" height="256"
                            class="wow fadeInRight" data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                    <li class="slide">
                        <h5 class="wow fadeInDown" data-wow-delay="0.8s">What is Pasta ? </h5>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but
                            also the leap into
                            electronic typesetting</p>
                        <img src="{{ asset('template') }}/images/slideimg.png" width="317" height="256"
                            class="wow fadeInRight" data-wow-delay="0.8s" alt="slideimg2">
                    </li>
                </ul>
            </div>
        </div> <!-- End of Slider-->
    </div> <!-- end of sliderwrapper-->

    <div class="bestdisheswrapper">
        <div id="bestdishes" class="container">

            <h2 class="wow fadeInUp" data-wow-delay="0.3s">BEST DISHES</h2>
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <div class="item">
                            <img src="{{ asset('template') }}/images/thumb1.png" width="226" height="225"
                                alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                            <h3>Pasta Capellini</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="{{ asset('template') }}/images/thumb2.jpg" width="226" height="225"
                                alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                            <h3>Pasta Pillus</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="{{ asset('template') }}/images/thumb3.png" width="226" height="225"
                                alt="sliderimg" class="wow flipInX" data-wow-delay=".8s">
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>
                    <li class="slide">
                        <div class="item">
                            <img src="{{ asset('template') }}/images/thumb1.png" width="226" height="225"
                                alt="sliderimg">
                            <h3>Pasta Capellini</h3>
                        </div> <!-- end of item-->

                        <div class="item2">
                            <img src="{{ asset('template') }}/images/thumb2.jpg" width="226" height="225"
                                alt="sliderimg">
                            <h3>Pasta Pillus</h3>
                        </div> <!-- end of item-->

                        <div class="item3">
                            <img src="{{ asset('template') }}/images/thumb3.png" width="226" height="225"
                                alt="sliderimg">
                            <h3>Pasta Fusilli</h3>
                        </div> <!-- end of item-->
                    </li>

                </ul>
            </div> <!-- end of slider-->
        </div> <!-- end of besth dishes-->
    </div>
@endsection
