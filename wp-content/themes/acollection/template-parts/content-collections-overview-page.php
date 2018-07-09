<?php

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("collection-listing"); ?>>
    <header class="archive-header text--xs-center">
        <h1><?php the_title(); ?></h1>
        <nav>
            <ul class="sub-nav">
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

<div class="grid grid--no-gutters">
    <div class="row row--no-gutters space-between">
        <?php
            if( have_rows('collections') ):
                while ( have_rows('collections') ) : $row = the_row();
                    $type = get_sub_field('collection');
                    $link = get_term_link($type);
                    $term = get_term($type);
                    $mood_board = get_field('mood_board', $type);
                    $display_name = get_field('display_name', $type);

                ?>
                    <div class="col col--no-gutters col--sm-12 col--md-6 collections-grid">
                        <div class="moodboard">
                            <div class="moodboard--column">
                                <div class="moodboard-group">
                                    <div class="moodboard--column-small">
                                        <div class="moodboard-group-small">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo $mood_board[0]['sizes']['medium']; ?>" alt="<?php echo $mood_board[0]['alt']; ?>">
                                                        <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moodboard-group-small">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo $mood_board[1]['sizes']['medium']; ?>" alt="<?php echo $mood_board[1]['alt']; ?>">
                                                        <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moodboard-group-large">
                                        <div class="square">
                                            <div class="content">
                                                <a href="<?php echo $link; ?>">
                                                    <img src="<?php echo $mood_board[2]['sizes']['medium']; ?>" alt="<?php echo $mood_board[2]['alt']; ?>">
                                                    <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-main">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $link; ?>">
                                                <img src="<?php echo $mood_board[3]['sizes']['medium']; ?>" alt="<?php echo $mood_board[3]['alt']; ?>">
                                                <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="moodboard--column">
                                <div class="moodboard-main">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $link; ?>">
                                                <img src="<?php echo $mood_board[4]['sizes']['medium']; ?>" alt="<?php echo $mood_board[4]['alt']; ?>">
                                                <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group">
                                    <div class="moodboard--column-small">
                                        <div class="moodboard-group-small">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo $mood_board[5]['sizes']['medium']; ?>" alt="<?php echo $mood_board[5]['alt']; ?>">
                                                        <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="moodboard-group-small">
                                            <div class="square">
                                                <div class="content">
                                                    <a href="<?php echo $link; ?>">
                                                        <img src="<?php echo $mood_board[6]['sizes']['medium']; ?>" alt="<?php echo $mood_board[6]['alt']; ?>">
                                                        <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="moodboard-group-large">
                                        <div class="square">
                                            <div class="content">
                                                <a href="<?php echo $link; ?>">
                                                    <img src="<?php echo $mood_board[7]['sizes']['medium']; ?>" alt="<?php echo $mood_board[7]['alt']; ?>">
                                                    <span class="hover">
                                                            <span class="hover-content">
                                                                <span class="name"><?php echo $display_name['name']; ?></span>
                                                                <span class="number"><?php echo $display_name['number']; ?></span>
                                                            </span>
                                                        </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2><a href="<?php echo $link; ?>"><?php echo $type->name; ?></a></h2>
                    </div>
                <?php
                endwhile;
            endif;
        ?>

    </div>
</div>
