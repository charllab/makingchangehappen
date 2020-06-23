<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <?php
    elegant_description();
    elegant_keywords();
    elegant_canonical();

    /**
     * Fires in the head, before {@see wp_head()} is called. This action can be used to
     * insert elements into the beginning of the head before any styles or scripts.
     *
     * @since 1.0
     */
    do_action( 'et_head_meta' );

    $template_directory_uri = get_template_directory_uri();
    ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600;700&display=swap" rel="stylesheet">

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="main-nav">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">

            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div>

            <button class="navbar-toggler ml-auto d-lg-none" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="d-lg-flex flex-lg-column d-none d-lg-block">
                <div id="top-buttons" class="d-flex ml-auto justify-content-end align-items-center">

                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>

                </div>

            </div>

    </nav>

    <div class="mainnav-m collapse navbar-collapse d-lg-none">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>

</header>

<div id="page-container" class="pt-0">
    <div id="et-main-area">
<?php
/**
 * Fires after the header, before the main content is output.
 *
 * @since 3.10
 */
do_action( 'et_before_main_content' );
