<?php
/**
 * Template Name: Page d'accueil
 * Description: Page d'accueil de l'Office Régional du Tourisme de l'Ouest Cameroun
 */

get_header();
?>  
    <style>
        :root {
            --primary-color: #0c4178;
            --secondary-color: #FFD700;
            --dark-color: #263238;
            --light-color: #f5f5f5;
            --white: #ffffff;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }
        
        /* Section Header avec Parallax */
        .parallax-header {
            position: relative;
            height: 150vh;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Mont-Mbapit-bon-AI-scaled.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        
        /*.parallax-overlay {*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(0, 0, 0, 0.3);*/
        /*}*/
        
        .logo-animation {
            position: absolute;
            bottom: 50px;
            left: 100px;
            width: 400px;
            height: 400px;
            z-index: 10;
            animation: pulse 2s infinite;
            object-fit: cover;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Section Description */
        .description-section {
            padding: 80px 0;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
    
        
        .description-section .container {
            max-width: 1400px;
            margin: 0 auto;
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
        
        .description-column {
            flex: 1;
            background-color: var(--white);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
            height: auto;
            overflow: visible;
            word-wrap: break-word;
            overflow-wrap: break-word;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 150%;
            color: #000000;
        }

        /* Barre décorative */
        .description-column::after {
            content: '';
            position: absolute;
            top: 0;
            right: -8px;
            width: 8px;
            height: 100%;
            background: #0c4178;
            border-radius: 4px;
        }

        /* Ajustement du conteneur pour la marge */
        .col-md-6.mb-4.d-flex {
            padding-right: 20px;
        }

        .description-column h3 {
            margin-bottom: 20px;
            color: #0c4178;
            font-size: 1.5rem;
            font-family: 'Fredoka', sans-serif;
            font-weight: 400;
        }

        .description-column .lead {
            font-size: 1.2rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-weight: 500;
        }

        .description-column p {
            margin-bottom: 10px;
            text-align: justify;
            line-height: 1.5;
            font-size: 0.95rem;
        }
        
        /* Section Richesses */
        .richesses-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
        }
        
        /*.richesses-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .richesse-card {
            background-color: white;
            border-radius: 40px;
            overflow: hidden;
            position: relative;
            border: 2px solid var(--primary-color);
            margin-bottom: 30px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .richesse-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }
        
        .richesse-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .richesse-content {
            padding: 20px;
            text-align: center;
        }
        
        .richesse-content h4 {
            font-size: 1.5rem;
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .richesse-link {
            display: inline-block;
            width: 50px;
            height: 50px;
            line-height: 50px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            color: var(--primary-color);
            text-align: center;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .richesse-link:hover {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            transform: scale(1.1);
        }
        
        /* Video Section */
        .video-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
        
        /*.video-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .video-section .container {
            position: relative;
            z-index: 2;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border: 5px solid var(--primary-color);
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        /* Team Section */
        .team-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
        }
        
        /*.team-section::before {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    background-color: rgba(255, 255, 255, 0.4);*/
        /*    z-index: 1;*/
        /*}*/
        
        .team-section .container {
            position: relative;
            z-index: 2;
        }
        
        .team-card {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            background-color: var(--white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .team-card:hover {
            transform: translateY(-10px);
        }
        
        .team-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid var(--primary-color);
            margin: 0 auto 20px;
        }
        
        .team-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 5px;
        }
        
        .team-position {
            font-size: 1rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        /*section boutique*/
        
        .souvenir-shop-banner{
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Boutique-ORTOC.jpg') ;
            background-position: center;
            position: relative;
             min-height: 500px; 
             display: flex; 
             align-items: center; 
             justify-content: center; 
             position: relative; 
             margin: 0; 
             border-radius: 24px; 
             box-shadow: 0 8px 32px rgba(12,65,120,0.13);
        }
        
        .view-all-container {
            text-align: center;
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .view-all-btn {
    display: block;
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
        
        /* Contact Section */
        .contact-section {
            padding: 80px 0;
            position: relative;
        }
        
        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-bleue-scaled.jpg');
            background-attachment: fixed;
            opacity: 0.8;
        }
        
        .contact-content {
            position: relative;
            z-index: 2;
        }

        .contact-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: white;
            line-height: 1.2;
        }

        .contact-title .small_title {
            font-weight: 300;
            display: block;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .contact-title .bold_title {
            font-weight: 900;
            font-size: 3.5rem;
            display: block;
        }
        
        /* Style amélioré des cartes de contact */
        .contact-info {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            min-height: 100px;
            width: 100%;
        }

        .contact-icon {
            min-width: 45px;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--primary-color);
            color: white;
            border-radius: 10px;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-info-content {
            flex: 1;
            min-width: 0; /* Permet la troncature du texte */
            overflow: hidden; /* Cache le débordement */
        }

        .contact-info h4 {
            color: white;
            margin: 0 0 5px 0;
            font-size: 1rem;
            font-weight: 600;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .contact-text {
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
            font-size: 0.9rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
        }

        /* Ajustement du conteneur des cartes */
        .contact-cards-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .contact-card-wrapper {
            flex: 1;
            min-width: 200px; /* Largeur minimale pour éviter des cartes trop étroites */
        }

        .contact-lead {
            color: white;
            background-color: rgba(12, 65, 120, 0.7);
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .section-title {
                font-size: 45px;
                line-height: 50px;
            }
            
            .logo-animation {
                width: 50vw;      /* 40% de la largeur de l'écran */
                height: 50vw;     /* carré, donc même valeur */
                max-width: 360px; /* limite max pour éviter trop grand sur tablette */
                max-height: 360px;
                min-width: 250px; /* limite min pour éviter trop petit */
                min-height: 250px;
                bottom: 20px;
                left: 20px;
            }
            
            .contact-title {
                font-size: 2rem;
            }
            
            .contact-subtitle {
                font-size: 1.5rem;
            }
            
            .contact-info {
                min-height: 80px;
            }
            
            .contact-icon {
                min-width: 35px;
                width: 35px;
                height: 35px;
                font-size: 1rem;
            }
        }

        /* Formulaire de contact */
        .contact-form {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-top: 40px;
        }

        .contact-form h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-family: Fredoka;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9) !important;
            border: 1px solid #ddd !important;
            border-radius: 25px !important;
            padding: 12px 15px !important;
            font-size: 1rem !important;
            transition: all 0.3s ease !important;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(12, 65, 120, 0.25);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .contact-submit-btn {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            display: block;
            width: auto;
            margin: 0 auto;
        }

        .contact-submit-btn:hover {
            background-color: #0c5a9d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(12, 65, 120, 0.3);
        }

        /* Styles pour le titre principal */
        .title_width_gradient {
            position: relative;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            z-index: 2;
        }

        .title_width_gradient .title_h2 {
            font-style: normal;
            font-weight: 400;
            font-size: 61px;
            line-height: 100%;
            text-align: center;
            color: white;
            font-family: 'Fredoka', sans-serif;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .title_width_gradient .title_bold {
            position: relative;
            display: inline-block;
            font-weight: 700 !important;
        }

        .title_width_gradient .title_bold:after {
            content: "";
            height: 28px;
            background: linear-gradient(90deg, #0c4178 0%, #0c5a9d 100%);
            display: block;
            margin: -20px -20px 0;
        }

        .cta-catalogue-btn {
            text-decoration: none;
            box-shadow: 0 4px 16px rgba(12,65,120,0.10);
            display: inline-block;
            margin-top: 10px;
            transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
            animation: ctaPulse 1.5s infinite;
            letter-spacing: 0.5px;
            border: none;
            padding: 12px 36px;
            background: #FFD700 !important;
            color: #0c4178 !important;
            font-family: 'Fredoka', sans-serif;
            font-weight: 700;
            font-size: 1.15rem;
            border-radius: 8px;
            cursor: pointer;
        }
        .cta-catalogue-btn:hover {
            background: #0c4178;
            color: #FFD700;
            transform: scale(1.06);
            box-shadow: 0 8px 32px rgba(12,65,120,0.13);
        }
        @keyframes ctaPulse {
            0% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
            70% { box-shadow: 0 0 0 16px rgba(255,215,0,0); }
            100% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
        }

        .newsletter-section {
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
        }

        @keyframes defilePartenaires {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .partenaires-marquee-section:hover .partenaires-marquee {
            animation-play-state: paused;
        }
        .partenaires-marquee-section{
            padding: 80px 0;
            background-color: var(--light-color);
            background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
            background-attachment: fixed;
            position: relative;
            border: none !important;
        }
        .partenaires-marquee-section .container {
            max-width: 1400px;
            margin: 0 auto;
        }
        .partenaires-marquee-container {
            margin-top: 30px;
        }
        .partenaires-marquee{
            margin-top: 30px;
        }

        /* Ajout : Extraction du CSS inline des sections partenaires, boutique et newsletter */
        .newsletter-center {
          text-align: center;
        }
        .newsletter-img {
          max-width: 1000px;
          width: 100%;
          height: auto;
          display: inline-block;
          border-radius: 18px;
          box-shadow: 0 8px 32px rgba(12,65,120,0.13);
        }
        .partners-marquee-overflow {
          overflow: hidden;
          white-space: nowrap;
        }
        .partners-marquee-anim {
          display: inline-block;
          animation: defilePartenaires 12s linear infinite;
        }
        .partner-logo-link {
          display: inline-block;
          margin: 10px 40px;
        }
        .partner-logo-img {
          height: 55px;
          vertical-align: middle;
        }
        .souvenir-shop-inner {
          background: rgba(12,65,120,0.55);
          border-radius: 24px;
          padding: 48px 32px;
          text-align: center;
          max-width: 600px;
          width: 100%;
          box-shadow: 0 2px 12px rgba(12,65,120,0.10);
          margin: 0 auto;
        }
        .souvenir-shop-title {
          color: #FFD700;
          font-family: Fredoka, sans-serif;
          font-size: 2.5rem;
          font-weight: 800;
          margin-bottom: 18px;
          text-shadow: 0 4px 24px rgba(12,65,120,0.18);
        }
        .souvenir-shop-desc {
          color: #fff;
          font-size: 1.18rem;
          font-weight: 500;
          margin-bottom: 22px;
        }
        .cta-souvenir-btn {
          background: #FFD700;
          color: #0c4178;
          font-family: Fredoka, sans-serif;
          font-weight: 700;
          font-size: 1.15rem;
          padding: 14px 38px;
          border-radius: 8px;
          text-decoration: none;
          box-shadow: 0 4px 16px rgba(12,65,120,0.10);
          transition: background 0.2s, color 0.2s;
          display: inline-block;
        }
        .cta-souvenir-btn:hover {
          background: #0c4178;
          color: #FFD700;
        }
            /* === MODALE AGENDA EVENEMENTS === */
    #agendaModalOverlay {
      position: fixed; 
      z-index: 9999; inset: 0; 
      background: rgba(12,65,120,0.45); 
      display: none; align-items: center; 
      justify-content: center;
    }
    #agendaModal {
      background: #fff; 
      border-radius: 24px; 
      max-width: 480px; 
      width: 95vw; 
      box-shadow: 0 8px 32px rgba(12,65,120,0.18); 
      padding: 32px 18px 24px 18px; 
      position: relative; text-align: center;
    }
    #agendaModal .close-modal {
      position: absolute; 
      top: 18px; 
      right: 18px; 
      background: none; 
      border: none; 
      font-size: 2rem; 
      color: #0c4178; 
      cursor: pointer;
    }
    #agendaModal .swiper {
      width: 100%; 
      margin-bottom: 18px;
    }
    #agendaModal .swiper-slide {
      background: #f5fafd; 
      border-radius: 16px; 
      box-shadow: 0 2px 8px rgba(12,65,120,0.07); 
      padding: 18px 0; 
      display: flex; 
      flex-direction: column; 
      align-items: center; 
      min-height: 200px; 
      min-width: 0; 
      word-break: break-word; 
      overflow-wrap: break-word;
    }
    #agendaModal .event-date {
      background: linear-gradient(90deg, #0c4178 0%, #ffd700 100%); 
      color: #fff; 
      font-weight: 700; 
      font-size: 1.08rem; 
      margin-bottom: 8px; 
      letter-spacing: 0.5px; 
      padding: 6px 18px; 
      border-radius: 18px; 
      display: inline-block; 
      box-shadow: 0 2px 8px rgba(12,65,120,0.08); 
      border: none;
    }
    #agendaModal .event-title {
      font-size: 1.18rem; 
      font-family: 'Fredoka', sans-serif; 
      font-weight: 700;
      color: #0c4178; 
      margin-bottom: 10px; 
      word-break: break-word;
    }
    #agendaModal .event-observations {
      color: #444; 
      font-size: 1.04rem; 
      margin-bottom: 14px; 
      word-break: break-word;
    }
    #agendaModal .event-lieu {
      color: #0c4178; 
      font-weight: 500; 
      font-size: 1.01rem;
      margin-top: auto; 
      display: flex; 
      align-items: center; 
      gap: 6px; 
      word-break: break-word;
    }
    #agendaModal .swiper-pagination-bullet {
      background: #FFD700;
    }
    #agendaModal .voir-plus-btn {
      display: inline-block; 
      margin: 18px auto 0 auto; 
      padding: 10px 28px; 
      background: #FFD700; 
      color: #0c4178; 
      font-family: 'Fredoka', sans-serif; 
      font-weight: 700; 
      font-size: 1.08rem; 
      border: none; 
      border-radius: 8px; 
      box-shadow: 0 2px 8px rgba(12,65,120,0.08); 
      cursor: pointer; 
      transition: background 0.2s, color 0.2s;
    }
    #agendaModal .voir-plus-btn:hover {
      background: #0c4178; 
      color: #FFD700;
    }

    /* === BOÎTE FLOTTANTE BOUTIQUE SOUVENIRS === */
    #souvenir-float-box {
      display: none; 
      position: fixed; 
      right: 32px;
      bottom: 32px; 
      z-index: 9998; 
      background: #0c4178; 
      color: #fff; 
      border-radius: 18px; 
      box-shadow: 0 4px 24px rgba(12,65,120,0.18); 
      padding: 24px 32px; 
      max-width: 400px; 
      width: 90vw; 
      text-align: left; 
      align-items: center; 
      gap: 18px;
    }
    #souvenir-float-box .float-title {
      font-family: Fredoka, sans-serif; 
      font-size: 1.13rem; 
      font-weight: 700; 
      margin-bottom: 10px;
    }
    #souvenir-float-box .float-btn {
      display: inline-block; 
      background: #FFD700; 
      color: #0c4178; 
      font-family: Fredoka, sans-serif; 
      font-weight: 700; 
      font-size: 1.08rem; 
      padding: 10px 28px; 
      border-radius: 8px; 
      text-decoration: none; 
      margin-top: 10px; 
      box-shadow: 0 2px 8px rgba(12,65,120,0.08); 
      transition: background 0.2s, 
      color 0.2s;
    }
    #souvenir-float-box .float-btn:hover {
      background: #0c4178; 
      color: #FFD700;
    }
    #souvenir-float-box .close-float {
      position: absolute; 
      top: 8px; right: 12px; 
      background: none; 
      border: none; 
      color: #FFD700; 
      font-size: 1.5rem; 
      cursor: pointer;
    }

    </style>

