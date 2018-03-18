<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationInfoModel;

	class SeatReservationInfoView {

		private $_model;

		private $_id, 
				$_vehicle, 
				$_destination,
				$_fare,
				$_driver,
				$_date,
				$_passengers,
				$_state;

		public static function Create() : SeatReservationInfoView {
			return new SeatReservationInfoView;
		}

		private function __construct() {
			$this->_model = SeatReservationInfoModel::Create();
		}
		private function __clone() {}

		public function data() 
		{
			return $this->_model->readData();
		}

		public function dataForSeatPassengers($id) 
		{
			return $this->_model->readDataForSeatPassengers($id);
		}

		public function readDataSaveDelete($data, $id) 
		{
			return $this->_model->readDataSaveDelete($data, $id);
		}

		public function updateDataSaveDel($SaveDel, $id) 
		{
			return $this->_model->updateData($SaveDel, $id);
		}
	}
}



