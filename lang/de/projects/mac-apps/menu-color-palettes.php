<?php
  global $pro_name, $pr_overview;
  $pro_name = "Menu Color Palettes";

  $pr_overview = "$pro_name ist eine Mac-App zum Erstellen, Speichern und Nutzen von Farb-Paletten. Sie läuft im Hintergrund und ist über die Menüleiste des Macs zu erreichen. Hier kannst du Farb-Paletten managen, erstellen und importieren. Paletten können mit einem Klick in einem neuen Fenster geöffnet werden. Das Fenster schwebt über allem anderen."; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      "Mac computer mit MacOS 11 (Big Sur) oder höher."
    ];
    
    $o_features = array(
      "Menu item: Einfach erreichbarer Icon in der Menüleiste des Macs.",
      "Farb-Paletten: Erstelle Farb-Paletten um so viele Farben zu gruppieren, wie du willst.",
      <<<EOD
        Importiere paletten: Importiere paletten von <a href="https://flatuicolors.com" target="_blank">FlatUIColors.com</a>. Support für mehr Seiten kommt bald. <br> <a href="#tutorial-farben_importieren">Wie geht das?</a>
      EOD,
      "Öffne Paletten: Linksklick auf eine Palette um sie in einem neuen Fenster zu öffnen. Das Fenster wird über allem anderen schweben, damit man es leicht erreichen kann.",
      "Farben kopieren: Kopiere Farben in verschiedenen Formaten. Linksklick (CMD+Linksklick um fokussieren zu vermeiden) auf eine Farbe um sie in dem gewählten Format in die Zwischenablage zu kopieren. Ändere das Format mit dem Drop-Down zu dem, was du brauchst."
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Starte die App und es wird ein Farb-Paletten Icon in der Menüleiste erscheinen. Ein Linksklick darauf öffnet ein Popover Menü wo alle Paletten aufgelistet sind. Darunter sind Optionen zum Öffnen der Einstellungen, Ändern der Ansicht und Beenden der App';
    
    $t_content = array(
      "Paletten" => 
        'Erstelle Paletten mit dem "+"-Icon. Mit einem Rechtsklick können die Paletten gelöscht oder umbenannt werden. Mit einem Linksklick wird sie in einem neuen schwebenden Fenster geöffnet.',
      "Farben" => 
        'Erstelle Farben mit einem Linksklick auf den "+" Icon. Editiere/lösche Farben mit einem Rechtsklick auf eine Farbe. Mit einem Linksklick wird die Farbe in dem gewählten Format in die Zwischenablage kopiert (Tip: Halte CMD beim Linksklick um fokussieren zu vermeiden). Änder das Format in welchem die Farbe kopiert werden soll über das Drop-Down Menü.',
      "Farben importieren" => 
        'Öffne die Palette, wo die Farben importiert werden sollen. Der Button "Show import" zeigt einen Import-Dialog. Füge nun den Code in das geeignete Feld ein. <br>
        
        Für FlatUIColors: Gehe zu deiner FlatUIColors palette. Öffne den Quellcode der Website (Unterschiedlich, je nach Browser) mit einem Rechtsklick und wähle eine Option wie zb. "Element untersuchen", "Elementinformationen zeigen" oder "Quellcode zeigen" aus. Nun musst du den HTML Code des div mit der Klasse "colors" kopieren - Das ist der Code, der in das Textfeld "FlatUIColors code" eingefügt werden soll.'.cb_build_single_screenshot_rel("Div colors kopieren", "copy-div-colors.png", "tutorial", __FILE__),
    );
    
    $t_tips = "Halte CMD während des Linksklicks um das Fokussieren des Fensters zu unterdrücken.";
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      "Menu Item" => "menu-item-view.png",
      "Menu Item mit Optionen" => "menu-item-view_with-options.png",
      "Paletten" => "palette-view.png",
      "Paletten mit import" => "palette-view_with-import.png",
      "Paletten mit Optionen" => "palette-view_with-options.png",
      "Formate" => "copy-formats.png",
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = "https://github.com/MarioMatschgi/MenuColorPalettes";
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT']."/Libraries/project-library.php");
    $content = pro_generate_project(__FILE__);
  }
?>