let sliderContainer = document.querySelector('.slider__container');
let sliderControlsPoint = document.querySelector('.slider__controls');
let sliderNavigation = document.querySelector('.slider__navigation');

let nextButton = document.querySelector('.next');
let prevButton = document.querySelector('.prev');

let images = ['diploma-additional-1.jpg', 'diploma-additional-2.jpg'];
let currentImage = 1;

function controlsPoint(){
    for (let i = 0; i < images.length; i++) {
        let point = document.createElement('div');
            point.classList.add('slider__control');
            point.setAttribute('data-img', i);

        point.addEventListener('click', function (e) {
            e.stopPropagation();
            currentImage = this.getAttribute('data-img');
            setCurrentSlide();
        })  

        sliderControlsPoint.appendChild(point);
    }
}

function setCurrentSlide() {
    let sliderControls = document.querySelectorAll('.slider__control');
    sliderContainer.style.backgroundImage = 'url(img/' + images[currentImage];

    sliderControls.forEach(function(e){
        e.classList.remove('slider__control--isActive')
    })
    
    let currentSlide = document.querySelector('.slider__control[data-img="' + currentImage + '"]');
    currentSlide.classList.add('slider__control--isActive');
}

function navigation(){

    prevButton.addEventListener('click', function (e) {
        e.stopPropagation();
        currentImage--;
        if (currentImage < 0) {
            currentImage = images.length - 1;
        }
        setCurrentSlide();
    });
        
    nextButton.addEventListener('click', function (e) {
        e.stopPropagation();
        currentImage++;
        if (currentImage > images.length - 1) {
            currentImage = 0;
        }
        setCurrentSlide();
    });
};

window.controlsPoint();
window.setCurrentSlide();
window.navigation();