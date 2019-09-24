<?php
    $mood_board = get_field('mood_board');
    $display_name = get_field('display_name');
    //if ($count % 2 == 0):
    //    $mood_board = array_reverse($mood_board);
    //endif;
?>
<div class="moodboard">
    <div class="moodboard--column">
        <div class="moodboard-group <?php if ($count % 2 == 0): echo ' moodboard--group_reverse'; endif; ?>">
            <div class="moodboard--column-small">
                <div class="moodboard-group-small">
                    <div class="square">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $mood_board[1]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[1]['alt']; ?>">
                                <span class="hover">
                                    <span class="hover-content">
                                        READ MORE
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="moodboard-group-small">
                    <div class="square">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $mood_board[2]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[2]['alt']; ?>">
                                <span class="hover">
                                    <span class="hover-content">
                                        READ MORE
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
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $mood_board[0]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[0]['alt']; ?>">
                            <span class="hover">
                                <span class="hover-content">
                                    READ MORE
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
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $mood_board[3]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[3]['alt']; ?>">
                        <span class="hover">
                            <span class="hover-content">
                                READ MORE
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
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $mood_board[4]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[4]['alt']; ?>">
                        <span class="hover">
                            <span class="hover-content">
                                READ MORE
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="moodboard-group <?php if ($count % 2 == 0): echo ' moodboard--group_reverse'; endif; ?>">
            <div class="moodboard--column-small">
                <div class="moodboard-group-small">
                    <div class="square">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $mood_board[6]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[6]['alt']; ?>">
                                <span class="hover">
                                    <span class="hover-content">
                                        READ MORE
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="moodboard-group-small">
                    <div class="square">
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $mood_board[7]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[7]['alt']; ?>">
                                <span class="hover">
                                    <span class="hover-content">
                                        READ MORE
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
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $mood_board[5]['sizes']['wordpress-thumbnail']; ?>" alt="<?php echo $mood_board[5]['alt']; ?>">
                            <span class="hover">
                                <span class="hover-content">
                                    READ MORE
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>