/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var lastScrollTop = 0;
window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop){
    navbar.style.top = "-80px";
} else {
    navbar.style.top = "0px";
}
    lastScrollTop = scrollTop;
})