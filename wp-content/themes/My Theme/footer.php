<?php wp_footer(); ?>
<footer class="flex items-center py-[20px] px-[90px] bg-[#111] w-full">
    <div>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-bar text-[14px]',
            )
        );
        ?>
    </div>
</footer>

</body>

</html>