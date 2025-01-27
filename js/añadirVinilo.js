    $(document).ready(function() {
        // Mostrar o cerrar el formulario al hacer clic en el botón
        $("#addDisc").click(function(event) {
            // Prevenir que el clic en el botón se propague
            event.stopPropagation();

            // Alternar la visibilidad del formulario y mantener la estructura
            $(".addVinyl").css("display", function(index, value) {
                return value === "none" ? "flex" : "none";  // Alternar entre "none" y "flex"
            });
        });

        // Evitar que el clic dentro del formulario cierre el formulario
        $(".addVinyl").click(function(event) {
            event.stopPropagation();
        });
    });
