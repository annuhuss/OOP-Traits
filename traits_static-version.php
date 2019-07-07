
<?php

/**
*=============================================================
* <traits_static-version.php>
* object oriented programming: Traits in PHP
*
* @author Muhammad Anwar Hussain<anwar_hussain.01@yahoo.com>
* Created on: 10th June 2019
* ============================================================
*/

trait FlightServices
{
	abstract static public function seat();    
	abstract static public function food();

	public static function serviceXYZ()
	{
		echo __METHOD__.'<br>';
	}
}

trait FlightInfo
{
	public static function airline($name)
	{
		echo 'Welcome to '. $name.'<br>';
	}

	public static function ticketFare($cost)
	{
		echo 'Ticket Price: '. $cost .'<br>';
	}
	
	public static function luggageWeight($weight)
	{
		echo 'Allowed Luggage Weight: '. $weight .'<br>';
	}              
}

class Economic
{
	use FlightInfo;
	use FlightServices;

	public static function seat()
	{
		echo 'Seat: standard'.'<br>';
	}

	public static function food()
	{
		echo 'Food: good'.'<br>';
	}
}

class Business
{
	use FlightInfo;
	use FlightServices;

	public static function seat()
	{
		echo 'Seat: Luxurious'.'<br>';
	}

	public static function food()
	{
		echo 'Food: Excellent'.'<br>';
	}
}

class FlightBooking
{    
	private static $airline;
	private static $cost = [];
	private static $weight = [];
	
	public static function setFlight($name, $weight = [], $cost = [])
	{
		self::$airline = $name;
		self::$weight = $weight;
		self::$cost = $cost;
	}

	public static function confirmFlight($c)
	{
		$class = strtolower($c);
		$c::airline(self::$airline) .'<br>';
		echo 'Class: '. strtoupper($c) .'<br>';
		$c::serviceXYZ();
		$c::seat();
      		$c::food();
		$c::luggageWeight(self::$weight[$class]);
		echo '------------------------------------------------<br>';
		$c::ticketFare(self::$cost[$class]);
	} 
}

FlightBooking::setFlight('Biman Bangladesh Airlines', ['economic' => '30 kg', 'business'=> '50 kg'], ['economic' => '$ 950', 'business'=> '$ 1500']);
FlightBooking::confirmFlight('Economic');
echo '<br>';
FlightBooking::confirmFlight('Business');

?>