<style> /* Added responsive styles */
@media (max-width: 992px) { /* General Tablet */
    .parallax-header {
        height: auto; /* Let content define height, or set a more reasonable vh like 80vh */
        min-height: 70vh;
        padding-bottom: 100px; /* Space for logo if it's at the bottom */
    }
    .title_width_gradient .title_h2 { /* Title in parallax */
        font-size: 48px;
    }
    .title_width_gradient .title_bold:after {
         margin: -15px -15px 0;
    }
    .section-title { /* General section titles */
        font-size: 48px;
        line-height: 1.2;
    }
    .description-section .description-column, /* Ensure stacking if not handled by Bootstrap cols */
    .description-section .col-md-6.mb-4.d-flex {
        margin-bottom: 20px; /* Add space when stacked */
    }
    .description-column h3 { font-size: 1.4rem; }
    .description-column .lead { font-size: 1.1rem; }
    .description-column p { font-size: 0.9rem; }

    .richesses-section, .video-section, .team-section, .contact-section, .newsletter-section, .partenaires-marquee-section {
        padding: 60px 0;
    }
    .richesse-card h4 { font-size: 1.3rem; }
    .team-name { font-size: 1.3rem; }
    .team-position { font-size: 0.95rem; }
    .souvenir-shop-banner { min-height: 400px; }
    .souvenir-shop-title { font-size: 2rem; }
    .souvenir-shop-desc { font-size: 1.1rem; }
    .contact-title { font-size: 2.5rem; }
    .contact-title .small_title { font-size: 1.8rem; }
    .contact-title .bold_title { font-size: 3rem; }
    .contact-form h2 { font-size: 2rem; }
}

