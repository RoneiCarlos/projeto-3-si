<?php
$on = $_POST['on'];
$usr_json = file_get_contents('../data/usuarios.json');
$usrs = json_decode($usr_json);
$usrs[$on]->carrinho = [];
$usrs = json_encode($usrs);
file_put_contents("../data/usuarios.json", $usrs);
?>