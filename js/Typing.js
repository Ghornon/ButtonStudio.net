class Typing {

    constructor(target = 'typing', endClass = 'typed') {

        this.content = [];
        this.$items = $(`.${target}`);
        this.endClass = endClass;

        this.$items.each((index, element) => {

            this.content.push($(element).text());
            $(element).text("");

        });

    }

    _startTyping(str, obj) {

        let currentIndex = 0;

        const interval = setInterval(() => {

            if (str.length > currentIndex) {

                obj.text(obj.text() + str[currentIndex]);
                currentIndex++;

            } else {

                clearInterval(interval);

            }

        }, 160);

    }

    playAnimation() {

        this.$items.each((index, element) => {

            if (!$(element).hasClass(this.endClass)) {

                const topOfDiv = $(element).offset().top;
                const bottomOfWindow = $(window).scrollTop() + $(window).height() - ($(window).height() / 5);

                if (bottomOfWindow >= topOfDiv) {

                    this._startTyping(this.content[index], $(element));
                    $(element).addClass(this.endClass);

                }

            }

        });

    }

}