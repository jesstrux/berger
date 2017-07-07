var bookCardIsOpen = false;
$(document).on('click', '.toggleCalendar', function(e){
    $('.toggleCalendar:first').find('i').fadeToggle('fast');

    var position = $(this).position();
    var x = position.x + 139;
    var y = position.y + 140;

    // console.log( x+', '+ y);

    if(!bookCardIsOpen){
        TweenMax.to('#bookCard', .005, {display:'block'});
        TweenMax.from('#bookCard', .5, {scaleY:0.5,x: x, y: y});

        bookCardIsOpen = true;
    }else{
        bookCardIsOpen = false;
        TweenMax.to('#bookCard', .005, {display:'none'});
    }
    // $('#bookCard').toggleClass('show');
});

function closeBookCard(){
    alert('close it');
    TweenMax.to('#bookCard', .5, {scaleY:0});
    TweenMax.to('#bookCard', .005, {display:'none'});
}