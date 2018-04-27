<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
$settings_url = admin_url("admin.php?page=".GlobalConfig::get("project_slug_name")."_ustawienia");
$action =  (isset($_GET['action'])?$_GET['action']:null);
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
    wp_enqueue_media();
     ?>
      <form action="options.php" id="general_settings" method="POST">
     <?php  settings_fields("project_settings");
            do_settings_sections( "project_settings_page" ); ?>
    <button id="save_general" name="Zapisz" type="button" class="button button-primary">Zapisz</button>
     </form>
     <?php
 } else if ($action == 'tresc'){
     ?>

 <form action="options.php" id="project_settings_tresc" method="POST">
     <?php  settings_fields("project_settings_tresc");
            do_settings_sections( "project_settings_tresc_page" ); ?>
    <button id="save_tresc" name="Zapisz" type="button" class="button button-primary">Zapisz</button>
     </form>

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
function project_settings_tresc_stopka_display(){
    ?>
    <h4>Wpisz dane widoczne w stopce</h4>
    <?php  
}
function project_settings_tresc_stopka_dane_display(){

    $options = get_option('project_settings_tresc');
    $decodedOptions = json_decode($options["project_settings_tresc_stopka_dane"])[0]
    ?>
    <input 
    id="project_settings_tresc_stopka_dane" 
    name="project_settings_tresc[project_settings_tresc_stopka_dane]"
    type="hidden" value="<?= $options["project_settings_tresc_stopka_dane"] ?>">    
    <label>Adres Ulica</label><input type="text" data-name="adres_ulica" name="adres_ulica" value="<?=$decodedOptions->AdresUlica?>"><br>
    <label>Adres Miasto i kod</label><input type="text" data-name="adres_miasto" name="adres_miasto" value="<?=$decodedOptions->AdresMiasto?>"><br>
    <label>Biuro Tel.</label><input type="text" data-name="biuro_tel" name="biuro_tel" value="<?=$decodedOptions->BiuroTel?>"><br>
    <label>Biuro Email</label><input type="text" data-name="biuro_email" name="biuro_email" value="<?=$decodedOptions->BiuroEmail?>"><br>
    <label>Wsparcie techniczne Email</label><input type="text" data-name="wsparcie_email" name="wsparcie_email" value="<?=$decodedOptions->WsparcieEmail?>"><br>
    <label>Księgowość Email</label><input type="text" data-name="ksiegowosc_email" name="ksiegowosc_email" value="<?=$decodedOptions->KsiegowoscEmail?>"><br>
    <label>HR Email</label><input type="text" data-name="hr_email" name="hr_email" value="<?=$decodedOptions->HREmail?>"><br>
    <label>Business Development Email</label><input type="text" data-name="bdev_email" name="bdev_email" value="<?=$decodedOptions->BDevEmail?>"><br>
    <?php
    
}

function project_settings_header_display(){
    ?>
    <h4>Ustawienia nagłówka</h4>
    <?php  
}
function project_settings_header_logo_display(){
    $options = get_option('project_settings');
    $logo = intval(json_decode($options["project_settings_header_logo"]));
    ?>
    <input 
    id="project_settings_header_logo" 
    name="project_settings[project_settings_header_logo]"
    type="hidden" value="<?= $options["project_settings_header_logo"] ?>"/>
    <?php
    $thumb;
    if($logo != 0) {
    $logo_post = get_post($logo);
    $thumb = wp_get_attachment_thumb_url($logo);
    } else {
        $thumb = includes_url("images/media/default.png");
    }
            ?>
    <img src="<?=$thumb?>" id="logo_img" data-id="<?=$logo?>"/>
    <?php
}
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
                <th scope="col" id="slide_cta" class="manage-column column-name column-primary">Call To Action</th>
                <th scope="col" id="slide_typer" class="manage-column column-name column-primary">Typer (Słowa oddzielone |)</th>
                <th scope="col" id="slide_delete" class="manage-column column-name column-primary">Akcja</th>
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
            $media_post = get_post($slide->ImgID);
            if(strpos($media_post->post_mime_type, "video") !== false){
                $thumb = includes_url("images/media/video.png");
            } else{
                $thumb = wp_get_attachment_thumb_url($slide->ImgID);
            }
            ?>
                <tr>
                    <td data-id="<?= $slide->ImgID;?>" class="image column-image column-primary">
                        <img src="<?=$thumb?>"/>
                    </td>
                    <td class="title column-title column-primary" data-name="header">
                        <input type="text" name="header" value="<?=$slide->Header?>">
                    </td>
                    <td class="title column-title column-primary" data-name="text">
                        <input type="text" name="text" value="<?=$slide->Text?>">
                        </td>
                        
                    <td class="title column-title column-primary" data-name="cta">
                        <input type="text" name="cta" value="<?=$slide->CTA?>">
                        </td>
                        
                    <td class="title column-title column-primary" data-name="typer">
                        <input type="text" name="typer" value="<?=$slide->Typer?>">
                        </td>
                    <td class="title column-title column-primary" data-name="button"><button type="button" class="button button-danger delete_slide">Usuń</button>
                        </td>
                </tr>
            <?php
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