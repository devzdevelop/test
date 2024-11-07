<?php /* Template Name: Our Team */ ?>
<?php get_header() ?>
<div class="single-page flex-[1] px-[200px] mt-10">
    <div class="flex flex-col gap-[20px]">
        <h1><?php echo single_cat_title(); ?></h1>

        <?php get_template_part('includes/section', 'archive'); ?>

        <?php
        // The Loop
        if (have_posts()):
            // Pagination
            $args = array(
                'prev_text' => __('« Previous', 'textdomain'),
                'next_text' => __('Next »', 'textdomain'),
            );
            echo '<div class="pagination">' . paginate_links($args) . '</div>';

        else:
            echo '<p>' . __('No posts found.', 'textdomain') . '</p>';
        endif;
        ?>
    </div>
</div>
<?php get_footer() ?>