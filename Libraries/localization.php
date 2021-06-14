<?php
  $loc_lang = 'en';
  $loc_lang_auto = false;
  $loc_fallback_lang = 'en';
  
  $loc_langs = get_files_at_path($_SERVER['DOCUMENT_ROOT'].'/lang');
  
  function loc_link($url, $text, $new_tab = false) {
    return '<a href="'.loc_url($url).'"'.($new_tab ? ' target="_blank"' : '').'>'.$text.'</a>';
  }
  
  function loc_url($url) {
    if (starts_with($url, 'http')) {  // Extern link, don't add lang
      $l = '';
    } else if (starts_with($url, '#')) {  // Anchor link, don't add lang
      $l = '';
    } else { 
      $l = loc_get_lang_or_empty();
      if ($l != '') {
        $l = '/'.$l;
      }
    }
    
    return $l.$url;
  }
  
  function loc_get_lang_or_auto() {
    global $loc_lang, $loc_lang_auto;
    return $loc_lang_auto == true ? 'auto' : $loc_lang;
  }
  
  function loc_get_lang_or_empty() {
    $l = loc_get_lang_or_auto();
    if ($l == 'auto') {
      return '';
    }
    return $l;
  }
  
  $lang_flag_path = '/Images/flags/';
  function get_flag_path($lang) {
    global $lang_flag_path;
    return $lang_flag_path.$lang;
  }
  function make_flag_list() {
    global $lang_flag_path;
    $content = '';
    
    $path = $_SERVER['DOCUMENT_ROOT'].$lang_flag_path;
    $content .= '<div class="langsel">'.make_flag_list_item_item(loc_get_lang_or_auto().'.svg').'<ul class="box">';
    foreach (get_files_at_path($path) as $file) {
      $content .= '<li><a onclick="on_change_language(\''.explode('.', $file)[0].'\')" class="no-style">'.make_flag_list_item_item($file).'</a></li>';
    }
    $content .= '</ul></div>';
    
    return $content;
  }
  function make_flag_list_item_item($file) {
    global $lang_flag_path;
    $lang = explode('.', $file)[0];
    return '<img src="'.$lang_flag_path.$file.'"><span>'.$lang.'</span>';
  }
  
  function loc_set_lang($lang) {
    global $loc_lang, $loc_fallback_lang, $loc_lang_auto;
    
    // If no lang was given, use browsers prefered lang
    if (!loc_lang_exists($lang)) {
      $loc_lang_auto = true;
      $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    } else {
      $loc_lang_auto = false;
    }
    
    // If no lang set, use fallback lang
    if ($lang == '' || !loc_lang_exists($lang)) {
      $loc_lang = $loc_fallback_lang;
    } else {
      $loc_lang = $lang;
    }
  }
  
  function loc_lang_exists($lang) {
    global $loc_langs;
    return in_array($lang, $loc_langs);
  }
  
  function loc_build_path($path, $lang) {
    return '/lang'.'/'.$lang.str_replace('/lang'.'/'.$lang, '', str_replace($_SERVER['DOCUMENT_ROOT'], '', $path));
  }
  
  function get_localized_url($path) {
    global $loc_lang;
    global $loc_fallback_lang;
    $p = loc_build_path($path, $loc_lang);
    if (file_exists($_SERVER['DOCUMENT_ROOT'].$p)) {
      return $p;
    }
    $p = loc_build_path($path, $loc_fallback_lang);
    if (file_exists($_SERVER['DOCUMENT_ROOT'].$p)) {
      return $p;
    }
    return NULL;
  }
  function get_localized_path($path) {
    $p = get_localized_url($path);
    if ($p == NULL) {
      return NULL;
    }
    
    return $_SERVER['DOCUMENT_ROOT'].$p;
  }
?>