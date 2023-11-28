const burger = document.getElementById('burger');
const menu = document.getElementById('menu');
const header = document.getElementsByTagName('header')[0];
const html = document.documentElement;
function toggleMenu(){
    if(burger.classList.contains('opened')){
        burger.classList.remove('opened');
        menu.classList.remove('opened');
        html.classList.remove('opened');
    }
    else{
        burger.classList.add('opened');
        menu.classList.add('opened');
        html.classList.add('opened');
    }
}
onscroll = (event) => {
    console.log( window.scrollY)
    window.scrollY > 0 ? header.classList.add('scrolldown') :  header.classList.remove('scrolldown') ;
};