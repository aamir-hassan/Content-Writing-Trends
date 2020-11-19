<?php

date_default_timezone_set('America/Los_Angeles');
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$dateour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];


if ($date <= 12 && $month <= 1){
	$vid1 = 'wQGawWqJdfs';
	$vid2 = 'LzWNDXwRbLY';
	$vid3 = 'ZGdOnCiQRpQ';
}
else {
	$vid1 = '79Sd4GtOXuI';
	$vid2 = 'MQEFmHsseaU';
	$vid3 = 'XGk2EfbD_Ps';
}

 if ($_GET["u"]=="imranyt234") {


   class Emp {
      public $vid1 = "";
   }

$e = new Emp();
$e->vid1 = $vid1;
$e->vid2 = $vid2;
$e->vid3 = $vid3;

//if it's before 7am, use fish image
//if not and it's before 8pm, use frogs
//otherwise, potatoes
echo json_encode($e);
 }
?>


