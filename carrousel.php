<?php
/**
 * Plugin Name: Carrousel
 * Author: kenneth Gbeti
 * Description: Carrousel d'images créé à partir d'une galerie d'image.
 * Author URI: https://github.com/kennethEdwin147/31w-extension-exer2
 */ 
function carrousel_31w_enqueue() 
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . 'style.css');
    $version_js =  filemtime(plugin_dir_path(__FILE__) . 'script/carrousel.js');

    wp_enqueue_style(   
                    'carrousel_31w_enqueue', 
                    plugin_dir_url(__FILE__) . 'style.css',
                    array(),
                    $version_css 
                );


    wp_enqueue_script(
                    'carrousel_31w_enqueue', 
                    plugin_dir_url(__FILE__) . 'script/carrousel.js',
                    array(),
                    $version_js,
                    true 
                );
}

add_action('wp_enqueue_scripts', 'carrousel_31w_enqueue');

function genere_carrousel() 
{
    ///////////////////HTML
    $contenu = '<div class="carrousel">';
    $contenu .= '<button class="carrousel__fermeture">X</button>';

    $contenu .= '<figure class="carrousel__img">';
    $contenu .= '</figure>';

    $contenu .= '<form class="carrousel__radio">';
    $contenu .= '</form>';

    $contenu .= '</div> <!-- fin du car -->';
    return $contenu;
}

add_shortcode('carrousel','genere_carrousel');

