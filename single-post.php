<?php include('theme-parts/head.php'); ?>
<?php include('theme-parts/header.php'); ?>

<?php
    if (have_posts()) :
     while (have_posts()) : the_post();
        $title = get_the_title();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $author_name = get_the_author();
        $author_avatar = get_avatar_url(get_the_author_meta('ID'), ['size' => 96]);
        $categories = get_the_category();
        $tags = get_the_tags();
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=1200&h=800';
        $post_date = get_the_date('M j, Y');
        $modified_date = get_the_modified_date('M j, Y');
        $slug = basename(get_permalink());
        $status = get_post_status();
        $reading_time = ceil(str_word_count(strip_tags($content)) / 200) . ' min read';
?>

<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <!-- Hero Section -->
    <div class="gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="relative max-w-6xl mx-auto px-6 py-16">
            <!-- Breadcrumb -->
            <nav class="text-white/80 text-sm mb-8">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="<?php echo home_url('/blog'); ?>" class="hover:text-white transition-colors">Blog</a>
                <span class="mx-2">/</span>
                <span class="text-white capitalize"><?php echo esc_html($slug); ?></span>
            </nav>

            <!-- Categories -->
            <div class="flex flex-wrap gap-2 mb-6">
                <?php foreach ($categories as $cat): ?>
                    <span class="px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-sm rounded-full">
                        <?php echo esc_html($cat->name); ?>
                    </span>
                <?php endforeach; ?>
            </div>

            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight mb-6">
                <?php echo esc_html($title); ?>
            </h1>

            <!-- Meta -->
            <div class="flex flex-wrap items-center gap-6 text-white/80">
                <div class="flex items-center gap-2">
                    <i data-lucide="user" class="w-5 h-5"></i>
                    <span><?php echo esc_html($author_name); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-5 h-5"></i>
                    <span><?php echo esc_html($post_date); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="clock" class="w-5 h-5"></i>
                    <span><?php echo esc_html($reading_time); ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Article -->
            <article class="lg:col-span-3">
                <?php if ($featured_image): ?>
                    <div class="mb-8 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="<?php echo esc_url($featured_image); ?>" alt="<?php echo esc_attr($title); ?>" class="w-full h-96 object-cover">
                    </div>
                <?php endif; ?>

                <div class="prose prose-lg max-w-none">
                    <div class="content text-gray-700 leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </div>

                <?php if ($tags): ?>
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag): ?>
                                <span class="px-4 py-2 bg-blue-100 text-blue-800 text-sm rounded-full hover:bg-blue-200 transition-colors cursor-pointer">
                                    #<?php echo esc_html($tag->name); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="mt-12 p-6 bg-gray-50 rounded-2xl">
                    <div class="flex items-start gap-4">
                        <img src="<?php echo esc_url($author_avatar); ?>" class="w-16 h-16 rounded-full object-cover" alt="<?php echo esc_attr($author_name); ?>">
                        <div class="flex-1">
                            <h4 class="text-xl font-semibold text-gray-800 mb-2"><?php echo esc_html($author_name); ?></h4>
                            <p class="text-gray-600 leading-relaxed">
                                <?php the_author_meta('description'); ?>
                            </p>
                            <div class="flex gap-3 mt-4">
                                <!-- You can link social icons here -->
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Sidebar -->
            <aside class="lg:col-span-1">
                <div class="sticky top-8 space-y-8">
                    <div class="bg-white rounded-2xl p-6 shadow-lg">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Article Info</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex justify-between"><span class="text-gray-600">Published:</span><span class="text-gray-800 font-medium"><?php echo esc_html($post_date); ?></span></div>
                            <div class="flex justify-between"><span class="text-gray-600">Modified:</span><span class="text-gray-800 font-medium"><?php echo esc_html($modified_date); ?></span></div>
                            <div class="flex justify-between"><span class="text-gray-600">Reading Time:</span><span class="text-gray-800 font-medium"><?php echo esc_html($reading_time); ?></span></div>
                            <div class="flex justify-between"><span class="text-gray-600">Status:</span><span class="text-green-600 font-medium capitalize"><?php echo esc_html($status); ?></span></div>
                        </div>
                    </div>

                    <!-- Related Posts -->
                    <?php
                    $related = new WP_Query([
                        'posts_per_page' => 5,
                        'post__not_in' => [get_the_ID()],
                        'category__in' => wp_get_post_categories(get_the_ID())
                    ]);
                    if ($related->have_posts()) : ?>
                        <div class="bg-white rounded-2xl p-6 shadow-lg">
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Related Articles</h3>
                            <?php while ($related->have_posts()) : $related->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="group block bg-white rounded-xl hover:shadow-lg transition-shadow overflow-hidden mb-3">
                                    <div class="flex flex-row items-start gap-2">
                                        <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'thumbnail') ?: 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=250&fit=crop'); ?>" class="w-16 h-16 rounded-lg object-cover" alt="<?php the_title(); ?>">
                                        <h4 class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition-colors line-clamp-2"><?php the_title(); ?></h4>
                                    </div>
                                </a>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </aside>
        </div>
    </div>

    <?php include('theme-parts/footer.php'); ?>

    <script>
        lucide.createIcons();
        document.addEventListener('DOMContentLoaded', function () {
            const article = document.querySelector('article');
            const progressBar = document.createElement('div');
            progressBar.className = 'fixed top-0 left-0 h-1 bg-blue-600 z-50 transition-all duration-300';
            document.body.appendChild(progressBar);
            window.addEventListener('scroll', () => {
                const articleRect = article.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const progress = Math.max(0, Math.min(1, (windowHeight - articleRect.top) / (articleRect.height - windowHeight)));
                progressBar.style.width = (progress * 100) + '%';
            });
        });
    </script>
</body>

<?php endwhile;
endif;


