<pre>
<?php
    $items = array();
    if( have_rows('items') ):
        while( have_rows('items') ): the_row();
            $term_object = get_sub_field('item');
            $theTermName = get_field('display_name', $term_object);
            $theImageUrl = get_sub_field('image');
            $post = $term_object;
            setup_postdata( $post );
            $obj = (object)[
                "title" => $theTermName['name'],
                "number" => $theTermName['number'],
                "link" => get_term_link( $term_object ),
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
                                                <img src="<?php echo $items[0]->image; ?>" alt="<?php echo $items[0]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[0]->title; ?></span> <?php echo $items[0]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[1]->link; ?>">
                                                <img src="<?php echo $items[1]->image; ?>" alt="<?php echo $items[1]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[1]->title; ?></span> <?php echo $items[1]->number; ?></span>
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
                                            <img src="<?php echo $items[2]->image; ?>" alt="<?php echo $items[2]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[2]->title; ?></span> <?php echo $items[2]->number; ?></span>
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
                                        <img src="<?php echo $items[3]->image; ?>" alt="<?php echo $items[3]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[3]->title; ?></span> <?php echo $items[3]->number; ?></span>
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
                                        <img src="<?php echo $items[4]->image; ?>" alt="<?php echo $items[4]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[4]->title; ?></span> <?php echo $items[4]->number; ?></span>
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
                                                <img src="<?php echo $items[5]->image; ?>" alt="<?php echo $items[5]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[5]->title; ?></span> <?php echo $items[5]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[6]->link; ?>">
                                                <img src="<?php echo $items[6]->image; ?>" alt="<?php echo $items[6]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[6]->title; ?></span> <?php echo $items[6]->number; ?></span>
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
                                            <img src="<?php echo $items[7]->image; ?>" alt="<?php echo $items[7]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[7]->title; ?></span> <?php echo $items[7]->number; ?></span>
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
                                                <img src="<?php echo $items[8]->image; ?>" alt="<?php echo $items[8]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[8]->title; ?></span> <?php echo $items[8]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[9]->link; ?>">
                                                <img src="<?php echo $items[9]->image; ?>" alt="<?php echo $items[9]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[9]->title; ?></span> <?php echo $items[9]->number; ?></span>
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
                                            <img src="<?php echo $items[10]->image; ?>" alt="<?php echo $items[10]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[10]->title; ?></span> <?php echo $items[10]->number; ?></span>
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
                                        <img src="<?php echo $items[11]->image; ?>" alt="<?php echo $items[11]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[11]->title; ?></span> <?php echo $items[11]->number; ?></span>
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
                                                <img src="<?php echo $items[12]->image; ?>" alt="<?php echo $items[12]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[12]->title; ?></span> <?php echo $items[12]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[13]->link; ?>">
                                                <img src="<?php echo $items[13]->image; ?>" alt="<?php echo $items[13]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[13]->title; ?></span> <?php echo $items[13]->number; ?></span>
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
                                            <img src="<?php echo $items[14]->image; ?>" alt="<?php echo $items[14]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[14]->title; ?></span> <?php echo $items[14]->number; ?></span>
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
                                        <img src="<?php echo $items[15]->image; ?>" alt="<?php echo $items[15]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[15]->title; ?></span> <?php echo $items[15]->number; ?></span>
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
                                        <img src="<?php echo $items[16]->image; ?>" alt="<?php echo $items[16]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[16]->title; ?></span> <?php echo $items[16]->number; ?></span>
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
                                                <img src="<?php echo $items[17]->image; ?>" alt="<?php echo $items[17]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[17]->title; ?></span> <?php echo $items[17]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[18]->link; ?>">
                                                <img src="<?php echo $items[18]->image; ?>" alt="<?php echo $items[18]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[18]->title; ?></span> <?php echo $items[18]->number; ?></span>
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
                                            <img src="<?php echo $items[19]->image; ?>" alt="<?php echo $items[19]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[19]->title; ?></span> <?php echo $items[19]->number; ?></span>
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
                                                <img src="<?php echo $items[20]->image; ?>" alt="<?php echo $items[20]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[20]->title; ?></span> <?php echo $items[20]->number; ?></span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="moodboard-group-small">
                                    <div class="square">
                                        <div class="content">
                                            <a href="<?php echo $items[21]->link; ?>">
                                                <img src="<?php echo $items[21]->image; ?>" alt="<?php echo $items[21]->title; ?>">
                                                <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[21]->title; ?></span> <?php echo $items[21]->number; ?></span>
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
                                            <img src="<?php echo $items[22]->image; ?>" alt="<?php echo $items[22]->title; ?>">
                                            <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[22]->title; ?></span> <?php echo $items[22]->number; ?></span>
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
                                        <img src="<?php echo $items[23]->image; ?>" alt="<?php echo $items[23]->title; ?>">
                                        <span class="hover">
                                                    <span class="hover-content"><span class="hover-name"><?php echo $items[23]->title; ?></span> <?php echo $items[23]->number; ?></span>
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