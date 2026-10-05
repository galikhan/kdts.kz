/* kdts redesign — shared header/footer interactions */

/* ---------- hero cta bar: bottom gap equal to its own height (homepage) ---------- */
(function() {
    function positionHeroCtaBar() {
        var bar = document.querySelector('.hero-cta-bar');
        var hero = document.querySelector('.hero');
        if (!bar || !hero) return;
        var barHeight = bar.offsetHeight;
        bar.style.bottom = barHeight + 'px';
        hero.style.paddingBottom = (barHeight * 2) + 'px';
        hero.style.setProperty('--cta-top', (barHeight * 2) + 'px');
    }
    positionHeroCtaBar();
    window.addEventListener('resize', positionHeroCtaBar);
})();

/* ---------- header scroll state + burger / mega menu ---------- */
(function() {
    var header = document.getElementById('header');
    if (!header) return;

    function updateHeaderScrolled() {
        header.classList.toggle('is-scrolled', window.scrollY > 40);
    }
    updateHeaderScrolled();
    window.addEventListener('scroll', updateHeaderScrolled, { passive: true });

    var burger = document.getElementById('burgerBtn');
    var megaMenu = document.getElementById('megaMenu');
    var megaBackdrop = document.getElementById('megaBackdrop');
    if (!burger || !megaMenu || !megaBackdrop) return;

    function closeMegaMenu() {
        header.classList.remove('is-open');
        burger.classList.remove('is-open');
        megaMenu.classList.remove('is-open');
        megaBackdrop.classList.remove('is-open');
    }

    burger.addEventListener('click', function() {
        var willOpen = !megaMenu.classList.contains('is-open');
        header.classList.toggle('is-open', willOpen);
        burger.classList.toggle('is-open', willOpen);
        megaMenu.classList.toggle('is-open', willOpen);
        megaBackdrop.classList.toggle('is-open', willOpen);
    });
    megaBackdrop.addEventListener('click', closeMegaMenu);
    document.querySelectorAll('.mega-menu a, .main-nav a').forEach(function(a) {
        a.addEventListener('click', closeMegaMenu);
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeMegaMenu();
    });
})();

