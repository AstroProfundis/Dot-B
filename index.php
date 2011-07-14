<?php
global $dotb_options;
$dotb_settings = get_option( 'dotb_options', $dotb_options );
?>
<?php get_header();?>
<div id="main"><!--here -->
	<div id="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<h2 class="post_title_h2"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="post_info_top">
				<div class="post_info_date"> <?php printf( __('Posted on %s ', 'dot-b'), get_the_date(get_option( 'date_format' ))); ?></div>
				<div class="post_info_author"> <?php _e('by', 'dot-b'); ?> <?php the_author_posts_link(); ?></div>
				<?php edit_post_link(__('[ Edit ]'),'<span class="post_info_edit">','</span>'); ?>
			</div>
			<div class="post_content">
				<?php if ( $dotb_settings['dotb_is_excerpt']=='1' ) { the_excerpt(__('Read more &raquo;','dot-b')); } else { the_content(__('Read more &raquo;','dot-b')); }?>
				<?php wp_link_pages(); ?>
			</div>
		</div>
		<div class="post_info_bootom">
			<div class="post_meta"><?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?></div>  
			<div class="post_readmore"><?php comments_popup_link(__('Leave a comment', 'dot-b'),__('[ 1 Comment ]', 'dot-b'),__('[ % Comments ]', 'dot-b')); ?></div>	
		</div>		
	<?php endwhile; else: ?>
		<div class="post">
			<h2 class="post_title_h2"><?php _e("Nothing Found"); ?></h2>
		</div>
	<?php endif; ?>
	<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>
	</div>

<?php get_sidebar(); ?>
<div class="clear"></div></div><!--here -->
<?php get_footer(); ?> 