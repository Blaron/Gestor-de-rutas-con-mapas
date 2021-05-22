<?php

@ $conectar = new mysqli('localhost', 'dwes', 'dwes', 'mapas');
$error = $conectar->connect_errno;


$resultado = $conectar->query('SELECT id, nombre, apellidos, telefono, visita, direccion, numero FROM usuarios');

$stock = $resultado->fetch_object();
$lista = [];
while ($stock != null) { // mostramos los cochecitos
    if ($stock->visita == "SI") {
        //echo $stock->direccion;
        $prueba = json_encode($stock->direccion, JSON_PRETTY_PRINT);
        array_push( $lista, $stock->direccion);
        
        
    }
    $stock = $resultado->fetch_object();
    
}
echo json_encode($lista, JSON_PRETTY_PRINT);

if ($error != null) {

    echo "<p>Error $error conectando a la base de datos: $conectar->connect_error</p>";
    exit();
}
$conectar->close();
?>