// catalog.js — Category overlay interactions

const CATEGORIES = {
  music: {
    emoji: '🎧',
    title: 'Música',
    desc: 'Géneros y ambientes sonoros que sigo',
    items: [
      { label: 'Ambiente', name: 'Lofi / Chill', desc: 'Para concentrarse o descansar' },
      { label: 'Mainstream', name: 'Pop', desc: 'Lo que suena siempre' },
      { label: 'Alternativo', name: 'Rock Alt.', desc: 'Textura y actitud' },
      { label: 'Sin letras', name: 'Instrumental', desc: 'Puramente sonido' },
      { label: 'Motivacional', name: 'Energético', desc: 'Para moverse o trabajar' },
    ]
  },
  books: {
    emoji: '📚',
    title: 'Libros',
    desc: 'Géneros que me llaman cuando quiero leer',
    items: [
      { label: 'Narrativa', name: 'Ficción', desc: 'Mundos que no existen' },
      { label: 'No ficción', name: 'Ciencia / Ideas', desc: 'Ensayo y divulgación' },
      { label: 'Crecimiento', name: 'Desarrollo personal', desc: 'Perspectivas útiles' },
      { label: 'Casual', name: 'Lectura ligera', desc: 'Sin compromisos' },
      { label: 'Suspenso', name: 'Thriller', desc: 'Que no te sueltan' },
    ]
  },
  art: {
    emoji: '🎨',
    title: 'Arte',
    desc: 'Estilos visuales que me inspiran',
    items: [
      { label: 'Digital', name: 'Arte digital', desc: 'Pixel, vectores, síntesis' },
      { label: 'Minimalismo', name: 'Ilustración', desc: 'Menos es más' },
      { label: 'Psicológico', name: 'Surrealismo', desc: 'Lo que no cuadra' },
      { label: 'Glitch', name: 'Cyber / Glitch', desc: 'Error como estética' },
      { label: 'Forma pura', name: 'Arte abstracto', desc: 'Sin figuración' },
    ]
  },
  films: {
    emoji: '🎬',
    title: 'Películas',
    desc: 'Géneros y estilos que disfruto',
    items: [
      { label: 'Futuro', name: 'Ciencia ficción', desc: 'Tecnología e ideas' },
      { label: 'Cine', name: 'Drama', desc: 'Historias humanas' },
      { label: 'Visual', name: 'Animación', desc: 'Arte en movimiento' },
      { label: 'Suspenso', name: 'Thriller', desc: 'Tensión y giros' },
      { label: 'Sentimientos', name: 'Romance', desc: 'Las de siempre' },
    ]
  }
};

const overlay = document.getElementById('overlay');
const overlayClose = document.getElementById('overlayClose');
const overlayEmoji = document.getElementById('overlayEmoji');
const overlayTitle = document.getElementById('overlayTitle');
const overlayDesc = document.getElementById('overlayDesc');
const overlayItems = document.getElementById('overlayItems');

function openOverlay(categoryKey) {
  const cat = CATEGORIES[categoryKey];
  if (!cat) return;

  overlayEmoji.textContent = cat.emoji;
  overlayTitle.textContent = cat.title;
  overlayDesc.textContent = cat.desc;

  overlayItems.innerHTML = cat.items.map(item => `
    <div class="overlay-item">
      <div class="oi-label">${item.label}</div>
      <div class="oi-name">${item.name}</div>
      <div class="oi-desc">${item.desc}</div>
    </div>
  `).join('');

  overlay.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeOverlay() {
  overlay.classList.remove('active');
  document.body.style.overflow = '';
}

// Attach events to cards
document.querySelectorAll('.cat-card').forEach(card => {
  const handler = () => openOverlay(card.dataset.category);
  card.addEventListener('click', handler);
  card.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); handler(); }
  });
});

overlayClose.addEventListener('click', closeOverlay);

overlay.addEventListener('click', e => {
  if (e.target === overlay || e.target.classList.contains('overlay-bg')) closeOverlay();
});

document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeOverlay();
});
