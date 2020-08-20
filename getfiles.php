<?php

echo(shell_exec("ls pages/."));
echo(shell_exec("cat pages/* | grep -v php"));

?>
