<?php

define("db_SERVER", "localhost");
define("db_USER", "root");
define("db_PASSWORD", "");
define("db_DBNAME", "project");


$con = mysqli_connect(db_SERVER, db_USER, db_PASSWORD, db_DBNAME);


if (!$con) {
    die(' call failed : ' . mysqli_connect_error());
}


$result = mysqli_query($con, "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'project'");
if (mysqli_num_rows($result) == 0) {
    die('قاعدة البيانات "aliproject" غير موجودة.');
}


?>
