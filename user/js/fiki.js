const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link')

loginlink.onclick = () =>{
    wrapper.classList.add('active');
}
registerlink.onclick = () =>{
    wrapper.classList.remove('active');
}

//footer section
// JavaScript code to display the current year in the copyright message
const year = new Date().getFullYear();
document.getElementById("copyright").innerHTML = "&copy; " + year + " Miltary CCS. All rights reserved.";


