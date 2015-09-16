<?php 

/*
 * Template name: Blog
 */

get_header(); 

$args = array( 'category_name' => 'blog', 'posts_per_page' => -1 ); 
$blog_posts = get_posts( $args ); ?>

<ul class="blog-posts">
<?php 
foreach ( $blog_posts as $post ) : setup_postdata( $post ); 

	$border_image = get_field( 'border_image' ); 
	$border_image_url = wp_get_attachment_url( $border_image ); 
	$border_image_title = get_the_title( $border_image ); ?>
	<li class="post">
		<div class="sidebar">
			<h1 class="post-title"><?php the_title(); ?></h1>
			<p class="post-date"><?php the_date( 'F j' ); ?></p>
		</div>
		<div class="body">
			<div class="featured-image-wrapper">
				<?php the_post_thumbnail( array(1000,1000), array( 'class' => 'featured-image' ) ); ?>
			</div>
			<div class="preview-text <?php if ( has_post_thumbnail() ) : ?>margin-top<?php endif; ?>">
				<?php echo get_field( 'preview_text' ); ?>
			</div>
		</div>
		<div class="clear"></div>
		<?php if ( $border_image ) : ?>
		<div class="border-image">
			<img src="<?php echo $border_image_url; ?>" alt="<?php echo $border_image_title; ?>">
		</div>
		<?php endif; ?>
		<div class="view-post">
			<a href="<?php the_permalink(); ?>">
				<span>View Post</span> 
				<div class="arrow"></div>
			</a>
		</div>
	</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>

<?php get_footer(); ?>