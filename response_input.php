<?php
// echo "file testing";
// echo "<br>";
// echo "modul = ".$_GET['modul']."<br>";
// echo "fitur = ".$_GET['fitur']."<br>";
// echo "requesr method :".$_SERVER['REQUEST_METHOD']."<br>";
// print_r($_POST);
// echo "<br>";
// echo "Nama role : ".$_POST['role_name']."<br>";
// echo "Keterangan role : ".$_POST['role_description']."<br>";
// echo "Status role : ".$_POST['role_status']."<br>";

require_once 'domain_object/node_role.php';
$obj_role = [];
$obj_role[] = new Role(1,$_POST['role_name'],$_POST['role_description'],$_POST['role_status']);
include 'Views/role_list.php'
?>