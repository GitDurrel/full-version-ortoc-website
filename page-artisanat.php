<?php
/*
Template Name: Artisanat et Produits du Terroir
*/
get_header(); ?>

<style>
/* STRUCTURE GLOBALE - Style inspiré de l'image fournie */
.hero-page {
  min-height: auto;
  padding: 50px 20px;
  position: relative;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fond-1.png') !important;
  background-size: cover !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
}

/* Style du cadre décoratif */
.artisanat-header-container {
  max-width: 1200px;
  margin: 0 auto;
  position: relative;
  padding: 20px;
}

.artisanat-header-frame {
  position: relative;
  background: transparent !important;
  box-shadow: none !important;
  border-radius: 15px;
  padding: 20px;
  /*box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);*/
  overflow: hidden;
  border: 8px solid transparent;
  background-clip: padding-box;
}

/* Bordure décorative stylisée */
/*.artisanat-header-frame::before {*/
/*  content: "";*/
/*  position: absolute;*/
/*  top: -8px;*/
/*  right: -8px;*/
/*  bottom: -8px;*/
/*  left: -8px;*/
/*  z-index: -1;*/
  /*background: linear-gradient(to right, #0c4178, #2a6bb3);*/
/*  border-radius: 20px;*/
/*  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise-1.png');*/
/*}*/

/* Style du titre principal */
.artisanat-title-container {
  text-align: center;
  margin-bottom: 20px;
}

.artisanat-main-title {
  display: block;
  margin: 0 auto;
  max-width: 800px;
  height: auto;
}

.artisanat-english-title {
  text-align: center;
  color: #ffffff;
  font-family: Fredoka, sans-serif;
  font-size: 30px;
  font-weight: 600;
  margin-top: 5px;
  font-style: italic;
  line-height: 1.2;
}

/* Style des colonnes de texte */
.artisanat-content-columns {
  display: flex;
  gap: 30px;
  margin-top: 30px;
}

.artisanat-content-column {
  flex: 1;
}

.artisanat-content-column p {
  font-size: 16px;
  line-height: 1.6;
  text-align: justify;
  margin-bottom: 15px;
  color: #ffffff;
}

.content-title {
  font-family: Fredoka, sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: #FFD700;
  margin-bottom: 15px;
  text-transform: uppercase;
  position: relative;
  padding-left: 15px;
}

.content-title::before {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  width: 8px;
  height: 8px;
  background-color: #FBBC04;
  border-radius: 50%;
}

/* Frize de séparation */
/*.frize-separation {*/
/*  height: 40px;*/
/*  width: 100%;*/
/*  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise-Nature-et-paysage.png');*/
/*  background-repeat: repeat-x;*/
/*  background-position: center;*/
/*  background-size: auto 100%;*/
/*  padding: 0;*/
/*  margin: 0;*/
/*}*/

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

/* Styles pour la section des produits d'artisanat */
.artisanat-section {
  padding: 60px 20px;
  overflow: hidden;
  position: relative;
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
}

.artisanat-section::before {
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

.crafts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
  margin-bottom: 40px;
}

