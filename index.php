<?php require __DIR__ . '/ajax.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0LY0HY7L01');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Timeless Bag Closet - Artisan luxury handbags, heritage full-grain leather goods, handbag care guides, and investment closet curation.">
    <title>Timeless Bag Closet | Artisan Luxury Handbags & Leather Atelier</title>
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header Navigation -->
    <header>
        <nav class="navbar">
            <a href="index.php" class="logo">Timeless<span>Bag</span></a>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="collections.html">Collections</a></li>
                <li><a href="blog/index.html">Blogs</a></li>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms.html">Terms & Conditions</a></li>
            </ul>
            <button class="menu-btn" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        
        <!-- SECTION 1: UNIQUE Interactive Dual Horizontal Slider Vault Hero -->
        <section class="hero-vault-section" style="background-image: url('img/hero_tote.jpg');">
            <div class="hero-vault-overlay"></div>
            <div class="hero-vault-content reveal-item">
                
                <!-- Interactive Vault Tabs -->
                <div class="hero-vault-tabs">
                    <button class="vault-tab-btn active" data-vault="tote">Hand-Stitched Totes</button>
                    <button class="vault-tab-btn" data-vault="evening">Evening Minaudières</button>
                    <button class="vault-tab-btn" data-vault="travel">Travel Holdalls</button>
                    <button class="vault-tab-btn" data-vault="vintage">Vintage Classics</button>
                </div>

                <span class="hero-badge" id="heroBadge">ATELIER EDITION 01</span>
                <h1 id="heroTitle">Hand-Stitched Cognac Leather Tote</h1>
                <p class="hero-desc" id="heroDesc">Sculpted from 2.2mm full-grain Italian calfskin, featuring hand-burnished edges, wax linen saddle stitching, and solid brass feet.</p>
                
                <div class="hero-btns">
                    <a href="collections.html" class="btn btn-primary">Inquire Acquisition</a>
                    <a href="#atelier" class="btn btn-secondary">Explore Leather Atelier</a>
                </div>

                <!-- Dynamic Hardware Callouts -->
                <div class="hero-vault-callouts" id="heroCallouts">
                    <div class="callout-item"><span>24k Gold</span> Hardware</div>
                    <div class="callout-item"><span>100%</span> Hand-Saddle Stitched</div>
                    <div class="callout-item"><span>Lifetime</span> Atelier Warranty</div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: Commercial Handbag Catalog & Product Cards -->
        <section id="handbag-catalog">
            <div class="section-title reveal-item">
                <h2>THE INVESTMENT CATALOG</h2>
                <p>Explore our heritage handbag curation crafted from full-grain French and Italian leathers.</p>
            </div>
            
            <div class="product-grid">
                
                <!-- Bag Card 1: Shoulder Bag -->
                <div class="luxury-card reveal-item">
                    <div class="product-img-wrapper">
                        <span class="category-tag">FULL-GRAIN CALFSKIN</span>
                        <span class="price-badge">$2,450</span>
                        <img src="img/bag1.jpg" alt="Full-grain Italian calfskin shoulder handbag" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (88 Collector Reviews)</div>
                    <h3>The Mercer Shoulder Satchel</h3>
                    <p class="blog-excerpt">Hand-burnished cognac calfskin, solid brass turn-lock closure, interior suede lining, and adjustable shoulder strap.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Edition: 100 Pieces</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">Inquire Acquisition</a>
                    </div>
                </div>

                <!-- Bag Card 2: Quilted Crossbody -->
                <div class="luxury-card reveal-item">
                    <div class="product-img-wrapper">
                        <span class="category-tag">LAMBSKIN LEATHER</span>
                        <span class="price-badge">$3,100</span>
                        <img src="img/bag2.jpg" alt="Quilted lambskin chain crossbody handbag" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (112 Collector Reviews)</div>
                    <h3>The SoHo Quilted Flap Bag</h3>
                    <p class="blog-excerpt">Ultra-soft French lambskin quilted in diamond pattern, 24k gold woven chain strap, and dual interior compartments.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Edition: 75 Pieces</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">Inquire Acquisition</a>
                    </div>
                </div>

                <!-- Bag Card 3: Structured Handbag -->
                <div class="luxury-card reveal-item">
                    <div class="product-img-wrapper">
                        <span class="category-tag">SADDLE LEATHER</span>
                        <span class="price-badge">$4,200</span>
                        <img src="img/bag3.jpg" alt="Suede and saddle leather structured handbag" loading="lazy">
                    </div>
                    <div class="rating-stars">★★★★★ &bull; (95 Collector Reviews)</div>
                    <h3>The Madison Structured Top-Handle</h3>
                    <p class="blog-excerpt">Architectural structured handbag in vegetable-tanned saddle leather, brass padlock clochette, and reinforced base studs.</p>
                    <div class="product-footer">
                        <span style="font-size: 0.85rem; color: var(--color-primary); font-weight: 600;">Edition: 50 Pieces</span>
                        <a href="collections.html" class="btn btn-primary" style="padding: 0.6rem 1.2rem; font-size: 0.75rem;">Inquire Acquisition</a>
                    </div>
                </div>

            </div>
            
            <div style="text-align: center; margin-top: 4rem;" class="reveal-item">
                <a href="collections.html" class="btn btn-secondary">Explore All Handbag Editions</a>
            </div>
        </section>

        <!-- SECTION 3: Atelier Craftsmanship & Spa Services -->
        <section id="atelier" style="background-color: rgba(42, 26, 18, 0.4); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item">
                <h2>OUR LEATHER ATELIER SERVICES</h2>
                <p>Bespoke saddle-stitching, leather spa conditioning, and vintage restoration.</p>
            </div>
            
            <div class="services-grid">
                
                <!-- Service 1 -->
                <div class="luxury-card service-card reveal-item">
                    <div class="service-icon-box">🧵</div>
                    <h3>Hand Saddle-Stitching</h3>
                    <p style="color: var(--color-fg-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 1.5rem;">Traditional two-needle wax linen saddle stitching that outlasts machine seams by decades.</p>
                    <a href="blog/saddle-stitching-art.html" class="blog-link">Stitching Craft &rarr;</a>
                </div>

                <!-- Service 2 -->
                <div class="luxury-card service-card reveal-item">
                    <div class="service-icon-box">🔑</div>
                    <h3>24k Gold Hardware Plating</h3>
                    <p style="color: var(--color-fg-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 1.5rem;">Solid brass hardware triple-plated in 24k yellow gold for tarnish-resistant luxury shine.</p>
                    <a href="blog/hardware-care.html" class="blog-link">Hardware Care &rarr;</a>
                </div>

                <!-- Service 3 -->
                <div class="luxury-card service-card reveal-item">
                    <div class="service-icon-box">✨</div>
                    <h3>Leather Spa Conditioning</h3>
                    <p style="color: var(--color-fg-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 1.5rem;">Organic beeswax and mink oil hydration treatments to restore dry calfskin and prevent creasing.</p>
                    <a href="blog/restoration-secrets.html" class="blog-link">Leather Spa &rarr;</a>
                </div>

                <!-- Service 4 -->
                <div class="luxury-card service-card reveal-item">
                    <div class="service-icon-box">🏷️</div>
                    <h3>Bespoke Monogramming</h3>
                    <p style="color: var(--color-fg-muted); font-size: 0.95rem; line-height: 1.8; margin-bottom: 1.5rem;">Hot foil blind stamping and 24k gold leaf initials customized inside interior leather pockets.</p>
                    <a href="collections.html" class="blog-link">Customization &rarr;</a>
                </div>

            </div>
        </section>

        <!-- SECTION 4: Handbag Specification Audit Matrix Table -->
        <section class="comparison-section">
            <div class="section-title reveal-item">
                <h2>THE SPECIFICATION AUDIT</h2>
                <p>Compare Timeless Bag Closet atelier standards against mass commercial fashion brands.</p>
            </div>
            
            <div class="luxury-card reveal-item" style="padding: 2.5rem; overflow-x: auto; border-radius: 20px;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; min-width: 600px;">
                    <thead>
                        <tr style="border-bottom: 2px solid var(--color-border); font-weight: 600;">
                            <th style="padding: 1rem; font-family: var(--font-heading); font-size: 1.2rem;">Craftsmanship Attribute</th>
                            <th style="padding: 1rem; color: var(--color-primary); font-family: var(--font-heading); font-size: 1.2rem;">Timeless Bag Closet Atelier</th>
                            <th style="padding: 1rem; color: var(--color-fg-muted); font-family: var(--font-heading); font-size: 1.2rem;">Commercial Luxury Labels</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Leather Selection</td>
                            <td style="padding: 1rem; color: var(--color-primary);">100% Uncoated Full-Grain Italian Calfskin</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Corrected grain leather with heavy polyurethane coatings</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Seam Construction</td>
                            <td style="padding: 1rem; color: var(--color-primary);">Hand-stitched wax linen two-needle saddle seams</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">High-speed machine lock-stitching prone to unraveling</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Hardware Quality</td>
                            <td style="padding: 1rem; color: var(--color-primary);">Solid forged brass plated in 24k gold</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Hollow zinc alloy with thin imitation gold foil</td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--color-border);">
                            <td style="padding: 1rem; font-weight: 600;">Interior Lining</td>
                            <td style="padding: 1rem; color: var(--color-primary);">Pure French kid suede or linen canvas</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Synthetic polyester fabric linings</td>
                        </tr>
                        <tr>
                            <td style="padding: 1rem; font-weight: 600;">Resale Value Retention</td>
                            <td style="padding: 1rem; color: var(--color-primary);">Appreciates 8% - 15% annually due to limited production</td>
                            <td style="padding: 1rem; color: var(--color-fg-muted);">Depreciates 40% immediately post-purchase</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- SECTION 5: Collector & Stylist Testimonials Section -->
        <section id="testimonials">
            <div class="section-title reveal-item">
                <h2>COLLECTOR REVIEWS & PRESS CRITICS</h2>
                <p>Read what handbag connoisseurs, fashion editors, and collectors say about our atelier.</p>
            </div>
            
            <div class="testimonials-grid">
                
                <!-- Review 1 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"The Mercer Satchel is a masterclass in leathercraft. The hand-burnished edges and full-grain patina get richer with every month of wear."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">CA</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Clara Ashford</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Handbag Collector &bull; London</span>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"In an era of mass fashion, Timeless Bag Closet delivers true heirloom quality. Their 24k gold brass hardware is immaculate."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">VG</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Vogue Accessories Edit</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Editorial Review</span>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="luxury-card testimonial-card reveal-item">
                    <div class="quote-icon">“</div>
                    <div class="rating-stars">★★★★★</div>
                    <p style="color: var(--color-fg-muted); font-size: 1rem; line-height: 1.8;">"Their Leather Spa restored my vintage 1990s saddle handbag to pristine condition. The expertise of their master craftsmen is unparalleled."</p>
                    <div class="guest-profile">
                        <div class="guest-avatar">SR</div>
                        <div>
                            <strong style="color: var(--color-fg); display: block;">Sophia Rinaldi</strong>
                            <span style="font-size: 0.8rem; color: var(--color-primary);">Stylist &bull; Milan</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 6: Interactive Accordion FAQ Section -->
        <section id="faq" style="background-color: rgba(42, 26, 18, 0.3); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
            <div class="section-title reveal-item" style="text-align: center;">
                <h2>FREQUENTLY ASKED QUESTIONS</h2>
                <p>Everything you need to know about full-grain leather, hardware warranties, and acquisition.</p>
            </div>
            
            <div class="faq-container reveal-item">
                
                <!-- FAQ 1 -->
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>What makes full-grain calfskin superior to genuine leather?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Full-grain leather is the topmost layer of the hide, keeping all natural grain fibers intact. It is extremely durable, breathable, and develops a beautiful natural patina over time instead of peeling or cracking like corrected "genuine" leather.</p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do I care for 24k gold-plated brass hardware?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Wipe hardware gently with a clean micro-fiber jewelry cloth after use. Avoid spraying perfumes or harsh alcohol cleaners directly onto metallic turn-locks.</p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Does Timeless Bag Closet offer lifetime repair services?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! Every handbag includes our Lifetime Atelier Warranty, covering complimentary seam re-stitching, hardware tightening, and annual leather spa conditioning.</p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How long does custom monogramming take?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Bespoke hot foil blind stamping or gold leaf monogramming adds 3 to 5 business days to your order dispatch time.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 7: Registry Newsletter & Footer -->
        <section class="newsletter-section reveal-item">
            <div class="luxury-card newsletter-box">
                <h2>THE LEATHER REGISTRY</h2>
                <p>Subscribe to our leather registry. Receive private invitation codes for limited handbag releases, leather care guides, and auction valuation alerts.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Timeless Bag Closet!');">
                    <input type="email" class="newsletter-input" placeholder="Enter your email address" required aria-label="Email address">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </section>

        <!-- Recent Journal Articles -->
        <section class="recent-blogs">
            <div class="section-title reveal-item">
                <h2>FROM THE LEATHER GAZETTE</h2>
                <p>Expert articles on full-grain leather, hardware care, and investment value retention.</p>
            </div>
            
            <div class="blog-grid">
                <!-- Blog 1 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal1.jpg" alt="Guide to full grain leather quality" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Leather Guide</span>
                        <h3>Guide to Full-Grain Leather Quality</h3>
                        <p class="blog-excerpt">Identifying authentic full-grain hide: grain density, natural marbling, and patina evolution.</p>
                        <a href="blog/full-grain-guide.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/journal2.jpg" alt="Preserving gold and brass handbag hardware" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Hardware Care</span>
                        <h3>Preserving 24k Gold & Brass Hardware</h3>
                        <p class="blog-excerpt">Tarnish prevention: micro-fiber polishing routines and tarnish shield coatings for locks.</p>
                        <a href="blog/hardware-care.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="luxury-card reveal-item">
                    <div class="feature-img-wrapper">
                        <img src="img/artisan.jpg" alt="Traditional saddle stitching technique" loading="lazy">
                    </div>
                    <div class="feature-content">
                        <span class="blog-tag">Craftsmanship</span>
                        <h3>The Art of Traditional Saddle Stitching</h3>
                        <p class="blog-excerpt">Two-needle wax linen technique: why saddle stitching never unravels even if a loop breaks.</p>
                        <a href="blog/saddle-stitching-art.html" class="blog-link">Read Article &rarr;</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" style="flex: 1.5;">
                <a href="index.php" class="logo" style="margin-bottom: 2rem; display: inline-block;">Timeless<span>Bag</span></a>
                <p>Timeless Bag Closet offers artisan luxury handbags, heritage full-grain leather goods, handbag care guides, and investment closet curation for discerning collectors.</p>
            </div>
            <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="collections.html">Collections</a></li>
                    <li><a href="blog/index.html">Blogs / Journal</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Compliance</h4>
                <ul>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms & Conditions</a></li>
                    <li><a href="disclaimer.html">Disclaimer</a></li>
                    <li><a href="cookies.html">Cookies Policy</a></li>
                </ul>
            </div>
            <div class="footer-col" style="flex: 1.2;">
                <h4>Atelier Details</h4>
                <p><strong>Address:</strong><br>181 Mercer Street, New York, NY 10012, United States</p>
                <p><strong>Phone:</strong><br>+1-888-777-5845</p>
                <p><strong>Email:</strong><br>concierge@timelessbagcloset.com</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Timeless Bag Closet. All rights reserved.</p>
            <div class="footer-bottom-links">
                <a href="privacy-policy.html">Privacy Policy</a>
                <a href="terms.html">Terms</a>
                <a href="cookies.html">Cookies</a>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Popup Banner -->
    <div class="cookie-banner" id="cookieConsentBanner">
        <h4 class="cookie-title">We Value Your Privacy</h4>
        <p class="cookie-text">We use cookies to analyze web traffic metrics, verify checkout security, and deliver personalized handbag recommendations. By clicking "Accept All", you agree to our policies.</p>
        <div class="cookie-btns">
            <button class="btn btn-primary" id="acceptCookiesBtn">Accept All</button>
            <button class="btn btn-secondary" id="rejectCookiesBtn">Reject</button>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="script.js"></script>
</body>
</html>
