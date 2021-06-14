<?php
  $pr_cat_name = 'Web-Apps';
  
  if ($pr_short == true) {
    $pr_p = 'Web apps are websites that you can install as a stand-alone app as well. Below are some web-apps I developed.';
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
                loc_link('#download__installation-intro', 'Go to the page or install').' '.$pro_name,
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
        'Link or installation' => 
          array(
            'h' => 
              'Below is the link to the page and a guide for installation. I hope that you enjoy my work, if you want to report a bug just '.loc_link('/#contact_me-intro', 'contact me').'.',
            'Link' => 
              'Visit '.$pro_link.' to get started.',
            'Installation' => 
              array(
                array(
                  'Chrome-based-browsers:<br/>Click the install icon next to the plus icon or the install button in the browsers adressbar.',
                  'iPhone:<br/>Click the share button at the bottom of the browser. Click "Add to Home Screen" and hit "add"'
                ),
              ),
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