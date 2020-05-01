const menu = document.querySelector('.icone');
const btnClose = document.querySelector('.closeBtn');
const nav = document.getElementById('myNav');

menu.addEventListener('click', function() {
    TweenMax.to(nav, 0.3, { right: 0 });
});

btnClose.addEventListener('click', function() {
    TweenMax.to(nav, 0.3, { right: -2000 });
});