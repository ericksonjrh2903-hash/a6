document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll-Reveal Observer
    const revealItems = document.querySelectorAll('.reveal-item');
    
    if ('IntersectionObserver' in window) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        revealItems.forEach(item => {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(item => {
            item.classList.add('revealed');
        });
    }

    // 2. Mobile Navigation Toggle
    const menuBtn = document.querySelector('.menu-btn');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
        
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuBtn.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // 3. Interactive Dual Horizontal Slider Vault Switcher
    const vaultTabs = document.querySelectorAll('.vault-tab-btn');
    const heroSection = document.querySelector('.hero-vault-section');
    const heroBadge = document.getElementById('heroBadge');
    const heroTitle = document.getElementById('heroTitle');
    const heroDesc = document.getElementById('heroDesc');
    const heroCallouts = document.getElementById('heroCallouts');

    const vaultData = {
        tote: {
            bg: "img/hero_tote.jpg",
            badge: "ATELIER EDITION 01",
            title: "Hand-Stitched Cognac Leather Tote",
            desc: "Sculpted from 2.2mm full-grain Italian calfskin, featuring hand-burnished edges, wax linen saddle stitching, and solid brass feet.",
            callouts: "<span>24k Gold</span> Hardware &bull; <span>100%</span> Hand-Saddle Stitched"
        },
        evening: {
            bg: "img/hero_evening.jpg",
            badge: "ATELIER EDITION 02",
            title: "Brass Evening Minaudière Clutch",
            desc: "Architectural solid brass frame with hand-inlaid champagne velvet lining, detachable serpentine chain, and push-lock clasp.",
            callouts: "<span>Hand-Inlaid</span> Velvet &bull; <span>Limited 50</span> Piece Run"
        },
        travel: {
            bg: "img/hero_travel.jpg",
            badge: "ATELIER EDITION 03",
            title: "Heritage Leather Weekender Holdall",
            desc: "Spacious weekend travel bag constructed from vegetable-tanned saddle leather with reinforced brass corners and suede lining.",
            callouts: "<span>Vegetable Tanned</span> &bull; <span>Lifetime</span> Leather Guarantee"
        },
        vintage: {
            bg: "img/hero_vintage.jpg",
            badge: "ATELIER EDITION 04",
            title: "Structured Investment Kelly Silhouette",
            desc: "Timeless top-handle structured handbag with lock-and-key clochette, rolled top handle, and protective brass base studs.",
            callouts: "<span>★ 5.0/5</span> Collector Rating &bull; <span>High Value</span> Retention"
        }
    };

    if (vaultTabs.length > 0 && heroSection) {
        vaultTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                vaultTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const key = tab.getAttribute('data-vault');
                const data = vaultData[key];

                if (data) {
                    heroSection.style.backgroundImage = `url('${data.bg}')`;
                    if (heroBadge) heroBadge.textContent = data.badge;
                    if (heroTitle) heroTitle.textContent = data.title;
                    if (heroDesc) heroDesc.textContent = data.desc;
                    if (heroCallouts) heroCallouts.innerHTML = data.callouts;
                }
            });
        });
    }

    // 4. Interactive Accordion FAQ
    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length > 0) {
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            if (question) {
                question.addEventListener('click', () => {
                    const isOpen = item.classList.contains('active');
                    
                    faqItems.forEach(otherItem => otherItem.classList.remove('active'));
                    
                    if (!isOpen) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }

    // 5. Cookie Consent Notice (Safeguarded with try-catch)
    const cookieBanner = document.getElementById('cookieConsentBanner');
    const acceptBtn = document.getElementById('acceptCookiesBtn');
    const rejectBtn = document.getElementById('rejectCookiesBtn');

    if (cookieBanner && acceptBtn && rejectBtn) {
        let consent = null;
        try {
            consent = localStorage.getItem('cookieConsent');
        } catch (e) {
            console.warn('localStorage is not accessible in this environment.');
        }
        
        if (consent === null) {
            setTimeout(() => {
                cookieBanner.style.display = 'block';
                cookieBanner.offsetHeight; // force reflow
                cookieBanner.classList.add('show');
            }, 1200);
        }

        acceptBtn.addEventListener('click', () => {
            try {
                localStorage.setItem('cookieConsent', 'accepted');
            } catch (e) {
                console.warn('Unable to write to localStorage.');
            }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 600);
        });

        rejectBtn.addEventListener('click', () => {
            try {
                localStorage.setItem('cookieConsent', 'rejected');
            } catch (e) {
                console.warn('Unable to write to localStorage.');
            }
            cookieBanner.classList.remove('show');
            setTimeout(() => {
                cookieBanner.style.display = 'none';
            }, 600);
        });
    }
});
