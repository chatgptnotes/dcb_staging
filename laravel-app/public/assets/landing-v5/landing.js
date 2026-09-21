(() => {
  const menu = document.querySelector('[data-menu-toggle]');
  const navigation = document.getElementById('landing-navigation');
  const closeMenu = () => {
    navigation.classList.remove('open');
    menu.setAttribute('aria-expanded', 'false');
  };
  menu.addEventListener('click', () => {
    const open = navigation.classList.toggle('open');
    menu.setAttribute('aria-expanded', String(open));
  });
  navigation.addEventListener('click', event => {
    if (event.target.closest('a')) closeMenu();
  });
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeMenu();
  });

  // Informational material stays on the landing page; account and purchase links
  // use the existing server routes and never enter the prototype's mock flows.
  let opener;
  const syncDialog = () => {
    const target = document.getElementById(location.hash.slice(1));
    document.querySelectorAll('.info-dialog[open]').forEach(dialog => {
      if (dialog !== target) dialog.close();
    });
    if (target?.matches('.info-dialog') && !target.open) target.showModal();
  };
  document.querySelectorAll('[data-info-dialog]').forEach(link => {
    link.addEventListener('click', () => {
      opener = link;
      if (location.hash === link.hash) syncDialog();
    });
  });
  document.querySelectorAll('.info-dialog').forEach(dialog => {
    const close = () => {
      dialog.close();
      if (location.hash === '#' + dialog.id) {
        history.replaceState(null, '', location.pathname + location.search);
      }
      opener?.focus({preventScroll: true});
    };
    dialog.querySelector('[data-close-dialog]').addEventListener('click', close);
    dialog.addEventListener('cancel', event => { event.preventDefault(); close(); });
    dialog.addEventListener('click', event => { if (event.target === dialog) close(); });
  });
  window.addEventListener('hashchange', syncDialog);
  syncDialog();

  const hero = document.querySelector('.hero');
  if (!hero) return;
  const slides = [...hero.querySelectorAll('.slide')];
  const dots = document.getElementById('heroDots');
  const pause = hero.querySelector('.hero-pause');
  const reducedMotion = matchMedia('(prefers-reduced-motion: reduce)');
  let index = 0;
  let paused = reducedMotion.matches;
  let timer;
  const show = value => {
    index = (value + slides.length) % slides.length;
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
      slide.inert = i !== index;
      slide.setAttribute('aria-hidden', String(i !== index));
    });
    [...dots.children].forEach((dot, i) => {
      dot.classList.toggle('on', i === index);
      dot.setAttribute('aria-pressed', String(i === index));
    });
  };
  const stop = () => clearInterval(timer);
  const start = () => {
    stop();
    if (!paused && !document.hidden && !hero.matches(':hover, :focus-within')) {
      timer = setInterval(() => show(index + 1), 7000);
    }
  };
  slides.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.type = 'button';
    dot.setAttribute('aria-label', 'Show banner ' + (i + 1));
    dot.addEventListener('click', () => { show(i); start(); });
    dots.append(dot);
  });
  hero.querySelector('[data-slide-prev]').addEventListener('click', () => show(index - 1));
  hero.querySelector('[data-slide-next]').addEventListener('click', () => show(index + 1));
  const updatePause = () => {
    pause.textContent = paused ? 'Play banners' : 'Pause banners';
    pause.setAttribute('aria-pressed', String(paused));
    start();
  };
  pause.addEventListener('click', () => { paused = !paused; updatePause(); });
  reducedMotion.addEventListener('change', () => { paused = reducedMotion.matches; updatePause(); });
  hero.addEventListener('mouseenter', stop);
  hero.addEventListener('mouseleave', start);
  hero.addEventListener('focusin', stop);
  hero.addEventListener('focusout', () => setTimeout(start, 0));
  document.addEventListener('visibilitychange', start);
  show(0);
  updatePause();
})();
