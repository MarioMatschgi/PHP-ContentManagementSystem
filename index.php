<?php
  // LOAD LIBRARIES
  require_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/php-library.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/localization.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/content_builder.php');
  
  $index_title = 'Programario.at';

  $req_url = str_replace('.php', '', $_SERVER['REQUEST_URI']);
  loc_set_lang(explode('/', $req_url)[1]);
  
  $req_url = str_replace('/'.$loc_lang, '', $req_url);
  
  // CONTENT
  global $index_content;
  if ($req_url == '' || $req_url == '/' || $req_url == '/index') {
    $req_url = '';
    $index_content = cb_build_page(__FILE__);
    $index_title = 'Programario.at';
  } else {
    $index_content = cb_build_page($req_url.'.php');
    $arr = array_slice(explode('/', ltrim($req_url, '/')), -2, 2);
    if (count($arr) <= 1) {
      array_unshift($arr, 'Programario');
    }
    $index_title = ucwords(implode(' | ', $arr));
  }
  
  // HEADER
  $header_include_title = true;
  include_once($_SERVER['DOCUMENT_ROOT'].'/header-footer/header.php');
  unset($header_include_title);
  
  // ECHOS
  // echo_p('Requested URL: '.$req_url);
  // echo_p('Requested LANG: '.$loc_lang);
  
  // ECHO CONTENT
  echo($index_content);
  
  // FOOTER
  include_once($_SERVER['DOCUMENT_ROOT'].'/header-footer/footer.php');
?>