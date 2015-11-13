var regexLink = /<a href="([^"]*)"/g;
var subLink = '<a href=""';

var regexAlt = /alt="([^"]*)"/g;
var subAlt = 'alt=""';

var fix1 = '<a href="">here</a>';
var fixed1 = '<a href="*|UNSUB|*">here</a>';
var fix2 = '<a href="" target="_blank">View it in your browser</a>';
var fixed2 = '<a href="*|ARCHIVE|*" target="_blank">View it in your browser</a>';

TweenLite.from(title, 2, {opacity:0, ease:Power0.easeIn});

function goLinks() {
    findAndReplace(regexLink, subLink);
}

function goAlt() {
    findAndReplace(regexAlt, subAlt);
}

function goFix() {
    findAndReplace(fix1, fixed1);
    findAndReplace(fix2, fixed2);
}

function findAndReplace(regex, subst) {
    var text = $('#mainHTML').val();
    var result = text.replace(regex, subst);
    document.getElementById("mainHTML").value = result; 
}