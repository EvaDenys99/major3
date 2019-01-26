require('./style.css');

{
  const $filterForm = document.querySelector(`.filter__form`),
    $acts = document.querySelector(`.acts__list`);
  const $filter_div = document.querySelector(`.filter__div`);

  const init = () => {
    // return;
    if ($filterForm) {
      $filterForm.addEventListener(`submit`, e => {
        e.target.preventDefault();
      });
      $filterForm.addEventListener(`click`, handleClickFilterForm);
    }
  };

  const handleLoadActs = data => {
    $acts.innerHTML = data.map(act => createActListItem(act)).join(``);
  };

  const createActListItem = act => {
    return ` <section class='act'>
      <a class="act__detail-link" href="index.php?page=detail&amp;id=${
  act['id']
}">
        <picture>
              <source
                type="image/webp"
                srcset="${act['img']}s.webp  306w,
                        ${act['img']}m.webp  343w,
                        ${act['img']}l.webp  404w"
                sizes="(min-width: 1024px) 10w,
                      (min-width: 768px) 10w,
                      (min-width: 0) 95w"
              />
              <source
                type="jpg"
                srcset="
                      ${act['img']}s.jpg   306w,
                      ${act['img']}m.jpg   343w,
                      ${act['img']}l.jpg   404w
                    "
                sizes="(min-width: 1024px) 10w,
                          (min-width: 768px) 10w,
                          (min-width: 0) 100w"
              />
              <img class="act__image"
                    width= "100%"
                    src="${act['img']}l.jpg "
                    alt="Profile picture ${act['titel']}"
              />
            </picture>
          <div class="overlay"></div>
          <div class='act__info'>
            <span class="act__uren2">
              <span class='act__uren'>${act['beginuur']}</span>
            </span>
            <span class="act__titel2">
              <span class='act__titel'>${act['titel']}</span>
            </span>
          </div>
      </a>
    </section>`;
  };

  const handleClickFilterForm = e => {
    console.log(e);
    if (e.toElement.innerHTML === 'Straatact') {
      $filter_div.innerHTML = `
              <div class="switch-field">
                <div class="hidden">Soort</div>
                <input type="radio" id="alles" name="soort" value="" checked>
                <label for="alles">alle</label>
                <input type="radio" id="voorstelling" name="soort" value="Voorstelling"/>
                <label for="voorstelling">Voorstelling</label>
                <input type="radio" id="straatact" name="soort" value="Straatact" checked/>
                <label for="straatact">Straatact</label>
              </div>
              <div class="switch-field field-act">
                <div class="hidden">Locatie</div>
                <input type="radio" id="alles2" name="locatie" value="" checked/>
                <label for="alles2">Alle</label>
                <input type="radio" id="locatie1" name="locatie" value="4"
                <?php if($currentLocatie == 4){
                  echo 'checked';
                } ?>
                <label for="locatie1">Yzerhand</label>
                <input type="radio" id="locatie2" name="locatie" value="5"
                <?php if($currentLocatie == 5){
                  echo 'checked';
                } ?>
                <label for="locatie2">Vrasenestraat</label>
                <input type="radio" id="locatie3" name="locatie" value="6"
                <?php if($currentLocatie == 6){
                  echo 'checked';
                } ?>
                <label for="locatie3">Warande</label>
                <input type="radio" id="locatie4" name="locatie" value="7"
                <?php if($currentLocatie == 7){
                  echo 'checked';
                } ?>
                <label for="locatie4">Grote markt</label>
                <input type="radio" id="locatie5" name="locatie" value="8"
                <?php if($currentLocatie == 8){
                  echo 'checked';
                } ?>
                <label for="locatie5">Donkvijverstraat</label>
                <input type="radio" id="locatie6" name="locatie" value="9"
                <?php if($currentLocatie == 9){
                  echo 'checked';
                } ?>
                <label for="locatie6">Diederik Van Beverenlaan</label>
                <input type="radio" id="locatie7" name="locatie" value="10"
                <?php if($currentLocatie == 10){
                  echo 'checked';
                } ?>
                <label for="locatie7">Mobiel</label>
              </div>`;
    }

    if (e.toElement.innerHTML === 'Voorstelling') {
      $filter_div.innerHTML = `
              <div class="switch-field">
                <div class="hidden">Soort</div>
                <input type="radio" id="alles" name="soort" class="alle" value="" checked />
                <label for="alles">alle</label>
                <input type="radio" id="voorstelling" name="soort" value="Voorstelling" checked />
                <label for="voorstelling">Voorstelling</label>
                <input type="radio" id="straatact" name="soort" value="Straatact" />
                <label for="straatact">Straatact</label>
              </div>
              <?php if($currentSoort == 'Voorstelling'){ ?>
                <div class="switch-field">
                <div class="hidden">Locatie</div>
                <input type="radio" id="alles2" name="locatie" value="" checked/>
                <label for="alles2">Alle</label>
                <input type="radio" id="locatie1" name="locatie" value="2"
                <?php if($currentLocatie == 2){
                  echo 'checked';
                } ?>
                <label for="locatie1">Oude Atletiekplein</label>
                <input type="radio" id="locatie2" name="locatie" value="1"
                <?php if($currentLocatie == 1){
                  echo 'checked';
                } ?>
                <label for="locatie2">Speelplein KA/BS De Bever</label>
              </div>`;
    }
    if (e.toElement.innerHTML === 'alle') {
      $filter_div.innerHTML = `
                  <div class="switch-field">
                    <div class="hidden">Soort</div>
                    <input type="radio" id="alles" name="soort" class="alle" value="" checked />
                    <label for="alles">alle</label>
                    <input type="radio" id="voorstelling" name="soort" value="Voorstelling"/>
                    <label for="voorstelling">Voorstelling</label>
                    <input type="radio" id="straatact" name="soort" value="Straatact" />
                    <label for="straatact">Straatact</label>
                  </div>
                  <?php if($currentSoort == 'Voorstelling'){ ?>
                    <div class="switch-field">
                    <div class="hidden">Locatie</div>
                    <input type="radio" id="alles2" name="locatie" value="" checked/>
                    <label for="alles2">Alle</label>
                    <input type="radio" id="locatie1" name="locatie" value="2"
                    <?php if($currentLocatie == 2){
                      echo 'checked';
                    } ?>
                    <label for="locatie1">Oude Atletiekplein</label>
                    <input type="radio" id="locatie2" name="locatie" value="1"
                    <?php if($currentLocatie == 1){
                      echo 'checked';
                    } ?>
                    <label for="locatie2">Speelplein KA/BS De Bever</label>
                  </div>`;
    }

    // werkt
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      // .then(r => r.text())
      // .then(text => console.log(text));
      .then(r => r.json())
      .then(data => handleLoadActs(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`
    );
  };

  init();
}
