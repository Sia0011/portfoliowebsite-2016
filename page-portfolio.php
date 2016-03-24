<?php

/* template name: portfolio */

get_header();


if(have_posts()) :
  while (have_posts()) : the_post(); ?>

<!-- Everything in this while is repeated for every post-->
<div class="home-container portfolio-intro clearfix">
  <p class="about-title"> Gettin jiggy with it</p>

</div>
<div class="let-it-breath  clearfix">
    <div class="title">
        <span class="section-title portfolio-title">my projects</span>
    </div>
  <?php endwhile; endif;

get_template_part( 'content', 'portfolio_preview' ); ?>

</div>
<?php
get_footer();
?>
