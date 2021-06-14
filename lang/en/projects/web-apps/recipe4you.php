<?php
  global $pro_name, $pro_url, $pro_link, $pr_overview;
  $pro_name = 'Recipe4you';
  $pro_url = 'https://recipe4you.programario.at';
  $pro_link = gen_link($pro_url, 'recipe4you.programario.at');

  $pr_overview = $pro_name.' is an app for creating, saving and sharing your best recipes. Food is important, food is delicious but cooking food is often scary and difficult - well, not anymore! Visit '.$pro_link.' to see the most delicious recipes.';
  if ($pr_short == true) {
  } else {
    // OVERVIEW SECTION
    global $o_what_is, $o_requirements, $o_features;
    $o_what_is = $pr_overview;
    
    $o_requirements = [
      'A modern browser'
    ];
    
    $o_features = array(
      'Create, view and share your favourite recipes.',
      'Star and bookmark recipes so you can find them more easily.',
      'Cook any recipe with ease.'
    );
    
    // TUTORiAL SECTION
    global $t_content, $t_general, $t_tips;
    $t_general = 'Go to '.$pro_link.'.';
    
    $t_content = array(
      'Recipe4you' =>
        'Click here to go to the overview.',
      'Navigators' =>
        'Go back or forward.',
      'Created recipes' =>
        'See your created recipes or create a new one.',
      'Starred recipes' =>
        'See recipes you\'ve given a star.',
      'Bookmarked recipes' =>
        'See recipes you\'ve bookmarked.',
      'Login' =>
        'Login for more options',
      'Created recipes' =>
        'See your created recipes or create a new one.',
      'Profile' => 
        'Choose your language and theme.',
      'Share' => 
        'Click the share button to share this recipe.',
      'Star' => 
        'Click the star to show that you liked the recipe.',
      'Bookmark' => 
        'Click the bookmark so you can find the recipe more easily.',
      'Delete' => 
        'Click the trashbin to delete the recipe.',
      'Edit' => 
        'Click the pen to edit the recipe.'
    );
    
    $t_tips = '';
    
    // SCREENSHOTS SECTION
    global $s_screenshots;
    $s_screenshots = array(
      'Overview' => 'overview.png',
      'Recipe' => 'recipe.png',
      'Settings' => 'settings.png',
      'Creations' => 'creations.png',
      'Bookmarks' => 'bookmarks.png',
      'Create a new recipe' => 'create-new.png'
    );
    
    // SOURCECODE SECTION
    global $sc_link;
    $sc_link = 'https://github.com/MarioMatschgi/Recipe4You';
    
    // make content with vars
    include_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/project-library.php');
    $content = pro_generate_project(__FILE__);
  }
?>