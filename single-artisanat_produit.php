<?php
/**
 * Template pour afficher un post unique de type "artisanat"
 * Template Name: Single Artisanat
 */

// Charger les dépendances Swiper
wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);

get_header(); // Inclut l'en-tête du thème

// Vérifie si le post existe et a du contenu
if (have_posts()) :
    while (have_posts()) : the_post();
        
        // Si aucun titre n'est fourni, on utilise un titre par défaut
        $post_title = get_the_title();
        if (empty($post_title)) {
            $post_title = 'Artisanat Bafoussam'; // Titre par défaut
        }
        
        // Récupération des champs ACF
        $image_principale = get_field('image_principale');
        $image_titre = get_field('image_titre');
        $title = get_field('title');
        $description_francais = get_field('description_francais');
        $description_anglais = get_field('description_anglais');
?>

<style>
/* Style général du conteneur */
.artisanat-container {
    width: 100%;
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    position: relative;
}

/* Hero section */
.artisanat-hero {
    position: relative;
    height: 80vh;
    min-height: 350px;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px 20px;
    color: #fff;
    text-align: center;
    overflow: visible;
    margin-bottom: 0;
}

.artisanat-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.4) 100%);
    z-index: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    width: 100%;
    max-width: 1200px;
}

.hero-title {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

/* Conteneur principal avec fond bleu */
.artisanat-content-wrapper {
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fond.png') center/cover fixed;
    color: white;
    padding: 30px 40px 60px; /* Padding bas augmenté pour la galerie encastrée */
    position: relative;
    min-height: 400px;
}

/* Image title styling - style inspiré de l'image */
.image-title-container {
    text-align: center;
    margin: -160px auto 30px;
    position: relative;
    z-index: 5;
    max-width: 700px;
    padding: 10px;
    /*border-radius: 5px;*/
    /*box-shadow: 0 4px 8px rgba(0,0,0,0.2);*/
}

.image-title-container img {
    width: 100%;
    height: auto;
    display: block !important; /* Force l'affichage */
    margin: 0 auto;
    border-radius: 5px;
}

.title-english {
    font-size: 1.4rem;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin: 5px 0 25px;
    color: #FFD700;
    text-align: center;
}

/* Description columns */
.description-columns {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin: 0 auto; /* Pas de marge basse ici */
    max-width: 1200px;
    position: relative;
    padding-bottom: 40px; /* Espace pour le carrousel */
}

.description-column {
    flex: 1;
    min-width: 300px;
    padding: 0 15px;
}

.description-francais,
.description-anglais {
    text-align: justify;
}

.artisanat-frise {
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise.png');
    background-repeat: repeat-x;
    background-position: center;
    background-size: auto 10px; /* hauteur fixée, largeur auto */
    width: 100%;
    height: 10px;
    margin: 30px 0;
    overflow: hidden;
}

/* Styles de base pour la section de galerie */
.gallery-section {
  padding: 60px 0;
  overflow: hidden;
  position: relative;
}

.gallery-section::before{
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.8);
    z-index: -1;
}

.gallery-container {
  max-width: 1400px;
  margin: 0 auto;
  padding: 0 20px;
}

/* Styles pour la galerie Swiper */
.gallery-swiper {
  width: 100%;
  padding: 40px 0;
  overflow: visible;
  margin-top: 20px;
}

.swiper-wrapper {
  align-items: center;
}

/* Styles pour les images incurvées - EFFET ACCENTUÉ */
.curved-image-container {
  position: relative;
  width: 100%;
  height: 500px;
  overflow: hidden;
  border-radius: 30px; /* Augmentation du rayon pour un effet plus arrondi */
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  transform: perspective(800px) rotateY(15deg); /* Rotation plus prononcée */
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform-origin: center;
  backface-visibility: hidden;
}

