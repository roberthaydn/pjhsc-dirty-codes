<?php 
namespace app\models {
	class ProfpicModel {
		private $_id, 
				$_picture, 
				$_studentID;

		public function Create() {
			return new ProfpicModel();
		}

		private function __construct() {}

		public function getID() {return $this->_id;}
		public function getPicture() {return $this->_picture;	}
		public function getStudentID() {return $this->_studentID; }

		public function setID($id) {$this->_id = $id; return $this;}
		public function setPicture($picture) {$this->_picture = $picture; return $this;}
		public function setStudentID($studentID) {$this->_studentID = $studentID; return $this;}

	}
}
