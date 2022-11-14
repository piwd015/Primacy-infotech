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



// Home page animation
const AnimateOnScroll = function ({ offset } = { offset: 10 }) {
  // Define a dobra superior, inferior e laterais da tela
  const windowTop = (offset * window.innerHeight) / 100;
  const windowBottom = window.innerHeight - windowTop;
  const windowLeft = 0;
  const windowRight = window.innerWidth;

  this.start = (element) => {
    window.requestAnimationFrame(() => {
      // Seta os atributos customizados
      element.style.animationDelay = element.dataset.animationDelay;
      element.style.animationDuration = element.dataset.animationDuration;

      // Inicia a animacao setando a classe para animar
      element.classList.add(element.dataset.animation);

      // Seta o elemento como animado
      element.dataset.animated = "true";
    });
  };

  this.inViewport = (element) => {
    // Obtem o boundingbox do elemento
    const elementRect = element.getBoundingClientRect();
    const elementTop =
        elementRect.top + parseInt(element.dataset.animationOffset) ||
        elementRect.top;
    const elementBottom =
        elementRect.bottom - parseInt(element.dataset.animationOffset) ||
        elementRect.bottom;
    const elementLeft = elementRect.left;
    const elementRight = elementRect.right;

    // Verifica se o elemento esta na tela
    return (
        elementTop <= windowBottom &&
        elementBottom >= windowTop &&
        elementLeft <= windowRight &&
        elementRight >= windowLeft
    );
  };

  // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
  this.verifyElementsInViewport = (els = elements) => {
    for (let i = 0, len = els.length; i < len; i++) {
      // Passa para o proximo laço se o elemento ja estiver animado
      if (els[i].dataset.animated) continue;

      this.inViewport(els[i]) && this.start(els[i]);
    }
  };

  // Obtem todos os elementos a serem animados
  this.getElements = () =>
      document.querySelectorAll("[data-animation]:not([data-animated])");

  // Atualiza a lista de elementos a serem animados
  this.update = () => {
    elements = this.getElements();
    elements && this.verifyElementsInViewport(elements);
  };

  // Inicia os eventos
  window.addEventListener("load", this.update, false);
  window.addEventListener(
      "scroll",
      () => this.verifyElementsInViewport(elements),
      { passive: true }
  );
  window.addEventListener(
      "resize",
      () => this.verifyElementsInViewport(elements),
      { passive: true }
  );
};

// Initialize
const options = {
  offset: 15 // percentage of the window
};

const animation = new AnimateOnScroll(options);



















