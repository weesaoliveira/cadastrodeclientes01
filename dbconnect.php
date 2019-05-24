<?php
$servername = "sql302.epizy.com";
$username = "epiz_23954603";
$password = "6bYom8EbJrl3ebV";
$db_name = "epiz_23954603_crude";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro de conexão:".mysqli_connect_error();
endif;