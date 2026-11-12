document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('[data-filter]');
  const projectCards = document.querySelectorAll('[data-project-card]');
 
  if (!filterButtons.length || !projectCards.length) {
    return;
  }
 
  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const filter = button.dataset.filter;
 
      filterButtons.forEach((item) => {
        const active = item === button;
        item.classList.toggle('is-active', active);
        item.setAttribute('aria-pressed', String(active));
      });
 
      projectCards.forEach((card) => {
        const technologies = (card.dataset.technologies || '').split(' ');
        const visible = filter === 'all' || technologies.includes(filter);
        card.hidden = !visible;
      });
    });
  });
});