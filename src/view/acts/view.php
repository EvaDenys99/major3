<section class="act__detail">
  <?php $referer = filter_var($_SERVER['HTTP_REFERER'], FILTER_VALIDATE_URL);
    if (!empty($referer)) {
      echo '<a class="detail__back" href="'. $referer .'">
              <img class="detail__back-pijl" src="assets/img/back.png" alt="Terug naar overzicht.">
              <img class="detail__back-pijl2" src="assets/img/pijl.png" width="12px" height="9px" alt="Een pijl gericht naar links">
              <p class="detail__back-tekst">Terug naar overzicht.</p>
            </a>';
    }else {
      echo '<a class="detail__back" href="javascript:history.go(-1)">
              <img class="detail__back-pijl" src="assets/img/back.png" alt="Terug naar overzicht.">
              <img class="detail__back-pijl2" src="assets/img/pijl.png" width="12px" height="9px" alt="Een pijl gericht naar links">
              <p class="detail__back-tekst">Terug naar overzicht.</p>
            </a>';

    }
  ?>
  <h2 class="act__detail-titel"><span class="act__detail-titel-stukjes"><?php echo $act["titel"];?></span></h2>

  <picture class="act__detail-image">
    <source
      type="image/webp"
      srcset="<?php echo $act["img"];?>s.webp  306w,
              <?php echo $act["img"];?>m.webp  343w,
              <?php echo $act["img"];?>l.webp  404w"
      sizes="(min-width: 1024px) 70vw,
             (min-width: 768px) 50vw,
             (min-width: 0) 100vw"
      />
    <source
      type="jpg"
      srcset="<?php echo $act["img"];?>s.jpg   306w,
              <?php echo $act["img"];?>m.jpg   343w,
              <?php echo $act["img"];?>l.jpg   404w"
      sizes="(min-width: 1024px) 70vw,
             (min-width: 768px) 50vw,
             (min-width: 0) 100vw"
      />
      <img
          width="100%"
          class="act__detail-image-border"
           src="<?php echo $act["img"];?>l.jpg "
           alt="Profile picture <?php echo $act["titel"];?>"
      />
  </picture>
  <img class="act__detail-driehoek" src="assets/img/driehoek.png" alt="Een roze driehoek als decoratie." width="500px" height="500px">
  <p class="act__detail-dagen"><?php echo $act["dagen"];?></p>
  <div class="act__detail-uren">
    <p class="act__detail-info-titel">Beginuur</p>
    <p class="act__detail-uur"><?php echo $act["beginuur"];?></p>
  </div>
  <div class="act__detail-duur">
    <p class="act__detail-info-titel">Duur</p>
    <p><?php echo $act["duur"];?></p>
  </div>
  <div class="act__detail-soort">
    <p class="act__detail-info-titel">Soort</p>
    <p><?php echo $act["soort"];?></p>
  </div>
  <div class="act__detail-herkomst">
    <p class="act__detail-info-titel">Herkomst</p>
    <p><?php echo $act["herkomst"];?></p>
  </div>
  <div class="act__detail-website">
    <p class="act__detail-info-titel">Website</p>
    <a href="https://<?php echo $act['website'];?>"><?php echo $act["website"];?></a>
  </div>
  <div class="act__detail-beschrijving">
    <p class="act__detail-info-titel">Beschrijving</p>
    <p><?php echo $act["beschrijving"];?></p>
  </div>
  <div class="act__detail-locatie">
    <p class="act__detail-info-titel">Locatie</p>
    <p><?php echo $act["locatie"];?></p>
  </div>
  <p class="act__detail-locatie-img"><?php echo $act["kaart_img"];?></p>
</section>
