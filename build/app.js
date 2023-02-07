// shiny effect on sub-title web dev fullstack
const spans_dev = document.querySelectorAll('.span_dev');
for (let i = 0; i < spans_dev.length; i++) {
    spans_dev[i].style.animation = "brillance 5s "+ i*0.05+"s linear infinite";
}


/*DEBUT CONTACT FORM*/
const contact_me_btn = document.querySelector('#contact_me_btn');
const flip_card_inner = document.querySelector('#flip_card_inner');
contact_me_btn.addEventListener('click',formRotation);
function formRotation(){
    flip_card_inner.style.transform = "rotateY(180deg)";
}
/*FIN CONTACT FORM*/

/*DEBUT MENU BURGER*/
const hamburger_btn = document.querySelector('#hamburger_button');
const mobile_menu = document.querySelector('#mobile_menu');
const titi_home_icon = document.querySelector('#titi_home_icon');

function toggleMenu(){
    mobile_menu.classList.toggle('hidden');
    mobile_menu.classList.toggle('flex');
    hamburger_btn.classList.toggle('toggle-btn');
}

hamburger_btn.addEventListener('click',toggleMenu);
mobile_menu.addEventListener('click',toggleMenu);

/*FIN MENU BURGER*/
