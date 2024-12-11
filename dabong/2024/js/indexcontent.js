


const circlesvg = document.querySelector("#animatedCircle"); 

const mainSwiper = new Swiper('#main-visual', {
  loop: true,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false,
  },
  effect: "fade",
  pagination: {
    el: '#main-visual .main-pagination', // Custom pagination element
    type: 'custom', // Use custom type for manual control
    renderCustom: function (swiper, current, total) {
      // Update pagination display
      return `<span class="swiper-pagination-current">${current}</span> / <span class="swiper-pagination-total">${total}</span>`;
    },
  },
  navigation: {
    nextEl: '#main-visual .main_btnNext', // Custom next button
    prevEl: '#main-visual .main_btnNav',   // Custom previous button
  },
  on:{
    init: function(){
      setTimeout(maintextani, 100); 
      playaction();
     
    }
  }
});


function playaction(){
  circlesvg.classList.add('ani');
}

function stopaction(){
  circlesvg.classList.remove('ani');
}




function maintextani() {
  const activeSlide = document.querySelector('#main-visual .swiper-slide-active');
  

  //활성화된 swiper-slide의 텍스트 애니메이션 

// 첫번째 text animation
  const tit01Span = activeSlide.querySelector('#tit-01 span');
  if (tit01Span) {
    TweenLite.fromTo(
      tit01Span,
      1.5,
      { y: 100, opacity: 0 },
      { y: 0, opacity: 1, ease: Power4.easeOut }
    ).delay(0.6);
  }
// 두번째 text animation
  const tit03Span = activeSlide.querySelector('#tit-02 span');
  if (tit03Span) {
    TweenLite.fromTo(
      tit03Span,
      1.5,
      { y: 100, opacity: 0 },
      { y: 0, opacity: 1, ease: Power4.easeOut }
    ).delay(1);
  }
// 세번째 text animation
  const h4Tag = activeSlide.querySelector('h4');
  if (h4Tag) {
    TweenLite.fromTo(
      h4Tag,
      1.5,
      { x: -10, opacity: 0 },
      { x: 0, opacity: 1, ease: Power4.easeOut }
    ).delay(1.5);
  }
}






// Autoplay control
const autoplayToggle = document.getElementById('autoplay-toggle');

autoplayToggle.addEventListener('click', () => {
  if (mainSwiper.autoplay.running) {
    //멈춤
    mainSwiper.autoplay.stop();
    autoplayToggle.querySelector('.visually-hidden').textContent = '재생';    
    autoplayToggle.classList.add('icons_play'); 
    stopaction();
   
    

  } else {
    //재생
    mainSwiper.autoplay.start();
    autoplayToggle.querySelector('.visually-hidden').textContent = '일시정지';
    autoplayToggle.classList.remove('icons_play');
    playaction();
   

   
  }
});




mainSwiper.on('slideChange', function() {
  //각 슬라이드내의 mainTextani 실행
  stopaction();

  setTimeout(function(){ maintextani(); 
    // chat, autoplay상태일때만 실행하고 싶어
    if (mainSwiper.autoplay.running) {
     playaction();
      }
    
    }, 100); // 100ms 지연 시간


});


const swiperOEM = new Swiper('.main_contents_OEM.swiper', {
  loop: true,
  pagination: {
    el: '.oemitems .swiper-pagination', // Custom pagination element
    type: 'custom', // Use custom type for manual control
    renderCustom: function (swiper, current, total) {
      // Update pagination display
      return `<span class="swiper-pagination-current">${current}</span> / <span class="swiper-pagination-total">${total}</span>`;
    },
  },
  navigation: {
    nextEl: '.oemitems .main_btnNext', // Custom next button
    prevEl: '.oemitems .main_btnNav',   // Custom previous button
  },
  slidesPerView: 'auto',
  spaceBetween: 16,
  breakpoints: {
    1: {
      slidesPerView: 'auto',
      spaceBetween: 16,
    },
    768: {
      slidesPerView: 'auto',
      spaceBetween: 16,
    }
  }
})