<?php
/* Template Name: Blog Page */
include('theme-parts/head.php');
include('theme-parts/header.php');
$category = "All"; 

// $featuredPost = [
//   'title' => 'Sustainable Salt Mining Practices',
//   'excerpt' => 'Learn about how we ensure sustainable and environmentally responsible salt mining methods.',
//   'date' => '2025-07-27',
//   'author' => 'John Doe',
//   'category' => 'Sustainability',
//   'slug' => 'sustainable-salt-mining'
// ];
?>

<div class="min-h-screen bg-white">     

    <!--  Hero Section  -->
    <section class="bg-gradient-to-br from-orange-50 to-amber-50 py-16">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Salt Industry Insights & Export Tips</h1>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto mb-8">
            Stay informed with the latest trends, best practices, and expert insights from the world of salt export
            and international trade.
          </p>

          <!--  Search Bar  -->
          <div class="max-w-md mx-auto relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
            <input
              placeholder="Search articles..."
              class="pl-10 pr-4 py-3 text-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500 file:text-foreground placeholder:text-muted-foreground selection:bg-orange-500 selection:text-[#fff7ed] dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]"
            />
          </div>
        </div>
      </div>
    </section>

    <!--  Featured Post  -->
      <!-- <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="mb-8">
            <span class="bg-orange-100 text-orange-800 mb-4 inline-flex items-center justify-center rounded-md border border-transparent px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap transition">
              Featured Article
            </span>
          </div>

          <div class="overflow-hidden bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
            <div class="grid lg:grid-cols-2 gap-0">
              
            
              <div class="relative h-64 lg:h-auto">
                <img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                  alt="Title"
                  class="object-cover w-full h-96"
                />
              </div>

              
              <div class="p-8 lg:p-12 flex flex-col justify-center">
                <div class="flex items-center gap-4 mb-4">                  

                  <span class="text-orange-600 border-orange-600 inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap transition">
                    <?php echo esc_html($featuredPost['category']); ?>
                  </span>

                  <div class="flex items-center text-gray-500 text-sm">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <?php echo date("F j, Y", strtotime($featuredPost['date'])); ?>
                  </div>
                </div>

                <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                  <?php echo esc_html($featuredPost['title']); ?>
                </h2>

                <p class="text-gray-600 mb-6 text-lg">
                  <?php echo esc_html($featuredPost['excerpt']); ?>
                </p>

                <div class="flex items-center justify-between">
                  <div class="flex items-center text-gray-500">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="text-sm capitalize">By <?php echo esc_html($featuredPost['author']); ?></span>
                  </div>

                  <a href="/blog/<?php echo esc_attr($featuredPost['slug']); ?>">
                    <button class="bg-orange-600 hover:bg-orange-700 text-white inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium px-4 py-2 transition focus-visible:ring-2 focus-visible:ring-orange-500">
                      Read Article
                      <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                      </svg>
                    </button>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </section> -->

      <?php
        // Fetch latest post
        $latest_query = new WP_Query([
          'post_type' => 'post',
          'posts_per_page' => 1,
        ]);

        if ($latest_query->have_posts()) :
          $latest_query->the_post();

          $featuredPost = [
            'title'    => get_the_title(),
            'excerpt'  => wp_trim_words(get_the_excerpt(), 30),
            'date'     => get_the_date('Y-m-d'),
            'author'   => get_the_author(),
            'slug'     => basename(get_permalink()),
            'category' => get_the_category()[0]->name ?? 'Uncategorized',
            'image'    => get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/assets/images/salt.avif',
          ];
      ?>

        <section class="py-16 bg-white">
          <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
              <span class="bg-orange-100 text-orange-800 mb-4 inline-flex items-center justify-center rounded-md border border-transparent px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap transition">
                Featured Article
              </span>
            </div>

            <div class="overflow-hidden bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
              <div class="grid lg:grid-cols-2 gap-0">

                <div class="relative h-64 lg:h-auto">
                  <img
                    src="<?php echo esc_url($featuredPost['image']); ?>"
                    alt="<?php echo esc_attr($featuredPost['title']); ?>"
                    class="object-cover w-full h-96"
                  />
                </div>

                <div class="p-8 lg:p-12 flex flex-col justify-center">
                  <div class="flex items-center gap-4 mb-4">                  
                    <span class="text-orange-600 border-orange-600 inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap transition">
                      <?php echo esc_html($featuredPost['category']); ?>
                    </span>

                    <div class="flex items-center text-gray-500 text-sm">
                      <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                      </svg>
                      <?php echo date("F j, Y", strtotime($featuredPost['date'])); ?>
                    </div>
                  </div>

                  <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-4">
                    <?php echo esc_html($featuredPost['title']); ?>
                  </h2>

                  <p class="text-gray-600 mb-6 text-lg">
                    <?php echo esc_html($featuredPost['excerpt']); ?>
                  </p>

                  <div class="flex items-center justify-between">
                    <div class="flex items-center text-gray-500">
                      <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                      </svg>
                      <span class="text-sm capitalize">By <?php echo esc_html($featuredPost['author']); ?></span>
                    </div>

                    <a href="/blog/<?php echo esc_attr($featuredPost['slug']); ?>">
                      <button class="bg-orange-600 hover:bg-orange-700 text-white inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium px-4 py-2 transition focus-visible:ring-2 focus-visible:ring-orange-500">
                        Read Article
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                      </button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php
  wp_reset_postdata();
