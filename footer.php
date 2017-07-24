<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package robertson2017
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
        <div class="site-footer__premier-logo">
            <a href="http://www.premier-experience.com/">
                <img src="<?= get_template_directory_uri(); ?>/images/premier-logo.png" alt="Premier Vaction and Events" />
            </a>
        </div>
        <div class="site-footer__copyright">
            Copyright &copy;<?= date('Y'); ?> Premier Vacation and Events. ALl Rights Reserved.
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