@media (max-width: 768px) {
    /* Existing .section-title rule: font-size: 45px; */
    /* Existing .logo-animation rules are good */
    /* Existing .contact-title and icon rules */

    .parallax-header {
        min-height: 60vh; /* Further reduce */
        padding-bottom: 150px; /* Ensure space for potentially larger vw logo */
    }
    .title_width_gradient .title_h2 {
        font-size: 36px;
    }
     .title_width_gradient .title_bold:after {
        height: 20px;
        margin: -12px -12px 0;
    }
    .section-title { /* Overriding the existing 45px to be more consistent */
        font-size: 36px;
        line-height: 1.2;
    }
    .description-section { padding: 40px 0; }
    .description-column { padding: 20px; }
    .description-column h3 { font-size: 1.25rem; }
    .description-column .lead { font-size: 1rem; }

    .richesses-section, .video-section, .team-section, .contact-section, .newsletter-section, .partenaires-marquee-section {
        padding: 40px 0;
    }
    .richesse-image { height: 200px; }
    .richesse-content h4 { font-size: 1.2rem; }
    .video-container { border-width: 3px; }
    .team-img { width: 150px; height: 150px; }
    .team-name { font-size: 1.2rem; }
    .team-position { font-size: 0.9rem; }

    .souvenir-shop-banner { min-height: 350px; padding: 20px; }
    .souvenir-shop-inner { padding: 30px 20px; }
    .souvenir-shop-title { font-size: 1.8rem; }
    .souvenir-shop-desc { font-size: 1rem; }
    .cta-souvenir-btn, .cta-catalogue-btn, .view-all-btn { font-size: 1rem; padding: 10px 25px; }

    .contact-section { padding: 40px 15px; } /* Add padding to section */
    .contact-title { font-size: 1.8rem; } /* Already has rule, consolidate */
    .contact-title .small_title { font-size: 1.3rem; }
    .contact-title .bold_title { font-size: 2.2rem; }
    .contact-lead { padding: 20px; font-size: 0.95rem; }
    .contact-form { padding: 25px; margin-top: 25px;}
    .contact-form h2 { font-size: 1.8rem; }
    .form-control { padding: 10px 12px !important; font-size: 0.95rem !important; }

    /* Modal Adjustments */
    #agendaModal, #souvenir-float-box { padding: 20px 15px; }
    #agendaModal .event-title { font-size: 1.1rem; }
    #agendaModal .event-observations, #agendaModal .event-lieu { font-size: 0.95rem; }
    #souvenir-float-box .float-title { font-size: 1.05rem; }
    #souvenir-float-box .float-btn { font-size: 1rem; padding: 8px 20px; }
}

