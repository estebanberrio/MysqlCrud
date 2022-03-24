<?php
extract ($_REQUEST);
if (!isset($_REQUEST['x']))
	$x=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Plantilla Principal</title>
<script src="js/menu.js"> </script>
<link href="Css/estilos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Css/estiloMenu.css" >
</head>
<body>

<div id=fondox>

<div id="divContenedor">
	<h1>INICIE SESION</h1>
   
	<div id="divContenido"> <?php include "login/iniciar.php" ?> </div>
</div>
</div>
</div>
</body>
</html>