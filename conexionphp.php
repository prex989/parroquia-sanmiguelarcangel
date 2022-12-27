<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
if ($conn_access = odbc_connect ( "Blog", "", "")){ 
    echo "Conectado correctamente"; 
    $ssql = "select * from comentarios"; 
    if($rs_access = odbc_exec ($conn_access, $ssql)){ 
       echo "La sentencia se ejecut� correctamente"; 
       while ($fila = odbc_fetch_object($rs_access)){ 
          echo "<br>" . $fila->titulo; 
       } 
    }else{ 
       echo "Error al ejecutar la sentencia SQL"; 
    } 
} else{ 
    echo "Error en la conexi�n con la base de datos"; 
}
?>
/body>
</html>
