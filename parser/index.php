<?php
require_once('Parser.php');

$a = new Parser('src/table.xml');
print_r($a->parse());

$b = new Parser('src/table.yml');
print_r($b->parse());

$c = new Parser('src/table.csv');
print_r($c->parse());

