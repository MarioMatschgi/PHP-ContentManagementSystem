<?php
  require_once(get_localized_path(__FILE__));
  
  echo($header_comment);
?>
  
<!DOCTYPE html>
<html lang=<?php echo($loc_lang)?>>

<!-- 
  
  HEAD
  
 -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo($index_title); ?></title>
  
  <!-- FAVICON -->
  <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/c073fc9ae6.js" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Lightbox -->
  <script src="/lightbox2-dev/dist/js/lightbox.js"></script>
  <script>
    lightbox.option({
      'resizeDuration': 400,
      'fadeDuration': 300,
      'wrapAround': true
    })
  </script>
  
  <!-- Scripts -->
  <script src="/JavaScript/typewriter.js"></script>
  <script src="/JavaScript/localization.js"></script>
  
  <script src="/JavaScript/smooth-scroll.js" defer></script>

  <!-- Styles -->
  <link rel="stylesheet" href="/lightbox2-dev/dist/css/lightbox.css">
  <link rel="stylesheet" href="/Css/lightbox-box.css">
  
  <link rel="stylesheet" href="/Css/ft-syntax-highlight.css">
  <link rel="stylesheet" href="/Css/typewriter.css">
  <link rel="stylesheet" href="/Css/font.css">
  <link rel="stylesheet" href="/Css/main.css">
  <link rel="stylesheet" href="/Css/table.css">
  <link rel="stylesheet" href="/Css/animations.css">
  <link rel="stylesheet" href="/Css/grid.css">
  <link rel="stylesheet" href="/Css/nav.css">
  <link rel="stylesheet" href="/Css/language-selector.css">
  <link rel="stylesheet" href="/Css/hover-effects.css">
  <link rel="stylesheet" href="/Css/scrollbar.css">
  <link rel="stylesheet" href="/Css/footer.css">
</head>

<!-- 
  
  BODY
  
 -->

<body>
  <span id="top"></span>
  <div class="header">
    <!-- 
    
      NAVIGATION
    
     -->
    <nav id="nav">
      <?php 
        // If not on main page, add '/' to link so the user gets redirected and anchored
        if ($req_url != '') {
          $nav_pref = '/';
        }
        // Include arr from index
        include_once(get_localized_path('/index.php'));
        global $content;
        // Fill nav bar arr
        $nav_s['/'] = $header_nav_home;
        foreach ($content as $s_h => $s_s) {
          $nav_s[$nav_pref.'#'.cb_id($s_h)] = $s_h;
        }
        
        $nav_content = make_flag_list().'<ul>';
        $i = 0;
        foreach ($nav_s as $dest => $val) {
          if ($dest == '') {
            $nav_content .= '<li class="'.$nav_hover.'"><a class="custom-underline" href="'.$dest.'">'.$val.'</a></li>';
          }
          else {
            if ($i == 0) {
              $nav_hover = 'hover-effect-leftright';
            }
            else if ($i == count($nav_s) - 1) {
              $nav_hover = 'hover-effect-rightleft';
            }
            else {
              $nav_hover = 'hover-effect-stretch';
            }
            $nav_content .= '<li class="'.$nav_hover.'"><a class="custom-underline" href="'.loc_url($dest).'">'.$val.'</a></li>';
            $i++;
          }
        }
        unset($i);
        $nav_content .= '</ul>';
        
        echo($nav_content);
      ?>
    </nav>
    
  </div>
  
  <?php if($header_include_title) : ?>
  <!-- 
      
    TITLE AND GREETING

   -->
  <div class="title">
    <h1><?php echo($header_title_h) ?></h1>
    <div class="inline">
      <h2><i class="fa">&#xf120;&nbsp;</i></h2>
      <h2 class="typewrite" data-period="2000"
        data-type='<?php echo($header_title_p) ?>'>
      </h2>
    </div>
  </div>
  <?php endif; ?>
