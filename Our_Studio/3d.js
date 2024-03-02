

const $card = document.querySelector('#card1');
const $card2 = document.querySelector('#card2');
const $card3 = document.querySelector('#card3');
const $card4 = document.querySelector('#card4');
const $card5 = document.querySelector('#card5');
const $card6 = document.querySelector('#card6');

let bounds;

function rotateToMouse(e) {
  const mouseX = e.clientX;
  const mouseY = e.clientY;
  const leftX = mouseX - bounds.x;
  const topY = mouseY - bounds.y;
  const center = {
    x: leftX - bounds.width / 2,
    y: topY - bounds.height / 2
  }
  const distance = Math.sqrt(center.x**2 + center.y**2);
  
  /*Image 1*/
  $card.style.transform = `
    scale3d(1.07, 1.07, 1.07)
    rotate3d(
      ${center.y / 100},
      ${-center.x / 100},
      0,
      ${Math.log(distance)* 2}deg
    )
  `;
  
  $card.querySelector('.glow').style.backgroundImage = `
    radial-gradient(
      circle at
      ${center.x * 2 + bounds.width/2}px
      ${center.y * 2 + bounds.height/2}px,
      #ffffff55,
      #0000000f
    )
  `;

  /*Image 2*/
  $card2.style.transform = `
    scale3d(1.07, 1.07, 1.07)
    rotate3d(
      ${center.y / 100},
      ${-center.x / 100},
      0,
      ${Math.log(distance)* 2}deg
    )
  `;
  
  $card2.querySelector('.glow').style.backgroundImage = `
    radial-gradient(
      circle at
      ${center.x * 2 + bounds.width/2}px
      ${center.y * 2 + bounds.height/2}px,
      #ffffff55,
      #0000000f
    )
  `;

   /*Image 3*/
   $card3.style.transform = `
   scale3d(1.07, 1.07, 1.07)
   rotate3d(
     ${center.y / 100},
     ${-center.x / 100},
     0,
     ${Math.log(distance)* 2}deg
   )
 `;
 
 $card3.querySelector('.glow').style.backgroundImage = `
   radial-gradient(
     circle at
     ${center.x * 2 + bounds.width/2}px
     ${center.y * 2 + bounds.height/2}px,
     #ffffff55,
     #0000000f
   )
 `;

  /*Image 4*/
  $card4.style.transform = `
    scale3d(1.07, 1.07, 1.07)
    rotate3d(
      ${center.y / 100},
      ${-center.x / 100},
      0,
      ${Math.log(distance)* 2}deg
    )
  `;
  
  $card4.querySelector('.glow').style.backgroundImage = `
    radial-gradient(
      circle at
      ${center.x * 2 + bounds.width/2}px
      ${center.y * 2 + bounds.height/2}px,
      #ffffff55,
      #0000000f
    )
  `;

   /*Image 5*/
   $card5.style.transform = `
   scale3d(1.07, 1.07, 1.07)
   rotate3d(
     ${center.y / 100},
     ${-center.x / 100},
     0,
     ${Math.log(distance)* 2}deg
   )
 `;
 
 $card5.querySelector('.glow').style.backgroundImage = `
   radial-gradient(
     circle at
     ${center.x * 2 + bounds.width/2}px
     ${center.y * 2 + bounds.height/2}px,
     #ffffff55,
     #0000000f
   )
 `;

  /*Image 6*/
  $card6.style.transform = `
    scale3d(1.07, 1.07, 1.07)
    rotate3d(
      ${center.y / 100},
      ${-center.x / 100},
      0,
      ${Math.log(distance)* 2}deg
    )
  `;
  
  $card6.querySelector('.glow').style.backgroundImage = `
    radial-gradient(
      circle at
      ${center.x * 2 + bounds.width/2}px
      ${center.y * 2 + bounds.height/2}px,
      #ffffff55,
      #0000000f
    )
  `;
}

/*Image 1*/
$card.addEventListener('mouseenter', () => {
  bounds = $card.getBoundingClientRect();
  document.addEventListener('mousemove', rotateToMouse);
});

$card.addEventListener('mouseleave', () => {
  document.removeEventListener('mousemove', rotateToMouse);
  $card.style.transform = '';
  $card.style.background = '';
});

 /*Image 2*/
$card2.addEventListener('mouseenter', () => {
    bounds = $card2.getBoundingClientRect();
    document.addEventListener('mousemove', rotateToMouse);
  });
  
  $card2.addEventListener('mouseleave', () => {
    document.removeEventListener('mousemove', rotateToMouse);
    $card2.style.transform = '';
    $card2.style.background = '';
  });

   /*Image 3*/
$card3.addEventListener('mouseenter', () => {
    bounds = $card3.getBoundingClientRect();
    document.addEventListener('mousemove', rotateToMouse);
  });
  
  $card3.addEventListener('mouseleave', () => {
    document.removeEventListener('mousemove', rotateToMouse);
    $card3.style.transform = '';
    $card3.style.background = '';
  });

   /*Image 4*/
$card4.addEventListener('mouseenter', () => {
    bounds = $card4.getBoundingClientRect();
    document.addEventListener('mousemove', rotateToMouse);
  });
  
  $card4.addEventListener('mouseleave', () => {
    document.removeEventListener('mousemove', rotateToMouse);
    $card4.style.transform = '';
    $card4.style.background = '';
  });

   /*Image 5*/
$card5.addEventListener('mouseenter', () => {
    bounds = $card5.getBoundingClientRect();
    document.addEventListener('mousemove', rotateToMouse);
  });
  
  $card5.addEventListener('mouseleave', () => {
    document.removeEventListener('mousemove', rotateToMouse);
    $card5.style.transform = '';
    $card5.style.background = '';
  });

   /*Image 6*/
$card6.addEventListener('mouseenter', () => {
    bounds = $card6.getBoundingClientRect();
    document.addEventListener('mousemove', rotateToMouse);
  });
  
  $card6.addEventListener('mouseleave', () => {
    document.removeEventListener('mousemove', rotateToMouse);
    $card6.style.transform = '';
    $card6.style.background = '';
  });


 