<section data-bs-version="5.1" class="footer4 cid-tMlWvWDpDR mb-0" once="footers" id="footer4-24">
    
    <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(35, 35, 35);"></div>   
    <div class="container">
        <div class="row mbr-white mb-3">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-8 col-12">
                    <a href="">
                        <img src="assets/images/vdp-isologotipo-final-10-337x337.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4"></p>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                <ul class="list mbr-fonts-style display-5">
                    <a href="page5.php"></a><li class="mbr-text item-wrap">Gallery</li></a>
                    <a href="page2.php"><li class="mbr-text item-wrap">FAQ´s</li></a>
                    <a href="page4.php"></a><li class="mbr-text item-wrap">Contact</li></a>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7"></h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont socicon socicon-whatsapp" style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.tripadvisor.com.ar/Attraction_Review-g664097-d25241616-Reviews-Vivacs_Del_Plata-Tupungato_Province_of_Mendoza_Cuyo.html" target="_blank">
                            <span class="mbr-iconfont socicon socicon-tripadvisor" style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"
                                        style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);"></span>
                        </a>
                    </div>
                    
                    <div class="soc-item">
                        <a href="" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-Marker socicon"
                                        style="color: rgb(250, 250, 250); fill: rgb(250, 250, 250);"></span>
                        </a>
                    </div>
                    
                </div>

               

            </div>
            <div class="mt-5 mb-4" style="height: 1px; background-color: white; text-align: center">
            <span style="background-color: white; position: relative; top: -0.5em;">
                
            </span>
            </div>
            <div class="col-12 col-md-12 copyright text-center">
            <div class="col-md-12 copyright">
                <p class="mbr-text mbr-fonts-style display-4">
                &copy;<script>document.write(new Date().getFullYear());</script> Vivacs del Plata - All Rights Reserved&nbsp; &nbsp;Terms &amp; Conditions&nbsp;
                    &nbsp; Privacy Policy</p>
            </div>
        </div>
    </div>
</section>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="assets/parallax/jarallax.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/ytplayer/index.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/theme/js/script.js"></script>  
<script src="https://kit.fontawesome.com/8f914819e1.js" crossorigin="anonymous"></script>
<script src="assets2/js/options.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('#swiper', {
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
    const swiper2 = new Swiper('#swiper2', {
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
    const swiper3 = new Swiper('#swiper3', {
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
</script>
<script>
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
</script>
<script>
    var buttonAtamisque = document.getElementById("dropdownButtonAtamisque");
    var contentAtamisque = document.getElementById("dropdownAtamisque");
    const iconoAtamisque = document.getElementById('plusAtamisque');

    buttonAtamisque.addEventListener('click', () => {
  if (contentAtamisque.classList.contains('hidden')) {
    contentAtamisque.classList.remove('hidden');
      } else {
        contentAtamisque.classList.add('hidden');
     }

     if (buttonAtamisque.classList.contains('plus')) {
        buttonAtamisque.textContent = '-';
        buttonAtamisque.classList.remove('plus');
     } else {
        buttonAtamisque.textContent = '+';
        buttonAtamisque.classList.add('plus');
     }
    });
</script>
<script>
    function scrollToTop() {
      window.scrollTo(0, 0);
    }
    window.onload = scrollToTop;
</script>
<script>
    const closeButton = document.getElementById('close');
    const hamburgerButton = document.getElementById('burger');
    const logo = document.getElementById('img-logo');
    const es = document.getElementById('tes-1');
    const en = document.getElementById('tes-2');
    const separator = document.getElementById('separator');
    const contact = document.getElementById('tes-3');
    const burger1 = document.getElementById('burger-1');
    const burger2 = document.getElementById('burger-2');
    const burger3 = document.getElementById('burger-3');
    const burger4 = document.getElementById('burger-4');
    const nav = document.getElementById('nav');

    hamburgerButton.addEventListener('click', () => {
    nav.classList.toggle('nav-height');
     logo.classList.toggle('img-color');
     es.classList.toggle('white-text');
     en.classList.toggle('white-text');
     separator.classList.toggle('white-text');
     burger1.classList.toggle('white-burger');
     burger2.classList.toggle('white-burger');
     burger3.classList.toggle('white-burger');
     burger4.classList.toggle('white-burger');
     contact.classList.toggle('white-text');
     es.classList.toggle('tes');
     en.classList.toggle('tes');
     separator.classList.toggle('tes');
     contact.classList.toggle('tes');
     burger1.classList.toggle('tes-2');
     burger2.classList.toggle('tes-2');
     burger3.classList.toggle('tes-2');
     burger4.classList.toggle('tes-2');
    
    });
</script>
  
  <input name="animation" type="hidden">
  </body>
</html>
