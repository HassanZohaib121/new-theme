
<?php include('theme-parts/head.php'); ?>
<body class="antialiased __variable_5cfdac __variable_9a8899 flex flex-col min-h-screen">
    <div id="__next">
        <main class="flex-grow">
            <?php include('theme-parts/header.php'); ?>              
                <!-- Hero Section -->
                <section id="home" class="relative bg-gradient-to-r from-orange-50 to-amber-300 py-20">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <span class="border-transparent text-[#fff7ed] [a&]:hover:bg-orange-500/90 inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] transition-[color,box-shadow] overflow-hidden mb-4 bg-orange-500 text-orange-500-foreground hover:bg-orange-500">Premium Quality Export</span>
                            <h1 class="text-4xl md:text-6xl font-bold text-foreground mb-6">
                            Premium Salt Products for Global Markets
                            </h1>
                            <p class="text-xl text-gray-700 mb-8">
                            Leading exporter of high-quality salt, decorative salt lamps, and specialty salt products. Serving
                            international markets with excellence and reliability.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                            <a href="<?php echo esc_url(home_url('/products')); ?>" class="text-orange-500 hover:text-orange-500-foreground cursor-pointer">
                                <button class="py-2 hover:bg-white text-[#fff7ed] border hover:text-orange-500 hover:border hover:border-orange-500 cursor-pointer h-10  px-6 has-[>svg]:px-4 bg-orange-500 text-orange-500-foreground shadow-xs inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]">
                                View Products
                                </button>
                            </a>
                            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="text-orange-500 hover:text-orange-500-foreground cursor-pointer">
                                <button class="hover:text-white bg-[#ffffff]  hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 bg-orange-500-foreground text-orange-500 border border-orange-500 hover:text-orange-500-foreground hover:border hover:border-orange-500 cursor-pointer h-10 rounded-md px-6 has-[>svg]:px-4 text-orange-500-foreground shadow-xs hover:bg-orange-500/90 inline-flex items-center justify-center gap-2 whitespace-nowrap  text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]">
                                Contact Us
                                </button>
                            </a>
                            </div>
                        </div>
                        <div class="relative">
                            <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                            alt="Salt products and salt lamps"
                            width={600}
                            height={500}
                            class="rounded-lg shadow-2xl"
                            />
                        </div>
                        </div>
                    </div>
                </section>

                    <!-- Features Section -->
                <section class="py-16 bg-white">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-4 gap-8">
                        <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe w-8 h-8 text-orange-500"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Global Export</h3>
                        <p class="text-gray-600">Worldwide shipping to over 50 countries</p>
                        </div>
                        <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check-icon lucide-shield-check w-8 h-8 text-orange-500"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Quality Assured</h3>
                        <p class="text-gray-600">ISO certified with rigorous quality control</p>
                        </div>
                        <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck-electric-icon lucide-truck-electric w-8 h-8 text-orange-500"><path d="M14 19V7a2 2 0 0 0-2-2H9"/><path d="M15 19H9"/><path d="M19 19h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.62L18.3 9.38a1 1 0 0 0-.78-.38H14"/><path d="M2 13v5a1 1 0 0 0 1 1h2"/><path d="M4 3 2.15 5.15a.495.495 0 0 0 .35.86h2.15a.47.47 0 0 1 .35.86L3 9.02"/><circle cx="17" cy="19" r="2"/><circle cx="7" cy="19" r="2"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Fast Delivery</h3>
                        <p class="text-gray-600">Efficient logistics and timely delivery</p>
                        </div>
                        <div class="text-center">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal-icon lucide-medal w-8 h-8 text-orange-500"><path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"/><path d="M11 12 5.12 2.2"/><path d="m13 12 5.88-9.8"/><path d="M8 7h8"/><circle cx="12" cy="17" r="5"/><path d="M12 18v-2h-.5"/></svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">15+ Years</h3>
                        <p class="text-gray-600">Trusted experience in salt export</p>
                        </div>
                    </div>
                    </div>
                </section>

                <!-- Products Section -->
                <section id="products" class="py-20 bg-gray-50">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Product Range</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                            From pure table salt to decorative salt lamps, we offer a comprehensive range of premium salt products for
                            international markets.
                        </p>
                        </div> 
                        
                        <!-- <div class="grid md:grid-cols-3 gap-8">
                            <div class="group hover:shadow-2xl shadow-lg transition-shadow duration-300 bg-white text-[#09090b] flex flex-col gap-6 rounded-xl py-6">
                                <div class="p-0 @container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                    <img
                                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                                        alt="title"
                                        width={400}
                                        height={250}
                                        class="w-full h-64 object-cover rounded-t-lg"
                                    />
                                </div>
                                <div class="p-6">
                                    <div class="text-xl mb-2 leading-none font-semibold">
                                        Bath Pink Salt
                                    </div>
                                    <div class="mb-4 text-[#71717b] text-sm">Luxurious Himalayan Bath Salt</div>
                                    <div class="flex flex-wrap gap-2 mb-4">                    
                                        <span class="border-transparent bg-orange-500 text-white [a&]:hover:bg-orange-500/90 inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] transition-[color,box-shadow] overflow-hidden">
                                            catagories
                                        </span>
                                        <span class="border-transparent bg-orange-500 text-white [a&]:hover:bg-orange-500/90 inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] transition-[color,box-shadow] overflow-hidden">
                                            specifications
                                        </span>
                                    </div>
                                    <a href="/products">
                                    <button class="w-full bg-orange-500 hover:bg-orange-600 cursor-pointer h-9 px-4 py-2 has-[>svg]:px-3 text-white shadow-xs inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]">Learn More</button>
                                    </a>
                                </div>
                            </div>
                        </div> -->

                        <?php if (is_front_page()) : ?>
                            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                                    <?php
                                        $args = array(
                                        'post_type' => 'product',
                                        'posts_per_page' => 4
                                        );
                                        $query = new WP_Query($args);
                                        if ($query->have_posts()) :
                                        while ($query->have_posts()) : $query->the_post();
                                            $title = get_the_title();
                                            $desc = get_the_excerpt();
                                            $link = get_permalink();
                                            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                            $specifications = get_field('specifications');
                                            $specList = explode(',', $specifications);
                                    ?>
                                    <div class="p-6 text-center">
                                        <div class="overflow-hidden hover:shadow-lg transition-shadow bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-md h-full">
                                        <a href="<?php echo esc_url($link); ?>">
                                            <div class="relative h-48 w-full mb-3 overflow-hidden rounded-t-lg -mt-6">
                                            <img
                                                src="<?php echo esc_url($image); ?>"
                                                alt="<?php echo esc_attr($title); ?>"
                                                class="object-cover w-full h-full"
                                            />
                                            </div>
                                            <div class="grid auto-rows-min items-start gap-1.5 px-6">
                                            <h3 class="text-xl font-semibold text-gray-900"><?php echo esc_html($title); ?></h3>
                                            <p class="my-2 text-gray-600"><?php echo esc_html($desc); ?></p>
                                            </div>
                                            <div class="p-6">
                                            <ul class="space-y-2 text-left">
                                                <?php foreach ($specList as $spec) : ?>
                                                <li class="text-sm text-gray-600">• <?php echo esc_html(trim($spec)); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                            </div>
                                        </a>
                                        <div class="px-6">
                                            <button
                                                class="openModal w-full bg-orange-600 hover:bg-orange-700 text-white text-sm px-4 py-2 rounded-md transition"
                                                data-title="<?php echo esc_attr($title); ?>">
                                                Get Quote
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    <?php
                                        endwhile;
                                        wp_reset_postdata();
                                        else :
                                        echo '<p class="text-center col-span-4">No products found.</p>';
                                        endif;
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="text-center mt-8">
                        <a href="<?php echo home_url(); ?>/products" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-md hover:bg-orange-700 transition">
                            View All Products
                        </a>
                    </div>
                </section>

                <!-- About Section  -->
                <section id="about" class="py-20 bg-white">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">About Shakeel International</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            With over 15 years of experience in the salt export industry, we have established ourselves as a trusted
                            partner for businesses worldwide. Our commitment to quality, reliability, and customer satisfaction has
                            made us a leading exporter in the region.
                        </p>
                        <p class="text-lg text-gray-600 mb-8">
                            We source our products from the finest salt mines and work with skilled artisans to create premium salt
                            lamps. Our state-of-the-art processing facilities ensure that every product meets international quality
                            standards.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                            <div class="text-3xl font-bold text-orange-500 mb-2">50+</div>
                            <div class="text-gray-600">Countries Served</div>
                            </div>
                            <div class="text-center">
                            <div class="text-3xl font-bold text-orange-500 mb-2">1000+</div>
                            <div class="text-gray-600">Happy Clients</div>
                            </div>
                        </div>
                        </div>
                        <div class="relative">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images//salt-processing.avif"
                            alt="Salt processing facility"
                            width={500}
                            height={400}
                            class="rounded-lg shadow-lg"
                        />
                        </div>
                    </div>
                    </div>
                </section>

                <!-- Blog Section -->
                <section class="py-20 bg-white">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Latest Insights</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Stay updated with the latest trends, tips, and insights from the salt industry and export business.
                        </p>
                    </div>

                    <!-- <div class="grid md:grid-cols-3 gap-8 mb-12">
                        <div class="group hover:shadow-xl transition-shadow duration-300 bg-white text-[#09090b] flex flex-col gap-6 rounded-xl py-6 shadow-sm" >
                            <div class="p-0 @container/card-header grid auto-rows-min grid-rows-[auto_auto] items-start gap-1.5 px-6 has-data-[slot=card-action]:grid-cols-[1fr_auto] [.border-b]:pb-6">
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                                    alt="Title"
                                    width={400}
                                    height={200}
                                    class="w-full h-48 object-cover rounded-t-lg"
                                />
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-2 mb-3">
                                    <span class="text-[#09090b] border-orange-500 [a&]:hover:bg-accent [a&]:hover:text-[#18181b] inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium w-fit whitespace-nowrap shrink-0 [&>svg]:size-3 gap-1 [&>svg]:pointer-events-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] transition-[color,box-shadow] overflow-hidden">
                                        catagories
                                    </span>
                                </div>
                                <h3 class="text-xl font-semibold mb-2">Discover the Transformative Uses and Benefits of Spa Bath Salt: Nature’s Wellness Secret</h3>
                                <p class="text-gray-600 mb-4">(Brought to You by Shakeel International – Premium Himalayan Salt Exporters) Introduction: The Healing Power of Himalayan Spa Bath Salts In today’s fast-paced world, self-care isn’t a luxury—it’s a necessity. Enter spa bath salts, the ultimate fusion of ancient wellness and modern relaxation. Among these, Himalayan salt reigns supreme, celebrated for its purity, mineral richness, […]</p>
                                <a href="/blog/">
                                <button class="p-0 text-orange-500 hover:text-orange-700 underline-offset-4 hover:underline inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b]">
                                    Read More →
                                </button>
                                </a>
                            </div>
                        </div>           
                    </div> -->

                    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <?php
                            $args = array(
                                'post_type' => 'post', // default blog post type
                                'posts_per_page' => 4  // adjust the number of posts
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                $title = get_the_title();
                                $excerpt = get_the_excerpt();
                                $link = get_permalink();
                                $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                            ?>
                            <div class="bg-white rounded-xl shadow-md overflow-hidden transition hover:shadow-lg">
                            <a href="<?php echo esc_url($link); ?>">
                                <?php if ($image): ?>
                                <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-48 object-cover" />
                                <?php endif; ?>
                                <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-900"><?php echo esc_html($title); ?></h3>
                                <p class="mt-2 text-sm text-gray-600"><?php echo esc_html($excerpt); ?></p>
                                <div class="mt-4 text-orange-600 font-medium">Read More →</div>
                                </div>
                            </a>
                            </div>
                            <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p class="text-center col-span-4">No blog posts found.</p>';
                            endif;
                            ?>
                        </div>
                        </div>

                    </div>
                    <div class="text-center mt-8">
                        <a href="<?php echo home_url(); ?>/blog" class="inline-block bg-orange-500 text-white px-6 py-3 rounded-md hover:bg-orange-700 transition">
                            View All Articles
                        </a>
                    </div>

                </section>

                <!-- Contact Section -->
                <section id="contact" className="py-20 bg-gray-50">
                        <?php include('theme-parts/contact.php'); ?>
                </section>

                <!-- <div class="flex items-center justify-center w-full">
                    <div class="animate-spin rounded-full h-8 w-8 border-t-2 border-b-2 border-orange-500"></div>
                </div> -->
        </main>
        <?php include('theme-parts/footer.php'); ?>
        <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text" aria-atomic="false">
        </section>

        <!-- <div class="fixed bottom-8 right-8 z-50">
            <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] h-9 has-[&gt;svg]:px-3 whatsapp-chat-button bg-white hover:bg-gray-100 scale-150 text-white rounded-full p-4 shadow-black shadow-md hover:shadow-black hover:shadow-xl active:shadow-black transition-all duration-300 dark:bg-white dark:text-white dark:hover:bg-white dark:hover:text-white dark:hover:border-white dark:hover:shadow-white/50 dark:hover:shadow-xl">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#075E54" width="50" height="50" viewBox="0 0 24 24" class="scale-150">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">    </path>
                </svg>
                <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 rounded-full"></span>
            </button>
        </div> -->
    </div>
    <script id="__NEXT_DATA__" type="application/json">{"props":{"pageProps":{}},"page":"/","query":{},"buildId":"BxBSileiwJ6SA36qLfePp","nextExport":true,"autoExport":true,"isFallback":false,"scriptLoader":[]}</script>
    
    <!-- Modal -->
    <div id="Modal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">
        <!-- Close Button -->
        <button type="button" id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>

        <!-- Modal Header -->
        <h2 class="text-xl font-semibold mb-2">Request a Quote</h2>
        <p class="text-sm text-gray-600 mb-4">
            Fill out the form below to request a quote for <strong><?php echo esc_html(get_the_title()); ?></strong>.
            We'll get back to you within 24 hours.
        </p>

        <!-- Form -->
        <form method="POST" action="" class="space-y-4">
            <input type="hidden" name="form_type" value="quotation" />
          <input type="hidden" id="product_name_input" name="product_name" />
            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" id="name" name="name" required placeholder="Your name" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" name="email" required placeholder="your.email@example.com" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label for="company" class="block text-sm font-medium">Company</label>
                <input type="text" id="company" name="company" required placeholder="Your company name" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label for="quantity" class="block text-sm font-medium">Quantity Required (tons)</label>
                <input type="number" id="quantity" name="quantity" required min="1" placeholder="Enter quantity" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label for="message" class="block text-sm font-medium">Additional Information</label>
                <textarea id="message" name="message" rows="4" placeholder="Any specific requirements or questions?" class="w-full border p-2 rounded"></textarea>
            </div>
            <button type="submit" name="submit_quote" class="w-full bg-orange-600 hover:bg-orange-700 text-white py-2 px-4 rounded">
                Submit Request
            </button>
        </form>
        </div>
    </div>

<script>
  document.querySelectorAll('.openModal').forEach(button => {
    button.addEventListener('click', function () {
      const productName = this.getAttribute('data-title');
      document.getElementById('product_name_input').value = productName;

      document.querySelector('#Modal strong').textContent = productName;

      document.getElementById('Modal').classList.remove('hidden');
    });
  });

  document.getElementById('closeModal').addEventListener('click', function () {
    document.getElementById('Modal').classList.add('hidden');
  });

  window.addEventListener('click', function (e) {
    const modal = document.getElementById('Modal');
    const dialog = modal.querySelector('div');
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
</script>
</body>
</html>