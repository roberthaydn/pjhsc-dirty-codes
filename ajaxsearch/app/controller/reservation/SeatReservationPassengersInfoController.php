<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationPassengersInfoModel;
	use app\view\reservation\SeatReservationPassengersInfoView;

	class SeatReservationPassengersInfoController {

		private $_view, $_model;

		public static function Create() : SeatReservationPassengersInfoController {
			return new SeatReservationPassengersInfoController;
		}

		public function __construct() {
			$this->_model = SeatReservationPassengersInfoModel::Create();
			$this->_view = SeatReservationPassengersInfoView::Create();
		}
		public function __clone() {}

		public function getData($seat_reservation_id) 
		{
			return $this->_view->data($seat_reservation_id);
		}

		public function getDataPassengersDisableCheckbox($seat_reservation_id, $seat_no) 
		{
			return $this->_view->dataPassengersDisableCheckbox($seat_reservation_id, $seat_no);
		}

		public function updatePassengersDataSaveDel($SaveDel, $seat_reservation_id) 
		{
			return $this->_view->updatePassengersDataSaveDel($SaveDel, $seat_reservation_id);
		}
	}
}

