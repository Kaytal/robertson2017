<?php
    $fields = get_fields($post->ID);
    foreach ($fields as $key => $value) {
        $post->{$key} = $value;
    }
    $post->itinerary_img = wp_get_attachment_image_src( $post->itinerary_image, $size = 'full')[0];
    $post->event_img = wp_get_attachment_image_src( $post->event_image, $size = 'full')[0];
?>

<pre><?php var_dump($post); ?></pre>

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
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur cum cupiditate dolor dolorem eveniet harum magnam nobis, nostrum obcaecati odit omnis quae quia quis similique sint, totam velit vero.
    </div>
</section>

<section class="home-stripe guests" id="guests">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/special-guests.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur cum cupiditate dolor dolorem eveniet harum magnam nobis, nostrum obcaecati odit omnis quae quia quis similique sint, totam velit vero.
    </div>
</section>

<section class="home-stripe faq" id="faq">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/faqs.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur cum cupiditate dolor dolorem eveniet harum magnam nobis, nostrum obcaecati odit omnis quae quia quis similique sint, totam velit vero.
    </div>
</section>

<section class="home-stripe pricing" id="pricing">
    <div class="stripe-header">
        <div class="stripe-header__img">
            <img src="<?= get_template_directory_uri(); ?>/images/Pricing.png" alt="Welcome Aboard" />
        </div>
    </div>
    <div class="stripe-inner">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur cum cupiditate dolor dolorem eveniet harum magnam nobis, nostrum obcaecati odit omnis quae quia quis similique sint, totam velit vero.
    </div>
</section>
