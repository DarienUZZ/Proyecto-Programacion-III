
window.addEventListener('scroll', function() {
  var topNavbarHeight = document.querySelector('.topNavbar').offsetHeight;
  var navbar = document.querySelector('.navbar');
  
  if (window.pageYOffset > topNavbarHeight) {
    navbar.style.top = '0';
  } else {
    navbar.style.top = topNavbarHeight + 'px';
  }
});