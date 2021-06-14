<?php
  $footer_copyright_year = date('Y');
  
  require_once(get_localized_path(__FILE__));
?>

<!-- 
  
  FOOTER
  
  -->
<div class="spacer"></div>
<div class="box footer">
  <!-- CONTACT -->
  <div class="grid">
    <!-- GITHUB -->
    <div class="column">
      <a class="github" href="https://github.com/MarioMatschgi" target="_blank"><i class="fab">&#xf09b;</i></a>
    </div>
    <!-- DISCORD -->
    <div class="column">
      <a class="discord" href="https://discordapp.com/users/294161179130068992" target="_blank"><i class=" fab">&#xf392;</i></a>
    </div>
    <!-- STACKOVERFLOW -->
    <div class="column">
      <a class="stackoverflow" href="https://stackoverflow.com/users/14065298/mario-elsnig?tab=profile" target="_blank"><i class="fab">&#xf16c;</i></a>
    </div>
    <!-- EMAIL -->
    <div class="column">
      <a class="email" href="mailto:mario.elsnig@gmail.com" target="_blank"><i class="fas">&#xf0e0;</i></a>
    </div>
    <!-- REDDIT -->
    <div class="column">
      <a class="reddit" href="https://www.reddit.com/r/Programario" target="_blank"><i class="fab">&#xf1a1;</i></a>
    </div>
    <!-- TWITTER -->
    <div class="column">
      <a class="twitter" href="https://twitter.com/Mario_Matschgi" target="_blank"><i class="fab">&#xf099;</i></a>
    </div>
  </div>
  <!-- COPYRIGHT -->
  <p class="copyright">
    <?php echo($footer_copyright) ?>
  </p>
</div>

</body>

</html>