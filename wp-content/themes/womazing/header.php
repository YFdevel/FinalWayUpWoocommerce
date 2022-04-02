<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */
global $redux;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<title>Womazing</title>
    <meta name="description" content="Новый бренд одежды. То, что вы искали в этом сезоне.">
    <meta name="keywords"
          content="утонченные сочетания, бархатные оттенки, новые поступления, бренд, время исследовать">
    <meta property="og:title" content="Womazing / Главная">
    <meta property="og:description" content="Новый бренд одежды. То, что вы искали в этом сезоне.">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://sitename.ru/img/preview-png">
    <meta property="og:site_name" content="Womazing">
    <meta name="theme-color" content="#2500f9">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>

<header class="header" id="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3 d-block d-lg-none">
                <button class="hamburger">
                    <span class="hamburger__item"></span>
                    <span class="hamburger__item"></span>
                    <span class="hamburger__item"></span>
                </button>
            </div>
            <div class="col-4 col-lg-3 offset-1 offset-lg-0 ">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo-header">
	                <?php the_custom_logo(); ?>
                </a>
            </div>

            <div class="col-2 col-lg-5 d-none d-lg-block order-lg-0">
	            <?php
	            wp_nav_menu(
		            array(
			            'theme_location' => 'menu-1',
			            'menu_id'        => 'primary-menu',
		            )
	            );
	            ?>

            </div>

            <div class="col-4">
                <div class="header-right">
                    <a href="tel:+7 (495) 823-54-12" class="header-right__tel-img">
                        <img src="<?= $redux['header-content-tel-img-bcg']['url']?>" alt="phone" class="phone-green">
                        <img src="<?= $redux['header-content-tel-img']['url']?>" alt="phone" class="phone-white">
                    </a>
                    <a href="tel:<?= $redux['header-content-tel-text']?>" class="header-right__tel-text"><?= $redux['header-content-tel-text']?></a>
                    <a href="/final-wayup/cart-2"><img src="<?= $redux['header-content-img-cart']['url']?>" alt="cart" class="header-right__cart"></a>
                </div>
            </div>
        </div>
    </div>
</header>
<main>





