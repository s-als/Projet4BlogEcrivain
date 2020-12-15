// Navbar turn white on scroll
const navbar = document.getElementById("mainNav");
window.onscroll = () => {
    if (window.scrollY > 100) {
        navbar.classList.add("navbar-shrink");
    } else {
        navbar.classList.remove("navbar-shrink");
    }
};


// Smooth Scrolling
const links = document.querySelectorAll('a');
links.forEach(
    element => element.addEventListener('click', function (){
        scrollTo(document.querySelector(element.hash).offsetTop, 1450);
}));

const scrollTo = function(to, duration) {
    const
    element = document.scrollingElement || document.documentElement,
    start = element.scrollTop;
console.log('element.scrollTop:' + element.scrollTop);
    const
    change = to - start,
    startDate = +new Date(),
    // t = current time
    // b = start value
    // c = change in value
    // d = duration
    easeInOutExpo = function(t, b, c, d) {
        t /= d/2;
        if (t < 1) return c/2 * Math.pow( 2, 10 * (t - 1) ) + b;
        t--;
        return c/2 * ( -Math.pow( 2, -10 * t) + 2 ) + b;
    },
    animateScroll = function() {
        const currentDate = +new Date();
console.log('currentDate:' + currentDate);
        const currentTime = currentDate - startDate;
console.log('startDate:' + startDate);
console.log('currentTime:' + currentTime);
        element.scrollTop = parseInt(easeInOutExpo(currentTime, start, change, duration));
        console.log('easeInOutExpo:' + easeInOutExpo(currentTime, start, change, duration));
console.log('New element.scrollTop:' + element.scrollTop);
        if(currentTime < duration) {
            requestAnimationFrame(animateScroll);
        }
        else {
            element.scrollTop = to;
        }
    };
    animateScroll();
};