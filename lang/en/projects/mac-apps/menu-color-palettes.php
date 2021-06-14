<?php
  global $pro_name, $pr_overview;
  $pro_name = 'Menu Color Palettes';

  $pr_overview = $pro_name.' is a Mac-App for creating, saving and using color-palettes. It runs in the background and is accessable via the menubar. There you can manage/create your own or import color-palettes. Palattes can be viewed in a window which floats ontop of everything.'; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Mac computer with MacOS 11 (Big Sur) or higher.'
    ];
    
    $o_features = array(
      'Menu item: Easily accessible icon in your mac\'s MenuBar.',
      'Color-palettes: Create color-palettes for grouping together as many colors as you want to keep your clean organized style.',
      'Import palettes: Import palettes from '.loc_link('https://flatuicolors.com', 'FlatUIColors.com', true).'. Support for more websites comming soon.<br>
      '.loc_link('#tutorial-import_colors', 'How would I do that?'),
      'View palettes: Left-click on a palette to open a window to view it. The window will float above anything on your screen for easy access.',
      'Copy colors in various formats: Left-click (CMD+Left-click for not focusing) on a color to copy it to your clipboard. Change the copy-format with the drop-down to whatever you want.'
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Start the app and you should see a color-palette icon in your MenuBar. A left-click on this icon shows a popover where you can see your palettes, quit the app, open preferences or change the viewing settings.';
    
    $t_content = array(
      'Palettes' => 
        'Create palettes by clicking the "+" icon. Rename/delete palettes by right-clicking a palette. If you rename a palette make sure to close the view window first. View a palette by left-clicking.',
      'Colors' => 
        'Create colors by clicking the "+" icon. Edit/delete colors by right-clicking a color. Left-click to copy the color (Pro-Tip: hold CMD while left-clicking to prevent focusing the window). Change the format the color should be copied in with the "copy format" dropdown in the viewer window.',
      'Import colors' => 
        'To import colors view the palette you want your colors to be imported to and click "Show import". Paste your code into the appropriate text-field<br>
        
        For FlatUIColors: Go to your FlatUIColors palette. Next view the page sourcecode (Process differs for different browsers) by right-clicking and choosing something like "view element" or "element information" or "view source". Then copy the HTML code of the div with the class "colors" - thats the code you have to paste into the text-field "FlatUIColors code".'.
        cb_build_single_screenshot_rel('Copy div colors', 'copy-div-colors.png', 'tutorial', __FILE__),
    );
    
    $t_tips = 'Hold CMD while left-clicking on a color to prevent focusing the viewer window.';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      'Menu Item View' => 'menu-item-view.png',
      'Menu Item View with options' => 'menu-item-view_with-options.png',
      'Palette View' => 'palette-view.png',
      'Palette View with import' => 'palette-view_with-import.png',
      'Palette View with options' => 'palette-view_with-options.png',
      'Copy formats' => 'copy-formats.png',
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/MenuColorPalettes';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>