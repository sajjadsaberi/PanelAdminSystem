const panel = document.querySelector("#panel");
const btnMenu = document.querySelector("#menu-btn-open");

// Open And Close Menu

function OpenMenu(){
    panel.style.right = "0";
    event.stopPropagation();
}

body.addEventListener("click" , () => {
    panel.style.right = "-130%";
    event.stopPropagation();
})

