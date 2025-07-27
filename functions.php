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

add_action('admin_menu', 'custom_form_submission_menu');

function custom_form_submission_menu() {
    add_menu_page(
        'Form Submition',         // Page title
        'Form Submition',         // Menu title
        'manage_options',         // Capability
        'form-submition',         // Menu slug
        'form_submission_dashboard', // Callback
        'dashicons-feedback',     // Icon
        25                        // Position
    );

    add_submenu_page(
        'form-submition',
        'Contact Submissions',
        'Contact',
        'manage_options',
        'form-contact-submissions',
        'render_contact_submissions'
    );

    add_submenu_page(
        'form-submition',
        'Quotation Submissions',
        'Quotation',
        'manage_options',
        'form-quotation-submissions',
        'render_quotation_submissions'
    );
}

register_activation_hook(__FILE__, 'create_submission_tables');

function form_submission_dashboard() {
    echo '<div class="wrap">';
    echo '<h1>Form Submission Dashboard</h1>';
    echo '<p>Select a submenu from the left (Contact or Quotation).</p>';
    echo '</div>';
}

function render_contact_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_contact';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");

    echo '<div class="wrap"><h1>Contact Form Submissions</h1><table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Subject</th><th>Message</th><th>Date</th><th>Action</th></tr></thead><tbody>';

    if ($results) {
        foreach ($results as $row) {
            $delete_url = admin_url('admin.php?page=form-contact-submissions&delete_contact=' . $row->id);
            echo "<tr>            
                <td>{$row->name}</td>
                <td>{$row->email}</td>
                <td>{$row->subject}</td>
                <td>{$row->message}</td>
                <td>{$row->submitted_at}</td>
                <td><a href='{$delete_url}' class='button-link-delete' onclick='return confirm(\"Are you sure you want to delete this entry?\")'>Delete</a></td>
            </tr>";
        }
    } else {
        echo '<tr><td colspan="6">No contact submissions found.</td></tr>';
    }

    echo '</tbody></table></div>';
}

function render_quotation_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'form_quotation';
    $rows = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

    echo '<div class="wrap"><h1>Quotation Submissions</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>Name</th><th>Email</th><th>Company</th><th>Product</th><th>Quantity</th><th>Message</th><th>Date</th><th>Action</th></tr></thead><tbody>';

    if ($rows) {
        foreach ($rows as $row) {
            $delete_url = admin_url('admin.php?page=form-quotation-submissions&delete_quotation=' . $row->id);
            echo '<tr>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->company) . '</td>';
            echo '<td>' . esc_html($row->product_name) . '</td>';
            echo '<td>' . esc_html($row->quantity) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . esc_html($row->created_at) . '</td>';
            echo "<td><a href='{$delete_url}' class='button-link-delete' onclick='return confirm(\"Are you sure you want to delete this entry?\")'>Delete</a></td>";
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="8">No quotations found.</td></tr>';
    }

    echo '</tbody></table></div>';
}

// Handle delete requests
function handle_form_deletion() {
    global $wpdb;

    if (isset($_GET['delete_contact']) && current_user_can('manage_options')) {
        $id = intval($_GET['delete_contact']);
        $wpdb->delete($wpdb->prefix . 'form_contact', ['id' => $id]);
        wp_redirect(admin_url('admin.php?page=form-contact-submissions'));
        exit;
    }

    if (isset($_GET['delete_quotation']) && current_user_can('manage_options')) {
        $id = intval($_GET['delete_quotation']);
        $wpdb->delete($wpdb->prefix . 'form_quotation', ['id' => $id]);
        wp_redirect(admin_url('admin.php?page=form-quotation-submissions'));
        exit;
    }
}
add_action('admin_init', 'handle_form_deletion');

add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');

function handle_contact_form_submission() {
    if (
        !isset($_POST['name'], $_POST['email'], $_POST['message']) ||
        !is_email($_POST['email'])
    ) {
        wp_die('Invalid form data');
    }

    global $wpdb;

    $wpdb->insert(
        $wpdb->prefix . 'form_contact',
        [
            'name'    => sanitize_text_field($_POST['name']),
            'email'   => sanitize_email($_POST['email']),
            'subject' => sanitize_text_field($_POST['subject']),
            'message' => sanitize_textarea_field($_POST['message']),
        ]
    );

    wp_redirect(home_url('/')); // Optional success page
    exit;
}

function handle_quotation_form_submission() {
    if (
        $_SERVER['REQUEST_METHOD'] === 'POST' &&
        isset($_POST['form_type']) &&
        $_POST['form_type'] === 'quotation' &&
        isset($_POST['submit_quote'])
    ) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'form_quotation';

        $name         = sanitize_text_field($_POST['name']);
        $email        = sanitize_email($_POST['email']);
        $company      = sanitize_text_field($_POST['company']);
        $quantity     = intval($_POST['quantity']);
        $product_name = sanitize_text_field($_POST['product_name']);
        $message      = sanitize_textarea_field($_POST['message']);

        $wpdb->insert(
            $table_name,
            [
                'name'         => $name,
                'email'        => $email,
                'company'      => $company,
                'quantity'     => $quantity,
                'product_name' => $product_name,
                'message'      => $message,
            ]
        );
    }
}

add_action('init', 'handle_quotation_form_submission');

get_template_part('template-parts/whatsapp-popup');

add_theme_support('post-thumbnails'); // Globally enables featured images

add_theme_support('title-tag');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('automatic-feed-links');
