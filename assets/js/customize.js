
$(document).ready(function(){
  $('ul.tabs li').click(function(){
    var tab_id= $(this).attr('data-tab');
    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');
    $(this).addClass('current');
    $("#"+tab_id).addClass('current');

  })
})

$(document).ready(function(){
  $('ul.tabs2 li').click(function(){
    var tab_id= $(this).attr('data-tab');
    $('ul.tabs2 li').removeClass('current');
    $('.tab-content2').removeClass('current');
    $(this).addClass('current');
    $("#"+tab_id).addClass('current');

  })
})


(function () {
  "use strict";

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();



$('[data-text]').on('keyup', function(){
  $(this).attr('data-text', $(this).text());
});



























