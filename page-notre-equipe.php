<?php
/*
Template Name: Notre Équipe
Description: Présentation de l'ORTOC et de toute l'équipe.
*/
get_header(); ?>

<style>
.equipe-hero {
    max-width: 1400px;
    min-height: 60vh;
    margin: 20px auto 0 auto;
    text-align: center;
    padding: 0 16px;
    position: relative;
    z-index: 2;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Fond-1.png') center/cover fixed;
    border-radius: 24px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
    overflow: hidden;
}

.equipe-hero-title {
    font-size: 2.5rem;
    color: #ffffff;
    font-family: 'Fredoka', sans-serif;
    font-weight: 800;
    margin-bottom: 12px;
    letter-spacing: 1px;
}
.equipe-hero-desc {
    margin-bottom: 18px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
      font-size: 16px;
  line-height: 1.6;
  text-align: justify;
  margin-bottom: 15px;
  color: #ffffff;
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
.equipe-listing-section {
    background: #f5fafd;
    padding: 60px 0 40px 0;
}
.equipe-listing-container {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 40px;
}
.equipe-card {
    background: #fff;
    border-radius: 22px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    overflow: hidden;
    text-align: center;
    padding: 32px 18px 24px 18px;
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: box-shadow 0.2s, transform 0.2s;
}
.equipe-card:hover {
    box-shadow: 0 16px 48px rgba(12,65,120,0.16);
    transform: translateY(-4px) scale(1.01);
}
.equipe-img {
    width: 160px;
    height: 160px;
    border-radius: 50%;
    object-fit: cover;
    border: 5px solid #0c4178;
    margin-bottom: 18px;
}
.equipe-name {
    font-size: 1.3rem;
    font-weight: 700;
    color: #0c4178;
    margin-bottom: 6px;
}
.equipe-position {
    font-size: 1rem;
    color: #FFD700;
    margin-bottom: 10px;
    font-weight: 600;
}
.equipe-desc {
    font-size: 0.98rem;
    color: #333;
    margin-bottom: 0;
}
@media (max-width: 900px) {
    .equipe-listing-container {
        grid-template-columns: 1fr 1fr;
    }
}
@media (max-width: 600px) {
    .equipe-listing-container {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="equipe-hero">
    <h1 class="equipe-hero-title">L'Office Régional du Tourisme de l'Ouest Cameroun (ORTOC)</h1>
    <div class="equipe-hero-desc">
       L'Office Régional du Tourisme de l'Ouest Cameroun (ORTOC) est l'organisme dédié à la promotion, au développement et à la valorisation du secteur touristique dans la région. Son engagement va bien au-delà de la préservation du patrimoine naturel et culturel : il repose sur une équipe passionnée, dynamique et polyvalente, qui œuvre chaque jour pour faire rayonner la région et offrir aux visiteurs une expérience authentique et enrichissante. <br> <br> L'ORTOC s'appuie sur des professionnels engagés, alliant expertise et créativité pour concevoir des initiatives innovantes et adaptées aux attentes des voyageurs. Qu'il s'agisse d'informer et d'accompagner les visiteurs, de développer des projets culturels, ou de soutenir les acteurs locaux du secteur touristique, chaque membre de l'équipe contribue activement à la mise en valeur du territoire. Leur diversité de compétences et leur réactivité permettent à l'ORTOC de proposer des solutions sur mesure et de répondre efficacement aux défis du tourisme moderne.<br> <br> Grâce à cette synergie entre expérience, innovation et passion, l'ORTOC garantit un accueil chaleureux et un accompagnement personnalisé, faisant de la région de l'Ouest Cameroun une destination incontournable. Derrière chaque initiative, chaque projet et chaque action, se trouve une équipe soudée, déterminée à faire découvrir et apprécier la richesse culturelle et naturelle de cette terre fascinante.
    </div>
</div>

<section class="equipe-listing-section">
    <h2 class="section-title">Notre <br> <span class="title_bold text_outline_white">équipe</span></h2>
    <div class="equipe-listing-container">
        <!-- Membre 1 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/DIOR.jpg" alt="Bernard ZEUTIBEU" class="equipe-img">
            <div class="equipe-name">Bernard ZEUTIBEU</div>
            <div class="equipe-position">Directeur</div>
            <div class="equipe-desc">Responsable de la direction générale de l'ORTOC et de la coordination des actions de l'équipe.</div>
        </div>
        <!-- Membre 2 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/RAF.jpg" alt="Abdelazize ISMAILA" class="equipe-img">
            <div class="equipe-name">Abdelazize ISMAILA</div>
            <div class="equipe-position">Responsable Administratif et Financier</div>
            <div class="equipe-desc">Gestion administrative et financière de l'ORTOC.</div>
        </div>
        <!-- Membre 3 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Serge.jpg" alt="Serge TIOGON" class="equipe-img">
            <div class="equipe-name">Serge TIOGON</div>
            <div class="equipe-position">Chargé de l'animation du secteur privé touristique</div>
            <div class="equipe-desc">Animation et accompagnement des acteurs privés du tourisme régional.</div>
        </div>
        <!-- Membre 4 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/IMG_6541-scaled.jpg" alt="Armand FONKOU" class="equipe-img">
            <div class="equipe-name">Armand FONKOU</div>
            <div class="equipe-position">Chargé de la promotion numérique</div>
            <div class="equipe-desc">Développement de la visibilité digitale de l'ORTOC et de la région.</div>
        </div>
        <!-- Membre 5 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Andre.jpg" alt="André Pascal NGOUBENE" class="equipe-img">
            <div class="equipe-name">André Pascal NGOUBENE</div>
            <div class="equipe-position">Chargé des projets</div>
            <div class="equipe-desc">Gestion et suivi des projets touristiques portés par l'ORTOC.</div>
        </div>
        <!-- Membre 6 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Sylvie.jpg" alt="Sylvie KAMENI" class="equipe-img">
            <div class="equipe-name">Sylvie KAMENI</div>
            <div class="equipe-position">Chargée des accueils et des ventes</div>
            <div class="equipe-desc">Accueil des visiteurs et gestion des ventes de produits touristiques.</div>
        </div>
        <!-- Membre 7 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Mme-Viviane.jpg" alt="Viviane MAFANG" class="equipe-img">
            <div class="equipe-name">Viviane MAFANG</div>
            <div class="equipe-position">Agent d'accueil</div>
            <div class="equipe-desc">Accueil et information des visiteurs à l'ORTOC.</div>
        </div>
        <!-- Membre 8 -->
        <div class="equipe-card">
            <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Helene.jpg" alt="Hélène NGO YETNA" class="equipe-img">
            <div class="equipe-name">Hélène NGO YETNA</div>
            <div class="equipe-position">Agent d'entretien</div>
            <div class="equipe-desc">Entretien et propreté des locaux de l'ORTOC.</div>
        </div>
    </div>
</section>

<?php get_footer(); ?> 