import * as bootstrap from 'bootstrap';
import '../sass/app.scss'; 

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
onscroll = () => {
    window.scrollY > 0 ? header.classList.add('scrolldown') :  header.classList.remove('scrolldown') ;
};
onload = () =>{
    burger.addEventListener('click', toggleMenu);
    window.scrollY > 0 ? header.classList.add('scrolldown') :  header.classList.remove('scrolldown') ;
    tns({
        container: '.user-reviews-gallery',
        items: 1,
        slideBy: 'page',
        controls: false,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
    });
    
    tns({
        container: '.awards-gallery',
        items: 1,
        slideBy: 'page',
        controls: false,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
    });

    tns({
        container: '.app-stats-gallery',
        items: 1,
        slideBy: 'page',
        controls: false,
        navPosition: 'bottom',
        mouseDrag: true,
        arrowKeys: false,
        loop: false,
        edgePadding: 10,
        responsive: {
            "350": {
                edgePadding: 30,
            },
            "400": {
                edgePadding: 70,
            },
            "500": {
                edgePadding: 100,
            },
            "550": {
                edgePadding: 120,
            },
            "650": {
                edgePadding: 150,
            },
            "1000": {
              items:3,
              edgePadding: 0,
            }
        }
    
    });
}