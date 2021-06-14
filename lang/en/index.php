<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/Libraries/projects-library.php');
  global $content;
  $content = array(
    'About me' => 
      array(
        'h' => 
          array(
            'Hello! How did you find your way to this place? You are probably wondering, who I am, so let me introduce myself:',
          ),
        'Who am I?' => 
          array(
            'I am Mario Elsnig, born on the 13<sup>th</sup> of March 2004. I live in Austria, more precise in Upper Austria. My native language is German. I started coding when I was about 12 years old. Back then I made plugins for the popular computer game called "Minecraft".',
          ),
        'What am I?' =>
          array(
            'Currently I am a student in Higher Technical College. In my spare time I develop computer things. You can take a look at my projects '.loc_link('#my_work-intro', 'here').'.',
          ),
        'What skills do I have?' =>
          array(
            'My main focus is creating Mac-Apps with Xcode and app developing in general. I have good practice in things like:',
            array(
              'Game and Editor-Extention development in the '.gen_link('https://unity.com/', 'Unity-Engine'),
              'C#, the language of choice for Unity',
              '<br>',
              'App development in Apple\'s '.gen_link('https://developer.apple.com/xcode', 'Xcode'),
              'Swift, the language of choice for Xcode',
              '<br>',
              'Web development',
              'HTML, CSS, JavaScript and PHP',
              gen_link('https://wordpress.com/', 'Wordpress').', '.gen_link('https://www.mediawiki.org/', 'MediaWiki'),
              '<br>',
              'Python',
              'Bots ('.gen_link('https://discord.com/', 'Discord').'), Webscraper and little webapps',
            ),
          ),
        'Which tools do I use?' => 
          array(
            'I use many tools like code-editors, game-engines, version-contol-apps, organization-apps and productivity-apps including:',
            array(
              gen_link('https://unity3d.com/de/get-unity/download', 'Unity-Engine').' and '.gen_link('https://www.jetbrains.com/rider/', 'JetBrains Rider'),
              '<br>',
              gen_link('https://developer.apple.com/xcode/', 'Xcode').' and Simulator',
              '<br>',
              gen_link('https://code.visualstudio.com/', 'Visual Studio Code').', '.gen_link('https://support.apple.com/safari', 'Safari').', '.gen_link('https://panic.com/coda/', 'Coda 2').' and other browsers for testing',
              '<br>',
              gen_link('https://www.jetbrains.com/pycharm/', 'JetBrains PyCharm'),
              '<br>',
              gen_link('https://trello.com/', 'Trello').', '.gen_link('https://github.com/', 'GitHub').', '.gen_link('https://getfenet.re/', 'Fenêtre').', '.gen_link('https://flatuicolors.com/', 'FlatUIColors').', '.gen_link('https://www.jetbrains.com/idea/', 'JetBrains IntelliJ').', '.gen_link('https://processing.org/', 'Processing').' and Terminal',
            ),
          ),
      ),
    'My work' =>
      array_merge(
        array(
        'h' => 
          array(
            'Those are some projects I developed. Most of the projects are unfinished since my goal was to improve my skills, learn and get used to multiple programming languages, game-engines and to get as much experience as possible.'
          ),
        ), 
        pr_generate_projects_arr('Read&nbsp;more')
      ),
    'Contact me!' =>
      array(
        'h' => 
          array(
            'You have questions? Add me as a friend or get in touch with me on <a href="https://discordapp.com/users/294161179130068992" target="_blank" class="discord">Discord</a> (Programario#7830) or send an e-mail to '.gen_link('mailto:mario.elsnig@gmail.com', 'mario.elsnig@gmail.com.'),
          ),
      ),
  );
?>