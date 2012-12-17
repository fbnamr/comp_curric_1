<?php

mysql_conect("localhost", "root", "raceday13") or
die(mysql_error());

$sql ="INSERT INTO comtacts (name, email, message, created") VALUES ('Fabiano Amaro', 'fbnamr@gmail.com', 'this is a cool message', NOW()");

mysql_query($sql) or die (mysql_error());

mysql_close();


