<?php get_header(); ?>
	<section id="primary" class="category-listing">
		<header class="archive-header text--xs-center">
			<h1><?php single_term_title(); ?></h1>
			<?php
				wp_list_pages(array(
					'child_of' => $post->post_parent,
					'exclude' => $post->ID,
					'depth' => 1
				));
			?>
		</header>

		<?php if ( have_posts() ) : ?>
		<div class="grid">
			<div class="row">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
			<div class="col col--sm-6 col--md-3 listing-item">
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
	</section>

<?php get_footer(); ?>