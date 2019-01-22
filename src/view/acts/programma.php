<main>
  <section class="filter">
    <form action="index.php" class="filter__form">
        <div class="switch-field-datum">
          <div class="hidden">Datum</div>
          <input type="radio" id="vrijdag" name="datum" value="24/08" checked/>
          <label for="vrijdag">24/08</label>
          <input type="radio" id="zaterdag" name="datum" value="25/08" />
          <label for="zaterdag">25/08</label>
          <input type="radio" id="zondag" name="datum" value="26/08" />
          <label for="zondag">26/08</label>
        </div>

        <div class="switch-field">
          <div class="hidden">Soort</div>
          <input type="radio" id="alles" name="soort" value="Alle" checked/>
          <label for="alles">alle</label>
          <input type="radio" id="voorstelling" name="soort" value="Voorstelling"/>
          <label for="voorstelling">Voorstelling</label>
          <input type="radio" id="straatact" name="soort" value="Straatact" />
          <label for="straatact">Straatact</label>
        </div>

         <div class="switch-field">
          <div class="hidden">Locatie</div>
          <input type="radio" id="alles2" name="locatie" value="Alle" checked/>
          <label for="alles2">alle</label>
          <input type="radio" id="locatie1" name="locatie" value="Oude Atletiekplein"/>
          <label for="locatie1">Oude Atletiekplein</label>
          <input type="radio" id="locatie2" name="locatie" value="Speelplein KA/BS De Bever" />
          <label for="locatie2">Speelplein KA/BS De Bever</label>
        </div>
    </form>
  </section>
  <section class="acts">
    <h2 class="hidden">Voorstellingen & Straatacts</h2>
    <ul class="acts__list">
      <!-- php acts -->

    </ul>
  </section>
  <div class="acts__download">
    <a class="acts__link" href="assets/img/home/headerfoto_s.png" download>Programma downloaden</a>
    <a href="assets/img/home/headerfoto_s.png" download><img src="assets/img/pijl.png" alt="pijltje naar rechts"></a>
  </div>

</main>
