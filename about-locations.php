<?php
/**
 * UrbanPest Perth — Operational Service Corridors
 * Operating strictly within Greater Perth & Western Australia Commercial Hubs.
 * Direct Line: +61 410 148 126
 */
$pageTitle = 'Perth Service Locations & Precincts — UrbanPest';
$pageDescription = 'UrbanPest operates exclusively across Greater Perth and Western Australia commercial corridors. Fast same-day technical dispatch from CBD to Welshpool, Canning Vale, and Henderson.';
$currentPage = 'about';

require_once __DIR__ . '/data/config.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Perth Commercial Service Precincts';
$heroDesc        = 'Operating exclusively across Greater Perth and Western Australia commercial hubs. Rapid technical dispatch units strategically stationed for same-day commercial facility coverage.';
$heroTag         = 'Perth Operations Only — Fast Local Technical Dispatch';
$heroBadge       = 'Same-Day Commercial Dispatch';
$heroImage       = '/assets/images/green-fleet.jpg';
$heroStatVal     = '100%';
$heroStatLabel   = 'Greater Perth & WA Scope';
$heroCtaText     = 'Book Precinct Assessment';
$heroCtaLink     = '/contact.php';
$heroWaLink      = getWhatsAppLink('Perth Precinct Inspection');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Perth Locations']
];
include __DIR__ . '/partials/page-hero.php';
?>

