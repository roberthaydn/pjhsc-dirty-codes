<?php 

class UploadController {

	private $_view;

	public static function Create() {
		return new UploadController;
	}	
	
	private function __construct() {
		$this->setView(UploadView::Create());
	}

	public function add($dataArr) {
		$this->getView()->viewAddData($dataArr);
	}

	public function read($portfolio) {
		$this->getView()->viewData($portfolio);
	}

	public function update() {}

	public function delete() {}

	private function setView($view) {$this->_view = $view;}
	private function getView() {return $this->_view;}
}

