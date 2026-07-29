/* kdts redesign — shared header/footer interactions */

function toggleNav() {
    var nav = document.getElementById('nav');
    var burger = document.getElementById('burger');
    if (!nav || !burger) return;
    nav.classList.toggle('open');
    burger.classList.toggle('active');
}

(function() {
    var header = document.getElementById('header');
    if (!header) return;
    window.addEventListener('scroll', function() {
        header.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
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

/* Homepage hero calculator — illustrative estimate only, not a real tariff lookup */
function showCalcResult() {
    var result = document.getElementById('calcResult');
    if (!result) return;
    var from = document.getElementById('calc-from');
    var to   = document.getElementById('calc-to');
    var weight = document.getElementById('calc-weight');
    if (!from || !to || !weight) return;
    if (!from.value || !to.value || !weight.value) {
        result.classList.remove('show');
        return;
    }
    var base = 15000 + parseFloat(weight.value || 0) * 180;
    var formatted = base.toLocaleString('ru-KZ', { style: 'currency', currency: 'KZT', maximumFractionDigits: 0 });
    var priceEl = result.querySelector('.res-price');
    if (priceEl) priceEl.textContent = formatted;
    result.classList.add('show');
}

function setCalcType(btn) {
    var group = btn.closest('.calc-type-switch');
    if (!group) return;
    group.querySelectorAll('.calc-type').forEach(function(b) { b.classList.remove('active'); });
    btn.classList.add('active');
}

function swapCalcFields() {
    var from = document.getElementById('calc-from');
    var to = document.getElementById('calc-to');
    if (!from || !to) return;
    var tmp = from.value;
    from.value = to.value;
    to.value = tmp;
}

/* Generic modal open/close for elements using the .BtnModal / .arPortfolioModal pattern */
(function() {
    document.addEventListener('DOMContentLoaded', function() {
        var btns = document.querySelectorAll('.BtnModal');
        var overlay = document.querySelector('.modal-overlay');
        var modals = document.querySelectorAll('.arPortfolioModal');
        if (!btns.length || !overlay) return;

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
            if (e.target === overlay) {
                overlay.classList.remove('modal-overlay--visible');
                modals.forEach(function(m) { m.classList.remove('modal--visible'); });
            }
        });
    });
})();
