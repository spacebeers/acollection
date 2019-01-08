<pre>
<?php
    $page_link = get_post_type_archive_link( 'event' );
    $items = array();
    if( have_rows('items') ):
        while( have_rows('items') ): the_row();
            $theImageUrl = get_sub_field('image');
            $obj = (object)[
                "link" => $page_link,
                "image" => $theImageUrl,
            ];
            array_push($items, $obj);

            wp_reset_postdata();
        endwhile;
    endif;
    //print_r($items);
?>
</pre>
<article id="post-<?php the_ID(); ?>" <?php post_class("home-page no-border"); ?>>
    <div class="grid grid--no-gutters">
        <div class="row row--no-gutters space-between">
            <div class="col col--no-gutters col--sm-12 col--md-12 col--lg-6">
                <div class="moodboard">
                    <div class="moodboard--column">
                        <div class="moodboard-group">
                            <div class="moodboard--column-small">
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[0]->link; ?>">
                                                <img src="<?php echo $items[0]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[1]->link; ?>">
                                                <img src="<?php echo $items[1]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[2]->link; ?>">
                                            <img src="<?php echo $items[2]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
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
                                    <a href="<?php echo $items[3]->link; ?>">
                                        <img src="<?php echo $items[3]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
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
                                    <a href="<?php echo $items[4]->link; ?>">
                                        <img src="<?php echo $items[4]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
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
                                            <a href="<?php echo $items[5]->link; ?>">
                                                <img src="<?php echo $items[5]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[6]->link; ?>">
                                                <img src="<?php echo $items[6]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[7]->link; ?>">
                                            <img src="<?php echo $items[7]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moodboard--column moodboard--column_tablet">
                        <div class="moodboard-group">
                            <div class="moodboard--column-small">
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[8]->link; ?>">
                                                <img src="<?php echo $items[8]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[9]->link; ?>">
                                                <img src="<?php echo $items[9]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[10]->link; ?>">
                                            <img src="<?php echo $items[10]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
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
                                    <a href="<?php echo $items[11]->link; ?>">
                                        <img src="<?php echo $items[11]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col--no-gutters col--sm-12 col--md-12 col--lg-6">
                <div class="moodboard">
                    <div class="moodboard--column">
                        <div class="moodboard-group moodboard--group_reverse">
                            <div class="moodboard--column-small">
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[12]->link; ?>">
                                                <img src="<?php echo $items[12]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[13]->link; ?>">
                                                <img src="<?php echo $items[13]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[14]->link; ?>">
                                            <img src="<?php echo $items[14]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
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
                                    <a href="<?php echo $items[15]->link; ?>">
                                        <img src="<?php echo $items[15]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
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
                                    <a href="<?php echo $items[16]->link; ?>">
                                        <img src="<?php echo $items[16]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="moodboard-group moodboard--group_reverse">
                            <div class="moodboard--column-small">
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[17]->link; ?>">
                                                <img src="<?php echo $items[17]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[18]->link; ?>">
                                                <img src="<?php echo $items[18]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[19]->link; ?>">
                                            <img src="<?php echo $items[19]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moodboard--column moodboard--column_tablet">
                        <div class="moodboard-group">
                            <div class="moodboard--column-small">
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[20]->link; ?>">
                                                <img src="<?php echo $items[20]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
                                                    </span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[21]->link; ?>">
                                                <img src="<?php echo $items[21]->image; ?>" alt="View events">
                                                <span class="hover">
                                                    <span class="hover-content">
                                                        VIEW EVENTS
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
                                        <a href="<?php echo $items[22]->link; ?>">
                                            <img src="<?php echo $items[22]->image; ?>" alt="View events">
                                            <span class="hover">
                                                <span class="hover-content">
                                                    VIEW EVENTS
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
                                    <a href="<?php echo $items[23]->link; ?>">
                                        <img src="<?php echo $items[23]->image; ?>" alt="View events">
                                        <span class="hover">
                                            <span class="hover-content">
                                                VIEW EVENTS
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>