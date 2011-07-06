<?php global $dotb_options;
$dotb_settings = get_option( 'dotb_options', $dotb_options ); ?>
		<div id="footer" role="contentinfo">
			<div id="copyright">
				<div id="site-info">
				<?php echo $dotb_settings['dotb_footer'];?>
				</div><!-- #site-info -->
				<div id="site-generator">
					Powered by <a href="http://wordpress.org/">WordPress</a>
					 | Theme <abbr title="Dot-B v<?php echo $dotb_settings['dotb_version'];?>">Dot-B</abbr> by <a href="http://zlz.im/">HzlzH</a> <?php if ($dotb_settings['dotb_is_sqlcount']) 
					{ echo '{ '.get_num_queries().' queries in '.timer_stop(0,3).' seconds }';}?>
				</div><!-- #site-generator -->
			</div><!-- #colophon -->
			<a id="return_top" href="#wrapper">Δ Top</a>
	</div><!-- #footer -->
</div>
<div id="bottom-bar"></div>
<?php wp_footer(); ?>

<script type="text/javascript"> 

// All the jQuery function that WordPress used
// Add empty span tag at menu which have drop-down meun
jQuery("ul.sub-menu:not(.sub-menu .sub-menu)").parent().append("<span class=\"menu-mark\"></span>");
// Drop down menu slide function
var mouseover_tid = [];var mouseout_tid = []; jQuery('.menu > li').each(function(index){jQuery(this).hover( function(){var _self = this; clearTimeout(mouseout_tid[index]); mouseover_tid[index] = setTimeout(function(){jQuery(_self).find('ul:eq(0)').slideDown('fast');}, 200);}, function(){var _self = this; clearTimeout(mouseover_tid[index]); mouseout_tid[index] = setTimeout(function(){jQuery(_self).find('ul:eq(0)').slideUp('fast');}, 200);} );});
// Top colourful bar
jQuery(document).ready(function(){jQuery("#top-bar").animate( { width: "100%"}, { queue: false, duration: 5000 } );
// Mouse over search box focus function
jQuery("#s").mouseover(function() {
    jQuery(this).focus().val([""]).mouseout(function() {jQuery(this).val(["type, hit enter"]).blur()})
  });
// Link sparkling function
jQuery(".post_meta li,body a:not(.post_meta li a)").hover(function(){
if(!jQuery(this).is(":animated")){
jQuery(this).animate({opacity:".7" },220).animate({opacity:"1"},180);
}
}); 
    jQuery(function(){
    jQuery('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        && location.hostname == this.hostname) {
            var $target = jQuery(this.hash);
            $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top-100;
                jQuery('html,body').animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
    });
}); 
// hide #return_top first
jQuery("#return_top").hide();
// fade in #return_top
jQuery(function () {
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('#return_top').fadeIn();
		} else {
			jQuery('#return_top').fadeOut();
		}
	});
}); 

  
});


</script>
<?php if (!$dotb_settings['dotb_is_ga']) echo $dotb_settings['dotb_analytics_code']; ?>
</body>
</html>