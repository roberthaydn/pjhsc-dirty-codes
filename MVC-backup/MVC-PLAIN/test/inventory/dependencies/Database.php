<?php
	/**
  	* @version: 0.1
  	* @author: Abriel, Ronnel
  	*/
	interface Database{
		function add();
		function delete();
		function update();
		function get($obj);
	}