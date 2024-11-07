<?php /* Template Name: About Us */ ?>
<?php get_header() ?>
<?php if (is_active_sidebar('page-sidebar')): ?>
    <?php dynamic_sidebar('page-sidebar'); ?>
<?php endif ?>
<div class="container flex-[1]">
    <div>
        <?php get_template_part('includes/section', 'content'); ?>
    </div>
</div>

<?php get_footer() ?>