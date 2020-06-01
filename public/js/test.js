'use strict';

// コンソールにHello World!を出力する
console.log('Hello World!');

// BMIの計算をしている！
const heightMeter = 1.7;
const weight = 65;
const bmi = weight/(heightMeter * heightMeter);
console.log(bmi);

document.getElementById('test').onclick=function(){
    this.innerHTML = 'change!!';
}

// アニメーションのテスト
var elem = document.getElementById('elem');
elem.addEventListener('click',function(){
  anime({
    targets: elem,
    translateX: 250
  })
})

anime({
    targets: '.line-drawing-demo .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutSine',
    duration: 1500,
    delay: function(el, i) { return i * 250 },
    direction: 'alternate',
    loop: true
  });

  // テキストを囲うボックス
let box_class = "title";
// 分割後のテキストを囲うボックス
let char_class = "char-animation";

// テキストを囲うボックスの取得（複数可能）
let item = document.querySelectorAll("." + box_class);
// ボックス毎の処理
for (var i = 0; i < item.length; i++) {
	// 文字の分割
	item[i].innerHTML = item[i].innerText.replace(/[^\x00-\x80]|(\w)/g, "$&");
}

anime({
    targets: '.skew',
    translateX: [
      { value: 250, duration: 1000, delay: 500 },
      { value: 0, duration: 1000, delay: 500 }
    ],
    translateY: [
      { value: -40, duration: 500 },
      { value: 40, duration: 500, delay: 1000 },
      { value: 0, duration: 500, delay: 1000 }
    ],
    scaleX: [
      { value: 4, duration: 100, delay: 500, easing: 'easeOutExpo' },
      { value: 1, duration: 900 },
      { value: 4, duration: 100, delay: 500, easing: 'easeOutExpo' },
      { value: 1, duration: 900 }
    ],
    scaleY: [
      { value: [1.75, 1], duration: 500 },
      { value: 2, duration: 50, delay: 1000, easing: 'easeOutExpo' },
      { value: 1, duration: 450 },
      { value: 1.75, duration: 50, delay: 1000, easing: 'easeOutExpo' },
      { value: 1, duration: 450 }
    ],
    easing: 'easeOutElastic(1, .8)',
    loop: true
  });
