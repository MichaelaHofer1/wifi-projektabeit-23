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
    let addClassAnimate = document.querySelectorAll(' h2, h3, p, .column, .columns, img') 

    for (let i = 0; i < addClassAnimate.length; i++) {
        addClassAnimate[i].classList.add('animate')
    }
}


/*
// in der Lightbox die kleinen Bilder vergrößern und das Große verkleinern

document.getElementById('lightbox-small-boxes').addEventListener('click', function() {

    //kleines Bild bekommt extra Klasse, die es groß macht
    //Klasse 'lightbox-small-boxes' kommt weg
        document.getElementById('.lightbox-small-boxes').classList.add('detail-img-big')
        document.getElementById('.lightbox-small-boxes').classList.remove('lightbox-small-boxes')
        
    //großes Bild bekommt gleiche Id wie die kleinen Bilder
    //großes Bild, das jetzt die Id von den kleinen Bildern hat, bekommt zusätzlich auch die 
    //  Klasse von den kleinen Bildern
        document.getElementById('img-big').setAttribute( 'id', 'lightbox-small-boxes')
        document.getElementById('lightbox-small-boxes').classList.add('lightbox-small-boxes')  
   })
*/



// in der Lightbox die kleinen Bilder vergrößern und das Große verkleinern
/*
function lightbox(){
    const detailImgs = document.querySelectorAll('.lightbox-small-boxes')

 console.log(detailImgs)

   for(const detailImg of detailImgs){
    detailImg
   }
}
   

document.addEventListener('click', function() {
    lightbox()
})

*/




function on (selector, eventType, cb) {
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
    


on('.lightbox-small-boxes', 'click', function(event){

    const allImages = document.querySelectorAll('.select')
    console.log(event)

    for (const img of allImages) {

        const imgClass = img.querySelectorAll('.lightbox-small-boxes')
        const imgSelector = img.getAttribute('class')


        if (imgSelector.match('detail-img-big')) {
            img.classList.remove('detail-img-big')
            img.classList.add('lightbox-small-boxes')
        }




        console.log()
        if (allImages && imgClass) {
            event.originalEvent.target.parentElement.classList.remove('lightbox-small-boxes')
            event.originalEvent.target.parentElement.classList.add('detail-img-big')  


        }
    }
})













































/*
    //kleines Bild bekommt extra Klasse, die es groß macht
    //Klasse 'lightbox-small-boxes' kommt weg
        document.querySelectorAll('.lightbox-small-boxes').classList.add('detail-img-big')
        document.querySelectorAll('.lightbox-small-boxes').classList.remove('lightbox-small-boxes')
        
    //großes Bild bekommt gleiche Id wie die kleinen Bilder
    //großes Bild, das jetzt die Id von den kleinen Bildern hat, bekommt zusätzlich auch die 
    //  Klasse von den kleinen Bildern
        document.getElementById('img-big').setAttribute( 'id', 'lightbox-small-boxes')
        document.getElementById('lightbox-small-boxes').classList.add('lightbox-small-boxes')  
   })
   */









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