<?php

$course = [
    "title" => "curso de Lenguaje de programación",
    "subtitle" => "Aprende desde cero",
    "description" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur totam.",
    "tags" => [
        "PHP",
        "Laravel",
        "JavaScript",
        "HTML",
        "CSS"
    ],
    'author' => "Sebastian",
    'email' => "sebastian@ejemplo.com",
    'Lessons' => [
        "Introducción",
        "Variables",
        "Arreglos",
        "Funciones",
        "POO"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['title'] ?></title>
</head>

<body>
    <h1>Bienvenido al <?= $course['title'] ?></h1>

    <h2><?= $course['subtitle'] ?></h2>

    <P><?= $course['description'] ?></P>

    <p>
        <strong>Etiquetas</strong>
    <ul>
        <?php
        //Recorrer el arreglo de etiquetas
        foreach ($course['tags'] as $tag): ?>
            <li><?= $tag ?></li>
        <?php endforeach; ?>
    </ul>
    </p>

     <p>
        <strong>Lecciones</strong></strong>
    <ul>
        <?php
        //Recorrer el arreglo de etiquetas
        foreach ($course['Lessons'] as $lessons): ?>
            <li><?= $lessons ?></li>
        <?php endforeach; ?>
    </ul>
    </p>

</body>

</html>