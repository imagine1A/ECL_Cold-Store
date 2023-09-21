const mySlider_hero = new Swiper('.mySlider-hero', {
    // Optional parameters
    direction: 'horizontal',
   
    // slideOffsetAfter: -60,
    // swiperSlideSize: 320,
 
    slidesPerView : 1,
    spaceBetween : 50,    
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
    
    thumbs: {
    swiper: ".mySlider-thumb",
  },
    
    autoplay: {
    delay: 5000, // 5 seconds between slide transitions
    disableOnInteraction: false,
  },
    // navigation:"true",
    centeredSlidesBounds:true,
  });

const swiper_thumb = new Swiper('.mySlider-thumb', {
    // Optional parameters
    direction: 'horizontal',
 
    
    // slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween: 16,
     touchRatio: 2,
    // free-mode:"true",
   centeredSlidesBounds:true
  
  });


const mySlider_nav = new Swiper('.mySlider-nav', {
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






const swiper1 = new Swiper('.mySlider-1', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination1',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next1',
      prevEl: '.swiper-button-prev1',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });



const swiper2 = new Swiper('.mySlider-2', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination2',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next2',
      prevEl: '.swiper-button-prev2',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper3 = new Swiper('.mySlider-3', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination3',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next3',
      prevEl: '.swiper-button-prev3',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper4 = new Swiper('.mySlider-4', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination4',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next4',
      prevEl: '.swiper-button-prev4',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper5 = new Swiper('.mySlider-5', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination5',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next5',
      prevEl: '.swiper-button-prev5',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper6 = new Swiper('.mySlider-6', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination6',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next6',
      prevEl: '.swiper-button-prev6',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper7 = new Swiper('.mySlider-7', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120,  
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination7',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next7',
      prevEl: '.swiper-button-prev7',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper8 = new Swiper('.mySlider-8', {
    // Optional parameters
    direction: 'horizontal',
   
    // width: 320,
    slideOffsetAfter: -60,
    // swiperSlideSize: 320,
    
    slidesPerGroup:2,
    slidesPerView : 1,
    spaceBetween : -150, 
    
    breakpoints: {
        320: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120, 
        },
        
        360: {
    slidesPerGroup:1,
    slidesPerView : 1,
    spaceBetween : 120,  
        },
        
        576: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 190, 
        },
        
         768: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : 20, 
        },
        992: {
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        
        1200: {
    slidesPerGroup:2,
    slidesPerView : 3,
    spaceBetween : -150, 
        },
      1920: {
    slidesPerGroup:2,
    slidesPerView : 4,
    spaceBetween : -250, 
        }
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination8',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next8',
      prevEl: '.swiper-button-prev8',
    },
  
    touchEventsTarget: 'swiper-wrapper',
    touchRatio: 2,
  });


const swiper_testi = new Swiper('.mySlider-testi', {
    // Optional parameters
    direction: 'horizontal',
   
    
    slideOffsetAfter: -60,
    slidesOffsetBefore: 20,
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
    slidesPerGroup:2,
    slidesPerView : 2,
    spaceBetween : -150, 
        },
        1920: {
    slidesPerGroup:4,
    slidesPerView : 3,
    spaceBetween : -100, 
        }
    },
    
    // If we need pagination
    pagination: {
      el: '.swiper-pagination12',
     type: 'progressbar',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next12',
      prevEl: '.swiper-button-prev12',
    },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
