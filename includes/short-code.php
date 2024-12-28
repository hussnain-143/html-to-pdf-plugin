<?php

// Render the "Generate PDF" button via shortcode
add_shortcode( 'pdf_six', 'pdf_six_generate_button' );
function pdf_six_generate_button() {
    $current_url = esc_url( get_permalink() );
    $button_text = 'Download PDF';

    return '<a href="' . esc_url( site_url( '?generate_mpdf=true&url=' . urlencode( $current_url ) ) ) . '" target="_blank" style="padding: 10px 20px; background-color: #0073aa; color: #fff; text-decoration: none; border-radius: 5px;">' . esc_html( $button_text ) . '</a>';
}

?>