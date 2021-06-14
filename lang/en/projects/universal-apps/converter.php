<?php
  global $pro_name, $pr_overview;
  $pro_name = 'Converter';

  $pr_overview = $pro_name.' is an app for converting and calculating numbers. It can convert numbers between different radix (bases), for example binary to hexadecimal or decimal numbers and vice versa. It also supports a calculator which can evaluate braces, different radix and even bit-operations!'; 
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'Computer with MacOS or Windows 10.'
    ];
    
    $o_features = array(
      'Base conversion: Convert numbers between different radix (bases), for example binary to hexadecimal or decimal numbers and vice versa',
      'Calculator: Calculator with support for braces, hexadecimal numbers (use 0x as prefex, example: 0xFF) and bit-operations. Calculator evaluates input in JavaScript therefore any valid JS calculation will be calculated correctly.',
      'Bit-operations: Use "|" for bit-or, "&" for bit-and and so on. ',
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Start the app and you should see tabs labeled "Base converter", "Bit operations", "Metric-imperial" and "?".';
    
    $t_content = array(
      'Base converter' => 
        'Enter any valid number in any of the 4 fields. The other fields will update in real-time. If you want to convert from a different base, just enter the number in the next field of your choice!',
      'Bit operations' => 
        'Enter any valid calculation in the field. Any valid JavaScript calculation will be calculated correctly. Use "|" for bit-or, "&" for bit-and and so on. The result will show in real-time in different bases.',
      'Metric-imperial' => 
        'Comming soon...',
      'About "(?)"' => 
        'Just '.loc_link('/#contact_me-intro',  'contact information').' and credits.',
    );
    
    $t_tips = '';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      'Base converter' => 'base-converter.png',
      'Bit operations' => 'bit-operations.png',
      'About' => 'about.png',
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/Converter';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>