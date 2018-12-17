<?php if(($_ctx->posts->hasComments() || $_ctx->posts->commentsActive()) || ($_ctx->posts->hasTrackbacks() || $_ctx->posts->trackbacksActive())) : ?>
	<section class="post-feedback">
<?php endif; ?>

<?php if(($_ctx->posts->hasComments() || $_ctx->posts->commentsActive())) : ?>
	<?php if ($_ctx->exists("meta") && ($_ctx->meta->meta_type == "tag")) { if (!isset($params)) { $params = array(); }
if (!isset($params['from'])) { $params['from'] = ''; }
if (!isset($params['sql'])) { $params['sql'] = ''; }
$params['from'] .= ', '.$core->prefix.'meta META ';
$params['sql'] .= 'AND META.post_id = P.post_id ';
$params['sql'] .= "AND META.meta_type = 'tag' ";
$params['sql'] .= "AND META.meta_id = '".$core->con->escape($_ctx->meta->meta_id)."' ";
} ?>
<?php
if ($_ctx->nb_comment_per_page !== null) { $params['limit'] = $_ctx->nb_comment_per_page; }
if ($_ctx->posts !== null) { $params['post_id'] = $_ctx->posts->post_id; $core->blog->withoutPassword(false);
}
if ($_ctx->exists("categories")) { $params['cat_id'] = $_ctx->categories->cat_id; }
if ($_ctx->exists("langs")) { $params['sql'] = "AND P.post_lang = '".$core->blog->con->escape($_ctx->langs->post_lang)."' "; }
$params['order'] = 'comment_dt asc';
$_ctx->comments = $core->blog->getComments($params); unset($params);
if ($_ctx->posts !== null) { $core->blog->withoutPassword(true);}
$_ctx->pings = $_ctx->comments;
?>
<?php while ($_ctx->comments->fetch()) : ?>
		<?php if ($_ctx->comments->isStart()) : ?>
			<div class="feedback__comments" id="comments">
				<h3><?php if (($_ctx->posts->nb_comment + $_ctx->posts->nb_trackback) == 0) {
  printf(__('no reactions'),($_ctx->posts->nb_comment + $_ctx->posts->nb_trackback));
} elseif (($_ctx->posts->nb_comment + $_ctx->posts->nb_trackback) == 1) {
  printf(__('one reaction'),($_ctx->posts->nb_comment + $_ctx->posts->nb_trackback));
} else {
  printf(__('%s reactions'),($_ctx->posts->nb_comment + $_ctx->posts->nb_trackback));
} ?></h3>
				<?php if($_ctx->posts->commentsActive() || $_ctx->posts->trackbacksActive()) : ?>
					<p id="comments-feed"><a class="feed" href="<?php echo context::global_filters($core->blog->url.$core->url->getURLFor("feed","atom"),array (
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
  'type' => 'atom',
),'BlogFeedURL'); ?>/comments/<?php echo context::global_filters($_ctx->posts->post_id,array (
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
),'EntryID'); ?>"
						title="<?php echo __('This post\'s comments Atom feed'); ?>"><?php echo __('This post\'s comments feed'); ?></a></p>
				<?php endif; ?>
				<ul class="comments-list">
		<?php endif; ?>
					<?php if(!$_ctx->comments->comment_trackback) : ?>
						<li id="c<?php echo $_ctx->comments->comment_id; ?>" class="comment <?php if ($_ctx->comments->isMe()) { echo 'me'; } ?> <?php if (($_ctx->comments->index()+1)%2) { echo 'odd'; } ?> <?php if ($_ctx->comments->index() == 0) { echo 'first'; } ?>">
					<?php endif; ?>
					<?php if($_ctx->comments->comment_trackback) : ?>
						<li id="c<?php echo $_ctx->pings->comment_id; ?>" class="ping <?php if (($_ctx->pings->index()+1)%2) { echo 'odd'; } ?> <?php if ($_ctx->pings->index() == 0) { echo 'first'; } ?>">
					<?php endif; ?>
							<p class="comment-info"><a href="#c<?php echo $_ctx->comments->comment_id; ?>" class="comment-number"><?php echo $_ctx->comments->index()+1; ?></a>
								<?php echo __('From'); ?> <?php echo context::global_filters($_ctx->comments->getAuthorLink(),array (
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
),'CommentAuthorLink'); ?> - <time datetime="<?php echo context::global_filters($_ctx->comments->getISO8601Date(''),array (
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
  'iso8601' => '1',
),'CommentDate'); ?>"><?php echo context::global_filters($_ctx->comments->getDate('%d',''),array (
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
  'format' => '%d',
),'CommentDate'); ?>/<?php echo context::global_filters($_ctx->comments->getDate('%m',''),array (
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
  'format' => '%m',
),'CommentDate'); ?>/<?php echo context::global_filters($_ctx->comments->getDate('%Y',''),array (
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
  'format' => '%Y',
),'CommentDate'); ?>, <?php echo context::global_filters($_ctx->comments->getTime('',''),array (
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
),'CommentTime'); ?></time>
							</p>
							<div class="comment-content">

								<?php if ($core->hasBehavior('publicCommentBeforeContent')) { $core->callBehavior('publicCommentBeforeContent',$core,$_ctx);} ?>

								<?php echo context::global_filters($_ctx->comments->getContent(0),array (
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
),'CommentContent'); ?>

								<?php if ($core->hasBehavior('publicCommentAfterContent')) { $core->callBehavior('publicCommentAfterContent',$core,$_ctx);} ?>
							</div>
						</li>
		<?php if ($_ctx->comments->isEnd()) : ?>
					</ul>
				</div>
		<?php endif; ?>
	<?php endwhile; $_ctx->comments = null; ?>
