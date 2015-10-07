<?php 

get_header(); 

// hero img + hero video variables

$hero_image = get_field('hero_image');
$video_poster = get_field('video_poster');
$hd_video_stream = get_field('hd_video_stream');
$sd_video_stream = get_field('sd_video_stream');
$lr_video_stream = get_field('lr_video_stream');
$local_mp4 = get_field('local_mp4');
$local_webm = get_field('local_web');

// menu variables

$menu_subheader = get_field('menu_subheader');
$first_menu_column = get_field('first_menu_column');
$second_menu_column = get_field('second_menu_column');

$drink_menu_subheader = get_field('drink_menu_subheader');
$first_drink_menu_column = get_field('first_drink_menu_column');
$second_drink_menu_column = get_field('second_drink_menu_column');



// private events variables

$args = array( 'category_name' => 'internal-events', 'posts_per_page' => -1 );
$events_posts = get_posts( $args );

// need to write function that tests for one of all possible video vars
// and returns boolean value

if ( $hero_image && !$local_mp4 /*!$hd_video_stream*/ ) :

	get_template_part('includes/hero', 'image');

elseif ( $local_mp4 /*$hd_video_stream */&& !$hero_image ) : 

	get_template_part('includes/hero', 'video');	

elseif ( $local_mp4 /*$hd_video_stream */&& $hero_image ) :
	
	get_template_part('includes/hero', 'video');	

endif; ?>	

<div id="menu" class="menu-wrapper">
	<a id="menu-download" href="<?php echo get_field('menu_pdf_upload'); ?>" target="_blank">
		<div></div><span>Download Menu</span>
	</a>
	<object data="<?php echo get_field('menu_pdf_upload'); ?>" type="application/pdf" width="100%" height="100%">		 
		<a id="mobile-menu-download" href="<?php echo get_field('menu_pdf_upload'); ?>" target="_blank">
			<div></div><span>Download Menu</span>
		</a>		  
	</object>
</div>

<!--<div id="menu" class="menu-wrapper">
	<a id="menu-download" href="<?php echo get_field('menu_pdf_upload'); ?>" target="_blank">
		<div></div><span>Download Menu</span>
	</a>
	<div class="menu-title">
		<h1>menu</h1>
		<p><?php echo $menu_subheader; ?></p>	
	</div>
	<div class="menu-content">
		<div class="column-one">
			<?php echo $first_menu_column; ?>
		</div>
		<div class="column-two">
			<?php echo $second_menu_column; ?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="menu-title">
		<h1>drinks</h1>
		<p><?php echo $drink_menu_subheader; ?></p>	
	</div>
	<div class="menu-content">
		<div class="column-one">
			<?php echo $first_drink_menu_column; ?>
		</div>
		<div class="column-two">
			<?php echo $second_drink_menu_column; ?>
		</div>
		<div class="clear"></div>
	</div>
</div>-->

<!--<div id="drink-menu" class="menu-wrapper">
	<div class="menu-title">
		<h1>drinks</h1>
		<p><?php echo $drink_menu_subheader; ?></p>	
	</div>
	<div class="menu-content">
		<div class="column-one">
			<?php echo $first_drink_menu_column; ?>
		</div>
		<div class="column-two">
			<?php echo $second_drink_menu_column; ?>
		</div>
		<div class="clear"></div>
	</div>
</div>-->

