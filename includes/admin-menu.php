<?php
// Add a menu page in the WordPress admin
add_action( 'admin_menu', 'simple_mpdf_add_menu' );
function simple_mpdf_add_menu() {
    add_menu_page( 
        'HTML to PDF Converter', 
        'HTML to PDF', 
        'manage_options', 
        'simple-mpdf', 
        'simple_mpdf_menu_page', 
        'dashicons-media-document', 
        65
    );
}

// Render the admin menu page
function simple_mpdf_menu_page() {
    $current_url = esc_url( home_url() ); // Default to home page
    ?>
    <div style="display: flex; justify-content: center; align-items: center; height: 80vh;">
    <div class="wrap" style="border: 1px solid #ddd; padding: 20px; width: 50%; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h1>HTML to PDF Converter</h1>
        <h3>Generate a PDF for the current page or any URL.</h3>
        <form method="get" action="<?php echo esc_url( site_url() ); ?>">
            <input type="hidden" name="generate_mpdf" value="true">
            <input type="url" name="pdf_url" placeholder="Enter URL to convert to PDF" required style=" width: 70%;">
            <button type="submit" class="button button-primary">Generate PDF</button>
        </form>
        <h1>Using Short Code</h1>
        <h3>Also make PDF button in any post or page using short code <Strong>[pdf_six]</Strong></h3>
    </div>
    </div>
    <?php
}
?>