import Splide from '@splidejs/splide';

function on(selector, eventType, cb) {
    document.addEventListener(eventType, (event) => {
        let element = event.target;

        while (element) {
            if (element.matches(selector)) {
                return cb({
                    handleObj: element, originalEvent: event
                })
            }
            element = element.parentElement;
        }
    })
}



document.addEventListener('DOMContentLoaded', function () {



    on('.column', 'click', function (event) {

        const lightbox = document.getElementById('lightbox');
        lightbox.classList.add('select');

        let id = event.handleObj.getAttribute('data-id');
        id = parseInt(id)

        const sliderLightboxGallery = function () {
            var splide = new Splide('.splide-lightbox .splide', {
                type: 'loop', height: '95vh', width: '90vw', easing: 'ease', pagination: false, start: id

            });

            splide.mount();
        }

        sliderLightboxGallery();

        if (window.acf) {
            window.acf.addAction('render_block_preview/type=carousel-auto', sliderLightboxGallery)
        }


    })


    //close lightbox (Galerie und CPT)
    on('#close-btn', 'click', function (event) {

        //const close = document.getElementById('close-btn')
        event.originalEvent.target.parentElement.classList.remove('select')

    })

    on('.is-active .lightbox-small-boxes', 'click', function (event) {

            const allImages = document.querySelectorAll('.is-active.splide__slide .select')
            console.log(allImages)

            for (const img of allImages) {

                const imgClass = img.querySelectorAll('.is-active .lightbox-small-boxes')
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

})
