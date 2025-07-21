<?php
/**
 * Template personnalisé pour l’affichage d’un produit WooCommerce
 */

defined('ABSPATH') || exit;

global $product;

// Sécurité : s'assurer qu'on a un produit
if (!$product || !$product->is_visible()) {
    return;
}
?>

<style>
    .product-single-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 50px;
    }

    .product-single-image {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
    }

    .product-single-summary {
        flex: 1;
        min-width: 300px;
    }

    .product-single-summary h1 {
        font-size: 28px;
        margin-bottom: 15px;
    }

    .product-single-summary .price {
        font-size: 24px;
        color: #e96e00;
        margin-bottom: 20px;
    }

    .product-single-summary .woocommerce-product-details__short-description {
        margin-bottom: 20px;
    }
</style>

<div class="product-single-container">

    <div class="product-single-image">
        <?php
        /**
         * Affiche la galerie d’images du produit
         */
        do_action('woocommerce_before_single_product_summary');
        ?>
    </div>

    <div class="product-single-summary">
        <?php
        /**
         * Affiche le nom, le prix, la description courte, et le bouton ajouter au panier
         */
        do_action('woocommerce_single_product_summary');
        ?>
    </div>

</div>

<?php
/**
 * Affiche les onglets (description longue, avis, etc.)
 */
do_action('woocommerce_after_single_product_summary');
?>
