/**
 * Header Navigation JavaScript
 * Handles mobile menu toggle and submenu interactions
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {

        // ===================================================================
        // Mobile Menu Toggle
        // ===================================================================

        const navToggle = document.querySelector('.nav-toggle');
        const siteNav = document.querySelector('.site-nav');
        const body = document.body;

        // Create overlay element
        const overlay = document.createElement('div');
        overlay.className = 'nav-overlay';
        body.appendChild(overlay);

        if (navToggle && siteNav) {
            navToggle.addEventListener('click', function() {
                const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';

                // Toggle states
                navToggle.setAttribute('aria-expanded', !isExpanded);
                siteNav.setAttribute('data-open', !isExpanded);
                overlay.setAttribute('data-open', !isExpanded);

                // Prevent body scroll when menu open
                if (!isExpanded) {
                    body.style.overflow = 'hidden';
                } else {
                    body.style.overflow = '';
                }
            });

            // Close menu when clicking overlay
            overlay.addEventListener('click', function() {
                navToggle.setAttribute('aria-expanded', 'false');
                siteNav.setAttribute('data-open', 'false');
                overlay.setAttribute('data-open', 'false');
                body.style.overflow = '';
            });

            // Close menu on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && siteNav.getAttribute('data-open') === 'true') {
                    navToggle.setAttribute('aria-expanded', 'false');
                    siteNav.setAttribute('data-open', 'false');
                    overlay.setAttribute('data-open', 'false');
                    body.style.overflow = '';
                }
            });
        }

        // ===================================================================
        // Mobile Submenu Toggle
        // ===================================================================

        const submenuToggles = document.querySelectorAll('.submenu-toggle');

        submenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const parentLi = this.closest('.menu-item-has-children');
                const submenu = parentLi.querySelector('.sub-menu');
                const isExpanded = this.getAttribute('aria-expanded') === 'true';

                // Close other open submenus
                document.querySelectorAll('.submenu-toggle').forEach(otherToggle => {
                    if (otherToggle !== this) {
                        otherToggle.setAttribute('aria-expanded', 'false');
                        otherToggle.closest('.menu-item-has-children').classList.remove('submenu-open');
                    }
                });

                // Toggle current submenu
                this.setAttribute('aria-expanded', !isExpanded);
                parentLi.classList.toggle('submenu-open');
            });
        });

        // ===================================================================
        // Scroll Detection (for header shadow)
        // ===================================================================

        let lastScroll = 0;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 10) {
                body.classList.add('is-scrolled');
            } else {
                body.classList.remove('is-scrolled');
            }

            lastScroll = currentScroll;
        });

        // ===================================================================
        // Desktop Dropdown Keyboard Navigation
        // ===================================================================

        const menuItems = document.querySelectorAll('.site-nav .menu-item-has-children > a');

        menuItems.forEach(link => {
            link.addEventListener('keydown', function(e) {
                // Only on desktop
                if (window.innerWidth <= 900) return;

                const parentLi = this.parentElement;
                const submenu = parentLi.querySelector('.sub-menu');

                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();

                    // Toggle focus-within for keyboard users
                    if (submenu) {
                        const firstLink = submenu.querySelector('a');
                        if (firstLink) {
                            firstLink.focus();
                        }
                    }
                }
            });
        });

        // Close dropdown when focus leaves
        const allDropdownLinks = document.querySelectorAll('.site-nav .sub-menu a');

        allDropdownLinks.forEach((link, index) => {
            link.addEventListener('keydown', function(e) {
                const submenu = this.closest('.sub-menu');
                const parentLi = submenu.closest('.menu-item-has-children');
                const allLinks = Array.from(submenu.querySelectorAll('a'));

                // Tab away from last item - close dropdown
                if (e.key === 'Tab' && !e.shiftKey && index === allLinks.length - 1) {
                    // Let it tab naturally, dropdown will close
                }

                // Escape closes dropdown
                if (e.key === 'Escape') {
                    e.preventDefault();
                    const parentLink = parentLi.querySelector('a');
                    if (parentLink) {
                        parentLink.focus();
                    }
                }
            });
        });

        // ===================================================================
        // Close Mobile Menu on Resize to Desktop
        // ===================================================================

        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth > 900) {
                    if (navToggle) {
                        navToggle.setAttribute('aria-expanded', 'false');
                    }
                    if (siteNav) {
                        siteNav.setAttribute('data-open', 'false');
                    }
                    if (overlay) {
                        overlay.setAttribute('data-open', 'false');
                    }
                    body.style.overflow = '';
                }
            }, 250);
        });

    });
})();
