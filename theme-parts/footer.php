<footer class="bg-[#242424] text-white py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <img alt="" loading="lazy" width="150" height="150" decoding="async" data-nimg="1" style="color:transparent" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.jpg"/>
                <p class="text-gray-400">Leading exporter of premium salt products serving global markets with quality and reliability.    </p>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Products</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a class="hover:text-white transition-colors" href="/#">Table Salt</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Salt Lamps</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Rock Salt</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Bath Salts</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Company</h4>
                <ul class="space-y-2 text-gray-400">        
                    <li><a class="hover:text-white transition-colors" href="/#about">About Us</a></li>
                    <li><a class="hover:text-white transition-colors" href="/blog/">Blog</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Quality Control</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Certifications</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-4">Support</h4>
                <ul class="space-y-2 text-gray-400">
                    <li><a class="hover:text-white transition-colors" href="/#contact">Contact Us</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Shipping Info</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Terms &amp; Conditions</a></li>
                    <li><a class="hover:text-white transition-colors" href="/#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>© 2024 Shakeel Intel. All rights reserved.</p>
        </div>
    </div>
</footer>


<?php
$name = get_option('whatsapp_name');
$status = get_option('whatsapp_reply_status');
$message = get_option('whatsapp_message');
$number = get_option('whatsapp_number');
$image = get_option('whatsapp_image');
?>

<!-- Floating Button -->
<div id="whatsapp-button" class="fixed bottom-8 right-8 z-50">
    <button data-slot="button" id="whatsapp-button"  class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*=&#x27;size-&#x27;])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-[#ff6900] focus-visible:ring-[#ff6900]/50 focus-visible:ring-[3px] aria-invalid:ring-[#e7000b]/20 dark:aria-invalid:ring-[#e7000b]/40 aria-invalid:border-[#e7000b] h-9 has-[&gt;svg]:px-3 whatsapp-chat-button bg-white hover:bg-gray-100 scale-150 text-white rounded-full p-4 shadow-black shadow-md hover:shadow-black hover:shadow-xl active:shadow-black transition-all duration-300 dark:bg-white dark:text-white dark:hover:bg-white dark:hover:text-white dark:hover:border-white dark:hover:shadow-white/50 dark:hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#075E54" width="50" height="50" viewBox="0 0 24 24" class="scale-150">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z">    </path>
        </svg>
        <span class="absolute top-0 right-0 w-3 h-3 bg-red-500 rounded-full"></span>
    </button>
</div>

<!-- Popup -->
<div id="whatsapp-popup" class="fixed bottom-24 right-6 w-80 bg-white shadow-xl rounded-xl p-4 border hidden z-50">
  <div class="flex items-center gap-4">
    <?php if ($image): ?>
      <img src="<?php echo esc_url($image); ?>" class="w-14 h-14 rounded-full" alt="Profile">
    <?php endif; ?>
    <div>
      <p class="font-bold text-gray-800"><?php echo esc_html($name); ?></p>
      <p class="text-sm text-gray-500"><?php echo esc_html($status); ?></p>
    </div>
  </div>
  <p class="mt-4 text-sm text-gray-600"><?php echo esc_html($message); ?></p>
  <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $number); ?>" target="_blank" rel="noopener noreferrer"
     class="mt-4 inline-block w-full bg-green-600 hover:bg-green-700 text-white text-center py-2 rounded-md font-semibold transition">
    Contact on WhatsApp
  </a>

</div>

<!-- Script to Toggle -->
<script>
  const whatsappBtn = document.getElementById('whatsapp-button');
  const whatsappPopup = document.getElementById('whatsapp-popup');

  whatsappBtn.addEventListener('click', () => {
    whatsappPopup.classList.toggle('hidden');
  });

  // Optional: Close when clicking outside
  document.addEventListener('click', function(e) {
    if (!whatsappBtn.contains(e.target) && !whatsappPopup.contains(e.target)) {
      whatsappPopup.classList.add('hidden');
    }
  });
</script>
