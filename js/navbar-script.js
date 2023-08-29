const hamburgerButton = document.getElementById('burger');
    var opened = false;
    const closeText = document.getElementById('close')
    const closeLi = document.getElementById('closeLi');
    const li1 = document.getElementById('li1');
    const li2 = document.getElementById('li2');
    const li3 = document.getElementById('li3');
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
    document.getElementById("nav").classList.toggle('nav-height');
    opened = !opened;
    separator.classList.toggle('hidden');
    li1.classList.toggle('hidden');
    li2.classList.toggle('hidden');
    li3.classList.toggle('hidden');
    closeLi.classList.toggle('hidden');
    logo.classList.toggle('img-color');
    closeText.classList.toggle('white-text');
    es.classList.toggle('white-text');
    en.classList.toggle('white-text');
    separator.classList.toggle('white-text');
    burger1.classList.toggle('white-burger');
    burger2.classList.toggle('white-burger');
    burger3.classList.toggle('white-burger');
    burger4.classList.toggle('white-burger');
    contact.classList.toggle('white-text');
    closeText.classList.toggle('tes');
    es.classList.toggle('tes');
    en.classList.toggle('tes');
    separator.classList.toggle('tes');
    contact.classList.toggle('tes');
    burger1.classList.toggle('tes-2');
    burger2.classList.toggle('tes-2');
    burger3.classList.toggle('tes-2');
    burger4.classList.toggle('tes-2');
    });


    let prevScrollPos = window.pageYOffset;

    window.addEventListener("scroll", function () {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
        document.getElementById("nav").style.top = "0";
    } else {
        if(!opened){
            document.getElementById("nav").style.top = "-120px";
        }
    }

    prevScrollPos = currentScrollPos;
    });