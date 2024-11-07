<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <?php wp_head(); ?>

</head>

<body class="flex flex-col h-full ">
    <header class="flex  py-[20px] px-[90px]">
        <div class="w-full flex justify-between ">
            <div class="text-slate-50">
                <h2 class="text-[24px] font-medium text-[#F26800]">Nomadic Journeys</h2>
            </div>
            <div class="flex items-center gap-10">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu', // theme location
                        // 'menu' => 'Top Bar'
                        'menu_class' => 'top-bar flex flex-row justify-center items-center gap-[30px] text-[12px] h-full',
                    )
                );
                ?>
                <?php get_search_form(); ?>
            </div>
        </div>
    </header>