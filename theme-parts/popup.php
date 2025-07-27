<!-- Trigger Button -->
<button id="openQuoteModal" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-semibold transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*=\'size-\'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] text-white shadow-xs h-9 px-4 py-2 has-[>svg]:px-3 bg-orange-500 hover:bg-orange-700">
    Request Quote
</button>

<!-- Modal -->
<div id="quoteModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md relative">
        <!-- Close Button -->
        <button type="button" id="closeQuoteModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>

        <!-- Modal Header -->
        <h2 class="text-xl font-semibold mb-2">Request a Quote</h2>
        <p class="text-sm text-gray-600 mb-4">
            Fill out the form below to request a quote for <strong><?php echo esc_html(get_the_title()); ?></strong>.
            We'll get back to you within 24 hours.
        </p>

        <!-- Form -->
        <form method="post" action="" class="space-y-4">
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
                <label for="product_name" class="block text-sm font-medium">Product Name</label>
                <input type="text" id="product_name" name="product_name" required placeholder="Product name" class="w-full border p-2 rounded" />
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

<!-- JavaScript to toggle modal -->
<script>
  document.getElementById('openQuoteModal').addEventListener('click', function () {
    document.getElementById('quoteModal').classList.remove('hidden');
  });

  document.getElementById('closeQuoteModal').addEventListener('click', function () {
    document.getElementById('quoteModal').classList.add('hidden');
  });

  // Optional: close modal when clicking outside the modal box
  window.addEventListener('click', function (e) {
    const modal = document.getElementById('quoteModal');
    const dialog = modal.querySelector('div');
    if (e.target === modal) {
      modal.classList.add('hidden');
    }
  });
</script>
