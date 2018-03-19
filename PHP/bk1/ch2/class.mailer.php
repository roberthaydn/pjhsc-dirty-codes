<?
//class.emailer.php
class Emailer
{
	private $sender;
	private $recipients;
	private $subject;
	private $body;

	function __construct($sender)
	{
		$this->sender = $sender;
		$this->recipients = array();
	}

	public function addRecipients($recipient)
	{
		array_push($this->recipients, $recipient);
	}
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}
	public function setBody($body)
	{
		$this->body = $body;
	}
	public function sendEmail()
	{
		foreach ($this->recipients as $recipient)
		{
			$result = mail($recipient, $this->subject, $this->body,
			"From: {$this->sender}\r\n");
			if ($result) echo "Mail successfully sent to {$recipient}<br/>";
		}
	}
}

$emailerobject = new Emailer("abriel@gmail.com");
$emailerobject->addRecipients("g_abriel11@yahoo.com");
$emailerobject->setSubject("Just a Test");
$emailerobject->setBody("Hi Hasin, How are you?");
$emailerobject->sendEmail();

?>

