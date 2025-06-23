<?php get_header(); ?>

<style>
.intro-hebergements {
    min-height: 130vh; /* Ajusté à 100vh au lieu de 140vh pour plus de flexibilité */
  display: flex;
  flex-direction: row;
  position: relative;
  background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/zingana.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  /*padding-top: 50px;*/
}
.intro-hebergements .container {
  max-width: 1200px;
  margin: auto;
  /*background: rgba(0,0,0,0.4);*/
  padding: 40px;
  /*border-radius: 16px;*/
}
.intro-hebergements h1 {
    font-family: Fredoka;
    font-size: 61px;
    font-weight: 700;
    line-height: 0.6;
    color: #FFD700;
}
.intro-hebergements h1 span {
    font-family: Fredoka;
    font-size: 30px;
    font-weight: 400;
    /*line-height: 61px;*/
}
.intro-hebergements h2 {
  font-family: 'Pacifico', cursive;
  font-size: 1.7rem;
  color: #fff;
  margin-top: 30px;
}
.intro-hebergements p {
    padding-top: 30px;
    word-wrap: break-word; /* Permet aux mots longs de se couper */
    overflow-wrap: break-word; /* Alternative moderne à word-wrap */
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 150%;
    color: #ffffff;
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
    background-color: rgba(255, 255, 255, 0.4);
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

.agenda-culturel-download {
    display: flex;
    justify-content: center;
    margin-bottom: 32px;
}
.agenda-culturel-download a {
    display: inline-flex;
    align-items: center;
    background: linear-gradient(90deg, #0c4178 0%, #ffd700 100%);
    color: #fff;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 14px 32px;
    border-radius: 32px;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(12,65,120,0.10);
    transition: background 0.2s, box-shadow 0.2s;
    margin: 0 8px;
    margin-top: 30px;
}
.agenda-culturel-download a:hover {
    background: linear-gradient(90deg, #ffd700 0%, #0c4178 100%);
    box-shadow: 0 8px 32px rgba(12,65,120,0.13);
}
.agenda-culturel-download a .icon {
    margin-right: 10px;
    font-size: 1.3em;
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
    background-color: rgba(255, 255, 255, 0.4);
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

.hebergements-list {
  background: #f8f8f8;
  padding: 50px 0;
}
.hebergements-list .container {
  max-width: 1200px;
  margin: auto;
}
.filters {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
  flex-wrap: wrap;
}
.filters input[type="text"],
.filters select {
  min-width:200px;
  padding: 10px;
  border-radius: 6px;
  border: 1px solid #ccc;
}
.filters input[type="text"] {
  flex:1;
}
.cards-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 24px;
}
.card-hotel {
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  display: flex;
  flex-direction: column;
}
.card-hotel img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
.card-hotel h3 {
  margin: 0 0 8px 0;
  font-size: 1.2rem;
  color: #333;
}
.card-hotel p {
  margin: 0 0 8px 0;
  color: #888;
  font-size: 0.95rem;
}
.card-hotel p:last-child {
  color: #555;
  font-size: 0.98rem;
}
.card-hotel a {
  display: inline-block;
  margin-top: 10px;
  color: #e6e94f;
  font-weight: bold;
  text-decoration: none;
}
.pagination {
  text-align:center;
  margin-top: 30px;
}
.pagination button {
  padding: 12px 28px;
  border-radius: 6px;
  border: none;
  background: #e6e94f;
  color: #333;
  font-weight: bold;
  font-size: 1rem;
  cursor: pointer;
}

@media (max-width: 900px) {
  .intro-hebergements .container {
    padding: 20px;
  }
  .hebergements-list .container {
    padding: 0 10px;
  }
}

@media (max-width: 992px) { /* Adding a general tablet breakpoint */
    .intro-hebergements {
        min-height: auto; /* Allow natural height */
        padding-top: 80px; /* Adjust for navbar */
        padding-bottom: 40px;
    }
    .intro-hebergements h1 {
        font-size: 48px;
        line-height: 1.1; /* Ensure readability */
    }
    .intro-hebergements h1 span {
        font-size: 24px;
    }
    .intro-hebergements h2 {
        font-size: 1.5rem;
    }
    .section-title { /* For .festival-description and .gallery-section titles */
        font-size: 48px;
        line-height: 1.2;
    }
    .title_bold:after {
        height: 22px;
        margin: -15px -15px 0;
    }
    .description-columns {
        flex-direction: column;
        gap: 20px;
    }
    .description-column {
        padding: 20px;
    }
    .description-column h3 {
        font-size: 1.3rem;
    }
    .agenda-culturel-download a {
        font-size: 1rem;
        padding: 12px 24px;
    }
}

@media (max-width: 768px) {
  /* Existing .section-title rule: font-size: 32px; */
  /* Existing .swiper-slide rule: width: 300px; */
  /* Existing .curved-image-container rule: height: 420px; */

  .intro-hebergements {
    padding-top: 60px;
    padding-bottom: 30px;
  }
  .intro-hebergements .container { /* Already has padding: 20px at 900px */
      padding: 20px 15px;
  }
  .intro-hebergements h1 {
    font-size: 38px;
  }
  .intro-hebergements h1 span {
    font-size: 20px;
  }
  .intro-hebergements h2 {
    font-size: 1.3rem;
    margin-top: 20px;
  }
  .intro-hebergements p {
    font-size: 1rem; /* Base paragraph size */
    padding-top: 20px;
  }
  .description-column p { /* Assuming p tags in description columns */
      font-size: 0.95rem;
  }
  .agenda-culturel-download a {
    font-size: 0.95rem;
    padding: 10px 20px;
    margin: 0 4px 8px 4px; /* Allow wrapping */
  }
  .agenda-culturel-download {
      flex-wrap: wrap;
  }
  .curved-image-container { /* Swiper image container */
    height: 350px; /* Further reduce for mobile portrait */
  }
}

@media (max-width: 480px) {
  .intro-hebergements h1 {
    font-size: 30px;
  }
  .intro-hebergements h1 span {
    font-size: 18px;
  }
  .intro-hebergements h2 {
    font-size: 1.1rem;
    margin-top: 15px;
  }
  .intro-hebergements p {
    font-size: 0.9rem;
    padding-top: 15px;
  }
  .section-title { /* General section titles, building on 768px rule */
    font-size: 28px;
  }
  .title_bold:after {
    height: 16px;
    margin: -10px -10px 0;
  }
  .description-column {
      padding: 15px;
  }
  .description-column h3 {
      font-size: 1.15rem;
  }
  .description-column p {
      font-size: 0.9rem;
  }
  .agenda-culturel-download a {
    width: 100%; /* Make download buttons full width */
    justify-content: center;
    margin-left: 0;
    margin-right: 0;
  }
  .curved-image-container { /* Swiper image container */
    height: 280px;
  }
  .swiper-slide { /* Adjust slide width for very small screens if using 'auto' */
      width: 260px !important; /* Important if Swiper's internal styles override */
  }
  .swiper-button-next, .swiper-button-prev { /* Swiper nav buttons */
      width: 35px;
      height: 35px;
  }
  .swiper-button-next:after, .swiper-button-prev:after {
      font-size: 16px;
  }
}
</style>

<!-- Section d'introduction -->
<section class="intro-hebergements">
  <div class="container">
    <h1 class='hero-title'>HÉBERGEMENT<br><span>A L'OUEST</span></h1>
    <h2>Accomodation in the West region</h2>
    <!--<p>-->
    <!--  Les hôtels de l'ouest Cameroun proposent trois types d'hébergements : les cases d'hôtes, les motels du centre et les complexes d'hôtels qui offrent des divertissements extraordinaires hors du commun. La localisation de ces hôtels, en campagne ou en centre-ville, la diversité des architectures et leur niveau de confort vous offrent un large choix pour profiter de votre séjour. En plus, la région de l'Ouest est réputée pour la qualité de son accueil et la chaleur de ses habitants. Vous trouverez toujours un hébergement adapté à vos besoins, que vous soyez en famille, en couple ou en voyage d'affaires. <br><br>-->
    <!--  Hôtels in West Region of Cameroon provide mainly three types of accommodation: guest houses, at the countryside or city center motels, and hotel complexes with extraordinary entertainment. The variety of their location, architecture and comfort level offers you a wide range of options to enjoy your stay. The West region is also renowned for the hospitality and warmth of its people. You will always find accommodation to match your needs, whether for family, couple or business trips.-->
    <!--</p>-->
  </div>
</section>
<!-- SECTION II - Descriptions (FR/EN) -->
<section class="festival-description">
    <div class="container">
        <h2 class="section-title">Decouvrez <br> <span class="title_bold text_outline_white">nos havres de paix</span></h2>
        
        <div class="description-columns">
            <div class="description-column">
                <h3></h3>
                <p>Les hôtels de l’ouest Cameroun proposent trois types d’hébergement : les cases d’hôtes, les meublés de tourisme et l’hôtel. Les cases d’hôtes sont des styles d’hébergement au décor traditionnel. La localisation de ses cases en campagne est une garantie de découvertes authentiques dans la mesure où le visiteur est en contact avec les hommes et femmes qui font vivre le village. Il est possible pour le visiteur de participer aux activités du village : visites des fermes, découvertes des pratiques culturales, du patrimoine floral, des cérémonies traditionnelles, participation aux activités quotidiennes... la résidence minarow à dschang et la guest house de Bafoussam offrent des appartements meublés avec cuisine équipée alors que la villa Boutanga de Bangoulap fait partie des hébergements alternatifs recommandés de l’Ouest. Situé en campagne et près du centre culturel Jean félicien gacha, il offre des chambres confortables dans un cadre agréable et reposant. L’Ouest, c’est aussi plus de 200 hôtels classiques qui offrent des services d’hébergement aux gammes différentes comprenant des chambres économiques, des chambres standards et des suites confortables. Connexion internet possible selon les hôtels. Toute une gamme d’hébergements pour vous faire découvrir l’hospitalité des peuples grassfields. </p>
            </div>
            
            <div class="description-column">
                <h3></h3>
                <p>Hotels in West Region of Cameroon provide mainly three types of accommodation: guest houses, self-catering cottages and hotels. Guest houses are traditional style of accommodation, which its location in the countryside is a guarantee for authentic discoveries insofar as the visitor is in direct contact with the men and women who animate the village. Visitors can take part in village affairs by visiting farms, learning about farming practices, the floral heritage and traditional ceremonies, and taking part to daily activities. The Minarow residence in Dschang and the guest house in Bafoussam offer furnished self-catering flats, with fully-equipped kitchens, while the Boutanga villa in Bangoulap is one of the recommended alternative accommodations in the West Region. Located in the countryside near the Jean Félicien Gacha cultural centre, the Boutanga villa offers comfortable rooms in a pleasant and peaceful setting. The West Region is also home to more than 200 classic hotels providing a range of accommodation services, including budget rooms, standard rooms and comfortable suites. Internet is available in some hotel. This whole range of accommodation is to make you discover the hospitality of the Grassfields people.</p>
            </div>
        </div>
    </div>
    
    <!-- SECTION DE TELECHARGEMENT DE L'ANNUAIRE -->
    <div class="agenda-culturel-download">
        <?php
        $agenda_pdf = get_field('annuaire_pdf');
        if ($agenda_pdf) {
            $pdf_url = is_array($agenda_pdf) ? $agenda_pdf['url'] : $agenda_pdf;
        ?>
            <a href="<?php echo esc_url($pdf_url); ?>" download target="_blank">
                <span class="icon">&#128190;</span> Télécharger le répertoire des Hébergements , Loisirs & Restaurants – Ouest Cameroun
            </a>
        <?php } ?>
    </div>
    
</section>
<!-- SECTION III - Galerie -->
<section class="gallery-section">
  <div class="gallery-container">
    <h2 class="section-title">Decouvrez <br> <span class="title_bold text_outline_white">quelques hotels</span></h2>
    
    <!-- Éléments décoratifs -->
    <div class="gallery-decoration decoration-left"></div>
    <div class="gallery-decoration decoration-right"></div>
    
    <div class="swiper gallery-swiper">
      <div class="swiper-wrapper">
        <?php
        // Vérifier si ACF est actif et disponible
        if (function_exists('get_field')) {
          for ($i = 1; $i <= 12; $i++) {
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


<!-- Section de présentation des hébergements -->
<!--<section class="hebergements-list">-->
<!--  <div class="container">-->
    <!-- Filtres -->
<!--    <div class="filters">-->
<!--      <input type="text" placeholder="Rechercher un hôtel...">-->
<!--      <select>-->
<!--        <option value="">Ville</option>-->
        <!-- Options dynamiques -->
<!--      </select>-->
<!--      <select>-->
<!--        <option value="">Type d'hébergement</option>-->
        <!-- Options dynamiques -->
<!--      </select>-->
<!--    </div>-->
    <!-- Liste des hébergements (cards) -->
<!--    <div class="cards-list">-->
      <!-- Exemple de card -->
<!--      <div class="card-hotel">-->
<!--        <img src="images/hotel-exemple.jpg" alt="Hotel exemple">-->
<!--        <div style="padding: 18px;">-->
<!--          <h3>Nom de l'Hôtel</h3>-->
<!--          <p>Ville - Type</p>-->
<!--          <p>Court descriptif de l'hôtel...</p>-->
<!--          <a href="#">Voir plus</a>-->
<!--        </div>-->
<!--      </div>-->
      <!-- Répéter dynamiquement pour chaque hôtel -->
<!--    </div>-->
    <!-- Scroll infini ou bouton de pagination -->
<!--    <div class="pagination">-->
<!--      <button>Charger plus</button>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

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

</script>

<?php get_footer(); ?>