<section class="section" id="precincts">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Operational Hubs</span>
      <h2 class="section-title">Serving Perth's Key Commercial & Industrial Zones</h2>
      <p class="section-subtitle">Our mobile rapid-response units operate exclusively across Greater Perth, providing contracted commercial facilities with certified response times under 2 hours.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <?php
      $precincts = [
        [
          'name'     => 'Perth CBD & West Perth',
          'suburbs'  => 'Perth CBD, West Perth, East Perth, Northbridge, Subiaco',
          'sector'   => 'Corporate Towers, Luxury Hotels, High-Density Dining & Entertainment',
          'depot'    => 'Level 28, 140 St Georges Terrace (Central Dispatch)',
          'badge'    => 'CBD Fast-Response Unit'
        ],
        [
          'name'     => 'Welshpool & Kewdale Logistics Hub',
          'suburbs'  => 'Welshpool, Kewdale, Perth Airport, Hazelmere, Forrestfield',
          'sector'   => 'Intermodal Rail Terminals, Airfreight Forwarding, Cold Storage',
          'depot'    => 'Kewdale Freight Corridor Service Point',
          'badge'    => 'Biosecurity & Quarantine Aligned'
        ],
        [
          'name'     => 'Canning Vale & Jandakot Corridor',
          'suburbs'  => 'Canning Vale, Jandakot, Willetton, Maddington, Cockburn',
          'sector'   => 'Food Wholesale, Advanced Manufacturing, Mega Warehousing',
          'depot'    => 'Bannister Road Industrial Base',
          'badge'    => 'Food Hygiene Standard'
        ],
        [
          'name'     => 'Osborne Park & Balcatta Commercial',
          'suburbs'  => 'Osborne Park, Balcatta, Innaloo, Herdsman, Stirling',
          'sector'   => 'Commercial Showrooms, Medical Laboratories, Food Prep, Offices',
          'depot'    => 'Scarborough Beach Road Dispatch Hub',
          'badge'    => 'Commercial Rapid Unit'
        ],
        [
          'name'     => 'Malaga & Wangara Northern Hub',
          'suburbs'  => 'Malaga, Wangara, Landsdale, Gnangara, Bayswater',
          'sector'   => 'Engineering, Food Processing, Racking Warehouses, Packaging',
          'depot'    => 'Alexander Drive Operational Hub',
          'badge'    => 'Industrial Grade IPM'
        ],
        [
          'name'     => 'Fremantle & Henderson Marine Complex',
          'suburbs'  => 'Fremantle Port, Henderson (AMC), O\'Connor, Bibra Lake',
          'sector'   => 'Port Logistics, Marine Fabrication, Ship Chandlery, Bulk Yards',
          'depot'    => 'Fremantle Port Service Point',
          'badge'    => 'Maritime & Port Exclusion'
        ],
        [
          'name'     => 'Kwinana & Rockingham Industrial Strip',
          'suburbs'  => 'Kwinana Beach, Naval Base, Rockingham, East Rockingham',
          'sector'   => 'Heavy Chemical Processing, Minerals Refining, Industrial Plants',
          'depot'    => 'Paterson Road Technical Branch',
          'badge'    => 'High-Security Industrial'
        ],
        [
          'name'     => 'Joondalup & Northern Coastal Corridor',
          'suburbs'  => 'Joondalup, Clarkson, Hillarys, Connolly, Currambine',
          'sector'   => 'Retail Shopping Centers, Healthcare Clinics, Dining Precincts',
          'depot'    => 'Joondalup City Commercial Desk',
          'badge'    => 'Commercial Health Team'
        ],
        [
          'name'     => 'Midland & Eastern Trade Gateways',
          'suburbs'  => 'Midland, Bellevue, Guildford, Bassendean, Middle Swan',
          'sector'   => 'Regional Freight Depots, Agricultural Storage, Distribution Hubs',
          'depot'    => 'Great Eastern Highway Regional Dispatch',
          'badge'    => 'Eastern Gateway Unit'
        ],
      ];

      foreach ($precincts as $p):
      ?>
        <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background: #FFFFFF; box-shadow: 0 4px 14px rgba(15,23,42,0.04); display: flex; flex-direction: column;">
          <div class="card-body" style="padding: 24px; display: flex; flex-direction: column; flex: 1;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
              <span style="display: inline-block; font-size: 0.725rem; font-weight: 700; text-transform: uppercase; color: #0FA968; background: #E8F8F0; padding: 4px 10px; border-radius: 6px;">
                <?php echo htmlspecialchars($p['badge']); ?>
              </span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#64748B" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            
            <h3 style="font-family: var(--font-heading); font-size: 1.125rem; font-weight: 700; color: #0B1F3A; margin: 0 0 8px;">
              <?php echo htmlspecialchars($p['name']); ?>
            </h3>
            
            <p style="font-size: 0.85rem; color: #475569; margin: 0 0 12px; line-height: 1.5; flex: 1;">
              <strong>Key Suburbs:</strong> <?php echo htmlspecialchars($p['suburbs']); ?><br>
              <strong>Primary Sectors:</strong> <?php echo htmlspecialchars($p['sector']); ?>
            </p>

            <div style="padding-top: 12px; border-top: 1px solid #F1F5F9; font-size: 0.8rem; color: #64748B; display: flex; justify-content: space-between; align-items: center;">
              <span><?php echo htmlspecialchars($p['depot']); ?></span>
              <a href="/contact.php" class="link-arrow" style="font-weight: 600;">
                Dispatch 
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Dispatch Consultation Banner -->
<section class="section section-alt">
  <div class="container">
    <div style="background: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 12px; padding: 36px 40px; box-shadow: 0 4px 20px rgba(15,23,42,0.06); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
      <div>
        <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.06em; font-weight: 700; color: #0FA968; display: block; margin-bottom: 4px;">
          Perth Commercial Response Center
        </span>
        <h3 style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 800; color: #0B1F3A; margin: 0 0 6px;">
          Operating Exclusively in Greater Perth
        </h3>
        <p style="font-size: 0.95rem; color: #475569; margin: 0; max-width: 580px;">
          Every technician is Western Australia Department of Health licensed and trained in commercial pest management codes of practice.
        </p>
      </div>

      <div style="display: flex; align-items: center; gap: 14px; flex-wrap: wrap;">
        <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-secondary btn-lg">
          Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
        </a>
        <a href="<?php echo htmlspecialchars(getWhatsAppLink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
          Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
