<?php
	$page_content = get_theme_mod('acollection_event_subtitle');
	$count = 0;
?>

<?php get_header(); ?>
	<section id="primary" class="category-listing">
		<header class="archive-header text--xs-center">
			<h1 class="underline">Events</h1>
			<div class="head-content">
				<?php echo $page_content; ?>
			</div>
		</header>

		<?php if ( have_posts() ) : ?>
		<div class="grid grid--no-gutters">
			<div class="row row--no-gutters space-between">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="col col--no-gutters col--sm-12 col--md-6 collections-grid">
				<?php if (get_field('mood_board_4')): ?>
					<?php include(locate_template('template-parts/content-event-listing-small.php')); ?>
				<?php else: ?>
					<?php include(locate_template('template-parts/content-event-listing.php')); ?>
				<?php endif; ?>
				<?php $count++; ?>
			</div>
		<?php
		endwhile; ?>
			</div>
		</div>
		<?php else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>
	</section>

<?php get_footer(); ?>