<?php
        system("gpio -g mode 27 out");
        system("gpio -g write 27 0");
        sleep(1);
        system("gpio -g write 27 1");
        system("killall cvlc");
?>


