<?php

$to1      ='raghu.pathak6@gmail.com';
$subject1 = 'Online Celebration Spot Booking';
$message1 = 'Hello sir/madam, following person has done the registration with following details'."\r\n".
			$name=$_GET["name"];
			$email=$_GET["email"];
			$comment=$_GET["comment"];
			//'name='.$_GET["name"].
			//'email='.$_GET["email"].
			//'comment='.$_GET["comment"].
            //'name='.$_GET["fname"]."\t".$_GET["mname"]."\t".$_GET["lname"]."\r\n".
            //'gender ='.$_GET["mn"]."\r\n".
            //'email ='.$_GET["email"]."\r\n".
            //'Contact ='.$_GET["contact"]."\r\n".
            //'Participant ='.$_GET["desg"]."\r\n".
            //'Role in publication ='.$_GET["role"]."\r\n".
            //'payment ='.$_GET["pm1"]."\r\n".
            //'Institute/Organization ='.$_GET["inst"]."\r\n".
            //'Payment Mode ='.$_GET["paytype"]."\r\n".
            //'DD/Transaction No='.$_GET["ddno"]."\r\n".
            'Thank you very much...';
$headers1 = 'From: support@hgce-montec.com' . "\r\n" .
    'Reply-To: bhupendra_pathak1@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$result1=mail($to1, $subject1, $message1, $headers1);

?>