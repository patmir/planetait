<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Render Settings Tab Content
 */
global $wp;
?>
 <div class="wrap">
 <h1 class="wp-heading-inline"><?= GlobalConfig::get("project_pretty_name")?> - Ustawienia</h1>
 <hr class="wp-header-end">
 <h2 class="nav-tab-wrapper wp-clearfix">
 <a href="<?= home_url($wp->request)?>" class="nav-tab nav-tab">Ustawienia Ogólne</a>
 <a href="<?= home_url($wp->request)?>?action=tresc" class="nav-tab">Ustawienia Treści</a>
 <a href="<?= home_url($wp->request)?>?action=slider" class="nav-tab">Slider</a>
 </h2>
<button id="ustawienia_generuj_tresci">Generuj Treści</button>
</div>