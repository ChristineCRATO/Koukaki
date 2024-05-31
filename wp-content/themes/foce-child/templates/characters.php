<article id="characters" class="characters-swiper">
    <div class="main-character">
        <h3><span class="TitleFade">Les personnages</span></h3>
        <?php

$args = array(
                'post_type' => 'characters',        // recovery publication
                'posts_per_page' => -1,             // number cats publish
                'meta_key'  => '_main_char_field',  // metadata retrieved for sorting
                'orderby'   => 'meta_value_num',    // sort numeric value metadata

            );
            $characters_query = new WP_Query($args);
            ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slide -->
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<div class="swiper-slide">';
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>