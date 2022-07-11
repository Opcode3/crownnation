const menuburger = document.querySelector('#menuburger');
const btnCancelMenu = document.querySelector('#btnCancelMenu');
const btnOpenProfile = document.querySelector('#btnOpenProfile');


if(btnOpenProfile){
    btnOpenProfile.addEventListener('click', () => ppToggle())
}
if(menuburger){
    menuburger.addEventListener('click', () => menuToggleView())
}

if(btnCancelMenu){
    btnCancelMenu.addEventListener('click', () => menuToggleView());
}


const ppToggle = () => { document.querySelector('.dropdown').classList.toggle('openProfile'); }
const menuToggleView = () => { document.querySelector('.container').classList.toggle('halve'); }



document.addEventListener('DOMContentLoaded', ()=>{
    setTimeout(()=>{
        const preloader = document.querySelector(".preloader");
        preloader.remove();
    }, 500)
})

