var progressbar = document.getElementById("progressbar");
var percent = document.getElementById("percent");

var totalHeight = document.body.scrollHeight - window.innerHeight;
window.onscroll = function() {
    var progress = (window.pageYOffset / totalHeight) * 100;
    progressbar.style.height = progress + "%";
}

const menu = document.querySelector('.menu-desk');
const btn = document.querySelector('.phone-menu');
const burger = document.querySelector('.burger');

    btn.addEventListener('click', () => {
        menu.classList.toggle('active')
        btn.classList.toggle('active')
        burger.classList.toggle('active')
    });