<?php

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
    --card-padding: 10px;
    --sidebar-width: 250px;
    
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

/* ===== SECTION II - Description ===== */
.festival-description, .shop-container {
    position: relative;
    padding: 60px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    z-index: 1;
}

/*.festival-description,.shop-container::before {*/
/*    content: '';*/
/*    position: absolute;*/
/*    inset: 0;*/
/*    background-color: rgba(255, 255, 255, 0.2);*/
/*    z-index: -1;*/
/*}*/

.container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
}

.section-title {
    text-align: center;
    font-size: 61px;
    font-weight: 400;
    font-family: Fredoka;
    text-transform: normal;
    margin-bottom: 30px; /* Réduit de 50px à 30px */
    color: black;
    position: relative;
    line-height: 61px;
}
.title_bold{
    position: relative;
    display: inline-block;
    font-weight: 700 !important;
}

.title_bold:after{
    content: "";
    height: 28px;
    background: linear-gradient(90deg, #0c4178 0%, #0c5a9d 100%);
    display: block;
    margin: -20px -20px 0;
}

.text_outline_white {
    text-shadow: 
        -1px -1px 0 #fff,
         1px -1px 0 #fff,
        -1px  1px 0 #fff,
         1px  1px 0 #fff;
}


.description-columns {
    display: flex;
    gap: 40px;
}

.description-column {
    flex: 1;
    background-color: var(--white);
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: justify;
}

.description-column h3 {
    color: var(--primary-blue);
    margin-bottom: 20px;
    font-size: 1.5rem;
    position: relative;
    padding-bottom: 10px;
}

.description-column h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: linear-gradient(90deg, var(--gold), var(--orange));
}


.hero-section {
    position: relative;
    height: 100vh; /* Adjust as needed */
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-03-a-16.12.06_a63fba05.jpg') no-repeat center center/cover;
    color: white;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Dark overlay */
}

.hero-content {
    position: relative;
    z-index: 1;
}

.hero-content h1 {
    font-family: Fredoka;
    font-weight: 700;
    font-size: 61px;
    line-height: 61px;
    margin-bottom: 1rem;
}

.section-title {
    text-align: center;
    font-size: 61px;
    font-weight: 400;
    font-family: Fredoka;
    text-transform: normal;
    margin-bottom: 30px;
    color: black;
    position: relative;
    line-height: 61px;
}

.title_bold {
    position: relative;
    display: inline-block;
    font-weight: 700 !important;
}




/* ===== SECTION IV - Catalogue Produits ===== */
.shop-container {
    padding: 60px 20px;
    background-color: var(--light-gray);
}

