/* Funktion zur Prüfung ob JS (dieses JS-File) geladen wurde
-> Ändern der Klasse "no-js" in "js" im <html>-Tag
*/


function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}




/*
ToTop-Button ein-/auszublenden
*/
function showToTop() {
    const toTopButton = document.getElementById('to-top')
    const navigation = document.getElementById('nav-bar')
    const containerNav = document.getElementById('small-container')

    if (window.scrollY > 250) {
        toTopButton.classList.add('show')
        navigation.classList.add('small-nav')
        containerNav.classList.add('small-nav')

    } else {
        toTopButton.classList.remove('show')
        navigation.classList.remove('small-nav')
        containerNav.classList.remove('small-nav')
    }
}




document.getElementById('to-top').addEventListener('click', function () {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})




function elementsInViewport() {

    let elements = document.querySelectorAll('.animate')
    let animated = 'animated'

    let windowTopPosition = window.scrollY
    let windowHeight = window.innerHeight || document.documentElement.clientHeight
    let windowBottom = windowTopPosition + windowHeight

    for (let i = 0; i < elements.length; i++) {
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition

        if (elementBottomPosition > windowTopPosition && elementTopPosition < windowBottom) {
            elements[i].classList.add(animated)
        }
    }
}


function addAnimate() {
    let addClassAnimate = document.querySelectorAll(' h2, h3')

    for (let i = 0; i < addClassAnimate.length; i++) {
        addClassAnimate[i].classList.add('animate')
    }
}



function on(selector, eventType, cb) {
    document.addEventListener(eventType, (event) => {
        let element = event.target;

        while (element) {
            if (element.matches(selector)) {
                return cb({
                    handleObj: element,
                    originalEvent: event
                })
            }
            element = element.parentElement;
        }
    })
}

window.addEventListener('load', function () {

    //open lightbox for CPT auf Home
    on('.news-pics', 'click', function () {

        const lightbox = document.getElementById('lightbox');
        lightbox.classList.add('select');
    })



    //close lightbox (Galerie und CPT)
    on('#close-btn', 'click', function(event){
        
        //const close = document.getElementById('close-btn')
        event.originalEvent.target.parentElement.classList.remove('select')
        
    })
})









// Event Listener "DOMContentLoaded" wird nur ausgeführt, wenn der DOM fertig aufgebaut ist
document.addEventListener('DOMContentLoaded', function () {
    jsLoaded()
    showToTop()
    addAnimate()
    elementsInViewport()

}, false)

// Event Listner "scroll" wird immer beim Scrollen ausgeführt
document.addEventListener('scroll', function () {
    showToTop()
    elementsInViewport()
})

window.addEventListener('resize', function () {
    elementsInViewport()

})
