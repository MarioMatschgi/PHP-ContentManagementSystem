<?php
  global $pro_name, $pr_overview;
  $pro_name = 'Gravity Reloaded';

  $pr_overview = $pro_name.' ist ein Minecraft Plugin welches ein Dropper/Gravity Spielmodus hinzufügt. Die Spieler starten auf einer Platform und müssen in ein Wasserbecken springen, aber auf dem Weg nach unten müssen sie verschiedenen Hindernissen ausweichen.'; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Minecraft server mit Spigot/Bukkit 1.8 oder höher.'
    ];
    
    $o_features = array(
      'Gravity: Ein lustiger Spielmodi.',
      'Mulitarena: Erstelle mehrere Arenen.',
      'Join-Schilder: Rechtsklick um einem Spiel beizutreten.<br>Setup: Zeile 1: [Grav], Zeile 2 {arenaname}.',
      'Lobbyitems:<br>Startitem: Nutze das Startitem (nur mit Rechten), <br>Shopitem: Kaufe Joinme-Pässe, <br>Leaveitem: Verlasse das Spiel.',
      'Joinme: Sende eine Joinme Nachricht mit einem klickbaren Bild des Spielerkopfes, mit dem andere deiner Arena beitreten können.',
      'Mapvoting: Klicke auf eine Nachricht im Chat um für deine Lieblingsmap abzustimmen.',
    );
    
    // COMMANDS SECTION
    global $c_commands;
    $c_com = '/gravity';
    $c_commands = '<p>Statt /gravity funktioniert auch: /gr, /grav, /gravityreloaded</p>'.make_table(array(
      array('Befehl', 'Beschreibung', 'Rechte'),
      
      // GENERAL
      array('<strong>General</strong>', '', ''),
      array($c_com, 'Der Hauptbefehl', '-'),
      array($c_com.' help', 'Zeigt die Gravity-Hilfe', '-'),
      
      // MAPS
      array('', '', ''),
      array('<strong>Maps</strong>', '', ''),
      array($c_com.' maps', 'Der maps-Unterbefehl', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps help', 'Zeigt die Gravity-maps-Hilfe', '-'),
      array($c_com.' maps {map}', 'Zeigt Infos der Map {map}', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps list', 'Zeigt alle Maps', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps create {map}', 'Erstellt eine Map namens {map}', '„gravity.admin", „gravity.maps.create", or op'),
      array($c_com.' maps remove {map}', 'Löscht eine Map namens {map}', '„gravity.admin", „gravity.maps.remove", or op'),
      array($c_com.' maps setup {map}', 'Öffnet das Setup-Inventar für die Karte {map}', '„gravity.admin", „gravity.maps.setup", or op'),
      
      // ARENA
      array('', '', ''),
      array('<strong>Arena</strong>', '', ''),
      array($c_com.' arena', 'Der arena-Unterbefehl', ''),
      array($c_com.' arena help', 'Zeigt die Gravity-arena-Hilfe', ''),
      array($c_com.' arena {arena}', 'Zeigt Infos der Arena {arena}', '„gravity.admin", „gravity.arena.list", or op'),
      array($c_com.' arena list', 'Zeigt alle Arenen', '„gravity.admin", „gravity.arena.list", or op'),
      array($c_com.' arena create {arena}', 'Erstellt eine Arena namens {arena}', '„gravity.admin", „gravity.arena.create", or op'),
      array($c_com.' arena remove {arena}', 'Löscht eine Arena namens {arena}', '„gravity.admin", „gravity.arena.remove", or op'),
      array($c_com.' arena setup {arena}', 'Öffnet das Setup-Inventar für die Arena {arena}', '„gravity.admin", „gravity.arena.setup", or op'),
      
      // OTHER
      array('', '', ''),
      array('<strong>Andere</strong>', '', ''),
      array($c_com.' join {arena}', 'Tritt der Arena namens {arena} bei, wie wenn man ein Schild klicken würde', '-'),
      array($c_com.' joinme', 'Startet ein Joinme', '„gravity.admin“, „gravity.joinme", or op'),
      array($c_com.' setmainlobby', 'Setzt den Hauplobby-Spawn', '„gravity.admin“, „gravity.setmainlobby", or op'),
      array($c_com.' stats [player]', 'Zeigt die Statistik für den Spieler [player]', 'No premission required!'),
      
      // OTHER ARENA
      array('', '', ''),
      array('<strong>Andere</strong>', '<strong>Funktioniert nur in der Arena</strong>', ''),
      array('/lobby, /lb, /hub, /spawn', 'Verlässt die Arena', 'No premission required!'),
      array('/vote', 'Stimmt für ein Kartenset ab', 'No premission required!
      Aliasses: v'),
      array('/start', 'Startet die Arena', '„gravity.admin“, „gravity.arena.start“, or op'),
      array('/joinme', 'Startet ein Joinme', '„gravity.admin“, „gravity.arena.joinme“, or op'),
      array('/stats [player]', 'Zeigt die Statistik für den Spieler [player]', 'No premission required!'),
    ));
    
    // TUTORIAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Installiere das Plugin und startet deinen Server neu. Überprüfe, ob das Plugin richtig geladen ist mit "/pl" oder "/gravity help" und schau in der Konsole nach Fehlern.<br>
    In Gravity gibt es, wie in anderen Spielmodi, Arenen und Maps.';
    
    $t_content = array(
      'Arenas' => 
        'Eine Arena ist ein virtueller Platz womit Spieler verbunden werden, wenn sie auf das Join-Schild klicken. Eine Arena besteht aus einer Lobby - hier warten die Spieler bis das Spiel startet - und mehrere Maps. Die Maps werden mittels Abstimmung von zufälligen paaren von 5 Maps ausgewählt.',
      'Maps/Levels' => 
        'Eine Map ist der eigentliche Level, mit dem die Spieler interagieren und wo sie versuchen den Boden sicher zu erreichen. Eine Map besteht aus einer Platform, wohin die Spieler teleportiert werden, eine Glasfläche, welche die Spieler davon abhält sofort zu springen, Wasser am Boden, wo die Spieler sicher landen können und ein Nether-Portal, das den Spieler zur nächsten Map teleportiert oder, für den Fall, dass dies die letzte Map des Spiels ist, als Gewinner bestimmt.',
      'Glas' => 
        'Das Glas ist ein Bereich, der die Spieler davon Abhält, sofort zu springen, da am Anfang des Spiels bei der ersten Map ein 5 Sekunden Timer ist, nach dem die Spieler starten können.',
      'Portal' => 
        'Das Portal ist ein normales, angezündetes Nether-Portal am Boden der Map. Wenn ein Spieler das Portal betritt, wird er nicht in den Nether teleportiert sondern das Plugin verarbeitet die Aktion und der Spieler wird zum nächsten Level teleportiert oder, für den Fall, dass dies die letzte Map des Spiels ist, als Gewinner bestimmt.',
      'Setup' => 
        'Das Setup ist einfacher, als es am Anfang erscheint, vorallem, wenn man es ein paar Male durchgeführt hat.<br>
        Als Erstes sollte der Mainlobby-Spawn mit dem Befehl "/gravity setmainlobby" gesetzt werden. Hierher werden die Spieler teleportiert, sobald das Spiel endet oder der Spieler das Spiel verlässt. Es müssen mindesten 5 Maps aufgesetzt werden. Dann kann man so viele Arenen erstellen, wie man will.',
      'Maps Setup' => 
        'Um eine Map aufzusetzen muss zuerst eine mit dem Befehl "/gravity maps create {name}" erstellt werden. Dann kann das Setup mit dem Befehl "/gravity maps setup {name}" geöffnet werden und mittels Linksklicks auf die Items im GUI die einzelnen Eigenschaften der Map gesetzt werden.<br>
        Mit dem Befehl "/gravity maps list" können alle Maps und deren Status angezeigt werden.',
      'Arenas Setup' => 
        'Um eine Arena aufzusetzen muss zuerst eine mit dem Befehl "/gravity arena create {name}" erstellt werden. Dann kann das Setup mit dem Befehl "/gravity arena setup {name}" geöffnet werden und mittels Linksklicks auf die Items im GUI die einzelnen Eigenschaften der Arena gesetzt werden.<br>
        Mit dem Befehl "/gravity arena list" können alle Arenen und deren Status angezeigt werden.',
      'Join-Schild Setup' => 
        'Um ein Join-Schild zu erstellen muss nur ein Schild platziert werden, auf dem in der ersten Zeile "[Grav]" und in der zweiten Zeile der Arenaname "{arenaname}" steht.',
      'Game' => 
        'Spieler klicken auf ein Join-Schild und werden dann in die Lobby der Arena teleportiert. Sobald genug Spieler (Anzahl in der config.yml einstellbar) in der Arena sind werden alle Spieler zur ersten Map teleportiert wo das Spiel nach einem 5 Sekunden Timer startet. Das Glas wird entfernt und die Spieler können versuchen in das sichere Wasser zu springen. Wenn ein Spieler stirbt wird er wieder nach oben teleportiert, aber wenn er es sicher nach Unten schafft und das Nether-Portal betritt wird er zur nächsten Map teleportiert, wo das Glas sofort entfernt wird. Wenn der Spieler das Nether-Portal der letzten Map betritt hat er das Spiel geschafft.',
      'Abstimmen' => 
        'Der Spieler kann mit klicken auf die Chat-Nachricht oder mit dem Befehl "/vote" abstimmen.',
      'Joinme' => 
        'Der Spieler kann ein Joinme mit dem Befehl "/joinme" in der Lobby starten. Das schickt eine Nachricht mit dem Kopf des Spielers, der das Joinme gestartet hat, an alle Spieler. Wenn diese Nachricht geklickt wird, wird der Spieler die Arena betreten.',
    );
    
    $t_tips = '';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    // $s_screenshots = array(
    //   'Menu Item View' => 'menu-item-view.png',
    // );
    
    // REQUIREMENTS SECTION
    global $r_requirements;
    $r_requirements = array(
      'Vault: '.loc_link('https://www.spigotmc.org/resources/vault.34315/', 'Download', true),
      'EssentialsX: '.loc_link('https://www.spigotmc.org/resources/essentialsx.9089/', 'Download', true),
      'PermissionsEx: '.loc_link('https://dev.bukkit.org/projects/permissionsex', 'Download', true),
      'Multiversecore: '.loc_link('https://www.spigotmc.org/resources/multiverse-core.390/', 'Download', true),
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/Minecraft-Plugins/tree/master/_Eclipse/Gravity%24';
    
    // DOWNLOAD LINK
    global $d_link;
    $d_link = 'https://www.spigotmc.org/resources/gravityreloaded-gravity-dropper-plugin-by-mario_matschgi.62038/';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>