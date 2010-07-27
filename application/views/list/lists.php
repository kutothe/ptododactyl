<?php defined('SYSPATH') OR die('No Direct Script Access'); ?>

<ul class="bullet_list">
	<?php foreach ($lists as $list): ?>
		<li><?php echo $list->title; ?></li>
	<?php endforeach; ?>
</ul>