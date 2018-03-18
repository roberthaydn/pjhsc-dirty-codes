<?php 

namespace app\controller\reservation
{
	use app\model\reservation\SeatReservationSearchRecordsModel;
	use app\view\reservation\SeatReservationSearchRecordsView;

	class SeatReservationSearchRecordsController {

		private $_view, $_model;

		public static function Create() : SeatReservationSearchRecordsController {
			return new SeatReservationSearchRecordsController;
		}

		public function __construct() {
			$this->_model = SeatReservationSearchRecordsModel::Create();
			$this->_view = SeatReservationSearchRecordsView::Create();
		}
		public function __clone() {}

		public function search($keyword, $filter) {
			return $this->_view->search($keyword, $filter);
		}

		public function searchRetrieve($dataArr = array()) 
		{
			return $this->_view->searchRetrieve($dataArr);
		}

		public function updateSearch() {
			return $this->_view->updateSearch();
		}

		public function updateFilter() {
			return $this->_view->updateFilter();
		}

		public function searchDefault() {
			return $this->_view->searchDefault();
		}
	}
}

