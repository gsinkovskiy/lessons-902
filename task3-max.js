"use strict";

// Есть объект salaries с зарплатами. Напишите код, который выведет имя сотрудника,
// у которого самая большая зарплата.
//
// Если объект пустой, то пусть он выводит «нет сотрудников».

let salaries = {
	"Вася": 100,
	"Петя": 300,
	"Даша": 250
};

let maxSalary = -Infinity;
let maxName;

for (let name in salaries) {
	if (salaries[name] > maxSalary) {
		maxSalary = salaries[name];
		maxName = name;
	}
}

if (!maxName) {
	alert('нет сотрудников');
} else {
	alert(maxName);
}