endif;
?>


      <section class="py-4 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap gap-2 justify-center">
            <?php
              $categories = ['All', 'Industrial', 'Edible', 'Specialty']; 
              $currentCategory = 'All'; 
              foreach ($categories as $category): ?>
                  <button
                    class="<?php echo $category === $currentCategory
                        ? 'bg-orange-600 hover:bg-orange-700 text-white'
                        : 'border border-gray-300 hover:border-orange-600 hover:text-orange-600 text-gray-700'; ?> 
                        rounded-md px-4 py-2 text-sm font-medium transition mr-2 mb-2"
                >
                    <?php echo esc_html($category); ?>
                </button>
            <?php endforeach; ?>
        </div>
      </section>

    <!--  Blog Posts Grid  -->
    <!-- <section class="py-16 bg-white">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div  class="group hover:shadow-xl transition-shadow duration-300 bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
              <div class="p-0 @container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                <div class="relative h-48 overflow-hidden rounded-t-lg">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt-jar.webp"
                    alt="title"
                    fill
                    class="object-cover h-48 w-full group-hover:scale-105 transition-transform duration-300"
                  />
                </div>
              </div>
              <div class="p-6">
                <div class="flex items-center gap-2 mb-3">
                    <span class="text-orange-600 border-orange-600 text-foreground [a&]:hover:bg-accent [a&]:hover:text-[#18181b] inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] transition-[color,box-shadow] overflow-hidden">
                      category
                    </span>
                  <span class="text-sm text-gray-500"><?php echo date("F j, Y", strtotime($featuredPost['date'])); ?></span>
                </div>
                <div class="text-lg mb-3 group-hover:text-orange-600 transition-colors line-clamp-2 leading-none font-semibold">
                  Discover the Transformative Uses and Benefits of Spa Bath Salt: Nature’s Wellness Secret
                </div>
                <div class="text-gray-600 mb-4 line-clamp-3 text-muted-foreground text-sm">excerpt</div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center text-gray-500 text-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user w-4 h-4 mr-1"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    <span class="text-sm capitalize">By Author</span>
                  </div>
                  <a
                    href="/blog/abc"
                    class="text-orange-600 hover:text-orange-700 font-medium text-sm"
                  >
                    Read More →
                  </a>
                </div>
              </div>
            </div>
        </div>

        <div class="text-center mt-12">
          <button class="border bg-background shadow-xs hover:bg-accent hover:text-[#18181b] dark:bg-input/30 dark:border-input dark:hover:bg-input/50 border-orange-600 text-orange-600 hover:bg-orange-50 inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] ">
            Load More Articles
          </button>
        </div>
      </div>
    </section> -->

    <section class="py-16 bg-white">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3 // Show 3 posts, change if needed
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
          ?>
          <div class="group hover:shadow-xl transition-shadow duration-300 bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-sm">
            <div class="p-0 @container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6">
              <div class="relative h-48 overflow-hidden rounded-t-lg">
                <?php if (has_post_thumbnail()) : ?>
                  <img
                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                    alt="<?php the_title_attribute(); ?>"
                    class="object-cover h-48 w-full group-hover:scale-105 transition-transform duration-300"
                  />
                <?php endif; ?>
              </div>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <?php
                  $category = get_the_category();
                  if (!empty($category)) {
                    echo '<span class="text-orange-600 border-orange-600 text-foreground inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium">' . esc_html($category[0]->name) . '</span>';
                  }
                ?>
                <span class="text-sm text-gray-500"><?php echo get_the_date('F j, Y'); ?></span>
              </div>
              <div class="text-lg mb-3 group-hover:text-orange-600 transition-colors line-clamp-2 leading-none font-semibold">
                <?php the_title(); ?>
              </div>
              <div class="text-gray-600 mb-4 line-clamp-3 text-muted-foreground text-sm">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
              </div>
              <div class="flex items-center justify-between">
                <div class="flex items-center text-gray-500 text-sm">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  <span class="text-sm capitalize">By <?php the_author(); ?></span>
                </div>
                <a href="<?php the_permalink(); ?>" class="text-orange-600 hover:text-orange-700 font-medium text-sm">
                  Read More →
                </a>
              </div>
            </div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p class="col-span-3 text-center">No blog posts found.</p>';
            endif;
          ?>
        </div>
      </div>
    </section>


    <!--  Newsletter Signup  -->
    <section class="py-16 bg-orange-50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Stay Updated</h2>
          <p class="text-lg text-gray-600 mb-8">
            Subscribe to our newsletter and get the latest salt industry insights delivered to your inbox.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
            <input
              placeholder="Enter your email"
              class="flex-1 border-gray-300 focus:border-orange-500 focus:ring-orange-500 file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
            />
            <button class="px-6 cursor-pointer bg-orange-600 hover:bg-orange-700 text-[#fff7ed] shadow-xs inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]">Subscribe</button>
          </div>
        </div>
      </div>
    </section>
     
  </div>

<?php include('theme-parts/footer.php'); ?>
