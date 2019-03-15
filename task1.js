"use strict";

/*
Используя конструкцию if..else, напишите код, который будет спрашивать: «Каково «официальное» название JavaScript?».
Если посетитель вводит «ECMAScript», то выводить «Верно!», если что-то другое – выводить «Не знаете? «ECMAScript»!».
 */

var answer = prompt('Каково «официальное» название JavaScript?');

if (answer === 'ECMAScript') {
	alert('Верно!');
} else {
	alert('Не знаете? «ECMAScript»!');
}
