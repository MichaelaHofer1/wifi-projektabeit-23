import Splide from '@splidejs/splide';
document.addEventListener( 'DOMContentLoaded', function() {



    const sliderInitalizeFastSlideshow = function (){
      var splide = new Splide( '#splide-sculptures', {
        type: 'loop',
        easing: 'linear',
        autoplay: 'true',
        speed: 'number = 500',
        interval: '750',
        pauseOnHover: 'true',
        pagination: true,
      } );
      splide.mount();
    }

    sliderInitalizeFastSlideshow();

    if(window.acf){
        window.acf.addAction('render_block_preview/type=carousel-auto', sliderInitalizeFastSlideshow())
    }



} );




document.addEventListener( 'DOMContentLoaded', function() {


      const sliderInitalizeSlideshow = function (){
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

    sliderInitalizeSlideshow();

      if(window.acf){
          window.acf.addAction('render_block_preview/type=header', sliderInitalizeSlideshow)
      }



    } );