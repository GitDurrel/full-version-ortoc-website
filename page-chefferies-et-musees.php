<?php
/*
Template Name: Chefferies et Musées
Description: Page de présentation des chefferies et musées de l'Ouest Cameroun.
*/
get_header();
?>
<style>
/* Suppression du background sur body */
/* body {
    background: none;
} */
.chefferies-hero {
    max-width: 1400px;
    margin: 20px auto 0 auto;
    text-align: center;
    padding: 0 16px;
    position: relative;
    z-index: 2;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-Festival-scaled.jpg') center/cover fixed;
    border-radius: 24px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
    overflow: hidden; /* Pour que les frises ne débordent pas */
}

.chefferies-hero::before{
    content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.5);
    z-index: -1;
}
.chefferies-hero-title {
    font-size: 2.5rem;
    color: #0c4178;
    font-family: 'Fredoka', sans-serif;
    font-weight: 800;
    margin-bottom: 12px;
    letter-spacing: 1px;
}
.chefferies-hero-frise {
    width: 500px;
    margin: 24px auto 24px auto;
    display: block;
}

.chefferies-hero img {
    max-width: 100%;
    height: auto;
    object-fit: cover;
}
.chefferies-hero-desc {
    color: #222;
    font-size: 1.13rem;
    margin-bottom: 18px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.6;
    text-align: justify;
}
.chefferies-hero-desc.en {
    color: #444;
    font-size: 1.05rem;
    margin-top: 10px;
}
.chefferies-hero-desc strong {
    color: #0c4178; 
    font-weight: 700;
    letter-spacing: 0.5px;
    /* Si le fond ne permet pas la visibilité, tu peux remplacer par color: #0c4178; */
}

