<?php
  function echo_p($v) {
    echo('<p>'.$v.'</p>');
  }

  function gen_link($url, $txt) {
    return '<a href="'.$url.'" target="_blank">'.$txt.'</a>';
  }

  function get_files_at_path($directory) {
    if (!is_dir($directory)) {
      exit('Invalid diretory path');
    }

    $files = array();
    foreach (scandir($directory) as $file) {
      if ($file !== '.' && $file !== '..') {
        $files[] = $file;
      }
    }

    return $files;
  }
  function convert_id($name, $one_word = false) {
    $id = $name;
    if ($one_word) {
      $id = explode('-', str_replace(' ', '-', $id))[0]; 
    }
    $id = str_replace(' ', '_', $id);
    $id = str_replace('ä', 'ae', $id);
    $id = str_replace('Ä', 'ae', $id);
    $id = str_replace('ö', 'oe', $id);
    $id = str_replace('Ö', 'oe', $id);
    $id = str_replace('ü', 'ue', $id);
    $id = str_replace('Ü', 'ue', $id);
    $id = str_replace('ß', 'ss', $id);
    $id = preg_replace('/[^A-Za-z0-9_-]/', '', $id);  // Allow only alpha-numerical and "_" and "-"
    $id = strtolower($id);
    
    return $id;
  }
  function make_list($arr) {
    $c = '<ul class="fa-ul">';
    foreach ($arr as $li) {
      $c .= '<li><span class="fa-li"><i class="fa">&#xf188;</i></span>'.$li.'</li>';
    }
    $c .= '</ul>';
    return $c;
  }
  
  function make_table($arr) {
    $c .= '<table>';
    
    // HEAD
    $c .= '<thead>';
    foreach ($arr[0] as $el) {
      $c .= '<th>'.$el.'</th>';
    }
    $c .= '</thead>';
    
    // BODY
    $is_head = true;
    $c .= '<tbody>';
    foreach ($arr as $row) {
      if (!$is_head) {
        $c .= '<tr>';
        foreach ($row as $el) {
          if ($is_head) {
          } else {
            $c .= '<td>'.$el.'</td>';
          }
        }
        $c .= '</tr>';
      }
      $is_head = false;
    }
    $c .= '</tbody>';
    
    $c .= '</table>';
    return $c;
  }
  
  // GENERAL
  function echo_all_section($sections) {
    foreach ($sections as $s_name => $s_s) {
      echo_section();
    }
  }
  function echo_section($section) {
    
  }
  
  function starts_with($string, $startString) { 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
  } 
?>