<?php
$server		=	"mysql.idhostinger.com";
$username	=	"u300116007_qatur";
$password	=	"2431andi";
$database	=	"u300116007_lylas";

//koneksi dan memilih database di server

mysql_connect($server,$username,$password) or die ("koneksi gagal");
mysql_select_db($database) or die ("Database tidak bisa dibuka");

?>