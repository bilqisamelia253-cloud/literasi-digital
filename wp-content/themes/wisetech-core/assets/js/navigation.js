(() => {
  const menuButton = document.querySelector('.menu-toggle');
  const nav = document.querySelector('.site-nav');

  if (menuButton && nav) {
    const closeMenu = () => {
      nav.classList.remove('is-open');
      menuButton.setAttribute('aria-expanded', 'false');
    };

    menuButton.addEventListener('click', () => {
      const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
      menuButton.setAttribute('aria-expanded', String(!isOpen));
      nav.classList.toggle('is-open', !isOpen);
    });

    document.addEventListener('click', (event) => {
      if (!nav.classList.contains('is-open')) return;
      if (nav.contains(event.target) || menuButton.contains(event.target)) return;
      closeMenu();
    });

    document.addEventListener('keydown', (event) => {
      if (event.key !== 'Escape' || !nav.classList.contains('is-open')) return;
      closeMenu();
      menuButton.focus();
    });
  }

  const searchToggle = document.querySelector('.header-search-toggle');
  const searchPanel = document.querySelector('.header-search-panel');

  if (searchToggle && searchPanel) {
    const closeSearch = (returnFocus = false) => {
      searchPanel.hidden = true;
      searchToggle.setAttribute('aria-expanded', 'false');
      if (returnFocus) searchToggle.focus();
    };

    const openSearch = () => {
      searchPanel.hidden = false;
      searchToggle.setAttribute('aria-expanded', 'true');
      const searchField = searchPanel.querySelector('.search-field');
      if (searchField) {
        window.requestAnimationFrame(() => searchField.focus());
      }
    };

    searchToggle.addEventListener('click', () => {
      const isOpen = searchToggle.getAttribute('aria-expanded') === 'true';
      if (isOpen) {
        closeSearch(false);
      } else {
        openSearch();
      }
    });

    document.addEventListener('click', (event) => {
      if (searchPanel.hidden) return;
      if (searchPanel.contains(event.target) || searchToggle.contains(event.target)) return;
      closeSearch(false);
    });

    document.addEventListener('keydown', (event) => {
      if (event.key !== 'Escape' || searchPanel.hidden) return;
      closeSearch(true);
    });
  }
})();
