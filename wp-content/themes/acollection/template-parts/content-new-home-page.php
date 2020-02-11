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
                        <div class="moodboard-group-smaller">
                            <a href="<?php echo $items[0]->link; ?>">
                                <img src="<?php echo $items[0]->image; ?>" alt="View events">
                                <span class="hover">
                                    <span class="hover-content">
                                        VIEW EVENTS
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="moodboard-main">
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
                    <div class="moodboard--column">
                        <div class="moodboard-main">
                            <a href="<?php echo $items[2]->link; ?>">
                                <img src="<?php echo $items[2]->image; ?>" alt="View events">
                                <span class="hover">
                                    <span class="hover-content">
                                        VIEW EVENTS
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="moodboard-group-smaller">
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
            <div class="col col--no-gutters col--sm-12 col--md-12 col--lg-6">
                <div class="moodboard">
                    <div class="moodboard--column">
                        <div class="moodboard-group-smaller">
                            <a href="<?php echo $items[4]->link; ?>">
                                <img src="<?php echo $items[4]->image; ?>" alt="View events">
                                <span class="hover">
                                    <span class="hover-content">
                                        VIEW EVENTS
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="moodboard-main">
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
                    <div class="moodboard--column">
                        <div class="moodboard-main">
                            <a href="<?php echo $items[6]->link; ?>">
                                <img src="<?php echo $items[6]->image; ?>" alt="View events">
                                <span class="hover">
                                    <span class="hover-content">
                                        VIEW EVENTS
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="moodboard-group-smaller">
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
    </div>
</article>