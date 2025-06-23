<?php
/*
Template Name: Page Festivals
*/

// Enqueue Swiper JS et CSS
function festival_enqueue_scripts() {
    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), '8.0.0', true);

}
add_action('wp_enqueue_scripts', 'festival_enqueue_scripts');

get_header(); 
?>

<style>
/* 
 * CSS pour le template Page Festivals
 * À placer dans: /wp-content/themes/votre-theme/css/festival-page.css
 */


/* Variables globales */
:root {
    --primary-blue: #1E78BA;
    --dark-blue: #0c4178;
    --gold: #FFD700;
    --orange: #FFA500;
    --white: #ffffff;
    --light-gray: #f9f9f9;
    --text-dark: #333333;
}

/* ===== SECTION I - Hero ===== */
.festival-hero {
  position: relative;
  height: 100vh; /* Réduit un peu la hauteur pour mieux correspondre à l'image */
  min-height: 400px;
  background-size: cover;
  background-position: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items:center;
  padding: 60px 20px;
  color: #fff;
  text-align: center;
  overflow: visible; /* Important: permet à la frise de déborder */
  margin-bottom: 0; /* Supprime toute marge en bas */
  padding-top: 100px;
}

.festival-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.4) 100%);
  z-index: 1;
}

.hero-image-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.hero-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(12,65,120,0.7));
}

.hero-content {
  position: relative;
  z-index: 2;
}

.hero-title{
    font-family: Fredoka;
    font-size: 61px;
    font-weight: 700;
    line-height: 61px;
}

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }



/* ===== SECTION II - Description ===== */
.festival-description {
    position: relative;
    padding: 60px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-Festival-scaled.jpg') center/cover fixed;
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

/* ===== SECTION III - Programme (Tableau) ===== */

.festival-description {
    position: relative;
    padding: 70px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    z-index: 1;
    color: #222;
}

.festival-description::before {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.8);
    z-index: -1;
}

.festival-table-wrapper {
    overflow-x: auto;
    padding: 20px;
    border-radius: 12px;
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    max-width: 1400px;
    margin: 0 auto;
}

.festival-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px;
    background-color: transparent;
}

/* En-têtes du tableau */
.festival-table th {
    padding: 18px 15px;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    background-color: rgba(42, 42, 42, 0.9);
    color: white;
    border-radius: 10px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
    position: sticky;
    top: 0;
    z-index: 10;
}

.festival-table th:first-child {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    width: 25%; /* Largeur fixe pour la première colonne */
}

.festival-table th:nth-child(2) {
    width: 25%; /* Largeur fixe pour la deuxième colonne */
}

.festival-table th:last-child {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    width: 50%; /* Largeur fixe pour la dernière colonne */
}

/* Assurons-nous que les cellules du tableau respectent les largeurs des en-têtes */
.festival-table td:first-child {
    width: 25%;
}

.festival-table td:nth-child(2) {
    width: 25%;
}

.festival-table td:last-child {
    width: 50%;
}

/* Cellules du tableau stylisées comme des cartes */
.festival-table td.cell-card {
    padding: 0;
    border: none;
    background-color: transparent;
    vertical-align: top; /* Aligne le contenu en haut */
}

/* Important: cette propriété permet de maintenir l'égalité de hauteur des cellules */
.festival-table tr {
    display: table-row;
}

.cell-content {
    margin: 8px;
    padding: 18px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2), 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 100%; /* Garantir que le contenu occupe toute la hauteur */
}

.cell-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25), 0 6px 10px rgba(0, 0, 0, 0.15);
}

/* Alternance des couleurs */
.blue-row td .cell-content {
    background-color: rgba(12, 65, 120, 0.95);
    color: white;
    font-weight: 500;
}

.yellow-row td .cell-content {
    background-color: rgba(251, 188, 4, 0.95);
    color: #202124;
    font-weight: 500;
}

/* Style spécifique pour la colonne manifestation */
.festival-table td:first-child .cell-content {
    font-weight: 700;
    font-size: 1.05em;
}

/* Style pour la colonne description */
.festival-table td:last-child .cell-content {
    text-align: justify;
    justify-content: flex-start;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: rgba(0, 0, 0, 0.3) transparent;
}

/* Style des scrollbars pour la description (pour Chrome) */
.festival-table td:last-child .cell-content::-webkit-scrollbar {
    width: 6px;
}

.festival-table td:last-child .cell-content::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 10px;
}

.festival-table td:last-child .cell-content::-webkit-scrollbar-track {
    background: transparent;
}

