<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'xxroothxx', 'registro_compras');

    if(!$db){
        echo "Error no se puedo concetar";
        exit;
    }

    return $db;
}