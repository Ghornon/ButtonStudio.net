var button = (function () {

	var $button = $('.button');

	var createRipple = function (e) {

		var elemet = this,
			circle = document.createElement('div'),
			d = Math.max(this.clientWidth, this.clientHeight),
			rect = elemet.getBoundingClientRect();

		circle.style.width = circle.style.height = d + 'px';
		circle.style.left = e.clientX - rect.left - d / 2 + 'px';
		circle.style.top = e.clientY - rect.top - d / 2 + 'px';

		circle.classList.add('ripple');

		elemet.appendChild(circle);

		setTimeout(function () {

			elemet.removeChild(circle);

		}, 1000);
	};

	var eventListener = (function () {

		$button.mouseenter(createRipple);
		$button.click(createRipple);

	})();

})();