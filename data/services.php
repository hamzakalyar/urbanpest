<?php
/**
 * UrbanPest Melbourne — Commercial Services Directory
 * Aligned with Rentokil Australia standard services and Australian regulatory compliance:
 * AEPMA, HACCP Australia, Australian Standards (AS 3660.1/2), and Victorian Department of Health.
 * Operating strictly within Greater Melbourne & Regional Victorian Commercial Hubs.
 */

$serviceCategories = [
    [
        'slug'        => 'pest-control',
        'name'        => 'Commercial Pest Control',
        'icon'        => 'shield-bug',
        'short_desc'  => 'Comprehensive commercial pest management solutions backed by entomological science and delivered by certified Melbourne technicians.',
        'description' => 'Our integrated pest management (IPM) programs combine advanced detection technology, targeted treatments, and continuous monitoring to protect Melbourne facilities, your staff, and your brand reputation. Every solution is delivered with commercial professionalism and licensed expertise.',
        'subservices' => [
            [
                'slug'        => 'rodent-control',
                'name'        => 'Commercial Rodent Control',
                'icon'        => 'rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'RODENT DEFENSE',
                'accent_tag'  => 'Melbourne Commercial IPM — 24/7 Rapid Response',
                'badge_text'  => 'Targeted Commercial IPM',
                'stat_val'    => '99.4%',
                'stat_label'  => 'Customer Satisfaction Rate',
                'short_desc'  => 'Proactive rodent management for Melbourne commercial facilities using tamper-proof bait stations and digital sensors.',
                'description' => 'Rodents pose severe biosecurity risks to Melbourne food processing facilities, distribution centres, and hospitality venues. Our commercial rodent management combines AS-compliant exclusion, tamper-resistant perimeter stations, and real-time sensor alerts to stop ingress before internal contamination occurs.',
                'includes'    => [
                    'Comprehensive Victorian site audit & ingress risk mapping',
                    'Tamper-resistant external and internal bait & monitoring stations',
                    'Physical exclusion proofing of loading docks and service penetrations',
                    'Digital floor plan trap mapping and activity reporting',
                    'Emergency same-day callout service across Greater Melbourne'
                ],
                'steps'       => [
                    ['title' => 'Commercial Site Audit', 'desc' => 'Certified technicians inspect your premises, mapping roof voids, drainage entries, and external perimeter pressure points.'],
                    ['title' => 'Customised Treatment Strategy', 'desc' => 'We design an IPM plan combining non-toxic monitoring, physical proofing, and targeted baits complying with health regulations.'],
                    ['title' => 'Discreet System Installation', 'desc' => 'Tamper-proof stations and connected units installed outside production hours to avoid operational interruption.'],
                    ['title' => 'Audit-Ready Reporting', 'desc' => 'Every visit logs barcode-scanned trap counts into digital compliance reports ready for Victorian health audits.']
                ],
                'key_challenges' => [
                    ['name' => 'Packaging & Cable Gnawing Destruction', 'desc' => 'Rats gnaw electrical conduit and data cables in Melbourne warehouses, causing severe fire hazards and system downtime.'],
                    ['name' => 'Pathogen Contamination & Disease Spread', 'desc' => 'Rodents vector Salmonella and Leptospirosis, triggering immediate audit failure and Victorian Department of Health citations.'],
                    ['name' => 'Rapid Colony Expansion', 'desc' => 'A single breeding pair can produce over 200 offspring annually in climate-controlled distribution centres if unmanaged.'],
                    ['name' => 'Regulatory Non-Compliance & Penalties', 'desc' => 'Evidence of rodent presence in commercial storage can lead to council fines, failed inspections, and immediate business closures.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'hospitality', 'food-retail', 'pharmaceutical']
            ],
            [
                'slug'        => 'cockroach-control',
                'name'        => 'Commercial Cockroach Control',
                'icon'        => 'cockroach',
                'image'       => '/assets/images/cockroach-control.jpg',
                'watermark'   => 'COCKROACH ERADICATION',
                'accent_tag'  => 'Food Grade Safe — Non-Disruptive Gel Baiting',
                'badge_text'  => 'Food Grade Safe Gel Baiting',
                'stat_val'    => '100%',
                'stat_label'  => 'Colony Knockdown Rate',
                'short_desc'  => 'Targeted German & American cockroach eradication for Melbourne commercial kitchens, cafes, and food processing plants.',
                'description' => 'Cockroaches reproduce rapidly in commercial kitchen motors, warm compressors, and drain networks. Our cockroach management program uses micro-encapsulated baits, insect growth regulators (IGRs), and precision void treatments that eliminate colonies without requiring kitchen shutdown or chemical tainting.',
                'includes'    => [
                    'Entomological species identification (German, American, Oriental)',
                    'Targeted food-grade gel baiting inside motor housings and crevices',
                    'Insect Growth Regulators (IGR) to halt reproductive nymph cycles',
                    'Drain biofilm treatments and harbourage sealing',
                    'Post-treatment compliance certification for Melbourne councils'
                ],
                'steps'       => [
                    ['title' => 'Harbourage Inspection', 'desc' => 'Using endoscopic inspection tools, we locate breeding nests behind stainless panels, refrigeration motors, and conduits.'],
                    ['title' => 'Precision Gel Application', 'desc' => 'Targeted droplets of high-palatability bait placed directly in foraging zones, invisible to patrons and food prep areas.'],
                    ['title' => 'Growth Interruption (IGR)', 'desc' => 'Application of hormone regulators ensures surviving nymphs fail to mature into breeding adults.'],
                    ['title' => 'Scheduled Monitoring & Certification', 'desc' => 'Sticky detector traps monitor residual activity, accompanied by Council health inspector verification reports.']
                ],
                'key_challenges' => [
                    ['name' => 'Hidden Harbourage in Equipment Voids', 'desc' => 'Cockroaches nest inside dishwashers, coffee machines, and compressor housings, shielded from surface cleaning.'],
                    ['name' => 'Chemical Insecticide Resistance', 'desc' => 'German cockroaches exhibit behavioral and chemical bait aversion, requiring multi-matrix active rotations.'],
                    ['name' => 'Microbial Cross-Contamination', 'desc' => 'Cockroaches transfer Salmonella and E. coli from floor drains directly onto food preparation surfaces.'],
                    ['name' => 'Severe Council Fines & Closure Orders', 'desc' => 'Council health inspections result in public closure notices and substantial fines if live roaches are detected.']
                ],
                'related_industries' => ['hospitality', 'food-retail', 'food-processing', 'healthcare']
            ],
            [
                'slug'        => 'termite-control',
                'name'        => 'Commercial Termite Management',
                'icon'        => 'termite',
                'image'       => '/assets/images/termite-inspection.jpg',
                'watermark'   => 'AS 3660 COMPLIANCE',
                'accent_tag'  => 'Australian Standard AS 3660.1 / AS 3660.2 Certified',
                'badge_text'  => 'Termatrac Radar & Thermal Imaging',
                'stat_val'    => '$0',
                'stat_label'  => 'Structural Damage Under Warranty',
                'short_desc'  => 'Comprehensive commercial termite inspections, radar detection, chemical soil barriers, and continuous monitoring systems across Victoria.',
                'description' => 'Subterranean termites (Coptotermes and Schedorhinotermes) inflict catastrophic structural damage on Melbourne commercial buildings. UrbanPest delivers commercial inspections strictly compliant with Australian Standard AS 3660, utilizing Termatrac T3i radar, thermal imaging, chemical perimeter protection, and baiting systems.',
                'includes'    => [
                    'Comprehensive AS 3660 commercial timber pest inspection',
                    'Termatrac T3i microwave radar motion detection through walls',
                    'High-resolution FLIR thermal imaging camera surveys',
                    'Chemical treated soil zones (Termidor / Altriset barriers)',
                    'In-ground and concrete-core commercial monitoring stations',
                    '10-year timber protection warranties for commercial assets'
                ],
                'steps'       => [
                    ['title' => 'Advanced Non-Invasive Diagnostic', 'desc' => 'Our certified inspectors survey the entire building envelope using radar, moisture meters, and thermal cameras.'],
                    ['title' => 'Comprehensive AS 3660 Report', 'desc' => 'You receive an exhaustive digital report detailing termite activity, high-risk moisture zones, and mitigation steps.'],
                    ['title' => 'Barrier & Bait Installation', 'desc' => 'We deploy non-repellent chemical soil barriers or install discreet commercial concrete baiting networks.'],
                    ['title' => 'Annual Re-Inspection & Warranty', 'desc' => 'Regular scheduled re-inspections maintain structural integrity and extend commercial asset warranty coverage.']
                ],
                'key_challenges' => [
                    ['name' => 'Undetected Concealed Timber Destruction', 'desc' => 'Subterranean termites hollow out structural timber frames behind plasterboard without visible exterior clues.'],
                    ['name' => 'Expansive Melbourne Subfloor Voids', 'desc' => 'Heritage Victorian commercial buildings and warehouse timber floors present vulnerable subfloor access.'],
                    ['name' => 'Insurance Exclusions for Termite Damage', 'desc' => 'Commercial building insurance policies universally exclude termite damage, risking hundreds of thousands in loss.'],
                    ['name' => 'Strict Building Code of Australia Mandates', 'desc' => 'Commercial property sales, leases, and renovations require certified AS 3660 compliance documentation.']
                ],
                'related_industries' => ['facilities-management', 'offices', 'logistics-warehousing', 'hospitality']
            ],
            [
                'slug'        => 'bird-control',
                'name'        => 'Commercial Bird Proofing & Netting',
                'icon'        => 'bird',
                'image'       => '/assets/images/bird-proofing.jpg',
                'watermark'   => 'AVIAN DETERRENCE',
                'accent_tag'  => 'Humane Bird Deterrents — Melbourne Working at Heights Certified',
                'badge_text'  => 'Rooftop & Canopy Exclusion Specialist',
                'stat_val'    => '100%',
                'stat_label'  => 'Humane Wildlife Code Compliant',
                'short_desc'  => 'Humane bird netting, stainless spikes, shock tracks, and optical gel systems for Melbourne commercial rooftops and canopies.',
                'description' => 'Pigeons, seagulls, and mynas cause severe structural corrosion, solar panel damage, and health hazards across Melbourne commercial properties. Our height-certified specialists engineer humane exclusion systems including heavy-duty UV-stabilised netting, solar skirting, and discreet optical deterrents.',
                'includes'    => [
                    'Bird activity assessment and roosting pattern analysis',
                    'Heavy-duty commercial UV-stabilised poly netting installation',
                    'Marine-grade stainless steel bird spikes and post-and-wire systems',
                    'Commercial rooftop solar panel mesh bird proofing',
                    'Discreet optical gel and acoustic deterrent deployment',
                    'Biohazard guano decontamination and sanitisation'
                ],
                'steps'       => [
                    ['title' => 'Facade & Rooftop Survey', 'desc' => 'Height-certified technicians assess building architecture, roosting ledges, HVAC units, and solar arrays.'],
                    ['title' => 'Custom Engineering Design', 'desc' => 'We specify discreet, architectural-grade netting and spike arrays tailored to building aesthetics.'],
                    ['title' => 'Safe Working-at-Heights Install', 'desc' => 'Boom lifts, abseil rigging, and certified anchor lines deployed with zero pedestrian disruption.'],
                    ['title' => 'Guano Remediation & Clearance', 'desc' => 'Corrosive bird droppings safely removed, disinfected, and neutralised with anti-microbial treatments.']
                ],
                'key_challenges' => [
                    ['name' => 'Corrosive Guano Structural Damage', 'desc' => 'Uric acid in pigeon droppings permanently etches building facades, aluminium cladding, and rooftop air handling units.'],
                    ['name' => 'Air Intake Bio-Contamination', 'desc' => 'Avian nesting and feathers near building fresh-air intakes draw airborne mites, fungi, and allergens into HVAC systems.'],
                    ['name' => 'Drainage & Solar Array Blockage', 'desc' => 'Debris and guano block commercial roof gutters, causing ceiling water leaks and diminishing commercial solar roof yield.'],
                    ['name' => 'Pedestrian Slip & Public Liability', 'desc' => 'Fouling on Melbourne CBD entryways, loading docks, and fire escapes creates serious public slip liabilities.']
                ],
                'related_industries' => ['logistics-warehousing', 'food-retail', 'facilities-management', 'offices']
            ],
            [
                'slug'        => 'fly-control',
                'name'        => 'Commercial Fly Control & Lumnia LED',
                'icon'        => 'fly',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'FLY DEFENSE',
                'accent_tag'  => 'Low-Energy LED Insect Light Traps (ILT)',
                'badge_text'  => 'Energy-Efficient LED Traps',
                'stat_val'    => '68%',
                'stat_label'  => 'Energy Reduction vs UV Tubes',
                'short_desc'  => 'Advanced fly management systems combining Lumnia LED light traps, encapsulation technology, and food safety sanitation audits.',
                'description' => 'Flies are carriers of over 60 pathogenic microorganisms and represent an acute food-safety threat. Our Melbourne commercial fly control solutions combine scientifically positioned low-energy LED glue-board units, biological drain treatments, and comprehensive hygiene inspection documentation.',
                'includes'    => [
                    'Scientific lux-meter placement of Lumnia LED fly traps',
                    'Zero-shatter encapsulation glue-boards (no insect fragment blowout)',
                    'Drain enzyme and bio-foaming sanitation programs',
                    'Dumpster and compactor perimeter fly exclusion',
                    'Regular catch-count logging for Food Safety Auditor review'
                ],
                'steps'       => [
                    ['title' => 'Phototactic Risk Mapping', 'desc' => 'We measure light levels and air currents across your facility to identify prime fly flight paths and ingress points.'],
                    ['title' => 'Lumnia Unit Installation', 'desc' => 'High-attraction LED traps installed away from food prep surfaces, maximizing catch without pulling flies inside.'],
                    ['title' => 'Bio-Sanitation of Breeding Sinks', 'desc' => 'Drain bio-foaming eliminates organic sludge where fruit flies and drain flies breed.'],
                    ['title' => 'Digital Catch Analysis', 'desc' => 'Technicians count and identify captured flies, graphing trends to detect seasonal spikes and external sources.']
                ],
                'key_challenges' => [
                    ['name' => 'High Pathogen Vector Potential', 'desc' => 'Flies transfer Salmonella, Campylobacter, and Listeria onto exposed food contact surfaces within seconds.'],
                    ['name' => 'Zero Public Visibility Tolerance', 'desc' => 'A single flying insect in dining rooms or retail display cases causes immediate consumer complaints and bad reviews.'],
                    ['name' => 'Rapid Breeding in Drain & Waste Zones', 'desc' => 'Phorid and drain flies reproduce in floor drain grime, completing generation cycles every 8 to 10 days.'],
                    ['name' => 'Audit Catch Data Mandates', 'desc' => 'Victorian food compliance audits require verified catch trend documentation and replacement logs.']
                ],
                'related_industries' => ['food-processing', 'hospitality', 'food-retail', 'healthcare']
            ],
            [
                'slug'        => 'bed-bug-control',
                'name'        => 'Commercial Bed Bug Management',
                'icon'        => 'bed-bug',
                'image'       => '/assets/images/hotel-hospitality.jpg',
                'watermark'   => 'THERMAL HEAT TREATMENT',
                'accent_tag'  => '100% Lethal Thermal Heat Remediation',
                'badge_text'  => 'Discreet Commercial Hospitality Protocol',
                'stat_val'    => '24 Hrs',
                'stat_label'  => 'Room Return-To-Service Time',
                'short_desc'  => 'Discreet, same-day bed bug eradication for Melbourne hotels, serviced apartments, and student accommodations.',
                'description' => 'Bed bug incidents can devastate a hotel or hospitality brand’s reputation in hours. UrbanPest provides discreet commercial thermal heat treatments and residual treatments that penetrate deep into mattress seams, baseboards, and wall voids, eliminating all life stages — including eggs — in a single service visit.',
                'includes'    => [
                    'Discreet unmarked vehicle arrival and technician protocol',
                    'Thermal heat treatment reaching 56°C lethal threshold across all voids',
                    'Micro-encapsulated long-lasting residual barrier applications',
                    'Adjoining room proactive barrier containment (above, below, sides)',
                    'Room release certificate enabling immediate re-booking within 24 hours'
                ],
                'steps'       => [
                    ['title' => 'Discreet Room Inspection', 'desc' => 'Thorough examination of headboards, electrical faceplates, and carpet seams to confirm species and density.'],
                    ['title' => 'Thermal Heat Deployment', 'desc' => 'Specialized heaters raise ambient room temperature to 56°C, dehydrating bed bugs and eggs instantly.'],
                    ['title' => 'Perimeter Barrier Shield', 'desc' => 'Application of non-staining residual barrier to baseboards and service conduits prevents migration.'],
                    ['title' => 'Clearance & Room Release', 'desc' => 'Formal clearance issued to management, allowing room to be safely returned to guest inventory that night.']
                ],
                'key_challenges' => [
                    ['name' => 'Catastrophic Reputation & Social Media Damage', 'desc' => 'A single guest review reporting bed bugs can cause cancellations and permanent damage to hotel occupancy rates.'],
                    ['name' => 'Insecticide Resistance in Modern Strains', 'desc' => 'Bed bugs possess thick cuticle resistance to common synthetic pyrethroids, requiring heat treatments.'],
                    ['name' => 'Rapid Migration to Adjacent Guest Rooms', 'desc' => 'Infestations spread through electrical wall cavities and hallway conduits into neighbouring rooms.'],
                    ['name' => 'Extended Room Downtime Financial Losses', 'desc' => 'Traditional multi-spray approaches put hotel rooms out of service for weeks, destroying revenue.']
                ],
                'related_industries' => ['hospitality', 'healthcare', 'offices']
            ],
            [
                'slug'        => 'stored-product-pests',
                'name'        => 'Stored Product Insect Management',
                'icon'        => 'stored-product',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'COMMODITY DEFENSE',
                'accent_tag'  => 'Pheromone Surveillance & Grain Biosecurity',
                'badge_text'  => 'Pheromone Surveillance Standard',
                'stat_val'    => 'Zero',
                'stat_label'  => 'Tolerated Commodity Cross-Contamination',
                'short_desc'  => 'Specialist beetle, weevil, and moth control for Melbourne food manufacturers, grain silos, and bulk distribution warehouses.',
                'description' => 'Stored Product Insects (SPIs) such as flour beetles, grain weevils, and Indian meal moths cause immense financial loss in raw ingredients and finished packaged goods. Our programs combine species-specific pheromone surveillance, temperature manipulation, and precision ULV treatments.',
                'includes'    => [
                    'Pheromone lure trapping networks for early moth & beetle detection',
                    'Commodity temperature & moisture monitoring analysis',
                    'Targeted ultra-low-volume (ULV) misting for warehouse headspace',
                    'Silo and bin crack-and-crevice residual treatments',
                    'Full biosecurity documentation meeting export quarantine standards'
                ],
                'steps'       => [
                    ['title' => 'Commodity & Void Survey', 'desc' => 'Inspect racking, pallet bases, bulk bins, and conveyor crevices for larvae, webbing, and adult beetles.'],
                    ['title' => 'Pheromone Trap Array', 'desc' => 'Deploy species-calibrated pheromone sticky traps across ambient and cool-room warehouse zones.'],
                    ['title' => 'Targeted Sanitation Treatment', 'desc' => 'Apply food-safe treatments to structural crevices and vacuum commodity residue from conveyor tracks.'],
                    ['title' => 'Trend Analysis & Audit Trail', 'desc' => 'Track weekly trap counts to pinpoint incoming supplier shipments harbouring hidden infestations.']
                ],
                'key_challenges' => [
                    ['name' => 'Massive Finished Product Recalls', 'desc' => 'Insect fragments detected in packaged retail food trigger mandatory supermarket recalls costing millions.'],
                    ['name' => 'Invisible Larval Ingress in Raw Materials', 'desc' => 'Eggs and microscopic larvae arrive concealed inside incoming bulk flour, grain, and spice shipments.'],
                    ['name' => 'Difficult Commodity Crevice Harbourage', 'desc' => 'Beetles penetrate corrugated pallet flutes, racking holes, and processing machinery voids.'],
                    ['name' => 'Stringent Export Biosecurity Compliance', 'desc' => 'International and interstate export shipments require zero-tolerance insect-free quarantine certification.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'food-retail']
            ],
            [
                'slug'        => 'disinfection-services',
                'name'        => 'Commercial Bio-Disinfection & Hygiene',
                'icon'        => 'disinfection',
                'image'       => '/assets/images/pharma-cleanroom.jpg',
                'watermark'   => 'TGA DISINFECTION',
                'accent_tag'  => 'TGA-Approved Hospital Grade Pathogen Control',
                'badge_text'  => '99.9999% Microbial Log-Reduction',
                'stat_val'    => 'Log-6',
                'stat_label'  => 'Microbial Reduction Verified by ATP',
                'short_desc'  => 'Hospital-grade surface sanitisation and ULV misting for Melbourne commercial offices, healthcare, and manufacturing facilities.',
                'description' => 'Our commercial disinfection services utilize Therapeutic Goods Administration (TGA) approved hospital-grade chemistries and Ultra-Low Volume (ULV) cold fogging. We rapidly eliminate viruses, bacteria, and fungal spores across high-touch surfaces, verified by quantitative pre- and post-treatment ATP swab testing.',
                'includes'    => [
                    'TGA-listed hospital-grade broad spectrum virucidal chemistry',
                    'Whole-facility Ultra-Low-Volume (ULV) cold misting dispersion',
                    'High-touch point microfiber contact sanitisation (doors, lifts, desks)',
                    'Rapid emergency outbreak response protocol across Melbourne',
                    'Pre- and post-treatment ATP bioluminescence surface swab testing',
                    'Formal certificate of hygiene and decontaminating clearance'
                ],
                'steps'       => [
                    ['title' => 'Contamination Risk Audit', 'desc' => 'Identify critical touchpoints, HVAC air distribution flows, and traffic paths across the facility.'],
                    ['title' => 'Full-Facility ULV Fogging', 'desc' => 'Sub-micron droplets circulate through ambient air, coating vertical and horizontal surfaces evenly.'],
                    ['title' => 'Touchpoint Contact Wipe', 'desc' => 'Targeted manual disinfection of elevator panels, push bars, keyboards, and lunchroom counters.'],
                    ['title' => 'Bioluminescence ATP Testing', 'desc' => 'Quantified swab verification confirms log-kill reduction with an audit-ready compliance certificate.']
                ],
                'key_challenges' => [
                    ['name' => 'Resilient Pathogen Biofilms', 'desc' => 'Viral and bacterial particles shelter within micro-films on desks and stainless surfaces, resisting light cleaning.'],
                    ['name' => 'Aerosolized Airborne Transmission', 'desc' => 'Infectious droplets remain suspended in air currents inside enclosed commercial offices and food plants.'],
                    ['name' => 'Emergency Outbreak Downtime', 'desc' => 'Workplace infections lead to sudden mass absenteeism, facility closures, and regulatory investigations.'],
                    ['name' => 'Quantitative Kill Verification', 'desc' => 'Quality assurance managers require scientific ATP swab logging to prove effective pathogen log-reduction.']
                ],
                'related_industries' => ['healthcare', 'food-processing', 'hospitality', 'offices', 'pharmaceutical']
            ],
            [
                'slug'        => 'insect-control',
                'name'        => 'General Commercial Insect Control',
                'icon'        => 'insect',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'INSECT CONTROL',
                'accent_tag'  => 'Melbourne Commercial IPM — Species Specific',
                'badge_text'  => 'Licensed Melbourne Operators',
                'stat_val'    => '100%',
                'stat_label'  => 'Targeted Coverage Guarantee',
                'short_desc'  => 'Comprehensive protection against ants, spiders, silverfish, and seasonal crawling insects across Melbourne properties.',
                'description' => 'From invasive Argentine ant trails in office kitchens to venomous redback spiders in logistics racking, our integrated insect control programs utilize targeted micro-encapsulated treatments and non-toxic perimeter barriers that deliver enduring results without harming indoor air quality.',
                'includes'    => [
                    'Species-level identification and nest source location',
                    'Targeted perimeter barrier spraying of building foundations',
                    'Sub-slab void dusting and roof space insecticidal treatments',
                    'Non-repellent ant baits that eradicate entire subterranean queens',
                    'Low-toxicity treatments safe for commercial office environments'
                ],
                'steps'       => [
                    ['title' => 'Diagnostic Inspection', 'desc' => 'Identify entry weep holes, garden bed junctions, and structural cracks facilitating insect ingress.'],
                    ['title' => 'Targeted Application', 'desc' => 'Deploy micro-encapsulated perimeter barriers and non-repellent transfer baits.'],
                    ['title' => 'Harbourage Modification', 'desc' => 'Recommend landscaping and structural adjustments to eliminate moisture and food sources.'],
                    ['title' => 'Seasonal Perimeter Maintenance', 'desc' => 'Scheduled preventative boundary treatments ahead of Melbourne spring and summer pest swells.']
                ],
                'key_challenges' => [
                    ['name' => 'Persistent Subterranean Ant Trails', 'desc' => 'Super-colonies establish vast subterranean networks beneath concrete warehouse slabs.'],
                    ['name' => 'Venomous Spider Workplace Liabilities', 'desc' => 'Redback spiders nesting in pallet racking and loading docks present acute staff safety hazards.'],
                    ['name' => 'Paper Archive Destruction by Silverfish', 'desc' => 'Silverfish destroy valuable legal files, books, and archival paper stock in storage vaults.'],
                    ['name' => 'Seasonal Outdoor Invasions', 'desc' => 'Melbourne weather fluctuations trigger sudden mass pest migrations into commercial premises.']
                ],
                'related_industries' => ['logistics-warehousing', 'offices', 'hospitality', 'food-retail']
            ]
        ]
    ],
    [
        'slug'        => 'digital-pest-monitoring',
        'name'        => 'Digital Connected Pest Monitoring',
        'icon'        => 'radar',
        'short_desc'  => 'Connected 24/7 pest management technology delivering real-time telemetry, automated audit logs, and predictive insights.',
        'description' => 'UrbanPest Connect is our enterprise digital pest monitoring platform operating across Greater Melbourne. Using cellular IoT sensors, connected bait stations, and automated trap alarms, it delivers continuous 24/7 visibility into pest activity across your entire facility portfolio, slashing response time to minutes.',
        'subservices' => [
            [
                'slug'        => 'smart-traps',
                'name'        => 'Smart Connected Traps',
                'icon'        => 'smart-trap',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'CONNECTED IOT',
                'accent_tag'  => '24/7 Cellular IoT Sensors — Instant Trigger Dispatch',
                'badge_text'  => 'Zero-Toxic High-Sensitivity Trap',
                'stat_val'    => '< 1s',
                'stat_label'  => 'Cloud Telemetry Alert Latency',
                'short_desc'  => 'IoT-enabled non-toxic sensor traps with instantaneous cloud trigger alerts and automated technician dispatch.',
                'description' => 'Our smart connected traps utilize infrared optical sensors and cellular telemetry to monitor critical facility corridors 24 hours a day. When an activation occurs, an alert is transmitted immediately to our Melbourne response team and your facility dashboard, eliminating the delay of monthly manual inspections.',
                'includes'    => [
                    '24/7 continuous autonomous infrared monitoring',
                    'Zero-chemical non-toxic mechanical trigger mechanism',
                    'Real-time SMS and email alerts upon device activation',
                    'Interactive cloud portal with timestamped audit logs',
                    'Automated technician callout trigger for trap reset and verification'
                ],
                'steps'       => [
                    ['title' => 'Critical Zone Placement', 'desc' => 'Traps positioned in high-risk cleanrooms, food production lines, and perimeter dock doors.'],
                    ['title' => 'Cellular IoT Connection', 'desc' => 'Sensors connect autonomously via dedicated cellular bandwidth with zero impact on corporate Wi-Fi.'],
                    ['title' => 'Real-Time Monitoring', 'desc' => '24/7 telemetry streams continuously to the UrbanPest Connect Melbourne cloud engine.'],
                    ['title' => 'Immediate Incident Dispatch', 'desc' => 'Activations automatically schedule a certified Melbourne technician for same-day service.']
                ],
                'key_challenges' => [
                    ['name' => 'Undetected Trap Depletions', 'desc' => 'Conventional manual traps remain triggered or occupied for weeks between monthly technician rounds.'],
                    ['name' => 'Unnecessary Facility Disruption', 'desc' => 'Technicians manually inspecting hundreds of empty traps wastes operational time in high-security zones.'],
                    ['name' => 'Delayed Incident Response Times', 'desc' => 'Conventional pest services discover perimeter breaches weeks after product contamination has occurred.'],
                    ['name' => 'Incomplete Service Records', 'desc' => 'Manual paper logs lack exact timestamps and detailed audit trails needed for commercial inspections.']
                ],
                'related_industries' => ['food-processing', 'pharmaceutical', 'logistics-warehousing', 'food-retail']
            ],
            [
                'slug'        => 'connected-rodent-monitoring',
                'name'        => 'Connected Rodent Surveillance Network',
                'icon'        => 'connected-rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'RADAR TELEMETRY',
                'accent_tag'  => 'Enterprise Multi-Site Dashboard — Melbourne Hub',
                'badge_text'  => 'Always-On Cloud Biosecurity',
                'stat_val'    => '24/7',
                'stat_label'  => 'Live Automated Telemetry Uptime',
                'short_desc'  => 'Autonomous connected rodent surveillance network delivering live heat-maps and automated compliance reporting for Melbourne logistics hubs.',
                'description' => 'Transform passive perimeter bait stations into an active digital radar network. Our connected rodent surveillance platform continuously monitors multi-hectare distribution centres and manufacturing plants across Melbourne, detecting rodent runway activity in real time and providing certified compliance audit trails.',
                'includes'    => [
                    'Motion and vibration telemetry embedded in tamper-proof stations',
                    'Centralized multi-site dashboard with live activity heat mapping',
                    'Instant threshold-breach notifications to facility management',
                    'Automated audit reports directly formatted for HACCP and SQF inspectors',
                    'Predictive analytics identifying seasonal pest migration patterns'
                ],
                'steps'       => [
                    ['title' => 'Network Architecture Mapping', 'desc' => 'Map all perimeter boundaries, loading dock thresholds, and internal racking runways.'],
                    ['title' => 'Mesh Sensor Deployment', 'desc' => 'Install ruggedized connected stations built to withstand industrial forklift traffic and weather.'],
                    ['title' => 'Live Telemetry Integration', 'desc' => 'Your management team receives live portal access with custom alert thresholds and permissions.'],
                    ['title' => 'Predictive Data Refinement', 'desc' => 'Monthly AI trend analysis guides preventative physical proofing before infestations begin.']
                ],
                'key_challenges' => [
                    ['name' => 'Vast Logistics Perimeter Blind Spots', 'desc' => 'Large distribution facilities in Laverton and Dandenong have extensive fence lines where ingress goes unnoticed.'],
                    ['name' => 'Late Response to Dock Ingress', 'desc' => 'Rats entering open cross-dock bays can establish nests inside high racking before manual checks occur.'],
                    ['name' => 'Stricter Rodenticide Regulations', 'desc' => 'Australian biosecurity regulations restrict permanent toxic baiting, requiring smart non-toxic sensor traps.'],
                    ['name' => 'Lack of Unified Multi-Site Oversight', 'desc' => 'Logistics managers overseeing multiple Melbourne sites struggle with fragmented paper inspection reports.']
                ],
                'related_industries' => ['logistics-warehousing', 'food-processing', 'food-retail', 'pharmaceutical']
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
