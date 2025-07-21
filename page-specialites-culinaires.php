<?php
/**
 * Template Name: Spécialités Culinaires du Cameroun
 * Description: Template pour afficher les spécialités culinaires du Cameroun via CPT uniquement
 */
get_header();
?>
<style>
/* 
 * CSS pour le template Spécialités Culinaires du Cameroun
 * Version corrigée avec positionnement comme dans l'image de référence
 */

/* Conteneur principal avec width: 100% pour éviter les coupures */
.specialites-culinaires {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    font-family: 'Georgia', serif;
    padding-bottom: 60px;
    overflow: visible; /* Empêche que le contenu soit coupé */
    box-sizing: border-box;
}

/* Fond d'écran full-width */
.specialites-culinaires::before {
    content: '';
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fond-2-scaled.png') center/cover fixed;
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100%;
    z-index: -1;
    left: calc(-50vw + 50%);
}

/* Section introduction avec colonnes */
.introduction {
    display: flex;
    margin-bottom: 60px;
    align-items: flex-start; /* Aligne les éléments en haut */
}

/* Colonne image - maintenant plus large */
.colonne-droite {
    flex: 0 0 55%; /* Largeur fixe à 55% */
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: flex-start; /* Aligne en haut */
}

/* Grille d'images - en forme de losange */
.food-images {
    width: 100%;
    padding-right: 20px; /* Espacement à droite */
}

.food-image-grid img {
    width: 100%;
    height: auto;
    display: block; /* Élimine l'espace blanc en dessous */
    margin-top: 100px;
    
}


/* Colonne texte - plus étroite */
.colonne-gauche {
    flex: 0 0 50%; /* Largeur fixe à 50% - corrected from 45% in comment */
    display: flex;
    flex-direction: column;
    align-items: center; /* Centre le contenu */
    padding-top: 20px; /* Espace en haut */
}

/* Conteneur du logo - plus large */
.logo-container {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centre le logo et tagline */
    width: 100%;
    margin-bottom: 30px;
}

/* Image du logo - plus grande */
.intro-banner {
    width: 100%;
    max-width: 800px; /* Plus large que précédemment */
    height: 200px;
    margin-top: 70px;
    margin-bottom: 15px;
    object-fit:cover;
}

/* Tagline - avec police améliorée */
.tagline {
    font-size: 32px;
    font-family: 'Cormorant Garamond','Fredoka', 'Georgia', serif; /* Police plus élégante */
    font-style: italic;
   color: rgba(251, 188, 4, 0.95);
    /*margin-top: 10px;*/
    text-align: center;
    width: 100%;
    font-weight: 400; /* Plus léger */
    letter-spacing: 1px; /* Espacement des lettres */
}

/* Contenu texte */
.intro-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 0; 
    width: 100%;
    padding-top: 30px;
}

.french-intro, .english-intro {
    text-align: justify;
    /*color: #333;*/
    padding: 0 10px; /* Petit padding latéral */
    word-wrap: break-word; /* Permet aux mots longs de se couper */
    overflow-wrap: break-word; /* Alternative moderne à word-wrap */
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    color: #000000;
}

.french-intro p, .english-intro p {
    margin-bottom: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .introduction {
        flex-direction: column; /* Empilement vertical */
    }
    
    .colonne-gauche,
    .colonne-droite {
        flex: 1 1 100%; /* Prend toute la largeur */
    }
    
    .colonne-droite {
        margin-bottom: 30px; /* Espace après l'image sur mobile */
    }
    
    .food-images {
        max-width: 90%; /* Limite la largeur sur mobile */
        margin: 0 auto; /* Centre l'image */
        padding-right: 0; /* Pas de padding sur mobile */
    }
    
    .intro-banner {
        max-width: 80%; /* Plus petit sur mobile */
    }
    
    .tagline {
        font-size: 26px; /* Plus petit sur mobile */
    }
}

/* Titre stylé */
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

/* This .title_bold rule might conflict or be redundant with the one under .elementor-heading-title. 
   Keeping it for now as it might be used in other contexts on this specific page. */
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

/* This .text_outline_white might be redundant with the global one. 
   Keeping it for now as it might be used contextually here. */
.text_outline_white {
    text-shadow: 
        -1px -1px 0 #fff,
         1px -1px 0 #fff,
        -1px  1px 0 #fff,
         1px  1px 0 #fff;
}

