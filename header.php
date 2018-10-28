<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Xprs Music Services</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Merriweather:300,300italic,400,400italic,700,700italic,900,900italic","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
</head>
<body>
<?php if (is_user_logged_in() ) : ?> 
<?php get_template_part('templates/navbar/logged_in_nav'); ?>
<?php else: ?>
<?php get_template_part('templates/navbar/logged_out_nav'); ?>
<?php endif; ?>    

