<?php

$json = file_get_contents('php://input');
$body = json_decode($json, true);

if (is_null($body) or !isset($body['eventName'])) {
    // When something goes wrong, return an invalid status code
    // such as 400 BadRequest.
    header('HTTP/1.1 400 Bad Request');
    return;
}

switch ($body['eventName']) {
    case 'order.completed':
        // This is an order:completed event
        // do what needs to be done here.
		
		
		$to = "joeldobbinsdesigns@gmail.com";
		$subject = "ThinkZion: New Order";

		$message = "
		<html>
		<head>
		<title>HTML email</title>
		</head>
		<body>
		<p>Joel testing { content.creationDate }</p>
		<table>
		<tr>
		<th>Firstname</th>
		<th>Lastname</th>
		</tr>
		<tr>
		<td>John</td>
		<td>Doe</td>
		</tr>
		</table>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <webmaster@example.com>' . "\r\n";
		$headers .= 'Cc: myboss@example.com' . "\r\n";

		mail($to,$subject,$message,$headers);
		
		
		
        break;
}

// Return a valid status code such as 200 OK.
header('HTTP/1.1 200 OK');