<?php

if ($_POST['passwd'] == "Rimouski"){
	echo json_encode(array('verif' => 'YES', 'password' => "pass: GoodPassword"));
} else {
	echo json_encode(array('verif' => 'NOP', 'password' => ""));
}
?>