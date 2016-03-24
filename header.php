<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title>
      <?php wp_title( '-', true, 'right');
      ?>

    </title>

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-taniakabuta.png" type="image/gif" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/function.js"></script>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>
  <div class="container">

    <!-- Header -->
    <header class="site-header">
    <div class="escape-hatch-logo">  <a href="<?php echo home_url(); ?>"><img class="escape-logo" src="<?php bloginfo('template_directory'); ?>/images/logodesign-taniakabuta-grey.png" /></a></div>
    <!-- Extra message  <h5><?php bloginfo('description'); ?>  <?php if (is_page('portfolio')) { ?>- Thanks for viewing my work
      <?php }?></h5> -->

      <!-- Navigation -->
          <img class="menu-favicon" id="responsive-menu" src="<?php bloginfo('template_directory'); ?>/images/menu-favicon.png">

          <img class="menu-favicon" id="cancel-menu" src="<?php bloginfo('template_directory'); ?>/images/cancel.png">

      <script>
          $(document).ready(function(){
              $("#cancel-menu").hide();
          });
          $("#responsive-menu").click(function(){
              $("#responsive-menu").hide();
              $("#responsive-menu").css("display", "none");
              $(".intro-container").hide();
              $("#cancel-menu").show();
              $(".site-nav").css("visibility", "visible");

          });

          $("#cancel-menu").click(function(){
            $("#cancel-menu").hide();
            $(".site-nav").css("visibility", "hidden");
            $("#responsive-menu").show();
            $(".intro-container").show();
          });
      </script>


      <nav class="site-nav" id="regular-menu">
            <!-- menunaam in wp -->
            <?php

              $args = array(
                'theme_location' => 'primary'
              );
             ?>


             <?php wp_nav_menu(  $args ); ?>
        </nav>




    </header>
