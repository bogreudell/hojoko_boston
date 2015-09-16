<?php 
$video_poster = get_field('video_poster');
$hd_video_stream = get_field('hd_video_stream');
$sd_video_stream = get_field('sd_video_stream');
$lr_video_stream = get_field('lr_video_stream');
$local_mp4 = get_field('local_mp4');
$local_webm = get_field('local_web');
?>
<div id="hero-video">
	<video id="video" autoplay loop="true" poster="<?php echo $video_poster; ?>" width="1280" height="720">
	    <source src="<?php echo $hd_video_stream; ?>" type="video/mp4">
	    <source src="<?php echo $sd_video_stream; ?>" type="video/mp4">
	    <source src="<?php echo $lr_video_stream; ?>" type="video/mp4">    
	    <source src="<?php echo $local_mp4; ?>" type="video/mp4">
	    <source src="<?php echo $local_webm; ?>" type="video/webm">
	    Your browser does not support the video tag.
	</video>
</div>