<?php

include 'bootstrap/Psr4AutoLoad.php';
include 'bootstrap/Start.php';
include 'bootstrap/alias.php';
include 'config/config.php';
$confing = mo();
$base = shu();
Start::router();

