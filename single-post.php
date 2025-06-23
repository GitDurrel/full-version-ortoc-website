<?php
/*
Template pour Article de Blog (single-post)
*/
get_header(); ?>

<style>
.background-article{
    background-image: url('https://tourismeouestcameroun.com/wp-content/uploads/2025/04/Fond-tradi-site-2-scaled.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    min-height: 100vh;
    padding-bottom: 40px;    
}

.single-blog-hero {
    position: relative;
    height: 90vh;
    min-height: 340px;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 60px 20px 40px 20px;
    color: #fff;
    text-align: center;
    overflow: visible;
    margin-bottom: 0;
}
.single-blog-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(12,65,120,0.3) 0%, rgba(12,65,120,0.5) 100%);
    z-index: 1;
}
.single-blog-hero-content {
    position: relative;
    z-index: 2;
}
.single-blog-hero-title {
    font-family: Fredoka;
    font-size: 54px;
    font-weight: 800;
    line-height: 1.1;
    margin-bottom: 18px;
    color: #fff;
    text-shadow: 0 4px 24px rgba(12,65,120,0.18);
}
.single-blog-hero-date {
    font-size: 1.1rem;
    color: #FFD700;
    margin-bottom: 10px;
    font-weight: 500;
    letter-spacing: 1px;
}

.single-blog-content-section {
    background: #fff;
    border-radius: 24px;
    box-shadow: 0 4px 24px rgba(12,65,120,0.07);
    max-width: 1200px;
    margin: -70px auto 40px auto;
    padding: 48px 32px 32px 32px;
    position: relative;
    z-index: 3;
}
.single-blog-content-section h1, .single-blog-content-section h2, .single-blog-content-section h3 {
    color: #0c4178;
    font-family: Fredoka;
    font-weight: 700;
}
.single-blog-content-section p {
    font-size: 1.13rem;
    color: #222;
    line-height: 1.7;
    margin-bottom: 18px;
}
.single-blog-content-section img {
    max-width: 100%;
    border-radius: 12px;
    margin: 24px 0;
    box-shadow: 0 2px 12px rgba(12,65,120,0.08);
}
.single-blog-content-section ul, .single-blog-content-section ol {
    margin-left: 24px;
    margin-bottom: 18px;
}
.single-blog-content-section blockquote {
    border-left: 4px solid #FFD700;
    background: #f8f8f8;
    padding: 16px 24px;
    margin: 24px 0;
    color: #0c4178;
    font-style: italic;
    border-radius: 8px;
}
@media (max-width: 900px) {
    .single-blog-content-section {
        padding: 24px 8px 18px 8px;
    }
    .single-blog-content-section {
        padding: 32px 18px 24px 18px; /* Adjusted from 24px 8px for more consistent padding */
        margin: -50px auto 30px auto; /* Reduce negative margin slightly */
    }
    .single-blog-hero-title {
        font-size: 2.5rem; /* Was 2.1rem, making it a bit larger for tablet */
    }
    .single-blog-hero-date {
        font-size: 1rem;
    }
    .single-blog-content-section p {
        font-size: 1.05rem; /* Adjust paragraph size */
    }
     .single-blog-content-section h1 { font-size: 2rem; }
     .single-blog-content-section h2 { font-size: 1.75rem; }
     .single-blog-content-section h3 { font-size: 1.5rem; }
}

@media (max-width: 767px) { /* General mobile */
    .single-blog-hero {
        height: auto; /* Allow natural height */
        min-height: 280px; /* Adjust min-height */
        padding: 40px 15px 30px 15px;
    }
    .single-blog-hero-title {
        font-size: 2rem; /* Further reduce */
    }
    .single-blog-hero-date {
        font-size: 0.95rem;
    }
    .single-blog-content-section {
        padding: 24px 15px 20px 15px;
        margin: -40px auto 30px auto;
        border-radius: 18px;
    }
    .single-blog-content-section p {
        font-size: 1rem;
        line-height: 1.6;
    }
    .single-blog-content-section h1 { font-size: 1.8rem; }
    .single-blog-content-section h2 { font-size: 1.6rem; }
    .single-blog-content-section h3 { font-size: 1.4rem; }
    .single-blog-content-section img {
        margin: 18px 0;
        border-radius: 8px;
    }
    .single-blog-content-section blockquote {
        padding: 12px 18px;
        margin: 18px 0;
    }
}

@media (max-width: 480px) { /* Smallest screens */
    .single-blog-hero {
        min-height: 220px;
        padding: 30px 10px 20px 10px;
    }
    .single-blog-hero-title {
        font-size: 1.7rem;
    }
    .single-blog-hero-date {
        font-size: 0.9rem;
    }
    .single-blog-content-section {
        padding: 20px 10px 15px 10px;
        margin: -30px auto 20px auto;
        border-radius: 12px;
    }
    .single-blog-content-section p {
        font-size: 0.95rem;
    }
    .single-blog-content-section h1 { font-size: 1.6rem; }
    .single-blog-content-section h2 { font-size: 1.4rem; }
    .single-blog-content-section h3 { font-size: 1.25rem; }
    .single-blog-content-section img {
        margin: 15px 0;
    }
}
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="single-blog-hero" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
        <div class="single-blog-hero-content">
            <div class="single-blog-hero-date">
                <?php echo get_the_date('j F Y'); ?>
            </div>
            <h1 class="single-blog-hero-title"><?php the_title(); ?></h1>
        </div>
    </section>
    <div class='background-article'>
        <section class="single-blog-content-section">
        <?php the_content(); ?>
    </section>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?> 