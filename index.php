<?php

require 'vendor/autoload.php';

use Acme\users\Person;
use Acme\Business;
use Acme\Staff;

$don = new Person('Donald Vida');
$staff = new Staff([$don]);
$vidaweb = new Business($staff);
$vidaweb->hire(new Person('Shawn Dibble'));

var_dump($vidaweb->getStaffMembers());

 ?>
