
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
            header_nav.style.backgroundColor = "rgba(36, 37, 42, 0.99)";
            
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
            /*header_title.onmouseenter = function(){ header_title.style.color = "rgba(0, 0, 0, 0.705)";}
            header_title.onmouseleave = function(){ header_title.style.color = nav_first_color;} 
            */
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




// for the aufbau_section, clicking a div expands the collapsed and shows content
function showCollapsed() {

    var rollen_div = document.getElementById("rollen");
    var channels_div = document.getElementById("channels");
    var rang_div = document.getElementById("rang");

    // first time for "Die Rollen"

    var banner_to_click = document.getElementById("top_span_rollen");
    // when clicking that "banner", execute : 
    banner_to_click.addEventListener("click", function(){
        console.log("clicked");
        // get the div we want to show later
        var content = document.getElementById("content_collapsed_rollen");
        // if we are still collapsed
        if ( content.className == "content collapsed" ) {
            // remove the class "collapsed", add the class "flow"
            content.className = "content flow";
            // change padding, space in between would be too big else
            channels_div.style.padding = "2vh 20% 5vh 20%";
            
            // change the button from a + to a - sign
            document.getElementById("expand_button_rollen").src = 'img/section_aufbau/reduce_button.png';
        // if we are not collapsed and content is shown
        } else {
            
            // remove flow class, add collapsed again
            content.className = "content collapsed";
            // reset padding
            channels_div.style.padding = "5vh 20%";
            // takes roughly 0.8s to move all the stuff
            // the - to + img change should happen last,
            // thus, timeout
            setTimeout(function(){
                document.getElementById("expand_button_rollen").src = 'img/section_aufbau/expand_button.png';
            },1);
        }
    });


    /* working as defined above, use those comments */

    // second Time for "Die Channels"
    var banner_to_click = document.getElementById("top_span_channels");
    banner_to_click.addEventListener("click", function(){
        var content = document.getElementById("content_collapsed_channels");

        if ( content.className == "content collapsed" ) {
            content.className = "content flow";
            rang_div.style.padding = "2vh 20% 5vh 20%";
            document.getElementById("expand_button_channels").src = 'img/section_aufbau/reduce_button.png';
        } else {
            content.className = "content collapsed";
            rang_div.style.padding = "5vh 20%";
            setTimeout(function(){
                document.getElementById("expand_button_channels").src = 'img/section_aufbau/expand_button.png';
            },1);
        }
    });


    // third time for "Das Rang-System"
    var banner_to_click = document.getElementById("top_span_rang");
    banner_to_click.addEventListener("click", function(){
        var content = document.getElementById("content_collapsed_rang");

        if ( content.className == "content collapsed" ) {
            content.className = "content flow";
            rang_div.style.padding = "5vh 20% 2vh 20%";
            document.getElementById("expand_button_rang").src = 'img/section_aufbau/reduce_button.png';
        } else {
            content.className = "content collapsed";
            rang_div.style.padding = "5vh 20%";
            setTimeout(function(){
                document.getElementById("expand_button_rang").src = 'img/section_aufbau/expand_button.png';
            },1);
        }
    });

}




// function to slide the different news
function slideNews(){

    // click slide_left button
    var button_left = document.getElementById("slide_left");
    button_left.addEventListener("click", function(){

        // the different news
        var news = document.getElementsByClassName("news_slides")
        console.log(news)

        for(var i = 0; i < news.length; i++){
            slide = news[i];
            if( slide.className == "news_slides shown" ){
                current_slide = slide;
                break;
            }
        }
        
        console.log("GOOOOOOOOOOOOOOOOOOOOOOOTTEM\n\n")

        current_slide.className = "news_slides hidden";

        // if we are at the first one
        if (typeof news[i-1] === "undefined"){
            // go to last element
            index = news.length - 1;
        }else{
            index = i-1;
        }
        console.log(index)
        news[index].className = "news_slides shown";
    });

    // click slide_right button
    var button_right = document.getElementById("slide_right");
    button_right.addEventListener("click", function(){
        
        // the different news
        var news = document.getElementsByClassName("news_slides")
        console.log(news)

        for(var i = 0; i < news.length; i++){
            slide = news[i];
            if( slide.className == "news_slides shown" ){
                current_slide = slide;
                break;
            }
        }

        current_slide.className = "news_slides hidden";

        // if we are at the first one
        if (typeof news[i+1] === "undefined"){
            // go to last element
            index = 0;
            console.log(index)
        }else{
            index = i+1;
        }
        news[index].className = "news_slides shown";        
    });

}
