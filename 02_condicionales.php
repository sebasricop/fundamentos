<?php
$course = "Curso de Sebas php";
$archivado = true;
$status = $archivado ? "archivado" : "activo";
$nivelDelCurso = "avanzado";
//Basico = "Recomendado para principiantes";
//$intermedio = "Recomendado para quienes ya tienen conocimientos básicos";
//$avanzado = "Recomendado para quienes desean profundizar en el tema";

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
    </div>
    <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur totam, dolore velit exercitationem suscipit quia deleniti vitae dolorem amet eveniet eius perspiciatis nihil magnam repudiandae, enim, optio quisquam soluta officia.</P>

    <P>Nivel de curso <?= $nivelDelCurso ?></P>

    <?php if ($nivelDelCurso == "basico") {
        echo "<p>Recomendado para principiantes</p>";
    } elseif ($nivelDelCurso == "intermedio") {
        echo "<p>Recomendado para quienes ya tienen conocimientos básicos</p>";
    } elseif ($nivelDelCurso == "avanzado") {
        echo "<p>Recomendado para quienes desean profundizar en el tema</p>";
    } ?>


</body>

</html>