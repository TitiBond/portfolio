// shiny effect on sub-title web dev fullstack
const spans_dev = document.querySelectorAll('.span_dev');
for (let i = 0; i < spans_dev.length; i++) {
    spans_dev[i].style.animation = "brillance 5s "+ i*0.05+"s linear infinite";
}


/*START CONTACT FORM*/
const contact_me_btn = document.querySelector('#contact_me_btn');
const flip_card_inner = document.querySelector('#flip_card_inner');
contact_me_btn.addEventListener('click',formRotation);
function formRotation(){
    flip_card_inner.style.transform = "rotateY(180deg)";
}
/*END CONTACT FORM*/


/*START BURGER MENU*/
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
/*END BURGER MENU*/



/*START SLIDER*/
let carousel = document.querySelector('#slider_container');
let indicators = document.querySelectorAll('.indicator');
let elements = document.querySelectorAll('#slider_container > *');
console.log(elements);
let currentIndex = 0;

function renderIndicator() {
    for (var i = 0; i < indicators.length; i++) {
        if (currentIndex == i){
            indicators[i].checked = true;
        }else{
            indicators[i].checked = false;
        }
    }
}    
let observer = new IntersectionObserver(function(entries, observer) {
  // find the entry with the largest intersection ratio
  var activated = entries.reduce(function (max, entry) {
    return (entry.intersectionRatio > max.intersectionRatio) ? entry : max;
  });
  if (activated.intersectionRatio > 0) {
    currentIndex = elementIndices[activated.target.getAttribute("id")];
    renderIndicator();
  }
}, {
  root:carousel, threshold:0.5
});
var elementIndices = {};
for (var i = 0; i < elements.length; i++) {
  elementIndices[elements[i].getAttribute("id")] = i;
  observer.observe(elements[i]);
}
/*END SLIDER*/
