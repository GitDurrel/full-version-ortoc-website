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
    
     --primary-blue: #1E78BA;
    --dark-blue: #0c4178;
    --gold: #FFD700;
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
.festival-description {
    position: relative;
    padding: 60px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    z-index: 1;
}

.festival-description::before {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.2);
    z-index: -1;
}

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





/* --- Breadcrumb Styles --- */
.breadcrumb-container {
  background-color: var(--light-grey); /* Or transparent, depending on desired look */
  padding: 0.75rem 1rem; /* Adjust padding as needed */
  margin-bottom: 1.5rem; /* Space below breadcrumbs */
  /* Assuming it's placed directly in the flow; if inside main-content-wrapper, adjust margin/padding */
}

.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 12px;
  color: #3E3E3E;
}

.breadcrumb-item {
  display: flex;
  align-items: center;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: ">"; /* Chevron separator */
  display: inline-block;
  padding: 0 0.5em; /* Space around separator */
  color: #6c757d; /* Separator color (can also be #3E3E3E) */
}

.breadcrumb-item a {
  text-decoration: none;
  color: var(--primary-color); /* Or #3E3E3E if links should not be primary color */
}

.breadcrumb-item a:hover {
  text-decoration: underline;
}

.breadcrumb-item.active {
  color: #6c757d; /* Muted color for the active page */
  font-weight: bold; /* Optional: make active page bold */
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

.chefferies-section, .woocommerce-products-section, .category-filters-container {
    padding: 30px 20px;
  overflow: hidden;
  position: relative;
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
}

.chefferies-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
  margin-bottom: 40px;

  flex-grow: 1;
  padding-left: 2rem;
}
@media (max-width: 992px) {
  .chefferies-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 768px) {
  .chefferies-section {
    padding: 40px 15px;
  }
  .chefferies-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  .chefferie-img {
    height: 180px;
  }
}
.chefferie-card {
  background-color: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
}
.chefferie-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}
.chefferie-img {
  height: 320px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.chefferie-info {
  padding: 20px;
  flex: 1 1 auto;
  display: flex;
  flex-direction: column;
}
.chefferie-info h3 {
  font-family: Fredoka, sans-serif;
  font-size: 20px;
  font-weight: 600;
  margin-top: 0;
  margin-bottom: 10px;
  color: #0c4178;
}
.product-price {
    font-size: 32px; /* Adjust as needed to match the image */
    font-weight: 700;
    color: #333; /* Dark color for the price */
    display: flex;
    align-items: center;
    gap: 10px; /* Space between price and heart icon */
    margin-bottom: 15px; /* Add some space below the price */
    padding: 20px 0;
}

.product-price .favorite-icon {
    color: red;
    font-size: 24px; /* Adjust size of the heart icon */
}

.chefferie-excerpt {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.5;
  flex: 1 1 auto;
}
.visiter-btn {
  display: inline-block;
  padding: 8px 15px;
  background-color: #0c4178;
  color: white;
  border-radius: 6px;
  text-decoration: none;
  text-align: center;
  font-weight: 500;
  font-size: 14px;
  transition: background-color 0.3s ease;
  margin-top: auto;
}
.visiter-btn:hover {
  background-color: #0c5a9d;
  color: white;
}
.view-all-container {
    text-align: center;
    margin-top: 20px;
    width: 100%;
    display: flex;
    justify-content: center;
}
        .view-all-btn {
    display: inline-block;
    margin: 32px auto 0 auto;
    padding: 12px 36px;
    background: #FFD700 !important;
    color: #0c4178 !important;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    font-size: 1.15rem;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(12,65,120,0.08);
    cursor: pointer;
    transition: background 0.2s, color 0.2s;
        
        }

        .view-all-btn:hover {
     background: #0c4178 !important;
    color: #FFD700 !important;
            transform: translateY(-2px);
        }

        .view-all-btn svg {
            transition: transform 0.3s ease;
        }

        .view-all-btn:hover svg {
            transform: translateX(5px);
        }

        .sidebar {
    width: var(--sidebar-width);
    flex-shrink: 0;
    padding: 2rem 0;
    border-right: 1px solid var(--border-color); /* Separator line */
}

.sidebar-nav h2 {
    color: var(--primary-color);
    margin-top: 0;
    padding: 0 20px; /* Match main content padding */
}

.sidebar-nav ul {
    list-style: none;
    padding: 0;
}

.sidebar-nav li a {
    display: block;
    padding: 10px 20px; /* Padding for clickable area */
    text-decoration: none;
    color: var(--text-color);
    transition: background-color 0.2s, color 0.2s;
}

.sidebar-nav li a:hover {
    background-color: var(--light-grey);
}

.sidebar-nav li a.active {
     background-color: var(--primary-color);
     color: white;
     font-weight: bold;
}

.sidebar-nav .category-link {
    display: flex; /* To align icon and text */
    align-items: center;
    /* Existing styles for .category-link like padding, text-decoration etc. are part of .sidebar-nav li a */
}

.sidebar-nav .toggle-icon {
    margin-right: 8px; /* Space between icon and text */
    display: inline-block;
    transition: transform 0.3s ease-in-out; /* For icon rotation */
    width: 1em; /* Ensure consistent spacing */
    text-align: center;
}

.sidebar-nav > ul > li.expanded > .category-link > .toggle-icon {
    transform: rotate(90deg); /* Rotate icon when expanded */
}

.sidebar-nav > ul > li > ul { /* More specific selector for direct subcategory lists */
    list-style: none; /* Ensure list style is reset */
    padding-left: 20px; /* Keep indentation from original .sidebar-nav ul ul */
    /* border-left: 2px solid var(--accent-color); /* Applied when expanded */
    /* margin-top: 5px; /* Applied when expanded */
    /* margin-bottom: 5px; /* Applied when expanded */

    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-in-out,
                padding-top 0.3s ease-in-out,
                padding-bottom 0.3s ease-in-out,
                margin-top 0.3s ease-in-out,
                margin-bottom 0.3s ease-in-out,
                border-width 0.3s ease-in-out; /* For border animation */
    border-left: 2px solid transparent; /* Start transparent for smooth transition */
}

.sidebar-nav > ul > li.expanded > ul {
    max-height: 1000px; /* Adjust to a value larger than any possible sublist height */
    padding-top: 5px;
    padding-bottom: 5px;
    margin-top: 5px;
    margin-bottom: 5px;
    border-left-color: var(--accent-color); /* Make border visible when expanded */
}

.sidebar-nav > ul > li > ul li a { /* Made selector more specific */
    padding: 8px 15px; /* Adjusted padding for subcategories */
    font-size: 0.9rem;
    /* Ensure other necessary link styles like color, text-decoration are inherited or set here */
    /* For example, if they are not inheriting from .sidebar-nav li a properly: */
    /* color: var(--text-color); */
    /* text-decoration: none; */
}

.sidebar-nav > ul > li > ul li a:hover { /* Specific selector for hover */
     background-color: var(--accent-color);
     color: var(--primary-color);
}

.sidebar-nav > ul > li > ul li a.active { /* Specific selector for active */
    background-color: var(--accent-color);
    color: var(--primary-color);
    font-weight: bold;
}

.main-product-area {
    flex-grow: 1;
    padding-left: 2rem; /* Space between sidebar and content */
}

.woocommerce-products-section ul.products {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  padding: 0;
  list-style: none;
  justify-content: space-between;
}

.woocommerce-products-section ul.products li.product {
  flex: 1 1 calc(25% - 20px);
  max-width: calc(25% - 20px);
  box-sizing: border-box;
  border: 1px solid #eee;
  border-radius: 8px;
  padding: 10px;
  background-color: #fff;
  transition: transform 0.3s ease;
}

.woocommerce-products-section ul.products li.product:hover {
  transform: translateY(-3px);
}

.woocommerce ul.products li.product,
.product-card {
    height: 100%;
}


@media screen and (max-width: 992px) {
  .woocommerce-products-section ul.products li.product {
    flex: 1 1 calc(50% - 20px);
    max-width: calc(50% - 20px);
  }
}

@media screen and (max-width: 600px) {
  .woocommerce-products-section ul.products li.product {
    flex: 1 1 100%;
    max-width: 100%;
  }
}

/* Category Filter Styles */
.category-filters-container {
    position: relative;
}

.category-filters {
    display: flex;
    flex-wrap: nowrap !important;
    overflow-x: auto !important;
    white-space: nowrap !important;
    gap: 16px 0;
    margin-bottom: 20px;
    align-items: flex-start;
    scrollbar-width: thin;
    scrollbar-color: #0c4178 #eee;
    padding-bottom: 8px;
    scroll-behavior: smooth;
}
.category-filters::-webkit-scrollbar {
    height: 8px;
    background: #eee;
    border-radius: 8px;
}
.category-filters::-webkit-scrollbar-thumb {
    background: #0c4178;
    border-radius: 8px;
}

.category-group {
    display: inline-block !important;
    vertical-align: top !important;
    position: relative;
}

.filter-button {
    background-color: #ffffff !important;
    color: #0c4178 !important;
    border: 1.5px solid #0c4178 !important;
    font-family: 'Fredoka', sans-serif !important;
    font-size: 0.98rem !important;
    font-weight: 500 !important;
    padding: 10px 20px !important;
    margin: 0 0 5px 0 !important;
    border-radius: 20px !important;
    cursor: pointer !important;
    transition: background 0.3s, color 0.3s, border-color 0.3s, box-shadow 0.3s !important;
    display: inline-flex !important;
    align-items: center !important;
    box-shadow: 0 2px 8px rgba(12,65,120,0.04) !important;
    position: relative !important;
    z-index: 2;
    white-space: nowrap !important;
}
.filter-button:hover {
    background-color: #f0f8ff !important;
    color: #0c4178 !important;
    border-color: #0c4178 !important;
    box-shadow: 0 4px 12px rgba(12,65,120,0.08) !important;
    transform: translateY(-2px) !important;
}
.filter-button.active,
.filter-button.is-child.active {
    background-color: #0c4178 !important;
    color: #ffd700 !important;
    border-color: #0c4178 !important;
    box-shadow: 0 2px 8px rgba(12,65,120,0.12) !important;
}
.filter-button.is-parent .toggle-icon {
    margin-left: 10px !important;
    font-weight: bold !important;
    display: inline-block !important;
    transition: transform 0.2s !important;
    font-size: 1.1em !important;
}
.filter-button.is-parent .toggle-icon.open {
    transform: rotate(90deg) !important;
}
.subcategory-list {
    display: none;
    flex-direction: column;
    position: absolute;
    left: 0;
    top: 110%;
    min-width: 220px;
    background: #fff !important;
    border-radius: 16px !important;
    box-shadow: 0 8px 24px rgba(12,65,120,0.10) !important;
    padding: 10px 0 !important;
    z-index: 10;
    animation: fadeInSubcat 0.25s;
}
@keyframes fadeInSubcat {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
.filter-button.is-child {
    font-size: 0.93em !important;
    padding: 8px 18px !important;
    margin: 0 0 2px 0 !important;
    background: #f9f9f9 !important;
    color: #0c4178 !important;
    border: 1px solid #eee !important;
    border-radius: 14px !important;
    transition: background 0.2s, color 0.2s !important;
    box-shadow: none !important;
}
.filter-button.is-child:hover,
.filter-button.is-child.active {
    background: #0c4178 !important;
    color: #ffd700 !important;
    border-color: #0c4178 !important;
}
@media (max-width: 900px) {
    .category-filters {
        flex-wrap: nowrap !important;
        gap: 10px 0 !important;
        overflow-x: auto !important;
        padding-bottom: 8px !important;
    }
    .subcategory-list {
        position: static !important;
        min-width: 0 !important;
        box-shadow: none !important;
        background: transparent !important;
        padding: 0 !important;
    }
}
/* End Category Filter Styles */

<!-- Indicateur de scroll (optionnel, à placer juste après .category-filters-container) -->
<style>
.category-filters-container::after {
    content: '';
    display: block;
    height: 8px;
    width: 100%;
    background: linear-gradient(to right, #fff 60%, #0c4178 100%);
    opacity: 0.08;
    border-radius: 8px;
    position: absolute;
    left: 0; bottom: 0;
    pointer-events: none;
}
</style>


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

<?php
$all_categories = get_terms('product_cat', array('hide_empty' => false, 'orderby' => 'name', 'order' => 'ASC'));
$parent_categories = array();
$child_categories_map = array(); // Store children mapped by parent_id

if (!empty($all_categories) && !is_wp_error($all_categories)) {
    // First, map all categories by their IDs for easy lookup
    $categories_by_id = array();
    foreach ($all_categories as $category) {
        $categories_by_id[$category->term_id] = $category;
    }

    // Separate parent and child categories
    foreach ($all_categories as $category) {
        if ($category->parent == 0) {
            $parent_categories[] = $category;
        } else {
            // Ensure parent exists in our fetched list before adding as a child
            // This handles potential orphans if a parent category is empty and hide_empty is true
            if (isset($categories_by_id[$category->parent])) {
                 $child_categories_map[$category->parent][] = $category;
            } else {
                // Treat as a parent if its own parent wasn't fetched (e.g. parent is empty)
                $is_already_parent = false;
                foreach($parent_categories as $p_cat){
                    if($p_cat->term_id == $category->term_id){
                        $is_already_parent = true;
                        break;
                    }
                }
                if(!$is_already_parent) { $parent_categories[] = $category; }
            }
        }
    }

    // Sort parent categories by name
    usort($parent_categories, function($a, $b) {
        return strcmp($a->name, $b->name);
    });

    echo '<div class="category-filters-container">';
    // The main div with class "category-filters" might need adjustment or removal
    // if category-groups are now the primary flex items.
    // For now, keeping it as a general wrapper.
    echo '<div class="category-filters">';

    echo '<button class="filter-button active" data-category="all">All</button>';

    foreach ($parent_categories as $parent_term) {
        $current_child_terms = isset($child_categories_map[$parent_term->term_id]) ? $child_categories_map[$parent_term->term_id] : array();
        // Sort child terms by name
        if (!empty($current_child_terms)) {
            usort($current_child_terms, function($a, $b) {
                return strcmp($a->name, $b->name);
            });
        }

        echo '<div class="category-group">';
        echo '<button class="filter-button is-parent" data-category="' . esc_attr($parent_term->slug) . '">';
        echo esc_html($parent_term->name);
        if (!empty($current_child_terms)) {
            echo ' <span class="toggle-icon">+</span>';
        }
        echo '</button>';

        if (!empty($current_child_terms)) {
            echo '<div class="subcategory-list" style="display: none;">';
            foreach ($current_child_terms as $child_term) {
                echo '<button class="filter-button is-child" data-category="' . esc_attr($child_term->slug) . '">' . esc_html($child_term->name) . '</button>';
            }
            echo '</div>'; // Close subcategory-list
        }
        echo '</div>'; // Close category-group
    }

    echo '</div>'; // Close category-filters
    echo '<div id="subcategory-bar" style="display:none; margin: 10px 0 20px 0; width:100%;"></div>';
    echo '</div>'; // Close category-filters-container
}
?>
<section class="woocommerce-products-section">
  <div class="container">
    <ul class="products">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 8
    );

    $loop = new WP_Query($args);
    global $woocommerce_loop;
    $woocommerce_loop['columns'] = 4;

    if ($loop->have_posts()) :
      while ($loop->have_posts()) : $loop->the_post();
        global $product;
        $product = wc_get_product(get_the_ID());
        wc_get_template_part('content', 'product');
      endwhile;
    else :
      echo '<p>Aucun produit trouvé.</p>';
    endif;

    wp_reset_postdata();
    ?>
    </ul>
  </div>
</section>




<script>
document.addEventListener('DOMContentLoaded', function () {
    // Barre dédiée pour sous-catégories
    var subcatBar = document.getElementById('subcategory-bar');
    var allGroups = document.querySelectorAll('.category-group');
    var allParentBtns = document.querySelectorAll('.filter-button.is-parent');
    var allChildBtns = document.querySelectorAll('.filter-button.is-child');

    allParentBtns.forEach(function(parentBtn) {
        parentBtn.addEventListener('click', function(e) {
            e.preventDefault();
            // Filtrage AJAX
            parentBtn.dispatchEvent(new CustomEvent('filter', {bubbles: true}));
            // Affichage des sous-catégories dans la barre dédiée
            allParentBtns.forEach(function(btn){ btn.classList.remove('active'); });
            parentBtn.classList.add('active');
            // Trouver la liste des sous-catégories
            var group = parentBtn.closest('.category-group');
            var subList = group ? group.querySelector('.subcategory-list') : null;
            if (subList && subList.children.length > 0) {
                subcatBar.innerHTML = '';
                subcatBar.style.display = 'flex';
                subcatBar.style.flexWrap = 'wrap';
                subcatBar.style.gap = '12px';
                subcatBar.style.justifyContent = 'flex-start';
                Array.from(subList.children).forEach(function(childBtn) {
                    var clone = childBtn.cloneNode(true);
                    clone.classList.remove('active');
                    clone.addEventListener('click', function(e) {
                        e.preventDefault();
                        // Filtrage AJAX
                        clone.dispatchEvent(new CustomEvent('filter', {bubbles: true}));
                        // Style actif
                        subcatBar.querySelectorAll('.filter-button').forEach(function(b){b.classList.remove('active');});
                        clone.classList.add('active');
                    });
                    subcatBar.appendChild(clone);
                });
            } else {
                subcatBar.innerHTML = '';
                subcatBar.style.display = 'none';
            }
        });
        // Pour que le filtrage AJAX fonctionne aussi sur parent
        parentBtn.addEventListener('filter', function(e) {
            if (typeof ortoc_filter_params !== 'undefined' && typeof fetch !== 'undefined') {
                parentBtn.click();
            }
        });
    });
    // Optionnel : au chargement, afficher les sous-catégories du premier parent actif
    var firstActive = document.querySelector('.filter-button.is-parent.active');
    if(firstActive) firstActive.click();
});
</script>

<?php
get_footer();
?>