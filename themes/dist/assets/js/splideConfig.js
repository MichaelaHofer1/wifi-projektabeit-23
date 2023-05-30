"use strict"

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
        var splide = new Splide( '#header-slideshow-img-container', {
          type: 'loop',
          easing: 'linear',
          autoplay: 'true',
          perPage: 1,
          interval: '5000',
          speed: '1000',
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
