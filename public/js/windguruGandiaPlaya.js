(function (window, document) {
    var loader = function () {
        var arg = [
            "s=681970",
            "m=3",
            "uid=wg_fwdg_681970_3_1616663573278",
            "wj=knots",
            "tj=c",
            "waj=m",
            "odh=0",
            "doh=24",
            "fhours=240",
            "hrsm=3",
            "vt=forecasts",
            "lng=es",
            "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCP1s,RATING",
        ];
        var script = document.createElement("script");
        var tag = document.getElementsByTagName("script")[0];
        script.src = "https://www.windguru.cz/js/widget.php?" + arg.join("&");
        tag.parentNode.insertBefore(script, tag);
    };
    window.addEventListener
        ? window.addEventListener("load", loader, false)
        : window.attachEvent("onload", loader);
})(window, document);
