const swiper_video = new Swiper('.mySlider-video', {
    // Optional parameters
    direction: 'horizontal',
   
    
    slideOffsetAfter: -60,
    // slidesOffsetBefore: 20,
    // swiperSlideSize: 320,
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -90,
    
    breakpoints: {
        320: {
    slideOffsetAfter: -60,
    slidesOffsetBefore: 20,
    spaceBetween : -90,
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 20, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 30, 
        },
        
        576: {
    slidesPerGroup:1,
    slidesPerView : 2,
    spaceBetween : 100, 
        },
        
         768: {
    slidesPerGroup:1,
    slidesPerView : 2,
    spaceBetween : 180, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 30, 
        },
        
        1200: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : -270, 
        },
        1920: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 70, 
        }
    },
    
    
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next_vid',
      prevEl: '.swiper-button-prev_vid',
    },
  
   
  });


const mySlider_nav_adm = new Swiper('.mySlider-nav_adm', {
    // Optional parameters
    direction: 'horizontal',
    // slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    // slidesPerView : 7,
    // spaceBetween : -150,    
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
    breakpoints: {
        320: {
    slidesPerView : 2,
    spaceBetween : -60 
        },
        360: {
    slidesPerView : 3,
    spaceBetween : -60 
        },
        
        576: {
    slidesPerView : 5,
    spaceBetween : -90 
        },
        
         768: {
    slidesPerView : 7,
    spaceBetween : -150, 
        },
        992: {
    slidesPerView : 7,
    spaceBetween : -150 
        },
        
        1200: {
    slidesPerView : 7,
    spaceBetween : -150 
        },
      1920: {
    slidesPerView : 7,
    spaceBetween : -150 
        }
    },
    // free-mode:"true",
   centeredSlidesBounds:true,
  });

