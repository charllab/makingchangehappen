    <footer class="bg-dark py-1 pb-lg-0">
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-0">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                    <p class="mb-75 mb-0">Join us on <a href="#" target="_blank" class="text-white">Facebook</a> | <a
                            href="#" target="_blank" class="text-white">Instagram</a></p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <p class="mb-0"><a href="<?php echo esc_url(home_url('/')); ?>/terms-and-conditions"
                                          class="text-white">Terms & Conditions</a> | <a
                            href="<?php echo esc_url(home_url('/')); ?>/privacy-policy" class="text-white">Privacy&nbsp;Policy</a>
                    </p>
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank"
                                                                         class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div> <!-- #page-container -->

<?php wp_footer(); ?>
</body>
</html>
