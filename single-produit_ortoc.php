<?php
// single-produit_ortoc.php
get_header();
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

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .product-detail-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 20px;
        background: var(--white);
    }

    .product-breadcrumb {
        margin-bottom: 30px;
        font-size: 14px;
        color: var(--text-dark);
    }

    .product-breadcrumb a {
        color: var(--primary-blue);
        text-decoration: none;
    }

    .product-breadcrumb a:hover {
        text-decoration: underline;
    }

    .product-main {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin-bottom: 60px;
    }

    .product-gallery {
        position: relative;
    }

    .product-image-main {
        width: 100%;
        height: 500px;
        border-radius: 15px;
        overflow: hidden;
        background: var(--light-gray);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .product-image-main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .no-image-placeholder {
        color: var(--text-dark);
        font-size: 18px;
        text-align: center;
    }

    .product-info-detail {
        padding: 20px 0;
    }

    .product-title-detail {
        font-size: 36px;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 20px;
        line-height: 1.2;
        font-family: Fredoka, sans-serif;
    }

    .product-price-detail {
        margin-bottom: 30px;
    }

    .current-price-detail {
        font-size: 32px;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 10px;
    }

    .original-price-detail {
        font-size: 20px;
        color: #999;
        text-decoration: line-through;
        margin-bottom: 10px;
    }

    .price-promotion-detail {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .promo-price-detail {
        font-size: 32px;
        font-weight: 700;
        color: var(--accent-yellow);
    }

    .promo-savings-detail {
        font-size: 16px;
        font-weight: 600;
        color: #e74c3c;
        background: rgba(231, 76, 60, 0.1);
        padding: 8px 16px;
        border-radius: 20px;
        display: inline-block;
        width: fit-content;
    }

    .promotion-badge-detail {
        display: inline-block;
        background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
        color: var(--primary-blue);
        padding: 8px 16px;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
    }

    .product-description-detail {
        margin-bottom: 40px;
        line-height: 1.8;
        color: var(--text-dark);
        font-size: 16px;
    }

    .product-actions-detail {
        display: flex;
        gap: 20px;
        margin-bottom: 40px;
    }

    .btn-add-cart-detail {
        background: linear-gradient(135deg, var(--accent-yellow), #FFB800);
        color: #0c4178 !important;
        border: none;
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
        flex: 1;
        justify-content: center;
        text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }

    .btn-add-cart-detail:hover {
        background: linear-gradient(135deg, #FFB800, var(--accent-yellow));
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(255, 215, 0, 0.4);
    }

    .btn-back-catalog {
        background: transparent;
        color: var(--primary-blue);
        border: 2px solid var(--primary-blue);
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 10px;
        justify-content: center;
    }

    .btn-back-catalog:hover {
        background: var(--primary-blue);
        color: var(--white);
        text-decoration: none;
    }

    /* Bouton flottant panier */
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
        background: var(--danger-red);
        color: var(--white);
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

    @media (max-width: 768px) {
        .floating-cart-btn {
            bottom: 70px;
            right: 20px;
            width: 50px;
            height: 50px;
            font-size: 18px;
        }
    }

    .product-details-section {
        background: var(--light-gray);
        padding: 40px;
        border-radius: 15px;
        margin-top: 40px;
    }

    .details-title {
        font-size: 24px;
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 20px;
        position: relative;
        padding-bottom: 10px;
    }

    .details-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--accent-yellow), var(--orange));
    }

    .product-specs {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .spec-item {
        background: var(--white);
        padding: 20px;
    border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .spec-label {
        font-weight: 600;
        color: var(--primary-blue);
        margin-bottom: 8px;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .spec-value {
        color: var(--text-dark);
        font-size: 16px;
    }

    .stock-status {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .stock-in {
        background: #e8f5e8;
        color: #2d5a2d;
    }

    .stock-low {
        background: #fff3cd;
        color: #856404;
    }

    .stock-out {
        background: #f8d7da;
        color: #721c24;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .product-main {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .product-image-main {
            height: 300px;
        }

        .product-title-detail {
            font-size: 28px;
        }

        .current-price-detail, .promo-price-detail {
            font-size: 24px;
        }

        .product-actions-detail {
            flex-direction: column;
        }

        .product-details-section {
            padding: 20px;
        }
  }
</style>

<?php
// Vérifier si nous sommes sur un post de type produit_ortoc
if (have_posts()) : while (have_posts()) : the_post();
    
    // Récupérer les champs ACF
    $img_main = get_field('image_principale');
    $img_main_url = is_array($img_main) ? $img_main['url'] : $img_main;
    
    $prix_normal = get_field('prix_normal');
    $prix_promotionnel = get_field('prix_promotionnel');
    $description_produit = get_field('description_produit');
    $quantite_stock = get_field('quantite_stock');
    
    // Vérifier si le champ quantite_stock existe dans ACF
    $field_exists = function_exists('get_field_object') ? get_field_object('quantite_stock') : false;
    
    $is_promotion = $prix_promotionnel && $prix_promotionnel < $prix_normal;
    
    // Déterminer le statut du stock (seulement si le champ existe)
    $stock_status = 'Disponible';
    $stock_class = 'stock-in';
    
    // Vérifier si le champ quantite_stock existe dans ACF et a une valeur
    if ($field_exists && $quantite_stock && $quantite_stock !== '' && $quantite_stock !== null) {
        if ($quantite_stock > 10) {
            $stock_status = 'En Stock';
            $stock_class = 'stock-in';
        } elseif ($quantite_stock > 0) {
            $stock_status = 'Stock Faible';
            $stock_class = 'stock-low';
        } else {
            $stock_status = 'Rupture de Stock';
            $stock_class = 'stock-out';
        }
    }
?>

<div class="product-detail-container">
    <!-- Breadcrumb -->
    <div class="product-breadcrumb">
        <a href="<?php echo home_url(); ?>">Accueil</a> > 
        <a href="<?php echo home_url('/page-boutique-ortoc-test'); ?>">Boutique</a> > 
        <?php the_title(); ?>
    </div>

    <!-- Main Product Section -->
    <div class="product-main">
        <!-- Product Gallery -->
        <div class="product-gallery">
            <div class="product-image-main">
                <?php 
                if ($img_main_url) {
                    echo '<img src="' . esc_url($img_main_url) . '" alt="' . esc_attr(get_the_title()) . '" class="product-img-main">';
                } else {
                    // Fallback sur l'ancien nom du champ
                    $img_alt = get_field('image_princiaple');
                    $img_alt_url = is_array($img_alt) ? $img_alt['url'] : $img_alt;
                    
                    if ($img_alt_url) {
                        echo '<img src="' . esc_url($img_alt_url) . '" alt="' . esc_attr(get_the_title()) . '" class="product-img-main">';
                    } else {
                        echo '<div class="no-image-placeholder">Image non disponible</div>';
                    }
                }
                ?>
            </div>
        </div>

        <!-- Product Info -->
        <div class="product-info-detail">
            <h1 class="product-title-detail"><?php the_title(); ?></h1>
            
            <?php if ($is_promotion) : ?>
                <div class="promotion-badge-detail">PROMOTION</div>
            <?php endif; ?>
            
            <div class="product-price-detail">
                <?php if ($is_promotion) : ?>
                    <div class="price-promotion-detail">
                        <div class="original-price-detail"><?php echo number_format($prix_normal); ?> FCFA</div>
                        <div class="promo-price-detail"><?php echo number_format($prix_promotionnel); ?> FCFA</div>
                        <div class="promo-savings-detail">Économisez <?php echo number_format($prix_normal - $prix_promotionnel); ?> FCFA</div>
                    </div>
                <?php else : ?>
                    <div class="current-price-detail"><?php echo number_format($prix_normal); ?> FCFA</div>
                <?php endif; ?>
  </div>

            <?php if ($description_produit) : ?>
                <div class="product-description-detail">
                    <?php echo wpautop($description_produit); ?>
                </div>
            <?php endif; ?>

            <div class="product-actions-detail">
                <button class="btn-add-cart-detail" 
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
                    <i class="fas fa-shopping-cart"></i>
                    Ajouter au Panier
                </button>
                <a href="<?php echo home_url('/page-boutique-ortoc-test'); ?>" class="btn-back-catalog">
                    <i class="fas fa-arrow-left"></i>
                    Retour Catalogue
                </a>
            </div>
        </div>
  </div>

    <!-- Product Details Section -->
    <div class="product-details-section">
        <h2 class="details-title">Détails du Produit</h2>
        <div class="product-specs">
            <div class="spec-item">
                <div class="spec-label">Référence</div>
                <div class="spec-value">#<?php echo get_the_ID(); ?></div>
            </div>
            <div class="spec-item">
                <div class="spec-label">Catégorie</div>
                <div class="spec-value">
                    <?php 
                    $categories = get_the_terms(get_the_ID(), 'categorie_produit_ortoc');
                    if ($categories && !is_wp_error($categories)) {
                        $category_names = array();
                        foreach ($categories as $category) {
                            $category_names[] = $category->name;
                        }
                        echo implode(', ', $category_names);
                    } else {
                        echo 'Produit Artisanal';
                    }
                    ?>
                </div>
            </div>
            <div class="spec-item">
                <div class="spec-label">Disponibilité</div>
                <div class="spec-value">
                    <span class="stock-status <?php echo $stock_class; ?>"><?php echo $stock_status; ?></span>
                </div>
            </div>
            <?php if ($quantite_stock && $quantite_stock !== '' && $quantite_stock !== null && $quantite_stock > 0) : ?>
            <div class="spec-item">
                <div class="spec-label">Quantité en Stock</div>
                <div class="spec-value"><?php echo number_format($quantite_stock); ?> unités</div>
            </div>
            <?php endif; ?>
            <?php if ($is_promotion) : ?>
            <div class="spec-item">
                <div class="spec-label">Économies</div>
                <div class="spec-value">-<?php echo number_format($prix_normal - $prix_promotionnel); ?> FCFA</div>
            </div>
            <?php endif; ?>
        </div>
  </div>
</div>

    <!-- Bouton flottant panier -->
    <a href="<?php echo home_url('/page-cart'); ?>" class="floating-cart-btn" id="floating-cart-btn">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-badge" id="cart-badge" style="display: none;">0</span>
    </a>

<?php 
endwhile; 
else : 
?>
    <div class="product-detail-container">
        <p>Produit non trouvé.</p>
    </div>
<?php endif; ?>

<script>
// Gestion simple du panier avec localStorage
document.addEventListener('DOMContentLoaded', function() {
    // Écouter les clics sur les boutons "Ajouter au Panier"
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('btn-add-cart-detail')) {
            e.preventDefault();
            
            const button = e.target;
            const productId = button.dataset.productId;
            const productName = button.dataset.productName;
            const productPrice = parseInt(button.dataset.productPrice);
            const productPromo = button.dataset.productPromo ? parseInt(button.dataset.productPromo) : null;
            const productImage = button.dataset.productImage;
            const productCategory = button.dataset.productCategory;
            
            // Ajouter au panier
            addToCart(productId, productName, productPrice, productImage, productCategory, productPromo);
            
            // Feedback visuel
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
    
    // Mettre à jour le badge au chargement de la page
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
