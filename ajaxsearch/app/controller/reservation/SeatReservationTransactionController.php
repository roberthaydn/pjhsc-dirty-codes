<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationTransactionModel;
	use app\view\reservation\SeatReservationTransactionView;

	class SeatReservationTransactionController {

		private $_view, $_model;

		public static function Create() : SeatReservationTransactionController {
			return new SeatReservationTransactionController;
		}

		public function __construct() {
			$this->_model = SeatReservationTransactionModel::Create();
			$this->_view = SeatReservationTransactionView::Create();
		}
		public function __clone() {}

		public function transac($dataArr) 
		{
			return $this->_view->transac($dataArr);
		}
	}
}

