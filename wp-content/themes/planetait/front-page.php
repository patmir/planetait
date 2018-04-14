<h1>Menu</h1>
<h1>slajder</h1>
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