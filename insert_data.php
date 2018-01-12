<?php 

$con = mysqli_connect('localhost', 'root', '', 'college');
$con->query("insert into teachers (name, email) values('sarwar', 'sarwar@gmail.com')");
$con->query("insert into teachers (name, email) values('sumon', 'sumon@gmail.com')");
$con->query("insert into teachers (name, email) values('kayes', 'kayes@gmail.com')");
$con->query("insert into teachers (name, email) values('tasnia', 'tasnia@gmail.com')");
$con->query("insert into teachers (name, email) values('nizam', 'nizam@gmail.com')");
