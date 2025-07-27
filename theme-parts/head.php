<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charSet="utf-8" data-next-head=""/>
    <meta name="viewport" content="width=device-width" data-next-head=""/>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/output.css" data-precedence="next"/>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/_next/static/media/569ce4b8f30dc480-s.p.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/_next/static/media/93f479601ee12b01-s.p.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/favicon.jpg" type="image/png">

    <title>
        <?php
            if ( is_front_page() || is_home() ) {
            echo 'Home';
            } else {
            wp_title('|', true, 'right');
            bloginfo('name');
            }
        ?>
    </title>
</head>