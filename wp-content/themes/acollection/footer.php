            </main>
        </section>

        <footer class="site-footer">
            <div class="grid grid--no-gutters">
                <div class="row space-between">
                    <div class="col col--sm-6 col--md-3 col--md-first text--xs-center text--sm-left">
                        <?php dynamic_sidebar('footer-one-sidebar'); ?>
                    </div>
                    <div class="col col--md-4 col--xs-first col--sm-first text--xs-center">
                        <?php dynamic_sidebar('footer-two-sidebar'); ?>

                        <div class="tablet-nav">
                            <?php
                                wp_nav_menu( array(
                                    'menu'              => 'main_menu',
                                    'theme_location'    => 'main_menu',
                                    'depth'             => 1,
                                    'container'         => 'nav',
                                    'container_class'   => 'main-menu',
                                    'menu_class'        => 'nav')
                                );
                            ?>
                        </div>
                    </div>
                    <div class="col col--sm-6 col--md-3 text--xs-center text--sm-right">
                        <?php dynamic_sidebar('footer-three-sidebar'); ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>
</html>