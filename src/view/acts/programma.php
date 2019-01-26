<main>
  <h2 class="hidden">Voorstellingen & Straatacts</h2>
  <section class="filter">
    <form action="index.php" class="filter__form">
    <input type="hidden" name="page" value="programma" />
    <input type="hidden" name="action" value="filter" />
        <div class="switch-field-datum">
          <div class="hidden">Datum</div>
          <input type="radio" id="vrijdag" name="dag" value="1"
          <?php if($currentDay == 1){
            echo 'checked';
          } ?>
          />
          <label for="vrijdag">24/08</label>
          <input type="radio" id="zaterdag" name="dag" value="2"
          <?php if($currentDay == 2){
            echo 'checked';
          } ?> />
          <label for="zaterdag">25/08</label>
          <input type="radio" id="zondag" name="dag" value="3"
          <?php if($currentDay == 3){
            echo 'checked';
          } ?> />
          <label for="zondag">26/08</label>
        </div>

        <div class="filter__div">
          <div class="switch-field">
            <div class="hidden">Soort</div>
            <input type="radio" id="alles" name="soort" value="" checked />
            <label for="alles">alle</label>
            <input type="radio" id="voorstelling" name="soort" value="Voorstelling"
            <?php if($currentSoort == 'Voorstelling'){
              echo 'checked';
            } ?> />
            <label for="voorstelling">Voorstelling</label>
            <input type="radio" id="straatact" name="soort" value="Straatact"
            <?php if($currentSoort == 'Straatact'){
              echo 'checked';
            } ?> />
            <label for="straatact">Straatact</label>
          </div>

          <?php if($currentSoort == 'Straatact'){ ?>
            <div class="switch-field field-act">
              <div class="hidden">Locatie</div>
              <input type="radio" id="alles2" name="locatie" value="" checked/>
              <label for="alles2">Alle</label>
              <input type="radio" id="locatie1" name="locatie" value="4"
              <?php if($currentLocatie == 4){
                echo 'checked';
              } ?> />
              <label for="locatie1">Yzerhand</label>
              <input type="radio" id="locatie2" name="locatie" value="5"
              <?php if($currentLocatie == 5){
                echo 'checked';
              } ?> />
              <label for="locatie2">Vrasenestraat</label>
              <input type="radio" id="locatie3" name="locatie" value="6"
              <?php if($currentLocatie == 6){
                echo 'checked';
              } ?> />
              <label for="locatie3">Warande</label>
              <input type="radio" id="locatie4" name="locatie" value="7"
              <?php if($currentLocatie == 7){
                echo 'checked';
              } ?> />
              <label for="locatie4">Grote markt</label>
              <input type="radio" id="locatie5" name="locatie" value="8"
              <?php if($currentLocatie == 8){
                echo 'checked';
              } ?> />
              <label for="locatie5">Donkvijverstraat</label>
              <input type="radio" id="locatie6" name="locatie" value="9"
              <?php if($currentLocatie == 9){
                echo 'checked';
              } ?> />
              <label for="locatie6">Diederik Van Beverenlaan</label>
              <input type="radio" id="locatie7" name="locatie" value="10"
              <?php if($currentLocatie == 10){
                echo 'checked';
              } ?> />
              <label for="locatie7">Mobiel</label>
            </div>
          <?php }else{ ?>
            <div class="switch-field">
              <div class="hidden">Locatie</div>
              <input type="radio" id="alles2" name="locatie" value="" checked/>
              <label for="alles2">Alle</label>
              <input type="radio" id="locatie1" name="locatie" value="2"
              <?php if($currentLocatie == 2){
                echo 'checked';
              } ?> />
              <label for="locatie1">Oude Atletiekplein</label>
              <input type="radio" id="locatie2" name="locatie" value="1"
              <?php if($currentLocatie == 1){
                echo 'checked';
              } ?> />
              <label for="locatie2">Speelplein KA/BS De Bever</label>
            </div>
          <?php } ?>
        </div>
        <span class="filter__form-submit"><input type="submit" value="Filter" class="filter__form__submit"></span>
    </form>
  </section>

  <div class="acts">
    <section>
      <?php if (empty($activiteiten)): ?>
          <p>Geen straatacts voor deze plaats op dit moment.</p>
      <?php else: ?>
        <div class="acts__list">
          <!-- php acts -->
          <?php foreach($activiteiten as $act): ?>
          <section class='act'>
            <a class="act__detail-link" href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>">
              <picture>
                    <source
                      type="image/webp"
                      srcset="<?php echo $act["img"];?>s.webp  306w,
                              <?php echo $act["img"];?>m.webp  343w,
                              <?php echo $act["img"];?>l.webp  404w"
                      sizes="(min-width: 1024px) 10w,
                            (min-width: 768px) 10w,
                            (min-width: 0) 95w"
                    />
                    <source
                      type="jpg"
                      srcset="
                            <?php echo $act["img"];?>s.jpg   306w,
                            <?php echo $act["img"];?>m.jpg   343w,
                            <?php echo $act["img"];?>l.jpg   404w
                          "
                      sizes="(min-width: 1024px) 10w,
                                (min-width: 768px) 10w,
                                (min-width: 0) 100w"
                    />
                    <img class="act__image"
                          width= "100%"
                          src="<?php echo $act["img"];?>l.jpg "
                          alt="Profile picture <?php echo $act["titel"];?>"
                    />
                  </picture>
                <div class="overlay"></div>
                <div class='act__info'>
                  <span class="act__uren2">
                    <span class='act__uren'><?php echo $act["beginuur"];?></span>
                  </span>
                  <span class="act__titel2">
                    <span class='act__titel'><?php echo $act["titel"];?></span>
                  </span>
                </div>
            </a>
          </section>
          <?php endforeach; ?>
        </div>
      <?php endif;?>
    </section>

    <section class="ook">
        <h2 class="ook__titel">Uitgelichte van deze editie</h2>
        <div class="ook__info">
          <a href="index.php?page=detail&amp;id=8" class="uitgelicht__tile-link">
            <div class='uitgelicht__tekst'>
              <span class="uitgelicht__soort">
                <span class='uitgelicht__soort-titel'>Straatact</span>
              </span>
              <p class='uitgelicht__titel-tekst'>Close-act Theatre (NL) – i-Puppets</p>
            </div>
            <picture>
              <source
                type="image/webp"
                srcset="
                  assets/img/activiteiten/theatre_home_m.webp  313w,
                  assets/img/activiteiten/theatre_home_l.webp  621w
                "
                sizes="(min-width: 1024px) 30vw,
                      (min-width: 768px) 45vw,
                      (min-width: 0) 97vw"
              />
              <source
                type="jpg"
                srcset="
                  assets/img/activiteiten/theatre_home_m.jpg   313w,
                  assets/img/activiteiten/theatre_home_l.jpg   621w
                "
                sizes="(min-width: 1024px) 30vw,
                      (min-width: 768px) 45vw,
                      (min-width: 0) 97vw"
              />
              <img
                src="assets/img/activiteiten/theatre_home_l.jpg "
                width= "100%"
                class="uitgelicht__tile-theatre"
                alt="Een kaart met een route aangeduid in het roze."
              />
            </picture>

          </a>
          <a href="index.php?page=detail&amp;id=50" class="uitgelicht__tile-link2">
            <div class='uitgelicht__tekst2'>
              <span class="uitgelicht__soort">
                <span class='uitgelicht__soort-titel'>Straatact</span>
              </span>
              <p class='uitgelicht__titel-tekst'>Medusa’s World (NL) – Princesse de la pinq </p>
            </div>
            <picture>
                <source
                  type="image/webp"
                  srcset="
                    assets/img/activiteiten/medusa_home_m.webp  313w,
                    assets/img/activiteiten/medusa_home_l.webp  418w
                  "
                  sizes="(min-width: 1024px) 30vw,
                        (min-width: 768px) 45vw,
                        (min-width: 0) 97vw"
                />
                <source
                  type="jpg"
                  srcset="
                    assets/img/activiteiten/medusa_home_m.jpg   313w,
                    assets/img/activiteiten/medusa_home_l.jpg   418w
                  "
                  sizes="(min-width: 1024px) 30vw,
                        (min-width: 768px) 45vw,
                        (min-width: 0) 97vw"
                />
                <img
                  src="assets/img/activiteiten/medusa_home_l.jpg "
                  width= "100%"
                  class="uitgelicht__tile-medusa"
                  alt="Een kaart met een route aangeduid in het roze."
                />
            </picture>
          </a>
          <a href="index.php?page=detail&amp;id=21" class="uitgelicht__tile-link3">
            <div class='uitgelicht__tekst2'>
              <span class="uitgelicht__soort">
                <span class='uitgelicht__soort-titel'>Voorstelling</span>
              </span>
              <p class='uitgelicht__titel-tekst'>Cie Krak (B) – Viva Victor</p>
            </div>
            <picture>
              <source
                type="image/webp"
                srcset="assets/img/activiteiten/krak_home_l.webp  621w"
                sizes="(min-width: 1024px) 30vw,
                      (min-width: 768px) 45vw"
              />
              <source
                type="jpg"
                srcset="assets/img/activiteiten/krak_home_l.jpg   621w"
                sizes="(min-width: 1024px) 30vw,
                      (min-width: 768px) 45vw"
              />
              <img
                src="assets/img/activiteiten/krak_home_l.jpg "
                width= "100%"
                class="uitgelicht__tile-krak"
                alt="Een kaart met een route aangeduid in het roze."
              />
            </picture>
          </a>
        </div>
    </section>

    <div class="acts__download">
      <a class="acts__link" href="assets/img/programma.pdf" download>Programma downloaden</a>
      <a href="assets/img/programma.pdf" download><img src="assets/img/pijl.png" alt="pijltje naar rechts"></a>
    </div>
  </div>
</main>
