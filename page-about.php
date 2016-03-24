<?php

/* template name: about */

get_header();
 ?>


<!-- Everything in this while is repeated for every post-->
<div class="about-container clearfix">

      <div class="home-container about-intro clearfix">

            <p class="about-title"> Get to know me a little..</p>

      </div>



      <div class="talk-about let-it-breath clearfix">

        <div class="title">

            <span class="section-title portfolio-title">about me</span>

        </div>



        <div class="personality-icons clearfix">

                <div class="personality-box">

                  <img class="personality-single-icon" src="<?php bloginfo('template_directory'); ?>/images/sketch-example.jpg"  />
                  <h1 class="personality-text"> Always down for food</h1>
                  <p class="personality-text">Drinking tea and babbeling about nothing is one of my favourite things in life.</p>

                </div>


                <div class="personality-box">

                  <img class="personality-single-icon" src="<?php bloginfo('template_directory'); ?>/images/sketch-example-3.jpg"  />
                  <h1 class="personality-text"> My home is my heart</h1>
                  <p class="personality-text">Drinking tea and babbeling about nothing is one of my favourite things in life.</p>

                </div>


                <div class="personality-box">

                  <img class="personality-single-icon" src="<?php bloginfo('template_directory'); ?>/images/sketch-example-2.jpg"  />
                  <h1 class="personality-text"> Drinking at party's</h1>
                  <p class="personality-text">Drinking tea and babbeling about nothing is one of my favourite things in life.</p>

                </div>

        </div>



        <div class="special-about">

              <h1>Who I am, what do I love</h1>
              <p class="specialty">
                But I must explain to you who I am. My name is Tania, my thing is Interaction Design and I live in the Netherlands. The past two years I was able to study and travel simultaneously. I travelled to two opposite sides of the world, Asia and the Caribbean! I loved getting inspired by the cultures and my new colleagues. I totally developed a travel addiction..
              </br>So now you know almost everything. I love food, design and I am addicted to traveling.
              </p>

        </div>



          <div class="introduction-about special-about">

              <h1> My specialization is...</h1>
              <p class="about-description">
                Projects involving Webdesign, Interaction Design,
                Graphic Design, Photography and Video editing are my specialty.
              </br></br>
                I am a graduate student at the Hague University. My major is Communication and Multimedia Design(CMD).

              </br> In 2014 I started an internship at <b>MEDIA599</b>, Curacao and <b>SUUZ Creative</b> wich is also located in the Caribbean.
              In 2015 I succesfully completed the internship with a lot of new knowledge and a big fat scale of experiences.

            </br> Last sep 2015 I travelled to Asia for an exchange at <strong>KingmonKut's University of Technology, Bangkok</strong>.
            I was enrolled in the Communication Design study. The courses I followed were amazingly refreshing and opened my
            eyes to a lot of different perspectives and opportunities. 

          </br></br>If you have projects concerning other creative skills, please feel free to contact me and we could
                discuss your options.

              </p>

          </div>



          <div class="images-gallery-about clearfix">

          <div class="img-about">  <?php do_action('slideshow_deploy', '94'); ?></div>
          </div>



          <div class="contact">

              <p class="contact">Would you like to tackle some projects together? Contact me at</p>
              <p class="my-email contact"> taniakabuta@gmail.com</p>

          </div>


      </div>


</div>


<?php
get_footer();
?>