<?php endif; ?>

<?php if($_ctx->posts->commentsActive()) : ?>
	<?php if ($_ctx->form_error !== null) : ?>
		<p class="error" id="pr"><?php if ($_ctx->form_error !== null) { echo $_ctx->form_error; } ?></p>
	<?php endif; ?>

	<?php if (!empty($_GET['pub'])) : ?>
		<p class="message" id="pr"><?php echo __('Your comment has been published.'); ?></p>
	<?php endif; ?>

	<?php if (isset($_GET['pub']) && $_GET['pub'] == 0) : ?>
		<p class="message" id="pr"><?php echo __('Your comment has been submitted and will be reviewed for publication.'); ?></p>
	<?php endif; ?>

	<form class="comment-form" action="<?php echo context::global_filters($_ctx->posts->getURL(),array (
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
),'EntryURL'); ?>#pr" method="post" id="comment-form" role="form">
		<?php if ($_ctx->comment_preview !== null && $_ctx->comment_preview["preview"]) : ?>
			<div id="pr">
				<h3><?php echo __('Your comment'); ?></h3>
				<div class="comment-preview"><?php echo context::global_filters($_ctx->comment_preview["content"],array (
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
),'CommentPreviewContent'); ?></div>
				<p class="buttons"><button type="submit" class="submit" value="<?php echo __('Send'); ?>"><?php echo __('Send'); ?></button></p>
			</div>
		<?php endif; ?>

		<h3><?php echo __('Add a comment'); ?></h3>

			<?php if ($core->hasBehavior('publicCommentFormBeforeContent')) { $core->callBehavior('publicCommentFormBeforeContent',$core,$_ctx);} ?>

			<p class="field name-field"><label for="c_name"><?php echo __('Name or nickname'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
				<input name="c_name" id="c_name" type="text" size="30" maxlength="255"
				 value="<?php echo context::global_filters($_ctx->comment_preview["name"],array (
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
),'CommentPreviewName'); ?>" required />
			</p>

			<p class="field mail-field"><label for="c_mail"><?php echo __('Email address'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
				<input name="c_mail" id="c_mail" type="email" size="30" maxlength="255"
				 value="<?php echo context::global_filters($_ctx->comment_preview["mail"],array (
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
),'CommentPreviewEmail'); ?>" required />
			</p>

			<p class="field site-field"><label for="c_site"><?php echo __('Website'); ?>&nbsp;:</label>
				<input name="c_site" id="c_site" type="url" size="30" maxlength="255"
				 value="<?php echo context::global_filters($_ctx->comment_preview["site"],array (
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
),'CommentPreviewSite'); ?>" />
			</p>

			<p style="display:none">
				<input name="f_mail" type="text" size="30" maxlength="255" value="" />
			</p>

			<p class="field field-content"><label for="c_content" aria-describedby="c_help"><?php echo __('Comment'); ?><abbr title="<?php echo __('Required field'); ?>">*</abbr>&nbsp;:</label>
				<textarea name="c_content" id="c_content" cols="35"
				 rows="7" required><?php echo context::global_filters($_ctx->comment_preview["rawcontent"],array (
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
  'raw' => '1',
),'CommentPreviewContent'); ?></textarea>
			</p>

			<p class="form-help" id="c_help"><?php if ($core->blog->settings->system->wiki_comments) {
  echo __('Comments can be formatted using a simple wiki syntax.');
} else {
  echo __('HTML code is displayed as text and web addresses are automatically converted.');
} ?></p>

			<?php if ($core->hasBehavior('publicCommentFormAfterContent')) { $core->callBehavior('publicCommentFormAfterContent',$core,$_ctx);} ?>

			<p class="buttons">
				<button type="submit" class="preview" name="preview" value="<?php echo __('Preview'); ?>"><?php echo __('Preview'); ?></button>
		        <?php if ($core->blog->settings->system->comment_preview_optional || ($_ctx->comment_preview !== null && $_ctx->comment_preview["preview"])) : ?>
		        	<button type="submit" class="submit" value="<?php echo __('Send'); ?>"><?php echo __('Send'); ?></button>
		        <?php endif; ?>
			</p>
	</form>
<?php endif; ?>

<?php if($_ctx->posts->trackbacksActive()) : ?>
	<div class="send-ping">
		<h3><?php echo __('Add ping'); ?></h3>
		<p id="ping-url"><?php echo __('Trackback URL'); ?>&nbsp;: <?php if ($_ctx->posts->trackbacksActive()) { echo $_ctx->posts->getTrackbackLink(); } ?>
</p>
	</div>
<?php endif; ?>

<?php if(($_ctx->posts->hasComments() || $_ctx->posts->commentsActive()) || ($_ctx->posts->hasTrackbacks() || $_ctx->posts->trackbacksActive())) : ?>
	</section> 
<?php endif; ?>
