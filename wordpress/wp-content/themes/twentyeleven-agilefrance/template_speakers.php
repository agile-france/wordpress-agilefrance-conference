<?php
/*
Template Name: Speakers Page
*/
?>

<?php get_header(); ?>

<?php the_post(); ?>
		
	<div id="container" class="sessions">
		<div id="content" role="main">
			<?php $loop = new WP_Query( array( 'post_type' => 'speakers', 'posts_per_page' => 100, 'orderby' => title, 'order' => ASC) ); ?>
			<div id="speakers">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php echo "<a name=\"".str_replace(' ', '', get_the_title())."\"></a>" ?>
				
				<div id="ind_speaker" style="clear: both; padding-top: 10px;">
					<div id="speaker_image_section">
						<div><?php the_post_thumbnail( 'thumbnail' ) ?></div>
						<div><?php speaker_name() ?></div>
						<div><?php speaker_links() ?></div>
						<div><?php speaker_presentation_link() ?></div>
						<div><?php speaker_category() ?></div>
						<div><?php speaker_duration() ?></div>
						<div><?php speaker_level() ?></div>
					</div>
					<div id="speaker_info">
						<div id="speaker_info_title"><strong><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></strong></div>
						<?php speaker_presentation_description() ?>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>
	
