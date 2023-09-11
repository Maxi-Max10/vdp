const hoverableElements = document.querySelectorAll('.hoverable');
  var pairElement;
  hoverableElements.forEach(element => {
  element.addEventListener('mouseenter', () => {
      if(element.classList.contains('gray')){
          pairElement = document.querySelector('#' + element.classList[0]);
          pairElement.classList.add('circle-black')
          pairElement.classList.remove('circle-gray')
          element.classList.add('black');
          element.firstElementChild.classList.add("itinerary-text-p7-hover");
          element.classList.remove('gray');
      }
      if(element.classList.contains('circle-gray')){
          pairElement = document.querySelector('#' + element.classList[0]);
          pairElement.classList.add('black')
          pairElement.classList.remove('gray')
          element.classList.add('circle-black')
          element.classList.remove('circle-gray')
      }
  });

  element.addEventListener('mouseleave', () => {
      if(element.classList.contains('black')){
          pairElement = document.querySelector('#' + element.classList[0]);
          pairElement.classList.add('circle-gray')
          pairElement.classList.remove('circle-black')
          element.classList.add('gray');
          element.firstElementChild.classList.remove("itinerary-text-p7-hover");
          element.classList.remove('black');
      }
      if(element.classList.contains('circle-black')){
          pairElement = document.querySelector('#' + element.classList[0]);
          pairElement.classList.add('gray')
          pairElement.classList.remove('black')
          element.classList.add('circle-gray')
          element.classList.remove('circle-black')
      }
  });
});
var buttonDaily = document.getElementById('itinerary');
  var prices = document.getElementById("prices");
  const buttonPlus = document.getElementById('plusIcon');
  var buttonOvernight = document.getElementById('itinerary2')
  var prices2 = document.getElementById('prices2')
  const buttonPlus2 = document.getElementById('plusIcon2');
  var buttonHalfDay = document.getElementById('itinerary3')
  var prices3 = document.getElementById('prices3')
  const buttonPlus3 = document.getElementById('plusIcon3');

  const hidePrices = (  ) => {
    prices.classList.add('hidden');
  }

  const hidePrices2 = (  ) => {
    prices2.classList.add('hidden');
  }

  const hidePrices3 = (  ) => {
    prices3.classList.add('hidden');
  }

  buttonDaily.addEventListener('click', () => {
      if (prices.classList.contains('hidden')){
        prices.classList.remove('fade-slide-up');
        prices.classList.remove('hidden');
      } else {
        prices.classList.add('fade-slide-up');
          setTimeout(hidePrices, 700)
      }

      if (buttonPlus.classList.contains('plus')){
        buttonPlus.textContent = '-';
        buttonPlus.classList.remove('plus');
      } else {
        buttonPlus.textContent = '+';
        buttonPlus.classList.add('plus');
      }
  })

  buttonOvernight.addEventListener('click', () => {
      if (prices2.classList.contains('hidden')) {
          prices2.classList.remove('fade-slide-up')
          prices2.classList.remove('hidden');
      } else {
          prices2.classList.add('fade-slide-up');
          setTimeout(hidePrices2, 700)
      }

   if (buttonPlus2.classList.contains('plus')) {
      buttonPlus2.textContent = '-';
      buttonPlus2.classList.remove('plus');
   } else {
      buttonPlus2.textContent = '+';
      buttonPlus2.classList.add('plus');
   }
  })

  buttonHalfDay.addEventListener('click', () => {
      if (prices3.classList.contains('hidden')) {
          prices3.classList.remove('fade-slide-up')
          prices3.classList.remove('hidden');
      } else {
          prices3.classList.add('fade-slide-up');
          setTimeout(hidePrices3, 700)
      }

   if (buttonPlus3.classList.contains('plus')) {
      buttonPlus3.textContent = '-';
      buttonPlus3.classList.remove('plus');
   } else {
      buttonPlus3.textContent = '+';
      buttonPlus3.classList.add('plus');
   }
  })

  const swiperScroll1 = new Swiper(".swiperScroll", {
    slidesPerView:1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".flecha-p6",
      prevEl: ".flecha-p6-prev",
    },
    speed: 400,
    breakpoints: {
      420:{
        slidesPerView: 1,
        spaceBetween: 10
      },
      952:{
        slidesPerView: 2,
        spaceBetween: 10
      },
      1200:{
        slidesPerView: 2,
        spaceBetween: 10
      },
    }
  });

  const swiperAccomodation = new Swiper(".swiperAccomodation", {
    slidesPerView:1,
    spaceBetween: -200,
    navigation: {
      nextEl: ".next-accomodation",
    },
    speed: 400,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
    }
  });

  const swiperScroll2 = new Swiper(".swiperScroll2", {
    slidesPerView:1,
    spaceBetween: 20,
    navigation: {
      nextEl: ".arrow-p6",
    },
    speed: 400,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
      1200:{
        slidesPerView: 2,
        spaceBetween: 3
      },
    }
  });

var flechap6 = document.querySelector(".flecha-p6");
var flecha2p6 = document.querySelector(".flecha-p6-prev");

var swiperPlan = document.getElementById("planWrapper");

var planObserver = new MutationObserver(observeSwiper);

var planConfig = { attributes: true, attributeFilter: ["style"] };
planObserver.observe(swiperPlan, planConfig);

function observeSwiper(mutationsList, planObserver) {
  for (var mutation of mutationsList) {
    if (mutation.type === "attributes" && mutation.attributeName === "style") {
      checkPlanElement();
    }
  }
}

var planImg1 = document.getElementById("planImg1");
var planImg7 = document.getElementById("planImg7");
var planImg8 = document.getElementById("planImg8");
var planImg9 = document.getElementById("planImg9");
var planImg10 = document.getElementById("planImg10");

function checkPlanElement() {
  var windowp6 = window.innerWidth;

  switch (true) {
    case windowp6 >= 2420:
      if (planImg7.classList.contains("swiper-slide-next")) {
        flechap6.classList.add("hidden");
        flecha2p6.classList.remove("hide-flecha");
      }
      if (planImg1.classList.contains("swiper-slide-active")) {
        flechap6.classList.remove("hidden");
        flecha2p6.classList.add("hide-flecha");
      }
      break;

    case windowp6 >= 1919:
      if (planImg10.classList.contains("swiper-slide-next")) {
        flechap6.classList.add("hidden");
        flecha2p6.classList.remove("hide-flecha");
      }
      if (planImg1.classList.contains("swiper-slide-active")) {
        flechap6.classList.remove("hidden");
        flecha2p6.classList.add("hide-flecha");
      }
      break;

    case windowp6 >= 1768:
      if (planImg10.classList.contains("swiper-slide-next")) {
        flechap6.classList.add("hidden");
        flecha2p6.classList.remove("hide-flecha");
      }
      if (planImg1.classList.contains("swiper-slide-active")) {
        flechap6.classList.remove("hidden");
        flecha2p6.classList.add("hide-flecha");
      }
      break;

    case windowp6 >= 469:
      if (planImg10.classList.contains("swiper-slide-next")) {
        flechap6.classList.add("hidden");
        flecha2p6.classList.remove("hide-flecha");
      }
      if (planImg1.classList.contains("swiper-slide-active")) {
        flechap6.classList.remove("hidden");
        flecha2p6.classList.add("hide-flecha");
      }
      break;

    default:
      break;
  }
}