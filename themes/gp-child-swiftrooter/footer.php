<footer class="site-footer" role="contentinfo">
    <div class="l-container">
        <div class="footer__grid">
            <!-- Brand & NAP -->
            <div class="footer__brand">
                <a class="footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home">
                    <img
                        src="<?php echo esc_url('http://localhost:10070/wp-content/uploads/2025/10/logo-lockup-512.png'); ?>"
                        alt="<?php bloginfo('name'); ?> logo"
                        width="180"
                        height="56"
                        loading="lazy"
                    />
                </a>
                <div class="footer__contact">
                    <p>3509 NW 22nd St<br>Oklahoma City, OK 73107</p>
                    <p><a href="tel:+14055354554">(405) 535-4554</a></p>
                    <p>Mon-Fri: 8AM-5PM</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer__links">
                <h3>Quick Links</h3>
                <?php wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'footer__menu',
                    'fallback_cb' => false
                ]); ?>
            </div>

            <!-- Services -->
            <div class="footer__services">
                <h3>Services</h3>
                <ul class="footer__menu">
                    <li><a href="<?php echo esc_url(home_url('/services/local-moving/')); ?>">Local Moving</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/labor-only/')); ?>">Labor-Only Loading/Unloading</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/furniture-delivery/')); ?>">Furniture Delivery</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/packing-services/')); ?>">Packing & Supplies</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/item-haul-away/')); ?>">Single-Item Haul-Away</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="footer__social">
                <h3>Follow Us</h3>
                <div class="social__links">
                    <a href="#" aria-label="Facebook" class="social__link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="social__link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="YouTube" class="social__link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<div class="fab" aria-live="polite">
  <button class="fab__main" aria-expanded="false" aria-controls="fab-menu" aria-label="Open quick actions">＋</button>
  <ul id="fab-menu" class="fab__menu" hidden>
    <li class="fab__item fab__item--text">
      <button class="fab__action fab__action--text" type="button" aria-controls="fab-text" aria-expanded="false" data-evt="fab_text_open">
        Text
      </button>

      <!-- Mini compose (initially hidden) -->
      <form id="fab-text" class="fab-text" hidden aria-label="Send us a text message">
        <label for="fab-text-input" class="sr-only">Your message</label>
        <input id="fab-text-input" class="fab-text__input" type="text" maxlength="240" placeholder="Describe your move (optional)" />
        <button class="fab-text__send" type="submit" data-evt="fab_text_send">Send</button>
        <span class="fab-text__count" aria-live="polite">0/240</span>
      </form>
    </li>
    <li><a class="fab__action fab__action--call" href="tel:+14055534554" aria-label="Call us" data-evt="fab_call">Call</a></li>
    <li><a class="fab__action fab__action--email" href="mailto:hello@birddogmoving.com?subject=Move%20Quote" aria-label="Email us" data-evt="fab_email">Email</a></li>
  </ul>
</div>
<script>
(function(){
  const hdr = document.querySelector('.hdr-classic.header--stuck');
  if (hdr) addEventListener('scroll',()=> hdr.classList.toggle('is-scrolled', scrollY>8));

  // Desktop: make parent link act as toggle without navigating (desktop only)
  document.querySelectorAll('.hdr-classic .menu-item-has-children > a').forEach(a=>{
    a.setAttribute('role','button'); a.setAttribute('aria-expanded','false');
    a.addEventListener('click', (e)=>{
      if (matchMedia('(min-width:901px)').matches) {
        e.preventDefault();
        const li = a.parentElement;
        const open = li.getAttribute('aria-expanded')==='true';
        li.setAttribute('aria-expanded', String(!open));
        a.setAttribute('aria-expanded', String(!open));
      }
    });
  });

  // Mobile drawer
  const ham = document.querySelector('.hdr-classic .hamburger');
  const drawer = document.getElementById('drawer');
  if (ham && drawer){
    ham.addEventListener('click', ()=>{
      const open = ham.getAttribute('aria-expanded')==='true';
      ham.setAttribute('aria-expanded', String(!open));
      drawer.classList.toggle('is-open', !open);
      drawer.setAttribute('aria-hidden', String(open));
      document.documentElement.classList.toggle('no-scroll', !open);
      document.body.classList.toggle('no-scroll', !open);
    });
  }

  // Mobile accordions
  document.querySelectorAll('.hdr-classic .drawer .accordion > button').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const ex = btn.getAttribute('aria-expanded')==='true';
      btn.setAttribute('aria-expanded', String(!ex));
    });
  });
})();
</script>
<script>
(function(){
  var here = location.pathname.replace(/\/+$/,'') || '/';
  document.querySelectorAll('.hdr-classic .main-navigation a, .hdr-classic .wp-block-navigation a')
    .forEach(function(a){
      var p = (a.pathname || '').replace(/\/+$/,'') || '/';
      if (p === here) a.classList.add('is-active');
    });
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
