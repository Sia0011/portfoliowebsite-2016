<?php

/* template name: project */

get_header();
 ?>

    <!-- column-container -->
      <div class="column-container clearfix">

            <!-- column-title -->
            <div class="project-galery-container clearfix">

                      <?php the_field( 'project_images' ) ?>

            </div><!-- /column-title container -->

            <!-- column-text -->
            <div class="project-description-container clearfix">
                  <div class="project-company">
                   <h2><?php the_title(); ?></h2>
                   <h3><?php the_field( 'company_name' ) ?></h3>
                  </div>

                    <div class="project-description">
                          <?php the_field( 'description' ) ?>
                    </div>

                  <div class="project-skills">
                      <span> The skills I used for this project: </br></span>
                        <span class="used-skills"><?php the_field('skills_set_used'); ?></span>
                  </div>


                  <div class="review-projects-loop">
                        <p>
                            Previous project  <b><?php previous_post_link(); ?></b>
                            ||  <b><?php next_post_link(); ?></b> Next project
                        </p>
                  </div>


            </div><!-- /column-text container -->


      </div><!-- /column- container -->


      <?php
      get_footer();
      ?>
