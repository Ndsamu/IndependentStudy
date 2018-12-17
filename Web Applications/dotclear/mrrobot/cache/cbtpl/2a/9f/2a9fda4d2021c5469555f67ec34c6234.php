<header class="header">
	<nav role="navigation">
		<ul class="skip-links" id="prelude">
			<li><a href="#main"><?php echo __('To content'); ?></a></li>
			<li><a href="#blognav"><?php echo __('To menu'); ?></a></li>
			<li><a href="#search"><?php echo __('To search'); ?></a></li>
		</ul>
	</nav>

	<div class="banner" role="banner">
		<h1 class="site-title"><a class="site-title__link"
			href="<?php echo context::global_filters($core->blog->url,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogURL'); ?>"><span class="site-title__text"><?php echo context::global_filters($core->blog->name,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => '1',
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogName'); ?></span></a></h1>
		<p class="site-baseline"><?php echo context::global_filters($core->blog->desc,array (
  0 => NULL,
  'encode_xml' => 0,
  'encode_html' => 0,
  'cut_string' => 0,
  'lower_case' => 0,
  'upper_case' => 0,
  'encode_url' => 0,
  'remove_html' => 0,
  'capitalize' => 0,
  'strip_tags' => 0,
),'BlogDescription'); ?></p>
	</div>

	<?php if ($core->hasBehavior('publicTopAfterContent')) { $core->callBehavior('publicTopAfterContent',$core,$_ctx);} ?>

	<?php echo tplSimpleMenu::displayMenu('nav header__nav','',''); ?>
</header>
