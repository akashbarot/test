<?php 
//$a = array("name"=>"akas","age"=>"25","srname"=>"barot") ;
$b[0] = array("akash","26","barot") ;
$b[1] = array("rinkal","25","gandhi") ;
echo "<pre>";

$k = count($b);

echo $i; 
$j=0;
//print_r($a);

//foreach($a as $key => $value)
//{
//echo $key."-".$value;
//echo"<br/>";
//}
for ($i=0; $i<=6; $i++)
{
         	
     	 echo $i."-". $b["$i"]["$j"];
      	 echo"<br/>";
		 $j++; 		
	
	
}

?>