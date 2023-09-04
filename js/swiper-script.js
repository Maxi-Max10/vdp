    const swiper = new Swiper('#swiperP8', {
        speed: 400,
        spaceBetween: 100,
        loop: true, // Permite el bucle continuo del carrusel
      autoplay: {
        delay: 3000, // Cambia la diapositiva cada 3 segundos
      },
      disableOnInteraction:false,
      allowTouchMove:false,
    });
    const swiper2 = new Swiper('#swiper2P8', {
        speed: 400,
        spaceBetween: 100,
        loop: true, // Permite el bucle continuo del carrusel
      autoplay: {
        delay: 5000, // Cambia la diapositiva cada 3 segundos
      },
      disableOnInteraction:false,
      allowTouchMove:false,
    });
    const swiper3 = new Swiper('#swiper3P8', {
        speed: 400,
        spaceBetween: 100,
        loop: true, // Permite el bucle continuo del carrusel
      autoplay: {
        delay: 4000, // Cambia la diapositiva cada 3 segundos
      },
      disableOnInteraction:false,
      allowTouchMove:false,
    });
    const swiper4 = new Swiper('#swiper4P8', {
        speed: 400,
        spaceBetween: 100,
        loop: true, // Permite el bucle continuo del carrusel
      autoplay: {
        delay: 6000, // Cambia la diapositiva cada 3 segundos
      },
      disableOnInteraction:false,
      allowTouchMove:false,
    });

    const swiperScroll3 = new Swiper(".swiperScroll3", {
      slidesPerView:1,
      spaceBetween: 30,
      navigation: {
        nextEl: ".arrow-p8",
      },
      speed: 400,
      scrollbar: {
        el: ".swiper-scrollbar",
        draggable: true,
      },
      breakpoints: {
        405:{
          slidesPerView: 2,
          spaceBetween: 50
        },
        495:{
          slidesPerView: 2,
          spaceBetween: -10
        },
        576:{
          slidesPerView: 2,
          spaceBetween: -50
        },
        610:{
          slidesPerView: 2,
          spaceBetween: -100
        },
        680:{
          slidesPerView: 2,
          spaceBetween: -150
        },
        769:{
          slidesPerView: 2,
          spaceBetween: -100
        },
        820:{
          slidesPerView: 2,
          spaceBetween: -150
        },
        890:{
          slidesPerView: 2,
          spaceBetween: -200
        },
        993:{
          slidesPerView: 2,
          spaceBetween: -50
        },
        1025:{
          slidesPerView: 2,
          spaceBetween: -100
        },
        1211:{
          slidesPerView: 2,
          spaceBetween: -250
        }
      }
    });