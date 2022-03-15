var lightbar = document.getElementById('light-bar');
var newEl = lightbar.insertAdjacentHTML('beforeend', '<button class="light-button-bar"><i class="fas fa-angle-right"></i></button>');
var lightbuttonbar = document.getElementsByClassName('light-button-bar');
var closethis = document.getElementById('close-light-bar');
function pokazukryj() {
    lightbar.classList.toggle('light-hide');
};

document.querySelector('.light-button-bar').addEventListener('click',pokazukryj);


function hideMe() {
    lightbar.classList.toggle('light-hide');
};

closethis.addEventListener('click', hideMe);

