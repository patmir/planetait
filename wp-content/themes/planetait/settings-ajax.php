<?php

add_action('admin_footer', 'ustawienia_ajax');

function ustawienia_ajax()
{
    $ajax_generate_content_nonce = wp_create_nonce("ajax-generate-content-nonce");
    ?>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
        /**
           Generate content 
         */
        jQuery("#ustawienia_generuj_tresci").click(function(){
            var data = {
			action: 'project_generate_content',            
		    security: '<?php echo $ajax_generate_content_nonce; ?>',
            flush: true
		};

		jQuery.post(ajaxurl, data, function(response) {
		    });
        
        });
        /**
         * Save general
         */
        jQuery("#save_general").on("click", function(e){
             jQuery("#project_settings_header_logo").val(JSON.stringify(jQuery("#logo_img").data("id")));
             jQuery("#general_settings").submit();
         });
        /**
        Save slides
         */
         jQuery("#save_slides").on("click", function(e){
             var toEncode = Array();
             jQuery("#slides_list > tr").each(function(t){
                 var ImgID = jQuery(this).children("td[data-id]").data("id");
                var Header = jQuery(this).children("td[data-name=header]").children("input").val();
                var Text = jQuery(this).children("td[data-name=text]").children("input").val();
                var Slide = {ImgID, Header, Text};
                toEncode.push(Slide);
             });
             jQuery("#project_settings_slider_slides_input_slides").val(JSON.stringify(toEncode));
             jQuery("#slider_settings_slides").submit();
         });
        /**
        Add slide

         */
        jQuery("#add_slide").on("click", function(e){
            e.preventDefault();
            var media = getMediaObject();
        });
        var callEdit = function(t){
            getMediaObject(t);
        }
        var editSlide = function(target, attachment){
            var thumb;
            if(attachment['type'] == "image") {
                thumb = attachment['sizes']['thumbnail']['url']
            } else {
            thumb = attachment['thumb']['src'];
            }
                jQuery(target).children("img").attr('src', thumb);
                jQuery(target).attr("data-id", attachment["id"]);
        }
		var addSlide = function(media_object){
            var thumb;
            if(jQuery("#brak_slajdow").length !== 0){
                jQuery("#slides_list").html("");
            }
            if(media_object['type'] == "image") {
                thumb = media_object['sizes']['thumbnail']['url']
            } else {
            thumb = media_object['thumb']['src'];
            }
            var append = '<tr><td data-id="'+media_object['id']+'" class="image column-image column-primary">';
            append += '<img src="'+thumb+'"/></td>';
            append += '<td class="title column-title column-primary" data-name="header">';
            append += '<input type="text" name="header"></td>';
            append += '<td class="title column-title column-primary" data-name="text">';
            append += '<input type="text" name="header"></td>';
            append += '</tr>';
            jQuery("#slides_list").append(append);
            jQuery("td[data-id="+media_object['id']+"]").on("click", function(){
                callEdit(this);
            });
        }
        var media_upload_frame;
        var media_upload_frame_logo;
        var getMediaForLogo = function(target){
            if(media_upload_frame_logo) {
                media_upload_frame_logo.collection = target;
                media_upload_frame_logo.open();
                return;
            }
            media_upload_frame_logo = wp.media({
                title: "Wybierz logo",
                button: {
                    text: "Wybierz",
                },
                multiple: false,
                library : {
                    type: [ 'image' ],
                            }
            });
            media_upload_frame_logo.on('select', function(){
                attachment = media_upload_frame_logo.state().get('selection').first().toJSON();
                    jQuery(media_upload_frame_logo['collection']).attr("data-id", attachment['id']);
                    jQuery(media_upload_frame_logo['collection']).attr("src", attachment['sizes']['thumbnail']['url']);
            });   
            media_upload_frame_logo.open();
            
            media_upload_frame_logo['collection']= target;
        }

        var getMediaObject = function(target){

            if(media_upload_frame) {
                media_upload_frame.collection = target;
                media_upload_frame.open();
                return;
            }


            media_upload_frame = wp.media({
                title: "Wybierz obrazek lub plik wideo",
                button: {
                    text: "Wybierz",
                },
                multiple: false,
                library : {
                    type: [ 'video', 'image' ],
                            }
            }); 
            
            media_upload_frame.on('select', function(){
                attachment = media_upload_frame.state().get('selection').first().toJSON();
                if(media_upload_frame['collection']){
                    editSlide(media_upload_frame['collection'], attachment);
                } else {
                    addSlide(attachment);
                }
            });   
            media_upload_frame.open();
            
            media_upload_frame['collection']= target;
        }

        
                    
        jQuery("td[data-id]").on("click", function(){
                callEdit(this);
            });
            jQuery("#logo_img").on("click", function(){
                getMediaForLogo(this);
            });
	});
	</script>
 <?php
}
add_action('wp_ajax_project_generate_content', 'project_generate_content');
add_action('wp_ajax_project_get_media_thumb', 'project_get_media_thumb');
function project_get_media_thumb(){
    global $wpdb;
    $media_id = intval( $_POST['media']);
    
    $media = wp_get_attachment_thumb_url($media_id);
    return $media;

    wp_die();
}
function project_generate_content()
{
    global $wpdb; // generating content
    $flush = filter_var( $_POST['flush'], FILTER_VALIDATE_BOOLEAN );
    // Creating main sections
    check_ajax_referer('ajax-generate-content-nonce', 'security');

    // check for post existance
    $page_projects = post_exists("Projekty");
    $page_refferences= post_exists("Referencje");
    $page_carrier= post_exists("Kariera");
    $page_contact= post_exists("Kontakt");

    $section_what_we_do = post_exists("Co Robimy");
    $section_achievements = post_exists("Osiągnięcia");
    $section_prog_languages = post_exists("Języki Programowania");
    $section_about_us = post_exists("O Nas");
    $section_partners = post_exists("Partnerzy");

    if ($page_projects != 0 && $flush) {
        wp_delete_post($page_projects, true);
        $page_projects = 0;
    }
    if ($page_refferences != 0 && $flush) {
        wp_delete_post($page_refferences, true);
        $page_refferences = 0;
    }
    if ($page_carrier != 0 && $flush) {
        wp_delete_post($page_carrier, true);
        $page_carrier = 0;
    }
    if ($page_contact != 0 && $flush) {
        wp_delete_post($page_contact, true);
        $page_contact = 0;
    }
    if ($page_projects == 0) {
        $page_projects = wp_insert_post(array(
            "post_content" => "Projekty",
            "post_title" => "Projekty",
            "post_status" => "publish",
            "post_type" => "sub_page",
            "menu_order" => 1
        ));
    }
    if ($page_refferences == 0) {
        $page_refferences = wp_insert_post(array(
            "post_content" => "Referencje",
            "post_title" => "Referencje",
            "post_status" => "publish",
            "post_type" => "sub_page",
            "menu_order" => 1
        ));
    }
    if ($page_carrier == 0) {
        $page_carrier = wp_insert_post(array(
            "post_content" => "Kariera",
            "post_title" => "Kariera",
            "post_status" => "publish",
            "post_type" => "sub_page",
            "menu_order" => 1
        ));
    }
    if ($page_contact == 0) {
        $page_contact = wp_insert_post(array(
            "post_content" => "Kontakt",
            "post_title" => "Kontakt",
            "post_status" => "publish",
            "post_type" => "sub_page",
            "menu_order" => 1
        ));
    }

    if ($section_what_we_do != 0 && $flush) {
        wp_delete_post($section_what_we_do, true);
        $section_what_we_do = 0;
    }
    if ($section_achievements != 0 && $flush) {
        wp_delete_post($section_achievements, true);
        $section_achievements = 0;
    }
    if ($section_prog_languages != 0 && $flush) {
        wp_delete_post($section_prog_languages, true);
        $section_prog_languages = 0;
    }
    if ($section_about_us != 0 && $flush) {
        wp_delete_post($section_about_us, true);
        $section_about_us = 0;
    }
    if ($section_partners != 0 && $flush) {
        wp_delete_post($section_partners, true);
        $section_partners = 0;
    }
    if ($section_what_we_do == 0) {
        $section_what_we_do = wp_insert_post(array(
            "post_content" => "Co robimy",
            "post_title" => "Co Robimy",
            "post_status" => "publish",
            "post_type" => "section_main",
            "menu_order" => 1
        ));
    }
    if ($section_achievements == 0) {
        $section_achievements = wp_insert_post(array(
            "post_content" => "Osiągnięcia",
            "post_title" => "Osiągnięcia",
            "post_status" => "publish",
            "post_type" => "section_main",
            "menu_order" => 2
        ));
    }
    if ($section_prog_languages == 0) {

        $section_prog_languages = wp_insert_post(array(
            "post_content" => "Języki Programowania",
            "post_title" => "Języki Programowania",
            "post_status" => "publish",
            "post_type" => "section_main",
            "menu_order" => 3
        ));
    }
    if ($section_about_us == 0) {
        $section_about_us = wp_insert_post(array(
            "post_content" => "O Nas",
            "post_title" => "O Nas",
            "post_status" => "publish",
            "post_type" => "section_main",
            "menu_order" => 4
        ));
    }
    if ($section_partners == 0) {
        $section_partners = wp_insert_post(array(
            "post_content" => "Partnerzy",
            "post_title" => "Partnerzy",
            "post_status" => "publish",
            "post_type" => "section_main",
            "menu_order" => 5
        ));
    }
    // create pages

    // create menu
    wp_delete_nav_menu(GlobalConfig::get("project_slug_name")."_menu");

    $menu = wp_create_nav_menu( GlobalConfig::get("project_slug_name")."_menu");

    wp_update_nav_menu_item($menu, 0, array(
        "menu-item-title" => __("Strona Główna"),
        "menu-item-classes" => "nav-home",
        "menu-item-url" => home_url("/"),
        "menu-item-status" => "publish"
    ));
    $pages = get_posts(array(
        'posts_per_page' => 99999,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_type' => 'sub_page',
        'post_status' => 'publish'
    
    ));
    foreach($pages as $page){
        wp_update_nav_menu_item($menu, 0, array(
            "menu-item-title" => $page->post_title,
            "menu-item-classes" => "nav-item",
            "menu-item-url" => get_permalink($page->ID),
            "menu-item-status" => "publish"
        ));
    }
    if((bool)GlobalConfig::get("menu_get_quote_enabled")){
        wp_update_nav_menu_item($menu, 0, array(
            "menu-item-title" => __("Zapytaj o Ofertę"),
            "menu-item-classes" => "nav-quote",
            "menu-item-url" => get_permalink($page_contact)."#contact-form",
            "menu-item-status" => "publish"
        ));
    }
    wp_die(); // this is required to terminate immediately and return a proper response
}
?>