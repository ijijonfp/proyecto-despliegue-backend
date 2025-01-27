<?php

include_once("configuracion.php");

$sql = "SELECT imagenVinilo, idVinilo, tituloVinilo, idBanda, descripcionVinilo, precioVinilo, visible FROM vinilos";

$result = $conn->query($sql);

$tabla = "";

if ($result->num_rows > 0) {
    $tabla .= "<table class='styled-table'>";

    while ($row = $result->fetch_assoc()) {
        $tabla .= "<tr class='rowContainer'>";

        foreach ($row as $key => $value) {
            if ($key === 'imagenVinilo') {
                $tabla .= "<td><div class='vinylImage' style='background-image: url(" . htmlspecialchars($value) . ");'></div></td>";
            } elseif ($key === 'idVinilo') {
                $tabla .= "<td style='display: none;'>" . htmlspecialchars($value) . "</td>";
            } elseif ($key === 'visible') {
                if ($value === 'True') {
                    $tabla .= "<td><a href='ocultarVinilo.php?idVinyl=" . $row['idVinilo'] . "'>O</a></td>";
                } else {
                    $tabla .= "<td><a href='desocultarVinilo.php?idVinyl=" . $row['idVinilo'] . "'>Ø</a></td>";
                }
            } else {
                $tabla .= "<td>" . htmlspecialchars($value) . "</td>";
            }
        }

        $tabla .= "</tr>";
    }

    $tabla .= "</table>";
}

echo $tabla;

?>
