<?php /* Template Name: Contact Us */ ?>
<?php get_header() ?>

<div class="container flex-[1]">
    <h1 class="text-center text-3xl font-medium  "><?php the_title(); ?></h1>

    <div class="flex flex-row justify-around w-screen">
        <div>
            This is where the contact form goes
        </div>
        <div>
            <?php get_template_part('includes/section', 'content'); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>