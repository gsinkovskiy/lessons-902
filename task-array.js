"use strict";

// Задание 2. Создайте ассоциативный массив содержащий описание человека.
// Задайте поля: имя, возраст, пол, индивидуальный номер. Заполните массив. Выведите его в консоли.

// Добавьте в массив метод, который будет рассчитывать год рождения человека исходя из его
// возраста и возвращать его.


let human = {
	name: 'Вася',
	age: 35,
	gender: 'm',
	num: 123354,
};

console.log(human);

human.birthYear = function () {
	let today = new Date();
	let currentYear = today.getFullYear();

	return currentYear - this.age;
};

console.log(human.birthYear());


let animal = {
	age: 3
};

console.log(human.birthYear.apply(animal));


for (let prop in human) {
	if (typeof human[prop] === 'function') {
		alert(human[prop]())
	} else {
		alert(human[prop]);
	}
}
