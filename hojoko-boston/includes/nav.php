<ul class="bottom-border">
	<?php
		$args = array( 'category_name' => 'blog' );
		$blog_posts = get_posts( $args );

		$args = array( 'category_name' => 'internal-events' );
		$events_posts = get_posts( $args );
	?>
	<li><a class="menu-link" href="<?php bloginfo('url'); ?>/#menu">menu</a></li><?php if ( sizeOf( $events_posts ) > 0 ) : ?><!--
	--><li><a class="party-link" href="<?php bloginfo('url'); ?>/#party">party</a></li><?php endif; if ( sizeOf( $blog_posts ) > 0 ) : ?><!--
	--><li><a href="<?php bloginfo('url'); ?>/press-play" <?php if ( is_page_template( 'blog.php' ) || is_single() ) : ?>class="current_list_item"<?php endif; ?>>press play</a></li><?php endif; ?><!--
	--><li><a class="location-link" href="<?php bloginfo('url'); ?>/#location">location</a></li>
</ul>