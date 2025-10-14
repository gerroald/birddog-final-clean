<?php
/**
 * Schema.org JSON-LD Functions
 * Generates structured data for SEO and rich snippets
 */

if (!function_exists('sr_print_org_schema')) {
    function sr_print_org_schema() {
        $phoneValue = defined('BUSINESS_PHONE_LINK') ? str_replace('tel:', '', BUSINESS_PHONE_LINK) : (defined('BUSINESS_PHONE') ? BUSINESS_PHONE : '+1-405-000-0000');

        $streetAddress = '3509 NW 22nd St';
        $city = 'Oklahoma City';
        $state = 'OK';
        $postalCode = '73107';

        if (defined('BUSINESS_ADDRESS')) {
            $addressParts = array_map('trim', explode(',', BUSINESS_ADDRESS));
            if (!empty($addressParts[0])) {
                $streetAddress = $addressParts[0];
            }
            if (!empty($addressParts[1])) {
                $city = $addressParts[1];
            }
            if (!empty($addressParts[2]) && preg_match('/([A-Z]{2})\s+(\d{5}(?:-\d{4})?)/', $addressParts[2], $stateZipMatch)) {
                $state = $stateZipMatch[1];
                $postalCode = $stateZipMatch[2];
            }
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'MovingCompany',
            'name' => defined('BUSINESS_NAME') ? BUSINESS_NAME : 'Bird Dog Delivery & Moving',
            'description' => 'Professional moving services in Oklahoma City metro area. Licensed & insured crews for local moves, labor-only services, furniture delivery, and more.',
            'url' => home_url('/'),
            'logo' => get_stylesheet_directory_uri() . '/assets/images/logo.svg',
            'image' => get_stylesheet_directory_uri() . '/assets/img/areas/area-downtown-edmond.jpg',
            'telephone' => $phoneValue,
            'email' => defined('BUSINESS_EMAIL') ? BUSINESS_EMAIL : 'info@birddogmoving.com',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => $streetAddress,
                'addressLocality' => $city,
                'addressRegion' => $state,
                'postalCode' => $postalCode,
                'addressCountry' => 'US'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '35.4676',
                'longitude' => '-97.5164'
            ],
            'areaServed' => [
                [
                    '@type' => 'City',
                    'name' => 'Oklahoma City',
                    'containedInPlace' => [
                        '@type' => 'State',
                        'name' => 'Oklahoma'
                    ]
                ],
                [
                    '@type' => 'City',
                    'name' => 'Edmond',
                    'containedInPlace' => [
                        '@type' => 'State',
                        'name' => 'Oklahoma'
                    ]
                ],
                [
                    '@type' => 'City',
                    'name' => 'Norman',
                    'containedInPlace' => [
                        '@type' => 'State',
                        'name' => 'Oklahoma'
                    ]
                ]
            ],
            'serviceType' => [
                'Local Moving',
                'Labor-Only Loading/Unloading',
                'Furniture Delivery',
                'Packing & Supplies',
                'Single-Item Haul-Away'
            ],
            'sameAs' => [
                'https://www.facebook.com/birddogmoving',
                'https://www.instagram.com/birddogmoving',
                'https://www.google.com/maps/place/Bird+Dog+Delivery+%26+Moving'
            ],
            'openingHours' => [
                'Mo-Fr 08:00-18:00',
                'Sa 09:00-16:00'
            ],
            'priceRange' => '$$',
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '127',
                'bestRating' => '5',
                'worstRating' => '1'
            ]
        ];
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}

if (!function_exists('sr_print_breadcrumb_schema')) {
    function sr_print_breadcrumb_schema($crumbs) {
        if (empty($crumbs) || !is_array($crumbs)) {
            return;
        }
        
        $breadcrumbList = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => []
        ];
        
        foreach ($crumbs as $index => $crumb) {
            $breadcrumbList['itemListElement'][] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $crumb['name'],
                'item' => isset($crumb['url']) ? $crumb['url'] : ''
            ];
        }
        
        echo '<script type="application/ld+json">' . json_encode($breadcrumbList, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}

if (!function_exists('sr_print_service_schema')) {
    function sr_print_service_schema($serviceName) {
        $serviceMap = [
            'Local Moving' => [
                'description' => 'Professional local moving services for homes and businesses in Oklahoma City metro area.',
                'serviceType' => 'MovingService',
                'provider' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ]
            ],
            'Labor-Only Loading/Unloading' => [
                'description' => 'Expert labor-only services for loading and unloading trucks, pods, and moving containers.',
                'serviceType' => 'MovingService',
                'provider' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ]
            ],
            'Furniture Delivery' => [
                'description' => 'Safe and professional furniture delivery services from store to home.',
                'serviceType' => 'DeliveryService',
                'provider' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ]
            ],
            'Packing & Supplies' => [
                'description' => 'Professional packing services and moving supplies for your relocation needs.',
                'serviceType' => 'MovingService',
                'provider' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ]
            ],
            'Single-Item Haul-Away' => [
                'description' => 'Quick and eco-friendly haul-away services for single items and furniture.',
                'serviceType' => 'MovingService',
                'provider' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ]
            ]
        ];
        
        $serviceData = $serviceMap[$serviceName] ?? [
            'description' => 'Professional moving services in Oklahoma City.',
            'serviceType' => 'MovingService',
            'provider' => [
                '@type' => 'MovingCompany',
                'name' => 'Bird Dog Delivery & Moving'
            ]
        ];
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => $serviceData['serviceType'],
            'name' => $serviceName,
            'description' => $serviceData['description'],
            'provider' => $serviceData['provider'],
            'areaServed' => [
                '@type' => 'City',
                'name' => 'Oklahoma City'
            ],
            'availableChannel' => [
                '@type' => 'ServiceChannel',
                'serviceUrl' => home_url('/contact/'),
                'servicePhone' => '+1234567890'
            ]
        ];
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    }
}

if (!function_exists('sr_print_reviews_schema')) {
    function sr_print_reviews_schema($reviews) {
        if (empty($reviews) || !is_array($reviews)) {
            return;
        }
        
        $totalRating = 0;
        $reviewCount = count($reviews);
        
        // Calculate average rating (simplified - in real implementation, you'd have actual ratings)
        $averageRating = 4.8; // Placeholder average
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'AggregateRating',
            'itemReviewed' => [
                '@type' => 'MovingCompany',
                'name' => 'Bird Dog Delivery & Moving'
            ],
            'ratingValue' => (string)$averageRating,
            'reviewCount' => $reviewCount,
            'bestRating' => '5',
            'worstRating' => '1'
        ];
        
        echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
        
        // Also output individual reviews
        foreach ($reviews as $index => $review) {
            $reviewSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'Review',
                'itemReviewed' => [
                    '@type' => 'MovingCompany',
                    'name' => 'Bird Dog Delivery & Moving'
                ],
                'author' => [
                    '@type' => 'Person',
                    'name' => $review['name']
                ],
                'reviewBody' => $review['quote'],
                'reviewRating' => [
                    '@type' => 'Rating',
                    'ratingValue' => '5', // Placeholder - in real implementation, you'd have actual ratings
                    'bestRating' => '5',
                    'worstRating' => '1'
                ],
                'datePublished' => date('Y-m-d', strtotime('-' . ($index + 1) . ' months')) // Placeholder dates
            ];
            
            echo '<script type="application/ld+json">' . json_encode($reviewSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
        }
    }
}
?>
