<?php 
class Bx{


public function Add($num1,$num2){

     $a=0;
     $b=0;

       for($i=0;$i<$num1;$i++){

           $a+=$i;
       }
    
         for($i=0;$i<$num2;$i++){

           $b+=$i;
       }

     return $a+$b;




 }


}

//类外调用

$obj = new Bx();

$aa = $obj->Add(3,10);
echo $aa;

 ?>