<?php

$tiempo_logout = 600; // Cantidad de segundos para considerar a una visitante inactivo
$arr = file("usuarios.dat"); // Levantamos el contenido de usuarios.dat al array
$contenido = $REMOTE_ADDR.":".time()." "; // Guardamos la direccion IP y la hora del visitante

for ( $i = 0 ; $i < sizeof($arr) ; $i++ )
	{
    $tmp = explode(":",$arr[$i]);

    if (( $tmp[0] != $REMOTE_ADDR ) && (( time() - $tmp[1] ) < $tiempo_logout ))
	    {
        $contenido .= $REMOTE_ADDR.":".time()." ";
        }
	}

$fp = fopen("usuarios.dat","w"); 
fputs($fp,$contenido); 
fclose($fp);

$array = file("usuarios.dat");

$USUARIOS_ACTIVOS = count($array);

?>