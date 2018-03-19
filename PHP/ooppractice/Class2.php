<?php 

require_once('Class1.php');

class Class2 {

	private $_class1;

	public function getData() {
		return $this->_class1->getHello();
	}

	public function setData($data) {
		$this->_class1->setHello($data);
	}

	public function __construct() {
		$this->_class1 = new Class1();
	}
}

$class = new Class2();
$class->setData('Hello World');
echo $class->getData();
