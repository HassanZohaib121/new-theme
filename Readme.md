Get Home Function: <?php echo home_url(); ?>

title: <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

navbar:

<nav class="bg-white shadow">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Logo" class="h-10" />
    </a>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class' => 'flex space-x-6 text-gray-800 font-medium',
        'container' => false,
        'fallback_cb' => false,
    ));
    ?>
  </div>
</nav>