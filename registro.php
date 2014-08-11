<<<<<<< HEAD
<<<<<<< HEAD
<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$apodo = $_POST['apodo'];
$password = $_POST['password'];
$email = $_POST['email'];

 {
	$conn = new mysqli();
	@$conn->connect("localhost", "root", "", "clasedemo");
	if ($conn->connect_error) //verificamos si hubo un error al conectar, recuerden que pusimos el @ para evitarlo
	{
		die('Error de conexiÛn: ' . $conn->connect_error);
	}
	
	$nuevo_correo = "select * from registro where email='$email'";
    $valida = $conn->query($nuevo_correo);
	if($valida->num_rows > 0)
        {
              echo'<script type="text/javascript">
                alert("Error al registrar! - Correo Duplicado - Ingresa otro");
                window.location="http://localhost/registrarse/creaciondeusuario.html"
                </script>';
        }
        else
        {
			$conn->query("INSERT INTO registro (nombre,apellido,apodo,password,email) VALUES ('$nombre','$apellido','$apodo','$password','$email')"); 
			echo "datos insertado";
		}	

}
?>
=======
=======
>>>>>>> origin/master
<html>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <?php include_once('metadatos.php');?>
    <body class="no-sidebar">
        <?php include_once('UsuarioControlador.php');?> 
	      <?php include_once('banner.php');?> 
        <?php include_once('menuCentral.php');?> 
     
		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Check Espol</a></h1>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<span>Phasellus consequat</span>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Facultades</a></li>
									<li class="break"><a href="right-sidebar.html">Comedores</a></li>
									<li><a href="no-sidebar.html">Iniciar Sesi√≥n</a></li>
								</ul>
							</nav>

					</div>

			</div>

		<!-- Main Wrapper -->
			<div class="wrapper">

				<!--<div class="container">
					<div class="row" id="main">
						<div class="12u"> -->
							
									
						
							<div id="form_wrapper" class="form_wrapper">
								<form class="register">
									<h3>Registro</h3>
									<div class="column">
										<div>
											<label>First Name:</label>
											<input type="text" />
											<span class="error">This is an error</span>
										</div>
										<div>
											<label>Last Name:</label>
											<input type="text" />
											<span class="error">This is an error</span>
										</div>
										
									</div>
									<div class="column">
										
										<div>
											<label>Email:</label>
											<input type="text" />
											<span class="error">This is an error</span>
										</div>
										<div>
											<label>Password:</label>
											<input type="password" />
											<span class="error">This is an error</span>
										</div>
									</div>
									<div class="bottom">
										<div class="remember">
											<input type="checkbox" />
											<span>Send me updates</span>
										</div>
										<input type="submit" value="Register" />
										<a href="index.html" rel="login" class="linkform">You have an account already? Log in here</a>
										<div class="clear"></div>
									</div>
								</form>
								<form class="login active">
									<h3>Entrar</h3>
									<div>
										<label>Username:</label>
										<input type="text" />
										<span class="error">This is an error</span>
									</div>
									<div>
										<label>Password: <a href="forgot_password.html" rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
										<input type="password" />
										<span class="error">This is an error</span>
									</div>
									<div class="bottom">
										<div class="remember"><input type="checkbox" /><span>Keep me logged in</span></div>
										<input type="submit" value="Login"></input>
										<a href="register.html" rel="register" class="linkform">You don't have an account yet? Register here</a>
										<div class="clear"></div>
									</div>
								</form>
								<form class="forgot_password">
									<h3>Forgot Password</h3>
									<div>
										<label>Username or Email:</label>
										<input type="text" />
										<span class="error">This is an error</span>
									</div>
									<div class="bottom">
										<input type="submit" value="Send reminder"></input>
										<a href="index.html" rel="login" class="linkform">Suddenly remebered? Log in here</a>
										<a href="register.html" rel="register" class="linkform">You don't have an account? Register here</a>
										<div class="clear"></div>
									</div>
								</form>
							</div>
							<div class="clear"></div>
						
				<!--<a class="back" href="http://tympanus.net/codrops/2011/01/06/animated-form-switching/">back to the Codrops tutorial</a>-->
					
					

					<!-- The JavaScript -->
					<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
					<script type="text/javascript">
						$(function() {
								//the form wrapper (includes all forms)
							var $form_wrapper	= $('#form_wrapper'),
								//the current form is the one with class active
								$currentForm	= $form_wrapper.children('form.active'),
								//the change form links
								$linkform		= $form_wrapper.find('.linkform');
									
							//get width and height of each form and store them for later						
							$form_wrapper.children('form').each(function(i){
								var $theForm	= $(this);
								//solve the inline display none problem when using fadeIn fadeOut
								if(!$theForm.hasClass('active'))
									$theForm.hide();
								$theForm.data({
									width	: $theForm.width(),
									height	: $theForm.height()
								});
							});
							
							//set width and height of wrapper (same of current form)
							setWrapperWidth();
							
							/*
							clicking a link (change form event) in the form
							makes the current form hide.
							The wrapper animates its width and height to the 
							width and height of the new current form.
							After the animation, the new form is shown
							*/
							$linkform.bind('click',function(e){
								var $link	= $(this);
								var target	= $link.attr('rel');
								$currentForm.fadeOut(400,function(){
									//remove class active from current form
									$currentForm.removeClass('active');
									//new current form
									$currentForm= $form_wrapper.children('form.'+target);
									//animate the wrapper
									$form_wrapper.stop()
												 .animate({
													width	: $currentForm.data('width') + 'px',
													height	: $currentForm.data('height') + 'px'
												 },500,function(){
													//new form gets class active
													$currentForm.addClass('active');
													//show the new form
													$currentForm.fadeIn(400);
												 });
								});
								e.preventDefault();
							});
							
							function setWrapperWidth(){
								$form_wrapper.css({
									width	: $currentForm.data('width') + 'px',
									height	: $currentForm.data('height') + 'px'
								});
							}
							
							/*
							for the demo we disabled the submit buttons
							if you submit the form, you need to check the 
							which form was submited, and give the class active 
							to the form you want to show
							*/
							$form_wrapper.find('input[type="submit"]')
										 .click(function(e){
											e.preventDefault();
										 });	
						});
			        </script>
					
					</div>
				

			
				<!-- Copyright -->
					<div id="copyright" class="container">
						<ul class="menu">
							<li>&copy; Untitled. All rights reserved.</li>
							<li>Design: <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>

			</div>

	

        
    </body>
</html>
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master
