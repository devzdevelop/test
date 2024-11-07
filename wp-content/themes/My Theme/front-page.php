<div class="hero-image w-full h-[800px] bg-orange-900 flex flex-col">
    <?php get_header() ?>
    <div class="w-full flex justify-center pt-[8.4%] h-full">
        <div class="flex flex-col gap-[50px] w-[525px]">
            <div class="flex flex-col gap-[30px]">
                <h1 class="text-[50px] font-bold leading-[61px] w-full"> Explore the World's Hidden Gems</h1>
                <p class="leading-[27px] w-[430px]">Unforgettable adventures off the beaten path. Book your next journey
                    with us
                    and discover the
                    extradinary
                </p>
            </div>
            <div>
                <button
                    class="py-[14px] px-[25px] rounded-[20px] bg-[#F26800] hover:bg-[#e7914e]  text-[16px] font- capitalize">Start
                    your
                    adventure</button>
            </div>
        </div>
    </div>
</div>


<div class="page-content flex-[1] w-full py-[30px] px-[60px]">
    <div class="flex flex-col items-center">
        <div>
            <h1 class="font-medium text-3xl text-start"><?php the_title(); ?></h1>
            <?php get_template_part('includes/section', 'content'); ?>
        </div>
    </div>
</div>

<?php get_footer() ?>