const body = document.body;
const themeToggle = document.getElementById('themeToggle');
const navMenu = document.getElementById('navMenu');
const hamburger = document.getElementById('hamburger');
let slideInterval = null;
let slideContainer = null;

function toggleTheme() {
  const nextTheme = body.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
  body.setAttribute('data-theme', nextTheme);
  localStorage.setItem('theme', nextTheme);
}

function toggleMenu() {
  navMenu.classList.toggle('active');
  hamburger.classList.toggle('active');
}

function pauseSlider() {
  if (slideInterval) {
    clearInterval(slideInterval);
    slideInterval = null;
  }
}

function playSlider() {
  pauseSlider();
  if (!slideContainer) {
    slideContainer = document.querySelector('.slider');
  }
  if (!slideContainer) return;

  slideInterval = setInterval(() => {
    const maxScroll = slideContainer.scrollWidth - slideContainer.clientWidth;
    const next = slideContainer.scrollLeft + 320;
    slideContainer.scrollLeft = next > maxScroll ? 0 : next;
  }, 3000);
}

function handleContactSubmit(event) {
  event.preventDefault();
  const name = document.getElementById('name');
  const email = document.getElementById('email');
  const subject = document.getElementById('subject');
  const message = document.getElementById('message');

  if (!name.value.trim() || !email.value.trim() || !subject.value.trim() || !message.value.trim()) {
    alert('Silakan lengkapi semua kolom sebelum mengirim pesan.');
    return;
  }

  alert(`Terima kasih, ${name.value.trim()}! Pesan Anda telah terkirim.`);
  document.getElementById('contactForm').reset();
}

function createRegisterModal() {
  if (document.getElementById('registerModal')) return;

  const modal = document.createElement('div');
  modal.id = 'registerModal';
  modal.className = 'register-modal';
  modal.innerHTML = `
    <div class="register-dialog">
      <button type="button" class="modal-close" aria-label="Tutup">×</button>
      <h2>Formulir Pendaftaran</h2>
      <p>Isi formulir berikut untuk mendaftar kelas atau kontak tim kami.</p>
      <form id="registerForm" class="register-form">
        <input type="text" id="registerName" placeholder="Nama lengkap" required>
        <input type="email" id="registerEmail" placeholder="Alamat email" required>
        <input type="tel" id="registerPhone" placeholder="Nomor telepon" required>
        <select id="registerRole" required>
          <option value="">Pilih jenis pendaftaran</option>
          <option value="mentor">Mentor</option>
          <option value="contributor">Contributor</option>
          <option value="peserta">Peserta</option>
        </select>
        <textarea id="registerMessage" placeholder="Tuliskan pesan singkat atau minat Anda" required></textarea>
        <button type="submit" class="btn btn-primary">Kirim Pendaftaran</button>
      </form>
    </div>
  `;

  document.body.appendChild(modal);

  modal.querySelector('.modal-close').addEventListener('click', closeRegisterModal);
  modal.addEventListener('click', event => {
    if (event.target === modal) closeRegisterModal();
  });

  const form = modal.querySelector('#registerForm');
  form.addEventListener('submit', handleRegisterSubmit);
}

function openRegisterModal() {
  const modal = document.getElementById('registerModal');
  if (!modal) return;
  modal.classList.add('active');
}

function closeRegisterModal() {
  const modal = document.getElementById('registerModal');
  if (!modal) return;
  modal.classList.remove('active');
}

function handleRegisterSubmit(event) {
  event.preventDefault();

  const name = document.getElementById('registerName');
  const email = document.getElementById('registerEmail');
  const phone = document.getElementById('registerPhone');
  const role = document.getElementById('registerRole');
  const message = document.getElementById('registerMessage');

  if (!name.value.trim() || !email.value.trim() || !phone.value.trim() || !role.value || !message.value.trim()) {
    alert('Silakan lengkapi semua kolom pendaftaran.');
    return;
  }

  alert(`Terima kasih, ${name.value.trim()}! Formulir pendaftaran Anda telah terkirim.`);
  event.target.reset();
  closeRegisterModal();
}

const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
  body.setAttribute('data-theme', savedTheme);
}

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('active');
      hamburger.classList.remove('active');
    });
  });

  const faders = document.querySelectorAll('.fade');
  const appearOptions = { threshold: 0.3 };
  const appearOnScroll = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.style.transition = 'all 1s ease';
      entry.target.style.opacity = 1;
      entry.target.style.transform = 'translateY(0)';
      observer.unobserve(entry.target);
    });
  }, appearOptions);
  faders.forEach(el => appearOnScroll.observe(el));

  const form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', handleContactSubmit);
  }

  if (document.querySelector('.slider')) {
    playSlider();
  }
  createRegisterModal();
  document.querySelectorAll('[data-open-register]').forEach(button => {
    button.addEventListener('click', event => {
      event.preventDefault();
      openRegisterModal();
    });
  });
  renderRoleChart();
  initHeroImageRotation();
});

function renderRoleChart() {
  const chartRows = document.querySelectorAll('.chart-row');
  if (!chartRows.length) return;

  const cards = document.querySelectorAll('.contributor-grid .profile-card[data-role]');
  const total = cards.length;
  const roleCounts = Array.from(cards).reduce((acc, card) => {
    const role = card.dataset.role || 'contributor';
    acc[role] = (acc[role] || 0) + 1;
    return acc;
  }, {});

  chartRows.forEach(row => {
    const role = row.dataset.role;
    const count = roleCounts[role] || 0;
    const percent = total ? Math.round((count / total) * 100) : 0;
    const bar = row.querySelector('.chart-bar');
    const value = row.querySelector('.chart-value');

    if (bar) bar.style.width = `${percent}%`;
    if (value) value.textContent = `${percent}%`;
  });
}

function initHeroImageRotation() {
  const heroImage = document.getElementById('heroImage');
  if (!heroImage) return;

  const heroImages = [
    // './asset/images/contributors/images-Meson.jpeg',
    './asset/images/contributors/about-janzen-papuancoders.png',
    './asset/images/contributors/images Jansen-faidiban.jpg',
    './asset/images/contributors/images-samuel.jpg',
    './asset/images/contributors/rois-wanimbo.png',
    './asset/images/contributors/Mr.Mee.png'
  ];

  let currentIndex = 0;

  function rotateHeroImage() {
    currentIndex = (currentIndex + 1) % heroImages.length;
    heroImage.src = heroImages[currentIndex];
  }

  // rotate every 5 seconds (5000ms) for faster transition
  setInterval(rotateHeroImage, 5000);
}
