(function($){
    var config = {
      viewFactor : 0.15,
      duration   : 800,
      distance   : "0px",
      scale      : 0.8
    };

    window.sr = ScrollReveal( config );

    if (sr.isSupported()) {
      document.documentElement.classList.add('sr');
    }

    $(function() {
        $('.button-collapse').sideNav({menuWidth: 300, closeOnClick: true});
        $('.scrollspy').scrollSpy();
    }); // end of document ready 

    $('#slideshow-container').serialScroll({
        items:'.carousel-ite',
        prev:'#prev',
        next:'#next',
        offset:-230, //when scrolling to photo, stop 230 before reaching it (from the left)
        start:0, //as we are centering it, start at the 2nd
        duration:1200,
        force:true,
        stop:true,
        lock:false,
        cycle:false, //don't pull back once you reach the end
        easing:'easeOutQuart', //use this easing equation for a funny effect
        jump: true //click on the images to scroll to them
    });
})(jQuery);


var crown = document.querySelector(".crown");
var demo  = document.querySelector(".demo");

window.addEventListener( "scroll", scrollBrain, false );

var body = document.body,
  html = document.documentElement;

var height = Math.max( body.scrollHeight, body.offsetHeight,
                     html.clientHeight, html.scrollHeight, html.offsetHeight );

function scrollBrain(){
    if ( window.pageYOffset >= demo.offsetTop + 365 ){
        return crown.classList.add("visible");
    }
    if ( crown.classList.contains("visible") ){
        return crown.classList.remove("visible");
    }
}

var win_location = window.location.href;
var end = win_location.substr(win_location.lastIndexOf('/'));
$('.table-of-contents a').each(function(){
    var my_location = "/" + $(this).attr('href');
    var my_end = my_location.substr(my_location.lastIndexOf('/'));
    
    if(my_location === end){
        $(this).addClass('active');
    }else{
        $(this).removeClass('active');
    }
});
