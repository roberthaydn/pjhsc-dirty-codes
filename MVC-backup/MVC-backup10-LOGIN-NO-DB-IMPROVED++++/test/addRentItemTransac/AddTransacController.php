<?php
	/**
	*	Serves as the controller for Adding Rent Item.
	*	@version 0.1
	*	@author Abriel I, Ronnel R.
	*/
	class AddRentItemTransacController{
		private $_model;
		private $_view;	
		private $_db;
		/**
		*	Set the model to this controller.
		*	@param AddTransacModel $model (required),
		*		The model that contains the Director, Item and Customer.
		*/
		function setModel($model){
			$this->throwIfNullParam($model);
			$this->_model = $model;
		}
		/**
		*	Set the view to this controller.
		*	@param AddTransacView $view (required),
		*		The view for this controller.
		*/
		function setView($view){
			$this->throwIfNullParam($view);
			$this->_view = $view;
		}
		function getModel(){return $this->_model; }
		function getView(){return $this->_view; }
		/**
		*	Request to add to the rental database.
		*/
		function requestAddTransaction(){
			$this->setDB(new RentalDatabase($this->getModel()));
			$this->getDB()->add();
		}
		/**
		*	Returns the encoded message from the database.
		*	@return (string) Encoded Data from the view.
		*/
		function requestedAddTransactionMessage(){}
		private function getDB(){return $this->_db; }
		private function setDB($db){
			if(!($db instanceof Database)) throw new \Exception('Invalid Argument, not an instance of Database.');
			$this->_db = $db;
		}
		private function throwIfNullParam($param){
			if(is_null($param)){
				throw new \Exception('Parameter must not be null.');
			}
		}
	}