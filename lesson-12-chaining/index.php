<?php

	class Request{
		protected $quers;
		protected $limit;

		public function setQuers($quers){
			$this->quers = $quers;
			return $this;
		}

		public function setLimit($limit = 100){
			$this->limit = $limit;
			return $this;
		}

		public function getQuers(){
			return $this->quers;
		}

		public function getLimit(){
			return $this->limit;
		}
	}

	$request = new Request;


	var_dump($request->setQuers(1)->setLimit(2)->getQuers());
	var_dump($request->setQuers(1)->setLimit(2)->getLimit());