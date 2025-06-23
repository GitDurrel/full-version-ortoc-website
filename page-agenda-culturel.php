<?php
/*
Template Name: Agenda Culturel
Description: Page agenda culturel avec calendrier interactif et téléchargement PDF.
*/
get_header();
?>
<style>
.background-cpt {
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-Festival-scaled.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-top: 100px;
    padding-bottom: 40px;
}

.agenda-culturel-hero {
    max-width: 900px;
    margin: 40px auto 32px auto;
    text-align: center;
    padding: 0 16px;
    position: relative;
    z-index: 2;
}
.agenda-culturel-hero h1 {
    font-size: 61px;
    color: #0c4178;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    margin-bottom: 20px;
}
.agenda-culturel-hero p {
    color: #444;
    font-size: 1.15rem;
    margin-bottom: 24px;
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
}
.agenda-culturel-download a:hover {
    background: linear-gradient(90deg, #ffd700 0%, #0c4178 100%);
    box-shadow: 0 8px 32px rgba(12,65,120,0.13);
}
.agenda-culturel-download a .icon {
    margin-right: 10px;
    font-size: 1.3em;
}

/* Overlay pour la lisibilité */
/*.agenda-culturel-bg-overlay {*/
/*    position: fixed;*/
/*    top: 0; left: 0; width: 100vw; */
/*    background: rgba(255,255,255,0.7);*/
/*    z-index: 0;*/
/*    pointer-events: none;*/
/*}*/

.agenda-culturel-list {
    max-width: 1100px;
    margin: 0 auto 60px auto;
    padding: 32px 12px 12px 12px;
    position: relative;
    z-index: 2;
}

.ecs-event-card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    margin-bottom: 32px;
    overflow: hidden;
    border: 1.5px solid #e0e7ef;
    transition: box-shadow 0.2s, transform 0.2s;
}
.ecs-event-card:hover {
    box-shadow: 0 12px 36px rgba(12,65,120,0.18);
    transform: translateY(-4px) scale(1.01);
}
.ecs-event-img {
    flex: 1 1 160px;
    min-width: 120px;
    max-width: 180px;
    height: 120px;
    object-fit: cover;
    border-radius: 12px;
    margin-right: 18px;
}
.ecs-event-content {
    flex: 2 1 350px;
    padding: 28px 32px 24px 32px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.ecs-event-title {
    font-size: 1.3rem;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    color: #0c4178;
    margin-bottom: 10px;
}
.ecs-event-date {
    color: #219653;
    font-weight: 600;
    font-size: 1.1rem;
    margin-bottom: 8px;
}
.ecs-event-location {
    color: #0c4178;
    font-weight: 500;
    margin-bottom: 10px;
}
.ecs-event-excerpt {
    color: #444;
    font-size: 1.05rem;
    margin-bottom: 0;
}

@media (max-width: 900px) {
    .agenda-culturel-list {
        padding: 8px 0 0 0;
    }
    .ecs-event-card {
        flex-direction: column;
        align-items: stretch;
    }
    .ecs-event-img { /* Corrected typo: removed 'A' */
        width: 100%;
        max-width: 100%;
        border-radius: 18px 18px 0 0;
        height: 180px;
        margin-right: 0; /* Ensure no margin when stacked */
        margin-bottom: 12px; /* Add some space between image and content */
    }
    .ecs-event-content {
        padding: 18px 16px 16px 16px;
    }
    .ecs-event-title {
        font-size: 1.3rem;
    }
}

/* Further adjustments for smaller screens */
@media (max-width: 767px) { /* General mobile */
    .agenda-culturel-hero h1 {
        font-size: 48px; /* Reduce H1 size */
    }
    .agenda-culturel-hero p {
        font-size: 1rem;
    }
    .agenda-culturel-download a {
        font-size: 1rem;
        padding: 12px 24px;
        margin: 0 4px 8px 4px; /* Allow wrapping if multiple buttons */
    }
    .agenda-culturel-download {
        flex-wrap: wrap; /* Allow buttons to wrap */
    }
    .background-cpt {
        padding-top: 80px; /* Adjust padding for smaller navbar perhaps */
    }
}

.agenda-cards-calendar {
    width: 100%;
    margin: 0 auto 60px auto;
    padding: 0 8px;
}
.agenda-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px 24px;
    margin-top: 18px;
}

@media (max-width: 1000px) {
    .agenda-cards-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 700px) {
    .agenda-cards-grid {
        grid-template-columns: 1fr;
        gap: 24px 16px; /* Adjust gap */
    }
    .agenda-card {
        padding: 20px 18px; /* Slightly more consistent padding */
        min-height: auto; /* Allow height to be natural */
    }
    .agenda-card-title {
        font-size: 1.1rem;
    }
    .agenda-card-observations {
        font-size: 0.95rem;
    }
    .agenda-card-date {
        font-size: 1rem;
        padding: 5px 15px;
    }
     .ecs-event-img { /* Specific to ecs-event-card image on small screens */
        height: 160px; /* Slightly reduce height if needed */
    }
    .ecs-event-title { /* Specific to ecs-event-card title */
        font-size: 1.15rem;
    }
    .ecs-event-date, .ecs-event-location, .ecs-event-excerpt {
        font-size: 0.9rem;
    }
}

