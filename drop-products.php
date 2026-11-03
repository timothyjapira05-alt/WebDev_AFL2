<?php
$db = new PDO('sqlite:database/database.sqlite');
$db->exec('DROP TABLE IF EXISTS products');
echo 'Table products dropped (or did not exist).' . PHP_EOL;

