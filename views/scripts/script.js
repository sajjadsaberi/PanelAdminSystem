const MenuBtn = document.querySelector("#menu-btn");
const ContentBox = document.querySelector("#content-box");
const Panel = document.querySelector("#panel");
const Container = document.querySelector("#container");
const time = document.querySelector("#time");
const date = document.querySelector("#date");

// Open & Close Menu

function menubtn () {

Panel.classList.toggle("hide");
ContentBox.classList.toggle("longer");

}


//  Clock

setInterval(() => {
    var dater = new Date().toLocaleDateString("fa-IR-u-nu-latn");
    date.innerHTML = dater;
    var timer = new Date().toLocaleTimeString("fa-IR-u-nu-latn");
    time.innerHTML = timer;
} , 1000);