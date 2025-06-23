<?php
/**
 * Template pour Chefferie Musée (single)
 */
get_header(); ?>

<style>
    /* Reset et styles généraux */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: 'Helvetica Neue', Arial, sans-serif;
      line-height: 1.6;
      color: #333;
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    /* SECTION I - Bannière principale */
    
    .hero-banner {
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
}

.hero-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.4) 100%);
  z-index: 1;
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

.hero-info {
  position: relative;
  z-index: 2;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 40px;
  margin-top: 30px;
}

.hero-info + .hero-info {
  margin-top: 15px;
}


.hero-info-item {
  display: flex;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
  text-transform: uppercase;
  line-height: 15px;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
  letter-spacing: 0;
}

.hero-info-item i {
  margin: 0 10px;
  font-size: 1.3rem;
  color: #FFD700;
}

.hero-info-item.small {
  font-size: 12px;
;
}

.hero-info-item.small i {
  font-size: 1.1rem;

}

/* Conteneur pour la frise */
.frise-container {
  position: relative;
  height: 28px; /* Hauteur de la frise visible */
  width: 100%;
  z-index: 15; /* S'assurer que la frise est au-dessus des poteaux */
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    background-attachment: fixed; /* pour effet paralaxe */
    margin-bottom: -30px; /* chevauche légèrement la section suivante */
}

.frise-transition {
  height: 100px;
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Frize-horizontale-chefferies.png') repeat-x center bottom;
  background-size: auto 100%;
  position: absolute;
  bottom: 0; /* Aligné au bas du conteneur */
  left: 0;
  right: 0;
  z-index: 5;
  width: 100%;
  top: -63px;
}

   
    
    /* SECTION II - Description */
    
    /* Positionnement de la frise pour éliminer l'espace blanc */
.description-section {
    position: relative;
    padding: 40px 20px 40px; /* Augmentation du padding-top pour compenser la frise */
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    overflow: visible;
    box-sizing: border-box;
   /* margin-top: -50px; /* Déplace la section vers le haut pour chevaucher */
}

.traditional-pole {
    position: absolute;
    height: 100%; /* Prend 100% de la hauteur du parent */
    background-size: auto 100%; /* La hauteur est à 100%, largeur auto */
    background-repeat: no-repeat;
    z-index: 10;
    width: 80px;
    top: 0;
    bottom: 0;
    opacity: 0.8;
}

.pole-left {
    left: 0;
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Pilier-chefferie2-scaled.png');
    background-position: left top; /* Aligné en haut à gauche */
}

.pole-right {
    right: 0;
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Pilier-chefferie-scaled.png');
    background-position: right top; /* Aligné en haut à droite */
}

.description-content {
    position: relative;
    z-index: 2;
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 60px; /* Padding pour éviter que le texte touche les piliers */
    width: 100%; /* S'assure que le contenu prend toute la largeur disponible */
    box-sizing: border-box;
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
    flex-direction: row; /* Force l'alignement horizontal */
    flex-wrap: nowrap; /* Empêche le retour à la ligne */
    gap: 30px; /* Espace entre les colonnes */
    justify-content: space-between; /* Répartit l'espace entre les colonnes */
}

.description-column{
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    word-wrap: break-word; /* Permet aux mots longs de se couper */
    overflow-wrap: break-word; /* Alternative moderne à word-wrap */
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    color: #000000;
}

.description-column h3 {
    margin-bottom: 20px;
    color: #219653;
    font-size: 1.5rem;
}

.description-column p {
    margin-bottom: 10px; /* Réduit de 15px à 10px */
    text-align: justify;
    line-height: 1.5; /* Réduit légèrement l'interligne de 1.6 à 1.5 */
    font-size: 0.95rem; /* Légèrement plus petit pour réduire la hauteur totale */
}

/* Media queries pour l'adaptation aux écrans plus petits */
@media (max-width: 992px) {
    .description-content {
        padding: 0 60px;
    }
}

