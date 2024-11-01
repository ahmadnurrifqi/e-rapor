// index page (login and reset password)
const container = document.getElementById('container');
const registerBtn = document.getElementById('forget');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

//captcha

//select necessary DOM elements
const captchaTextBox = document.querySelector(".captch_box");
const captchaInputBox = document.querySelector(".captch_input");
const message = document.querySelector(".message");
const submitButton = document.querySelector(".button");

let captchaText = null; //variable to store generated captcha

//function to generate captcha
const generateCaptcha = () => {
    const randomString = Math.random().toString(36).substring(2, 6);
    const randomStringArray = randomString.split();
    const changeString = randomStringArray.map((char) => (Math.random() > 0,5 ? char.toUpperCase(): char));
    captchaText = changeString.join(" ");
    captchaTextBox.value = captchaText;
    console.log(captchaText);
};

const captchaKeyUpValidate = () => {
    submitButton.classList.toggle("disabled", !captchaInputBox.value)

    if (captchaInputBox.value === "") message.classList.remove("active");
}

//function to validate the entered captcha
const submitBtnClick = () => {
    captchaText = captchaText
    .split("")
    .filter((char) => char != " ")
    .join("");
    
    message.classList.add("active");
    //check if the entered chaptcha
    if(captchaInputBox.value === captchaText){
        message.innerText = "berhasil masuk, tunggu . . .";
        message.style.color = "rgb(8, 255, 8)";
        setTimeout(function(){
            submitButton = window.location = "ADMdashboard" //berhasil login
        },1000);
    } else {
        message.innerText = "ulang lagi !";
        message.style.color = "red";
        setTimeout(function(){
            window.location = "/" //gagal login
        },1000);
    }
}

//add event listener for the refresh captchaInputBox
submitButton.addEventListener("click",submitBtnClick);

//generate a captcha when the page loads
generateCaptcha();