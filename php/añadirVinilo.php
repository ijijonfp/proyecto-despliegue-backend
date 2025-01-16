<?php

include_once("configuracion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vinylName = $_POST["vinylName"];
    $vinylDescription = $_POST["vinylDescription"];
    $vinylPrice = $_POST["vinylPrice"];
    $vinylStatus = True; 


    $sql = "INSERT INTO vinilos (tituloVinilo, descripcionVinilo, precioVinilo, imagenVinilo, visible)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ssdsi", $vinylName, $vinylDescription, $vinylPrice, $vinylImage, $vinylStatus);
        if ($stmt->execute()) {
            echo "Vinilo añadido correctamente.";
        } else {
            echo "Error al añadir el vinilo: " . $stmt->error;
        }
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}
?>