/* Animation subtile au chargement */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.festival-table tbody tr {
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

.festival-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.festival-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
.festival-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
.festival-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
.festival-table tbody tr:nth-child(5) { animation-delay: 0.5s; }
.festival-table tbody tr:nth-child(n+6) { animation-delay: 0.6s; }

/* Responsive */
@media (max-width: 992px) {
    .festival-table th,
    .cell-content {
        padding: 15px 12px;
    }
    
    /* Ajuster les largeurs pour les écrans moyens */
    .festival-table th:first-child,
    .festival-table td:first-child {
        width: 30%;
    }
    
    .festival-table th:nth-child(2),
    .festival-table td:nth-child(2) {
        width: 30%;
    }
    
    .festival-table th:last-child,
    .festival-table td:last-child {
        width: 40%;
    }
}

@media (max-width: 768px) {
    .festival-table th,
    .cell-content {
        padding: 12px 10px;
        font-size: 14px;
    }
    
    .festival-table-wrapper {
        padding: 10px;
    }
    
    .festival-description .section-title {
        font-size: 1.8em;
    }
}

@media (max-width: 576px) {
    .festival-table th {
        font-size: 13px;
        padding: 10px 8px;
    }
    
    .cell-content {
        margin: 5px;
        padding: 10px 8px;
    }
    
    .festival-table {
        border-spacing: 0 15px;
    }
    
    /* En mode mobile, permettre un défilement horizontal */
    .festival-table th:first-child,
    .festival-table td:first-child,
    .festival-table th:nth-child(2),
    .festival-table td:nth-child(2),
    .festival-table th:last-child,
    .festival-table td:last-child {
        width: auto;
    }
}

/* ===== SECTION IV - Galerie Photos ===== */
.gallery-section {
    position: relative;
    padding: 60px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    z-index: 1;
}

.gallery-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.5);
    z-index: -1;
}

.gallery-container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
}

/*.gallery-decoration {*/
/*    position: absolute;*/
/*    width: 120px;*/
/*    height: 120px;*/
/*    background-size: contain;*/
/*    background-repeat: no-repeat;*/
/*    opacity: 0.15;*/
/*    z-index: 0;*/
/*}*/

/*.decoration-left {*/
/*    left: -10px;*/
/*    top: 0;*/
/*    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-1.png');*/
/*}*/

/*.decoration-right {*/
/*    right: -10px;*/
/*    bottom: 0;*/
/*    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-2.png');*/
/*}*/

.swiper {
    width: 100%;
    max-width: 1000px;
    margin: auto;
    padding-bottom: 60px;
    z-index: 2;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
    transform: scale(0.85);
    transition: transform 0.5s ease;
    opacity: 0.7;
}

.swiper-slide-active {
    transform: scale(1);
    opacity: 1;
}

.gallery-image {
    width: 100%;
    height: 450px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.4s ease;
    border: 5px solid white;
}

.swiper-slide-active .gallery-image {
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.3);
}

.swiper-button-next,
.swiper-button-prev {
    color: var(--primary-blue);
    background-color: rgba(255, 255, 255, 0.8);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
    background-color: var(--primary-blue);
    color: white;
}

.swiper-button-next::after,
.swiper-button-prev::after {
    font-size: 20px;
    font-weight: bold;
}

.swiper-pagination-bullet {
    background: var(--primary-blue);
    opacity: 0.5;
    width: 10px;
    height: 10px;
}

.swiper-pagination-bullet-active {
    opacity: 1;
    background: var(--primary-blue);
    width: 15px;
    height: 15px;
}

/* Responsive */
@media (max-width: 992px) {
    .description-columns {
        flex-direction: column;
        gap: 30px;
    }
    
    .hero-content h1 {
        font-size: 2.8rem;
    }
}

@media (max-width: 768px) {
    .festival-hero {
        height: 50vh;
    }
    
    .hero-content h1 {
        font-size: 2.2rem;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
    }
    
    /*.section-title {*/
    /*    font-size: 2rem;*/
    /*}*/
    
    .gallery-image {
        height: 350px;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        width: 40px;
        height: 40px;
    }
}
</style>


<!-- SECTION I - Hero avec image principale et texte -->
<section class="festival-hero" style="background-image: url('<?php the_field('image_principale'); ?>');">
            <div class="hero-content container">
                <h2 class="hero-title"><?php the_title(); ?></h2>
            </div>
        </div>
</section>

<!-- SECTION II - Descriptions (FR/EN) -->
<section class="festival-description">
    <div class="container">
        <h2 class="section-title">Description <br> <span class="title_bold text_outline_white">du Festival</span></h2>
        
        <div class="description-columns">
            <div class="description-column">
                <h3></h3>
                <?php echo wp_kses_post(get_field('description_francaise')); ?>
            </div>
            
            <div class="description-column">
                <h3></h3>
                <?php echo wp_kses_post(get_field('description_anglaise')); ?>
            </div>
        </div>
    </div>
</section>

