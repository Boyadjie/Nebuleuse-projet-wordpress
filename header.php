<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/site.css"></style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish"></style>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
      <header>
        <fieldset>
          <nav id="menuprincipal" >
            <img class="logo" src="" alt="">
            <?php wp_page_menu('show_home=1'); ?>

            <div class="réseauxSociaux">
              <img class="rs" src="" alt="">
              <img class="rs" src="" alt="">
            </div>
          </nav>

          <h1><?php bloginfo( 'name' ); ?></h1>
          <h2><?php bloginfo( 'description' ); ?></h2>
      </fieldset>
      </header>
