<?php 
// Create a class called 'HTML_Helper' that has the following two methods:
// print_table -> takes an array that has multiple rows of information (imagine you queried the database and got all the list of users where each row has information like ["first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei"]. This functions takes this multi-dimensional arrays and prints out a beautiful html table with all the information in it. Make the keys appear in the first row (e.g. First Name, Last Name, Nick Name) and make the values of each row appear in the subsequent rows (e.g. Michael, Choi, Sensei).
// print_select -> as the input, this method takes an array AND the name that should be used for the select tag; the method returns a string that is formatted in HTML. For example, say that $sample_array = ("CA", "WA", "UT", "TX", "AZ", "NY") and we call print_select("state", $sample_array) method. This would return a string that looks like: "<select name="state"><option value="CA">CA</option><option value="WA">WA</option>...</select>"
// IMPORTANT - usually when you create a class, you don't normally have the methods in the class generate html output. For this assignment though, you will make an exception and have the methods in the class generate html output directly. Classes that are created to help the rendering of html are often called 'Helpers' classes.

	 class HTML_Helper
	 {
	 	var $arr = [];
	 	
	 	function __construct(){}

	 	function print_table($array)
	 	{
	 		echo "<h1>Print Table Method</h1>";
	 		echo "<table style='border:1px solid green;'>";
	 		foreach ($array[0] as $key => $value){
	 			echo "<th>".$key." </th>";
	 		}

	 		foreach ($array as $key => $value) {
	 			echo "<tr>";
	 				foreach ($value as $subkey => $subvalue) {
	 					echo "<td>".$subvalue."</td>";
	 				}
	 			echo "</tr>";
	 		}
	 		echo "</table>";
	 	}

	 	function print_select($user_selector, $array){
	 		echo "<h1>Print Select Method</h1>";
	 		echo "<select name=".$user_selector.">";
	 		foreach ($array as $key => $value) {
	 			echo "<option value=".$value.">".$value."</option>";
	 		}
	 		echo "</select>";
	 	}
	 } 

	 $sample_array=array(
	 	array("first_name" => "eleanor", "last_name" => "zimm", "nick_name" => "unicorn"),  array("first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei")	); 
	 $sample_array2=array('pumpkin spice latte', 'pumpkin pie', 'pumpkin cookies', 'pumpkin squash casserole', 'pumpkin croissants', 'pumpkin shaped reeses cups');

	 $test=new HTML_Helper();
	 $test->print_table($sample_array);
	 $test->print_select("types of pumpkin items",$sample_array2);
 ?>