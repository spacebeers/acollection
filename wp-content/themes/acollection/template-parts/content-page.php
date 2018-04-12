<?php
    $featured_image = get_field('featured_image');
    $content = get_field('contents');
    $theme = get_field('theme');
    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'large');
    $featured_img_caption = get_post(get_post_thumbnail_id())->post_excerpt;
    $signature = get_field('signature');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("page " .$theme); ?>>
    <div class="title theme-title">
        <div class="title-left">
            <h1 class="title-text"><?php get_field('title_override') ? the_field('title_override') : the_title(); ?></h1>
        </div>
        <div class="title-right">

        </div>
    </div>

    <div class="square-grid x2 section section-border gallery">
        <div class="square image-block">
            <div class="content">
                <div class="image" style="background-image: url(<?php echo $featured_img_url; ?>);"></div>
            </div>
            <?php if (!empty($featured_img_caption)): ?>
                <div class="caption"><?php echo $featured_img_caption; ?></div>
            <?php endif; ?>
        </div>

        <div class="square">
            <?php if (get_field("roundel_image")):
                $roundel = get_field("roundel_image");
            ?>
                <img src="<?php echo $roundel['url']; ?>" alt="<?php echo $roundel['alt']; ?>" class="roundel" />
            <?php endif; ?>
            <div class="content theme-intro">&nbsp;</div>
            <div class="valigner">
                <strong><?php the_field('excerpt_prefix'); ?></strong>
                <div class="intro-title">
                    <?php the_excerpt(); ?>
                </div>

                <div class="date">
                    <?php the_field('excerpt_suffix'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php

        $gallery = get_field('gallery');

        if( $gallery ): ?>
            <div class="square-grid section section-border x<?php count( $gallery ); ?> gallery">
                <?php foreach( $gallery as $image ): ?>
                    <div class="square image-block">
                        <div class="content">
                            <div class="image" style="background-image: url(<?php echo $image['sizes']['large']; ?>);"></div>
                        </div>
                        <?php if ($image['caption']): ?>
                            <div class="caption"><?php echo $image['caption']; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
    <?php endif; ?>

    <div class="grid col-2 section section-theme section-padded">
        <div class="column">
            <h2><?php the_title(); ?></h2>

            <div class="introduction">
                <?php echo get_field('introduction'); ?>

                <div class="small-print">
                    <?php echo get_field('small_print'); ?>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="grid col-2 page-contents">
                <div class="column">
                    <div class="page-column">
                        <?php echo $content['column_1']; ?>
                    </div>
                </div>
                <div class="column">
                    <div class="page-column">
                        <?php echo $content['column_2']; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

        $images = get_field('images');

        if( $images ): ?>
            <div class="square-grid x<?php count( $images ); ?> gallery">
                <?php foreach( $images as $image ): ?>
                    <div class="square image-block">
                        <div class="content">
                            <div class="image" style="background-image: url(<?php echo $image['sizes']['large']; ?>);"></div>
                        </div>
                        <?php if ($image['caption']): ?>
                            <div class="caption"><?php echo $image['caption']; ?></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
    <?php endif; ?>
</article>