<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
session_start();


/**
 * @param $data
 *
 * @throws Exception
 */
function setData($data) {
	if (!is_array($data)) {
		throw new InvalidArgumentException("data is not array");
	}

	if (!isset($data['test'])) {
		throw new LogicException();
	}

	$_SESSION['data'] = $data['test'];
}

try {
	try {
		setData(['notest' => 'test']);
	} catch (InvalidArgumentException $exception) {
		echo 'Нужно передавать массив ' . $exception->getMessage();
	}
} catch (LogicException $exception) {
	echo 'Нет ключа test в массиве ' . $exception->getMessage();
}


