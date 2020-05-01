const banniere = document.querySelector('.banniere');
const logo = document.querySelector('#logo');
const menu = document.querySelector('.icone');
const titre = document.querySelector('.titre');
const btnClose = document.querySelector('.closeBtn');
const nav = document.getElementById('myNav');
const lettres = document.querySelectorAll('.lettres');


const tl = new TimelineMax();

tl
    .fromTo(banniere, 1, { height: "0%" }, { height: "100%", ease: Power2.easeInOut })
    .fromTo(banniere, 1, { heigth: "100%" }, { height: "80%", ease: Power2.easeInOut })
    .from(titre, 1, { opacity: 0, ease: Back.easeOut.config(1, 7) })
    .staggerFrom(lettres, 2, { opacity: 0, ease: Back.easeOut.config(1, 7) }, 0.2);

menu.addEventListener('click', function() {
    TweenMax.to(nav, 0.3, { right: 0 });
});

btnClose.addEventListener('click', function() {
    TweenMax.to(nav, 0.3, { right: -2000 });
});