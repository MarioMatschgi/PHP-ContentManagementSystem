<?php
  require_once($_SERVER['DOCUMENT_ROOT']."/Libraries/projects-library.php");
  global $content;
  $content = array(
    "Über mich" => 
      array(
        "h" => 
          array(
            "Hallo, wie bist du hier her gekommen? Du wunderst dich wahrscheinlich, wer ich bin, also lass mich dir vorstellen:"
          ),
        "Wer bin ich?" => 
          array(
            "Ich bin Mario Elsnig, geboren am 13ten März 2004. Ich lebe in Österreich, genauer gesagt in Oberösterreich. Meine Muttersprache ist Deutsch. Ich habe mit dem Programmieren angefangen als ich 12 Jahre alt war. Damals habe ich Plugins für das bekannte Computerspiel namens \"Minecraft\" programmiert."
          ),
        "Was bin ich?" =>
          array(
            "Derzeit bin ich Schüler einer HTL. In meiner Freizeit entwickle ich Computer Sachen. Du kannst dir meine Projekte <a href=\"#meine_projekte-intro\">hier</a> ansehen."
          ),
        "Welche Skills habe ich?" =>
          array(
            "Mein Fokus liegt auf dem Entwickeln von Mac-Apps mit Xcode und App entwickeln generell. Ich bin geüb in folgenden Gebieten:",
            array(
              "Spiel und Editor-Extention Entwicklung mit der ".gen_link("https://unity.com/", "Unity-Engine"),
              "C#, der Sprache der Wahl für Unity",
              "<br>",
              "App Entwicklung mit Apple's ".gen_link("https://developer.apple.com/xcode", "Xcode"),
              "Swift, der Sprache der Wahl für Xcode",
              "<br>",
              "Web Entwicklung",
              "HTML, CSS, JavaScript und PHP",
              gen_link("https://wordpress.com/", "Wordpress").", ".gen_link("https://www.mediawiki.org/", "MediaWiki"),
              "<br>",
              "Python",
              "Bots (".gen_link("https://discord.com/", "Discord")."), Webscraper und kleine Webapps",
            ),
          ),
        "Welche Werkzeuge benutze ich?" => 
          array(
            "Ich benutze viele Tools zum Beispiel Code-Editoren, Game-Engines, Version-Control und Organisations-Apps wie zum Beispiel:",
            array(
              gen_link("https://unity3d.com/de/get-unity/download", "Unity-Engine")." und ".gen_link("https://www.jetbrains.com/rider/", "JetBrains Rider"),
              "<br>",
              gen_link("https://developer.apple.com/xcode/", "Xcode")." und Simulator",
              "<br>",
              gen_link("https://code.visualstudio.com/", "Visual Studio Code").", ".gen_link("https://support.apple.com/safari", "Safari").", ".gen_link("https://panic.com/coda/", "Coda 2")." und andere Browser zum Testen",
              "<br>",
              gen_link("https://www.jetbrains.com/pycharm/", "JetBrains PyCharm"),
              "<br>",
              gen_link("https://trello.com/", "Trello").", ".gen_link("https://github.com/", "GitHub").", ".gen_link("https://getfenet.re/", "Fenêtre").", ".gen_link("https://flatuicolors.com/", "FlatUIColors").", ".gen_link("https://www.jetbrains.com/idea/", "JetBrains IntelliJ").", ".gen_link("https://processing.org/", "Processing")." und Terminal",
            ),
          ),
      ),
    "Meine Projekte" =>
      array_merge(
        array(
        "h" => 
          array(
            "Das sind einige meiner Projekte. Es sind nicht alle, weil viele unfertig sind, da mein Ziel bei diesen das Lernen neuer Programmiersprachen, Game-Engines und das Sammeln von Erfahrung war."
          ),
        ), 
        pr_generate_projects_arr("Mehr&nbsp;lesen")
      ),
    "Kontaktiere mich!" =>
      array(
        "h" => 
          array(
            'Du hast Fragen? Füge mich als Freund auf <a href="https://discordapp.com/users/294161179130068992" target="_blank" class="discord">Discord</a> (Programario#7830) hinzu oder schreibe eine E-Mail an '.gen_link("mailto:mario.elsnig@gmail.com", "mario.elsnig@gmail.com."),
          ),
      ),
  );
?>