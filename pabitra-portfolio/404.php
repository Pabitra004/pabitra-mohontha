<?php get_header(); ?>
<section class="section">
    <div class="container error-page">
        <p class="eyebrow">404 ERROR</p>
        <h1>This page could not be found.</h1>
        <p>The page may have moved or the URL may be incorrect.</p>
        <a class="button" href="<?php echo esc_url(home_url('/')); ?>">Return Home</a>
    </div>
</section>
<?php get_footer(); ?>