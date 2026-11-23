// Inject nav + footer into every page
const ROOT = document.querySelector('meta[name=root]')?.content ?? '../';

const NAV_HTML = (active) => `
<!-- ═══ GLOBAL MOBILE OVERFLOW + TOUCH FIX ═══ -->
<style>
html,body{overflow-x:hidden;max-width:100vw}
*{box-sizing:border-box}
/* ── Eliminate 300ms tap delay on ALL interactive elements ── */
a,button,input,select,textarea,label,[onclick],[role="button"],[tabindex]{
  touch-action:manipulation;
  -webkit-tap-highlight-color:transparent;
}
/* Prevent text-size adjust on orientation change */
html{-webkit-text-size-adjust:100%;text-size-adjust:100%}
/* ── Topbar ── */
.idelta-topbar{
  background:linear-gradient(90deg,#2A0F63,#3B1287);
  color:white;font-size:0.72rem;padding:0.35rem 0;
  width:100%;overflow:hidden;
}
.idelta-topbar-inner{
  max-width:1280px;margin:0 auto;padding:0 1rem;
  display:flex;align-items:center;justify-content:space-between;gap:0.5rem;
  flex-wrap:nowrap;
}
.idelta-topbar-left{
  display:flex;align-items:center;gap:0.75rem;
  flex:1;min-width:0;overflow:hidden;
}
.idelta-topbar-left a,
.idelta-topbar-left span{
  display:inline-flex;align-items:center;gap:0.3rem;
  color:white;text-decoration:none;opacity:.85;white-space:nowrap;
  flex-shrink:0;
}
/* Hide phone & location on tiny screens, keep online status */
.tb-phone{display:inline-flex}
.tb-loc{display:inline-flex}
.tb-online{display:inline-flex;align-items:center;gap:0.3rem}
@media(max-width:480px){
  .tb-phone{display:none}
  .tb-loc{display:none}
}
.idelta-topbar-right{display:flex;align-items:center;gap:0.6rem;flex-shrink:0}
.idelta-topbar-right a{color:white;opacity:.7;transition:opacity .2s;line-height:0}
.idelta-topbar-right a:hover{opacity:1}
/* ── Keyframes ── */
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
/* ── Nav links ── */
.idelta-nav-link{
  display:inline-block;padding:0.28rem 0.5rem;border-radius:9999px;
  font-size:0.78rem;font-weight:600;text-decoration:none;white-space:nowrap;
  color:#5F5B7A;transition:background .15s,color .15s;
}
.idelta-nav-link:hover{background:#F6F2FF;color:#6425D9}
.idelta-nav-link.nav-active{background:#EDE5FF;color:#6425D9}
.idelta-login-btn{
  display:inline-flex;align-items:center;
  padding:0.4rem 0.9rem;border-radius:12px;
  border:2px solid #6425D9;color:#6425D9;
  font-weight:700;font-size:0.82rem;
  text-decoration:none;transition:background .18s;white-space:nowrap;
}
.idelta-login-btn:hover{background:#F6F2FF}
.idelta-reg-btn{
  display:inline-flex;align-items:center;
  padding:0.4rem 1rem;border-radius:12px;
  background:linear-gradient(135deg,#7F46EA,#6425D9);
  color:#fff;font-weight:700;font-size:0.82rem;
  text-decoration:none;
  box-shadow:0 4px 12px rgba(100,37,217,.3);
  transition:transform .18s,box-shadow .18s;
  white-space:nowrap;
}
.idelta-reg-btn:hover{transform:translateY(-1px);box-shadow:0 6px 18px rgba(100,37,217,.4)}
/* ── Mobile menu ── */
#mob-menu a{display:block;padding:.6rem .75rem;border-radius:.75rem;font-weight:600;font-size:.9rem;text-decoration:none;color:#1B1836;transition:background .15s}
#mob-menu a:hover,#mob-menu a:active{background:#F6F2FF;color:#6425D9}
/* ── Footer ── */
.footer-social{width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:8px;display:flex;align-items:center;justify-content:center;color:white;transition:background .2s,transform .2s}
.footer-social:hover{background:#6425D9;transform:translateY(-2px)}
.footer-link{color:#9CA3AF;text-decoration:none;transition:color .2s,padding-left .2s;display:inline-block}
.footer-link:hover{color:#A97BFF;padding-left:4px}
.footer-link2{color:#4B5563;text-decoration:none;transition:color .2s}
.footer-link2:hover{color:white}
</style>

<!-- ═══ TOP INFO BAR ═══ -->
<div class="idelta-topbar">
  <div class="idelta-topbar-inner">
    <div class="idelta-topbar-left">
      <a href="tel:+918668707874" class="tb-phone">
        <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        +91 86687 07874
      </a>
      <span class="tb-loc" style="opacity:.85">
        <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Navi Mumbai
      </span>
      <span class="tb-online" style="color:#bbf7d0;font-weight:700">
        <span style="width:7px;height:7px;background:#4ade80;border-radius:50%;display:inline-block;animation:blink 1.4s infinite;flex-shrink:0"></span>
        24 Experts Online
      </span>
    </div>
    <div class="idelta-topbar-right">
      <a href="https://instagram.com" target="_blank" aria-label="Instagram">
        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
      </a>
      <a href="https://youtube.com" target="_blank" aria-label="YouTube">
        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
      </a>
      <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
      </a>
    </div>
  </div>
</div>

<!-- ═══ STICKY HEADER ═══ -->
<header id="main-header" style="position:sticky;top:0;z-index:50;background:rgba(255,255,255,0.97);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border-bottom:1px solid #E6E1F2;transition:box-shadow .3s;width:100%">
  <div style="max-width:1280px;margin:0 auto;padding:0 1rem;display:flex;align-items:center;height:60px;gap:0.5rem">

    <!-- Logo -->
    <a href="${ROOT}index.html" style="display:flex;align-items:center;gap:0.6rem;text-decoration:none;flex-shrink:0">
      <div style="width:36px;height:36px;background:linear-gradient(135deg,#7F46EA,#5018B5);border-radius:11px;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 15px rgba(100,37,217,.35);transition:transform .2s;flex-shrink:0" onmouseover="this.style.transform='scale(1.08) rotate(-3deg)'" onmouseout="this.style.transform=''">
        <svg style="width:20px;height:20px" fill="white" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zm5.99 7.176A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/></svg>
      </div>
      <div>
        <div style="font-weight:800;font-size:1.1rem;color:#1B1836;line-height:1;letter-spacing:-0.02em">iDelta</div>
        <div style="font-size:8px;color:#7F46EA;font-weight:700;letter-spacing:0.08em;text-transform:uppercase">Learn • Solve • Grow</div>
      </div>
    </a>

    <!-- Desktop nav -->
    <nav style="display:none;align-items:center;gap:0;margin-left:0.25rem;flex:1;min-width:0;overflow:hidden" id="desk-nav">
      ${[
        [ROOT+'index.html','Home'],
        [ROOT+'pages/tutors.html','Find Tutors'],
        [ROOT+'pages/live-doubts.html','Live Doubts'],
        [ROOT+'pages/subjects.html','Subjects'],
        [ROOT+'pages/home-tuition.html','Home Tuition'],
        [ROOT+'pages/pricing.html','Pricing'],
        [ROOT+'pages/become-tutor.html','Become a Tutor'],
        [ROOT+'pages/about.html','About Us'],
        [ROOT+'pages/blog.html','Blog'],
        [ROOT+'pages/contact.html','Contact']
      ].map(([href,label])=>`<a href="${href}" class="idelta-nav-link${active===label?' nav-active':''}">${label}</a>`).join('')}
    </nav>

    <!-- Right buttons -->
    <div style="margin-left:auto;display:flex;align-items:center;gap:0.4rem;flex-shrink:0">
      <a href="${ROOT}pages/login.html" class="idelta-login-btn" id="nav-login-btn">Login</a>
      <a href="${ROOT}pages/register.html" class="idelta-reg-btn">Register</a>
      <!-- Hamburger -->
      <button id="mob-menu-btn" onclick="document.getElementById('mob-menu').classList.toggle('hidden')" style="display:flex;align-items:center;justify-content:center;width:38px;height:38px;border:1.5px solid #E6E1F2;border-radius:10px;background:transparent;cursor:pointer;flex-shrink:0" aria-label="Menu">
        <svg width="20" height="20" fill="none" stroke="#1B1836" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
    </div>
  </div>

  <!-- Mobile dropdown menu -->
  <div id="mob-menu" class="hidden" style="border-top:1px solid #E6E1F2;background:white;padding:.5rem 1rem .75rem;width:100%">
    <a href="${ROOT}index.html">Home</a>
    <a href="${ROOT}pages/tutors.html">Find Tutors</a>
    <a href="${ROOT}pages/live-doubts.html">Live Doubts</a>
    <a href="${ROOT}pages/subjects.html">Subjects</a>
    <a href="${ROOT}pages/home-tuition.html">Home Tuition</a>
    <a href="${ROOT}pages/pricing.html">Pricing</a>
    <a href="${ROOT}pages/become-tutor.html">Become a Tutor</a>
    <a href="${ROOT}pages/about.html">About Us</a>
    <a href="${ROOT}pages/blog.html">Blog</a>
    <a href="${ROOT}pages/contact.html">Contact</a>
    <div style="display:flex;gap:.5rem;padding-top:.5rem;margin-top:.25rem;border-top:1px solid #E6E1F2">
      <a href="${ROOT}pages/login.html" style="flex:1;text-align:center;padding:.6rem;border-radius:.75rem;border:2px solid #6425D9;color:#6425D9;font-weight:700;font-size:.875rem;text-decoration:none">Login</a>
      <a href="${ROOT}pages/register.html" style="flex:1;text-align:center;padding:.6rem;border-radius:.75rem;background:#6425D9;color:white;font-weight:700;font-size:.875rem;text-decoration:none">Register</a>
    </div>
  </div>
</header>

<script>
// Show desktop nav + hide hamburger on large screens
(function(){
  function applyNavLayout(){
    var deskNav = document.getElementById('desk-nav');
    var mobBtn  = document.getElementById('mob-menu-btn');
    var loginBtn= document.getElementById('nav-login-btn');
    if(!deskNav) return;
    if(window.innerWidth >= 1024){
      deskNav.style.display='flex';
      if(mobBtn)   mobBtn.style.display='none';
      if(loginBtn) loginBtn.style.display='inline-flex';
    } else {
      deskNav.style.display='none';
      if(mobBtn)   mobBtn.style.display='flex';
      // hide login on very small screens to save space
      if(loginBtn) loginBtn.style.display = window.innerWidth < 480 ? 'none' : 'inline-flex';
    }
  }
  applyNavLayout();
  window.addEventListener('resize', applyNavLayout);
})();
</script>`;

