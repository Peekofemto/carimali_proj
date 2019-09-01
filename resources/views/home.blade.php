@extends('layouts.base')
@section('contenido')

<div class="container-fluid">

    <div class="row">
        <!-- todo Carrusel de Bootstrap -->
    <!-- * Para agregar una nueva imagen, agregar <li>, incrementar data-slide-to  y un carousel-item-->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./img/starwars.jpg" alt="First slide">
                </div>
                {{-- <div class="carousel-item">
                    <img class="d-block w-100" src="../img/vec_city.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/forest_mountains.jpg" alt="Third slide">
                </div> --}}
            </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row section-title">
                <div class="col-12">
                    This is some random text
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12 col-lg-4 {{-- col-xs-12 --}} mb-5">
                    <p class="car-descr">
                            Description Text
                    </p>
                    <div class="car-img">
                        <img src="./img/turtle.jpeg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 {{-- col-xs-12 --}} mb-5">
                    <p class="car-descr">
                        Description Text
                    </p>
                    <div class="car-img">
                        <img src="./img/turtle.jpeg" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 {{-- col-xs-12 --}} mb-5">
                    <p class="car-descr">
                        Description Text
                    </p>
                    <div class="car-img">
                        <img src="./img/turtle.jpeg" alt="" class="w-100">
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="offers-2">
            <div class="container-fluid">
                <div class="row section-title">
                    <div class="col-12">
                        <iframe class="frame_yout" src="https://www.youtube.com/embed/0vQKh52dcOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                            
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
</div>

    
</div>
@endsection