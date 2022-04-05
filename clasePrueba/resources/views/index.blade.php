@extends('plantilla')
@section('content')

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./img/paisaje1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Cataratas Ruacana, Namibia</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/paisaje2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Kunming, Provincia de Yunnan, China</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="./img/paisaje3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Aurora Boreal sobre Islandia</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br><br>
        <div class="container">
          <h1 class="text-center">La mejor pagina de viajes</h1>
          <br><br>
          <h4 class="text-center">Descubre los paquetes que tenemos</h4>
          <br><br><br>
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <img src="./img/playa.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Playas</h5>
                  <p class="card-text">Con nosotros crea un viaje perfecto a las mejore playas del mundo.</p>
                  <a href="{{route('playas')}}" class="btn btn-primary">Mas información</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="./img/cabaña.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cabañas</h5>
                  <p class="card-text">Si quieres alejarte del ruido de la ciudad la mejor opcion es visitar una de nuestras cabañas.</p>
                  <a href="{{route('cabañas')}}" class="btn btn-primary">Mas información</a>
                </div>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="./img/egipto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Egipto</h5>
                <p class="card-text">Visita egipto y sus piramides y no pierdas la opotunidad de tener un viaje espectacular en camello.</p>
                <a href="{{route('egipto')}}" class="btn btn-primary">Mas información</a>
              </div>
            </div>
        </div>

@endsection