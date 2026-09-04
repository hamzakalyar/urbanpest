<?php
/**
 * UrbanPest — Services Data
 * All services and sub-services used across the site.
 */

$serviceCategories = [
    [
        'slug'        => 'pest-control',
        'name'        => 'Pest Control Services',
        'icon'        => 'shield-bug',
        'short_desc'  => 'Comprehensive pest management solutions backed by science and delivered by certified technicians across 90+ countries.',
        'description' => 'Our integrated pest management programs combine advanced detection technology, targeted treatments, and ongoing monitoring to protect your facilities, your people, and your brand reputation. Every solution is tailored to your industry, your environment, and your compliance requirements.',
        'subservices' => [
            [
                'slug'        => 'rodent-control',
                'name'        => 'Rodent Control',
                'icon'        => 'rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'RODENT CONTROL',
                'accent_tag'  => 'INTEGRATED PEST MANAGEMENT // 24/7 SURVEILLANCE',
                'badge_text'  => 'Connected Bait Network',
                'stat_val'    => '99.2%',
                'stat_label'  => 'Infestation Prevention Rate',
                'short_desc'  => 'Proactive rodent management using connected traps, bait stations, and exclusion techniques.',
                'description' => 'Rodents pose serious risks to food safety, structural integrity, and brand reputation. Our rodent control programs combine traditional expertise with connected monitoring devices that alert our teams in real time — reducing response times and eliminating infestations before they escalate.',
                'includes'    => [
                    'Comprehensive site survey and risk assessment',
                    'Connected bait stations with 24/7 activity alerts',
                    'Exclusion work — proofing entry points',
                    'Ongoing monitoring and detailed reporting',
                    'Emergency rapid-response callouts'
                ],
                'steps'       => [
                    ['title' => 'Survey & Assessment', 'desc' => 'Our technicians conduct a thorough inspection of your premises, mapping entry points, harbourage zones, and activity hotspots.'],
                    ['title' => 'Customised Treatment Plan', 'desc' => 'We design a tailored program combining physical barriers, connected traps, and targeted baiting — matched to your facility type and regulatory requirements.'],
                    ['title' => 'Installation & Treatment', 'desc' => 'Certified technicians install monitoring devices and treatments with minimal disruption to your operations.'],
                    ['title' => 'Ongoing Monitoring & Reporting', 'desc' => 'Real-time data from connected devices feeds into your digital dashboard, with scheduled technician visits and detailed compliance reports.']
                ],
                'key_challenges' => [
                    ['name' => 'Packaging & Cable Gnawing Destruction', 'desc' => 'Rodents inflict severe structural damage by gnawing electrical insulation, data lines, and protective packaging.'],
                    ['name' => 'Pathogen Contamination & Disease Spread', 'desc' => 'Rats and mice shed pathogens including Salmonella and Leptospira, risking facility shutdowns and health citations.'],
                    ['name' => 'Rapid Colony Expansion', 'desc' => 'A single rodent pair can multiply exponentially within months if ingress points are left undetected.'],
                    ['name' => 'Regulatory Audit Non-Compliance', 'desc' => 'Pest evidence in sensitive production zones triggers immediate audit non-conformance under GFSI standards.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'hospitality', 'food-retail', 'pharmaceutical']
            ],
            [
                'slug'        => 'insect-control',
                'name'        => 'Insect Control',
                'icon'        => 'insect',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'INSECT CONTROL',
                'accent_tag'  => 'SCIENTIFIC IPM // SPECIES-TARGETED',
                'badge_text'  => 'Entomological Precision',
                'stat_val'    => '100%',
                'stat_label'  => 'HACCP & BRCGS Aligned',
                'short_desc'  => 'Targeted insect management for cockroaches, ants, bed bugs, stored-product insects, and more.',
                'description' => 'From cockroach infestations in commercial kitchens to stored-product insects in warehouses, our insect control solutions use integrated pest management principles — combining habitat modification, targeted treatments, and digital monitoring to deliver lasting results.',
                'includes'    => [
                    'Species identification and risk profiling',
                    'Gel baiting, residual treatments, and growth regulators',
                    'Heat treatments for bed bugs and stored-product pests',
                    'Pheromone monitoring traps with digital tracking',
                    'Staff awareness training and hygiene recommendations'
                ],
                'steps'       => [
                    ['title' => 'Identification & Diagnosis', 'desc' => 'We identify the species, determine the source and scope of the infestation, and assess contributing environmental factors.'],
                    ['title' => 'Targeted Treatment Design', 'desc' => 'Our entomologists design a treatment plan using the most effective, least disruptive methods for your specific pest and environment.'],
                    ['title' => 'Professional Application', 'desc' => 'Trained technicians apply treatments precisely — gel baits, residual sprays, IGRs, or heat treatments — following all safety protocols.'],
                    ['title' => 'Monitoring & Prevention', 'desc' => 'Pheromone traps and scheduled inspections ensure long-term control, with digital dashboards tracking trends over time.']
                ],
                'key_challenges' => [
                    ['name' => 'Hidden Harbourage in Equipment Voids', 'desc' => 'Insects nest deep in mechanical crevices, electrical panels, and drainage networks, avoiding superficial treatments.'],
                    ['name' => 'Chemical Insecticide Resistance', 'desc' => 'Generational pest resistance demands multi-mode insect growth regulators and targeted physical treatments.'],
                    ['name' => 'Microbial Cross-Contamination', 'desc' => 'Cockroaches and ants transfer bacteria from sanitation areas directly to clean prep surfaces.'],
                    ['name' => 'Rapid Stock Spoilage', 'desc' => 'Stored-product beetles and moths contaminate raw bulk dry ingredients, triggering product recalls.']
                ],
                'related_industries' => ['food-processing', 'hospitality', 'food-retail', 'healthcare', 'pharmaceutical']
            ],
            [
                'slug'        => 'bird-control',
                'name'        => 'Bird Management',
                'icon'        => 'bird',
                'image'       => '/assets/images/bird-proofing.jpg',
                'watermark'   => 'BIRD CONTROL',
                'accent_tag'  => 'HUMANE DETERRENCE // FACILITY PROOFING',
                'badge_text'  => 'Architectural Netting & Spikes',
                'stat_val'    => '100%',
                'stat_label'  => 'Humane Wildlife Compliant',
                'short_desc'  => 'Humane bird deterrent and exclusion systems for commercial and industrial properties.',
                'description' => 'Bird infestations cause property damage, contamination, and health risks. Our humane bird management solutions include netting, spike systems, optical gel deterrents, and falconry programs — all designed to protect your premises without harming wildlife.',
                'includes'    => [
                    'Bird species assessment and behaviour analysis',
                    'Netting, spike, and wire systems installation',
                    'Optical gel and visual deterrent deployment',
                    'Falconry deterrent programs for open sites',
                    'Solar panel bird proofing',
                    'Guano clean-up and decontamination'
                ],
                'steps'       => [
                    ['title' => 'Site Assessment', 'desc' => 'We evaluate bird species, population size, nesting patterns, and structural vulnerabilities across your property.'],
                    ['title' => 'Solution Design', 'desc' => 'Our specialists recommend the optimal combination of deterrent methods — physical, visual, or biological — for your site.'],
                    ['title' => 'Professional Installation', 'desc' => 'Our height-trained teams install systems safely and discreetly, with minimal disruption to your business operations.'],
                    ['title' => 'Maintenance & Monitoring', 'desc' => 'Regular inspections and maintenance ensure deterrents remain effective, with adjustments made as bird behaviour evolves.']
                ],
                'key_challenges' => [
                    ['name' => 'Corrosive Guano Structural Damage', 'desc' => 'High uric acid content in bird droppings rapidly etches building facade stonework, roof membranes, and HVAC units.'],
                    ['name' => 'Air Intake Bio-Contamination', 'desc' => 'Nesting materials and feathers near facility intake louvres spread airborne allergens and mites into ductwork.'],
                    ['name' => 'Drainage & Solar Array Blockage', 'desc' => 'Debris and guano clog drainage gutters, causing water pooling and diminishing commercial solar roof output.'],
                    ['name' => 'Slip & Fall Pedestrian Hazards', 'desc' => 'Fouling around loading docks, emergency exits, and walkways creates acute slip liabilities.']
                ],
                'related_industries' => ['logistics-warehousing', 'food-retail', 'facilities-management', 'offices']
            ],
            [
                'slug'        => 'fly-control',
                'name'        => 'Fly Control',
                'icon'        => 'fly',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'FLY CONTROL',
                'accent_tag'  => 'LUMNIA LED // OPTICAL HYGIENE',
                'badge_text'  => 'Low-Energy LED Capture',
                'stat_val'    => '68%',
                'stat_label'  => 'Energy Reduction vs Standard UV',
                'short_desc'  => 'Advanced fly management systems combining UV light traps, digital monitoring, and sanitation consultancy.',
                'description' => 'Flies are vectors for dozens of pathogens and a critical food-safety risk. Our fly control programs use scientifically designed UV light traps, connected monitoring units, and expert sanitation advice to keep fly populations under control in the most demanding commercial environments.',
                'includes'    => [
                    'Scientific placement of UV fly light units',
                    'Connected fly monitoring with species-level data',
                    'Exterior fly management and landscaping advice',
                    'Sanitation audits and staff training',
                    'Regulatory compliance documentation'
                ],
                'steps'       => [
                    ['title' => 'Risk Mapping', 'desc' => 'We map your facility to identify high-risk zones, entry points, and environmental attractants driving fly activity.'],
                    ['title' => 'System Design', 'desc' => 'Specialists select and position fly light units based on species behaviour, building layout, and operational constraints.'],
                    ['title' => 'Installation', 'desc' => 'Units are installed and calibrated for optimal capture performance, with connected sensors providing real-time activity data.'],
                    ['title' => 'Data-Driven Management', 'desc' => 'Trend analysis from connected devices guides proactive interventions, with regular service visits and glue-board replacements.']
                ],
                'key_challenges' => [
                    ['name' => 'High Pathogen Vector Potential', 'desc' => 'Houseflies mechanically carry more than 65 known diseases onto open production lines and food contact surfaces.'],
                    ['name' => 'Zero Public Visibility Tolerance', 'desc' => 'Even a single flying insect in customer dining or retail display areas instantly damages brand trust and reviews.'],
                    ['name' => 'Rapid Breeding in Drain & Waste Zones', 'desc' => 'Fly larvae thrive in organic slime inside grease traps and floor drains within a 7-day lifecycle.'],
                    ['name' => 'Audit Catch Data Mandates', 'desc' => 'GFSI and BRCGS food audits require quantified insect light trap counts with trend analysis.']
                ],
                'related_industries' => ['food-processing', 'hospitality', 'food-retail', 'healthcare']
            ],
            [
                'slug'        => 'disinfection-services',
                'name'        => 'Disinfection Services',
                'icon'        => 'disinfection',
                'image'       => '/assets/images/pharma-cleanroom.jpg',
                'watermark'   => 'BIO DISINFECTION',
                'accent_tag'  => 'CLINICAL GRADE // PATHOGEN ERADICATION',
                'badge_text'  => 'Hospital Grade Sanitization',
                'stat_val'    => '99.9999%',
                'stat_label'  => 'Pathogen Log-Kill Verification',
                'short_desc'  => 'Professional hygiene and disinfection solutions for pathogen control in commercial spaces.',
                'description' => 'Our disinfection services use hospital-grade products and proven application methods — including ULV fogging, electrostatic spraying, and surface sanitisation — to eliminate bacteria, viruses, and fungi. Ideal for outbreak response, routine hygiene programs, and compliance-critical environments.',
                'includes'    => [
                    'Surface and air disinfection treatments',
                    'ULV fogging and electrostatic spraying',
                    'Washroom hygiene programs',
                    'Outbreak rapid-response protocols',
                    'ATP testing and verification',
                    'Compliance documentation and certification'
                ],
                'steps'       => [
                    ['title' => 'Hygiene Assessment', 'desc' => 'We assess your current hygiene protocols, identify high-touch surfaces and contamination risks, and map treatment zones.'],
                    ['title' => 'Treatment Protocol', 'desc' => 'Our team selects the appropriate disinfection method and product based on pathogen type, surface materials, and regulatory standards.'],
                    ['title' => 'Professional Application', 'desc' => 'Certified technicians apply treatments using calibrated equipment, ensuring complete coverage and correct dwell times.'],
                    ['title' => 'Verification & Reporting', 'desc' => 'Post-treatment ATP testing verifies surface cleanliness, with detailed reports for your records and audit requirements.']
                ],
                'key_challenges' => [
                    ['name' => 'Resilient Pathogen Biofilms', 'desc' => 'Bacteria and viruses form micro-matrix biofilms that resist standard custodial wipe-downs.'],
                    ['name' => 'Aerosolized Airborne Transmission', 'desc' => 'Microscopic pathogen droplets remain suspended in air currents throughout enclosed commercial facilities.'],
                    ['name' => 'Emergency Outbreak Downtime', 'desc' => 'Infectious outbreaks trigger costly operational shutdowns, employee absenteeism, and compliance investigations.'],
                    ['name' => 'Quantitative Kill Verification', 'desc' => 'Regulatory audits require documented ATP surface swab verification to prove effective log-kill.']
                ],
                'related_industries' => ['healthcare', 'food-processing', 'hospitality', 'offices', 'pharmaceutical']
            ]
        ]
    ],
    [
        'slug'        => 'digital-pest-monitoring',
        'name'        => 'Digital Pest Monitoring',
        'icon'        => 'radar',
        'short_desc'  => 'Connected pest management technology that delivers real-time visibility, predictive insights, and data-driven decision-making.',
        'description' => 'UrbanPest Connect is our digital pest monitoring platform. Using IoT-enabled devices — smart traps, connected bait stations, and environmental sensors — it provides 24/7 visibility into pest activity across all your sites. Real-time alerts, trend analytics, and automated compliance reporting reduce risk and drive operational efficiency.',
        'subservices' => [
            [
                'slug'        => 'smart-traps',
                'name'        => 'Smart Insect Traps',
                'icon'        => 'smart-trap',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'SMART TRAPS',
                'accent_tag'  => 'AI OPTICAL SENSORS // CELLULAR IOT',
                'badge_text'  => 'Real-Time Cloud Feed',
                'stat_val'    => '< 1s',
                'stat_label'  => 'Sensor Alert Trigger Latency',
                'short_desc'  => 'IoT-enabled insect traps with real-time alerts and species-level identification.',
                'description' => 'Our smart insect traps use optical sensors and AI-powered species recognition to detect and classify insect activity in real time. Alerts are sent instantly to your dashboard and our service teams, enabling faster response and more precise treatments.',
                'includes'    => [
                    '24/7 real-time activity monitoring',
                    'AI-powered species identification',
                    'Instant mobile and email alerts',
                    'Trend analytics and heat-mapping',
                    'Seamless integration with UrbanPest Connect platform'
                ],
                'steps'       => [
                    ['title' => 'Site Survey', 'desc' => 'We assess your facility to determine optimal trap placement based on pest pressure zones and operational flow.'],
                    ['title' => 'Device Deployment', 'desc' => 'Smart traps are installed and connected to the UrbanPest Connect platform with minimal infrastructure requirements.'],
                    ['title' => 'Real-Time Monitoring', 'desc' => 'Activity data streams to your dashboard 24/7, with automatic alerts triggered by threshold breaches.'],
                    ['title' => 'Insight-Driven Action', 'desc' => 'Our analysts review trends and recommend proactive interventions before pest populations escalate.']
                ],
                'key_challenges' => [
                    ['name' => 'Undetected Trap Depletions', 'desc' => 'Conventional mechanical traps remain filled or sprung for weeks between manual technician inspections.'],
                    ['name' => 'Unnecessary Facility Disruption', 'desc' => 'Routing technicians to inspect dozens of empty traps across secure areas wastes operational hours.'],
                    ['name' => 'Delayed Incident Response Times', 'desc' => 'Passive systems cannot alert management when a pest first breaches the facility perimeter.'],
                    ['name' => 'Incomplete Compliance Logging', 'desc' => 'Paper logs lack exact timestamping and sensor-level verification required by rigorous biosecurity auditors.']
                ],
                'related_industries' => ['food-processing', 'pharmaceutical', 'logistics-warehousing', 'food-retail']
            ],
            [
                'slug'        => 'connected-rodent-monitoring',
                'name'        => 'Connected Rodent Monitoring',
                'icon'        => 'connected-rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'URBANPEST CONNECT',
                'accent_tag'  => 'CONNECTED INFRASTRUCTURE // LIVE TELEMETRY',
                'badge_text'  => 'Always-On Telemetry',
                'stat_val'    => '24/7/365',
                'stat_label'  => 'Autonomous Network Uptime',
                'short_desc'  => 'Always-on rodent detection with connected bait stations and trap sensors.',
                'description' => 'Our connected rodent monitoring network turns passive bait stations into active surveillance tools. Motion and vibration sensors detect rodent activity instantly, sending alerts to your team and ours — dramatically reducing the time between detection and action.',
                'includes'    => [
                    'Connected bait stations with motion detection',
                    'Real-time alerts via dashboard, email, and SMS',
                    'Activity heat-maps across multi-site portfolios',
                    'Automated service scheduling based on activity levels',
                    'Full audit trail for regulatory compliance'
                ],
                'steps'       => [
                    ['title' => 'Network Design', 'desc' => 'We map your site and design a connected monitoring network covering all critical zones and potential entry points.'],
                    ['title' => 'Hardware Installation', 'desc' => 'Connected devices are deployed and configured, with cellular or Wi-Fi connectivity established for data transmission.'],
                    ['title' => 'Live Dashboard Access', 'desc' => 'Your team gets instant access to the UrbanPest Connect platform with real-time activity views and customisable alerts.'],
                    ['title' => 'Continuous Optimisation', 'desc' => 'Data analytics drive ongoing network refinement — repositioning devices, adjusting alert thresholds, and predicting seasonal trends.']
                ],
                'key_challenges' => [
                    ['name' => 'Vast Logistics Perimeter Blind Spots', 'desc' => 'Large multi-hectare distribution hubs have extensive perimeter boundaries where rodent ingress goes unnoticed.'],
                    ['name' => 'Late Response to Dock Ingress', 'desc' => 'Rodents entering open loading docks can reach internal racking before scheduled manual checks occur.'],
                    ['name' => 'Stricter Rodenticide Regulations', 'desc' => 'Environmental standards increasingly restrict permanent toxic baits, demanding smart non-toxic sensor traps.'],
                    ['name' => 'Lack of Unified Multi-Site Oversight', 'desc' => 'Corporate facilities teams struggle to monitor compliance and activity trends across disparate regional sites.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'food-retail', 'pharmaceutical', 'hospitality']
            ]
        ]
    ]
];

// Flat list of all sub-services for easy lookup
$allServices = [];
foreach ($serviceCategories as $category) {
    foreach ($category['subservices'] as $service) {
        $service['category_slug'] = $category['slug'];
        $service['category_name'] = $category['name'];
        $allServices[$service['slug']] = $service;
    }
}
