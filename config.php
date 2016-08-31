<?php

// host,user,passwword,database 

$db = new mysqli("localhost","root","andiramdani","ormawa");

if ($db->connect_errno) {

	echo "koneksi eror mangg " .$db->maxdb_connect_error;
}


?>