<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Prata&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/catalogue.css" />
    <script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"
    ></script>
    <title>OldVinylBack</title>
</head>
<body>
    <div class="catalogoContainer">
        <div class="buscadorContainer">
            <input type="text" class="buscador" name="buscador" id="buscador" placeholder="Busca tu vinilo">
        </div>

        <div class="tableContainer">
            <?php include_once("tablaCatalogo.php"); ?>
        </div>

        <div class="addVinylContainer">
            <button type="button" id="addDisc" class="addDisc">+</button>
        </div>
    </div>

    <div class="formContainer">
        <form action="añadirVinilo.php" method="POST" enctype="multipart/form-data" class="addVinyl">
            <label for="name">Nombre</label>
            <input type="text" name="vinylName" id="vinylName" placeholder="Nombre del vinilo" required>

            <label for="banda">Banda</label>
            <?php echo $selectBanda; ?>

            <label for="description">Descripción</label>
            <input type="text" name="vinylDescription" id="vinylDescription" placeholder="Descripción del vinilo" required>

            <label for="price">Precio</label>
            <input type="text" name="vinylPrice" id="vinylPrice" placeholder="Precio del vinilo" required>

            <label for="image">Imagen</label>
            <input type="file" name="vinylImage" id="vinylImage" accept="image/*" required>

            <button type="submit">Añadir</button>
        </form>
    </div>

    <script src="../js/añadirVinilo.js"></script>
</body>
</html>
