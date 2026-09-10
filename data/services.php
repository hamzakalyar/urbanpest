<?php
/**
 * UrbanX Pest Control — Professional Pest Management Directory
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
 */

$serviceCategories = [
    [
        'slug'        => 'pest-control',
        'name'        => 'Pest Management Services',
        'icon'        => 'shield-bug',
        'short_desc'  => 'Professional residential and commercial pest management across Perth, backed by licensed expertise and safe practices.',
        'description' => 'At UrbanX Pest Control, we deliver comprehensive pest management solutions tailored for Perth homes, multi-unit residences, hospitality venues, offices, and commercial facilities. Every treatment is carried out under the relevant Western Australian pest management licence, prioritizing safety, efficacy, and enduring protection.',
        'subservices' => [
            [
                'slug'        => 'household-pest-control',
                'name'        => 'General Household Pest Control',
                'icon'        => 'shield-bug',
                'image'       => '/assets/images/hero-technician.jpg',
                'watermark'   => 'HOUSEHOLD DEFENSE',
                'accent_tag'  => 'Perth Residential & Commercial Protection',
                'badge_text'  => 'Licensed Western Australian Pest Specialists',
                'stat_val'    => '100%',
                'stat_label'  => 'Safe & Responsible Application',
                'short_desc'  => 'Comprehensive pest defense for Perth residences and businesses against common crawling and flying pests.',
                'description' => 'Our general household pest control service protects Perth properties against multiple pest threats with a single targeted treatment. We inspect entry zones, treat internal and external perimeters, and establish preventative barrier defenses that safeguard families, pets, employees, and living environments.',
                'includes'    => [
                    'Comprehensive internal and external Perth property inspection',
                    'Targeted baseboard, crack, and crevice micro-treatments',
                    'External perimeter perimeter residual barrier application',
                    'Sub-floor, weep hole, and roof cavity void dusting',
                    'Safe and responsible pest management practices around pets and children',
                    'Preventative advice and ongoing pest deterrence recommendations'
                ],
                'steps'       => [
                    ['title' => 'Detailed Property Assessment', 'desc' => 'Licensed technicians survey interior rooms, roof spaces, subfloors, and garden perimeters to identify active pests and entry vulnerabilities.'],
                    ['title' => 'Tailored Treatment Plan', 'desc' => 'We select safe, low-odor, targeted formulations matched to your property conditions and family/workplace needs.'],
                    ['title' => 'Internal & External Application', 'desc' => 'Precision application across skirting boards, window frames, external weep holes, and boundary fences.'],
                    ['title' => 'Follow-Up Guidance', 'desc' => 'We provide clear follow-up advice, hygiene recommendations, and preventative measures to prevent re-infestation.']
                ],
                'key_challenges' => [
                    ['name' => 'Seasonal Household Pest Invasions', 'desc' => 'Perth weather fluctuations drive ants, spiders, and insects indoors seeking shelter and moisture.'],
                    ['name' => 'Concealed Roof & Wall Cavity Harbourage', 'desc' => 'Pests nest in hidden structural voids away from standard surface cleaning, requiring specialized dusting.'],
                    ['name' => 'Family & Pet Safety Considerations', 'desc' => 'Residential treatments must balance complete pest eradication with absolute safety for household occupants.']
                ],
                'related_industries' => ['hospitality', 'facilities-management', 'offices', 'food-retail']
            ],
            [
                'slug'        => 'cockroach-control',
                'name'        => 'Cockroach Control & Eradication',
                'icon'        => 'cockroach',
                'image'       => '/assets/images/cockroach-control.jpg',
                'watermark'   => 'COCKROACH ERADICATION',
                'accent_tag'  => 'Targeted German & American Cockroach Treatments',
                'badge_text'  => 'Food Grade Safe Gel Baiting',
                'stat_val'    => '100%',
                'stat_label'  => 'Colony Knockdown Efficacy',
                'short_desc'  => 'Targeted German and American cockroach eradication for Perth homes, commercial kitchens, and businesses.',
                'description' => 'Cockroaches reproduce rapidly in kitchens, warm appliance motors, and drain networks, spreading pathogens. UrbanX Pest Control uses precision gel baiting, insect growth regulators (IGRs), and void dusting to eradicate roach colonies without toxic fumes or disrupting your daily routine.',
                'includes'    => [
                    'Species identification (German, American, Oriental, Smoky Brown)',
                    'Targeted food-grade gel baiting inside motor housings and crevices',
                    'Insect Growth Regulators (IGR) to stop nymph reproduction cycles',
                    'Drain biofilm treatments and harbourage point sealing advice',
                    'Post-treatment compliance documentation for Perth businesses'
                ],
                'steps'       => [
                    ['title' => 'Harbourage Inspection', 'desc' => 'We locate breeding clusters behind cabinetry, appliances, motor voids, and plumbing conduits.'],
                    ['title' => 'Precision Gel Application', 'desc' => 'Targeted droplets of high-attraction gel bait placed directly in foraging pathways, safe and discreet.'],
                    ['title' => 'Life-Cycle Interruption', 'desc' => 'Growth regulators prevent nymphs from maturing into breeding adults, eliminating the colony.'],
                    ['title' => 'Preventative Sealing Guidance', 'desc' => 'Actionable recommendations to seal gaps and eliminate food attractants permanently.']
                ],
                'key_challenges' => [
                    ['name' => 'Hidden Harbourage in Appliance Motors', 'desc' => 'Cockroaches nest inside dishwashers, fridges, and ovens, shielded from basic household cleaning.'],
                    ['name' => 'Rapid Reproductive Multiplication', 'desc' => 'German cockroach egg cases hatch dozens of nymphs, causing sudden overwhelming infestations.'],
                    ['name' => 'Pathogen Contamination & Allergens', 'desc' => 'Cockroaches carry Salmonella and trigger asthma symptoms, threatening household health.']
                ],
                'related_industries' => ['hospitality', 'food-retail', 'food-processing', 'healthcare']
            ],
            [
                'slug'        => 'ant-control',
                'name'        => 'Ant Control & Nest Elimination',
                'icon'        => 'ant',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'ANT COLONY DEFENSE',
                'accent_tag'  => 'Subterranean Nest & Queen Eradication',
                'badge_text'  => 'Non-Repellent Colony Baits',
                'stat_val'    => '100%',
                'stat_label'  => 'Nest Eradication Success',
                'short_desc'  => 'Targeted ant management and queen eradication for Perth residential properties, lawns, and commercial premises.',
                'description' => 'Ant trails in kitchens, bathrooms, pavers, and foundations signal expansive underground nests. Our ant control specialists deploy non-repellent transfer agents and species-calibrated baits that worker ants carry directly to the queen, neutralizing the entire colony at the source.',
                'includes'    => [
                    'Ant species identification (Black house ant, Argentine, Coastal brown, Carpenter ants)',
                    'Non-repellent transfer chemical treatments that workers carry back to the queen',
                    'Exterior perimeter soil and foundation barrier treatments',
                    'Paver and driveway sub-surface ant dusting and baiting',
                    'Internal crack and void micro-baiting'
                ],
                'steps'       => [
                    ['title' => 'Trail & Nest Tracking', 'desc' => 'We trace foraging trails back to active nest entries in brickwork, paving, and garden beds.'],
                    ['title' => 'Colony Bait Deployment', 'desc' => 'We apply specialized slow-acting baits that foraging ants ingest and share throughout the colony.'],
                    ['title' => 'Perimeter Barrier Shield', 'desc' => 'Foundation spray creates an invisible protective barrier preventing new ants from entering.'],
                    ['title' => 'Moisture & Food Source Guidance', 'desc' => 'We identify leaking taps, irrigation lines, or sugar sources sustaining ant populations.']
                ],
                'key_challenges' => [
                    ['name' => 'Persistent Subterranean Super-Nests', 'desc' => 'Colonies extend deep under concrete paths and house slabs, immune to superficial store-bought sprays.'],
                    ['name' => 'Trailing Invasions in Food Areas', 'desc' => 'Ants quickly contaminate pantries, kitchen benchtops, and office breakrooms.'],
                    ['name' => 'Structural Damage by Carpenter Ants', 'desc' => 'Certain ant species excavate wooden frames and insulation to build internal nests.']
                ],
                'related_industries' => ['hospitality', 'food-retail', 'offices', 'facilities-management']
            ],
            [
                'slug'        => 'spider-control',
                'name'        => 'Spider Control & Barrier Protection',
                'icon'        => 'spider',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'SPIDER DEFENSE',
                'accent_tag'  => 'Redback, White-Tail & Black House Spider Defense',
                'badge_text'  => 'Long-Lasting Residual Protection',
                'stat_val'    => '100%',
                'stat_label'  => 'Venomous Species Mitigation',
                'short_desc'  => 'Targeted spider treatments and long-lasting barrier protection for Perth homes, gardens, and commercial facilities.',
                'description' => 'Perth properties frequently harbor venomous and nuisance spiders including Redbacks, White-Tails, Black House spiders, and Huntsmans. We apply targeted residual treatments to eaves, downpipes, subfloors, fence lines, and outdoor play areas to eliminate webs and prevent spider re-entry.',
                'includes'    => [
                    'Inspection of eaves, sheds, fence lines, outdoor furniture, and subfloors',
                    'Targeted eradication of Redback, White-Tail, and web-spinning spiders',
                    'Long-lasting residual barrier application around windows, doors, and fascias',
                    'Roof void dusting to eliminate concealed ceiling spider harbourages',
                    'Safe and responsible treatments around family outdoor spaces and pets'
                ],
                'steps'       => [
                    ['title' => 'Thorough Property Inspection', 'desc' => 'We check weep holes, fence palings, verandahs, garage corners, and garden structures.'],
                    ['title' => 'Direct Web & Nest Treatment', 'desc' => 'Contact treatments eliminate active spiders, egg sacs, and existing webbing.'],
                    ['title' => 'Perimeter Residual Barrier', 'desc' => 'A micro-encapsulated spray binds to external surfaces, deterring future spider colonization.'],
                    ['title' => 'Roof Space Dusting', 'desc' => 'Specialized dust applied to roof cavities keeps spiders from harboring above ceilings.']
                ],
                'key_challenges' => [
                    ['name' => 'Venomous Redback Bite Threats', 'desc' => 'Redback spiders nest in outdoor furniture, BBQ areas, and kids toys, posing bite hazards.'],
                    ['name' => 'White-Tail Spiders in Bedding & Clothing', 'desc' => 'Wandering White-Tails enter homes during warmer months, hiding in laundry and beds.'],
                    ['name' => 'Unsightly Webbing on Facades', 'desc' => 'Exterior walls, windows, and security cameras become covered in thick webbing.']
                ],
                'related_industries' => ['facilities-management', 'hospitality', 'offices', 'logistics-warehousing']
            ],
            [
                'slug'        => 'wasp-bee-control',
                'name'        => 'Wasp & Bee Control',
                'icon'        => 'wasp',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'STINGING PEST DEFENSE',
                'accent_tag'  => 'European Wasp & Paper Wasp Eradication',
                'badge_text'  => 'Safe Licensed Nest Removal',
                'stat_val'    => 'Same-Day',
                'stat_label'  => 'Emergency Rapid Response',
                'short_desc'  => 'Safe and professional wasp and bee nest management for Perth residential and commercial properties.',
                'description' => 'Wasp and bee nests around roofs, wall cavities, trees, and pergolas pose painful sting and anaphylaxis risks. Our licensed pest management professionals use protective gear and specialized treatments to safely neutralize European wasps, paper wasps, and address bee swarms responsibly.',
                'includes'    => [
                    'Emergency inspection and nest location in eaves, wall cavities, or ground nests',
                    'Safe, rapid knockdown of European wasps, paper wasps, and mud daubers',
                    'Complete nest neutralization and physical removal where accessible',
                    'Wall cavity dusting to stop re-colonization',
                    'Follow-up advice to deter future nesting on building architecture'
                ],
                'steps'       => [
                    ['title' => 'Nest Location & Risk Triage', 'desc' => 'Technicians pinpoint the nest entry point and establish an exclusion safety zone around the property.'],
                    ['title' => 'Personal Protective Equipment', 'desc' => 'Our technician suits up in specialized protective gear for safe treatment execution.'],
                    ['title' => 'Targeted Knockdown Application', 'desc' => 'Direct injection or dusting reaches the nest core, eliminating queens and worker wasps quickly.'],
                    ['title' => 'Removal & Entry Sealing', 'desc' => 'Accessible nests are removed, and entry holes into wall voids are noted for sealing.']
                ],
                'key_challenges' => [
                    ['name' => 'Aggressive European Wasp Stings', 'desc' => 'European wasps can sting repeatedly and defend their nests with extreme aggression.'],
                    ['name' => 'Concealed Nests Inside Wall Voids', 'desc' => 'Wasps enter through brick weep holes, creating massive nests inside insulation and plaster.'],
                    ['name' => 'Severe Allergic Reactions (Anaphylaxis)', 'desc' => 'Stings pose critical health risks to children, employees, and allergic individuals.']
                ],
                'related_industries' => ['facilities-management', 'hospitality', 'healthcare', 'offices']
            ],
            [
                'slug'        => 'silverfish-control',
                'name'        => 'Silverfish Control',
                'icon'        => 'silverfish',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'SILVERFISH DEFENSE',
                'accent_tag'  => 'Protection for Wardrobes, Books & Archives',
                'badge_text'  => 'Targeted Void Treatment',
                'stat_val'    => '100%',
                'stat_label'  => 'Property Protection Rate',
                'short_desc'  => 'Targeted silverfish management to protect wardrobes, books, documents, and textiles in Perth properties.',
                'description' => 'Silverfish thrive in dark, humid environments such as roof spaces, bathrooms, wardrobes, and basements. They feed on starches, paper, glues, and fine fabrics, causing irreversible damage to clothing, library collections, and documents. We provide targeted treatments to eradicate silverfish colonies.',
                'includes'    => [
                    'Inspection of roof cavities, subfloors, storage rooms, and wardrobes',
                    'Roof void insecticidal dust treatments targeting breeding zones',
                    'Discreet crack and crevice treatments in wardrobes and skirting boards',
                    'Non-staining, low-toxicity formulations safe for clothing storage areas',
                    'Moisture and ventilation recommendations to eliminate humidity sinks'
                ],
                'steps'       => [
                    ['title' => 'Detailed Assessment', 'desc' => 'We check roof voids, linen cupboards, and archival storage areas for activity and damage.'],
                    ['title' => 'Roof Space Dusting', 'desc' => 'Electrostatic dusting penetrates ceiling joists and insulation where silverfish shelter.'],
                    ['title' => 'Skirting & Crevice Treatment', 'desc' => 'Fine residual applications along baseboards and wardrobes prevent floor-level roaming.'],
                    ['title' => 'Humidity Reduction Guidance', 'desc' => 'Advice on ventilation and dehumidification to remove the conditions silverfish need.']
                ],
                'key_challenges' => [
                    ['name' => 'Irreversible Fabric & Clothing Damage', 'desc' => 'Silverfish chew irregular holes in cotton, silk, rayon, and wool garments in wardrobes.'],
                    ['name' => 'Destruction of Valuable Documents & Books', 'desc' => 'They devour paper sizing, book bindings, wallpapers, and cardboard packaging.'],
                    ['name' => 'Nocturnal Concealed Lifestyle', 'desc' => 'Silverfish operate in complete darkness, often discovered only after severe damage has occurred.']
                ],
                'related_industries' => ['offices', 'hospitality', 'facilities-management']
            ],
            [
                'slug'        => 'fly-control',
                'name'        => 'Fly Control & Management',
                'icon'        => 'fly',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'FLY DEFENSE',
                'accent_tag'  => 'House Flies, Fruit Flies, Drain Flies & Commercial Traps',
                'badge_text'  => 'Hygienic Insect Light Traps',
                'stat_val'    => '100%',
                'stat_label'  => 'Food Hygiene Protection',
                'short_desc'  => 'Targeted fly control and commercial insect light traps for Perth homes, dining establishments, and food businesses.',
                'description' => 'Flies spread dangerous pathogens and compromise hygiene in homes and commercial kitchens. Our Perth fly control solutions tackle breeding sites, drains, waste areas, and fly resting points using enzyme drain cleaners, residual treatments, and modern low-energy LED fly light traps.',
                'includes'    => [
                    'Inspection of fly breeding grounds, refuse areas, and entry points',
                    'Drain bio-enzyme foaming treatments for fruit fly and drain fly elimination',
                    'Targeted external fly resting surface treatments around bins and doors',
                    'Energy-efficient LED glue-board fly trap installation and servicing',
                    'Sanitation and physical exclusion advice'
                ],
                'steps'       => [
                    ['title' => 'Source Identification', 'desc' => 'We determine whether flies are breeding indoors in organic drain sludge or entering from outdoors.'],
                    ['title' => 'Drain & Harbourage Treatment', 'desc' => 'Bio-enzyme foam breaks down grease and organic buildup where larvae reproduce.'],
                    ['title' => 'Perimeter & Entry Barriers', 'desc' => 'Application to external doorways and refuse enclosures kills adult flies upon landing.'],
                    ['title' => 'Capture Trap Setup', 'desc' => 'Discreet LED light traps capture flying insects without noisy zapping or fragment blow-out.']
                ],
                'key_challenges' => [
                    ['name' => 'Rapid Bacterial Disease Transmission', 'desc' => 'Flies carry Salmonella and E. coli from waste directly onto dining and food prep surfaces.'],
                    ['name' => 'Explosive Reproduction in Drains', 'desc' => 'Phorid and drain flies complete breeding cycles in grease traps and floor sinks every week.'],
                    ['name' => 'Negative Customer Impressions', 'desc' => 'Flies in dining areas immediately harm customer satisfaction and review ratings.']
                ],
                'related_industries' => ['hospitality', 'food-retail', 'food-processing', 'healthcare']
            ],
            [
                'slug'        => 'crawling-flying-insects',
                'name'        => 'Common Crawling & Flying Insect Management',
                'icon'        => 'insect',
                'image'       => '/assets/images/hero-technician.jpg',
                'watermark'   => 'INSECT MANAGEMENT',
                'accent_tag'  => 'Integrated Pest Management (IPM)',
                'badge_text'  => 'Safe Responsible Practices',
                'stat_val'    => '100%',
                'stat_label'  => 'Customized Species Target',
                'short_desc'  => 'Comprehensive management of millipedes, earwigs, moths, fleas, crickets, and seasonal insect invaders across Perth.',
                'description' => 'From Portuguese millipede swarms and earwigs in garden beds to clothes moths and fleas indoors, our crawling and flying insect management provides tailored treatments based on pest species and property conditions, keeping your Perth home or business pest-free.',
                'includes'    => [
                    'Multi-species insect diagnostic and habitat inspection',
                    'Foundation, garden edge, and boundary fence perimeter treatments',
                    'Sub-slab void, weep hole, and roof cavity micro-dusting',
                    'Internal crack, crevice, and skirting board barrier applications',
                    'Safe and responsible treatments with clear follow-up advice'
                ],
                'steps'       => [
                    ['title' => 'Diagnostic Survey', 'desc' => 'We identify specific crawling and flying species invading your property and their attractants.'],
                    ['title' => 'Customized Formulation', 'desc' => 'We select targeted formulations suited for the specific pest biology and property layout.'],
                    ['title' => 'Dual-Action Barrier', 'desc' => 'We apply internal spot treatments and external boundary shields for comprehensive defense.'],
                    ['title' => 'Seasonal Maintenance Advice', 'desc' => 'Guidance on lighting, mulch, and moisture control to maintain enduring results.']
                ],
                'key_challenges' => [
                    ['name' => 'Sudden Seasonal Insect Surges', 'desc' => 'Spring and summer weather shifts cause mass migrations of crawling insects into buildings.'],
                    ['name' => 'Garden-to-Home Transition', 'desc' => 'Insects breed in outdoor organic mulch and enter through brick weep holes and window seals.'],
                    ['name' => 'Indoor Contamination of Textiles & Storage', 'desc' => 'Moths and beetles destroy carpets, clothing, and stored goods if left unmanaged.']
                ],
                'related_industries' => ['facilities-management', 'hospitality', 'offices', 'food-retail']
            ],
            [
                'slug'        => 'rodent-control',
                'name'        => 'Rodent Control & Exclusion',
                'icon'        => 'rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'RODENT DEFENSE',
                'accent_tag'  => 'Mice & Rat Eradication — Tamper-Proof Stations',
                'badge_text'  => 'Licensed Perth Specialists',
                'stat_val'    => '99.5%',
                'stat_label'  => 'Ingress Defense Success',
                'short_desc'  => 'Effective rat and mouse control for Perth residential and commercial properties with physical exclusion proofing.',
                'description' => 'Rats and mice chew electrical cables, contaminate pantry goods, and spread harmful bacteria in roof voids and subfloors. UrbanX Pest Control provides rapid rodent knockdown, tamper-proof external bait stations, and physical entry-point proofing across Perth.',
                'includes'    => [
                    'Complete roof void, subfloor, and perimeter rodent inspection',
                    'Lockable tamper-resistant external and internal bait stations (safe for pets)',
                    'Identification of pipe penetrations, roof tile gaps, and entry holes',
                    'Discreet attic and cavity placement away from living areas',
                    'Emergency rapid response across Perth'
                ],
                'steps'       => [
                    ['title' => 'Rodent Run & Ingress Mapping', 'desc' => 'We identify droppings, rub marks, gnawed materials, and entry points around roofs and foundations.'],
                    ['title' => 'Tamper-Proof Station Placement', 'desc' => 'Stations placed strategically along rodent runways, completely locked and secure from children and pets.'],
                    ['title' => 'Physical Exclusion Advice', 'desc' => 'We highlight gaps around plumbing, weep holes, and rooflines that require mesh proofing.'],
                    ['title' => 'Follow-Up Inspection', 'desc' => 'We verify bait uptake, clear spent material, and confirm rodent eradication.']
                ],
                'key_challenges' => [
                    ['name' => 'Chewed Electrical Cables & Fire Risks', 'desc' => 'Rodents gnaw live wiring in roof voids and walls, creating severe house fire hazards.'],
                    ['name' => 'Nocturnal Roof Cavity Scratching', 'desc' => 'Rats and mice in ceilings disturb sleep and cause distress to household residents.'],
                    ['name' => 'Pathogen Contamination', 'desc' => 'Rodents spread Leptospirosis, Salmonella, and parasites across food preparation surfaces.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'hospitality', 'food-retail']
            ]
        ]
    ],
    [
        'slug'        => 'specialist-treatments',
        'name'        => 'Inspections, Preventative & Targeted Treatments',
        'icon'        => 'radar',
        'short_desc'  => 'Specialist pest inspections, preventative perimeter barriers, internal/external treatments, and species-targeted programs.',
        'description' => 'Specialist pest management tailored to property conditions and specific species biology. From comprehensive pre-purchase and annual pest inspections to preventative barriers and targeted treatments, all delivered under the relevant Western Australian pest management licence.',
        'subservices' => [
            [
                'slug'        => 'pest-inspections-identification',
                'name'        => 'Pest Inspections & Identification',
                'icon'        => 'pest-inspections-identification',
                'image'       => '/assets/images/termite-inspection.jpg',
                'watermark'   => 'PEST INSPECTION',
                'accent_tag'  => 'Detailed Species Identification & Risk Audits',
                'badge_text'  => 'Western Australian Licensed Inspectors',
                'stat_val'    => '100%',
                'stat_label'  => 'Comprehensive Property Coverage',
                'short_desc'  => 'Thorough pest inspections and expert pest identification for Perth homes, commercial sites, and property buyers.',
                'description' => 'Accurate pest identification is the cornerstone of effective eradication. Our licensed Perth inspectors conduct non-invasive diagnostic surveys across roof voids, living areas, subfloors, and perimeters, identifying pest species, nesting locations, and property vulnerability factors.',
                'includes'    => [
                    'Comprehensive inspection of internal rooms, roof spaces, subfloors, and grounds',
                    'Accurate species identification and threat severity evaluation',
                    'Detection of moisture leaks, wood decay, and pest ingress pathways',
                    'Clear, detailed inspection report with photos and findings',
                    'Tailored recommendations for targeted treatment and prevention'
                ],
                'steps'       => [
                    ['title' => 'Full-Envelope Survey', 'desc' => 'We methodically examine all accessible areas including roof voids, subfloor timbers, and garden boundaries.'],
                    ['title' => 'Entomological Identification', 'desc' => 'We determine exact pest species to ensure the most effective treatment method is chosen.'],
                    ['title' => 'Vulnerability Mapping', 'desc' => 'We identify structural gaps, moisture sinks, and foliage contacts creating pest bridges.'],
                    ['title' => 'Transparent Written Report', 'desc' => 'You receive a straightforward report detailing findings and clear upfront pricing for remediation.']
                ],
                'key_challenges' => [
                    ['name' => 'Hidden Pest Infestations in Cavities', 'desc' => 'Pests frequently harbor behind plasterboard and under insulation without visible exterior clues.'],
                    ['name' => 'Misidentified Pest Species', 'desc' => 'Incorrectly treating pests with generic products wastes money and allows infestations to worsen.'],
                    ['name' => 'Structural & Financial Damage', 'desc' => 'Undetected pests can cause thousands of dollars in timber or electrical damage before discovery.']
                ],
                'related_industries' => ['facilities-management', 'hospitality', 'offices', 'logistics-warehousing']
            ],
            [
                'slug'        => 'preventative-pest-treatments',
                'name'        => 'Preventative Pest Treatments',
                'icon'        => 'preventative-pest-treatments',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'PREVENTATIVE DEFENSE',
                'accent_tag'  => 'Proactive Long-Term Boundary Protection',
                'badge_text'  => 'Continuous Barrier Defense',
                'stat_val'    => '12 Mo',
                'stat_label'  => 'Recommended Preventative Cycle',
                'short_desc'  => 'Proactive preventative treatments and barrier defense to stop pests before they enter Perth properties.',
                'description' => 'The most cost-effective pest control is stopping infestations before they start. Our preventative pest treatments establish an enduring chemical and physical barrier around your home or commercial building, neutralizing crawling insects, spiders, and ants at the perimeter.',
                'includes'    => [
                    'Continuous external foundation barrier spray application',
                    'Treatment around window sills, door frames, eaves, and gutters',
                    'Weep hole barrier treatments and vent screen inspections',
                    'Garden perimeter, fence line, and outdoor structure shielding',
                    'Scheduled seasonal preventative maintenance plans'
                ],
                'steps'       => [
                    ['title' => 'Perimeter Vulnerability Review', 'desc' => 'We analyze exterior ground lines, garden junctions, and weep holes where pests cross.'],
                    ['title' => 'Barrier Application', 'desc' => 'We apply UV-stable, rain-resistant residual formulations to exterior foundation walls.'],
                    ['title' => 'Entry Point Exclusion Advice', 'desc' => 'We inspect weather seals and pipe penetrations to ensure structural integrity.'],
                    ['title' => 'Ongoing Scheduled Protection', 'desc' => 'Regular seasonal refresh treatments keep your property continually protected year-round.']
                ],
                'key_challenges' => [
                    ['name' => 'Costly Reactive Infestations', 'desc' => 'Waiting until pests are visible inside leads to greater property disruption and higher costs.'],
                    ['name' => 'Weather Degradation of Surface Sprays', 'desc' => 'Perth rain and UV break down ordinary sprays; our micro-encapsulated barriers endure.'],
                    ['name' => 'Neighbouring Property Pressure', 'desc' => 'Pests from adjoining properties or parklands constantly probe your perimeter for ingress.']
                ],
                'related_industries' => ['facilities-management', 'hospitality', 'offices', 'food-retail']
            ],
            [
                'slug'        => 'internal-external-treatments',
                'name'        => 'Internal & External Pest Treatments',
                'icon'        => 'internal-external-treatments',
                'image'       => '/assets/images/food-inspection.jpg',
                'watermark'   => 'DUAL-ZONE DEFENSE',
                'accent_tag'  => 'Comprehensive Whole-Property Treatment',
                'badge_text'  => 'Dual-Zone Pest Eradication',
                'stat_val'    => '100%',
                'stat_label'  => 'Interior & Exterior Defense',
                'short_desc'  => 'Coordinated dual-zone internal and external pest treatments for complete property protection across Perth.',
                'description' => 'True pest control requires treating both the inside living zones and the outside nesting environments. Our internal and external treatment protocols coordinate low-toxicity interior applications with robust exterior perimeter barriers for maximum elimination and prevention.',
                'includes'    => [
                    'Internal targeted skirting, corner, and wet-area micro-applications',
                    'Kitchen cabinet kickboard, laundry, and bathroom void treatments',
                    'Exterior perimeter wall, eave, gutter, and downpipe barrier spraying',
                    'Shed, garage, carport, and boundary fence treatments',
                    'Low-odor, pet-friendly, and family-safe application protocols'
                ],
                'steps'       => [
                    ['title' => 'Internal Precision Treatment', 'desc' => 'We target cracks, crevices, baseboards, and plumbing voids with safe, low-odor products.'],
                    ['title' => 'External Barrier Fortification', 'desc' => 'We establish a 1-to-2 meter perimeter barrier band around all external building foundations.'],
                    ['title' => 'Void & Roof Cavity Dusting', 'desc' => 'We blow fine dust into closed roof and subfloor cavities to flush out hidden insects.'],
                    ['title' => 'Re-Entry Guidance', 'desc' => 'Clear advice on quick dry times so you and your pets can safely enjoy your home immediately.']
                ],
                'key_challenges' => [
                    ['name' => 'Partial Treatment Failure', 'desc' => 'Treating only the interior drives pests outdoors temporarily, only to return weeks later.'],
                    ['name' => 'Concealed Wall Cavity Travel', 'desc' => 'Insects move freely between internal and external walls unless both zones are treated.'],
                    ['name' => 'Balancing Interior Safety with Exterior Strength', 'desc' => 'Interior products must be gentle for families, while outdoor products must withstand weather.']
                ],
                'related_industries' => ['hospitality', 'facilities-management', 'food-retail', 'offices']
            ],
            [
                'slug'        => 'targeted-pest-treatments',
                'name'        => 'Targeted Pest Treatments',
                'icon'        => 'targeted-pest-treatments',
                'image'       => '/assets/images/pharma-cleanroom.jpg',
                'watermark'   => 'TARGETED TREATMENTS',
                'accent_tag'  => 'Customized Species & Property Treatment Plans',
                'badge_text'  => 'Tailored Species Strategy',
                'stat_val'    => 'Custom',
                'stat_label'  => 'Tailored Treatment Plans',
                'short_desc'  => 'Tailored pest management programs customized to exact pest species and Perth property conditions.',
                'description' => 'No two properties or infestations are identical. Our targeted pest treatments are customized based on the precise pest species identified, the severity of the infestation, building architecture, and environmental factors, ensuring effective, targeted eradication with zero wasted chemical.',
                'includes'    => [
                    'Targeted pest identification and behavior analysis',
                    'Custom treatment protocol matched to property construction and conditions',
                    'Safe and responsible application using precise delivery equipment',
                    'Clear upfront pricing with no hidden charges or unexpected fees',
                    'Professional service and comprehensive follow-up advice'
                ],
                'steps'       => [
                    ['title' => 'Species & Property Analysis', 'desc' => 'We examine the layout, building materials, pest species, and environmental surroundings.'],
                    ['title' => 'Custom Strategy Formulation', 'desc' => 'We select the exact combination of baits, barriers, and physical proofing needed.'],
                    ['title' => 'Precision Execution', 'desc' => 'Targeted application directly where pests live and breed, maximizing impact.'],
                    ['title' => 'Follow-Up Review & Advice', 'desc' => 'We provide thorough post-treatment advice to ensure long-term freedom from pests.']
                ],
                'key_challenges' => [
                    ['name' => 'One-Size-Fits-All Ineffectiveness', 'desc' => 'Generic spraying often fails because different pest species react differently to active ingredients.'],
                    ['name' => 'Complex Property Layouts', 'desc' => 'Multi-story homes, heritage buildings, and commercial facilities have unique structural challenges.'],
                    ['name' => 'Environmental & Health Sensitivities', 'desc' => 'Properties with infants, asthmatics, pets, or gardens require carefully calibrated treatments.']
                ],
                'related_industries' => ['healthcare', 'food-processing', 'hospitality', 'pharmaceutical']
            ],
            [
                'slug'        => 'termite-control',
                'name'        => 'Termite Inspections & Protection (AS 3660)',
                'icon'        => 'termite',
                'image'       => '/assets/images/termite-inspection.jpg',
                'watermark'   => 'AS 3660 COMPLIANCE',
                'accent_tag'  => 'Australian Standard AS 3660 Certified',
                'badge_text'  => 'Thermal & Moisture Detection',
                'stat_val'    => '$0',
                'stat_label'  => 'Structural Damage Under Warranty',
                'short_desc'  => 'Comprehensive termite inspections compliant with Australian Standard AS 3660, chemical barriers, and continuous monitoring.',
                'description' => 'Subterranean termites inflict catastrophic structural damage on timber frames across Perth. UrbanX Pest Control provides comprehensive inspections compliant with AS 3660, utilizing moisture meters, thermal imaging, and chemical soil barriers to protect your valuable property asset.',
                'includes'    => [
                    'Comprehensive AS 3660 visual and thermal timber pest inspection',
                    'Thermal imaging and electronic moisture detection in wall cavities',
                    'Chemical treated soil perimeter protection barriers',
                    'Discreet in-ground termite monitoring stations',
                    'Comprehensive digital report and warranty certification'
                ],
                'steps'       => [
                    ['title' => 'Non-Invasive Diagnostic', 'desc' => 'We survey internal timbers, roof voids, subfloors, and garden perimeters with moisture meters.'],
                    ['title' => 'AS 3660 Digital Report', 'desc' => 'Detailed report covering termite presence, timber decay, fungal rot, and high-risk moisture areas.'],
                    ['title' => 'Protective Barrier Installation', 'desc' => 'Application of non-repellent chemical soil barriers or baiting stations around the building.'],
                    ['title' => 'Annual Re-Inspection Plan', 'desc' => 'Scheduled annual checks ensure continuous warranty coverage and timber protection.']
                ],
                'key_challenges' => [
                    ['name' => 'Concealed Structural Timber Devastation', 'desc' => 'Termites hollow out framing studs behind plasterboard without leaving external indications.'],
                    ['name' => 'Standard Home Insurance Exclusions', 'desc' => 'Building insurance policies universally exclude termite damage, making prevention critical.'],
                    ['name' => 'High Moisture Ingress Areas', 'desc' => 'Leaking shower recesses and downpipes attract termite colonies directly to foundations.']
                ],
                'related_industries' => ['facilities-management', 'offices', 'hospitality']
            ],
            [
                'slug'        => 'bird-control',
                'name'        => 'Bird Proofing & Humane Exclusion',
                'icon'        => 'bird',
                'image'       => '/assets/images/bird-proofing.jpg',
                'watermark'   => 'AVIAN EXCLUSION',
                'accent_tag'  => 'Humane Rooftop & Solar Panel Exclusion',
                'badge_text'  => 'Solar Skirting Specialist',
                'stat_val'    => '100%',
                'stat_label'  => 'Humane Exclusion Efficacy',
                'short_desc'  => 'Humane bird proofing, stainless spikes, solar panel mesh, and netting for Perth residential and commercial roofs.',
                'description' => 'Pigeons, mynas, and starlings nesting under solar panels, pergolas, and roof eaves cause foul guano buildup, roof damage, and health hazards. We install durable stainless steel mesh, UV-stabilised netting, and physical deterrents to keep birds off your property humanely.',
                'includes'    => [
                    'Rooftop and solar panel nesting inspection',
                    'Solar panel mesh skirting installation (prevents pigeons nesting under panels)',
                    'Marine-grade stainless steel bird spikes on ledges, gutters, and ridges',
                    'UV-stabilised heavy-duty bird netting for commercial canopies and courtyards',
                    'Guano sanitisation and safe waste removal'
                ],
                'steps'       => [
                    ['title' => 'Rooftop Survey', 'desc' => 'We examine roosting ledges, solar arrays, guttering, and nesting hollows.'],
                    ['title' => 'Humane Exclusion Design', 'desc' => 'We custom-fit stainless solar skirting and discreet architectural bird spikes.'],
                    ['title' => 'Professional Installation', 'desc' => 'Secure installation that withstands Perth weather without damaging roofing.'],
                    ['title' => 'Sanitation & Disinfection', 'desc' => 'Droppings are safely removed and treated with anti-microbial sanitiser.']
                ],
                'key_challenges' => [
                    ['name' => 'Pigeon Nesting Under Solar Panels', 'desc' => 'Birds nest beneath solar arrays, damaging wiring and reducing electrical efficiency.'],
                    ['name' => 'Corrosive Guano Acid Damage', 'desc' => 'Bird droppings permanently etch colorbond roofs, brickwork, and timber decks.'],
                    ['name' => 'Bird Mite & Lice Infestations', 'desc' => 'Parasitic bird mites migrate from abandoned nests through ceilings into bedrooms.']
                ],
                'related_industries' => ['facilities-management', 'logistics-warehousing', 'hospitality', 'offices']
            ],
            [
                'slug'        => 'smart-traps',
                'name'        => 'Digital Connected Pest Monitoring',
                'icon'        => 'smart-traps',
                'image'       => '/assets/images/smart-iot-trap.jpg',
                'watermark'   => 'CONNECTED MONITORING',
                'accent_tag'  => '24/7 Smart Traps & Instant Cloud Telemetry',
                'badge_text'  => 'Zero-Chemical Monitoring',
                'stat_val'    => '24/7',
                'stat_label'  => 'Autonomous Telemetry Uptime',
                'short_desc'  => 'Continuous 24/7 connected pest sensors and smart traps with instant trigger alerts for Perth commercial sites.',
                'description' => 'For Perth food manufacturers, logistics hubs, and sensitive commercial facilities, our digital connected traps provide around-the-clock autonomous surveillance. Infrared sensors record activity in real time, transmitting instant alerts and timestamped compliance logs to management.',
                'includes'    => [
                    '24/7 autonomous infrared sensor monitoring',
                    'Instant cloud alerts upon trap trigger activation',
                    'Zero-chemical, non-toxic mechanical trigger mechanism',
                    'Digital timestamped activity reports ready for health audits',
                    'Automated technician dispatch for rapid trap reset'
                ],
                'steps'       => [
                    ['title' => 'Critical Zone Setup', 'desc' => 'Traps positioned along perimeter corridors, cleanrooms, and warehouse docks.'],
                    ['title' => 'Cellular Cloud Connection', 'desc' => 'Autonomous cellular telemetry connects without touching your internal Wi-Fi.'],
                    ['title' => 'Continuous Surveillance', 'desc' => 'Live telemetry streams 24 hours a day to the management portal.'],
                    ['title' => 'Immediate Service Dispatch', 'desc' => 'Activation triggers an automated visit by a licensed technician.']
                ],
                'key_challenges' => [
                    ['name' => 'Undetected Trap Triggers', 'desc' => 'Manual traps remain sprung for weeks between visits; smart traps notify instantly.'],
                    ['name' => 'Stringent Food Safety Compliance', 'desc' => 'Commercial audits require continuous monitoring data with digital logs.'],
                    ['name' => 'Minimizing Operational Downtime', 'desc' => 'Instant detection stops breaches before contamination causes costly product recalls.']
                ],
                'related_industries' => ['food-processing', 'logistics-warehousing', 'hospitality', 'pharmaceutical']
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
                'short_desc'  => 'Discreet, same-day bed bug eradication for Perth hotels, serviced apartments, and student accommodations.',
                'description' => 'Bed bug incidents can devastate a hotel or hospitality brand’s reputation in hours. UrbanX Pest Control provides discreet commercial thermal heat treatments and residual treatments that penetrate deep into mattress seams, baseboards, and wall voids, eliminating all life stages — including eggs — in a single service visit.',
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
                'short_desc'  => 'Specialist beetle, weevil, and moth control for Perth food manufacturers, grain silos, and bulk distribution warehouses.',
                'description' => 'Stored Product Insects (SPIs) such as flour beetles, grain weevils, and Indian meal moths cause immense financial loss in raw ingredients and finished packaged goods. Our programs combine species-specific pheromone surveillance, temperature manipulation, and precision ULV treatments across Greater Perth.',
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
                    ['name' => 'Rapid Life Cycles in Warm Storage', 'desc' => 'Perth summer temperatures accelerate beetle breeding cycles from months into weeks.'],
                    ['name' => 'Strict Export Compliance Citations', 'desc' => 'Quarantine interceptions at ports cause immediate container rejections and trade sanctions.']
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
                'short_desc'  => 'Hospital-grade surface sanitisation and ULV misting for Perth commercial offices, healthcare, and manufacturing facilities.',
                'description' => 'Our commercial disinfection services utilize Therapeutic Goods Administration (TGA) approved hospital-grade chemistries and Ultra-Low Volume (ULV) cold fogging. We rapidly eliminate viruses, bacteria, and fungal spores across high-touch surfaces, verified by quantitative pre- and post-treatment ATP swab testing across Perth.',
                'includes'    => [
                    'TGA-listed hospital-grade broad spectrum virucidal chemistry',
                    'Whole-facility Ultra-Low-Volume (ULV) cold misting dispersion',
                    'High-touch point microfiber contact sanitisation (doors, lifts, desks)',
                    'Rapid emergency outbreak response protocol across Greater Perth',
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
                    ['name' => 'Surface Pathogen Transmission', 'desc' => 'Viral and bacterial outbreaks spread rapidly across shared touchpoints, causing mass staff absenteeism.'],
                    ['name' => 'Airborne Microbial Circulation', 'desc' => 'HVAC recirculated air moves viable aerosolized pathogens across open-plan offices and clinics.'],
                    ['name' => 'Regulatory Health Audit Scrutiny', 'desc' => 'Facilities require quantified proof of sanitisation to satisfy health department auditors.']
                ],
                'related_industries' => ['healthcare', 'pharmaceutical', 'offices', 'hospitality', 'food-processing']
            ],
            [
                'slug'        => 'connected-rodent-monitoring',
                'name'        => 'Connected Rodent Surveillance Network',
                'icon'        => 'connected-rodent',
                'image'       => '/assets/images/connected-monitoring.jpg',
                'watermark'   => 'RADAR TELEMETRY',
                'accent_tag'  => 'Enterprise Multi-Site Dashboard — Perth Hub',
                'badge_text'  => 'Always-On Cloud Biosecurity',
                'stat_val'    => '24/7',
                'stat_label'  => 'Live Automated Telemetry Uptime',
                'short_desc'  => 'Autonomous connected rodent surveillance network delivering live heat-maps and automated compliance reporting for Perth logistics hubs.',
                'description' => 'Transform passive perimeter bait stations into an active digital radar network. Our connected rodent surveillance platform continuously monitors multi-hectare distribution centres and manufacturing plants across Greater Perth, detecting rodent runway activity in real time and providing certified compliance audit trails.',
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
                    ['name' => 'Vast Logistics Perimeter Blind Spots', 'desc' => 'Large distribution facilities in Welshpool and Kewdale have extensive fence lines where ingress goes unnoticed.'],
                    ['name' => 'Audit Non-Compliance from Unreported Activity', 'desc' => 'Manual bait checks miss nocturnal rodent runs that occur between monthly inspections.'],
                    ['name' => 'Uncontrolled Infestation Escalation', 'desc' => 'A breeding pair can establish a major colony in pallet racking before monthly routine checks detect it.']
                ],
                'related_industries' => ['logistics-warehousing', 'food-processing', 'facilities-management', 'pharmaceutical']
            ]
        ]
    ]
];

// Load custom services added via Admin Panel
$customServicesFile = __DIR__ . '/custom_services.json';
if (file_exists($customServicesFile)) {
    $customServices = @json_decode(file_get_contents($customServicesFile), true);
    if (is_array($customServices)) {
        foreach ($customServices as $customSvc) {
            $catSlug = $customSvc['category_slug'] ?? 'pest-control';
            $inserted = false;
            foreach ($serviceCategories as &$cat) {
                if ($cat['slug'] === $catSlug) {
                    $cat['subservices'][] = $customSvc;
                    $inserted = true;
                    break;
                }
            }
            unset($cat);
            if (!$inserted && !empty($serviceCategories)) {
                $serviceCategories[0]['subservices'][] = $customSvc;
            }
        }
    }
}

// Flat list of all sub-services for easy lookup
$allServices = [];
foreach ($serviceCategories as $category) {
    foreach ($category['subservices'] as $service) {
        $service['category_slug'] = $category['slug'];
        $service['category_name'] = $category['name'];
        $allServices[$service['slug']] = $service;
    }
}
