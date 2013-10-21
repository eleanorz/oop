<?php 

/**
 * 
 */
 class person
 {
 	var $name;  //these are called 'properties'
 	var $height;  //var implies it is public
 	protected $social_insurance;
 	private $pinn_number = '86';
 	
 	function __construct($persons_name){
 		$this->name = $persons_name;
 	}


 	function get_name(){
 		return $this->name;
 	}

 	private function get_pinn_number(){
 		return $this->$pinn_number;
 	}

 	protected function set_name($new_name){
 		if (name != 'jimmy two guns'){
 			$this->name = strtoupper($new_name);
 		}
 	}

 } 


 /**
 * 
 */
 class employee extends person
 {
 	protected function set_name($new_name){
 		if ($new_name =='stefan lamp') {
 			$this->name = $new_name;
 		}
 	}
 	
 	function __construct($employee_name)
 	{
 		$this->set_name($employee_name);
 	}



 }


 ?>