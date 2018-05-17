<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("collection-listing"); ?>>
    <header class="archive-header text--xs-center">
        <h1><?php the_title(); ?></h1>
        <nav>
            <ul>
                <?php
                    if( have_rows('collections') ):
                        while ( have_rows('collections') ) : $row = the_row();
                            $type = get_sub_field('collection');
                            $link = get_term_link($type);
                        ?>
                            <li><a href="<?php echo $link; ?>"><?php echo $type->name; ?></a></li>
                        <?php
                        endwhile;
                    endif;
                ?>
            </ul>
        </nav>
    </header>
</article>

<div class="moodboard">
    <div class="moodboard--column">
        <div class="moodboard-group">
            <div class="moodboard-group-small">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
            <div class="moodboard-group-small">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
            <div class="moodboard-group-large">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
        </div>
        <div class="moodboard-main">
            <a href="">
                <img src="https://placebear.com/200/300" alt="" />
            </a>
        </div>
    </div>
    <div class="moodboard--column">
        <div class="moodboard-main">
            <a href="">
                <img src="https://placebear.com/200/300" alt="" />
            </a>
        </div>
        <div class="moodboard-group">
            <div class="moodboard-group-small">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
            <div class="moodboard-group-small">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
            <div class="moodboard-group-large">
                <a href="">
                    <img src="https://placebear.com/200/300" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>