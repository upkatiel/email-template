$(document).ready(function(){    
    $('.add-another').click(function(){
        new_length = $('.show-box:visible').length - 2;
        show_another = new_length + 1;
        console.log('new_length: ' + new_length + 'show_another: ' + show_another);
        $('.box-' +show_another + ', .box-' + new_length).show();
        $('.box-' +show_another + ', .box-' + new_length).css('height' , 'auto');
    });
    $('.remove').click(function(){
        new_length = $('.show-box:visible').length - 5;
        $('.box-' + new_length).hide();
        show_another = new_length - 1;
        console.log('new_length: ' + new_length + 'show_another: ' + show_another);
        $('.box-' +show_another).hide();
        $('.box-' +show_another + ', .box-' + new_length).css('height' , '0px');
    });
});