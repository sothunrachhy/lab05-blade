// Mobile navbar toggle
document.querySelectorAll('[data-nav-toggle]').forEach((btn) => {
    const target = document.getElementById(btn.getAttribute('aria-controls'));
    if (!target) return;
    btn.addEventListener('click', () => {
        const open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!open));
        target.classList.toggle('hidden', open);
        target.classList.toggle('flex', !open);
    });
});

// Account dropdown
document.querySelectorAll('[data-dropdown-toggle]').forEach((btn) => {
    const menu = document.getElementById(btn.getAttribute('aria-controls'));
    if (!menu) return;
    btn.addEventListener('click', (e) => {
        e.stopPropagation();
        const open = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!open));
        menu.hidden = open;
    });
    document.addEventListener('click', (e) => {
        if (!menu.contains(e.target)) {
            btn.setAttribute('aria-expanded', 'false');
            menu.hidden = true;
        }
    });
});
