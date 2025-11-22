import './bootstrap';

// Portfolio-specific JavaScript

// Smooth scrolling for navigation links
document.addEventListener('DOMContentLoaded', function() {
    // Add smooth scrolling to all navigation links
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add fade-in animation to elements when they come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.card-hover, .bg-white, .bg-gray-50');
    animateElements.forEach(el => observer.observe(el));

    // Add loading animation to buttons
    const buttons = document.querySelectorAll('button[type="submit"]');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.form && this.form.checkValidity()) {
                const originalText = this.innerHTML;
                this.innerHTML = '<span class="loading mr-2"></span> Mengirim...';
                this.disabled = true;

                this.form.submit();
                
                // Re-enable button after 3 seconds (or when form submission completes)
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.disabled = false;
                }, 3000);
            }
        });
    });

    // Mobile menu toggle (if needed)
    const mobileMenuButton = document.querySelector('[data-mobile-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Persona switcher enhancement
    const personaSelector = document.getElementById('persona-selector');
    if (personaSelector) {
        personaSelector.addEventListener('change', function() {
            const selectedPersona = this.value;
            if (selectedPersona) {
                // Add loading state
                this.classList.add('opacity-50');
                
                // Remove loading state after content loads
                setTimeout(() => {
                    this.classList.remove('opacity-50');
                }, 500);
            }
        });
    }

    // Add hover effects to cards
    const cards = document.querySelectorAll('.bg-white.rounded-lg');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.classList.add('card-hover');
        });
        
        card.addEventListener('mouseleave', function() {
            this.classList.remove('card-hover');
        });
    });

    // Form validation enhancement
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    field.classList.add('border-red-500');
                    isValid = false;
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('Mohon lengkapi semua field yang wajib diisi.');
            }
        });
    });

    // Add keyboard navigation support
    document.addEventListener('keydown', function(e) {
        // ESC key to close modals or reset selections
        if (e.key === 'Escape') {
            const mobileMenu = document.querySelector('[data-mobile-menu]');
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        }
    });

    // Performance optimization: Lazy load images
const images = document.querySelectorAll('img[data-src]');
const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const img = entry.target;
            img.src = img.dataset.src;
            img.classList.remove('opacity-0');
            observer.unobserve(img);
        }
    });
}, {
    rootMargin: '50px 0px',
    threshold: 0.01
});

images.forEach(img => {
    img.classList.add('opacity-0', 'transition-opacity', 'duration-300');
    imageObserver.observe(img);
});

// Performance optimization: Debounced scroll events
let scrollTimeout;
window.addEventListener('scroll', () => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        // Add scroll-based animations here if needed
    }, 10);
}, { passive: true });

// Performance optimization: Preload critical resources
function preloadCriticalResources() {
    const criticalImages = [
        // Add critical image URLs here
    ];
    
    criticalImages.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

// Preload critical resources after page load
    window.addEventListener('load', preloadCriticalResources);
    if (window.PortfolioJS && typeof window.PortfolioJS.initContactObfuscation === 'function') {
        window.PortfolioJS.initContactObfuscation(document);
    }
    initTypingEffect(document);
    const hero = document.querySelector('.hero-section');
    if (hero) {
        if (window.PortfolioJS && typeof window.PortfolioJS.initNeonParticles === 'function') {
            window.PortfolioJS.initNeonParticles(hero);
        }
    }
    if (window.PortfolioJS && typeof window.PortfolioJS.initTechProjectsSwiper === 'function') {
        window.PortfolioJS.initTechProjectsSwiper(document);
    }
    if (window.PortfolioJS && typeof window.PortfolioJS.initStickyNav === 'function') {
        window.PortfolioJS.initStickyNav(document);
    }
    if (window.PortfolioJS && typeof window.PortfolioJS.initQuantHighlight === 'function') {
        window.PortfolioJS.initQuantHighlight(document);
    }
});

