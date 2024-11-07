<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

        <div class="flex flex-col justify-center py-4 px-4 border-2 rounded-lg gap-[20px]">
            <div class="flex gap-[15px]">
                <?php if (has_post_thumbnail()): ?>
                    <div class="flex min-w-[300px]">
                        <img class="rounded-[15px]" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-small'); ?>"
                            alt="<?php the_title() ?>">
                    </div>

                <?php endif ?>

                <div class="flex flex-col gap-[10px]">
                    <h3 class="font-semibold"><?php the_title(); ?></h3>
                    <p class="w-full"><?php the_excerpt(); ?></p>
                </div>
            </div>

            <a href="<?php the_permalink(); ?>" class="py-[10px] px-[20px] bg-green-500 rounded-lg max-w-fit">Read more</a>
        </div>

    <?php endwhile; else: ?>
    There are no results for '<?php echo get_search_query() ?>'
<?php endif; ?>