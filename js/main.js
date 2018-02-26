var throttle,
    preloader,
    lang,
    detectLanguage;
    
throttle = function (callback, limit) {

    var wait = false;
    return function () {
        if (!wait) {
            callback();
            wait = true;
            setTimeout(function () {
                wait = false;
            }, limit);
        }
    };

};

preloader = function () {

    $('body').addClass('loaded');
    console.log('Page loaded');

};

detectLanguage = function () {
    
    if (window.location.href.indexOf('lang=pl') != -1)
        lang = "pl";
    else
        lang = "en";
    
    $('.switch').children('a').remove();

    var switcher = $('<label>').addClass('slider').attr('for', 'lang');;
    
    $('.switch').append("EN ", switcher, " PL");

    if (lang == "pl") {
        $('#lang').prop('checked', true);
    }

};

$(document).ready(function () {
    
    preloader();
    detectLanguage();
    
    $('.scrollTo').on('click', function (event) {
        
        var attr = $(this).attr('href');
        
        $('html, body').animate({
            scrollTop: $(attr).offset().top,
        }, 1000);
        
        console.log("Scrolling to " + attr);
        event.preventDefault();

    });
    
    $('#lang').on('click', function () {

        if ($(this).is(':checked')) {
            console.log("Change language to Polish");
            setTimeout(function () {
                window.location.href = '?lang=pl';
            }, 400);
        } else {
            console.log("Change language to English");
            setTimeout(function () {
                window.location.href = '?lang=en';
            }, 400);
        }

    });
    
    $('.banner').mousemove(function (e) {
    
        var amountMovedX = (e.pageX * -1 / 30),
            amountMovedY = (e.pageY * -1 / 30);


        $(this).children('.content').css({
            'transform' : 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0) perspective(300px) rotateX(' + amountMovedX / 3 + 'deg) rotateY(' + amountMovedY / 3 + 'deg)',
            '-webkit-transform' : 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0) perspective(300px) rotateX(' + amountMovedX / 3 + 'deg) rotateY(' + amountMovedY / 3 + 'deg)',
            '-ms-transform' : 'translate3d(' + amountMovedX + 'px,' + amountMovedY + 'px, 0) perspective(300px) rotateX(' + amountMovedX / 3 + 'deg) rotateY(' + amountMovedY / 3 + 'deg)'
        });

    });
    
});