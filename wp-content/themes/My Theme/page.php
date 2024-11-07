<?php get_header() ?>
<?php if (is_active_sidebar('page-sidebar')): ?>
    <?php echo 'work' ?>
    <?php dynamic_sidebar('page-sidebar'); ?>
<?php endif ?>

<?php if (has_post_thumbnail()): ?>
    <div class="flex min-w-[300px]">
        <img class="rounded-[15px]" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-small'); ?>"
            alt="<?php the_title() ?>">
    </div>

<?php endif ?>
<div>
    <?php get_template_part('includes/section', 'content'); ?>
</div>
<?php get_footer() ?>