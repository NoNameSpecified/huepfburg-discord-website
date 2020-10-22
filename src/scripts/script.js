
// if scrolling down, make nav thinner, elements smaller
function resizeNavOnScroll(wishedTrigger, nav_id){

    window.onscroll = function() {

        // variables to change the different list-items of the nav
        var header_nav = document.getElementById(nav_id);
        var header_nav_li_list = header_nav.getElementsByTagName("LI");
        var num_of_li = header_nav_li_list.length;

        var header_title = document.getElementById("nav_h3");
        var header_highlight = document.getElementById("nav_highlight");
        // console.log(window.scrollY); only for debug purposes

        if ( (window.scrollY) >= wishedTrigger) {
            header_nav.style.transition = "0.3s";
            header_nav.style.maxHeight = "10vh";
            header_nav.style.backgroundColor = "rgb(36, 37, 42)";
            // slide icon next to the nav title
            document.getElementById("nav_gif_icon").style.left = "-35%";
            // change hover color of title, as else it looks weird on dark background
            header_title.style.color = "white";
            header_title.onmouseenter = function(){ header_title.style.color = "rgb(255, 182, 193)";}
            header_title.onmouseleave = function(){ header_title.style.color = "white";}
            // *slightly* change highlight hover style, same reason
            header_highlight.onmouseenter = function(){ 
                header_highlight.style.backgroundColor = "rgb(255, 224, 224)";
                header_highlight.style.border = "white solid 1px";
                header_highlight.style.color = "rgba(236, 55, 55, 0.877)";
            }
            header_highlight.onmouseleave = function(){ 
                header_highlight.style.backgroundColor = "rgba(236, 55, 55, 0.877)";
                header_highlight.style.border = "black 1px solid";
                header_highlight.style.color = "white";
            }

            for (i = 0; i < num_of_li; i++){
                header_nav_li_list[i].style.fontSize = "4vh";
                header_nav_li_list[i].style.color = "white";
            }

        }else{
            // set back to the default, definded in style.css
            header_nav.style.transition = "0.3s";
            header_nav.style.maxHeight = "100vh";
            header_nav.style.backgroundColor = "rgba(0, 0, 0, 0)"; // color doesnt matter, just make it transparent (last 0)
            // slide icon back off the screen
            document.getElementById("nav_gif_icon").style.left = "-200vh";
            // change hover color of title back to usual on white bg
            header_title.style.color = "black";
            header_title.onmouseenter = function(){ header_title.style.color = "rgba(241, 25, 25, 0.746)";}
            header_title.onmouseleave = function(){ header_title.style.color = "black";}
            // change highlight hover style back to usual
            header_highlight.onmouseenter = function(){ 
                header_highlight.style.backgroundColor = "rgb(255, 224, 224)";
                header_highlight.style.border = "black solid 1px";
                header_highlight.style.color = "rgba(236, 55, 55, 0.877)";
            }
            header_highlight.onmouseleave = function(){ 
                header_highlight.style.backgroundColor = "rgba(236, 55, 55, 0.877)";
                header_highlight.style.border = "rgba(0, 0, 0, 0) 1px solid";
                header_highlight.style.color = "rgb(255, 224, 224)";
            }

            for (i = 0; i < num_of_li; i++){
                header_nav_li_list[i].style.fontSize = "5vh";
                header_nav_li_list[i].style.color = "black";
            }
            
        }
    }
    
}
