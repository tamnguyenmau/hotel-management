const login = document.getElementById('Log_in');
const signup = document.getElementById('sign_up');

//login - sigup
signuppage = () => {
  login.style.display = 'none';
  signup.style.display = 'flex';
};
loginpage = () => {
  signup.style.display = 'none';
  login.style.display = 'flex';
};

//employee-user login
const btns = document.querySelectorAll('.btns');
const authsection = document.querySelectorAll('.authsection');

var slideNav = function (manual) {
  btns.forEach((btn) => {
    btn.classList.remove('active');
  });
  authsection.forEach((slide) => {
    slide.classList.remove('active');
  });

  btns[manual].classList.add('active');
  authsection[manual].classList.add('active');
};

btns.forEach((btn, i) => {
  btn.addEventListener('click', () => {
    slideNav(i);
  });
});



const nav = document.getElementById('myNavbar');
window.onscroll = function () { 
    if (window.scrollY >= 50 ) {
      myNavbar.classList.add('active-text');
        // myNav.classList.remove("nav-transparent");
    } 
    else {
        // myNav.classList.add("nav-transparent");
        myNavbar.classList.remove('active-text');
    }
};
