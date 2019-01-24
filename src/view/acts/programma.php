<main>
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

        <!-- <div class="switch-field">
          <div class="hidden">Soort</div>
          <input type="radio" id="alles" name="soort" value="Alle" checked/>
          <label for="alles">alle</label>
          <input type="radio" id="voorstelling" name="soort" value="Voorstelling"/>
          <label for="voorstelling">Voorstelling</label>
          <input type="radio" id="straatact" name="soort" value="Straatact" />
          <label for="straatact">Straatact</label>
        </div> -->

        <input type="submit" value="Filter" class="form__submit input input--button">
         <!-- <div class="switch-field">
          <div class="hidden">Locatie</div>
          <input type="radio" id="alles2" name="locatie" value="Alle" checked/>
          <label for="alles2">alle</label>
          <input type="radio" id="locatie1" name="locatie" value="Oude Atletiekplein"/>
          <label for="locatie1">Oude Atletiekplein</label>
          <input type="radio" id="locatie2" name="locatie" value="Speelplein KA/BS De Bever" />
          <label for="locatie2">Speelplein KA/BS De Bever</label>
        </div> -->
    </form>
  </section>
  <section class="acts">
    <h2 class="hidden">Voorstellingen & Straatacts</h2>
    <ul class="acts__list">
      <!-- php acts -->
      <?php foreach($activiteiten as $act){ ?>
        <li class='act'>
            <!-- <img src="" alt="Profile picture <?php echo $act["titel"];?>" class="act__pic"> -->
            <span class='act__uren'><?php echo $act["beginuur"];?></span>
            <span class='act__titel'><?php echo $act["titel"];?></span>
        </li>
      <?php } ?>
    </ul>
  </section>
  <div class="acts__download">
    <a class="acts__link" href="assets/img/programma.pdf" download>Programma downloaden</a>
    <a href="assets/img/programma.pdf" download><img src="assets/img/pijl.png" alt="pijltje naar rechts"></a>
  </div>

</main>
