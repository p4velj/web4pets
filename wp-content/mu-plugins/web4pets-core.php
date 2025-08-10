<?php
/*
Plugin Name: Web4Pets Core (mu)
Description: Core utilities for web4pets — DB tables, ACF JSON dir, CLI commands (skeleton).
Version: 0.1
Author: Web4Pets
*/

if ( ! defined( 'ABSPATH' ) ) exit;

// ACF json save/load directory (mount point)
add_filter('acf/settings/save_json', function($path){
    // ulož do mu-plugin adresáře, aby byl v Gitu
    return WP_CONTENT_DIR . '/mu-plugins/web4pets-core/acf-json';
});
add_filter('acf/settings/load_json', function($paths){
    // přidej vlastní adresář
    $paths[] = WP_CONTENT_DIR . '/mu-plugins/web4pets-core/acf-json';
    return $paths;
});

// místo pro další inicializaci (db tabulky budou v dalším kroku)
