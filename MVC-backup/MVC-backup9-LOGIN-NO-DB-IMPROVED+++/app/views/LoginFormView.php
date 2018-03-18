<?php 

	class LoginFormView
	{	
		private $_errMessage;

		public function encodedIndexUrl() {
			$INDEXURL = 'index.php';
			header('Location: '.$INDEXURL);
		}

		public function encodedDisplayErrMessage() {
?>
		<span style="color:#fff;background-color:red;padding:8px;">Incorrect username or password!</span>
<?php				
		}
	}
 ?>


