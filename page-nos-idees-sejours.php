<?php
/*
Template Name: Nos idées séjours (listing)
Description: Page de présentation et listing des CPT idées séjours, avec intro magazine et cartes circulaires.
*/
get_header();
?>
<style>
.idees-sejours-hero {
    position: relative;
    min-height: 60vh;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Idee-sejour-bon.jpg') center/cover no-repeat;
    display: flex;
    align-items: flex-end;
    justify-content: flex-start;
    padding: 0;
    margin-bottom: 0;
    padding-top: 120px; /* Pour éviter que la navbar ne recouvre le contenu */
}

.idees-sejours-hero-content {
    position: relative;
    z-index: 2;
    padding: 48px 32px 32px 64px;
    max-width: 700px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
.idees-sejours-title-block {
    display: flex;
    align-items: flex-end;
    gap: 18px;
    margin-bottom: 18px;
}
.idees-sejours-title-vertical {
    background: #FFD700;
    color: #0c4178;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    font-size: 30px;
    letter-spacing: 0.08em;
    padding: 10px 8px 10px 8px;
    border-radius: 8px;
    writing-mode: vertical-rl;
    text-orientation: mixed;
    text-align: center;
    box-shadow: 0 2px 8px rgba(12,65,120,0.10);
}
.idees-sejours-title-main {
    color: #fff;
    font-family: 'Fredoka', sans-serif;
    font-size: 2.7rem;
    font-weight: 700;
    line-height: 1.1;
    letter-spacing: 0.01em;
    margin-bottom: 0;
    text-shadow: 2px 2px 8px rgba(12,65,120,0.18);
}
.idees-sejours-title-emoji {
    font-size: 2.2rem;
    margin-left: 10px;
    margin-bottom: 0.2em;
}
.idees-sejours-title-english {
    color: #fff;
    font-family: 'Fredoka', sans-serif;
    font-size: 1.25rem;
    font-style: italic;
    font-weight: 400;
    margin-top: 2px;
    margin-left: 2px;
    letter-spacing: 0.01em;
    text-shadow: 1px 1px 6px rgba(12,65,120,0.13);
}
.idees-sejours-hero-texts {
    margin-top: 32px;
    color: #fff;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 15px;
    border-radius: 30px;
    color: white;
    max-width: 400px;
    width: 100%;
}
.idees-sejours-hero-texts strong {
    font-weight: 700;
    color: #FFD700;
}
.idees-sejours-hero-texts .en {
    display: block;
    margin-top: 10px;
    font-style: italic;
    color: #fff;
    opacity: 0.92;
}
@media (max-width: 900px) {
    .idees-sejours-hero-content {
        padding: 32px 12px 24px 18px;
    }
    .idees-sejours-title-main {
        font-size: 2rem;
    }
}
@media (max-width: 600px) {
    .idees-sejours-hero {
        min-height: 40vh;
    }
    .idees-sejours-hero-content {
        padding: 18px 4vw 18px 4vw;
    }
    .idees-sejours-title-block {
        gap: 8px;
    }
}

/* Grille des idées séjours */
.idees-sejours-listing-section {
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
    padding: 60px 20px;
    overflow: hidden;
    position: relative;
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
.idees-sejours-listing-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 36px 28px;
    padding: 0 24px;
}
.idee-sejour-bubble-card {
    background: #fff;
    border-radius: 50% 50% 50% 50% / 40% 60% 60% 40%;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    padding: 22px 10px 18px 10px;
    position: relative;
    min-height: 400px;
    max-width: 400px;
    margin: 0 auto;
    transition: box-shadow 0.3s, transform 0.3s;
    overflow: hidden;
    border: 2px solid #FFD70022;
    animation: fadeInUp 1s cubic-bezier(.39,.575,.565,1) both;
}
.idee-sejour-bubble-card:hover {
    box-shadow: 0 16px 48px rgba(12,65,120,0.18);
    transform: translateY(-8px) scale(1.04);
    border-color: #FFD700;
}
.idee-sejour-bubble-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0 4px 16px rgba(12,65,120,0.10);
    margin-bottom: 18px;
    border: 3px solid #FFD700;
    background: #eee;
}
.idee-sejour-bubble-title {
    font-family: 'Fredoka', sans-serif;
    font-size: 1.25rem;
    color: #0c4178;
    font-weight: 700;
    text-align: center;
    margin-bottom: 6px;
    margin-top: 0;
}
.idee-sejour-bubble-adjectif {
    color: #FFD700;
    font-size: 1.05rem;
    font-weight: 600;
    text-align: center;
    margin-bottom: 10px;
    font-family: 'Fredoka', sans-serif;
}
.idee-sejour-bubble-excerpt {
    color: #222;
    font-size: 0.98rem;
    text-align: center;
    margin-bottom: 18px;
    min-height: 48px;
}
.idee-sejour-bubble-btn {
    background: #FFD700;
    color: #0c4178;
    font-weight: 700;
    font-size: 1.08rem;
    padding: 12px 28px;
    border-radius: 32px;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(12,65,120,0.10);
    transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
    margin-top: auto;
    display: inline-block;
    border: none;
    letter-spacing: 0.5px;
    animation: ctaPulse 1.5s infinite;
}
.idee-sejour-bubble-btn:hover {
    background: #ffe066;
    color: #0c4178;
    transform: scale(1.06);
    box-shadow: 0 8px 32px rgba(12,65,120,0.13);
}
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: none; }
}
@keyframes ctaPulse {
    0% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
    70% { box-shadow: 0 0 0 16px rgba(255,215,0,0); }
    100% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
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

<!-- Section d'intro -->
<section class="idees-sejours-hero">
  <div class="idees-sejours-hero-content">
    <div class="idees-sejours-title-block">
      <div class="idees-sejours-title-vertical">NOS</div>
      <div>
        <div class="idees-sejours-title-main">IDÉES<br>SÉJOURS <span class="idees-sejours-title-emoji">🧳</span></div>
        <div class="idees-sejours-title-english">OUR HOLIDAYS IDEAS</div>
      </div>
    </div>
    <div class="idees-sejours-hero-texts">
      Dans cette rubrique, parcourez nos idées séjours qui vous feront découvrir la région de l'Ouest dans toute sa splendeur. Partout où vous irez, prenez ces fiches afin de les partager avec votre entourage. Nos idées séjours restent des suggestions et peuvent être personnalisées selon vos désirs.<br>
      <strong>À TRÈS BIENTÔT DANS L'OUEST</strong>
      <span class="en">
        In this section, have a look at our ideas for breaks that will help you discover the West of Region in all its beauty. Wherever you go, take the information sheets with you so you can share them with your friends and family. Our holiday ideas remain only some suggestions and can be personalised according to your wishes.<br>
        <strong>SEE YOU SOON IN THE WEST REGION</strong>
      </span>
    </div>
  </div>
</section>

<!-- Section listing des CPT -->
<section class="chefferies-section">
  <div class="container">
    <h2 class="section-title">Parcourez <br>
      <span class="title_bold text_outline_white">nos idées séjours</span>
    </h2>
    <div class="chefferies-grid">
      <?php
      $show_all = isset($_GET['all_idees']) && $_GET['all_idees'] == '1';
      $idees = new WP_Query(array(
        'post_type' => 'idees-sejours',
        'posts_per_page' => $show_all ? -1 : 6,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ));
      if ($idees->have_posts()) :
        while ($idees->have_posts()) : $idees->the_post();
          $img_main = get_field('image_principale');
          $img_main_url = is_array($img_main) ? $img_main['url'] : $img_main;
          if (!$img_main_url) {
            $img_main_url = 'https://via.placeholder.com/400x320?text=Idée';
          }
      ?>
        <div class="chefferie-card">
          <div class="chefferie-img" style="background-image: url('<?php echo esc_url($img_main_url); ?>')"></div>
          <div class="chefferie-info">
            <h3><?php the_title(); ?></h3>
            <a href="<?php the_permalink(); ?>" class="visiter-btn">Découvrir</a>
          </div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else:
      ?>
        <p>Aucune idée séjour trouvée.</p>
      <?php endif; ?>
    </div>
    <div class="view-all-container">
      <?php if (!$show_all) : ?>
        <a href="?all_idees=1" class="view-all-btn">
          Voir toutes les idées séjours
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
