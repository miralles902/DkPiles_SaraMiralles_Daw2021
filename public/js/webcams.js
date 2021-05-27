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