<?php

/**
*=============================================================
* <traits.php>
* object oriented programming: Traits in PHP
*
* @author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 10th June 2019
* ============================================================
*/

trait FlightServices
{
	abstract public function seat();    
	abstract public function food();

	public function serviceXYZ()
	{
		echo __METHOD__.'<br>';
	}
}

trait FlightInfo
{
	public function airline($name)
	{
		echo 'Welcome to '. $name.'<br>';
	}

	public function ticketFare($cost)
	{
		echo 'Ticket Price: '. $cost .'<br>';
	}
	
	public function luggageWeight($weight)
	{
		echo 'Allowed Luggage Weight: '. $weight .'<br>';
	}              
}

class Economic
{
	use FlightInfo;
	use FlightServices;


	public function seat()
	{
		echo 'Seat: standard'.'<br>';
	}

	public function food()
	{
		echo 'Food: good'.'<br>';
	}
}

class Business
{
	use FlightInfo;
	use FlightServices;

	public function seat()
	{
		echo 'Seat: Luxurious'.'<br>';
	}

	public function food()
	{
		echo 'Food: Excellent'.'<br>';
	}
}

class FlightBooking
{    
	private $airline;
	private $cost = [];
	private $weight = [];
	
	public function setFlight($name, $weight = [], $cost = [])
	{
		$this->airline = $name;
		$this->weight = $weight;
		$this->cost = $cost;
	}
	
	protected function ticket($c)
	{
		$class = strtolower(get_class($c));
		$c->airline($this->airline) .'<br>';
		echo 'Class: '. strtoupper($class) .'<br>';
		$c->serviceXYZ();
		$c->seat();
      		$c->food();
		$c->luggageWeight($this->weight[$class]);
		echo '------------------------------------<br>';
		$c->ticketFare($this->cost[$class]);
	}

	public function confirmFlight($category)
	{	
		$category = new $category;
		$this->ticket($category);
	}    
}

$f = new FlightBooking();
$f->setFlight('Biman Bangladesh Airlines', ['economic' => '30 kg', 'business'=> '50 kg'], ['economic' => '$ 950', 'business'=> '$ 1500']);
$f->confirmFlight('Economic');
echo '<br>';
$f->confirmFlight('Business');

?>