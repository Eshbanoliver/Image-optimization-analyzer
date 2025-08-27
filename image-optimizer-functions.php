<?php
// Image Optimization Analyzer Functions

add_action('admin_menu', function() {
    add_menu_page('Image Optimizer', 'Image Optimizer', 'manage_options', 'image-optimizer', 'render_image_optimizer_page');
});

function render_image_optimizer_page() {
    echo '<div class="wrap"><h1>Image Optimization Analyzer</h1>';
    $images = get_posts(['post_type' => 'attachment', 'post_mime_type' => 'image', 'numberposts' => -1]);
    echo '<table class="widefat"><thead><tr><th>Image</th><th>Size (KB)</th><th>Format</th><th>WebP</th><th>Lazy Load</th><th>Actions</th></tr></thead><tbody>';
    foreach ($images as $image) {
        $path = get_attached_file($image->ID);
        $size = round(filesize($path) / 1024, 2);
        $format = pathinfo($path, PATHINFO_EXTENSION);
        $webp = ($format !== 'webp') ? 'Recommended' : 'OK';
        $lazy = 'Enabled by default (HTML attribute)';
        echo "<tr><td><img src='{$image->guid}' width='60'/></td><td>{$size}</td><td>{$format}</td><td>{$webp}</td><td>{$lazy}</td><td><button class='button'>Optimize</button></td></tr>";
    }
    echo '</tbody></table></div>';
}
?>
