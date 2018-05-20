<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("home-page"); ?>>
    <div class="grid grid--no-gutters">
        <div class="row space-between">
            <?php
                if( have_rows('moodboard') ):
                    while ( have_rows('moodboard') ) : $row = the_row();
                        $image_1 = get_sub_field('image_1');
                        $link_1 = get_sub_field('link_2');
                    ?>
                        <div class="col col--sm-12 col--md-6">
                            <h2><a href="<?php echo $link; ?>"><?php echo $type->name; ?></a></h2>
                            <div class="moodboard">
                                <div class="moodboard--column">
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
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</article>