/* Container général des plats */
.plats-camerounais-cpt {
    max-width: 1200px;
    margin: 0 auto 60px;
    padding: 0 20px;
}

/* Carte de plat - NOUVELLE VERSION plus proche de l'image 2 */
.plat-item {
    position: relative;
    display: flex;
    background: #fcf9f3;
    border-radius: 16px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    padding: 20px;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s;
    margin-bottom: 40px;
}

.plat-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
}

.plats-camerounais-cpt > .plat-item:first-of-type {
  margin-top: 40px;
}


/* Fond alterné - This might be overridden by .plat-item specific background */
.bg-light,
.bg-colored {
    background-color: #fcf9f3;
}

/* Container image circulaire aligné à gauche */
.plat-image {
  float: left;
  width: 300px;         /* largeur = hauteur pour un cercle */
  height: 300px;
  margin: 0 5px 25px 0;
  border-radius: 50%;   /* cercle */
  overflow: hidden;
  border: 5px solid #fff;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  /* pour que le texte l'enveloppe */
  shape-outside: circle(50%);
  -webkit-shape-outside: circle(50%);
  clip-path: circle(50%);
  display: block;
}


.plat-image img.plat-thumbnail {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Contenu textuel */
.plat-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    font-family: 'Georgia', serif;
    font-size: 1rem;
    line-height: 1.6;
    padding: 15px 10px;
}

.plat-title {
    font-family: 'Inter', serif;
    font-size: 20px;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 15px;
    color: rgba(251, 188, 4, 0.95);
    position: relative;
    padding-bottom: 8px;
}

.plat-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: rgba(251, 188, 4, 0.95);
}

.plat-description {
    text-align: justify;
    /*color: #333;*/
    padding: 0 10px; /* Petit padding latéral */
    word-wrap: break-word; /* Permet aux mots longs de se couper */
    overflow-wrap: break-word; /* Alternative moderne à word-wrap */
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    color: #000000;
}

/* Responsive */
@media (max-width: 768px) {
    .plat-item {
        flex-direction: column;
        align-items: center;
        padding-top: 30px;
    }
    
    .plat-image {
        margin-right: 0;
        margin-bottom: 20px;
    }
    
    .plat-content {
        padding: 0;
        width: 100%;
    }
    
    .plat-title {
        text-align: center;
        font-size: 1.6rem;
    }
    
    .plat-title:after {
        left: 50%;
        transform: translateX(-50%);
    }
}
.view-all-container {
    text-align: center;
    margin-top: 20px;
    width: 100%;
    display: flex;
    justify-content: center;
}
.view-all-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 25px;
    background-color: #FBBC04;
    color: #000;
    font-weight: 600;
    border-radius: 30px;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    box-shadow: 0 4px 10px rgba(251, 188, 4, 0.3);
    margin: 0 auto;
}
.view-all-btn:hover {
    background-color: #f0b500;
    transform: translateY(-2px);
}
.view-all-btn svg {
    transition: transform 0.3s ease;
}
.view-all-btn:hover svg {
    transform: translateX(5px);
}

/* Additional Responsive adjustments for page-specialites-culinaires */
@media (max-width: 480px) {
    .specialites-culinaires {
        padding-bottom: 30px; /* Reduce bottom padding */
    }

    .introduction {
        margin-bottom: 30px; /* Reduce margin */
    }

    .colonne-gauche {
        padding-top: 10px; /* Reduce padding */
    }
    
    .food-image-grid img {
        margin-top: 40px; /* Reduce margin-top for the image mosaic */
    }

    .intro-banner {
        max-width: 90%; /* Further reduce banner size */
        height: auto; /* Auto height for banner */
        margin-top: 30px; /* Reduce margin */
        margin-bottom: 10px;
    }

    .tagline {
        font-size: 20px; /* Further reduce tagline font size */
        letter-spacing: 0.5px;
    }

    .intro-content {
        padding-top: 15px; /* Reduce padding */
        gap: 15px;
    }

    .french-intro, .english-intro {
        font-size: 14px; /* Reduce intro text font size */
        padding: 0 5px; /* Reduce padding */
    }
    
    .french-intro p, .english-intro p {
        margin-bottom: 15px; /* Reduce paragraph margin */
    }

    .section-title {
        font-size: 36px; /* Reduce section title font size */
        line-height: 1.2; /* Adjust line height */
        margin-bottom: 20px;
    }
    
    .title_bold:after { /* Adjust underline for smaller title */
        height: 14px; 
        margin: -10px -10px 0;
    }

    .plats-camerounais-cpt {
        padding: 0 10px; /* Reduce padding */
        margin-bottom: 30px; /* Reduce bottom margin */
    }

    .plat-item {
        padding: 15px; /* Reduce padding */
        margin-bottom: 25px; /* Reduce margin */
    }
    
    .plats-camerounais-cpt > .plat-item:first-of-type {
      margin-top: 20px; /* Reduce margin */
    }

    .plat-image {
        width: 200px; /* Reduce image size */
        height: 200px;
        margin-bottom: 15px; /* Reduce margin */
        border-width: 3px; /* Reduce border */
    }

    .plat-title {
        font-size: 1.3rem; /* Further reduce plat title font size */
        margin-bottom: 10px;
    }
    
    .plat-title:after {
        width: 40px; /* Shorter underline */
        height: 2px;
    }

    .plat-description {
        font-size: 14px; /* Reduce description font size */
        padding: 0 5px; /* Reduce padding */
    }
    
    .view-all-btn {
        font-size: 14px;
        padding: 10px 20px;
        gap: 8px;
    }
}

