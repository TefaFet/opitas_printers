<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/opitas_printers/asset/css/style_login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h2>OPITAS PRINTERS DAES</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
  <form action="<?php echo base_url()?>login/registro" method="POST">
			<h1>Crea tu cuenta</h1><br><br>
			
			<input name="nombre" type="text" placeholder="Nombre" />
			<input name="correo_electo" type="email" placeholder="Correo electronico" />
			<input name="contrasena" type="password" placeholder="Contraseña" />
			<button style="background: linear-gradient(to right, #03dac6 , #03dac6);" href="http://localhost/opitas_printers/index.php/Controller/menu" type="submit">Registrarse</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form action="<?php echo base_url()?>login/valida_user" method="POST">
			<h1>Iniciar sesión</h1>	<br><br>
			
			<span>Use su correo electronico para iniciar sesión</span>
			<input name="correo" type="email" placeholder="Correo electronico" />
			<input name="pass" type="password" placeholder="Contraseña" />
			<button style="background: linear-gradient(to right, #03dac6 , #03dac6);" >Iniciar sesión</button>
		</form>
	</div>
	<div class="overlay-container">
		<div style="background: linear-gradient(to right, #03dac6 , #03dac6 );" class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido de nuevo!</h1>
				<p>Para mantenerse conectado con nosotros, inicie sesión con su información personal</p>
				<button style="background: linear-gradient(to right, #03dac6 , #03dac6);" class="ghost" id="signIn">Iniciar sesión</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hola, Usuario!</h1>
				<p>Ingresa tus datos personales</p>
				<button style="background: linear-gradient(to right, #03dac6 , #03dac6);" class="ghost" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Opitas printers daes <i class="fa fa-heart"></i> Ir al
		<a target="_blank" href="http://localhost/opitas_printers/index.php/controller">menu</a>
		- Prestación de servicios de alquiler de impresoras en la ciudad de Neiva.
	</p>
</footer>
<!-- partial -->
<script src="http://localhost/opitas_printers/asset/js/login.js"></script>

</body>
</html>

