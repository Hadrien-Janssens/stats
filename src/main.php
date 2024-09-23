<?php
require 'vendor/autoload.php';

use Hadri\Stats\functions\StandardDeviation;

$array = [2,1.8,2.2,2];
echo StandardDeviation::calculate($array);