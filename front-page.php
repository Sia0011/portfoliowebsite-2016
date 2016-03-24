<?php

/*
    Template Name: homepage
*/

get_header();
?>

<?php

    $args = array(
      'post_type' => 'homepage',
      'orderby' => 'none'

    );

    $the_query = new WP_Query( $args );



    if(have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>


    <div class="home-container clearfix" STYLE="background-image: url(<?php the_field( 'background_image_homepage' ) ?>); ">


        <div class="foreground"
                STYLE="background-image: url(<?php bloginfo('template_directory'); ?>/images/foreground.png);" >
        </div>



      <div class="intro-container ">
          <span class="intro-text" id="welkom">
            <?php the_field( 'introduction_homepage' ) ?>
          </span>
          <a class="portfolio_button_link" href="<?php echo get_page_link( get_page_by_title( portfolio )->ID ); ?>">
                <span id="welkom-button" class="portfolio-button">
                  <?php the_field( 'portfolio_button' ) ?>
                </span>
          </a>
      </div>




    </div>



    <div class="website-introduction let-it-breath clearfix">
          <div id="lovetext" class="website-introduction-column-one">
            I <b><span class="intro-love">love</span></b> </br><span class="intro-design">design</span> and <span class="intro-food">food</span></br> the most
          </div>
          <div class="website-introduction-column-two">

               <?php the_field( 'welcome_speech' ) ?>

               <?php
                      endwhile;

                       else :
                       echo '<p>no content found</p>';

                     endif;

               ?>

          </div>

    </div>
    <div class="title">
      <a class="section-title" href="<?php echo get_page_link( get_page_by_title( portfolio )->ID ); ?>">My projects</a>
    </div>



    <div class="clearfix">
      <!--loop for the project previews-->
      <?php

          $args = array(
            'post_type' => 'project',
            'posts_per_page' => 3,
            'orderby' => 'date'

          );

          $the_query = new WP_Query( $args );


          if(is_front_page() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>


          <div class="grid">
            <figure class="effect-steve">
              <img src="<?php the_field( 'preview_image_project' ) ?>" alt="img29"/>
              <figcaption>
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('skills_set_used'); ?></p>
                <a href="<?php the_permalink(); ?>">View more</a>
              </figcaption>
          </div>

      <?php
             endwhile;    endif;

      ?>
    </div>
      <!--/loop for the project previews-->


      <!--loop for the get to know me link-->
      <?php

          $args = array(
            'post_type' => 'homepage'

          );
          $the_query = new WP_Query( $args );

          if(have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="get-to-know clearfix" STYLE="background-image: url(<?php the_field( 'background_gettoknow' ) ?>);">
              <a class="section-title btn" href="<?php echo get_page_link( get_page_by_title( about )->ID ); ?>">Get to know me a little..</a>
          </div>

      <?php endwhile; endif; ?>
<?php
get_footer();
?>
