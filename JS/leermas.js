
let readMore_btn = document.getElementById('readMore_btn');
let hideText = document.getElementById('hideText');

let readMore_btn2 = document.getElementById('readMore_btn2');
let hideText2 = document.getElementById('hideText2');

let readMore_btn3 = document.getElementById('readMore_btn3');
let hideText3 = document.getElementById('hideText3');

let readMore_btn4 = document.getElementById('readMore_btn4');
let hideText4 = document.getElementById('hideText4');

let readMore_btn5 = document.getElementById('readMore_btn5');
let hideText5 = document.getElementById('hideText5');

readMore_btn.addEventListener('click', toggleText);
readMore_btn2.addEventListener('click', toggleText2);
readMore_btn3.addEventListener('click', toggleText3);
readMore_btn4.addEventListener('click', toggleText4);
readMore_btn5.addEventListener('click', toggleText5);

function toggleText() {
  hideText.classList.toggle('showText');
  
  

  if(hideText.classList.contains('showText')) {
    readMore_btn.innerHTML = 'Leer menos'
  }
  
  else {
    readMore_btn.innerHTML = 'Leer Más'
  }
  
}
function toggleText2() {
    hideText2.classList.toggle('showText');
    
    if(hideText2.classList.contains('showText')) {
      readMore_btn2.innerText = 'Leer menos'
    }
    
    else {
      readMore_btn2.innerHTML = 'Leer más'
    }
    
  }
  function toggleText3() {
    hideText3.classList.toggle('showText');
  
    if(hideText3.classList.contains('showText')) {
      readMore_btn3.innerHTML = 'Leer menos'
    }
    
    else {
      readMore_btn3.innerHTML = 'Leer Más'
    }
    
  }

  function toggleText4() {
    hideText4.classList.toggle('showText');
  
    if(hideText4.classList.contains('showText')) {
      readMore_btn4.innerHTML = 'Leer menos'
    }
    
    else {
      readMore_btn4.innerHTML = 'Leer Más'
    }
    
  }

  function toggleText5() {
    hideText5.classList.toggle('showText');
  
    if(hideText5.classList.contains('showText')) {
      readMore_btn5.innerHTML = 'Leer menos'
    }
    
    else {
      readMore_btn5.innerHTML = 'Leer Más'
    }
    
  }



