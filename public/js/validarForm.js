function validacion(){

    //campos del formulario
    let nombre = document.getElementById("nombre").value;
    let apellidos = document.getElementById("apellidos").value;
    let email = document.getElementById("email").value;
    let asunto = document.getElementById("asunto").value;
    let NoSpam = document.getElementById("NoSpam").value;
    let emailRegexp = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
        // Si no se cumple la condicion...
        alert('[ERROR] El campo debe tener almenos un valor, no ser nulo y contener texto');
        return false;
      }
      else if (apellidos == null || apellidos.length == 0 || /^\s+$/.test(apellidos)) {
        // Si no se cumple la condicion...
        alert('[ERROR] El campo debe tener almenos un valor, no ser nulo y contener texto');
        return false;
      }
      else if (!(emailRegexp.test(email))) {
        // Si no se cumple la condicion...
        alert('[ERROR] El campo debe contener una dirección de correo valida "correo@mail.com"');
        return false;
      }
      else if (asunto == null || asunto.length == 0 || /^\s+$/.test(asunto)) {
        // Si no se cumple la condicion...
        alert('[ERROR] El campo debe tener almenos un valor, no ser nulo y contener texto');
        return false;
      }
      else if (NoSpam != 0) {
        // Si no se cumple la condicion...
        alert('[ERROR] Solución antispam activada, no se envia el formulario');
        return false;
      }
      // Si el script ha llegado a este punto, todas las condiciones
      // se han cumplido, por lo que se devuelve el valor true
      return true;
    }