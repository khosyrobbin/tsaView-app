@extends('layout.content')
@section('content')
    <!--============ BOOK ONLINE ============-->

    <div class="bookonlinewrapper">
        <div class="container" id="bookonline">
            <h3 class="wow fadeInUp" data-wow-delay="0.3s"> BOOK ONLINE</h3>
            <form>
                <input type="text" class="name wow zoomIn" placeholder="Your Name">
                <input type="text" class="email wow zoomIn" placeholder="Your E-MAIL">
                <input type="text" class="from wow zoomIn" placeholder="09-06-2014">
                <input type="text" class="to wow zoomIn" placeholder="09-06-2014">
                <input type="text" class="persons wow zoomIn" placeholder="Number of persons">
                <button class="booknow wow fadeInUp"> BOOK NOW </button>
            </form>
        </div>
    </div> <!-- end of book online wrapper-->
    <div class="mapwrapper">
        <div id="map" class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3453.66325428613!2d31.24094885319519!3d30.046517359733745!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1403554513536"
                class="googlemap"></iframe>
        </div> <!-- end of map id-->
    </div> <!-- end of map wrapper-->
@endsection
