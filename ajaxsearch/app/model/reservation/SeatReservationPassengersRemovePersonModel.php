<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\reservation\SeatReservationPassengersModel;
	use app\lib\validation\factory\Input;

	class SeatReservationPassengersRemovePersonModel {

		private $_model;

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_fare,
				$_account_id,
				$_username,
				$_firstname,
				$_lastname,
				$_destination,
				$_date,
				$_state;

		public static function Create() : SeatReservationPassengersRemovePersonModel {
			return new SeatReservationPassengersRemovePersonModel;
		}

		private function __construct() {
			$this->_model = SeatReservationPassengersModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() 
		{
			throw new \Exception('Not supported yet.'); 
		}

		public function readData() 
		{
			throw new \Exception('Not supported yet.');
		}

		public function updateData($id) 
		{
			$empty = 'empty';
			$this->_account_id 	= $this->_model->setAccountID('0')->getAccountID();
			$this->_username 	= $this->_model->setUsername($empty)->getUsername(); 
			$this->_firstname 	= $this->_model->setFirstname($empty)->getFirstname(); 
			$this->_lastname 	= $this->_model->setLastname($empty)->getLastname(); 
			$this->_destination = $this->_model->setDestination($empty)->getDestination(); 
			$this->_date 		= $this->_model->setDate($empty)->getDate();
			
			/*$seat_reservation_id = '236';
			$fare = '100';
			$passengers = 1;*/

			$sql = "UPDATE `tbl_seat_reservation_passengers`
					SET `account_id`=:account_id,
						`username`=:username, 
						`firstname`=:firstname, 
						`lastname`=:lastname,
						`destination`=:destination,
						`date`=:xdate
					WHERE `id`=:id";

			$stmt = DB::Create()->getPDO()->prepare($sql);	

			if(Input::IsIssetPost('id')) 
	 		{
				$stmt->bindParam(':id', $id);
				$stmt->bindParam(':account_id', $this->_account_id);
				$stmt->bindParam(':username', $this->_username);
				$stmt->bindParam(':firstname', $this->_firstname);
				$stmt->bindParam(':lastname', $this->_lastname);
				$stmt->bindParam(':destination', $this->_destination);
				$stmt->bindParam(':xdate', $this->_date);
				$stmt->execute();			
			}
			/*echo '<pre>';
			print_r($stmt->errorInfo());
			echo '</pre>';*/
			//remove
			//tbl_seat_reservation
			/*$updateSeatReservation = "UPDATE `tbl_seat_reservation` 
				SET 
				`passengers`=`passengers`-:passengers,
				`income`=`income`-:income
				WHERE `id`=:seat_reservation_id";

			$updateSeatReservation = DB::Create()->getPDO()->prepare($updateSeatReservation);
			$updateSeatReservation->bindParam(':passengers', $passengers);
			$updateSeatReservation->bindParam(':income', $fare);
			$updateSeatReservation->bindParam(':seat_reservation_id', $seat_reservation_id);
			$updateSeatReservation->execute();*/			

		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


