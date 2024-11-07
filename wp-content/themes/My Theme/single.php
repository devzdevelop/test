<?php get_header() ?>
<div class="px-80 py-10">
    <!-- Post thumnail (featured image) -->
    <?php if (has_post_thumbnail()): ?>
        <div class="flex">
            <img class="rounded-[15px]" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-large'); ?>"
                alt="<?php the_title() ?>">
        </div>

    <?php endif ?>

    <!-- <h2><?php //the_title(); ?></h2> -->
    <div class="flex flex-col">
        <?php get_template_part('includes/section', 'blogcontent'); ?>

        <?php wp_link_pages(); ?>
    </div>
</div>
<?php get_footer() ?>