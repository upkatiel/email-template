var productArray = ["hmv-ie", "hmv", "ie", "&euro;"];
//var tagArray = [/STORE/g,/BRAND/g,/DOMAIN/g,/CURRENCY/g];
var tagArray = ["STORE", "BRAND", "DOMAIN", "CURRENCY"];
var currentDate;
var findme;
var replaceit;


function changeSrc(e){
    val = e.val();
    get_index = e.data('id');
    array = get_index.split('-');
    i = array[2];
    $('#IMAGE-URL-' + i).attr('alt', val);
    $('.PRODUCT-URL-' + i).attr('href', 'http://www.BRAND.DOMAIN/Search/Results?term=' + val.replace(" ", "+"));
}
function changeImg(e){
    val = e.val();
    get_index = e.data('id');
    array = get_index.split('-');
    i = array[2];
    $('#IMAGE-URL-' + i).attr('src', val);
}
function buildItYou(obj) {

    console.log('changed');
    if($(obj).val() == "") return;
    var text = $(obj).val(); 
    var replaceData = $(obj).data("id");
    if (!replaceData.indexOf('PRODUCT-PRICE')) {
        text = productArray[3] + text + "&nbsp;";
    };
    if (!replaceData.indexOf('IMAGE-URL')) {
        $(this).attr('src' ,text);
    } else {
        $('#bodyTable [data-id="' + replaceData + '"]').each(function (k, v) {
            $(this).html(text);
        });
    }
};

function storeChange(obj) {
    var store = $('input[name=store]:checked', '#formy').val();
    productArray = [];
    if (store == "hmv-ie") {
        productArray.push("hmv-ie");
        productArray.push("hmv");
        productArray.push("ie");
        productArray.push("&euro;");
    } else if (store == "xv-ie") {
        productArray.push("xv-ie");
        productArray.push("Xtra-vision");
        productArray.push("ie");
        productArray.push("&euro;");
    } else if (store == "xv-uk") {
        productArray.push("xv-uk");
        productArray.push("Xtra-vision");
        productArray.push("co.uk");
        productArray.push("&pound;");
    } else if (store == "xvm-ie") {
        productArray.push("xvm-ie");
        productArray.push("XVMarketplace");
        productArray.push("ie");
        productArray.push("&euro;");
    } else if (store == "xvm-uk") {
        productArray.push("xvm-uk");
        productArray.push("XVMarketplace");
        productArray.push("co.uk");
        productArray.push("&pound;");
    }
    $('img').prop('src', function () { return this.src.replace(tagArray[0],productArray[0]); });
    //change image domain
    $('img').prop('src', function () { return this.src.replace(tagArray[1],productArray[1]); });
    $('img').prop('src', function () { return this.src.replace('DATE',currentDate); });
    
   
    for (var k = 0; k < tagArray.length; k++) {
        findStoreStuff(tagArray[k],productArray[k]);
        tagArray[k] = productArray[k];
    }

}

function findStoreStuff(findme,replaceit) {  

    $('#bodyTable').html(function(i, w) {
        var reg = new RegExp(findme, 'g');
        return w.replace(reg,replaceit);
    });
}

function updateButtons(obj) {
    replaceData = $(obj).data("id");
    if($(obj).is(':checked')){
        $('[data-id="'+replaceData+'"]').prop('src', function () { return this.src.replace('buy-now','pre-order'); });
    } else {
        $('[data-id="'+replaceData+'"]').prop('src', function () { return this.src.replace('pre-order','buy-now'); });
    }
}
function removeHidden(html) {
    html_array = [];
    html_array.push(html);
    get_hidden = $('#bodyTable td:hidden');
    get_hidden.each(function(){
        $(this).parent().remove();
    });
    return html_array[0];
}
$(document).ready(function(){
    $("#mainHTML").load('mail-output.php');
    currentDate = ( moment().format('DDMMYYYY') );
    CKEDITOR.replace('quine');
    $('#get-html').click(function() {
      var html = $('#mainHTML').html();
        html_array =  removeHidden(html);
      var html = $('#mainHTML').html();

        $('#cke_quine').css('display' , 'block');
        if (!$(this).hasClass('html-showing')) {
            $('.cke_button__source').click();
            $(this).addClass('html-showing');
        }
        CKEDITOR.instances['quine'].setData(html);
        $('#mainHTML').html( html_array);
            $('html, body').animate({
                scrollTop: $("#cke_quine").offset().top
            }, 2000);
    });

    $( ".product-title" )
        .on('change',function() {
            changeSrc($(this));
        });
    $( ".image" )
        .on('change',function() {
            changeImg($(this));
        });

    $( "input[name=store]" )
        .change(function() {
            storeChange(this);
        });

    $( "select , input" )
        .on('change',function() {
            buildItYou(this);
        });

    $( "input[name=check]" )
        .on('change',function() {
            updateButtons(this);
        });
});
