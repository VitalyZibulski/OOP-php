<?php

class User
{
	public $username = 'antony';

	public function fullName()
	{
		return 'Antony Irwini';
	}

	public function avatar($size = 80)
	{
		return $size;
	}
}

$user = new User;

echo $user->avatar(60);