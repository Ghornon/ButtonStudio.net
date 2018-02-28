'use strict';

const throttle = (callback, limit) => {
    
    let wait = false;
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

const preloader = () => {

    $('body').addClass('loaded');
    console.log('Page loaded');

};

const detectLanguage = () => {
    
    let lang = "en";
    
    if (window.location.href.indexOf('lang=pl') != -1)
        lang = "pl";
    
    return lang;

};

const createSwitcher = () => {
    
    const lang = detectLanguage();
    
    $('.switch').children('a').remove();

    const switcher = $('<label>').addClass('slider').attr('for', 'lang');
    
    $('.switch').append("EN ", switcher, " PL");

    if (lang == "pl")
        $('#lang').prop('checked', true);
     
};

const eventListener = () => {
    
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
            setTimeout(function () {
                window.location.href = '?lang=pl';
            }, 400);
        } else {
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
    
    
    
}

$(document).ready(() => {
    
    preloader();
    createSwitcher();
    eventListener();
    
});