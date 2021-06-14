<?php
  
  function pr_generate_projects_arr($link_p) {
    $projects_path = get_localized_path('/projects'.'/');
    
    $arr = array();
    
    foreach (get_files_at_path($projects_path) as $cat) {
      if (is_dir($projects_path.$cat)) {
        $pr_short = true;
        include_once($projects_path.$cat.'/index.php');
        $arr[$pr_cat_name] = '<p>'.$pr_p.'</p>'.pr_generate_projects($projects_path.$cat, $link_p);
      }
    }
    unset($pr_cat_name, $pr_p);
    
    return $arr;
  }
  
  function pr_generate_projects($path, $link_p) {
    $c .= '<div class="work grid">';
    foreach (get_files_at_path($path) as $pro) {
      if (!is_dir($path.'/'.$pro) && basename($pro, '.php') != 'index') {
        $c .= pr_generate_project($path, $pro, $link_p);
      }
    }
    $c .= '</div>'; 
    
    return $c;
  }
  
  function pr_generate_project($path, $file, $link_p) {
    $pr_short = true;
    include_once($path.'/'.$file);
    global $pr_overview;
    
    $arr = explode('/', str_replace($_SERVER['DOCUMENT_ROOT'].'/lang'.'/', '', $path.'/'.basename($file, '.php')));
    array_splice($arr, 0, 1);
    $url = loc_url('/'.implode('/', $arr));
    $c .= '<div class="box column"><h4>'.$pro_name.'</h4><p>'.$pr_overview.' '.'<a href="'.str_replace($_SERVER['DOCUMENT_ROOT'].'/lang', '', $url).'">'.$link_p.'</a>'.'</p></div>';
    
    unset($pr_overview, $pr_short, $pro_name);
    
    return $c;
  }
?>