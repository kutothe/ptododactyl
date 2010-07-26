<html>
	<head>
		<title>Login!</title>
	</head>
	<body>
		<h1>Log the fuck in!</h1>
		<?php echo Form::open('index.php/auth/do_login'); ?>
		<input type="hidden" id="destination" name="destination"
			value="<?php echo $destination; ?>" />
		<p>Username:
		<input type="text" id="username" name="username" value="" /></p>
		<p>Password:
		<input type="password" id="password" name="password" value="" /></p>
		<p><input type="submit" id="submit" name="submit" value="Send" /></p>
		<?php echo Form::close(); ?>
	</body>
</html>
