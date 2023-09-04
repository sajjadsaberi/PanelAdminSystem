const MenuBtn = document.querySelector("#menu-btn");
const ContentBox = document.querySelector("#content-box");
const Panel = document.querySelector("#panel");
const dataTable = document.querySelector("#data-table");

const crtBtn = document.getElementsByName("submit");

// Open & Close Menu

function menubtn () {

Panel.classList.toggle("hide");
ContentBox.classList.toggle("longer");

}


// Add row in table

function createrow() {
    alert("Hello")
}