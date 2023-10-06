'use strict';

{
  console.log('わー');
  // console.log(choice.id);

//   document.addEventListener("DOMContentLoaded", function() {
//     console.log(choice);
// });

  let a0 = document.getElementsByClassName('answer-0');
  let a1 = document.getElementsByClassName('answer-1');

  // console.log(a0);
  // console.log(a1);

  for (let i = 0; i < a0.length; i++) {//step2
    a0[i].addEventListener("click", function() {//step3
      // alert('不正解');
      console.log('不正解');
      a0[i].classList.add('wrong');
    });
  }

  for (let i = 0; i < a1.length; i++) {//step2
    a1[i].addEventListener("click", function() {//step3
      // alert('正解');
      console.log('正解');
      a1[i].classList.add('correct');
    });
  }
  // a0.forEach(a0e => {
  //   a0e.addEventListener('click', () => {
  //     console.log('正解');
  //   });
  // });

  // a1.forEach(a1e => {
  //   a1e.addEventListener('click', () => {
  //     console.log('不正解');
  //   });
  // });
}