<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php
    $role = get_field('project_role');
    $summary = get_field('project_summary');
    $client = get_field('project_client');
    $live_url = get_field('project_live_url');
    $github_url = get_field('project_github_url');
    $challenge = get_field('project_challenge');
    $solution = get_field('project_solution');
    $outcome = get_field('project_outcome');
    ?>
    <article class="section case-study">
        <div class="container case-study-container">
            <a class="back-link" href="<?php echo esc_url(get_post_type_archive_link('project')); ?>">← All Projects</a>
            <header class="case-study-header">
                <p class="eyebrow">PROJECT CASE STUDY</p>
                <h1><?php the_title(); ?></h1>
                <?php if ($summary) : ?><p class="case-study-summary"><?php echo esc_html($summary); ?></p><?php endif; ?>
                <div class="case-study-meta">
                    <?php if ($role) : ?><p><strong>Role:</strong> <?php echo esc_html($role); ?></p><?php endif; ?>
                    <?php if ($client) : ?><p><strong>Client:</strong> <?php echo esc_html($client); ?></p><?php endif; ?>
                </div>
                <div class="hero-actions">
                    <?php if ($live_url) : ?><a class="button" href="<?php echo esc_url($live_url); ?>" target="_blank" rel="noopener noreferrer">Visit Website</a><?php endif; ?>
                    <?php if ($github_url) : ?><a class="button button-outline" href="<?php echo esc_url($github_url); ?>" target="_blank" rel="noopener noreferrer">View Source</a><?php endif; ?>
                </div>
            </header>
 
 
            <div class="case-study-content">
                <section><h2>Overview</h2><div><?php the_content(); ?></div></section>
                <?php if ($challenge) : ?><section><h2>The Challenge</h2><div><?php echo wp_kses_post($challenge); ?></div></section><?php endif; ?>
                <?php if ($solution) : ?><section><h2>My Solution</h2><div><?php echo wp_kses_post($solution); ?></div></section><?php endif; ?>
                <?php if ($outcome) : ?><section><h2>Outcome</h2><div><?php echo wp_kses_post($outcome); ?></div></section><?php endif; ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>
<?php get_footer(); ?>