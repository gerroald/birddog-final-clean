<?php
/**
 * Head Snippets Component
 * Analytics and tracking code placeholders
 */

// Google Analytics 4
if (defined('GA4_MEASUREMENT_ID') && GA4_MEASUREMENT_ID) {
    ?>
    <!-- Google Analytics 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr(GA4_MEASUREMENT_ID); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo esc_attr(GA4_MEASUREMENT_ID); ?>', {
            'page_title': document.title,
            'page_location': window.location.href
        });
    </script>
    <?php
}

// Meta Pixel (Facebook)
if (defined('META_PIXEL_ID') && META_PIXEL_ID) {
    ?>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo esc_attr(META_PIXEL_ID); ?>');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
             src="https://www.facebook.com/tr?id=<?php echo esc_attr(META_PIXEL_ID); ?>&ev=PageView&noscript=1" />
    </noscript>
    <?php
}

// Additional tracking snippets can be added here
// Example: Google Tag Manager, Hotjar, etc.

// Custom tracking events for moving company
?>
<script>
// Custom tracking for moving company interactions
document.addEventListener('DOMContentLoaded', function() {
    // Track phone number clicks
    document.querySelectorAll('a[href^="tel:"]').forEach(function(link) {
        link.addEventListener('click', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'phone_click', {
                    'event_category': 'engagement',
                    'event_label': 'phone_number'
                });
            }
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Contact');
            }
        });
    });
    
    // Track quote form interactions
    document.querySelectorAll('a[href*="/contact/"]').forEach(function(link) {
        link.addEventListener('click', function() {
            if (typeof gtag !== 'undefined') {
                gtag('event', 'quote_request', {
                    'event_category': 'lead_generation',
                    'event_label': 'contact_form'
                });
            }
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Lead');
            }
        });
    });
    
    // Track service page views
    if (document.body.classList.contains('service-detail')) {
        if (typeof gtag !== 'undefined') {
            gtag('event', 'service_page_view', {
                'event_category': 'engagement',
                'event_label': 'service_detail'
            });
        }
    }
});
</script>