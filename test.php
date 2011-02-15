#!/usr/bin/env php
<?php
include_once('config/application.php');

$db = CoughDatabaseFactory::getDatabase('main');

$t1 = new sl_T1();
$t1->setB(time());
$t1->save();

$t1s = new sl_T1_Collection();
$t1s->load();
foreach ($t1s as $t1)
{
	echo $t1->getA() . ' ' . $t1->getB() . "\n";
}