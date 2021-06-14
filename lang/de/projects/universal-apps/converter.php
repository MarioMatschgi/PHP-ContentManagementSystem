<?php
  global $pro_name, $pr_overview;
  $pro_name = 'Converter';

  $pr_overview = $pro_name.' ist eine App zum Umrechnen und berechnen von Zahlen. Sie kann Zahlen zwischen verschiedenen Basen (Radizes) umrechnen, zum Beispiel von Binär nach Hexadezimal oder Dezimal Zahlen und umgekehrt. Sie unterstützt auch einen Rechner, der Klammern, verschiedene Basen und sogar Bit-Operationen unterstützt!'; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Computer mit MacOS oder Windows 10.'
    ];
    
    $o_features = array(
      'Basis umrechnen: Rechne Zahlen in andere Basen (Radizes) um, zum Beispiel Binär- nach Hexadezimal- oder Dezimal-Zahlen und umgekehrt.',
      'Rechner: Rechner, der Klammern, Hexadezimal Zahlen (0x als Prefix, zb 0xFF) und sogar Bit-Operationen unterstützt. Der Rechner evaluiert die Eingabe als JavaScript Berechnung, daher wird jede richtige JS berechnung auch richtig berechnet.',
      'Bit-Operationen: Nutze "|" für Bit-Oder, "&" für Bit-Und, etc.',
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Starte die App und man sieht oben Registerkarten mit den Namen "Base converter", "Bit operations", "Metric-imperial" und "?".';
    
    $t_content = array(
      'Base converter' => 
        'Gib in ein Feld deiner Wahl eine Zahl ein, alle anderen Felder werden in Echtzeit aktualisiert. Wenn du eine Zahl mit einer anderen Basis umrechnen willst, gib diese einfach in das richtige Feld ein!',
      'Bit operations' => 
        'Gib eine gültige Berechnung in das Feld ein. Jede in JavaScript gültige Berechnung wird richtig berechnet werden. Nutze "|" für Bit-Oder, "&" für Bit-Und, etc. Das Ergebnis wird in Echtzeit in den Verschiedenen Basen angezeigt werden.',
      'Metric-imperial' => 
        'Kommt bald...',
      'About "(?)"' => 
        loc_link('/#kontaktiere_mich-intro',  'Kontakt Informationen').' und Credits.',
    );
    
    $t_tips = '';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      'Basis umrechnen' => 'base-converter.png',
      'Bit-Operationen' => 'bit-operations.png',
      'Über die App' => 'about.png',
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/Converter';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>