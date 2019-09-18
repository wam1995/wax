<?php
add_action( 'after_setup_theme', function() {
    get_template_part( 'updater' );
});