<?php get_header(); ?>

<style>
.intro-detente {
  min-height: 120vh;
  display: flex;
  align-items: center; 
  /*photo accueil*/
  background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/petpenoun-3-scaled.jpg') center/cover;
  position: relative;
  color: #fff;
}

.intro-detente .container {
  position: relative;
  z-index: 2;
  max-width: 1000px;
  margin: auto;
  padding: 60px 30px;
}
.intro-detente .titre-fr {
  font-family: Fredoka, sans-serif;
  font-size: 70px;
  font-weight: 700;
  line-height: 1.2;
  color: #FFD700;
}
.intro-detente .titre-fr span {
  color: #fff;
  font-style: italic;
}

.intro-detente .titre-fr .small
{
     font-weight: 200;
}
.intro-detente .titre-en {
  background: #153a5b;
  display: inline-block;
  padding: 8px 18px;
  border-radius: 6px;
  font-size: 1.2rem;
  font-family: 'Inter', sans-serif;
  margin: 18px 0 0 0;
}
.intro-detente .desc-fr, .intro-detente .desc-en {
  margin-top: 18px;
  font-size: 1.05rem;
  line-height: 1.6;
  color: #fff;
  max-width: 1000px;
  text-align: justify;
}

.description-content {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 15px;
    border-radius: 30px;
    color: white;
    max-width: 300px;
    width: 100%;
    margin-top: 20px;
}

.listing-espace-detentes {
  padding: 60px 20px;
    overflow: hidden;
  position: relative;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg') center/cover fixed;
}

