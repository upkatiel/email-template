$(document).ready(function(){    
    $('.add-another').click(function(){
        console.log('clicked');
        new_length = $('.show-box:visible').length +1;
        show_another = new_length+1;
        $('.box-' +show_another + ', .box-' + new_length).show();
        $('.box-' +show_another + ', .box-' + new_length).css('height' , 'auto');
    });
    $('.remove').click(function(){
        new_length = $('.show-box:visible').length;
        $('.box-' + new_length).hide();
        show_another = new_length-1;
        $('.box-' +show_another).hide();
        $('.box-' +show_another + ', .box-' + new_length).css('height' , '0px');
    });
});