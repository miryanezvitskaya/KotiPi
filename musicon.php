<?php
        system("gpio -g mode 17 out");
        system("gpio -g write 17 0");
        sleep(1);
        system("gpio -g write 17 1");
        exec ('sudo python wakeupon.py');
?>


