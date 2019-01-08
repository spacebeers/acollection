<?php
    $dimensions = get_field('dimensions');
    $mood_board = get_field('mood_board');
    $product_dimensions = $dimensions['width'] . ", " . $dimensions['depth'] . ", " . $dimensions['height'] . " " . $dimensions['units'];
    $stock = get_field('stock');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("product-page"); ?>>
    <div class="grid grid--no-gutters">
        <div class="row space-between">
            <div class="col col--md-8">
                <div class="product-main">
                    <div class="fade">
                         <?php foreach( $mood_board as $image ): ?>
                            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col col--md-4">
                <div class="product-details">
                    <h1 class="title-text"><?php the_title(); ?></h1>
                    <small><?php the_field('subtitle'); ?></small>

                    <div class="product-notes">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</article>