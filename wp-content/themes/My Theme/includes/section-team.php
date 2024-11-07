<div class="flex flex-col gap-[20px]">
    <!-- Display blog content -->
    <div id="single-page-content">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>



                <div><?php the_content(); ?></div>


            <?php endwhile; else: endif; ?>

    </div>

    <!-- Show tags -->
    <div class="flex flex-row gap-1">
        <?php
        $tags = get_the_tags();
        if ($tags): // Check if there are tags
            foreach ($tags as $tag): ?>
                <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                    class="bg-green-400 w-fit px-2 rounded-md text-[14px]">
                    <?php echo esc_html($tag->name); ?>
                </a>
            <?php endforeach;
        else: ?>
            <!-- <p>No tags available.</p> --> <!-- Optional: Message when there are no tags -->
        <?php endif; ?>
    </div>

    <!-- Show category -->
    <?php
    $categories = get_the_category();
    foreach ($categories as $category): ?>
        <a href="<?php echo get_category_link($category->term_id) ?>">
            <?php echo $category->name ?>
        </a>

    <?php endforeach; ?>

    <!-- Show comments -->
    <?php //comments_template(); ?>

</div>