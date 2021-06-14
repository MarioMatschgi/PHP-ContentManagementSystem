<?php
  $pr_cat_name = 'Web-Apps';
  
  if ($pr_short == true) {
    $pr_p = 'Web apps sind Webtsites, die du auch als eigenständige App installieren kannst. Hier sind einige Web-Apps, die ich entwickelt habe.';
  } else {
    global $pr_cat_sections, $sc_link;
    
    global $pro_name, $pro_url, $pro_link;
    global $sc_link, $dni_path;
    global $o_what_is, $o_requirements, $o_features;
    global $t_content, $t_general, $t_tips;
    global $s_screenshots;
    global $sections;
    
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
                loc_link('#download__installation-intro', 'Öffne die Website oder installier dir ').' '.$pro_name,
              'Allgemein' => $t_general,
            ),
            $t_content, // SHOULD BE AN ARRAY
            isset($t_tips) && $t_tips != '' ? array(
              'Tips & tricks' => $t_tips,
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
        'Link oder installieren' => 
          array(
            'h' => 
              'Hier ist der Link zur Website und eine Anleitung für die Installation. Ich hoffe dir gefällt das Projekt, wenn du einen Bug melden möchtest '.loc_link('/#kontaktiere_mich-intro', 'kontaktiere mich').' einfach.',
            'Link' => 
              'Öffne '.$pro_link.' um zu starten.',
            'Installation' => 
              array(
                array(
                  'Chrome-basierende-Browser:<br/>Klicke auf Installieren in der App oder in der Adresszeile des Browsers.',
                  'iPhone:<br/>Klick auf Teilen unten im Browser. Klicke auf "Zum Homebildschirm hinzufügen" und klicke "hinzufügen"'
                ),
              ),
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