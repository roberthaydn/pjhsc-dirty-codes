<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\reservation\SeatReservationModel;
	use app\lib\validation\factory\Input;

	class SeatReservationInfoModel {

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

		public static function Create() : SeatReservationInfoModel {
			return new SeatReservationInfoModel;
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
			throw new \Exception('Not supported yet.'); 
		}

		public function readData() 
		{
			//throw new \Exception('Not supported yet.'); 
			$sql = "SELECT * FROM `tbl_seat_reservation` ORDER BY `id` DESC";
			$stmt = DB::Create()->getPDO()->query($sql);
			return $stmt->fetchAll();
		}

		public function readDataForSeatPassengers($id) 
		{
			$sql = "SELECT * FROM `tbl_seat_reservation` WHERE `id`=:id";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		//retrieving data from tbl_seat_reservation
		public function readDataSaveDelete($data, $id) {
			//sql statement
			return (function() use (&$data, &$id) {
				$sql = "SELECT {$data} FROM `tbl_seat_reservation` WHERE `id`=:id";
				$stmt = DB::Create()->getPDO()->prepare($sql);
				$stmt->bindValue(':id', $id, PDO::PARAM_STR);
				$stmt->execute();
				$row = $stmt->fetch();
				//fetching data 
				return (function() use (&$data, &$row) : string {
					if($data==='vehicle') 
						return $this->_vehicle = $this->_model->setVehicle($row[$data])->getVehicle();
					 
					if ($data==='destination') 
						return $this->_destination = $this->_model->setDestination($row[$data])->getDestination();

					if ($data==='schedule') 
						return $this->_schedule = $this->_model->setSchedule($row[$data])->getSchedule();

					if ($data==='fare') 
						return $this->_fare = $this->_model->setFare($row[$data])->getFare();

					if ($data==='driver') 
						return $this->_driver = $this->_model->setDriver($row[$data])->getDriver();

					if ($data==='date') 
						return $this->_date = $this->_model->setDate($row[$data])->getDate();

					if ($data==='passengers') 
						return $this->_passengers = $this->_model->setPassengers($row[$data])->getPassengers();

					if ($data==='income') 
						return $this->_income = $this->_model->setIncome($row[$data])->getIncome();

					if ($data==='state') 
						return $this->_state = $this->_model->setState($row[$data])->getState();
				})();	
			})();
		}

		public function updateData($SaveDel, $id) 
		{
			if($SaveDel == 'save') 
			{
				$msg = '<h5 class="txt-top"><span class="msg msg-save"><i class="fa fa-check fa-2"></i> Seat reservation has been saved!</span></h5>';
				$state = 2;
			} 
			else if($SaveDel == 'del')
			{
				$msg = '<h5 class="txt-top"><span class="msg msg-del"><i class="fa fa-minus-circle fa-2"></i> Seat reservation has been deleted!</span></h5>';
				$state = 0;
			} 
			
			$sql = "UPDATE `tbl_seat_reservation` SET `state`=:state WHERE `id`=:id";
			$stmt = DB::Create()->getPDO()->prepare($sql);	
			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':state', $state);
			
			print(@$msg);
			return $stmt->execute();
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


