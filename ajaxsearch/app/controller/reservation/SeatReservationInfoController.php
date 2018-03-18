<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationInfoModel;
	use app\view\reservation\SeatReservationInfoView;

	class SeatReservationInfoController {

		private $_view, $_model;

		public static function Create() : SeatReservationInfoController {
			return new SeatReservationInfoController;
		}

		public function __construct() {
			$this->_model = SeatReservationInfoModel::Create();
			$this->_view = SeatReservationInfoView::Create();
		}
		public function __clone() {}

		public function data() 
		{
			return $this->_view->data();
		}

		public function dataForSeatPassengers($id) 
		{
			return $this->_view->dataForSeatPassengers($id);
		}

		public function readDataSaveDelete($data, $id) 
		{
			return $this->_view->readDataSaveDelete($data, $id);
		}

		public function updateDataSaveDel($SaveDel, $id) 
		{
			return $this->_view->updateDataSaveDel($SaveDel, $id);
		}
	}
}

