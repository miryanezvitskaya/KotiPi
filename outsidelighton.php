<?php
        system("gpio -g mode 22 out");
        system("gpio -g write 22 0");
        sleep(1);
        system("gpio -g write 22 1");

?>


