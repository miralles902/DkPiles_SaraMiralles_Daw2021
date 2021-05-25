@extends('layouts.navbar')
@section('title', 'Principal')
@section('content_page')
<script id="widg" src="http://www.windguru.cz/js/wgs_widget.php"></script>
<!-- estacion de piles -->
<div class="row">
	<div class="col-md-6">
	<h4>Prevision del tiempo</h4>
		<div id="wgs_widget_51_1403353076147"></div>

		<!-- widget winguru-->
		<div id="windguruPiles">
			<script id="wg_fwdg_504236_3_1616663345391" src="{{ asset('js/windguruPiles.js') }}"></script>
		</div>
	</div>
	<!-- camara de la playa de piles -->
	<div class="col-md-6">
		<section class="webcam">
		<h4>Camara playa de Piles</h4>
			<div id="hora">
				01-02-2021 11:57:30
			</div>
			<div id="webcam-visor" style="position: relative;">
				<!--AÑADO ESTA IMAGEN FAKE DE FONDO PARA EVITAR FLASHEO -->
				<img class="img-fluid imgcam" style="position:absolute; z-index:OZ;" id="fondo" src="{{ asset('img/loading.gif') }}" alt="" />
				<img class="img-fluid imgcam" style="position:absolute; z-index:127; display:none; " id="popimage0" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.6469837288851448" alt="" />
				<img class="img-fluid imgcam" style="position:absolute; z-index:131; display:none; " id="popimage1" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.1481255725516435" alt="" />
				<img class="img-fluid imgcam" style="position:absolute; z-index:132; display:none; " id="popimage2" src="http://turiscam.comunitatvalenciana.com/gandia.jpg?0.27504339971864056" alt="" />
			</div>
		</section>
	</div>
</div>
<script src="{{ asset('js/camaraGandia.js') }}"></script>
<script src="{{ asset('js/wgsWidget.js') }}"></script>
@endsection