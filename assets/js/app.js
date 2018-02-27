var $ = require('jquery');
//require('bootstrap');
// JS is equivalent to the normal "bootstrap" package
// no need to set this to a variable, just require it
require('bootstrap-sass');
require('css-reset-and-normalize-sass');
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});