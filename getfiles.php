<?php

echo(shell_exec("ls pages/."));
echo(shell_exec("cat pages/* | sed 's/<?php//g'"));

?>
