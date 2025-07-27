<?php
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
            'footer-menu' => __('Footer Menu') 
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');

function add_whatsapp_popup_menu() {
    add_menu_page(
        'WhatsApp Popup Settings',
        'WhatsApp Popup',
        'manage_options',
        'whatsapp-popup',
        'render_whatsapp_popup_form',
        'dashicons-format-chat',
        80
    );
}
add_action('admin_menu', 'add_whatsapp_popup_menu');

function render_whatsapp_popup_form() {
    ?>
    <div class="wrap">
        <h1>WhatsApp Popup Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('whatsapp_popup_group');
            do_settings_sections('whatsapp-popup');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function register_whatsapp_popup_settings() {
    register_setting('whatsapp_popup_group', 'whatsapp_name');
    register_setting('whatsapp_popup_group', 'whatsapp_reply_status');
    register_setting('whatsapp_popup_group', 'whatsapp_message');
    register_setting('whatsapp_popup_group', 'whatsapp_number');
    register_setting('whatsapp_popup_group', 'whatsapp_image');

    add_settings_section('whatsapp_popup_section', '', null, 'whatsapp-popup');

    add_settings_field('whatsapp_name', 'Name', function() {
        $value = get_option('whatsapp_name', '');
        echo "<input type='text' name='whatsapp_name' value='" . esc_attr($value) . "' class='regular-text' />";
    }, 'whatsapp-popup', 'whatsapp_popup_section');

    add_settings_field('whatsapp_reply_status', 'Reply Status', function() {
        $value = get_option('whatsapp_reply_status', '');
        echo "<input type='text' name='whatsapp_reply_status' value='" . esc_attr($value) . "' class='regular-text' />";
    }, 'whatsapp-popup', 'whatsapp_popup_section');

    add_settings_field('whatsapp_message', 'Custom Message', function() {
        $value = get_option('whatsapp_message', '');
        echo "<textarea name='whatsapp_message' rows='5' class='large-text'>" . esc_textarea($value) . "</textarea>";
    }, 'whatsapp-popup', 'whatsapp_popup_section');

    add_settings_field('whatsapp_number', 'WhatsApp Number', function() {
        $value = get_option('whatsapp_number', '');
        echo "<input type='text' name='whatsapp_number' value='" . esc_attr($value) . "' class='regular-text' />";
    }, 'whatsapp-popup', 'whatsapp_popup_section');

    // add_settings_field('whatsapp_image', 'Profile Image URL', function() {
    //     $value = get_option('whatsapp_image', '');
    //     echo "<input type='text' name='whatsapp_image' value='" . esc_attr($value) . "' class='regular-text' />";
    // }, 'whatsapp-popup', 'whatsapp_popup_section');
    add_settings_field('whatsapp_image', 'Profile Image', function () {
        $image_url = get_option('whatsapp_image', '');
        ?>
        <div>
            <img id="whatsapp_image_preview" src="<?php echo esc_url($image_url); ?>" style="max-width: 100px; margin-bottom: 10px;" />
            <input type="text" name="whatsapp_image" id="whatsapp_image" value="<?php echo esc_attr($image_url); ?>" class="regular-text" />
            <br />
            <button type="button" class="button" id="upload_whatsapp_image">Select Image</button>
        </div>
        <?php
    }, 'whatsapp-popup', 'whatsapp_popup_section');

}
add_action('admin_init', 'register_whatsapp_popup_settings');

function enqueue_wp_media_uploader() {
    if (isset($_GET['page']) && $_GET['page'] === 'whatsapp-popup') {
        wp_enqueue_media();
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            const button = document.getElementById('upload_whatsapp_image');
            const input = document.getElementById('whatsapp_image');
            const preview = document.getElementById('whatsapp_image_preview');

            button.addEventListener('click', function (e) {
                e.preventDefault();
                const custom_uploader = wp.media({
                    title: 'Select Image',
                    button: {
                        text: 'Use this image'
                    },
                    multiple: false
                });

                custom_uploader.on('select', function () {
                    const attachment = custom_uploader.state().get('selection').first().toJSON();
                    input.value = attachment.url;
                    preview.src = attachment.url;
                });

                custom_uploader.open();
            });
        });
        </script>
        <?php
    }
}
add_action('admin_footer', 'enqueue_wp_media_uploader');

function load_media_uploader_for_whatsapp($hook) {
    if ($hook !== 'toplevel_page_whatsapp-popup') return; // Update slug if yours is different
    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'load_media_uploader_for_whatsapp');


get_template_part('template-parts/whatsapp-popup');

add_theme_support('post-thumbnails'); // Globally enables featured images

add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('automatic-feed-links');
