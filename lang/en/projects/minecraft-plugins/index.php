<?php
  $pr_cat_name = 'Minecraft plugins';
  
  if ($pr_short == true) {
    $pr_p = 'Not all of my work is for productivity though, here are some plugins I developed for the popular computer game called "Minecraft". Those plugins are also on the plugin exchange site called '.loc_link('https://www.spigotmc.org/resources/authors/mario_matschgi.527213/', 'SpigotMC', true);
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
      'Overview' => 
        array(
          'h' => 
            'If you want to report a bug, just '.loc_link('/#contact_me-intro', 'contact me').'.',
          'What is '.$pro_name.'?' => $o_what_is,
          'Requirements' => $o_requirements,
          'Features' => 
            array(
              'Below is a list with some key features of '.$pro_name.'.',
              $o_features,
            ),
        ),
      ),
      array(
        'Commands' => array(
          'h' => 'Below is a list of all commands with a description of what they allow you to do.',
          'Commands' => $c_commands,
        ),
      ),
      isset($s_screenshots) ? array(
        'Screenshots' => 
          array(
            'h' => 
              'Below are some screenshots of '.$pro_name.'.',
            'Screenshots' => pro_generate_screenshots(),
          ),
      ) : array(),
      array(
        'Tutorial' => 
          array_merge(
            array(
              'h' => 
                'Below you can find a guide which helps you getting started and some tips and tricks.',
              'Getting started' => 
                loc_link('#download__installation-intro', 'Download and install').' '.$pro_name,
              'General' => $t_general,
            ), 
            $t_content, // SHOULD BE AN ARRAY
            isset($t_tips) && $t_tips != '' ? array(
              'Tips & tricks' => $t_tips,
            ) : array(),
          ),
      ),
      isset($sc_link) ? array(
        'Sourcecode' => 
          array(
            'h' => 
              'Almost all of my published work is open-source on my '.loc_link('https://github.com/MarioMatschgi', 'GitHub', true).' and licenced under the '.loc_link('https://wikipedia.org/wiki/MIT_License', 'MIT-License', true).'.',
            'Sourcecode' => 
              'If you want to check out the sourcecode for '.$pro_name.' visit my '.loc_link($sc_link, 'GitHub repository', true).'.',
          ),
      ) : array(),
      array(
        'Requirements' => 
          array(
            'h' => 'This plugin requires the following libraries in order to work properly.',
            'Requirements' => array($r_requirements),
          ),
      ),
      array(
        'Download & installation' => 
          array(
            'h' => 
              'Below is a guide for installation and the download. I hope that you enjoy my work, if you want to report a bug just '.loc_link('/#contact_me-intro', 'contact me').'.',
            'Installation' => 
              'Drag the plugin into the plugins folder of your server.',
            'Download' => 
              'Visit the '.loc_link($d_link, 'SpigotMC resource'),
          ),
      ),
    );
    
    // Table of content
    global $toc_h;
    $toc_h = 'Table of content';
    
    // BUIlD FINAL SECTIONS
    $sections = pro_generate_project_sections();
  }
?>