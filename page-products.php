<?php
/* Template Name: Products Page */
include('theme-parts/head.php');
include('theme-parts/header.php');
?>


  <div class="min-h-screen bg-gray-50 py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Our Products</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
          Discover our comprehensive range of high-quality salt products, from industrial-grade to specialty salts,
          all meeting international standards.
        </p>
      </div>      
    </div>    
    
    <!-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
  
      <div class="p-6 text-center">
        <div class="overflow-hidden hover:shadow-lg transition-shadow bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border shadow-md py-6 h-full">
          <a href="/products/abc">
            <div class="relative h-48 w-full mb-3 overflow-hidden rounded-t-lg -mt-6">
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                alt="Title"
                class="object-cover w-full h-full"
              />
            </div>
            <div class="grid auto-rows-min items-start gap-1.5 px-6">
              <h3 class="text-xl font-semibold text-gray-900">Bath Pink Salt</h3>
              <p class="my-2 text-gray-600">Luxurious Himalayan Bath Salt</p>
            </div>
            <div class="p-6">
              <ul class="space-y-2 text-left">
                <?php
                  $specifications = "Detoxify & Refresh, Soothe Muscles & Stress, Nourish Skin Naturally, Aromatherapy Boost";
                  foreach (explode(',', $specifications) as $spec) {
                      echo '<li class="text-sm text-gray-600">• ' . trim($spec) . '</li>';
                  }
                ?>
              </ul>
            </div>
          </a>
          <div class="px-6">
            <button class="w-full bg-orange-600 hover:bg-orange-700 text-white text-sm px-4 py-2 rounded-md transition">
              Get Quote
            </button>
          </div>
        </div>
      </div>

      <div class="p-6 text-center">
        <div class="overflow-hidden hover:shadow-lg transition-shadow bg-white text-[#09090b] flex flex-col gap-6 rounded-xl border py-6 shadow-md h-full">
          <a href="/products/abc">
            <div class="relative h-48 w-full mb-3 overflow-hidden rounded-t-lg -mt-6">
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/salt.avif"
                alt="Title"
                class="object-cover w-full h-full"
              />
            </div>
            <div class="grid auto-rows-min items-start gap-1.5 px-6">
              <h3 class="text-xl font-semibold text-gray-900">Bath Pink Salt</h3>
              <p class="my-2 text-gray-600">Luxurious Himalayan Bath Salt</p>
            </div>
            <div class="p-6">
              <ul class="space-y-2 text-left">
                <?php
                  $specifications = "Detoxify & Refresh, Soothe Muscles & Stress, Nourish Skin Naturally, Aromatherapy Boost";
                  foreach (explode(',', $specifications) as $spec) {
                      echo '<li class="text-sm text-gray-600">• ' . trim($spec) . '</li>';
                  }
                ?>
              </ul>
            </div>
          </a>
          <div class="px-6">
            <button class="w-full bg-orange-600 hover:bg-orange-700 text-white text-sm px-4 py-2 rounded-md transition">
              Get Quote
            </button>
          </div>
        </div>
      </div>
    </div> -->

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => -1
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            $title = get_the_title();
            $desc = get_the_excerpt();
            $link = get_permalink();
            $image = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            $specifications = get_field('specifications'); // ACF field
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

<?php include('theme-parts/footer.php'); ?>


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
