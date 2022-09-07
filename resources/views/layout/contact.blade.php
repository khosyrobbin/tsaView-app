@extends('layout.content')
@section('content')
    <div class="contactwrapper">
        <div id="contactus" class="container">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s">CONTACT US</h3>
            <div class="staff">
                <ul>
                    <li><img src="{{ asset('template') }}/images/char3.png" width="163" height="163"
                            class="myimage wow fadeIn" title="mido" alt="1">


                    </li>
                    <li><img src="{{ asset('template') }}/images/char4.png" width="163" height="163"
                            class="myimage2 wow fadeIn" data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="{{ asset('template') }}/images/char5.png" width="163" height="163"
                            class="myimage3 wow fadeIn" data-wow-delay="0.8s" alt="1"></li>
                    <li><img src="{{ asset('template') }}/images/char6.png" width="163" height="163"
                            class="myimage4 wow fadeIn" alt="1" data-wow-delay="0.8s"></li>
                    <li><img src="{{ asset('template') }}/images/char1.png" width="163" height="163"
                            class="myimage5 wow fadeIn" alt="1" data-wow-delay="0.8s"></li>
                    <li><img src="{{ asset('template') }}/images/char2.png" width="163" height="163"
                            class="myimage6 wow fadeIn" alt="1" data-wow-delay="0.8s"></li>
                </ul>

            </div>
            <!--end of .staff-->

            <img src="{{ asset('template') }}/images/pop1.png" width="486" height="137" class="firstpop"
                alt="pop">
            <img src="{{ asset('template') }}/images/popup2.png" width="487" height="137" class="secondpop"
                alt="pop">
            <img src="{{ asset('template') }}/images/popup3.png" width="487" height="137" class="thirdpop"
                alt="pop">
            <img src="{{ asset('template') }}/images/popup4.png" width="487" height="137" class="fourthpop"
                alt="pop">
            <img src="{{ asset('template') }}/images/popup6.png" width="487" height="137" class="fifthpop"
                alt="pop">
            <img src="{{ asset('template') }}/images/popup7.png" width="487" height="137" class="sixthpop"
                alt="pop">


        </div>
        <!--contactus class-->
    </div> <!-- end of contact wrapper-->
@endsection
