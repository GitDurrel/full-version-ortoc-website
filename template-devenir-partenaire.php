<?php
    /*
    Template Name: Devenir partenaire
    */
    
    get_header();
    ?>
    
    <style>
    .banner_gradient{
        padding: 80px 0;
        background-color: #ffffff;
        background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/3e2897cd9215be43f51c912e8cf902a8.jpg');
        background-size: cover;
        background-position: center;
        position: relative; 
        min-height: 50vh;
        background-repeat: no-repeat;
        width: 100vw;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        margin-top: 20px;
        min-height: 65vh;
    }
    
    .banner_content {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
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
        .partenaires-listing-section {
        background: #f5fafd;
        padding: 60px 0 40px 0;
    }
    .partenaires-listing-container {
        max-width: 1400px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 40px;
    }
    .partenaires-card {
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
    .partenaires-card:hover {
        box-shadow: 0 16px 48px rgba(12,65,120,0.16);
        transform: translateY(-4px) scale(1.01);
    }
    .partenaires-img {
        width: 150px;
        height: 60px;
        object-fit: cover;
        margin-bottom: 18px;
        background: #f5fafd;
        border-radius: 8px;
        border: 2px solid #eee;
    }
    .partenaires-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #0c4178;
        margin-bottom: 6px;
    }
    .partenaires-desc {
        font-size: 0.98rem;
        color: #333;
        margin-bottom: 10px;
    }
    .partenaires-link {
        color: #FFD700;
        font-weight: 600;
        text-decoration: none;
        margin-top: 8px;
        display: inline-block;
    }
    .partenaires-link:hover {
        text-decoration: underline;
    }
    @media (max-width: 900px) {
        .partenaires-listing-container {
            grid-template-columns: 1fr 1fr;
        }
    }
    @media (max-width: 600px) {
        .partenaires-listing-container {
            grid-template-columns: 1fr;
        }
    }
     @media (max-width: 900px) {
        /* Existing rules for .partenaires-listing-container and .become_partner stacking */
        .become_partner_left img {
            max-width: 100%; /* Allow image to be full width of its container */
            height: auto; /* Maintain aspect ratio */
        }
    }

    @media (max-width: 992px) { /* Tablet */
        .banner_gradient .banner_content .title_h1 { /* Banner title */
            font-size: 2.5rem; /* Adjust from default/inherited */
        }
        .section-title { /* Partenaires section title */
            font-size: 48px;
            line-height: 1.2;
        }
        .title_bold:after {
            height: 22px;
            margin: -15px -15px 0;
        }
        .form-intro { /* Form intro text */
            font-size: 24px;
            line-height: 1.4;
        }
        .formulaire_reservation .title { /* Titles within form sections */
            font-size: 1.3rem;
        }
    }

    @media (max-width: 768px) { /* Mobile landscape / Large phones */
        .banner_gradient {
            min-height: auto; /* Allow natural height */
            padding: 60px 0;
        }
        .banner_gradient .banner_content .title_h1 {
            font-size: 2rem;
        }
        .section-title {
            font-size: 36px;
        }
        .title_bold:after {
            height: 20px;
            margin: -12px -12px 0;
        }
        .form-intro {
            font-size: 20px;
            line-height: 1.3;
        }
        .formulaire_reservation .title {
            font-size: 1.2rem;
        }
        .form-control { /* General form controls */
            font-size: 0.95rem !important; /* Added important as it seems to be overridden by other theme styles */
            padding: 10px 12px !important;
        }
        .partenaires-card {
            padding: 24px 15px;
        }
        .partenaires-name { font-size: 1rem; }
        .partenaires-desc { font-size: 0.9rem; }
    }

    @media (max-width: 600px) {
        /* Existing rule for .partenaires-listing-container (1 column) */
         .banner_gradient .banner_content .title_h1 {
            font-size: 1.8rem;
        }
    }

    @media (max-width: 480px) { /* Smallest screens */
        .banner_gradient {
            padding: 40px 0;
        }
        .section-title {
            font-size: 28px;
        }
        .title_bold:after {
            height: 16px;
            margin: -10px -10px 0;
        }
        .form-intro {
            font-size: 18px;
            line-height: 1.3;
        }
        .formulaire_reservation .title {
            font-size: 1.1rem;
        }
        .form-control-label { /* Form labels */
            font-size: 0.9rem;
        }
        .partenaires-img {
            height: 50px; /* Adjust partner logo image height */
        }
        .partenaires-name { font-size: 0.95rem; }
        .partenaires-desc { font-size: 0.85rem; }
        .partenaires-link { font-size: 0.9rem; }
    }

    .become_partner {
        background: #fff;
        border-radius: 24px;
        box-shadow: 0 4px 24px rgba(12,65,120,0.07);
        margin: 40px auto 32px auto;
        max-width: 1200px;
        padding: 32px 24px;
        display: flex;
        flex-wrap: wrap;
        gap: 32px;
        align-items: stretch;
    }
    .become_partner_left {
        flex: 1 1 320px;
        min-width: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 420px;
        margin-right: 32px;
    }
    .become_partner_left img {
        max-width: 100%;
        width: 100%;
        border-radius: 18px;
        box-shadow: 0 2px 12px rgba(12,65,120,0.08);
        object-fit: cover;
        object-position: center;
        display: block;
    }
    .formulaire_reservation {
        flex: 2 1 400px;
        min-width: 260px;
        max-width: 700px;
    }
    @media (max-width: 900px) {
        .become_partner {
            flex-direction: column;
            align-items: stretch;
        }
        .become_partner_left {
            max-width: 100%;
            margin-right: 0;
            margin-bottom: 24px;
        }
        .become_partner_left img {
            width: 100%;
            max-width: 350px;
            margin: 0 auto;
        }
    }
    .become_partner_cover {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        width: 100%;
    }
    .formulaire_reservation {
        margin: 0 auto;
        float: none;
    }
    .form-intro {
        text-align: center !important;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        font-size: 26px !important;
        line-height: 1.5 !important;
        font-weight: 300;
        font-family: Fredoka, sans-serif;
        color: #0c4178;
    }
    </style>
    
    	<div id="primary" class="content-area">
    		<main id="main" class="site_main">
    			
    			<div class="banner_reservation banner_gradient">
    				<div class="banner_content">
    					<h1 class="title_h1"><?php _e( "Devenir Partenaire", 'ortoc' ); ?></h1>
    				</div>
    			</div>
    			<div class="become_partner">
    				<div class="container">
    					<div class="become_partner_cover displayflex">
    						<div class="formulaire_reservation">
    							<!-- Description incitative -->
    							<div class="form-intro" style="margin-bottom: 24px; font-size: 30px; color: #0c4178; font-weight: 300;font-family: Fredoka, sans-serif; line-height: 40px; text-align: justify;">
    								Vous souhaitez devenir partenaire de l'ORTOC&nbsp;?<br>
    								Que vous soyez une institution, une entreprise, une association ou un artisan désireux de promouvoir et valoriser vos produits, remplissez ce formulaire. Nous vous accompagnerons dans la mise en valeur de vos initiatives et de vos offres auprès du public touristique de l'Ouest Cameroun.
    							</div>
    							<form id="devenir_partenaire" method="get" action="#" enctype="multipart/form-data">
    								<input type="hidden" name="action" value="demande_partenariat">
    								<div class="bloc_field">
    									<h2 class="title"><?php _e( "Informations sur l'entreprise", 'ortoc' ); ?></h2>
    									<div class="bloc_field_cover displayflex">
    										<div class="form-group col-12">
    											<label class="form-control-label"><?php _e( "Nom de l'entreprise", 'ortoc' ); ?></label>
    											<input class="form-control" type="text" name="entreprise" id="entreprise" placeholder="<?php _e( "Entrez le nom de votre entreprise", 'ortoc' ); ?>"/>
    										</div>
    									</div>
    								</div>
    								<div class="bloc_field">
    									<h2 class="title"><?php _e( "Représentant de l'entreprise", 'ortoc' ); ?></h2>
    									<div class="bloc_field_cover displayflex">
    										<div class="form-group col-12 col-sm-6 col-md-6">
    											<label class="form-control-label"><?php _e( "Prénom", 'ortoc' ); ?></label>
    											<input class="form-control" type="text" name="prenom" id="prenom" placeholder="<?php _e( "Votre Prénom", 'ortoc' ); ?>"/>
    										</div>
    										<div class="form-group col-12 col-sm-6 col-md-6">
    											<label class="form-control-label"><?php _e( "Nom", 'ortoc' ); ?></label>
    											<input class="form-control" type="text" name="nom" id="nom" placeholder="<?php _e( "Votre Nom", 'ortoc' ); ?>"/>
    										</div>
    										<div class="form-group col-12 col-sm-6 col-md-6">
    											<label class="form-control-label"><?php _e( "Email", 'ortoc' ); ?></label>
    											<input class="form-control" type="email" name="email" id="email" placeholder="<?php _e( "Votre adresse Email", 'ortoc' ); ?>"/>
    										</div>
    										<div class="form-group col-12 col-sm-6 col-md-6">
    											<label class="form-control-label"><?php _e( "Téléphone", 'ortoc' ); ?></label>
    											<input class="form-control" type="text" name="numero_telephone" id="numero_telephone" placeholder="<?php _e( "Votre Numéro de Téléphone", 'ortoc' ); ?>"/>
    										</div>
    										<div class="form-group col-12 col-sm-12 col-md-12">
    											<label class="form-control-label"><?php _e( "Message", 'ortoc' ); ?></label>
    											<textarea class="form-control" name="message" id="message" placeholder="<?php _e( "Entrez votre message", 'ortoc' ); ?>"></textarea>
    										</div>
    									</div>
    								</div>
    								<div class="bloc_field submit">
    									<div class="bloc_field_cover displayflex">
    										<div class="form-group col-12 blue_button">
    											<input type="submit" name="" value="<?php _e( "Envoyer", 'ortoc' ); ?>" class="submitDemande">
    										</div>
    									</div>
    								</div>
    							</form>
    						</div>
    						<!--<div class="become_partner_left">-->
    						<!--	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/partner.jpg')">-->
    						<!--</div>-->
    					</div>
    				</div>
    			</div>
    
    		</main><!-- #main -->
    	</div><!-- #primary -->
    	<section class="partenaires-listing-section">
        <h2 class="section-title">Nos <br> <span class="title_bold text_outline_white">partenaires</span></h2>
        <div class="partenaires-listing-container">
            <!-- Partenaire 1 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-AIRF.jpg" alt="AIRF" class="partenaires-img">
                <div class="partenaires-name">AIRF</div>
                <div class="partenaires-desc">Association Internationale des Régions Francophones.</div>
                <a href="https://www.regions-francophones.org/index.php" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 2 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Coopr.jpg" alt="Coopr" class="partenaires-img">
                <div class="partenaires-name">Coopr</div>
                <div class="partenaires-desc">Coopération internationale pour le développement local.</div>
                <a href="https://www.regions-francophones.org/20451-projet-coop-r-2023-2025.htm" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 3 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-La-region-auvergne-rhone-alpes.jpg" alt="La région Auvergne Rhône-Alpes" class="partenaires-img">
                <div class="partenaires-name">La région Auvergne Rhône-Alpes</div>
                <div class="partenaires-desc">Région partenaire pour la coopération décentralisée.</div>
                <a href="https://www.auvergnerhonealpes.fr/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 4 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Parc-national-regional-de-Briere.jpg" alt="Parc national régional de Brière" class="partenaires-img">
                <div class="partenaires-name">Parc national régional de Brière</div>
                <div class="partenaires-desc">Partenaire pour la valorisation des espaces naturels.</div>
                <a href="https://www.parc-naturel-briere.com/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 5 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Pole-International-Francophone-des-Sites-Patrimoniaux.jpg" alt="Pôle International Francophone des Sites Patrimoniaux" class="partenaires-img">
                <div class="partenaires-name">Pôle International Francophone des Sites Patrimoniaux</div>
                <div class="partenaires-desc">Réseau international pour la préservation du patrimoine.</div>
                <a href="https://www.polepatrimoine.org/" target="_blank" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 6 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Puy-de-Dome.jpg" alt="Puy de Dôme" class="partenaires-img">
                <div class="partenaires-name">Puy de Dôme</div>
                <div class="partenaires-desc">Département français partenaire pour l'échange culturel.</div>
                <a href="https://www.puy-de-dome.fr/conseil-departemental-du-puy-de-dome.html" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 7 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Reseaux-Grands-sites-de-France.jpg" alt="Réseaux Grands sites de France" class="partenaires-img">
                <div class="partenaires-name">Réseaux Grands sites de France</div>
                <div class="partenaires-desc">Réseau national pour la valorisation des grands sites.</div>
                <a href="https://grandsitedefrance.com/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 8 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-sens-architechture.jpg" alt="Sens Architecture" class="partenaires-img">
                <div class="partenaires-name">Sens Architecture</div>
                <div class="partenaires-desc">Cabinet d'architecture partenaire pour la valorisation du bâti.</div>
                <a href="https://www.sens-architecture.com/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 9 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Tetraktys.jpg" alt="Tetraktys" class="partenaires-img">
                <div class="partenaires-name">Tetraktys</div>
                <div class="partenaires-desc">ONG d'appui au développement local et au tourisme solidaire.</div>
                <a href="https://tetraktys-association.org/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
            <!-- Partenaire 10 -->
            <div class="partenaires-card">
                <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Tourisme-Sans-Frontieres.jpg" alt="Tourisme Sans Frontières" class="partenaires-img">
                <div class="partenaires-name">Tourisme Sans Frontières</div>
                <div class="partenaires-desc">Association internationale pour le tourisme responsable.</div>
                <a href="https://www.tourisme-sans-frontieres.com/" class="partenaires-link" target="_blank">Visiter le site</a>
            </div>
        </div>
    </section>
    	<script>
            document.getElementById('devenir_partenaire').addEventListener('submit', function(e) {
                e.preventDefault();
                var entreprise = document.getElementById('entreprise').value;
                var prenom = document.getElementById('prenom').value;
                var nom = document.getElementById('nom').value;
                var email = document.getElementById('email').value;
                var telephone = document.getElementById('numero_telephone').value;
                var message = document.getElementById('message').value;
                var subject = "Demande de partenariat via le site ORTOC";
                var body = "Entreprise : " + entreprise + "\n" +
                           "Prénom : " + prenom + "\n" +
                           "Nom : " + nom + "\n" +
                           "Email : " + email + "\n" +
                           "Téléphone : " + telephone + "\n\n" +
                           "Message :\n" + message;
                var mailto = "mailto:ot.ouestcameroun@yahoo.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
                window.location.href = mailto;
            });
    	</script>
    
    <?php
    get_footer();
