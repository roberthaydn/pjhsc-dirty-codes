<?php 
namespace app\views {

	use app\db\ProfpicDB;

	class ProfpicView {	
		private $_model;

		public static function Create() {
			return new ProfpicView();
		}

		public function __construct() {
			$this->setModel(ProfpicDB::Create());
		}

		public function viewAddData() {}
		public function viewData($studentid) {
			return $this->getModel()->readData($studentid);
		}

		public function viewUpdateData($dataArr) {
			$this->getModel()->updateData($dataArr);
		}

		private function setModel($model) {$this->_model = $model;}
		private function getModel() {return $this->_model;}
	}
}

