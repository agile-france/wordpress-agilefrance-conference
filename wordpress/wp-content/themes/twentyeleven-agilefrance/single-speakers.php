<?php get_header(); ?>

<?php the_post(); ?>

<div id="container" class="sessions">
	<div id="content" role="main">
		<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php get_permalink() ?>" data-text="<?php get_the_title() ?>" data-via="agilefrance" data-lang="fr">Tweeter</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
		<div id="speaker_image_section">
			<img src="<?php get_post_meta($post->ID, 'speaker_img', true) ?>">
			<div><?php the_post_thumbnail( 'thumbnail' ) ?></div>
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