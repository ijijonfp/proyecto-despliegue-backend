$(document).ready(function() {
    // Asegúrate de usar el símbolo de ID (#) para seleccionar el botón
    $("#addDisc").click(function() {
        // Cambiar el estilo de display de 'none' a 'flex'
        $(".addVinyl").css("display", "flex");
        $(".addVinyl").css("justify-content", "center")
    });
});