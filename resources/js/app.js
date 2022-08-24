require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const wrapper = document.querySelector('.wrapper');
    const indicators = [...document.querySelectorAll('.indicators button')];
    let currentTestimonial = 0;
    indicators.forEach((item, i)=>{
        item.addEventListener('click', () => {
            indicators[currentTestimonial].classList.remove('active');
            wrapper.style.marginLeft= `-${100 * i}%`;
            item.classList.add('active');
            currentTestimonial = i;
        })
    })

    const checkbox = document.querySelector('#toogle');
    const html = document.querySelector('html');
    const toogleDarkMode = function(){
        checkbox.checked ? html.classList.add("dark") : html.classList.remove("dark");
    }
    toogleDarkMode();
    checkbox.addEventListener('click', toogleDarkMode);


/***
 * import { createApp } from 'vue'
import App from './App.vue'
import '../css/app.css'

createApp(App).mount('#app')
 */
