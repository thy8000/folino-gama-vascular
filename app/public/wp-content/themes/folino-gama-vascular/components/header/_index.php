<?php
if (!defined('ABSPATH')) exit;

get_template_part('components/header/components/header-html');
?>

<body class="bg-neutral-200">
    <header class="w-full top-0 fixed">
        <nav class="bg-black flex px-6">
            <div class="w-1/2 bg-red-700">
                <img class="w-[217px]" src="http://folino-e-gama-vascular.local/wp-content/uploads/2023/01/folino-gama-vascular-logo.png">
            </div>
            <div class="w-1/2 bg-amber-900 items-center justify-end">
                <?php
                wp_nav_menu(array(
                    'menu'           => 'main-menu', // Do not fall back to first non-empty menu.
                    'menu_class'     => 'flex gap-3 text-lg',
                    'theme_location' => 'main-menu',
                    'fallback_cb'    => false // Do not fall back to wp_page_menu()
                ));
                ?>
            </div>
        </nav>
    </header>