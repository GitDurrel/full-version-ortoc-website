<?php get_header(); ?>

<style>

/* STRUCTURE GLOBALE */
.hero-page {
  min-height: 100vh; /* Ajusté à 100vh au lieu de 140vh pour plus de flexibilité */
  display: flex;
  flex-direction: row;
  position: relative;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Chute-de-la-Metche-IA-BON-scaled.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.hero-page::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.05));
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
  font-size: 70px;
  font-weight: 700;
  line-height: 1.2;
}

.hero-title span {
    font-weight: 200;
}



.hero-english {
  background-color: rgba(12, 65, 120, 0.95);
  border-radius: 8px;
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
  font-size: 35px;
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
  padding-top: 200px;
  padding-right: 0;
}

.description-content {
  background-color: rgba(0, 0, 0, 0.3);
  padding: 15px;
  border-radius: 30px;
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

.description-block h3 {
  background-color: rgba(12, 65, 120, 0.95); /* Fond bleu foncé semi-transparent */
  color: #FFD700; /* Couleur jaune pour le texte */
  font-family: Fredoka, sans-serif;
  font-size: 25px;
  font-weight: 700; /* Texte en gras */
  padding: 8px 12px;
  border-radius: 6px; /* Bords légèrement arrondis */
  margin: 0 0 12px 0; /* Marge en bas pour séparer du paragraphe */
  display: inline-block; /* Pour que le fond ne prenne que la largeur du texte */
  text-transform: uppercase; /* Texte en majuscules comme dans l'image */
  letter-spacing: 0.5px; /* Espacement des lettres pour meilleure lisibilité */
  position: relative; /* Pour le positionner correctement */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Légère ombre pour donner de la profondeur */
  transform: rotate(-2deg); /* Légère rotation comme dans l'image */
}

/* Style spécifique pour le titre en anglais pour le différencier */
.description-block:nth-child(3) h3 {
  transform: rotate(2deg); /* Rotation inverse pour le titre anglais */
   margin-top: 15px; 
}
/* Frize de séparation */
.frize-separation {
  height: 40px;
  width: 100%;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise-Nature-et-paysage.png');
  background-repeat: repeat-x;
  background-position: center;
  background-size: auto 100%;
  padding: 0;
  margin:0;
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

/* Styles pour la section des sites naturels */
.nature-sites-section {
  padding: 60px 20px;
    overflow: hidden;
  position: relative;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
}

.nature-sites-section::before{
        content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.8);
    z-index: -1;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
}

.sites-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
  margin-bottom: 40px;
}

.site-card {
  background-color: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.site-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.site-image {
  height: 320px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.site-info {
  padding: 20px;
}

.site-info h3 {
  font-family: Fredoka, sans-serif;
  font-size: 20px;
  font-weight: 600;
  margin-top: 0;
  margin-bottom: 10px;
  color: #0c4178;
}

.site-excerpt {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.5;
}

.view-site-btn {
  display: inline-block;
  padding: 8px 15px;
  background-color: #0c4178;
  color: white;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 500;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

.view-site-btn:hover {
  background-color: #0c5a9d;
  color: white;
}

.view-all-container {
  text-align: center;
  margin-top: 20px;
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

/* Responsive styles */
@media (max-width: 992px) {
  .sites-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .nature-sites-section {
    padding: 40px 15px;
  }
  
  .sites-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .site-image {
    height: 180px;
  }
}

</style>

<main class="hero-page">
  <!-- Colonne Gauche -->
  <div class="hero-content">
    <h2 class="hero-title">NATURE, <br><span>MONTAGNES</span>  <br>& PAYSAGES</h2>
    <div class="hero-english">
      <h2 class="hero-title small">Nature , <br>Mounstains <br>& LandScapes</h2>
    </div>
  </div>

  <!-- Colonne Droite -->
  <section class="description-section">
    <div class="description-content">
      <div class="description-blocks">
        <div class="description-block">
            <h3>LES TRÉSORS DE L’OUEST !</h3>
          <p>La région de l’Ouest-Cameroun se caractérise par son horizon vallonné, héritage d’anciens volcans. Les terres verdoyantes et fertiles en ont fait le grenier de tout le Cameroun et des pays limitrophes. Partez à la découverte des hautes terres où les paysages se suivent et ne se ressemblent pas, en parcourant les Monts Bamboutos, Mbapit, Batié et Bana, en observant les grandes plantations de café, de cacao, de thé de Santchou, de Djuttitsa; les belles chutes de Mamy Wata, Mouankeu et Métché, les grottes Demvoh et Fovu et bien d’autres trésors à découvrir. Bienvenue dans la région rêvée des randonneurs et des amoureux de la nature !</p>
        </div>
        <div class="frize-separation"></div>
        <div class="description-block">
            <h3>THE TREASURES OF THE WEST REGION!</h3>
          <p>The West region of Cameroon is characterised by its undulating landscape, legacy of ancient volcanoes. Its lush, fertile land has made it the bread basket of Cameroon and the neighbouring countries. Explore the highlands, where landscapes follow one another and never look the same, as you trek over the Bamboutos, Mbapit, Batié and Bana mountains, visiting the large coffee, cocoa and tea farms of Santchou and Djuttitsa, the beautiful Mamy Water, Mouankeu and Métché waterfalls, the demvoh and Fovu caves and many other treasures to discover. Welcome to the perfect area for hikers and nature lovers!</p>
        </div>
      </div>
    </div>
  </section>
</main>
<section class="nature-sites-section">
  <div class="container">
    <h2 class="section-title">Decouvrez <br>
      <span class="title_bold text_outline_white">nos sites naturels</span> 
    </h2>
    
    <div class="sites-grid">
      <?php
      $show_all = isset($_GET['all_sites']) && $_GET['all_sites'] == '1';
      $args = array(
        'post_type' => 'nature_paysage',
        'posts_per_page' => $show_all ? -1 : 6,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      
      $sites_query = new WP_Query($args);
      
      if ($sites_query->have_posts()) :
        while ($sites_query->have_posts()) : $sites_query->the_post();
          $thumbnail = '';
          if (function_exists('get_field')) {
            $image = get_field('image_principale');
            if ($image) {
              if (is_array($image) && isset($image['url'])) {
                $thumbnail = $image['url'];
              } elseif (is_numeric($image)) {
                $thumbnail = wp_get_attachment_url($image);
              } elseif (is_string($image)) {
                $thumbnail = $image;
              }
            }
          }
          if (!$thumbnail) {
            $thumbnail = 'https://tourismeouestcameroun.com/wp-content/uploads/2025/05/placeholder-image.jpg';
          }
      ?>
          <div class="site-card">
            <div class="site-image" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
            <div class="site-info">
              <h3><?php the_title(); ?></h3>
              <div class="site-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
              <a href="<?php the_permalink(); ?>" class="view-site-btn">Découvrir ce site</a>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
        <p>Aucun site naturel disponible pour le moment.</p>
      <?php endif; ?>
    </div>
    
    <div class="view-all-container">
      <?php if (!$show_all) : ?>
        <a href="?all_sites=1" class="view-all-btn">
          Voir tous les sites
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>


