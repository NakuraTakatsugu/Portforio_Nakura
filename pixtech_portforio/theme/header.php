<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link
      rel="icon"
      type="image/x-icon"
      href=<?php echo esc_url( get_theme_file_uri() . '/assets/img/favicon.ico' );?>
    />
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body class="js-body">
    <div class="page">
      <div class="page-flame">
        <div class="flame-edge top horizontal"></div>
        <div class="flame-edge bottom horizontal"></div>
        <div class="flame-edge right vertical"></div>
        <div class="flame-edge left vertical"></div>
      </div>
      <div class="flame-text js-fadeUpTrigger">
        <div class="text">
          <object
            type="image/svg+xml"
            data="<?php echo esc_url( get_theme_file_uri() . '/assets/img/NAKUPO!!.svg' );?>"
            width="100%"
            height="auto"
          ></object>
        </div>
      </div>
      <header class="header js-header">
        <div class="inner">
          <h1 class="logo">
            <a href="<?php echo esc_url(home_url('/')) ; ?>">NAKUPO!!</a>
          </h1>
          <?php set_menu( 'header' , 'nav-list js-nav-list') ?>
          <button class="nav-toggle js-nav-toggle">
            <span class="bar bar-top"></span>
            <span class="bar bar-mid"></span>
            <span class="bar bar-bottom"></span>
          </button>
        </div>
      </header>
