<?php
    $fi=fopen("direcmail.txt", "a");
    $dircorr=$_REQUEST['correo'];
    fwrite($fi,$dircorr);
    fclose($fi);
?>