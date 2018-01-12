<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query("delete from teachers where id=1");