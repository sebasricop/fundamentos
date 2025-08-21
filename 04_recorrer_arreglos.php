<?php
$course = "Curso de Sebas php";
$archivado = true;
$tags = ["PHP", "Laravel", "JavaScript"];

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

<strong>Cursos Relacionados</strong>
<ul>
    <li><?php foreach ($tags as $tag): ?></li>
    <li><?= $tag ?></li>
    <li><?php endforeach; ?></li>
</ul>

</body>

</html>