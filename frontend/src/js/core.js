let body = document.querySelector('body');

window.addEventListener("DOMContentLoaded", () => {
    body.classList.remove('no-js');
});

// media query event handler
if (matchMedia) {
    var mq = window.matchMedia("(max-width: 768px)");
    mq.addListener(WidthChange);
    WidthChange(mq);
}

// media query change
function WidthChange(mq) {
    if (mq.matches) {

    } else {

    }
};
/* End */

/* Add Browser Class to HTML */
var browser_name = '';
isIE = /*@cc_on!@*/false || !!document.documentMode;
isEdge = !isIE && !!window.StyleMedia;
if (navigator.userAgent.indexOf("Chrome") != -1 && !isEdge) {
    browser_name = 'chrome';
} else if (navigator.userAgent.indexOf("Safari") != -1 && !isEdge) {
    browser_name = 'safari';
} else if (navigator.userAgent.indexOf("Firefox") != -1) {
    browser_name = 'firefox';
} else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
{
    browser_name = 'ie';
} else if (isEdge) {
    browser_name = 'edge';
} else {
    browser_name = 'other-browser';
}

let html = document.querySelector('html');

html.classList.add(browser_name);
/* End */

// Scroll function for Navigation & Back to top Button
let navbar = document.querySelector('.navbar'),
    btt = document.querySelector('.back-to-top');

function scrollFunction() {
    let scrollTop = window.scrollY;
    (scrollTop > 1) ? navbar.classList.add('scroll-nav') : navbar.classList.remove('scroll-nav');
    (scrollTop > 200) ? btt.style.opacity = "1" : btt.style.opacity = "0";
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

window.addEventListener('scroll', scrollFunction);
btt.addEventListener("click", topFunction);
/* End */

// Check if used Device is a Mobile Device
function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}
/* End */
