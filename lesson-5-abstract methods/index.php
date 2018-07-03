<?php

	abstract class Service
	{
		abstract function getRedirectUri();
	}



	class FacebookService extends Service
	{
		public function getRedirectUri()
		{
			return 'uri';
		}

	}

	class TwitterService extends Service
	{
		public function getRedirectUri()
		{
			return 'uri';
		}

	}

	class GoogleService extends Service
	{
		public function getRedirectUri()
		{
			return 'uri';
		}
	}


	$google = new GoogleService;
	echo $google->getRedirectUri();