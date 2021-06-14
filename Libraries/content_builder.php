<?php
  $cb_404_url = '/error/404.php';

  function cb_id($name, $one_word = false) {
    return convert_id($name, $one_word);
  }
  
  function cb_build_page($path) {
    global $cb_404_url;
    
    $url = get_localized_path($path);
    if ($url == NULL) {
      $url = get_localized_path($cb_404_url);
    }
    global $content;
    require_once($url);  // Load $content
    
    $c .= '<div class="content">';
    $c .= cb_build_content($content);
    $c .= '</div>';
    
    // unset($content);
    
    return $c;
  }
  
  function cb_build_content($content) {
    if (is_array($content)) {
      foreach ($content as $s_h => $s_s) {
        $c .= cb_build_top_level($s_h, $s_s);
      } 
    } else {
      $c .= cb_build_p($content);
    }
    
    return $c;
  }
  
  function cb_build_top_level($s_h, $s_s) {
    if (is_array($s_s)) {
      $s_id = cb_id($s_h);
      
      $c .= '<div id="'.$s_id.'">';
      
      // Top-level Headline and Intro
      $c .= '<div>';
      $c .= '<h3 id="'.$s_id.'-intro"><a href="#'.$s_id.'-intro">'.$s_h.'</a><a href="#top"><i class="fas" aria-hidden="true"></i></a>
      </h3>';
      $c .= '<p>'.cb_build_p($s_s['h']).'</p>';
      $c .= '</div>';
      
      // Inset content
      foreach ($s_s as $s_s_h => $s_s_s) {
        if ($s_s_h != 'h') {
          $c .= cb_build_mid_level(cb_id($s_h), $s_s_h, $s_s_s);
        }
      }
    } else { // No array, just headline with text
      $c .= '<h3>'.$s_h.'</h3>';
      $c .= '<p>'.$s_s.'</p>';
    }
    
    $c .= '</div>';
    
    return $c;
  }
  
  function cb_build_mid_level($s_id, $s_h, $s_s) {
    $s_s_id = cb_id($s_h);
    
    // Mid-level Headline and Paragraph
    $c .= '<div class="inset">';
    $c .= '<h4 id="'.$s_id.'-'.$s_s_id.'"><a href="#'.$s_id.'-'.$s_s_id.'">'.$s_h.'</a><a href="#top"><i class="fas" aria-hidden="true"></i></a>
    </h4>';
    $c .= cb_build_p($s_s);
    $c .= '</div>';
    
    return $c;
  }
  
  function cb_build_p($arr) {
    if (!is_array($arr)) {
      return '<p>'.$arr.'</p>';  // Not array, just single paragraph
    }
    
    foreach ($arr as $p) {
      if (!is_array($p)) {
        $c .= cb_build_p($p);
      } else {
        $c .= cb_build_list($p);
      }
    }
    
    return $c;
  }
  
  function cb_build_list($arr) {
    $c = '<ul class="fa-ul">';
    foreach ($arr as $li) {
      if ($li == '<br>' || $li == '') {
        $c .= '<li><br></li>';
      } else {
        $c .= '<li><span class="fa-li"><i class="fa">&#xf188;</i></span>'.$li.'</li>';
      }
    }
    $c .= '</ul>';
    return $c;
  }
  
  function cb_build_lightbox($screenshots, $lb_name) {
    $c .= '<div class="lightbox-box">';
    foreach ($screenshots as $name => $path) {
      $c .= cb_build_screenshot($name, $path, $lb_name);
    }
    $c .= '</div>';
    
    return $c;
  }
  
  function cb_build_screenshot($name, $path, $lb_name) {
    $c .= '<div class="lightbox-item">';
    $c .= '<a href="'.$path.'" data-lightbox="'.$lb_name.'" data-title="'.$name.'"><img src="'.$path.'" alt="'.$name.'"><p>'.$name.'</p></a>';
    $c .= '</div>';
    
    return $c;
  }
  
  function cb_build_single_screenshot($name, $path, $lb_name) {
    $c .= '<div class="lightbox-box">';
    $c .= cb_build_screenshot($name, $path, $lb_name);
    $c .= '</div>';
    
    return $c;
  }
  function cb_build_single_screenshot_rel($name, $s_name, $lb_name, $file_path) {
    $bn = basename($file_path);
    $p = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace($bn, '', $file_path).'Images/'.str_replace('.php', '', $bn).'/'.$s_name);
    
    $c .= cb_build_single_screenshot($name, $p, $lb_name);
    
    return $c;
  }
?>