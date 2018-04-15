<?php
    $dimensions = get_field('dimensions');

    $width = "W: " . $dimensions['width'] . " " . $dimensions['units'];
    $depth = "D: " . $dimensions['depth'] . " " . $dimensions['units'];
    $height = "H: " . $dimensions['height'] . " " . $dimensions['units'];
    $product_dimensions = $width . ", " . $depth . ", " . $height;

    $images = get_field('images');
    $stock = get_field('stock');
    $main_image = current($images);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("product-page"); ?>>
<div class="grid">
    <div class="row space-between">
        <div class="col col--md-3">
            <?php the_breadcrumb(); ?>

            <div class="product-section">
                <?php the_content();?>
            </div>
            <div class="product-section">
                <div class="gallery-controls">
                    <?php
                        if( $images ): ?>
                        <ul id="galleryControls">
                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <a href="<?php echo $image['url']; ?>" aria-label="Click to see this image">
                                        <div class="square">
                                            <div class="content">
                                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col col--md-6">
            <div class="gallery-main">
                <div class="square">
                    <div class="content">
                        <img src="<?php echo $main_image['sizes']['large']; ?>" id="galleryMain" alt="<?php echo $main_image['alt']; ?>" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col col--md-3">
            <h1 class="title-text"><?php the_title(); ?></h1>

            <?php include(locate_template('template-parts/content-product-form.php')); ?>
            <div class="product-section closing-section">
                <p>
                    DIMENSIONS: <?php echo $product_dimensions; ?>
                </p>
                <p>
                    Total stock: <?php the_field('stock'); ?>
                </p>
            </div>
        </div>
    </div>
</div>

</article>