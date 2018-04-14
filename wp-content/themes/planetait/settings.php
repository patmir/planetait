<?php

/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );
wp_enqueue_script( 'nav-menu' );
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
<button id="ustawienia_generuj_tresci">Generuj Treści</button>
</div>