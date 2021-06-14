<?php 
  $include_title = true;
  $page_title = "Programario | Debug";
  include_once($_SERVER['DOCUMENT_ROOT']."/base-first.php");
  unset($include_title);
  
  
  $c = "<h3>Debugs/Tests available:</h3>";
  $c .= '<ul class="fa-ul">';
  foreach (GetFilesAtPath($_SERVER['DOCUMENT_ROOT']."/Debug/") as $file_name) {
    $name = pathinfo($file_name, PATHINFO_FILENAME);
    if ($name != "index") {
      $c .= "<li><span class=\"fa-li\"><i class=\"fa\">&#xf188;</i></span><a href=\"./$file_name\">$name</a></li>";
    }
  }
  $c .= '</ul>';
  echo("<div class=\"content\"><div class=\"box\">".$c."</div></div>");
  
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/base-last.php";
  include_once($path);
?>