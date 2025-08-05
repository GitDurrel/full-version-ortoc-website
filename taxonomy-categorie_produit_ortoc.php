<?php
get_header();
$term = get_queried_object();
$parent = ($term->parent) ? get_term($term->parent, $term->taxonomy) : null;
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
:root {
    --primary-color: #0C4178;
    --accent-color: #FFD700;
    --text-color: #333;
    --background-color: #fff;
    --light-grey: #f5f5f5;
    --border-color: #ddd;
    --primary-blue: #0C4178;
    --dark-blue: #0c4178;
    --gold: #FFD700;
    --accent-yellow: #FFD700;
    --orange: #FFA500;
    --white: #ffffff;
    --light-gray: #f9f9f9;
    --text-dark: #333333;
}
body {
    background: #f5fafd;
}
.breadcrumb {
    max-width: 1200px;
    margin: 30px auto 0 auto;
    padding: 0 20px 10px 20px;
    font-size: 15px;
    color: var(--primary-blue);
    display: flex;
    align-items: center;
    gap: 8px;
    flex-wrap: wrap;
}
.breadcrumb a {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
}
.breadcrumb a:hover {
    color: var(--accent-yellow);
}
.breadcrumb .breadcrumb-sep {
    color: #aaa;
    font-size: 13px;
}
.taxonomy-header {
    max-width: 1200px;
    margin: 40px auto 0 auto;
    padding: 30px 20px 10px 20px;
    background: var(--white);
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
    text-align: center;
}
.taxonomy-title {
    font-size: 2.2rem;
    color: var(--primary-blue);
    font-family: 'Fredoka', sans-serif;
    font-weight: 800;
    margin-bottom: 10px;
}
.taxonomy-desc {
    color: #444;
    font-size: 1.1rem;
    margin-bottom: 10px;
    line-height: 1.6;
}
.taxonomy-back {
    display: inline-block;
    margin: 18px 0 0 0;
    background: var(--accent-yellow);
    color: var(--primary-blue);
    border: none;
    border-radius: 8px;
    padding: 10px 22px;
    font-weight: 700;
    font-size: 15px;
    text-decoration: none;
    transition: all 0.2s;
}
.taxonomy-back:hover {
    background: var(--primary-blue);
    color: var(--white);
}
.taxonomy-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 2rem;
    max-width: 1400px;
    margin: 40px auto 0 auto;
    padding: 0 20px 40px 20px;
}
.product-card {
    background: var(--white);
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
    display: flex;
    flex-direction: column;
}
.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}
.product-image {
    position: relative;
    height: 250px;
    overflow: hidden;
    background: var(--light-gray);
}
.product-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}
.product-card:hover .product-img {
    transform: scale(1.05);
}
.no-image {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: var(--text-dark);
    font-size: 14px;
    background: var(--light-gray);
}
.promotion-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
    color: var(--primary-blue);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    box-shadow: 0 2px 8px rgba(255, 215, 0, 0.4);
}
.product-info {
    padding: 20px;
    flex: 1 1 auto;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.product-title {
    margin-bottom: 12px;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.4;
    color: var(--text-dark);
    height: 44px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.product-title a {
    color: var(--text-dark);
    text-decoration: none;
    transition: color 0.3s ease;
}
.product-title a:hover {
    color: var(--primary-blue);
}
.product-price {
    margin-bottom: 16px;
    display: flex;
    flex-direction: column;
    gap: 4px;
}
.current-price {
    font-size: 20px;
    font-weight: 700;
    color: var(--primary-blue);
}
.original-price {
    font-size: 14px;
    color: #999;
    text-decoration: line-through;
    font-weight: 400;
}
.promo-price {
    font-size: 20px;
    font-weight: 700;
    color: var(--accent-yellow);
}
.product-actions {
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.btn-details {
    background: transparent;
    color: var(--primary-blue);
    border: 2px solid var(--primary-blue);
    padding: 10px 16px;
    border-radius: 8px;
    text-decoration: none;
    text-align: center;
    font-weight: 600;
    font-size: 14px;
    transition: all 0.3s ease;
    display: inline-block;
}
.btn-details:hover {
    background: var(--primary-blue);
    color: var(--white);
    text-decoration: none;
}
.btn-add-cart {
    background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
    color: var(--primary-blue);
    border: none;
    padding: 12px 16px;
    border-radius: 8px;
    font-weight: 700;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    text-shadow: 0 1px 2px rgba(0,0,0,0.1);
}
.btn-add-cart:hover {
    background: linear-gradient(135deg, #FFB800, var(--accent-yellow));
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(255, 215, 0, 0.4);
}
.btn-add-cart i {
    font-size: 16px;
}
.floating-cart-btn {
    position: fixed;
    bottom: 80px;
    right: 30px;
    background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
    color: var(--primary-blue);
    border: none;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 4px 20px rgba(255, 215, 0, 0.4);
    transition: all 0.3s ease;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    text-decoration: none;
}
.floating-cart-btn:hover {
    background: linear-gradient(135deg, #FFB800, var(--accent-yellow));
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 6px 25px rgba(255, 215, 0, 0.6);
    text-decoration: none;
    color: var(--primary-blue);
}
.cart-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #0c4178;
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    font-size: 12px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px solid var(--white);
}
.empty-category {
    grid-column: 1 / -1;
    text-align: center;
    color: var(--text-dark);
    font-size: 18px;
    padding: 60px 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.empty-category .empty-icon {
    font-size: 60px;
    color: var(--primary-blue);
    margin-bottom: 18px;
    opacity: 0.3;
}
@media (max-width: 768px) {
    .taxonomy-header {
        margin: 20px 0 0 0;
        padding: 18px 5px 5px 5px;
    }
    .taxonomy-title {
        font-size: 1.3rem;
    }
    .taxonomy-products-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
        padding: 0 5px 30px 5px;
    }
    .floating-cart-btn {
        bottom: 70px;
        right: 20px;
        width: 50px;
        height: 50px;
        font-size: 18px;
    }
}
</style>
<div class="breadcrumb">
    <a href="<?php echo home_url(); ?>">Accueil</a>
    <span class="breadcrumb-sep">&gt;</span>
    <a href="<?php echo home_url('/page-boutique-ortoc-test'); ?>">Boutique</a>
    <?php if ($parent) : ?>
        <span class="breadcrumb-sep">&gt;</span>
        <a href="<?php echo get_term_link($parent); ?>"><?php echo esc_html($parent->name); ?></a>
    <?php endif; ?>
    <span class="breadcrumb-sep">&gt;</span>
    <span><?php echo esc_html($term->name); ?></span>
</div>
<div class="taxonomy-header">
    <h1 class="taxonomy-title">
        <?php if ($parent) : ?>
            <span style="font-size:1.1rem;font-weight:400;opacity:0.7;display:block;margin-bottom:2px;">
                <?php echo esc_html($parent->name); ?>
            </span>
        <?php endif; ?>
        <?php echo esc_html($term->name); ?>
    </h1>
    <?php if ($term->description) : ?>
        <div class="taxonomy-desc"><?php echo esc_html($term->description); ?></div>
    <?php endif; ?>
    <a href="<?php echo home_url('/page-boutique-ortoc-test'); ?>" class="taxonomy-back"><i class="fas fa-arrow-left"></i> Retour à la boutique</a>
</div>
<div class="taxonomy-products-grid">
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $img_main = get_field('image_principale');
        $img_main_url = is_array($img_main) ? $img_main['url'] : $img_main;
        $img_alt = get_field('image_princiaple');
        $img_alt_url = is_array($img_alt) ? $img_alt['url'] : $img_alt;
        $prix_normal = get_field('prix_normal');
        $prix_promotionnel = get_field('prix_promotionnel');
        $is_promotion = $prix_promotionnel && $prix_promotionnel < $prix_normal;
?>
    <div class="product-card">
        <div class="product-image">
      <a href="<?php the_permalink(); ?>">
                <?php if ($img_main_url) : ?>
                    <img src="<?php echo esc_url($img_main_url); ?>" alt="<?php the_title(); ?>" class="product-img">
                <?php elseif ($img_alt_url) : ?>
                    <img src="<?php echo esc_url($img_alt_url); ?>" alt="<?php the_title(); ?>" class="product-img">
                <?php else : ?>
                    <div class="no-image">Image non disponible</div>
                <?php endif; ?>
            </a>
            <?php if ($is_promotion) : ?>
                <div class="promotion-badge">PROMO</div>
            <?php endif; ?>
        </div>
        <div class="product-info">
            <h3 class="product-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="product-price">
                <?php if ($is_promotion) : ?>
                    <span class="original-price"><?php echo number_format($prix_normal); ?> FCFA</span>
                    <span class="promo-price"><?php echo number_format($prix_promotionnel); ?> FCFA</span>
                <?php else : ?>
                    <span class="current-price"><?php echo number_format($prix_normal); ?> FCFA</span>
                <?php endif; ?>
            </div>
            <div class="product-actions">
                <a href="<?php the_permalink(); ?>" class="btn-details">Détails Produit</a>
                <button class="btn-add-cart" 
                    data-product-id="<?php echo get_the_ID(); ?>"
                    data-product-name="<?php echo esc_attr(get_the_title()); ?>"
                    data-product-price="<?php echo $prix_normal; ?>"
                    data-product-promo="<?php echo $prix_promotionnel ? $prix_promotionnel : ''; ?>"
                    data-product-image="<?php 
                        if ($img_main_url) {
                            echo esc_url($img_main_url);
                        } elseif ($img_alt_url) {
                            echo esc_url($img_alt_url);
                        } else {
                            echo '';
                        }
                    ?>"
                    data-product-category="<?php 
                        $categories = get_the_terms(get_the_ID(), 'categorie_produit_ortoc');
                        if ($categories && !is_wp_error($categories)) {
                            $category_names = array();
                            foreach ($categories as $category) {
                                $category_names[] = $category->name;
                            }
                            echo esc_attr(implode(', ', $category_names));
                        } else {
                            echo 'Produit Artisanal';
                        }
                    ?>">
                    <i class="fas fa-shopping-cart"></i> Ajouter au Panier
                </button>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <div class="empty-category">
        <div class="empty-icon"><i class="fas fa-box-open"></i></div>
        <div>Aucun produit dans cette catégorie.</div>
    </div>
<?php endif; ?>
</div>
<!-- Bouton flottant panier -->
<a href="<?php echo home_url('/page-cart'); ?>" class="floating-cart-btn" id="floating-cart-btn">
    <i class="fas fa-shopping-cart"></i>
    <span class="cart-badge" id="cart-badge" style="display: none;">0</span>
</a>
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-add-cart')) {
            e.preventDefault();
            const button = e.target;
            const productId = button.dataset.productId;
            const productName = button.dataset.productName;
            const productPrice = parseInt(button.dataset.productPrice);
            const productPromo = button.dataset.productPromo ? parseInt(button.dataset.productPromo) : null;
            const productImage = button.dataset.productImage;
            const productCategory = button.dataset.productCategory;
            addToCart(productId, productName, productPrice, productImage, productCategory, productPromo);
            showNotification('Produit ajouté au panier !');
        }
    });
    function addToCart(id, name, price, image, category, promoPrice) {
        let cart = JSON.parse(localStorage.getItem('ortoc_cart') || '[]');
        const existingItem = cart.find(item => item.id === id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id: id,
                name: name,
                price: price,
                promoPrice: promoPrice,
                image: image,
                category: category,
                quantity: 1
            });
        }
        localStorage.setItem('ortoc_cart', JSON.stringify(cart));
        updateCartBadge();
    }
    function updateCartBadge() {
        const cart = JSON.parse(localStorage.getItem('ortoc_cart') || '[]');
        const badge = document.getElementById('cart-badge');
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        if (totalItems > 0) {
            badge.textContent = totalItems;
            badge.style.display = 'flex';
        } else {
            badge.style.display = 'none';
        }
    }
    updateCartBadge();
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: #28a745;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        notification.textContent = message;
        document.body.appendChild(notification);
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }
});
</script>
<?php get_footer(); ?>
