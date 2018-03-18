<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationPassengersRemovePersonModel;
	use app\view\reservation\SeatReservationPassengersRemovePersonView;

	class SeatReservationPassengersRemovePersonController {

		private $_view, $_model;

		public static function Create() : SeatReservationPassengersRemovePersonController {
			return new SeatReservationPassengersRemovePersonController;
		}

		public function __construct() {
			$this->_model = SeatReservationPassengersRemovePersonModel::Create();
			$this->_view = SeatReservationPassengersRemovePersonView::Create();
		}
		public function __clone() {}

		public function update($id) 
		{
			return $this->_view->update($id);
		}
	}
}

