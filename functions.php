// Removing tabs and display additional info
add_action( 'woocommerce_after_single_product_summary', 'removing_product_tabs', 2 );
function removing_product_tabs(){
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    add_action( 'woocommerce_after_single_product_summary', 'get_product_tab_templates_displayed', 10 );
}
function get_product_tab_templates_displayed() {
    echo '<div class="related"><h2 class="">Opis proizvoda</h2>';
    wc_get_template( 'single-product/tabs/description.php' );
    echo '<h2 class="">Specifikacija</h2>';
    wc_get_template( 'single-product/tabs/additional-information.php' );
    echo '<h2 class="">Ocene</h2>';
    comments_template();    
    echo '</div>';
}
