<?php
$_dir=__DIR__;
define('env', $_dir);
include(env.'/env.php');


// helpers
include 'vendor/autoload.php';
include '_helpers/helper.php';
include '_helpers/h_form.php';
include '_helpers/h_db.php';
include '_helpers/h_session.php';