<?php get_header(); ?>
<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('content-entry'); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content"><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>Nothing found</h1>
            <p>There is no content to display yet.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>