@media (max-width: 768px) {
    .description-columns {
        flex-direction: column; /* Maintient l'alignement horizontal même sur mobile */
    }
    
    .description-column {
        width: 100%;
    }
    
    .description-content {
        padding: 0 40px;
    }
    
    .traditional-pole {
        width: 60px;
    }
    
    .description-column {
        font-size: 0.9rem; /* Texte légèrement plus petit sur mobile */
    }
}

@media (max-width: 576px) {
    .section-title {
        font-size: 2rem;
    }
    
    .description-column {
        padding: 20px;
    }
    
    .description-content {
        padding: 0 30px;
    }
    
    /* Même sur les très petits écrans, maintenir les colonnes côte à côte */
    .description-columns {
        gap: 15px; /* Espacement réduit */
    }
}

    
/* SECTION III - Galerie */
.gallery-section {
    position: relative;
    padding: 30px 20px;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    z-index: 1;
}

.gallery-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.85);
    z-index: -1;
}


/* Conteneur principal de la galerie */
.gallery-container {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 30px;
}

/* Éléments décoratifs traditionnels */
.gallery-decoration {
    position: absolute;
    width: 120px;
    height: 120px;
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.15;
    z-index: 0;
}

.decoration-left {
    left: -10px;
    top: 0;
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-1.png');
}

.decoration-right {
    right: -10px;
    bottom: 0;
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-2.png');
}

/* Styles pour la galerie Swiper (repris de single-nature_paysage.php) */
.gallery-swiper {
  width: 100%;
  padding: 40px 0;
  overflow: visible;
  margin-top: 20px;
}
.swiper-wrapper {
  align-items: center;
}
.curved-image-container {
  position: relative;
  width: 100%;
  height: 500px;
  overflow: hidden;
  border-radius: 30px;
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  transform: perspective(800px) rotateY(15deg);
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transform-origin: center;
  backface-visibility: hidden;
}
.swiper-slide {
  width: 380px;
  margin: 0 -5px;
  transition: all 0.6s ease;
  transform: scale(0.85);
  opacity: 0.65;
  filter: brightness(0.9) saturate(0.8);
}
.swiper-slide-active {
  transform: scale(1.1);
  opacity: 1;
  z-index: 10;
  filter: brightness(1.05) saturate(1.1);
}
.swiper-slide-prev {
  transform: perspective(800px) rotateY(20deg) scale(0.85);
}
.swiper-slide-next {
  transform: perspective(800px) rotateY(-20deg) scale(0.85);
}
.swiper-slide-active .curved-image-container {
  transform: perspective(800px) rotateY(0deg);
  box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
}
.gallery-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
  filter: contrast(1.05);
}
.curved-image-container:hover .gallery-image {
  transform: scale(1.08);
}
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
  width: 14px;
  height: 14px;
}
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

    /* SECTION IV - Informations pratiques */
.info-section {
  position: relative;
  padding: 30px 0 100px;
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
  z-index: 1;
}

.info-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background-color: rgba(255, 255, 255, 0.92);
  z-index: -1;
}

.info-section .container {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}


/* Style traditionnel pour les informations */

/* Corriger les listes insérées depuis WYSIWYG */
.info-card ul,
.info-card ol {
  list-style: none;
  margin: 0;
  padding: 0;
}

.info-card ul li,
.info-card ol li {
  position: relative;
  padding-left: 25px;
  font-size: 0.95rem;
  padding-top: 10px;
  padding-bottom: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}

.info-card ul li::before {
  content: '◆';
  position: absolute;
  left: 0;
  top: 10px;
  color: #FFD700;
  font-size: 0.8rem;
}

.info-card ul li:last-child {
  border-bottom: none;
}

.info-cards-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  position: relative;
}

/* Motifs traditionnels */
.info-decoration {
  position: absolute;
  width: 180px;
  height: 180px;
  background-size: contain;
  background-repeat: no-repeat;
  z-index: 0;
  opacity: 0.08;
}

