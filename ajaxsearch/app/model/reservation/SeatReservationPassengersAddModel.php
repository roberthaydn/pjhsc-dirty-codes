<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\reservation\SeatReservationPassengersModel;
	use app\lib\validation\factory\Input;

	class SeatReservationPassengersAddModel {

		private $_model;

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_fare,
				$_account_id,
				$_firstname,
				$_lastname,
				$_date,
				$_destination,
				$_state;

		public static function Create() : SeatReservationPassengersAddModel {
			return new SeatReservationPassengersAddModel;
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
			//throw new \Exception('Not supported yet.'); 
			$sql = "INSERT INTO `tbl_seat_reservation_passengers` SET 
 					 `seat_reservation_id`=:seat_reservation_id,
 					 `seat_no`=:seat_no,
 					 `fare`=:fare,
 					 `account_id`=:account_id,
 					 `firstname`=:firstname,
 					 `lastname`=:lastname,
 					 `destination`=:destination,
 					 `date`=:xdate,
 					 `state`=:state";

 			$stmt = DB::Create()->getPDO()->prepare($sql);	
 			
 			if(Input::IsIssetPost('hseatreservationid')) 
	 		{
	 			//iterate sql request for 13 times
	 			for ($i=1; $i <= 13; $i++) 
	 			{
		 			@$this->_seat_reservation_id 	=	$this->_model->setSeatReservationID(Input::Post('hseatreservationid'))->getSeatReservationID();
		 			$this->_seat_no 				= 	$this->_model->setSeatNo($i)->getSeatNo();
		 			$this->_fare 					= 	$this->_model->setFare(Input::Post('fare'))->getFare();
		 			$this->_account_id 				=	$this->_model->setAccountID('0')->getAccountID();
		 			$this->_firstname				=	$this->_model->setFirstname('empty')->getFirstname();
		 			$this->_lastname				=	$this->_model->setLastname('empty')->getLastname();
		 			$this->_destination				=	$this->_model->setDestination('empty')->getDestination();
		 			$this->_date					=	$this->_model->setDate('empty')->getDate();
		 			$this->_state					=	$this->_model->setState('1')->getState();

		 			$stmt->bindParam(':seat_reservation_id', $this->_seat_reservation_id);
		 			$stmt->bindParam(':seat_no', $this->_seat_no);
		 			$stmt->bindParam(':fare', $this->_fare);
		 			$stmt->bindParam(':account_id', $this->_account_id);
		 			$stmt->bindParam(':firstname', $this->_firstname);
		 			$stmt->bindParam(':lastname', $this->_lastname);
		 			$stmt->bindParam(':destination', $this->_destination);
		 			$stmt->bindParam(':xdate', $this->_date);
		 			$stmt->bindParam(':state', $this->_state);		 
	 				$stmt->execute();
	 			}
	 		}		
		}

		public function readData() 
		{
			throw new \Exception('Not supported yet.'); 
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


