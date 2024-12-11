
// .box 요소를 선택
const observedoms = document.querySelectorAll('.observedom');

// 콜백 함수 정의
const backgroundaction = (entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('aniaction'); // 뷰포트에 들어오면 visible 클래스 추가         
        }
         else {
          entry.target.classList.remove('aniaction'); // 뷰포트에서 나가면 visible 클래스 제거
      }
    });
};

// 옵션 설정
const backgroundanioptions = {
    root: null, // viewport를 사용
    rootMargin: '0px',
    threshold: 0 // 요소가 10% 보일 때
};

// IntersectionObserver 인스턴스 생성
 const observermain = new IntersectionObserver(backgroundaction, backgroundanioptions);

// // 각 박스를 관찰
observedoms.forEach(observedom => {
    observermain.observe(observedom);
});
