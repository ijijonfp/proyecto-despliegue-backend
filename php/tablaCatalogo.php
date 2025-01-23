<?php

include_once("configuracion.php");

$sql = "SELECT imagenVinilo, idVinilo, tituloVinilo, idBanda, descripcionVinilo, precioVinilo, visible FROM vinilos";

$result = $conn->query($sql);

$tabla = "";

if ($result->num_rows > 0) {
    $tabla .= "<table>";
    $tabla .= "<div class='tableHeader'";
    $tabla .= "<thead><tr>";

    $fields = $result->fetch_fields();
    foreach ($fields as $field) {
        $tabla .= "<th>" . htmlspecialchars($field->name) . "</th>";
    }

    $tabla .= "</div>";
    $tabla .= "</tr></thead>";
    $tabla .= "<tbody>";

    while ($row = $result->fetch_assoc()) {
        $tabla .= "<tr>";

        foreach ($fields as $field) {
            $columna = htmlspecialchars($field->name);

            if ($columna === 'visible') {
                if ($row['visible'] === 'True') {
                    $tabla .= "<td><a href='ocultarVinilo.php?idVinyl=" . $row['idVinilo'] . "'>O</a></td>";
                } else {
                    $tabla .= "<td><a href='desocultarVinilo.php?idVinyl=" . $row['idVinilo'] . "'>Ø</a></td>";
                }
            } else {
                $tabla .= "<td>" . htmlspecialchars($row[$field->name]) . "</td>";
            }
        }

        $tabla .= "</tr>";
    }

    $tabla .= "</tbody>";
    $tabla .= "</table>";
}

echo $tabla;

?>
