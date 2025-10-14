/**
 * Blog Page Category Filtering
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        const filterTabs = document.querySelectorAll('.blog-filter__tab');
        const blogCards = document.querySelectorAll('.blog-card');

        if (filterTabs.length === 0 || blogCards.length === 0) return;

        filterTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const category = this.dataset.category;

                // Update active state
                filterTabs.forEach(t => t.classList.remove('blog-filter__tab--active'));
                this.classList.add('blog-filter__tab--active');

                // Filter cards
                blogCards.forEach(card => {
                    const cardCategory = card.dataset.category;

                    if (category === 'all' || cardCategory === category) {
                        card.style.display = 'block';
                        // Fade in animation
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.transition = 'opacity 0.3s ease';
                            card.style.opacity = '1';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });
})();
