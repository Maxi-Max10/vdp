var buttonAtamisque = document.getElementById('dropdownButtonAtamisque');
    var contentAtamisque = document.getElementById("dropdownAtamisque");
    const iconoAtamisque = document.getElementById('plusAtamisque');
    var buttonMotorcycle = document.getElementById('dropdownButtonMotorcycle')
    var itineraryMotorcycle = document.getElementById('itineraryMotorcycle')

    const hideItinerary = (  ) => {
        itineraryMotorcycle.classList.add('hidden');
    }

    const hideAtamisque = (  ) => {
        contentAtamisque.classList.add('hidden');
    }

    buttonMotorcycle.addEventListener('click', () => {
        if (itineraryMotorcycle.classList.contains('hidden')){
            itineraryMotorcycle.classList.remove('fade-slide-up');
            itineraryMotorcycle.classList.remove('hidden');
        } else {
            itineraryMotorcycle.classList.add('fade-slide-up');
            setTimeout(hideItinerary, 700)
        }

        if (buttonMotorcycle.classList.contains('plus')){
            buttonMotorcycle.textContent = '-';
            buttonMotorcycle.classList.remove('plus');
        } else {
            buttonMotorcycle.textContent = '+';
            buttonMotorcycle.classList.add('plus');
        }
    })

    buttonAtamisque.addEventListener('click', () => {
        if (contentAtamisque.classList.contains('hidden')) {
            contentAtamisque.classList.remove('fade-slide-up')
            contentAtamisque.classList.remove('hidden');
        } else {
            contentAtamisque.classList.add('fade-slide-up');
            setTimeout(hideAtamisque, 700)
        }

     if (buttonAtamisque.classList.contains('plus')) {
        buttonAtamisque.textContent = '-';
        buttonAtamisque.classList.remove('plus');
     } else {
        buttonAtamisque.textContent = '+';
        buttonAtamisque.classList.add('plus');
     }
    });

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

const swiper = new Swiper('#swiperP7', {
  loop: true,
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
      nextEl: '#swiper-button-next',
      prevEl: '#swiper-button-prev',
  },
  breakpoints: {
      1000: {
      slidesPerView: 2,
      },
  }
  });
  const swiper2 = new Swiper('#swiper2P7', {
  loop: true,
  initialSlide: 8,
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
      nextEl: '#swiper-button-next2',
      prevEl: '#swiper-button-prev2',
  },
  breakpoints: {
      1000: {
      slidesPerView: 2,
      },
  }
  });
  const swiper3 = new Swiper('#swiper3P7', {
  loop: true,
  slidesPerView: 1,
  // Navigation arrows
  navigation: {
      nextEl: '#swiper-button-next3',
      prevEl: '#swiper-button-prev3',
  },
  breakpoints: {
      1000: {
      slidesPerView: 2,
      },
  }
  });