.shop-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    max-width: 1400px;
    margin: 50px auto;
  }

  .product-card {
    background: var(--white);
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 1px solid var(--border-color);
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

.price-promotion {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.promo-price {
    font-size: 20px;
    font-weight: 700;
    color: var(--accent-yellow);
}

.promo-savings {
    font-size: 12px;
    font-weight: 600;
    color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
    padding: 2px 8px;
    border-radius: 12px;
    display: inline-block;
    width: fit-content;
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
    color: #0c4178 !important;
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

    .no-products {
        grid-column: 1 / -1;
        text-align: center;
        padding: 60px 20px;
        color: var(--text-dark);
        font-size: 18px;
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

    @media (max-width: 768px) {
        .floating-cart-btn {
            bottom: 70px;
            right: 20px;
            width: 50px;
            height: 50px;
            font-size: 18px;
        }
    }

/* Responsive Design */
@media (max-width: 1024px) {
    .shop-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }
}

@media (max-width: 768px) {
    .shop-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .product-image {
        height: 200px;
    }
    
    .product-info {
        padding: 15px;
    }
    
    .product-title {
        font-size: 14px;
        height: 40px;
    }
    
    .current-price, .promo-price {
        font-size: 18px;
    }
    
    .btn-details, .btn-add-cart {
        padding: 10px 12px;
        font-size: 13px;
    }
  }
</style>

    <!-- SECTION I - Banner  -->
    <div class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Catalogue de Produits Artisanaux</h1>
            <p>Découvrez des produits uniques et faits main</p>
        </div>
    </div>
    
    
    <!-- SECTION II - Descriptions (FR/EN) -->
<section class="festival-description">
    <div class="container">
        <h2 class="section-title">Notre <br> <span class="title_bold text_outline_white">Boutique</span></h2>
        
        <div class="description-columns">
            <div class="description-column">
                <h3></h3>
                <p>Bienvenue dans notre catalogue de trésors artisanaux.<br>Chaque création que vous découvrirez ici est le fruit d'un travail minutieux, d'un héritage culturel riche et d'un savoir-faire transmis de génération en génération.<br>Explorez nos différentes collections, laissez-vous séduire par l'authenticité de nos produits, et trouvez la pièce unique qui racontera votre histoire avec élégance.</p>
          
            </div>
            
            <div class="description-column">
                <h3></h3>
               <p>Welcome to our catalog of handcrafted treasures.<br>Each item you'll find here is the result of meticulous work, rich cultural heritage, and craftsmanship passed down through generations.<br>Browse through our collections, be inspired by the authenticity of our creations, and find the unique piece that will tell your story with elegance.</p>
            </div>
        </div>
    </div>
</section>

    
    
    
    
    <!-- SECTION IV - Catalogue Produits-->
    <div class="shop-container">
        <h2 class="section-title">Catalogue <br> <span class="title_bold text_outline_white">Produits</span></h2>
    <div class="shop-grid">
            
            <!-- Categories produits -->
            <div class="product-categories-accordion" style="margin-bottom: 30px;">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'categorie_produit_ortoc',
                    'hide_empty' => false,
                    'parent' => 0
                ));
                $current_cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0;
                echo '<a href="' . esc_url(remove_query_arg('cat')) . '" class="cat-btn' . ($current_cat ? '' : ' active') . '">Tous</a>';
                if (!empty($terms) && !is_wp_error($terms)) :
                    foreach ($terms as $parent) :
                        $active_parent = ($current_cat === $parent->term_id) ? 'active' : '';
                        $children = get_terms(array(
                            'taxonomy' => 'categorie_produit_ortoc',
                            'hide_empty' => false,
                            'parent' => $parent->term_id
                        ));
                        $has_children = !empty($children) && !is_wp_error($children);
                        $is_open = ($current_cat && ($current_cat === $parent->term_id || in_array($current_cat, wp_list_pluck($children, 'term_id'))));
                        echo '<div class="cat-accordion-group">';
                        echo '<button class="cat-accordion-btn ' . $active_parent . '" type="button" aria-expanded="' . ($is_open ? 'true' : 'false') . '" onclick="toggleAccordion(this)">' . esc_html($parent->name);
                        if ($has_children) echo ' <span class="cat-arrow">▼</span>';
                        echo '</button>';
                        if ($has_children) {
                            echo '<div class="cat-accordion-panel" style="display:' . ($is_open ? 'block' : 'none') . ';">';
                            foreach ($children as $child) {
                                $active_child = ($current_cat === $child->term_id) ? 'active' : '';
                                echo '<a href="' . esc_url(add_query_arg('cat', $child->term_id)) . '" class="cat-btn cat-child ' . $active_child . '">' . esc_html($child->name) . '</a>';
                            }
                            echo '</div>';
                        }
                        echo '</div>';
                    endforeach;
                endif;
                ?>
            </div>
            <style>
            .product-categories-accordion {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .cat-accordion-group {
                width: 100%;
                margin-bottom: 8px;
            }
            .cat-accordion-btn {
                width: 100%;
                text-align: left;
                font-size: 17px;
                font-weight: 700;
                padding: 10px 22px;
                margin-bottom: 4px;
                background: #0c4178 !important;
                color: white !important;
                border: 2px solid #FFD700 !important;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                cursor: pointer;
                transition: background 0.2s, color 0.2s;
            }
            .cat-accordion-btn.active, .cat-accordion-btn:hover {
                background: #FFD700 !important;
                color: #0c4178 !important;
                border-color: #0c4178 !important;
            }
            .cat-arrow {
                font-size: 13px;
                margin-left: 10px;
                transition: transform 0.2s;
            }
            .cat-accordion-btn[aria-expanded="true"] .cat-arrow {
                transform: rotate(180deg);
            }
            .cat-accordion-panel {
                padding-left: 18px;
                margin-top: 4px;
                display: none;
                animation: fadeIn 0.3s;
            }
            .cat-btn.cat-child {
                background: var(--light-gray);
                color: var(--primary-blue);
                border: 2px solid var(--primary-blue);
                border-radius: 8px;
                padding: 7px 16px;
                font-weight: 600;
                font-size: 15px;
                text-decoration: none;
                transition: all 0.2s;
                margin-bottom: 4px;
                display: inline-block;
                margin-right: 8px;
                margin-top: 4px;
            }
            .cat-btn.cat-child.active, .cat-btn.cat-child:hover {
                background: var(--primary-blue);
                color: var(--white);
                border-color: var(--primary-blue);
            }
            .cat-btn.active, .cat-btn:hover {
                background: var(--primary-blue);
                color: var(--white);
                border-color: var(--primary-blue);
                text-decoration: none;
            }
            .cat-btn {
                margin-bottom: 4px;
            }
            @media (max-width: 900px) {
                .product-categories-accordion {
                    flex-direction: column;
                    align-items: stretch;
                }
                .cat-accordion-panel {
                    padding-left: 0;
                }
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            </style>
            <script>
            function toggleAccordion(btn) {
                var panel = btn.nextElementSibling;
                var expanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !expanded);
                if (panel) {
                    panel.style.display = expanded ? 'none' : 'block';
                }
            }
            </script>
            <!-- Fin Categories produits -->
            
            <?php
            // Query pour récupérer les produits du CPT produit-ortoc
            $args = array(
                'post_type' => 'produit_ortoc',
                'posts_per_page' => -1,
                'post_status' => 'publish'
            );
            
            $products_query = new WP_Query($args);
            
            if ($products_query->have_posts()) : 
                while ($products_query->have_posts()) : $products_query->the_post();
                    $image_principale = get_field('image_principale');
                    $prix_normal = get_field('prix_normal');
                    $prix_promotionnel = get_field('prix_promotionnel');
                    $prix_affiche = $prix_promotionnel ? $prix_promotionnel : $prix_normal;
                    $is_promotion = $prix_promotionnel && $prix_promotionnel < $prix_normal;
            ?>
    <div class="product-card">
                    <div class="product-image">
      <a href="<?php the_permalink(); ?>">
        <?php 
                            // Récupérer l'image comme dans page-chefferies-et-musees.php
                            $img_main = get_field('image_principale');
                            $img_main_url = is_array($img_main) ? $img_main['url'] : $img_main;
                            
                            if ($img_main_url) {
                                echo '<img src="' . esc_url($img_main_url) . '" alt="' . esc_attr(get_the_title()) . '" class="product-img">';
                            } else {
                                // Fallback sur l'ancien nom du champ
                                $img_alt = get_field('image_princiaple');
                                $img_alt_url = is_array($img_alt) ? $img_alt['url'] : $img_alt;
                                
                                if ($img_alt_url) {
                                    echo '<img src="' . esc_url($img_alt_url) . '" alt="' . esc_attr(get_the_title()) . '" class="product-img">';
                                } else {
                                    echo '<div class="no-image">Image non disponible</div>';
                                }
                            }
                            ?>
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
                                <div class="price-promotion">
                                    <span class="original-price"><?php echo number_format($prix_normal); ?> FCFA</span>
                                    <span class="promo-price"><?php echo number_format($prix_promotionnel); ?> FCFA</span>
                                    <span class="promo-savings">-<?php echo number_format($prix_normal - $prix_promotionnel); ?> FCFA</span>
                                </div>
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
            <?php 
                endwhile;
                wp_reset_postdata();
            else : 
            ?>
                <div class="no-products">
                    <p>Aucun produit disponible pour le moment.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Bouton flottant panier -->
    <a href="<?php echo home_url('/cart'); ?>" class="floating-cart-btn" id="floating-cart-btn">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-badge" id="cart-badge" style="display: none;">0</span>
    </a>
    
<script>
// Gestion simple du panier avec localStorage
document.addEventListener('DOMContentLoaded', function() {
    // Écouter les clics sur les boutons "Ajouter au Panier"
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
    
<?php
get_footer();
?>