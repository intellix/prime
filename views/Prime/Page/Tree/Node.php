<?php foreach ($nodes->order_by('position', 'ASC')->find_all() as $node): ?>

	<?php $children = $node->pages->count_all() > 0; ?>
	<?php $path = $url.'/'.$node->slug; ?>

	<li<?=HTML::attributes(['class' => 'list-group-item'.($children ? ' has-children' : '').(isset($open[$node->id]) ? ' open' : ''.($node->visible ? '' : ' disabled'))]);?>>

		<b class="caret" onselectstart="return false;"></b>

		<?php $icon = '<i class="fa fa-file"></i>'; ?>

		<?=HTML::anchor($path, '<span>'.$icon.' '.$node->name.'</span>', ['data-id' => $node->id, 'data-href' => $path, 'data-visible' => $node->visible]);?>

		<?php if ($children): ?>

			<ul class="list-group">
				<?=View::factory('Prime/Page/Tree/Node')->set('nodes', $node->pages)->set('open', $open)->set('url', $path);?>
			</ul>

		<?php endif; ?>

	</li>

<?php endforeach; ?>