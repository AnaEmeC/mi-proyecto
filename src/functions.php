<?php
function saludo()
{
    return "¡Hola desde functions.php!";
}
echo saludo();

function saludo2($nombre)
{
    return "¡Hola desde $nombre!";
}

$nombre1 = "BobEsponja";
echo saludo2($nombre1);