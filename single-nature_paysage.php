<?php 

get_header();


// Charger les dépendances Swiper
wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');
wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), null, true);

?>

<style>

/* STRUCTURE GLOBALE */
.hero-page {
  min-height: 100vh; /* Ajusté à 100vh au lieu de 140vh pour plus de flexibilité */
  display: flex;
  flex-direction: row;
  position: relative;
  background-image: url('<?php the_field('image_principale'); ?>');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.hero-page::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.1));
  z-index: 0;
}

/* COLONNE GAUCHE */
.hero-content {
  flex: 1;
  padding: 80px;
  padding-top: 150px;
  z-index: 1;
  color: white;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}

.hero-title {
  font-family: Fredoka, sans-serif;
  font-size: 61px;
  font-weight: 700;
  line-height: 61px;
}

.hero-subtitle {
  font-size: 30px;
  margin: 10px 0;
  color:rgba(251, 188, 4, 0.95);
}

.hero-english {
  background-color: rgba(12, 65, 120, 0.95);
  border-radius: 20px;
  margin-top: 30px;
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: auto; /* Auto width instead of max-width */
  padding: 15px 25px; /* Increased horizontal padding */
  align-self: flex-start; /* Align to the start of the flex container */
}

.hero-title.small {
  font-size: 1.6rem;
  text-align: center;
  white-space: nowrap; /* Prevent text wrapping */
}

.hero-subtitle.small {
  font-size: 1.1rem;
  margin-top: 5px;
  text-align: center;
  white-space: nowrap; /* Prevent text wrapping */
}

/* COLONNE DROITE */
.description-section {
  flex: 1;
  display: flex;
  align-items: flex-start;
  justify-content: center;
  z-index: 1;
  padding: 40px;
  padding-top: 500px;
  padding-right: 0;
}

.description-content {
  background-color: rgba(0, 0, 0, 0.5);
  padding: 15px;
  border-radius: 12px;
  color: white;
  max-width: 300px;
  width: 100%;
}

.description-blocks {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.description-block p {
  margin: 0;
  font-size: 1rem;
  line-height: 1.6;
  text-align: justify;
}

/* Frize de séparation */
.frize-separation {
  height: 40px;
  width: 100%;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise-Nature-et-paysage.png');
  background-repeat: repeat-x;
  background-position: center;
  background-size: auto 100%;
}

.section-title {
  text-align: center;
  font-size: 61px;
  font-weight: 400;
  font-family: Fredoka, sans-serif;
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

.title_bold:after {
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

/* RESPONSIVE DESIGN */
@media (max-width: 1200px) {
  .hero-title {
    font-size: 50px;
    line-height: 50px;
  }
  
  .hero-subtitle {
    font-size: 26px;
  }
  
  .section-title {
    font-size: 50px;
    line-height: 50px;
  }
  
  .description-section {
    padding-top: 400px;
  }
}

@media (max-width: 992px) {
  .hero-page {
    flex-direction: column;
    min-height: auto;
  }
  
  .hero-content {
    padding: 60px 40px;
    padding-top: 100px;
  }
  
  .description-section {
    padding: 40px;
    padding-top: 0;
    align-items: center;
  }
  
  .description-content {
    max-width: 600px;
  }
  
  .hero-title {
    font-size: 40px;
    line-height: 40px;
  }
  
  .hero-subtitle {
    font-size: 22px;
  }
  
  .section-title {
    font-size: 40px;
    line-height: 40px;
  }
  
  .title_bold:after {
    height: 22px;
    margin: -16px -16px 0;
  }
}

@media (max-width: 768px) {
  .hero-content {
    padding: 40px 20px;
    padding-top: 80px;
  }
  
  .hero-english {
    width: auto; /* Même en mode mobile, garde la largeur selon le contenu */
  }
  
  .hero-title {
    font-size: 36px;
    line-height: 36px;
  }
  
  .hero-subtitle {
    font-size: 20px;
  }
  
  .section-title {
    font-size: 36px;
    line-height: 36px;
    margin-bottom: 20px;
  }
  
  .title_bold:after {
    height: 18px;
    margin: -14px -14px 0;
  }
  
  .description-section {
    padding: 20px;
  }
  
  .description-content {
    max-width: 100%;
  }
}

@media (max-width: 480px) {
  .hero-content {
    padding: 30px 15px;
    padding-top: 60px;
  }
  
  .hero-title {
    font-size: 32px;
    line-height: 32px;
  }
  
  .hero-subtitle {
    font-size: 18px;
  }
  
  .section-title {
    font-size: 32px;
    line-height: 32px;
  }
  
  .hero-title.small {
    font-size: 1.3rem;
  }
  
  .hero-subtitle.small {
    font-size: 1rem;
  }
  
  .description-block p {
    font-size: 0.9rem;
  }
  
  .title_bold:after {
    height: 16px;
    margin: -12px -12px 0;
  }
  
  .frize-separation {
    height: 20px;
  }
}

/* Styles de base pour la section de galerie */
.gallery-section {
  padding: 60px 0;
  overflow: hidden;
  position: relative;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
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

</style>

<main class="hero-page">
  <!-- Colonne Gauche -->
  <div class="hero-content">
    <h2 class="hero-title"><?php the_title(); ?></h2>
    <h3 class="hero-subtitle"><?php the_field('sous_titre'); ?></h3>
    <div class="hero-english">
      <h2 class="hero-title small"><?php the_field('site_name'); ?></h2>
      <h3 class="hero-subtitle small"><?php the_field('subtitle'); ?></h3>
    </div>
  </div>

  <!-- Colonne Droite -->
  <section class="description-section">
    <div class="description-content">
      <div class="description-blocks">
        <div class="description-block">
          <p><?php the_field('description_francaise'); ?></p>
        </div>
        <div class="frize-separation"></div>
        <div class="description-block">
          <p><?php the_field('description_anglaise'); ?></p>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- SECTION III - Galerie avec effet plus prononcé -->
<section class="gallery-section">
  <div class="gallery-container">
    <h2 class="section-title">Galerie<br> <span class="title_bold text_outline_white">Photos</span></h2>
    
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

<?php get_footer(); ?>

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
