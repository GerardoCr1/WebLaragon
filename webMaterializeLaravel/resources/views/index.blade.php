@extends('plantilla')
@section('content')

<div class="container">
            <h1 class="white-text center-align">Tu tienda de tecnologia favorita</h1>
            <h5 class="white-text center-align">Una empresa dedicada a la distribucion de dispositivos tecnologicos</h5>
            <br><br><br>
            <div class="row">
                <div class="slider col l6 m6 s12 center-align">
                    <ul class="slides">
                      <li>
                        <img src="./img/laptop1.png"> <!-- random image -->
                        <div class="caption center-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/laptop2.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/laptop3.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/laptop4.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                    </ul>
                    <br><br><br>
                    <a href="{{route('laptops')}}" class="waves-effect waves-light btn">Mas información</a>
                </div>
                <div class="slider col l6 m6 s12 center-align">
                    <ul class="slides">
                      <li>
                        <img src="./img/auriculareslogi.png"> <!-- random image -->
                        <div class="caption center-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/mouserazer.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/tecladorazer.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                      <li>
                        <img src="./img/mouselogi.png"> <!-- random image -->
                        <div class="caption left-align">
                          <h3></h3>
                          <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                      </li>
                    </ul>
                    <br><br><br>
                    <a href="{{route('perifericos')}}" class="waves-effect waves-light btn">Mas información</a>
                </div>
            </div>
</div>
<br><br><br><br><br>
@endsection