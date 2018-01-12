# create read update delete in php and mysql using mysqli_connect

#### connect with database using mysqli_connect
~~~php
$con = mysqli_connect('localhost', 'root', '', 'fgc');
~~~

#### creating a table using php connection
~~~php
$con->query(
  "create table teacher (
   id  int(11) auto_increment primary key,
   name varchar(30) not null,
   email  varchar(30) not null
  )"
);
~~~

### inserting into database using php connection
~~~php
$con->query("insert into teacher(name, email) values('jb', 'jb@gmail.com') ");
~~~

#### retrieving data from database and extracting table row using `fetch_object` method
~~~php
$teachers = $con->query('select * from teacher');
while($teacher = $teachers->fetch_object()) {
  echo $teacher->name . "\n";
}
~~~
### updating a row in database

~~~php
$con->query(
"update teachers set email='farhad2@gmail.com' where id=1"
);
~~~


### deleting a row from database
~~~php
$con->query("delete from teachers where id=1");
~~~



