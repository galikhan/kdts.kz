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
