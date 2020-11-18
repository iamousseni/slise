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
if(document.querySelector('.components-box2-image > img')){
    window.addEventListener("scroll", function(){
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop && scrollY <= 50){
        // downscroll code
        scrollY++;
        document.querySelector('.nav-scroll-up ').classList.remove('hide');
    } else if(st < lastScrollTop && scrollY > -50){
        // upscroll code
        scrollY--;
        document.querySelector('.nav-scroll-up ').classList.add('hide');
    }

    document.querySelector('.components-box2-image > img').style.boxShadow = '-50px '+scrollY+'px 10px 0px rgba(141, 187, 230, .8)';
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
    }, false);
}


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

let menu = $('.menu');
menu.click(function(){
    if($(this).hasClass('open')){
        menu.removeClass('open');
        menu.addClass('close');

        $('.header').css({
            position: 'relative',
            background: '',
            zIndex: 1,
            width: '100%'
        });
        $('.menu-mob-list').addClass('hide');
        $('.components-menu-content').removeClass('hide');
    }else{
        menu.removeClass('close');
        menu.addClass('open');

        $('.header').css({
            position: 'fixed',
            background: 'rgb(94, 121, 166)',
            zIndex: 5,
            width: '100%'
        });
        $('.menu-mob-list').removeClass('hide');
        $('.components-menu-content').addClass('hide');
    }
});
  

//send contatti
if(document.querySelector('#btn-send-contact')){
    document.querySelector('#btn-send-contact').addEventListener('click', function(){
        let form = document.querySelector('[name=sendContact]');
        data = {
            fullname: form.fullname.value,
            tel: form.tel.value,
            email: form.email.value,
            comment: form.comment.value
        };
        this.innerHTML = '<img src="/images/unnamed.gif" alt="load slise" style="height:30px;object-fit:contain;">';

        ajax('/contatti/send', 'POST', data)
        .then( data => {
        let message = document.querySelector('.message');
        if(data.result){
            form.parentElement.style.display = 'none';
            message.classList.remove('error');
        }else{
            message.classList.add('error');
        }
        
        this.innerHTML = 'Invia richiesta';
        message.textContent = data.message;
        });

    });
}

//send consulenza
if(document.querySelector('.btn-consulenza')){
    document.querySelector('.btn-consulenza').addEventListener('click', function(){
        let form = document.querySelector('[name=consulenza]');
        data = {
            email: form.email.value,
        };

        this.innerHTML = '<img src="/images/unnamed.gif" alt="load slise" style="height:30px;object-fit:contain;">';
        ajax('/consulenza/send', 'POST', data)
        .then( data => {
        let message = document.querySelector('.message.consulenza');
        if(data.result){
            form.style.display = 'none';
            message.classList.remove('error');
        }else{
            message.classList.add('error');
        }
        
        this.innerHTML = 'Invia richiesta';
        message.textContent = data.message;
        });
    });
}

function ajax(url, method='GET', data=null){
    return new Promise ((resolve, reject) => {
      let xhttp = new XMLHttpRequest();
      xhttp.open(method, url, true);
      xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhttp.onreadystatechange = function(){
        if(this.status == 200 && this.responseText != ''){
          let responseData = JSON.parse(this.responseText); 
          resolve(responseData);
        }
      };

      xhttp.send(new URLSearchParams(data));
    });
}