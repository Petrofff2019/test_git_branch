
	<?php
    //ini_set('display_errors', 1);
    //ini_set('display_startup_errors', 1);
    error_reporting(0);  //1-> turn on errors; 0 -> 
	
	
	
	
	
	
	//Your exception Class, will catch anything you throw in try{} catch{} block. To trigger it u must in format=> {throw new customExceptionX('text')} & {catch (customExceptionX $e)}
	//Makes sure that script will go on after you throw the Exception in try{} catch{}.
	//Only fire if you throw the Exception in try{} catch{}. Won't help/won't fire even if fatal error happens inside the try{} catch{} 
	//Alternatively, u can not to write this your custom Exception Class and use build-in Exception in format=> {throw new Exception("text");} {catch(Exception $e)}
	// **************************************************************************************
    // **************************************************************************************
    //                                                                                     **
	class customExceptionX extends Exception {
      public function errorMessage() {
        //error message
        $errorMsg = '<div class="my-class">' .
		      '<h3>You have got an ERROR (message from your Custom set Exception) </h3>' .
			  '<p><b>Your Error message is below: </b></p>' .
     		  ' Error is on line ' . $this->getLine().
			  '</br> in '.$this->getFile(). 
              '</br> YOUR CUSTOM TEXT is => <b>'.$this->getMessage().'</b> </div>';
        return $errorMsg;
      }
    }
	// **                                                                                  **
    // **************************************************************************************
    // **************************************************************************************
	//END Your exception Class
