<p id="gotop"><a href="#top"><?php echo __('Page top'); ?></a></p>

<footer class="footer" id="footer" role="contentinfo">
	<?php if(publicWidgets::ifWidgetsHandler('custom','')) : ?>
		<div class="widgets footer__widgets" id="blogcustom">
	        <h2 class="blogcustom__title"><?php echo __('Blog info'); ?></h2>
			<?php publicWidgets::widgetsHandler('custom',''); ?>
		</div> 
	<?php endif; ?>

	<?php if ($core->hasBehavior('publicInsideFooter')) { $core->callBehavior('publicInsideFooter',$core,$_ctx);} ?>

	<p><?php printf(__("Powered by %s"),"<a href=\"http://dotclear.org/\">Dotclear</a>"); ?></p>
</footer>
<?php if ($core->hasBehavior('publicFooterContent')) { $core->callBehavior('publicFooterContent',$core,$_ctx);} ?>

<?php try { echo $core->tpl->getData('user_footer.html'); } catch (Exception $e) {} ?>

