(() => {
  const dropdowns = document.querySelectorAll('[data-nav-dropdown]');
  dropdowns.forEach(dropdown => {
    dropdown.addEventListener('pointerenter', event => {
      if (event.pointerType === 'mouse') dropdown.open = true;
    });
    dropdown.addEventListener('pointerleave', event => {
      if (event.pointerType === 'mouse' && !dropdown.contains(document.activeElement)) dropdown.open = false;
    });
    dropdown.addEventListener('focusout', event => {
      if (!dropdown.contains(event.relatedTarget)) dropdown.open = false;
    });
    dropdown.addEventListener('keydown', event => {
      if (event.key === 'Escape' && dropdown.open) {
        event.stopPropagation();
        dropdown.open = false;
        dropdown.querySelector('summary').focus();
      }
    });
  });
  document.addEventListener('click', event => {
    dropdowns.forEach(dropdown => {
      if (!dropdown.contains(event.target)) dropdown.open = false;
    });
  });
  const menu = document.querySelector('[data-menu-toggle]');
  const navigation = document.getElementById('landing-navigation');
  const closeMenu = () => {
    dropdowns.forEach(dropdown => { dropdown.open = false; });
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

  document.querySelectorAll('[data-reference-animation]').forEach(img => {
    const original = img.src;
    const preference = matchMedia('(prefers-reduced-motion: reduce)');
    let paused = preference.matches;
    let still;
    const update = () => {
      if (!still && img.complete && img.naturalWidth) {
        const canvas = document.createElement('canvas');
        canvas.width = img.naturalWidth;
        canvas.height = img.naturalHeight;
        canvas.getContext('2d').drawImage(img, 0, 0);
        still = canvas.toDataURL('image/png');
      }
      if (paused && !still) return;
      const source = paused ? still : original;
      if (img.src !== source) img.src = source;
    };
    img.addEventListener('load', update);
    preference.addEventListener('change', () => { paused = preference.matches; update(); });
    update();
  });

  document.querySelectorAll('[data-application-toggle]').forEach(button => {
    const description = document.getElementById(button.dataset.applicationToggle);
    const artwork = description.previousElementSibling;
    const card = description.parentElement;
    const label = button.getAttribute('aria-label').replace(/^More about /, '');
    let pinned = false;
    let open = false;
    card.classList.add('reference-application-card');
    artwork.classList.add('reference-card-art');
    const show = value => {
      open = value;
      card.classList.toggle('is-expanded', open);
      description.hidden = !open;
      artwork.setAttribute('aria-hidden', String(open));
      button.setAttribute('aria-expanded', String(open));
      button.setAttribute('aria-label', (open ? 'Hide details about ' : 'More about ') + label);
      button.textContent = open ? '−' : '+';
    };
    card.addEventListener('pointerenter', event => {
      if (event.pointerType === 'mouse') show(true);
    });
    card.addEventListener('pointerleave', event => {
      if (event.pointerType === 'mouse' && !pinned) show(false);
    });
    button.addEventListener('focus', () => {
      if (button.matches(':focus-visible')) show(true);
    });
    card.addEventListener('focusout', event => {
      if (!card.contains(event.relatedTarget) && !pinned) show(false);
    });
    button.addEventListener('click', () => { pinned = !open; show(pinned); });
    card.addEventListener('keydown', event => {
      if (event.key === 'Escape') { pinned = false; show(false); }
    });
    show(false);
  });
  document.querySelectorAll('.reference-landing .elementor-main-swiper').forEach(carousel => {
    const items = [...carousel.querySelectorAll('.swiper-slide')];
    let current = 0;
    const showTestimonial = value => {
      current = (value + items.length) % items.length;
      items.forEach((item, i) => {
        item.classList.toggle('reference-active', i === current);
        item.setAttribute('aria-hidden', String(i !== current));
      });
    };
    carousel.querySelectorAll('.elementor-swiper-button').forEach(button => {
      button.tabIndex = 0;
      const advance = () => showTestimonial(current + (button.classList.contains('elementor-swiper-button-next') ? 1 : -1));
      button.addEventListener('click', advance);
      button.addEventListener('keydown', event => {
        if (event.key === 'Enter' || event.key === ' ') { event.preventDefault(); advance(); }
      });
    });
    showTestimonial(0);
  });

  // Keep content visible without JavaScript. Animate only as a section enters view.
  const motionPreference = matchMedia('(prefers-reduced-motion: reduce)');
  const revealAnimations = new Set();
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        observer.unobserve(entry.target);
        if (motionPreference.matches || !entry.target.animate) return;
        const animation = entry.target.animate([
          { opacity: 0, transform: 'translateY(20px)' },
          { opacity: 1, transform: 'translateY(0)' }
        ], { duration: 550, easing: 'cubic-bezier(.2,.7,.2,1)' });
        revealAnimations.add(animation);
        animation.onfinish = () => revealAnimations.delete(animation);
      });
    }, { threshold: 0.08 });
    document.querySelectorAll('.landing-content [data-reveal]').forEach(element => observer.observe(element));
    motionPreference.addEventListener('change', () => {
      if (motionPreference.matches) {
        revealAnimations.forEach(animation => animation.cancel());
        revealAnimations.clear();
      }
    });
  }

  // Retain final values in HTML; animate each statistic once when it is visible.
  const counters = [...document.querySelectorAll('.reference-landing .ha-fun-factor__content-number')];
  if (counters.length && 'IntersectionObserver' in window) {
    const running = new Map();
    const finish = element => {
      const state = running.get(element);
      if (!state) return;
      cancelAnimationFrame(state.frame);
      element.textContent = String(state.target);
      running.delete(element);
    };
    const counterObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const element = entry.target;
        counterObserver.unobserve(element);
        const target = Number(element.textContent.trim());
        if (motionPreference.matches || !Number.isFinite(target)) return;
        const started = performance.now();
        const state = { target, frame: 0 };
        running.set(element, state);
        element.textContent = '0';
        const tick = now => {
          const progress = Math.min((now - started) / 1600, 1);
          element.textContent = String(Math.round(target * (1 - Math.pow(1 - progress, 3))));
          if (progress < 1) state.frame = requestAnimationFrame(tick);
          else finish(element);
        };
        state.frame = requestAnimationFrame(tick);
      });
    }, { threshold: 0.6 });
    counters.forEach(element => counterObserver.observe(element));
    motionPreference.addEventListener('change', () => {
      if (motionPreference.matches) running.forEach((_, element) => finish(element));
    });
  }

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
