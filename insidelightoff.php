<?php
        system("gpio -g mode 24 out");
        system("gpio -g write 24 0");
	sleep(1);
	system("gpio -g write 24 1");
?>
