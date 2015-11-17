$('.load-it').click(function() {
    var x = parseInt($('#number-of-products').html(), 10);
    
    $('#pre_header').val(Cookies.get('pre_header'));
    // need a way to cycle through cookies array.
    //try a Cookies.get();
    console.log(Cookies.get());
});