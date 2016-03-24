<?php

//stylesheet
function inspire_resources() {

  wp_enqueue_style('main', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'inspire_resources');


//get top ancestor - sub navigation code -

function get_top_ancestor_id() {

  global $post;

  if ($post->post_parent) {
      $ancestors = get_post_ancestors($post->ID);
      return $ancestors[0];


  }

  return $post->ID;
}


// does page have children? -sub navigation

function has_children() {

  global $post;

  $pages = get_pages('child_of=' .$post->ID);
  return count($pages);


}


//theme setup
function InspireWordPress_setup() {


  // navigation Menus
  register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __( 'Footer Menu'),
  ));

// add featured image sizes support
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 180, 120, true);
  add_image_size('banner_image', 920, 210, true);
  add_image_size('banner_image', 520, 710, true);

  //add post format support
  add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'InspireWordPress_setup');


// customize cms appearance options
function inspire_customize_register( $wp_customize ) {
//custom cms link color
  $wp_customize->add_setting('inspire_link_color', array(
    'default' => '#c5c7d6',
    'transport' => 'refresh',
  ));

  $wp_customize->add_section('inspire_standard_colors', array(
    'title' => __('Standard Colors', 'Inspire'),
    'priority' => 30,
  ));

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspire_link_color_control', array(
    'label' => __('Link Color', 'Inspire'),
    'section' => 'inspire_standard_colors',
    'settings' => 'inspire_link_color',
  )));

//custom cms text color
$wp_customize->add_setting('inspire_text_color', array(
  'default' => '#c5c7d6',
  'transport' => 'refresh',
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'inspire_text_color_control', array(
  'label' => __('Text Color', 'Inspire'),
  'section' => 'inspire_standard_colors',
  'settings' => 'inspire_text_color',
)));

}

add_action('customize_register', 'inspire_customize_register');


//output custumize CSS
function inspire_customize_css() { ?>

  <style type="text/css">
    a:link,
    a:visited {
      color: <?php echo get_theme_mod('inspire_link_color') ?>
    }
    p {
      color: <?php echo get_theme_mod('inspire_text_color') ?>
    }
<?php }

add_action('wp_head', 'inspire_customize_css');


//widgets

function create_widget( $name, $id, $description ) {
    $args = array (
    	'name'          => __( $name ),
    	'id'            => $id,
    	'description'   => $description,
            'class'         => '',
    	'before_widget' => '',
    	'after_widget'  => '',
    	'before_title'  => '<h5>',
    	'after_title'   => '</h5>'
    );

    register_sidebar( $args );
}

create_widget( 'Left footer', 'footer_left', 'display left side of the footer' );
create_widget( 'middle footer', 'footer_middle', 'display middle of the footer' );
create_widget( 'right footer', 'footer_right', 'display right side of the footer' );
