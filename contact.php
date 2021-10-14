<?php
/**
 * 
 * Template Name: contact
 * 
 * 
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Verschuer
 */


?>
<?php wp_head(); ?>
<main id="recherche" class="site-main">
    <nav>
        <a href="<?= get_page_link(7) ?>">LACTUCA<br>LABORATOIRE</a>
        <ul>
            <a href="<?= get_page_link(21) ?>"><li>Virus</li></a>
            <a href=""><li>Logistique</li></a>
            <a href="<?= get_page_link(59) ?>"><li>???/t5’ »o...??</li></a>
            <a href="<?= get_page_link(30) ?>"><button>ACCÉS ADMIN</button></a>
        </ul>
    </nav>
    <div class="recherche">
        <p class="contactform">L’ensemble du personnel des Laboratoires Lactuca sont des experts, ils ont la possibilité de répondre à l’ensemble de vos questions …<br> Si vous avez la moindre question n’hésitez pas à nous contacter, vous trouverez surement ce que vous cherchez</p>
        <?php the_content() ?>
        <?= do_shortcode('[contact-form-7 id="61" title="Contact-us"]') ?>
    </div>
</main><!-- #main -->
<p class="pagination">6/8</p>
<hr>
<?php
get_footer();