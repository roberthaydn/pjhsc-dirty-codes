<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationPassengersAddModel;

	class SeatReservationPassengersAddView {

		private $_model;

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_account_id,
				$_firstname,
				$_lastname,
				$_date,
				$_active;

		public static function Create() : SeatReservationPassengersAddView {
			return new SeatReservationPassengersAddView;
		}

		private function __construct() {
			$this->_model = SeatReservationPassengersAddModel::Create();
		}
		private function __clone() {}

		public function add() 
		{
			return $this->_model->createData();
		}
	}
}



