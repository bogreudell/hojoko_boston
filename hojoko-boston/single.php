<?php get_header(); 

if ( in_category( 'blog' ) ) : 

	get_template_part( 'includes/blog', 'single' );

else :

	get_template_part( 'includes/404', 'inc' );

endif; 

get_footer(); ?>