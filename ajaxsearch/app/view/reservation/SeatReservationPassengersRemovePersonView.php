<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationPassengersRemovePersonModel;

	class SeatReservationPassengersRemovePersonView {

		private $_model;

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_fare,
				$_account_id,
				$_firstname,
				$_lastname,
				$_date,
				$_state;

		public static function Create() : SeatReservationPassengersRemovePersonView {
			return new SeatReservationPassengersRemovePersonView;
		}

		private function __construct() {
			$this->_model = SeatReservationPassengersRemovePersonModel::Create();
		}
		private function __clone() {}

		public function update($id) 
		{
			return $this->_model->updateData($id);
		}
	}
}