<?php if ( sizeOf( $events_posts ) > 0 ) : ?>
<div id="party" class="party-wrapper">
	<div id="internal-events" class="events-window">
		<div class="column-one">
			<h3>Internal Events</h3>
			<ul class="events-list">
			<?php $i = 0; foreach ( $events_posts as $post ) : setup_postdata( $post ); 
					$event_time = get_field( 'event_time' ); 
					$event_date = new DateTime( get_field( 'event_date', $post->ID ) ); ?>
				<?php if ( $i == 0 ) : ?>
				<li class="active <?php echo $post->post_name; ?>">
				<?php else : ?>
				<li class="<?php echo $post->post_name; ?>">
				<?php endif; ?>	
					<button>
						<?php 
							if ( has_post_thumbnail() ) : 
								the_post_thumbnail( 'medium', array( 'class' => 'event-thumbnail' ) ); 
							else : ?>
						<div class="no-event-thumbnail"></div>
						<?php endif; ?>	
						<div class="event-meta">
							<span class="event-date">
								<?php echo $event_date->format('F j'); ?></br>
							</span>
							<span class="event-title">
								<?php the_title(); ?>
							</span> 
						</div>
						<div class="event-time"><?php echo $event_time; ?></div>
					</button>
				</li>
			<?php $i++; endforeach; wp_reset_postdata(); ?>
			</ul>
		</div>
		<div class="column-two">
			<div class="event-detail">
				<ul class="event-details-list">
				<?php $i = 0; foreach ( $events_posts as $post ) : setup_postdata( $post ); 
					$event_time = get_field( 'event_time' );
					$event_date = new DateTime( get_field( 'event_date', $post->ID ) ); 
					$preview_text = get_field( 'preview_text' );
					$poster_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 

					if ( $i == 0 ) : ?>
					<li class="active <?php echo $post->post_name; ?>">
					<?php else : ?>
					<li class="<?php echo $post->post_name; ?>">
					<?php endif; ?>
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php echo $poster_thumbnail[0]; ?>" class="poster-trigger"><?php the_post_thumbnail( 'medium', array( 'class' => 'event-thumbnail' ) ); ?></a> 
						<?php else : ?>
						<div class="no-event-thumbnail"></div>
						<?php endif; ?>
						<div class="event-meta">
							<span class="event-date"><?php echo $event_date->format('F j'); ?></span>
							<?php if ( $event_time ) : ?><span class="divider"> | </span><?php endif;?>
							<span class="event-time"><?php echo $event_time; ?></span><br />	
							<span class="event-title"><?php the_title(); ?></span> 
							<p class="event-preview">
								<?php echo $preview_text; ?>
							</p>
						</div>
						<!--<a style="color:#111;" href="mailto:alyssa@cushmanconcepts.com" target="_blank">-->
<a href="http://hojoko.tripleseat.com/party_request/3552" target="_blank">
							<button id="rsvp">RSVP</button>
						</a>	
					</li>
				<?php $i++; endforeach; wp_reset_postdata(); ?>
				</ul>
			</div>
			<div id="private-events-trigger">
				<div class="inner">
					<h3>Private Events</h3>
					<button>Book Here</button>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="private-events" class="events-window">
		<h3>Private Events</h3>
		<div class="column-wrapper">
			<div class="column-one">
			<?php $floor_plan = get_field( 'floor_plan' ); if ( $floor_plan ) : ?>
				<img src="<?php echo get_field('floor_plan'); ?>" alt="Hojoko Floorplan">
			<?php else : ?>
				<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/floorplan.svg" alt="Hojoko Floorplan" />
			<?php endif; ?>
			</div>
			<div class="column-two">
				<!-- modularize this as well -->
				<!--<p class="minimum-pricing-notice">Food and Beverage minimum pricing reflected below may vary depending on the day of the week and length of the event.</p>-->
				<p>Capacity:200<br />Please <a style="color:#8ead69; text-decoration:none; border-bottom:1px solid #8ead69;" href="mailto:samantha@cushmanconcepts.com">Inquire for Pricing</a></p>
			</div>
			<div class="clear"></div>
		</div>
		<button id="internal-events-trigger">
			<span>Back to Internal Events</span> 
			<div class="side-arrow"></div>
		</button>
	</div>
</div>
<?php endif; ?>

<div id="location">
	<div class="location-info">
		<div class="location-title">
			<h1>1271 Boylston St<br>Boston, MA</h1>
			<p>between yawkey way + ipswich st</p>
		</div>
		<div class="location-map">
			<a href="https://www.google.ch/maps/place/1271+Boylston+St,+Boston,+MA+02215,+USA/@42.3454318,-71.0969735,17z/data=!3m1!4b1!4m2!3m1!1s0x89e37a1df0ad8165:0xfd4b82b796b80a06?hl=en" target="_blank">
				<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/hojoko-map.svg" alt="">
			</a>
		</div>
	</div>
	<div id="baby-head-wrapper">
		<img id="baby-head" src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/baby.svg" alt="Baby" />
	</div>
</div>

<?php get_footer(); ?>