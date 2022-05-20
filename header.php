
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="header">
    <div class="container">
        <div class="offer">
            <div class="offer_logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="offer_logo__img">
                    <img src="<?php echo carbon_get_theme_option('header-logo') ?>" alt="Титул">
                </a>
                <span class="offer_logo__text"><?php echo carbon_get_theme_option('header-info'); ?></span>
            </div>
            <div class="offer_address">
                <a href="#" class="offer_address__city"><?php echo carbon_get_theme_option('header-company-address'); ?></a>
                <div class="offer_address__map-taxi">
                    <a href="#" class="offer_address__map-taxi_item">Посмотреть на карте</a>
                    <a href="#" class="offer_address__map-taxi_item">Вызвать такси до офиса</a>
                </div>
            </div>

            <!-- link for yandex and cian -->

            <div class="offer-links">
                <div class="offer-links_cian">
                    <img class="offer-links_border"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/border.svg" alt="border">
                    <img class="offer-link_cian__logo"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/cian.png" alt="Циан">
                    <img class="offer-link_cian__shild"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/shild.svg" alt="shild">
                    <span class="offer-link_cian__profi">Профи</span>
                </div>

                <!-- + border class -->
                <div class="offer-links_yandex">
                    <img class="offer-links_border-yandex"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/border.svg" alt="border">
                    <img class="offer-link_yandex__logo"
                         src="<?php echo get_template_directory_uri() ?>/assets/img/yandex.png" alt="Яндекс">
                </div>
            </div>


            <div class="offer_call">
                <div class="offer_call__number">
                    <a href="tel:<?php echo substr_replace(preg_replace("/[^0-9]/", '', carbon_get_theme_option('header-phone-first')), '+7', 0, 1) ?>>"><?php echo carbon_get_theme_option('header-phone-first'); ?></a>
                </div>
                <div class="offer_call__number">
                    <a href="tel:<?php echo substr_replace(preg_replace("/[^0-9]/", '', carbon_get_theme_option('header-phone-second')), '+7', 0, 1) ?>>"><?php echo carbon_get_theme_option('header-phone-second'); ?></a>
                </div>
                <div class="offer_call__online">
                    Сейчас работаем
                </div>
            </div>
            <div class="offer_btn">
                <button type="button" class="offer_btn__order-call btn-main">Заказать звонок</button>
                <a href="http://wa.me/<?php echo substr_replace(preg_replace("/[^0-9]/", '', carbon_get_theme_option('header-phone-first')), '+7', 0, 1) ?>" class="offer_btn__whatsapp btn-main">
                    Написать <span class="offer_btn__span"> в WhatsApp</span>
                </a>
            </div>
        </div>
        <div class="nav">
            <?php
            $menu_name  = 'menu-1';
            $locations  = get_nav_menu_locations();
            $menu_items = wp_get_nav_menu_items( $locations[ $menu_name ] );

            ?>
            <?php if ( ! empty( $menu_items ) && is_array( $menu_items ) ) : ?>
                <?php foreach ( $menu_items as $menu_item ) :
                    if ( ! $menu_item->menu_item_parent ) :
                        $child_menu_items = get_child_menu_items( $menu_items, $menu_item->ID );
                        $has_children = ! empty( $child_menu_items && is_array( $child_menu_items ) );

                        if ( ! $has_children ) : ?>

                            <a href="<?php echo esc_url( $menu_item->url ); ?>"
                               class="nav_links"><?php echo $menu_item->title; ?></a>

                        <?php else : ?>
                            <div class="nav_links nav_links__estate"><?php echo $menu_item->title; ?></div>
                            <ul class="nav-dropdown">
                                <?php foreach ( $child_menu_items as $child_menu_item ) : ?>
                                    <li>
                                        <a href="<?php echo $child_menu_item->url; ?>"><?php echo $child_menu_item->title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php endif;
                endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</header>
<main class="main">