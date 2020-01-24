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
