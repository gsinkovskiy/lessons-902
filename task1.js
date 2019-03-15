"use strict";

// Создайте функцию isEmpty(obj), которая возвращает true, если в объекте нет свойств и
// false – если хоть одно свойство есть.

function isEmpty(obj) {
	for (var prop in obj) {
		return false;
	}

	return true;
}

var schedule = {};

alert( isEmpty(schedule) ); // true

schedule["8:30"] = "подъём";

alert( isEmpty(schedule) ); // false
