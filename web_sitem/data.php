<?php

$usersJson = file_get_contents('$usersJson.json');
return json_decode($usersJson, true);
