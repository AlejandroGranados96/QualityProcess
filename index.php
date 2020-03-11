<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Iniciar Sesion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="content/styles.css">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1><img src="IMA\lo.png" WIDTH=90/><img src="IMA\ma.png" WIDTH=220/></h1>
				<p>Aproximando Personas </p>
			</header>

		<!-- Signup Form -->
		
		<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			
			<div class="card-body">
				<form  method="POST" action="controller/login.php">
				
					<div class="input-group form-group">
						<input type="email" style="width: 80%;"  placeholder="Correo" name="email">
					</div>

					<br>

					<div class="input-group form-group">
						<input type="Password" style="width: 80%;"  placeholder="Contraseña" name="pass">
					</div>
					
					<br>

					<div class="form-group">
						<input type="submit"  value="Login" class="btn float-right login_btn">
					</div>
					
				</form>
			</div>
			
		</div>
	</div>
<br><br>
		<!-- Footer -->
			<footer id="footer">
				<!-- Footer --<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>-- Footer -->
				<ul class="copyright">
					<li>&copy; Polomex S.A de C.V</li>
				</ul>
			</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>