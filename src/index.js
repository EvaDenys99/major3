require('./style.css');

{
  const $filterForm = document.querySelector(`.filter__form`),
    $acts = document.querySelector(`.acts__list`);

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
    return ` <a class="act__detail-link" href="index.php?page=detail&amp;id=${
      act['id']
    }">
        <li class='act'>
          <span class='act__info'>
            <span class='act__uren'>${act['beginuur']}</span>
            <span class='act__titel'>${act['titel']}</span>
          </span>
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
              srcset="${act['img']}s.jpg   306w,
                      ${act['img']}m.jpg   343w,
                      ${act['img']}l.jpg   404w"
              sizes="(min-width: 1024px) 10w,
                        (min-width: 768px) 10w,
                        (min-width: 0) 100w"
            />
            <img class="act__image"
                  width= "100%"
                  src="${act['img']}l.jpg "
                  alt="Profile picture ${act['titel']}"
            />
          s</picture>
        </li>
      </a>`;
  };

  const handleClickFilterForm = e => {
    console.log('submit');
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
