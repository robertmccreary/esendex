<?php

require_once '/src/Esendex/autoload.php';

$message = new \Esendex\Model\DispatchMessage(
    "WebApp", // Send from
  //"+447730605771", // Send to any valid number
    "07730605771", // Send to any valid number
    "My Web App is SMS enabled!",
   \Esendex\Model\Message::SmsType
);
$authentication = new \Esendex\Authentication\LoginAuthentication(
    "EX0332249", // Your Esendex Account Reference
    "rob.mccreary@stickyeyes.com", // Your login email address
    "36c1c840ba8242468304" // Your API password
);
$service = new \Esendex\DispatchService($authentication);
$result = $service->send($message);
print $result->id();
print $result->uri();