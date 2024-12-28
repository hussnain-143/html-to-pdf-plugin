<?php
require_once __DIR__ . '/../vendor/autoload.php';

add_action('init', 'mpdf_generate_pdf');
function mpdf_generate_pdf() {
    if (isset($_GET['generate_mpdf']) && $_GET['generate_mpdf'] === 'true') {
        ob_start();
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
        ini_set('display_errors', 0);

        $url = isset($_GET['url']) ? esc_url_raw($_GET['url']) : home_url();

        // Fetch the HTML content of the URL
        $response = wp_remote_get($url);
        if (is_wp_error($response)) {
            ob_end_clean();
            wp_die('Failed to fetch content. Please try again later.');
        }

        $html_content = wp_remote_retrieve_body($response);

        // Clean and sanitize HTML
        if (extension_loaded('tidy')) {
            $tidy = new tidy();
            $html_content = $tidy->repairString($html_content, [
                'output-xhtml' => true,
                'show-body-only' => true,
            ]);
        }
        $html_content = str_replace('src="/', 'src="' . site_url('/'), $html_content);
        $html_content = str_replace('href="/', 'href="' . site_url('/'), $html_content);

        try {
            // Initialize mPDF
            $mpdf = new \Mpdf\Mpdf([
                'tempDir' => __DIR__ . '/../tmp',
                'setAutoTopMargin' => 'stretch',
                'setAutoBottomMargin' => 'stretch',
                'allow_output_buffering' => true,
            ]);

            // Write HTML content to the PDF
            $mpdf->WriteHTML($html_content);

            // Output the PDF
            ob_end_clean(); // Ensure no previous output is sent
            $mpdf->Output('generated.pdf', 'D');
            exit;

        } catch (\Mpdf\MpdfException $e) {
            ob_end_clean();
            wp_die('An error occurred while generating the PDF: ' . $e->getMessage());
        }
    }
}
?>
