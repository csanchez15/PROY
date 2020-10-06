<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>




<div class="container">
		<div class="row justify-content-lg-center d-flex align-items-center" style="height: 70vh">
			<div class="col-lg-6">
				<form id="frm-login">
                    <div class="form-group">
                        <h1>Login</h1>
                    </div>
					<div class="form-group" id="email">
						<label for="exampleInputEmail1">Correo</label>
						<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escriba su email">
						
                        <div class="invalid-feedback"></div>
					</div>
					<div class="form-group" id="password">
						<label for="exampleInputPassword1">Contraseña</label>
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">  
						<small id="passwordHelp" class="form-text text-muted">Nunca compartas tu contraseña con otras personas
                        </small>
						<div class="invalid-feedback"></div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Ingresar</button>
					</div>
					<div class="form-group" id="alert">

					</div>
					
				</form>
			</div>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->
<script src="<?=base_url('assets/js/auth/login.js')?>"></script>
</html>

</body>

</html>