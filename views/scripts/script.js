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
    alert("کاربر افزوده شد")
}

// add random text in header

const texts = [
    "امام علی (ع) : برای انسان، زندگی گواراتر از عافیت و سلامتی نیست.",
    "امام جعفر صادق (ع) : عافیت و سلامتی به هیچ قیمتی قابل ارزیابی نیست.",
    "امام علی (ع) : در دنیا نعمتی بالاتر از طول عمر و سلامتی بدن وجود ندارد.",
    "امام هادی (ع) : آن که از خودش راضی شود ، ناراضیان از او فراوان می شوند.",
    "رسول اکرم (ص) : راستگویی باعث آرامش است و دروغگویی باعث دلهره و اضطراب."
];

function displayRandomText() {
    const randomIndex = Math.floor(Math.random() * texts.length);
    const randomText = texts[randomIndex];
    document.getElementById('randomText').textContent = randomText;
}

document.addEventListener('DOMContentLoaded', function() {
    document.addEventListener('keyup', function(event) {
        if (event.keyCode === 116) {  
            displayRandomText();
        }
    });
    window.addEventListener('beforeunload', function(event) {
        event.preventDefault();
        displayRandomText();
    });
});
displayRandomText();