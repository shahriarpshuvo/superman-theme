//(function(){

  let navButton = document.querySelector('.nav-button');
  let dropDownNav = document.querySelector('.header-nav__menu');
  let navButtonSwitch = false;
  console.log(navButton);
  

  navButton.addEventListener('click', function (){
    if(!navButtonSwitch){
      navButton.innerHTML = '<a href="#"><i class="icofont-close-line"></i></a>';
      dropDownNav.style.display = 'flex';
      navButtonSwitch = true;
    } else {
      navButton.innerHTML = '<a href="#"><i class="icofont-abacus-alt"></i></a>';
      dropDownNav.style.display = 'none';
      navButtonSwitch = false;
    }
  });


//})();