<?php

include_once("configuracion.php");

$sql="SELECT imagenVinilo, idVinilo, tituloVinilo, idBanda, descripcionVinilo, precioVinilo FROM vinilos";
$result= $conn->query($sql);

$tabla = "";

if ($result->num_rows > 0) {
    $tabla .= "<table>"; 
    $tabla .= "<thead><tr>"; 

    $fields = $result->fetch_fields();
    foreach ($fields as $field) {
        $tabla .= "<th>" . htmlspecialchars($field->name) . "</th>"; 
    }

    $tabla .= "<th>Visible</th>"; 

    $tabla .= "</tr></thead>";
    $tabla .= "<tbody>";

    while ($row = $result->fetch_assoc()) {
        $tabla .= "<tr>";

        foreach ($fields as $field) {
            $tabla .= "<td>" . htmlspecialchars($row[$field->name]) . "</td>"; 
        }

        $tabla .= "<td><a href='ocultarProducto.php?delIdStock=" . $row['idVinilo'] . "'>Visible</a></td>";

        $tabla .= "</tr>";
    }

    $tabla .= "</tbody>"; 
    $tabla .= "</table>";
}

echo $tabla;

?>