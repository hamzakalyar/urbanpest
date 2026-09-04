<?php
/**
 * UrbanPest — Sectors / Industries Data
 * All industry sectors served, with pest risks and relevant services.
 */

$sectors = [
    [
        'slug'        => 'food-processing',
        'name'        => 'Food Processing',
        'icon'        => 'factory',
        'image'       => '/assets/images/food-inspection.jpg',
        'watermark'   => 'FOOD SAFETY',
        'accent_tag'  => 'HIGH-RISK SECTOR // ZERO CONTAMINATION',
        'badge_text'  => 'BRCGS & HACCP Certified',
        'stat_val'    => '99.8%',
        'stat_label'  => 'Audit Compliance Rate',
        'short_desc'  => 'Protecting food manufacturing facilities from contamination, audit failures, and production downtime caused by pest activity.',
        'description' => 'Food processing environments are high-risk targets for rodents, insects, and stored-product pests. Strict regulatory standards — from BRCGS to FSSC 22000 — demand rigorous pest management with full traceability. UrbanPest delivers integrated programs that safeguard your products, your certifications, and your consumers.',
        'pest_risks'  => [
            ['name' => 'Rodent Contamination', 'desc' => 'Rodents gnaw through packaging, contaminate raw materials, and leave droppings that trigger product recalls and audit non-conformances.'],
            ['name' => 'Stored-Product Insects', 'desc' => 'Beetles, moths, and weevils infest grains, flours, and dry ingredients — causing significant product loss and customer complaints.'],
            ['name' => 'Flies & Airborne Contamination', 'desc' => 'Flies carry pathogens onto food-contact surfaces and products, creating direct food-safety hazards.'],
            ['name' => 'Cockroach Infestations', 'desc' => 'Cockroaches thrive in warm, humid processing areas and can rapidly contaminate food and trigger facility shutdowns.']
        ],
        'relevant_services' => ['rodent-control', 'insect-control', 'fly-control', 'smart-traps', 'connected-rodent-monitoring'],
        'testimonial_index' => 0
    ],
    [
        'slug'        => 'logistics-warehousing',
        'name'        => 'Logistics & Warehousing',
        'icon'        => 'warehouse',
        'image'       => '/assets/images/connected-monitoring.jpg',
        'watermark'   => 'LOGISTICS',
        'accent_tag'  => 'SUPPLY CHAIN // PERIMETER DEFENSE',
        'badge_text'  => '24/7 Smart Grid Active',
        'stat_val'    => '100%',
        'stat_label'  => 'Perimeter Sensor Coverage',
        'short_desc'  => 'Securing supply chain facilities against pest intrusion that threatens goods, operations, and client contracts.',
        'description' => 'Warehouses and distribution centres are vast, complex environments with multiple entry points and high goods turnover. Pests can enter via incoming shipments, open loading bays, and structural gaps — putting stored products, client relationships, and operational efficiency at risk. Our programs combine perimeter defense, connected monitoring, and rapid response.',
        'pest_risks'  => [
            ['name' => 'Rodent Intrusion', 'desc' => 'Large floor areas and loading docks offer easy access for rodents, which cause damage to goods and packaging.'],
            ['name' => 'Bird Nesting', 'desc' => 'Birds nest in rafters and roof spaces, causing contamination from droppings and feathers across stored goods.'],
            ['name' => 'Insect Hitchhikers', 'desc' => 'Insects arrive in incoming shipments and pallets, potentially spreading to other stored products.'],
            ['name' => 'Wildlife Access', 'desc' => 'Poorly sealed buildings attract wildlife seeking shelter, leading to contamination and structural damage.']
        ],
        'relevant_services' => ['rodent-control', 'bird-control', 'insect-control', 'connected-rodent-monitoring'],
        'testimonial_index' => 1
    ],
    [
        'slug'        => 'hospitality',
        'name'        => 'Hospitality',
        'icon'        => 'hotel',
        'image'       => '/assets/images/hotel-hospitality.jpg',
        'watermark'   => 'HOSPITALITY',
        'accent_tag'  => 'HOTELS & VENUES // ZERO FOOTPRINT',
        'badge_text'  => 'Discreet VIP Protection',
        'stat_val'    => '24/7',
        'stat_label'  => 'Reputation & Guest Safeguard',
        'short_desc'  => 'Safeguarding guest experience and brand reputation in hotels, restaurants, and leisure venues.',
        'description' => 'In hospitality, a single pest sighting can destroy years of brand building. Guest reviews, food hygiene ratings, and health inspections all depend on invisible, proactive pest management. UrbanPest provides discreet, responsive service that protects your guests, your ratings, and your revenue — 24/7, 365 days a year.',
        'pest_risks'  => [
            ['name' => 'Bed Bugs', 'desc' => 'Bed bugs spread between rooms via luggage and laundry, causing guest complaints, negative reviews, and costly room closures.'],
            ['name' => 'Cockroaches in Kitchens', 'desc' => 'Commercial kitchens provide ideal conditions for cockroaches, which threaten food hygiene scores and guest safety.'],
            ['name' => 'Rodent Activity', 'desc' => 'Rodents in food-prep areas, stores, and guest areas cause contamination, damage, and severe reputational harm.'],
            ['name' => 'Fly Issues', 'desc' => 'Flies in dining areas and kitchens are a visible nuisance and a genuine food-safety risk.']
        ],
        'relevant_services' => ['insect-control', 'rodent-control', 'fly-control', 'disinfection-services'],
        'testimonial_index' => 2
    ],
    [
        'slug'        => 'food-retail',
        'name'        => 'Food Retail',
        'icon'        => 'shopping-cart',
        'image'       => '/assets/images/food-inspection.jpg',
        'watermark'   => 'FOOD RETAIL',
        'accent_tag'  => 'SUPERMARKETS & GROCERY // CONSUMER TRUST',
        'badge_text'  => 'Retail Hygiene Standard',
        'stat_val'    => '< 2hr',
        'stat_label'  => 'Emergency SLA Dispatch',
        'short_desc'  => 'Protecting supermarkets, grocery chains, and food stores from pests that endanger products and customer trust.',
        'description' => 'Food retail environments face constant pest pressure — from incoming deliveries through to customer-facing shop floors. With perishable goods, strict food safety regulations, and direct public visibility, effective pest management is essential to maintaining customer trust and regulatory compliance.',
        'pest_risks'  => [
            ['name' => 'Stored-Product Pests', 'desc' => 'Beetles and moths infest dry goods, cereals, and bakery products on shelves and in storerooms.'],
            ['name' => 'Rodent Contamination', 'desc' => 'Rodents access stores through service areas and delivery bays, damaging stock and leaving contamination.'],
            ['name' => 'Fly Activity', 'desc' => 'Fresh produce, deli counters, and waste areas attract flies that are visible to customers and inspectors.'],
            ['name' => 'Ant Invasions', 'desc' => 'Ants are attracted to sugar-based products and bakery areas, causing product contamination and customer complaints.']
        ],
        'relevant_services' => ['rodent-control', 'insect-control', 'fly-control', 'smart-traps'],
        'testimonial_index' => 3
    ],
    [
        'slug'        => 'facilities-management',
        'name'        => 'Facilities Management',
        'icon'        => 'building',
        'image'       => '/assets/images/digital-dashboard.jpg',
        'watermark'   => 'FACILITIES',
        'accent_tag'  => 'MULTI-SITE PORTFOLIOS // CENTRALIZED OVERSIGHT',
        'badge_text'  => 'Portfolio-Wide Portal',
        'stat_val'    => '99.4%',
        'stat_label'  => 'SLA Service Execution',
        'short_desc'  => 'Integrated pest management for multi-site property portfolios and facilities management companies.',
        'description' => 'Facilities management companies need consistent, reliable pest control across diverse property portfolios — offices, retail parks, mixed-use developments, and more. UrbanPest offers centralised account management, standardised service delivery, and consolidated reporting that simplifies procurement and proves value to your clients.',
        'pest_risks'  => [
            ['name' => 'Multi-Site Complexity', 'desc' => 'Managing pest control across diverse building types and locations requires standardised processes and centralised oversight.'],
            ['name' => 'Tenant Complaints', 'desc' => 'Pest issues reported by tenants require rapid response to maintain occupancy rates and landlord reputation.'],
            ['name' => 'Grounds & Exterior Pests', 'desc' => 'Birds, rodents, and insects in communal areas, car parks, and landscaped grounds affect property appeal.'],
            ['name' => 'Compliance Across Sites', 'desc' => 'Different building uses may require different compliance standards, demanding flexible and knowledgeable service delivery.']
        ],
        'relevant_services' => ['rodent-control', 'bird-control', 'insect-control', 'connected-rodent-monitoring'],
        'testimonial_index' => 4
    ],
    [
        'slug'        => 'pharmaceutical',
        'name'        => 'Pharmaceutical',
        'icon'        => 'pill',
        'image'       => '/assets/images/pharma-cleanroom.jpg',
        'watermark'   => 'PHARMA LAB',
        'accent_tag'  => 'GMP & CLEANROOM // ZERO DEFECT TOLERANCE',
        'badge_text'  => 'GMP Grade Pest Protocol',
        'stat_val'    => '100%',
        'stat_label'  => 'Sterile Zone Traceability',
        'short_desc'  => 'GMP-compliant pest management for pharmaceutical manufacturing, R&D, and distribution environments.',
        'description' => 'Pharmaceutical facilities operate under the strictest quality and compliance standards. A single pest incident can halt production, compromise product integrity, and trigger regulatory action. UrbanPest delivers pest management programs designed specifically for GMP, GDP, and cleanroom environments — with zero tolerance for risk.',
        'pest_risks'  => [
            ['name' => 'Contamination of Active Ingredients', 'desc' => 'Insects and rodents can contaminate raw materials, intermediates, and finished products — potentially endangering patients.'],
            ['name' => 'Cleanroom Breaches', 'desc' => 'Even microscopic pest debris can compromise cleanroom integrity and classified manufacturing areas.'],
            ['name' => 'Regulatory Non-Compliance', 'desc' => 'Pest evidence during GMP audits can result in warning letters, production stoppages, and loss of manufacturing licences.'],
            ['name' => 'Stored-Product Pests in Warehousing', 'desc' => 'Distribution and warehousing of pharmaceutical products requires pest-free environments to maintain GDP compliance.']
        ],
        'relevant_services' => ['rodent-control', 'insect-control', 'smart-traps', 'connected-rodent-monitoring', 'disinfection-services'],
        'testimonial_index' => 0
    ],
    [
        'slug'        => 'offices',
        'name'        => 'Offices',
        'icon'        => 'briefcase',
        'image'       => '/assets/images/hero-technician.jpg',
        'watermark'   => 'CORPORATE',
        'accent_tag'  => 'WORKPLACE HEALTH // DISCREET ASSURANCE',
        'badge_text'  => 'Corporate Health Assured',
        'stat_val'    => '0',
        'stat_label'  => 'Workday Disruption Hours',
        'short_desc'  => 'Creating pest-free workplaces that protect employee wellbeing, productivity, and corporate image.',
        'description' => 'Office environments may seem low-risk, but rodents in ceiling voids, insects in break rooms, and birds on building exteriors are more common than you might think. Pest issues affect employee morale, trigger HR complaints, and damage your corporate image. UrbanPest provides discreet, preventative programs for office buildings of all sizes.',
        'pest_risks'  => [
            ['name' => 'Mice in Ceiling Voids', 'desc' => 'Mice travel through suspended ceilings and wall cavities, causing noise complaints and gnawing damage to cabling.'],
            ['name' => 'Cockroaches in Kitchenettes', 'desc' => 'Staff kitchen areas attract cockroaches and ants, causing employee complaints and hygiene concerns.'],
            ['name' => 'Bird Fouling on Exteriors', 'desc' => 'Bird droppings on building facades, entrance areas, and car parks create an unprofessional appearance and slip hazards.'],
            ['name' => 'Seasonal Fly Issues', 'desc' => 'Cluster flies and other seasonal invaders enter offices in autumn and spring, causing nuisance and distraction.']
        ],
        'relevant_services' => ['rodent-control', 'insect-control', 'bird-control', 'disinfection-services'],
        'testimonial_index' => 1
    ],
    [
        'slug'        => 'healthcare',
        'name'        => 'Healthcare',
        'icon'        => 'medkit',
        'image'       => '/assets/images/pharma-cleanroom.jpg',
        'watermark'   => 'HEALTHCARE',
        'accent_tag'  => 'CLINICAL HYGIENE // INFECTION CONTROL',
        'badge_text'  => 'Clinical Biosecurity Certified',
        'stat_val'    => '99.99%',
        'stat_label'  => 'Pathogen Barrier Protection',
        'short_desc'  => 'Infection prevention and pest management for hospitals, clinics, care homes, and healthcare estates.',
        'description' => 'Healthcare environments demand the highest standards of hygiene and infection control. Pests in hospitals and care facilities pose direct risks to vulnerable patients — carrying pathogens, contaminating sterile areas, and undermining public confidence. UrbanPest works alongside infection control teams to deliver discreet, compliant, and effective pest management.',
        'pest_risks'  => [
            ['name' => 'Pathogen-Carrying Insects', 'desc' => 'Flies, ants, and cockroaches can carry harmful bacteria into patient areas, kitchens, and sterile environments.'],
            ['name' => 'Rodent Activity in Service Areas', 'desc' => 'Rodents in plant rooms, kitchens, and waste areas create contamination risks and damage essential infrastructure.'],
            ['name' => 'Bed Bug Introductions', 'desc' => 'Bed bugs can be introduced by patients and visitors, spreading rapidly through wards and causing distress.'],
            ['name' => 'Bird Nesting on Buildings', 'desc' => 'Bird droppings near air intakes and building entrances introduce allergens and pathogens into healthcare settings.']
        ],
        'relevant_services' => ['insect-control', 'rodent-control', 'fly-control', 'disinfection-services', 'bird-control'],
        'testimonial_index' => 2
    ]
];

// Indexed lookup
$sectorsLookup = [];
foreach ($sectors as $sector) {
    $sectorsLookup[$sector['slug']] = $sector;
}