@media (max-width: 480px) {
    .parallax-header {
        min-height: 50vh;
    }
    .logo-animation { /* Fine-tune if needed, vw units might be small here */
        min-width: 180px;
        min-height: 180px;
        bottom: 10px;
        left: 10px;
    }
    .title_width_gradient .title_h2 {
        font-size: 28px;
    }
    .title_width_gradient .title_bold:after {
        height: 16px;
        margin: -10px -10px 0;
    }
    .section-title {
        font-size: 28px;
    }
    .description-column { padding: 15px; }
    .description-column h3 { font-size: 1.1rem; }
    .description-column p { font-size: 0.85rem; }

    .richesses-section, .video-section, .team-section, .contact-section, .newsletter-section, .partenaires-marquee-section {
        padding: 30px 0;
    }
    .richesse-image { height: 180px; }
    .richesse-content h4 { font-size: 1.1rem; }
    .team-img { width: 120px; height: 120px; }
    .team-name { font-size: 1.1rem; }

    .souvenir-shop-banner { min-height: 300px; }
    .souvenir-shop-inner { padding: 20px 15px; }
    .souvenir-shop-title { font-size: 1.5rem; }
    .souvenir-shop-desc { font-size: 0.9rem; }
    .cta-souvenir-btn, .cta-catalogue-btn, .view-all-btn { font-size: 0.9rem; padding: 10px 20px; }

    .contact-title { font-size: 1.5rem; }
    .contact-title .small_title { font-size: 1.1rem; }
    .contact-title .bold_title { font-size: 1.8rem; }
    .contact-form h2 { font-size: 1.5rem; }
    .form-control { font-size: 0.9rem !important; }
    .contact-info h4 { font-size: 0.9rem; }
    .contact-text { font-size: 0.85rem; }

    #agendaModal .event-title { font-size: 1rem; }
    #agendaModal .event-observations, #agendaModal .event-lieu { font-size: 0.9rem; }
    #souvenir-float-box { padding: 15px; right: 15px; bottom: 15px; }
    #souvenir-float-box .float-title { font-size: 1rem; }
}
</style>
</head>
<body>
    <!-- Header avec Parallax -->
    <header class="parallax-header">
        <div class="title_width_gradient">
            <h2 class="title_h2">
                Voyage sur les<br>
                <span class="title_bold">Hautes terres de l'Ouest Cameroun</span>
            </h2>
        </div>
        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Animation-logo-ORTOC-Bon.gif " alt="Logo Office Régional du Tourisme" class="logo-animation">
    </header>

    <!-- Section Description -->
    <section class="description-section" id="about">
        <div class="container">
            <div>
                <h2 class="section-title">Destination <br> <span class="title_bold text_outline_white">Ouest Cameroun</span></h2>
            </div>
            <div class="row align-items-stretch">
                <!-- Version française -->
                <div class="col-md-6 mb-4 d-flex">
                    <div class="description-column">
                        <h3 class="mb-4">À LA DÉCOUVERTE DE LA RÉGION DE L'OUEST DU CAMEROUN</h3>
                        <p class="lead mb-4">LE TRÉSOR CACHÉ À EXPLORER</p>
                        <p>La région de l'Ouest, située au Cameroun est un véritable joyau à découvrir. C'est une terre d'histoire, de culture et de beauté naturelle qui fascine tous ceux qui s'y aventurent. Ses chefferies traditionnelles majestueuses, où se trouvent de véritables gardiens de rites ancestraux, ainsi que ses musées captivants, plongent les visiteurs dans un patrimoine riche, préservant toute son originalité.</p>
                        <p>L'Ouest Cameroun est aussi un tableau naturel d'une rare splendeur. Ses paysages vallonnés offrent des panoramas à couper le souffle, et son climat doux est une invitation permanente à la détente. Les amateurs de nature seront séduits par cette harmonie entre montagnes verdoyantes, plaines fertiles et cours d'eau vivifiants, qui en font une terre propice à l'évasion et à la sérénité.</p>
                        <p>À cela s'ajoute une mosaïque culturelle d'une richesse inégalée. Les cinq grands groupes ethniques de la région (Bamiléké, Bamoun, Mbo, Mbororo et Tikar) se distinguent par leurs langues, traditions, danses et festivités vibrantes. Cette diversité culturelle est une célébration permanente de l'identité locale, où chaque village, chaque fête vous invite à partager l'âme de ses habitants.</p>
                        <p>Et que dire du savoir-faire artisanal de l'Ouest Cameroun, véritable marque de prestige. De la sculpture sur bois à la poterie en passant par les textiles avec son précieux tissus Ndop qui agrémente tous styles de couture et bijoux traditionnels, la créativité des artisans locaux sublime chaque objet. Ces chefs-d'œuvre, fruits d'un héritage transmis de génération en génération font de la région des Grassfields une terre infinie de richesse culturelle.</p>
                        <p>La région de l'Ouest est, sans aucun doute, the place to be pour tout voyageur curieux et passionné en quête d'authenticité et de découvertes inoubliables. Venez explorer et laissez-vous envoûter par cet écrin d'histoire, de culture et de nature, qui fera de votre séjour une aventure mémorable.</p>
                    </div>
                </div>
                <!-- Version anglaise -->
                <div class="col-md-6 mb-4 d-flex">
                    <div class="description-column">
                        <h3 class="mb-4">DISCOVERING THE WEST REGION OF CAMEROON</h3>
                        <p class="lead mb-4">THE HIDDEN TREASURE TO EXPLORE</p>
                        <p>The West Region, located in Cameroon, is a true gem waiting to be discovered. It is a land of history, culture, and natural beauty that fascinates all who venture there. Its majestic traditional chiefdoms, where true guardians of ancestral rites reside, along with its captivating museums, immerse visitors in a rich heritage, preserving all its originality.</p>
                        <p>West Cameroon is also a natural canvas of rare splendor. Its rolling landscapes offer breathtaking panoramas, and its mild climate is a permanent invitation to relaxation. Nature enthusiasts will be seduced by this harmony between verdant mountains, fertile plains, and invigorating waterways, making it a land conducive to escape and serenity.</p>
                        <p>Added to this is an unparalleled cultural mosaic. The five major ethnic groups of the region (Bamiléké, Bamoun, Mbo, Mbororo, and Tikar) are distinguished by their languages, traditions, dances, and vibrant festivities. This cultural diversity is a permanent celebration of local identity, where each village and every festival invites you to share in the soul of its inhabitants.</p>
                        <p>And what about the artisanal expertise of West Cameroon, a true mark of prestige. From woodcarving to pottery, including textiles with its precious Ndop fabric that enhances all styles of clothing and traditional jewelry, local artisans' creativity sublimes each object. These masterpieces, fruits of a heritage passed down from generation to generation, make the Grassfields region an infinite land of cultural richness.</p>
                        <p>The West Region is, without a doubt, the place to be for any curious and passionate traveler in search of authenticity and unforgettable discoveries. Come explore and let yourself be enchanted by this treasure trove of history, culture, and nature, which will make your stay a memorable adventure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Section Vidéo -->
    <section class="video-section" id="video">
        <div class="container">
            <div>
                <h2 class="section-title">L'ouest <br> <span class="title_bold text_outline_white">en vidéo</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/7DQtd5laOr4?si=1Zut9XPHuIEc-VnZ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Richesses -->
    <section class="richesses-section" id="discover">
        <div class="container">
            <div class="richesses-title">
                <h2 class="section-title">Decouvrez <br> <span class="title_bold text_outline_white">nos richesses</span></h2>
            </div>
            <div class="row">
                <!-- Chefferie et Musées -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-05-07-a-08.21.54_d9620f1c.jpg" alt="Chefferie et Musées" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Chefferie et Musées</h4>
                            <a href="https://tourismeouestcameroun.com/chefferies-et-musees/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Festivals -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/festival-du-ngou-ngoung.jpg" alt="Festivals" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Festivals</h4>
                            <a href="https://tourismeouestcameroun.com/festivals/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Natures et paysages -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Chuttes-Ekom-Kam2-scaled.jpg" alt="Natures et paysages" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Natures et paysages</h4>
                            <a href="https://tourismeouestcameroun.com/natures-et-paysages/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Artisanat -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/sculpteur-tato-Dschang-scaled.jpg" alt="Artisanat" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Artisanat</h4>
                            <a href="https://tourismeouestcameroun.com/artisanat/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Gastronomie -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Ndole.png" alt="Gastronomie" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Spécialités culinaires</h4>
                            <a href="https://tourismeouestcameroun.com/specialites-culinaires/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Agenda culturel -->
                <div class="col-md-4 col-sm-6">
                    <div class="richesse-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/IMG_20210522_164736_271-scaled.jpg" alt="Festivals" class="richesse-image">
                        <div class="richesse-content">
                            <h4>Agenda culturel</h4>
                            <a href="https://tourismeouestcameroun.com/agenda-culturel/" class="richesse-link">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section Notre Équipe -->
    <section class="team-section" id="team">
        <div class="container">
            <div>
                <h2 class="section-title">Notre <br> <span class="title_bold text_outline_white">équipe</span></h2>
            </div>
            <div class="row">
                <!-- Membre d'équipe 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/DIOR.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Bernard ZEUTIBEU</h4>
                        <p class="team-position">Directeur</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/RAF.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Abdelazize ISMAILA</h4>
                        <p class="team-position">Responsable Administratif et Financier</p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Serge.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Serge TIOGON</h4>
                        <p class="team-position">Chargé de l'animation du secteur prive touristique </p>
                    </div>
                </div>
                
                <!-- Membre d'équipe 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/IMG_6541-scaled.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Armand FONKOU</h4>
                        <p class="team-position">Chargé de la promotion numérique</p>
                    </div>
                </div>
                <!-- Membre d'équipe 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Andre.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name"> André Pascal NGOUBENE</h4>
                        <p class="team-position">Chargé des projets</p>
                    </div>
                </div>
                <!-- Membre d'équipe 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Sylvie.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Sylvie KAMENI</h4>
                        <p class="team-position">Chargée des acceuils et des ventes </p>
                    </div>
                </div>
                <!-- Membre d'équipe 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Mme-Viviane.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Viviane MAFANG</h4>
                        <p class="team-position">Agent d'accueil</p>
                    </div>
                </div>
                <!-- Membre d'équipe 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Helene.jpg" alt="Membre d'équipe" class="team-img">
                        <h4 class="team-name">Hélène NGO YETNA</h4>
                        <p class="team-position">Agent d'entretien</p>
                    </div>
                </div>
            </div>
            <div class="view-all-container">
                <a href="https://tourismeouestcameroun.com/informations-utiles/notre-equipe/" class="view-all-btn">
                    Voir toute l'equipe
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Baniere Catalogue Tourisme -->
    <section class="newsletter-section">
      <div class="container newsletter-center">
        <img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/05/Plan-de-travail-1.jpg" alt="Catalogue Tourisme" class="newsletter-img">
        <br><br>
        <a href="mailto:ot.ouestcameroun@yahoo.com?subject=Commande%20Catalogue%20Tourisme%20Ouest%20Cameroun&body=Bonjour%2C%0D%0AJe souhaite commander le catalogue Tourisme Ouest Cameroun.%0D%0AMerci de me recontacter pour finaliser la commande." class="cta-catalogue-btn">Commander le vôtre maintenant</a>
      </div>
    </section>

    <!-- PARTENAIRES défilants -->
    <section class="partenaires-marquee-section">
      <div class="container">
        <h2 class="section-title">Nos <br><span class="title_bold text_outline_white">partenaires</span></h2>
        <div class="partenaires-marquee-container partners-marquee-overflow">
          <div class="partenaires-marquee partners-marquee-anim">
            <!-- Logos partenaires (dupliqués pour boucle infinie) -->
            <a href="https://www.regions-francophones.org/index.php" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-AIRF.jpg" alt="MINMIDT" class="partner-logo-img"></a>
            <a href="https://www.regions-francophones.org/20451-projet-coop-r-2023-2025.htm" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Coopr.jpg" alt="Camair-Co" class="partner-logo-img"></a>
            <a href="https://www.auvergnerhonealpes.fr/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-La-region-auvergne-rhone-alpes.jpg" alt="Conseil Régional Ouest" class="partner-logo-img"></a>
            <a href="https://www.parc-naturel-briere.com/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Parc-national-regional-de-Briere.jpg" alt="MINJEC" class="partner-logo-img"></a>
            <a href="https://www.polepatrimoine.org/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Pole-International-Francophone-des-Sites-Patrimoniaux.jpg" alt="Camtel" class="partner-logo-img"></a>
            <!-- Dupliquer pour effet infini -->
            <a href="https://www.puy-de-dome.fr/conseil-departemental-du-puy-de-dome.html" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Puy-de-Dome.jpg" alt="MINMIDT" class="partner-logo-img"></a>
            <a href="https://grandsitedefrance.com/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Reseaux-Grands-sites-de-France.jpg" alt="Camair-Co" class="partner-logo-img"></a>
            <a href="https://www.sens-architecture.com/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-sens-architechture.jpg" alt="Conseil Régional Ouest" class="partner-logo-img"></a>
            <a href="https://tetraktys-association.org/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Tetraktys.jpg" alt="MINJEC" class="partner-logo-img"></a>
            <a href="https://www.tourisme-sans-frontieres.com/" target="_blank" class="partner-logo-link"><img src="https://tourismeouestcameroun.com/wp-content/uploads/2025/06/Logo-Tourisme-Sans-Frontieres.jpg" alt="Camtel" class="partner-logo-img"></a>
            <!-- Ajout d'autres partenaires ici -->
          </div>
        </div>
        <div class="view-all-container">
            <a href="https://tourismeouestcameroun.com/informations-utiles/devenir-partenaire/" class="view-all-btn">
                Devenez Partenaire
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
      </div>
    </section>
    <!-- SECTION BOUTIQUE DE SOUVENIRS -->
    <section class="souvenir-shop-banner">
      <div class="souvenir-shop-inner">
        <h2 class="souvenir-shop-title">Découvrez nos souvenirs authentiques !</h2>
        <p class="souvenir-shop-desc">Gardez un souvenir unique de l'authenticité de l'Ouest, soutenez la valorisation de la région et de ses artisans avec l'ORTOC.</p>
        <a href="/boutique" class="cta-souvenir-btn">Accéder à la boutique</a>
      </div>
    </section>


    <!-- Section Contact/Visitez-nous -->
    <section class="contact-section" id="contact">
        <div class="container contact-content">
            <h2 class="contact-title">
                <span class="small_title">Visitez nous quand</span>
                <span class="bold_title">vous voulez</span>
            </h2>
            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <p class="lead contact-lead">L'Office Régional du Tourisme de l'Ouest Cameroun est situé à Bafoussam près du stade omnisport Tocket entre le carrefour saint Thomas et le carrefour Socada.</p>
                    <div class="contact-cards-row">
                        <!-- Retrouvez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4>Retrouvez-nous</h4>
                                <p class="contact-text">Bafoussam, Cameroun</p>
                            </div>
                        </div>
                        
                        <!-- Appelez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4>Appelez-nous</h4>
                                <p class="contact-text"><a href="tel:+237697687441">Appelez-nous maintenant</a></p>
                            </div>
                        </div>
                        
                        <!-- Écrivez-nous -->
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4>Écrivez-nous</h4>
                                <p class="contact-text">ot.ouestcameroun@yahoo.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <h2>Contactez-nous</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control" id="nom" placeholder="Entrez votre Nom">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="prenom">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" placeholder="Entrez votre Prénom">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Entrez votre Email">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="telephone">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" placeholder="Entrez votre Téléphone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="En quoi pouvons nous aider?"></textarea>
                            </div>
                            <button type="button" class="contact-submit-btn" onclick="sendEmail()">Envoyer <i class="fas fa-arrow-right ml-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODALE AGENDA EVENEMENTS -->
    <?php
    // Récupération du champ agenda_json depuis la page Agenda Culturel
    $agenda_page = get_page_by_path('agenda-culturel');
    $agenda_json = $agenda_page ? get_field('agenda_json', $agenda_page->ID) : '';
    $events = $agenda_json ? json_decode($agenda_json, true) : [];
    function extract_event_date_home($date_str) {
        $mois = [
            'janvier' => 1, 'février' => 2, 'fevrier' => 2, 'mars' => 3, 'avril' => 4, 'mai' => 5, 'juin' => 6,
            'juillet' => 7, 'août' => 8, 'aout' => 8, 'septembre' => 9, 'octobre' => 10, 'novembre' => 11, 'décembre' => 12, 'decembre' => 12
        ];
        $date_str = strtolower($date_str);
        preg_match('/(20[0-9]{2})/', $date_str, $year_match);
        $year = isset($year_match[1]) ? intval($year_match[1]) : 9999;
        $month = 12;
        foreach ($mois as $nom => $num) {
            if (strpos($date_str, $nom) !== false) {
                $month = $num;
                break;
            }
        }
        preg_match('/(\d{1,2})/', $date_str, $day_match);
        $day = isset($day_match[1]) ? intval($day_match[1]) : 1;
        return [$year, $month, $day];
    }
    $recurrents = [];
    $dated = [];
    foreach ($events as $event) {
        $date_str = $event['date'] ?? '';
        if (preg_match('/^(tous les|chaque)/i', $date_str)) {
            $recurrents[] = $event;
        } else {
            $event['_sort_date'] = extract_event_date_home($date_str);
            $dated[] = $event;
        }
    }
    usort($dated, function($a, $b) {
        return $a['_sort_date'] <=> $b['_sort_date'];
    });
    $sorted_events = array_merge($recurrents, $dated);
    $upcoming_events = array_slice($sorted_events, 0, 4);
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <div id="agendaModalOverlay">
      <div id="agendaModal">
        <button class="close-modal" onclick="document.getElementById('agendaModalOverlay').style.display='none';">&times;</button>
        <h2 style="color:#0c4178; font-family:Fredoka; font-size:2rem; font-weight:800; margin-bottom:18px;">Événements à venir</h2>
        <div class="swiper" id="agendaSwiper">
          <div class="swiper-wrapper">
            <?php foreach($upcoming_events as $event): ?>
            <div class="swiper-slide">
              <div class="event-date"><?= esc_html($event['date'] ?? '') ?></div>
              <div class="event-title"><?= esc_html($event['evenement'] ?? '') ?></div>
              <div class="event-observations"><?= esc_html($event['observations'] ?? '') ?></div>
              <div class="event-lieu"><span class="icon-location">📍</span> <?= esc_html($event['lieu'] ?? '') ?></div>
            </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <a href="/agenda-culturel" class="voir-plus-btn">Voir plus</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
    setTimeout(function() {
      document.getElementById('agendaModalOverlay').style.display = 'flex';
    }, 4000);
    var swiper = new Swiper('#agendaSwiper', {
      loop: true,
      autoplay: { delay: 3500, disableOnInteraction: false },
      pagination: { el: '.swiper-pagination', clickable: true },
      slidesPerView: 1,
      effect: 'slide',
    });
    </script>

    <!-- BOÎTE FLOTTANTE BOUTIQUE SOUVENIRS -->
    <div id="souvenir-float-box" style="display:none; position:fixed; right:32px; bottom:32px; z-index:9998; background:#0c4178; color:#fff; border-radius:18px; box-shadow:0 4px 24px rgba(12,65,120,0.18); padding:24px 32px; max-width:400px; width:90vw; text-align:left; align-items:center; gap:18px;">
      <div style="font-family:Fredoka,sans-serif; font-size:1.13rem; font-weight:700; margin-bottom:10px;">Plongez dans l'art et la culture de l'Ouest Cameroun – <br> <span style='color:#FFD700;'>Découvrez nos objets uniques dès maintenant !</span></div>
      <a href="/boutique" style="display:inline-block; background:#FFD700; color:#0c4178; font-family:Fredoka,sans-serif; font-weight:700; font-size:1.08rem; padding:10px 28px; border-radius:8px; text-decoration:none; margin-top:10px; box-shadow:0 2px 8px rgba(12,65,120,0.08); transition:background 0.2s,color 0.2s;">Accéder à la boutique</a>
      <button onclick="document.getElementById('souvenir-float-box').style.display='none';" style="position:absolute; top:8px; right:12px; background:none; border:none; color:#FFD700; font-size:1.5rem; cursor:pointer;">&times;</button>
    </div>
    <script>
    // Affiche la boîte flottante à mi-scroll
    window.addEventListener('scroll', function() {
      var box = document.getElementById('souvenir-float-box');
      if (!box) return;
      var scrollY = window.scrollY || window.pageYOffset;
      var docHeight = document.body.scrollHeight - window.innerHeight;
      if (scrollY > docHeight/2) {
        box.style.display = 'flex';
      } else {
        box.style.display = 'none';
      }
    });
    </script>


<?php
get_footer();
?>