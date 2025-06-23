<?php
/*
Template Name: Blog ORTOC
Description: Page blog personnalisée sans sidebar ni searchbox, avec bannière et listing d'articles.
*/
get_header(); ?>

<style>
.blog-banner-ortoc {
    width: 100%;
    min-height: 100vh;
    background: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/06/pAGE-DE-GARDE-scaled.jpg') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    margin-bottom: 40px;
}
.blog-banner-ortoc::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(12,65,120,0.45);
    z-index: 1;
}
.blog-banner-ortoc .blog-banner-title {
    position: relative;
    z-index: 2;
    color: #fff;
    font-family: 'Fredoka', sans-serif;
    font-size: 61px;
    font-weight: 800;
    text-align: center;
    letter-spacing: 1px;
    text-shadow: 0 4px 24px rgba(12,65,120,0.18);
}
.blog-listing-ortoc {
    max-width: 1200px;
    margin: 40px auto 60px auto;
    padding: 0 16px;
}
.blog-listing-ortoc .blog-title {
    font-size: 40px;
    color: #0c4178;
    font-family: 'Fredoka', sans-serif;
    font-weight: 800;
    margin-bottom: 32px;
    letter-spacing: 1px;
    text-align: center;
    margin: 50px;
}
.blog-listing-ortoc .blog-articles {
    display: flex;
    flex-direction: column;
    gap: 40px;
}
.blog-listing-ortoc .blog-article-card {
    display: flex;
    flex-direction: row;
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
    overflow: hidden;
    transition: box-shadow 0.2s, transform 0.2s;
    align-items: stretch;
}
.blog-listing-ortoc .blog-article-card.reverse {
    flex-direction: row-reverse;
}
.blog-listing-ortoc .blog-article-card:hover {
    box-shadow: 0 8px 32px rgba(12,65,120,0.13);
    transform: translateY(-2px) scale(1.01);
}
.blog-listing-ortoc .blog-article-img {
    width: 400px;
    min-width: 180px;
    max-width: 400px;
    height: 400px;
    object-fit: cover;
    object-position: center;
    background: #f5fafd;
    border-right: 1px solid #f0f0f0;
    display: block;
}
.blog-listing-ortoc .blog-article-card.reverse .blog-article-img {
    border-right: none;
    border-left: 1px solid #f0f0f0;
}
.blog-listing-ortoc .blog-article-content {
    flex: 1 1 0%;
    padding: 32px 28px 24px 28px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.blog-listing-ortoc .blog-article-title {
    font-size: 1.6rem;
    color: #0c4178;
    font-family: 'Fredoka', sans-serif;
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.2;
}
.blog-listing-ortoc .blog-article-date {
    color: #0c4178;
    font-size: 1rem;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 6px;
}
.blog-listing-ortoc .blog-article-excerpt {
    color: #222;
    font-size: 1.08rem;
    margin-bottom: 18px;
    line-height: 1.6;
}
.blog-listing-ortoc .blog-article-link {
    color: #FFD700;
    font-weight: 600;
    text-decoration: none;
    margin-top: 8px;
    display: inline-block;
    font-size: 1.08rem;
}
.blog-listing-ortoc .blog-article-link:hover {
    text-decoration: underline;
}
@media (max-width: 900px) {
    .blog-listing-ortoc .blog-article-card,
    .blog-listing-ortoc .blog-article-card.reverse {
        flex-direction: column;
    }
    .blog-listing-ortoc .blog-article-img {
        width: 100%;
        max-width: 100%;
        min-width: 0;
        height: 260px;
        border-right: none;
        border-left: none;
        border-bottom: 1px solid #f0f0f0;
    }
    .blog-listing-ortoc .blog-article-content {
        padding: 22px 16px 18px 16px;
    }
    .blog-banner-title { /* Adjust banner title for tablets */
        font-size: 48px;
    }
    .blog-listing-ortoc .blog-title { /* Adjust section title for tablets */
        font-size: 32px;
        margin: 40px 0 24px 0; /* Adjust margins */
    }
}

@media (max-width: 767px) { /* General mobile */
    .blog-banner-ortoc {
        min-height: 60vh; /* Reduce banner height */
        margin-bottom: 30px;
    }
    .blog-banner-title {
        font-size: 36px;
        padding: 0 10px; /* Add some padding if text gets too wide */
    }
    .blog-listing-ortoc {
        margin: 30px auto 40px auto;
        padding: 0 10px;
    }
    .blog-listing-ortoc .blog-title {
        font-size: 28px;
        margin: 30px 0 20px 0;
    }
    .blog-listing-ortoc .blog-article-card {
        border-radius: 12px; /* Slightly smaller radius */
    }
    .blog-listing-ortoc .blog-article-img {
        height: 220px; /* Adjust image height for mobile */
    }
    .blog-listing-ortoc .blog-article-content {
        padding: 18px 12px 16px 12px; /* Adjust padding */
    }
    .blog-listing-ortoc .blog-article-title {
        font-size: 1.3rem;
    }
    .blog-listing-ortoc .blog-article-date {
        font-size: 0.9rem;
    }
    .blog-listing-ortoc .blog-article-excerpt {
        font-size: 1rem;
        line-height: 1.5;
    }
    .blog-listing-ortoc .blog-article-link {
        font-size: 1rem;
    }
    .voir-tout-btn {
        font-size: 1.05rem;
        padding: 10px 30px;
    }
}

@media (max-width: 480px) { /* Smallest screens */
    .blog-banner-ortoc {
        min-height: 50vh; /* Further reduce banner height */
    }
    .blog-banner-title {
        font-size: 28px;
    }
    .blog-listing-ortoc .blog-title {
        font-size: 24px;
        margin: 20px 0 16px 0;
    }
    .blog-listing-ortoc .blog-article-img {
        height: 180px; /* Further adjust image height */
    }
    .blog-listing-ortoc .blog-article-title {
        font-size: 1.2rem;
    }
    .blog-listing-ortoc .blog-article-date {
        font-size: 0.85rem;
    }
    .blog-listing-ortoc .blog-article-excerpt {
        font-size: 0.95rem;
    }
    .blog-listing-ortoc .blog-article-link {
        font-size: 0.95rem;
    }
     .voir-tout-btn {
        font-size: 1rem;
        padding: 10px 24px;
        width: calc(100% - 20px); /* Make button more prominent, adjust for padding */
        margin-left: 10px;
        margin-right: 10px;
        box-sizing: border-box;
    }
}

.voir-tout-btn {
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
.voir-tout-btn:hover {
    background: #0c4178 !important;
    color: #FFD700 !important;
    transform: translateY(-2px);
}
</style>

<div class="blog-banner-ortoc">
    <div class="blog-banner-title">Decouvrez notre actualité</div>
</div>

<?php
$articles = get_posts([
    'suppress_filters' => 0,
    'numberposts' => -1,
    'post_type' => 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
]);
?>
<div class="blog-listing-ortoc">
    <div class="blog-title">Tout savoir sur la region de l'ouest</div>
    <div class="blog-articles" id="blog-articles-list">
        <?php if (empty($articles)) : ?>
            <div style="text-align:center; color:#0c4178; font-size:1.2rem; margin:40px 0;">Aucun article trouvé pour le moment.</div>
        <?php else : ?>
        <?php foreach ($articles as $key => $article): ?>
            <div class="blog-article-card<?php echo ($key % 2 == 1) ? ' reverse' : ''; ?>" style="<?php echo ($key > 3) ? 'display:none;' : ''; ?>">
                <a href="<?= get_post_permalink($article->ID); ?>" style="display:block;">
                    <img class="blog-article-img" src="<?= get_the_post_thumbnail_url($article->ID) ?>" alt="<?= esc_attr($article->post_title) ?>">
                </a>
                <div class="blog-article-content">
                    <div class="blog-article-date">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#0c4178" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <?php 
                        $post_date = $article->post_modified;
                        if(defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE=='en'){
                            setlocale(LC_TIME, 'en_EN.utf8', 'eng');
                        } else {
                            setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
                        }
                        $post_date_fr = strftime('%e %B %Y', strtotime($post_date));
                        echo $post_date_fr; 
                        ?>
                    </div>
                    <div class="blog-article-title">
                        <a href="<?= get_post_permalink($article->ID); ?>" style="color:inherit; text-decoration:none;">
                            <?= $article->post_title ?>
                        </a>
                    </div>
                    <div class="blog-article-excerpt">
                        <?php
                        if (!empty($article->post_excerpt)) {
                            echo $article->post_excerpt;
                        } else {
                            echo wp_trim_words(strip_tags($article->post_content), 30, '...');
                        }
                        ?>
                    </div>
                    <a href="<?= get_post_permalink($article->ID); ?>" class="blog-article-link">Lire l'article</a>
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?php if (count($articles) > 4): ?>
        <button class="voir-tout-btn" id="voir-tout-btn">
            Voir tout
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </button>
    <?php endif; ?>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('voir-tout-btn');
    if (btn) {
        btn.addEventListener('click', function() {
            var cards = document.querySelectorAll('.blog-article-card');
            cards.forEach(function(card) {
                card.style.display = '';
            });
            btn.style.display = 'none';
        });
    }
});
</script>

<?php get_footer(); ?> 