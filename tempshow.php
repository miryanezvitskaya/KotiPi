<?php

	$file = '/sys/devices/w1_bus_master1/28-00043d47caff/w1_slave';
	$lines = file($file);
	$temp = explode('=', $lines[1]);
	$temp = number_format($temp[1] / 1000, 1, ',', '');
	echo $temp . " C";
?>
