<?php
  global $pro_name, $pr_overview;
  $pro_name = 'Gravity Reloaded';

  $pr_overview = $pro_name.' is a Minecraft plugin which adds a Dropper/Gravity minigame. The players will spawn on a platform and have to jump down into the save water whilst avoiding all obstacles.'; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Minecraft server with Spigot/Bukkit 1.8 or higher.'
    ];
    
    $o_features = array(
      'Gravity: A fun little gamemode.',
      'Mulitarena: Have more than one Arena.',
      'Join-signs: Rightclick to join the game.<br>Setup: Line 1: [Grav], Line 2 {arenaname}.',
      'Lobbyitems:<br>Startitem: Use to start game (only with permission), <br>Shopitem: Use to buy Joinmepasses, <br>Leaveitem: Use to leave the game',
      'Joinme: Used to send a message with a clickable playerhead-image, if clicked the player will join your arena.',
      'Mapvoting: Click on a chatmessage to vote for your favourite maps.',
    );
    
    // COMMANDS SECTION
    global $c_commands;
    $c_com = '/gravity';
    $c_commands = '<p>Instead of /gravity you can use the following aliases: /gr, /grav, /gravityreloaded</p>'.make_table(array(
      array('Command', 'Description', 'Permission'),
      
      // GENERAL
      array('<strong>General</strong>', '', ''),
      array($c_com, 'The main command', '-'),
      array($c_com.' help', 'Shows you the gravity help', '-'),
      
      // MAPS
      array('', '', ''),
      array('<strong>Maps</strong>', '', ''),
      array($c_com.' maps', 'The maps-subcommand', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps help', 'Shows you the Gravity-maps help', '-'),
      array($c_com.' maps {map}', 'Shows you the info of the map {map}', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps list', 'Lists all maps', '„gravity.admin", „gravity.maps.list", or op'),
      array($c_com.' maps create {map}', 'Creates a map named {map}', '„gravity.admin", „gravity.maps.create", or op'),
      array($c_com.' maps remove {map}', 'Removes a map named {map}', '„gravity.admin", „gravity.maps.remove", or op'),
      array($c_com.' maps setup {map}', 'Opens the setup-inventory for the map named {map}', '„gravity.admin", „gravity.maps.setup", or op'),
      
      // ARENA
      array('', '', ''),
      array('<strong>Arena</strong>', '', ''),
      array($c_com.' arena', 'The arena-subcommand', ''),
      array($c_com.' arena help', 'Shows you the Gravity-arena help', ''),
      array($c_com.' arena {arena}', 'Shows you the info of the arena {arena}', '„gravity.admin", „gravity.arena.list", or op'),
      array($c_com.' arena list', 'Lists all arenas', '„gravity.admin", „gravity.arena.list", or op'),
      array($c_com.' arena create {arena}', 'Creates an arena named {arena}', '„gravity.admin", „gravity.arena.create", or op'),
      array($c_com.' arena remove {arena}', 'Removes an arena named {arena}', '„gravity.admin", „gravity.arena.remove", or op'),
      array($c_com.' arena setup {arena}', 'Opens the setup-inventory for the arena named {arena}', '„gravity.admin", „gravity.arena.setup", or op'),
      
      // OTHER
      array('', '', ''),
      array('<strong>Other</strong>', '', ''),
      array($c_com.' join {arena}', 'Joins the arena {arena} like clicking on a sign', '-'),
      array($c_com.' joinme', 'Starts a joinme', '„gravity.admin“, „gravity.joinme", or op'),
      array($c_com.' setmainlobby', 'Sets the mainlobby-spawn', '„gravity.admin“, „gravity.setmainlobby", or op'),
      array($c_com.' stats [player]', 'Shows the stats of player [player]', 'No premission required!'),
      
      // OTHER ARENA
      array('', '', ''),
      array('<strong>Other</strong>', '<strong>Works only in arena</strong>', ''),
      array('/lobby, /lb, /hub, /spawn', 'Leaves your current arena', 'No premission required!'),
      array('/vote', 'Vote for any mapset', 'No premission required!
      Aliasses: v'),
      array('/start', 'Start the your current arena', '„gravity.admin“, „gravity.arena.start“, or op'),
      array('/joinme', 'Starts a joinme', '„gravity.admin“, „gravity.arena.joinme“, or op'),
      array('/stats [player]', 'Shows the stats of player [player]', 'No premission required!'),
    ));
    
    // TUTORIAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Install the plugin and reload your server. Check if the plugin loaded correctly with "/pl" or "/gravity help" and check the console for errors.<br>
    In Gravity, as in many other gamemodes, there are Arenas and Maps.';
    
    $t_content = array(
      'Arenas' => 
        'An Arena is a virtual place where players get connected to when they click the join-signs. An Arena consists of a Lobby room - this is where the players will wait till the game starts - and multiple Maps. The maps are choosen by voting for random pairs of 5 maps.',
      'Maps/Levels' => 
        'A Map is the actual level the players will interact with and try to jump down. A Map consists of a top platform from where the players will jump down, a glass area that blocks the players from jumping down straight away, obstacles to avoid when jumping down, water down where the players can land savely and a Nether-Portal where on entering the player wil get teleported to the next map or win the game if it is the last Level of the Game.',
      'Glass' => 
        'The Glass is an area that blocks the players from jumping down the map immediately since there is a 5 second timer in the first Level after which the players can start.',
      'Portal' => 
        'The Portal is just a regular, lit Nether-Portal placed at the bottom of the map. When a player enters it he will not get teleported to the nether but instead the plugin handles the action and the player will get teleported to the next Level or in the case that this was the last Level the player wins the game.',
      'Setup' => 
        'The setup is easier than it may seem especially once you get the hang out of it.<br>
        First you shoud set the mainlobby-spawn with the command "/gravity setmainlobby". This is the place the players will get teleported to once the game finished or they leave the Arena. You have to set up at least 5 Maps. Then you can set up multiple Arenas.',
      'Setup Maps' => 
        'To setup a Map you first have to create one with "/gravity maps create {name}". Then to setup the properties for the Map use "/gravity maps setup {name}" and set the properties by clicking the items in the GUI.<br>
        The command "/gravity maps list" lists all Maps and shows their status.',
      'Setup Arenas' => 
        'To setup an Arena you first have to create one with "/gravity arena create {name}". Then to setup the properties for the Arena use "/gravity arena setup {name}" and set the properties by clicking the items in the GUI.<br>
        The command "/gravity arena list" lists all Arenas and shows their status.',
      'Setup Join-Sign' => 
        'To setup a Join-Sign just place a sign and write "[Grav]" in the fist line and the arenaname "{arenaname}" into the second line.',
      'Game' => 
        'Players click the join sign and will then get teleported into the Lobby room for the Arena. When enough players (amount is set in the config.yml file) joined the Arena all players will get teleported to the first Map where the game starts after a 5 second timer. When the game starts the Glass will get removed and the players can try to jump down into the save water. If they die they will get teleported back up but if they manage to get down safely and enter the nether-portal they will get teleported to the next map, where the glass is instantly removed. If the player enters the Portal in the last map they win.',
      'Voting' => 
        'The player can vote by clicking the chat message that will show every X seconds/minutes or by typing "/vote".',
      'Joinme' => 
        'The player can start a joinme by entering "/joinme" in the lobby. This will send a messege to all players with the head of the player that started the joinme as pixel-art and if the players click on the message they will join the Arena.',
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