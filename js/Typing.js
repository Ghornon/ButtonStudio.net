var typing = (function(){
    
    var $items = $('.typing'),
        content = [];

    $items.each(function () {

        content.push($(this).text());
        $(this).text("");

    });

    var startTyping = function (str, obj) {

        allowAnimation = false;

        var currentIndex = 0;

        var interval = setInterval(function () {

            if (str.length > currentIndex) {
                obj.text(obj.text() + str[currentIndex]);
                currentIndex++;
            } else {
                clearInterval(interval);
            }

        }, 160);

    };

    var playAnimation = function () {

        $items.each(function (index) {

            var topOfDiv = $(this).offset().top,
                bottomOfWindow = $(window).scrollTop() + $(window).height() - ($(window).height() / 5);

            if (bottomOfWindow >= topOfDiv && !$(this).hasClass('typed')) {
                startTyping(content[index], $(this));
                $(this).addClass('typed');

            }    

        });

    }; 
    
    var eventListener = (function () {
      
        $(document).on('scroll', throttle(playAnimation, 200));
        
    })();
    
    return {
        $items: $items,
        content: content
    }
    
})();