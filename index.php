<?php

get_header();


if(have_posts()) :
  while (have_posts()) : the_post(); ?>

<!-- Everything in this while is repeated for every post-->
<article class="post">
  this is the page
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
    <?php the_content(); ?>
</article>

  <?php endwhile;

  else :
  echo '<p>no content found</p>';

endif;

get_footer();
?>
