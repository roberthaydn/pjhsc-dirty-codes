<?php
class ExtendedArrayObject extends ArrayObject {
	
	private $_array;
	public function __construct()
	{
		if (is_array(func_get_arg(0)))
		$this->_array = func_get_arg(0);
		else
		$this->_array = func_get_args();
		parent::__construct($this->_array);
	}

	public function each($callback)
	{
		$iterator = $this->getIterator();
		while($iterator->valid())
		{
			$callback($iterator->current());
			$iterator->next();
		}
	}

	public function without()
	{
		$args = func_get_args();
		return array_values(array_diff($this->_array,$args));
	}

	public function first()
	{
		return $this->_array[0];
	}

	public function indexOf($value)
	{
		return array_search($value,$this->_array);
	}

	public function inspect()
	{
		echo "<pre>".print_r($this->_array, true)."</pre>";
	}

	public function last()
	{
		return $this->_array[count($this->_array)-1];
	}

	public function reverse($applyToSelf=false)
	{
		if (!$applyToSelf)
			return array_reverse($this->_array);
		else
		{
			$_array = array_reverse($this->_array);
			$this->_array = $_array;
			parent::__construct($this->_array);
			return $this->_array;
		}
	}

	public function shift()
	{
		$_element = array_shift($this->_array);
		parent::__construct($this->_array);
		return $_element;
	}
	public function pop()
	{
		$_element = array_pop($this->_array);
		parent::__construct($this->_array);
		return $_element;
	}
}

function speak($value)
{
	echo $value;
}
$newArray = new ExtendedArrayObject(array(1,2,3,4,5,6));
/* or you can use this */
$newArray = new ExtendedArrayObject(1,2,3,4,5,6);
$newArray->each(speak); //pass callback for loop
print_r($newArray->without(2,3,4)); //subtract
$newArray->inspect(); //display the array in a nice manner
echo $newArray->indexOf(5); //position by value
print_r($newArray->reverse()); //reverse the array
print_r($newArray->reverse(true)); /*for changing array itself*/
echo $newArray->shift();//shifts the first value of the array
//and returns it
echo $newArray->pop();// pops out the last value of array
echo $newArray->last();
echo $newArray->first(); //the first element

?>



