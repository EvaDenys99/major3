<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISB</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
     <h1>Internationaal Straattheaterfestival Beveren</h1>
     <nav>
      <ul>
        <li><a href="index.php?page=index" class="menutekst<?php if($currentPage == 'home') echo '-actief';?>">Home</a></li>
        <li><a href="index.php?page=programma" class="menutekst<?php if($currentPage == 'programma') echo '-actief';?>">Programma</a></li>
        <li><a href="index.php?page=index" >Praktisch</a></li>
        <li><a href="index.php?page=index" >FAQ</a></li>
       </ul>
     </nav>
    <?php
    if(!empty($_SESSION['error'])) {
      echo '<div class="errorBalk">' . $_SESSION['error'] . '</div>';
    }
    if(!empty($_SESSION['info'])) {
      echo '<div class="infoBalk">' . $_SESSION['info'] . '</div>';
    }
    ?>

    <?php echo $content ?>
  </body>
</html>
