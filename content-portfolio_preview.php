<!--loop for the project previews-->
<?php

    $args = array(
      'post_type' => 'project',
      'orderby' => 'date'

    );

    $the_query = new WP_Query( $args );

 ?>

<?php
    if(have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

    <!--everything between this while is repeated -->
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
       endwhile;

        else :
        echo '<p>no content found</p>';

      endif;

?>
<!--/loop for the project previews-->
