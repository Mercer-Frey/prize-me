"use strict";

// ограничивает повторное выполнение функции
function debounce(f, ms) {
  var isCooldown = false;
  return function () {
    if (isCooldown) return;
    f.apply(this, arguments);
    isCooldown = true;
    setTimeout(function () {
      return isCooldown = false;
    }, ms);
  };
};

// ограничивает колличество символов инпута
function checkInputLength(n) {
	if(this.value.length > n){
		this.value = this.value.substr(0, n);
		chips(`Максимальное число символов ${n}`, 'warning', 3000);
	}else this.setAttribute('value', this.value);
}

// проверяет валидность номера по типу +38 011 222-33-34
function checkNumber(number){
	let expr3 = /^(\+38) [\d]{2,3}\ [\d]{2,3}-[\d]{2,3}-[\d]{2,3}$/g;
	if(expr3.test(number)){
		return true;
	}else return false;
}

// возвращает высоту окна
let ua = navigator.userAgent.toLowerCase();
let isOpera = (ua.indexOf('opera')  > -1);
let isIE = (!isOpera && ua.indexOf('msie') > -1);
function getDocumentHeight() {
  return Math.max(document.compatMode != 'CSS1Compat' ? document.body.scrollHeight : document.documentElement.scrollHeight, getViewportHeight());
}
function getViewportHeight() {
  return ((document.compatMode || isIE) && !isOpera) ? (document.compatMode == 'CSS1Compat') ? document.documentElement.clientHeight : document.body.clientHeight : (document.parentWindow || document.defaultView).innerHeight;
}