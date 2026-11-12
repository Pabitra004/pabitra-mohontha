<?php
$technologies = get_the_terms(get_the_ID(), 'project_technology');
$summary = get_field('project_summary');
$role = get_field('project_role');
?>
<article class="project-card" data-reveal data-project-card data-technologies="<?php
    echo esc_attr($technologies && !is_wp_error($technologies) ? implode(' ', wp_list_pluck($technologies, 'slug')) : '');
?>">
    <a class="project-image project-text-preview" href="<?php the_permalink(); ?>">
        <span>Project Case Study</span>
    </a>
    <div class="project-card-content">
        <?php if ($role) : ?><p class="project-role"><?php echo esc_html($role); ?></p><?php endif; ?>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo esc_html($summary ?: get_the_excerpt()); ?></p>
        <?php if ($technologies && !is_wp_error($technologies)) : ?>
            <ul class="technology-list">
                <?php foreach ($technologies as $technology) : ?>
                    <li><?php echo esc_html($technology->name); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <a class="text-link" href="<?php the_permalink(); ?>">View Case Study <span aria-hidden="true">↗</span></a>
    </div>
</article>