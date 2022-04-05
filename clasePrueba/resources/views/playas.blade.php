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
                <img src="./img/playa1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/playa2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./img/playa3.jpg" class="d-block w-100" alt="...">
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
          <h1 class="text-center display-1">Playas</h1>
          <br><br>
          <h3 class="text-center">Paquetes</h3>
          <br><br><br>
          <div class="row">
            <div class="col-lg-4">
              <div class="card">
                <img src="./img/cancun.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cancún</h5>
                  <p class="card-text">Disfuta de las maravillas de Cancún.</p>
                  <a href="#" class="btn btn-primary">Mas información</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <img src="./img/miami.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Miami</h5>
                  <p class="card-text">Disfuta de las maravillas de Miami.</p>
                  <a href="#" class="btn btn-primary">Mas información</a>
                </div>
              </div>
          </div>
          <div class="col-lg-4">
            <div class="card">
              <img src="./img/dubai.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dubái</h5>
                <p class="card-text">Disfuta de las maravillas de Dubái.</p>
                <a href="#" class="btn btn-primary">Mas información</a>
              </div>
            </div>
        </div>

@endsection