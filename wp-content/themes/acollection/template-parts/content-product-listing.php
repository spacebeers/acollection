<?php
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<article class="category-listing">
    <div class="category-image">
        <div class="content">
            <a href="<?php the_permalink(); ?>" class="image-link" title="<?php the_title_attribute(); ?>">
                <img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" />
            </a>
        </div>
    </div>
    <h2 class="title-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (get_field('price')): ?>
        <span class="sub-title">&pound;<?php the_field('price'); ?></span>
    <?php endif; ?>
</article>

