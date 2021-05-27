@extends('layouts.navbar')
@section('title', 'Webcams')
@section('content_page')
<h4>Webcams</h4>
<div class="container">
  <div id="hora" class="text-center">
    01-02-2021 11:57:30
  </div>
  <div id="carouselDkPiles" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselDkPiles" data-slide-to="0" class="active"></li>
      <li data-target="#carouselDkPiles" data-slide-to="1"></li>
      <li data-target="#carouselDkPiles" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="visor-webcam" id="res-multimedia">
          <div id="webcam-visor" class="w-100 position-relative">
            <img style=" z-index: 214;" class="imgCamara" id="popimage0" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.4597586479274576" alt="">
            <img style=" z-index: 215;" class="imgCamara" id="popimage1" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.7961306698002091" alt="">
            <img style=" z-index: 216;" class="imgCamara" id="popimage2" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.6631341091105099" alt="">

            <img src="http://turiscam.comunitatvalenciana.com/gandia.jpg" class="invisible" alt="Gandia">
          </div>
        </div>
        <div class="carousel-caption d-md-block">
          <h3>Playa de Gandia</h3>
        </div>
      </div>

      <div class="carousel-item">
        <div class="visor-webcam" id="res-multimedia">
          <div id="webcam-d" class="w-100 position-relative">
            <img style=" z-index: 214;" class="imgCamara" id="calpeimage0" src="http://turiscam.comunitatvalenciana.com/calpec.jpg?0.4597586479274576" alt="">
            <img style=" z-index: 215;" class="imgCamara" id="calpeimage1" src="http://turiscam.comunitatvalenciana.com/calpec.jpg?0.7961306698002091" alt="">
            <img style=" z-index: 216;" class="imgCamara" id="calpeimage2" src="http://turiscam.comunitatvalenciana.com/calpec.jpg?0.6631341091105099" alt="">

            <img src="http://turiscam.comunitatvalenciana.com/calpec.jpg" class="invisible" alt="Calpe">
          </div>
        </div>
        <div class="carousel-caption d-md-block">
          <h3>Playa de Calpe</h3>
        </div>
      </div>

      <div class="carousel-item">
        <div class="visor-webcam" id="res-multimedia">
          <div id="webcam-d" class="position-relative">
            <img style=" z-index: 214;" class="imgCamara" id="deniaimage0" src="http://turiscam.comunitatvalenciana.com/olivap.jpg?0.4597586479274576" alt="">
            <img style=" z-index: 215;" class="imgCamara" id="deniaimage1" src="http://turiscam.comunitatvalenciana.com/olivap.jpg?0.7961306698002091" alt="">
            <img style=" z-index: 216;" class="imgCamara" id="deniaimage2" src="http://turiscam.comunitatvalenciana.com/olivap.jpg?0.6631341091105099" alt="">

            <img src="http://turiscam.comunitatvalenciana.com/olivap.jpg" class="invisible" alt="Oliva">
          </div>
        </div>
        <div class="carousel-caption d-md-block">
          <h3>Puerto de Oliva</h3>
        </div>
      </div>
    </div>
    <a href="#carouselDkPiles" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a href="#carouselDkPiles" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/webcams.js') }}"></script>
@endsection