/* Style général des slides */
.swiper-slide {
  width: 380px; /* Légèrement plus large */
  margin: 0 -5px; /* Marge négative pour chevauchement */
  transition: all 0.6s ease;
  transform: scale(0.85); /* Échelle réduite par défaut */
  opacity: 0.65; /* Plus transparent par défaut */
  filter: brightness(0.9) saturate(0.8); /* Ajustement pour accentuer l'effet de profondeur */
}

/* Style pour le slide central actif */
.swiper-slide-active {
  transform: scale(1.1); /* Plus grand zoom pour l'élément actif */
  opacity: 1;
  z-index: 10;
  filter: brightness(1.05) saturate(1.1); /* Plus vif */
}

/* Rotation inverse pour les slides non actifs */
.swiper-slide-prev {
  transform: perspective(800px) rotateY(20deg) scale(0.85); /* Rotation plus forte à gauche */
}

.swiper-slide-next {
  transform: perspective(800px) rotateY(-20deg) scale(0.85); /* Rotation plus forte à droite */
}

/* Style pour le conteneur du slide actif */
.swiper-slide-active .curved-image-container {
  transform: perspective(800px) rotateY(0deg); /* Mise à plat du slide actif */
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25); /* Ombre plus prononcée */
}

.gallery-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
  filter: contrast(1.05); /* Léger ajustement du contraste */
}

.curved-image-container:hover .gallery-image {
  transform: scale(1.08); /* Zoom au survol légèrement plus grand */
}

/* Effet de vignette autour des images pour accentuer la profondeur */
.curved-image-container::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: radial-gradient(circle, transparent 70%, rgba(0,0,0,0.2) 100%);
  pointer-events: none;
}

/* Navigation et pagination */
.swiper-button-next, .swiper-button-prev {
  color: #fff;
  background: rgba(0, 0, 0, 0.5);
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.7;
  transition: all 0.3s ease;
}

.swiper-button-next:after, .swiper-button-prev:after {
  font-size: 18px;
  font-weight: bold;
}

.swiper-button-next:hover, .swiper-button-prev:hover {
  opacity: 1;
  background: rgba(0, 0, 0, 0.7);
  transform: scale(1.1);
}

/* Pagination améliorée */
.swiper-pagination {
  position: relative;
  margin-top: 30px;
}

.swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background: #ccc;
  opacity: 0.6;
  transition: all 0.3s ease;
  margin: 0 5px;
}

.swiper-pagination-bullet-active {
  background: #333;
  opacity: 1;
  transform: scale(1.2);
  width: 14px; /* Légèrement plus grand */
  height: 14px; /* Légèrement plus grand */
}

/* Pour les écrans mobiles */
@media (max-width: 768px) {
  .section-title {
    font-size: 32px;
  }
  
  .swiper-slide {
    width: 300px;
  }
  
  .curved-image-container {
    height: 420px;
  }
}

