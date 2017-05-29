<?php
	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$patente = $_POST['patente'];
	$color = $_POST['color'];
	$colores = $_POST['colores'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$equipo = $_POST['equipo'];
	$pais = $_POST['pais'];
	$numero = $_POST['numero'];

	echo '<!doctype html>
<html>

<head>
    
	<title>Pagina de jugadores</title>

	<meta charset="iso-8859-1">
	<meta name="description" content = "Web con imagenes"/>
    <meta name="keywords" content = "Futbol internacional, Champions league">
    
 	<link rel="stylesheet" type="text/css" href="principal.css">

</head>

<body>

<div id="principal">

	<nav id ="barranav">
		<ul id="barranavul">
			<li><a href="index.html">Home</a></li>
			<li><a href="jugadores.html">Jugadores</a></li>
			<li><a href="resultados.html">Resultados</a></li>
			<li><a href="formulario.html">Formulario</a></li>
		</ul>
	</nav>
    
    <div class="barralateralh1">
       <div class="barralateralh2">
           <div class="titulonav">
           <p>Galeria</p>
           </div>
           
           <div class="barralateral">
           <ul>
              <li><a href="madrid1.html">Real Madrid</a></li>
              <li><a href="barca1.html">Barcelona</a></li>
              <li><a href="chelsea1.html">Chelsea</a></li>
              <li><a href="#">Juventus</a></li>
           </ul>
           </div>
        </div>
           
        <div class="barralateralh2">
           <div class="titulonav">
           <p>Multimedia</p>
           </div>
           
           <div class="barralateral">
           <ul>
              <li><a href="madrid2.html">Real Madrid</a></li>
              <li><a href="barca2.html">Barcelona</a></li>
              <li><a href="chelsea2.html">Chelsea</a></li>
              <li><a href="#">Juventus</a></li>
           </ul>
           </div>
        </div>
        
        <div class="barralateralh2">
           <div class="titulonav">
           <p>Redes sociales</p>
           </div>
           
           <div class="barralateral">
           <ul>
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
           </ul>
           </div>
        </div>
     </div>
    
    <section class="main">
        <h1>Respuesta de la encuesta</h1>
		<p>Estimado/a '.strtolower($sexo).' '.ucwords(strtolower($nombre)).' '.ucwords(strtolower($apellido)).'('.$edad.') su email ('.$email.') y su password ('.$pass.') han sido guardados con exito. <br> El codigo de su color es '.$color.' pero prefiere estos';
	foreach ($colores as $i => $valor){
		echo ' '.strtolower($valor);
	}
		 echo'.<br> La patente de su vehiculo es '.$patente.', es hincha de '.$equipo.' y vive en '.ucwords(strtolower($pais)).'.<br>Su numero de la suerte es '.$numero.'</p>
    </section>
     
     
     <footer>
    	<small><p>Copyright 2016, Mart&iacute;n Bobbio</p></small>
    </footer>
	
	</div>
    
</body>

</html>';
 ?>