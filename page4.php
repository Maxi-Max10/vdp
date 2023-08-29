<?php

$campo = "Contact Us";
include "assets/views/nav.php";

?>
    

<section data-bs-version="5.1" class="header4 cid-tLp8n5ZlJ8 mbr-fullscreen mbr-parallax-background" id="header4-1m">
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="content-wrap">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1">Contact us</h1>

                <p class="mbr-fonts-style mbr-text mbr-white mb-3 display-7">
                    What sets us apart is our unwavering commitment to personalized exclusive service.</p>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="contact-container">
        <!-- <div class="arrows">
            <div class="arrow prev" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
              <span class="svg svg-arrow-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 26" enable-background="new 0 0 30 26"><path d="M13 26c-.3 0-.5-.1-.7-.3l-12-12c-.4-.4-.4-1 0-1.4l12-12c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11.3 11.3 11.3 11.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3z"/><path class="arrow__line" d="M29.9 13.1h-28.4"/></svg>
              </span>
            </div>
            <div class="arrow next" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
              <span class="svg svg-arrow-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 26" enable-background="new 0 0 30 26"><path d="M16.9 0c.3 0 .5.1.7.3l12 12c.4.4.4 1 0 1.4l-12 12c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l11.3-11.3-11.3-11.3c-.4-.4-.4-1 0-1.4.2-.2.5-.3.7-.3z"/><path class="arrow__line" d="M0 12.9h28.5"/></svg>
              </span>
            </div>
          </div> -->
        <h5>
            If you have any questions or need any general <br> 
            information, please complete this form to <br> 
            request the information you need. We will be <br> 
            pleased to help you.
        </h5>
        <div id="mensajeC"></div>
            <form id="form_enviar" method="post" action="mail.php">
            <div class="input-container">
                <input type="text" id="name" name="name" required="">
                <label for="input" class="label">Your Name<span class="mandatory">*</span></label>
                <div class="underline"></div>
            </div>
            <div class="input-container">
                <input type="text" id="email" name="email" required="">
                <label for="input" class="label">Your Email<span class="mandatory">*</span></label>
                <div class="underline"></div>
            </div>
            <div class="input-container">
                <input type="text" id="phone" name="phone" required="">
                <label for="input" class="label">Phone</label>
                <div class="underline"></div>
            </div>


            <div class="input-container">
                <div class="underline-about"></div>
                <div class="select-menu fade-slide-down">
                    <div id="aboutIcon" class="plus dropdown-about">+</div>
                    <div class="select-btn">
                        <span class="sBtn-text">About</span>
                        <i class="bx bx-chevron-down"></i>
                    </div>
                    <ul class="options">
                        <li class="option">
                            <i class="bx bxl-github" style="color: #171515;"></i>
                            <span class="option-text">Country Day</span>
                        </li>
                        <li class="option">
                            <i class="bx bxl-instagram-alt" style="color: #E1306C;"></i>
                            <span class="option-text">Country Day + Overnight</span>
                        </li>
                        <li class="option">
                            <i class="bx bxl-linkedin-square" style="color: #0E76A8;"></i>
                            <span class="option-text">Half Day</span>
                        </li>
                    </ul>
                </div>
            </div> 
            
            <div class="input-container">
                <h6 class="label">Other interests<span class="mandatory">*</span></h6>
                <div class="check-container row">
                    <div class="d-flex flex-column col-3 pe-0">
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="wine" type="checkbox" value="Wine" name='check_list[]'>
                            <label class="check-label checkbox-label" for="wine"></label> 
                            <span class="label-text">Wine</span>
                        </div> 
                        <div class="checkbox-container">      
                            <input class="check-input custom-checkbox" id="motorcycle" type="checkbox" value="Motorcycle" name='check_list[]'>
                            <label class="check-label checkbox-label" for="motorcycle"></label>
                            <span class="label-text">Motorcycle</span>
                        </div>
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="sailing" type="checkbox" value="Sailing" name='check_list[]'>
                            <label class="check-label checkbox-label" for="sailing"></label>
                            <span class="label-text">Sailing</span>
                        </div> 
                    </div>
                     <div class="d-flex flex-column col-3 pe-0 ps-0">
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="food" type="checkbox" value="Food" name='check_list[]'>
                            <label class="check-label checkbox-label" for="food"></label>
                            <span class="label-text">Food</span>
                        </div>
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="horses" type="checkbox" value="Horses" name='check_list[]'>
                            <label class="check-label checkbox-label" for="horses"></label>
                            <span class="label-text">Horses</span>
                        </div>
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="golf" type="checkbox" value="Golf" name='check_list[]'>
                            <label class="check-label checkbox-label" for="golf"></label>
                            <span class="label-text">Golf</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column col-3 pe-0 ps-0">
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="adventure" type="checkbox" value="Ranch" name='check_list[]'>
                            <label class="check-label checkbox-label" for="adventure"></label>
                            <span class="label-text">Adventure</span>
                        </div>
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="ranch" type="checkbox" value="Ranch" name='check_list[]'>
                            <label class="check-label checkbox-label" for="ranch"></label>
                            <span class="label-text">Ranch</span>
                        </div>
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="4x4" type="checkbox" value="4x4" name='check_list[]'>
                            <label class="check-label checkbox-label" for="4x4"></label>
                            <span class="label-text">4x4</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column col-3 pe-0 ps-0">
                        <div class="checkbox-container">
                            <input class="check-input custom-checkbox" id="relaxation" type="checkbox" value="Relaxation" name='check_list[]'>
                            <label class="check-label checkbox-label" for="relaxation"></label>
                            <span class="label-text">Relaxation</span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="dropdown" class="input-container date mt-5">
                <div id="dropdownIcon" class="plus dropdown">+</div>
                <h6 class="label">Estimated date for your journey</h6>
                <div class="underline-text"></div>
            </div>
            <div id="dateHide" class="hidden d-flex">
                <input maxlength="2" class="day-input" type="text" name="fechainD" id="day" placeholder="DD">
                <h6 class="slash">/</h6>
                <input maxlength="2" class="date-input" type="text" name="fechainM" id="month" placeholder="MM">
                <h6 class="slash">/</h6>
                <input maxlength="2" class="year-input" type="text" name="fechainA" id="year" placeholder="YY">
                <h6 class="to">to</h6>
                <input maxlength="2" class="day-input" type="text" name="fechasalD" id="day" placeholder="DD">
                <h6 class="slash">/</h6>
                <input maxlength="2" class="date-input" type="text" name="fechasalM" id="month" placeholder="MM">
                <h6 class="slash">/</h6>
                <input maxlength="2" class="year-input" type="text" name="fechasalA" id="year" placeholder="YY">
            </div>

            <div class="input-container message">
                <input type="text" id="input" required="" name="message">
                <label for="input" class="label" >Message</label>
                <div class="underline"></div>
            </div>

            <!--<a class="btn btn-dark btn-lg submit">
                Submit
            </a>
            <input type="button" class="btn btn-dark btn-lg submit" id="btnEnviarF" value="Enviar">
            -->

            <button type="submit" class="btn btn-dark btn-lg submit roboto">Submit</button>

            <div class="input-container">
                <div class="divider-medium"></div>
            </div>

            <div class="row">
                <div class="d-flex flex-column col-6">
                    <h5 class="contact-footer-title roboto-bold">GENERAL INQUIRES</h5>
                    <h6 class="fw-bold mt-2 roboto-bold">Email</h6>
                    <p class="mb-2 roboto-regular">vivacsdelplata@gmail.com</p>
                    <h6 class="fw-bold roboto-bold">Phone</h6>
                    <p class="phone-number roboto-regular">+54 9 (261) 631 6497</p>
                </div>
                <div class="d-flex flex-column col-6">
                    <h5 class="contact-footer-title roboto-bold">SOCIAL MEDIA</h5>
                    <a class="fw-bold mt-2 roboto-regular" href="">Instagram</a>
                    <a class="fw-bold mt-2 roboto-regular" href="">Facebook</a>
                    <a class="fw-bold mt-2 roboto-regular" href="">Tripadvisor</a>
                </div>
            </div>
        </form>
    </div>
