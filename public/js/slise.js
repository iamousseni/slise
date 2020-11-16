document.querySelector('.components-menu-scroll').addEventListener('click', function(){
    window.scrollTo({
        top: document.querySelector('header+.call-slise+section').offsetTop,
        behavior: 'smooth',
    });
});

/*
3D ANIMATION
document.querySelector('.components-box2-image').addEventListener('mousemove', e => {
    let xAxis = (this.innerWidth / 2 - e.pageX) / 50;
    let yAxis = (this.innerHeight / 2 - e.pageY) / 50;
    document.querySelector('.components-box2-image > img').style.transform = 'rotateX('+yAxis+'deg) rotateY('+xAxis+'deg)';
});

document.querySelector('.components-box2-image').addEventListener('mouseenter', e =>{
    document.querySelector('.components-box2-image > img').style.transition = 'none';
});

document.querySelector('.components-box2-image').addEventListener('mouseleave', e =>{
    document.querySelector('.components-box2-image > img').style.transition = 'all .5s ease';
    document.querySelector('.components-box2-image > img').style.transform = 'rotateX(0deg) rotateY(0deg)';

});

*/

/*
document.querySelector('.components-box2-image').addEventListener('mousemove', e => {
    let xAxis = (this.innerWidth / 2 - (e.pageX)) / 2;
    let yAxis = ((this.innerHeight / 2 - e.pageY) * -1) / 50;
    console.log('xAxis', xAxis);
    console.log('yAxis', yAxis);
    document.querySelector('.components-box2-image > img').style.boxShadow = yAxis+'px '+xAxis+'px 10px 0px rgba(141, 187, 230, 0.42)';
});
*/


let lastScrollTop = 0;
let scrollY = 50;
window.addEventListener("scroll", function(){
   var st = window.pageYOffset || document.documentElement.scrollTop;
   if (st > lastScrollTop && scrollY <= 50){
      // downscroll code
      scrollY++;
   } else if(st < lastScrollTop && scrollY > -50){
      // upscroll code
      scrollY--;
   }

   document.querySelector('.components-box2-image > img').style.boxShadow = '-50px '+scrollY+'px 10px 0px rgba(141, 187, 230, .8)';
   lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);


document.querySelector('.call-icon').addEventListener('click', function(){
    if(document.querySelector('.call-text').style.animation == 'fade 0.5s linear forwards')
        document.querySelector('.call-text').style.animation = 'fadeReverse 0.5s linear forwards';
});


document.querySelector('.call-icon').addEventListener('mouseenter', function(){
  document.querySelector('.call-text').style.animation = 'fade 0.5s linear forwards';
});

if(!isValid('welcome')){
    document.querySelector('.overlay').classList.remove('hide');
    document.querySelector('.overlay').style.animation = 'pagenter 2s linear';
}

document.querySelector('.overlay').addEventListener('animationstart', function(){
    this.style.animation = 'pagenter 2s linear';
});

document.querySelector('.overlay').addEventListener('animationend', function(){
    setCookie('welcome', Math.random() * 101, 30);
    this.style.display = 'none';
});


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
        c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
        }
    }
    return "";
}

function isValid(check) {
    var checkValue = getCookie(check);
    return checkValue != '' ? true : false;
} 

let menu = document.querySelector('.menu');
menu.addEventListener('click', function() {
  if (menu.classList.contains('open')) {
    menu.classList.remove('open');
    menu.classList.add('close');
  } else {
    menu.classList.remove('close');
    menu.classList.add('open');
  }
})
  