<?php
include_once("configuracion.php");

$sql2= "SELECT idBanda, nombreBanda FROM banda";
$result2= $conn->query($sql2);

$selectBanda = "<select name='banda' id='banda' required>";
$selectBanda.= "<option value='' disabled selected>Selecciona una banda</option>";

if ($result2->num_rows > 0) { 
    while ($row = $result2->fetch_assoc()) {
        $selectBanda .= "<option value='" . $row['idBanda'] . "' data-tipo='".$row['idBanda'] . "'>" . $row['nombreBanda'] . "</option>";
    }
    $selectBanda .= "</select>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OldVinylBack</title>
</head>
<body>

    <?php include_once("tablaCatalogo.php"); ?>

    <form action="añadirVinilo.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="vinylName" id="vinylName" placeholder="Nombre del vinilo.">
    <?php echo $selectBanda; ?>
    <input type="text" name="vinylDescription" id="vinylDescription" placeholder="Descripción del vinilo">
    <input type="text" name="vinylPrice" id="vinylPrice" placeholder="Precio del vinilo">
    <input type="file" name="vinylImage" id="vinylImage" accept="image/*" required>
    <button type="submit">Añadir</button>
</form>

    
</body>
</html>