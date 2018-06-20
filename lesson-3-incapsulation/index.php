<?php

	class User
	{
		protected $email; //

		public function setEmail($email)
		{
			//var_dump($this);
			$this->email = $email;
		}

		public function getEmail()
		{
			return strtoupper($this->email);
		}
	}

	$user = new User;

	$user->setEmail('antonycourse@mail.com');

	//var_dump($user);

	//echo $user->getEmail();
