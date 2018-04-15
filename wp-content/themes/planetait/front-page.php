<?php get_header(); ?>

<!-- Slider -->
<?php
$slides = get_option("project_settings_slider");
if($slides != false && isset($slides["project_settings_slider_slides_input_slides"])){
    $slides = $slides["project_settings_slider_slides_input_slides"];
} else {
    $slides = false;
}
if($slides != false){
    ?>
    <div class="slider" style="width: 100%; height: 400px;">
    <div class="fs_loader"></div>
    
    <?php foreach(json_decode($slides) as $slide): ?>
            <?php 
            $slide_bg = wp_get_attachment_metadata($slide->ImgID);
            $slide_bg_url = wp_get_attachment_url($slide->ImgID);
            $slide_bg_content;
            if(isset($slide_bg['mime_type']) && strpos($slide_bg['mime_type'], "video") !== false) {
                $slide_bg_content = '<video controls autoplay loop class="slide_video" data-fixed name="media">'
                .'<source src="'.$slide_bg_url.'" type="video/mp4">'
                .'</video>';
            } else {
                if(isset($slide_bg['sizes']['hd'])){
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "hd")[0];
                } else {
                    $slide_bg_url = wp_get_attachment_image_src($slide->ImgID, "large")[0];
                }
                 $slide_bg_content = '<img src="'.$slide_bg_url.'" data-fixed">';  
            }
            ?>
            <div class="slide">
                <?= $slide_bg_content ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
}
?>
<!-- /Slider -->
<small>Sekcje: </small>
<?php
$sections = get_posts(array(
    'posts_per_page' => 99999,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'section_main',
    'post_status' => 'publish'

));
foreach($sections as $section): ?>
    <h3>Sekcja nr: <?=$section->menu_order?></h3>
    <?=$section->post_content ?>
<?php endforeach;
?>
<h1>stopka</h1>

<?php get_footer(); ?>