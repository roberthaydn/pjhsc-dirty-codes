<?php
	/**
	*
	* Serves as the abstraction for all accounts.
	*
	* @version 0.1
	* @author Abriel I, Ronnel R.
	*/
	interface Account{

		function setID($id);
		function setUserName($userName);
		function setPlainPassword($plainPassword);

		function getID();
		function getUserName();
		function getPlainPassword();
		function getEncryptedPassword();

        function isNull();
	}	