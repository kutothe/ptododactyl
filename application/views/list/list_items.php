<?php defined('SYSPATH') OR die('No Direct Script Access'); ?>

<h2><?php echo $list->title; ?></h2>
<ul class="bullet_list">
	<?php foreach ($list_items as $li): ?>
		<li><?php echo $li->detail; ?></li>
	<?php endforeach; ?>
</ul>