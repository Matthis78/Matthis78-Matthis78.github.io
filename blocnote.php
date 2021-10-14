<?php
/**
 * 
 * Template Name: blocnote
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
<main id="recherche" class="blocnotes">
    <nav>
        <a href="<?= get_page_link(7) ?>">LACTUCA<br>LABORATOIRE</a>
        <ul>
            <a href="<?= get_page_link(21) ?>">
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
    <div class="blocnotes">
        <?php the_content() ?>
        <div>
        <label for="">1/8</label>
        <hr>
        <input type="text" id="txt_1" placeholder="..." onkeyup='saveValue(this);' />
        </div>
        <div>
        <label for="">2/8</label>
        <hr>
        <input type="text" id="txt_2" placeholder="..." onkeyup='saveValue(this);' />
        </div>
        <div>
        <label for="">3/8</label>
        <hr>
        <input type="text" id="txt_3" placeholder="..." onkeyup='saveValue(this);' />
        <div>
        <label for="">4/8</label>
        <hr>
        <input type="text" id="txt_4" placeholder="..." onkeyup='saveValue(this);' />

        </div>
        <div>
        <label for="">5/8</label>
        <hr>
        <input type="text" id="txt_5" placeholder="..." onkeyup='saveValue(this);' />

        </div>
        <div>
        <label for="">6/8</label>
        <hr>
        <input type="text" id="txt_6" placeholder="..." onkeyup='saveValue(this);' />

        </div>
        <div>
        <label for="">7/8</label>
        <hr>
        <input type="text" id="txt_7" placeholder="..." onkeyup='saveValue(this);' />
        </div>
        <div>
        <label for="">8/8</label>
        <hr>
        <input type="text" id="txt_8" placeholder="..." onkeyup='saveValue(this);' />
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById("txt_1").value = getSavedValue("txt_1"); // set the value to this input
        document.getElementById("txt_2").value = getSavedValue("txt_2"); // set the value to this input
        document.getElementById("txt_3").value = getSavedValue("txt_3"); // set the value to this input
        document.getElementById("txt_4").value = getSavedValue("txt_4"); // set the value to this input
        document.getElementById("txt_5").value = getSavedValue("txt_5"); // set the value to this input
        document.getElementById("txt_6").value = getSavedValue("txt_6"); // set the value to this input
        document.getElementById("txt_7").value = getSavedValue("txt_7"); // set the value to this input
        document.getElementById("txt_8").value = getSavedValue("txt_8"); // set the value to this input
        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e) {
            var id = e.id; // get the sender's id to save it . 
            var val = e.value; // get the value. 
            localStorage.setItem(id,
            val); // Every time user writing something, the localStorage's value will override . 
        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue(v) {
            if (!localStorage.getItem(v)) {
                return ""; // You can change this to your defualt value. 
            }
            return localStorage.getItem(v);
        }
    </script>

</main><!-- #main -->
<hr>
<?php
get_footer();