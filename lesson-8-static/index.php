<?php


	class User
	{
		public static $username;
	}

	$user1 = new User;

	$user1::$username = '1111';

	$user2 = new User;

	$user2::$username = '2222';

	echo '<br>';

	echo $user1::$username; // result '2222'