@media (max-width: 480px) { /* Smallest screens */
    .agenda-culturel-hero h1 {
        font-size: 36px;
    }
    .agenda-culturel-hero p {
        font-size: 0.9rem;
    }
     .agenda-culturel-download a {
        width: 100%; /* Make download buttons full width */
        justify-content: center;
        margin-left: 0;
        margin-right: 0;
    }
    .agenda-card { /* Re-adjust padding for smallest screens if needed */
        padding: 16px 14px;
    }
    .agenda-card-title {
        font-size: 1.05rem;
    }
     .agenda-card-observations {
        font-size: 0.9rem;
    }
    .agenda-card-date {
        font-size: 0.9rem;
        padding: 4px 12px;
    }
    .ecs-event-title {
        font-size: 1.1rem;
    }
    .ecs-event-date, .ecs-event-location, .ecs-event-excerpt {
        font-size: 0.85rem;
    }
}

.agenda-card { /* Original definition of .agenda-card was here, moved it up to group with its media query */
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 8px 32px rgba(12,65,120,0.10);
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 28px 24px 22px 24px;
    border: 1.5px solid #e0e7ef;
    transition: box-shadow 0.2s, transform 0.2s;
    position: relative;
    min-height: 220px;
}
.agenda-card:hover {
    box-shadow: 0 12px 36px rgba(12,65,120,0.18);
    transform: translateY(-4px) scale(1.02);
    border-color: #ffd700;
}
.agenda-card-date {
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
.agenda-card-title {
    font-size: 1.18rem;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    color: #0c4178;
    margin-bottom: 10px;
}
.agenda-card-observations {
    color: #444;
    font-size: 1.04rem;
    margin-bottom: 14px;
    flex: 1 1 auto;
}
.agenda-card-lieu {
    color: #0c4178;
    font-weight: 500;
    font-size: 1.01rem;
    margin-top: auto;
    display: flex;
    align-items: center;
    gap: 6px;
}
.icon-location {
    font-size: 1.1em;
    margin-right: 2px;
}
/* This @media rule for .agenda-card was already covered by the more general @media (max-width: 700px) above.
   Keeping the specific padding adjustment if it's meant to be different or more specific.
   If the padding `20px 18px` from the general 700px rule is preferred, this can be removed.
   Original:
   @media (max-width: 700px) {
    .agenda-card {
        padding: 18px 10px 14px 14px;
    }
   }
   Consolidated into the @media (max-width: 700px) block above.
*/
</style>
<div class="background-cpt">
<!--<div class="agenda-culturel-bg-overlay"></div>-->
<div class="agenda-culturel-hero">
    <h1>Agenda Culturel</h1>
    <p>Retrouvez ici tous les événements culturels à venir dans la région. Téléchargez l'agenda PDF ou explorez la liste interactive pour ne rien manquer !</p>
    <div class="agenda-culturel-download">
        <?php
        $agenda_pdf = get_field('agenda_pdf');
        if ($agenda_pdf) {
            $pdf_url = is_array($agenda_pdf) ? $agenda_pdf['url'] : $agenda_pdf;
        ?>
            <a href="<?php echo esc_url($pdf_url); ?>" download target="_blank">
                <span class="icon">&#128190;</span> Télécharger l'agenda PDF
            </a>
        <?php } ?>
    </div>
<div class="agenda-culturel-list agenda-cards-calendar">
<?php 
$agenda_json = get_field('agenda_json');
$events = json_decode($agenda_json, true);

function extract_event_date($date_str) {
    // Tableau des mois français
    $mois = [
        'janvier' => 1, 'février' => 2, 'fevrier' => 2, 'mars' => 3, 'avril' => 4, 'mai' => 5, 'juin' => 6,
        'juillet' => 7, 'août' => 8, 'aout' => 8, 'septembre' => 9, 'octobre' => 10, 'novembre' => 11, 'décembre' => 12, 'decembre' => 12
    ];
    $date_str = strtolower($date_str);
    // Cherche une année
    preg_match('/(20[0-9]{2})/', $date_str, $year_match);
    $year = isset($year_match[1]) ? intval($year_match[1]) : 9999;
    // Cherche un mois
    $month = 12;
    foreach ($mois as $nom => $num) {
        if (strpos($date_str, $nom) !== false) {
            $month = $num;
            break;
        }
    }
    // Cherche un jour (le premier nombre trouvé)
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
        $event['_sort_date'] = extract_event_date($date_str);
        $dated[] = $event;
    }
}
// Tri des événements datés
usort($dated, function($a, $b) {
    return $a['_sort_date'] <=> $b['_sort_date'];
});
// Fusionne les deux listes
$sorted_events = array_merge($recurrents, $dated);
?>
<?php if (!empty($sorted_events)) : ?>
    <div class="agenda-cards-grid">
        <?php foreach ($sorted_events as $event) : ?>
            <div class="agenda-card">
                <div class="agenda-card-date">
                    <?= esc_html($event['date'] ?? '') ?>
                </div>
                <div class="agenda-card-title">
                    <?= esc_html($event['evenement'] ?? '') ?>
                </div>
                <div class="agenda-card-observations">
                    <?= esc_html($event['observations'] ?? '') ?>
                </div>
                <div class="agenda-card-lieu">
                    <span class="icon-location">📍</span> <?= esc_html($event['lieu'] ?? '') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <p style="text-align:center;">Aucun événement à afficher pour le moment.</p>
<?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
