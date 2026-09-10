<?php
/**
 * UrbanX Pest Control — Perth Operational Service Areas
 * Professional pest management services for residential and commercial properties across Perth.
 * Operating in accordance with Western Australian pest management licensing and applicable legislation.
 */
$pageTitle = 'Perth Service Locations & Coverage — UrbanX Pest Control';
$pageDescription = 'UrbanX Pest Control provides professional pest management for residential and commercial properties across Perth. Safe practices, licensed Western Australian professionals.';
$currentPage = 'about';

require_once __DIR__ . '/data/config.php';
include __DIR__ . '/partials/header.php';
?>

<!-- Page Hero -->
<?php
$heroTitle       = 'Perth Pest Service Areas';
$heroDesc        = 'At UrbanX Pest Control, we provide professional pest management services for residential and commercial properties across Perth.';
$heroTag         = 'Perth & Greater Western Australia Coverage';
$heroBadge       = 'Western Australian Licensed Operators';
$heroImage       = '/assets/images/green-fleet.jpg';
$heroStatVal     = '100%';
$heroStatLabel   = 'Perth Scope';
$heroCtaText     = 'Book Service in Your Suburb';
$heroCtaLink     = '/book.php';
$heroWaLink      = getWhatsAppLink('Perth Service Area Inquiry');
$heroBreadcrumbs = [
    ['label' => 'Home', 'url' => '/index.php'],
    ['label' => 'About', 'url' => '/about.php'],
    ['label' => 'Perth Areas']
];
include __DIR__ . '/partials/page-hero.php';
?>

<!-- Statutory Western Australian Licensing Notice -->
<section style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0; padding: 16px 0;">
  <div class="container">
    <div style="background: #FFFFFF; border-radius: 10px; padding: 16px 20px; border: 1px solid #E2E8F0; border-left: 4px solid var(--color-accent, #D91C24); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
      <p style="margin: 0; font-size: 0.88rem; color: #334155; line-height: 1.5;">
        <strong>Western Australian Regulatory Compliance:</strong> Pest management services are provided in accordance with the requirements of the relevant Western Australian pest management licence and applicable legislation.
      </p>
      <a href="/book.php" class="btn btn-sm btn-primary">Book Online</a>
    </div>
  </div>
</section>

