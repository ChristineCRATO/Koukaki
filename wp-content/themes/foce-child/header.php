<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<div <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" rel="home"><?php bloginfo( 'name' ); ?></a>
        <div class="menuToggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
                <ul class="menuNav">
            <div class="menuSection">
                <li><a href="#story" class="linkNav">Histoire</a></li>
                <li><a href="#characters" class="linkNav">Personnages</a></li>
                <li><a href="#place" class="linkNav">Lieu</a></li>
                <li><a href="#studio" class="linkNav">Studio Koukaki</a></li>
</div>
</ul>
            <div class="menuLogo">
                <img id="#menuLogo" class="logoNav" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png'?>" alt="Logo Site Koukaki">
            </div>
            <div class="menuFlowers">
                <img class="orchid" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid.png'?>" alt="Rotation Orchid">
                <img class="Sunflower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'?>" alt="Rotation Sunflower">
                <img class="flower" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'?>" alt="Rotation Flower">
                <img class="random" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'?>" alt="Rotation random Flower">
                <img class="Hibiscus" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus.png'?>" alt="Rotation Hisbiscus">
            </div>
            <div class="menuCats">
                <img class="black" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blackCat.png'?>" alt="Chat Noir Tangue">
                <img class="blue" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blueCat.png'?>" alt="Chat Bleu Tangue">
                <img class="orange" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orangeCat.png'?>" alt="Chat Orange Tangue">
            </div>
            <div class="menuFooter"><p>STUDIO KOUKAKI</p></div>
        </div>
            
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->