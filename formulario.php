<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
	<body>

		<section class="hero is-primary">
  			<div class="hero-body">
    				<p class="title">
      					Datos
    				</p>
  			</div>
		</section>
			<section class="section is-medium columns">
  			<div class="column"></div>
  			<div class="column is-five-fifths">
			<form action="Cuestionario.php" method="post">
			<div class="box">
				<div>
				<label class="label">Nombre del auto:</label>
				<input class="input is-primary" type="text" name="Nombre del auto" required>
				</div>

				<div>
				<label class="label">Modelo del auto:</label>
				<input class="input is-primary" type="text" name="Modelo del auto" required>
				</div>

				<div>
				<label class="label">Anio del auto:</label>
				<input class="input is-primary" type="text" name="Anio del auto" required>
				</div>

				<div>
				<label class="label">Costo del auto:</label>
				<input class="input is-primary" type="text" name="Costo del auto" required>
				</div>

				<div>
				<label class="label">Nombre del comprador:</label>
				<input class="input is-primary" type="text" name="Nombre del comprador" required>
				</div>

				<div>
				<label class="label">CURP:</label>
				<input class="input is-primary" type="text" name="Curp" required>
				</div>

				<div>
				<label class="label">Domicilio:</label>
				<input class="input is-primary" type="text" name="Domicilio" required>
				</div>

				<div>
				<label class="label">Telefono:</label>
				<input class="input is-primary" type="tel" name="Telefono" required>
				</div>

				<div>
            	<label class="label">Email:</label>
        		<input class="input is-primary" type="email" name="Correo" value="example@gmail.com">

				</div>

				<div>
				<label class="label">Sexo:</label>
				<div class="control">
  				<label class="radio" >										 
   			    <input type="radio" name="Sexo" value="Hombre"> Hombre
  				</label>
 				<label class="radio" >										
     	 		 <input type="radio" name="Sexo" value="Mujer"> Mujer
  				</label>
	    		  <label class="radio">										 
 				 <input type="radio" name="Sexo" value="Otros"> Otro
  				</label>
				</div>
               	</div>
					 </form>
				</div>
		<div class="column"></div>
		</section>
     </body>
</html>