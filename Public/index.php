<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Theyagya\FakeFood\FakeFood;

$d = new FakeFood;

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo $d->get();
