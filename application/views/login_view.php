<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?php echo form_open('login/cekLogin') ?>
								<div class="form-group">
									<legend>Login</legend>
								</div>

								<?php echo validation_errors(); ?>
								<div class="form-group">
									<label for="">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Input field" >

								</div>

								<div class="form-group">
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Input field" >
								</div>
								<div class="form-group">
										<button type="submit" class="btn btn-primary">Submit</button>
								</div>
						</form>		
			</div>	
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?php echo form_open_multipart('login/daftar/'.$this->uri->segment(3)); ?>
								<legend>Registrasi Account</legend>
								<?php echo validation_errors(); ?>
								
								<div class="form-group">
								
									<label for="">Nama</label>
									<input type="text" class="form-control" id="nama" name="nama" placeholder="Input field" >
									<label for="">Username</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Input field" >
									<label for="">Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Input field" >
									<label for="">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Input field" >
									
									
								
								</div>
							
								
							
								<button type="submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>

			</div>
		</div>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>