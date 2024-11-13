//modal popup

const edit = document.getElementById('edit');
const wrapper2 = document.getElementById('wrapper2');
const close2 = document.getElementById('close2');

//edit
edit.addEventListener('click', () => {
    wrapper2.classList.add('active');
});
close2.addEventListener('click', () => {
    wrapper2.classList.remove('active');
});

// const toggle = document.getElementById('.eyepass');
// const eyeOpen = document.getElementById('.visible');
// const eyeClose = document.getElementById('.visible-off');

// toggle.onclick = function(){
//     if(toggle.type == "password"){
//         toggle.type = "text";
//         eyeOpen.style.display = 'none';
//         eyeClose.style.display = 'block';
//     }else {
//         toggle.type = "password";
//         eyeOpen.style.display = 'block';
//         eyeClose.style.display = 'none';
//     }
// };