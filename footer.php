<?php global $dotb_options;
$dotb_settings = get_option( 'dotb_options', $dotb_options ); ?>
	<div id="footer">
		<div id="copyright">
			<div id="site-info">
				<?php echo $dotb_settings['dotb_footer'];?>
			</div>
			<div id="site-generator">
				本馆采用 <a href="http://wordpress.org/" target="_blank">WordPress</a> 强力驱动
				 | 精美主题 <abbr title="Dot-B v<?php echo $dotb_settings['dotb_version'];?>" target="_blank">Dot-B</abbr> 由 <a href="http://zlz.im/" target="_blank">hzlzh</a> 制作 | <del>粤ICP备</del>菇ICP备060680
				<?php if ($dotb_settings['dotb_is_sqlcount']){ echo '{ '.get_num_queries().' '.__('queries in', 'dot-b').' '.timer_stop(0,3).' '.__('seconds', 'dot-b').' }';}?>
			</div>
		</div><!-- #copyright -->
		<a id="return_top" href="#wrapper" rel="nofollow" title="<?php _e('Back to top', 'dot-b'); ?>"> &Delta;  <?php _e('Top', 'dot-b'); ?></a>
	</div><!-- #footer -->
</div><!-- #wrapper -->
<?php if($dotb_settings['dotb_is_colorbar']) : ?><div id="bottom-bar"></div><?php endif;?>
<?php if (!$dotb_settings['dotb_is_ga']) echo $dotb_settings['dotb_analytics_code']; ?>
<?php wp_footer(); ?>
</body>
</html>