</section>





<?php

include "assets/views/footer.php";

?>

<script>
    var aboutButton = document.getElementById("about");
    const about = document.getElementById("aboutIcon");

    var button = document.getElementById("dropdown");
    var dropdownSection = document.getElementById("dateHide");
    const toggleText = document.getElementById('dropdownIcon');

    button.addEventListener('click', () => {
        if (dropdownSection.classList.contains('hidden')) {
        dropdownSection.classList.remove('hidden');
        } else {
        dropdownSection.classList.add('hidden');
        }

        if (toggleText.classList.contains('plus')) {
        toggleText.textContent = '-';
        toggleText.classList.remove('plus');
        } else {
        toggleText.textContent = '+';
        toggleText.classList.add('plus');
        }
    });

    aboutButton.addEventListener('click', () => {
        if (about.classList.contains('plus')) {
        about.textContent = '-';
        about.classList.remove('plus');
        } else {
        about.textContent = '+';
        about.classList.add('plus');
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
  
    hamburgerButton.addEventListener('click', () => {
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
  <script>
        const optionMenu = document.querySelector(".select-menu"),
        selectBtn = optionMenu.querySelector(".select-btn"),
        options = optionMenu.querySelectorAll(".option"),
        sBtn_text = optionMenu.querySelector(".sBtn-text");
        selectBtn.addEventListener("click", () => {optionMenu.classList.toggle("active")
        if (about.classList.contains('plus')) {
        about.textContent = '-';
        about.classList.remove('plus');
        } else {
        about.textContent = '+';
        about.classList.add('plus');
        }});       
        options.forEach(option =>{
        option.addEventListener("click", ()=>{
            if (about.classList.contains('plus')) {
        about.textContent = '-';
        about.classList.remove('plus');
        } else {
        about.textContent = '+';
        about.classList.add('plus');
        }
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
        });
    });
  </script>
  

