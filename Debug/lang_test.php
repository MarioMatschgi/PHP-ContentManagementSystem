<?php 
  $valid_languages = array("en", "de");

  $requested_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  
  if (in_array($requested_lang, $valid_languages)) {
    echo("Your prefered language is: $requested_lang");
  }
  else {
    echo "Your prefered language is not valid, fallback to: ".$valid_languages[0];
  }
?> 