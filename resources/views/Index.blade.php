@extends('layouts.navbar')
@section('title', 'Principal')
@section('content_page')
<!-- estacion de piles -->
<p>Aquí la estación DKPiles: (actualiza cada minuto aprox.) <br>
      <!-- Si queréis que no actualize comentad la linea setInterval. -->
</p>
<div id="wgs_widget_51_1403353076147"></div> 
    
	<!--Script refresh de paginas-->
    <script type="text/javascript">
		function llamarWidget(){
			WgsWidget({
			id_station: 51,
			wj: 'knots',
			tj: 'c',
			tmprh: true,
			date_format: 'Y-m-d H:i:s T',
			divid: 'wgs_widget_51_1403353076147',
			type: 'curr'
			});
    	}
		llamarWidget();
		setInterval(llamarWidget,60000);/* Quitar si no queréis que actualice */
	</script>
<!-- widget winguru-->
<script id="wg_fwdg_504236_3_1616663345391">
(function (window, document) {
  var loader = function () {
    var arg = ["s=504236" ,"m=3","uid=wg_fwdg_504236_3_1616663345391" ,"wj=knots" ,"tj=c" ,"waj=m" ,"odh=0" ,"doh=24" ,"fhours=240" ,"hrsm=3" ,"vt=forecasts" ,"lng=es" ,"p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
<!-- camara de la playa de piles -->

@endsection
