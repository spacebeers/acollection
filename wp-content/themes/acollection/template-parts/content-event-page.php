<?php
    $dimensions = get_field('dimensions');
    if (get_field('mood_board_4')):
        $mood_board = get_field('mood_board_4');
    else:
        $mood_board = get_field('mood_board');
    endif;
    $product_dimensions = $dimensions['width'] . ", " . $dimensions['depth'] . ", " . $dimensions['height'] . " " . $dimensions['units'];
    $stock = get_field('stock');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("product-page"); ?>>
    <div class="grid grid--no-gutters">
        <div class="row space-between">
            <div class="col col--md-8">
            <?php if (!isset($_GET['new'])): ?>
                <div class="product-main">
                    <div class="fade">
                         <?php foreach( $mood_board as $image ): ?>
                            <div>
                                <div class="contain-image">
                                    <div class="content">
                                        <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="product-main">
                    <div class="fade">
                         <?php foreach( $mood_board as $image ): ?>
                            <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
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