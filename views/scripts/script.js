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

 // تابعی برای افزایش شمارنده

function startCount(element) {
    var target = parseInt(element.getAttribute('data-count'));
    var current = 0;
    var increment = 1;

    var interval = setInterval(function () {
        current += increment;
        element.textContent = current;

        if (current >= target) {
         clearInterval(interval);
            element.textContent = target;
        }
    }, 0.1); // زمان انتظار بین افزایش‌ها (به میلی‌ثانیه)
}
var numberElements = document.querySelectorAll('.number');
numberElements.forEach(function (element) {
    startCount(element);
});

// add random text in header

const texts = [
    "امام علی (ع) : برای انسان، زندگی گواراتر از عافیت و سلامتی نیست.",
    "امام جعفر صادق (ع) : عافیت و سلامتی به هیچ قیمتی قابل ارزیابی نیست.",
    "امام علی (ع) : در دنیا نعمتی بالاتر از طول عمر و سلامتی بدن وجود ندارد.",
    "امام هادی (ع) : آن که از خودش راضی شود ، ناراضیان از او فراوان می شوند.",
    "رسول اکرم (ص) : راستگویی باعث آرامش است و دروغگویی باعث دلهره و اضطراب."
];

function displayRandomText() {
    let randomIndex = Math.floor(Math.random() * texts.length);
    let randomText = texts[randomIndex];
    document.getElementById('randomText').textContent = randomText;
}

document.addEventListener('load', function() {
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

//notifiction

// گرفتن اشاره به دکمه و منو
const button = document.getElementById('notification-button');
const menu = document.getElementById('notification-menu');

// وقتی دکمه کلیک می‌شود
button.addEventListener('click', function() {
    // نمایش یا مخفی کردن منو
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block';
    } else {
        menu.style.display = 'none';
    }
});