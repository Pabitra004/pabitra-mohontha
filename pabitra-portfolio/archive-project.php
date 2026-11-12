<?php get_header(); ?>
<section class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">PORTFOLIO</p>
            <h1>Selected Projects</h1>
            <p>Explore project examples and implementation details.</p>
        </div>
        <div class="projects-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/cards/project-card'); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No projects have been published yet.</p>
            <?php endif; ?>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</section>
<?php get_footer(); ?>