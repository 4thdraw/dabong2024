let lastScrollTop = 0;
const navbar = document.querySelector(".navbar");
const globaltrigger =  document.querySelector('a[href="#language-combo"]');


const handleScroll = () => {

  if (!navbar) return;
  
  const currentScroll = window.pageYOffset || document.documentElement.scrollTop;



  if (currentScroll > lastScrollTop) {
    // Scrolling down: hide the navbar
    navbar.classList.add('nav_up');
  } else {
    // Scrolling up: show the navbar
    navbar.classList.remove('nav_up');
  }

  // Toggle scroll_updown class based on scroll position
  if (currentScroll === 0) {
    document.body.classList.remove('scroll_updown');
  } else {
    document.body.classList.add('scroll_updown');
    if (!globaltrigger.classList.contains('collapsed')) {    
      globaltrigger.click();
    }

    console.log(globaltrigger.classList.contains('collapsed'))
    

  }

  // Update lastScrollTop
  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Compatibility with iOS
};

// Debounce function to limit how often handleScroll runs
const debounce = (func, wait) => {
  let timeout;
  return function(...args) {
    const context = this;
    clearTimeout(timeout);
    timeout = setTimeout(() => func.apply(context, args), wait);
  };
};

// Use requestAnimationFrame for smooth scrolling
window.addEventListener("scroll", debounce(() => {
  requestAnimationFrame(handleScroll);
}, 100));
