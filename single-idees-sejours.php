<?php
/*
Template Name: Nos idées séjours
Description: Affiche les idées séjours (CPT) avec design magazine et champs ACF dynamiques.
*/
get_header();
?>
<style>
.background-cpt {
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-top: 100px;
    padding-bottom: 40px;
}
.nos-idees-sejours-container {
    max-width: 1250px;
    margin: 40px auto 0 auto;
    background: rgba(255,255,255,0.97);
    border-radius: 24px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    margin-bottom: 0;
}
.idee-sejour-card {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    margin-bottom: 60px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    animation: fadeInUp 1s cubic-bezier(.39,.575,.565,1) both;
}
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(40px); }
    100% { opacity: 1; transform: none; }
}
.idee-sejour-header-img {
    width: 100%;
    height: 600px;
    object-fit: cover;
    object-position: center;
    display: block;
    animation: fadeIn 1.2s cubic-bezier(.39,.575,.565,1) both;
    border-radius: 24px 24px 0 0;
}
@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}
.idee-sejour-content {
    display: flex;
    flex-direction: row;
    padding: 0 0 0 0;
    position: relative;
    background: rgba(255,255,255,0.95);
}
.idee-sejour-vertical {
    writing-mode: vertical-rl;
    text-orientation: mixed;
    background: #0c4178;
    color: #FFD700;
    font-size: 1.5rem;
    font-weight: 700;
    letter-spacing: 0.1em;
    padding: 32px 12px 32px 12px;
    border-radius: 0 0 18px 0;
    min-width: 40px;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    margin-right: 24px;
    box-shadow: 2px 0 8px rgba(12,65,120,0.07);
    animation: fadeIn 1.2s 0.2s both;
}
.idee-sejour-main {
    flex: 2;
    padding: 32px 24px 24px 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}
.idee-sejour-pretitle {
    font-size: 1.1rem;
    color: #FFD700;
    font-weight: 500;
    letter-spacing: 0.04em;
    margin-bottom: 0.2em;
    text-transform: uppercase;
     font-family: fredoka;
}
.idee-sejour-title {
    font-size: 61px;
    color: #0c4178;
    font-weight: 800;
    margin-bottom: 18px;
    line-height: 1.1;
    text-transform: uppercase;
    font-family: fredoka;
}
.idee-sejour-description {
    font-size: 1.05rem;
    color: #222;
    line-height: 150%;
    margin-bottom: 18px;
    min-height: 120px;
    animation: fadeIn 1.2s 0.3s both;
    text-align: justify;
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    color: #000000;
}
.idee-sejour-infos-card {
    background: #f7f9fa;
    border-radius: 12px;
    padding: 12px 18px;
    font-size: 0.98rem;
    color: #222;
    margin-top: 18px;
    box-shadow: 0 2px 8px rgba(12,65,120,0.06);
    display: flex;
    flex-wrap: wrap;
    gap: 12px 24px;
    animation: fadeIn 1.2s 0.4s both;
}
.idee-sejour-infos-card span {
    display: block;
    margin-right: 18px;
    font-weight: 500;
}
.idee-sejour-side {
    flex: 1.1;
    min-width: 260px;
    padding: 32px 24px 24px 24px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
}
.idee-sejour-excursion-card {
    background:#dce2e8;
    border-radius: 18px;
    box-shadow: 0 2px 8px rgba(12,65,120,0.07);
    padding: 18px 22px 18px 22px;
    margin-bottom: 18px;
    width: 100%;
    animation: fadeIn 1.2s 0.5s both;
}
.idee-sejour-excursion-title {
    color: #0c4178;
    font-size: 40px;
    font-weight: 700;
    letter-spacing: 0.04em;
    margin-bottom: 10px;
    text-align: center;
    font-family: fredoka;
    line-height: 1.2;
}
.idee-sejour-tarif-label {
    color: #888;
    font-size: 0.98rem;
    margin-bottom: 2px;
    text-align: center;
}
.idee-sejour-tarif-montant {
    color: #0c4178;
    font-size: 1.25rem;
    font-weight: 700;
    text-align: center;
}
.idee-sejour-tarif-euro {
    color: #FFD700;
    font-size: 1.1rem;
    font-weight: 600;
    text-align: center;
}
.idee-sejour-tarif-base {
    color: #888;
    font-size: 0.95rem;
    margin-bottom: 8px;
    text-align: center;
}
.idee-sejour-tarif-inclus-label {
    color: #0c4178;
    font-size: 0.98rem;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 2px;
}
.idee-sejour-tarif-inclus {
    color: #444;
    font-size: 0.98rem;
    margin-bottom: 0;
}
.idee-sejour-side-img {
    width: 100%;
    border-radius: 12px;
    margin-top: 12px;
    object-fit: cover;
    max-height: 400px;
    animation: fadeIn 1.2s 0.7s both;
}
@media (max-width: 900px) {
    .idee-sejour-content {
        flex-direction: column;
    }
    .idee-sejour-side {
        align-items: stretch;
        min-width: 0;
        padding: 24px 12px 12px 12px;
    }
    .idee-sejour-main {
        padding: 24px 12px 12px 0;
    }
    .idee-sejour-vertical {
        margin-bottom: 12px;
        margin-right: 0;
        border-radius: 0 0 12px 0;
        padding: 20px 10px; /* Existing - adjust from 18px 8px */
        writing-mode: horizontal-tb; /* Change to horizontal for stacked layout */
        text-orientation: mixed;
        width: 100%;
        text-align: center;
        min-width: auto; /* Reset min-width */
        min-height: auto; /* Reset min-height */
    }
}

