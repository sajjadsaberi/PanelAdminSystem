const container = document.getElementById("container");
const contentBox = document.getElementById("content-box");
const removeClass = document.getElementById("remove-class");
const eye = document.querySelector(".eyebox");
const PassInput = document.querySelector("#pass-input");
const InfoBox = document.querySelectorAll(".box");


InfoBox.forEach(box => {
box.addEventListener("click" , () => {

  container.classList.add("change-area");
  contentBox.classList.add("change-area");
  
})
})

// Show Password

 var pass = "hide";
eye.addEventListener("click" , () => {
 
  if(pass == "hide"){
    PassInput.type = "text";
    pass = "show";
  }else{
    PassInput.type = "password";
    pass = "hide";
  }
})
function backToSignin() {

    container.classList.remove("change-area");
    contentBox.classList.remove("change-area");

}


