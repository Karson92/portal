<?php

class User {

	public $name;
	public $surname;
	public $email;

	public function __construct($name, $surname) {

		$this->name = $name;
		$this->surname = $surname;
	}
	public function getLogin() {
		$firstLetter = substr($this->name, 0, 1);
		$otherLogin = $this->surname;
		$login = $firstLetter.$otherLogin;
		return $login;
	}
}


$view = new User('Karol', 'Kulik');
echo $view->getLogin();



?>