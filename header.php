<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head() ?>
  </head>
  <body id="home" <?php body_class() ?>>

    <nav class="headerNav navbar navbar-expand-lg navbar-dark fixed-top">
      <a class="navbar-brand" href="#home"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="<?php bloginfo('name') ?>" height="50" /></a>

      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-end" id="mainNav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav d-flex align-items-center justify-content-end pt-4 pt-md-0', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
      </div>
    </nav>
