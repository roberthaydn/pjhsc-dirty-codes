<?php
	/**
	*	Serves as the view module for adding items.
	*	@version 0.1
	*	@author Abriel I, Ronnel R.
	*/
	class AddInventoryView{
		/**
		*	Encodes a message to be presented to the callee.
		*/
		function encodeAddingMessage($message){
			$this->setAddingMessage($message); }
		/**
		*	The Encoded Adding Message
		*	@return string
		*/
		function getEncodedAddingMessage(){return $this->_message." added."; }
		/**
		*	Sets the Adding Message.
		*/
		private function setAddingMessage($message){$this->_message = $message; }
		private $_message;
	}