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
