<?php
 
namespace app\model\reservation 
{
	class SeatReservationModel {

		private $_id, 
				$_vehicle, 
				$_destination,
				$_schedule,
				$_fare,
				$_driver,
				$_date,
				$_passengers,
				$_income,
				$_state;

		public static function Create() : SeatReservationModel {
			return new SeatReservationModel;
		}

		private function __construct() {}
		private function __clone() {}
		
		/**
		* Create getter and setter for the model data
		*/
		public function getID() : int {return $this->_id;}
		public function getVehicle() : string {return $this->_vehicle; }
		public function getDestination() : string {return $this->_destination; }
		public function getSchedule() : string {return $this->_schedule; }
		public function getFare() : int {return $this->_fare; }
		public function getDriver() : string {return $this->_driver; }
		public function getDate() : string {return $this->_date; }
		public function getPassengers() : int {return $this->_passengers; }
		public function getIncome() : int {return $this->_income; }
		public function getState() : int {return $this->_state; }

		public function setID($id) {$this->_id = $id; return $this;}
		public function setVehicle($vehicle) {$this->_vehicle = $vehicle; return $this;}
		public function setDestination($destination) {$this->_destination = $destination; return $this;}
		public function setSchedule($schedule) {$this->_schedule = $schedule; return $this;}
		public function setFare($fare) {$this->_fare = $fare; return $this;}
		public function setDriver($driver) {$this->_driver = $driver; return $this;}
		public function setDate($date) {$this->_date = $date; return $this;}
		public function setPassengers($passengers) {$this->_passengers = $passengers; return $this;}
		public function setIncome($income) {$this->_income = $income; return $this;}
		public function setState($state) {$this->_state = $state; return $this;}
	}
}