/* ---------- scroll-to-top button ---------- */
(function() {
    var scrollTopBtn = document.getElementById('scrollTop');
    if (!scrollTopBtn) return;
    window.addEventListener('scroll', function() {
        scrollTopBtn.classList.toggle('is-visible', window.scrollY > 500);
    }, { passive: true });
    scrollTopBtn.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();

/* Nav dropdowns rely on CSS :hover, which touch devices fake unreliably —
   a tap opens the submenu but a follow-up tap can register as "outside"
   and close it before a submenu link is reached. On touch, require a
   first tap to open, then let the next tap (parent link or submenu item)
   navigate normally. */
(function() {
    var dropbtns = document.querySelectorAll('.nav > ul > li.dropbtn');
    if (!dropbtns.length) return;

    dropbtns.forEach(function(li) {
        var link = li.querySelector(':scope > a');
        var content = li.querySelector(':scope > .dropdown-content');
        if (!link || !content) return;

        link.addEventListener('click', function(e) {
            if (!window.matchMedia('(hover: none)').matches) return;
            if (getComputedStyle(content).position === 'static') return;
            if (!li.classList.contains('open')) {
                e.preventDefault();
                dropbtns.forEach(function(other) {
                    if (other !== li) other.classList.remove('open');
                });
                li.classList.add('open');
            }
        });
    });

    document.addEventListener('click', function(e) {
        dropbtns.forEach(function(li) {
            if (!li.contains(e.target)) li.classList.remove('open');
        });
    });
})();

/* ---------- hero background videos + slider (homepage) ----------
   Every slide's video is exactly 8s long. A slide stays up until its video has
   played through (the `ended` event), then the next slide starts from 0:00.
   Manual navigation (dots / arrows) restarts the newly shown slide's video from
   the beginning. A 10s fallback timer keeps the slider moving if a video can't play. */
(function() {
    var slider = document.getElementById('heroSlider');
    var videos = document.querySelectorAll('.hero-video');
    var FALLBACK_MS = 10000;

    function play(v) {
        var p = v.play();
        if (p && typeof p.catch === 'function') p.catch(function() {});
    }
    videos.forEach(function(v) {
        v.muted = true;
        v.defaultMuted = true;
        v.addEventListener('canplay', function() { v.classList.add('is-ready'); });
    });
    if (!slider) { videos.forEach(play); return; }

    var slides = slider.querySelectorAll('.hero-slide');
    var dots = slider.querySelectorAll('.hero-dot');
    var current = 0, fallback = null;
    var reduced = !!(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches);

    function activeVideo() { return slides[current].querySelector('.hero-video'); }
    function arm() {
        clearTimeout(fallback);
        if (reduced || slides.length < 2) return;
        fallback = setTimeout(function() { show(current + 1); }, FALLBACK_MS);
    }
    function show(i) {
        current = (i + slides.length) % slides.length;
        slides.forEach(function(s, n) {
            s.classList.toggle('is-active', n === current);
            s.setAttribute('aria-hidden', n === current ? 'false' : 'true');
        });
        dots.forEach(function(d, n) { d.classList.toggle('is-active', n === current); });
        var av = activeVideo();
        videos.forEach(function(v) { if (v !== av) v.pause(); });
        if (av) {
            try { av.currentTime = 0; } catch (e) {}
            play(av);
        }
        arm();
    }

    videos.forEach(function(v) {
        v.addEventListener('ended', function() {
            if (!reduced && v === activeVideo() && slides.length > 1) show(current + 1);
        });
        var resume = function() { if (v === activeVideo() && v.paused && !v.ended) play(v); };
        v.addEventListener('loadedmetadata', resume);
        v.addEventListener('canplay', resume);
        v.addEventListener('loadeddata', resume);
    });
    dots.forEach(function(d) {
        d.addEventListener('click', function() { show(parseInt(d.getAttribute('data-goto'), 10)); });
    });
    var prev = slider.querySelector('.hero-arrow-prev');
    var next = slider.querySelector('.hero-arrow-next');
    if (prev) prev.addEventListener('click', function() { show(current - 1); });
    if (next) next.addEventListener('click', function() { show(current + 1); });

    document.addEventListener('visibilitychange', function() {
        if (document.hidden) {
            clearTimeout(fallback);
            var av = activeVideo();
            if (av) av.pause();
        } else {
            show(current);
        }
    });
    // autoplay can be blocked until the first user gesture
    ['pointerdown', 'touchstart', 'keydown', 'wheel', 'scroll'].forEach(function(evt) {
        window.addEventListener(evt, function() {
            var av = activeVideo();
            if (av && av.paused && !av.ended) play(av);
        }, { once: true, passive: true });
    });

    show(0);
})();

/* ---------- mission text: scroll-linked word coloring (homepage) ---------- */
(function() {
    var p = document.querySelector('.mission-text');
    if (!p) return;
    var words = p.textContent.trim().split(/\s+/);
    p.innerHTML = words.map(function(w) { return '<span class="mtxt-word">' + w + '</span>'; }).join(' ');
    var lit = document.querySelectorAll('.mission-text .mtxt-word');

    function update() {
        var rect = p.getBoundingClientRect();
        var vh = window.innerHeight;
        var start = vh * 0.9;
        var end = vh * 0.35;
        var progress = (start - rect.top) / (start - end);
        progress = Math.max(0, Math.min(1, progress));
        var count = Math.round(progress * lit.length);
        lit.forEach(function(w, i) { w.classList.toggle('is-lit', i < count); });
    }
    update();
    window.addEventListener('scroll', update, { passive: true });
    window.addEventListener('resize', update);
})();

/* ---------- route switcher (homepage) ---------- */
(function() {
    var routeTabs = document.querySelectorAll('.route-tab');
    if (!routeTabs.length) return;
    var routeCharts = document.querySelectorAll('.route-map-chart');
    var routeInfoBars = document.querySelectorAll('.route-info-bar');
    var routeChartAlias = { '2': '1' };

    function selectRoute(route) {
        routeTabs.forEach(function(t) {
            t.classList.toggle('is-active', t.getAttribute('data-route') === route);
        });
        routeInfoBars.forEach(function(el) {
            el.classList.toggle('is-active', el.getAttribute('data-route') === route);
        });
        var chartRoute = routeChartAlias[route] || route;
        routeCharts.forEach(function(el) {
            el.classList.toggle('is-active', el.getAttribute('data-route') === chartRoute);
        });
        var chartEntry = window.kdtsRouteCharts && window.kdtsRouteCharts[chartRoute];
        if (chartEntry) chartEntry.play();
    }

    routeTabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            selectRoute(tab.getAttribute('data-route'));
        });
    });

    var routesSection = document.getElementById('routes');
    if (routesSection && 'IntersectionObserver' in window) {
        var routesIO = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (!entry.isIntersecting) return;
                var activeTab = document.querySelector('.route-tab.is-active');
                var route = activeTab ? activeTab.getAttribute('data-route') : '1';
                var chartRoute = routeChartAlias[route] || route;
                var chartEntry = window.kdtsRouteCharts && window.kdtsRouteCharts[chartRoute];
                if (chartEntry) chartEntry.play();
                routesIO.unobserve(entry.target);
            });
        }, { threshold: 0.35 });
        routesIO.observe(routesSection);
    }
})();

