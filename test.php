<?php 

$myarray = array(
	"key" =>  "value",
	"key1" => "value1",
	"key2" => "value2",
	"key3" => "value3",
	"key4" => "value4"
);


class person {

	public function __construct($name, $lastname, $age){
       	$this->name = $name;
		$this->lastname = $lastname;
		$this->age = $age;
   }

	function showName() {
		return "de naam is: ". $this->name . " achternam: " . $this->lastname . " leeftijd: " . $this->age;
	}
}


$anass = new person("anass", "de wit", 18);

$steven = new person("steven", "de briijn", 17);

$anass->weapon = $ak74;

echo ($anass->showName() . "<br>");

foreach ($myarray as $key => $value) {
	echo('de key is: ' . $key . ' en de value is '. $value .' <br>');
}
 ?>