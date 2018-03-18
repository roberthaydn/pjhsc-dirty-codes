<?php
namespace app\db {

	use \PDO;
	use app\models\ProfpicModel;
	use app\lib\db\DB;
	use app\lib\sanitize\Sanitize;

	class ProfpicDB {

		private $_model;

		public static function Create() {
			return new ProfpicDB;
		}	
		
		private function __construct() {
			$this->setModel(ProfpicModel::Create());
		}

		public function createData() { 
			throw new \Exception('Not supported yet.'); 
		}

		public function readData($studentid) {
			return $this->readQueryData($studentid);
		}

		public function updateData($dataArr) { 
			$this->updateQueryData($dataArr);
		}

		public function deleteData() { 
			throw new \Exception('Not supported yet.'); 
		}

		private function createQueryData() {
			throw new \Exception('Not supported yet.'); 
		}

		private function readQueryData($studentid) {
			//return 'hello';
			
			$sql = "SELECT `picture` FROM `student_profpic` WHERE `studentid`=:studentid";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':studentid', $studentid);
			$stmt->execute();

			if(!($stmt->rowCount() == null)) 
				return ($row = $stmt->fetch(PDO::FETCH_ASSOC)) ? $this->getModel()->setPicture($row['picture'])->getPicture() : null;
			else 
				return '';
			//$this->getQueryDataError($stmt->errorInfo());		
		}

		private function updateQueryData($dataArr) {

			$sql = "UPDATE `student_profpic` SET `picture`=:picture WHERE `studentid`=:studentid";

			$stmt = DB::Create()->getPDO()->prepare($sql);

			$picture = $this->getModel()->setPicture($dataArr[1])->getPicture();
			$studentid = $this->getModel()->setStudentID($dataArr[2])->getStudentID();

			$stmt->bindParam(':picture', $picture); 
			$stmt->bindParam(':studentid', $studentid); 
			$stmt->execute();
			//$this->getQueryDataError($stmt->errorInfo());
		}

		private function deleteQueryData() {
			throw new \Exception('Not supported yet.'); 
		}

		private function getQueryDataError($error) {
			echo '<pre>';
			print_r($error);
			echo '</pre>';
		}

		private function getModel() {
			return $this->_model;
		}

		private function setModel($model) {
			$this->_model = $model;
		}
	}
}


