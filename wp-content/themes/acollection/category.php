<?php get_header(); ?>
	<section id="primary" class="category-listing">
		<header class="archive-header text--xs-center">
			<h1><?php single_term_title(); ?></h1>
		</header>

		<?php if ( have_posts() ) : ?>
		<div class="grid">
			<div class="row">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="col col--sm-6 col--md-3">
				<?php get_template_part( 'template-parts/content', 'product-listing' ); ?>
			</div>
		<?php
		endwhile; ?>
			</div>
		</div>
		<?php else :
				echo "NO!!!";
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );
			endif;
		?>

		<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) : ?>
			<div class="grid">
				<div class="row">
					<div class="col col--sm-8 col--md-6 col--sm-offset-2 col--md-offset-3 text--xs-center">
						<h2><?php single_term_title(); ?></h2>
						<?php printf( '<div class="taxonomy-description">%s</div>', $term_description ); ?>
					</div>
				</div>
			</div>
		<?php
			endif;
		?>
	</section>

<?php get_footer(); ?>