<article class="category-listing">
    <div class="square">
        <div class="content">
            <a href="<?php the_permalink(); ?>" class="image-link" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
    </div>
    <h2 class="title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <span class="brand-text">Total stock: <?php the_field('stock'); ?></span>
</article>

