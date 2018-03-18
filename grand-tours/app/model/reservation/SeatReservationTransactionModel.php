<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\model\reservation\SeatReservationPassengersModel;
	use app\lib\validation\factory\Input;

	class SeatReservationTransactionModel {

		private $_model;

		public static function Create() : SeatReservationTransactionModel {
			return new SeatReservationTransactionModel;
		}

		private function __construct() {
			$this->_model = SeatReservationPassengersModel::Create();
		}
		private function __clone() {}

		/*
		* transacSQL REQUEST
		* Transaction between reservation added by admin and the user client
		*/
		public function transac($dataArr) {

			//user info
			$accountID 				= $dataArr[0]; //[0]
			$accountUsername 		= $dataArr[1]; //[1]
			$accountFirstname 		= $dataArr[2]; //[2]
			$accountLastname 		= $dataArr[3]; //[3]
			//seat reservation id
			$seat_reservation_id 	= $dataArr[4]; //[4]
			//fare
			$fare 					= $dataArr[5];
			//state
			$state 					= $dataArr[6];
			//destination
			$destination 			= $dataArr[7];
			//date
			$date 					= $dataArr[8];
			//seat_no
			$seat_no 					= $dataArr[9];
			$passengers = 1;

			$transacSQL = "UPDATE `tbl_seat_reservation_passengers` 
					SET 
					`account_id`=:account_id,
					`username`=:username,
					`firstname`=:firstname,
					`lastname`=:lastname,
					`destination`=:destination,
					`date`=:xdate

					WHERE `seat_reservation_id`=:seat_reservation_id AND `seat_no`=:seat_no";

				//transaction
				$transac = DB::Create()->getPDO()->prepare($transacSQL);	
				$transac->bindParam(':account_id', $accountID);
				$transac->bindParam(':username', $accountUsername);
				$transac->bindParam(':firstname', $accountFirstname);
				$transac->bindParam(':lastname', $accountLastname);
				$transac->bindParam(':destination', $destination);
				$transac->bindParam(':xdate', $date);

				$transac->bindParam(':seat_reservation_id', $seat_reservation_id);
				$transac->bindParam(':seat_no', $seat_no);
				$transac->execute();

				//tbl_seat_reservation
				$updateSeatReservation = "UPDATE `tbl_seat_reservation` 
					SET 
					`passengers`=`passengers`+:passengers,
					`income`=`income`+:income
					WHERE `id`=:seat_reservation_id";

				$updateSeatReservation = DB::Create()->getPDO()->prepare($updateSeatReservation);
				$updateSeatReservation->bindParam(':passengers', $passengers);
				$updateSeatReservation->bindParam(':income', $fare);
				$updateSeatReservation->bindParam(':seat_reservation_id', $seat_reservation_id);
				$updateSeatReservation->execute();

				/*echo '<pre>';
				print_r($transac->errorInfo());
				echo '</pre>';

				echo '*******************<br>';

				echo '<pre>';
				print_r($updateSeatReservation->errorInfo());
				echo '</pre>';
				*/				
		}
		
		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() {throw new \Exception('Not supported yet.');}
		public function readData() {throw new \Exception('Not supported yet.'); }
		public function updateData() {throw new \Exception('Not supported yet.'); }
		public function deleteData() {throw new \Exception('Not supported yet.'); }
	}
}



