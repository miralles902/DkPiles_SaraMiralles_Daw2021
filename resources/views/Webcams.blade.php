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

            <img src="http://turiscam.comunitatvalenciana.com/olivap.jpg" class="invisible" alt="Denia">
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

<script type="text/javascript">
  function refresh_image(image_to_refresh) {
    var webcam_TB = $(".node-type-webcam #TB_Image");
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.show();
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.attr("src", path + "?" + Math.random());
    var image = $("#popimage" + image_to_refresh);
    path = image.attr("src").split("?");
    path = path[0];
    image.attr("src", path + "?" + Math.random());
    setTimeout("update_zindex(" + image_to_refresh + ")", 150);
    image_to_refresh++;
    image_to_refresh = image_to_refresh % 3;
    var webcam_timeout = parseInt(3) * 1E3;
    setTimeout("refresh_image(" + image_to_refresh + ")", webcam_timeout)
  }

  function refresh_image_calpe(image_to_refresh_calpe) {
    var webcam_TB = $(".node-type-webcam #TB_Image");
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.show();
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.attr("src", path + "?" + Math.random());
    var image = $("#calpeimage" + image_to_refresh_calpe);
    path = image.attr("src").split("?");
    path = path[0];
    image.attr("src", path + "?" + Math.random());
    setTimeout("update_zindex_calpe(" + image_to_refresh_calpe + ")", 150);
    image_to_refresh_calpe++;
    image_to_refresh_calpe = image_to_refresh_calpe % 3;
    var webcam_timeout = parseInt(3) * 1E3;
    setTimeout("refresh_image_calpe(" + image_to_refresh_calpe + ")", webcam_timeout)
  }

  function refresh_image_denia(image_to_refresh_denia) {
    var webcam_TB = $(".node-type-webcam #TB_Image");
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.show();
    if (webcam_TB.parent().siblings("#TB_caption").children("#TB_secondLine").html() == "") webcam_TB.attr("src", path + "?" + Math.random());
    var image = $("#deniaimage" + image_to_refresh_denia);
    path = image.attr("src").split("?");
    path = path[0];
    image.attr("src", path + "?" + Math.random());
    setTimeout("update_zindex_denia(" + image_to_refresh_denia + ")", 150);
    image_to_refresh_denia++;
    image_to_refresh_denia = image_to_refresh_denia % 3;
    var webcam_timeout = parseInt(3) * 1E3;
    setTimeout("refresh_image_denia(" + image_to_refresh_denia + ")", webcam_timeout)
  }

  function hora_actual() {
    var fecha = new Date;
    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1;
    var anyo = fecha.getFullYear();
    var hora = fecha.getHours();
    var minuto = fecha.getMinutes();
    var segundo = fecha.getSeconds();
    if (dia < 10) dia = "0" + dia;
    if (mes < 10) mes = "0" + mes;
    if (hora < 10) hora = "0" + hora;
    if (minuto < 10) minuto = "0" + minuto;
    if (segundo < 10) segundo = "0" + segundo;
    var hora_actual = dia + "-" + mes + "-" + anyo + " " + hora + ":" + minuto + ":" + segundo;
    $("#hora").text(hora_actual)
  }

  function update_zindex(image_to_refresh) {
    current_zindex = parseInt($("#popimage" + image_to_refresh).css("z-index"));
    $("#popimage" + image_to_refresh).css("z-index", current_zindex + 3).show();
    hora_actual()
  }

  function update_zindex_calpe(image_to_refresh_calpe) {
    current_zindex = parseInt($("#calpeimage" + image_to_refresh_calpe).css("z-index"));
    $("#calpeimage" + image_to_refresh_calpe).css("z-index", current_zindex + 3).show();
    hora_actual()
  }

  function update_zindex_denia(image_to_refresh_denia) {
    current_zindex = parseInt($("#deniaimage" + image_to_refresh_denia).css("z-index"));
    $("#deniaimage" + image_to_refresh_denia).css("z-index", current_zindex + 3).show();
    hora_actual()
  }
  $(document).ready(function() {
    $("#popimage0").show();
    $("#calpeimage0").show();
    $("#deniaimage0").show();
    refresh_image(0);
    refresh_image_calpe(0);
    refresh_image_denia(0);
    hora_actual()
  });
</script>
@endsection