<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationPassengersAddModel;
	use app\view\reservation\SeatReservationPassengersAddView;

	class SeatReservationPassengersAddController {

		private $_view, $_model;

		public static function Create() : SeatReservationPassengersAddController {
			return new SeatReservationPassengersAddController;
		}

		public function __construct() {
			$this->_model = SeatReservationPassengersAddModel::Create();
			$this->_view = SeatReservationPassengersAddView::Create();
		}
		public function __clone() {}

		public function add() {
			return $this->_view->add();
		}
	}
}

