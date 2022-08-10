// Carousel
//--------------------------------------
$(document).ready(function () {
    const card = document.querySelector('.carousel-offers_container')
    const nextButton = document.querySelector('#next')
    const prevButton = document.querySelector('#prev')

    if (currentMargin <= 0) {
        
    }

    let currentMargin = 0
    nextButton.onclick = function () {
    currentMargin = currentMargin - 200
    card.style.marginLeft = currentMargin + "px"
    }

    prevButton.onclick = function () {
    currentMargin = currentMargin + 200
    card.style.marginLeft = currentMargin + "px"
    }

    

});
