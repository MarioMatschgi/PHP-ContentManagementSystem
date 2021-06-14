<?php
  $pr_cat_name = 'Minecraft plugins';
  
  if ($pr_short == true) {
    $pr_p = 'Nicht alle meine Projekte sind für Produktivität, hier sind einige Plugins die ich für das bekannte Computerspiel namens "Minecraft" entwickelt habe. Die Plugins sind auch auf der Plugin Website '.loc_link('https://www.spigotmc.org/resources/authors/mario_matschgi.527213/', 'SpigotMC', true).' zu finden.';
  } else {
    global $pr_cat_sections, $sc_link;
    
    global $pro_name;
    global $sc_link, $dni_path;
    global $o_what_is, $o_requirements, $o_features;
    global $c_commands;
    global $t_content, $t_general, $t_tips;
    global $s_screenshots;
    global $sections;
    global $r_requirements;
    global $d_link;
    
    // SECTIONS
    $sections = array_merge(
      array(
        'Überblick' => 
          array(
            'h' => 
              'Wenn du einen Bug melden möchtest, <a href="/#kontaktiere_mich-intro">kontaktiere mich</a> einfach.',
            "Was ist $pro_name?" => $o_what_is,
            'Vorraussetzungen' => $o_requirements,
            'Features' => 
              array(
                'Hier ist eine liste mit einigen Features von '.$pro_name.'.',
                $o_features,
              ),
          ),
      ),
      array(
        'Befehle' => array(
          'h' => 'Hier ist eine Liste mit allen Befehlen und was dir diese ermöglichen.',
          'Befehle' => $c_commands,
        ),
      ),
      isset($s_screenshots) ? array(
        'Bilder' => 
          array(
            'h' => 
              'Hier sind einige Bilder von '.$pro_name.'.',
            'Bilder' => pro_generate_screenshots(),
          ),
      ) : array(),
      array(
        'Tutorial' => 
          array_merge(
            array(
              'h' => 
                'Hier ist eine Anleitung und einige Tips & Tricks.',
              'Als Erstes' => 
                '<a href="#herunterladen__installieren-intro">Herunterladen & installieren</a> von '.$pro_name,
              'Allgemein' => $t_general,
            ), 
            $t_content, // SHOULD BE AN ARRAY
            isset($t_tips) && $t_tips != '' ? array(
              'Tips & Tricks' => $t_tips,
            ) : array(),
          ),
      ),
      isset($sc_link) ? array(
        'Quellcode' => 
          array(
            'h' => 
              'Fast alle meine Projekte sind Open-Source auf <a href="https://github.com/MarioMatschgi" target="_blank">GitHub</a> und mit der <a href="https://wikipedia.org/wiki/MIT_License" target="_blank">MIT-License</a> lizenziert.',
            'Quellcode' => 
              'Wenn du willst, sieh dir den Quellcode für '.$pro_name.' auf meiner <a href="'.$sc_link.'" target="_blank">GitHub repository</a> an.',
          ),
      ) : array(),
      array(
        'Anforderungen' => 
          array(
            'h' => 'Das Plugin braucht folgende Bibliotheken um zu funktionieren.',
            'Anforderungen' => array($r_requirements),
          ),
      ),
      array(
        'Download & installation' => 
          array(
            'h' => 
            'Hier ist eine Anleitung für die Installation und der Link zum Download. Ich hoffe dir gefällt das Projekt, wenn du einen Bug melden möchtest '.loc_link('/#kontaktiere_mich-intro', 'kontaktiere mich').' einfach.',
            'Installation' => 
              'Ziehe die Datei in den Plugins Ordner deines Servers.',
            'Download' => 
              'Gehe zum '.loc_link($d_link, 'SpigotMC Artikel'),
          ),
      ),
    );
    
    // Table of content
    global $toc_h;
    $toc_h = 'Inhaltsverzeichnis';
    
    // BUIlD FINAL SECTIONS
    $sections = pro_generate_project_sections();
  }
?>