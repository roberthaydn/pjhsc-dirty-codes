<?php

class EmailValidator
{
  public $emails;
  public $validemails;
}

$ev = new EmailValidator();

foreach($ev as $key=>$val)
{
  echo $key."<br/>";
}

?>