.decoration-top-left {
  top: -60px;
  left: -60px;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-1.png');
  transform: rotate(-15deg);
}

.decoration-bottom-right {
  bottom: -60px;
  right: -60px;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/motif-cameroun-2.png');
  transform: rotate(15deg);
}

/* Cartes d'information */
.info-card {
  background: linear-gradient(135deg, #1E78BA, #0c4178);
  border-radius: 15px;
  padding: 30px 25px;
  color: #fff;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  position: relative;
  z-index: 2;
  transition: all 0.4s ease;
  display: flex;
  flex-direction: column;
  height: 100%;
  border: 1px solid rgba(255, 255, 255, 0.15);
  overflow: hidden;
}

.info-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, #FFD700, #FFA500);
}

.info-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 30px rgba(30, 120, 186, 0.25);
}

.info-card-icon {
  position: absolute;
  top: 20px;
  right: 20px;
  font-size: 2.2rem;
  color: rgba(255, 255, 255, 0.15);
}

.info-card h4 {
  margin-bottom: 20px;
  font-size: 1.4rem;
  font-weight: 600;
  color: #fff;
  padding-bottom: 15px;
  border-bottom: 2px solid rgba(255, 255, 255, 0.2);
  display: flex;
  align-items: center;
}

.info-card h4 i {
  margin-right: 12px;
  color: #FFD700;
}

.info-card p {
  font-size: 1rem;
  line-height: 1.7;
  margin-bottom: 15px;
}

.info-content {
  flex-grow: 1;
}

.attractions-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.attractions-list li {
  padding: 10px 0;
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
  position: relative;
  padding-left: 25px;
  font-size: 0.95rem;
}

.attractions-list li:last-child {
  border-bottom: none;
}

.attractions-list li::before {
  content: '◆';
  color: #FFD700;
  position: absolute;
  left: 0;
  top: 10px;
  font-size: 0.8rem;
}

