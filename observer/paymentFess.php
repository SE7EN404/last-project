<?php
// include_once("./observer.php"); 
require_once("./observer.php");



class PaymentFees{

private $observers  = array(); 



private $fees_state = 0 ; 



public function getState(){
return $this->fees_state ;
}



public function setState($fees_state){
$this->fees_state = $fees_state ;
$this->notifyAllObservers() ;
}



public function attach($obs = new Observer){
    array_push($this->observers,$obs);
}




public function notifyAllObservers()
{

    $num  = count($this->observers) ;
    
    for($x =0;$x<=$num;$x++){


        $this->observers[$x] = new Observer() ; 
        
        $this->observers[$x]->update() ;
    }
}


}














?>