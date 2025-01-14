<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <br>
    <h1>Ejercicio 1</h1>

    <?php
    $array = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23, "ciudad" => "Barcelona"); //inicializamos el array asociativo
    $suma = 1; //creamos una variable que sume valores para poner "Dato 1º, Dato 2º etc...
    foreach ($array as $i) { //usamos un foreach
        echo "Dato " . $suma . "º: " . $i . '<br>'; //creamos el echo
        $suma++; //sumamos la variable para que el siguiente valor tenga el numero siguiente. 
    }
    ?>

    <br><br>
    <h1>Ejercicio 2</h1>

    <?php
    foreach ($array as $i => $values) { //otro foreach
        echo $i . ": " . $values .  '<br>'; //hacemos echo de los datos
    }
    ?>

    <br><br>
    <h1>Ejercicio 3</h1>

    <?php 
    $array["edad"] = 24; //cambiamos el dato de edad a 24
    $suma = 1; //volvemos a inicializar la variable suma
    foreach ($array as $i) { //creamos el foreach para que recorra el array
        echo "Dato " . $suma . "º: " . $i . '<br>'; //printeamos el array
        $suma++; //sumamos la variable
    }
    ?>

    <br><br>
    <h1>Ejercicio 4</h1>

    <?php
    unset($array["ciudad"]); //con unset, quitamos el valor de la variable mencionado, en este caso ciudad
    var_dump($array); //mostramos el contenido del array con un var_dump
    ?>

    <br><br>
    <h1>Ejercicio 5</h1>

    <?php
    $suma = 1; //inicializamos otra vez el valor suma
    $letters = "a,b,c,d,e,f"; //creamos un string
    $letters = explode(",", $letters); //el string lo pasamos a array con el explode
    rsort($letters); //de esta forma ordenamos alfabeticamente el array de atras a alante
    foreach ($letters as $i) { //bucle para printear el array
        echo "Letra " . $suma . ": " . $i . '<br>'; //printeamos el array
        $suma++; //sumamos la variable
    }
    ?>

    <br>
    <h1>Ejercicio 6</h1>

    <?php
    $notas = array(
        "Miguel" => 5,
        "Luis" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    ); //inicializamos el array asociativo

    echo "Notas de los estudiantes: "; //hacemos un echo porque este texto es fijo y no queremos que se repita en el bucle
    arsort($notas); //con arsort, las ordenamos de mayor a menor
    foreach ($notas as $i => $values) { //bucle para printear
        echo $i . ": " . $values . " "; //hacemos echo de las notas
    }
    ?>

    <br><br>
    <h1>Ejercicio 7</h1>

    <?php
    $puntuacion = 0; //inicializamos una variable
    foreach ($notas as $i => $values) { //creamos un bucle para sumar los values
        $puntuacion += $values; //sumamos las puntuaciones totales para luego hacer la media
    }
    $media = round($puntuacion / count($notas), 2); //creamos la media con round, para redondear. Cogemos la length del array y ponemos precision de 2.
    echo "Media de las notas " . $media . '<br>'; //printeamos la media
    echo "Alumnos por encima de la media:" . '<br>'; //mostramos un echo con los alumnos por encima de la media
    foreach ($notas as $i => $values) { //bucle
        if ($values >= $media) { //buscamos los alumnos que esten por encima de la media
            echo $i . '<br>'; //y hacemos un echo con los que entren dentro del if.
        }
    }
    ?>

    <br>
    <h1>Ejercicio 8</h1>

    <?php
    $notamax = max($notas); //con max, buscamos el valor maximo de un array
    $nombre = array_search($notamax, $notas); //buscamos el nombre del valor.
    echo "La nota maxima es " . $notamax . " conseguida por " . $nombre . "."; //printeamos la nota maxima
    ?>

</body>

</html>