@media (max-width: 992px) { /* Tablet general */
    .idee-sejour-header-img {
        height: 450px; /* Reduce header image height */
    }
    .idee-sejour-title {
        font-size: 48px; /* Reduce main title */
    }
    .idee-sejour-vertical { /* This is the one that becomes horizontal at 900px */
        font-size: 1.3rem;
        padding: 24px 10px; /* Adjust padding before it becomes horizontal */
    }
    .idee-sejour-pretitle {
        font-size: 1rem;
    }
    .idee-sejour-description {
        font-size: 1rem; /* equivalent to 16px if base is 16px */
    }
    .idee-sejour-infos-card li {
        font-size: 1rem;
    }
    .idee-sejour-excursion-title {
        font-size: 32px; /* Reduce excursion title */
    }
    .idee-sejour-tarif-montant { font-size: 1.15rem; }
    .idee-sejour-tarif-euro { font-size: 1rem; }
    .cta-experience-btn { font-size: 1.1rem; padding: 14px 0; }
}


@media (max-width: 768px) { /* Mobile landscape / Large phones */
    .nos-idees-sejours-container {
        margin: 20px auto 0 auto; /* Reduce top margin */
        border-radius: 18px; /* Smaller radius */
    }
    .idee-sejour-card {
        margin-bottom: 40px;
        border-radius: 18px;
    }
    .idee-sejour-header-img {
        height: 300px;
        border-radius: 18px 18px 0 0;
    }
    .idee-sejour-content {
        padding: 0; /* Remove parent padding, handle in children */
    }
    .idee-sejour-vertical { /* Now horizontal */
        font-size: 1.2rem;
        padding: 12px 15px;
        border-radius: 0; /* Full width bar */
        margin-bottom: 15px;
    }
    .idee-sejour-main {
        padding: 20px 15px 15px 15px; /* Consistent padding */
    }
    .idee-sejour-title {
        font-size: 38px;
    }
    .idee-sejour-pretitle {
        font-size: 0.95rem;
    }
    .idee-sejour-description {
        font-size: 0.95rem; /* Approx 15px */
        min-height: auto; /* Remove min-height */
    }
    .idee-sejour-infos-card {
        padding: 10px 15px;
        gap: 8px 15px;
    }
    .idee-sejour-infos-card li {
        font-size: 0.95rem;
    }
    .idee-sejour-side {
        padding: 0 15px 20px 15px; /* Consistent padding */
    }
    .idee-sejour-excursion-card {
        padding: 15px;
    }
    .idee-sejour-excursion-title {
        font-size: 28px;
    }
    .idee-sejour-tarif-montant { font-size: 1.1rem; }
    .idee-sejour-tarif-euro { font-size: 0.95rem; }
    .idee-sejour-tarif-base, .idee-sejour-tarif-inclus { font-size: 0.9rem; }
    .cta-experience-btn { font-size: 1.05rem; padding: 12px 0; }
}

