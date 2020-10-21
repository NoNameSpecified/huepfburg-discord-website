
// if scrolling down, make nav thinner, elements smaller
function resizeNavOnScroll(){

    var wishedTrigger = 50;
    var oneThird = (window.innerHeight / 3);

    window.onscroll = function() {
        console.log(window.scrollY)
        if ( (window.scrollY) >= wishedTrigger) {
            document.getElementById('main_nav').style.transition = "0.5s";
            document.getElementById('main_nav').style.maxHeight = "10vh";
        }else{
            document.getElementById('main_nav').style.transition = "0.5s";
            document.getElementById('main_nav').style.maxHeight = "100vh";
        }
    }
    
}
