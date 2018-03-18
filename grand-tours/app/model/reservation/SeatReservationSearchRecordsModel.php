<?php 

namespace app\model\reservation 
{
	use \PDO;
	use app\db\connection\DB;
	use app\model\reservation\SeatReservationModel;
	use app\lib\validation\factory\Input;

	class SeatReservationSearchRecordsModel {

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

		public static function Create() : SeatReservationSearchRecordsModel {
			return new SeatReservationSearchRecordsModel;
		}

		private function __construct() {
			$this->_model = SeatReservationModel::Create();
		}
		private function __clone() {}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function searchData($keyword, $filter) {
			$sql = "SELECT * FROM `tbl_seat_reservation` WHERE {$filter} LIKE :keyword";
			$search = DB::Create()->getPDO()->prepare($sql);
			$search->bindValue(':keyword','%'.$keyword.'%');
			$search->execute();

			if($search->rowCount() == null) {
				die ('<div style="padding-bottom:15px;font-weight:500;font-size:14px;">No results were found!</a></div>');			
			}  
			return $search->fetchAll(PDO::FETCH_ASSOC);
			//return '<tr><td colspan="8" class="seat-reservation">Results not found!</td></tr>';
		}

		public function retrieveData($dataArr = array()) {
			$sql = "SELECT * FROM `tbl_seat_reservation_search` WHERE `id`=:id";
			$Id = 1;
			$stmt = DB::Create()->getPDO()->prepare($sql);
			$stmt->bindValue(':id', $Id, PDO::PARAM_INT);
			$stmt->execute();
			$row = $stmt->fetch();
			return $row[$dataArr];
		}

		public function updateSearch() {
			$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `search`=:search
					  WHERE `id`=:id";

			$stmt = DB::Create()->getPDO()->prepare($sql);

			if(Input::IsIssetPost('search')) {
				$search = Input::Post('search');
				$Id = 1;

				($search=='') ? $search='***' : null;

				$stmt->bindParam(':search', $search);
				$stmt->bindParam(':id', $Id); 
				$stmt->execute();

				echo '<pre>';
				print_r($stmt->errorInfo());
				echo '</pre>';
			}
		}

		public function updateFilter() {

			$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `filter`=:filter
					  WHERE `id`=:id";

			$stmt = DB::Create()->getPDO()->prepare($sql);

			if(Input::IsIssetPost('filter')) {
				$filter = Input::Post('filter');
				$Id = 1;

				$stmt->bindParam(':filter', $filter);
				$stmt->bindParam(':id', $Id); 
				$stmt->execute();

				echo '<pre>';
				print_r($stmt->errorInfo());
				echo '</pre>';
			}
		}

		public function searchDefault() {
			$sql = "UPDATE `tbl_seat_reservation_search` SET 
					 `search`=:search,
					 `filter`=:filter
					  WHERE `id`=:id";

			$stmt = DB::Create()->getPDO()->prepare($sql);

			$search = '***';
			$filter = 'vehicle';
			$Id = 1;

			$stmt->bindParam(':search', $search);
			$stmt->bindParam(':filter', $filter);
			$stmt->bindParam(':id', $Id); 
			$stmt->execute();
		}

		/**
		* Create, Read(retrieve), Update, Delete
		*/
		public function createData() {throw new \Exception('Not supported yet.');}
		public function readData() {throw new \Exception('not supported yet.');}
		public function readDataForSeatPassengers() {throw new \Exception('not supported yet.');}
		public function deleteData() {throw new \Exception('not supported yet.');}
	}
}