@media (max-width: 992px) { /* Adding a tablet breakpoint for smoother transition */
    .introduction {
        gap: 20px; /* Add some gap if columns are still side-by-side */
    }
    .colonne-gauche {
        flex-basis: 45%; /* Adjust flex basis for better fit */
    }
    .colonne-droite {
        flex-basis: 50%;
    }
    .intro-banner {
        max-width: 90%;
        height: auto; /* Allow natural height scaling */
        margin-top: 50px;
    }
    .tagline {
        font-size: 28px;
    }
    .section-title {
        font-size: 48px;
        line-height: 1.2;
    }
    .title_bold:after {
        height: 22px;
        margin: -15px -15px 0;
    }
    .plat-image { /* Image in plat item */
        width: 250px;
        height: 250px;
    }
    .plat-title {
        font-size: 1.4rem; /* Approx 22px */
    }
    /* Ajout marges latérales pour le texte d'intro sur tablette/mobile */
    .intro-content, .french-intro, .english-intro {
        padding-left: 12px;
        padding-right: 12px;
    }
}

@media (max-width: 768px) {
    /* .introduction flex-direction, .colonne-gauche/droite flex, .food-images max-width, .intro-banner max-width, .tagline font-size are existing */
    /* .plat-item flex-direction/align-items, .plat-image margin, .plat-content width/padding, .plat-title text-align/font-size, .plat-title:after position are existing */
     .introduction {
        margin-bottom: 40px; /* Adjust margin */
    }
    .colonne-droite {
        order: -1; /* Show image first on mobile if desired */
    }
     .food-image-grid img {
        margin-top: 20px; /* Adjust from 100px */
    }
    .intro-banner {
        margin-top: 20px;
    }
    .intro-content {
        padding-top: 20px;
        padding-left: 12px;
        padding-right: 12px;
    }
    .french-intro, .english-intro {
        padding-left: 12px;
        padding-right: 12px;
    }
    .section-title { /* From 48px (at 992px) */
        font-size: 40px;
    }
    .plat-item {
        padding: 20px 15px; /* Adjust padding */
    }
    .plat-image {
        width: 220px; /* Adjust from 250px (at 992px) */
        height: 220px;
        margin-bottom: 15px;
    }
    .plat-title { /* Was 1.6rem in original 768px, ensuring consistency */
        font-size: 1.5rem;
    }
}

