<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página EAD | Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="http://allfont.es/allfont.css?fonts=open-sans-semibold" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

                        	

                            <h1><strong>Unlp Virtual</strong> Dirección de Educación a Distancia y Tecnologías</h1>
                            <div class="descriptionn">
                            	<p>
	                            	Bienvenido al Campus Virtual
                            	</p>
                            </div>
                            <div class="top-big-link">
                            	<a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Iniciar sesión</a>
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="#">Registrarse</a>
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-help">¿Necesitás ayuda?</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 social-login">
                        	<h3>Red Universitaria de Educación a Distancia de Argentina</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        
        <!-- MODAL -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
        				</button>
                        
            			<div class="img-logo">
                            <img class="img-responsive center-block" src="assets/img/logo.png" alt="logo">
                        </div>


        			</div>
        			
        			<div class="modal-body">
        				
	                    <form role="form" action="" method="post" class="login-form">
            
	                    	<div class="form-group">
	                    		<label class="sr-only" for="form-username">Ingrese su nombre de usuario</label>
	                        	<input type="text" name="form-username" placeholder="Nombre de usuario" class="form-username form-control" id="form-username">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="form-password">Ingrese su contraseña</label>
	                        	<input type="password" name="form-password" placeholder="Contraseña" class="form-password form-control" id="form-password">
	                        </div>
	                        <button type="submit" class="btn">Entrar</button>
	                    </form>
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>

        <div class="modal fade" id="modal-help" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
                        </button>
                        
                        <div class="img-logo2">
                            <img class="img-responsive center-block" src="assets/img/logo2.png" alt="logo">
                        </div>


                    </div>
                    
                    <div class="modal-body">
                        
                        <div class="callout border-callout">
                            <p>Eustacio: Hola! ¿Como estas? Soy Eustacio,
                            asistente virtual del Campus</p>
                            <p>Estoy para responder tus consultas.</p>
                            <p>¿En qué te puedo ayudar hoy?</p>

                            <div class="enlaces">
                                <p><a href="#">Perdi mi usuario ¿Que hago?</a></p>
                                <p><a href="#">¿Como solicitar un aula?</a></p>
                            </div>

                            <div class="iconoAyuda">
                                <img class="img-responsive" src="assets/img/iconoAyuda.png">
                            </div>

                            <b class="border-notch notch"></b>
                            <b class="notch"></b>

                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>