.listing-espace-detentes::before{
        content: '';
    position: absolute;
    inset: 0;
    background-color: rgba(255, 255, 255, 0.8);
    z-index: -1;
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

.espace-block {
  display: flex;
  align-items: stretch;
  margin: 60px 0;
  background: #f7f7f7;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,0.07);
}
.espace-block.reverse {
  flex-direction: row-reverse;
}
.espace-block .espace-img {
  flex: 1.2;
  min-width: 280px;
  background-size: cover;
  background-position: center;
  min-height: 320px;
}
.espace-block .espace-content {
  flex: 2;
  padding: 38px 32px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.espace-block .espace-title-fr {
  font-family: Fredoka, sans-serif;
  font-size: 1.7rem;
  font-weight: 700;
  color: #153a5b;
}
.espace-block .espace-title-en {
  font-family: 'Inter', sans-serif;
  font-size: 1.1rem;
  font-weight: 600;
  color: #fff;
  background: #153a5b;
  display: inline-block;
  padding: 4px 14px;
  border-radius: 5px;
  margin: 8px 0 14px 0;
}
.espace-block .espace-desc-fr, .espace-block .espace-desc-en {
  font-size: 1rem;
  color: #222;
  margin-bottom: 10px;
}
.espace-block .espace-desc-en {
  color: #555;
  font-style: italic;
}
@media (max-width: 900px) {
  .intro-detente .container { padding: 30px 10px; }
  .espace-block, .espace-block.reverse { flex-direction: column; }
  .espace-block .espace-img { min-height: 200px; }
}
</style>

<!-- Section d'introduction -->
<section class="intro-detente">
  <div class="overlay"></div>
  <div class="container">
    <div class="titre-fr">ESPACES <br><span> <span class= 'small'>DÉTENTE</span><br>& LOISIRS</span></div>
    <div class="titre-en">SPACES RELAXATION & LEISURE</div>
    <div class="description-content">
        <div class="desc-fr">
            L'Ouest regorge de sites naturels d'exception qui offrent une palette d'activités pour les familles comme pour les plus aguerris ! Entre activités sportives, culturelles ou passer par des moments de détente, laissez-vous tenter par l'aventure. L'Ouest Cameroun, le lieu de toutes les envies !
        </div>
        <div class="desc-en">
            The West Region of Cameroon is full of exceptional natural sites offering a wide range of activities for families and the more experienced alike! From sport and cultural activities to relaxing moments, let yourself be tempted by adventure. The West Region of Cameroon is the place to be!
        </div>
    </div>
  </div>
</section>

<div class="listing-espace-detentes">
    <h2 class="section-title">Trouvez <br>
      <span class="title_bold text_outline_white">le votre </span> 
    </h2>

  <!-- Exemple 1 : image à droite, texte à gauche -->
    <div class="espace-block reverse">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/BASE-NAUTIQUE-DSCHANG-scaled.jpg');"></div>
        <div class="espace-content">
            <div class="espace-title-fr">BASE NAUTIQUE DE <b>DSCHANG</b></div>
            <div class="espace-title-en">DSCHANG WATER SPORTS CENTRE </div>
            <div class="espace-desc-fr">
                Située sur le lac municipal qui borde le Musée des Civilisations, la base nautique de Dschang, offre une multitude d’activités de loisirs accessibles à tous telles que les tours en pédalo, canoë, kayak, bateau moteur et jeux pour enfants.<br>
                <b>Contact :</b>655529260<br>
                <b>Nom :</b>DONFACK TSAPGOU Jean Bernard (Office du tourisme de Dschang)
            </div>
            <div class="espace-desc-en">
                Located on the municipal lake bordering the Museum of Civilisation, the Dschang water sports centre offers a variety of leisure activities for everyone, including pedal-boat rides, canoeing, kayaking, motor boating and children’s games.<br>
                <b>Contact:</b>655529260<br>
                <b>Name:</b>DONFACK TSAPGOU Jean Bernard (Office du tourisme de Dschang)
            </div>
        </div>
    </div>
  <!-- Exemple 2 : image à gauche, texte à droite -->
    <div class="espace-block">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2023/05/5-Base-aeraunotiq.jpg');">
            
        </div>
        <div class="espace-content">
            <div class="espace-title-fr">NOUN EN<b>KAYAK</b>
            </div>
            <div class="espace-title-en">NOUN BY KAYAK 
            </div>
            <div class="espace-desc-fr">
                Cette rivière camerounaise est un affluent du Mbam dans le bassin versant de la Sanaga. Pour les plus aventureux, le club nautique de Dschang organise des descentes en kayak sur le Noun. C’est une belle occasion pour découvrir les paysages ainsi que la faune et la flore locale : oiseaux, hippopotames, poules d’eau, piques-bœuf…La descente sur le Noun comporte quelques eaux vives (rapides de classe 1 à 2), qui rendent la sortie intrépide. Cette activité accessible aux débutants se fait toujours accompagnée de moniteurs spécialisés.<br>
            </div>
            <div class="espace-desc-en">
                This Cameroonian river is a tributary of the Mbam in the Sanaga watershed. For the more venturesome, the Dschang sailing club organises kayak trips down the Noun. This is a great opportunity to discover the landscapes and the local flora and fauna including birds, hippos, moorhens, woodpeckers, etc. The Noun has some white water (class 1 to 2 rapids), making for an intrepid outing. This activity is accessible to beginners and is always accompanied by qualified instructors.<br>
            </div>
        </div>
    </div>
    <!-- Exemple 3 : image à droite, texte à gauche -->
    <div class="espace-block reverse">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/NONENA-scaled.jpg');"></div>
        <div class="espace-content">
            <div class="espace-title-fr">NONENA <b>Mountain Ranch</b></div>
            <div class="espace-title-en">NONENA Mountain Ranch</div>
            <div class="espace-desc-fr">
                Situé au village Foutouni à 3 km du marché de Bandja, le Nonéna Mountain Ranch est une combinaison de l’accueil touristique, de l’élevage et de l’agriculture de montagne qui permet de conserver d’authentiques valeurs traditionnelles. Ici, l’équitation tient une place importante. Outre les activités équestres, le ranch propose une gamme d’activités pour les non cavaliers et les enfants. L’accueil et la convivialité représentent les valeurs qui feront de votre séjour, des moments riches d’émotion. Le ranch offre des formules d’hébergement confortable pour un séjour en couple, en famille, ou en groupe d’entreprise. <br>
            </div>
            <div class="espace-desc-en">
                Located in the village of Foutouni, 3 km from the Bandja market, the Nonéna Mountain Ranch combines tourism, livestock farming and mountain agriculture to conserve authentic traditional values. Horse riding plays an important role here. In addition to equestrian activities, there are a good number of activities for non-riders and children. Hospitality and friendliness are the values that will make your stay an exhilarating and intense experience. The ranch offers comfortable accommodation for couples, families and corporate groups. <br>
            </div>
        </div>
    </div>
    <!-- Exemple 4 : image à gauche, texte à droite -->
    <div class="espace-block">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/TAGIDOR-6179045858333_6694335020500735403_n.jpg');">
            
        </div>
        <div class="espace-content">
            <div class="espace-title-fr">TAGIDOR<b>GARDEN RESSORT & SPA</b>
            </div>
            <div class="espace-title-en">TAGIDOR GARDEN RESSORT & SPA 
            </div>
            <div class="espace-desc-fr">
                Le complexe hôtelier Tagidor Garden Resort & Spa est un centre de villégiature encastré dans un patrimoine touristique renommé, au cœur des massifs montagneux de la commune de Bangou. En plus de la prestation d’hébergement, il offre un jardin botanique fait de plantes locales et exotiques minutieusement sélectionnées, de lacs artificiels, d’un cours d’eau naturel, de 3 hectares d’agriculture biologique, d’un zoo, d’une ferme et de centres d’équitation pour le plus grand bien des amateurs de grand luxe, de nature et de tranquillité.<br>
            </div>
            <div class="espace-desc-en">
                The Tagidor Garden Resort & Spa is a holiday centre set in the heart of the Bangou council’s renowned mountain ranges. In addition to accommodation, it offers a botanical garden of carefully selected local and exotic plants, artificial lakes, a natural watercourse, three hectares of organic farming, a zoo, a farm and horse-riding centres for lovers of luxurious accommodation, nature and tranquillity.<br>
            </div>
        </div>
    </div>
    <!-- Exemple 5 : image à droite, texte à gauche -->
    <div class="espace-block reverse">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Parc-de-loisir-IA.jpg');"></div>
        <div class="espace-content">
            <div class="espace-title-fr">PARC DE LOISIRS<b>PAUL BIYA</b></div>
            <div class="espace-title-en">THE PAUL BIYA LEISURE PARK</div>
            <div class="espace-desc-fr">
                Situé au cœur de la ville, le parc de loisirs de Bafoussam vous propose dans un cadre naturel et boisé des activités pour les enfants et les parents. Il est agrémenté d’une salle d’exposition, d’un bar, d’un restaurant d’une capacité de 150 places, d’une aire de jeux pour enfants avec des espaces de repos et de détente, de chemins piétonniers revêtus de pavés et de graviers, le tout dans une ambiance d’espaces fleuris.<br>
            </div>
            <div class="espace-desc-en">
                Located in the heart of the city, the Bafoussam leisure park offers activities for children and parents in a natural, wooded setting. It features an exhibition hall, a bar, a 150-seat restaurant, a children’s playground with areas for resting and relaxation, paved and gravel footpaths, all in an attractive, leafy atmosphere.<br>
            </div>
        </div>
    </div>
    <!-- Exemple 6 : image à gauche, texte à droite -->
    <div class="espace-block">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/petpenoun-3-scaled.jpg');">
            
        </div>
        <div class="espace-content">
            <div class="espace-title-fr">LE DOMAINE DE<b>PETPENOUN</b>
            </div>
            <div class="espace-title-en">THE PETPENOUN TOURIST SITE 
            </div>
            <div class="espace-desc-fr">
                Niché dans un écrin de verdure pittoresque, le domaine de Petpenoun se trouve à une quinzaine de kilomètres de la ville de Foumbot. Véritable club haut de gamme, vous serez accueilli par un personnel professionnel maîtrisant les deux langues nationales : français et anglais. Ici, le client est charmé par la volupté qu’inspire le site situé entre montagnes, lacs et espaces verts. Vous aurez le choix entre ranch, lodge et boukarou pour votre séjour au domaine. Petpenoun pense aussi aux familles en proposant des tarifs enfant ainsi que des excursions comprenant des paniers pique-nique. Possibilité de location de véhicules sur place, abonnement au golf et balade en bateau.<br>
            </div>
            <div class="espace-desc-en">
                The Petpenoun Estate is a picturesque green setting, some fifteen kilometres from Foumbot. A true top-of-the-range club, you’ll be welcomed by professional staff who speak both French and English. Here, guests are charmed by the voluptuousness of the site, set between mountains, lakes and green spaces. You can choose between ranch, lodge and boukarou for your stay on the estate. Petpenoun also offers children’s rates as well as excursions including picnic baskets. It is possible to hire is cars on site, as subscribe to golf and boat trips.<br>
            </div>
        </div>
    </div>
    <!-- Exemple 7 : image à droite, texte à gauche -->
    <div class="espace-block reverse">
        <div class="espace-img" style="background-image:url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/CLUB-TENNIS-scaled.jpg');"></div>
        <div class="espace-content">
            <div class="espace-title-fr">TENNIS CLUB<b>BAFOUSSAM</b></div>
            <div class="espace-title-en">BAFOUSSAM TENNIS CLUB</div>
            <div class="espace-desc-fr">
                Le club de tennis de Bafoussam accueille petits et grands du lundi au dimanche. On y vient pour perfectionner son jeu ou tout simplement échanger la balle entre amis ou en famille. Le club propose également le «Tennis Vacances» pendant les vacances d’été de juin à août. Inscription à partir de 5 ans.<br>
            </div>
            <div class="espace-desc-en">
                The Bafoussam tennis club welcomes young and old players from Monday to Sunday. You can come here to improve your game or simply to play tennis with friends or family. The club also offers ‘Tennis Holidays’ during the summer holidays from June to August. Registration starts at the age of 5 upwards.<br>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
