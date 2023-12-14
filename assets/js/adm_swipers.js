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