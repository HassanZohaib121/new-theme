<?php include('theme-parts/head.php'); ?>
<?php include('theme-parts/header.php'); ?>


<main class="max-w-7xl mx-auto px-6 py-12 animate-slide-up">
  <div class="bg-white rounded-3xl shadow-2xl overflow-hidden">
    <div class="grid lg:grid-cols-2 gap-12 p-8 lg:p-12">
      <!-- Product Image -->
      <div class="group">
        <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-orange-700 to-gray-100 aspect-square shadow-xl">
          <?php if (has_post_thumbnail()): ?>
            <?= get_the_post_thumbnail(null, 'large', ['class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110']) ?>
          <?php else: ?>
            <img src="/placeholder.svg" class="w-full h-full object-cover" alt="Placeholder">
          <?php endif; ?>
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>
      </div>

      <!-- Product Info -->
      <div class="space-y-8 w-full">
        <!-- Categories -->
        <div class="space-y-4">
          <div class="flex flex-wrap items-center gap-3 mb-4">
            <?php
            $terms = get_the_terms(get_the_ID(), 'category');
            if ($terms) {
              foreach ($terms as $term) {
                echo '<span class="px-4 py-2 bg-brand-orange-light text-brand-orange rounded-full text-sm font-semibold border border-brand-orange/20">'
                  . esc_html($term->name) . '</span>';
              }
            }
            ?>
          </div>

          <!-- Title & Content -->
          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900"><?= get_the_title() ?></h1>
          <div class="prose prose-lg text-gray-600 leading-relaxed">
            <?php the_content(); ?>
          </div>
        </div>

        <?php $title = get_the_title(); ?>

       <button
            class="openModal w-full bg-orange-600 hover:bg-orange-700 text-white text-sm px-4 py-2 rounded-md transition"
            data-title="<?php echo esc_attr($title); ?>">
            Get Quote
        </button>

        <!-- ACF Fields -->
        <div class="border-t border-gray-100 p-8 lg:p-12">
          <div class="grid md:grid-cols-2 gap-8">
            <?php foreach (['specifications', 'applications', 'packaging_option', 'certifications'] as $field): ?>
              <?php $value = get_field($field); ?>
              <?php if ($value): ?>
                <div class="bg-gradient-to-br from-slate-50 to-white p-6 rounded-2xl border border-slate-100">
                  <h3 class="text-xl font-bold text-gray-900 mb-4"><?= ucfirst(str_replace('_', ' ', $field)) ?></h3>
                  <ul class="space-y-2">
                    <?php foreach (explode(',', $value) as $item): ?>
                      <li class="text-gray-600 flex items-start">
                        <span class="text-orange-500 mr-2 mt-1">•</span> <?= esc_html(trim($item)) ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Related Products -->
  <?php
  $related_query = new WP_Query([
    'post_type' => 'product',
    'posts_per_page' => 3,
    'post__not_in' => [get_the_ID()],
  ]);

  if ($related_query->have_posts()): ?>
    <div class="mt-16">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Related Products</h2>
        <p class="text-gray-600 text-lg">Discover more products from our collection</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php while ($related_query->have_posts()): $related_query->the_post(); ?>
          <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
            <div class="relative overflow-hidden aspect-video bg-gray-100">
              <?php if (has_post_thumbnail()): ?>
                <?= get_the_post_thumbnail(null, 'medium', ['class' => 'w-full h-full object-cover']) ?>
              <?php endif; ?>
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-900 mb-3"><?= get_the_title() ?></h3>
              <p class="text-gray-600"><?= get_the_excerpt() ?></p>
              <a href="<?= get_permalink() ?>" class="mt-4 inline-flex items-center text-brand-orange hover:text-orange-600 font-semibold">
                Learn More → 
              </a>
            </div>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  <?php endif; ?>
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
          <input type="hidden" id="product_name_input" name="product_name" value="<?php echo esc_attr($title); ?>" />
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
</main>

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


<?php include('theme-parts/footer.php'); ?>