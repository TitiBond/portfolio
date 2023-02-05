// shiny effect on sub-title web dev fullstack
let spans_dev = document.querySelectorAll('.span_dev');
for (let i = 0; i < spans_dev.length; i++) {
    spans_dev[i].style.animation = "brillance 5s "+ i*0.05+"s linear infinite";
}


/*DEBUT CONTACT FORM*/
let contact_me_btn = document.querySelector('#contact_me_btn');
let flip_card_inner = document.querySelector('#flip_card_inner');
contact_me_btn.addEventListener('click',formRotation);
function formRotation(){
    flip_card_inner.style.transform = "rotateY(180deg)";
}
/*FIN CONTACT FORM*/
