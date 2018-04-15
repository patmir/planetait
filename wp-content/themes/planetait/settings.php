<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
$settings_url = admin_url("admin.php?page=".GlobalConfig::get("project_slug_name")."_ustawienia");
$action =  $_GET['action'];
/**
 * Render Settings Tab Content
 */
global $wp;
?>
 <div class="wrap">
 <h1 class="wp-heading-inline"><?= GlobalConfig::get("project_pretty_name")?> - Ustawienia</h1>
 <hr class="wp-header-end">
 <h2 class="nav-tab-wrapper wp-clearfix">
 <a href="<?= $settings_url ?>" class="nav-tab <?php if ( ! isset( $_GET['action'] ) ) echo ' nav-tab-active'; ?>">Ustawienia Ogólne</a>
 <a href="<?= $settings_url ?>&action=tresc" class="nav-tab <?php if (isset($_GET['action']) && 'tresc' == $_GET['action']) echo "nav-tab-active";?>"s>Ustawienia Treści</a>
 <a href="<?= $settings_url ?>&action=slider" class="nav-tab <?php if (isset($_GET['action']) && 'slider' == $_GET['action']) echo "nav-tab-active";?>">Slider</a>
 </h2> 
 <?php
 /** Ogólne */
 if(!isset($action)){
     ?>
     Ogólne
     <?php
 } else if ($action == 'tresc'){
     ?>

<button id="ustawienia_generuj_tresci">Generuj Treści</button>

     <?php
 } else if ($action == 'slider') {
    wp_enqueue_media();
     ?>
     <form action="options.php" id="slider_settings_slides" method="POST">
     <?php  settings_fields("project_settings_slider");
            do_settings_sections( "project_settings_slider_page" ); ?>
    <button id="save_slides" name="Zapisz" type="button" class="button button-primary">Zapisz</button>
    <button id="add_slide" type="button" class="button button-success">Dodaj Slajd</button>
     </form>
     <?php
 }?>
</div>


<?php 
/** Display Functions */
function project_settings_slider_slides_display(){
    ?>
    <h4>Wybierz i konfiguruj slajdy wyświetlanie na stronie głównej</h3>
    <?php
}
function project_settings_slider_slides_input_display() {
    
    $options = get_option('project_settings_slider');
    $decodedSlides = json_decode($options["project_settings_slider_slides_input_slides"]);
    ?>
    <input 
    id="project_settings_slider_slides_input_slides" 
    name="project_settings_slider[project_settings_slider_slides_input_slides]"
    type="hidden" value="<?= $options["project_settings_slider_slides_input_slides"] ?>"/>
    <table class="wp-list-table" id="project_slides_table">
        <thead>
            <tr>
                <th scope="col" id="slide_img" class="manage-column column-name column-primary">Zdjęcie/Film</th>
                <th scope="col" id="slide_header" class="manage-column column-name column-primary">Nagłówek</th>
                <th scope="col" id="slide_text" class="manage-column column-name column-primary">Tekst</th>
            </tr>
        </thead>
        <tbody id="slides_list">

        
    <?php
    if($decodedSlides == null){
        ?>
        <tr id="brak_slajdow"><th scope="row"><h5>Brak slajdów - dodaj nowe</h5></th></tr>
        <?php
    } else {
        foreach($decodedSlides as $slide){
            
        }
    }
    ?>
        </tbody>

    </table>
<?php
}


/** Validations */
function project_settings_validate($input){
    return $input;
}
function project_settings_tresc_validate($input) {
    return $input;
}
function project_settings_slider_validate($input) {
    return $input;
}
?>