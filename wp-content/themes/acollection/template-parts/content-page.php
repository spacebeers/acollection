<article id="post-<?php the_ID(); ?>" <?php post_class("page padded-page"); ?>>
    <header class="archive-header text--xs-center">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('sub_title'); ?></p>
    </header>

    <div class="grid grid--no-gutters">
        <div class="row space-between">
            <div class="col col--sm-5">
                <?php the_field('left_column'); ?>
            </div>
            <div class="col col--sm-5">
                <?php the_field('right_column'); ?>
            </div>
        </div>
    </div>
</article>