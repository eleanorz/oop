<?php  
// 	Create a class called Animal with the following attributes: name, and health. Give the animal following three methods: walk, run, and displayHealth.  Give a new animal a health of 100 when it gets created.  When a walk method is invoked, have the health decrease by 1. When a run method is involved, have the health decrease by 5.  When a displayHealth method is invoked, display on screen the name of the Animal and the health.
// Create an instance of the animal called 'animal' and have this animal walk three times, run twice, and have it display its health.
// Now, create another class called Dog that inherits everything that the Animal does and have, but 1) have the default health by 150 and 2) add a new method called pet, which when invoked, increase the health by 5.  Have the Dog walk three times, run twice, petted once, and have it display its health.
// Now, create another classed called Dragon that inherits everything that the Animal does and have, but 1) have the default health be 170 and 2) add a new method called fly, which when invoked, decreased the health by 10.  Have the Dragon walk three times, run twice, fly twice, and have it display its health.  When the Dragon's displayHealth function is called have it say 'this is a dragon!' before it displays the default information (make sure you still call the parent's displayHealth function).
// Now for the first instance of the animal (instance called 'animal'), try calling a method 'fly' or 'pet' and make sure it doesn't work. :)
// 

class Animal
{
	var $name;
	var $health;
	
	function __construct($input_name)
	{
		$this->name=$input_name;
		$this->health=100;
	}
	function displayHealth(){
		echo "<h1>Display Health</h1>";
		echo "<h2 style='color:red'>".$this->name.': '.$this->health." points</h2>";
		return $this;
	}
	function walk($i=1){
		for ($j=0; $j < $i; $j++) { 
			$this->health=$this->health-1;
			echo "<h1 style='color: blue'>Walking!</h1>";
		}
		return $this;
	}
	function run($i=1){		
		for ($j=0; $j < $i; $j++) { 
			$this->health=$this->health-5;
			echo "<h1 style='color: purple'>Running!</h1>";
		}
		return $this;
	}
}

$char=new Animal("charazard");
$char->walk(1);
$char->run();


class Dog extends Animal
{

	function __construct($name){
		parent::__construct($name);
		$this->health=150;
	}
	
	function pet(){
		$this->health=$this->health+5;
		return $this;
	}
}

class Dragon extends Animal
{
	
	function __construct($name)
	{
		parent::__construct($name);
		$this->health=170;
	}

	function fly($i=1){
		for ($j=0; $j < $i; $j++) { 
			$this->health=$this->health-10;
			echo "<h1 style='color: green'>Flying!</h1>";
		}
		return $this;
	}
}

$fido=new Dog("Fido");
$fido->walk()->walk(10)->displayHealth()->run()->run(2)->pet()->pet()->displayHealth();

$puff=new Dragon("Puff the Magic Dragon");
$puff->fly(5)->walk(3)->run(3)->displayHealth();

?>