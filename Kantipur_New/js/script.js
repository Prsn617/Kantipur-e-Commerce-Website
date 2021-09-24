const burger = document.querySelector('.burger');
const box = document.querySelector('#box');
const head = document.querySelector('.head');
const nav = document.querySelector('.nav');
const account = document.querySelector('.acc');
const logo = document.querySelector('.logo');
const line = document.querySelector('.headline');

function toggler(){
    if(box.checked == true){
        head.classList.add("resp-head");
        nav.classList.add("resp-nav");
        account.classList.add("resp-acc");
        logo.classList.add("resp-logo");
        line.classList.add("resp-headline");
    }
    else{
        head.classList.remove("resp-head");
        nav.classList.remove("resp-nav");
        account.classList.remove("resp-acc");
        logo.classList.remove("resp-logo");
        line.classList.remove("resp-headline");
    }
}

//burger.addEventListener('click',()=>{
//    head.classList.add("resp-head");
//    nav.classList.add("resp-nav");
//    account.classList.add("resp-acc");
//    logo.classList.add("resp-logo");
//    line.classList.add("resp-headline");
//});