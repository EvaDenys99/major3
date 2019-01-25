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

        <div class="switch-field">
          <div class="hidden">Soort</div>
          <input type="radio" id="alles" name="soort" value="" checked>
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
            <label for="alles2">alle</label>
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
            <label for="alles2">alle</label>
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
        <span class="filter__form-submit"><input type="submit" value="Filter" class="filter__form__submit"></span>

    </form>
  </section>
  <section class="acts">
    <?php if (empty($activiteiten)): ?>
        <p>Geen straatacts voor deze plaats op dit moment.</p>
    <?php else: ?>
      <ul class="acts__list">
        <!-- php acts -->
        <?php foreach($activiteiten as $act): ?>
          <a class="act__detail-link" href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>">
            <li class='act'>
              <span class='act__info'>
                <span class='act__uren'><?php echo $act["beginuur"];?></span>
                <span class='act__titel'><?php echo $act["titel"];?></span>
              </span>
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
            </li>
          </a>
        <?php endforeach; ?>
      </ul>
    <?php endif;?>
  </section>
  <div class="acts__download">
    <a class="acts__link" href="assets/img/programma.pdf" download>Programma downloaden</a>
    <a href="assets/img/programma.pdf" download><img src="assets/img/pijl.png" alt="pijltje naar rechts"></a>
  </div>

</main>
