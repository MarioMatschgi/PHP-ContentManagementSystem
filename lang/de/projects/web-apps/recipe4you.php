<?php
  global $pro_name, $pro_url, $pro_link, $pr_overview;
  $pro_name = 'Recipe4you';
  $pro_url = 'https://recipe4you.programario.at';
  $pro_link = gen_link($pro_url, 'recipe4you.programario.at');

  $pr_overview = $pro_name.' ist eine App zum Erstellen, Speichern und Teilen deiner Lieblingsrezepte. Essen ist wichtig, Essen ist lecker, aber kochen ist of schwierig - nun nicht mehr! Gehe auf '.$pro_link.' um die leckersten Rezepte zu sehen.';
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Einen modernen Browser'
    ];
    
    $o_features = array(
      'Erstelle, teile und sie dir deine Lieblingsrezepte an.',
      'Verteile Sterne und setze Lesezeichen, so dass du deine Rezepte leichter findest.',
      'Koche jedes Rezept mit Leichtigkeit.',
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Öffne '.$pro_link.'.';
    
    $t_content = array(
      'Recipe4you' =>
        'Klicke hier um zur Übersicht zu gehen.',
      'Navigation' =>
        'Navigiere zurück oder vorwärts.',
      'Kreationen' =>
        'Sieh dir deine Kreationen an oder erstelle ein neues Rezept.',
      'Sterne' =>
        'Sieh dir Rezepte an, denen du einen Stern gegeben hast.',
      'Lesezeichen' =>
        'Sieh dir Rezepte an, die du mit einem Lesezeichen markiert hast.',
      'Anmelden' =>
        'Melde dich für mehr Möglichkeiten an.',
      'Profil' => 
        'Wähle deine Sprache und Theme.',
      'Teilen' => 
        'Klicke auf Teilen, um das Rezept zu teilen.',
      'Stern' => 
        'Klicke auf den Stern, um zu zeigen, dass es dir gefällt.',
      'Lesezeichen' => 
        'Klicke auf das Lesezeichen, um es einfach wieder zu finden.',
      'Löschen' => 
        'Klicke auf den Mülleimer, um das Rezept zu löschen.',
      'Bearbeiten' => 
        'Klicke auf den Mülleimer, um das Rezept zu bearbeiten.',
    );
    
    $t_tips = '';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      'Übersicht' => 'overview.png',
      'Rezept' => 'recipe.png',
      'Einstellungen' => 'settings.png',
      'Creationen' => 'creations.png',
      'Lesezeichen' => 'bookmarks.png',
      'Erstelle ein neues Rezept' => 'create-new.png'
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/Recipe4You';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>