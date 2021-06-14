<?php
  global $s_screenshots;
  global $pr_cat_sections, $sections, $sc_link, $req_url;
  global $sections, $sections_before, $sections_after, $toc_h, $sc_s;
  global $t_content, $t_general, $t_tips;
  
  /*
  SECTIONS
  
  * Overview
  * $pr_cat_sections
  * Sourcecode
  * Screenshots
  * Tutorial
  * Download & installation
  
  */

  // Table of content
  $toc_h = 'Inhaltsverzeichnis';
  
  // CONTENT BEFORE CATEGORY SECTIONS
  $sections_before = array(
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
  );
  
  // CONTENT AFTER CATEGORY SECTIONS
  $sections_after = array_merge(
    array(
      'Bilder' => 
        array(
          'h' => 
            'Hier sind einige Bilder von '.$pro_name.'.',
          'Bilder' => pro_generate_screenshots(),
        ),
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
      'Herunterladen & installieren' => 
        array(
          'h' => 
            'Hier ist eine Anleitung für die Installation und Downloads für alle Versionen. Ich hoffe dir gefällt das Projekt, wenn du einen Bug melden möchtest <a href="/#kontaktiere_mich-intro">kontaktiere mich</a> einfach.',
          'Installation' => $dni_installation,
          'Download' => 
            'Wähle eine Version:'.pro_generate_downloads(),
        ),
    ),
  );
  
  // BUIlD FINAL SECTIONS
  $sections = pro_generate_project_sections();
?>