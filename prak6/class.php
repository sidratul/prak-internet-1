<?php
class MyDestructableClass {
   function __construct() {
       print "In constructor \n";
       $this->name = "MyDestructableClass";
   }

   function __destruct() {
       print "Destroying ".$this->name."\n";
   }

   function coba(){
   		echo "mengerjakan function coba";
   		$this->name="coba";
   }

   function gantiNama($nama){
   		$this->name=$nama;
   }
}

$obj = new MyDestructableClass();
echo "<br>";
$obj->coba();
echo "<br>";
$obj->gantiNama("MyDestructableClass");
?>