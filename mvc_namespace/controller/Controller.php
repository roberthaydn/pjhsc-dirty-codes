<?php
	namespace controller {

		use models\Model;
		use view\View;

		class Controller {
			function __construct () {
				$model = new Model();
				$view = new View();
			}
		}	
	}
?>