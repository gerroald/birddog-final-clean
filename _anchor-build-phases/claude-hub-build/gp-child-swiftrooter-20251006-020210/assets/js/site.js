/* SwiftRooter Site JavaScript */

document.addEventListener('DOMContentLoaded', function() {
    const navToggle = document.querySelector('.nav-toggle');
    const body = document.body;
    const navMenu = document.querySelector('.site-nav');
    const navLinks = document.querySelectorAll('.site-nav a');

    if (!navToggle || !navMenu) return;

    // Toggle mobile menu
    navToggle.addEventListener('click', function() {
        const isOpen = body.classList.contains('is-nav-open');
        
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });

    // Close menu when clicking nav links
    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close menu on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && body.classList.contains('is-nav-open')) {
            closeMenu();
        }
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (body.classList.contains('is-nav-open') && 
            !navMenu.contains(e.target) && 
            !navToggle.contains(e.target)) {
            closeMenu();
        }
    });

    function openMenu() {
        body.classList.add('is-nav-open');
        navToggle.setAttribute('aria-expanded', 'true');
        navToggle.setAttribute('aria-label', 'Close menu');
        
        // Trap focus in mobile menu
        const firstFocusable = navMenu.querySelector('a');
        if (firstFocusable) {
            firstFocusable.focus();
        }
    }

    function closeMenu() {
        body.classList.remove('is-nav-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Open menu');
        
        // Return focus to toggle button
        navToggle.focus();
    }
});

// Service Areas Filter
document.addEventListener('DOMContentLoaded', function() {
    const areaSearch = document.getElementById('area-search');
    const areaCards = document.querySelectorAll('.area-card');
    
    if (!areaSearch || !areaCards.length) return;
    
    areaSearch.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        
        areaCards.forEach(card => {
            const cityName = card.getAttribute('data-city').toLowerCase();
            const cardTitle = card.querySelector('.area-card__title').textContent.toLowerCase();
            const cardBlurb = card.querySelector('.area-card__blurb').textContent.toLowerCase();
            
            const matches = cityName.includes(searchTerm) || 
                           cardTitle.includes(searchTerm) || 
                           cardBlurb.includes(searchTerm);
            
            if (matches || searchTerm === '') {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Backward compatibility for #quote links
(function(){
    // If URL hash is #quote, redirect to #estimate smoothly
    if (location.hash === '#quote') {
        history.replaceState(null, '', location.pathname + '#estimate');
        const el = document.querySelector('#estimate'); 
        if (el) el.scrollIntoView({behavior:'smooth'});
    }
})();

// Elevate header on scroll (if not already added)
(function(){
  const header = document.querySelector('.site-header');
  if (!header) return;
  const onScroll = () => document.body.classList.toggle('is-scrolled', window.scrollY > 8);
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();
})();

// Sticky callbar padding helper
(function(){
  const callbar = document.querySelector('.callbar');
  if (!callbar) return;
  document.body.classList.add('has-callbar-padding');
})();

// Reveal on view (staggered, motion-safe)
(function(){
  const els = document.querySelectorAll('[data-reveal]');
  if (!els.length) return;
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    els.forEach(el=>el.classList.add('is-in'));
    return;
  }
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
      if(entry.isIntersecting){
        entry.target.classList.add('is-in');
        io.unobserve(entry.target);
      }
    });
  }, {threshold: 0.2, rootMargin: '0px 0px -5% 0px'});
  els.forEach((el,index)=>{
    el.style.setProperty('transition-delay', `${Math.min((index % 6) * 60, 240)}ms`);
    io.observe(el);
  });
})();

// FAB aria-expanded toggle
(function(){
  const fab = document.querySelector('.fab-panel-mobile');
  if (!fab) return;
  const toggle = fab.querySelector('.fab-toggle');
  const panel = fab.querySelector('.fab-panel');
  if (!toggle || !panel) return;

  const close = () => {
    panel.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
  };

  toggle.addEventListener('click', (event)=>{
    event.preventDefault();
    const isOpen = panel.classList.toggle('is-open');
    toggle.setAttribute('aria-expanded', String(isOpen));
  });

  document.addEventListener('click', (e)=>{
    if (!fab.contains(e.target)) {
      close();
    }
  });
})();

// Analytics click events
(function(){
  const fire = (name, params={})=>{
    try { if (window.gtag) gtag('event', name, params); } catch(e){}
    try { if (window.fbq) fbq('trackCustom', name, params); } catch(e){}
  };

  document.addEventListener('click', (event)=>{
    const a = event.target.closest('a[href]');
    if (!a) return;
    const href = a.getAttribute('href');
    if (!href) return;
    const payload = {location: window.location.pathname};
    if (href.startsWith('tel:')) fire('click_tel', payload);
    if (href.startsWith('sms:')) fire('click_sms', payload);
    if (href.startsWith('mailto:')) fire('click_email', payload);
    if (/#estimate/.test(href)) fire('click_estimate', payload);
  });
})();

// UI Fix Pack: Enforce call button nowrap and FAB clickability
(function(){
  // Enforce no wrap on header call button
  const callBtn = document.querySelector('.site-cta__button, .header-call');
  if (callBtn) {
    callBtn.style.whiteSpace = 'nowrap';
  }

  // Ensure FAB stays clickable and visible
  const fab = document.querySelector('.fab, .fab-toggle, .fab-panel-mobile');
  if (fab) {
    fab.style.pointerEvents = 'auto';
    fab.style.zIndex = '9999';
  }
})();
