<?php
/**
 * 
 * Template Name: adminpage
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
            <a href="<?= get_page_link(7) ?>"><li>Virus</li></a>
            <a href="<?= get_page_link(73) ?>"><li>Logistique</li></a>
            <a href="<?= get_page_link(59) ?>"><li>???/t5’ »o...??</li></a>
            <a href="<?= get_page_link(30) ?>"><button>ACCÉS ADMIN</button></a>
        </ul>
    </nav>
    <div class="adminpage">
        <h2>ACCES ADMIN</h2>
        <div class="formulaire">
        <input id="inputvalue" type="password" name="one">
        <div>
        <button id="inputsubbmit" onclick="escape()">S'identifier</button>

        </div>
        </div>
        
    </div>
<script>    
function escape(){
    if(document.querySelector("input[name='one']").value === 'OVILJVLIPULVTARSCAPGMPFFPYWUWUXV'){
        var base = "http://team40.test/end-page/";
        window.location.href = base;
    }else{
        alert("ERROR");
    }
}


</script>
</main><!-- #main -->
<hr>
<?php
get_footer();