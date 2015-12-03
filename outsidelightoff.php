<?php
        system("gpio -g mode 18 out");
        system("gpio -g write 18 0");
        sleep(1);
        system("gpio -g write 18 1");

?>


