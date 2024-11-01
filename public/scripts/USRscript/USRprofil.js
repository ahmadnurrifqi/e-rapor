let toggle = document.getElementById(".pass");
let eyeOpen = document.getElementById(".visible");
let eyeClose = document.getElementById(".visible-off");

toggle.onclick = function(){
    if(toggle.type == "password"){
        toggle.type = "text";
        eyeOpen.style.display = 'none';
        eyeClose.style.display = 'block';
    }else {
        toggle.type = "password";
        eyeOpen.style.display = 'block';
        eyeClose.style.display = 'none';
    }
}