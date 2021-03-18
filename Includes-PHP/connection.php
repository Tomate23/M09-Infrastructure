<?php
    $server="132.145.55.206";
    $username="tomate2";
    $password="Roma00josue23&";
    $db="events";

    $conndb=mysqli_connect($server,$username,$password,$db);

    if (!$conndb) {
	        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		        exit;
    }

    echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($conndb) . PHP_EOL;

?>
