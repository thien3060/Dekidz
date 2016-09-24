@extends('frontend.layouts.master')

@section('content')
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Liên hệ</h1>
                            <p>Giữ liên lạc nhé !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

    <section id="map-section">
        <div class="container">

            <iframe width="100%" height="450" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJR6DEusUodTERi__B5G7gUkM&key=AIzaSyBofpEqBawsCvUr8ASrZFRq5INgdv37EOs" allowfullscreen></iframe>
        </div>
    </section> <!--/#map-section-->
@endsection