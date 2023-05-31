    /* Funktion zur Prüfung ob JS (dieses JS-File) geladen wurde
-> Änder nder Klasse "no-js" in "js" im <html>-Tag
*/

function jsLoaded () {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
}




/*
ToTop-Button ein-/auszublenden
*/
function showToTop(){
    const toTopButton = document.getElementById('to-top')
    if(window.scrollY > 250 ) {
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove('show')
    }
}

document.getElementById('to-top').addEventListener('click', function() {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})




function elementsInViewport() {

    let elements = document.querySelectorAll('.animate')
    let animated = 'animated'

    let windowTopPosition = window.scrollY
    let windowHeight = window.innerHeight || document.documentElement.clientHeight
    let windowBottom = windowTopPosition + windowHeight

    for (let i = 0; i < elements.length; i++ ){
        let elementTopPosition = elements[i].getBoundingClientRect().top + windowTopPosition
        let elementBottomPosition = elements[i].getBoundingClientRect().bottom + windowTopPosition

        if (elementBottomPosition > windowTopPosition && elementTopPosition < windowBottom) {
            elements[i].classList.add(animated)
        }
    }
}


function addAnimate() {
    let addClassAnimate = document.querySelectorAll('h1, h2, h3, p, .column, .columns, img') 

    for (let i = 0; i < addClassAnimate.length; i++) {
        addClassAnimate[i].classList.add('animate')
    }
}









// Event Listener "DOMContentLoaded" wird nur ausgeführt, wenn der DOM fertig aufgebaut ist
document.addEventListener('DOMContentLoaded', function() { 
    jsLoaded()
    showToTop()
    addAnimate()
    elementsInViewport()

}, false )

// Event Listner "scroll" wird immer beim Scrollen ausgeführt
document.addEventListener('scroll', function() {
    showToTop()
    elementsInViewport()
})

window.addEventListener('resize', function(){
    elementsInViewport()

})