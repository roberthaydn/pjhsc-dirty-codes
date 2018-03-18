<?php
 
namespace app\model\reservation 
{
	class SeatReservationPassengersModel {

		private $_id, 
				$_seat_reservation_id, 
				$_seat_no,
				$_fare,
				$_account_id,
				$_username,
				$_firstname,
				$_lastname,
				$_destination,
				$_date,
				$_state;

		public static function Create() : SeatReservationPassengersModel {
			return new SeatReservationPassengersModel;
		}

		private function __construct() {}
		private function __clone() {}
		
		/**
		* Create getter and setter for the model data
		*/
		public function getID() : int {return $this->_id;}
		public function getSeatReservationID() {return $this->_seat_reservation_id; }
		public function getSeatNo() : int {return $this->_seat_no; }
		public function getFare() : int {return $this->_fare; }
		public function getAccountID() : int {return $this->_account_id; }
		public function getUsername() : string {return $this->_username; }
		public function getFirstname() : string {return $this->_firstname; }
		public function getLastname() : string {return $this->_lastname; }
		public function getDestination() : string {return $this->_destination; }
		public function getDate() : string {return $this->_date; }
		public function getState() : int {return $this->_state; }

		public function setID($id) {$this->_id = $id; return $this;}
		public function setSeatReservationID($seatReservationID) {$this->_seat_reservation_id = $seatReservationID; return $this;}
		public function setSeatNo($seatNo) {$this->_seat_no = $seatNo; return $this;}
		public function setFare($fare) {$this->_fare = $fare; return $this;}
		public function setAccountID($accountID) {$this->_account_id = $accountID; return $this;}
		public function setUsername($username) {$this->_username = $username; return $this;}
		public function setFirstname($firstname) {$this->_firstname = $firstname; return $this;}
		public function setLastname($lastname) {$this->_lastname = $lastname; return $this;}
		public function setDestination($destination) {$this->_destination = $destination; return $this;}
		public function setDate($date) {$this->_date = $date; return $this;}
		public function setState($state) {$this->_state = $state; return $this;}
	}
}


