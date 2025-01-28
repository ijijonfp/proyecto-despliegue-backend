$(document).ready(function () {

    $("#addDisc").click(function () {

      $(".formContainer").toggleClass("visible");

      const isRotated = $(".addDisc").hasClass("rotated");
      if (isRotated) {
        $(".addDisc").removeClass("rotated").css("transform", "rotate(0deg)");
      } else {
        $(".addDisc").addClass("rotated").css("transform", "rotate(135deg)");
      }
    });
  });
  