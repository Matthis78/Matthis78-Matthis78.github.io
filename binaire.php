<?php
/**
 * 
 * Template Name: wuxv
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
            <a href="<?= get_page_link(73) ?>"><li>Logistique</li></a>
            <a href="<?= get_page_link(59) ?>"><li>???/t5’ »o...??</li></a>
            <a href="<?= get_page_link(30) ?>"><button>ACCÉS ADMIN</button></a>
        </ul>
    </nav>
    <div class="recherche">
        <?php the_content() ?>
      
    </div>
</main><!-- #main -->
<p class="pagination">3/8</p>
<hr>
<?php
get_footer();