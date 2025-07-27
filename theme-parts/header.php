<header class="border-b bg-[#242424] backdrop-blur supports-[backdrop-filter]:bg-[#242424] sticky top-0 z-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
    <div class="flex justify-between items-center py-4 relative">

      <!-- Logo -->
      <a class="flex items-center" href="<?php echo esc_url(home_url('/')); ?>">
        <img 
          src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.jpg" 
          alt="Logo" 
          width="150" 
          height="150" 
          loading="lazy" 
          decoding="async" 
          style="color:transparent"
        />
      </a>

      <!-- Center Nav Menu -->
      <nav class="absolute left-1/2 transform -translate-x-1/2 hidden md:flex space-x-8 font-semibold list-none">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'items_wrap' => '%3$s',
          'link_before' => '<span class="text-white hover:text-orange-500 transition-colors">',
          'link_after' => '</span>',
          'fallback_cb' => false
        ));
        ?>
      </nav>

      <!-- CTA Button -->
      <!-- <button 
        class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*=\'size-\'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] text-white shadow-xs h-9 px-4 py-2 has-[>svg]:px-3 bg-orange-500 hover:bg-orange-700"
        type="button"
      >
        Get Quote
      </button> -->
      <?php include get_template_directory() . '/theme-parts/popup.php'; ?>
    </div>
  </div>
</header>