const FOOTER_HTML = `
<footer style="background:#0F0A24;color:white;width:100%;overflow:hidden">
  <div style="max-width:1280px;margin:0 auto;padding:3.5rem 1rem 0">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
      <div>
        <div style="display:flex;align-items:center;gap:.6rem;margin-bottom:1.25rem">
          <div style="width:36px;height:36px;background:linear-gradient(135deg,#7F46EA,#5018B5);border-radius:11px;display:flex;align-items:center;justify-content:center;flex-shrink:0">
            <svg style="width:20px;height:20px" fill="white" viewBox="0 0 20 20"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zm5.99 7.176A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/></svg>
          </div>
          <div>
            <div style="font-weight:800;font-size:1.1rem;line-height:1">iDelta</div>
            <div style="font-size:9px;color:#A97BFF;font-weight:700;letter-spacing:.08em;text-transform:uppercase">Learn • Solve • Grow</div>
          </div>
        </div>
        <p style="color:#9CA3AF;font-size:.875rem;line-height:1.7;margin-bottom:1.25rem">India's trusted tutoring platform for home tuition, live doubt sessions, and expert mentorship in Navi Mumbai.</p>
        <div style="display:flex;gap:.6rem">
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></a>
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg></a>
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
        </div>
      </div>
      <div>
        <h3 style="font-weight:700;font-size:.7rem;text-transform:uppercase;letter-spacing:.12em;color:#D1D5DB;margin-bottom:1.25rem">Quick Links</h3>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.6rem;font-size:.875rem">
          ${['Find Tutors:tutors.html','Live Doubts:live-doubts.html','Home Tuition:home-tuition.html','Pricing:pricing.html','Become a Tutor:become-tutor.html','About Us:about.html','Blog:blog.html','Contact:contact.html'].map(x=>{const[l,h]=x.split(':');return `<li><a href="${ROOT}pages/${h}" class="footer-link">→ ${l}</a></li>`;}).join('')}
        </ul>
      </div>
      <div>
        <h3 style="font-weight:700;font-size:.7rem;text-transform:uppercase;letter-spacing:.12em;color:#D1D5DB;margin-bottom:1.25rem">Subjects</h3>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:.6rem;font-size:.875rem">
          ${['Mathematics','Science','Physics','Chemistry','Biology','English','Computer Science','Economics','Accountancy','History'].map(s=>`<li><a href="${ROOT}pages/subjects.html" class="footer-link">${s}</a></li>`).join('')}
        </ul>
      </div>
      <div>
        <h3 style="font-weight:700;font-size:.7rem;text-transform:uppercase;letter-spacing:.12em;color:#D1D5DB;margin-bottom:1.25rem">Contact Us</h3>
        <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:1rem;font-size:.875rem;color:#9CA3AF">
          <li style="display:flex;align-items:flex-start;gap:.6rem"><svg style="width:15px;height:15px;margin-top:2px;flex-shrink:0" fill="none" stroke="#A97BFF" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg><a href="tel:+918668707874" class="footer-link">+91 86687 07874</a></li>
          <li style="display:flex;align-items:flex-start;gap:.6rem"><svg style="width:15px;height:15px;margin-top:2px;flex-shrink:0" fill="none" stroke="#A97BFF" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><span>Navi Mumbai, Maharashtra</span></li>
          <li style="display:flex;align-items:flex-start;gap:.6rem"><svg style="width:15px;height:15px;margin-top:2px;flex-shrink:0" fill="none" stroke="#A97BFF" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><span>hello@idelta.in</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div style="border-top:1px solid rgba(255,255,255,.07);margin-top:1rem">
    <div style="max-width:1280px;margin:0 auto;padding:.8rem 1rem;display:flex;flex-direction:column;align-items:center;gap:.5rem;font-size:.8rem;color:#4B5563;text-align:center">
      <p style="margin:0">© 2026 iDelta. All rights reserved. Made with ❤️ in Navi Mumbai.</p>
      <div style="display:flex;gap:1.25rem;flex-wrap:wrap;justify-content:center">
        <a href="#" class="footer-link2">Privacy Policy</a>
        <a href="#" class="footer-link2">Terms of Service</a>
        <a href="#" class="footer-link2">Refund Policy</a>
      </div>
    </div>
  </div>
</footer>`;

document.addEventListener('DOMContentLoaded', () => {
  const page = document.querySelector('meta[name=page]')?.content ?? '';
  document.getElementById('site-nav').innerHTML = NAV_HTML(page);
  document.getElementById('site-footer').innerHTML = FOOTER_HTML;
  // scroll shadow on header
  window.addEventListener('scroll', () => {
    const h = document.getElementById('main-header');
    if (h) h.style.boxShadow = window.scrollY > 10 ? '0 4px 24px rgba(0,0,0,0.10)' : '';
  });
  window.dispatchEvent(new CustomEvent('idelta:navReady'));
});
