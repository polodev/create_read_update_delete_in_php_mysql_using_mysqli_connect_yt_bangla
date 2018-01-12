<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query(
"update teachers set email='farhad2@gmail.com' where id=1"
);