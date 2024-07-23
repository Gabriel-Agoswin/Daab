

const swiper = new Swiper('.expl__con__right', {
    
    loop: true,
    grabCursor: true,
    spaceBetween: 0,
  
    // pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,

    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //Responsive breakpoints

    breakpoints:{
        0:{
            slidesPerView: 1
        },
        620:{
            slidesPerView: 2

        }, 

        1024:{
            slidesPerView: 3

        }
    }
    
});


const swipe = new Swiper('.slider-wrapper', {
    
    loop: true,
    grabCursor: true,
    spaceBetween: 0,
  
    //  pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,

    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    //Responsive breakpoints

    breakpoints:{
        0:{
            slidesPerView: 1
        },
        620:{
            slidesPerView: 2

        }, 

        1024:{
            slidesPerView: 3

        }
    }
    
});

  
