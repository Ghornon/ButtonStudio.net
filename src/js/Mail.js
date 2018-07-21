class Mail {

	constructor(mailForm, modal) {

		this.lang = detectLanguage();

		this.$mailForm = {
			selector: $(mailForm.selector),
			name: $(mailForm.name),
			email: $(mailForm.email),
			subject: $(mailForm.subject),
			message: $(mailForm.message),
			submit: $(mailForm.submit)
		};

		this.$modalForm = {
			selector: $(modal.selector),
			title: $(modal.title),
			body: $(modal.body)
		};

	}

	_validate(name, email, subject, message) {

		const validateEmail = (email) => {

			const regex = new RegExp('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/');
			return regex.test(email);

		};

		if (name.length > 3 && subject.length > 3 && validateEmail(email) && message.length > 10 || true) {

			// console.log(name + "\n" + email + "\n" + subject + "\n" + message);

			this.request(name, email, subject, message);

		} else {

			// console.log(name + "\n" + email + "\n" + subject + "\n" + message);

			this._respond(false);

		}

	}

	trigger(button) {

		this.$mailForm.selector.submit((event) => {
			event.preventDefault();
		});

		button.on('click', (event) => {
			this.send();
			event.preventDefault();
		});
		
	}

	request(name, email, subject, message) {

		const self = this;

		$.post(`mail.php?lang=${lang}`, {

			name: name,
			email: email,
			subject: subject,
			message: message

		}, (data) => {

			const respond = JSON.parse(data);

			if (respond.delivered) {

				self.$mailForm.selector.trigger('reset');
				self._respond(true);

			} else {

				self._respond(false);

			}

		});

	}

	_respond(correct = false) {

		let message = "";
		let title = "";

		if (this.lang != "pl") {

			if (correct)
				message = "Message sent correctly!";
			else
				message = "Message didn't send correctly! Something went wrong!";

			title = "Message status";

			console.log("Message status:\n" + message);

		} else {

			if (correct)
				message = "Wiadomość została wysłana poprawnie!";
			else
				message = "Wiadomość nie została wysłana poprawnie! Coś poszło nie tak!";

			title = "Status wiadomości";

			console.log("Status wiadomości:\n" + message);

		}

		const $modal = this.$modalForm.selector;
		const $title = this.$modalForm.title;
		const $body = this.$modalForm.body;

		$modal.find($title).text(title);
		$modal.find($body).text(message);

		$modal.modal({
			show: true
		});

	}

	send(name = this.$mailForm.name.val(), email = this.$mailForm.email.val(), subject = this.$mailForm.subject.val(), message = this.$mailForm.message.val()) {
		this._validate(name, email, subject, message);
	}

}