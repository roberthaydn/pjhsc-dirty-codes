<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationAddModel;

	class SeatReservationAddView {

		private $_model;

		private $_id, 
				$_title, 
				$_destination,
				$_fare,
				$_driver,
				$_date,
				$_passengers;

		public static function Create() : SeatReservationAddView {
			return new SeatReservationAddView;
		}

		private function __construct() {
			$this->_model = SeatReservationAddModel::Create();
		}
		private function __clone() {}

		public function add() 
		{
			return $this->_model->createData();
		}

		public function read() 
		{
			return $this->_model->readData();
		}
	}
}