<section class="section" id="precincts">
  <div class="container">
    <div class="section-header text-left">
      <span class="section-label">Operational Coverage</span>
      <h2 class="section-title">Serving All Metropolitan Perth Regions</h2>
      <p class="section-subtitle">Our licensed mobile pest management units provide prompt residential and commercial service across Perth.</p>
    </div>

    <div class="grid grid-3 grid-gap-lg">
      <?php
      $precincts = [
        [
          'name'     => 'Perth CBD & Inner Suburbs',
          'suburbs'  => 'Perth CBD, Docklands, Southbank, Carlton, Fitzroy, Richmond, South Yarra',
          'sector'   => 'Residential Apartments, Offices, Cafes, Restaurants, Hotels & Retail',
          'badge'    => 'Fast Local Dispatch'
        ],
        [
          'name'     => 'Eastern Suburbs',
          'suburbs'  => 'Box Hill, Ringwood, Doncaster, Camberwell, Hawthorn, Glen Waverley, Wantirna',
          'sector'   => 'Family Homes, Townhouses, Shopping Precincts, Corporate Parks',
          'badge'    => 'Residential & Commercial'
        ],
        [
          'name'     => 'Northern Suburbs',
          'suburbs'  => 'Brunswick, Coburg, Preston, Heidelberg, Reservoir, Epping, Tullamarine',
          'sector'   => 'Suburban Residences, Commercial Showrooms, Food Wholesalers & Distribution',
          'badge'    => 'Licensed Pest Defense'
        ],
        [
          'name'     => 'Western Suburbs',
          'suburbs'  => 'Footscray, Yarraville, Sunshine, Point Cook, Werribee, Altona, Truganina',
          'sector'   => 'Residential Estates, Logistics Warehouses, Industrial Complexes',
          'badge'    => 'Perimeter Shield'
        ],
        [
          'name'     => 'South Eastern Suburbs',
          'suburbs'  => 'Clayton, Chadstone, Oakleigh, Springvale, Dandenong, Berwick, Cranbourne',
          'sector'   => 'Residential Properties, Manufacturing, Multi-Site Facilities',
          'badge'    => 'Tailored Plans'
        ],
        [
          'name'     => 'Bayside & Mornington Peninsula',
          'suburbs'  => 'St Kilda, Brighton, Hampton, Cheltenham, Frankston, Mornington, Mount Eliza',
          'sector'   => 'Coastal Homes, Hospitality Venues, Retail Strips & Holiday Properties',
          'badge'    => 'Safe & Responsible'
        ]
      ];

      foreach ($precincts as $p):
      ?>
        <div class="card" style="border: 1px solid #E2E8F0; border-radius: 12px; background:#fff; padding: 24px; display:flex; flex-direction:column; justify-content:space-between;">
          <div>
            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:12px;">
              <span style="font-size:0.72rem; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; color:var(--color-accent, #D91C24); background:var(--color-accent-bg, #FEF2F2); padding:3px 8px; border-radius:4px;">
                <?php echo htmlspecialchars($p['badge']); ?>
              </span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16A34A" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>

            <h3 style="font-size:1.15rem; color:#0B1320; margin:0 0 10px; font-family:var(--font-heading);">
              <?php echo htmlspecialchars($p['name']); ?>
            </h3>

            <div style="margin-bottom:12px; font-size:0.85rem; color:#475569;">
              <strong style="color:#0B1320; display:block; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.04em; margin-bottom:3px; color:#64748B;">Key Suburbs Covered:</strong>
              <?php echo htmlspecialchars($p['suburbs']); ?>
            </div>

            <div style="font-size:0.83rem; color:#64748B; margin-bottom:16px;">
              <strong style="color:#0B1320; display:block; font-size:0.78rem; text-transform:uppercase; letter-spacing:0.04em; margin-bottom:3px; color:#64748B;">Properties & Facilities:</strong>
              <?php echo htmlspecialchars($p['sector']); ?>
            </div>
          </div>

          <div style="padding-top:14px; border-top:1px solid #F1F5F9; display:flex; align-items:center; justify-content:space-between; gap:10px;">
            <a href="/book.php" class="btn btn-primary btn-sm" style="flex:1; justify-content:center;">
              Book Service
            </a>
            <a href="<?php echo htmlspecialchars(getWhatsAppLink($p['name'])); ?>" target="_blank" rel="noopener noreferrer" class="btn-whatsapp" style="padding:6px 10px; border-radius:6px;" title="WhatsApp us about <?php echo htmlspecialchars($p['name']); ?>">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.969.586 1.761.887 2.796.887 3.182 0 5.768-2.587 5.768-5.768.001-3.18-2.584-5.772-5.768-5.772zm3.393 8.163c-.144.405-.837.774-1.17.824-.312.045-.694.062-2.18-.553-1.898-.785-3.125-2.73-3.22-2.856-.095-.127-.768-1.021-.768-1.948 0-.927.489-1.383.663-1.572.174-.189.381-.237.508-.237.126 0 .253.002.364.007.117.006.275-.044.43.329.16.386.545 1.33.593 1.428.048.098.08.213.016.34-.064.127-.096.206-.19.317-.095.11-.2.246-.285.331-.095.095-.195.198-.084.388.111.19.493.813 1.057 1.317.727.649 1.339.851 1.53.946.19.095.302.079.414-.047.111-.127.476-.554.603-.744.127-.19.254-.159.428-.095.174.063 1.109.523 1.3.618.19.095.317.143.365.222.048.079.048.46-.096.865z"/></svg>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Dispatch Strip -->
<section class="section section-dark">
  <div class="container text-center">
    <h2 style="color: #fff; font-size: 1.6rem; margin-bottom: 8px;">Don't See Your Suburb Listed?</h2>
    <p style="color: #94A3B8; max-width: 540px; margin: 0 auto 20px; font-size: 0.95rem;">
      We cover all properties across Greater Perth and surrounding Western Australian districts. Call our team to confirm dispatch to your location.
    </p>
    <div style="display:flex; justify-content:center; gap:14px; flex-wrap:wrap;">
      <a href="tel:<?php echo htmlspecialchars($appConfig['phone_raw'] ?? '+61410148126'); ?>" class="btn btn-primary">
        Call <?php echo htmlspecialchars($appConfig['phone_display'] ?? '+61 410 148 126'); ?>
      </a>
      <a href="/contact.php" class="btn btn-secondary" style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.2);">
        Request Quote Online
      </a>
    </div>
  </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>
