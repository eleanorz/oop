<?php 
/**
 * Create a class called Car. In the constructor, allow the user to specify the following attributes: price, speed, fuel, mileage. If the price is greater than 10,000, set the tax to be 15%. Otherwise set the tax to be 12%. Create five different instances of the class Car. In the class have a method called Display_all() that returns all the information about the car as a string. In your constructor, call this Display_all method() to display information about the car when a new car is created. 
 */
 class Car
 {
 	var $price = 0;
 	var $speed = 0;
 	var $fuel = 0;
 	var $mileage = 0;
 	var $tax = 12;
 	
 	function __construct($user_price, $user_speed, $user_fuel, $user_mileage)
 	{
 		$this->price=$user_price;
 		$this->speed=$user_speed;
 		$this->fuel=$user_fuel;
 		$this->mileage=$user_mileage;

 		if ($this->price > 10000) {
 			$this->tax = 15;
 		}
 	}

 	function Display_all(){
 		echo "<h2 style='color:red'>Listing</h2>";
 		echo '<br>Price is: $'.$this->price."<br>";
 		echo 'Tax rate on the vehicle is:'.$this->tax.'% <br>';
 		echo 'Total price is: $'.$this->price*(($this->tax +100)/100)."<br>";
 		echo 'Top speed is:'.$this->speed." mph <br>";
 		echo 'MPG is: '.$this->fuel." miles per gallon (highway)<br>";
 		echo 'Previous mileage is: '.$this->mileage."<br>";
 		echo "<br><br><br>";
 	}

 } 

$lambo = new Car(500000, 150, 15, 2);
$yugo = new Car(700, 65, 25, 200000);

$lambo->Display_all();
$yugo->Display_all();

 ?>