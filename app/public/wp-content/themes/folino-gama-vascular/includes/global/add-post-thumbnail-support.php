<?php
if (!defined('ABSPATH')) exit;

add_action('init', 'it9_folino_add_post_thumbnail_support');
function it9_folino_add_post_thumbnail_support()
{
    add_theme_support('post-thumbnails');
}
