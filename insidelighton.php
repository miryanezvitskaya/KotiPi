<?php
        system("gpio -g mode 23 out");
        system("gpio -g write 23 0");
	sleep(1);
        system("gpio -g write 23 1");
/*	system("cvlc --x11-display :0 RadioTunes-RootsReggae.pls &"); */
?>
