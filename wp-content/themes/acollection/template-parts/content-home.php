<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("home-page no-border"); ?>>
    <div class="grid grid--no-gutters">
        <div class="row row--no-gutters space-between">
            <?php
                if( have_rows('moodboard') ):
                    while ( have_rows('moodboard') ) : $row = the_row(); ?>
                        <div class="col col--no-gutters col--sm-12 col--md-6">
                            <div class="moodboard">
                                <div class="moodboard--column">
                                    <div class="moodboard-group">
                                        <div class="moodboard--column-small">
                                            <div class="moodboard-group-small">
                                                <div class="square">
                                                    <div class="content">
                                                        <a href="<?php echo $items[0]['link']; ?>">
                                                            <img src="<?php echo $image_1['url']; ?>" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="moodboard-group-small">
                                                <div class="square">
                                                    <div class="content">
                                                        <a href="<?php echo $square; ?>">
                                                            <img src="http://placebear.com/200/300" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moodboard-group-large">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $square; ?>">
                                                        <img src="http://placebear.com/200/300" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moodboard-main">
                                        <div class="square">
                                            <div class="content">
                                                <a href="<?php echo $square; ?>">
                                                    <img src="http://placebear.com/200/300" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard--column">
                                    <div class="moodboard-main">
                                        <div class="square">
                                            <div class="content">
                                                <a href="<?php echo $square; ?>">
                                                    <img src="http://placebear.com/200/300" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moodboard-group">
                                        <div class="moodboard--column-small">
                                            <div class="moodboard-group-small">
                                                <div class="square">
                                                    <div class="content">
                                                        <a href="<?php echo $square; ?>">
                                                            <img src="http://placebear.com/200/300" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="moodboard-group-small">
                                                <div class="square">
                                                    <div class="content">
                                                        <a href="<?php echo $square; ?>">
                                                            <img src="http://placebear.com/200/300" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moodboard-group-large">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $square; ?>">
                                                        <img src="http://placebear.com/200/300" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        wp_reset_postdata();
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</article>