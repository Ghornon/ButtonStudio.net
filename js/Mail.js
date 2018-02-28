'use strict';

class Mail {

    constructor(mail, modal) {

        this.lang = lang;

        this.$mail = {
            contact: $(mail.contactFormSelector),
            name: $(mail.nameInputSelector),
            email: $(mail.emialInputSelector),
            subject: $(mail.subjectInputSelector),
            message: $(mail.messageInputSelector)
        };

        this.$modal = {
            form: $(modal.modalFormSelector),
            title: $(modal.modalTitleSelector),
            body: $(modal.modalBodySelector)
        };

    }

    _validate() {

        const name = this.$mail.name.val();
        const email = this.$mail.email.val();
        const subject = this.$mail.subject.val();
        const message = this.$mail.message.val();

        const validateEmail = (email) => {

            const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return regex.test(email);

        }

        if (name.length > 3 && subject.length > 3 && validateEmail(email) && message.length > 10) {

            console.log(name + "\n" + email + "\n" + subject + "\n" + message);

            this.request(name, email, subject, message);

        } else {

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
            
            console.log(respond);
            console.log(respond.status); 
            
            if (respond.status) {

                objectThis.$mail.contact.trigger('reset');
                objectThis._respond(true);
                console.log("ok");

            } else {

                objectThis._respond(false);
                console.log("blad");

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

        const $form = this.$modal.form;
        const $title = this.$modal.title;
        const $body = this.$modal.body;

        $form.find($title).text(title);
        $form.find($body).text(message);

        $form.modal({
            show: true
        });

    }

    send() {
        this._validate();
    }

}

const mail = new Mail({
    contactFormSelector: '.contact',
    nameInputSelector: '#name',
    emialInputSelector: '#email',
    subjectInputSelector: '#subject',
    messageInputSelector: '#message'
}, {
    modalFormSelector: '#modal-dialog',
    modalTitleSelector: '.modal-title',
    modalBodySelector: '.modal-body'
});

$('#send').on('click', (event) => {
    mail.send();
    event.preventDefault(event);
});