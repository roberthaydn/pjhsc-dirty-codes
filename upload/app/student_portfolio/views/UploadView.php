<?php 

class UploadView
{	
	private $_model;

	public static function Create() {
		return new UploadView();
	}

	public function __construct() {
		$this->setModel(UploadServer::Create());
	}

	public function viewAddData($dataArr) {
		$this->getModel()->createData($dataArr);
	}

	public function viewData($portfolio) {
		$this->getModel()->readData($portfolio);
	}

	private function setModel($model) {$this->_model = $model;}
	private function getModel() {return $this->_model;}
}


