<?php 
$blog_hide_comments = "";
if (isset($qode_options_flat['blog_hide_comments'])) {
	$blog_hide_comments = $qode_options_flat['blog_hide_comments'];
}

?>
<article class="audio element_fade_in">
	<div class="post_info">
		<div class="inner">
			<div class="post_date">
				<span class="date"><?php the_time('d'); ?></span>
				<span class="month"><?php the_time('M'); ?></span>
			</div>
			<div class="blog_like">
				<?php if( function_exists('qode_like') ) qode_like(); ?>
			</div>
		</div>
	</div>
	<div class="post_content_holder">
			<div class="post_image">
				<div class="inner">
					<audio src="<?php echo get_post_meta(get_the_ID(), "audio_link", true) ?>" controls="controls">
						<?php _e("Your browser don't support audio player","qode"); ?>
					</audio>
				</div>
			</div>
		<div class="post_text">
			<div class="inner">
				<span class="top_info"><?php _e('Posted by','qode'); ?> <span><?php the_author(); ?></span> <?php _e('in','qode'); ?> <?php the_category(', '); ?></span>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<div class="info_bottom">
					<?php if($blog_hide_comments != "yes"){ ?>
						<a  class="comments" href="<?php comments_link(); ?>"><?php comments_number( __('no comment','qode'), '1 '.__('comment','qode'), '% '.__('comments','qode') ); ?></a>
					<?php } ?>
					<?php echo do_shortcode('[social_share]'); ?>
				</div>
			</div>
		</div>
	</div>
</article>