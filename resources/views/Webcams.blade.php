@extends('layouts.navbar')
@section('title', 'Webcams')
@section('content_page')
<h4>Webcams</h4>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
      <section class="webcam">
                        <div id="hora">
                            01-02-2021 11:57:30
                        </div>
                        <div id="webcam-visor">
                          <img
                            style="position:absolute; z-index:127; display:none; "
                            id="popimage0"
                            src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.6469837288851448"
                            alt=""
                          />
                          <img
                            style="position:absolute; z-index:131; display:none; "
                            id="popimage1"
                            src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.9859589556649855"
                            alt=""
                          />
                          <img
                            style="position:absolute; z-index:132; display:none; "
                            id="popimage2"
                            src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.27504339971864056"
                            alt=""
                          />
                        </div>
                      </section>
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
      <section class="webcam">
                <div id="webcam-visor">
                    <img class="d-block w-100" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.6469837288851448" alt="" />
                    <img class="d-block w-100" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.1481255725516435" alt="" />
                    <img class="d-block w-100" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.27504339971864056" alt="" />
                </div>
            </section>
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
      <section class="webcam">
                <div id="webcam-visor">
                    <img class="d-block w-100" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.6469837288851448" alt="" />
                    <img class="d-block w-100" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.1481255725516435" alt="" />
                    <img class="d-block w-100" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.27504339971864056" alt="" />
                </div>
            </section>
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!--/.Carousel Wrapper-->
<!--<div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-dark" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <section class="webcam">
                <div id="webcam-visor">
                    <img class="img-fluid imgcam d-block w-100" style="position:absolute; z-index:OZ;" id="fondo" src="./gandia_nit2.jpg" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.6469837288851448" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.1481255725516435" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.27504339971864056" alt="" />
                </div>
                <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="webcam">
                <div id="webcam-visor">
                    <img class="img-fluid imgcam d-block w-100" style="position:absolute; z-index:OZ;" id="fondo" src="./gandia_nit2.jpg" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.6469837288851448" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.1481255725516435" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/denia.jpg?0.27504339971864056" alt="" />
                </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="webcam">
                <div id="webcam-visor">
                    <img class="img-fluid imgcam d-block w-100" style="position:absolute; z-index:OZ;" id="fondo" src="./gandia_nit2.jpg" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.6469837288851448" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.1481255725516435" alt="" />
                    <img class="img-fluid imgcam  d-block w-100" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/oliva.jpg?0.27504339971864056" alt="" />
                </div>
            </section>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></scrip>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/camaraGandia.js') }}"></script>
@endsection