<div style="border: 1px solid #aaa;">
  (header)
  <?php if ( Auth::instance()->logged_in() ) { ?>
    You are logged in as '<?php echo Auth::instance()->get_user(); ?>'.
    <?php echo html::anchor('index.php/auth/logout', "Logout"); ?>
  <?php } else { ?>
    Click <?php echo html::anchor('index.php/auth', "to login."); ?>
  <?php } ?>
</div>
<div id="main_content">
	<h2>Main Content</h2>