/* ---------- reveal on scroll (homepage) ---------- */
(function() {
    var revealTargets = document.querySelectorAll(
        '.service-card, .partner-logo, .cabinet-item, .cab-feat, .news-card, .mission-text'
    );
    if (!revealTargets.length) return;
    revealTargets.forEach(function(el) { el.setAttribute('data-reveal', ''); });

    if ('IntersectionObserver' in window) {
        var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    io.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });
        revealTargets.forEach(function(el) { io.observe(el); });
    } else {
        revealTargets.forEach(function(el) { el.classList.add('is-visible'); });
    }
})();

/* Generic modal open/close for elements using the .BtnModal / .arPortfolioModal pattern */
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        var btns = document.querySelectorAll('.BtnModal');
        var overlay = document.querySelector('.modal-overlay');
        var modals = document.querySelectorAll('.arPortfolioModal');
        if (!btns.length || !overlay) return;

        function closeAllModals() {
            overlay.classList.remove('modal-overlay--visible');
            modals.forEach(function(m) { m.classList.remove('modal--visible'); });
        }

        btns.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                var path = btn.getAttribute('data-path');
                modals.forEach(function(m) { m.classList.remove('modal--visible'); });
                var target = document.querySelector('[data-target="' + path + '"]');
                if (target) target.classList.add('modal--visible');
                overlay.classList.add('modal-overlay--visible');
            });
        });

        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) closeAllModals();
        });
        document.querySelectorAll('.modal-close').forEach(function(btn) {
            btn.addEventListener('click', closeAllModals);
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') closeAllModals();
        });
    });
})();

/* ---------- reception appointment form ---------- */
(function() {
    var receptionForm = document.getElementById('receptionForm');
    if (!receptionForm) return;
    receptionForm.addEventListener('submit', function(e) {
        e.preventDefault();
        receptionForm.classList.add('is-sent');
        setTimeout(function() {
            receptionForm.reset();
            receptionForm.classList.remove('is-sent');
        }, 3000);
    });
})();

/* ---------- person modal (read more) ---------- */
(function() {
    var personOverlay = document.getElementById('personOverlay');
    if (!personOverlay) return;
    var personModalPhoto = document.getElementById('personModalPhoto');
    var personModalName = document.getElementById('personModalName');
    var personModalRole = document.getElementById('personModalRole');
    var personModalBio = document.getElementById('personModalBio');
    var personClose = document.getElementById('personClose');

    function closePersonModal() { personOverlay.classList.remove('is-open'); }

    document.querySelectorAll('.people-more').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var card = btn.closest('.people-card');
            if (!card) return;
            var photo = card.querySelector('.people-card-photo');
            var name = card.querySelector('h3');
            var role = card.querySelector('.info-role');
            var full = card.querySelector('.people-full');
            if (photo) { personModalPhoto.src = photo.src; personModalPhoto.alt = photo.alt; }
            if (name) personModalName.textContent = name.textContent;
            if (role) personModalRole.textContent = role.textContent;
            if (full) personModalBio.innerHTML = full.innerHTML;
            personOverlay.classList.add('is-open');
        });
    });
    if (personClose) personClose.addEventListener('click', closePersonModal);
    personOverlay.addEventListener('click', function(e) {
        if (e.target === personOverlay) closePersonModal();
    });
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closePersonModal();
    });
})();


/* ---------- "Message to HR" popup form ---------- */
(function() {
    var form = document.getElementById('hr-form');
    if (!form) return;
    var status = form.querySelector('.hr-status');
    var btn = form.querySelector('button[type=submit]');

    function say(text, cls) {
        status.textContent = text;
        status.className = 'hr-status' + (cls ? ' ' + cls : '');
    }
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        if (!form.checkValidity()) { say(form.getAttribute('data-invalid'), 'is-error'); return; }
        btn.disabled = true;
        say(form.getAttribute('data-sending'), '');
        fetch(form.getAttribute('data-ajax'), { method: 'POST', body: new FormData(form), credentials: 'same-origin' })
            .then(function(r) { return r.json(); })
            .then(function(res) {
                if (res && res.success) {
                    say(form.getAttribute('data-ok'), 'is-ok');
                    form.reset();
                    setTimeout(function() {
                        var close = form.closest('.arPortfolioModal').querySelector('.modal-close');
                        if (close) close.click();
                        say('', '');
                    }, 2500);
                } else {
                    var code = res && res.data && res.data.code;
                    say(form.getAttribute('data-' + (code === 'invalid' || code === 'rate' ? code : 'fail')), 'is-error');
                }
            })
            .catch(function() { say(form.getAttribute('data-fail'), 'is-error'); })
            .then(function() { btn.disabled = false; });
    });
})();
