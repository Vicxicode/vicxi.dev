var rellax = new Rellax('.rellax');

let menu = document.getElementById("menu");
let sidemenu = document.getElementById("side-menu");
const menuBtn = document.querySelector('.menu-btn');
const content = document.querySelector(".window1");
const content1 = document.querySelector(".window2");
const content2 = document.querySelector(".window3");


let menuOpen = false;
sidemenu.style.width="0px";

menuBtn.addEventListener('click', () => {
  if(!menuOpen && sidemenu.style.width == "0px") {
    menuBtn.classList.add('open');
    menuOpen = true;  
    if (window.innerWidth<=1000){
      sidemenu.style.width = "100%";
    }else{
      sidemenu.style.width = "50%";
    }
    sidemenu.style.transition = "0.8s";
    sidemenu.style.zIndex = "-1";
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
    menuBtn.classList.remove('open');
    sidemenu.style.width = "0px";
  }
});

sidemenu.addEventListener('click',()=>{
  if(sidemenu.style.width = "50%"){
    menuBtn.classList.remove('open');
    menuOpen = false;
    menuBtn.classList.remove('open');
    sidemenu.style.width = "0px"; 
  }
});

$(function () {
  'use strict';
  var view = $(window).height();
  $('.part')
      .height(view)
      .scrollie({
          scrollOffset: -50,
          scrollingInView: function (elem) {
              var bgColor = elem.data('background');
              $('body').css('background-color', bgColor);
          }
      });
});



const maxSkew = 15;
const maxRotate = 10;

let currentPosition = window.pageYOffset;

function skewEffect() {
  const newPosition = window.pageYOffset;
  const dif = newPosition - currentPosition;

  let skew = dif * 0.8;
  let rotate = dif * 0.2;
  if (skew > maxSkew || skew < -maxSkew) {
    if (skew > 0) {
      skew = maxSkew;
    } else if (skew < 0) {
      skew = -maxSkew;
    }
  }
  if (rotate > maxRotate || rotate < -maxRotate) {
    if (rotate > 0) {
      rotate = maxRotate;
    } else if (skew < 0) {
      rotate = -maxRotate;
    }
  }

  content.style.transform = `skewY(${skew}deg) rotateY(${rotate}deg)`;
  content1.style.transform = `skewY(${skew}deg) rotateY(${rotate}deg)`;
  content2.style.transform = `skewY(${skew}deg) rotateY(${rotate}deg)`;
  currentPosition = newPosition;
  requestAnimationFrame(skewEffect);
}

skewEffect();