<?php

	class Task
	{
			//
	}

	interface TaskStorageInterface
	{
		public function get($id);
		public function store(Task $task);
	}

	class MySqlDatabaseTaskStorage implements TaskStorageInterface
	{
		public function get($id)
		{
			//
		}

		public function store(Task $task)
		{

			//
		}

	}