/* Adaptations pour mobile */
@media (max-width: 1100px) {
  .info-cards-container {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .info-section {
    padding: 60px 0 80px;
  }
  
  .info-cards-container {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .info-card {
    padding: 25px 20px;
  }
}

/* Animation des cartes */
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

.info-card {
  animation: fadeInUp 0.6s ease forwards;
}

.info-card:nth-child(1) { animation-delay: 0.1s; }
.info-card:nth-child(2) { animation-delay: 0.2s; }
.info-card:nth-child(3) { animation-delay: 0.3s; }
.info-card:nth-child(4) { animation-delay: 0.4s; }
    
   
  </style>

<!-- SECTION I - Bannière principale -->
<section class="hero-banner" style="background-image: url('<?php the_field('image_principale'); ?>');">
  <div class="hero-content container">
    <h2 class="hero-title"><?php the_title(); ?></h2>
    <?php if (get_field('slogan')): ?>
      <div class="hero-info">
        <div class="hero-info-item"><i class="fas fa-quote-left"></i> <?php the_field('slogan'); ?> <i class="fas fa-quote-right"></i></div>
      </div>
    <?php endif; ?>
        <?php if (get_field('slogan_anglais')): ?>
      <div class="hero-info">
        <div class="hero-info-item small"><i class="fas fa-quote-left"></i> <?php the_field('slogan_anglais'); ?> <i class="fas fa-quote-right"></i></div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- FRISE (sortie de la section description) -->
<div class="frise-container">
  <div class="frise-transition"></div>
</div>

<!-- SECTION II - Description -->
<section class="description-section">
  <div class="traditional-pole pole-left"></div>
  <div class="traditional-pole pole-right"></div>
  
  <div class="container description-content">
    <h2 class="section-title">Description <br> <span class="title_bold text_outline_white">du Lieu</span></h2>
    <div class="description-columns">
      <div class="description-column">
        <p><?php the_field('description_colonne_francaise'); ?></p>
      </div>
      <div class="description-column">
        <p><?php the_field('description_colonne_anglaise'); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION III - Galerie -->
<section class="gallery-section">
  <div class="gallery-container">
    <h2 class="section-title">Galerie <br> <span class="title_bold text_outline_white">Photos</span></h2>
    
    <!-- Éléments décoratifs -->
    <div class="gallery-decoration decoration-left"></div>
    <div class="gallery-decoration decoration-right"></div>
    
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

<!-- SECTION IV - Informations utiles -->
<section class="info-section">
  <div class="container">
    <h2 class="section-title">Informations <br> <span class="title_bold text_outline_white">utiles</span></h2>
    
    <!-- Éléments décoratifs -->
    <div class="info-decoration decoration-top-left"></div>
    <div class="info-decoration decoration-bottom-right"></div>
    
    <div class="info-cards-container">
      <!-- Carte Horaires -->
      <div class="info-card">
        <div class="info-card-icon"><i class="fas fa-clock"></i></div>
        <h4><i class="fas fa-clock"></i> Horaires d'ouverture</h4>
        <div class="info-content">
          <p><?php echo wp_kses_post(get_field('horaires')); ?></p>
        </div>
      </div>
      
      <!-- Carte Tarifs -->
      <div class="info-card">
        <div class="info-card-icon"><i class="fas fa-tags"></i></div>
        <h4><i class="fas fa-tags"></i> Tarifs</h4>
        <div class="info-content">
          <p><?php echo wp_kses_post(get_field('tarifs')); ?></p>
        </div>
      </div>
      
       <!--Carte Contact -->
      <div class="info-card">
        <div class="info-card-icon"><i class="fas fa-phone-alt"></i></div>
        <h4><i class="fas fa-phone-alt"></i> Contact</h4>
        <div class="info-content">
          <?php if(get_field('telephone')): ?>
            <p><strong>Téléphone:</strong> <?php echo esc_html(get_field('telephone')); ?></p>
          <?php endif; ?>
          
          <?php if(get_field('email')): ?>
            <p><strong>Email:</strong> <?php echo esc_html(get_field('email')); ?></p>
          <?php endif; ?>
          
          <?php if(get_field('adresse')): ?>
            <p><strong>Adresse:</strong> <?php echo nl2br(esc_html(get_field('adresse'))); ?></p>
          <?php endif; ?>
        </div>
      </div>
      
      <!-- Carte À Voir -->
      <div class="info-card">
        <div class="info-card-icon"><i class="fas fa-eye"></i></div>
        <h4><i class="fas fa-eye"></i> Autres Attractions</h4>
        <div class="info-content">
        <?php 
            $attractions = get_field('autres_attractions'); 
            if (!empty($attractions)) : ?>
            <ul class="attractions-list">
                <?php echo wp_kses_post($attractions); ?>
            </ul>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  new Swiper('.gallery-swiper', {
    slidesPerView: 'auto',
    centeredSlides: true,
    spaceBetween: -15,
    loop: true,
    speed: 1000,
    grabCursor: true,
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 25,
      stretch: 0,
      depth: 250,
      modifier: 1.5,
      slideShadows: true,
    },
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true,
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
        slidesPerView: 1,
        spaceBetween: -15
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: -20
      },
    },
    on: {
      slideChangeTransitionStart: function() {
        document.querySelectorAll('.swiper-slide').forEach(slide => {
          slide.style.transition = 'opacity 0.5s, transform 0.8s';
        });
      }
    }
  });
});

  function showPanel(index) {
    const tabs = document.querySelectorAll('.info-tab');
    const panels = document.querySelectorAll('.info-panel');
    tabs.forEach((tab, i) => {
      tab.classList.toggle('active', i === index);
      panels[i].classList.toggle('active', i === index);
    });
  }
</script>

<?php get_footer(); ?>
