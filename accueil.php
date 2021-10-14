<?php
/**
 * 
 * Template Name: Accueil2
 * 
 * 
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Verschuer
 */


?>
<main id="primary" class="site-main">
    <header class="page-header">
        <div class="left-header">
            <h1>LACTUCA<br>LABORATOIRE</h1>
            <a href="#">www.LaboratoireLorem.com</a>
            <a href="#">
                <p>Consignes de sécurités</p>
            </a>
            <a href="#">
                <p>Aide</p>
            </a>
        </div>
        <div>
            <?php get_header(); ?>

            <div class="content">
                <h2>ENTREZ VOTRE RECHERCHE</h2>
                <?= do_shortcode( '[display_search_form]' ); ?>
                <h2>MESURE COVID</h2>
                <div class="home-img">
                    <img src="https://cdn.discordapp.com/attachments/897121096195801118/897832382751703040/Calque_2.png" alt="">
                    <img src="https://cdn.discordapp.com/attachments/897121096195801118/897831222359785502/Calque_2.png" alt="">
                    <img src="https://cdn.discordapp.com/attachments/897121096195801118/897831224939282442/Calque_3.png" alt="">
                    <img src="https://cdn.discordapp.com/attachments/897121096195801118/897831219960619018/Calque_4.png" alt="">
                </div>
            </div>

        </div>
    </header><!-- .page-header -->
    <div class="consignes">
        <div>
            <h2>CONSIGNES DE SECURITES</h2>
            <p>En cas de contact avec le produit :</p>
            <p>- Laver abondamment la partie du corps touchée</p>
            <p>- Si la douleur persiste, nous vous invitons à vous autodiagnostiquer afin d’évaluer la gravité des faits pour se faire fixer le point central de l’image ci-contre.<br> 
On dit qu’un œil habile à la possibilité de percevoir les moindres détails d’une image, c’est ainsi que les véritables artistes créer des chefs d’œuvres.</p>
        </div>
        <div>
            <img src="http://team40.test/wp-content/uploads/2021/10/21-10-13-a-14.27.48.png" alt="">
        </div>
    </div>





<p class="pagination">1/8</p>
</main><!-- #main -->
<hr>
<?php
get_footer();