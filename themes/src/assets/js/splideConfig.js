"use strict"
import Splide from '@splidejs/splide';
window.addEventListener( 'load', function() {
    

  
    const sliderInitalize = function (){
      var splide = new Splide( '#splide-sculptures', {
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
    }

    sliderInitalize();

    if(window.acf){
        window.acf.addAction('render_block_preview/type=carousel-auto', sliderInitalize)
    }



} );




window.addEventListener( 'load', function() {       

      
      const sliderInitalize = function (){
        let splide = new Splide( '#header-slideshow-img-container', {
          type: 'loop',
          easing: 'ease',
          autoplay: 'true',
          perPage: 1,
          interval: '3000',
          speed: '750',
          pagination: false, 
          arrows: false
        } );
        splide.mount();
      };

      sliderInitalize();

      if(window.acf){
          window.acf.addAction('render_block_preview/type=header', sliderInitalize)
      }



    } );
