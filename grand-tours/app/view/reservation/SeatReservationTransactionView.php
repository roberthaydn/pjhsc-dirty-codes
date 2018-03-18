<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationTransactionModel;

	class SeatReservationTransactionView {

		private $_model;

		public static function Create() : SeatReservationTransactionView {
			return new SeatReservationTransactionView;
		}

		private function __construct() {
			$this->_model = SeatReservationTransactionModel::Create();
		}
		private function __clone() {}

		public function transac($dataArr) 
		{
			return $this->_model->transac($dataArr);
		}
	}
}



