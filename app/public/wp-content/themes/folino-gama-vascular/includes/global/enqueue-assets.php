<?php

if(!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', 'it9_folino_enqueue_js_css');
function it9_folino_enqueue_js_css()
{
   wp_enqueue_script('all', get_theme_file_uri('assets/js/all.js'));
   wp_enqueue_style('index', get_theme_file_uri('assets/css/_index.css'));
   wp_enqueue_style('tailwind', get_theme_file_uri('assets/css/tailwind.css'));

   if (is_singular())
   {
      wp_localize_script('all', 'postShare', [
         'title' => get_the_title(),
         'url'   => get_the_permalink()
      ]);
   }
}