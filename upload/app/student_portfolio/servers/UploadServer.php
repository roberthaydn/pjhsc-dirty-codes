<?php

class UploadServer {

	private $_model;

	public static function Create() {
		return new UploadServer;
	}	
	
	private function __construct() {
		$this->setModel(UploadModel::Create());
	}

	public function createData($dataArr) { 
		$this->createQueryData($dataArr);
	}

	public function readData($portfolio) {
		$this->readQueryData($portfolio);
	}

	public function updateData() { 
		throw new \Exception('Not supported yet.'); 
	}

	public function deleteData() { 
		throw new \Exception('Not supported yet.'); 
	}

	private function createQueryData($dataArr) {

		$id 			= $this->getModel()->setID($dataArr[0])->getID();
		$filename 	 	= $this->getModel()->setFilename($dataArr[1])->getFilename();
		$fileuploaded 	= $this->getModel()->setFileUploaded($dataArr[2])->getFileUploaded();
		$extension 		= $this->getModel()->setExtension($dataArr[3])->getExtension();	
		$portfolio 		= $this->getModel()->setPortfolio($dataArr[4])->getPortfolio();	
		$studentid 		= $this->getModel()->setStudentID($dataArr[5])->getStudentID();	

		$sql = "INSERT INTO `student_portfolio` SET 
 					 `id`=:id,
 					 `filename`=:filename, 
 					 `fileuploaded`=:fileuploaded,
 					 `extension`=:extension,
 					 `portfolio`=:portfolio,
 					 `studentid`=:studentid";

 		$stmt = DB::Create()->getPDO()->prepare($sql);			 

		$db_id 				= $id;
		$db_filename 		= Sanitize::Escape($filename);
		$db_fileuploaded	= $fileuploaded;
		$db_extension		= $extension;
		$db_portfolio		= $portfolio;
		$db_studentid		= $studentid;

		$stmt->bindParam(':id', $db_id);
		$stmt->bindParam(':filename', $db_filename);
		$stmt->bindParam(':fileuploaded', $db_fileuploaded);
		$stmt->bindParam(':extension', $db_extension); 
		$stmt->bindParam(':portfolio', $db_portfolio); 
		$stmt->bindParam(':studentid', $db_studentid);
		$stmt->execute();
		//$this->getQueryDataError($stmt->errorInfo());
	}

	private function readQueryData($portfolio) {

		$sql = "SELECT * FROM `student_portfolio` WHERE `portfolio`=:portfolio ORDER BY `extension`";
		$stmt = DB::Create()->getPDO()->prepare($sql);
		$stmt->bindValue(':portfolio', $portfolio);
		$stmt->execute();

		if(!($stmt->rowCount() == null)) {

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				@$db_id 			= $this->getModel()->setID($row['Id'])->getID();
				$db_filename 		= $this->getModel()->setFilename($row['filename'])->getFilename();
				$db_fileuploaded 	= $this->getModel()->setFileUploaded($row['fileuploaded'])->getFileUploaded();
				$db_extension 		= $this->getModel()->setFileUploaded($row['extension'])->getFileUploaded();
				$db_portfolio 		= $this->getModel()->setFileUploaded($row['portfolio'])->getFileUploaded();
				$db_studentid 		= $this->getModel()->setFileUploaded($row['studentid'])->getFileUploaded();

				echo '<tr class="">';
				echo '<td>'.ucwords($db_filename).'</td>';
				echo '<td><img src="./upload_preview/'.$db_extension.'.jpg" alt="img" title="File" width="40" height="40"></td>';
				echo '<td><a href="./uploads/'.$db_fileuploaded.'" class="btn" target="_blank">Preview</a></td>';
				echo '<td><a href="./uploads/'.$db_fileuploaded.'" class="btn" download>Download</a></td>';
				echo '</tr>';	

			} 

		} else {
			echo '<tr><td>Nothing here...</td></tr>';
		}

		//$this->getQueryDataError($stmt->errorInfo());
	}

	private function updateQueryData() {}

	private function deleteQueryData() {}

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



