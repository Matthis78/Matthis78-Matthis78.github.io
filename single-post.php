<?php
/**
 * 
 * 
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
            <a href="<?= get_page_link(7) ?>">
                <li>Virus</li>
            </a>
            <a href="<?= get_page_link(73) ?>">
                <li>Logistique</li>
            </a>
            <a href="<?= get_page_link(59) ?>">
                <li>???/t5’ »o...??</li>
            </a>
            <a href="<?= get_page_link(30) ?>"><button>ACCÉS ADMIN</button></a>
        </ul>
    </nav>
    <div class="post">





        <?php if ( have_posts() ) : ?>

        <?php
/* Start the Loop */
while ( have_posts() ) :
    the_post();?>
        <div class="articles">
            <h3> <?php
echo get_the_title();?></h3>
           <p> <?php echo get_the_content(); ?></p>

        </div>
<?php


        endwhile;

        the_posts_navigation();

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>































        <?php get_the_title() ?>
    </div>

</main><!-- #main -->
<hr>
<?php
get_footer();