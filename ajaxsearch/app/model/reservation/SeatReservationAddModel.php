<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\reservation\SeatReservationModel;
	use app\lib\validation\factory\Input;

	class SeatReservationAddModel {

		private $_model;

		private $_id, 
				$_vehicle, 
				$_destination,
				$_schedule,
				$_fare,
				$_driver,
				$_date,
				$_passengers,
				$_income,
				$_state;

		public static function Create() : SeatReservationAddModel {
			return new SeatReservationAddModel;
		}

		private function __construct() {
			$this->_model = SeatReservationModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() 
		{
			$sql = "INSERT INTO `tbl_seat_reservation` SET 
 					 `vehicle`=:vehicle,
 					 `destination`=:destination,
 					 `schedule`=:schedule,
 					 `fare`=:fare,
 					 `driver`=:driver,
 					 `date`=:hdate,
 					 `passengers`=:hpassengers,
 					 `income`=:income,
 					 `state`=:state";

 			$stmt = DB::Create()->getPDO()->prepare($sql);	

 			if(Input::IsIssetPost('vehicle')) {
 				
 				$schedDate = Input::Post('schedDate');
 				$schedTime = Input::Post('schedTime');
 				$schedAmPm = Input::Post('schedAmPm');
 				$schedule = $schedDate.$schedTime.$schedAmPm; 

	 			@$this->_vehicle 		= 	$this->_model->setVehicle(Input::Post('vehicle'))->getVehicle();	
	 			@$this->_destination 	= 	$this->_model->setDestination(Input::Post('destination'))->getDestination();
	 			@$this->_schedule 		= 	$this->_model->setSchedule($schedule)->getSchedule();
	 			@$this->_fare 			= 	$this->_model->setFare(Input::Post('fare'))->getFare();
	 			@$this->_driver 		= 	$this->_model->setDriver(Input::Post('driver'))->getDriver();
	 			@$this->_date 			=	$this->_model->setDate(Input::Post('hdate'))->getDate();
	 			@$this->_passengers		= 	$this->_model->setPassengers(Input::Post('hpassengers'))->getPassengers();
	 			@$this->_income			= 	$this->_model->setIncome('0')->getIncome();
	 			@$this->_state			= 	$this->_model->setState('1')->getState();

	 			if($this->_vehicle == '') $this->_vehicle = 'empty';
				if($this->_driver == '') $this->_driver = 'empty';

				$stmt->bindParam(':vehicle', $this->_vehicle);
				$stmt->bindParam(':destination', $this->_destination); 
				$stmt->bindParam(':schedule', $this->_schedule); 
				$stmt->bindParam(':fare', $this->_fare); 
				$stmt->bindParam(':driver', $this->_driver);
				$stmt->bindParam(':hdate', $this->_date); 
				$stmt->bindParam(':hpassengers', $this->_passengers);
				$stmt->bindParam(':income', $this->_income);
				$stmt->bindParam(':state', $this->_state);
				
				$stmt->execute();
			}
		}

		public function readData() 
		{
			//find the last row of tbl_seat_reservation records and get the ID
			$sql = "SELECT `Id` FROM `tbl_seat_reservation` ORDER BY `Id` DESC Limit 1";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch();		
			$id = $this->_model->setID($row['Id'])->getID();
			return $id=$id+1;
		}

		public function updateData() {
			throw new \Exception('Not supported yet.'); 
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


