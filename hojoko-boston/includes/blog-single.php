<?php if ( have_posts() ) : ?>
	<ul class="blog-posts">
	<?php while ( have_posts() ) : the_post();

		$border_image = get_field( 'border_image' ); 
		$border_image_url = wp_get_attachment_url( $border_image ); 
		$border_image_title = get_the_title( $border_image ); 

		$path = $_SERVER['REQUEST_URI'];
        $url = home_url().$path; ?>
		<li class="post">
			<div class="sidebar">
				<h1 class="post-title"><?php the_title(); ?></h1>
				<p class="post-date"><?php the_date( 'F j' ); ?></p>
				<div class="share">
					<button>
						<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/share.svg" alt="share" />
						<span>Share</span>
					</button>
					<ul class="social">
			            <li>
			                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank">
			                    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/facebook.svg" alt="Facebook">
			                </a>
			            </li>
			            <li>
			                <a href="https://twitter.com/home?status=<?php echo "Hojoko Boston: "; the_title(); echo " " . $url; ?>" target="_blank">
			                    <img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/twitter.svg" alt="Twitter">
			                </a>
			            </li>
			        </ul>
				</div>
			</div>
			<div class="body">
				<!--<div class="featured-image-wrapper">
					<?php the_post_thumbnail( array(1000,1000), array( 'class' => 'featured-image' ) ); ?>
				</div>
				<div class="preview-text <?php if ( $border_image ) : ?>margin-top<?php endif; ?>">
					<?php echo get_field( 'preview_text' ); ?>
				</div>-->
				<?php the_content(); ?>
			</div>
			<div class="clear"></div>
			<?php if ( $border_image ) : ?>
			<div class="border-image">
				<img src="<?php echo $border_image_url; ?>" alt="<?php echo $border_image_title; ?>">
			</div>
			<?php endif; ?>
			<!--<div class="back-to-blog">
				<a href="<?php bloginfo( 'url' ); ?>/press-play">
					<div class="arrow"></div>
					<span>Back to Blog</span> 
				</a>
			</div>-->
			<div class="view-post">
				<a href="<?php bloginfo( 'url' ); ?>/press-play">
					<span>Back to Blog</span> 
					<div class="arrow"></div>
				</a>
			</div>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>