// Initialize typing effect for elements within a root
function initTypingEffect(root = document) {
    const typingEls = root.querySelectorAll('[data-typing]');
    typingEls.forEach(el => {
        const existing = el.textContent;
        const text = el.getAttribute('data-text') || existing;
        let i = 0;
        const speedAttr = el.getAttribute('data-speed');
        const speed = speedAttr ? parseInt(speedAttr, 10) : 50;
        // Skip typing if speed is 0 or text already matches
        if (!text || speed === 0 || existing === text) {
            el.textContent = text;
            return;
        }
        el.textContent = '';
        const cursor = document.createElement('span');
        cursor.textContent = '_';
        cursor.className = 'accent-green';
        el.appendChild(cursor);
        const type = () => {
            if (i < text.length) {
                cursor.insertAdjacentText('beforebegin', text[i]);
                i++;
                setTimeout(type, speed);
            } else {
                cursor.remove();
            }
        };
        type();
    });
}

// Utility functions
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 p-4 rounded-md shadow-lg z-50 ${
        type === 'success' ? 'bg-green-500 text-white' :
        type === 'error' ? 'bg-red-500 text-white' :
        'bg-blue-500 text-white'
    }`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 5000);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Export functions for global use
window.PortfolioJS = {
    showNotification,
    debounce,
    initTypingEffect,
    initNeonParticles,
    initTechProjectsSwiper,
    initStickyNav,
    initQuantHighlight,
    initContactObfuscation
};

function initNeonParticles(container) {
    if (!container) return;
    let canvas = container.querySelector('canvas.particles-canvas');
    if (!canvas) {
        canvas = document.createElement('canvas');
        canvas.className = 'particles-canvas';
        container.appendChild(canvas);
    }
    const ctx = canvas.getContext('2d');
    let particles = [];
    function resize() {
        canvas.width = container.clientWidth;
        canvas.height = container.clientHeight;
        const count = Math.max(18, Math.floor(canvas.width / 50));
        particles = Array.from({ length: count }).map(() => ({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            vx: (Math.random() - 0.5) * 0.3,
            vy: (Math.random() - 0.5) * 0.3,
            r: 1.2 + Math.random() * 1.6
        }));
    }
    resize();
    window.addEventListener('resize', debounce(resize, 100));
    let rafId;
    function draw() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        // subtle background tint
        ctx.fillStyle = 'rgba(26,26,46,0.05)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        // draw connections
        ctx.strokeStyle = 'rgba(0, 247, 166, 0.15)';
        ctx.lineWidth = 1;
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < 80) {
                    const alpha = (80 - dist) / 80 * 0.3;
                    ctx.strokeStyle = `rgba(0, 247, 166, ${alpha})`;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }
        // draw particles
        for (const p of particles) {
            ctx.beginPath();
            ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(0, 247, 166, 0.35)';
            ctx.fill();
            p.x += p.vx; p.y += p.vy;
            if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
            if (p.y < 0 || p.y > canvas.height) p.vy *= -1;
        }
        rafId = requestAnimationFrame(draw);
    }
    rafId = requestAnimationFrame(draw);
    return { stop() { cancelAnimationFrame(rafId); } };
}

function initTechProjectsSwiper(root = document) {
    const container = root.querySelector('.project-swiper');
    if (!container) return;
    const init = () => {
        if (typeof Swiper === 'undefined') return;
        const nextEl = root.querySelector('.swiper-button-next') || container.querySelector('.swiper-button-next');
        const prevEl = root.querySelector('.swiper-button-prev') || container.querySelector('.swiper-button-prev');
        const paginationEl = root.querySelector('.swiper-pagination') || container.querySelector('.swiper-pagination');
        new Swiper(container, {
            slidesPerView: 1,
            spaceBetween: 16,
            speed: 450,
            grabCursor: true,
            navigation: { nextEl, prevEl },
            pagination: { el: paginationEl, clickable: true },
            a11y: { enabled: true },
            keyboard: { enabled: true },
            breakpoints: {
                640: { slidesPerView: 2 },
                1024: { slidesPerView: 3 }
            }
        });
    };
    if (typeof Swiper !== 'undefined') {
        init();
        return;
    }
    const cssHref = 'https://unpkg.com/swiper@9/swiper-bundle.min.css';
    const jsSrc = 'https://unpkg.com/swiper@9/swiper-bundle.min.js';
    const ensureCss = () => {
        if ([...document.styleSheets].some(s => s.href && s.href.includes('swiper'))) return Promise.resolve();
        return new Promise(resolve => {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = cssHref;
            link.onload = () => resolve();
            document.head.appendChild(link);
        });
    };
    const ensureJs = () => {
        if (typeof Swiper !== 'undefined') return Promise.resolve();
        return new Promise(resolve => {
            const script = document.createElement('script');
            script.src = jsSrc;
            script.defer = true;
            script.onload = () => resolve();
            document.head.appendChild(script);
        });
    };
    ensureCss().then(ensureJs).then(() => {
        init();
    });
}

// Initialize sticky local navigation (supports multiple nav bars)
function initStickyNav(root = document) {
    const navs = root.querySelectorAll('.sticky-nav');
    if (!navs || navs.length === 0) return;
    navs.forEach((nav) => {
        let baseTop = nav.getBoundingClientRect().top + window.pageYOffset;
        const onScroll = () => {
            const y = window.pageYOffset || document.documentElement.scrollTop;
            if (y >= baseTop) {
                nav.classList.add('is-sticky');
            } else {
                nav.classList.remove('is-sticky');
            }
        };
        onScroll();
        const scrollHandler = window.PortfolioJS.debounce(onScroll, 10);
        window.addEventListener('scroll', scrollHandler, { passive: true });
        window.addEventListener('resize', window.PortfolioJS.debounce(() => {
            baseTop = nav.getBoundingClientRect().top + window.pageYOffset;
        }, 100));
    });
}
window.PortfolioJS.initTechProjectsSwiper = initTechProjectsSwiper;

function initQuantHighlight(root = document) {
    const container = root.querySelector('.management-typography');
    if (!container) return;
    const walker = document.createTreeWalker(container, NodeFilter.SHOW_TEXT);
    const targets = [];
    let node;
    const re = /(\d{1,3}(?:\.\d{3})*(?:,\d+)?\+?|\d+(?:[.,]\d+)?%?)/g;
    while ((node = walker.nextNode())) {
        const t = node.nodeValue;
        const parentEl = node.parentElement;
        if (!t || !re.test(t)) { continue; }
        if (parentEl && (parentEl.closest('[data-no-quant]') || parentEl.closest('#roadmap'))) { continue; }
        targets.push(node);
    }
    targets.forEach(n => {
        const span = document.createElement('span');
        span.innerHTML = n.nodeValue.replace(re, '<span class="quant-highlight">$1</span>');
        if (n.parentNode) {
            n.parentNode.replaceChild(span, n);
        }
    });
}

function initContactObfuscation(root = document) {
    const targets = root.querySelectorAll('.obf-email, .obf-phone');
    targets.forEach(el => {
        const v = el.getAttribute('data-v');
        if (!v) return;
        let text = '';
        try { text = atob(v); } catch (e) { return; }
        const a = document.createElement('a');
        const label = el.getAttribute('data-label');
        if (label) {
            try { a.textContent = atob(label); } catch (e) { a.textContent = text; }
        } else {
            a.textContent = text;
        }
        a.rel = 'nofollow';
        if (el.classList.contains('obf-email')) {
            a.href = 'mailto:' + text;
        } else {
            const t = (el.getAttribute('data-type') || 'tel').toLowerCase();
            if (t === 'wa') {
                const digits = text.replace(/\D+/g, '');
                a.href = 'https://wa.me/' + digits;
            } else {
                a.href = 'tel:' + text;
            }
        }
        const cls = (el.className || '').replace(/\bobf-(email|phone)\b/g, '').trim();
        if (cls) a.className = cls;
        el.replaceWith(a);
    });
}