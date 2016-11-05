<?php
session_start();
if (!$_SESSION['is_admin_login']){
    header('location:../login.php');
}
require_once '../db_connection.php';

require_once 'Admin_class.php';
$dept_object=new Admin_class();
$id=$_GET['id'];
$all_data=$dept_object->delete_department($id);
?>
