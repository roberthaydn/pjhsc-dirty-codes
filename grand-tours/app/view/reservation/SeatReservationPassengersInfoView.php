<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationPassengersInfoModel;

	class SeatReservationPassengersInfoView {

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

		public static function Create() : SeatReservationPassengersInfoView {
			return new SeatReservationPassengersInfoView;
		}

		private function __construct() {
			$this->_model = SeatReservationPassengersInfoModel::Create();
		}
		private function __clone() {}

		public function data($seat_reservation_id) 
		{
			return $this->_model->readData($seat_reservation_id);
		}

		public function dataPassengersDisableCheckbox($seat_reservation_id, $seat_no) 
		{
			return $this->_model->readDataPassengersDisableCheckbox($seat_reservation_id, $seat_no);
		}

		public function updatePassengersDataSaveDel($SaveDel, $seat_reservation_id) 
		{
			return $this->_model->updateData($SaveDel, $seat_reservation_id);
		}

	}
}



