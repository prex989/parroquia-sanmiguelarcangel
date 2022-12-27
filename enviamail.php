<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
<title>enviamail.php</title>
</head>
<body bgcolor="#f4f4f4">
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Parroquia</span> San Miguel Arcangel</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
          </ul>
        </nav>
      </div>
    </header>
<?php
		// leemos los datos del formulario y guardamos en las variables
		$motivo = $_POST["rbutton"];
		$nombre = $_POST["nombre"];
		$email = $_POST["email"];
		$observaciones = $_POST["observaciones"];

		// armamos el cuerpo del mensaje en HTML
		$mensa = "<font face=verdana><h3><b><u>FORMULARIO DE CONTACTO</u></b></h3><br>";
		$mensa = $mensa . "<b>Motivo</b>: " . $motivo . "<br>";
		$mensa = $mensa . "<b>Nombre</b>: " . $nombre . "<br>";
		$mensa = $mensa . "<b>E-Mail</b>: " . $email . "<br>";
		$mensa = $mensa . "<b>Mensaje</b>:<br>" . $observaciones . "<br>";
		// reemplazamos los saltos de pagina por el equivalente en html
		$mensaje = str_replace("\n", '<br>', $mensa);

		/* destinatario */ // ******** CAMBIAR ESTA LINEA CON LOS DATOS DE TU EMAIL!!! ********
		$to  = "pablorex2012@gmail.com";
		
		/* asunto */
		$subject = "Formulario de Contacto Parroquia San Miguel Arcangel";
		/* Para enviar HTML, setear los encabezados Content-type. */
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		/* Encabezados adicionales*/
		$headers .= "From: post@{$_SERVER['SERVER_NAME']}\r\n" . "Reply-To: $email" . "\r\n";
		
		/* Ahora lo enviamos */
		$envio = mail($to, $subject, $mensaje, $headers);
		
?>
	<center>
		<table bgcolor="#f4f4f4" border=0 height="100%" width="750">
			<TR width="100%">
				<TD width="10%">&nbsp;</TD>
			</TR>
			<TR width="100%">
				<TD width="100%" align="center"><font color="#FFFFF" face="Verdana, Arial" style="font-size:12pt">
<?php
		// mensaje si el envio fue exitoso
		 if ($envio=1) {
		 		echo '<BR><b>Su Mensaje ha sido enviado con exito</b>';
?>
	<br>
        <?php
				}
		// mensaje si el envio dio error
		 else {
		    echo '<b>Se produjo un error y su Mensaje no pudo ser enviado</b>';
				}
?>
        <br>
        <br>
        </font></TD>
			</TR>
		</TABLE>
	</center>
	
</body>
</html>