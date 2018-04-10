'use strict';

class Mail {

    constructor(mailForm, modal) {

        this.lang = detectLanguage();

        this.$mail = {
            contact: $(mailForm.selector),
            name: $(mailForm.name),
            email: $(mailForm.email),
            subject: $(mailForm.subject),
            message: $(mailForm.message)
        };

        this.$modal = {
            selector: $(modal.selector),
            title: $(modal.title),
            body: $(modal.body)
        };

    }

    _validate(name = this.$mail.name.val(), email = this.$mail.email.val(), subject = this.$mail.subject.val(), message = this.$mail.message.val()) {
        
        const validateEmail = (email) => {

            const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regex.test(email);

        }

        if (name.length > 3 && subject.length > 3 && validateEmail(email) && message.length > 10) {

            console.log(name + "\n" + email + "\n" + subject + "\n" + message);

            this.request(name, email, subject, message);

        } else {
            
            console.log(name + "\n" + email + "\n" + subject + "\n" + message);
            this._respond(false);

        }

    }
    
    request(name, email, subject, message, ajax = true) {
        
        const objectThis = this;
        
        $.post(`mail.php?lang=${lang}&ajax=${ajax}`, {

            name: name,
            email: email,
            subject: subject,
            message: message

        }, function (data) {
            
            const respond = JSON.parse(data);
            
            if (respond.status) {

                objectThis.$mail.contact.trigger('reset');
                objectThis._respond(true);

            } else {

                objectThis._respond(false);

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

        const $modal = this.$modal.selector;
        const $title = this.$modal.title;
        const $body = this.$modal.body;

        $modal.find($title).text(title);
        $modal.find($body).text(message);

        $modal.modal({
            show: true
        });

    }

    send(name, email, subject, message) {
        this._validate(name, email, subject, message);
    }

}