/* Consolidating existing @media (max-width: 480px) block with minor refinements */
@media (max-width: 480px) {
    .specialites-culinaires {
        padding-bottom: 20px; /* Further reduce */
    }
    .introduction {
        margin-bottom: 20px;
    }
    .colonne-gauche {
        padding-top: 0;
    }
    .food-image-grid img {
        margin-top: 10px;
    }
    .intro-banner {
        max-width: 80%; /* Was 90% in original block, adjusted from 70% in 768px */
        margin-top: 15px;
    }
    .tagline {
        font-size: 18px; /* Was 20px in original block, adjusted from 24px in 768px */
    }
    .intro-content {
        padding-top: 10px;
        gap: 10px;
        padding-left: 12px;
        padding-right: 12px;
    }
    .french-intro, .english-intro {
        padding-left: 12px;
        padding-right: 12px;
    }
    .french-intro, .english-intro {
        font-size: 13px; /* Was 14px */
    }
    .french-intro p, .english-intro p {
        margin-bottom: 10px;
    }
    .section-title {
        font-size: 30px; /* Was 36px */
    }
    .title_bold:after {
        height: 12px;
        margin: -8px -8px 0;
    }
    .plats-camerounais-cpt {
        padding: 0 5px;
        margin-bottom: 20px;
    }
    .plat-item {
        padding: 10px;
        margin-bottom: 20px;
    }
    .plats-camerounais-cpt > .plat-item:first-of-type {
      margin-top: 15px;
    }
    .plat-image {
        width: 180px; /* Was 200px */
        height: 180px;
        margin-bottom: 10px;
        border-width: 2px;
    }
    .plat-title {
        font-size: 1.2rem; /* Was 1.3rem */
        margin-bottom: 8px;
    }
    .plat-title:after {
        width: 35px;
    }
    .plat-description {
        font-size: 13px; /* Was 14px */
        padding: 0 5px;
    }
    .view-all-btn {
        font-size: 13px; /* Was 14px */
        padding: 8px 18px;
        gap: 6px;
    }
}
</style>

<div class="specialites-culinaires">
    <!-- Section d'introduction -->
    <section class="introduction">
        <!-- Colonne image - à gauche cette fois -->
        <div class="colonne-droite">
            <div class="food-images">
                <div class="food-image-grid">
                    <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Mosaique-1-scaled.png" alt="Plats camerounais" class="food-img">
                </div>
            </div>
        </div>
        
        <!-- Colonne texte - à droite -->
        <div class="colonne-gauche">
            <div class="logo-container">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Titre-scaled.png" alt="Spécialités culinaires du Cameroun" class="intro-banner">
                <h2 class="tagline">à goûter absolument</h2>
            </div>
            
            <div class="intro-content">
                <div class="french-intro">
                    <p>
                        Plongez dans les plus profondes découvertes de la gastronomie camerounaise répertoriée et prisée non seulement en son sein mais aussi au delà des frontières nationales. La gamme des plats est large et profonde, tributaire de la riche culture du pays, qui de manière concrète est mise en exergue par chacune des dix régions. Des mets spécifiques copieux dont la plupart sont riches en valeurs nutritives et qui portent des noms propres à chaque ethnie. De nos jours, cette chère revêt des enjeux économiques tant nationaux qu'internationaux, et arrive même à s'exporter en Europe et partout ailleurs. Douze spécialités marqueront vos papilles gustatives lors de votre séjour à l'Ouest-Cameroun.
                    </p>
                </div>
                <div class="english-intro">
                    <p>
                        Cameroon is full of several recipes in its culinary repertoire, capable of echoing beyond national borders. The range of dishes is wide and deep, depending on the rich culture of the country, which in a concrete way is highlighted by each of the ten regions. Hearty specific dishes, most of which are rich in nutritional values and which have names specific to each ethnic group. Nowadays, this dear has both national and international economic stakes, and even manages to export itself precisely to Europe. In this section, we have chosen just ten specialties that will mark your taste buds during your stay in West Cameroon.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section des plats CPT -->
    <section class="plats-camerounais-cpt">
         <h2 class="section-title">Decouvrez les <br> <span class="title_bold text_outline_white">incontournables</span></h2>
        <?php
        $args = array(
            'post_type' => 'plats_camerounais',
            'posts_per_page' => -1
        );
        $plats_query = new WP_Query($args);

        if ($plats_query->have_posts()) :
            $counter = 0;
            while ($plats_query->have_posts()) : $plats_query->the_post();
                $counter++;
                $bg_class = ($counter % 2 == 0) ? 'bg-light' : 'bg-colored';
        ?>
                <div class="plat-item <?php echo $bg_class; ?>">
                    <div class="plat-image"> 
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'plat-thumbnail']); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="<?php the_title_attribute(); ?>" class="plat-thumbnail">
                        <?php endif; ?>
                    </div>

                    <div class="plat-content">
                        <h3 class="plat-title"><?php the_title(); ?></h3>
                        <div class="plat-description">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <div class="no-plats">
                <p>Aucune spécialité culinaire n'a été ajoutée pour le moment.</p>
            </div>
        <?php endif; ?>
    </section>
    <div class="view-all-container">
        <a href="https://tourismeouestcameroun.com/hebergements/" class="view-all-btn">
            En savoir plus
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
    </div>
</div>

<?php get_footer(); ?>