<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="bannerVideo" autoplay loop muted>
                <source src="<?php echo get_theme_file_uri() .'/assets/video/video_hero.mp4'; ?>" type="video/mp4" alt="video animation de chats">
                </video>
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="#story" class="story">
            <h2><span class="TitleFade">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- Swiper Section -->
            <?php get_template_part( 'templates/characters' ) ;?>
            <!-- End Swiper Section -->

            <article id="place">
                <div>
                    <h3><span class="TitleFade">Lieu</span></h3>

            <!-- Add Clouds+Parallax Section -->
            <div class="clouds">
            <img class="bigCloud" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png' ; ?> " alt="Gros Nuage">
            <img class="littleCloud" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png' ; ?> " alt="Petit Nuage">
            </div>
            <!-- End Clouds+Parallax Section -->

                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>

        <section id="studio">
            <h2><span class="TitleFade">Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

            <!-- Oscars Section -->
            <?php get_template_part( 'templates/oscars' );?>
 
    </main><!-- #main -->

<?php
get_footer();
