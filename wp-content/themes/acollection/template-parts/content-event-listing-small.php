<?php
    $mood_board = get_field('mood_board_4');
?>
<div class="moodboard">
    <div class="moodboard--column">
        <div class="moodboard-group-smaller">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $mood_board[0]['sizes']['large']; ?>" alt="<?php echo $mood_board[0]['alt']; ?>">
                <span class="hover">
                    <span class="hover-content">
                        READ MORE
                    </span>
                </span>
            </a>
        </div>
        <div class="moodboard-main">
            <div class="square">
                <div class="content">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo $mood_board[1]['sizes']['large']; ?>" alt="<?php echo $mood_board[1]['alt']; ?>">
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
                        <img src="<?php echo $mood_board[2]['sizes']['large']; ?>" alt="<?php echo $mood_board[2]['alt']; ?>">
                        <span class="hover">
                            <span class="hover-content">
                                READ MORE
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="moodboard-group-smaller">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $mood_board[3]['sizes']['large']; ?>" alt="<?php echo $mood_board[3]['alt']; ?>">
                <span class="hover">
                    <span class="hover-content">
                        READ MORE
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>