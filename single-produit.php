<?php get_header(); ?>

<style>
.woocommerce div.product {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    align-items: flex-start;
}
.woocommerce div.product .woocommerce-product-gallery {
    flex: 1;
    max-width: 400px;
}
.woocommerce div.product .summary {
    flex: 1;
    max-width: 500px;
}
</style>

<?php
do_action('woocommerce_before_main_content');

while (have_posts()) :
    the_post();
    wc_get_template_part('content', 'single-product');
endwhile;

do_action('woocommerce_after_main_content');

get_footer();
?>
