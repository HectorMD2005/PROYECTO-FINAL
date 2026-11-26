/* ============================================
   FESTIVAL URBANO 2026 - MAIN JAVASCRIPT
   Vanilla ES6+ - No frameworks
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ============================================
    // 1. MOBILE NAVIGATION
    // ============================================
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const mobileOverlay = document.querySelector('.mobile-menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-menu .nav-link');

    function openMenu() {
        menuToggle.classList.add('active');
        mobileMenu.classList.add('open');
        mobileOverlay.classList.add('visible');
        document.body.style.overflow = 'hidden';
        menuToggle.setAttribute('aria-expanded', 'true');
        // Focus first link for accessibility
        setTimeout(() => mobileLinks[0]?.focus(), 300);
    }

    function closeMenu() {
        menuToggle.classList.remove('active');
        mobileMenu.classList.remove('open');
        mobileOverlay.classList.remove('visible');
        document.body.style.overflow = '';
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.focus();
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.contains('open') ? closeMenu() : openMenu();
        });
    }

    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', closeMenu);
    }

    mobileLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Close on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu?.classList.contains('open')) {
            closeMenu();
        }
    });

    // ============================================
    // 2. HEADER SCROLL EFFECT
    // ============================================
    const header = document.querySelector('.header');
    let lastScroll = 0;
    let ticking = false;

    function updateHeader() {
        const scrollY = window.scrollY;
        if (scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        lastScroll = scrollY;
        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(updateHeader);
            ticking = true;
        }
    }, { passive: true });

    // ============================================
    // 3. SMOOTH SCROLL FOR ANCHOR LINKS
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '#0') return;

            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const headerHeight = header?.offsetHeight || 0;
                const targetPos = target.getBoundingClientRect().top + window.scrollY - headerHeight;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });

                // Update URL without scroll
                history.pushState(null, '', targetId);
            }
        });
    });

    // ============================================
    // 4. SCROLL REVEAL ANIMATIONS (IntersectionObserver)
    // ============================================
    const revealElements = document.querySelectorAll('.reveal, .exp-card, .artist-card, .ticket-card, .location-card, .overlap-card, .section-header');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => {
        el.classList.add('reveal');
        revealObserver.observe(el);
    });

    // ============================================
    // 5. COUNTDOWN TIMER
    // ============================================
    function initCountdown() {
        // Festival date: December 12, 2026 16:00 (Costa Rica time UTC-6)
        const festivalDate = new Date('2026-12-12T16:00:00-06:00').getTime();
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = festivalDate - now;

            if (distance < 0) {
                // Festival started or passed
                daysEl.textContent = '00';
                hoursEl.textContent = '00';
                minutesEl.textContent = '00';
                secondsEl.textContent = '00';
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Animate number changes
            animateNumber(daysEl, days);
            animateNumber(hoursEl, hours);
            animateNumber(minutesEl, minutes);
            animateNumber(secondsEl, seconds);
        }

        function animateNumber(el, newValue) {
            const str = String(newValue).padStart(2, '0');
            if (el.textContent !== str) {
                el.style.transform = 'translateY(-10px)';
                el.style.opacity = '0';
                setTimeout(() => {
                    el.textContent = str;
                    el.style.transform = 'translateY(0)';
                    el.style.opacity = '1';
                }, 100);
            }
        }

        // Initial update
        updateCountdown();

        // Update every second
        setInterval(updateCountdown, 1000);
    }

    initCountdown();

    // ============================================
    // 6. ARTISTS GRID GENERATION
    // ============================================
    const artistsData = [
        {
            name: 'Feid',
            genre: 'Reggaetón · Pop Latino',
            image: './img/Feid.jpg',
            badge: 'HEADLINER',
            time: '21:30 · Escenario Principal',
            description: 'El "Ferxxo" llega con sus éxitos mundiales: Feliz Cumpleaños Ferxxo, Hey Mor, Luna, Classy 101. El artista colombiano más escuchado del momento.'
        },
        {
            name: 'Milo J',
            genre: 'Trap · R&B · Reggaetón',
            image: './img/Milo J.jpg',
            badge: 'ESTRELLA',
            time: '20:00 · Escenario Principal',
            description: 'La joven promesa argentina que conquista Latinoamérica. Hits como "Fruto", "Rara Vez", "Dispara" y su álbum "166".'
        },
        {
            name: 'Álvaro Díaz',
            genre: 'Urbano · Alternativo · Latino',
            image: 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=400&h=300&fit=crop&crop=face',
            badge: 'ESTRELLA',
            time: '18:30 · Escenario Principal',
            description: 'El puertorriqueño revoluciona la escena con su estilo único. Éxitos: "Problema", "Feliz", "Quizás", y su aclamado álbum "FELICISÍMO".'
        },
        {
            name: 'Nicki Nicole',
            genre: 'R&B · Trap · Pop',
            image: 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=400&h=300&fit=crop&crop=face',
            badge: 'INVITADA',
            time: '17:15 · Escenario Principal',
            description: 'La argentina que fusiona R&B, trap y pop como nadie. Colaboraciones con Bizarrap, Duki, Bad Bunny. Álbum "Parte De Mí".'
        },
        {
            name: 'Duki',
            genre: 'Trap · Reggaetón',
            image: 'https://images.unsplash.com/photo-1531482615713-2b15b4f83f17?w=400&h=300&fit=crop&crop=face',
            badge: 'INVITADO',
            time: '19:45 · Escenario Principal',
            description: 'El referente del trap argentino. "Goteo", "She Don\'t Give a FO", "Hitboy". Llenó estadios en toda Latinoamérica y España.'
        },
        {
            name: 'Tiago PZK',
            genre: 'Reggaetón · Pop · Urbano',
            image: 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop&crop=face',
            badge: 'APERTURA',
            time: '16:15 · Escenario Principal',
            description: 'Revelación argentina del 2023. "Entre Nosotros", "Salimo de Noche", "Cerca de Ti". Millones de streams globales.'
        },
        {
            name: 'Bizarrap',
            genre: 'Producer · Sesiones · Global',
            image: 'https://images.unsplash.com/photo-1493225457124-a3eb161f15f7?w=400&h=300&fit=crop&crop=face',
            badge: 'SORPRESA',
            time: '22:30 · Aparición Especial',
            description: 'El productor argentino #1 mundial. Music Sessions con Shakira, Quevedo, Residente, Peso Pluma. Aparición sorpresa confirmada.'
        },
        {
            name: 'Escenario Electrónico',
            genre: 'House · Techno · EDM',
            image: 'https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?w=400&h=300&fit=crop',
            badge: 'CONTINUO',
            time: '16:00 - 02:00 · Escenario Secundario',
            description: 'DJ Sets continuos con los mejores DJs locales e internacionales. Warm up, peak time y after party en un solo escenario.'
        }
    ];

    function renderArtistsCarousel() {
        const track = document.getElementById('artistsTrack');
        if (!track) return;

        track.innerHTML = artistsData.map((artist, index) => `
            <article class="artist-card reveal" style="transition-delay: ${index * 0.08}s" role="listitem">
                <div class="artist-card-media">
                    <img src="${artist.image}" alt="${artist.name}" loading="lazy">
                    <span class="artist-card-badge">${artist.badge}</span>
                </div>
                <div class="artist-card-content">
                    <h3 class="artist-card-name">${artist.name}</h3>
                    <span class="artist-card-genre">${artist.genre}</span>
                    <p class="artist-card-desc">${artist.description}</p>
                    <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid var(--border-subtle); color: var(--text-muted); font-size: var(--fs-sm);">
                        🕐 ${artist.time}
                    </div>
                </div>
            </article>
        `).join('');

        // Re-observe new elements for scroll reveal
        track.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Initialize carousel after rendering
        initArtistsCarousel();
    }

    // Carousel logic
    function initArtistsCarousel() {
        const track = document.getElementById('artistsTrack');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        const dotsContainer = document.getElementById('artistsDots');
        
        if (!track || !prevBtn || !nextBtn || !dotsContainer) return;

        const cards = track.querySelectorAll('.artist-card');
        if (cards.length === 0) return;

        // Create dots
        dotsContainer.innerHTML = '';
        const cardsArray = Array.from(cards);
        cardsArray.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.className = 'carousel-dot' + (index === 0 ? ' active' : '');
            dot.setAttribute('aria-label', `Ir al artista ${index + 1}`);
            dot.addEventListener('click', () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });

        let currentSlide = 0;
        let cardsPerView = getCardsPerView();
        const gap = parseInt(window.getComputedStyle(document.getElementById('artistsTrack')).gap) || 24;

        function getCardsPerView() {
            if (window.innerWidth <= 768) return 1;
            if (window.innerWidth <= 1200) return 2;
            return 3;
        }

        function updateCarousel() {
            cardsPerView = getCardsPerView();
            const cardWidth = cardsArray[0].offsetWidth + gap;
            const maxSlide = Math.max(0, cardsArray.length - cardsPerView);
            currentSlide = Math.min(currentSlide, maxSlide);
            
            const translateX = -currentSlide * cardWidth;
            track.style.transform = `translateX(${translateX}px)`;

            // Update buttons
            prevBtn.disabled = currentSlide === 0;
            nextBtn.disabled = currentSlide >= maxSlide;

            // Update dots
            const dots = dotsContainer.querySelectorAll('.carousel-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function goToSlide(index) {
            const maxSlide = Math.max(0, cardsArray.length - getCardsPerView());
            currentSlide = Math.max(0, Math.min(index, maxSlide));
            updateCarousel();
        }

        function nextSlide() {
            const maxSlide = Math.max(0, cardsArray.length - getCardsPerView());
            if (currentSlide < maxSlide) {
                currentSlide++;
                updateCarousel();
            }
        }

        function prevSlide() {
            if (currentSlide > 0) {
                currentSlide--;
                updateCarousel();
            }
        }

        // Event listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Keyboard navigation
        track.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') prevSlide();
            else if (e.key === 'ArrowRight') nextSlide();
        });

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].clientX;
        }, { passive: true });

        track.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].clientX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) nextSlide();
                else prevSlide();
            }
        }

        // Handle resize
        window.addEventListener('resize', () => {
            updateCarousel();
        });

        // Initial update
        updateCarousel();
    }

    renderArtistsCarousel();

    // ============================================
    // 7. PARALLAX HERO EFFECT (Subtle)
    // ============================================
    const heroImage = document.querySelector('.hero-image');
    const heroVisual = document.querySelector('.hero-visual');

    if (heroImage && heroVisual && window.matchMedia('(prefers-reduced-motion: no-preference)').matches) {
        let tickingParallax = false;

        function updateParallax() {
            const scrollY = window.scrollY;
            const heroHeight = document.querySelector('.hero')?.offsetHeight || 0;
            const progress = Math.min(scrollY / heroHeight, 1);

            if (progress < 1) {
                const translateY = scrollY * 0.3;
                const scale = 1 + progress * 0.05;
                heroVisual.style.transform = `translateY(${translateY}px)`;
                heroImage.style.transform = `scale(${scale})`;
            }
            tickingParallax = false;
        }

        window.addEventListener('scroll', () => {
            if (!tickingParallax) {
                requestAnimationFrame(updateParallax);
                tickingParallax = true;
            }
        }, { passive: true });
    }

    // ============================================
    // 8. TICKET CARD HOVER ENHANCEMENT
    // ============================================
    document.querySelectorAll('.ticket-card').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.borderColor = 'var(--border-medium)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.borderColor = '';
        });
    });

    // ============================================
    // 9. FLOATING CARD INTERACTION
    // ============================================
    const floatingCard = document.querySelector('.floating-card');
    if (floatingCard) {
        floatingCard.addEventListener('mouseenter', () => {
            floatingCard.style.transform = 'translateY(-4px)';
            floatingCard.style.boxShadow = 'var(--shadow-lg), var(--shadow-glow-strong)';
        });
        floatingCard.addEventListener('mouseleave', () => {
            floatingCard.style.transform = '';
            floatingCard.style.boxShadow = '';
        });
    }

    // ============================================
    // 10. ACTIVE NAV LINK HIGHLIGHT
    // ============================================
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-link, .mobile-menu .nav-link').forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage || (currentPage === '' && href === 'index.php')) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });

    // ============================================
    // 11. FORM SCROLL HELPER (Global)
    // ============================================
    window.scrollToForm = function() {
        const form = document.querySelector('#formulario') || document.querySelector('.formulario-inscripcion');
        if (form) {
            const headerHeight = document.querySelector('.header')?.offsetHeight || 0;
            const targetPos = form.getBoundingClientRect().top + window.scrollY - headerHeight - 20;
            window.scrollTo({ top: targetPos, behavior: 'smooth' });
            form.focus({ preventScroll: true });
        }
    };

    // ============================================
    // 12. LAZY LOADING FALLBACK
    // ============================================
    if (!('loading' in HTMLImageElement.prototype)) {
        const lazyImages = document.querySelectorAll('img[loading="lazy"]');
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.removeAttribute('loading');
                    imageObserver.unobserve(img);
                }
            });
        }, { rootMargin: '100px' });
        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ============================================
    // 13. PREVENT DOUBLE FORM SUBMIT
    // ============================================
    let formSubmitting = false;
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', (e) => {
            if (formSubmitting) {
                e.preventDefault();
                return false;
            }
            const submitBtn = form.querySelector('button[type="submit"], input[type="submit"]');
            if (submitBtn && !submitBtn.disabled) {
                formSubmitting = true;
                const originalHTML = submitBtn.innerHTML;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<svg class="spinner" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:1.25em;height:1.25em;animation:spin 1s linear infinite;margin-right:0.5rem;"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"/><path d="M12 2a10 10 0 0 1 10 10" stroke-opacity="1"/></svg> Procesando...';
                // Re-enable after 10s as safety
                setTimeout(() => { formSubmitting = false; submitBtn.disabled = false; submitBtn.innerHTML = originalHTML; }, 10000);
            }
        });
    });

    // Add spinner keyframes
    const style = document.createElement('style');
    style.textContent = `
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .countdown-number { transition: transform 0.15s ease, opacity 0.15s ease; }
    `;
    document.head.appendChild(style);

});

// ============================================
// GLOBAL UTILITIES
// ============================================

// Debounce helper
function debounce(fn, delay) {
    let timeoutId;
    return (...args) => {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => fn.apply(this, args), delay);
    };
}

// Throttle helper
function throttle(fn, limit) {
    let inThrottle;
    return (...args) => {
        if (!inThrottle) {
            fn.apply(this, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Check if element is in viewport
function isInViewport(el, offset = 0) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top <= (window.innerHeight || document.documentElement.clientHeight) - offset &&
        rect.bottom >= offset
    );
}

// ============================================
// ACCORDION HANDLING
// ============================================
function initAccordion() {
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.closest('.accordion-item');
            if (!item) return;

            const isOpen = item.classList.contains('active');

            // Close all other accordion items (single open behavior)
            document.querySelectorAll('.accordion-item').forEach(other => {
                if (other !== item) {
                    other.classList.remove('active');
                    const otherHeader = other.querySelector('.accordion-header');
                    if (otherHeader) {
                        otherHeader.setAttribute('aria-expanded', 'false');
                    }
                }
            });

            // Toggle current item
            if (isOpen) {
                item.classList.remove('active');
                header.setAttribute('aria-expanded', 'false');
            } else {
                item.classList.add('active');
                header.setAttribute('aria-expanded', 'true');
            }
        });

        // Keyboard support
        header.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                header.click();
            }
        });
    });
}

// Initialize accordion on DOMContentLoaded
document.addEventListener('DOMContentLoaded', () => {
    initAccordion();
});