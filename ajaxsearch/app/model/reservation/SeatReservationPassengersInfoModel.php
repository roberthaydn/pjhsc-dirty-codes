<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\lib\session\Session;
	use app\model\reservation\SeatReservationPassengersModel;
	use app\lib\validation\factory\Input;

	class SeatReservationPassengersInfoModel {

		private $_model;

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_fare,
				$_account_id,
				$_firstname,
				$_lastname,
				$_destination,
				$_date,
				$_state;

		public static function Create() : SeatReservationPassengersInfoModel {
			return new SeatReservationPassengersInfoModel;
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

		public function readData($seat_reservation_id) 
		{
			$sql = "SELECT * FROM `tbl_seat_reservation_passengers` WHERE `seat_reservation_id`=:seat_reservation_id";
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':seat_reservation_id', $seat_reservation_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function readDataPassengersDisableCheckbox($seat_reservation_id, $seat_no) 
		{
			//sql statement
			return (function() use (&$seat_reservation_id, $seat_no) {
				$sql = "SELECT `account_id` FROM `tbl_seat_reservation_passengers` WHERE `seat_reservation_id`=:seat_reservation_id AND `seat_no`=:seat_no";
				$stmt = DB::Create()->getPDO()->prepare($sql);
				$stmt->bindValue(':seat_reservation_id', $seat_reservation_id, PDO::PARAM_INT);
				$stmt->bindValue(':seat_no', $seat_no, PDO::PARAM_INT);
				$stmt->execute();
				$row = $stmt->fetch();
				//fetching data 
				return (function() use (&$row) : int {
						return $row['account_id'];
				})();	
			})();
			//return $seat_reservation_id.' '.$seat_no;
		}

		public function updateData($SaveDel, $seat_reservation_id) 
		{
			if($SaveDel == 'save') 
			{
				$state = 2;
			} 
			else if($SaveDel == 'del')
			{
				$state = 0;
			} 
			
			$sql = "UPDATE `tbl_seat_reservation_passengers` SET `state`=:state WHERE `seat_reservation_id`=:seat_reservation_id";
			$stmt = DB::Create()->getPDO()->prepare($sql);	
			$stmt->bindParam(':seat_reservation_id', $seat_reservation_id);
			$stmt->bindParam(':state', $state);
			
			return $stmt->execute();
		}

		public function deleteData() {
			throw new \Exception('Not supported yet.'); 
		}
	}
}


