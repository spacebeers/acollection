<?php
    $backet_text = get_theme_mod('acollection_basket_text');
?>

<?php get_header(); ?>
    <div class="text--xs-center">

        <h1>Enquiry Form</h1>
        <form action="">
            <div class="grid grid--no-gutters text--xs-center">
                <h2>Your collection</h2>

                <div class="constrain">
                    <?php
                        $cookie = stripslashes($_COOKIE["A_COLLECTION_BASKET"]);
                        $cookieArr = (array) json_decode($cookie);

                        foreach ($cookieArr as $item):
                            $the_post = get_post($item->id);
                        ?>

                            <div class="basket-item">
                                <div class="image">
                                    <img src="<?php echo get_the_post_thumbnail_url($item->id); ?>" alt="">
                                </div>
                                <div class="content">
                                    <h3><?php echo $the_post->post_title; ?></h3>
                                    <p><?php echo get_field( "product_number", $item->id ); ?></p>
                                </div>
                                <div class="meta">
                                    <label for="stock">Quantity: </label>
                                    <select name="stock">
                                        <?php for ($i = 1; $i <= get_field( "stock", $item->id ); $i++): ?>
                                            <option value="<?php echo $i; ?>" <?php if ($i == $item->quantity): echo "selected"; endif; ?>><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <button>x</button>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>

            <div class="grid grid--no-gutters text--xs-center">
                <div class="constrain">
                    <div class="row space-between">
                        <div class="col col--md-6">
                            <div class="input">
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" id="first_name" />
                            </div>

                            <div class="input">
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" id="last_name" />
                            </div>

                            <div class="input">
                                <label for="email_address">Email address</label>
                                <input type="text" name="email_address" id="email_address" />
                            </div>

                            <div class="input">
                                <label for="telephone">Telephone</label>
                                <input type="text" name="telephone" id="telephone" />
                            </div>
                        </div>
                        <div class="col col--md-6">

                        </div>

                        <div class="col col--xs-12 text--xs-center">
                            <input type="submit" class="btn-primary" value="Submit Enquiry" />
                        </div>
                    </div>

                    <p class="text--xs-center text--sm-left">
                        <?php echo $backet_text; ?>
                    </p>
                </div>
            </div>
        </form>
    </div>

<?php get_footer(); ?>