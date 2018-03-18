<?php

namespace app\view\reservation 
{
	use app\model\reservation\SeatReservationSearchRecordsModel;

	class SeatReservationSearchRecordsView {

		private $_model;

		public static function Create() : SeatReservationSearchRecordsView {
			return new SeatReservationSearchRecordsView;
		}

		private function __construct() {
			$this->_model = SeatReservationSearchRecordsModel::Create();
		}
		private function __clone() {}

		public function search($keyword, $filter) {
			return $this->_model->searchData($keyword, $filter);
		}

		public function searchRetrieve($dataArr = array()) 
		{
			return $this->_model->retrieveData($dataArr);
		}

		public function updateSearch() {
			return $this->_model->updateSearch();
		}

		public function updateFilter() {
			return $this->_model->updateFilter();
		}

		public function searchDefault() {
			return $this->_model->searchDefault();
		}
	}
}



