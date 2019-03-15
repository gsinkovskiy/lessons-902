"use strict";

// Есть объект salaries с зарплатами. Напишите код, который выведет сумму всех зарплат.
// Если объект пустой, то результат должен быть 0.

let salaries = {
	"Вася": 100,
	"Петя": 300,
	"Даша": 250
};

let summ = 0;

for (let name in salaries) {
	summ += salaries[name];
}

alert(summ);
