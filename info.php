<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Informacion Almacenada</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
			<section class="hero is-info">
  				<div class="hero-body">
   				 <p class="title">
     			 Informacion guardada
   				 </p>
				  </div>
			</section>

	<section class="section is-medium columns">
    <div class="column"></div>
    <div class="column is-two-fifths">
           <?php
	
				$Nombredelauto = $_POST['Nombre del auto'];
				$Modelodelauto = $_POST['Modelo del auto'];
				$Aniodelauto= $_POST['Anio del auto'];
				$Costodelauto = $_POST['Costo del auto'];
				$Nombredelcomprador= $_POST['Nombre del comprador'];
				$Curp = $_POST['Curp'];
				$Domicilio = $_POST['Domicilio'];
				$Telefono = $_POST['Telefono'];
				$Correo = $_POST['Correo'];
				$Sexo = $_POST['Sexo'];
				echo "<h1 class='is-subtitle'>";
				echo "<strong> Hola " .  $Nombredelauto ." " . $Modelodelauto . " " . $Aniodelauto . "</strong>";
				echo "<strong> <br>Costodelauto: </strong>" . $Costodelauto;
				echo "<strong> <br>Nombredelcomprador: </strong>" . $Nombredelcomprador;
				echo "<strong> <br>CURP: </strong>" . $Curp;
				echo "<strong> <br>Dirección es: </strong>" . $Domicilio;
				echo "<strong> <br>Télefono: </strong>" . $Telefono;
				echo "<strong> <br>Correo: </strong>" . $Correo;
				echo "<strong> <br>Genero: </strong>" . $Sexo;
			?>

		</div>
		<div class="column"></div>

	</section>
</body>
</html>