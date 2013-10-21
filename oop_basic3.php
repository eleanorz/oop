
<?php 

// Create a class called 'HTML_Helper' that has the following two methods:
// print_table -> takes an array that has multiple rows of information (imagine you queried the database and got all the list of users where each row has information like ["first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"]. This functions takes this multi-dimensional arrays and prints out a beautiful html table with all the information in it. Make the keys appear in the first row (e.g. First Name, Last Name, Nick Name) and make the values of each row appear in the subsequent rows (e.g. Michael, Choi, Sensei).
// print_select -> as the input, this method takes an array AND the name that should be used for the select tag; the method returns a string that is formatted in HTML. For example, say that $sample_array = ("CA", "WA", "UT", "TX", "AZ", "NY") and we call print_select("state", $sample_array) method. This would return a string that looks like: "<select name="state"><option value="CA">CA</option><option value="WA">WA</option>...</select>"
// IMPORTANT - usually when you create a class, you don't normally have the methods in the class generate html output. For this assignment though, you will make an exception and have the methods in the class generate html output directly. Classes that are created to help the rendering of html are often called 'Helpers' classes.

 class HTML_Helper
 {
 	var $arr = [];
 	
 	function __construct($user_array)
 	{
 		$this->arr = $user_array;
 	}

 	function print_table($array){
 		//this foreach loop declares all the headers
 		echo "<tr>";
 		foreach ($array[0] as $key => $value) {
 			echo "<th> {$key} </th>";
 		}
 		echo "</tr>";
 		//this foreach loop fills all the info
 		foreach ($this->arr as $fruit => $product) {
 			echo "<br>".$product;
 		}
 	}

 	function print_select($user_selector){


 		echo "I am inside print_select";


 	}
 } 

 $sample_array=array('person one'=>array("first_name" => "eleanor", "last_name" => "zimm", "nick_name" => "unicorn"), 'person two'=>array("first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"));

 

 $test=new HTML_Helper($sample_array);

 $test->print_table();
 $test->print_select("juices");


 ?>