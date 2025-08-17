<?php
$course = "Curso de Sebas php";
$archivado = true;
$tags = ["PHP", "Laravel", "JavaScript"];
$horarios = ["Sabados 8:00 AM a 5:00 PM", "Domingos 9:00 AM", "Lunes 10:00 AM", "Martes 11:00 AM", "Miercoles 12:00 PM", "Jueves 1:00 PM", "Viernes 2:00 PM"];

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

<strong>Etiquetas</strong>
<ul>
    <li><?= $tags[0] ?></li>
    <li><?= $tags[1] ?></li>
    <li><?= $tags[2] ?></li>
</ul>

<p>Horarios Disponibles</p>
<ul>
    <li><?= $horarios[0] ?></li>
    <li><?= $horarios[5] ?></li>
    <li><?= $horarios[6] ?></li>
</ul>

</body>

</html>