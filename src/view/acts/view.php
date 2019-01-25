<section>
  <a href="index.php?page=programma">
    <img class="detail__back" src="assets/img/back.png" alt="Terug naar overzicht.">
  </a>
  <picture>
    <source
      type="image/webp"
      srcset="<?php echo $act["img"];?>s.webp  306w,
              <?php echo $act["img"];?>m.webp  343w,
              <?php echo $act["img"];?>l.webp  404w"
      sizes="(min-width: 1024px) 10w,
             (min-width: 768px) 10w,
             (min-width: 0) 10w"
      />
    <source
      type="jpg"
      srcset="<?php echo $act["img"];?>s.jpg   306w,
              <?php echo $act["img"];?>m.jpg   343w,
              <?php echo $act["img"];?>l.jpg   404w"
      sizes="(min-width: 1024px) 10w,
             (min-width: 768px) 10w,
             (min-width: 0) 10w"
      />
      <img class="act__image__detail"
           width= "100%"
           src="<?php echo $act["img"];?>l.jpg "
           alt="Profile picture <?php echo $act["titel"];?>"
      />
  </picture>
  <p><?php echo $act["titel"];?></p>
  <p><?php echo $act["beginuur"];?></p>
  <p><?php echo $act["duur"];?></p>
  <p><?php echo $act["soort"];?></p>
  <p><?php echo $act["herkomst"];?></p>
  <p><?php echo $act["website"];?></p>
  <p><?php echo $act["beschrijving"];?></p>
  <p><?php echo $act["dagen"];?></p>
  <p><?php echo $act["locatie"];?></p>
  <p><?php echo $act["kaart_img"];?></p>
</section>
