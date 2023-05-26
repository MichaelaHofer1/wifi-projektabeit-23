"use strict"

window.addEventListener( 'load', function() {
    

  
    const sliderInitalize = function (){
      let splide = new Splide( '.splide', {
        type: 'loop',
        height: '400px',
        width: '600px',
        easing: 'linear',
        autoplay: 'true',
        speed: 'number = 100',
        interval: '750',
        pauseOnHover: 'true',
        pagination: false, 
      } );
      splide.mount();
    };

    sliderInitalize();

    if(window.acf){
        window.acf.addAction('render_block_preview/type=carousel-auto', sliderInitalize)
    }



} );
