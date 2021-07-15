$('.en').hide();

$('#ru').click(function(){
    $('.en').hide();
    $('.ru').show();
});

$('#en').click(function(){
    $('.ru').hide();
    $('.en').show();
});

$(".next").click(function() {
    var fuller = $(this).closest('.section').next('.section');

    $('html, body').animate({
        scrollTop: fuller.offset().top + 0
    }, 200);
});

var span = document.querySelectorAll('.NameHighlights');
for (var i = span.length; i--;) {
    (function () {
        var t;
        span[i].onmouseover = function () {
            hideAll();
            clearTimeout(t);
            this.className = 'NameHighlightsHover';
        };
        span[i].onmouseout = function () {
            var self = this;
            t = setTimeout(function () {
                self.className = 'NameHighlights';
            }, 300);
        };
    })();
}

function hover(element) {
    element.setAttribute('src', '../images/' + element.id + '-color.svg');
}

function unhover(element) {
    element.setAttribute('src', '../images/' + element.id + '.svg');
}
