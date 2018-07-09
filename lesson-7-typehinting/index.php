<?php

	class Calculator
	{
		protected $total = 0;

		public function add(array $values)  //or int
		{

			foreach($values as $values){

				$this->total += $values;
			}

		}

		public function total()
		{
			return $this->total;

		}

	}


	$calculator = new Calculator();


	$calculator->add([2,4,5]);

	echo $calculator->total();

	//---------------------------------------------------------------------------------------------------------



class Item
{
	protected $cost = 0;

	public function setCost($cost)
	{

		$this->cost = $cost;


	}

	public function getCost()
	{

		return $this->cost;


	}

}

class Cart
{

	protected $items =[];

	public function add($item){

		$this->items[] = $item;
	}


	public function total()
	{
		$total = 0;

		foreach($this->items as $item)
		{


			$total += $item->getCost();
		}

		return $total;


	}


}



$item1 = new Item;

$item1->setCost(1);


$item2 = new Item;

$item2->setCost(2.5);

$cart = new Cart();

$cart->add($item1);
$cart->add($item2);

echo $cart->total();


//----------------------------------------------------------------

	<?php


interface ItemInterface{
	public function setCost(float $cost);
	public function getCost();

}

class Item implements ItemInterface //
{
	protected $cost = 0;

	public function setCost(float $cost)
	{
		$this->cost = $cost;
	}

	public function getCost()
	{
		return $this->cost;
	}

}

class Cart
{

	protected $items =[];

	public function add(ItemInterface $item){ // Item item

		$this->items[] = $item;
	}


	public function total()
	{
		$total = 0;

		foreach($this->items as $item)
		{
			$total += $item->getCost();
		}

		return $total;
	}
}



$item1 = new Item;

$item1->setCost(1);


$item2 = new Item;

$item2->setCost(2.5);


$cart = new Cart();

$cart->add($item1);
$cart->add($item2);

echo $cart->total();