/* Effet d'animation au chargement */
@keyframes slideIn {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.gallery-container {
  animation: slideIn 0.8s ease-out forwards;
}

/* Animation pour les images */
@keyframes fadeInScale {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

.curved-image-container {
  animation: fadeInScale 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
}

/* Adaptation mobile */
@media (max-width: 768px) {
    .gallery-section {
        padding: 60px 15px;
    }
    
    .gallery-image {
        height: 350px;
    }
    
    .swiper-button-next,
    .swiper-button-prev {
        width: 40px;
        height: 40px;
    }
}

.highlight{
    color :rgba(251, 188, 4, 0.95);
    font-weight: bold;
    text-transform: italic;
}

/* Responsive design */
@media screen and (max-width: 768px) {
    .artisanat-content-wrapper {
        padding: 30px 15px 150px;
        margin-bottom: 80px;
    }
    
    .description-columns {
        flex-direction: column;
        gap: 20px;
        padding-bottom: 50px;
    }
    
    .description-column {
        padding: 0;
    }
    
    .image-title-container {
        max-width: 250px;
    }
    
    .image-title-container img {
        max-width: 100%;
    }
    
    .artisanat-gallery {
        width: 90%;
        bottom: -60px;
    }
    
    .gallery-swiper {
        height: 200px;
    }
}

/* Style pour le message d'erreur si aucun post n'est trouvé */
.no-post-found {
    text-align: center;
    padding: 50px 20px;
    background-color: #f8f8f8;
    border-radius: 8px;
    margin: 30px auto;
    max-width: 800px;
}
</style>

<!-- Enveloppe principale pour tout le contenu -->
<div class="artisanat-container">
    <!-- SECTION I - Hero avec image principale et texte -->
    <section class="artisanat-hero" style="background-image: url('<?php echo esc_url($image_principale); ?>');"></section>

    <!-- SECTION II - Contenu principal avec descriptions-->
    <section class="artisanat-content-wrapper">
        <?php if ($image_titre) : ?>
        <div class="image-title-container">
            <?php 
            // Vérifier si l'image_titre est un tableau (format ACF) ou une chaîne URL
            if (is_array($image_titre)) : ?>
                <img src="<?php echo esc_url($image_titre['url']); ?>" alt="<?php echo esc_attr($image_titre['alt']); ?>">
            <?php else : ?>
                <img src="<?php echo esc_url($image_titre); ?>" alt="<?php echo esc_attr($title); ?>">
            <?php endif; ?>
        </div>
        <?php endif; ?>
        
        <?php if ($title) : ?>
        <h2 class="title-english"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        
        <div class="description-columns">
            <div class="description-column">
                <?php if ($description_francais) : ?>
                <div class="description-francais">
                    <?php echo ($description_francais); ?>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="description-column">
                <?php if ($description_anglais) : ?>
                <div class="description-anglais">
                    <?php echo ($description_anglais); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="artisanat-frise">
        </div>
        
        <!-- Galerie encastrée -->
        <section class="gallery-section">
            <div class="gallery-container">
                <div class="swiper gallery-swiper">
                    <div class="swiper-wrapper">
                        <?php
                        // Vérifier si ACF est actif et disponible
                        if (function_exists('get_field')) {
                            for ($i = 1; $i <= 6; $i++) {
                                $image = get_field('image_' . $i);
                                if ($image):
                                ?>
                                <div class="swiper-slide">
                                    <div class="curved-image-container">
                                        <img src="<?php echo esc_url($image); ?>" alt="Image <?php echo $i; ?>" class="gallery-image">
                                    </div>
                                </div>
                                <?php
                                endif;
                            }
                        }
                        ?>
                    </div>
                    <!-- Boutons de navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </section>
</div>

<!-- Script pour le slider Swiper -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.gallery-swiper', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: -15, // Espace négatif pour un effet de chevauchement
    loop: true,
    speed: 1000, // Vitesse de transition augmentée
    grabCursor: true,
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 25, // Augmenté pour un effet plus prononcé
      stretch: 0,
      depth: 250, // Profondeur augmentée significativement
      modifier: 1.5, // Intensité de l'effet augmentée
      slideShadows: true, // Activation des ombres de slides
    },
    // Configuration du défilement automatique
    autoplay: {
      delay: 2000, // Délai entre chaque transition (2 secondes)
      disableOnInteraction: false, // Continue après interaction utilisateur
      pauseOnMouseEnter: true, // Pause quand la souris entre dans le slider
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true, // Effet dynamique sur les bullets
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      480: {
        slidesPerView: 2,
        spaceBetween: -10
      },
      768: {
        slidesPerView: 3,
        spaceBetween: -15
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: -20
      },
    },
    // Effet de fondu entre les slides
    on: {
      slideChangeTransitionStart: function() {
        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.style.transition = 'opacity 0.5s, transform 0.8s';
        });
      }
    }
  });
});
</script>

<?php
    endwhile;
else:
?>
    <div class="no-post-found">
        <p>Aucun contenu trouvé.</p>
    </div>
<?php
endif;

get_footer(); // Inclut le pied de page du thème
?>