<?php defined('SYSPATH') OR die('No Direct Script Access'); ?>

<ul class="bullet_list">
	<li>test one</li>
	<?php foreach ($list_items as $li): ?>
		<li><?php echo $li->title; ?></li>
	<?php endforeach; ?>
</ul>