<?php
  function pro_generate_project($path) {
    global $project_name, $sections;
    global $pro_file_name;
    
    // Include project category template
    $pr_cat_path = implode('/', array_slice(explode('/', $path), 0, -1)).'/index.php';
    $pro_file_name = basename($path, '.php');
    require_once(get_localized_path($pr_cat_path));
    
    return $sections;
  }
  
  function pro_generate_project_sections() {
    global $sections, $toc_h;
    // Generate TOC
    $sections_toc = array(
      $toc_h => array('h' => '<div class="table-of-content box">'.pro_generate_toc().'</div>')
    );
    
    // Add TOC before
    $arr = array_merge($sections_toc, $sections);
    
    return $arr;
  }
  
  function pro_generate_toc() {
    global $sections;
    $toc_arr = array();
    foreach ($sections as $s_h => $s_s) {
      array_push($toc_arr, '<a href="#'.cb_id($s_h).'">'.$s_h.'</a>');
    }
    return cb_build_list($toc_arr);
  }
  
  function pro_generate_downloads() {
    global $req_url;
    
    $dni_d_arr = array();
    $arr = array_reverse(explode('/', $_SERVER['DOCUMENT_ROOT'].'/downloads'.$req_url));
    $cat_name = $arr[1];
    $proj_name = $arr[0];
    $dir = $_SERVER['DOCUMENT_ROOT'].'/downloads'.'/'.$cat_name.'/'.$proj_name;
    if (!file_exists($dir)) {
      return '';
    }
    
    return pro_generate_downloads_folder($dir, $cat_name);
  }
  
  function pro_generate_downloads_folder($dir, $cat_name) {
    $arr = array();
    foreach (array_reverse(get_files_at_path($dir)) as $file) {
      if (is_dir($dir.'/'.$file)) {
        array_push($arr, '<p>'.$file.'</p>'.pro_generate_downloads_folder($dir.'/'.$file, $cat_name));  // Push sublist
      } else {
        array_push($arr, '<a href="'.str_replace($_SERVER['DOCUMENT_ROOT'], '', $dir.'/'.$file).'" download="'.$file.'">'.$file.'</a>');  // Push link
      }
    }
    
    return cb_build_list($arr);
  }
  
  function pro_generate_screenshots() {
    global $req_url;
    global $s_screenshots, $pro_file_name;
    
    $cat_name = array_reverse(explode('/', $_SERVER['DOCUMENT_ROOT'].'/projects'.$req_url))[1];
    foreach ($s_screenshots as $name => $path) {
      $s_screenshots[$name] = get_localized_url('/projects'.'/'.$cat_name.'/Images'.'/').$pro_file_name.'/'.$path;
    }
    
    return cb_build_lightbox($s_screenshots, 'screenshots');
  }
?>