<!DOCTYPE html>
<html>
<body>
<?php

print("<h2>Programming</h2>");
print("<h2>OOP</h2>");
print("<h2>Homework_2</h2><br>");


abstract class Emailer {
	protected $sender;
	protected $recipients;
	protected $subject;
	protected $body;
	
	function __construct($sender)
	{
		$this->sender = $sender;
		$this->recipients = array();
	}
	
	public function setBody($body){
		$this->body = $body;
		return $this;
	}
	
	public function setSubject($subject){
		$this->subject = $subject;
		return $this;
	}
	
	public function addRecipients($recipient){
		array_push($this->recipients, $recipient);
		return $this;
	}
}


class SendGrid extends Emailer {	
	
	public function sendEmail()
	{
		foreach ($this->recipients as $recipient) {
	    	$result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
	    	echo "SendGrid successfully sent to {$recipient}<br>";
	    	echo "Sender: $this->sender<br>";
	    	echo "Subject: $this->subject<br>";
	    	echo "Content: $this->body<br>";

		}
	}
}

class MailChimp extends Emailer {
	public function sendEmail(){
		foreach ($this->recipients as $recipient) {
			$result = mail($recipient, $this->subject, $this->body, "From: {$this->sender}\r\n");
			echo "MailChimp successfully sent to {$recipient}<br>";
			echo "Sender: $this->sender<br>";
			echo "Subject: $this->subject<br>";
			echo "Content: $this->body<br>";
		}
	}
}


$sgEmailer = new SendGrid("youremail@yourdomain.com");
$sgEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();

$mcEmailer = new MailChimp("youremail@yourdomain.com");
$mcEmailer->addRecipients("emailID@domain.com")->setSubject("Just a Test")->setBody("Hi Name, How are you?")->sendEmail();

?>
</body>
</html>