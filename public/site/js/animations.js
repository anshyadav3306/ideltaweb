/**
 * iDelta Shared Animations Library
 * Scroll reveal · Counter animation · 3D card tilt · Particle hero
 */

(function () {
  'use strict';

  /* ─── Inject shared CSS ─────────────────────────────────── */
  const css = `
    .reveal,.reveal-left,.reveal-right,.reveal-scale{opacity:0;transition:opacity .7s cubic-bezier(.4,0,.2,1),transform .7s cubic-bezier(.4,0,.2,1);}
    .reveal{transform:translateY(48px);}
    .reveal-left{transform:translateX(-60px);}
    .reveal-right{transform:translateX(60px);}
    .reveal-scale{transform:scale(.88);}
    .reveal.visible,.reveal-left.visible,.reveal-right.visible,.reveal-scale.visible{opacity:1;transform:none;}
    .stagger>*{opacity:0;transform:translateY(32px);transition:opacity .6s cubic-bezier(.4,0,.2,1),transform .6s cubic-bezier(.4,0,.2,1);}
    .stagger.visible>*{opacity:1;transform:none;}
    .stagger.visible>*:nth-child(1){transition-delay:.05s}
    .stagger.visible>*:nth-child(2){transition-delay:.12s}
    .stagger.visible>*:nth-child(3){transition-delay:.19s}
    .stagger.visible>*:nth-child(4){transition-delay:.26s}
    .stagger.visible>*:nth-child(5){transition-delay:.33s}
    .stagger.visible>*:nth-child(6){transition-delay:.40s}
    .stagger.visible>*:nth-child(7){transition-delay:.47s}
    .stagger.visible>*:nth-child(8){transition-delay:.54s}
    .tilt-card{transform-style:preserve-3d;transition:transform .15s ease,box-shadow .15s ease;will-change:transform;}
    .tilt-card:hover{box-shadow:0 20px 60px rgba(100,37,217,.18);}
    .gradient-text{background:linear-gradient(135deg,#6425D9,#a855f7);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    @keyframes ideltaFloat{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
    @keyframes ideltaPulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.7;transform:scale(1.08)}}
    @keyframes ideltaShimmer{0%{background-position:-200% 0}100%{background-position:200% 0}}
    .float-anim{animation:ideltaFloat 3.5s ease-in-out infinite;}
    .pulse-anim{animation:ideltaPulse 2s ease-in-out infinite;}
    .shimmer-bg{background:linear-gradient(90deg,#f0ebff 25%,#e0d5fa 50%,#f0ebff 75%);background-size:200% 100%;animation:ideltaShimmer 2s infinite;}
  `;
  if (!document.getElementById('idelta-anim-css')) {
    const style = document.createElement('style');
    style.id = 'idelta-anim-css';
    style.textContent = css;
    document.head.appendChild(style);
  }

  /* ─── Scroll Reveal (Intersection Observer) ──────────────── */
  function initScrollReveal() {
    const selectors = '.reveal,.reveal-left,.reveal-right,.reveal-scale,.stagger';
    const els = document.querySelectorAll(selectors);
    if (!els.length) return;
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(el => io.observe(el));
  }

  /* ─── Counter Animation ──────────────────────────────────── */
  function animateCounter(el) {
    const target = parseFloat(el.dataset.target || el.textContent.replace(/[^0-9.]/g, ''));
    const suffix = el.dataset.suffix || (el.textContent.match(/[^0-9.]+$/) || [''])[0];
    const prefix = el.dataset.prefix || (el.textContent.match(/^[^0-9]+/) || [''])[0];
    const duration = 1800;
    const start = performance.now();
    const isDecimal = target % 1 !== 0;
    function tick(now) {
      const elapsed = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - elapsed, 3);
      const val = target * eased;
      el.textContent = prefix + (isDecimal ? val.toFixed(1) : Math.floor(val).toLocaleString('en-IN')) + suffix;
      if (elapsed < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  function initCounters() {
    const els = document.querySelectorAll('[data-counter]');
    if (!els.length) return;
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          animateCounter(e.target);
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.5 });
    els.forEach(el => io.observe(el));
  }

  /* ─── 3D Card Tilt ───────────────────────────────────────── */
  function initTilt() {
    document.querySelectorAll('.tilt-card').forEach(card => {
      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const cx = rect.left + rect.width / 2;
        const cy = rect.top + rect.height / 2;
        const dx = (e.clientX - cx) / (rect.width / 2);
        const dy = (e.clientY - cy) / (rect.height / 2);
        card.style.transform = `perspective(700px) rotateX(${-dy * 6}deg) rotateY(${dx * 6}deg) scale(1.025)`;
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
      });
    });
  }

  /* ─── Subtle Particle Background for .hero-canvas ───────── */
  function initParticles(canvasId) {
    const canvas = document.getElementById(canvasId || 'hero-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    let W, H, particles = [];

    function resize() {
      W = canvas.width = canvas.offsetWidth;
      H = canvas.height = canvas.offsetHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    const COUNT = 55;
    for (let i = 0; i < COUNT; i++) {
      particles.push({
        x: Math.random() * W, y: Math.random() * H,
        r: Math.random() * 2.5 + 0.5,
        dx: (Math.random() - 0.5) * 0.4,
        dy: (Math.random() - 0.5) * 0.4,
        a: Math.random() * 0.5 + 0.2
      });
    }

    function draw() {
      ctx.clearRect(0, 0, W, H);
      particles.forEach(p => {
        p.x += p.dx; p.y += p.dy;
        if (p.x < 0) p.x = W; if (p.x > W) p.x = 0;
        if (p.y < 0) p.y = H; if (p.y > H) p.y = 0;
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(100,37,217,${p.a})`;
        ctx.fill();
      });
      // connect nearby particles
      for (let i = 0; i < particles.length; i++) {
        for (let j = i + 1; j < particles.length; j++) {
          const dx = particles[i].x - particles[j].x;
          const dy = particles[i].y - particles[j].y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 100) {
            ctx.beginPath();
            ctx.moveTo(particles[i].x, particles[i].y);
            ctx.lineTo(particles[j].x, particles[j].y);
            ctx.strokeStyle = `rgba(100,37,217,${0.08 * (1 - dist / 100)})`;
            ctx.lineWidth = 0.8;
            ctx.stroke();
          }
        }
      }
      requestAnimationFrame(draw);
    }
    draw();
  }

  /* ─── Page-entry hero animation ─────────────────────────── */
  function initHeroEntrance() {
    const hero = document.querySelector('.page-hero');
    if (!hero) return;
    hero.style.opacity = '0';
    hero.style.transform = 'translateY(30px)';
    hero.style.transition = 'opacity .8s ease, transform .8s ease';
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        hero.style.opacity = '1';
        hero.style.transform = 'none';
      });
    });
  }

  /* ─── Active nav link highlight ─────────────────────────── */
  function highlightNav() {
    const path = location.pathname;
    document.querySelectorAll('#site-nav a').forEach(a => {
      if (a.href && a.href.includes(path.split('/').pop())) {
        a.style.color = '#6425D9';
        a.style.fontWeight = '700';
      }
    });
  }

  /* ─── Init all ───────────────────────────────────────────── */
  function init() {
    initScrollReveal();
    initCounters();
    initTilt();
    initParticles();
    initHeroEntrance();
    setTimeout(highlightNav, 300);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

  // Re-run after shared.js injects nav/footer
  window.addEventListener('idelta:navReady', () => {
    highlightNav();
  });

  window.iDeltaAnimations = { initParticles, animateCounter, initTilt, initScrollReveal };
})();