.craft-card {
  background-color: white;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.craft-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.craft-image {
  height: 320px;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.craft-info {
  padding: 20px;
}

.craft-info h3 {
  font-family: Fredoka, sans-serif;
  font-size: 20px;
  font-weight: 600;
  margin-top: 0;
  margin-bottom: 10px;
  color: #0c4178;
}

.craft-excerpt {
  font-size: 14px;
  color: #555;
  margin-bottom: 15px;
  line-height: 1.5;
}

.view-craft-btn {
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

.view-craft-btn:hover {
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

/* RESPONSIVE DESIGN */
@media (max-width: 1200px) {
  .hero-title {
    font-size: 50px;
    line-height: 50px;
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
  .artisanat-content-columns {
    flex-direction: column;
  }
  
  .hero-page {
    padding: 30px 15px;
  }
  
  .artisanat-header-frame {
    padding: 15px;
  }
  
  .artisanat-main-title {
    max-width: 300px;
  }
  
  .artisanat-english-title {
    font-size: 20px;
  }
  
  .content-title {
    font-size: 16px;
  }
  
  .crafts-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .artisanat-content-columns {
    gap: 20px;
  }
  
  .artisanat-header-frame {
    padding: 10px;
  }
  
  .artisanat-main-title {
    max-width: 250px;
  }
  
  .artisanat-english-title {
    font-size: 18px;
  }
  
  .content-title {
    font-size: 15px;
  }
  
  .artisanat-content-column p {
    font-size: 13px;
  }
  
  .artisanat-section {
    padding: 40px 15px;
  }
  
  .crafts-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }
  
  .craft-image {
    height: 180px;
  }
}

@media (max-width: 480px) {
  /* .hero-content class not found in this file's HTML, commented out. Assuming .hero-page or .artisanat-header-container serve this purpose. */
  /*
  .hero-content {
    padding: 30px 15px;
    padding-top: 60px;
  }
  */

  .hero-page { /* Ensure padding is consistent for hero section */
      padding: 20px 10px;
  }
  
  /* .hero-title class not found directly, .artisanat-main-title (image) and .artisanat-english-title (text) are used */
  /*
  .hero-title {
    font-size: 32px;
    line-height: 32px;
  }
  */

  .artisanat-main-title { /* This is an image, scaling is handled by max-width */
    max-width: 95%; /* Ensure it doesn't overflow its container */
  }

  .artisanat-english-title {
    font-size: 16px; /* Further reduce if needed from 18px at 768px */
  }
  
  .section-title { /* This is the "Découvrez nos produits d'artisanat" title */
    font-size: 28px;
    line-height: 1.2; /* Adjust line height */
  }
  
  /* .hero-title.small class not found */
  /*
  .hero-title.small {
    font-size: 1.3rem;
  }
  */
  
  /* .description-block p class not found */
  /*
  .description-block p {
    font-size: 0.9rem;
  }
  */
  
  .title_bold:after { /* Underline for .section-title */
    height: 14px;
    margin: -10px -10px 0;
  }

  .artisanat-content-column p { /* Text in the top two columns */
    font-size: 13px; /* Already set at 768px, ensure it's good */
    line-height: 1.5;
  }
  
  .craft-image { /* Image in product cards */
    height: 160px;
  }
  .craft-info h3 { /* Title in product cards */
    font-size: 18px;
  }
  .craft-excerpt { /* Excerpt in product cards */
    font-size: 13px;
  }
  .view-craft-btn { /* Button in product cards */
    font-size: 13px;
    padding: 7px 12px;
  }
  .view-all-btn { /* "Voir tous les produits" button */
    font-size: 1rem;
    padding: 10px 28px;
  }

  /* .frize-separation { height: 20px; } /* Class not found, and already commented out in original CSS */
}

/* Corrige le fond violet */
/*.hero-page,*/
/*.artisanat-header-frame {*/
/*    background: transparent !important;*/
/*    box-shadow: none !important;*/
/*}*/

/* Responsive pour la première section */
@media (max-width: 900px) {
    .artisanat-content-columns {
        flex-direction: column !important;
        gap: 10px !important;
    }
    .artisanat-header-frame {
        padding: 8px !important;
    }
    .artisanat-title-container {
        margin-bottom: 10px !important;
    }
    .artisanat-main-title {
        max-width: 90vw !important;
        /* font-size: 1.2rem !important; /* This is an image, font-size not applicable */
    }
    .artisanat-english-title {
        font-size: 1rem !important;
    }
    .content-title {
        font-size: 1rem !important;
        padding-left: 8px !important;
    }
    .artisanat-content-column p {
        font-size: 0.98rem !important;
        padding: 0 2vw !important;
    }
}
@media (max-width: 600px) {
    .artisanat-header-container {
        padding: 4vw !important;
    }
    .artisanat-header-frame {
        padding: 4vw !important;
    }
    .artisanat-title-container {
        margin-bottom: 6px !important;
    }
    .artisanat-main-title {
        max-width: 98vw !important; /* Image, ensure it scales */
    }
}

/* Specific adjustments for very small screens like iPhone 5/SE (320px width) if necessary */
@media (max-width: 360px) {
    .hero-page {
        padding: 15px 5px;
    }
    .artisanat-header-frame {
        padding: 5px !important; /* Override if needed */
    }
    .artisanat-english-title {
        font-size: 14px;
    }
    .content-title { /* From @media (max-width: 900px) */
        font-size: 0.9rem !important;
    }
    .artisanat-content-column p { /* From @media (max-width: 900px) */
        font-size: 0.85rem !important;
    }
    .section-title {
        font-size: 24px;
    }
    .title_bold:after {
        height: 12px;
        margin: -8px -8px 0;
    }
    .craft-image {
        height: 150px;
    }
    .craft-info h3 {
        font-size: 16px;
    }
    .craft-excerpt {
        font-size: 12px;
    }
    .view-craft-btn {
        font-size: 12px;
        padding: 6px 10px;
    }
     .view-all-btn {
        font-size: 0.9rem;
        padding: 8px 20px;
    }
}
</style>

<main class="hero-page">
  <div class="artisanat-header-container">
    <div class="artisanat-header-frame">
      <!-- En-tête avec logo/image -->
      <div class="artisanat-title-container">
        <!-- Note: Remplacez ceci par votre vraie image du titre -->
        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Grand-titre_1.png" alt="ARTISANAT & Produits du Terroir" class="artisanat-main-title">
        <div class="artisanat-english-title">HANDICRAFTS AND local products</div>
      </div>
      
      <!-- Contenu en deux colonnes -->
      <div class="artisanat-content-columns">
        <!-- Colonne gauche - Français -->
        <div class="artisanat-content-column">
          <h3 class="content-title">UNE REGION PLEINE DE TALENTS, UNE TERRE D'ARTISTES ET D'ARTISANS</h3>
          <p>L'identité des Pays Bamoun et Bamiléké est aussi caractérisée par un artisanat riche et des savoir-faire millénaires. Dans les ateliers, découvrez la sculpture, la poterie, le rotin, la vannerie, le bambou raphia, le perlage ou encore la ferronnerie. Le centre artisanal de Dschang fait figure de carrefour de l'artisanat du Cameroun. Il présente des objets provenant des 4 coins du pays. Le village artisanal de Foumban fait l'exclusivité avec la fonderie. A Bangoulap, le centre culturel Jean Félicien Gacha s'illustre par ses ateliers de perlage et de ferronnerie. Au village Foto à Dschang, découvrez le tisserand Tananzeu et le sculpteur Tato, la forge de Lefang... de nombreuses excursions sont organisées pour rencontrer ces artisans, toujours très heureux de partager leur expérience et leur savoir-faire.</p>
          <p>SAVOUREZ LES DÉLICES DE L'OUEST</p>
          <p>De ce terroir fertile abondent des produits riches en saveurs et en traditions. Vous pourrez ainsi participer à l'extraction du vin de raphia et à la récolte du miel des montagnes à Foto. Les monastères des moines de Babété, de Koutaba, la ferme de Baleng et l'entreprise SiPo vous proposent des confitures, du chocolat, du vin de raphia, du lait, des yaourts, fromages et de nombreux autres produits à déguster !</p>
        </div>
        
        <!-- Colonne droite - Anglais -->
        <div class="artisanat-content-column">
          <h3 class="content-title">A REGION FULL OF TALENT, A LAND OF ARTISTS AND CRAFTSPEOPLE</h3>
          <p>he identity of the Bamoun and Bamiléké people is also characterised by their rich crafts and ageold skills. In shops, discover sculpture, pottery, rattan, basketry, bamboo raffia, beadwork and ironwork. The Dschang craft centre is a crossroads for Cameroonian crafts. It showcases objects from all over the country. The Foumban handicraft village has an exclusive foundry. In Bangoulap, the Jean Félicien Gacha cultural centre boasts beadwork and ironwork shops. Discover in Foto village in Dschang, Tananzeu the weaver, and Tato the sculptor, the Lefang forge... numerous excursionsare organised to meet these craftsmen, who are always very happy to share their experience and know-how.</p>
          <p>TASTE THE DELIGHTS OF THE WEST</p>
          <p>This fertile land is full of products rich in flavour and tradition. You can take part in the extraction of raffia wine and the harvesting of mountain's honey at Foto. The monasteries of the monks of Babété and Koutaba, the Baleng farm and the SiPo company offer jams, chocolate, raffia wine, milk, yoghurts, cheeses and many other products to taste !</p>
        </div>
      </div>
    </div>
  </div>
</main>

<section class="artisanat-section">
  <div class="container">
    <h2 class="section-title">Découvrez <br>
      <span class="title_bold text_outline_white">nos produits d'artisanat</span> 
    </h2>
    
    <div class="crafts-grid">
      <?php
      // Récupération des 6 premiers posts du CPT artisanat
      $args = array(
        'post_type' => 'artisanat_produit',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      
      $crafts_query = new WP_Query($args);
      
      if ($crafts_query->have_posts()) :
        while ($crafts_query->have_posts()) : $crafts_query->the_post();
          // Obtenir l'image depuis le champ ACF image_principale
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
          
          // Image par défaut si aucune image n'est trouvée
          if (!$thumbnail) {
            $thumbnail = 'https://tourismeouestcameroun.com/wp-content/uploads/2025/05/placeholder-image.jpg';
          }
      ?>
          <div class="craft-card">
            <div class="craft-image" style="background-image: url('<?php echo $thumbnail; ?>')"></div>
            <div class="craft-info">
              <h3><?php the_title(); ?></h3>
              <div class="craft-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
              <a href="<?php the_permalink(); ?>" class="view-craft-btn">Découvrir ce produit</a>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
        <p>Aucun produit d'artisanat disponible pour le moment.</p>
      <?php endif; ?>
    </div>
    
    <div class="view-all-container">
      <a href="<?php echo get_post_type_archive_link('artisanat'); ?>" class="view-all-btn">
        Voir tous les produits
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>