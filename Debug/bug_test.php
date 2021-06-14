<?php 
  $include_title = true;
  $page_title = "Debug | Bug-Test";
  include_once($_SERVER['DOCUMENT_ROOT']."/base-first.php");
  unset($include_title);
?>

<script src="https://cdn.jsdelivr.net/npm/p5@1.2.0/lib/p5.js"></script>

<script src="/JavaScript/bug.js"></script>
  
<div id="content">
  <div class="box">
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
  </div>
</div>

<?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/base-last.php";
  include_once($path);
?>