.chefferie-listing-section {
    background: #f5fafd;
    padding: 60px 0 40px 0;
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
.chefferie-listing-container {
    max-width: 1400px; /* Augmente la largeur max du listing */
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}
/* Nouveau design du listing : photo en fond, titre en overlay, plus de case marron */
.chefferie-card-link {
    display: block;
    position: relative;
    width: 100%;
    height: 100%;
    text-decoration: none;
    color: inherit;
    border-radius: 22px;
    overflow: hidden;
    transition: box-shadow 0.2s, transform 0.2s;
}
.chefferie-card-link:hover .chefferie-card {
    box-shadow: 0 16px 48px rgba(12,65,120,0.16);
    transform: translateY(-4px) scale(1.01);
}
.chefferie-card {
    position: relative;
    width: 100%;
    max-width: 98vw;
    min-height: 320px;
    margin: 0 auto;
    border-radius: 22px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    overflow: hidden;
    background: #fff;
    margin-bottom: 0;
    display: flex;
    align-items: stretch;
    cursor: pointer;
}
.chefferie-img-bg {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
    border-radius: 22px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
}
.chefferie-card-title-overlay {
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    color: #0c4178;
    font-size: 20px;
    margin-top: 0;
    margin-bottom: 10px;
    background: rgba(255,255,255,0.92);
    text-align: left;
    padding: 18px 28px 14px 28px;
    border-bottom-left-radius: 22px;
    border-bottom-right-radius: 22px;
    z-index: 3;
    box-sizing: border-box;
    text-shadow: none;
    letter-spacing: 1px;
    line-height: 1.1;
    overflow-wrap: break-word;
    word-break: break-word;
}
@media (max-width: 900px) {
    .chefferie-card-title-overlay {
        font-size: 1.2rem;
        padding: 10px 12px 8px 12px;
    }
    .chefferie-img-bg {
        height: 180px;
    }
}
/* === Décorations spécifiques à la page Chefferies & Musées === */
/* Logo décoratif principal (en haut, centré) */
.chefferies-hero-logo {
    width: 300px;
    margin: 0 auto 18px auto;
    display: block;
    z-index: 100;
}
/* Frises verticales dans le hero uniquement, prennent toute la hauteur du conteneur */
.chefferies-hero .chefferies-frise-verticale,
.chefferies-hero .chefferies-frise-verticale-droite {
    position: absolute;
    top: 0;
    bottom: 0;
    height: 100%;
    width: 60px;
    z-index: 1;
    opacity: 0.35;
    pointer-events: none;
    z-index: 100;
}
.chefferies-hero .chefferies-frise-verticale {
    left: 0;
}
.chefferies-hero .chefferies-frise-verticale-droite {
    right: 0;
    transform: scaleX(-1);
}
@media (max-width: 900px) {
    .chefferies-hero .chefferies-frise-verticale,
    .chefferies-hero .chefferies-frise-verticale-droite {
        display: none;
    }
    .chefferies-hero-frise {
        width: 90vw;
    }
    .chefferies-hero-logo {
        width: 90px;
    }
    .chefferies-hero-title {
        font-size: 2rem; /* Adjust hero title */
    }
    .chefferies-hero-title span { /* Sub-text in hero title */
        font-size: 1rem;
    }
    .chefferies-hero-desc {
        font-size: 1rem; /* Adjust hero description */
        padding: 0 10px; /* Add some horizontal padding if text is edge-to-edge */
    }
    .chefferies-hero-desc.en {
        font-size: 0.95rem;
    }
    /* Styles for the alternative card design, if they need adjustments at this breakpoint */
    .chefferie-card-title-overlay { /* This is the one for the .chefferie-card-link structure */
        font-size: 1.1rem; /* Further adjust if needed from 1.2rem */
        padding: 8px 10px 6px 10px;
    }
    .chefferie-img-bg { /* Image for .chefferie-card-link structure */
        height: 160px; /* Further adjust if needed from 180px */
    }
}

@media (max-width: 768px) {
    /* ... existing rules for grid and image height ... */
    .section-title { /* Listing section title */
        font-size: 36px;
        line-height: 1.2;
    }
    .title_bold:after { /* Underline for section title */
        height: 20px;
        margin: -12px -12px 0;
    }
    .chefferies-hero {
        padding: 20px 10px; /* Adjust hero padding */
        margin-top: 10px;
    }
    .chefferies-hero-logo {
        width: 70px; /* Smaller logo */
        margin-bottom: 10px;
    }
    .chefferies-hero-frise {
        margin: 15px auto; /* Adjust frise margin */
    }
     .chefferie-info h3 { /* Title in the primary chefferie cards */
        font-size: 18px;
    }
    .chefferie-excerpt { /* Excerpt in the primary chefferie cards */
        font-size: 13px;
    }
    .visiter-btn { /* Button in the primary chefferie cards */
        font-size: 13px;
        padding: 7px 12px;
    }
}

@media (max-width: 480px) {
    .chefferies-hero-title {
        font-size: 1.75rem;
    }
    .chefferies-hero-title span {
        font-size: 0.9rem;
    }
    .chefferies-hero-desc {
        font-size: 0.9rem;
    }
    .chefferies-hero-desc.en {
        font-size: 0.85rem;
    }
    .section-title {
        font-size: 28px;
    }
    .title_bold:after {
        height: 16px;
        margin: -10px -10px 0;
    }
    .chefferie-img { /* Image height for cards in .chefferies-grid */
        height: 160px;
    }
    .chefferie-info h3 {
        font-size: 1rem; /* 16px */
    }
    .chefferie-excerpt {
        font-size: 0.85rem; /* ~13px */
    }
    .visiter-btn {
        font-size: 0.85rem;
        padding: 6px 10px;
    }
    .view-all-btn { /* General "View All" button */
        font-size: 1rem;
        padding: 10px 24px;
    }

    /* Styles for the alternative card design at smallest screens, if used */
    .chefferie-card-title-overlay {
        font-size: 1rem;
        padding: 6px 8px 4px 8px;
    }
    .chefferie-img-bg {
        height: 140px;
    }
}

.chefferies-section {
    padding: 30px 20px;
  overflow: hidden;
  position: relative;
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
}
.chefferies-section::before{
  content: '';
  position: absolute;
  inset: 0;
  background-color: rgba(255, 255, 255, 0.8);
  z-index: -1;
}
.chefferies-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 25px;
  margin-bottom: 40px;
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
</style>

<div class="chefferies-hero">
    <!-- Frises verticales décoratives à gauche et à droite, uniquement dans le hero -->
    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fichier-1.png" alt="Frise verticale" class="chefferies-frise-verticale">
    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fichier-1.png" alt="Frise verticale droite" class="chefferies-frise-verticale-droite">
    <!-- Logo décoratif principal (ligne 171) :
         C'est l'icône principale (ex : 3 cases stylisées) affichée en haut de la page, centré, au-dessus du titre. 
         Change l'URL si besoin pour ton logo principal. -->
    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Illustration-case-Bami.png" alt="Icônes chefferies" class="chefferies-hero-logo">
    <h1 class="chefferies-hero-title">CHEFFERIES, MUSÉES & TRADITIONS<br><span style="font-size:1.1rem;font-weight:400;">Chiefdoms, Museums & Traditions</span></h1>
    <!-- Frise décorative horizontale (ligne 191) :
         C'est la frise graphique qui sépare le titre de l'intro, placée sous le titre principal. 
         Change l'URL si besoin pour ta frise horizontale. -->
    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Frise-chefferie-et-musees.png" alt="Frise décorative" class="chefferies-hero-frise">
    <div class="chefferies-hero-desc fr">
        <strong>AU COEUR DES GRANDES CHEFFERIES DE L'OUEST-CAMEROUN</strong><br>
        « SUR LA ROUTE DES CHEFFERIES »<br>
        Une des caractéristiques de la région est l'existence de puissantes et anciennes chefferies traditionnelles. Avant la colonisation, ces royaumes étaient des micro-États souverains. Si aujourd'hui les chefferies sont des auxiliaires d'administration exceptionnelle, on y demeure proche des mœurs ainsi que des richesses et rites d'une culture d'une originalité exceptionnelle. Venez tenter de percer les mystères qui les entourent et découvrir les palais où rois et lois gouvernent.<br><br>
        <strong>VENEZ VIVRE AU RYTHME DES CÉRÉMONIES ET AUTRES FESTIVALS DE L'OUEST</strong><br>
        Autour de ces grandes chefferies, les rois et leurs peuples vous présentent des cérémonies traditionnelles riches, des festivals et des rites joyaux. Chants, danses, musiques et conservations nourrissent l'originalité de la région. En bref, difficile d'imaginer un voyage à l'Ouest ne faisant la part belle à ces moments forts de la vie culturelle.<br><br>
        <strong>UN VOYAGE AU PAYS DES MUSÉES</strong><br>
        L'Ouest est également renommé pour le nombre et la qualité des musées qui parsèment son territoire. En effet, les chefferies et musées du sultanat Bamoun proposent un véritable voyage pour venir découvrir leurs incroyables collections et leurs histoires riches en rebondissements dans des musées à la scénographie travaillée et adaptée à tous les publics.
    </div>
    <div class="chefferies-hero-desc en">
        <strong>INSIDE THE GREAT CHIEFDOMS OF WEST REGION OF CAMEROON</strong><br>
        "ON THE WAY TO CHIEFDOMS"<br>
        One of the characteristics of the West Region is the existence of powerful traditional chiefdoms. Before colonisation, these kingdoms were sovereign micro-states. If today they are auxiliaries to the Cameroonian administration, they remain close to ancestral customs and traditions, as well as the riches of a culture of unique originality. Try to unravel the mysteries surrounding them and discover the palaces of the Chiefs who rule.<br><br>
        <strong>COME AND EXPERIENCE THE CEREMONIES AND FESTIVALS OF THE WEST REGION</strong><br>
        Around these great chiefdoms, the kings and their peoples present grand traditional ceremonies celebrating their heritage, as well as festivals and rites. Songs, dances, music and conversations nourish the incredible originality of the region. In short, it is hard to imagine a trip to the West Region without including these highlights of cultural life.<br><br>
        <strong>A TRIP TO THE LAND OF MUSEUMS</strong><br>
        The West Region is also well known for the number and quality of its museums. The Bamileke chiefdoms and museums of the Bamoun sultanate offer a real journey to discover their incredible collections and rich histories in museums with creative and accessible scenography for all audiences.
    </div>
    <!-- Frise décorative, modifie le lien si besoin -->
    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Frize-horizontale-chefferies.png" alt="Frise décorative" class="chefferies-hero-frise">
</div>

<section class="chefferies-section">
  <div class="container">
    <h2 class="section-title">Visiter <br>
      <span class="title_bold text_outline_white">nos chefferies & musées</span>
    </h2>
    <div class="chefferies-grid">
      <?php
      $show_all = isset($_GET['all_chefferies']) && $_GET['all_chefferies'] == '1';
      $chefferies = new WP_Query(array(
        'post_type' => 'chefferie_musee',
        'posts_per_page' => $show_all ? -1 : 6,
        'orderby' => 'title',
        'order' => 'ASC',
      ));
      if ($chefferies->have_posts()) :
        while ($chefferies->have_posts()) : $chefferies->the_post();
          $img_main = get_field('image_principale');
          $img_main_url = is_array($img_main) ? $img_main['url'] : $img_main;
          if (!$img_main_url) {
            $img_main_url = 'https://tourismeouestcameroun.com/wp-content/uploads/2025/05/placeholder-image.jpg';
          }
      ?>
        <div class="chefferie-card">
          <div class="chefferie-img" style="background-image: url('<?php echo esc_url($img_main_url); ?>')"></div>
          <div class="chefferie-info">
            <h3><?php the_title(); ?></h3>
            <div class="chefferie-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></div>
            <a href="<?php the_permalink(); ?>" class="visiter-btn">Visiter</a>
          </div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
        <p>Aucune chefferie enregistrée pour le moment.</p>
      <?php endif; ?>
    </div>
    <div class="view-all-container">
      <?php if (!$show_all) : ?>
        <a href="?all_chefferies=1" class="view-all-btn">
          Voir toutes les chefferies
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
