<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">

  <!-- www.phpied.com/conditional-comments-block-downloads/ -->
  <!--[if IE]><![endif]-->

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!-- Does not currently validate. Known issue with the Boilerplate. -->

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile Viewport Fix
        j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
  device-width : Occupy full width of the screen in its current orientation
  initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
  maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
  -->
  <meta name="viewport" content="width=1000px; initial-scale=1.0; maximum-scale=1.0;">

  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <!-- CSS : implied media="all" -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>

  <!-- For the less-enabled mobile browsers like Opera Mini -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/handheld.css", 'media="handheld"') ?>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/modernizr-1.5.min.js") ?>

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7 ]> <body <?php body_class('ie6'); ?>> <![endif]-->
<!--[if IE 7 ]>    <body <?php body_class('ie7'); ?>> <![endif]-->
<!--[if IE 8 ]>    <body <?php body_class('ie8'); ?>> <![endif]-->
<!--[if IE 9 ]>    <body <?php body_class('ie9'); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body <?php body_class('ie6'); ?>> <!--<![endif]-->

  <div class="aligncenter" id="container">
    <header class="aligncenter" role="banner">
      <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?> hello hello </a></h1>
      <!-- <p class="description"><?php bloginfo('description'); ?></p> -->
      <nav>
        <ul class="left block">
          <li>
            <a href="/wordpress/coaches/">Coaches</a>
          </li>
          <li>
            <a href="/wordpress/jcm-charity/">JCM Charity</a>
          </li>
          <li>
            <a href="/wordpress/routes/">Routes</a>
          </li>
        </ul>
        <ul class="block right">
          <li>
            <a href="/wordpress/contact/">Contact</a>
          </li>
          <li>
            <a href="/wordpress/news/">News</a>
          </li>
          <li>
            <a href="/wordpress/something-else/">Something Else</a>
          </li>
        </ul>
        <?php /*wp_list_pages('title_li=' );*/ ?>
      </nav>
    </header>

    <div class="parallax">
  <div class="sky"></div>
  <div class="mountain"></div>
  <div class="road"></div>
</div>

