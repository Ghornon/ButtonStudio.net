/* const throttle = (callback, limit) => {

	let wait = false;
	return () => {
		if (!wait) {
			callback();
			console.log('throttle');
			wait = true;
			setTimeout(() => {
				wait = false;
			}, limit);
		}
	};

}; */

const throttle = (callback, limit) => {

	let wait = false;
	return function () {
		if (!wait) {
			console.log('throttle');
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
	// console.log('Page loaded');

};

const detectLanguage = () => {

	let lang = "en";

	if (window.location.href.indexOf('pl') != -1)
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

	$('.scrollTo').on('click', (event) => {

		const $this = $(event.currentTarget);
		const attr = $this.attr('href');

		$('html, body').animate({
			scrollTop: $(attr).offset().top,
		}, 1000);

		// console.log("Scrolling to " + attr);
		event.preventDefault();

	});

	$('#lang').on('click', (event) => {

		const $this = $(event.currentTarget);

		if ($this.is(':checked')) {
			setTimeout(() => {
				window.location.href = 'pl';
			}, 400);
		} else {
			setTimeout(() => {
				window.location.href = 'en';
			}, 400);
		}
		
	});

	$('.banner').on('mousemove', (event) => {

		const animation = (event) => {

			const $this = $(event.currentTarget);

			let moveX = (($this.width() / 2) - (event.pageX - $this.offset().left)) * 0.05;
			let moveY = (($this.height() / 2) - (event.pageY - $this.offset().top)) * 0.05;
	
			let rotateX = ((event.pageX - $this.offset().left) - ($this.width() / 2)) * 0.04;
			let rotateY = -(((event.pageY - $this.offset().top) - ($this.height() / 2)) * 0.04);
	
			$this.children('.content').css({
				'-transform': `translate(${moveX}px, ${moveY}px) perspective(400px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`,
			});

		};
		
		throttle(animation(event), 80);

	});

	const typing = new Typing('typing', 'typed');
	$(window).scroll(() => throttle(typing.playAnimation(), 200));

};

$(document).ready(() => {

	preloader();
	createSwitcher();
	eventListener();

	const mailForm = {
		selector: '.contact',
		name: '#name',
		email: '#email',
		subject: '#subject',
		message: '#message'
	};

	const modal = {
		selector: '#modal-dialog',
		title: '.modal-title',
		body: '.modal-body'
	};

	const mail = new Mail(mailForm, modal);

	mail.trigger($('#send'));

});