//convertimos a json la cadena recibida
let convertirJson = JSON.parse(arrayToJs);

//extraemos todos sus elementos
let extraerContacto = convertirJson[0];
let extraerTiempo = convertirJson[1];
let extraerGaleria = convertirJson[2];
let extraerMercadillo = convertirJson[3];
let extraerNoticia = convertirJson[4];
let extraerWebcam = convertirJson[5];

//conseguimos los id de cada enlace
let contactoo = document.getElementById("contacto");
let tiempo = document.getElementById("tiempo");
let galeria = document.getElementById("galeria");
let mercadillo = document.getElementById("mercadillo");
let noticia = document.getElementById("noticias");
let webcam = document.getElementById("webcams");

//conseguimos el atributo del id
let idContacto = contacto.getAttribute("id");
let idTiempo = tiempo.getAttribute("id");
let idGaleria = galeria.getAttribute("id");
let idMercadillo = mercadillo.getAttribute("id");
let idNoticia = noticia.getAttribute("id");
let idWebcam = webcam.getAttribute("id");

//si el id coincide con la palabra se muestra, si no coincide la esconde
//contacto
if (
    extraerContacto == idContacto ||
    extraerTiempo == idContacto ||
    extraerGaleria == idContacto ||
    extraerMercadillo == idContacto ||
    extraerNoticia == idContacto ||
    extraerWebcam == idContacto
) {
    contacto.style.display = "inline";
} else {
    contacto.style.display = "none";
}

//tiempo
if (
    extraerContacto == idTiempo ||
    extraerTiempo == idTiempo ||
    extraerGaleria == idTiempo ||
    extraerMercadillo == idTiempo ||
    extraerNoticia == idTiempo ||
    extraerWebcam == idTiempo
) {
    tiempo.style.display = "inline";
} else {
    tiempo.style.display = "none";
}

//galeria
if (
    extraerContacto == idGaleria ||
    extraerTiempo == idGaleria ||
    extraerGaleria == idGaleria ||
    extraerMercadillo == idGaleria ||
    extraerNoticia == idGaleria ||
    extraerWebcam == idGaleria
) {
    galeria.style.display = "inline";
} else {
    galeria.style.display = "none";
}

//mercadillo
if (
    extraerContacto == idMercadillo ||
    extraerTiempo == idMercadillo ||
    extraerGaleria == idMercadillo ||
    extraerMercadillo == idMercadillo ||
    extraerNoticia == idMercadillo ||
    extraerWebcam == idMercadillo
) {
    mercadillo.style.display = "inline";
} else {
    mercadillo.style.display = "none";
}

//noticias
if (
    extraerContacto == idNoticia ||
    extraerTiempo == idNoticia ||
    extraerGaleria == idNoticia ||
    extraerMercadillo == idNoticia ||
    extraerNoticia == idNoticia ||
    extraerWebcam == idNoticia
) {
    noticia.style.display = "inline";
} else {
    noticia.style.display = "none";
}

//webcams
if (
    extraerContacto == idWebcam ||
    extraerTiempo == idWebcam ||
    extraerGaleria == idWebcam ||
    extraerMercadillo == idWebcam ||
    extraerNoticia == idWebcam ||
    extraerWebcam == idWebcam
) {
    webcam.style.display = "inline";
} else {
    webcam.style.display = "none";
}
