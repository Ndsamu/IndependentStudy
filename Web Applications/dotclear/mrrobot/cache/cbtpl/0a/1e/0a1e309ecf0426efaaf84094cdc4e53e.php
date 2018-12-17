<aside class="sidebar" id="sidebar" role="complementary">
	<?php if(publicWidgets::ifWidgetsHandler('nav','')) : ?>
		<div class="widgets blognav__widgets" id="blognav">
	        <h2 class="blognav__title"><?php echo __('Blog menu'); ?></h2>
			<?php publicWidgets::widgetsHandler('nav',''); ?>
		</div> 
	<?php endif; ?>
	<?php if(publicWidgets::ifWidgetsHandler('extra','')) : ?>
		<div class="widgets blogextra__widgets" id="blogextra">
	        <h2 class="blogextra__title"><?php echo __('Extra menu'); ?></h2>
			<?php publicWidgets::widgetsHandler('extra',''); ?>
		</div> 
	<?php endif; ?>
</aside>
