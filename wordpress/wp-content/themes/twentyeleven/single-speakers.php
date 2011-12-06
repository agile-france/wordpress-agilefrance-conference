<?php get_header(); ?>

<?php the_post(); ?>

<div id="container" class="sessions">
	<div id="content" role="main">
		<div id="speaker_image_section">
			<!--<img src="<?php echo get_post_meta($post->ID, 'speaker_img', true); ?>">-->
			<div><?php the_post_thumbnail( 'medium' ) ?></div>
			<div><b><?php speaker_name() ?></b></div>
			<div><?php speaker_links() ?></div>
			<div><?php speaker_presentation_link() ?></div>
			<div><?php speaker_category() ?></div>
			<div><?php speaker_duration() ?></div>
			<div><?php speaker_level() ?></div>
		</div>
		
		<div id="speaker_info"><?php speaker_bio() ?></div>

		<div id="speaker_session_info">
			<div id="speaker_info_title"><strong><?php echo get_the_title(); ?></strong></div>
			<?php speaker_presentation_description() ?>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