<!-- SECTION III - Galerie Photos -->
<section class="gallery-section">
    <div class="gallery-container">
        <h2 class="section-title">Galerie <br> <span class="title_bold text_outline_white">Photos</span></h2>
        
        <div class="swiper gallery-swiper">
            <div class="swiper-wrapper">
                <?php
                // Vérifier si on utilise un groupe d'images ou des images individuelles
                if (have_rows('gallery_images')) {
                    while (have_rows('gallery_images')) : the_row();
                        $image = get_sub_field('image');
                        if ($image):
                        ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="gallery-image">
                            </div>
                        <?php
                        endif;
                    endwhile;
                } else {
                    // Méthode alternative avec images individuelles
                    for ($i = 1; $i <= 12; $i++) {
                        $image = get_field('image_' . $i);
                        if ($image):
                        ?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($image); ?>" alt="Image <?php echo $i; ?>" class="gallery-image">
                            </div>
                        <?php
                        endif;
                    }
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>


<!-- SECTION IV - Programme (Tableau) -->
<section class="festival-description">
    <div class="container">
        <h2 class="section-title">Une vue <br> <span class="title_bold text_outline_white">d'ensemble</span></h2>
        <?php 
        $festivals_json = get_field('festivals_json');
        $festivals = json_decode($festivals_json, true);
        
        if (!empty($festivals)) : 
        ?>
        <div class="festival-table-wrapper">
            <table class="festival-table">
                <thead>
                    <tr>
                        <th>Manifestation</th>
                        <th>Localité</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($festivals as $index => $event) : 
                        $rowClass = ($index % 2 == 0) ? 'blue-row' : 'yellow-row';
                    ?>
                    <tr class="<?php echo $rowClass; ?>">
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['manifestation'] ?? ''); ?></div>
                        </td>
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['localite'] ?? ''); ?></div>
                        </td>
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['description'] ?? ''); ?></div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else : ?>
        <p>Aucune donnée disponible pour le moment.</p>
        <?php endif; ?>
    </div>
</section>

<!-- SECTION V - Programme (Tableau) Anglais -->
<section class="festival-description">
    <div class="container">
        <h2 class="section-title">An <br> <span class="title_bold text_outline_white">overview</span></h2>
        <?php 
        $festivals_json_anglais = get_field('festivals_json_anglais');
        $festivals = json_decode($festivals_json_anglais, true);
        
        if (!empty($festivals)) : 
        ?>
        <div class="festival-table-wrapper">
            <table class="festival-table">
                <thead>
                    <tr>
                        <th>Events</th>
                        <th>Location</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($festivals as $index => $event) : 
                        $rowClass = ($index % 2 == 0) ? 'blue-row' : 'yellow-row';
                    ?>
                    <tr class="<?php echo $rowClass; ?>">
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['events'] ?? ''); ?></div>
                        </td>
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['location'] ?? ''); ?></div>
                        </td>
                        <td class="cell-card">
                            <div class="cell-content"><?= esc_html($event['description'] ?? ''); ?></div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php else : ?>
        <p>No data available for the moment.</p>
        <?php endif; ?>
    </div>
</section>



<script>
    /**
 * JavaScript pour la page Festivals
 * À placer dans: /wp-content/themes/votre-theme/js/festival-page.js
 */

document.addEventListener('DOMContentLoaded', function() {
    function equalizeRowHeights() {
        const rows = document.querySelectorAll('.festival-table tbody tr');
        
        rows.forEach(row => {
            const cellContents = row.querySelectorAll('.cell-content');
            let maxHeight = 0;
            
            // Réinitialiser les hauteurs
            cellContents.forEach(cell => {
                cell.style.height = 'auto';
            });
            
            // Trouver la hauteur maximale
            cellContents.forEach(cell => {
                maxHeight = Math.max(maxHeight, cell.offsetHeight);
            });
            
            // Appliquer la hauteur maximale à toutes les cellules
            cellContents.forEach(cell => {
                cell.style.height = maxHeight + 'px';
            });
        });
    }
    
    // Exécuter au chargement et lors du redimensionnement
    equalizeRowHeights();
    window.addEventListener('resize', equalizeRowHeights);
});

jQuery(document).ready(function($) {
    // Initialisation du slider Swiper
    const gallerySwiper = new Swiper('.gallery-swiper', {
        // Paramètres optionnels
        loop: true,
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        // Navigation
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // Responsive breakpoints
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            768: {
                slidesPerView: 'auto',
                spaceBetween: 30
            }
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
    });
    
    // Animation au scroll
    function revealOnScroll() {
        var elements = $('.description-column, .section-title, .program-table-container');
        
        elements.each(function() {
            var elementPosition = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            var windowHeight = $(window).height();
            
            if (elementPosition < topOfWindow + windowHeight - 100) {
                $(this).addClass('revealed');
            }
        });
    }
    
    // Ajouter une classe pour l'animation au chargement et au scroll
    $('.description-column, .section-title, .program-table-container').addClass('reveal-element');
    
    // Déclencher les animations au chargement et au scroll
    $(window).on('load scroll', revealOnScroll);
    
    // Animation survol des cellules du tableau Ninja Table
    $('.ninja_table tbody tr').hover(
        function() {
            $(this).addClass('row-hover');
        },
        function() {
            $(this).removeClass('row-hover');
        }
    );
});
</script>

<?php get_footer(); ?>