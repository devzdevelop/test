<?php get_header() ?>
<div class="px-80 py-10">
    <!-- Post thumnail (featured image) -->
    <?php if (has_post_thumbnail()): ?>
        <div class="flex mb-4">
            <img class="rounded-[15px]" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-large'); ?>"
                alt="<?php the_title() ?>">
        </div>

    <?php endif ?>

    <div class="mb-4">
        <h1><?php the_title(); ?></h1>
        <h4><?php the_field('title'); ?></h4> <!-- Function coming from Secure Fields -->

        <?php
        $skills = get_post_meta(get_the_ID(), 'skills', true);

        if ($skills && is_array($skills)): ?>
            <div class="team-skills">
                <h2 class="text-[16px]">Skills</h2>
                <ul class="flex gap-2">
                    <?php foreach ($skills as $skill): ?>
                        <li class="bg-slate-400 py-1 px-3 rounded-lg">
                            <p><?php echo esc_html($skill['name']); ?></p>
                            <!-- <p><?php //echo esc_html($skill['description']); ?></p> -->
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php //if (get_post_meta($post->ID, 'Title', true)): ?>
        <!-- <h4><?php //echo get_post_meta($post->ID, 'Title', true); ?></h4> -->
        <!-- Function coming from Standard WP Custom Fields -->
        <?php //endif; ?>
    </div>
    <div class="flex flex-col">
        <?php get_template_part('includes/section', 'team'); ?>

        <?php wp_link_pages(); ?>
    </div>
</div>
<?php get_footer() ?>