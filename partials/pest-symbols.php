<?php
/**
 * UrbanPest — Pest Threat & Challenge Visual Symbols and Photography System
 * Generates tailored, high-contrast, duotone vector graphics and associated photography
 * for pest risks and commercial challenges across all services and sectors.
 */

function getPestSymbol($riskName) {
    $name = strtolower($riskName);
    
    // 1. Rodent / Gnawing / Rats / Mice / Cable Damage
    if (strpos($name, 'rodent') !== false || strpos($name, 'mice') !== false || strpos($name, 'mouse') !== false || 
        strpos($name, 'rat') !== false || strpos($name, 'gnaw') !== false || strpos($name, 'cable') !== false || strpos($name, 'teeth') !== false) {
        return [
            'color'    => '#EF4444',
            'bg'       => 'rgba(239, 68, 68, 0.12)',
            'border'   => 'rgba(239, 68, 68, 0.28)',
            'tag'      => 'RODENT THREAT',
            'tag_bg'   => 'rgba(239, 68, 68, 0.1)',
            'tag_color'=> '#DC2626',
            'severity' => 'Critical Hazard',
            'pic'      => '/assets/images/connected-monitoring.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EF4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2C8 2 5 5 5 9c0 3 1.5 5.5 3 7.5L7 21h10l-1-4.5c1.5-2 3-4.5 3-7.5 0-4-3-7-7-7z"/>
                            <path d="M9 7c-1.5-1-3-1-4 0"/>
                            <path d="M15 7c1.5-1 3-1 4 0"/>
                            <circle cx="10" cy="9" r="1" fill="#EF4444"/>
                            <circle cx="14" cy="9" r="1" fill="#EF4444"/>
                            <path d="M11 13h2"/>
                            <path d="M8 12l-4 1M8 14l-4 3M16 12l4 1M16 14l4 3"/>
                          </svg>'
        ];
    }

    // 2. Colony Expansion / Nesting / Ingress / Breeding / Population Growth
    if (strpos($name, 'colony') !== false || strpos($name, 'expansion') !== false || strpos($name, 'nest') !== false || strpos($name, 'breeding') !== false || strpos($name, 'harbourage') !== false) {
        return [
            'color'    => '#EA580C',
            'bg'       => 'rgba(234, 88, 12, 0.12)',
            'border'   => 'rgba(234, 88, 12, 0.28)',
            'tag'      => 'COLONY EXPANSION',
            'tag_bg'   => 'rgba(234, 88, 12, 0.1)',
            'tag_color'=> '#C2410C',
            'severity' => 'Rapid Infestation',
            'pic'      => '/assets/images/smart-iot-trap.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EA580C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 2v3M12 19v3M2 12h3M19 12h3"/>
                            <circle cx="12" cy="12" r="7" stroke-dasharray="2 2"/>
                            <circle cx="5" cy="5" r="2"/>
                            <circle cx="19" cy="5" r="2"/>
                            <circle cx="19" cy="19" r="2"/>
                            <circle cx="5" cy="19" r="2"/>
                          </svg>'
        ];
    }

    // 3. Stored-Product Insects / Beetles / Grain / Stock Spoilage / Food
    if (strpos($name, 'stored-product') !== false || strpos($name, 'beetle') !== false || strpos($name, 'weevil') !== false || 
        strpos($name, 'grain') !== false || strpos($name, 'spoilage') !== false || strpos($name, 'stock') !== false) {
        return [
            'color'    => '#D97706',
            'bg'       => 'rgba(217, 119, 6, 0.12)',
            'border'   => 'rgba(217, 119, 6, 0.28)',
            'tag'      => 'STORED COMMODITY PEST',
            'tag_bg'   => 'rgba(217, 119, 6, 0.12)',
            'tag_color'=> '#B45309',
            'severity' => 'Product Loss Hazard',
            'pic'      => '/assets/images/food-inspection.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v4M12 18v4M4 12h4M16 12h4"/>
                            <path d="M12 6a6 6 0 0 0-6 6v2a6 6 0 0 0 12 0v-2a6 6 0 0 0-6-6z"/>
                            <path d="M7 8l-3-3M17 8l3-3M7 16l-3 3M17 16l3 3"/>
                            <line x1="12" y1="10" x2="12" y2="18"/>
                          </svg>'
        ];
    }

    // 4. Resistance / Chemical / Insecticide
    if (strpos($name, 'resistance') !== false || strpos($name, 'chemical') !== false || strpos($name, 'insecticide') !== false) {
        return [
            'color'    => '#8B5CF6',
            'bg'       => 'rgba(139, 92, 246, 0.12)',
            'border'   => 'rgba(139, 92, 246, 0.28)',
            'tag'      => 'CHEMICAL RESISTANCE',
            'tag_bg'   => 'rgba(139, 92, 246, 0.1)',
            'tag_color'=> '#7C3AED',
            'severity' => 'Treatment Efficacy Risk',
            'pic'      => '/assets/images/pharma-cleanroom.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8B5CF6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"/>
                            <path d="M8.5 2h7M7 16h10"/>
                            <circle cx="10" cy="19" r="1" fill="#8B5CF6"/>
                            <circle cx="14" cy="18" r="1.5" fill="#8B5CF6"/>
                          </svg>'
        ];
    }

    // 5. Flies / Flying Insects / Airborne / Light Trap
    if (strpos($name, 'fl') !== false || strpos($name, 'airborne') !== false || strpos($name, 'vector') !== false || strpos($name, 'winged') !== false) {
        return [
            'color'    => '#0284C7',
            'bg'       => 'rgba(2, 132, 199, 0.12)',
            'border'   => 'rgba(2, 132, 199, 0.28)',
            'tag'      => 'AIRBORNE VECTOR',
            'tag_bg'   => 'rgba(2, 132, 199, 0.1)',
            'tag_color'=> '#0369A1',
            'severity' => 'Food Safety Violation',
            'pic'      => '/assets/images/smart-iot-trap.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 9V5M12 19v-4"/>
                            <path d="M9 12H3c0-3 3-6 6-6M15 12h6c0-3-3-6-6-6"/>
                            <path d="M9 12c-2 2-3 4-3 6M15 12c2 2 3 4 3 6"/>
                            <circle cx="10.5" cy="5" r="1" fill="#0284C7"/>
                            <circle cx="13.5" cy="5" r="1" fill="#0284C7"/>
                          </svg>'
        ];
    }

    // 5b. Termites / Subterranean / Timber / Structural Wood / AS 3660
    if (strpos($name, 'termite') !== false || strpos($name, 'timber') !== false || strpos($name, 'wood') !== false || strpos($name, 'subterranean') !== false) {
        return [
            'color'    => '#C2410C',
            'bg'       => 'rgba(194, 65, 12, 0.12)',
            'border'   => 'rgba(194, 65, 12, 0.28)',
            'tag'      => 'TERMITE & TIMBER THREAT',
            'tag_bg'   => 'rgba(194, 65, 12, 0.1)',
            'tag_color'=> '#9A3412',
            'severity' => 'Structural AS 3660 Hazard',
            'pic'      => '/assets/images/termite-inspection.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#C2410C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2v20M7 7l5 5 5-5M7 17l5-5 5 5"/>
                            <rect x="4" y="3" width="16" height="18" rx="2" stroke-dasharray="2 2"/>
                          </svg>'
        ];
    }

    // 6. Cockroaches / Crevices
    if (strpos($name, 'cockroach') !== false) {
        return [
            'color'    => '#B45309',
            'bg'       => 'rgba(180, 83, 9, 0.12)',
            'border'   => 'rgba(180, 83, 9, 0.28)',
            'tag'      => 'HIGH HYGIENE RISK',
            'tag_bg'   => 'rgba(180, 83, 9, 0.1)',
            'tag_color'=> '#92400E',
            'severity' => 'Contamination Threat',
            'pic'      => '/assets/images/cockroach-control.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#B45309" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="13" rx="4" ry="7"/>
                            <path d="M12 6V3M8 4l2 2M16 4l-2 2"/>
                            <path d="M8 10l-5-2M8 13H2M8 16l-5 2"/>
                            <path d="M16 10l5-2M16 13h6M16 16l5 2"/>
                          </svg>'
        ];
    }

    // 7. Birds / Avian / Guano / Feathers / Roosting
    if (strpos($name, 'bird') !== false || strpos($name, 'avian') !== false || strpos($name, 'guano') !== false || 
        strpos($name, 'feather') !== false || strpos($name, 'roost') !== false || strpos($name, 'solar') !== false) {
        return [
            'color'    => '#6366F1',
            'bg'       => 'rgba(99, 102, 241, 0.12)',
            'border'   => 'rgba(99, 102, 241, 0.28)',
            'tag'      => 'AVIAN FACILITY HAZARD',
            'tag_bg'   => 'rgba(99, 102, 241, 0.1)',
            'tag_color'=> '#4F46E5',
            'severity' => 'Structural & Bio Risk',
            'pic'      => '/assets/images/bird-proofing.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#6366F1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 7h.01"/>
                            <path d="M3.4 18c3-4 6-5 9-3 3-4 7-6 10-6-1.5 3-2 5-2 7 0 2 1 3 1.6 4-2 0-4-.5-5.6-1.5-2.4 1-5 1.5-8 1.5-2 0-4-.7-6-2z"/>
                            <path d="M13 14s-2-3-1-5"/>
                          </svg>'
        ];
    }

    // 8. Bed Bugs / Hospitality / Guest Reputation / Visibility
    if (strpos($name, 'bed bug') !== false || strpos($name, 'bug') !== false || strpos($name, 'visibility') !== false || strpos($name, 'reputation') !== false) {
        return [
            'color'    => '#EC4899',
            'bg'       => 'rgba(236, 72, 153, 0.12)',
            'border'   => 'rgba(236, 72, 153, 0.28)',
            'tag'      => 'BRAND REPUTATION HAZARD',
            'tag_bg'   => 'rgba(236, 72, 153, 0.1)',
            'tag_color'=> '#DB2777',
            'severity' => 'High Commercial Exposure',
            'pic'      => '/assets/images/hotel-hospitality.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#EC4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="7" r="3"/>
                            <path d="M6 14a6 6 0 0 0 12 0c0-3-2-5-6-5s-6 2-6 5z"/>
                            <path d="M9 14h6M9 17h6M12 9v11"/>
                            <path d="M5 10l-3-2M5 14l-3 1M5 18l-3 3M19 10l3-2M19 14l3 1M19 18l3 3"/>
                          </svg>'
        ];
    }

    // 9. Pathogens / Biofilms / Disease / Biohazard / Contamination / Swab
    if (strpos($name, 'pathogen') !== false || strpos($name, 'infection') !== false || strpos($name, 'bacteria') !== false || 
        strpos($name, 'virus') !== false || strpos($name, 'biofilm') !== false || strpos($name, 'contamination') !== false || strpos($name, 'kill') !== false) {
        return [
            'color'    => '#DC2626',
            'bg'       => 'rgba(220, 38, 38, 0.12)',
            'border'   => 'rgba(220, 38, 38, 0.28)',
            'tag'      => 'BIOLOGICAL HAZARD',
            'tag_bg'   => 'rgba(220, 38, 38, 0.1)',
            'tag_color'=> '#B91C1C',
            'severity' => 'Critical Bio-Security',
            'pic'      => '/assets/images/pharma-cleanroom.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="4"/>
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                            <circle cx="12" cy="12" r="1.5" fill="#DC2626"/>
                          </svg>'
        ];
    }

    // 10. Regulatory Audit / Compliance / Standards / GFSI / BRCGS / Mandates
    if (strpos($name, 'audit') !== false || strpos($name, 'regulatory') !== false || strpos($name, 'compliance') !== false || 
        strpos($name, 'mandate') !== false || strpos($name, 'gmp') !== false || strpos($name, 'log') !== false) {
        return [
            'color'    => '#7C3AED',
            'bg'       => 'rgba(124, 58, 237, 0.12)',
            'border'   => 'rgba(124, 58, 237, 0.28)',
            'tag'      => 'REGULATORY AUDIT RISK',
            'tag_bg'   => 'rgba(124, 58, 237, 0.1)',
            'tag_color'=> '#6D28D9',
            'severity' => 'GFSI Audit Mandate',
            'pic'      => '/assets/images/digital-dashboard.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M9 12l2 2 4-4"/>
                          </svg>'
        ];
    }

    // 11. Smart Traps / IoT Telemetry / Depletion / Sensor / Alerts
    if (strpos($name, 'trap') !== false || strpos($name, 'sensor') !== false || strpos($name, 'telemetry') !== false || 
        strpos($name, 'depletion') !== false || strpos($name, 'latency') !== false || strpos($name, 'real-time') !== false) {
        return [
            'color'    => '#059669',
            'bg'       => 'rgba(5, 150, 105, 0.12)',
            'border'   => 'rgba(5, 150, 105, 0.28)',
            'tag'      => 'IOT SURVEILLANCE TELEMETRY',
            'tag_bg'   => 'rgba(5, 150, 105, 0.1)',
            'tag_color'=> '#047857',
            'severity' => 'Continuous Telemetry',
            'pic'      => '/assets/images/smart-iot-trap.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z"/>
                            <path d="M12 6a6 6 0 1 0 6 6 6 6 0 0 0-6-6zm0 10a4 4 0 1 1 4-4 4 4 0 0 1-4 4z"/>
                            <circle cx="12" cy="12" r="2" fill="#059669"/>
                          </svg>'
        ];
    }

    // 12. Perimeter Ingress / Dock / Logistics / Blind Spots / Facility Slip
    if (strpos($name, 'perimeter') !== false || strpos($name, 'dock') !== false || strpos($name, 'ingress') !== false || 
        strpos($name, 'blind spot') !== false || strpos($name, 'logistics') !== false || strpos($name, 'slip') !== false) {
        return [
            'color'    => '#0284C7',
            'bg'       => 'rgba(2, 132, 199, 0.12)',
            'border'   => 'rgba(2, 132, 199, 0.28)',
            'tag'      => 'PERIMETER BREACH HAZARD',
            'tag_bg'   => 'rgba(2, 132, 199, 0.1)',
            'tag_color'=> '#0369A1',
            'severity' => 'Perimeter Vulnerability',
            'pic'      => '/assets/images/connected-monitoring.jpg',
            'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#0284C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2"/>
                            <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
                            <circle cx="12" cy="12" r="3" stroke="#DC2626" fill="rgba(220,38,38,0.2)"/>
                          </svg>'
        ];
    }

    // 13. Operational / Disruption / Downtime / Multi-site
    return [
        'color'    => '#2563EB',
        'bg'       => 'rgba(37, 99, 235, 0.12)',
        'border'   => 'rgba(37, 99, 235, 0.28)',
        'tag'      => 'OPERATIONAL CONTINUITY',
        'tag_bg'   => 'rgba(37, 99, 235, 0.1)',
        'tag_color'=> '#1D4ED8',
        'severity' => 'High Operational Priority',
        'pic'      => '/assets/images/customer-dispatch.jpg',
        'svg'      => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2563EB" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                        <polyline points="2 17 12 22 22 17"></polyline>
                        <polyline points="2 12 12 17 22 12"></polyline>
                      </svg>'
    ];
}

