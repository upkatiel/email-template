var currentDate = (moment().format('DDMMYYYY') );
var store = $('input[name=store]:checked', '#formy').val();
var fileName = 'newsletter-' + store + currentDate + '.html';

function downloadInnerHtml(filename, elId, mimeType) {
    var elHtml = document.getElementById(elId).innerHTML;
    var link = document.createElement('a');
    mimeType = mimeType || 'text/plain';

    link.setAttribute('download', filename);
    link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
    link.click(); 
}

function saveMe() {
    downloadInnerHtml(fileName, 'mainHTML','text/html');
};

//<![CDATA[
(function () {
  function html(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  }
})();
//]]>