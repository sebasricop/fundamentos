<?php
$course = "Curso de Sebas php";
$author = "Guadalupe FEA";
$precio = "Precio del siguiente curso: $2.500";
$Date = date("d-m-Y");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Sebas php</title>
</head>

<body>
    <div class="course-container">
        <h1>Bienvenido al <?= $course ?></h1>
        <br>
        <h2>Autor: <?= $author ?></h2>
        <br>
        <h3>Precio: <?= $precio ?></h3>
        <br>
        <h4>Fecha: <?= $Date ?></h4>
        <br>
    </div>

    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur totam, dolore velit exercitationem suscipit quia deleniti vitae dolorem amet eveniet eius perspiciatis nihil magnam repudiandae, enim, optio quisquam soluta officia.</P>
</body>

</html>