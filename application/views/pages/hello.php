<html>
	<head>
		<title>Hello!</title>
	</head>
	<body>
		<p>
		<?php if ( Auth::instance()->logged_in() ) { ?>
			You are logged in as '<?php echo Auth::instance()->get_user(); ?>'.
			<?php echo html::anchor('index.php/auth/logout', "Logout"); ?>
		<?php } else { ?>
			Click <?php echo html::anchor('index.php/auth', "to login."); ?>
		<?php } ?>
		<hr>
		<h1>This is my first view</h1>
		<p>Content:  '<?php echo $content; ?>' </p>
	</body>
</html>
