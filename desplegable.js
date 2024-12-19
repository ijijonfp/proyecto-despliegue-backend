$(document).ready(function() {
    $("#botonDesplegable").click(function() {
        if ($("#menuDesplegable").css("right") == "0px") {

            $("#menuDesplegable").css("right", "-21%"); 
        } else {
            $("#menuDesplegable").css("right", "0");
        }

    });

    $("#homeSideBar").click(function(){
        $("#menuDesplegable").css("right", "-21%");
    })

    $("#detailsSideBar").click(function(){
        $("#menuDesplegable").css("right", "-21%");
    })

    $("#storySideBar").click(function(){
        $("#menuDesplegable").css("right", "-21%");
    })

    $("#contactSideBar").click(function(){
        $("#menuDesplegable").css("right", "-21%");
    })

});