/**
 * Helper to return service-specific icon vector and category thumbnail
 */
function getServiceVisual($serviceSlug) {
    switch ($serviceSlug) {
        case 'termite-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M7 7l5 5 5-5M7 17l5-5 5 5"/><rect x="4" y="3" width="16" height="18" rx="2" stroke-dasharray="2 2"/></svg>',
                'pic'   => '/assets/images/termite-inspection.jpg',
                'color' => '#C2410C'
            ];
        case 'cockroach-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="13" rx="4" ry="7"/><path d="M12 6V3M8 4l2 2M16 4l-2 2"/><path d="M8 10l-5-2M8 13H2M8 16l-5 2"/><path d="M16 10l5-2M16 13h6M16 16l5 2"/></svg>',
                'pic'   => '/assets/images/cockroach-control.jpg',
                'color' => '#B45309'
            ];
        case 'bed-bug-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="7" r="3"/><path d="M6 14a6 6 0 0 0 12 0c0-3-2-5-6-5s-6 2-6 5z"/><path d="M9 14h6M9 17h6M12 9v11"/></svg>',
                'pic'   => '/assets/images/hotel-hospitality.jpg',
                'color' => '#DB2777'
            ];
        case 'stored-product-pests':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4 12h4M16 12h4"/><path d="M12 6a6 6 0 0 0-6 6v2a6 6 0 0 0 12 0v-2a6 6 0 0 0-6-6z"/></svg>',
                'pic'   => '/assets/images/food-inspection.jpg',
                'color' => '#D97706'
            ];
        case 'rodent-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8 2 5 5 5 9c0 3 1.5 5.5 3 7.5L7 21h10l-1-4.5c1.5-2 3-4.5 3-7.5 0-4-3-7-7-7z"/><circle cx="10" cy="9" r="1"/><circle cx="14" cy="9" r="1"/><path d="M8 12l-4 1M16 12l4 1"/></svg>',
                'pic'   => '/assets/images/connected-monitoring.jpg',
                'color' => '#EF4444'
            ];
        case 'insect-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4 12h4M16 12h4"/><path d="M12 6a6 6 0 0 0-6 6v2a6 6 0 0 0 12 0v-2a6 6 0 0 0-6-6z"/><path d="M7 8l-3-3M17 8l3-3"/></svg>',
                'pic'   => '/assets/images/food-inspection.jpg',
                'color' => '#D97706'
            ];
        case 'bird-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 7h.01"/><path d="M3.4 18c3-4 6-5 9-3 3-4 7-6 10-6-1.5 3-2 5-2 7 0 2 1 3 1.6 4-2 0-4-.5-5.6-1.5-2.4 1-5 1.5-8 1.5-2 0-4-.7-6-2z"/></svg>',
                'pic'   => '/assets/images/bird-proofing.jpg',
                'color' => '#6366F1'
            ];
        case 'fly-control':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 9V5M12 19v-4M9 12H3c0-3 3-6 6-6M15 12h6c0-3-3-6-6-6"/></svg>',
                'pic'   => '/assets/images/smart-iot-trap.jpg',
                'color' => '#0284C7'
            ];
        case 'disinfection-services':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v4M12 18v4M2 12h4M18 12h4"/><path d="M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83"/></svg>',
                'pic'   => '/assets/images/pharma-cleanroom.jpg',
                'color' => '#DC2626'
            ];
        case 'smart-traps':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2" fill="currentColor"/></svg>',
                'pic'   => '/assets/images/smart-iot-trap.jpg',
                'color' => '#059669'
            ];
        case 'connected-rodent-monitoring':
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
                'pic'   => '/assets/images/connected-monitoring.jpg',
                'color' => '#2563EB'
            ];
        default:
            return [
                'icon'  => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
                'pic'   => '/assets/images/hero-technician.jpg',
                'color' => '#0FA968'
            ];
    }
}
