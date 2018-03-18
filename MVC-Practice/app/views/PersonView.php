<?php
/*
  * Version: 0.1
  * Author: Abriel, Ronnel
  * Last Modified Author: Ronnel
  * Last Modified : Sept. 29, 09:35pm
  * Description:
      Serves as the View for the Person.
  * Changes: 
 	 
  * Notes:

  * Warning:
*/
	include_once('IPersonView.php');
	class PersonView implements IPersonView {

		private $_personModel;

		public function setPersonFirstNameData($personModel) {
			$this->_personModel = $personModel;
		}

		public function setPersonLastnameData($personModel) {
			$this->_personModel = $personModel;
		}

		public function getPersonModel() {
			return $this->_personModel;
		}
		/*
		* getter Encoded
		*/
		public function EncodedFirstNameData() {
			return $this->getPersonModel()->getFirstName();
		}

		public function EncodedLastnameData() {
			return $this->getPersonModel()->getLastname();
		}
	}

?>