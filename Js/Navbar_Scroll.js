const burger = document.getElementById('burger');
const logo = document.getElementById("logo");
const nav = document.querySelector('.navbar');
const text = document.querySelector('.text');
const navLink = document.querySelector('.nav-link');
const navLink1 = document.querySelector('.nav-link1');
const navLink2 = document.querySelector('.nav-link2');
const navLink3 = document.querySelector('.nav-link3');
const navLink4 = document.querySelector('.nav-link4');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 400) {
        logo.setAttribute("fill", "black");
        burger.setAttribute("fill", "black");
        nav.classList.add('bg-light', 'shadow');
        text.classList.add('text-black');
        navLink.classList.add('text-black');
        navLink1.classList.add('text-black');
        navLink2.classList.add('text-black');
        navLink3.classList.add('text-black');
        navLink4.classList.add('text-black');

    } else {
        logo.setAttribute("fill", "white");
        burger.setAttribute("fill", "white")
        nav.classList.remove('bg-light', 'shadow');
        navLink.classList.remove('text-black');
        navLink1.classList.remove('text-black');
        navLink2.classList.remove('text-black');
        navLink3.classList.remove('text-black');
        navLink4.classList.remove('text-black');
        logo.classList.remove("scroll-logo");

    }
});

