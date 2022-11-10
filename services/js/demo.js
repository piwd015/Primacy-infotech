/*!
 * Contact Buttons Plugin Demo 0.1.0
 * https://github.com/joege/contact-buttons-plugin
 *
 * Copyright 2015, José Gonçalves
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
 
// Google Fonts
WebFontConfig = {
  google: { families: [ 'Lato:400,700,300:latin' ] }
};
(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

// Initialize Share-Buttons
$.contactButtons({
  effect  : 'slide-on-scroll',
  buttons : {
    'facebook':   { class: 'fab fa-facebook', use: true, link: 'https://www.facebook.com/primacyit/', extras: 'target="_blank"' },
    'whatsup':     { class: 'fab fa-whatsapp',use: true, link: 'https://api.whatsapp.com/send?phone=919875627563',extras: 'target="_blank"' },
    'phone':      { class: '',    use: true, link: 'tel:+9088015866',extras: 'target="_blank"' },
    'email':      { class: '',    use: true, link: 'mailto:info@primacyinfotech.com',extras: 'target="_blank"' }
  }
});