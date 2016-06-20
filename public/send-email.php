<?php
$request = json_decode(file_get_contents("php://input"));

$email = getenv('EMAIL_ADDRESS');

if ($request) {
  $subject = "Twilio recording received from " . $request['From'] . ". SID: " . $request['AccountSid'];
  $message = "New Twilio recording received.\r\nRecording URL: " . $request['RecordingUrl'] . "\r\nRecording Duration: " . $request['RecordingDuration'] . "\r\nEnding digit: " . $request['Digits'];
  mail($email, $subject, $message)
}
?>