@media (max-width: 480px) { /* Smallest screens */
    .nos-idees-sejours-container {
        margin: 10px auto 0 auto;
        border-radius: 12px;
    }
    .idee-sejour-card {
        margin-bottom: 30px;
        border-radius: 12px;
    }
    .idee-sejour-header-img {
        height: 220px;
        border-radius: 12px 12px 0 0;
    }
    .idee-sejour-vertical { /* Horizontal bar */
        font-size: 1.1rem;
        padding: 10px;
        margin-bottom: 10px;
    }
    .idee-sejour-main {
        padding: 15px 10px 10px 10px;
    }
    .idee-sejour-title {
        font-size: 30px;
        margin-bottom: 10px;
    }
    .idee-sejour-pretitle {
        font-size: 0.9rem;
    }
    .idee-sejour-description {
        font-size: 0.9rem;
        margin-bottom: 12px;
    }
    .idee-sejour-infos-card {
        font-size: 0.9rem; /* Text inside the list */
    }
     .idee-sejour-infos-card li {
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    .idee-sejour-side {
        padding: 0 10px 15px 10px;
    }
    .idee-sejour-excursion-card {
        padding: 12px;
        margin-bottom: 12px;
    }
    .idee-sejour-excursion-title {
        font-size: 24px;
        margin-bottom: 8px;
    }
    .idee-sejour-tarif-montant { font-size: 1rem; }
    .idee-sejour-tarif-euro { font-size: 0.9rem; }
    .idee-sejour-tarif-base, .idee-sejour-tarif-inclus { font-size: 0.85rem; }
    .idee-sejour-tarif-inclus-label { font-size: 0.9rem; }
    .cta-experience-btn { font-size: 1rem; padding: 10px 0; }
    .idee-sejour-side-img { max-height: 300px; }
}

/* Style élégant pour les listes du champ infos */
.idee-sejour-infos-card ul {
    padding-left: 24px;
    margin: 0 0 10px 0;
    list-style: disc inside;
}
.idee-sejour-infos-card li {
    margin-bottom: 8px;
    color: #0c4178;
    font-size: 1.08rem;
    font-weight: 500;
    line-height: 1.5;
}
.idee-sejour-infos-card li::marker {
    color: #FFD700;
    font-size: 1.1em;
}
/* Bouton CTA expérience */
.cta-experience-btn {
    display: block;
    width: 100%;
    margin: 22px auto 0 auto;
    background: #FFD700;
    color: #0c4178;
    font-weight: 700;
    font-size: 1.2rem;
    padding: 16px 0;
    border-radius: 32px;
    text-align: center;
    text-decoration: none;
    box-shadow: 0 4px 16px rgba(12,65,120,0.10);
    transition: background 0.2s, color 0.2s, transform 0.2s, box-shadow 0.2s;
    animation: ctaPulse 1.5s infinite;
    letter-spacing: 0.5px;
    border: none;
}
.cta-experience-btn:hover {
    background: #ffe066;
    color: #0c4178;
    transform: scale(1.04);
    box-shadow: 0 8px 32px rgba(12,65,120,0.13);
}
@keyframes ctaPulse {
    0% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
    70% { box-shadow: 0 0 0 16px rgba(255,215,0,0); }
    100% { box-shadow: 0 0 0 0 rgba(255,215,0,0.5); }
}
</style>
<div class="background-cpt">
<div class="nos-idees-sejours-container">
<?php
// SUPPRIMER la boucle personnalisée qui liste tous les CPT
// et utiliser la boucle WordPress par défaut pour afficher le post courant
if (have_posts()) : while (have_posts()) : the_post();
    $adjectif = get_field('adjectif_vertical');
    $pretitle = get_field('pretitre');
    $title = get_field('titre');
    $description = get_field('description');
    $title_idea = get_field('sous-titre');
    $tarif_fcfa = get_field('tarif_fcfa');
    $tarif_euro = get_field('tarif_euro');
    $base = get_field('base');
    $inclus = get_field('inclus');
    $image_principale = get_field('image_principale');
    $image_secondaire = get_field('image_secondaire');
    $infos = get_field('infos');
?>
    <div class="idee-sejour-card">
        <?php
        if ($image_principale) {
            if (is_array($image_principale) && isset($image_principale['url'])) {
                $img_url = $image_principale['url'];
                $img_alt = $image_principale['alt'] ?? '';
            } else {
                $img_url = $image_principale;
                $img_alt = '';
            }
            echo '<img src="' . esc_url($img_url) . '" alt="' . esc_attr($img_alt) . '" class="idee-sejour-header-img" loading="lazy" />';
        }
        ?>
        <div class="idee-sejour-content">
            <?php if ($adjectif) : ?>
                <div class="idee-sejour-vertical"><?php echo esc_html($adjectif); ?></div>
            <?php endif; ?>
            <div class="idee-sejour-main">
                <?php if ($pretitle) : ?>
                    <div class="idee-sejour-pretitle"><?php echo esc_html($pretitle); ?></div>
                <?php endif; ?>
                <?php if ($title) : ?>
                    <div class="idee-sejour-title"><?php echo esc_html($title); ?></div>
                <?php endif; ?>
                <?php if ($description) : ?>
                    <div class="idee-sejour-description"><?php echo wp_kses_post($description); ?></div>
                <?php endif; ?>
                <?php if ($infos) : ?>
                    <div class="idee-sejour-infos-card">
                        <?php
                        if (is_array($infos)) {
                            foreach ($infos as $info) {
                                if (is_array($info)) {
                                    foreach ($info as $val) {
                                        if ($val) echo wp_kses_post($val);
                                    }
                                } else {
                                    if ($info) echo wp_kses_post($info);
                                }
                            }
                        } else {
                            echo wp_kses_post($infos);
                        }
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="idee-sejour-side">
                <div class="idee-sejour-excursion-card">
                    <?php if ($title_idea) : ?>
                        <div class="idee-sejour-excursion-title"><?php echo esc_html($title_idea); ?></div>
                    <?php endif; ?>
                    <div class="idee-sejour-tarif-label">à partir de :</div>
                    <div class="idee-sejour-tarif-montant">
                        <?php echo esc_html($tarif_fcfa); ?>
                    </div>
                    <div class="idee-sejour-tarif-euro">
                        <?php echo esc_html($tarif_euro); ?>
                    </div>
                    <div class="idee-sejour-tarif-base">
                        <?php echo $base ? esc_html($base) : 'Base : 05 personnes minimum'; ?>
                    </div>
                    <div class="idee-sejour-tarif-inclus-label">Ce tarif comprend: </div>
                    <div class="idee-sejour-tarif-inclus">
                        <?php echo wp_kses_post($inclus); ?>
                    </div>
                    <a href="mailto:ot.ouestcameroun@yahoo.com?subject=Demande%20d'information%20-%20Idée%20séjour%20:<?php echo rawurlencode(get_the_title()); ?>&body=Je souhaite découvrir cette expérience : <?php echo rawurlencode(get_the_title()); ?>.%0D%0A%0D%0AMerci de me recontacter pour plus d'informations." class="cta-experience-btn">Découvrir cette expérience</a>
                </div>
                <?php
                if ($image_secondaire) {
                    if (is_array($image_secondaire) && isset($image_secondaire['url'])) {
                        $img2_url = $image_secondaire['url'];
                        $img2_alt = $image_secondaire['alt'] ?? '';
                    } else {
                        $img2_url = $image_secondaire;
                        $img2_alt = '';
                    }
                    echo '<img src="' . esc_url($img2_url) . '" alt="' . esc_attr($img2_alt) . '" class="idee-sejour-side-img" loading="lazy" />';
                }
                ?>
            </div>
        </div>
    </div>
<?php
endwhile; endif;
?>
    </div>
</div>
<?php get_footer(); ?>
