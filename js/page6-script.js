const hoverableElements = document.querySelectorAll('.hoverable');
  var pairElement;
  hoverableElements.forEach(element => {
  element.addEventListener('mouseenter', () => {
      if(element.classList.contains('gray')){
          pairElement = document.querySelector('#' + element.classList[0]);
          pairElement.classList.add('circle-black')
          pairElement.classList.remove('circle-gray')
          element.classList.add('black');
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
    slidesPerView:2,
    spaceBetween: 100,
    navigation: {
      nextEl: ".arrow-p6",
    },
    speed: 400,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    breakpoints: {
      450:{
        slidesPerView: 2,
        spaceBetween: 100
      },
      1200:{
        slidesPerView: 2,
        spaceBetween: -20
      },
      1250:{
        slidesPerView: 2,
        spaceBetween: -50
      },
      1350:{
        slidesPerView: 2,
        spaceBetween: -100
      },
      1400:{
        slidesPerView: 2,
        spaceBetween: -150
      },
      1500:{
        slidesPerView: 2,
        spaceBetween: -200
      },
      1600:{
        slidesPerView: 2,
        spaceBetween: -250
      },
      1700:{
        slidesPerView: 2,
        spaceBetween: -300
      },
    }
  });

  const swiperScroll2 = new Swiper(".swiperScroll2", {
    slidesPerView:2,
    spaceBetween: -200,
    navigation: {
      nextEl: ".arrow-p6",
    },
    speed: 400,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
  });