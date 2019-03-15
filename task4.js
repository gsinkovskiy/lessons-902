let result;

if (a + b < 4) {
	result = 'Мало';
} else {
	result = 'Много';
}

result = a + b < 4 ? 'Мало' : 'Много';



var message = (login == 'Вася') ? 'Привет' :
	(login == 'Директор') ? 'Здравствуйте' :
		(login == '') ? 'Нет логина' :
			'';
