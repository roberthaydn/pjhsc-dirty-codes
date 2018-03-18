<?php
    /**
    *
    * Serves as the Sign In view.
    *
    * @version 0.1
    * @author Abriel I, Ronnel R.
    */
	class SignInView{
    	function getEncodedIndex(){
            /*commented on test.*/
    		header('Location: Main.php');
    	}	
		function getEncodedDisplayErrorMessage(){
			echo 'err';
		}
    }