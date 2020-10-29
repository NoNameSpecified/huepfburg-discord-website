

// mobile nav
function showMobileNav(){
    
    var mobile_ul = document.getElementById("mobile_id_ref");
    if(mobile_ul.style.maxHeight == "0vh"){
        mobile_ul.style.maxHeight = "100vh";
    }else{
        mobile_ul.style.maxHeight = "0vh";
    }
}
// when clicking links
function closeNav(){
    var mobile_ul = document.getElementById("mobile_id_ref");
    mobile_ul.style.maxHeight = "0vh";
}


// for the aufbau_section, clicking a div expands the collapsed and shows content
function showCollapsed() {

    var rollen_div = document.getElementById("rollen");
    var channels_div = document.getElementById("channels");
    var rang_div = document.getElementById("rang");

    // first time for "Die Rollen"

    var rollen_banner_to_click = document.getElementById("top_span_rollen");
    // when clicking that "banner", execute : 
    rollen_banner_to_click.addEventListener("click", function(){
        console.log("clicked");
        // get the div we want to show later
        var content = document.getElementById("content_collapsed_rollen");
        // if we are still collapsed
        if ( content.className == "content collapsed" ) {
            rollen_banner_to_click.style.color = "white";

            // remove the class "collapsed", add the class "flow"
            content.className = "content flow";
            
            // change the button from a + to a - sign
            document.getElementById("expand_button_rollen").src = 'img/section_aufbau/reduce_button.png';
        // if we are not collapsed and content is shown
        } else {
            rollen_banner_to_click.style.color = "rgba(255, 255, 255, 0.76)";
            // remove flow class, add collapsed again
            content.className = "content collapsed";
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
    var channels_banner_to_click = document.getElementById("top_span_channels");
    channels_banner_to_click.addEventListener("click", function(){
        var content = document.getElementById("content_collapsed_channels");
        
        if ( content.className == "content collapsed" ) {
            channels_banner_to_click.style.color = "white";
            content.className = "content flow";
            document.getElementById("expand_button_channels").src = 'img/section_aufbau/reduce_button.png';
        } else {
            channels_banner_to_click.style.color = "rgba(255, 255, 255, 0.76)";
            content.className = "content collapsed";
            setTimeout(function(){
                document.getElementById("expand_button_channels").src = 'img/section_aufbau/expand_button.png';
            },1);
        }
    });


    // third time for "Das Rang-System"
    var rang_banner_to_click = document.getElementById("top_span_rang");
    rang_banner_to_click.addEventListener("click", function(){
        var content = document.getElementById("content_collapsed_rang");

        if ( content.className == "content collapsed" ) {
            rang_banner_to_click.style.color = "white";
            content.className = "content flow";
            document.getElementById("expand_button_rang").src = 'img/section_aufbau/reduce_button.png';
        } else {
            rang_banner_to_click.style.color = "rgba(255, 255, 255, 0.76)";
            content.className = "content collapsed";
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