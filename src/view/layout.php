<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="assets/img/driehoek.png">
    <title>ISB</title>
    <script>
      WebFontConfig = {
        custom: {
          families: ["Avenir", "Gill sans"],
          urls: ["assets/fonts/fonts.css"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src = "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>

    <?php echo $css;?>

  </head>
  <body>
    <header class="site-header">
      <h1 class="site-header__titel">Internationaal Straattheaterfestival Beveren</h1>
      <div class="site-header__top">
        <div class="site-header__date">
          <p class="site-header__dateN">24-25-26</p>
          <p class="site-header__dateM">augustus</p>
          <p class="site-header__dateY">2018</p>
        </div>
        <p><a href="index.php?page=index" class="site-header__titelAfkort">ISB</a></p>
      </div>

      <nav>
        <ul class="site-header__menu">
          <li class="site-header__home"><a href="index.php?page=index" class="site-header__menutekst<?php if($currentPage == 'home') echo '-actief';?>" <?php if($currentPage == 'home') echo 'aria-describedby="current"';?>><q lang="en">Home</q></a></li>
          <li class="site-header__programma"><a href="index.php?page=programma" class="site-header__menutekst<?php if($currentPage == 'programma') echo '-actief';?>" <?php if($currentPage == 'programma') echo 'aria-describedby="current"';?>>Programma</a></li>
          <li class="site-header__praktisch"><a href="index.php?page=index" class="site-header__menutekst">Praktisch</a></li>
          <li class="site-header__faq"><a href="index.php?page=index" class="site-header__menutekst"><q lang="en">FAQ</q></a></li>
        </ul>
        <div hidden id="current"><q lang="en">Current page</q></div>
      </nav>
      <?php
      if(!empty($_SESSION['error'])) {
        echo '<div class="errorBalk">' . $_SESSION['error'] . '</div>';
      }
      if(!empty($_SESSION['info'])) {
        echo '<div class="infoBalk">' . $_SESSION['info'] . '</div>';
      }
      ?>
    </header>
    <main id="main">
      <?php echo $content ?>
    </main>
    <footer>
      <section class="partners">
        <h2 class="visually-hidden">Partners</h2>
        <!-- <a href=""></a> -->
        <picture class="partners__horeca">
          <source
            type="image/webp"
            srcset="
              assets/img/home/horeca_s.webp  55w,
              assets/img/home/horeca_m.webp  48w,
              assets/img/home/horeca_l.webp  95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <source
            type="jpg"
            srcset="
              assets/img/home/horeca_s.jpg   55w,
              assets/img/home/horeca_m.jpg   48w,
              assets/img/home/horeca_l.jpg   95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <img
            src="assets/img/home/horeca_l.jpg "
            width= "100%"
            alt="Een zwart wit foto van het logo van de parnter horeca."
          />
        </picture>
        <picture class="partners__warande">
          <source
            type="image/webp"
            srcset="
              assets/img/home/warande_s.webp  55w,
              assets/img/home/warande_m.webp  48w,
              assets/img/home/warande_l.webp  95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <source
            type="jpg"
            srcset="
              assets/img/home/warande_s.jpg   55w,
              assets/img/home/warande_m.jpg   48w,
              assets/img/home/warande_l.jpg   95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <img
            src="assets/img/home/warande_l.jpg "
            width= "100%"
            alt="Een zwart wit foto van het logo van de parnter warande."
          />
        </picture>
        <picture class="partners__winkel">
          <source
            type="image/webp"
            srcset="
              assets/img/home/winkeldorp_s.webp  55w,
              assets/img/home/winkeldorp_m.webp  48w,
              assets/img/home/winkeldorp_l.webp  95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <source
            type="jpg"
            srcset="
              assets/img/home/winkeldorp_s.jpg   55w,
              assets/img/home/winkeldorp_m.jpg   48w,
              assets/img/home/winkeldorp_l.jpg   95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <img
            src="assets/img/home/winkeldorp_l.jpg "
            width= "100%"
            alt="Een zwart wit foto van het logo van de parnter winkeldorp."
          />
        </picture>
        <picture class="partners__feesten">
          <source
            type="image/webp"
            srcset="
              assets/img/home/feesten_s.webp  55w,
              assets/img/home/feesten_m.webp  48w,
              assets/img/home/feesten_l.webp  95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <source
            type="jpg"
            srcset="
              assets/img/home/feesten_s.jpg   55w,
              assets/img/home/feesten_m.jpg   48w,
              assets/img/home/feesten_l.jpg   95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <img
            src="assets/img/home/feesten_l.jpg "
            width= "100%"
            alt="Een zwart wit foto van het logo van de parnter feesten."
          />
        </picture>
        <picture class="partners__about">
          <source
            type="image/webp"
            srcset="
              assets/img/home/about_s.webp  55w,
              assets/img/home/about_m.webp  48w,
              assets/img/home/about_l.webp  95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <source
            type="jpg"
            srcset="
              assets/img/home/about_s.jpg   55w,
              assets/img/home/about_m.jpg   48w,
              assets/img/home/about_l.jpg   95w
            "
            sizes="
                   (min-width: 768px) 10vw,
                   (min-width: 0) 7vw"
          />
          <img
            src="assets/img/home/about_l.jpg "
            width= "100%"
            alt="Een zwart wit foto van het logo van de parnter about."
          />
        </picture>
      </section>
      <section class="info">
        <article class="info__contact">
          <h3 class="info__contact__titel">Contact</h3>
          <p class="info__contact__numr">03 750 16 29</p>
          <p class="info__contact__email">erik.apers@beveren.be</p>
        </article>
        <article class="info__events">
          <h3 class="info__events__titel">Meer events</h3>
          <p class="info__events__tekst">Spiegelbeeld</p>
          <p class="info__events__tekst">Gekkefietsencircuit</p>
          <a href="index.php?page=index" class="info__events__link">Alle events <img src="assets/img/pijl.png" alt="pijltje naar rechts"></a>
        </article>
        <article class="info__volgen">
          <h3 class="info__volgen__titel">Volg ons</h3>
          <img src="assets/img/fb.png" alt="Facebook logo">
          <img src="assets/img/insta.png" alt="Instagram logo">
          <img src="assets/img/twitter.png" alt="Twitter logo">
        </article>
      </section>
      <section class="copyright">
        <p class="copyrights">©internationaal Straattheaterfestival Beveren</p>
        <p class="copyrights"><q lang="en">Cookie policy</q></p>
        <p class="copyrights"><q lang="en">Privacy policy</q></p>
        <p class="copyrights">Algemene voorwaarden</p>
      </section>
      <p class="copyrightEva">©Eva Denys</p>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
