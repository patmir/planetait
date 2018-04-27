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
          * Save tresc
          */
          jQuery("#save_tresc").on("click", function(e){
             var toEncode = Array();
                var AdresUlica = jQuery("input[data-name=adres_ulica]").val();
                var AdresMiasto = jQuery("input[data-name=adres_miasto]").val();
                 var BiuroTel = jQuery("input[data-name=biuro_tel]").val();
                var BiuroEmail = jQuery("input[data-name=biuro_email]").val();
                var WsparcieEmail = jQuery("input[data-name=wsparcie_email]").val();
                var KsiegowoscEmail = jQuery("input[data-name=ksiegowosc_email]").val();
                var HREmail = jQuery("input[data-name=hr_email]").val();
                var BDevEmail = jQuery("input[data-name=bdev_email]").val();
                var Stopka = {AdresUlica, AdresMiasto, BiuroTel, BiuroEmail, WsparcieEmail, KsiegowoscEmail,HREmail,BDevEmail };
                toEncode.push(Stopka);
             jQuery("#project_settings_tresc_stopka_dane").val(JSON.stringify(toEncode));
             jQuery("#project_settings_tresc").submit();
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
                var CTA = jQuery(this).children("td[data-name=cta]").children("input").val();
                var Typer = jQuery(this).children("td[data-name=typer]").children("input").val();
                var Slide = {ImgID, Header, Text, CTA, Typer};
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
            append += '<td class="title column-title column-primary" data-name="cta">';
            append += '<input type="text" name="cta"></td>';
            append += '<td class="title column-title column-primary" data-name="typer">';
            append += '<input type="text" name="typer"></td>';
            append += '<td class="title column-title column-primary" data-name="text"><button type="button" class="button button-danger delete_slide">Usuń</button></td>';
            append += '</tr>';
            jQuery("#slides_list").append(append);
            jQuery("td[data-id="+media_object['id']+"]").on("click", function(){
                callEdit(this);
            });
            jQuery(".delete_slide").off('click').on('click', function(){
                jQuery(this).parent().parent().remove();

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
        
            jQuery(".delete_slide").on("click",function(){
                console.log(this);
                jQuery(this).parent().parent().remove();

            });
	});
	</script>
 <?php
}
add_action('wp_ajax_project_get_media_thumb', 'project_get_media_thumb');
function project_get_media_thumb(){
    global $wpdb;
    $media_id = intval( $_POST['media']);
    
    $media = wp_get_attachment_thumb_url($media_id);
    return $media;

    wp_die();
}
?>