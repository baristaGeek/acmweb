$(document).ready(function(){

var $first = $('.icon');

$first.waypoint(function(direction) {
    if (direction == 'down') { 
        $first.addClass('icon-animate');
    }
});

});
