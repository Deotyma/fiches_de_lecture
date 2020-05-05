/* animation du form Inscription et connexion */

const entete = document.querySelector('.entete');
const form_bg = document.querySelector('.formulaire');
const form_group = document.querySelectorAll('.form-grup');

const tl2 = new TimelineMax();

tl2
    .fromTo(form_bg, 1, { height: "0%" }, { height: "100%", ease: Power2.easeInOut })
    .from(entete, 0.2, { opacity: 0, ease: Back.easeOut.config(1, 7) })
    .staggerFrom(form_group, 2, { opacity: 0, ease: Back.easeOut.config(1, 7) }, 0.2);