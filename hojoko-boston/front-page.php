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

// private events variables

$private_event_1_img = get_field('private_event_1_image');
$private_event_1_txt = get_field('private_event_1_text');
$filter_1 = get_field( 'filter_1' );
$filter_class_1 = strtolower( $filter_1 );

$private_event_2_img = get_field('private_event_2_image');
$private_event_2_txt = get_field('private_event_2_text');
$filter_2 = get_field( 'filter_2' );
$filter_class_2 = strtolower( $filter_2 );

$private_event_3_img = get_field('private_event_3_image');
$private_event_3_txt = get_field('private_event_3_text');
$filter_3 = get_field( 'filter_3' );
$filter_class_3 = strtolower( $filter_3 );

$private_event_4_img = get_field('private_event_4_image');
$private_event_4_txt = get_field('private_event_4_text');
$filter_4 = get_field( 'filter_4' );
$filter_class_4 = strtolower( $filter_4 );

$private_event_5_img = get_field('private_event_5_image');
$private_event_5_txt = get_field('private_event_5_text');
$filter_5 = get_field( 'filter_5' );
$filter_class_5 = strtolower( $filter_5 );

$private_event_6_img = get_field('private_event_6_image');
$private_event_6_txt = get_field('private_event_6_text');
$filter_6 = get_field( 'filter_6' );
$filter_class_6 = strtolower( $filter_6 );

$private_event_7_img = get_field('private_event_7_image');
$private_event_7_txt = get_field('private_event_7_text');
$filter_7 = get_field( 'filter_7' );
$filter_class_7 = strtolower( $filter_7 );


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

<?php if ( $private_event_1_img || $private_event_1_txt || $private_event_2_img || $private_event_2_txt || $private_event_3_img || $private_event_3_txt || $private_event_4_img || $private_event_4_txt ||  $private_event_5_img || $private_event_5_txt || $private_event_6_img || $private_event_6_txt || $private_event_7_img || $private_event_7_txt ) : ?>

<h1 id="private_events_header">Private Events</h1>
<div id="party" class="party-wrapper">
	
	<div id="private_event_1" class="private_event one_third <?php echo $filter_class_1; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_1_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_1 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>		
		<?php if ( $private_event_1_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_1_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="private_event_2" class="private_event two_thirds <?php echo $filter_class_2; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_2_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_2 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_2_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_2_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="private_event_3" class="private_event one_third">
		<div class="inner_background" style="background:url(<?php echo $private_event_3_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_3 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_3_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_3_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="floorplan" class="private_event two_thirds">
		<div class="inner_background" style="background:url(<?php bloginfo('url'); ?>/wp-content/themes/hojoko-boston/img/floor_plan.svg) center center no-repeat; background-size:contain;"></div>
	</div>
	<div id="private_event_4" class="private_event one_third <?php echo $filter_class_4; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_4_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_4 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_4_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_4_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="bookings" class="private_event one_third">
		<div class="inner_background">
			<p>
				<span>capacity: 200<br />please inquire for pricing</span>
				<a href="http://hojoko.tripleseat.com/party_request/3552" target="_blank">Book A Private Event</a>
			</p>
		</div>
	</div>	 
	<div id="private_event_5" class="private_event one_third <?php echo $filter_class_5; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_5_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_5 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_5_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_5_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="private_event_6" class="private_event one_third <?php echo $filter_class_6; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_6_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_6 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_6_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_6_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
	<div id="private_event_7" class="private_event two_thirds <?php echo $filter_class_7; ?>">
		<div class="inner_background" style="background:url(<?php echo $private_event_7_img; ?>) center center no-repeat; background-size:cover;"></div>
		<?php if ( $filter_class_7 == 'green') : ?>
		<div class="green_filter"></div>
		<?php endif; ?>
		<?php if ( $private_event_7_txt ) : ?>
		<div class="inner">
			<p><?php echo $private_event_7_txt; ?></p>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>

<div id="location">
	<div class="location-info">
		<div class="location-title">
			<h1>1271 Boylston St<br>Boston, MA 02215</h1>
			<p>between yawkey way + ipswich st</p>
		</div>
		<div class="location-map">
			<a href="https://www.google.ch/maps/place/1271+Boylston+St,+Boston,+MA+02215,+USA/@42.3454318,-71.0969735,17z/data=!3m1!4b1!4m2!3m1!1s0x89e37a1df0ad8165:0xfd4b82b796b80a06?hl=en" target="_blank">
				<img src="<?php bloginfo( 'url' ); ?>/wp-content/themes/hojoko-boston/img/location_map.jpg" alt="">
			</a>
		</div>
	</div>
</div>



<?php get_footer(); ?>