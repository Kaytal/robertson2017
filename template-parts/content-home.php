<?php
    $post->event_title = get_field("event_title", $post->ID);
    $post->event_description = get_field("event_description", $post->ID);
    $post->itinerary_title = get_field("itinerary_title", $post->ID);
    $post->itinerary_description = get_field("itinerary_description", $post->ID);
    $post->ship_info = get_field("ship_info", $post->ID);
    $post->pricing_content = get_field("pricing_content", $post->ID);
    $post->cabins_left_text = get_field("cabins_left_text", $post->ID);
    $post->pricing_disclaimer = get_field("pricing_disclaimer", $post->ID);
    $post->itinerary_img = wp_get_attachment_image_src( $post->itinerary_image, $size = 'full')[0];
    $post->event_img = wp_get_attachment_image_src( $post->event_image, $size = 'full')[0];
    $post->pricing_interior_img = wp_get_attachment_image_src( $post->pricing_interior_image, $size = 'full')[0];
    $post->pricing_oceanview_img = wp_get_attachment_image_src( $post->pricing_oceanview_image, $size = 'full')[0];
    $post->pricing_balcony_img = wp_get_attachment_image_src( $post->pricing_balcony_image, $size = 'full')[0];
?>

<section class="home-stripe welcome-aboard">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/welcome-aboard.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        <div class="stripe-row">
            <div class="stripe-row__content">
                <h2 id="event"><?= $post->event_title; ?></h2>
                <p><?= $post->event_description; ?></p>
            </div>
            <div class="stripe-row__img">
                <img src="<?= $post->event_img; ?>" alt="" />
            </div>
        </div>
        <div class="stripe-row">
            <div class="stripe-row__img">
                <img src="<?= $post->itinerary_img; ?>" alt="" />
            </div>
            <div class="stripe-row__content">
                <h2 id="itinerary"><?= $post->itinerary_title; ?></h2>
                <p><?= $post->itinerary_description; ?></p>
            </div>
        </div>
    </div>
</section>

<section class="home-stripe the-ship" id="ship">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/carnival-triumph.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        <?= $post->ship_info ?>
    </div>
</section>

<section class="home-stripe guests" id="guests">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/special-guests.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        <?php

        $guestArgs = [
            'post_type' => 'guests',
            'post_status' => 'publish',
            'posts_per_page'    => -1
        ];

        $guestQuery = new WP_Query($guestArgs);
        ?>
        <?php if( $guestQuery->have_posts() ): ?>
            <div class="stripe-inner guest-list">
                <?php while( $guestQuery->have_posts() ): $guestQuery->the_post(); ?>
                    <div class="guest">
                        <img class="guest__image" src="<?php the_post_thumbnail_url( 'full' ) ?>" alt="" />
                        <p class="guest__title"><?php the_title(); ?></p>
                    </div>
                    <div class="guest-overlay">
                        <div class="overlay"></div>
                        <div class="guest-overlay__content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>

<section class="home-stripe faq" id="faq">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/faqs.png" alt="Welcome Aboard" />
        </div>
    </div>

        <?php

            $args = [
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page'    => -1
            ];

            $newQuery = new WP_Query($args);
        ?>
        <?php if( $newQuery->have_posts() ): ?>
            <div class="stripe-inner__wrapper">
            <?php while( $newQuery->have_posts() ): $newQuery->the_post(); ?>
                <div class="stripe-inner">
                    <div class="faq-post">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
                <hr />
            <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>

<section class="home-stripe pricing" id="pricing">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/Pricing.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        <div class="pricing__tiers">
            <div class="pricing_tier">
                <img src="<?= $post->pricing_interior_img ?>" alt="" />
            </div>
            <div class="pricing_tier">
                <img src="<?= $post->pricing_oceanview_img ?>" alt="" />
            </div>
            <div class="pricing_tier">
                <img src="<?= $post->pricing_balcony_img ?>" alt="" />
            </div>
        </div>
        <div class="pricing__disclaimer">
            <?= $post->pricing_disclaimer_text ?>
        </div>
        <div class="pricing__content">
            <?= $post->pricing_content ?>
        </div>
    </div>
</section>
