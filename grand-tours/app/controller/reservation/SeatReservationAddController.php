<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationAddModel;
	use app\view\reservation\SeatReservationAddView;

	class SeatReservationAddController {

		private $_view, $_model;

		public static function Create() : SeatReservationAddController {
			return new SeatReservationAddController;
		}

		public function __construct() {
			$this->_model = SeatReservationAddModel::Create();
			$this->_view = SeatReservationAddView::Create();
		}
		public function __clone() {}

		public function add() 
		{
			return $this->_view->add();
		}

		public function getSeatReservationID() {
			return $this->_view->read();
		}
	}
}

