<?php 
namespace app\controllers {

	use app\views\ProfpicView;

	class ProfpicController {

		private $_view;

		public static function Create() {
			return new ProfpicController;
		}	
		
		private function __construct() {
			$this->setView(ProfpicView::Create());
		}

		public function add() {
			throw new \Exception('Not supported yet.'); 
		}

		public function read($studentid) {
			return $this->getView()->viewData($studentid);
		}
		
		public function update($dataArr) {
			$this->getView()->viewUpdateData($dataArr);
		}
		public function delete() {
			throw new \Exception('Not supported yet.'); 
		}

		private function setView($view) {$this->_view = $view;}
		private function getView() {return $this->_view;}
	}
}
