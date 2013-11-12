function Support() {

   var isFirefox = typeof InstallTrigger !== 'undefined';
   var isChrome = !!window.chrome;

    if((isFirefox) || (isChrome))
        ('');

    else {
        jQuery('#login div.row:nth-child(4)').html
            ('<span style="text-align:center;font-size:35px;padding:150px;display:block">' +
                'Sorry, your browser do not support our service.<br/>' +
                'Please use Google Chrome or Mozilla Firefox</span>');
    }
}
window.onload = Support;