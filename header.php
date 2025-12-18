<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="恩田接骨院は地元で古くから親しまれている接骨院です。診療内容、院長紹介、営業時間・アクセス情報をご案内します。">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="loading">
        <div class="loading-spinner"></div>
    </div>
    <a href="#main-content" class="skip-link">メインコンテンツへスキップ</a>

    <header>
        <div class="header__banner">
            <div class="header__banner-inner">
                <div class="header__left">
                    <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-link">恩田接骨院</a></h1>
                    <div class="header__phone">
                        <a href="tel:058-327-0670" class="phone-link">
                            <span class="phone-icon">📞</span>
                            <span class="phone-number">058-327-0670</span>
                        </a>
                    </div>
                </div>
                <nav aria-label="メインナビゲーション">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => '',
                        'items_wrap'     => '<ul>%3$s</ul>',
                    ) );
                    ?>
                </nav>
            </div>
        </div>
    </header>