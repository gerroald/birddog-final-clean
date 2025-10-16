<?php
/*
Template Name: Live Prod Version Pricing	
*/

get_header(); ?>

<section class="moving-pricing" id="moving-pricing">
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

    *,
    *::before,
    *::after { box-sizing: border-box; }

    :root {
      --color-bg: #F5F7FA;
      --color-surface: #FFFFFF;
      --color-border: #E3E8EF;
      --color-text: #0F172A;
      --color-text-muted: #5B6574;
      --color-text-inverse: #FFFFFF;
      --color-primary: #0D9488;
      --color-accent: #F59E0B;
      --color-link: #0D9488;
      --color-link-hover: #0FA09A;
      --shadow-sm: 0 2px 8px rgba(16,24,40,0.08);
      --shadow-md: 0 8px 20px rgba(16,24,40,0.10);
      --shadow-lg: 0 14px 30px rgba(16,24,40,0.16);
      --focus-ring: 0 0 0 3px rgba(13,148,136,0.30);
    }

    .moving-pricing {
      font-family: "Inter", system-ui, -apple-system, sans-serif;
      background: var(--color-bg);
      padding: 2rem 1rem;
      min-height: 100vh;
      color: var(--color-text);
    }

    .mp-hero {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 3rem;
    }

    .mp-hero h1 {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      margin: 0 0 0.75rem;
      color: var(--color-text);
    }

    .mp-hero p {
      font-size: clamp(1rem, 2vw, 1.25rem);
      color: var(--color-text-muted);
      margin: 0;
      font-weight: 400;
    }

    .mp-tabs {
      display: flex;
      gap: 0.5rem;
      justify-content: center;
      flex-wrap: wrap;
      max-width: 600px;
      margin: 0 auto 3rem;
    }

    .mp-tab-button {
      padding: 0.75rem 1.5rem;
      border: 2px solid var(--color-border);
      background: var(--color-surface);
      color: var(--color-text-muted);
      font-size: 1rem;
      font-weight: 500;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .mp-tab-button:focus-visible {
      outline: none;
      box-shadow: var(--focus-ring);
    }

    .mp-tab-button.is-active {
      background: var(--color-primary);
      color: var(--color-text-inverse);
      border-color: var(--color-primary);
    }

    .mp-tab-panels {
      max-width: 1200px;
      margin: 0 auto;
    }

    .mp-tab-panel {
      display: none;
    }

    .mp-tab-panel.is-active {
      display: block;
    }

    .mp-crew-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .mp-crew-card {
      background: var(--color-surface);
      border: 2px solid var(--color-border);
      border-radius: 1rem;
      padding: 2rem 1.5rem;
      text-align: center;
      cursor: pointer;
      transition: all 0.2s ease;
      position: relative;
      box-shadow: var(--shadow-sm);
    }

    .mp-crew-card.is-active {
      border-color: var(--color-primary);
      box-shadow: var(--shadow-md);
      transform: translateY(-4px);
    }

    .mp-badge {
      position: absolute;
      top: -12px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--color-accent);
      color: #0F172A;
      padding: 0.25rem 0.75rem;
      border-radius: 1rem;
      font-size: 0.75rem;
      font-weight: 600;
      white-space: nowrap;
    }

    .mp-crew-size {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .mp-crew-rate {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--color-primary);
      margin-bottom: 0.25rem;
    }

    .mp-per-hour {
      font-size: 1rem;
      font-weight: 400;
      color: var(--color-text-muted);
    }

    .mp-crew-minimum {
      font-size: 0.875rem;
      color: var(--color-text-muted);
      margin-bottom: 1.5rem;
    }

    .mp-select-button {
      width: 100%;
      padding: 0.75rem;
      background: var(--color-surface);
      border: 2px solid var(--color-primary);
      color: var(--color-primary);
      border-radius: 0.5rem;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .mp-select-button.is-active {
      background: var(--color-primary);
      color: var(--color-text-inverse);
    }

    .mp-select-button:focus-visible {
      outline: none;
      box-shadow: var(--focus-ring);
    }

    .mp-included {
      background: var(--color-surface);
      padding: 2rem;
      border-radius: 1rem;
      margin-bottom: 2rem;
      box-shadow: var(--shadow-sm);
    }

    .mp-included-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 1rem;
      font-weight: 500;
    }

    .mp-calculator {
      background: var(--color-surface);
      border: 2px solid var(--color-primary);
      border-radius: 1rem;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: var(--shadow-lg);
    }

    .mp-calculator h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin: 0 0 1.5rem;
      text-align: center;
    }

    .mp-calc-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1rem;
      flex-wrap: wrap;
    }

    .mp-calc-row label {
      font-size: 1rem;
      font-weight: 500;
    }

    .mp-select {
      padding: 0.5rem 1rem;
      border: 2px solid var(--color-border);
      border-radius: 0.5rem;
      font-size: 1rem;
      background: var(--color-surface);
      color: var(--color-text);
      min-width: 200px;
      cursor: pointer;
    }

    .mp-select:focus-visible {
      outline: none;
      box-shadow: var(--focus-ring);
    }

    .mp-breakdown {
      margin-top: 1.5rem;
      padding: 1.5rem;
      background: var(--color-bg);
      border-radius: 0.75rem;
    }

    .mp-line {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.75rem;
      font-size: 1rem;
    }

    .mp-line span:last-child {
      font-weight: 600;
    }

    .mp-divider {
      height: 2px;
      background: var(--color-border);
      margin: 1rem 0;
    }

    .mp-total {
      display: flex;
      justify-content: space-between;
      font-size: 1.25rem;
      font-weight: 700;
    }

    .mp-total span:last-child {
      font-size: 1.75rem;
      color: var(--color-primary);
    }

    .mp-call-button {
      display: block;
      width: 100%;
      padding: 1rem;
      margin-top: 1.5rem;
      background: var(--color-accent);
      color: #0F172A;
      text-align: center;
      border-radius: 0.5rem;
      font-size: 1.125rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .mp-call-button:hover,
    .mp-call-button:focus-visible {
      filter: brightness(0.95);
      outline: none;
      box-shadow: var(--focus-ring);
    }

    .mp-fine-print {
      background: var(--color-surface);
      padding: 1.5rem;
      border-radius: 0.75rem;
      box-shadow: var(--shadow-sm);
      color: var(--color-text-muted);
      font-size: 0.875rem;
      line-height: 1.8;
    }

    .mp-fine-print ul {
      margin: 0;
      padding-left: 1.25rem;
    }

    .mp-commercial-card,
    .mp-specialty-card {
      background: var(--color-surface);
      border-radius: 1rem;
      text-align: center;
      box-shadow: var(--shadow-lg);
      padding: 3rem 2rem;
      max-width: 600px;
      margin: 0 auto;
    }

    .mp-commercial-card h2 {
      font-size: 2rem;
      margin: 0 0 2rem;
    }

    .mp-commercial-features {
      text-align: left;
      margin-bottom: 2rem;
      font-size: 1.125rem;
      font-weight: 500;
      color: var(--color-text);
    }

    .mp-commercial-features div {
      margin-bottom: 0.75rem;
    }

    .mp-commercial-card p {
      font-size: 1.125rem;
      color: var(--color-text-muted);
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .mp-estimate-button {
      display: inline-block;
      padding: 1rem 2rem;
      background: var(--color-primary);
      color: var(--color-text-inverse);
      border-radius: 0.5rem;
      font-size: 1.125rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .mp-estimate-button:hover,
    .mp-estimate-button:focus-visible {
      filter: brightness(0.95);
    }

    .mp-specialty-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .mp-specialty-card {
      padding: 2rem 1.5rem;
      box-shadow: var(--shadow-md);
    }

    .mp-specialty-card h3 {
      font-size: 1.25rem;
      margin: 0 0 0.75rem;
      font-weight: 700;
    }

    .mp-specialty-card p {
      font-size: 0.9375rem;
      color: var(--color-text-muted);
      margin: 0 0 1.5rem;
      line-height: 1.6;
    }

    .mp-contact-button {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background: var(--color-surface);
      border: 2px solid var(--color-primary);
      color: var(--color-primary);
      border-radius: 0.5rem;
      font-size: 1rem;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.2s ease;
    }

    .mp-contact-button:hover,
    .mp-contact-button:focus-visible {
      background: var(--color-primary);
      color: var(--color-text-inverse);
      outline: none;
      box-shadow: var(--focus-ring);
    }
/* DIY Moving Costs Section */
    .mp-diy-section {
      font-family: "Inter", system-ui, -apple-system, sans-serif;
      background: var(--color-bg);
      padding: 3rem 1rem;
      color: var(--color-text);
    }

    .mp-diy-container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .mp-diy-title {
      font-size: clamp(1.75rem, 3.5vw, 2.5rem);
      font-weight: 700;
      margin: 0 0 0.75rem;
      text-align: center;
      color: var(--color-text);
    }

    .mp-diy-subtitle {
      text-align: center;
      color: var(--color-text-muted);
      font-size: 1.125rem;
      max-width: 70ch;
      margin: 0 auto 2.5rem;
      line-height: 1.6;
    }

    .mp-diy-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .mp-diy-card {
      background: var(--color-surface);
      border: 2px solid var(--color-border);
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: var(--shadow-sm);
      transition: all 0.2s ease;
    }

    .mp-diy-card:hover {
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
    }

    .mp-diy-card-title {
      font-size: 1.25rem;
      font-weight: 700;
      margin: 0 0 1.5rem;
      color: var(--color-text);
    }

    .mp-diy-cost-list {
      display: grid;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .mp-diy-cost-item {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 1rem;
      padding-bottom: 0.75rem;
      border-bottom: 1px solid var(--color-border);
    }

    .mp-diy-cost-item:last-child {
      border-bottom: none;
    }

    .mp-diy-label {
      font-weight: 600;
      color: var(--color-text);
    }

    .mp-diy-value {
      font-size: 0.9375rem;
      color: var(--color-text-muted);
      text-align: right;
    }

    .mp-diy-subtitle-small {
      font-size: 1.125rem;
      font-weight: 600;
      margin: 1.5rem 0 1rem;
      color: var(--color-text);
    }

    .mp-diy-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .mp-diy-list li {
      margin-bottom: 0.75rem;
      padding-left: 1.5rem;
      position: relative;
      color: var(--color-text);
    }

    .mp-diy-list li::before {
      content: "•";
      position: absolute;
      left: 0;
      color: var(--color-primary);
      font-weight: 700;
      font-size: 1.25rem;
    }

    .mp-diy-list-checkmarks li::before {
      content: "✓";
      color: var(--color-primary);
    }

    .mp-diy-protip {
      margin-top: 1.5rem;
      padding: 1.5rem;
      background: linear-gradient(135deg, #FEF3C7 0%, #FDE68A 100%);
      border-radius: 0.75rem;
      border-left: 4px solid var(--color-accent);
    }

    .mp-diy-protip-title {
      display: block;
      margin-bottom: 0.5rem;
      font-size: 1rem;
      font-weight: 600;
      color: #0F172A;
    }

    .mp-diy-protip-text {
      font-size: 0.9375rem;
      margin: 0;
      line-height: 1.6;
      color: #0F172A;
    }

    .mp-diy-cta {
      background: var(--color-surface);
      border: 2px solid var(--color-primary);
      border-radius: 0.75rem;
      padding: 1.25rem 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
      box-shadow: var(--shadow-sm);
      transition: all 0.2s ease;
    }

    .mp-diy-cta:hover {
      box-shadow: var(--shadow-md);
    }

    .mp-diy-cta-text {
      font-size: 1rem;
      font-weight: 500;
      color: var(--color-text);
    }

    .mp-diy-cta-link {
      font-size: 1rem;
      font-weight: 600;
      color: var(--color-primary);
      text-decoration: none;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
    }

    .mp-diy-cta-link:hover,
    .mp-diy-cta-link:focus-visible {
      color: var(--color-link-hover);
      text-decoration: underline;
      outline: none;
    }

    @media (max-width: 768px) {
      .mp-diy-cta {
        flex-direction: column;
        text-align: center;
        gap: 0.5rem;
      }
    }
  </style>

  <div class="mp-hero">
    <h1>Transparent, Simple Pricing</h1>
    <p>No Hidden Fees. No Surprises. Just Honest Moving.</p>
  </div>

  <div class="mp-tabs">
    <button type="button" class="mp-tab-button is-active" data-tab="residential">Residential</button>
    <button type="button" class="mp-tab-button" data-tab="commercial">Commercial</button>
    <button type="button" class="mp-tab-button" data-tab="specialty">Specialty Services</button>
  </div>

  <div class="mp-tab-panels">
    <div class="mp-tab-panel is-active" data-panel="residential">
      <div class="mp-crew-grid">
        <div class="mp-crew-card is-active" data-crew-size="2" data-crew-rate="137.5" data-crew-base="275" data-popular="true">
          <div class="mp-badge">Most Popular</div>
          <div class="mp-crew-size">2-Man Crew</div>
          <div class="mp-crew-rate">$137.50 <span class="mp-per-hour">/hr</span></div>
          <div class="mp-crew-minimum">2-hour minimum: $275</div>
          <button type="button" class="mp-select-button is-active">Selected ✓</button>
        </div>
        <div class="mp-crew-card" data-crew-size="3" data-crew-rate="187.5" data-crew-base="375">
          <div class="mp-crew-size">3-Man Crew</div>
          <div class="mp-crew-rate">$187.50 <span class="mp-per-hour">/hr</span></div>
          <div class="mp-crew-minimum">2-hour minimum: $375</div>
          <button type="button" class="mp-select-button">Select</button>
        </div>
        <div class="mp-crew-card" data-crew-size="4" data-crew-rate="237.5" data-crew-base="475">
          <div class="mp-crew-size">4-Man Crew</div>
          <div class="mp-crew-rate">$237.50 <span class="mp-per-hour">/hr</span></div>
          <div class="mp-crew-minimum">2-hour minimum: $475</div>
          <button type="button" class="mp-select-button">Select</button>
        </div>
      </div>

      <div class="mp-included">
        <div class="mp-included-grid">
          <div>✓ 26ft box truck with liftgate</div>
          <div>✓ Furniture wrap &amp; blankets</div>
          <div>✓ Assembly/disassembly</div>
          <div>✓ Professional crew</div>
        </div>
      </div>

      <div class="mp-calculator">
        <h3>Estimate Your Move Cost</h3>
        <div class="mp-calc-row">
          <label for="mp-crew-select">Crew Size:</label>
          <select id="mp-crew-select" class="mp-select">
            <option value="2">2-Man Crew ($137.50/hr)</option>
            <option value="3">3-Man Crew ($187.50/hr)</option>
            <option value="4">4-Man Crew ($237.50/hr)</option>
          </select>
        </div>
        <div class="mp-calc-row">
          <label for="mp-hours-select">Estimated Hours:</label>
          <select id="mp-hours-select" class="mp-select">
            <option value="2">2 hours</option>
            <option value="3" selected>3 hours</option>
            <option value="4">4 hours</option>
            <option value="5">5 hours</option>
            <option value="6">6 hours</option>
            <option value="7">7 hours</option>
            <option value="8">8 hours</option>
            <option value="9">8+ hours (contact us)</option>
          </select>
        </div>
        <div class="mp-breakdown">
          <div class="mp-line">
            <span id="mp-labor-description">Labor (3 hrs × $137.50)</span>
            <span id="mp-labor-amount">$412.50</span>
          </div>
          <div class="mp-line">
            <span>One-time fuel charge</span>
            <span id="mp-fuel-amount">$75.00</span>
          </div>
          <div class="mp-divider"></div>
          <div class="mp-total">
            <span>Estimated Total</span>
            <span id="mp-total-amount">$487.50</span>
          </div>
        </div>
        <a class="mp-call-button" href="tel:405-535-4554">📞 Call 405-535-4554 to Book</a>
      </div>

      <div class="mp-fine-print">
        <ul>
          <li>2-hour minimum applies to all moves</li>
          <li>$75 fuel charge covers all local metro trips for the day</li>
          <li>Final cost based on actual time (billed by the hour after minimum)</li>
          <li>Long-distance moves: fuel costs passed through at actual cost</li>
        </ul>
      </div>
    </div>

    <div class="mp-tab-panel" data-panel="commercial">
      <div class="mp-commercial-card">
        <h2>Commercial &amp; Office Moves</h2>
        <div class="mp-commercial-features">
          <div>✓ Custom crew sizing</div>
          <div>✓ After-hours &amp; weekend moves</div>
          <div>✓ Specialized equipment handling</div>
          <div>✓ Minimized business downtime</div>
        </div>
        <p>Every commercial move is unique. Let’s discuss your specific needs.</p>
        <a class="mp-estimate-button" href="tel:405-535-4554">Request Free Estimate</a>
      </div>
    </div>
<section class="mp-diy-section">
  <div class="mp-diy-container">
    <h2 class="mp-diy-title">DIY Moving Costs</h2>
    <p class="mp-diy-subtitle">Renting a truck and handling the move yourself can save money for smaller, simpler moves</p>

    <div class="mp-diy-grid">
      <div class="mp-diy-card">
        <h3 class="mp-diy-card-title">Typical Truck Rental Costs (OKC)</h3>
        <div class="mp-diy-cost-list">
          <div class="mp-diy-cost-item">
            <span class="mp-diy-label">10' truck:</span>
            <span class="mp-diy-value">$20–$30/day + $0.99/mile + fuel</span>
          </div>
          <div class="mp-diy-cost-item">
            <span class="mp-diy-label">15' truck:</span>
            <span class="mp-diy-value">$30–$40/day + $0.99/mile + fuel</span>
          </div>
          <div class="mp-diy-cost-item">
            <span class="mp-diy-label">26' truck:</span>
            <span class="mp-diy-value">$40–$50/day + $0.99/mile + fuel</span>
          </div>
        </div>

        <h4 class="mp-diy-subtitle-small">Additional DIY Expenses</h4>
        <ul class="mp-diy-list">
          <li>Equipment rental: $7–$20</li>
          <li>Fuel: ~$2.80/gallon (Oklahoma avg.)</li>
          <li>Optional insurance/damage waiver</li>
          <li>Helper labor (if needed)</li>
        </ul>
      </div>

      <div class="mp-diy-card">
        <h3 class="mp-diy-card-title">When DIY Makes Sense</h3>
        <ul class="mp-diy-list mp-diy-list-checkmarks">
          <li>Studio or 1-bedroom apartments</li>
          <li>Short distances (under 30 miles)</li>
          <li>Ground-floor to ground-floor moves</li>
          <li>You have help from friends/family</li>
          <li>Flexible timeline</li>
        </ul>

        <div class="mp-diy-protip">
          <strong class="mp-diy-protip-title">💡 Pro Tip</strong>
          <p class="mp-diy-protip-text">For most 2+ bedroom moves, professional movers often provide better value when you factor in your time, effort, and risk of damage.</p>
        </div>
      </div>
    </div>

    <div class="mp-diy-cta">
      <span class="mp-diy-cta-text">Want to learn more?</span>
      <a href="/diy-vs-pro-moves" class="mp-diy-cta-link">Read our full DIY vs Professional Movers guide →</a>
    </div>
  </div>
</section>
    <div class="mp-tab-panel" data-panel="specialty">
      <div class="mp-specialty-grid">
        <div class="mp-specialty-card">
          <h3>Junk Removal</h3>
          <p>Fast, efficient removal services</p>
          <a class="mp-contact-button" href="tel:405-535-4554">Contact for Quote</a>
        </div>
        <div class="mp-specialty-card">
          <h3>Storage Services</h3>
          <p>Short &amp; long-term storage options</p>
          <a class="mp-contact-button" href="tel:405-535-4554">Contact for Quote</a>
        </div>
        <div class="mp-specialty-card">
          <h3>Warehouse Moving</h3>
          <p>Heavy equipment &amp; inventory</p>
          <a class="mp-contact-button" href="tel:405-535-4554">Contact for Quote</a>
        </div>
        <div class="mp-specialty-card">
          <h3>Furniture Services</h3>
          <p>Assembly, delivery &amp; placement</p>
          <a class="mp-contact-button" href="tel:405-535-4554">Contact for Quote</a>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  (function () {
    var activeTab = "residential";
    var selectedCrew = 2;
    var estimatedHours = 3;

    var crewOptions = [
      { size: 2, rate: 137.50, basePrice: 275, popular: true },
      { size: 3, rate: 187.50, basePrice: 375, popular: false },
      { size: 4, rate: 237.50, basePrice: 475, popular: false }
    ];

    var fuelCharge = 75;

    var tabButtons = document.querySelectorAll(".mp-tab-button");
    var tabPanels = document.querySelectorAll(".mp-tab-panel");
    var crewCards = document.querySelectorAll(".mp-crew-card");
    var crewSelect = document.getElementById("mp-crew-select");
    var hoursSelect = document.getElementById("mp-hours-select");
    var laborDescription = document.getElementById("mp-labor-description");
    var laborAmount = document.getElementById("mp-labor-amount");
    var fuelAmount = document.getElementById("mp-fuel-amount");
    var totalAmount = document.getElementById("mp-total-amount");

    function findCrewOption(size) {
      for (var i = 0; i < crewOptions.length; i++) {
        if (crewOptions[i].size === size) {
          return crewOptions[i];
        }
      }
      return crewOptions[0];
    }

    function formatMoney(value) {
      return "$" + value.toFixed(2);
    }

    function updateTabs() {
      for (var i = 0; i < tabButtons.length; i++) {
        var button = tabButtons[i];
        var tabName = button.getAttribute("data-tab");
        if (tabName === activeTab) {
          button.classList.add("is-active");
        } else {
          button.classList.remove("is-active");
        }
      }

      for (var j = 0; j < tabPanels.length; j++) {
        var panel = tabPanels[j];
        var panelName = panel.getAttribute("data-panel");
        if (panelName === activeTab) {
          panel.classList.add("is-active");
        } else {
          panel.classList.remove("is-active");
        }
      }
    }

    function updateCrewCards() {
      for (var i = 0; i < crewCards.length; i++) {
        var card = crewCards[i];
        var size = parseInt(card.getAttribute("data-crew-size"), 10);
        var button = card.querySelector(".mp-select-button");

        if (size === selectedCrew) {
          card.classList.add("is-active");
          if (button) {
            button.classList.add("is-active");
            button.textContent = "Selected ✓";
          }
        } else {
          card.classList.remove("is-active");
          if (button) {
            button.classList.remove("is-active");
            button.textContent = "Select";
          }
        }
      }

      crewSelect.value = String(selectedCrew);
    }

    function updateCalculator() {
      var crew = findCrewOption(selectedCrew);
      var laborCost = crew.rate * estimatedHours;
      var totalEstimate = laborCost + fuelCharge;

      laborDescription.textContent = "Labor (" + estimatedHours + " hrs × $" + crew.rate.toFixed(2) + ")";
      laborAmount.textContent = formatMoney(laborCost);
      fuelAmount.textContent = formatMoney(fuelCharge);
      totalAmount.textContent = formatMoney(totalEstimate);
    }

    for (var i = 0; i < tabButtons.length; i++) {
      tabButtons[i].addEventListener("click", function () {
        activeTab = this.getAttribute("data-tab");
        updateTabs();
      });
    }

    crewSelect.addEventListener("change", function () {
      selectedCrew = parseInt(this.value, 10);
      updateCrewCards();
      updateCalculator();
    });

    hoursSelect.addEventListener("change", function () {
      estimatedHours = parseInt(this.value, 10);
      updateCalculator();
    });

    for (var k = 0; k < crewCards.length; k++) {
      (function (card) {
        var size = parseInt(card.getAttribute("data-crew-size"), 10);
        var button = card.querySelector(".mp-select-button");

        card.addEventListener("click", function () {
          selectedCrew = size;
          updateCrewCards();
          updateCalculator();
        });

        if (button) {
          button.addEventListener("click", function (event) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else {
              event.cancelBubble = true;
            }
            selectedCrew = size;
            updateCrewCards();
            updateCalculator();
          });
        }
      })(crewCards[k]);
    }

    updateTabs();
    updateCrewCards();
    updateCalculator();
  })();
</script>

<?php get_footer(); ?>
