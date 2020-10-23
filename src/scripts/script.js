
// if scrolling down, make nav thinner, elements smaller
function resizeNavOnScroll(wishedTrigger, nav_id){

    window.onscroll = function() {

        // variables to change the different list-items of the nav
        var header_nav = document.getElementById(nav_id);
        var header_nav_li_list = header_nav.getElementsByTagName("LI");
        var num_of_li = header_nav_li_list.length;

        var header_title = document.getElementById("nav_h3");
        var header_highlight = document.getElementById("nav_highlight");

        var smoked_white = "rgba(245, 242, 242, 0.90)";
        var nav_first_color = "rgb(245, 222, 179)"

        // console.log(window.scrollY); only for debug purposes

        if ( (window.scrollY) >= wishedTrigger) {
            header_nav.style.transition = "0.5s";
            header_nav.style.maxHeight = "10vh";
            header_nav.style.backgroundColor = "rgb(36, 37, 42, 0.99)";
            
            // change hover color of title, as else it looks weird on dark background
            header_title.style.color = smoked_white;
            header_title.onmouseenter = function(){ header_title.style.color = "rgb(255, 182, 193)";}
            header_title.onmouseleave = function(){ header_title.style.color = smoked_white;}
            // *slightly* change highlight hover style, same reason
            /*
            header_highlight.onmouseenter = function(){ 
                header_highlight.style.backgroundColor = "rgb(255, 224, 224)";
                header_highlight.style.color = "rgba(236, 55, 55, 0.877)";
            }
            header_highlight.onmouseleave = function(){ 
                header_highlight.style.backgroundColor = "rgba(236, 55, 55, 0.877)";
                header_highlight.style.color = "white";
            }*/
            header_highlight.onmouseenter = function(){ 
                header_highlight.style.color = "white";
            }
            header_highlight.onmouseleave = function(){
                header_highlight.style.color = "rgb(255, 224, 224)";
            }

            for (i = 0; i < num_of_li; i++){
                header_nav_li_list[i].style.fontSize = "1.5vw";
                // the "join" button, which is always the last one, remains untouched
                if (i != num_of_li-1){
                    header_nav_li_list[i].style.color = smoked_white;
                }
            }

            // slide icon next to the nav title
            document.getElementById("nav_gif_icon").style.left = "-7vw";

        }else{
            // set back to the default, definded in style.css
            header_nav.style.transition = "0.5s";
            header_nav.style.maxHeight = "20vh";
            header_nav.style.backgroundColor = "rgba(0, 0, 0, 0)"; // color doesnt matter, just make it transparent (last 0)
            
            // change hover color of title back to usual on white bg
            header_title.style.color = nav_first_color;
            header_title.onmouseenter = function(){ header_title.style.color = "rgba(0, 0, 0, 0.705)";}
            header_title.onmouseleave = function(){ header_title.style.color = nav_first_color;}
            // change highlight hover style back to usual
            header_highlight.onmouseenter = function(){ 
                header_highlight.style.backgroundColor = "rgba(236, 55, 55, 0.877)";
                header_highlight.style.color = "rgb(255, 224, 224)";
            }
            header_highlight.onmouseleave = function(){ 
                header_highlight.style.backgroundColor = "rgba(236, 55, 55, 0.685)";
                header_highlight.style.color = "rgba(230, 197, 197, 0.877)";
            }

            for (i = 0; i < num_of_li; i++){
                header_nav_li_list[i].style.fontSize = "1.75vw";
                // the "join" button, which is always the last one, remains untouched
                if (i != num_of_li-1){
                header_nav_li_list[i].style.color = nav_first_color;
                }
            }

            // slide icon back off the screen
            document.getElementById("nav_gif_icon").style.left = "-200vh";
            
        }
    }
    
}
