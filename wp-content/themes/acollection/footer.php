        </section>

        <footer class="site-footer">
            <div class="grid">
                <div class="row space-between">
                    <div class="col col--sm-3 text--xs-center text--sm-left">
                        <?php dynamic_sidebar('footer-one-sidebar'); ?>
                    </div>
                    <div class="col col--sm-4 text--xs-center">
                        <?php dynamic_sidebar('footer-two-sidebar'); ?>
                    </div>
                    <div class="col col--sm-3 text--xs-center text--sm-right">
                        <?php dynamic_sidebar('footer-three-sidebar'); ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </div>
</body>
</html>