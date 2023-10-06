<?php
require('app/app.php');

$data = get_data();
$json = get_data();

view('index', ' ');$terms = json_decode($json);

view('index', $terms);