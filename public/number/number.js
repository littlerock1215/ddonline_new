
    $('.waypoint').waypoint(function(direction) {
        if (direction == 'down') {
            $(this).addClass('count');
        }
    }, {

        offset: function() {
            return 400 // trip waypoint when element is this many px from top 
        }
    });


        $('.counter').counterUp({
        delay: 10,
        time: 500
    });
    $('.counter').addClass('animated fadeInDownBig');
    $('h3').addClass('animated fadeIn');