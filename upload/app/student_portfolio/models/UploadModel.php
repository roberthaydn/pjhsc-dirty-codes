<?php 

class UploadModel {
	private $_id, 
			$_fileName, 
			$_fileUploaded, 
			$_fileExtension, 
			$_studentPortfolio, 
			$_studentID;

	public function Create() {
		return new UploadModel();
	}

	private function __construct() {}

	public function getID() {return $this->_id;}
	public function getFilename() {return $this->_fileName;	}
	public function getFileUploaded() {return $this->_fileUploaded;	}
	public function getExtension() {return $this->_fileExtension;}
	public function getPortfolio() {return $this->_studentPortfolio;}
	public function getStudentID() {return $this->_studentID;}

	public function setID($id) {$this->_id = $id; return $this;}
	public function setFilename($filename) {$this->_fileName = $filename; return $this;}
	public function setFileUploaded($fileUploaded) {$this->_fileUploaded = $fileUploaded; return $this;}
	public function setExtension($fileExtension) {$this->_fileExtension = $fileExtension; return $this;}
	public function setPortfolio($portfolio) {$this->_studentPortfolio = $portfolio; return $this;}
	public function setStudentID($studentID) {$this->_studentID = $studentID; return $this;}
}

